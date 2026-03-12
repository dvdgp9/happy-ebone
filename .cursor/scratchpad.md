# Scratchpad: Investigación sobre filtros de completitud en estadísticas

## Background and Motivation
El usuario necesita entender qué implica exactamente marcar "Incluir solamente completos" o "solamente incompletos" en las estadísticas generadas por la aplicación.

Actualización Mar 12 2026, 23:43 UTC+1: se solicita un cambio funcional en los informes de estadísticas para preguntas de respuesta múltiple. Actualmente cada opción muestra el porcentaje de personas que la marcaron, lo que hace que la suma supere el 100%. Se requiere mostrar el peso relativo de cada opción sobre el total de selecciones registradas en esa pregunta.

## Key Challenges and Analysis
- Identificar cómo se define un registro "completo" vs "incompleto" en la base de datos.
- Localizar el código que aplica estos filtros en las consultas SQL de estadísticas.
- Determinar si hay efectos secundarios o dependencias adicionales (ej. fechas de envío, validaciones).
- Localizar la lógica específica de cálculo de porcentajes para preguntas `M` y `P` en estadísticas.
- Mantener intacto el comportamiento del resto de tipos de pregunta y de la fila "Not displayed".

## High-level Task Breakdown
1. **Analizar la lógica de filtrado**: Revisar `application/helpers/userstatistics_helper.php` y `application/controllers/admin/Statistics.php` para ver cómo se construyen las queries. (En progreso)
2. **Definir criterios de completitud**: Confirmar que se basa únicamente en el campo `submitdate`.
3. **Documentar hallazgos**: Explicar al usuario el impacto técnico de cada opción.
4. **Ajustar porcentajes en multirrespuesta**: Cambiar el cálculo de porcentaje en `application/helpers/admin/statistics_helper.php` para que las opciones de preguntas múltiples usen como denominador el total de selecciones válidas de la propia pregunta. Éxito: la suma de porcentajes de opciones marcadas sea 100% para la pregunta, salvo filas auxiliares como "Not displayed".

## Project Status Board
- [x] Búsqueda inicial de términos clave ("completos", "incompletos", "statistics").
- [/] Análisis detallado del código de filtrado.
- [ ] Conclusión y respuesta al usuario.
- [x] Localizada la lógica de porcentaje de preguntas múltiples en `application/helpers/admin/statistics_helper.php`.
- [x] Ajuste del denominador para preguntas `M`/`P` completado.
- [ ] Validación manual del nuevo comportamiento en informe de estadísticas.

## Executor's Feedback or Assistance Requests
- Se ha identificado que para preguntas múltiples (`QT_M_MULTIPLE_CHOICE` y `QT_P_MULTIPLE_CHOICE_WITH_COMMENTS`) el helper recalcula el porcentaje usando como base el número de respuestas/casos contestados (`$results - $multiNotDisplayed`). Esto produce sumas superiores al 100% cuando una persona marca varias opciones.
- Voy a modificar únicamente ese cálculo para que use la suma de selecciones (`array_sum($grawdata)` antes de añadir filas auxiliares) como denominador de las opciones.
- Implementación realizada en los dos bloques equivalentes del helper de estadísticas. Ahora, para preguntas múltiples, cada opción usa como denominador el total de selecciones marcadas de la pregunta.
- Pendiente de validación manual por parte del usuario: comprobar en un informe con multirrespuesta que la suma de los porcentajes de opciones seleccionables da 100% aproximado (salvo diferencias de redondeo) y que la fila "Not displayed" mantiene su comportamiento actual.

## Lessons
- En estadísticas de preguntas múltiples, `TotalCompleted`/conteos por opción representan selecciones acumuladas, no personas únicas; usar número de casos como denominador genera porcentajes no aditivos.

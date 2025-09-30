<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./subviews/print/print_question.twig */
class __TwigTemplate_69f24dadb6b40b3df1eaa727d77d49ad8b0a7c7f24b6e971f1827d28e1e2f2f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"question";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "qid", [], "any", false, false, true, 1), 1, $this->source);
        yield "\" class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "class", [], "any", false, false, true, 1), 1, $this->source);
        yield " question-wrapper\">
    <div class=\"q-text\">
        <h3>";
        // line 3
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "number", [], "any", false, false, true, 3), 3, $this->source);
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "code", [], "any", false, false, true, 3)) ? ((("[" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "code", [], "any", false, false, true, 3), 3, $this->source)) . "]")) : (""));
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "text", [], "any", false, false, true, 3), 3, $this->source);
        yield "
            <span class=\"mandatory\">";
        // line 4
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "mandatory", [], "any", false, false, true, 4), 4, $this->source);
        yield "</span>
        </h3>
        <p class=\"q-scenaria\">";
        // line 6
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "scenario", [], "any", false, false, true, 6), 6, $this->source);
        yield "</p>
        <p class=\"q-type-help\">";
        // line 7
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "type_help", [], "any", false, false, true, 7), 7, $this->source);
        yield "</p>
        <p class=\"q-man-message\">";
        // line 8
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "man_message", [], "any", false, false, true, 8), 8, $this->source);
        yield "</p>
        <p class=\"q-validation\">";
        // line 9
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "valid_message", [], "any", false, false, true, 9), 9, $this->source);
        yield "</p>
        <p class=\"q-fvalidation\">";
        // line 10
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "file_valid_message", [], "any", false, false, true, 10), 10, $this->source);
        yield "</p>
    </div>
    <div class=\"q-answer\">
        ";
        // line 13
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "answer", [], "any", false, false, true, 13), 13, $this->source);
        yield "
    </div>
    <div class=\"q-help\">
        ";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "help", [], "any", false, false, true, 16), 16, $this->source);
        yield "
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/print/print_question.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 16,  82 => 13,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  55 => 4,  48 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/print/print_question.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/survey/fruity_twentythree/views/subviews/print/print_question.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

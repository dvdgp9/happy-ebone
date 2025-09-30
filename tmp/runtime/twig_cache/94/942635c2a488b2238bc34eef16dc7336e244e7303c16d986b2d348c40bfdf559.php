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

/* /survey/questions/answer/multiplechoice/answer.twig */
class __TwigTemplate_917d8d4909833baf2d80b5172f7b7c840ee5700c9060447e3a0e3cc7d0e62052 extends Template
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
        // line 11
        yield "<!-- Multiple Choice -->

<!-- answer -->
";
        // line 15
        yield "<input type=\"hidden\" name=\"MULTI";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 15, $this->source);
        yield "\" value=\"";
        yield $this->sandbox->ensureToStringAllowed(($context["anscount"] ?? null), 15, $this->source);
        yield "\" />
<div class=\"";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 16, $this->source);
        yield " row\" role=\"group\" aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 16, $this->source);
        yield "\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aRows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
            // line 18
            yield "        ";
            if (((0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 18) % ($context["iMaxRowsByColumn"] ?? null)) && (0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 18), 0)))) {
                // line 19
                yield "            </ul>
            <ul class=\"list-unstyled col-12 col-md-";
                // line 20
                yield $this->sandbox->ensureToStringAllowed(($context["iColumnWidth"] ?? null), 20, $this->source);
                yield "\">
        ";
            }
            // line 22
            yield "
        ";
            // line 23
            $context["rowTemplate"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["aRow"], "other", [], "any", false, false, true, 23)) ? ("./survey/questions/answer/multiplechoice/rows/answer_row_other.twig") : ("./survey/questions/answer/multiplechoice/rows/answer_row.twig"));
            // line 24
            yield "        ";
            yield from             $this->loadTemplate(($context["rowTemplate"] ?? null), "/survey/questions/answer/multiplechoice/answer.twig", 24)->unwrap()->yield(CoreExtension::merge($context, $context["aRow"]));
            // line 25
            yield "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "<!-- end of answer -->
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/multiplechoice/answer.twig";
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
        return array (  109 => 27,  94 => 25,  91 => 24,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  75 => 18,  58 => 17,  52 => 16,  45 => 15,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/multiplechoice/answer.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/question/image_select-multiplechoice/survey/questions/answer/multiplechoice/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 17, "if" => 18, "set" => 23, "include" => 24);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
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

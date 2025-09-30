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

/* /survey/questions/answer/list_dropdown/answer.twig */
class __TwigTemplate_9198d59322c14182437771fcd3a1c2016b8b16549d4012e5e913359f32cc1b77 extends Template
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
        // line 15
        yield "
<!-- List Dropdown -->

<!-- answer-->
<div class=\"mb-3 row g-1 align-items-center ";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 19, $this->source);
        yield "\">
    <div class=\"col-auto\">
        <select
                class=\"form-select form-control list-question-select\"
                name=\"";
        // line 23
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 23, $this->source);
        yield "\"
                id=\"answer";
        // line 24
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 24, $this->source);
        yield "\"
                ";
        // line 25
        if (($context["dropdownSize"] ?? null)) {
            yield " size=";
            yield $this->sandbox->ensureToStringAllowed(($context["dropdownSize"] ?? null), 25, $this->source);
            yield " ";
        }
        // line 26
        yield "                aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 26, $this->source);
        yield "\"
        >
                ";
        // line 29
        yield "                ";
        yield $this->sandbox->ensureToStringAllowed(($context["sOptions"] ?? null), 29, $this->source);
        yield "
        </select>
    </div>
        ";
        // line 33
        yield "        ";
        yield $this->sandbox->ensureToStringAllowed(($context["sOther"] ?? null), 33, $this->source);
        yield "

    ";
        // line 36
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 36), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 36, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["name"] ?? null), 37, $this->source)), "disabled" => "disabled"]], "method", false, false, true, 36), 36, $this->source);
        // line 40
        yield "
</div>
<!-- end of answer  -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/answer.twig";
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
        return array (  90 => 40,  88 => 37,  86 => 36,  80 => 33,  73 => 29,  67 => 26,  61 => 25,  57 => 24,  53 => 23,  46 => 19,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/list_dropdown/answer.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/answer/list_dropdown/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

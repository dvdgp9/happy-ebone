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

/* /survey/questions/answer/listradio/rows/answer_row.twig */
class __TwigTemplate_32bf6a8585173fe3b65d43b43a49b501 extends Template
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
        // line 12
        yield "
";
        // line 13
        $context["button_size_class"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 13) == "default") || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 13)))) ? ("") : (("btn-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 13), 13, $this->source))));
        // line 14
        $context["max_buttons_row"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 14) == "default") || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 14)))) ? ("col-md-2") : (CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 14)));
        // line 15
        yield "
<!-- answer_row -->
<div id=\"javatbd";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 17, $this->source);
        yield "\" class=\"bootstrap-buttons-div col-12 ";
        yield $this->sandbox->ensureToStringAllowed(($context["max_buttons_row"] ?? null), 17, $this->source);
        yield "\">
    <div class=\"form-check col-12 ";
        // line 18
        if ((($context["checkedState"] ?? null) != "")) {
            yield " active ";
        }
        yield "\">
        <input
            class=\"btn-check visually-hidden button-item\"
            type=\"radio\"
            name=\"";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 22, $this->source);
        yield "\"
            id=\"answer";
        // line 23
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 23, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 23, $this->source);
        yield "\"
            value=";
        // line 24
        yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 24, $this->source);
        yield "
            ";
        // line 25
        yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 25, $this->source);
        yield "
        >
        <label class=\"btn btn-primary w-100 ";
        // line 27
        yield $this->sandbox->ensureToStringAllowed(($context["button_size_class"] ?? null), 27, $this->source);
        yield "\" for=\"answer";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 27, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 27, $this->source);
        yield "\"> ";
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null), 27, $this->source));
        yield "
        </label>
    </div>
</div>
<!-- end of answer_row -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row.twig";
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
        return array (  84 => 27,  79 => 25,  75 => 24,  70 => 23,  66 => 22,  57 => 18,  51 => 17,  47 => 15,  45 => 14,  43 => 13,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/question/bootstrap_buttons/survey/questions/answer/listradio/rows/answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 18);
        static $filters = array();
        static $functions = array("processString" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['processString'],
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

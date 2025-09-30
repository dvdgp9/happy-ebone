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

/* /survey/questions/answer/listradio/rows/answer_row_noanswer.twig */
class __TwigTemplate_d28007c6e032a93cdd89d4aa610da4e4e7db999d5d06787b1a87877aa9d12d4d extends Template
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
        // line 10
        yield "
";
        // line 11
        $context["button_size_class"] = ((((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 11), "default")) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 11)))) ? ("") : (("btn-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 11), 11, $this->source))));
        // line 12
        $context["max_buttons_row"] = ((((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 12), "default")) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 12)))) ? ("col-md-2") : (CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 12)));
        // line 13
        yield "
<!-- answer_row_noanswer -->
<div class=\"bootstrap-buttons-div col-12 ";
        // line 15
        yield $this->sandbox->ensureToStringAllowed(($context["max_buttons_row"] ?? null), 15, $this->source);
        yield "\">
    <div id=\"javatbd";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 16, $this->source);
        yield "\" class=\"form-check col-12 ";
        if ((0 !== CoreExtension::compare(($context["check_ans"] ?? null), ""))) {
            yield " active ";
        }
        yield " col-12\">
        <input
            class=\"btn-check visually-hidden button-item\"
            type=\"radio\"
            name=\"";
        // line 20
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 20, $this->source);
        yield "\"
            id=\"answer";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 21, $this->source);
        yield "\"
            value=\"";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 22, $this->source);
        yield "\"
            ";
        // line 23
        yield $this->sandbox->ensureToStringAllowed(($context["check_ans"] ?? null), 23, $this->source);
        yield "
            />
        <label class=\"btn btn-primary w-100 ";
        // line 25
        yield $this->sandbox->ensureToStringAllowed(($context["button_size_class"] ?? null), 25, $this->source);
        yield "\" for=\"answer";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 25, $this->source);
        yield "\">
            <span class=\"\" aria-hidden=\"true\"></span> ";
        // line 26
        yield gT("No answer");
        yield "
        </label>
    </div>
</div>
<!-- endof answer_row_noanswer -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row_noanswer.twig";
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
        return array (  89 => 26,  83 => 25,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  55 => 16,  51 => 15,  47 => 13,  45 => 12,  43 => 11,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row_noanswer.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/question/bootstrap_buttons/survey/questions/answer/listradio/rows/answer_row_noanswer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 16);
        static $filters = array();
        static $functions = array("gT" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['gT'],
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

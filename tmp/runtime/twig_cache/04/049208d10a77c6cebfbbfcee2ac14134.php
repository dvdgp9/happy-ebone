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

/* /survey/questions/answer/listradio/answer.twig */
class __TwigTemplate_c015687225a8ee2fc59860a28cbc27b8 extends Template
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
        // line 9
        yield "
<!-- List Radio -->
<!-- answer -->
";
        // line 12
        yield $this->sandbox->ensureToStringAllowed(($context["sTimer"] ?? null), 12, $this->source);
        yield "
<div class=\"container-fluid\">
    <div class=\"row ";
        // line 14
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 14, $this->source);
        yield " \" data-bs-toggle=\"buttons\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 14, $this->source);
        yield "\">
    ";
        // line 16
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(($context["sRows"] ?? null), 16, $this->source);
        yield "

    ";
        // line 19
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 19), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 20
($context["name"] ?? null), 20, $this->source)), "disabled" => true]], "method", false, false, true, 19), 19, $this->source);
        // line 23
        yield "
    </div>
    ";
        // line 26
        yield "    <div class=\"row row-cols-lg-auto align-items-center mb-3 ls-js-hidden answer-item\" id=\"div";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 26, $this->source);
        yield "other\">
        <label for=\"answer";
        // line 27
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 27, $this->source);
        yield "othertext\" class=\"col-form-label\" id=\"label-id-";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 27, $this->source);
        yield "\">";
        yield $this->sandbox->ensureToStringAllowed(($context["othertext"] ?? null), 27, $this->source);
        yield "</label>
        <div class=\"col-12\">
            <input
            type=\"text\"
            class=\"form-control ";
        // line 31
        yield $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null), 31, $this->source);
        yield " input-sm\"
            id=\"answer";
        // line 32
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 32, $this->source);
        yield "othertext\"
            name=\"";
        // line 33
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 33, $this->source);
        yield "other\"
            >
        </div>
    </div>
</div>
<script>doBootstrapRadioOther();</script>

<!-- end of answer -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/answer.twig";
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
        return array (  94 => 33,  90 => 32,  86 => 31,  75 => 27,  70 => 26,  66 => 23,  64 => 20,  62 => 19,  56 => 16,  50 => 14,  45 => 12,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/answer.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/question/bootstrap_buttons/survey/questions/answer/listradio/answer.twig");
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

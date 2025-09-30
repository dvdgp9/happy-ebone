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
class __TwigTemplate_c7b003759ec60180f5d652e523ac3702780916a32d8b48f9f308bf3d11b0523e extends Template
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
        // line 13
        yield $this->sandbox->ensureToStringAllowed(($context["sTimer"] ?? null), 13, $this->source);
        yield "

<div class=\"";
        // line 15
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 15, $this->source);
        yield " row\" role=\"radio-group\" aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 15, $this->source);
        yield "\">
\t";
        // line 17
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(($context["sRows"] ?? null), 17, $this->source);
        yield "
</div>
<input
    type=\"hidden\"
    name=\"java";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 21, $this->source);
        yield "\"
    id=\"java";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 22, $this->source);
        yield "\"
    value=\"";
        // line 23
        yield $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 23, $this->source);
        yield "\"
    disabled
/>
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
        return array (  73 => 23,  69 => 22,  65 => 21,  57 => 17,  51 => 15,  46 => 13,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/answer.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/question/image_select-listradio/survey/questions/answer/listradio/answer.twig");
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

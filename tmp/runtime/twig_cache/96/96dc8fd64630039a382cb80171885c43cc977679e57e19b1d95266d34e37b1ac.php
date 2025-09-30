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

/* /survey/questions/answer/list_dropdown/rows/othertext.twig */
class __TwigTemplate_dc3f8f2ad55245334bbdd4f5366c2c1adc37eb03c1ec195b09d50989916d8b7e extends Template
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
        yield "<div class=\"col-auto\">
    <label for=\"othertext";
        // line 12
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 12, $this->source);
        yield "\" class=\"visually-hidden\">
        ";
        // line 13
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 13, $this->source));
        yield "
    </label>
</div>
<div class=\"text-item other-text-item col-auto\">
";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 17), "textField", [($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 17, $this->source) . "other"), ($context["value"] ?? null), ["id" => ("othertext" . $this->sandbox->ensureToStringAllowed(        // line 18
($context["name"] ?? null), 18, $this->source)), "class" => "form-control", "aria-labelledby" => (("answer" . $this->sandbox->ensureToStringAllowed(        // line 20
($context["name"] ?? null), 20, $this->source)) . "-oth-")]], "method", false, false, true, 17), 17, $this->source);
        // line 22
        yield "
</div>
<script>
if( \$(\"#answer";
        // line 25
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 25, $this->source);
        yield "\").val() != \"-oth-\" ){
    \$(\"#othertext";
        // line 26
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 26, $this->source);
        yield "\").hide();
}
\$(document).on(\"change\",\"#answer";
        // line 28
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 28, $this->source);
        yield "\", function(){
    if(\$(\"#answer";
        // line 29
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 29, $this->source);
        yield "\").val() != \"-oth-\"){
        \$(\"#othertext";
        // line 30
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 30, $this->source);
        yield "\").hide();
        \$(\"#othertext";
        // line 31
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 31, $this->source);
        yield "\").val(\"\").trigger(\"keyup\");
    }else{
        \$(\"#othertext";
        // line 33
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 33, $this->source);
        yield "\").show();
        \$(\"#othertext";
        // line 34
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 34, $this->source);
        yield "\").focus();
    }
});
</script>
<!-- end of othertext -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/rows/othertext.twig";
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
        return array (  93 => 34,  89 => 33,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  67 => 26,  63 => 25,  58 => 22,  56 => 20,  55 => 18,  54 => 17,  47 => 13,  43 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/list_dropdown/rows/othertext.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/answer/list_dropdown/rows/othertext.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("processString" => 13);

        try {
            $this->sandbox->checkSecurity(
                [],
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

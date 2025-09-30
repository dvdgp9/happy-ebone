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

/* /survey/questions/answer/list_dropdown/rows/option.twig */
class __TwigTemplate_1103e07ea7abdb7487aa2f02017f88c5 extends Template
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
<!-- option -->
<option value='";
        // line 12
        yield $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 12, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(($context["opt_select"] ?? null), 12, $this->source);
        yield " ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["classes"] ?? null))) {
            yield " class=\"";
            yield $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 12, $this->source);
            yield "\" ";
        }
        yield " >
    ";
        // line 13
        yield LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null), 13, $this->source), 1), 1);
        yield "
</option>
<!-- end of option -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/rows/option.twig";
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
        return array (  56 => 13,  44 => 12,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/list_dropdown/rows/option.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/answer/list_dropdown/rows/option.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array();
        static $functions = array("flatString" => 13, "processString" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['flatString', 'processString'],
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

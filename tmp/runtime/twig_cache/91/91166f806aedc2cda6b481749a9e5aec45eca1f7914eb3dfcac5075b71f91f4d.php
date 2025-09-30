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

/* /survey/questions/question_help/help.twig */
class __TwigTemplate_66559532de9d9013cda37e57358c9eab53beba3f29e94ca71343fd7b6834b1a3 extends Template
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
        // line 7
        yield "<div class=\"ls-questionhelp ";
        yield $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 7, $this->source);
        yield "\" role=\"alert\" ";
        if (($context["id"] ?? null)) {
            yield " id=\"";
            yield $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 7, $this->source);
            yield "\" ";
        }
        yield " >
    ";
        // line 8
        yield $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 8, $this->source);
        yield "
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/question_help/help.twig";
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
        return array (  51 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/question_help/help.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/question_help/help.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
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

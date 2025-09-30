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

/* ./survey/questions/answer/5pointchoice/rows/item_row.twig */
class __TwigTemplate_d7eb64e07ec2eb9964b3c5f8a0d301a3 extends Template
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
        // line 14
        yield "
<!-- item_row -->
<li id=\"javatbd";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 16, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 16, $this->source);
        yield "\" class=\"answer-item radio-item ";
        yield $this->sandbox->ensureToStringAllowed(($context["itemExtraClass"] ?? null), 16, $this->source);
        yield "\">
    <input
        type=\"radio\"
        name=\"";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source);
        yield "\"
        id=\"answer";
        // line 20
        yield $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 20, $this->source);
        yield "\"
        value=\"";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 21, $this->source);
        yield "\"
        ";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 22, $this->source);
        yield "
    />
    <label for=\"answer";
        // line 24
        yield $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 24, $this->source);
        yield "\" class=\"control-label radio-label\">";
        yield $this->sandbox->ensureToStringAllowed(($context["labelText"] ?? null), 24, $this->source);
        yield "</label>
</li>
<!-- end of item_row -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./survey/questions/answer/5pointchoice/rows/item_row.twig";
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
        return array (  70 => 24,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  44 => 16,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "./survey/questions/answer/5pointchoice/rows/item_row.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/answer/5pointchoice/rows/item_row.twig");
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

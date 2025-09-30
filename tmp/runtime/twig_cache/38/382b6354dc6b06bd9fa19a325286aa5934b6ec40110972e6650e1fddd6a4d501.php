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
class __TwigTemplate_2ccd3863cc2be67e5ca38015f20c6fb3e06c0ec3f5d34a04d0313d1e2bf1f411 extends Template
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
<!-- answer_row_noanswer -->
<li id='javatbd";
        // line 12
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 12, $this->source);
        yield "' class=\"mb-3 answer-item radio-item no-anwser-item\">
    <input
    type=\"radio\"
    name=\"";
        // line 15
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 15, $this->source);
        yield "\"
    id=\"answer";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 16, $this->source);
        yield "\"
    value=\"\"
    ";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["check_ans"] ?? null), 18, $this->source);
        yield "
    onclick=\"if (document.getElementById('answer";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source);
        yield "othertext') != null) document.getElementById('answer";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source);
        yield "othertext').value='';";
        yield $this->sandbox->ensureToStringAllowed(($context["checkconditionFunction"] ?? null), 19, $this->source);
        yield "(this.value, this.name, this.type)\"
    />
    <label for=\"answer";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 21, $this->source);
        yield "\" class=\"control-label radio-label\">
        ";
        // line 22
        yield gT("No answer");
        yield "
    </label>
</li>
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
        return array (  76 => 22,  72 => 21,  63 => 19,  59 => 18,  54 => 16,  50 => 15,  44 => 12,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row_noanswer.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/question/image_select-listradio/survey/questions/answer/listradio/rows/answer_row_noanswer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("gT" => 22);

        try {
            $this->sandbox->checkSecurity(
                [],
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

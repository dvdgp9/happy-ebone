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

/* /survey/questions/answer/listradio/rows/answer_row_other.twig */
class __TwigTemplate_773f9b81152bf62293a29673db68e27e extends Template
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
        // line 17
        yield "
<!-- answer_row_other -->
<li id='javatbd";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 19, $this->source);
        yield "' class='row answer-item radio-text-item radio-item d-flex' role='group' ";
        yield $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null), 19, $this->source);
        yield " >
        <!-- Checkbox + label -->
        <div class=\"othertext-label-checkox-container  col-auto\">
            <input
            type=\"radio\"
            value=\"-oth-\"
            name=\"";
        // line 25
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 25, $this->source);
        yield "\"
            id=\"SOTH";
        // line 26
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 26, $this->source);
        yield "\"
            ";
        // line 27
        yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 27, $this->source);
        yield "
            />

            <label for=\"SOTH";
        // line 30
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 30, $this->source);
        yield "\" class=\"control-label label-radio\" id=\"label-id-";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 30, $this->source);
        yield "\">";
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["othertext"] ?? null), 30, $this->source));
        yield "</label>
        </div>

        <!-- comment -->
        <div class=\"text-item other-text-item col-auto\">
            <input
            type=\"text\"
            class=\"form-control ";
        // line 37
        yield $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null), 37, $this->source);
        yield " input-sm\"
            id=\"answer";
        // line 38
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 38, $this->source);
        yield "othertext\"
            name=\"";
        // line 39
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 39, $this->source);
        yield "other\"
            title=\"";
        // line 40
        yield LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["othertext"] ?? null), 40, $this->source), 1), 1);
        yield "\"
            ";
        // line 41
        yield $this->sandbox->ensureToStringAllowed(($context["answer_other"] ?? null), 41, $this->source);
        yield "
            aria-labelledby=\"label-id-";
        // line 42
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 42, $this->source);
        yield "\"
            ";
        // line 43
        if (($context["numbers_only"] ?? null)) {
            yield " data-number=\"1\" ";
        }
        // line 44
        yield "            />
        </div>
    <script>
        \$(\"#answer";
        // line 47
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 47, $this->source);
        yield "othertext\").on(\"keyup\",function(){
            if(\$.trim(\$(this).val())!=''){ \$('#SOTH";
        // line 48
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 48, $this->source);
        yield "').click(); };
        });
    </script>
</li>
<!-- end of answer_row_other -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row_other.twig";
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
        return array (  120 => 48,  116 => 47,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  95 => 40,  91 => 39,  87 => 38,  83 => 37,  69 => 30,  63 => 27,  59 => 26,  55 => 25,  44 => 19,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row_other.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/answer/listradio/rows/answer_row_other.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43);
        static $filters = array();
        static $functions = array("processString" => 30, "flatString" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString', 'flatString'],
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

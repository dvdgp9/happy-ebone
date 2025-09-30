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

/* ./survey/questions/answer/multiplechoice/rows/answer_row_other.twig */
class __TwigTemplate_735954536f488f097e618c6b3920589c extends Template
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
        yield "' class='question-item answer-item checkbox-text-item mb-1 ";
        yield $this->sandbox->ensureToStringAllowed(($context["relevanceClass"] ?? null), 19, $this->source);
        yield "'>
    <div class=\"row\">
        <div class=\"col-auto\">
            <!-- Checkbox + label -->
            <div class=\"checkbox-item othertext-label-checkox-container\">
                <!-- checkbox -->
                <input
                    class=\"other-checkbox\"
                    type=\"checkbox\"
                    name=\"";
        // line 28
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 28, $this->source);
        yield "cbox\"
                    id=\"answer";
        // line 29
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 29, $this->source);
        yield "cbox\"
                    ";
        // line 30
        yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 30, $this->source);
        yield "
                    aria-hidden=\"true\"
                />
                <label for=\"answer";
        // line 33
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 33, $this->source);
        yield "cbox\" class=\"checkbox-label control-label answertext\"
                       id=\"label-";
        // line 34
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 34, $this->source);
        yield "-other\">";
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["othertext"] ?? null), 34, $this->source));
        yield "</label>
            </div>
        </div>

        <!-- comment -->
        <div class=\"col-auto\">
            <div class=\"text-item other-text-item\">
                <input
                    class=\"form-control input-sm ";
        // line 42
        yield $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null), 42, $this->source);
        yield "\"
                    type=\"text\"
                    name=\"";
        // line 44
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 44, $this->source);
        yield "\"
                    id=\"answer";
        // line 45
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 45, $this->source);
        yield "\"
                    value=\"";
        // line 46
        yield $this->sandbox->ensureToStringAllowed(($context["sValue"] ?? null), 46, $this->source);
        yield "\"
                    aria-labelledby=\"label-";
        // line 47
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 47, $this->source);
        yield "-other\"
                />
            </div>
        </div>

        <!-- hidden input -->
        <input
            type=\"hidden\"
            name=\"java";
        // line 55
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 55, $this->source);
        yield "\"
            id=\"java";
        // line 56
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 56, $this->source);
        yield "\"
            value=\"";
        // line 57
        yield $this->sandbox->ensureToStringAllowed(($context["sValueHidden"] ?? null), 57, $this->source);
        yield "\"
        />
    </div>
    <script type='text/javascript'>
        \$('#answer";
        // line 61
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 61, $this->source);
        yield "').on('keyup focusout', function (event) {
            if (\$.trim(\$(this).val()).length > 0) {
                \$(\"#answer";
        // line 63
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 63, $this->source);
        yield "cbox\").prop(\"checked\", true);
            } else {
                \$(\"#answer";
        // line 65
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 65, $this->source);
        yield "cbox\").prop(\"checked\", false);
            }
            \$(\"#java";
        // line 67
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 67, $this->source);
        yield "\").val(\$(this).val());
            LEMflagMandOther(\"";
        // line 68
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 68, $this->source);
        yield "\", \$('#answer";
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 68, $this->source);
        yield "cbox').is(\":checked\"));
            ";
        // line 69
        yield $this->sandbox->ensureToStringAllowed(($context["oth_checkconditionFunction"] ?? null), 69, $this->source);
        yield "(this.value, this.name, this.type);
        });

        \$('#answer";
        // line 72
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 72, $this->source);
        yield "cbox').click(function (event) {
            if ((\$(this)).is(':checked') && \$.trim(\$(\"#answer";
        // line 73
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 73, $this->source);
        yield "\").val()).length == 0) {
                \$(\"#answer";
        // line 74
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 74, $this->source);
        yield "\").focus();
                LEMflagMandOther(\"";
        // line 75
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 75, $this->source);
        yield "\", true);
                return false;
            } else {
                \$(\"#answer";
        // line 78
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 78, $this->source);
        yield "\").val('');
                ";
        // line 79
        yield $this->sandbox->ensureToStringAllowed(($context["checkconditionFunction"] ?? null), 79, $this->source);
        yield "(\"\", \"";
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 79, $this->source);
        yield "\", \"text\");
                LEMflagMandOther(\"";
        // line 80
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 80, $this->source);
        yield "\", false);
                return true;
            }
            ;
        });
    </script>
</li> <!-- Form group ; item row -->
<!-- end of answer_row_other -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./survey/questions/answer/multiplechoice/rows/answer_row_other.twig";
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
        return array (  191 => 80,  185 => 79,  181 => 78,  175 => 75,  171 => 74,  167 => 73,  163 => 72,  157 => 69,  151 => 68,  147 => 67,  142 => 65,  137 => 63,  132 => 61,  125 => 57,  121 => 56,  117 => 55,  106 => 47,  102 => 46,  98 => 45,  94 => 44,  89 => 42,  76 => 34,  72 => 33,  66 => 30,  62 => 29,  58 => 28,  44 => 19,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./survey/questions/answer/multiplechoice/rows/answer_row_other.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/answer/multiplechoice/rows/answer_row_other.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("processString" => 34);

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

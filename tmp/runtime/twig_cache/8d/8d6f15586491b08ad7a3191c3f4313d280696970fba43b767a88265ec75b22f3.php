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

/* /survey/questions/answer/listradio/rows/answer_row.twig */
class __TwigTemplate_d92c0ad9dad39e8b593d42f2d0aa16fc76d05acb2ac4472766a592c8603dde91 extends Template
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
        // line 27
        yield "
";
        // line 35
        yield "
<!-- answer_row -->
";
        // line 37
        if (check_absolute_url(($context["answer"] ?? null))) {
            // line 38
            yield "<li id='javatbd";
            yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 38, $this->source);
            yield "' class='question-item answer-item checkbox-item imageselect-listitem ";
            yield $this->sandbox->ensureToStringAllowed(($context["extra_class"] ?? null), 38, $this->source);
            yield "' ";
            yield $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null), 38, $this->source);
            yield " >
    <div class=\"imageselect-container\">
        <input
            class=\"imageselect-checkbox\"
            type=\"radio\"
            name=\"";
            // line 43
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 43, $this->source);
            yield "\"
            id=\"answer";
            // line 44
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 44, $this->source);
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 44, $this->source);
            yield "\"
            value=\"";
            // line 45
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 45, $this->source);
            yield "\"
            ";
            // line 46
            yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 46, $this->source);
            yield "
            onclick='cancelBubbleThis(event); ";
            // line 47
            yield $this->sandbox->ensureToStringAllowed(($context["sCheckconditionFunction"] ?? null), 47, $this->source);
            yield "'
        />
        <label for=\"answer";
            // line 49
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 49, $this->source);
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 49, $this->source);
            yield "\" class=\"imageselect-label\" onclick='cancelBubbleThis(event); ";
            yield $this->sandbox->ensureToStringAllowed(($context["sCheckconditionFunction"] ?? null), 49, $this->source);
            yield "'>

         <img class=\"unforce-height\" src=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null), 51, $this->source), "html_attr");
            yield "\"
         style=\"";
            // line 52
            if ((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "fix_width", [], "any", false, false, true, 52), 1))) {
                yield " 
            width: ";
                // line 53
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "fix_width", [], "any", false, false, true, 53), 53, $this->source);
                yield "px 
            ";
            }
            // line 54
            yield " ";
            if ((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "fix_height", [], "any", false, false, true, 54), 1))) {
                // line 55
                yield "            height: ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "fix_height", [], "any", false, false, true, 55), 55, $this->source);
                yield "px
            ";
            }
            // line 56
            yield "\"/>
        </label>
        <label for=\"answer";
            // line 58
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 58, $this->source);
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 58, $this->source);
            yield "\" class=\"imageselect-radiobutton d-none\"></label>
    </div>
    <input
        type=\"hidden\"
        name=\"java";
            // line 62
            yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 62, $this->source);
            yield "\"
        id=\"java";
            // line 63
            yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 63, $this->source);
            yield "\"
        value=\"";
            // line 64
            yield $this->sandbox->ensureToStringAllowed(($context["sValue"] ?? null), 64, $this->source);
            yield "\"
    />
</li>
<script>
    var imageselectjs_";
            // line 68
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 68, $this->source);
            yield " = new IMAGESELECT(\"";
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 68, $this->source);
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 68, $this->source);
            yield "\", {
        keepAspect: ";
            // line 69
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "keep_aspect", [], "any", false, false, true, 69)) ? ("true") : ("false"));
            yield ", 
        horizontalScroll: ";
            // line 70
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "horizontal_scroll", [], "any", false, false, true, 70)) ? ("true") : ("false"));
            yield ",
        crop_or_resize: ";
            // line 71
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "crop_or_resize", [], "any", false, false, true, 71)) ? (true) : (false));
            yield "
        }); 
</script>
";
        } else {
            // line 76
            yield "<li id='javatbd";
            yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 76, $this->source);
            yield "' class='answer-item radio-item imageselect-container' ";
            yield $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null), 76, $this->source);
            yield " >
    <input
        type=\"radio\"
        value=\"";
            // line 79
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 79, $this->source);
            yield "\"
        name=\"";
            // line 80
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 80, $this->source);
            yield "\"
        id=\"answer";
            // line 81
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 81, $this->source);
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 81, $this->source);
            yield "\"
        ";
            // line 82
            yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 82, $this->source);
            yield "
        onclick=\"if (document.getElementById('answer";
            // line 83
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 83, $this->source);
            yield "othertext') != null) document.getElementById('answer";
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 83, $this->source);
            yield "othertext').value='';checkconditions(this.value, this.name, this.type)\"
     />
    <label for=\"answer";
            // line 85
            yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 85, $this->source);
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 85, $this->source);
            yield "\" class=\"control-label radio-label imageselect-radiobutton\">
        ";
            // line 86
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null), 86, $this->source));
            yield "
    </label>
</li>
";
        }
        // line 90
        yield "<!-- end of answer_row -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row.twig";
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
        return array (  208 => 90,  201 => 86,  196 => 85,  189 => 83,  185 => 82,  180 => 81,  176 => 80,  172 => 79,  163 => 76,  156 => 71,  152 => 70,  148 => 69,  141 => 68,  134 => 64,  130 => 63,  126 => 62,  118 => 58,  114 => 56,  108 => 55,  105 => 54,  100 => 53,  96 => 52,  92 => 51,  84 => 49,  79 => 47,  75 => 46,  71 => 45,  66 => 44,  62 => 43,  49 => 38,  47 => 37,  43 => 35,  40 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/question/image_select-listradio/survey/questions/answer/listradio/rows/answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37);
        static $filters = array("isAbsoluteUrl" => 37, "escape" => 51);
        static $functions = array("processString" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['isAbsoluteUrl', 'escape'],
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

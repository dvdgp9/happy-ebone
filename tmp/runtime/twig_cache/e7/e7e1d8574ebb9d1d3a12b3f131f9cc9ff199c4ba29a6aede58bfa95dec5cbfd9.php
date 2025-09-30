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

/* ./survey/questions/answer/multiplechoice/rows/answer_row.twig */
class __TwigTemplate_97c8abfaa5dbc44b504231e99644000d57dcfa0345783e9931db7d2c10163a5c extends Template
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
<li id='javatbd";
        // line 37
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 37, $this->source);
        yield "' class='question-item answer-item checkbox-item imageselect-listitem ";
        yield $this->sandbox->ensureToStringAllowed(($context["extra_class"] ?? null), 37, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null), 37, $this->source);
        yield " >
    <div class=\"imageselect-container\">
        <input
            class=\"imageselect-checkbox\"
            type=\"checkbox\"
            name=\"";
        // line 42
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 42, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 42, $this->source);
        yield "\"
            id=\"answer";
        // line 43
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 43, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 43, $this->source);
        yield "\"
            value=\"Y\"
            ";
        // line 45
        yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 45, $this->source);
        yield "
            onclick='cancelBubbleThis(event); ";
        // line 46
        yield $this->sandbox->ensureToStringAllowed(($context["sCheckconditionFunction"] ?? null), 46, $this->source);
        yield "'
        />
        <label for=\"answer";
        // line 48
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 48, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 48, $this->source);
        yield "\" class=\"imageselect-label\" onclick='cancelBubbleThis(event); ";
        yield $this->sandbox->ensureToStringAllowed(($context["sCheckconditionFunction"] ?? null), 48, $this->source);
        yield "'>

         <img class=\"unforce-height\" src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["question"] ?? null), 50, $this->source), "html_attr");
        yield "\"
         style=\"";
        // line 51
        if ((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "fix_width", [], "any", false, false, true, 51), 1))) {
            yield " 
            width: ";
            // line 52
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "fix_width", [], "any", false, false, true, 52), 52, $this->source);
            yield "px 
            ";
        }
        // line 53
        yield " ";
        if ((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "fix_height", [], "any", false, false, true, 53), 1))) {
            // line 54
            yield "            height: ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "fix_height", [], "any", false, false, true, 54), 54, $this->source);
            yield "px
            ";
        }
        // line 55
        yield "\"/>
        </label>
        <label for=\"answer";
        // line 57
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 57, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 57, $this->source);
        yield "\" class=\"imageselect-select d-none\"></label>
    </div>
    <input
        type=\"hidden\"
        name=\"java";
        // line 61
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 61, $this->source);
        yield "\"
        id=\"java";
        // line 62
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 62, $this->source);
        yield "\"
        value=\"";
        // line 63
        yield $this->sandbox->ensureToStringAllowed(($context["sValue"] ?? null), 63, $this->source);
        yield "\"
    />
</li>
<script>
    var imageselectjs_";
        // line 67
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 67, $this->source);
        yield " = new IMAGESELECT(\"";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 67, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 67, $this->source);
        yield "\", {
        keepAspect: ";
        // line 68
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "keep_aspect", [], "any", false, false, true, 68)) ? ("true") : ("false"));
        yield ", 
        horizontalScroll: ";
        // line 69
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "horizontal_scroll", [], "any", false, false, true, 69)) ? ("true") : ("false"));
        yield ",
        crop_or_resize: ";
        // line 70
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "crop_or_resize", [], "any", false, false, true, 70)) ? (true) : (false));
        yield "
        }); 
</script>
<!-- end of answer_row -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./survey/questions/answer/multiplechoice/rows/answer_row.twig";
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
        return array (  151 => 70,  147 => 69,  143 => 68,  136 => 67,  129 => 63,  125 => 62,  121 => 61,  113 => 57,  109 => 55,  103 => 54,  100 => 53,  95 => 52,  91 => 51,  87 => 50,  79 => 48,  74 => 46,  70 => 45,  64 => 43,  59 => 42,  47 => 37,  43 => 35,  40 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "./survey/questions/answer/multiplechoice/rows/answer_row.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/question/image_select-multiplechoice/survey/questions/answer/multiplechoice/rows/answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 51);
        static $filters = array("escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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

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

/* __string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928 */
class __TwigTemplate_1e42554d765eba02987f670e8d509b42646a790056a1dca71427e9651d0a97e7 extends Template
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
        // line 20
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 21), 21, $this->source);
        yield "\" dir=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 21), 21, $this->source);
        yield "\" class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 21), 21, $this->source);
        yield " dir-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 21), 21, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 21), "html", [], "any", false, false, true, 21), 21, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 21), "html", [], "any", false, false, true, 21), 21, $this->source);
        yield ">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <title>";
        // line 24
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["print"] ?? null), "sitename", [], "any", false, false, true, 24), 24, $this->source);
        yield " - ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_title", [], "any", false, false, true, 24), 24, $this->source);
        yield "</title>
    </head>
    <body>

    ";
        // line 29
        yield "    <x-test id=\"action::printableSurvey\"></x-test>

    <div id=\"limesurvey\">
            <h1>";
        // line 32
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_title", [], "any", false, false, true, 32), 32, $this->source);
        yield "</h1>

            <div class=\"survey-description\">";
        // line 34
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_description", [], "any", false, false, true, 34), 34, $this->source);
        yield "</div>

            <div class=\"survey-welcome\">";
        // line 36
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_welcometext", [], "any", false, false, true, 36), 36, $this->source);
        yield "</div>

            <p class=\"x-questions\">";
        // line 38
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["print"] ?? null), "therearexquestions", [], "any", false, false, true, 38), 38, $this->source);
        yield "</p>

            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["print"] ?? null), "groups", [], "any", false, false, true, 40));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 41
            yield "                ";
            $context["groupTemplate"] = "./subviews/print/print_group.twig";
            // line 42
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["groupTemplate"] ?? null), 42, $this->source));
            yield "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
            ";
        // line 45
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["print"] ?? null), "privacy", [], "any", false, false, true, 45), 45, $this->source);
        yield "
            
            <p class=\"submit-by\">
                ";
        // line 48
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["print"] ?? null), "end", [], "any", false, false, true, 48), 48, $this->source);
        yield "<br />
                ";
        // line 49
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["print"] ?? null), "submit_by", [], "any", false, false, true, 49), 49, $this->source);
        yield "<br />
                ";
        // line 50
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["print"] ?? null), "submit_text", [], "any", false, false, true, 50), 50, $this->source);
        yield "<br />
                ";
        // line 51
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["print"] ?? null), "thanks", [], "any", false, false, true, 51), 51, $this->source);
        yield "<br />
            </p>

        </div>
    </body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928";
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
        return array (  151 => 51,  147 => 50,  143 => 49,  139 => 48,  133 => 45,  130 => 44,  113 => 42,  110 => 41,  93 => 40,  88 => 38,  83 => 36,  78 => 34,  73 => 32,  68 => 29,  59 => 24,  43 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 40, "set" => 41);
        static $filters = array();
        static $functions = array("include" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                [],
                ['include'],
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

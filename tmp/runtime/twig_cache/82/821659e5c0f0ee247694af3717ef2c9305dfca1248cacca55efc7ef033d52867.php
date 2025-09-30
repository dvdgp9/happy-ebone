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

/* /survey/questions/question_help/softmandatory_input.twig */
class __TwigTemplate_54af88d8ca3b1ba994170435f987e62d6b2105f68bcdcefc6f0e44cbe01868d6 extends Template
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
        yield "<div class='ls-softmandatory-input'>
    <label for='mandSoft_";
        // line 8
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["qInfo"] ?? null), "qseq", [], "any", false, false, true, 8), 8, $this->source);
        yield "'>";
        yield gT("Continue without answering to this question.");
        yield "</label>
    <input type='hidden' id='mandSoft_";
        // line 9
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["qInfo"] ?? null), "qseq", [], "any", false, false, true, 9), 9, $this->source);
        yield "_N' name='mandSoft[";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["qInfo"] ?? null), "qseq", [], "any", false, false, true, 9), 9, $this->source);
        yield "]' value='N'>
    <input type='checkbox' id='mandSoft_";
        // line 10
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["qInfo"] ?? null), "qseq", [], "any", false, false, true, 10), 10, $this->source);
        yield "' name='mandSoft[";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["qInfo"] ?? null), "qseq", [], "any", false, false, true, 10), 10, $this->source);
        yield "]' class=\"ls-mandSoft-checkbox\" value='Y' ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["qInfo"] ?? null), "mandSoftForced", [], "any", false, false, true, 10)) {
            yield " checked ";
        }
        yield " >
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/question_help/softmandatory_input.twig";
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
        return array (  55 => 10,  49 => 9,  43 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/question_help/softmandatory_input.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/question_help/softmandatory_input.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array();
        static $functions = array("gT" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

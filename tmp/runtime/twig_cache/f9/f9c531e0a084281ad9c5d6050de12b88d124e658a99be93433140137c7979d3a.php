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

/* /survey/questions/answer/5pointchoice/answer.twig */
class __TwigTemplate_e36837a7fa5f717236ed0e609d612bde9b923e2a36ac5b914ce47f2a0d26b94a extends Template
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
<!-- 5 point choice -->
<!-- answer -->

<ul class=\"";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 18, $this->source);
        yield " list-unstyled list-group list-group-horizontal\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 18, $this->source);
        yield "\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aRows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
            // line 20
            yield "        ";
            yield from             $this->loadTemplate("./survey/questions/answer/5pointchoice/rows/item_row.twig", "/survey/questions/answer/5pointchoice/answer.twig", 20)->unwrap()->yield(CoreExtension::merge($context, $context["aRow"]));
            // line 21
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "</ul>

";
        // line 25
        yield "<input type=\"hidden\" name=\"java";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 25, $this->source);
        yield "\" id=\"java";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 25, $this->source);
        yield "\" disabled value=";
        yield $this->sandbox->ensureToStringAllowed(($context["sessionValue"] ?? null), 25, $this->source);
        yield " />


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/5pointchoice/answer.twig";
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
        return array (  90 => 25,  86 => 22,  72 => 21,  69 => 20,  52 => 19,  46 => 18,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/5pointchoice/answer.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/application/views/survey/questions/answer/5pointchoice/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 19, "include" => 20);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'include'],
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

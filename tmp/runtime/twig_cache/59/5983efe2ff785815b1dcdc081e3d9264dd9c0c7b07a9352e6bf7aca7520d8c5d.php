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

/* /subviews/privacy/privacy_datasecurity_notice_label.twig */
class __TwigTemplate_76197cfd35bf517aef7fa4367c3effb3942974e5b1bc514153ffeda1a402749f extends Template
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
        // line 4
        $context["STARTPOLICYLINK"] = "";
        // line 5
        $context["ENDPOLICYLINK"] = "";
        // line 6
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 6), 2))) {
            // line 7
            yield "    ";
            $context["STARTPOLICYLINK"] = (("<a data-bs-target='#data-security-modal-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 7), 7, $this->source)) . "' class='show-policy' data-bs-toggle='modal'>");
            // line 8
            yield "    ";
            $context["ENDPOLICYLINK"] = "</a>";
            // line 9
            yield "    ";
            if (((0 === CoreExtension::compare(strpos((" " . ($context["dataSecurityNoticeLabel"] ?? null)), "{STARTPOLICYLINK}"), false)) && (0 === CoreExtension::compare(strpos((" " . ($context["dataSecurityNoticeLabel"] ?? null)), "{ENDPOLICYLINK}"), false)))) {
                // line 10
                yield "        ";
                $context["dataSecurityNoticeLabel"] = ((($this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 10, $this->source) . "<br/> {STARTPOLICYLINK}") . gT("Show policy")) . "{ENDPOLICYLINK}");
                // line 11
                yield "    ";
            }
        }
        // line 13
        $context["haveENDPOLICYLINK"] = strpos((" " . $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 13, $this->source)), "{ENDPOLICYLINK}");
        // line 14
        $context["dataSecurityNoticeLabel"] = str_replace("{STARTPOLICYLINK}", $this->sandbox->ensureToStringAllowed(($context["STARTPOLICYLINK"] ?? null), 14, $this->source), $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 14, $this->source));
        // line 15
        $context["dataSecurityNoticeLabel"] = str_replace("{ENDPOLICYLINK}", $this->sandbox->ensureToStringAllowed(($context["ENDPOLICYLINK"] ?? null), 15, $this->source), $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 15, $this->source));
        // line 16
        if ((0 === CoreExtension::compare(($context["haveENDPOLICYLINK"] ?? null), false))) {
            // line 17
            yield "    ";
            $context["dataSecurityNoticeLabel"] = ($this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 17, $this->source) . $this->sandbox->ensureToStringAllowed(($context["ENDPOLICYLINK"] ?? null), 17, $this->source));
        }
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 19, $this->source);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/subviews/privacy/privacy_datasecurity_notice_label.twig";
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
        return array (  74 => 19,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  58 => 11,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  44 => 6,  42 => 5,  40 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "/subviews/privacy/privacy_datasecurity_notice_label.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/survey/fruity_twentythree/views/subviews/privacy/privacy_datasecurity_notice_label.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 6);
        static $filters = array();
        static $functions = array("strpos" => 9, "gT" => 10, "str_replace" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['strpos', 'gT', 'str_replace'],
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

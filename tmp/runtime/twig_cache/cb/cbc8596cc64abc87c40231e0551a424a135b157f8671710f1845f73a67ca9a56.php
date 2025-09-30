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

/* __string_template__1f4cf67a4654bec294a7de4233ad3e1039ae5f34b3a455954568e0c3371bc74f */
class __TwigTemplate_feea0c069da549148521e39280bbf25c64cd62029010fcf6036ed1ac707742d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pjaxbegin' => [$this, 'block_pjaxbegin'],
            'body' => [$this, 'block_body'],
            'nav_bar' => [$this, 'block_nav_bar'],
            'progress' => [$this, 'block_progress'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'pjaxend' => [$this, 'block_pjaxend'],
            'themescripts' => [$this, 'block_themescripts'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 71
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 71), 71, $this->source);
        yield "\" dir=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 71), 71, $this->source);
        yield "\" class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 71), 71, $this->source);
        yield " dir-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 71), 71, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 71), "html", [], "any", false, false, true, 71), 71, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 71), "html", [], "any", false, false, true, 71), 71, $this->source);
        yield ">
    ";
        // line 72
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 76
        yield "    <body class=\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 76), "body", [], "any", false, false, true, 76), 76, $this->source);
        yield " font-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 76), "font", [], "any", false, false, true, 76), 76, $this->source);
        yield " lang-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 76), 76, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyformat", [], "any", false, false, true, 76), 76, $this->source);
        yield " ";
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 76), "brandlogo", [], "any", false, false, true, 76), "on"))) {
            yield "brand-logo";
        }
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 76), "body", [], "any", false, false, true, 76), 76, $this->source);
        yield " data-thememode=\"";
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 76), "thememode", [], "any", false, false, true, 76)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 76), "thememode", [], "any", false, false, true, 76)) : ("light"));
        yield "\">

        ";
        // line 79
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "emcache", [], "any", false, false, true, 79)) {
            // line 80
            yield "            <span style=\"display: none;\" id=\"__emcache_debug\" value=\"on\"></span>
        ";
        } else {
            // line 82
            yield "            <span style=\"display: none;\" id=\"__emcache_debug\" value=\"off\"></span>
        ";
        }
        // line 84
        yield "
        ";
        // line 86
        yield "        ";
        yield from $this->unwrap()->yieldBlock('pjaxbegin', $context, $blocks);
        // line 90
        yield "       

        ";
        // line 93
        yield "        <article>

            <div id=\"";
        // line 95
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 95), "dynamicreload", [], "any", false, false, true, 95), 95, $this->source);
        yield "\">
            ";
        // line 96
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 130
        yield "            </div>

        </article>
        ";
        // line 133
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 136
        yield "        ";
        yield from $this->unwrap()->yieldBlock('pjaxend', $context, $blocks);
        // line 140
        yield "   

        ";
        // line 142
        yield from $this->unwrap()->yieldBlock('themescripts', $context, $blocks);
        // line 147
        yield "        
    </body>
</html>
";
        return; yield '';
    }

    // line 72
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        yield "    ";
        // line 74
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/header/head.twig");
        yield "
    ";
        return; yield '';
    }

    // line 86
    public function block_pjaxbegin($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
        return; yield '';
    }

    // line 96
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        yield "
                ";
        // line 99
        yield "                ";
        yield from $this->unwrap()->yieldBlock('nav_bar', $context, $blocks);
        // line 102
        yield "
                ";
        // line 104
        yield "                ";
        yield from $this->unwrap()->yieldBlock('progress', $context, $blocks);
        // line 107
        yield "
                <!-- Outer Frame Container -->
                ";
        // line 109
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 117
        yield "
                ";
        // line 119
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig");
        yield "

                ";
        // line 122
        yield "                ";
        yield LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                ", "POS_END");
        // line 127
        yield "

            ";
        return; yield '';
    }

    // line 99
    public function block_nav_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        yield "                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/header/nav_bar.twig");
        yield "
                ";
        return; yield '';
    }

    // line 104
    public function block_progress($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        yield "                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/header/progress_bar.twig");
        yield "
                ";
        return; yield '';
    }

    // line 109
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        yield "                    ";
        // line 114
        yield "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "include_content", [], "any", false, false, true, 114), 114, $this->source)) . ".twig");
        // line 115
        yield "                    ";
        yield from         $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__1f4cf67a4654bec294a7de4233ad3e1039ae5f34b3a455954568e0c3371bc74f", 115)->unwrap()->yield(CoreExtension::merge($context, ["include_content" => ($context["sViewContent"] ?? null)]));
        // line 116
        yield "                ";
        return; yield '';
    }

    // line 133
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/footer/footer.twig");
        yield "
        ";
        return; yield '';
    }

    // line 136
    public function block_pjaxend($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
        return; yield '';
    }

    // line 142
    public function block_themescripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__1f4cf67a4654bec294a7de4233ad3e1039ae5f34b3a455954568e0c3371bc74f";
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
        return array (  279 => 142,  268 => 136,  260 => 134,  256 => 133,  251 => 116,  248 => 115,  245 => 114,  243 => 110,  239 => 109,  231 => 105,  227 => 104,  219 => 100,  215 => 99,  208 => 127,  200 => 122,  194 => 119,  191 => 117,  189 => 109,  185 => 107,  182 => 104,  179 => 102,  176 => 99,  173 => 97,  169 => 96,  158 => 86,  150 => 74,  148 => 73,  144 => 72,  136 => 147,  134 => 142,  130 => 140,  127 => 136,  125 => 133,  120 => 130,  118 => 96,  114 => 95,  110 => 93,  106 => 90,  103 => 86,  100 => 84,  96 => 82,  92 => 80,  89 => 79,  69 => 76,  67 => 72,  53 => 71,  49 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1f4cf67a4654bec294a7de4233ad3e1039ae5f34b3a455954568e0c3371bc74f", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 72, "if" => 76, "set" => 114, "include" => 115);
        static $filters = array();
        static $functions = array("include" => 74, "registerScript" => 122);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'include'],
                [],
                ['include', 'registerScript'],
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

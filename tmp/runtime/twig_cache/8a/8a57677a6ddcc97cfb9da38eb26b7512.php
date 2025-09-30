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

/* ./subviews/content/load.twig */
class __TwigTemplate_c2dcb4d05524992efb77e469f541a6dd extends Template
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
        // line 32
        yield "
    ";
        // line 34
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 34), "ScriptsAndHiddenInputs", [], "any", false, false, true, 34), 34, $this->source);
        yield "

    <div class=\"";
        // line 36
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 36), "savemessage", [], "any", false, false, true, 36), 36, $this->source);
        yield " clearfix\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 36), "savemessage", [], "any", false, false, true, 36), 36, $this->source);
        yield ">
        <div class=\"";
        // line 37
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 37), "savemessagetitle", [], "any", false, false, true, 37), 37, $this->source);
        yield " large-heading mb-3\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "savemessagetitle", [], "any", false, false, true, 37), 37, $this->source);
        yield ">";
        yield gT("Load unfinished survey");
        yield "</div>
        <div class=\"";
        // line 38
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 38), "savemessagetext", [], "any", false, false, true, 38), 38, $this->source);
        yield " form-heading mb-3\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 38), "savemessagetext", [], "any", false, false, true, 38), 38, $this->source);
        yield ">
            <p ";
        // line 39
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 39), "savemessagetextp", [], "any", false, false, true, 39), 39, $this->source);
        yield " > ";
        yield gT("You can load a survey that you have previously saved from this screen.");
        yield " </p>
            <p ";
        // line 40
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 40), "savemessagetextpb", [], "any", false, false, true, 40), 40, $this->source);
        yield " > ";
        yield gT("Type in the 'name' you used to save the survey, and the password.");
        yield " </p>
        </div>
    </div>

    <div class=\"";
        // line 44
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "loadform", [], "any", false, false, true, 44), 44, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "loadform", [], "any", false, false, true, 44), 44, $this->source);
        yield ">

        ";
        // line 46
        if ((LS_Twig_Extension::safecount(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 46), "aErrors", [], "any", false, false, true, 46)) > 0)) {
            // line 47
            yield "            <ul class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 47), "loadformul", [], "any", false, false, true, 47), 47, $this->source);
            yield " alert alert-danger list-unstyled \" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "loadformul", [], "any", false, false, true, 47), 47, $this->source);
            yield " >
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 48), "aErrors", [], "any", false, false, true, 48));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 49
                yield "                    <li ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 49), "loadformulli", [], "any", false, false, true, 49), 49, $this->source);
                yield ">";
                yield $this->sandbox->ensureToStringAllowed($context["error"], 49, $this->source);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "            </ul>
        ";
        }
        // line 53
        yield "
        ";
        // line 59
        yield "        ";
        $context["htmlOptions"] = ["id" => "form-load", "name" => "form-load", "class" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 62), "loadformform", [], "any", false, false, true, 62)];
        // line 65
        yield "
        ";
        // line 71
        yield "        <!-- Save Form -->
        ";
        // line 72
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["C"] ?? null), "Html", [], "any", false, false, true, 73), "form", [CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 74), "post",         // line 76
($context["htmlOptions"] ?? null)], "method", false, false, true, 73), 73, $this->source);
        // line 78
        yield "
            <!-- Hidden fields  -->
            ";
        // line 80
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 80), "sHiddenField", [], "any", false, false, true, 80), 80, $this->source);
        yield "

            <!-- Name and Password -->
            <div class=\"";
        // line 83
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 83), "saveform", [], "any", false, false, true, 83), 83, $this->source);
        yield " col-12\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 83), "saveform", [], "any", false, false, true, 83), 83, $this->source);
        yield ">

                <!-- Saved name  -->
                <div class=\"";
        // line 86
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 86), "saveformrow", [], "any", false, false, true, 86), 86, $this->source);
        yield " mb-3\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 86), "saveformrow", [], "any", false, false, true, 86), 86, $this->source);
        yield ">
                    <label class=\"";
        // line 87
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 87), "saveformrowlabel", [], "any", false, false, true, 87), 87, $this->source);
        yield " control-label\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 87), "saveformrowlabel", [], "any", false, false, true, 87), 87, $this->source);
        yield ">
                        ";
        // line 88
        yield gT("Saved name");
        yield "<small class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 88), "saveformrowlabelsmall", [], "any", false, false, true, 88), 88, $this->source);
        yield " asterisk ri-asterisk superset\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 88), "saveformrowlabelsmall", [], "any", false, false, true, 88), 88, $this->source);
        yield " >&nbsp;</small>
                        <span class=\"";
        // line 89
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 89), "saveformrowlabelspan", [], "any", false, false, true, 89), 89, $this->source);
        yield " visually-hidden asterisk\"  ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 89), "saveformrowlabelspan", [], "any", false, false, true, 89), 89, $this->source);
        yield " >";
        yield gT("Mandatory");
        yield "</span>
                    </label>
                    <div class=\"";
        // line 91
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 91), "saveformrowcol", [], "any", false, false, true, 91), 91, $this->source);
        yield " input-cell\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 91), "saveformrowcol", [], "any", false, false, true, 91), 91, $this->source);
        yield ">
                        <input class=\"";
        // line 92
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 92), "saveformrowcolinput", [], "any", false, false, true, 92), 92, $this->source);
        yield " form-control ls-important-field\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 92), "saveformrowcolinput", [], "any", false, false, true, 92), 92, $this->source);
        yield " id=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 92), "saveformrowcolinput", [], "any", false, false, true, 92), 92, $this->source);
        yield "\" placeholder =\" ";
        yield gT("Enter your name");
        yield " \">
                    </div>
                </div>

                <!-- Password -->
                <div class=\"";
        // line 97
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 97), "passwordrow", [], "any", false, false, true, 97), 97, $this->source);
        yield " mb-3\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 97), "passwordrow", [], "any", false, false, true, 97), 97, $this->source);
        yield ">
                    <label class='";
        // line 98
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 98), "passwordrowcol", [], "any", false, false, true, 98), 98, $this->source);
        yield " control-label'  ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 98), "passwordrowcol", [], "any", false, false, true, 98), 98, $this->source);
        yield " >
                        ";
        // line 99
        yield gT("Password");
        yield "<small class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 99), "passwordrowcolsmall", [], "any", false, false, true, 99), 99, $this->source);
        yield " asterisk ri-asterisk superset\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 99), "passwordrowcolsmall", [], "any", false, false, true, 99), 99, $this->source);
        yield ">&nbsp;</small>
                        <span class=\"";
        // line 100
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 100), "passwordrowcolspan", [], "any", false, false, true, 100), 100, $this->source);
        yield " visually-hidden asterisk\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 100), "passwordrowcolspan", [], "any", false, false, true, 100), 100, $this->source);
        yield ">";
        yield gT("Mandatory");
        yield "</span>
                    </label>

                    <div class='";
        // line 103
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 103), "passwordrowinput", [], "any", false, false, true, 103), 103, $this->source);
        yield "'>
                        <input class='form-control ls-important-field' ";
        // line 104
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 104), "passwordrowinputi", [], "any", false, false, true, 104), 104, $this->source);
        yield " placeholder =\" ";
        yield gT("Enter your password");
        yield " \">
                    </div>
                </div>

                ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 108), "aCaptcha", [], "any", false, false, true, 108), "show", [], "any", false, false, true, 108)) {
            // line 109
            yield "                    <!-- Captcha -->
                    <div class='";
            // line 110
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 110), "captcharow", [], "any", false, false, true, 110), 110, $this->source);
            yield " mb-3' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 110), "captcharow", [], "any", false, false, true, 110), 110, $this->source);
            yield ">
                        <label class='";
            // line 111
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 111), "captcharowlabel", [], "any", false, false, true, 111), 111, $this->source);
            yield " control-label'  ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 111), "captcharowlabel", [], "any", false, false, true, 111), 111, $this->source);
            yield ">
                            ";
            // line 112
            yield gT("Security question");
            yield "
                        </label>
                        <div class='";
            // line 114
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 114), "captcharowcol", [], "any", false, false, true, 114), 114, $this->source);
            yield "' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 114), "captcharowcol", [], "any", false, false, true, 114), 114, $this->source);
            yield ">
                            <div class='";
            // line 115
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 115), "captcharowcoldiv", [], "any", false, false, true, 115), 115, $this->source);
            yield "' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 115), "captcharowcoldiv", [], "any", false, false, true, 115), 115, $this->source);
            yield ">
                                <span class='";
            // line 116
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 116), "captcharowcoldivdiv", [], "any", false, false, true, 116), 116, $this->source);
            yield "  ls-important-field' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 116), "captcharowcoldivdiv", [], "any", false, false, true, 116), 116, $this->source);
            yield " >
                                    <img src=\"";
            // line 117
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 117), "aCaptcha", [], "any", false, false, true, 117), "sImageUrl", [], "any", false, false, true, 117), 117, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 117), "captcharowcoldivdivimg", [], "any", false, false, true, 117), 117, $this->source);
            yield " />
                                </span>
                                <input id=\"";
            // line 119
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 119), "captcharowcoldivinput", [], "any", false, false, true, 119), 119, $this->source);
            yield "\" class='";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 119), "captcharowcoldivinput", [], "any", false, false, true, 119), 119, $this->source);
            yield "   form-control ls-important-field' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 119), "captcharowcoldivinput", [], "any", false, false, true, 119), 119, $this->source);
            yield " placeholder=\"";
            yield gT("Enter result here - numbers only");
            yield "\"/>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 124
        yield "                    <div class=\"row button-row\">
                        <!-- return button -->
                    <div class='";
        // line 126
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 126), "returntosurvey", [], "any", false, false, true, 126), 126, $this->source);
        yield " mb-3 col-auto' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 126), "returntosurvey", [], "any", false, false, true, 126), 126, $this->source);
        yield ">
                        <div class=\"";
        // line 127
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 127), "returntosurveydiv", [], "any", false, false, true, 127), 127, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 127), "returntosurveydiv", [], "any", false, false, true, 127), 127, $this->source);
        yield ">
                            <a href=\"";
        // line 128
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 128), 128, $this->source);
        yield "\" class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 128), "returntosurveydiva", [], "any", false, false, true, 128), 128, $this->source);
        yield " btn btn-outline-secondary\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 128), "returntosurveydiva", [], "any", false, false, true, 128), 128, $this->source);
        yield "  >";
        yield gT("Return to survey");
        yield "</a>
                        </div>
                    </div>
                    <!-- load button -->
                    <div class='";
        // line 132
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 132), "loadrow", [], "any", false, false, true, 132), 132, $this->source);
        yield " mb-3 col-auto' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 132), "loadrow", [], "any", false, false, true, 132), 132, $this->source);
        yield ">
                        <div class='";
        // line 133
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 133), "loadrowcol", [], "any", false, false, true, 133), 133, $this->source);
        yield "  float-end' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 133), "loadrowcol", [], "any", false, false, true, 133), 133, $this->source);
        yield ">
                            <button class='";
        // line 134
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 134), "loadrowcolbutton", [], "any", false, false, true, 134), 134, $this->source);
        yield " btn btn-primary' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 134), "loadrowcolbutton", [], "any", false, false, true, 134), 134, $this->source);
        yield " >
                                ";
        // line 135
        yield gT("Load now");
        yield "
                            </button>
                        </div>
                    </div>
                </div>
            </div>

    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/content/load.twig";
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
        return array (  355 => 135,  349 => 134,  343 => 133,  337 => 132,  324 => 128,  318 => 127,  312 => 126,  308 => 124,  294 => 119,  287 => 117,  281 => 116,  275 => 115,  269 => 114,  264 => 112,  258 => 111,  252 => 110,  249 => 109,  247 => 108,  238 => 104,  234 => 103,  224 => 100,  216 => 99,  210 => 98,  204 => 97,  190 => 92,  184 => 91,  175 => 89,  167 => 88,  161 => 87,  155 => 86,  147 => 83,  141 => 80,  137 => 78,  135 => 76,  134 => 74,  133 => 73,  132 => 72,  129 => 71,  126 => 65,  124 => 62,  122 => 59,  119 => 53,  115 => 51,  104 => 49,  100 => 48,  93 => 47,  91 => 46,  84 => 44,  75 => 40,  69 => 39,  63 => 38,  55 => 37,  49 => 36,  43 => 34,  40 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/load.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/survey/fruity_twentythree/views/subviews/content/load.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 46, "for" => 48, "set" => 59);
        static $filters = array();
        static $functions = array("gT" => 37, "count" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['gT', 'count'],
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

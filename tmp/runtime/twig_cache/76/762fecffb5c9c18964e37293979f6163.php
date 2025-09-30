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

/* ./subviews/content/save.twig */
class __TwigTemplate_2f036f897ab20e73a441719ddd9f0931 extends Template
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
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/header/start_form.twig");
        yield " <!-- main form -->

    ";
        // line 40
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 40), "ScriptsAndHiddenInputs", [], "any", false, false, true, 40), 40, $this->source);
        yield "

    <div class=\"";
        // line 42
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 42), "savecontainer", [], "any", false, false, true, 42), 42, $this->source);
        yield " clearfix \" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 42), "savecontainer", [], "any", false, false, true, 42), 42, $this->source);
        yield ">
        <div class=\"\">
            <div class=\"";
        // line 44
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "savecontainertitle", [], "any", false, false, true, 44), 44, $this->source);
        yield " large-heading mb-3\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "savecontainertitle", [], "any", false, false, true, 44), 44, $this->source);
        yield ">";
        yield gT("Save your unfinished survey");
        yield "</div>
            <div class=\"";
        // line 45
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 45), "savecontainertext", [], "any", false, false, true, 45), 45, $this->source);
        yield " form-heading mb-3\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 45), "savecontainertext", [], "any", false, false, true, 45), 45, $this->source);
        yield ">
                <p ";
        // line 46
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 46), "savecontainertextpa", [], "any", false, false, true, 46), 46, $this->source);
        yield "> ";
        yield gT("Enter a name and password for this survey and click save below.");
        yield " </p>
                <p ";
        // line 47
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "savecontainertextpb", [], "any", false, false, true, 47), 47, $this->source);
        yield "> ";
        yield gT("Your survey will be saved using that name and password, and can be completed later by logging in with the same name and password.");
        yield " </p>
                <p class='";
        // line 48
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 48), "savecontainertextpc", [], "any", false, false, true, 48), 48, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 48), "savecontainertextpc", [], "any", false, false, true, 48), 48, $this->source);
        yield "> ";
        yield gT("If you give an email address, an email containing the details will be sent to you.");
        yield " </p>
                <p ";
        // line 49
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 49), "savecontainertextpd", [], "any", false, false, true, 49), 49, $this->source);
        yield "> ";
        yield gT("After having clicked the save button you can either close this browser window or continue filling out the survey.");
        yield " </p>
            </div>
            <div class=\"";
        // line 51
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 51), "savecontainerwarning", [], "any", false, false, true, 51), 51, $this->source);
        yield " alert alert-warning\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 51), "savecontainerwarning", [], "any", false, false, true, 51), 51, $this->source);
        yield ">
                ";
        // line 52
        yield gT("To remain anonymous please use a pseudonym as your username, also an email address is not required.");
        yield "
            </div>
        </div>
    </div>

    <div class=\"";
        // line 57
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 57), "saveformcontainer", [], "any", false, false, true, 57), 57, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 57), "saveformcontainer", [], "any", false, false, true, 57), 57, $this->source);
        yield ">

        ";
        // line 59
        if ((LS_Twig_Extension::safecount(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 59), "aErrors", [], "any", false, false, true, 59)) > 0)) {
            // line 60
            yield "            <ul class='";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 60), "sClass", [], "any", false, false, true, 60), 60, $this->source);
            yield "  ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 60), "saveformcontainerul", [], "any", false, false, true, 60), 60, $this->source);
            yield " alert alert-danger list-unstyled '  >
                ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 61), "aErrors", [], "any", false, false, true, 61));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 62
                yield "                    <li ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 62), "saveformcontainerli", [], "any", false, false, true, 62), 62, $this->source);
                yield " >";
                yield $this->sandbox->ensureToStringAllowed($context["error"], 62, $this->source);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "            </ul>
        ";
        }
        // line 66
        yield "
        ";
        // line 72
        yield "        ";
        $context["htmlOptions"] = ["id" => "form-save", "name" => "form-save", "class" => "ls-form"];
        // line 78
        yield "
        ";
        // line 84
        yield "        <!-- Save Form -->
        ";
        // line 85
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 86
($context["C"] ?? null), "Html", [], "any", false, false, true, 86), "form", [CoreExtension::getAttribute($this->env, $this->source,         // line 87
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 87), "post",         // line 89
($context["htmlOptions"] ?? null)], "method", false, false, true, 86), 86, $this->source);
        // line 91
        yield "
            <!-- Hidden fields  -->
            ";
        // line 93
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 93), "sHiddenField", [], "any", false, false, true, 93), 93, $this->source);
        yield "

            <!-- Name and Password -->
            <div class='";
        // line 96
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 96), "saveformsurvey", [], "any", false, false, true, 96), 96, $this->source);
        yield " col-12' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 96), "saveformsurvey", [], "any", false, false, true, 96), 96, $this->source);
        yield ">
                <div class='";
        // line 97
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 97), "saveformsurveydiva", [], "any", false, false, true, 97), 97, $this->source);
        yield " mb-3' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 97), "saveformsurveydiva", [], "any", false, false, true, 97), 97, $this->source);
        yield ">

                    <!-- Saved name  -->
                    <label class='";
        // line 100
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 100), "saveformsurveydivalabel", [], "any", false, false, true, 100), 100, $this->source);
        yield " control-label' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 100), "saveformsurveydivalabel", [], "any", false, false, true, 100), 100, $this->source);
        yield ">
                        ";
        // line 101
        yield gT("Name");
        yield "<small class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 101), "saveformsurveydivalabelsmall", [], "any", false, false, true, 101), 101, $this->source);
        yield " asterisk ri-asterisk superset\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 101), "saveformsurveydivalabelsmall", [], "any", false, false, true, 101), 101, $this->source);
        yield " >&nbsp;</small>
                        <span class=\"";
        // line 102
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 102), "saveformsurveydivalabelspan", [], "any", false, false, true, 102), 102, $this->source);
        yield " visually-hidden asterisk\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 102), "saveformsurveydivalabelspan", [], "any", false, false, true, 102), 102, $this->source);
        yield ">";
        yield gT("Mandatory");
        yield "</span>
                    </label>
                    <div class='";
        // line 104
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 104), "saveformsurveydivb", [], "any", false, false, true, 104), 104, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 104), "saveformsurveydivb", [], "any", false, false, true, 104), 104, $this->source);
        yield ">

                        ";
        // line 106
        $context["htmlOptions"] = ["id" => "savename", "name" => "savename", "class" => "form-control ls-important-field", "placeholder" => gT("Enter your name"), "required" => true];
        // line 114
        yield "
                        ";
        // line 116
        yield "                        ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 116), "textField", ["savename", LS_Twig_Extension::getPost("savename"),         // line 119
($context["htmlOptions"] ?? null)], "method", false, false, true, 116), 116, $this->source);
        // line 120
        yield "
                    </div>

                </div>

                <!-- Password -->
                <div class='row mb-0 mb-md-3'>
                    <div class='";
        // line 127
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 127), "saveformsurveydivc", [], "any", false, false, true, 127), 127, $this->source);
        yield " col-md-6 col-12 mb-3 mb-md-0' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 127), "saveformsurveydivc", [], "any", false, false, true, 127), 127, $this->source);
        yield ">
                        <label class='";
        // line 128
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 128), "saveformsurveydivclabel", [], "any", false, false, true, 128), 128, $this->source);
        yield " control-label' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 128), "saveformsurveydivclabel", [], "any", false, false, true, 128), 128, $this->source);
        yield ">
                            ";
        // line 129
        yield gT("Password");
        yield "<small class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 129), "saveformsurveydivcsmall", [], "any", false, false, true, 129), 129, $this->source);
        yield " asterisk ri-asterisk superset\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 129), "saveformsurveydivcsmall", [], "any", false, false, true, 129), 129, $this->source);
        yield " >&nbsp;</small>
                            <span class=\"";
        // line 130
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 130), "saveformsurveydivcspan", [], "any", false, false, true, 130), 130, $this->source);
        yield " visually-hidden asterisk\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 130), "saveformsurveydivcspan", [], "any", false, false, true, 130), 130, $this->source);
        yield ">";
        yield gT("Mandatory");
        yield "</span>
                        </label>

                        <div class='";
        // line 133
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 133), "saveformsurveydivcdiv", [], "any", false, false, true, 133), 133, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 133), "saveformsurveydivcdiv", [], "any", false, false, true, 133), 133, $this->source);
        yield ">

                            ";
        // line 135
        $context["htmlOptions"] = ["id" => "savepass", "name" => "savepass", "class" => "form-control ls-important-field", "placeholder" => gT("Enter password"), "required" => true];
        // line 143
        yield "
                            ";
        // line 144
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 144), "passwordField", ["savepass", LS_Twig_Extension::getPost("savepass"),         // line 147
($context["htmlOptions"] ?? null)], "method", false, false, true, 144), 144, $this->source);
        // line 148
        yield "
                        </div>
                    </div>

                    <!-- Confirm password -->
                    <div class='";
        // line 153
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 153), "saveformsurveydivd", [], "any", false, false, true, 153), 153, $this->source);
        yield " col-md-6 col-12 mb-3 mb-md-0' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 153), "saveformsurveydivd", [], "any", false, false, true, 153), 153, $this->source);
        yield ">
                        <label class='";
        // line 154
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 154), "saveformsurveydivdlabel", [], "any", false, false, true, 154), 154, $this->source);
        yield " control-label' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 154), "saveformsurveydivdlabel", [], "any", false, false, true, 154), 154, $this->source);
        yield " >
                            ";
        // line 155
        yield gT("Repeat password");
        yield "<small class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 155), "saveformsurveydivdlabelsmall", [], "any", false, false, true, 155), 155, $this->source);
        yield "  asterisk ri-asterisk superset\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 155), "saveformsurveydivdlabelsmall", [], "any", false, false, true, 155), 155, $this->source);
        yield ">&nbsp;</small>
                            <span class=\"";
        // line 156
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 156), "saveformsurveydivdlabelspan", [], "any", false, false, true, 156), 156, $this->source);
        yield " visually-hidden asterisk\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 156), "saveformsurveydivdlabelspan", [], "any", false, false, true, 156), 156, $this->source);
        yield ">";
        yield gT("Mandatory");
        yield "</span>
                        </label>

                        <div class='";
        // line 159
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 159), "saveformsurveydivddiv", [], "any", false, false, true, 159), 159, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 159), "saveformsurveydivddiv", [], "any", false, false, true, 159), 159, $this->source);
        yield ">
                            ";
        // line 160
        $context["htmlOptions"] = ["id" => "savepass2", "name" => "savepass2", "class" => "form-control ls-important-field", "placeholder" => gT("Repeat password"), "required" => true];
        // line 168
        yield "
                            ";
        // line 169
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 169), "passwordField", ["savepass2", LS_Twig_Extension::getPost("savepass2"),         // line 172
($context["htmlOptions"] ?? null)], "method", false, false, true, 169), 169, $this->source);
        // line 173
        yield "
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class='";
        // line 179
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 179), "saveformsurveydive", [], "any", false, false, true, 179), 179, $this->source);
        yield "  mb-3' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 179), "saveformsurveydive", [], "any", false, false, true, 179), 179, $this->source);
        yield ">
                    <label class='";
        // line 180
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 180), "saveformsurveydivelabel", [], "any", false, false, true, 180), 180, $this->source);
        yield " control-label' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 180), "saveformsurveydivelabel", [], "any", false, false, true, 180), 180, $this->source);
        yield " >
                        ";
        // line 181
        yield gT("Your e-mail address");
        yield "
                    </label>
                    <div class='";
        // line 183
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 183), "saveformsurveydivediv", [], "any", false, false, true, 183), 183, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 183), "saveformsurveydivediv", [], "any", false, false, true, 183), 183, $this->source);
        yield ">

                        ";
        // line 185
        $context["htmlOptions"] = ["id" => "saveemail", "name" => "saveemail", "class" => "form-control ls-important-field", "placeholder" => gT("Enter e-mail address")];
        // line 192
        yield "
                        ";
        // line 193
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 193), "emailField", ["saveemail", LS_Twig_Extension::getPost("saveemail"),         // line 196
($context["htmlOptions"] ?? null)], "method", false, false, true, 193), 193, $this->source);
        // line 197
        yield "
                    </div>
                </div>


                ";
        // line 202
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 202), "aCaptcha", [], "any", false, false, true, 202), "show", [], "any", false, false, true, 202)) {
            // line 203
            yield "                    <!-- Captcha -->
                    <div class='";
            // line 204
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 204), "saveformsurveydivf", [], "any", false, false, true, 204), 204, $this->source);
            yield " mb-3' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 204), "saveformsurveydivd", [], "any", false, false, true, 204), 204, $this->source);
            yield " >
                        <label class='";
            // line 205
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 205), "saveformsurveydivflabel", [], "any", false, false, true, 205), 205, $this->source);
            yield " control-label' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 205), "saveformsurveydivdlabel", [], "any", false, false, true, 205), 205, $this->source);
            yield "  >
                            ";
            // line 206
            yield gT("Security question");
            yield "
                        </label>
                        <div class='";
            // line 208
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 208), "saveformsurveydivfdiv", [], "any", false, false, true, 208), 208, $this->source);
            yield "' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 208), "saveformsurveydivddiv", [], "any", false, false, true, 208), 208, $this->source);
            yield " >
                            <div class='";
            // line 209
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 209), "saveformsurveydivfdivdiv", [], "any", false, false, true, 209), 209, $this->source);
            yield " input-group' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 209), "saveformsurveydivddivdiv", [], "any", false, false, true, 209), 209, $this->source);
            yield ">
                                <div class='";
            // line 210
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 210), "saveformsurveydivfdivdivdiv", [], "any", false, false, true, 210), 210, $this->source);
            yield " ls-important-field' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 210), "saveformsurveydivddivdivdiv", [], "any", false, false, true, 210), 210, $this->source);
            yield " >
                                    <img src='";
            // line 211
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 211), "aCaptcha", [], "any", false, false, true, 211), "sImageUrl", [], "any", false, false, true, 211), 211, $this->source);
            yield "' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 211), "saveformsurveydivddivdivdivimg", [], "any", false, false, true, 211), 211, $this->source);
            yield "   />
                                </div>
                                <input class='";
            // line 213
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 213), "saveformsurveydivfdivdivinput", [], "any", false, false, true, 213), 213, $this->source);
            yield "  form-control ls-important-field'  ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 213), "saveformsurveydivfdivdivinput", [], "any", false, false, true, 213), 213, $this->source);
            yield " placeholder=\"";
            yield gT("Enter result here - numbers only");
            yield "\"/>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 218
        yield "                <div class=\"row button-row\">
                    <!-- return button -->
                    <div class='";
        // line 220
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 220), "saveformsurveydivh", [], "any", false, false, true, 220), 220, $this->source);
        yield " mb-3 col-auto' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 220), "saveformsurveydivh", [], "any", false, false, true, 220), 220, $this->source);
        yield ">
                        <div class=\"";
        // line 221
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 221), "saveformsurveydivhdiv", [], "any", false, false, true, 221), 221, $this->source);
        yield " \" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 221), "saveformsurveydivhdiv", [], "any", false, false, true, 221), 221, $this->source);
        yield ">
                            <a href=\"";
        // line 222
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 222), 222, $this->source);
        yield "\" class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 222), "saveformsurveydivhdiva", [], "any", false, false, true, 222), 222, $this->source);
        yield " btn btn-outline-secondary\">";
        yield gT("Return to survey");
        yield "</a>
                        </div>
                    </div>
                    <!-- save button -->
                    <div class='";
        // line 226
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 226), "saveformsurveydivg", [], "any", false, false, true, 226), 226, $this->source);
        yield " mb-3 col-auto' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 226), "saveformsurveydivg", [], "any", false, false, true, 226), 226, $this->source);
        yield ">
                        <div class='";
        // line 227
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 227), "saveformsurveydivgdiv", [], "any", false, false, true, 227), 227, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 227), "saveformsurveydivgdiv", [], "any", false, false, true, 227), 227, $this->source);
        yield ">
                            <button ";
        // line 228
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 228), "saveformsurveydivgdivbutton", [], "any", false, false, true, 228), 228, $this->source);
        yield "  class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 228), "saveformsurveydivgdivbutton", [], "any", false, false, true, 228), 228, $this->source);
        yield " btn btn-primary' >
                                ";
        // line 229
        yield gT("Save Now");
        yield "
                            </button>
                        </div>
                    </div>
                </div>
            </div>



    </div>

</form> <!-- main form -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/content/save.twig";
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
        return array (  490 => 229,  484 => 228,  478 => 227,  472 => 226,  461 => 222,  455 => 221,  449 => 220,  445 => 218,  433 => 213,  426 => 211,  420 => 210,  414 => 209,  408 => 208,  403 => 206,  397 => 205,  391 => 204,  388 => 203,  386 => 202,  379 => 197,  377 => 196,  376 => 193,  373 => 192,  371 => 185,  364 => 183,  359 => 181,  353 => 180,  347 => 179,  339 => 173,  337 => 172,  336 => 169,  333 => 168,  331 => 160,  325 => 159,  315 => 156,  307 => 155,  301 => 154,  295 => 153,  288 => 148,  286 => 147,  285 => 144,  282 => 143,  280 => 135,  273 => 133,  263 => 130,  255 => 129,  249 => 128,  243 => 127,  234 => 120,  232 => 119,  230 => 116,  227 => 114,  225 => 106,  218 => 104,  209 => 102,  201 => 101,  195 => 100,  187 => 97,  181 => 96,  175 => 93,  171 => 91,  169 => 89,  168 => 87,  167 => 86,  166 => 85,  163 => 84,  160 => 78,  157 => 72,  154 => 66,  150 => 64,  139 => 62,  135 => 61,  128 => 60,  126 => 59,  119 => 57,  111 => 52,  105 => 51,  98 => 49,  90 => 48,  84 => 47,  78 => 46,  72 => 45,  64 => 44,  57 => 42,  51 => 40,  46 => 37,  40 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/save.twig", "/var/www/vhosts/ebone.es/happy.ebone.es/limesurvey/themes/survey/fruity_twentythree/views/subviews/content/save.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 59, "for" => 61, "set" => 72);
        static $filters = array();
        static $functions = array("include" => 37, "gT" => 44, "count" => 59, "getPost" => 118);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['include', 'gT', 'count', 'getPost'],
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

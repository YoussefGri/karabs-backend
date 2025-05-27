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
use Twig\TemplateWrapper;

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_0f7ee5b118498020eb7ee75a9b13660e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 6), "currentAction", [], "any", false, false, false, 6) == "detail") ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", ["renderAsSwitch"], "method", false, false, false, 6))) {
            // line 7
            yield "    ";
            $context["badge_is_hidden"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 7), "currentAction", [], "any", false, false, false, 7) == "index") && (((CoreExtension::getAttribute($this->env, $this->source,             // line 9
($context["field"] ?? null), "value", [], "any", false, false, false, 9) == true) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 9), "get", ["hideValueWhenTrue"], "method", false, false, false, 9) == true)) || ((CoreExtension::getAttribute($this->env, $this->source,             // line 11
($context["field"] ?? null), "value", [], "any", false, false, false, 11) == false) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 11), "get", ["hideValueWhenFalse"], "method", false, false, false, 11) == true))));
            // line 13
            yield "
    ";
            // line 14
            if ((($tmp =  !($context["badge_is_hidden"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "        <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 15) == true)) ? ("badge-boolean-true") : ("badge-boolean-false"));
                yield "\">
            ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 16) == true)) ? ("label.true") : ("label.false")), [], "EasyAdminBundle"), "html", null, true);
                yield "
        </span>
    ";
            }
        } else {
            // line 20
            yield "    <div class=\"form-check form-switch\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 21), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 21) == true)) ? ("checked") : (""));
            yield "
            data-toggle-url=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 22), "get", ["toggleUrl"], "method", false, false, false, 22), "html", null, true);
            yield "\"
            ";
            // line 23
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formTypeOption", ["disabled"], "method", false, false, false, 23) == true)) ? ("disabled") : (""));
            yield " autocomplete=\"off\">
        <label class=\"form-check-label\" for=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 24), "html", null, true);
            yield "\"></label>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  86 => 24,  82 => 23,  78 => 22,  72 => 21,  69 => 20,  62 => 16,  57 => 15,  55 => 14,  52 => 13,  50 => 11,  49 => 9,  47 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/field/boolean.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/field/boolean.html.twig");
    }
}

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

/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_f25b85e11cfc975261ac567467999e4b extends Template
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
        // line 4
        if (("a" == CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 4))) {
            // line 5
            yield "    <a class=\"";
            yield (((($tmp = ((array_key_exists("isIncludedInDropdown", $context)) ? (Twig\Extension\CoreExtension::default(($context["isIncludedInDropdown"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 5), "html", null, true);
            yield "\"
       href=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "linkUrl", [], "any", false, false, false, 6), "html", null, true);
            yield "\"
       ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 7)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">";
            // line 8
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 8), "class" => "action-icon"]);
                yield " ";
            }
            // line 9
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 9))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"action-label\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 9));
                yield "</span>";
            }
            // line 10
            yield "</a>
";
        } elseif (("button" == CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 11))) {
            // line 12
            yield "    <button class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 12), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 12)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        <span class=\"btn-label\">";
            // line 14
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 14)]);
                yield " ";
            }
            // line 15
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"action-label\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 15));
                yield "</span>";
            }
            // line 16
            yield "</span>
    </button>
";
        } elseif (("form" == CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 18))) {
            // line 19
            $context["form_id"] = ((("form-" . CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 19)) . "-") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 20
            CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "setHtmlAttribute", ["form", ($context["form_id"] ?? null)], "method", false, false, false, 20);
            // line 21
            yield "<form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "linkUrl", [], "any", false, false, false, 21), "html", null, true);
            yield "\" method=\"POST\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
            yield "\">
        <button class=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 22), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 22)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
            <span class=\"btn-label\">";
            // line 24
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 24)]);
                yield " ";
            }
            // line 25
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 25))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"action-label\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 25));
                yield "</span>";
            }
            // line 26
            yield "</span>
        </button>
    </form>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action.html.twig";
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
        return array (  156 => 26,  150 => 25,  145 => 24,  129 => 22,  122 => 21,  120 => 20,  118 => 19,  116 => 18,  112 => 16,  106 => 15,  101 => 14,  84 => 12,  82 => 11,  79 => 10,  73 => 9,  68 => 8,  55 => 7,  51 => 6,  44 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/action.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/action.html.twig");
    }
}

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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_666edae4d1518383cc011b36043ad9f4 extends Template
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
        yield "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        if ((($tmp = ((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "            ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "numResults", [], "any", false, false, false, 8))], "EasyAdminBundle");
            yield "
        ";
        }
        // line 10
        yield "    </div>
    ";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 11) || CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 11))) {
            // line 12
            yield "        <nav class=\"pager list-pagination-paginator ";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("first-page") : (""));
            yield " ";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("last-page") : (""));
            yield "\">
            <ul class=\"pagination\">
                <li class=\"page-item page-item-previous ";
            // line 14
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 15
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [], "any", false, false, false, 15)], "method", false, false, false, 15), "html", null, true)));
            yield "\">
                        ";
            // line 16
            if (("rtl" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 16), "textDirection", [], "any", false, false, false, 16))) {
                // line 17
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            } else {
                // line 19
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-left", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            }
            // line 21
            yield "
                        <span class=\"btn-label\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </a>
                </li>

                ";
            // line 26
            if ((($tmp = ((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "pageRange", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 28
                    yield "                        <li class=\"page-item ";
                    yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 28))) ? ("active") : (""));
                    yield " ";
                    yield (((null === $context["page"])) ? ("disabled") : (""));
                    yield "\">
                            ";
                    // line 29
                    if ((null === $context["page"])) {
                        // line 30
                        yield "                                <span class=\"page-link\">&hellip;</span>
                            ";
                    } else {
                        // line 32
                        yield "                                <a class=\"page-link\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [$context["page"]], "method", false, false, false, 32), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                            ";
                    }
                    // line 34
                    yield "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "                ";
            } else {
                // line 37
                yield "                    <li class=\"page-item active ";
                yield (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 37))) ? ("disabled") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 38)], "method", false, false, false, 38), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 38), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            // line 41
            yield "
                <li class=\"page-item page-item-next ";
            // line 42
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 43
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [], "any", false, false, false, 43)], "method", false, false, false, 43), "html", null, true)));
            yield "\">
                        <span class=\"btn-label\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>

                        ";
            // line 46
            if (("rtl" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 46), "textDirection", [], "any", false, false, false, 46))) {
                // line 47
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-left", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            } else {
                // line 49
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            }
            // line 51
            yield "                    </a>
                </li>
            </ul>
        </nav>
    ";
        }
        // line 56
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/paginator.html.twig";
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
        return array (  188 => 56,  181 => 51,  175 => 49,  169 => 47,  167 => 46,  162 => 44,  158 => 43,  154 => 42,  151 => 41,  143 => 38,  138 => 37,  135 => 36,  128 => 34,  120 => 32,  116 => 30,  114 => 29,  107 => 28,  102 => 27,  100 => 26,  93 => 22,  90 => 21,  84 => 19,  78 => 17,  76 => 16,  72 => 15,  68 => 14,  60 => 12,  58 => 11,  55 => 10,  49 => 8,  47 => 7,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/paginator.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/paginator.html.twig");
    }
}

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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_28003bc55e2e6238666801a801a48853 extends Template
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
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<nav id=\"main-menu\">
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('main_menu_before', $context, $blocks);
        // line 4
        yield "
    <ul class=\"menu\">
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('main_menu', $context, $blocks);
        // line 33
        yield "    </ul>

    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('main_menu_after', $context, $blocks);
        // line 36
        yield "</nav>

";
        // line 43
        yield "
";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 7), "items", [], "any", false, false, false, 7));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 8
            yield "                ";
            yield from $this->unwrap()->yieldBlock('menu_item', $context, $blocks);
            // line 31
            yield "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "        ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "                    ";
        $context["is_submenu_item_with_no_items"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "type", [], "any", false, false, false, 9) == Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto::TYPE_SUBMENU")) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 9));
        // line 10
        yield "                    ";
        if ((($tmp = ($context["is_submenu_item_with_no_items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "                        ";
            // line 13
            yield "                    ";
        } else {
            // line 14
            yield "                        <li class=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "isMenuSection", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-header") : ("menu-item"));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-submenu") : (""));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "isSelected", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "isExpanded", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("expanded") : (""));
            yield "\">
                            ";
            // line 15
            yield $this->getTemplateForMacro("macro_render_menu_item", $context, 15, $this->getSourceContext())->macro_render_menu_item(...[($context["menuItem"] ?? null)]);
            yield "

                            ";
            // line 17
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "                                <ul class=\"submenu\">
                                    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "subItems", [], "any", false, false, false, 19));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                    // line 20
                    yield "                                        ";
                    yield from $this->unwrap()->yieldBlock('menu_subitem', $context, $blocks);
                    // line 25
                    yield "                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "                                </ul>
                            ";
            }
            // line 28
            yield "                        </li>
                    ";
        }
        // line 30
        yield "                ";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu_subitem(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "                                            <li class=\"";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isMenuSection", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-header") : ("menu-item"));
        yield " ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isSelected", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
        yield "\">
                                                ";
        // line 22
        yield $this->getTemplateForMacro("macro_render_menu_item", $context, 22, $this->getSourceContext())->macro_render_menu_item(...[($context["menuSubItem"] ?? null)]);
        yield "
                                            </li>
                                        ";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 38
    public function macro_render_html_attributes($item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "htmlAttributes", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                // line 40
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_value"], "html");
                yield "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attribute_name'], $context['attribute_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function macro_render_menu_item($item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 45
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isMenuSection", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "        <span class=\"menu-header-contents\" ";
                yield $this->getTemplateForMacro("macro_render_html_attributes", $context, 46, $this->getSourceContext())->macro_render_html_attributes(...[($context["item"] ?? null)]);
                yield ">
            ";
                // line 47
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 47))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 47), "class" => "menu-icon"]);
                }
                // line 48
                yield "            <span class=\"menu-item-label position-relative ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 48), "html", null, true);
                yield "\">
                ";
                // line 49
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 49));
                yield "
            </span>
            ";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                <span class=\"menu-item-badge rounded-pill badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "cssClass", [], "any", false, false, false, 52), "html", null, true);
                    yield "\" ";
                    yield $this->getTemplateForMacro("macro_render_html_attributes", $context, 52, $this->getSourceContext())->macro_render_html_attributes(...[CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52)]);
                    yield " style=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "htmlStyle", [], "any", false, false, false, 52), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "content", [], "any", false, false, false, 52), "html", null, true);
                    yield "</span>
            ";
                }
                // line 54
                yield "        </span>
    ";
            } else {
                // line 56
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkUrl", [], "any", false, false, false, 56), "html", null, true);
                yield "\" class=\"menu-item-contents ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("submenu-toggle") : (""));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 56), "html", null, true);
                yield "\" target=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkTarget", [], "any", false, false, false, 56), "html", null, true);
                yield "\" rel=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkRel", [], "any", false, false, false, 56), "html", null, true);
                yield "\" referrerpolicy=\"origin-when-cross-origin\" ";
                yield $this->getTemplateForMacro("macro_render_html_attributes", $context, 56, $this->getSourceContext())->macro_render_html_attributes(...[($context["item"] ?? null)]);
                yield ">
            ";
                // line 57
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 57))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 57), "class" => "menu-icon"]);
                }
                // line 58
                yield "            <span class=\"menu-item-label position-relative\">
                ";
                // line 59
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 59));
                yield "
            </span>
            ";
                // line 61
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "submenu-toggle-icon"]);
                }
                // line 62
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasVisibleBadge", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "                <span class=\"menu-item-badge rounded-pill badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "cssClass", [], "any", false, false, false, 63), "html", null, true);
                    yield "\" ";
                    yield $this->getTemplateForMacro("macro_render_html_attributes", $context, 63, $this->getSourceContext())->macro_render_html_attributes(...[CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63)]);
                    yield " style=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "htmlStyle", [], "any", false, false, false, 63), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "content", [], "any", false, false, false, 63), "html", null, true);
                    yield "</span>
            ";
                }
                // line 65
                yield "        </a>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/menu.html.twig";
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
        return array (  379 => 65,  367 => 63,  364 => 62,  360 => 61,  355 => 59,  352 => 58,  348 => 57,  333 => 56,  329 => 54,  317 => 52,  315 => 51,  310 => 49,  305 => 48,  301 => 47,  296 => 46,  293 => 45,  281 => 44,  266 => 40,  261 => 39,  249 => 38,  239 => 35,  231 => 22,  224 => 21,  217 => 20,  212 => 30,  208 => 28,  204 => 26,  190 => 25,  187 => 20,  170 => 19,  167 => 18,  165 => 17,  160 => 15,  149 => 14,  146 => 13,  144 => 11,  141 => 10,  138 => 9,  131 => 8,  126 => 32,  112 => 31,  109 => 8,  91 => 7,  84 => 6,  74 => 3,  68 => 43,  64 => 36,  62 => 35,  58 => 33,  56 => 6,  52 => 4,  50 => 3,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/menu.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/menu.html.twig");
    }
}

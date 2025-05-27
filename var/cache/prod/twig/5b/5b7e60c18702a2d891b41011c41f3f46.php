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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_78009eea01eba02bf50e3cf80275dfe0 extends Template
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

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'delete_form' => [$this, 'block_delete_form'],
            'detail_field' => [$this, 'block_detail_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 3), 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 8);
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 5)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 5)), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-detail ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6)), "html", null, true);
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 13
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 20
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 26)], false);
        yield "
    ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 27)], false);
        yield "
";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 32)], false);
        yield "
    ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 33)], false);
        yield "
";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 37), "customPageTitle", [($context["pageName"] ?? null), (((($tmp = ($context["entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 37)) : (null)), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 37), "translationParameters", [], "any", false, false, false, 37), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 37), "translationDomain", [], "any", false, false, false, 37)], "method", false, false, false, 37);
        // line 38
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["ea"] ?? null), "crud", [], "any", false, false, false, 39), "defaultPageTitle", [null, null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 39), "translationParameters", [], "any", false, false, false, 39)], "method", false, false, false, 39))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 40
($context["custom_page_title"] ?? null))));
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 45
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 45), ["action" => $context["action"]], false);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "    ";
        yield from $this->unwrap()->yieldBlock('detail_fields', $context, $blocks);
        // line 59
        yield "
    ";
        // line 60
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 52
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isFormLayoutField", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_layout_field", $context, 53, $this->getSourceContext())->macro_render_layout_field(...[$context["field"]]);
                yield "
            ";
            } else {
                // line 55
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_field_contents", $context, 55, $this->getSourceContext())->macro_render_field_contents(...[($context["entity"] ?? null), $context["field"]]);
                yield "
            ";
            }
            // line 57
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "    ";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 61)], false);
        yield "
    ";
        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 320
        yield "            ";
        if ((($tmp =  !($context["is_form_fieldset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 321
            yield "                ";
            yield $this->getTemplateForMacro("macro_render_field", $context, 321, $this->getSourceContext())->macro_render_field(...[($context["entity"] ?? null), ($context["field"] ?? null)]);
            yield "
            ";
        }
        // line 323
        yield "        ";
        yield from [];
    }

    // line 65
    public function macro_render_field_contents($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 66
            yield "    <div class=\"field-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 66), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "htmlAttributes", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 67) === false)) {
                // line 68
                yield "            ";
                // line 70
                yield "        ";
            } else {
                // line 71
                yield "            <div class=\"field-label\">";
                // line 72
                $context["label_html_attributes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 73
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 73))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 74
                        yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 76)), "html");
                        yield "\"";
                    }
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 80
                yield "<div ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label_html_attributes"] ?? null), "html", null, true);
                yield ">
                    ";
                // line 81
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 81));
                yield "
                </div>
            </div>
        ";
            }
            // line 85
            yield "
        <div class=\"field-value\">
            ";
            // line 87
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 87), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function macro_render_layout_field($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 93
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formType", [], "any", false, false, false, 93) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabListType")) {
                // line 94
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_list", $context, 94, $this->getSourceContext())->macro_render_tab_list(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 95
($context["field"] ?? null), "formType", [], "any", false, false, false, 95) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupOpenType")) {
                // line 96
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_group_open", $context, 96, $this->getSourceContext())->macro_render_tab_group_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["field"] ?? null), "formType", [], "any", false, false, false, 97) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupCloseType")) {
                // line 98
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_group_close", $context, 98, $this->getSourceContext())->macro_render_tab_group_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["field"] ?? null), "formType", [], "any", false, false, false, 99) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneOpenType")) {
                // line 100
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_open", $context, 100, $this->getSourceContext())->macro_render_tab_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["field"] ?? null), "formType", [], "any", false, false, false, 101) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneCloseType")) {
                // line 102
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_close", $context, 102, $this->getSourceContext())->macro_render_tab_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["field"] ?? null), "formType", [], "any", false, false, false, 103) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupOpenType")) {
                // line 104
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_group_open", $context, 104, $this->getSourceContext())->macro_render_column_group_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 105
($context["field"] ?? null), "formType", [], "any", false, false, false, 105) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupCloseType")) {
                // line 106
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_group_close", $context, 106, $this->getSourceContext())->macro_render_column_group_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["field"] ?? null), "formType", [], "any", false, false, false, 107) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnOpenType")) {
                // line 108
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_open", $context, 108, $this->getSourceContext())->macro_render_column_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 109
($context["field"] ?? null), "formType", [], "any", false, false, false, 109) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnCloseType")) {
                // line 110
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_close", $context, 110, $this->getSourceContext())->macro_render_column_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 111
($context["field"] ?? null), "formType", [], "any", false, false, false, 111) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetOpenType")) {
                // line 112
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_fieldset_open", $context, 112, $this->getSourceContext())->macro_render_fieldset_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 113
($context["field"] ?? null), "formType", [], "any", false, false, false, 113) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetCloseType")) {
                // line 114
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_fieldset_close", $context, 114, $this->getSourceContext())->macro_render_fieldset_close(...[($context["field"] ?? null)]);
                yield "
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function macro_render_tab_list($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 119
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 120
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 121
            yield "    ";
            $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
            // line 122
            yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 126
                yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
                // line 127
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 127), "html", null, true);
                yield "\" id=\"tablist-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 127), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 128
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 128), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 129
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 129), "class" => "tab-nav-item-icon"]);
                }
                // line 131
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 131), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 131), "translationDomain", [], "any", false, false, false, 131));
                yield "

                        ";
                // line 133
                $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 133);
                // line 134
                if ((($context["tab_error_count"] ?? null) > 0)) {
                    // line 135
                    yield "<span class=\"badge badge-danger\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                    yield "\">";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab_error_count"] ?? null), "html", null, true);
                    // line 137
                    yield "</span>";
                }
                // line 139
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "        </ul>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function macro_render_tab_group_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 147
            yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 151
    public function macro_render_tab_group_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 152
            yield "        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 156
    public function macro_render_tab_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 157
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 158
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 159
            yield "
    <div id=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 160), "html", null, true);
            yield "\" class=\"tab-pane ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 160), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["attr"], "method", false, false, false, 160));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 161
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 162
                yield "            <div class=\"content-header-help tab-help\">
                ";
                // line 163
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 163), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 163), "translationDomain", [], "any", false, false, false, 163));
                yield "
            </div>
        ";
            }
            // line 166
            yield "
        <div class=\"row\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 170
    public function macro_render_tab_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 171
            yield "        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function macro_render_column_group_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 176
            yield "    ";
            // line 177
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 177)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 177), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 178
                yield "        <div class=\"row\">
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 182
    public function macro_render_column_group_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 183
            yield "    ";
            // line 184
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 184), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 185
                yield "        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 189
    public function macro_render_column_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 190
            yield "    ";
            $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 190);
            // line 191
            yield "    ";
            $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 191) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 191) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 191) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 191) != null));
            // line 192
            yield "
    <div class=\"form-column ";
            // line 193
            yield (((($tmp =  !($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 193), "html", null, true);
            yield "\">
        ";
            // line 194
            if ((($tmp = ($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 195
                yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
                // line 197
                if ((($tmp = ($context["field_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["field_icon"] ?? null), "class" => "form-column-icon"]);
                }
                // line 198
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 198), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 198), "translationDomain", [], "any", false, false, false, 198));
                }
                // line 199
                yield "                </div>

                ";
                // line 201
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 202
                    yield "                    <div class=\"form-column-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 202), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 202), "translationDomain", [], "any", false, false, false, 202));
                    yield "</div>
                ";
                }
                // line 204
                yield "            </div>
        ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 208
    public function macro_render_column_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 209
            yield "    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 212
    public function macro_render_fieldset_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 213
            yield "    ";
            $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 213) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 213)) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 213));
            // line 214
            yield "    ";
            $context["is_collapsible_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSIBLE");
            // line 215
            yield "    ";
            $context["is_collapsed_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
            // line 216
            yield "    ";
            $context["is_collapsible"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsible_option_name"] ?? null)], "method", false, false, false, 216);
            // line 217
            yield "    ";
            $context["is_collapsed"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsed_option_name"] ?? null)], "method", false, false, false, 217);
            // line 218
            yield "
    <div class=\"form-fieldset ";
            // line 219
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 219), "html", null, true);
            yield "\">
        <fieldset>
            ";
            // line 221
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 222
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 222))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        ";
                // line 224
                $context["fieldset_title_contents"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 225
                    yield "                            ";
                    if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 226
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                        yield "
                            ";
                    }
                    // line 228
                    yield "
                            ";
                    // line 229
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 230
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 230), "class" => "form-fieldset-icon"]);
                        yield "
                            ";
                    }
                    // line 232
                    yield "
                            ";
                    // line 233
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 233));
                    yield "
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 235
                yield "
                        ";
                // line 236
                if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 237
                    yield "                            <a href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 237), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                    // line 238
                    yield (((($tmp = ($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                               aria-expanded=\"";
                    // line 239
                    yield (((($tmp = ($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 239), "html", null, true);
                    yield "\">
                                ";
                    // line 240
                    yield ($context["fieldset_title_contents"] ?? null);
                    yield "
                            </a>
                        ";
                } else {
                    // line 243
                    yield "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                    // line 244
                    yield ($context["fieldset_title_contents"] ?? null);
                    yield "
                            </span>
                        ";
                }
                // line 247
                yield "
                        ";
                // line 248
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 249
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 249));
                    yield "</div>
                        ";
                }
                // line 251
                yield "                    </div>
                </div>
            ";
            }
            // line 254
            yield "
            <div id=\"content-";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 255), "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
            yield " ";
            yield (((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                <div class=\"row\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 259
    public function macro_render_fieldset_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 260
            yield "                </div>
            </div>
        </fieldset>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 267
    public function macro_render_detail_fields_with_tabs($entity = null, $field_layout = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field_layout" => $field_layout,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 268
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 268.");
            // line 269
            yield "
    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 273));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 274
                yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 275
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 275), "html", null, true);
                yield "\" id=\"tab-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 275), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 276
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 277
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 277)]);
                }
                // line 279
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 279), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 279), "translationDomain", [], "any", false, false, false, 279));
                yield "
                        </a>
                    </li>
                ";
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
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            yield "            </ul>
            <div class=\"tab-content\">
                ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 285));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 286
                yield "                    <div id=\"tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 286), "html", null, true);
                yield "\" class=\"tab-pane ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 286)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 286), "")) : ("")), "html", null, true);
                yield "\">
                        ";
                // line 287
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 287)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 287), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 288
                    yield "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 289
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 289), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 289), "translationDomain", [], "any", false, false, false, 289));
                    yield "
                            </div>
                        ";
                }
                // line 292
                yield "                        <div class=\"row\">
                            ";
                // line 293
                yield $this->getTemplateForMacro("macro_render_detail_fields", $context, 293, $this->getSourceContext())->macro_render_detail_fields(...[($context["entity"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "fieldsInTab", [CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 293)], "method", false, false, false, 293)]);
                yield "
                        </div>
                    </div>
                ";
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
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            yield "            </div>
        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 302
    public function macro_render_detail_fields($entity = null, $fields = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "fields" => $fields,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 303
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 303.");
            // line 304
            yield "
    ";
            // line 305
            $context["form_fieldset_is_already_open"] = false;
            // line 306
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 307
                yield "        ";
                $context["is_form_fieldset"] = CoreExtension::inFilter("field-form_fieldset", CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 307));
                // line 308
                yield "
        ";
                // line 309
                if ((($context["is_form_fieldset"] ?? null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 309) &&  !($context["is_form_fieldset"] ?? null)))) {
                    // line 310
                    yield "            ";
                    if ((($tmp = ($context["form_fieldset_is_already_open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 311
                        yield "                ";
                        yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 311, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                        yield "
                ";
                        // line 312
                        $context["form_fieldset_is_already_open"] = false;
                        // line 313
                        yield "            ";
                    }
                    // line 314
                    yield "
            ";
                    // line 315
                    yield $this->getTemplateForMacro("macro_open_form_fieldset", $context, 315, $this->getSourceContext())->macro_open_form_fieldset(...[(((($tmp = ($context["is_form_fieldset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["field"]) : (null))]);
                    yield "
            ";
                    // line 316
                    $context["form_fieldset_is_already_open"] = true;
                    // line 317
                    yield "        ";
                }
                // line 318
                yield "
        ";
                // line 319
                yield from $this->unwrap()->yieldBlock('detail_field', $context, $blocks);
                // line 324
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            yield "
    ";
            // line 326
            if ((($tmp = ($context["form_fieldset_is_already_open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 327
                yield "        ";
                yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 327, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                yield "
        ";
                // line 328
                $context["form_fieldset_is_already_open"] = false;
                // line 329
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 332
    public function macro_open_form_fieldset($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 333
            yield "    ";
            trigger_deprecation('', '', "The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 333.");
            // line 334
            yield "
    ";
            // line 335
            $context["fieldset_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 335))));
            // line 336
            yield "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsible"], "method", false, false, false, 336)));
            // line 337
            yield "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsed"], "method", false, false, false, 337)));
            // line 338
            yield "    ";
            $context["fieldset_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 338), "get", ["icon"], "method", true, true, false, 338)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 338), "get", ["icon"], "method", false, false, false, 338), false)) : (false))));
            // line 339
            yield "    ";
            $context["fieldset_label"] = (((null === ($context["field"] ?? null))) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 339)));
            // line 340
            yield "    ";
            $context["fieldset_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 340)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 340), false)) : (false))));
            // line 341
            yield "    ";
            $context["fieldset_has_header"] = (((($context["collapsible"] ?? null) || ($context["fieldset_icon"] ?? null)) || ($context["fieldset_label"] ?? null)) || ($context["fieldset_help"] ?? null));
            // line 342
            yield "
    <div class=\"";
            // line 343
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 343) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 343)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 343), "html", null, true)) : (""));
            yield "\">
        <div class=\"form-fieldset\">
            ";
            // line 345
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 346
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["fieldset_help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        <a ";
                // line 348
                if ((($tmp =  !($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 349
                    yield "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 351
                    yield "                            href=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse ";
                    // line 352
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                            aria-expanded=\"";
                    // line 353
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\"
                        ";
                }
                // line 355
                yield "                        >
                            ";
                // line 356
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 357
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                            ";
                }
                // line 359
                yield "
                            ";
                // line 360
                if ((($tmp = ($context["fieldset_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 361
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["fieldset_icon"] ?? null), "class" => "form-fieldset-icon"]);
                    yield "
                            ";
                }
                // line 363
                yield "                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_label"] ?? null));
                yield "
                        </a>

                        ";
                // line 366
                if ((($tmp = ($context["fieldset_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 367
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_help"] ?? null));
                    yield "</div>
                        ";
                }
                // line 369
                yield "                    </div>
                </div>
            ";
            }
            // line 372
            yield "
            <div ";
            // line 373
            if ((($tmp = ($context["fieldset_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-fieldset-body ";
            yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                <dl class=\"datalist\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 377
    public function macro_close_form_fieldset(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 378
            yield "    ";
            trigger_deprecation('', '', "The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 378.");
            // line 379
            yield "
            </dl>
        </div>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 386
    public function macro_render_field($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 387
            yield "    ";
            trigger_deprecation('', '', "The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 387.");
            // line 388
            yield "
    <div class=\"data-row ";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 389), "html", null, true);
            yield "\">
        <dt>
            ";
            // line 391
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 391));
            yield "

            ";
            // line 393
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 393))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 394
                yield "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 394)), "html");
                yield "\">
                    ";
                // line 395
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:circle-info"]);
                yield "
                </a>
            ";
            }
            // line 398
            yield "        </dt>
        <dd>
            ";
            // line 400
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 400), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </dd>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/detail.html.twig";
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
        return array (  1465 => 400,  1461 => 398,  1455 => 395,  1450 => 394,  1448 => 393,  1443 => 391,  1438 => 389,  1435 => 388,  1432 => 387,  1419 => 386,  1408 => 379,  1405 => 378,  1394 => 377,  1377 => 373,  1374 => 372,  1369 => 369,  1363 => 367,  1361 => 366,  1354 => 363,  1348 => 361,  1346 => 360,  1343 => 359,  1337 => 357,  1335 => 356,  1332 => 355,  1325 => 353,  1321 => 352,  1316 => 351,  1312 => 349,  1310 => 348,  1302 => 346,  1300 => 345,  1295 => 343,  1292 => 342,  1289 => 341,  1286 => 340,  1283 => 339,  1280 => 338,  1277 => 337,  1274 => 336,  1272 => 335,  1269 => 334,  1266 => 333,  1254 => 332,  1247 => 329,  1245 => 328,  1240 => 327,  1238 => 326,  1235 => 325,  1221 => 324,  1219 => 319,  1216 => 318,  1213 => 317,  1211 => 316,  1207 => 315,  1204 => 314,  1201 => 313,  1199 => 312,  1194 => 311,  1191 => 310,  1189 => 309,  1186 => 308,  1183 => 307,  1165 => 306,  1163 => 305,  1160 => 304,  1157 => 303,  1144 => 302,  1135 => 297,  1117 => 293,  1114 => 292,  1108 => 289,  1105 => 288,  1103 => 287,  1092 => 286,  1075 => 285,  1071 => 283,  1053 => 279,  1050 => 277,  1048 => 276,  1039 => 275,  1036 => 274,  1019 => 273,  1013 => 269,  1010 => 268,  997 => 267,  987 => 260,  975 => 259,  960 => 255,  957 => 254,  952 => 251,  946 => 249,  944 => 248,  941 => 247,  935 => 244,  932 => 243,  926 => 240,  920 => 239,  916 => 238,  911 => 237,  909 => 236,  906 => 235,  900 => 233,  897 => 232,  891 => 230,  889 => 229,  886 => 228,  880 => 226,  877 => 225,  875 => 224,  867 => 222,  865 => 221,  858 => 219,  855 => 218,  852 => 217,  849 => 216,  846 => 215,  843 => 214,  840 => 213,  828 => 212,  821 => 209,  809 => 208,  801 => 204,  795 => 202,  793 => 201,  789 => 199,  784 => 198,  780 => 197,  776 => 195,  774 => 194,  768 => 193,  765 => 192,  762 => 191,  759 => 190,  747 => 189,  739 => 185,  736 => 184,  734 => 183,  722 => 182,  714 => 178,  711 => 177,  709 => 176,  697 => 175,  689 => 171,  677 => 170,  669 => 166,  663 => 163,  660 => 162,  658 => 161,  636 => 160,  633 => 159,  630 => 158,  627 => 157,  615 => 156,  607 => 152,  595 => 151,  587 => 147,  575 => 146,  567 => 142,  559 => 139,  556 => 137,  554 => 136,  550 => 135,  548 => 134,  546 => 133,  541 => 131,  538 => 129,  536 => 128,  527 => 127,  524 => 126,  520 => 125,  515 => 122,  512 => 121,  509 => 120,  506 => 119,  494 => 118,  484 => 114,  482 => 113,  477 => 112,  475 => 111,  470 => 110,  468 => 109,  463 => 108,  461 => 107,  456 => 106,  454 => 105,  449 => 104,  447 => 103,  442 => 102,  440 => 101,  435 => 100,  433 => 99,  428 => 98,  426 => 97,  421 => 96,  419 => 95,  414 => 94,  411 => 93,  399 => 92,  389 => 87,  385 => 85,  378 => 81,  373 => 80,  367 => 76,  363 => 74,  361 => 73,  359 => 72,  357 => 71,  354 => 70,  352 => 68,  350 => 67,  333 => 66,  320 => 65,  315 => 323,  309 => 321,  306 => 320,  299 => 319,  291 => 61,  284 => 60,  279 => 58,  273 => 57,  267 => 55,  261 => 53,  258 => 52,  253 => 51,  246 => 50,  241 => 60,  238 => 59,  235 => 50,  228 => 49,  216 => 45,  211 => 44,  204 => 43,  199 => 40,  198 => 39,  197 => 38,  195 => 37,  188 => 36,  181 => 33,  177 => 32,  172 => 31,  165 => 30,  158 => 27,  154 => 26,  149 => 25,  142 => 24,  130 => 20,  126 => 19,  121 => 18,  114 => 17,  102 => 13,  98 => 12,  93 => 11,  86 => 10,  75 => 6,  64 => 5,  60 => 3,  58 => 8,  51 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/detail.html.twig");
    }
}

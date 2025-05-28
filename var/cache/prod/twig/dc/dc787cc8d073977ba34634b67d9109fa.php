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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_745032f382cc8358a0284a087fd0843b extends Template
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
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_row_attributes' => [$this, 'block_entity_row_attributes'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 4), 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 10
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 10), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 10);
        // line 45
        $context["has_batch_actions"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batch_actions"] ?? null)) > 0);
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true)) : (""));
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 15
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

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 22
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

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 28)], false);
        yield "
    ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 29)], false);
        yield "
";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 34)], false);
        yield "
    ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 35)], false);
        yield "
";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 39), "customPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 39), "translationParameters", [], "any", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 39), "translationDomain", [], "any", false, false, false, 39)], "method", false, false, false, 39);
        // line 40
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["ea"] ?? null), "crud", [], "any", false, false, false, 41), "defaultPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 41), "translationParameters", [], "any", false, false, false, 41)], "method", false, false, false, 41), [],         // line 5
($context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 42
($context["custom_page_title"] ?? null), [],         // line 5
($context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] ?? null))));
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) {
            // line 48
            yield "        <div class=\"datagrid-filters\">
            ";
            // line 49
            yield from $this->unwrap()->yieldBlock('filters', $context, $blocks);
            // line 62
            yield "        </div>
    ";
        }
        // line 64
        yield "
    ";
        // line 65
        yield from $this->unwrap()->yieldBlock('global_actions', $context, $blocks);
        // line 72
        yield "    ";
        yield from $this->unwrap()->yieldBlock('batch_actions', $context, $blocks);
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "                ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 50), "query", [], "any", false, true, false, 50), "all", [], "any", false, true, false, 50), "filters", [], "array", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 50), "query", [], "any", false, false, false, 50), "all", [], "any", false, false, false, 50)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["filters"] ?? null) : null), [])) : ([])));
        // line 51
        yield "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", ["renderFilters"], "method", false, false, false, 52), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        yield (((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("action-filters-applied") : (""));
        yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:filter"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("filter.title", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 53), "translationParameters", [], "any", false, false, false, 53), "EasyAdminBundle"), [],         // line 5
($context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] ?? null)), "html", null, true);
        // line 53
        if ((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <span class=\"action-filters-button-count\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["applied_filters"] ?? null)), "html", null, true);
            yield ")</span>";
        }
        // line 54
        yield "                    </a>
                    ";
        // line 55
        if ((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["filters"], "method", false, false, false, 56), "setAction", ["index"], "method", false, false, false, 56), "html", null, true);
            yield "\" class=\"btn btn-secondary action-filters-reset\">
                            ";
            // line 57
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:xmark"]);
            yield "
                        </a>
                    ";
        }
        // line 60
        yield "                </div>
            ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "        <div class=\"global-actions\">
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 68
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 68), ["action" => $context["action"]], false);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "        </div>
    ";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "        ";
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "            <div class=\"batch-actions d-none\">
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 76
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 76), ["action" => $context["action"]], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "            </div>
        ";
        }
        // line 80
        yield "    ";
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 84
        yield "    ";
        // line 85
        yield "    ";
        $context["sort_field_name"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 85), "get", ["sort"], "method", false, false, false, 85)));
        // line 86
        yield "    ";
        $context["sort_order"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "get", ["sort"], "method", false, false, false, 86));
        // line 87
        yield "    ";
        $context["some_results_are_hidden"] = Twig\Extension\CoreExtension::reduce($this->env, ($context["entities"] ?? null), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return (($context["some_results_are_hidden"] ?? null) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isAccessible", [], "any", false, false, false, 87)); }, false);
        // line 88
        yield "    ";
        $context["has_footer"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) != 0);
        // line 89
        yield "    ";
        $context["has_search"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 89), "isSearchEnabled", [], "any", false, false, false, 89);
        // line 90
        yield "    ";
        $context["has_filters"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0);
        // line 91
        yield "    ";
        $context["num_results"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null));
        // line 92
        yield "
    <table class=\"table datagrid ";
        // line 93
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        yield "\">
        ";
        // line 94
        if ((($context["num_results"] ?? null) > 0)) {
            // line 95
            yield "            <thead>
            ";
            // line 96
            yield from $this->unwrap()->yieldBlock('table_head', $context, $blocks);
            // line 135
            yield "            </thead>
        ";
        }
        // line 137
        yield "
        <tbody>
        ";
        // line 139
        yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
        // line 218
        yield "        </tbody>

        <tfoot>
        ";
        // line 221
        yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
        // line 223
        yield "        </tfoot>
    </table>

    ";
        // line 226
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) {
            // line 227
            yield "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 228
            yield from $this->unwrap()->yieldBlock('paginator', $context, $blocks);
            // line 231
            yield "        </div>
    ";
        }
        // line 233
        yield "
    ";
        // line 234
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        // line 237
        yield "
    ";
        // line 238
        if ((($tmp = ($context["has_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 239
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            yield "
    ";
        }
        // line 241
        yield "
    ";
        // line 242
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 243
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            yield "
    ";
        }
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        yield "                <tr>
                    ";
        // line 98
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 105
        yield "
                    ";
        // line 106
        $context["ea_sort_asc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 107
        yield "                    ";
        $context["ea_sort_desc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 108
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 108); })), "fields", [], "any", true, true, false, 108) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 108); })), "fields", [], "any", false, false, false, 108)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 108); })), "fields", [], "any", false, false, false, 108)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 109
            yield "                        ";
            $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 109), "searchFields", [], "any", false, false, false, 109)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 109), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 109), "searchFields", [], "any", false, false, false, 109)));
            // line 110
            yield "                        ";
            $context["is_sorting_field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 110), "isSortingField", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 110)], "method", false, false, false, 110);
            // line 111
            yield "                        ";
            $context["next_sort_direction"] = (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 111), "sortDirection", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 111)], "method", false, false, false, 111) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 112
            yield "                        ";
            $context["column_icon"] = (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("internal:sort-arrow-up") : ("internal:sort-arrow-down"))) : ("internal:sort-arrows"));
            // line 113
            yield "
                        <th data-column=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 114), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp = ($context["is_searchable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
            yield " ";
            yield (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("sorted") : (""));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-virtual") : (""));
            yield " header-for-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 114), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($_v1 = ($context["class"] ?? null)) && is_string($_v2 = "field-") && str_starts_with($_v1, $_v2)); }), ""), "html", null, true);
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 114), "html", null, true);
            yield "\" dir=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 114), "textDirection", [], "any", false, false, false, 114), "html", null, true);
            yield "\">
                            ";
            // line 115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                yield "                                ";
                $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["page", 1], "method", false, false, false, 116), "set", ["sort", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 116) => ($context["next_sort_direction"] ?? null)]], "method", false, false, false, 116);
                // line 117
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 118
                    yield "                                    ";
                    $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sortable_url"] ?? null), "setController", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 118), "attributes", [], "any", false, false, false, 118), "get", ["crudControllerFqcn"], "method", false, false, false, 118)], "method", false, false, false, 118), "setAction", ["index"], "method", false, false, false, 118);
                    // line 119
                    yield "                                ";
                }
                // line 120
                yield "
                                <a href=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sortable_url"] ?? null), "html", null, true);
                yield "\">
                                    ";
                // line 122
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 122), [],                 // line 5
($context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] ?? null));
                // line 122
                yield " ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["column_icon"] ?? null)]);
                yield "
                                </a>
                            ";
            } else {
                // line 125
                yield "                                <span>";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 125), [],                 // line 5
($context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] ?? null));
                // line 125
                yield "</span>
                            ";
            }
            // line 127
            yield "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "
                    <th class=\"";
        // line 130
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 130), "showEntityActionsAsDropdown", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown-table-head") : (""));
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 130), "textDirection", [], "any", false, false, false, 130), "html", null, true);
        yield "\">
                        <span class=\"visually-hidden\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.entity_actions", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 131), "translationParameters", [], "any", false, false, false, 131), "EasyAdminBundle"), [],         // line 5
($context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] ?? null)), "html", null, true);
        // line 131
        yield "</span>
                    </th>
                </tr>
            ";
        yield from [];
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 140
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 141
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "                    <tr data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 142), "html", null, true);
                yield "\" ";
                yield from $this->unwrap()->yieldBlock('entity_row_attributes', $context, $blocks);
                yield ">
                        ";
                // line 143
                if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 144
                    yield "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 146), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 146), "html", null, true);
                    yield "\">
                                </div>
                            </td>
                        ";
                }
                // line 150
                yield "
                        ";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 151));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 152
                    yield "                            ";
                    $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 152), "searchFields", [], "any", false, false, false, 152)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 152), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 152), "searchFields", [], "any", false, false, false, 152)));
                    // line 153
                    yield "
                            <td data-column=\"";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 154), "html", null, true);
                    yield "\" data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 154), [],                     // line 5
($context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] ?? null)), "html");
                    // line 154
                    yield "\" class=\"";
                    yield (((($tmp = ($context["is_searchable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
                    yield " ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 154) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    yield " text-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 154), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 154), "html", null, true);
                    yield "\" dir=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 154), "textDirection", [], "any", false, false, false, 154), "html", null, true);
                    yield "\" ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "htmlAttributes", [], "any", false, false, false, 154));
                    foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                        yield "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield ">
                                ";
                    // line 155
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 155), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    yield "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                yield "
                        ";
                // line 159
                yield from $this->unwrap()->yieldBlock('entity_actions', $context, $blocks);
                // line 184
                yield "                    </tr>

                ";
            }
            // line 187
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 188
            yield "                ";
            yield from $this->unwrap()->yieldBlock('table_body_empty', $context, $blocks);
            // line 208
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entity'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "
            ";
        // line 210
        if ((($tmp = ($context["some_results_are_hidden"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">";
            // line 213
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock", "class" => "mr-1"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </td>
                </tr>
            ";
        }
        // line 217
        yield "        ";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 160
        yield "                            <td class=\"actions ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 160), "showEntityActionsAsDropdown", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown") : (""));
        yield "\">
                                ";
        // line 161
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 161), "count", [], "any", false, false, false, 161) > 0)) {
            // line 162
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 162), "showEntityActionsAsDropdown", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                                        ";
                $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v3->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]), $context, "@EasyAdmin/crud/index.html.twig", 8589116241);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 8589116241);
                    $this->load("@EasyAdmin/crud/index.html.twig", 163, "8589116241")->display($embeddedContext, $embeddedBlocks);
                    $_v3->finishEmbedComponent();
                }
                // line 176
                yield "                                    ";
            } else {
                // line 177
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 177));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 178
                    yield "                                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 178), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 178), "showEntityActionsAsDropdown", [], "any", false, false, false, 178)], false);
                    yield "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                yield "                                    ";
            }
            // line 181
            yield "                                ";
        }
        // line 182
        yield "                            </td>
                        ";
        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body_empty(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 189
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 190
            yield "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 199
            if ((3 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 199))) {
                // line 200
                yield "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("datagrid.no_results", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 202), "translationParameters", [], "any", false, false, false, 202), "EasyAdminBundle"), [],                 // line 5
($context["__internal_ef9c088bd5d28e2dd3c83ea9970805e60346528f09f31b7e88cfd58fd356e2ac"] ?? null)), "html", null, true);
                // line 202
                yield "
                                </td>
                            </tr>
                        ";
            }
            // line 206
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                ";
        yield from [];
    }

    // line 221
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 222
        yield "        ";
        yield from [];
    }

    // line 228
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paginator(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 229
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["crud/paginator"], "method", false, false, false, 229), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        yield "
            ";
        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 235
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", [], false);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  934 => 235,  927 => 234,  919 => 229,  912 => 228,  907 => 222,  900 => 221,  895 => 207,  881 => 206,  875 => 202,  873 => 5,  872 => 202,  868 => 200,  866 => 199,  855 => 190,  837 => 189,  830 => 188,  824 => 182,  821 => 181,  818 => 180,  809 => 178,  804 => 177,  801 => 176,  786 => 163,  783 => 162,  781 => 161,  776 => 160,  769 => 159,  759 => 142,  754 => 217,  745 => 213,  741 => 211,  739 => 210,  736 => 209,  730 => 208,  727 => 188,  714 => 187,  709 => 184,  707 => 159,  704 => 158,  695 => 155,  670 => 154,  668 => 5,  665 => 154,  662 => 153,  659 => 152,  655 => 151,  652 => 150,  643 => 146,  639 => 144,  637 => 143,  630 => 142,  627 => 141,  608 => 140,  601 => 139,  593 => 131,  591 => 5,  590 => 131,  584 => 130,  581 => 129,  574 => 127,  570 => 125,  568 => 5,  566 => 125,  559 => 122,  557 => 5,  556 => 122,  552 => 121,  549 => 120,  546 => 119,  543 => 118,  540 => 117,  537 => 116,  535 => 115,  519 => 114,  516 => 113,  513 => 112,  510 => 111,  507 => 110,  504 => 109,  499 => 108,  496 => 107,  494 => 106,  491 => 105,  483 => 99,  481 => 98,  478 => 97,  471 => 96,  462 => 243,  460 => 242,  457 => 241,  451 => 239,  449 => 238,  446 => 237,  444 => 234,  441 => 233,  437 => 231,  435 => 228,  432 => 227,  430 => 226,  425 => 223,  423 => 221,  418 => 218,  416 => 139,  412 => 137,  408 => 135,  406 => 96,  403 => 95,  401 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  385 => 89,  382 => 88,  379 => 87,  376 => 86,  373 => 85,  371 => 84,  364 => 83,  359 => 80,  355 => 78,  346 => 76,  342 => 75,  339 => 74,  336 => 73,  329 => 72,  323 => 70,  314 => 68,  310 => 67,  307 => 66,  300 => 65,  294 => 60,  288 => 57,  283 => 56,  281 => 55,  278 => 54,  272 => 53,  270 => 5,  267 => 53,  261 => 52,  258 => 51,  255 => 50,  248 => 49,  242 => 72,  240 => 65,  237 => 64,  233 => 62,  231 => 49,  228 => 48,  225 => 47,  218 => 46,  213 => 5,  212 => 42,  211 => 5,  210 => 41,  209 => 40,  207 => 39,  200 => 38,  193 => 35,  189 => 34,  184 => 33,  177 => 32,  170 => 29,  166 => 28,  161 => 27,  154 => 26,  142 => 22,  138 => 21,  133 => 20,  126 => 19,  114 => 15,  110 => 14,  105 => 13,  98 => 12,  87 => 8,  76 => 7,  72 => 4,  70 => 45,  68 => 10,  66 => 5,  59 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_745032f382cc8358a0284a087fd0843b___8589116241 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 163
        return $this->load(($context["__parent__"] ?? null), 163);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v4->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/crud/index.html.twig", 29080550831);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 29080550831);
            $this->load("@EasyAdmin/crud/index.html.twig", 164, "29080550831")->display($embeddedContext, $embeddedBlocks);
            $_v4->finishEmbedComponent();
        }
        // line 167
        yield "
                                            ";
        // line 168
        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/crud/index.html.twig", 27663508481);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 27663508481);
            $this->load("@EasyAdmin/crud/index.html.twig", 168, "27663508481")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 175
        yield "                                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1052 => 175,  1038 => 168,  1035 => 167,  1015 => 164,  996 => 163,  934 => 235,  927 => 234,  919 => 229,  912 => 228,  907 => 222,  900 => 221,  895 => 207,  881 => 206,  875 => 202,  873 => 5,  872 => 202,  868 => 200,  866 => 199,  855 => 190,  837 => 189,  830 => 188,  824 => 182,  821 => 181,  818 => 180,  809 => 178,  804 => 177,  801 => 176,  786 => 163,  783 => 162,  781 => 161,  776 => 160,  769 => 159,  759 => 142,  754 => 217,  745 => 213,  741 => 211,  739 => 210,  736 => 209,  730 => 208,  727 => 188,  714 => 187,  709 => 184,  707 => 159,  704 => 158,  695 => 155,  670 => 154,  668 => 5,  665 => 154,  662 => 153,  659 => 152,  655 => 151,  652 => 150,  643 => 146,  639 => 144,  637 => 143,  630 => 142,  627 => 141,  608 => 140,  601 => 139,  593 => 131,  591 => 5,  590 => 131,  584 => 130,  581 => 129,  574 => 127,  570 => 125,  568 => 5,  566 => 125,  559 => 122,  557 => 5,  556 => 122,  552 => 121,  549 => 120,  546 => 119,  543 => 118,  540 => 117,  537 => 116,  535 => 115,  519 => 114,  516 => 113,  513 => 112,  510 => 111,  507 => 110,  504 => 109,  499 => 108,  496 => 107,  494 => 106,  491 => 105,  483 => 99,  481 => 98,  478 => 97,  471 => 96,  462 => 243,  460 => 242,  457 => 241,  451 => 239,  449 => 238,  446 => 237,  444 => 234,  441 => 233,  437 => 231,  435 => 228,  432 => 227,  430 => 226,  425 => 223,  423 => 221,  418 => 218,  416 => 139,  412 => 137,  408 => 135,  406 => 96,  403 => 95,  401 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  385 => 89,  382 => 88,  379 => 87,  376 => 86,  373 => 85,  371 => 84,  364 => 83,  359 => 80,  355 => 78,  346 => 76,  342 => 75,  339 => 74,  336 => 73,  329 => 72,  323 => 70,  314 => 68,  310 => 67,  307 => 66,  300 => 65,  294 => 60,  288 => 57,  283 => 56,  281 => 55,  278 => 54,  272 => 53,  270 => 5,  267 => 53,  261 => 52,  258 => 51,  255 => 50,  248 => 49,  242 => 72,  240 => 65,  237 => 64,  233 => 62,  231 => 49,  228 => 48,  225 => 47,  218 => 46,  213 => 5,  212 => 42,  211 => 5,  210 => 41,  209 => 40,  207 => 39,  200 => 38,  193 => 35,  189 => 34,  184 => 33,  177 => 32,  170 => 29,  166 => 28,  161 => 27,  154 => 26,  142 => 22,  138 => 21,  133 => 20,  126 => 19,  114 => 15,  110 => 14,  105 => 13,  98 => 12,  87 => 8,  76 => 7,  72 => 4,  70 => 45,  68 => 10,  66 => 5,  59 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_745032f382cc8358a0284a087fd0843b___29080550831 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 164
        return $this->load(($context["__parent__"] ?? null), 164);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:dots-horizontal"]);
        yield "
                                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1130 => 165,  1111 => 164,  1052 => 175,  1038 => 168,  1035 => 167,  1015 => 164,  996 => 163,  934 => 235,  927 => 234,  919 => 229,  912 => 228,  907 => 222,  900 => 221,  895 => 207,  881 => 206,  875 => 202,  873 => 5,  872 => 202,  868 => 200,  866 => 199,  855 => 190,  837 => 189,  830 => 188,  824 => 182,  821 => 181,  818 => 180,  809 => 178,  804 => 177,  801 => 176,  786 => 163,  783 => 162,  781 => 161,  776 => 160,  769 => 159,  759 => 142,  754 => 217,  745 => 213,  741 => 211,  739 => 210,  736 => 209,  730 => 208,  727 => 188,  714 => 187,  709 => 184,  707 => 159,  704 => 158,  695 => 155,  670 => 154,  668 => 5,  665 => 154,  662 => 153,  659 => 152,  655 => 151,  652 => 150,  643 => 146,  639 => 144,  637 => 143,  630 => 142,  627 => 141,  608 => 140,  601 => 139,  593 => 131,  591 => 5,  590 => 131,  584 => 130,  581 => 129,  574 => 127,  570 => 125,  568 => 5,  566 => 125,  559 => 122,  557 => 5,  556 => 122,  552 => 121,  549 => 120,  546 => 119,  543 => 118,  540 => 117,  537 => 116,  535 => 115,  519 => 114,  516 => 113,  513 => 112,  510 => 111,  507 => 110,  504 => 109,  499 => 108,  496 => 107,  494 => 106,  491 => 105,  483 => 99,  481 => 98,  478 => 97,  471 => 96,  462 => 243,  460 => 242,  457 => 241,  451 => 239,  449 => 238,  446 => 237,  444 => 234,  441 => 233,  437 => 231,  435 => 228,  432 => 227,  430 => 226,  425 => 223,  423 => 221,  418 => 218,  416 => 139,  412 => 137,  408 => 135,  406 => 96,  403 => 95,  401 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  385 => 89,  382 => 88,  379 => 87,  376 => 86,  373 => 85,  371 => 84,  364 => 83,  359 => 80,  355 => 78,  346 => 76,  342 => 75,  339 => 74,  336 => 73,  329 => 72,  323 => 70,  314 => 68,  310 => 67,  307 => 66,  300 => 65,  294 => 60,  288 => 57,  283 => 56,  281 => 55,  278 => 54,  272 => 53,  270 => 5,  267 => 53,  261 => 52,  258 => 51,  255 => 50,  248 => 49,  242 => 72,  240 => 65,  237 => 64,  233 => 62,  231 => 49,  228 => 48,  225 => 47,  218 => 46,  213 => 5,  212 => 42,  211 => 5,  210 => 41,  209 => 40,  207 => 39,  200 => 38,  193 => 35,  189 => 34,  184 => 33,  177 => 32,  170 => 29,  166 => 28,  161 => 27,  154 => 26,  142 => 22,  138 => 21,  133 => 20,  126 => 19,  114 => 15,  110 => 14,  105 => 13,  98 => 12,  87 => 8,  76 => 7,  72 => 4,  70 => 45,  68 => 10,  66 => 5,  59 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_745032f382cc8358a0284a087fd0843b___27663508481 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 168
        return $this->load(($context["__parent__"] ?? null), 168);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v6 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v6->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v6->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/crud/index.html.twig", 35549415901);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 35549415901);
            $this->load("@EasyAdmin/crud/index.html.twig", 169, "35549415901")->display($embeddedContext, $embeddedBlocks);
            $_v6->finishEmbedComponent();
        }
        // line 174
        yield "                                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1236 => 174,  1216 => 169,  1197 => 168,  1130 => 165,  1111 => 164,  1052 => 175,  1038 => 168,  1035 => 167,  1015 => 164,  996 => 163,  934 => 235,  927 => 234,  919 => 229,  912 => 228,  907 => 222,  900 => 221,  895 => 207,  881 => 206,  875 => 202,  873 => 5,  872 => 202,  868 => 200,  866 => 199,  855 => 190,  837 => 189,  830 => 188,  824 => 182,  821 => 181,  818 => 180,  809 => 178,  804 => 177,  801 => 176,  786 => 163,  783 => 162,  781 => 161,  776 => 160,  769 => 159,  759 => 142,  754 => 217,  745 => 213,  741 => 211,  739 => 210,  736 => 209,  730 => 208,  727 => 188,  714 => 187,  709 => 184,  707 => 159,  704 => 158,  695 => 155,  670 => 154,  668 => 5,  665 => 154,  662 => 153,  659 => 152,  655 => 151,  652 => 150,  643 => 146,  639 => 144,  637 => 143,  630 => 142,  627 => 141,  608 => 140,  601 => 139,  593 => 131,  591 => 5,  590 => 131,  584 => 130,  581 => 129,  574 => 127,  570 => 125,  568 => 5,  566 => 125,  559 => 122,  557 => 5,  556 => 122,  552 => 121,  549 => 120,  546 => 119,  543 => 118,  540 => 117,  537 => 116,  535 => 115,  519 => 114,  516 => 113,  513 => 112,  510 => 111,  507 => 110,  504 => 109,  499 => 108,  496 => 107,  494 => 106,  491 => 105,  483 => 99,  481 => 98,  478 => 97,  471 => 96,  462 => 243,  460 => 242,  457 => 241,  451 => 239,  449 => 238,  446 => 237,  444 => 234,  441 => 233,  437 => 231,  435 => 228,  432 => 227,  430 => 226,  425 => 223,  423 => 221,  418 => 218,  416 => 139,  412 => 137,  408 => 135,  406 => 96,  403 => 95,  401 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  385 => 89,  382 => 88,  379 => 87,  376 => 86,  373 => 85,  371 => 84,  364 => 83,  359 => 80,  355 => 78,  346 => 76,  342 => 75,  339 => 74,  336 => 73,  329 => 72,  323 => 70,  314 => 68,  310 => 67,  307 => 66,  300 => 65,  294 => 60,  288 => 57,  283 => 56,  281 => 55,  278 => 54,  272 => 53,  270 => 5,  267 => 53,  261 => 52,  258 => 51,  255 => 50,  248 => 49,  242 => 72,  240 => 65,  237 => 64,  233 => 62,  231 => 49,  228 => 48,  225 => 47,  218 => 46,  213 => 5,  212 => 42,  211 => 5,  210 => 41,  209 => 40,  207 => 39,  200 => 38,  193 => 35,  189 => 34,  184 => 33,  177 => 32,  170 => 29,  166 => 28,  161 => 27,  154 => 26,  142 => 22,  138 => 21,  133 => 20,  126 => 19,  114 => 15,  110 => 14,  105 => 13,  98 => 12,  87 => 8,  76 => 7,  72 => 4,  70 => 45,  68 => 10,  66 => 5,  59 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_745032f382cc8358a0284a087fd0843b___35549415901 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 169
        return $this->load(($context["__parent__"] ?? null), 169);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 170));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 171
            yield "                                                        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "cssClass", [], "any", false, false, false, 171), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "linkUrl", [], "any", false, false, false, 171), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 171), "icon:class" => "action-icon", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "htmlAttributes", [], "any", false, false, false, 171), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 171)), "label:class" => "action-label", "renderLabelRaw" => true]);
            yield "
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "                                                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1333 => 173,  1324 => 171,  1314 => 170,  1295 => 169,  1236 => 174,  1216 => 169,  1197 => 168,  1130 => 165,  1111 => 164,  1052 => 175,  1038 => 168,  1035 => 167,  1015 => 164,  996 => 163,  934 => 235,  927 => 234,  919 => 229,  912 => 228,  907 => 222,  900 => 221,  895 => 207,  881 => 206,  875 => 202,  873 => 5,  872 => 202,  868 => 200,  866 => 199,  855 => 190,  837 => 189,  830 => 188,  824 => 182,  821 => 181,  818 => 180,  809 => 178,  804 => 177,  801 => 176,  786 => 163,  783 => 162,  781 => 161,  776 => 160,  769 => 159,  759 => 142,  754 => 217,  745 => 213,  741 => 211,  739 => 210,  736 => 209,  730 => 208,  727 => 188,  714 => 187,  709 => 184,  707 => 159,  704 => 158,  695 => 155,  670 => 154,  668 => 5,  665 => 154,  662 => 153,  659 => 152,  655 => 151,  652 => 150,  643 => 146,  639 => 144,  637 => 143,  630 => 142,  627 => 141,  608 => 140,  601 => 139,  593 => 131,  591 => 5,  590 => 131,  584 => 130,  581 => 129,  574 => 127,  570 => 125,  568 => 5,  566 => 125,  559 => 122,  557 => 5,  556 => 122,  552 => 121,  549 => 120,  546 => 119,  543 => 118,  540 => 117,  537 => 116,  535 => 115,  519 => 114,  516 => 113,  513 => 112,  510 => 111,  507 => 110,  504 => 109,  499 => 108,  496 => 107,  494 => 106,  491 => 105,  483 => 99,  481 => 98,  478 => 97,  471 => 96,  462 => 243,  460 => 242,  457 => 241,  451 => 239,  449 => 238,  446 => 237,  444 => 234,  441 => 233,  437 => 231,  435 => 228,  432 => 227,  430 => 226,  425 => 223,  423 => 221,  418 => 218,  416 => 139,  412 => 137,  408 => 135,  406 => 96,  403 => 95,  401 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  385 => 89,  382 => 88,  379 => 87,  376 => 86,  373 => 85,  371 => 84,  364 => 83,  359 => 80,  355 => 78,  346 => 76,  342 => 75,  339 => 74,  336 => 73,  329 => 72,  323 => 70,  314 => 68,  310 => 67,  307 => 66,  300 => 65,  294 => 60,  288 => 57,  283 => 56,  281 => 55,  278 => 54,  272 => 53,  270 => 5,  267 => 53,  261 => 52,  258 => 51,  255 => 50,  248 => 49,  242 => 72,  240 => 65,  237 => 64,  233 => 62,  231 => 49,  228 => 48,  225 => 47,  218 => 46,  213 => 5,  212 => 42,  211 => 5,  210 => 41,  209 => 40,  207 => 39,  200 => 38,  193 => 35,  189 => 34,  184 => 33,  177 => 32,  170 => 29,  166 => 28,  161 => 27,  154 => 26,  142 => 22,  138 => 21,  133 => 20,  126 => 19,  114 => 15,  110 => 14,  105 => 13,  98 => 12,  87 => 8,  76 => 7,  72 => 4,  70 => 45,  68 => 10,  66 => 5,  59 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}

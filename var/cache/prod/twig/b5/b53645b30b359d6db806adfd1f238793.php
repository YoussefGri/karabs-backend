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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_efd9beb2016dcb3dea9b6c818b4ffe6c extends Template
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

        // line 2
        $_trait_0 = $this->load("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", 2);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_crud_widget_fieldsets' => [$this, 'block_ea_crud_widget_fieldsets'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_form_column_group_open_row' => [$this, 'block_ea_form_column_group_open_row'],
                'ea_form_column_group_close_row' => [$this, 'block_ea_form_column_group_close_row'],
                'ea_form_column_open_row' => [$this, 'block_ea_form_column_open_row'],
                'ea_form_column_close_row' => [$this, 'block_ea_form_column_close_row'],
                'ea_form_fieldset_open_ealabel' => [$this, 'block_ea_form_fieldset_open_ealabel'],
                'ea_form_fieldset_open_label' => [$this, 'block_ea_form_fieldset_open_label'],
                'ea_form_fieldset_open_row' => [$this, 'block_ea_form_fieldset_open_row'],
                'ea_form_fieldset_close_row' => [$this, 'block_ea_form_fieldset_close_row'],
                'ea_form_tablist_row' => [$this, 'block_ea_form_tablist_row'],
                'ea_form_tabpane_group_open_row' => [$this, 'block_ea_form_tabpane_group_open_row'],
                'ea_form_tabpane_group_close_row' => [$this, 'block_ea_form_tabpane_group_close_row'],
                'ea_form_tabpane_open_row' => [$this, 'block_ea_form_tabpane_open_row'],
                'ea_form_tabpane_close_row' => [$this, 'block_ea_form_tabpane_close_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 29
        yield "
";
        // line 31
        yield "
";
        // line 32
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 63
        yield "
";
        // line 64
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 72
        yield "
";
        // line 74
        yield "
";
        // line 75
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 120
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        yield "
";
        // line 133
        yield from $this->unwrap()->yieldBlock('collection_row', $context, $blocks);
        // line 159
        yield "
";
        // line 160
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 189
        yield "
";
        // line 190
        yield from $this->unwrap()->yieldBlock('collection_entry_row', $context, $blocks);
        // line 233
        yield "
";
        // line 234
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 251
        yield "
";
        // line 252
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 257
        yield "
";
        // line 259
        yield "
";
        // line 260
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 304
        yield "
";
        // line 306
        yield "
";
        // line 307
        yield from $this->unwrap()->yieldBlock('empty_collection', $context, $blocks);
        // line 312
        yield "
";
        // line 313
        yield from $this->unwrap()->yieldBlock('vich_file_row', $context, $blocks);
        // line 317
        yield "
";
        // line 318
        yield from $this->unwrap()->yieldBlock('vich_file_widget', $context, $blocks);
        // line 352
        yield "
";
        // line 353
        yield from $this->unwrap()->yieldBlock('vich_image_row', $context, $blocks);
        // line 357
        yield "
";
        // line 358
        yield from $this->unwrap()->yieldBlock('vich_image_widget', $context, $blocks);
        // line 424
        yield "
";
        // line 425
        yield from $this->unwrap()->yieldBlock('ea_crud_rest', $context, $blocks);
        // line 428
        yield "
";
        // line 430
        yield from $this->unwrap()->yieldBlock('ea_crud_widget', $context, $blocks);
        // line 435
        yield "
";
        // line 437
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_panels', $context, $blocks);
        // line 442
        yield "
";
        // line 443
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_fieldsets', $context, $blocks);
        // line 508
        yield "
";
        // line 510
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_widget', $context, $blocks);
        // line 513
        yield "
";
        // line 514
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 518
        yield "
";
        // line 520
        yield from $this->unwrap()->yieldBlock('ea_code_editor_widget', $context, $blocks);
        // line 530
        yield "
";
        // line 532
        yield from $this->unwrap()->yieldBlock('ea_text_editor_widget', $context, $blocks);
        // line 543
        yield "
";
        // line 545
        yield from $this->unwrap()->yieldBlock('ea_form_row_row', $context, $blocks);
        // line 548
        yield "
";
        // line 549
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_open_row', $context, $blocks);
        // line 555
        yield "
";
        // line 556
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_close_row', $context, $blocks);
        // line 563
        yield "
";
        // line 564
        yield from $this->unwrap()->yieldBlock('ea_form_column_open_row', $context, $blocks);
        // line 583
        yield "
";
        // line 584
        yield from $this->unwrap()->yieldBlock('ea_form_column_close_row', $context, $blocks);
        // line 587
        yield "
";
        // line 588
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_ealabel', $context, $blocks);
        // line 599
        yield "
";
        // line 600
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_label', $context, $blocks);
        // line 621
        yield "
";
        // line 622
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_row', $context, $blocks);
        // line 634
        yield "
";
        // line 635
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_close_row', $context, $blocks);
        // line 641
        yield "
";
        // line 642
        yield from $this->unwrap()->yieldBlock('ea_form_tablist_row', $context, $blocks);
        // line 670
        yield "
";
        // line 671
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_open_row', $context, $blocks);
        // line 675
        yield "
";
        // line 676
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_close_row', $context, $blocks);
        // line 680
        yield "
";
        // line 681
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_open_row', $context, $blocks);
        // line 694
        yield "
";
        // line 695
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_close_row', $context, $blocks);
        // line 699
        yield "
";
        // line 701
        yield from $this->unwrap()->yieldBlock('ea_filters_widget', $context, $blocks);
        // line 723
        yield "
";
        // line 724
        yield from $this->unwrap()->yieldBlock('comparison_widget', $context, $blocks);
        // line 727
        yield "
";
        // line 728
        yield from $this->unwrap()->yieldBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 738
        yield "
";
        // line 739
        yield from $this->unwrap()->yieldBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 742
        yield "
";
        // line 743
        yield from $this->unwrap()->yieldBlock('ea_fileupload_widget', $context, $blocks);
        // line 805
        yield "
";
        // line 806
        yield from $this->unwrap()->yieldBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 873
        yield "
";
        // line 874
        yield from $this->unwrap()->yieldBlock('ea_slug_widget', $context, $blocks);
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && CoreExtension::inFilter("ea_crud", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["errorClass" => "global-invalid-feedback"]]);
            yield "
    ";
        }
        // line 8
        yield "
    ";
        // line 9
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
    ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", ["referrer"], "method", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        <input type=\"hidden\" name=\"referrer\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["referrer"], "method", false, false, false, 11), "html", null, true);
            yield "\">
    ";
        }
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "        ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 17
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            yield "
        ";
        }
        // line 19
        yield "    </form>
";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 24
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 25
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
                yield " invalid-feedback d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 25), "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    ";
        }
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 34
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")))]);
        }
        // line 36
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 37
            yield "        ";
            // line 38
            $context["required"] = false;
        }
        // line 40
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        if ((($context["widget"] ?? null) != "single_text")) {
            // line 45
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-inline"))]);
        }
        // line 47
        yield "<div class=\"datetime-widget datetime-widget-datetime\">";
        // line 48
        yield from $this->yieldParentBlock("datetime_widget", $context, $blocks);
        // line 49
        yield "</div>
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "<div class=\"datetime-widget datetime-widget-date\">";
        // line 54
        yield from $this->yieldParentBlock("date_widget", $context, $blocks);
        // line 55
        yield "</div>";
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "<div class=\"datetime-widget datetime-widget-time\">";
        // line 60
        yield from $this->yieldParentBlock("time_widget", $context, $blocks);
        // line 61
        yield "</div>";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        if ((($tmp = ((array_key_exists("vich", $context)) ? (Twig\Extension\CoreExtension::default(($context["vich"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "file")) : ("file"));
            // line 67
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 69
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "    ";
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 77), "")) : ("")) . " form-group")]);
        // line 79
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 79), "ea_vars", [], "any", false, false, false, 79), "field", [], "any", false, false, false, 79);
        // line 80
        yield "
    <div class=\"";
        // line 81
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 81)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 81), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 81)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 81), "html", null, true)) : (""))));
        yield "\">";
        // line 82
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 82), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 82), "mb-3")) : ("mb-3"))));
        // line 83
        yield "<div ";
        $_v0 = $context;
        $_v1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((($context["row_class"] ?? null) . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 83, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 85
        yield "<div class=\"form-widget\">
                ";
        // line 86
        $context["has_prepend_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 86), null)) : (null)));
        // line 87
        yield "                ";
        $context["has_append_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 87), null)) : (null)));
        // line 88
        yield "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 89
        yield "
                ";
        // line 90
        if ((($tmp = ($context["has_input_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"input-group\">";
        }
        // line 91
        yield "                    ";
        if ((($tmp = ($context["has_prepend_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 93
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 93);
            yield "</span>
                        </div>
                    ";
        }
        // line 96
        yield "
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "

                    ";
        // line 99
        if ((($tmp = ($context["has_append_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                        <span class=\"input-group-text\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 100);
            yield "</span>
                    ";
        }
        // line 102
        yield "                ";
        if ((($tmp = ($context["has_input_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "</div>";
        }
        // line 103
        yield "
                ";
        // line 104
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 104)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 104)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 105), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            yield "</small>
                ";
        } elseif ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["form"] ?? null), "vars", [], "any", false, true, false, 106), "help", [], "any", true, true, false, 106) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 106), "help", [], "any", false, false, false, 106)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 106), "help", [], "any", false, false, false, 106)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "help", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "help_translation_parameters", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "translation_domain", [], "any", false, false, false, 107));
            yield "</small>
                ";
        }
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 111
        yield "</div>
        </div>
    </div>

    ";
        // line 116
        yield "    ";
        if ((null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 116), null)) : (null)))) {
            // line 117
            yield "        <div class=\"flex-fill\"></div>
    ";
        }
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "    ";
        if (("ea-autocomplete" == ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["attr"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["data-ea-widget"] ?? null) : null), false)) : (false)))) {
            // line 123
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 128
            yield "    ";
        }
        // line 129
        yield "
    ";
        // line 130
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "    ";
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 134))) {
            // line 135
            yield "        ";
            $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 136
            yield "    ";
        }
        // line 137
        yield "
    ";
        // line 138
        $context["maxKey"] = 0;
        // line 139
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 139)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 140
            yield "        ";
            if (CoreExtension::matches("/^\\d+\$/", $context["key"])) {
                // line 141
                yield "            ";
                $context["intKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber($context["key"], 0, "", "", "");
                // line 142
                yield "            ";
                if ((($context["intKey"] ?? null) > ($context["maxKey"] ?? null))) {
                    // line 143
                    yield "                ";
                    $context["maxKey"] = ($context["intKey"] ?? null);
                    // line 144
                    yield "            ";
                }
                // line 145
                yield "        ";
            }
            // line 146
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "
    ";
        // line 148
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 150
($context["form"] ?? null), "vars", [], "any", false, false, false, 150), "ea_vars", [], "any", false, false, false, 150), "field", [], "any", false, false, false, 150) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 150), "ea_vars", [], "any", false, false, false, 150), "field", [], "any", false, false, false, 150), "customOptions", [], "any", false, false, false, 150), "get", ["entryIsComplex"], "method", false, false, false, 150))) ? ("true") : ("false")), "data-allow-add" => (((($tmp =         // line 151
($context["allow_add"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-allow-delete" => (((($tmp =         // line 152
($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-num-items" => ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 153
($context["form"] ?? null), "children", [], "any", false, false, false, 153))) ? (0) : ((($context["maxKey"] ?? null) + 1))), "data-form-type-name-placeholder" => ((        // line 154
array_key_exists("prototype", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 154), "name", [], "any", false, false, false, 154)) : (""))]);
        // line 156
        yield "
    ";
        // line 157
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 161
        yield "    ";
        // line 163
        yield "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
        // line 164
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 164), "ea_vars", [], "any", false, true, false, 164), "field", [], "any", false, true, false, 164), "fieldFqcn", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 164), "ea_vars", [], "any", false, false, false, 164), "field", [], "any", false, false, false, 164), "fieldFqcn", [], "any", false, false, false, 164), false)) : (false)));
        // line 165
        yield "
    <div class=\"ea-form-collection-items\">
        ";
        // line 167
        if ((($tmp = ($context["isEmptyCollection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
            yield "
        ";
        } elseif ((($tmp =         // line 169
($context["is_array_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
        ";
        } else {
            // line 172
            yield "            <div class=\"accordion\">
                ";
            // line 173
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
            </div>
        ";
        }
        // line 176
        yield "    </div>

    ";
        // line 178
        if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 178), "prototype", [], "any", true, true, false, 178))) {
            // line 179
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
            // line 180
            yield "    ";
        }
        // line 181
        yield "
    ";
        // line 182
        if ((((array_key_exists("allow_add", $context)) ? (Twig\Extension\CoreExtension::default(($context["allow_add"] ?? null), false)) : (false)) &&  !($context["disabled"] ?? null))) {
            // line 183
            yield "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            ";
            // line 184
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:plus", "class" => "pr-1"]);
            yield "
            ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            yield "
        </button>
    ";
        }
        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 191
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 191), "ea_vars", [], "any", false, true, false, 191), "field", [], "any", false, true, false, 191), "fieldFqcn", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 191), "ea_vars", [], "any", false, false, false, 191), "field", [], "any", false, false, false, 191), "fieldFqcn", [], "any", false, false, false, 191), false)) : (false)));
        // line 192
        yield "    ";
        $context["is_complex"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "ea_vars", [], "any", false, true, false, 192), "field", [], "any", false, true, false, 192), "customOptions", [], "any", false, true, false, 192), "get", ["entryIsComplex"], "method", true, true, false, 192) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 192), "ea_vars", [], "any", false, false, false, 192), "field", [], "any", false, false, false, 192), "customOptions", [], "any", false, false, false, 192), "get", ["entryIsComplex"], "method", false, false, false, 192)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 192), "ea_vars", [], "any", false, false, false, 192), "field", [], "any", false, false, false, 192), "customOptions", [], "any", false, false, false, 192), "get", ["entryIsComplex"], "method", false, false, false, 192)) : (false));
        // line 193
        yield "    ";
        $context["to_string_method"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_vars", [], "any", false, true, false, 193), "field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", ["entryToStringMethod"], "method", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryToStringMethod"], "method", false, false, false, 193)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryToStringMethod"], "method", false, false, false, 193)) : (null));
        // line 194
        yield "    ";
        $context["allows_deleting_items"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 194), "allow_delete", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 194), "allow_delete", [], "any", false, false, false, 194), false)) : (false));
        // line 195
        yield "    ";
        $context["render_expanded"] = ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 195), "valid", [], "any", false, false, false, 195) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 195), "ea_vars", [], "any", false, true, false, 195), "field", [], "any", false, true, false, 195), "customOptions", [], "any", false, true, false, 195), "get", ["renderExpanded"], "method", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 195), "ea_vars", [], "any", false, false, false, 195), "field", [], "any", false, false, false, 195), "customOptions", [], "any", false, false, false, 195), "get", ["renderExpanded"], "method", false, false, false, 195), false)) : (false)));
        // line 196
        yield "    ";
        $context["delete_item_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 197
            yield "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            yield "\">
            ";
            // line 199
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
        </button>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        yield "
    <div class=\"field-collection-item ";
        // line 203
        yield (((($tmp = ($context["is_complex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-collection-item-complex") : (""));
        yield " ";
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 203), "valid", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""));
        yield "\">
        ";
        // line 204
        if ((($tmp = ((array_key_exists("is_array_field", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_array_field"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
            // line 206
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
            ";
            // line 207
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 208
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delete_item_button"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 210
            yield "        ";
        } else {
            // line 211
            yield "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 213
            yield (((($tmp = ($context["render_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "-contents\">
                        ";
            // line 214
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-collection-item-collapse-marker"]);
            yield "
                        ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null), ($context["to_string_method"] ?? null)), "html", null, true);
            yield "
                    </button>

                    ";
            // line 218
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 219
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delete_item_button"] ?? null), "html", null, true);
                yield "
                    ";
            }
            // line 221
            yield "                </h2>
                <div id=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "-contents\" class=\"accordion-collapse collapse ";
            yield (((($tmp = ($context["render_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            ";
            // line 225
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 231
        yield "    </div>
";
        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 235
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 236
        if (CoreExtension::inFilter("collection", ($context["block_prefixes"] ?? null))) {
            // line 237
            yield "            ";
            // line 239
            yield "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
            // line 240
            yield "            ";
            if ((($tmp = ($context["isEmptyCollection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 241
                yield "                ";
                yield from                 $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
                yield "
            ";
            }
            // line 243
            yield "            ";
            if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 243), "prototype", [], "any", true, true, false, 243))) {
                // line 244
                yield "                ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
                // line 245
                yield "            ";
            }
            // line 246
            yield "        ";
        }
        // line 247
        yield "
        ";
        // line 248
        yield from $this->yieldParentBlock("form_widget_compound", $context, $blocks);
        yield "
    </div>
";
        yield from [];
    }

    // line 252
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 253
        yield "<div class=\"form-group field-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 253), "css_class", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 253), "css_class", [], "any", false, false, false, 253), "")) : ("")), "html", null, true);
        yield "\">";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 255
        yield "</div>";
        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 261
        if ((($context["label"] ?? null) === false)) {
        } else {
            // line 265
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 266
                $context["element"] = "legend";
                // line 267
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 267), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 269
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 269)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 269), "")) : ("")) . " form-control-label"))]);
            }
            // line 271
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 272
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 272)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 272), "")) : ("")) . " required"))]);
            }
            // line 274
            if ((($context["label"] ?? null) === "")) {
            } elseif ((null ===             // line 277
($context["label"] ?? null))) {
                // line 278
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 279
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 280
($context["name"] ?? null), "%id%" =>                     // line 281
($context["id"] ?? null)]);
                } else {
                    // line 284
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 287
            yield "<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if ((($tmp = ($context["label_attr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v3 = $context;
                $_v4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($_v4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 287, $this->getSourceContext());
                }
                $_v4 = CoreExtension::toArray($_v4);
                $context = $_v4 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $_v3;
            }
            yield ">";
            // line 288
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 289
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 290
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                } else {
                    // line 292
                    yield ($context["label"] ?? null);
                }
            } else {
                // line 295
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 296
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 298
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 301
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        yield from [];
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_empty_collection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 308
        yield "    <div class=\"empty collection-empty\">
        ";
        // line 309
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["label/empty"], "method", false, false, false, 309));
        yield "
    </div>
";
        yield from [];
    }

    // line 313
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 314
        yield "    ";
        $context["force_error"] = true;
        // line 315
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 319
        yield "    <div class=\"ea-vich-file\">
        ";
        // line 320
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_uri"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 321
            yield "            <a class=\"ea-vich-file-name\" href=\"";
            yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
            yield "\">
                ";
            // line 322
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
            // line 323
            if ((($tmp = ((array_key_exists("download_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_label"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 326
                yield ((Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["download_uri"] ?? null), "/"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["download_uri"] ?? null), "/")), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"), "html", null, true)));
            }
            // line 328
            yield "</a>
        ";
        }
        // line 330
        yield "
        ";
        // line 331
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 332
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 332), "vars", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 335), "vars", [], "any", false, false, false, 335), "id", [], "any", false, false, false, 335), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 337
        yield "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 340
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 341
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 342), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 345
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 345)) {
            // line 346
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 346), 'row');
            yield "
            ";
        }
        // line 348
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 349), "vars", [], "any", false, false, false, 349), "id", [], "any", false, false, false, 349), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 354
        yield "    ";
        $context["force_error"] = true;
        // line 355
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 358
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 359
        yield "    ";
        $context["formTypeOptions"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 359), "formTypeOptions", [], "any", true, true, false, 359)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, false, false, 359), "formTypeOptions", [], "any", false, false, false, 359), "")) : (""));
        // line 360
        yield "    <div class=\"ea-vich-image\">
        ";
        // line 361
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("image_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["image_uri"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 362
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 363
                yield "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 364
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 364) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 364)))) {
                    // line 365
                    yield "                        ";
                    // line 368
                    yield "                            <img style=\"cursor: initial\" src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                        ";
                    // line 370
                    yield "                    ";
                } else {
                    // line 371
                    yield "                        <img style=\"cursor: initial\" src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 373
                yield "                </div>
            ";
            } else {
                // line 375
                yield "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 376
                yield "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\">
                    ";
                // line 378
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 378) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 378)))) {
                    // line 379
                    yield "                        ";
                    // line 382
                    yield "                            <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                        ";
                    // line 384
                    yield "                    ";
                } else {
                    // line 385
                    yield "                        <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 387
                yield "                </a>

                <div id=\"";
                // line 389
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\" class=\"ea-lightbox\">
                    ";
                // line 390
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 390) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 390)))) {
                    // line 391
                    yield "                        ";
                    // line 394
                    yield "                            <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
                    yield "\">
                        ";
                    // line 396
                    yield "                    ";
                } else {
                    // line 397
                    yield "                        <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 399
                yield "                </div>
            ";
            }
            // line 401
            yield "        ";
        }
        // line 402
        yield "
        ";
        // line 403
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 404
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 404), "vars", [], "any", false, false, false, 404), "id", [], "any", false, false, false, 404), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 407), "vars", [], "any", false, false, false, 407), "id", [], "any", false, false, false, 407), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 409
        yield "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 412
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 413
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 414
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 414), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 417
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 417)) {
            // line 418
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 418), 'row');
            yield "
            ";
        }
        // line 420
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 421), "vars", [], "any", false, false, false, 421), "id", [], "any", false, false, false, 421), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        yield from [];
    }

    // line 425
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 426
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
";
        yield from [];
    }

    // line 430
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 431
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 432
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 437
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_panels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 438
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 438.");
        // line 439
        yield "
    ";
        // line 440
        yield from         $this->unwrap()->yieldBlock("ea_crud_widget_fieldsets", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 443
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_fieldsets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 444
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 444.");
        // line 445
        yield "
    ";
        // line 446
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 446), "ea_crud_form", [], "any", false, false, false, 446), "form_fieldsets", [], "any", false, false, false, 446), function ($__fieldset_config__) use ($context, $macros) { $context["fieldset_config"] = $__fieldset_config__; return ( !CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 446) || (CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 446) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["fieldset_name"] => $context["fieldset_config"]) {
            // line 447
            yield "        ";
            $context["fieldset_has_header"] = ((((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", true, true, false, 447)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 447), false)) : (false)) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 447)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 447), false)) : (false))) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 447)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 447), false)) : (false)));
            // line 448
            yield "
        ";
            // line 449
            $context["collapsible"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsible", [], "any", false, false, false, 449);
            // line 450
            yield "        ";
            $context["collapsed"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsed", [], "any", false, false, false, 450);
            // line 451
            yield "
        <div class=\"";
            // line 452
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", true, true, false, 452) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 452)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 452), "html", null, true)) : (""));
            yield "\">
            <fieldset class=\"form-fieldset\">
                ";
            // line 454
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 455
                yield "                    <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 455)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 455), false)) : (false)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                        <div class=\"form-fieldset-title\">
                            <a ";
                // line 457
                if ((($tmp =  !($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 458
                    yield "                                href=\"#\" class=\"not-collapsible\"
                            ";
                } else {
                    // line 460
                    yield "                                href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse ";
                    // line 461
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                                aria-expanded=\"";
                    // line 462
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\"
                            ";
                }
                // line 464
                yield "                            >
                                ";
                // line 465
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 466
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                                ";
                }
                // line 468
                yield "
                                ";
                // line 469
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 469)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 469), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 470
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 470), "class" => "form-fieldset-icon"]);
                    yield "
                                ";
                }
                // line 472
                yield "                                ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 472));
                yield "
                            </a>

                            ";
                // line 475
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 475)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 475), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 476
                    yield "                                <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 476));
                    yield "</div>
                            ";
                }
                // line 478
                yield "                        </div>
                    </div>
                ";
            }
            // line 481
            yield "
                <div id=\"content-";
            // line 482
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
            yield " ";
            yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"row\">
                        ";
            // line 484
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 484), "block_prefixes", [], "any", false, false, false, 484)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 484), "ea_crud_form", [], "any", false, false, false, 484), "form_fieldset", [], "any", false, false, false, 484) == $context["fieldset_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 485
                yield "                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "ea_crud_form", [], "any", false, false, false, 485), "form_tab", [], "any", false, false, false, 485) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "ea_crud_form", [], "any", false, false, false, 485), "form_tab", [], "any", false, false, false, 485) == ($context["tab_name"] ?? null)))) {
                    // line 486
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                            ";
                }
                // line 488
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 489
            yield "                    </div>
                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 493
        if (!$context['_iterated']) {
            // line 494
            yield "        ";
            // line 505
            yield "        ";
            yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 505, $this->getSourceContext())->macro_recursiveFieldsetForm(...[($context["form"] ?? null)]);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['fieldset_name'], $context['fieldset_config'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 510
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 511
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 511), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        yield "
";
        yield from [];
    }

    // line 514
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_inner_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 515
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 515), "name", [], "any", false, false, false, 515);
        // line 516
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 520
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_code_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 521
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 523
($context["form"] ?? null), "vars", [], "any", false, false, false, 523), "ea_vars", [], "any", false, false, false, 523), "field", [], "any", false, false, false, 523), "customOptions", [], "any", false, false, false, 523), "get", ["language"], "method", false, false, false, 523), "data-tab-size" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 524
($context["form"] ?? null), "vars", [], "any", false, false, false, 524), "ea_vars", [], "any", false, false, false, 524), "field", [], "any", false, false, false, 524), "customOptions", [], "any", false, false, false, 524), "get", ["tabSize"], "method", false, false, false, 524), "data-indent-with-tabs" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 525
($context["form"] ?? null), "vars", [], "any", false, false, false, 525), "ea_vars", [], "any", false, false, false, 525), "field", [], "any", false, false, false, 525), "customOptions", [], "any", false, false, false, 525), "get", ["indentWithTabs"], "method", false, false, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-show-line-numbers" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 526
($context["form"] ?? null), "vars", [], "any", false, false, false, 526), "ea_vars", [], "any", false, false, false, 526), "field", [], "any", false, false, false, 526), "customOptions", [], "any", false, false, false, 526), "get", ["showLineNumbers"], "method", false, false, false, 526)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-number-of-rows" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 527
($context["form"] ?? null), "vars", [], "any", false, false, false, 527), "ea_vars", [], "any", false, false, false, 527), "field", [], "any", false, false, false, 527), "customOptions", [], "any", false, false, false, 527), "get", ["numOfRows"], "method", false, false, false, 527)])]);
        // line 528
        yield "
";
        yield from [];
    }

    // line 532
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_text_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 533
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 535
($context["form"] ?? null), "vars", [], "any", false, true, false, 535), "ea_vars", [], "any", false, true, false, 535), "field", [], "any", false, true, false, 535), "customOptions", [], "any", false, true, false, 535), "get", ["numOfRows"], "method", true, true, false, 535)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 535), "ea_vars", [], "any", false, false, false, 535), "field", [], "any", false, false, false, 535), "customOptions", [], "any", false, false, false, 535), "get", ["numOfRows"], "method", false, false, false, 535), 5)) : (5)), "data-trix-editor-config" => json_encode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 536
($context["form"] ?? null), "vars", [], "any", false, true, false, 536), "ea_vars", [], "any", false, true, false, 536), "field", [], "any", false, true, false, 536), "customOptions", [], "any", false, true, false, 536), "get", ["trixEditorConfig"], "method", true, true, false, 536)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 536), "ea_vars", [], "any", false, false, false, 536), "field", [], "any", false, false, false, 536), "customOptions", [], "any", false, false, false, 536), "get", ["trixEditorConfig"], "method", false, false, false, 536), null)) : (null)))])]);
        // line 537
        yield "

    <div class=\"ea-text-editor-wrapper ";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 539)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 539), "")) : ("")) . (((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-error") : (""))), "html", null, true);
        yield "\">
        <trix-editor input=\"";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" class=\"trix-content\"></trix-editor>
    </div>
";
        yield from [];
    }

    // line 545
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_row_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 546
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 546), "row_attr", [], "any", false, false, false, 546), "class", [], "any", false, false, false, 546), "html", null, true);
        yield "\"></div>
";
        yield from [];
    }

    // line 549
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 550
        yield "    ";
        // line 551
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 551), "ea_is_inside_tab", [], "any", true, true, false, 551)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 551), "ea_is_inside_tab", [], "any", false, false, false, 551), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 552
            yield "        <div class=\"row\">
    ";
        }
        yield from [];
    }

    // line 556
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 557
        yield "    ";
        // line 559
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 559), "ea_is_inside_tab", [], "any", true, true, false, 559)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 559), "ea_is_inside_tab", [], "any", false, false, false, 559), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 560
            yield "        </div>
    ";
        }
        yield from [];
    }

    // line 564
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 565
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 565), "ea_vars", [], "any", false, false, false, 565), "field", [], "any", false, false, false, 565);
        // line 566
        yield "    ";
        $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 566);
        // line 567
        yield "    ";
        $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 567) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 567) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 567) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 567) != null));
        // line 568
        yield "
    <div class=\"form-column ";
        // line 569
        yield (((($tmp =  !($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 569), "html", null, true);
        yield "\">
        ";
        // line 570
        if ((($tmp = ($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 571
            yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
            // line 573
            if ((($tmp = ($context["field_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["field_icon"] ?? null), "class" => "form-column-icon"]);
            }
            // line 574
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 574)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", true, true, false, 574)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 574), "")) : ("")), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 574), "translationDomain", [], "any", false, false, false, 574));
            }
            // line 575
            yield "                </div>

                ";
            // line 577
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 577)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 578
                yield "                    <div class=\"form-column-help\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 578), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 578), "translationDomain", [], "any", false, false, false, 578));
                yield "</div>
                ";
            }
            // line 580
            yield "            </div>
        ";
        }
        yield from [];
    }

    // line 584
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 585
        yield "    </div>
";
        yield from [];
    }

    // line 588
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_ealabel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 589
        yield "    ";
        if ((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 590
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
            yield "
    ";
        }
        // line 592
        yield "
    ";
        // line 593
        if ((($tmp = ($context["ea_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 594
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["ea_icon"] ?? null), "class" => "form-fieldset-icon"]);
            yield "
    ";
        }
        // line 596
        yield "
    ";
        // line 597
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 597), "label", [], "any", false, false, false, 597));
        yield "
";
        yield from [];
    }

    // line 600
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 601
        yield "    <div class=\"form-fieldset-header ";
        yield (((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
        yield " ";
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["ea_help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
        yield "\">
        <div class=\"form-fieldset-title\">
            ";
        // line 603
        if ((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 604
            yield "                <a href=\"#content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 604), "name", [], "any", false, false, false, 604), "html", null, true);
            yield "\" data-bs-toggle=\"collapse\"
                   class=\"form-fieldset-title-content form-fieldset-collapse ";
            // line 605
            yield (((($tmp = ($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
            yield "\"
                   aria-expanded=\"";
            // line 606
            yield (((($tmp = ($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
            yield "\" aria-controls=\"content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 606), "name", [], "any", false, false, false, 606), "html", null, true);
            yield "\">
                    ";
            // line 607
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'ealabel');
            yield "
                </a>
            ";
        } else {
            // line 610
            yield "                <span class=\"not-collapsible form-fieldset-title-content\">
                    ";
            // line 611
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'ealabel');
            yield "
                </span>
            ";
        }
        // line 614
        yield "
            ";
        // line 615
        if ((($tmp = ($context["ea_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 616
            yield "                <div class=\"form-fieldset-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null));
            yield "</div>
            ";
        }
        // line 618
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 622
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 623
        yield "    ";
        $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 623), "label", [], "any", false, false, false, 623) || ($context["ea_icon"] ?? null)) || ($context["ea_help"] ?? null));
        // line 624
        yield "
    <div class=\"form-fieldset ";
        // line 625
        yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_css_class"] ?? null), "html", null, true);
        yield "\">
        <fieldset>
            ";
        // line 627
        if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 628
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
        }
        // line 630
        yield "
            <div id=\"content-";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 631), "name", [], "any", false, false, false, 631), "html", null, true);
        yield "\" class=\"form-fieldset-body ";
        yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
        yield " ";
        yield (((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
        yield " ";
        yield (((($tmp =  !($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\">
                <div class=\"row\">
";
        yield from [];
    }

    // line 635
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 636
        yield "                </div>
            </div>
        </fieldset>
    </div>
";
        yield from [];
    }

    // line 642
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tablist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 643
        yield "    ";
        $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
        // line 644
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 645
        yield "    ";
        $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
        // line 646
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 646), "ea_vars", [], "any", false, false, false, 646), "field", [], "any", false, false, false, 646);
        // line 647
        yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 650));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 651
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 652
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 652)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 652), "html", null, true);
            yield "\" id=\"tablist-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 652), "html", null, true);
            yield "\" data-bs-toggle=\"tab\">";
            // line 653
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 653)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 653), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 654
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 654), "class" => "tab-nav-item-icon"]);
            }
            // line 656
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 656), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 656), "translationDomain", [], "any", false, false, false, 656));
            yield "

                        ";
            // line 658
            $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 658);
            // line 659
            if ((($context["tab_error_count"] ?? null) > 0)) {
                // line 660
                yield "<span class=\"badge badge-danger\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                yield "\">";
                // line 661
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab_error_count"] ?? null), "html", null, true);
                // line 662
                yield "</span>";
            }
            // line 664
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        yield "        </ul>
    </div>
";
        yield from [];
    }

    // line 671
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 672
        yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
        yield from [];
    }

    // line 676
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 677
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 681
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 682
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 683
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 683), "ea_vars", [], "any", false, false, false, 683), "field", [], "any", false, false, false, 683);
        // line 684
        yield "
    <div id=\"";
        // line 685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_tab_id"] ?? null), "html", null, true);
        yield "\" class=\"tab-pane ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 685)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_css_class"] ?? null), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 685), "attr", [], "any", false, false, false, 685));
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
        // line 686
        if ((($tmp = ($context["ea_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 687
            yield "            <div class=\"content-header-help tab-help\">
                ";
            // line 688
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 688), "translationDomain", [], "any", false, false, false, 688));
            yield "
            </div>
        ";
        }
        // line 691
        yield "
        <div class=\"row\">
";
        yield from [];
    }

    // line 695
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 696
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 701
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_filters_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 702
        yield "    ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 702), "query", [], "any", false, true, false, 702), "all", [], "method", false, true, false, 702), "filters", [], "array", true, true, false, 702)) ? (Twig\Extension\CoreExtension::default((($_v5 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 702), "query", [], "any", false, false, false, 702), "all", [], "method", false, false, false, 702)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["filters"] ?? null) : null), [])) : ([])));
        // line 703
        yield "
    ";
        // line 704
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
            // line 705
            yield "        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"";
            // line 706
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 706), "name", [], "any", false, false, false, 706), "html", null, true);
            yield "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 707
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 707), "html", null, true);
            yield "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 708
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 708), "name", [], "any", false, false, false, 708), ($context["applied_filters"] ?? null))) {
                yield "checked";
            }
            yield ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 709
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 709), "html", null, true);
            yield "\" aria-expanded=\"";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 709), "name", [], "any", false, false, false, 709), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            yield "\" aria-controls=\"filter-content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 709), "html", null, true);
            yield "\"
                        ";
            // line 710
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 710), "label_attr", [], "any", true, true, false, 710)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 710), "label_attr", [], "any", false, false, false, 710), [])) : ([])));
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
            // line 711
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 711), "label", [], "any", true, true, false, 711)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 711), "label", [], "any", false, false, false, 711), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 711), "name", [], "any", false, false, false, 711)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 711), "name", [], "any", false, false, false, 711)))), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 711), "translationDomain", [], "any", false, false, false, 711)), "html", null, true);
            yield "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 714
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 714), "html", null, true);
            yield "\" class=\"filter-content collapse ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 714), "name", [], "any", false, false, false, 714), ($context["applied_filters"] ?? null))) {
                yield "show";
            }
            yield "\" aria-labelledby=\"filter-heading-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 714), "html", null, true);
            yield "\">
                    <div class=\"form-widget\">
                        ";
            // line 716
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            yield "
                    </div>
                </div>
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
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 724
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_comparison_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 725
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 725), "attr", [], "any", false, false, false, 725), ["data-ea-comparison-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 725), "id", [], "any", false, false, false, 725)])]);
        yield "
";
        yield from [];
    }

    // line 728
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_numeric_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 729
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 730
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 730), 'row');
        yield "
        ";
        // line 731
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 731), 'row');
        yield "
        <div data-ea-value2-of-comparison-id=\"";
        // line 732
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 732), "vars", [], "any", false, false, false, 732), "id", [], "any", false, false, false, 732), "html", null, true);
        yield "\" class=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 732), "vars", [], "any", false, false, false, 732), "value", [], "any", false, false, false, 732) != "between")) ? ("d-none") : (""));
        yield "\">
            ";
        // line 733
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 733), 'row');
        yield "
        </div>
    </div>";
        // line 736
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield from [];
    }

    // line 739
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_datetime_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 740
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("ea_numeric_filter_widget", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 743
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 744
        yield "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 746
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 747
        yield "            ";
        $context["title"] = "";
        // line 748
        yield "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 749
        yield "            ";
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 750
            yield "                ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 751
                yield "                    ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 752
                yield "                ";
            } else {
                // line 753
                yield "                    ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 753);
                // line 754
                yield "                    ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 754));
                // line 755
                yield "                ";
            }
            // line 756
            yield "            ";
        }
        // line 757
        yield "            <div class=\"custom-file\">
                ";
        // line 758
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 758), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 758), "vars", [], "any", false, false, false, 758), "attr", [], "any", false, false, false, 758), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "d-none"])]);
        yield "
                ";
        // line 759
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 759), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (CoreExtension::testEmpty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        yield "
            </div>
            <div class=\"input-group-text\">";
        // line 762
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 763
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 764
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 764)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 766
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 766)), "html", null, true);
                yield "
                    ";
            }
        }
        // line 769
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 770
            yield "                    <label class=\"btn ea-fileupload-delete-btn ";
            yield ((Twig\Extension\CoreExtension::testEmpty(($context["currentFiles"] ?? null))) ? ("d-none") : (""));
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 770), "vars", [], "any", false, false, false, 770), "id", [], "any", false, false, false, 770), "html", null, true);
            yield "\">
                        ";
            // line 771
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                    </label>
                ";
        }
        // line 774
        yield "                <label class=\"btn\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 774), "vars", [], "any", false, false, false, 774), "id", [], "any", false, false, false, 774), "html", null, true);
        yield "\">
                    ";
        // line 775
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
        yield "
                </label>
            </div>
        </div>
        ";
        // line 779
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 780
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 783
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 784
                yield "                        <tr>
                            <td>
                                ";
                // line 786
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 786))), "html", null, true);
                    yield "\">";
                }
                // line 787
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 787)), "html", null, true);
                yield "\">
                                        ";
                // line 788
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 788), "html", null, true);
                yield "
                                    </span>
                                ";
                // line 790
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 791
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 792
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 792)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 795
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 799
        yield "        ";
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 800
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 800), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 802
        yield "    </div>
    ";
        // line 803
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 803), 'errors');
        yield "
";
        yield from [];
    }

    // line 806
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_TODO_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 807
        yield "    ";
        $context["placeholder"] = "";
        // line 808
        yield "    ";
        $context["title"] = "";
        // line 809
        yield "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 810
        yield "    ";
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 811
            yield "        ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 812
                yield "            ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 813
                yield "        ";
            } else {
                // line 814
                yield "            ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 814);
                // line 815
                yield "            ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 815));
                // line 816
                yield "        ";
            }
            // line 817
            yield "    ";
        }
        // line 818
        yield "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 821
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 821), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 821), "vars", [], "any", false, false, false, 821), "attr", [], "any", false, false, false, 821), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        yield "

            ";
        // line 823
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 824
            yield "                <span class=\"input-group-text\">
                    ";
            // line 825
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 826
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 826)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 828
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 828)), "html", null, true);
                yield "
                    ";
            }
            // line 830
            yield "                </span>
            ";
        }
        // line 832
        yield "
            ";
        // line 833
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 834
            yield "                <button class=\"btn ea-fileupload-delete-btn\">
                    ";
            // line 835
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                </button>
            ";
        }
        // line 838
        yield "
            ";
        // line 839
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 840
            yield "                <button class=\"btn\">
                    ";
            // line 841
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
            yield "
                </button>
            ";
        }
        // line 844
        yield "        </div>

        ";
        // line 846
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 847
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 850
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 851
                yield "                        <tr>
                            <td>
                                ";
                // line 853
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 853))), "html", null, true);
                    yield "\">";
                }
                // line 854
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 854)), "html", null, true);
                yield "\">
                                        ";
                // line 855
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 855), "html", null, true);
                yield "
                                    </span>
                                    ";
                // line 857
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 858
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 859
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 859)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 862
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 866
        yield "        ";
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 867
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 867), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 869
        yield "    </div>

    ";
        // line 871
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 871), 'errors');
        yield "
";
        yield from [];
    }

    // line 874
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_slug_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 875
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(),         // line 877
($context["target"] ?? null), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 877), "children", [], "any", false, false, false, 877)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["name"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 877), "id", [], "any", false, false, false, 877); }))]);
        // line 879
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 879)) {
            // line 880
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($_v7 =             // line 881
($context["attr"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["data-confirm-text"] ?? null) : null))]);
            // line 883
            yield "    ";
        }
        // line 884
        yield "
    <div class=\"input-group\">
        ";
        // line 886
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        yield "
        <button type=\"button\" class=\"btn\"
                data-icon-locked=\"";
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]), "html");
        yield "\"
                data-icon-unlocked=\"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock-open-solid"]), "html");
        yield "\">
            ";
        // line 890
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]);
        yield "
        </button>
    </div>
";
        yield from [];
    }

    // line 494
    public function macro_recursiveFieldsetForm($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 495
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 495), "block_prefixes", [], "any", false, false, false, 495)) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 495), "ea_crud_form", [], "any", false, true, false, 495), "form_tab", [], "any", true, true, false, 495) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 495), "ea_crud_form", [], "any", false, false, false, 495), "form_tab", [], "any", false, false, false, 495)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 495), "ea_crud_form", [], "any", false, true, false, 495), "form_tabs", [], "any", true, true, false, 495))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 496
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 496), "ea_crud_form", [], "any", false, true, false, 496), "form_tabs", [], "any", true, true, false, 496)) {
                    // line 497
                    yield "                    ";
                    // line 498
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 498, $this->getSourceContext())->macro_recursiveFieldsetForm(...[$context["field"]]);
                    yield "
                ";
                } else {
                    // line 500
                    yield "                    ";
                    // line 501
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                ";
                }
                // line 503
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 504
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
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
        return array (  2815 => 504,  2809 => 503,  2803 => 501,  2801 => 500,  2795 => 498,  2793 => 497,  2790 => 496,  2785 => 495,  2773 => 494,  2764 => 890,  2760 => 889,  2756 => 888,  2751 => 886,  2747 => 884,  2744 => 883,  2742 => 881,  2740 => 880,  2737 => 879,  2735 => 877,  2733 => 875,  2726 => 874,  2719 => 871,  2715 => 869,  2709 => 867,  2706 => 866,  2700 => 862,  2691 => 859,  2688 => 858,  2684 => 857,  2677 => 855,  2672 => 854,  2666 => 853,  2662 => 851,  2658 => 850,  2653 => 847,  2651 => 846,  2647 => 844,  2641 => 841,  2638 => 840,  2636 => 839,  2633 => 838,  2627 => 835,  2624 => 834,  2622 => 833,  2619 => 832,  2615 => 830,  2609 => 828,  2603 => 826,  2601 => 825,  2598 => 824,  2596 => 823,  2591 => 821,  2586 => 818,  2583 => 817,  2580 => 816,  2577 => 815,  2574 => 814,  2571 => 813,  2568 => 812,  2565 => 811,  2562 => 810,  2559 => 809,  2556 => 808,  2553 => 807,  2546 => 806,  2539 => 803,  2536 => 802,  2530 => 800,  2527 => 799,  2521 => 795,  2512 => 792,  2509 => 791,  2505 => 790,  2498 => 788,  2493 => 787,  2487 => 786,  2483 => 784,  2479 => 783,  2474 => 780,  2472 => 779,  2465 => 775,  2460 => 774,  2454 => 771,  2447 => 770,  2445 => 769,  2438 => 766,  2432 => 764,  2430 => 763,  2428 => 762,  2423 => 759,  2419 => 758,  2416 => 757,  2413 => 756,  2410 => 755,  2407 => 754,  2404 => 753,  2401 => 752,  2398 => 751,  2395 => 750,  2392 => 749,  2389 => 748,  2386 => 747,  2384 => 746,  2380 => 744,  2373 => 743,  2365 => 740,  2358 => 739,  2353 => 736,  2348 => 733,  2342 => 732,  2338 => 731,  2334 => 730,  2331 => 729,  2324 => 728,  2316 => 725,  2309 => 724,  2286 => 716,  2275 => 714,  2269 => 711,  2255 => 710,  2247 => 709,  2241 => 708,  2237 => 707,  2233 => 706,  2230 => 705,  2213 => 704,  2210 => 703,  2207 => 702,  2200 => 701,  2193 => 696,  2186 => 695,  2179 => 691,  2173 => 688,  2170 => 687,  2168 => 686,  2146 => 685,  2143 => 684,  2140 => 683,  2137 => 682,  2130 => 681,  2123 => 677,  2116 => 676,  2109 => 672,  2102 => 671,  2095 => 667,  2087 => 664,  2084 => 662,  2082 => 661,  2078 => 660,  2076 => 659,  2074 => 658,  2069 => 656,  2066 => 654,  2064 => 653,  2055 => 652,  2052 => 651,  2048 => 650,  2043 => 647,  2040 => 646,  2037 => 645,  2034 => 644,  2031 => 643,  2024 => 642,  2015 => 636,  2008 => 635,  1994 => 631,  1991 => 630,  1985 => 628,  1983 => 627,  1976 => 625,  1973 => 624,  1970 => 623,  1963 => 622,  1956 => 618,  1950 => 616,  1948 => 615,  1945 => 614,  1939 => 611,  1936 => 610,  1930 => 607,  1924 => 606,  1920 => 605,  1915 => 604,  1913 => 603,  1905 => 601,  1898 => 600,  1891 => 597,  1888 => 596,  1882 => 594,  1880 => 593,  1877 => 592,  1871 => 590,  1868 => 589,  1861 => 588,  1855 => 585,  1848 => 584,  1841 => 580,  1835 => 578,  1833 => 577,  1829 => 575,  1824 => 574,  1820 => 573,  1816 => 571,  1814 => 570,  1808 => 569,  1805 => 568,  1802 => 567,  1799 => 566,  1796 => 565,  1789 => 564,  1782 => 560,  1779 => 559,  1777 => 557,  1770 => 556,  1763 => 552,  1760 => 551,  1758 => 550,  1751 => 549,  1743 => 546,  1736 => 545,  1728 => 540,  1724 => 539,  1720 => 537,  1718 => 536,  1717 => 535,  1715 => 533,  1708 => 532,  1702 => 528,  1700 => 527,  1699 => 526,  1698 => 525,  1697 => 524,  1696 => 523,  1694 => 521,  1687 => 520,  1679 => 516,  1676 => 515,  1669 => 514,  1661 => 511,  1654 => 510,  1642 => 505,  1640 => 494,  1638 => 493,  1630 => 489,  1624 => 488,  1618 => 486,  1615 => 485,  1611 => 484,  1600 => 482,  1597 => 481,  1592 => 478,  1586 => 476,  1584 => 475,  1577 => 472,  1571 => 470,  1569 => 469,  1566 => 468,  1560 => 466,  1558 => 465,  1555 => 464,  1548 => 462,  1544 => 461,  1539 => 460,  1535 => 458,  1533 => 457,  1525 => 455,  1523 => 454,  1518 => 452,  1515 => 451,  1512 => 450,  1510 => 449,  1507 => 448,  1504 => 447,  1499 => 446,  1496 => 445,  1493 => 444,  1486 => 443,  1479 => 440,  1476 => 439,  1473 => 438,  1466 => 437,  1454 => 432,  1449 => 431,  1442 => 430,  1434 => 426,  1427 => 425,  1419 => 421,  1416 => 420,  1410 => 418,  1408 => 417,  1402 => 414,  1396 => 413,  1393 => 412,  1389 => 409,  1383 => 407,  1376 => 404,  1374 => 403,  1371 => 402,  1368 => 401,  1364 => 399,  1358 => 397,  1355 => 396,  1350 => 394,  1348 => 391,  1346 => 390,  1342 => 389,  1338 => 387,  1332 => 385,  1329 => 384,  1324 => 382,  1322 => 379,  1320 => 378,  1316 => 377,  1313 => 376,  1310 => 375,  1306 => 373,  1300 => 371,  1297 => 370,  1292 => 368,  1290 => 365,  1288 => 364,  1285 => 363,  1282 => 362,  1280 => 361,  1277 => 360,  1274 => 359,  1267 => 358,  1259 => 355,  1256 => 354,  1249 => 353,  1241 => 349,  1238 => 348,  1232 => 346,  1230 => 345,  1224 => 342,  1218 => 341,  1215 => 340,  1211 => 337,  1205 => 335,  1198 => 332,  1196 => 331,  1193 => 330,  1189 => 328,  1186 => 326,  1183 => 324,  1181 => 323,  1179 => 322,  1174 => 321,  1172 => 320,  1169 => 319,  1162 => 318,  1154 => 315,  1151 => 314,  1144 => 313,  1136 => 309,  1133 => 308,  1126 => 307,  1118 => 301,  1114 => 298,  1111 => 296,  1109 => 295,  1105 => 292,  1102 => 290,  1100 => 289,  1098 => 288,  1083 => 287,  1079 => 284,  1076 => 281,  1075 => 280,  1074 => 279,  1072 => 278,  1070 => 277,  1068 => 274,  1065 => 272,  1063 => 271,  1060 => 269,  1057 => 267,  1055 => 266,  1053 => 265,  1050 => 261,  1043 => 260,  1038 => 255,  1036 => 254,  1030 => 253,  1023 => 252,  1015 => 248,  1012 => 247,  1009 => 246,  1006 => 245,  1003 => 244,  1000 => 243,  994 => 241,  991 => 240,  988 => 239,  986 => 237,  984 => 236,  981 => 235,  974 => 234,  968 => 231,  959 => 225,  951 => 222,  948 => 221,  942 => 219,  940 => 218,  934 => 215,  930 => 214,  924 => 213,  920 => 211,  917 => 210,  911 => 208,  909 => 207,  905 => 206,  900 => 205,  898 => 204,  892 => 203,  889 => 202,  882 => 199,  878 => 198,  875 => 197,  872 => 196,  869 => 195,  866 => 194,  863 => 193,  860 => 192,  857 => 191,  850 => 190,  841 => 185,  837 => 184,  834 => 183,  832 => 182,  829 => 181,  826 => 180,  823 => 179,  821 => 178,  817 => 176,  811 => 173,  808 => 172,  802 => 170,  800 => 169,  795 => 168,  793 => 167,  789 => 165,  786 => 164,  783 => 163,  781 => 161,  774 => 160,  767 => 157,  764 => 156,  762 => 154,  761 => 153,  760 => 152,  759 => 151,  758 => 150,  757 => 148,  754 => 147,  748 => 146,  745 => 145,  742 => 144,  739 => 143,  736 => 142,  733 => 141,  730 => 140,  725 => 139,  723 => 138,  720 => 137,  717 => 136,  714 => 135,  711 => 134,  704 => 133,  697 => 130,  694 => 129,  691 => 128,  688 => 123,  685 => 122,  678 => 121,  671 => 117,  668 => 116,  662 => 111,  660 => 110,  654 => 107,  652 => 106,  647 => 105,  645 => 104,  642 => 103,  637 => 102,  631 => 100,  629 => 99,  624 => 97,  621 => 96,  615 => 93,  612 => 92,  609 => 91,  605 => 90,  602 => 89,  599 => 88,  596 => 87,  594 => 86,  591 => 85,  589 => 84,  577 => 83,  575 => 82,  572 => 81,  569 => 80,  566 => 79,  564 => 77,  562 => 76,  555 => 75,  549 => 69,  546 => 67,  544 => 66,  542 => 65,  535 => 64,  530 => 61,  528 => 60,  526 => 59,  519 => 58,  514 => 55,  512 => 54,  510 => 53,  503 => 52,  497 => 49,  495 => 48,  493 => 47,  490 => 45,  488 => 44,  481 => 43,  476 => 40,  473 => 38,  471 => 37,  469 => 36,  466 => 34,  464 => 33,  457 => 32,  451 => 27,  440 => 25,  435 => 24,  432 => 23,  425 => 22,  419 => 19,  413 => 17,  410 => 16,  403 => 15,  394 => 11,  392 => 10,  388 => 9,  385 => 8,  379 => 6,  376 => 5,  369 => 4,  364 => 874,  361 => 873,  359 => 806,  356 => 805,  354 => 743,  351 => 742,  349 => 739,  346 => 738,  344 => 728,  341 => 727,  339 => 724,  336 => 723,  334 => 701,  331 => 699,  329 => 695,  326 => 694,  324 => 681,  321 => 680,  319 => 676,  316 => 675,  314 => 671,  311 => 670,  309 => 642,  306 => 641,  304 => 635,  301 => 634,  299 => 622,  296 => 621,  294 => 600,  291 => 599,  289 => 588,  286 => 587,  284 => 584,  281 => 583,  279 => 564,  276 => 563,  274 => 556,  271 => 555,  269 => 549,  266 => 548,  264 => 545,  261 => 543,  259 => 532,  256 => 530,  254 => 520,  251 => 518,  249 => 514,  246 => 513,  244 => 510,  241 => 508,  239 => 443,  236 => 442,  234 => 437,  231 => 435,  229 => 430,  226 => 428,  224 => 425,  221 => 424,  219 => 358,  216 => 357,  214 => 353,  211 => 352,  209 => 318,  206 => 317,  204 => 313,  201 => 312,  199 => 307,  196 => 306,  193 => 304,  191 => 260,  188 => 259,  185 => 257,  183 => 252,  180 => 251,  178 => 234,  175 => 233,  173 => 190,  170 => 189,  168 => 160,  165 => 159,  163 => 133,  160 => 132,  158 => 121,  155 => 120,  153 => 75,  150 => 74,  147 => 72,  145 => 64,  142 => 63,  140 => 58,  137 => 57,  135 => 52,  132 => 51,  130 => 43,  127 => 42,  125 => 32,  122 => 31,  119 => 29,  117 => 22,  114 => 21,  112 => 15,  109 => 14,  107 => 4,  104 => 3,  35 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/crud/form_theme.html.twig");
    }
}

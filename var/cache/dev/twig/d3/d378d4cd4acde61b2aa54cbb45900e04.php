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

/* @EasyAdmin/crud/includes/_delete_form.html.twig */
class __TwigTemplate_5b9112ae2e09b8dbb4387d3ce211081f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_delete_form.html.twig"));

        // line 2
        yield "<form class=\"d-none\" method=\"post\" id=\"delete-form\">
    ";
        // line 4
        yield "        <input type=\"hidden\" name=\"token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("ea-delete"), "html", null, true);
        yield "\" />
    ";
        // line 6
        yield "</form>

<div id=\"modal-delete\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.title", [], "EasyAdminBundle"), "html", null, true);
        yield "</h4>
                <p>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.content", [], "EasyAdminBundle"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", [], "EasyAdminBundle"), "html", null, true);
        yield "</span>
                </button>

                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" form=\"delete-form\">
                    <span class=\"btn-label\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete", [], "EasyAdminBundle"), "html", null, true);
        yield "</span>
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/includes/_delete_form.html.twig";
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
        return array (  82 => 21,  75 => 17,  68 => 13,  64 => 12,  56 => 6,  51 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
<form class=\"d-none\" method=\"post\" id=\"delete-form\">
    {% guard function csrf_token %}
        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('ea-delete') }}\" />
    {% endguard %}
</form>

<div id=\"modal-delete\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>{{ 'delete_modal.title'|trans([], 'EasyAdminBundle') }}</h4>
                <p>{{ 'delete_modal.content'|trans([], 'EasyAdminBundle') }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">{{ 'action.cancel'|trans([], 'EasyAdminBundle') }}</span>
                </button>

                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" form=\"delete-form\">
                    <span class=\"btn-label\">{{ 'action.delete'|trans([], 'EasyAdminBundle') }}</span>
                </button>
            </div>
        </div>
    </div>
</div>
", "@EasyAdmin/crud/includes/_delete_form.html.twig", "C:\\Users\\razay\\Downloads\\fadel\\fadel\\krabs-backend-v2\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\includes\\_delete_form.html.twig");
    }
}

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

/* @EasyAdmin/inspector/data_collector.html.twig */
class __TwigTemplate_8af460ab37c38d3a43c0e8825b7df53b extends Template
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
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <span class=\"label ";
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("@EasyAdmin/inspector/icon-v3.svg.twig") : ("@EasyAdmin/inspector/icon.svg.twig")));
        yield "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    <h2>EasyAdmin <small>(";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        yield ")</small></h2>

    ";
        // line 13
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>
    ";
        } else {
            // line 18
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 18)], false);
            yield "
    ";
        }
        // line 20
        yield "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/inspector/data_collector.html.twig";
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
        return array (  100 => 20,  94 => 18,  88 => 14,  86 => 13,  80 => 11,  73 => 10,  64 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/inspector/data_collector.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/inspector/data_collector.html.twig");
    }
}

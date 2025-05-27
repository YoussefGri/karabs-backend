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

/* @EasyAdmin/components/Icon.html.twig */
class __TwigTemplate_4231b3beea1d34a09487d2469a88dc44 extends Template
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
        // line 2
        yield "<span ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "defaults", [["class" => "icon"]], "method", false, false, false, 2), "html", null, true);
        yield ">
    ";
        // line 3
        $context["icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "getIcon", [], "method", false, false, false, 3);
        // line 4
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "isFontAwesomeIconSet", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
            yield "\"></i>
    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["icon"] ?? null), "svgContents", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "svgContents", [], "any", false, false, false, 7);
            yield "
    ";
        } else {
            // line 9
            yield "        ";
            // line 12
            yield "    ";
        }
        // line 13
        yield "</span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/Icon.html.twig";
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
        return array (  70 => 13,  67 => 12,  65 => 9,  59 => 7,  57 => 6,  52 => 5,  49 => 4,  47 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/components/Icon.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/components/Icon.html.twig");
    }
}

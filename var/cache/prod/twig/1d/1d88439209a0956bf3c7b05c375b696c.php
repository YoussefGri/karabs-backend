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

/* @EasyAdmin/components/ActionMenu/Button.html.twig */
class __TwigTemplate_4b2102886729dff21e3a01978c963c36 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $propsNames = [];        if (isset($context['__props']['withoutDropdownToggleMarker'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "withoutDropdownToggleMarker" in template "@EasyAdmin/components/ActionMenu/Button.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'withoutDropdownToggleMarker';        
        $context['attributes'] = $context['attributes']->remove('withoutDropdownToggleMarker');        
        if (!isset($context['withoutDropdownToggleMarker'])) {            $context['withoutDropdownToggleMarker'] = false;
        }        
        if (isset($context['__context']['withoutDropdownToggleMarker'])) {
            $context['withoutDropdownToggleMarker'] = false;
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 4
        yield "
";
        // line 5
        $context["css_class"] = Twig\Extra\Html\HtmlExtension::htmlClasses("dropdown-toggle", ["dropdown-toggle-hidden-marker" =>         // line 7
($context["withoutDropdownToggleMarker"] ?? null)]);
        // line 9
        yield "
<a ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "defaults", [["class" => ($context["css_class"] ?? null), "href" => "#", "role" => "button", "data-bs-toggle" => "dropdown", "aria-haspopup" => "true", "aria-expanded" => "false"]], "method", false, false, false, 10), "html", null, true);
        yield ">
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 12
        yield "</a>
";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/ActionMenu/Button.html.twig";
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
        return array (  82 => 11,  76 => 12,  74 => 11,  70 => 10,  67 => 9,  65 => 7,  64 => 5,  61 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/components/ActionMenu/Button.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/components/ActionMenu/Button.html.twig");
    }
}

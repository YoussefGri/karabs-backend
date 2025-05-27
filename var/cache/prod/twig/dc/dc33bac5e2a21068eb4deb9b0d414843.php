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

/* @Turbo/components/Stream/Replace.html.twig */
class __TwigTemplate_a40a55f4ec5c26c4e7c719ea2a22d8d0 extends Template
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
        $propsNames = [];        if (isset($context['__props']['target'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "target" in template "@Turbo/components/Stream/Replace.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'target';        
        $context['attributes'] = $context['attributes']->remove('target');        
        if (!isset($context['target'])) {            throw new \Twig\Error\RuntimeError("target should be defined for component @Turbo/components/Stream/Replace.html.twig.");            
        }        
        if (isset($context['__props']['morph'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "morph" in template "@Turbo/components/Stream/Replace.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'morph';        
        $context['attributes'] = $context['attributes']->remove('morph');        
        if (!isset($context['morph'])) {            $context['morph'] = false;
        }        
        if (isset($context['__context']['morph'])) {
            $context['morph'] = false;
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 3
        yield "<turbo-stream action=\"replace\" targets=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
        yield "\"";
        if ((($tmp = ($context["morph"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " method=\"morph\"";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["attributes"] ?? null), "html", null, true);
        yield ">
    <template>";
        // line 4
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield "</template>
</turbo-stream>
";
        yield from [];
    }

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
        return "@Turbo/components/Stream/Replace.html.twig";
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
        return array (  79 => 4,  69 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Turbo/components/Stream/Replace.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/symfony/ux-turbo/templates/components/Stream/Replace.html.twig");
    }
}

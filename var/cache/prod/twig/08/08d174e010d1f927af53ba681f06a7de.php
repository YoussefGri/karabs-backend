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

/* @Turbo/components/Stream/Refresh.html.twig */
class __TwigTemplate_6e8da8057610b3b154b363f8966121df extends Template
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
        // line 1
        $propsNames = [];        if (isset($context['__props']['requestId'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "requestId" in template "@Turbo/components/Stream/Refresh.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'requestId';        
        $context['attributes'] = $context['attributes']->remove('requestId');        
        if (!isset($context['requestId'])) {            $context['requestId'] = null;
        }        
        if (isset($context['__context']['requestId'])) {
            $context['requestId'] = null;
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 3
        yield "<turbo-stream action=\"refresh\"";
        if ((($tmp =  !(null === ($context["requestId"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " request-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["requestId"] ?? null), "html", null, true);
            yield "\"";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["attributes"] ?? null), "html", null, true);
        yield "></turbo-stream>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Turbo/components/Stream/Refresh.html.twig";
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
        return array (  60 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Turbo/components/Stream/Refresh.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/symfony/ux-turbo/templates/components/Stream/Refresh.html.twig");
    }
}

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

/* @EasyAdmin/components/ActionMenu/ActionList/Header.html.twig */
class __TwigTemplate_70ed2dd5865b4b66e98b48c87c649475 extends Template
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
        $propsNames = [];        if (isset($context['__props']['label'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "label" in template "@EasyAdmin/components/ActionMenu/ActionList/Header.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'label';        
        $context['attributes'] = $context['attributes']->remove('label');        
        if (!isset($context['label'])) {            $context['label'] = null;
        }        
        if (isset($context['__context']['label'])) {
            $context['label'] = null;
        }
        if (isset($context['__props']['renderLabelRaw'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "renderLabelRaw" in template "@EasyAdmin/components/ActionMenu/ActionList/Header.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'renderLabelRaw';        
        $context['attributes'] = $context['attributes']->remove('renderLabelRaw');        
        if (!isset($context['renderLabelRaw'])) {            $context['renderLabelRaw'] = false;
        }        
        if (isset($context['__context']['renderLabelRaw'])) {
            $context['renderLabelRaw'] = false;
        }
        if (isset($context['__props']['icon'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "icon" in template "@EasyAdmin/components/ActionMenu/ActionList/Header.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'icon';        
        $context['attributes'] = $context['attributes']->remove('icon');        
        if (!isset($context['icon'])) {            $context['icon'] = null;
        }        
        if (isset($context['__context']['icon'])) {
            $context['icon'] = null;
        }
        if (isset($context['__props']['htmlAttributes'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "htmlAttributes" in template "@EasyAdmin/components/ActionMenu/ActionList/Header.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'htmlAttributes';        
        $context['attributes'] = $context['attributes']->remove('htmlAttributes');        
        if (!isset($context['htmlAttributes'])) {            $context['htmlAttributes'] = [];
        }        
        if (isset($context['__context']['htmlAttributes'])) {
            $context['htmlAttributes'] = [];
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 7
        yield "
";
        // line 8
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null)))) {
            // line 9
            yield "    <li ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "defaults", [Twig\Extension\CoreExtension::merge(["class" => "dropdown-header"], ($context["htmlAttributes"] ?? null))], "method", false, false, false, 9), "html", null, true);
            yield ">";
            // line 10
            if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", [ ...CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "nested", ["icon"], "method", false, false, false, 10), "defaults", [["name" => ($context["icon"] ?? null)]], "method", false, false, false, 10)]);
                yield " ";
            }
            // line 11
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "nested", ["label"], "method", false, false, false, 11), "html", null, true);
                yield ">";
                yield (((($tmp = ($context["renderLabelRaw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["label"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true)));
                yield "</span>";
            }
            // line 12
            yield "</li>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/ActionMenu/ActionList/Header.html.twig";
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
        return array (  115 => 12,  107 => 11,  102 => 10,  98 => 9,  96 => 8,  93 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/components/ActionMenu/ActionList/Header.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/components/ActionMenu/ActionList/Header.html.twig");
    }
}

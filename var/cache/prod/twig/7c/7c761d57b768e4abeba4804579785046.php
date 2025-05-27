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

/* @EasyAdmin/includes/_js_assets.html.twig */
class __TwigTemplate_23b496fd05f6be00d1bc973bb070704e extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["assets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 3
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "preload", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4
                yield "        ";
                // line 5
                yield "            ";
                $context["src"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "packageName", [], "any", false, false, false, 5));
                // line 6
                yield "            <script src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload(($context["src"] ?? null), ["as" => "script", "nopush" => CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "nopush", [], "any", false, false, false, 6)]), "html", null, true);
                yield "\" ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "async", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("async") : (""));
                yield " ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "defer", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("defer") : (""));
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "></script>
        ";
                // line 9
                yield "    ";
            } else {
                // line 10
                yield "        <script src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "packageName", [], "any", false, false, false, 10)), "html", null, true);
                yield "\" ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "async", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("async") : (""));
                yield " ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "defer", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("defer") : (""));
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "></script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_asset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/includes/_js_assets.html.twig";
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
        return array (  86 => 11,  79 => 10,  76 => 9,  61 => 7,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/includes/_js_assets.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/includes/_js_assets.html.twig");
    }
}

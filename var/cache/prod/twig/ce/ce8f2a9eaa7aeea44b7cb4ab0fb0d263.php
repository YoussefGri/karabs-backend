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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_c92d259d9f0d0c6175a94d9d9000d51d extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
            'login_form_wrapper' => [$this, 'block_login_form_wrapper'],
            'login_form_credentials_wrapper' => [$this, 'block_login_form_credentials_wrapper'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return $this->load((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 2)) : ("@EasyAdmin/page/login_minimal.html.twig")), 2);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_b49a40fbcbefbe65f516f7416fe4b8ac79421c82e4da1900072656265de24528"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3)) : (((array_key_exists("translation_domain", $context)) ? ((((array_key_exists("translation_domain", $context) &&  !(null === $context["translation_domain"]))) ? ($context["translation_domain"]) : ("messages"))) : (""))));
        // line 2
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "page-login";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield ((array_key_exists("page_title", $context)) ? (($context["page_title"] ?? null)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 6)) : (""))));
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        if ((($tmp = ((array_key_exists("favicon_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["favicon_path"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "        <link rel=\"shortcut icon\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["favicon_path"] ?? null), "html", null, true);
            yield "\">
    ";
        } else {
            // line 12
            yield "        ";
            yield from $this->yieldParentBlock("head_favicon", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    ";
        $context["page_title"] =         $this->unwrap()->renderBlock("page_title", $context, $blocks);
        // line 18
        yield "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 3
($context["__internal_b49a40fbcbefbe65f516f7416fe4b8ac79421c82e4da1900072656265de24528"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 19
        yield "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 3
($context["__internal_b49a40fbcbefbe65f516f7416fe4b8ac79421c82e4da1900072656265de24528"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 20
        yield "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["forgot_password_label"] ?? null), [],         // line 3
($context["__internal_b49a40fbcbefbe65f516f7416fe4b8ac79421c82e4da1900072656265de24528"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 21
        yield "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["remember_me_label"] ?? null), [],         // line 3
($context["__internal_b49a40fbcbefbe65f516f7416fe4b8ac79421c82e4da1900072656265de24528"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 22
        yield "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 3
($context["__internal_b49a40fbcbefbe65f516f7416fe4b8ac79421c82e4da1900072656265de24528"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 23
        yield "
    ";
        // line 24
        yield from $this->load("@EasyAdmin/flash_messages.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 29
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 42
        yield "            </div>
        </header>

        <section class=\"content\">
            ";
        // line 46
        if ((($tmp = ((array_key_exists("error", $context)) ? (Twig\Extension\CoreExtension::default(($context["error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 48), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 48), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 51
        yield "
            ";
        // line 52
        yield from $this->unwrap()->yieldBlock('login_form_wrapper', $context, $blocks);
        // line 96
        yield "        </section>
    </div>
";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "                    ";
        if ((($tmp = ($context["page_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                            <a class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(($context["page_title"] ?? null)), "html", null, true);
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 32));
                yield "\">
                                ";
                // line 33
                yield ($context["page_title"] ?? null);
                yield "
                            </a>
                        ";
            } else {
                // line 36
                yield "                            <div class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                yield "\">
                                ";
                // line 37
                yield ($context["page_title"] ?? null);
                yield "
                            </div>
                        ";
            }
            // line 40
            yield "                    ";
        }
        // line 41
        yield "                ";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_form_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "            <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default(($context["action"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
                ";
        // line 54
        if ((($tmp = ((array_key_exists("csrf_token_intention", $context)) ? (Twig\Extension\CoreExtension::default(($context["csrf_token_intention"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_token_intention"] ?? null)), "html", null, true);
            yield "\">
                ";
        }
        // line 57
        yield "
                <input type=\"hidden\" name=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["target_path"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 58))) : ("/")))) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 58))) : ("/")))), "html", null, true);
        yield "\" />

                ";
        // line 60
        yield from $this->unwrap()->yieldBlock('login_form_credentials_wrapper', $context, $blocks);
        // line 81
        yield "
                ";
        // line 82
        if ((($tmp = ((array_key_exists("remember_me_enabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_enabled"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("remember_me_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_parameter"] ?? null), "_remember_me")) : ("_remember_me")), "html", null, true);
            yield "\" ";
            yield (((($tmp = ((array_key_exists("remember_me_checked", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_checked"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_remember_me_label"] ?? null), "html", null, true);
            yield "
                        </label>
                    </div>
                ";
        }
        // line 90
        yield "
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_sign_in_label"] ?? null), "html", null, true);
        yield "</button>
            </form>

            <script src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.js", Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        yield "\"></script>
            ";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_form_credentials_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "                    <div class=\"form-group\">
                        <label class=\"form-control-label required\" for=\"username\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_username_label"] ?? null), "html", null, true);
        yield "</label>
                        <div class=\"form-widget\">
                            <input type=\"text\" id=\"username\" name=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("username_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["username_parameter"] ?? null), "_username")) : ("_username")), "html", null, true);
        yield "\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        yield "\" required autofocus autocomplete=\"username\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-control-label required\" for=\"password\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_password_label"] ?? null), "html", null, true);
        yield "</label>
                        <div class=\"form-widget\">
                            <input type=\"password\" id=\"password\" name=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("password_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["password_parameter"] ?? null), "_password")) : ("_password")), "html", null, true);
        yield "\" class=\"form-control\" required autocomplete=\"current-password\">
                        </div>

                        ";
        // line 74
        if ((($tmp = ((array_key_exists("forgot_password_enabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["forgot_password_enabled"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                            <div class=\"form-text\">
                                <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("forgot_password_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["forgot_password_path"] ?? null), "#")) : ("#")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_forgot_password_label"] ?? null), "html", null, true);
            yield "</a>
                            </div>
                        ";
        }
        // line 79
        yield "                    </div>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/page/login.html.twig";
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
        return array (  344 => 79,  336 => 76,  333 => 75,  331 => 74,  325 => 71,  320 => 69,  310 => 64,  305 => 62,  302 => 61,  295 => 60,  288 => 94,  282 => 91,  279 => 90,  272 => 86,  265 => 84,  262 => 83,  260 => 82,  257 => 81,  255 => 60,  248 => 58,  245 => 57,  239 => 55,  237 => 54,  232 => 53,  225 => 52,  220 => 41,  217 => 40,  211 => 37,  206 => 36,  200 => 33,  191 => 32,  188 => 31,  185 => 30,  178 => 29,  171 => 96,  169 => 52,  166 => 51,  160 => 48,  157 => 47,  155 => 46,  149 => 42,  147 => 29,  141 => 25,  139 => 24,  136 => 23,  134 => 3,  132 => 22,  130 => 3,  128 => 21,  126 => 3,  124 => 20,  122 => 3,  120 => 19,  118 => 3,  116 => 18,  113 => 17,  106 => 16,  97 => 12,  91 => 10,  88 => 9,  81 => 8,  70 => 6,  59 => 5,  55 => 2,  53 => 3,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/page/login.html.twig");
    }
}

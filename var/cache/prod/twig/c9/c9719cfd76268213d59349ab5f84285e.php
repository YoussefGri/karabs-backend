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

/* admin/login.html.twig */
class __TwigTemplate_0cba4c18f1671dfa3c5f40a809aae458 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Connexion à l'administration";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    body {
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
    }

    .login-container {
        height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    .login-card {
        background: rgba(255, 255, 255, 0.97);
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        width: 100%;
        max-width: 420px;
        padding: 3rem 2.5rem;
    }

    .login-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .login-header h1 {
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 0.5rem;
        font-size: 1.6rem;
    }

    .form-control {
        border-radius: 12px;
        padding: 0.9rem 1.1rem;
        border: 2px solid #e2e8f0;
        transition: border-color 0.3s ease;
        width: 100%;
        font-size: 1rem;
    }

    .form-control:focus {
        border-color: #667eea;
        outline: none;
    }

    .input-label {
        color: #4a5568;
        font-weight: 600;
        margin-bottom: 0.3rem;
        display: block;
    }

    .login-btn {
        background: #667eea;
        color: white;
        padding: 0.9rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        width: 100%;
        border: none;
        margin-top: 1.2rem;
    }

    .login-btn:hover {
        background: #5a67d8;
        transform: translateY(-1px);
    }

    .alert-danger {
        background: #fed7d7;
        color: #c53030;
        border-radius: 12px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        border: 1px solid #feb2b2;
        font-size: 0.95rem;
    }

    .forgot-link {
        display: block;
        text-align: center;
        margin-top: 1.2rem;
        font-size: 0.95rem;
        color: #667eea;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .forgot-link:hover {
        color: #764ba2;
        text-decoration: underline;
    }
</style>

<div class=\"login-container\">
    <div class=\"login-card\">
        <div class=\"login-header\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" fill=\"#667eea\" class=\"mb-3\" viewBox=\"0 0 16 16\">
                <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
            </svg>
            <h1>Accès Administrateur</h1>
        </div>

        <form method=\"post\">
            ";
        // line 126
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 127), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 127), "security"), "html", null, true);
            yield "</div>
            ";
        }
        // line 129
        yield "
            <div class=\"mb-4\">
                <label class=\"input-label\" for=\"inputEmail\">Email</label>
                ";
        // line 133
        yield "                <input type=\"email\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>

            </div>

            <div class=\"mb-4\">
                <label class=\"input-label\" for=\"inputPassword\">Mot de passe</label>
                ";
        // line 140
        yield "                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            <button class=\"login-btn\" type=\"submit\">
                Connexion
            </button>
        </form>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/login.html.twig";
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
        return array (  221 => 144,  215 => 140,  205 => 133,  200 => 129,  194 => 127,  192 => 126,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/login.html.twig", "/Users/youssefgr/Downloads/ter/krabs-backend-v2/templates/admin/login.html.twig");
    }
}

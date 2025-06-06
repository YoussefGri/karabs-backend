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

/* @EasyAdmin/welcome.html.twig */
class __TwigTemplate_5f3ca9e99285a029e3f964213863dff2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta name=\"generator\" content=\"EasyAdmin\" />

    <title>Welcome to EasyAdmin 4</title>

    <style>
        :root {
            --body-bg: #f8fafc;
            --text-color: #475569;
            --content-bg: #fff;
        }

        body {
            color: var(--text-color);
            font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
            line-height: 1.5;
            margin: 0;
        }
        .d-none { display: none; }
        strong { font-weight: 600; }
        article { background: var(--content-bg); padding: 32px 12px 0; }
        article h1 { font-size: 28px; margin: 0 0 4px; padding: 0 12px; }
        article h2 { font-size: 18px; margin: 0 0 4px; padding: 0 12px; }
        article h1, article h2 { line-height: 1.3; }
        article p.success { margin: 0 0 30px; padding: 0 12px; }
        .links { margin: 32px 0; }
        .link { align-items: center; border-radius: 6px; display: flex; padding: 12px; position: relative; }
        .link:hover { background: #f1f5f9; }
        .link:hover a { color: #2563eb; text-decoration: underline; }
        .link:hover .description { color: var(--text-color); }
        .link-icon { border-radius: 6px; display: inline-flex; margin-right: 18px; padding: 12px; }
        .link-icon svg { height: 24px; width: 24px; }
        .link-text a { color: inherit; font-weight: 600; text-decoration: none; }
        .link-text a::after { position: absolute; top: 0; right: 0; bottom: 0; left: 0; z-index: 1; pointer-events: auto; content: ''; }
        .link-text p.description { color: #64748b; font-size: 14px; margin: 0; }
        .link-blue .link-icon { background: #eff6ff; color: #3b82f6; }
        .link-blue:hover .link-icon { outline: 2px solid #3b82f6; outline-offset: -2px; }
        .link-green .link-icon { background: #f0fdf4; color: #22c55e; }
        .link-green:hover .link-icon { outline: 2px solid #22c55e; outline-offset: -2px; }
        .link-red .link-icon { background: #fef2f2; color: #ef4444; }
        .link-red:hover .link-icon { outline: 2px solid #ef4444; outline-offset: -2px; }
        .link-yellow .link-icon { background: #fffbeb; color: #f59e0b; }
        .link-yellow:hover .link-icon { outline: 2px solid #f59e0b; outline-offset: -2px; }
        .customization { border-top: 1px solid #e2e8f0; margin-top: 32px; padding: 44px 0 0; }
        .customization p { padding: 0 12px; }
        .customization pre {
            background: #f8fafc;
            border-radius: 6px;
            font-family: ui-monospace, \"Roboto Mono\", SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace;
            font-size: 14px;
            margin: 10px 12px;
            padding: 10px 10px;
            word-break: break-all;
            word-break: break-word;
            white-space: pre-wrap;
        }

        @media (min-width: 768px) {
            body { background: var(--body-bg); }
            .d-md-inline-block { display: inline-block; }
            article { border-radius: 24px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); margin: 45px auto; max-width: 700px; padding: 48px 88px; }
            article h1 { font-size: 36px; padding: 0; }
            article h2 { font-size: 24px; padding: 0; }
            article p.success { font-size: 18px; padding: 0; }
            .link { padding: 12px 18px; }
            .link:hover { background: #f1f5f9; }
            .link-icon svg { height: 32px; width: 32px; }
            .link-text a { font-size: 17px; }
            .link-text p.description { font-size: 15px; }
            pre { margin: 10px 0; }
            .customization { padding: 48px 0 0; }
            .customization p { padding: 0; }
            .customization pre { margin: 10px 0; }
        }
    </style>

    <script>
        // canvas-confetti - Copyright (c) 2020, Kiril Vatev - ISC License
        // source code and full license text: https://github.com/catdad/canvas-confetti
        !function(t,e){!function t(e,n,a,i){var o=!!(e.Worker&&e.Blob&&e.Promise&&e.OffscreenCanvas&&e.OffscreenCanvasRenderingContext2D&&e.HTMLCanvasElement&&e.HTMLCanvasElement.prototype.transferControlToOffscreen&&e.URL&&e.URL.createObjectURL);function r(){}function l(t){var a=n.exports.Promise,i=void 0!==a?a:e.Promise;return\"function\"==typeof i?new i(t):(t(r,r),null)}var c,s,u,d,f,h,g,m,b=(u=Math.floor(1e3/60),d={},f=0,\"function\"==typeof requestAnimationFrame&&\"function\"==typeof cancelAnimationFrame?(c=function(t){var e=Math.random();return d[e]=requestAnimationFrame((function n(a){f===a||f+u-1<a?(f=a,delete d[e],t()):d[e]=requestAnimationFrame(n)})),e},s=function(t){d[t]&&cancelAnimationFrame(d[t])}):(c=function(t){return setTimeout(t,u)},s=function(t){return clearTimeout(t)}),{frame:c,cancel:s}),v=(m={},function(){if(h)return h;if(!a&&o){var e=[\"var CONFETTI, SIZE = {}, module = {};\",\"(\"+t.toString()+\")(this, module, true, SIZE);\",\"onmessage = function(msg) {\",\"  if (msg.data.options) {\",\"    CONFETTI(msg.data.options).then(function () {\",\"      if (msg.data.callback) {\",\"        postMessage({ callback: msg.data.callback });\",\"      }\",\"    });\",\"  } else if (msg.data.reset) {\",\"    CONFETTI.reset();\",\"  } else if (msg.data.resize) {\",\"    SIZE.width = msg.data.resize.width;\",\"    SIZE.height = msg.data.resize.height;\",\"  } else if (msg.data.canvas) {\",\"    SIZE.width = msg.data.canvas.width;\",\"    SIZE.height = msg.data.canvas.height;\",\"    CONFETTI = module.exports.create(msg.data.canvas);\",\"  }\",\"}\"].join(\"\\n\");try{h=new Worker(URL.createObjectURL(new Blob([e])))}catch(t){return void 0!==typeof console&&\"function\"==typeof console.warn&&console.warn(\"🎊 Could not load worker\",t),null}!function(t){function e(e,n){t.postMessage({options:e||{},callback:n})}t.init=function(e){var n=e.transferControlToOffscreen();t.postMessage({canvas:n},[n])},t.fire=function(n,a,i){if(g)return e(n,null),g;var o=Math.random().toString(36).slice(2);return g=l((function(a){function r(e){e.data.callback===o&&(delete m[o],t.removeEventListener(\"message\",r),g=null,i(),a())}t.addEventListener(\"message\",r),e(n,o),m[o]=r.bind(null,{data:{callback:o}})}))},t.reset=function(){for(var e in t.postMessage({reset:!0}),m)m[e](),delete m[e]}}(h)}return h}),y={particleCount:50,angle:90,spread:45,startVelocity:45,decay:.9,gravity:1,drift:0,ticks:200,x:.5,y:.5,shapes:[\"square\",\"circle\"],zIndex:100,colors:[\"#26ccff\",\"#a25afd\",\"#ff5e7e\",\"#88ff5a\",\"#fcff42\",\"#ffa62d\",\"#ff36ff\"],disableForReducedMotion:!1,scalar:1};function p(t,e,n){return function(t,e){return e?e(t):t}(t&&null!=t[e]?t[e]:y[e],n)}function M(t){return t<0?0:Math.floor(t)}function w(t){return parseInt(t,16)}function x(t){return t.map(C)}function C(t){var e=String(t).replace(/[^0-9a-f]/gi,\"\");return e.length<6&&(e=e[0]+e[0]+e[1]+e[1]+e[2]+e[2]),{r:w(e.substring(0,2)),g:w(e.substring(2,4)),b:w(e.substring(4,6))}}function k(t){t.width=document.documentElement.clientWidth,t.height=document.documentElement.clientHeight}function I(t){var e=t.getBoundingClientRect();t.width=e.width,t.height=e.height}function T(t,e,n,o,r){var c,s,u=e.slice(),d=t.getContext(\"2d\"),f=l((function(e){function l(){c=s=null,d.clearRect(0,0,o.width,o.height),r(),e()}c=b.frame((function e(){!a||o.width===i.width&&o.height===i.height||(o.width=t.width=i.width,o.height=t.height=i.height),o.width||o.height||(n(t),o.width=t.width,o.height=t.height),d.clearRect(0,0,o.width,o.height),(u=u.filter((function(t){return function(t,e){e.x+=Math.cos(e.angle2D)*e.velocity+e.drift,e.y+=Math.sin(e.angle2D)*e.velocity+e.gravity,e.wobble+=.1,e.velocity*=e.decay,e.tiltAngle+=.1,e.tiltSin=Math.sin(e.tiltAngle),e.tiltCos=Math.cos(e.tiltAngle),e.random=Math.random()+5,e.wobbleX=e.x+10*e.scalar*Math.cos(e.wobble),e.wobbleY=e.y+10*e.scalar*Math.sin(e.wobble);var n=e.tick++/e.totalTicks,a=e.x+e.random*e.tiltCos,i=e.y+e.random*e.tiltSin,o=e.wobbleX+e.random*e.tiltCos,r=e.wobbleY+e.random*e.tiltSin;return t.fillStyle=\"rgba(\"+e.color.r+\", \"+e.color.g+\", \"+e.color.b+\", \"+(1-n)+\")\",t.beginPath(),\"circle\"===e.shape?t.ellipse?t.ellipse(e.x,e.y,Math.abs(o-a)*e.ovalScalar,Math.abs(r-i)*e.ovalScalar,Math.PI/10*e.wobble,0,2*Math.PI):function(t,e,n,a,i,o,r,l,c){t.save(),t.translate(e,n),t.rotate(o),t.scale(a,i),t.arc(0,0,1,r,l,c),t.restore()}(t,e.x,e.y,Math.abs(o-a)*e.ovalScalar,Math.abs(r-i)*e.ovalScalar,Math.PI/10*e.wobble,0,2*Math.PI):(t.moveTo(Math.floor(e.x),Math.floor(e.y)),t.lineTo(Math.floor(e.wobbleX),Math.floor(i)),t.lineTo(Math.floor(o),Math.floor(r)),t.lineTo(Math.floor(a),Math.floor(e.wobbleY))),t.closePath(),t.fill(),e.tick<e.totalTicks}(d,t)}))).length?c=b.frame(e):l()})),s=l}));return{addFettis:function(t){return u=u.concat(t),f},canvas:t,promise:f,reset:function(){c&&b.cancel(c),s&&s()}}}function E(t,n){var a,i=!t,r=!!p(n||{},\"resize\"),c=p(n,\"disableForReducedMotion\",Boolean),s=o&&!!p(n||{},\"useWorker\")?v():null,u=i?k:I,d=!(!t||!s)&&!!t.__confetti_initialized,f=\"function\"==typeof matchMedia&&matchMedia(\"(prefers-reduced-motion)\").matches;function h(e,n,i){for(var o,r,l,c,s,d=p(e,\"particleCount\",M),f=p(e,\"angle\",Number),h=p(e,\"spread\",Number),g=p(e,\"startVelocity\",Number),m=p(e,\"decay\",Number),b=p(e,\"gravity\",Number),v=p(e,\"drift\",Number),y=p(e,\"colors\",x),w=p(e,\"ticks\",Number),C=p(e,\"shapes\"),k=p(e,\"scalar\"),I=function(t){var e=p(t,\"origin\",Object);return e.x=p(e,\"x\",Number),e.y=p(e,\"y\",Number),e}(e),E=d,S=[],F=t.width*I.x,N=t.height*I.y;E--;)S.push((o={x:F,y:N,angle:f,spread:h,startVelocity:g,color:y[E%y.length],shape:C[(c=0,s=C.length,Math.floor(Math.random()*(s-c))+c)],ticks:w,decay:m,gravity:b,drift:v,scalar:k},r=void 0,l=void 0,r=o.angle*(Math.PI/180),l=o.spread*(Math.PI/180),{x:o.x,y:o.y,wobble:10*Math.random(),velocity:.5*o.startVelocity+Math.random()*o.startVelocity,angle2D:-r+(.5*l-Math.random()*l),tiltAngle:Math.random()*Math.PI,color:o.color,shape:o.shape,tick:0,totalTicks:o.ticks,decay:o.decay,drift:o.drift,random:Math.random()+5,tiltSin:0,tiltCos:0,wobbleX:0,wobbleY:0,gravity:3*o.gravity,ovalScalar:.6,scalar:o.scalar}));return a?a.addFettis(S):(a=T(t,S,u,n,i)).promise}function g(n){var o=c||p(n,\"disableForReducedMotion\",Boolean),g=p(n,\"zIndex\",Number);if(o&&f)return l((function(t){t()}));i&&a?t=a.canvas:i&&!t&&(t=function(t){var e=document.createElement(\"canvas\");return e.style.position=\"fixed\",e.style.top=\"0px\",e.style.left=\"0px\",e.style.pointerEvents=\"none\",e.style.zIndex=t,e}(g),document.body.appendChild(t)),r&&!d&&u(t);var m={width:t.width,height:t.height};function b(){if(s){var e={getBoundingClientRect:function(){if(!i)return t.getBoundingClientRect()}};return u(e),void s.postMessage({resize:{width:e.width,height:e.height}})}m.width=m.height=null}function v(){a=null,r&&e.removeEventListener(\"resize\",b),i&&t&&(document.body.removeChild(t),t=null,d=!1)}return s&&!d&&s.init(t),d=!0,s&&(t.__confetti_initialized=!0),r&&e.addEventListener(\"resize\",b,!1),s?s.fire(n,m,v):h(n,m,v)}return g.reset=function(){s&&s.reset(),a&&a.reset()},g}n.exports=E(null,{useWorker:!0,resize:!0}),n.exports.create=E}(function(){return void 0!==t?t:\"undefined\"!=typeof self?self:this||{}}(),e,!1),t.confetti=e.exports}(window,{});

        window.addEventListener('DOMContentLoaded', () => {
            if (window.innerWidth < 768) {
                return;
            }

            confetti({
                disableForReducedMotion: true,
                angle: 60,
                particleCount: 50,
                spread: 55,
                origin: { x: 0.05, y: 550 / window.innerHeight }
            });
            confetti({
                disableForReducedMotion: true,
                angle: 120,
                particleCount: 50,
                spread: 55,
                origin: { x: 0.95, y: 550 / window.innerHeight }
            });
        });
    </script>
</head>

<body>
<article>
    <h1>Welcome to EasyAdmin 4</h1>

    <p class=\"success\">
        You have <strong>successfully installed EasyAdmin 4</strong> in your application.
    </p>

    <div class=\"links\">
        <div class=\"link link-blue\">
            <div class=\"link-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\" />
                </svg>
            </div>
            <div class=\"link-text\">
                <a href=\"https://symfony.com/bundles/EasyAdminBundle/current/index.html\" target=\"_blank\">Read EasyAdmin Docs</a>
                <p class=\"description\">Learn how to customize EasyAdmin to fit your needs</p>
            </div>
        </div>

        <div class=\"link link-green\">
            <div class=\"link-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z\" />
                </svg>
            </div>
            <div class=\"link-text\">
                <a href=\"https://symfonycasts.com/screencast/easyadminbundle\" target=\"_blank\">Watch EasyAdmin Course on SymfonyCasts</a>
                <p class=\"description\">More than 30 videos <span class=\"d-none d-md-inline-block\">to learn how to build a powerful admin area</span></p>
            </div>
        </div>

        <div class=\"link link-red\">
            <div class=\"link-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\" />
                </svg>
            </div>
            <div class=\"link-text\">
                <a href=\"https://github.com/sponsors/javiereguiluz\" target=\"_blank\">Sponsor EasyAdmin</a>
                <p class=\"description\">Fund the development of new features. <span class=\"d-none d-md-inline-block\">One-time or regular donations</span></p>
            </div>
        </div>

        <div class=\"link link-yellow\">
            <div class=\"link-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                </svg>
            </div>
            <div class=\"link-text\">
                <a href=\"https://github.com/EasyCorp/EasyAdminBundle/stargazers\" target=\"_blank\">Star EasyAdmin on GitHub</a>
                <p class=\"description\">Help us promote EasyAdmin to reach new developers</p>
            </div>
        </div>
    </div>

    <section class=\"customization\">
        <h2>Why am I seeing this page? Where's my backend menu?</h2>
        <p>
            This page is the default EasyAdmin dashboard page. You are seeing this page
            because you never customized the dashboard of your backend.
        </p>
        <p>
            Edit the following file and use any of the ways to
            <a href=\"https://symfony.com/bundles/EasyAdminBundle/current/dashboards.html#customizing-the-dashboard-contents\">customize your dashboard contents</a>:
        </p>

        <pre translate=\"no\" class=\"notranslate\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dashboard_controller_filepath"]) || array_key_exists("dashboard_controller_filepath", $context) ? $context["dashboard_controller_filepath"] : (function () { throw new RuntimeError('Variable "dashboard_controller_filepath" does not exist.', 180, $this->source); })()), "html", null, true);
        yield "</pre>
    </section>
</article>
</body>
</html>
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
        return "@EasyAdmin/welcome.html.twig";
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
        return array (  229 => 180,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta name=\"generator\" content=\"EasyAdmin\" />

    <title>Welcome to EasyAdmin 4</title>

    <style>
        :root {
            --body-bg: #f8fafc;
            --text-color: #475569;
            --content-bg: #fff;
        }

        body {
            color: var(--text-color);
            font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
            line-height: 1.5;
            margin: 0;
        }
        .d-none { display: none; }
        strong { font-weight: 600; }
        article { background: var(--content-bg); padding: 32px 12px 0; }
        article h1 { font-size: 28px; margin: 0 0 4px; padding: 0 12px; }
        article h2 { font-size: 18px; margin: 0 0 4px; padding: 0 12px; }
        article h1, article h2 { line-height: 1.3; }
        article p.success { margin: 0 0 30px; padding: 0 12px; }
        .links { margin: 32px 0; }
        .link { align-items: center; border-radius: 6px; display: flex; padding: 12px; position: relative; }
        .link:hover { background: #f1f5f9; }
        .link:hover a { color: #2563eb; text-decoration: underline; }
        .link:hover .description { color: var(--text-color); }
        .link-icon { border-radius: 6px; display: inline-flex; margin-right: 18px; padding: 12px; }
        .link-icon svg { height: 24px; width: 24px; }
        .link-text a { color: inherit; font-weight: 600; text-decoration: none; }
        .link-text a::after { position: absolute; top: 0; right: 0; bottom: 0; left: 0; z-index: 1; pointer-events: auto; content: ''; }
        .link-text p.description { color: #64748b; font-size: 14px; margin: 0; }
        .link-blue .link-icon { background: #eff6ff; color: #3b82f6; }
        .link-blue:hover .link-icon { outline: 2px solid #3b82f6; outline-offset: -2px; }
        .link-green .link-icon { background: #f0fdf4; color: #22c55e; }
        .link-green:hover .link-icon { outline: 2px solid #22c55e; outline-offset: -2px; }
        .link-red .link-icon { background: #fef2f2; color: #ef4444; }
        .link-red:hover .link-icon { outline: 2px solid #ef4444; outline-offset: -2px; }
        .link-yellow .link-icon { background: #fffbeb; color: #f59e0b; }
        .link-yellow:hover .link-icon { outline: 2px solid #f59e0b; outline-offset: -2px; }
        .customization { border-top: 1px solid #e2e8f0; margin-top: 32px; padding: 44px 0 0; }
        .customization p { padding: 0 12px; }
        .customization pre {
            background: #f8fafc;
            border-radius: 6px;
            font-family: ui-monospace, \"Roboto Mono\", SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace;
            font-size: 14px;
            margin: 10px 12px;
            padding: 10px 10px;
            word-break: break-all;
            word-break: break-word;
            white-space: pre-wrap;
        }

        @media (min-width: 768px) {
            body { background: var(--body-bg); }
            .d-md-inline-block { display: inline-block; }
            article { border-radius: 24px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); margin: 45px auto; max-width: 700px; padding: 48px 88px; }
            article h1 { font-size: 36px; padding: 0; }
            article h2 { font-size: 24px; padding: 0; }
            article p.success { font-size: 18px; padding: 0; }
            .link { padding: 12px 18px; }
            .link:hover { background: #f1f5f9; }
            .link-icon svg { height: 32px; width: 32px; }
            .link-text a { font-size: 17px; }
            .link-text p.description { font-size: 15px; }
            pre { margin: 10px 0; }
            .customization { padding: 48px 0 0; }
            .customization p { padding: 0; }
            .customization pre { margin: 10px 0; }
        }
    </style>

    <script>
        // canvas-confetti - Copyright (c) 2020, Kiril Vatev - ISC License
        // source code and full license text: https://github.com/catdad/canvas-confetti
        !function(t,e){!function t(e,n,a,i){var o=!!(e.Worker&&e.Blob&&e.Promise&&e.OffscreenCanvas&&e.OffscreenCanvasRenderingContext2D&&e.HTMLCanvasElement&&e.HTMLCanvasElement.prototype.transferControlToOffscreen&&e.URL&&e.URL.createObjectURL);function r(){}function l(t){var a=n.exports.Promise,i=void 0!==a?a:e.Promise;return\"function\"==typeof i?new i(t):(t(r,r),null)}var c,s,u,d,f,h,g,m,b=(u=Math.floor(1e3/60),d={},f=0,\"function\"==typeof requestAnimationFrame&&\"function\"==typeof cancelAnimationFrame?(c=function(t){var e=Math.random();return d[e]=requestAnimationFrame((function n(a){f===a||f+u-1<a?(f=a,delete d[e],t()):d[e]=requestAnimationFrame(n)})),e},s=function(t){d[t]&&cancelAnimationFrame(d[t])}):(c=function(t){return setTimeout(t,u)},s=function(t){return clearTimeout(t)}),{frame:c,cancel:s}),v=(m={},function(){if(h)return h;if(!a&&o){var e=[\"var CONFETTI, SIZE = {}, module = {};\",\"(\"+t.toString()+\")(this, module, true, SIZE);\",\"onmessage = function(msg) {\",\"  if (msg.data.options) {\",\"    CONFETTI(msg.data.options).then(function () {\",\"      if (msg.data.callback) {\",\"        postMessage({ callback: msg.data.callback });\",\"      }\",\"    });\",\"  } else if (msg.data.reset) {\",\"    CONFETTI.reset();\",\"  } else if (msg.data.resize) {\",\"    SIZE.width = msg.data.resize.width;\",\"    SIZE.height = msg.data.resize.height;\",\"  } else if (msg.data.canvas) {\",\"    SIZE.width = msg.data.canvas.width;\",\"    SIZE.height = msg.data.canvas.height;\",\"    CONFETTI = module.exports.create(msg.data.canvas);\",\"  }\",\"}\"].join(\"\\n\");try{h=new Worker(URL.createObjectURL(new Blob([e])))}catch(t){return void 0!==typeof console&&\"function\"==typeof console.warn&&console.warn(\"🎊 Could not load worker\",t),null}!function(t){function e(e,n){t.postMessage({options:e||{},callback:n})}t.init=function(e){var n=e.transferControlToOffscreen();t.postMessage({canvas:n},[n])},t.fire=function(n,a,i){if(g)return e(n,null),g;var o=Math.random().toString(36).slice(2);return g=l((function(a){function r(e){e.data.callback===o&&(delete m[o],t.removeEventListener(\"message\",r),g=null,i(),a())}t.addEventListener(\"message\",r),e(n,o),m[o]=r.bind(null,{data:{callback:o}})}))},t.reset=function(){for(var e in t.postMessage({reset:!0}),m)m[e](),delete m[e]}}(h)}return h}),y={particleCount:50,angle:90,spread:45,startVelocity:45,decay:.9,gravity:1,drift:0,ticks:200,x:.5,y:.5,shapes:[\"square\",\"circle\"],zIndex:100,colors:[\"#26ccff\",\"#a25afd\",\"#ff5e7e\",\"#88ff5a\",\"#fcff42\",\"#ffa62d\",\"#ff36ff\"],disableForReducedMotion:!1,scalar:1};function p(t,e,n){return function(t,e){return e?e(t):t}(t&&null!=t[e]?t[e]:y[e],n)}function M(t){return t<0?0:Math.floor(t)}function w(t){return parseInt(t,16)}function x(t){return t.map(C)}function C(t){var e=String(t).replace(/[^0-9a-f]/gi,\"\");return e.length<6&&(e=e[0]+e[0]+e[1]+e[1]+e[2]+e[2]),{r:w(e.substring(0,2)),g:w(e.substring(2,4)),b:w(e.substring(4,6))}}function k(t){t.width=document.documentElement.clientWidth,t.height=document.documentElement.clientHeight}function I(t){var e=t.getBoundingClientRect();t.width=e.width,t.height=e.height}function T(t,e,n,o,r){var c,s,u=e.slice(),d=t.getContext(\"2d\"),f=l((function(e){function l(){c=s=null,d.clearRect(0,0,o.width,o.height),r(),e()}c=b.frame((function e(){!a||o.width===i.width&&o.height===i.height||(o.width=t.width=i.width,o.height=t.height=i.height),o.width||o.height||(n(t),o.width=t.width,o.height=t.height),d.clearRect(0,0,o.width,o.height),(u=u.filter((function(t){return function(t,e){e.x+=Math.cos(e.angle2D)*e.velocity+e.drift,e.y+=Math.sin(e.angle2D)*e.velocity+e.gravity,e.wobble+=.1,e.velocity*=e.decay,e.tiltAngle+=.1,e.tiltSin=Math.sin(e.tiltAngle),e.tiltCos=Math.cos(e.tiltAngle),e.random=Math.random()+5,e.wobbleX=e.x+10*e.scalar*Math.cos(e.wobble),e.wobbleY=e.y+10*e.scalar*Math.sin(e.wobble);var n=e.tick++/e.totalTicks,a=e.x+e.random*e.tiltCos,i=e.y+e.random*e.tiltSin,o=e.wobbleX+e.random*e.tiltCos,r=e.wobbleY+e.random*e.tiltSin;return t.fillStyle=\"rgba(\"+e.color.r+\", \"+e.color.g+\", \"+e.color.b+\", \"+(1-n)+\")\",t.beginPath(),\"circle\"===e.shape?t.ellipse?t.ellipse(e.x,e.y,Math.abs(o-a)*e.ovalScalar,Math.abs(r-i)*e.ovalScalar,Math.PI/10*e.wobble,0,2*Math.PI):function(t,e,n,a,i,o,r,l,c){t.save(),t.translate(e,n),t.rotate(o),t.scale(a,i),t.arc(0,0,1,r,l,c),t.restore()}(t,e.x,e.y,Math.abs(o-a)*e.ovalScalar,Math.abs(r-i)*e.ovalScalar,Math.PI/10*e.wobble,0,2*Math.PI):(t.moveTo(Math.floor(e.x),Math.floor(e.y)),t.lineTo(Math.floor(e.wobbleX),Math.floor(i)),t.lineTo(Math.floor(o),Math.floor(r)),t.lineTo(Math.floor(a),Math.floor(e.wobbleY))),t.closePath(),t.fill(),e.tick<e.totalTicks}(d,t)}))).length?c=b.frame(e):l()})),s=l}));return{addFettis:function(t){return u=u.concat(t),f},canvas:t,promise:f,reset:function(){c&&b.cancel(c),s&&s()}}}function E(t,n){var a,i=!t,r=!!p(n||{},\"resize\"),c=p(n,\"disableForReducedMotion\",Boolean),s=o&&!!p(n||{},\"useWorker\")?v():null,u=i?k:I,d=!(!t||!s)&&!!t.__confetti_initialized,f=\"function\"==typeof matchMedia&&matchMedia(\"(prefers-reduced-motion)\").matches;function h(e,n,i){for(var o,r,l,c,s,d=p(e,\"particleCount\",M),f=p(e,\"angle\",Number),h=p(e,\"spread\",Number),g=p(e,\"startVelocity\",Number),m=p(e,\"decay\",Number),b=p(e,\"gravity\",Number),v=p(e,\"drift\",Number),y=p(e,\"colors\",x),w=p(e,\"ticks\",Number),C=p(e,\"shapes\"),k=p(e,\"scalar\"),I=function(t){var e=p(t,\"origin\",Object);return e.x=p(e,\"x\",Number),e.y=p(e,\"y\",Number),e}(e),E=d,S=[],F=t.width*I.x,N=t.height*I.y;E--;)S.push((o={x:F,y:N,angle:f,spread:h,startVelocity:g,color:y[E%y.length],shape:C[(c=0,s=C.length,Math.floor(Math.random()*(s-c))+c)],ticks:w,decay:m,gravity:b,drift:v,scalar:k},r=void 0,l=void 0,r=o.angle*(Math.PI/180),l=o.spread*(Math.PI/180),{x:o.x,y:o.y,wobble:10*Math.random(),velocity:.5*o.startVelocity+Math.random()*o.startVelocity,angle2D:-r+(.5*l-Math.random()*l),tiltAngle:Math.random()*Math.PI,color:o.color,shape:o.shape,tick:0,totalTicks:o.ticks,decay:o.decay,drift:o.drift,random:Math.random()+5,tiltSin:0,tiltCos:0,wobbleX:0,wobbleY:0,gravity:3*o.gravity,ovalScalar:.6,scalar:o.scalar}));return a?a.addFettis(S):(a=T(t,S,u,n,i)).promise}function g(n){var o=c||p(n,\"disableForReducedMotion\",Boolean),g=p(n,\"zIndex\",Number);if(o&&f)return l((function(t){t()}));i&&a?t=a.canvas:i&&!t&&(t=function(t){var e=document.createElement(\"canvas\");return e.style.position=\"fixed\",e.style.top=\"0px\",e.style.left=\"0px\",e.style.pointerEvents=\"none\",e.style.zIndex=t,e}(g),document.body.appendChild(t)),r&&!d&&u(t);var m={width:t.width,height:t.height};function b(){if(s){var e={getBoundingClientRect:function(){if(!i)return t.getBoundingClientRect()}};return u(e),void s.postMessage({resize:{width:e.width,height:e.height}})}m.width=m.height=null}function v(){a=null,r&&e.removeEventListener(\"resize\",b),i&&t&&(document.body.removeChild(t),t=null,d=!1)}return s&&!d&&s.init(t),d=!0,s&&(t.__confetti_initialized=!0),r&&e.addEventListener(\"resize\",b,!1),s?s.fire(n,m,v):h(n,m,v)}return g.reset=function(){s&&s.reset(),a&&a.reset()},g}n.exports=E(null,{useWorker:!0,resize:!0}),n.exports.create=E}(function(){return void 0!==t?t:\"undefined\"!=typeof self?self:this||{}}(),e,!1),t.confetti=e.exports}(window,{});

        window.addEventListener('DOMContentLoaded', () => {
            if (window.innerWidth < 768) {
                return;
            }

            confetti({
                disableForReducedMotion: true,
                angle: 60,
                particleCount: 50,
                spread: 55,
                origin: { x: 0.05, y: 550 / window.innerHeight }
            });
            confetti({
                disableForReducedMotion: true,
                angle: 120,
                particleCount: 50,
                spread: 55,
                origin: { x: 0.95, y: 550 / window.innerHeight }
            });
        });
    </script>
</head>

<body>
<article>
    <h1>Welcome to EasyAdmin 4</h1>

    <p class=\"success\">
        You have <strong>successfully installed EasyAdmin 4</strong> in your application.
    </p>

    <div class=\"links\">
        <div class=\"link link-blue\">
            <div class=\"link-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\" />
                </svg>
            </div>
            <div class=\"link-text\">
                <a href=\"https://symfony.com/bundles/EasyAdminBundle/current/index.html\" target=\"_blank\">Read EasyAdmin Docs</a>
                <p class=\"description\">Learn how to customize EasyAdmin to fit your needs</p>
            </div>
        </div>

        <div class=\"link link-green\">
            <div class=\"link-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z\" />
                </svg>
            </div>
            <div class=\"link-text\">
                <a href=\"https://symfonycasts.com/screencast/easyadminbundle\" target=\"_blank\">Watch EasyAdmin Course on SymfonyCasts</a>
                <p class=\"description\">More than 30 videos <span class=\"d-none d-md-inline-block\">to learn how to build a powerful admin area</span></p>
            </div>
        </div>

        <div class=\"link link-red\">
            <div class=\"link-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\" />
                </svg>
            </div>
            <div class=\"link-text\">
                <a href=\"https://github.com/sponsors/javiereguiluz\" target=\"_blank\">Sponsor EasyAdmin</a>
                <p class=\"description\">Fund the development of new features. <span class=\"d-none d-md-inline-block\">One-time or regular donations</span></p>
            </div>
        </div>

        <div class=\"link link-yellow\">
            <div class=\"link-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                </svg>
            </div>
            <div class=\"link-text\">
                <a href=\"https://github.com/EasyCorp/EasyAdminBundle/stargazers\" target=\"_blank\">Star EasyAdmin on GitHub</a>
                <p class=\"description\">Help us promote EasyAdmin to reach new developers</p>
            </div>
        </div>
    </div>

    <section class=\"customization\">
        <h2>Why am I seeing this page? Where's my backend menu?</h2>
        <p>
            This page is the default EasyAdmin dashboard page. You are seeing this page
            because you never customized the dashboard of your backend.
        </p>
        <p>
            Edit the following file and use any of the ways to
            <a href=\"https://symfony.com/bundles/EasyAdminBundle/current/dashboards.html#customizing-the-dashboard-contents\">customize your dashboard contents</a>:
        </p>

        <pre translate=\"no\" class=\"notranslate\">{{ dashboard_controller_filepath }}</pre>
    </section>
</article>
</body>
</html>
", "@EasyAdmin/welcome.html.twig", "/Users/youssefgr/Desktop/karabs_05/fadel/krabs-backend-v2/vendor/easycorp/easyadmin-bundle/templates/welcome.html.twig");
    }
}

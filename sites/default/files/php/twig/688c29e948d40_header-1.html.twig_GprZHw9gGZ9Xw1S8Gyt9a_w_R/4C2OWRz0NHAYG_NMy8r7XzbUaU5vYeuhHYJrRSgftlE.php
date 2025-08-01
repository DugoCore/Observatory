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

/* @corporate_plus/header/header-1.html.twig */
class __TwigTemplate_77bc9f72236d69f0f6575ace426fd08d extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($context["sticky"] ?? null) == 1)) {
            // line 2
            yield "<header id=\"header-1\" class=\"header fixed-top header_type ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["active_1"] ?? null), "html", null, true);
            yield "\">
";
        } else {
            // line 4
            yield "<header id=\"header-1\" class=\"header fixed-top header_type navSticky ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["active_1"] ?? null), "html", null, true);
            yield "\">
";
        }
        // line 6
        yield "\t<div class=\"menubar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"res-header d-lg-none\">
\t\t\t\t";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 9), "html", null, true);
        yield "
\t\t\t\t<div class=\"others-in-header\">
\t\t\t\t\t";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "language_block", [], "any", false, false, true, 11), "html", null, true);
        yield "
\t\t\t\t\t<ul class=\"search-btn\">
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a class=\"search-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"43.191\" height=\"43.192\" viewBox=\"0 0 43.191 43.192\">
\t\t\t\t\t\t\t\t<path  data-name=\"Icon ionic-ios-search\" d=\"M47.185,44.559,35.173,32.437a17.12,17.12,0,1,0-2.6,2.631L44.508,47.111a1.849,1.849,0,0,0,2.609.067A1.86,1.86,0,0,0,47.185,44.559ZM21.72,35.214a13.516,13.516,0,1,1,9.561-3.958A13.436,13.436,0,0,1,21.72,35.214Z\" transform=\"translate(-4.5 -4.493)\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<button class=\"open navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent_1\" aria-controls=\"navbarSupportedContent_1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"240\" height=\"150\" viewBox=\"0 0 240 150\">
\t\t\t\t\t\t\t<path  data-name=\"Union 79\" d=\"M19161.313,8514v-21.469H19314V8514Zm-43.656-64.293v-21.422H19314v21.422ZM19074,8385.418V8364h240v21.414Z\" transform=\"translate(-19074 -8364.004)\" fill=\"#181c31\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"close navbar-toggler d-none d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent_1\" aria-controls=\"navbarSupportedContent_1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"150\" height=\"150\" viewBox=\"0 0 150 150\">
\t\t\t\t\t\t\t<path  data-name=\"Union 80\" d=\"M21.967,128.033A75,75,0,1,1,75,150,75,75,0,0,1,21.967,128.033ZM31.61,31.612A61.363,61.363,0,0,0,75,136.365l0,0A61.364,61.364,0,1,0,31.61,31.612ZM75,84.641,55.718,103.923l-9.641-9.64L65.36,75,46.078,55.718l9.641-9.641L75,65.36,94.283,46.078l9.64,9.641L84.641,75l19.282,19.282-9.64,9.64Z\" fill=\"#181c31\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav class=\"navbar navbar-expand-lg\">
\t\t\t\t<div class=\"d-none d-lg-block\">
\t\t\t\t\t";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 35), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent_1\">
\t\t\t\t\t";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 38), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"d-none d-lg-block\">
\t\t\t\t\t";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "language_block", [], "any", false, false, true, 41), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<ul class=\"search-btn d-none d-lg-block\">
\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a class=\"search-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"43.191\" height=\"43.192\" viewBox=\"0 0 43.191 43.192\">
\t\t\t\t\t\t\t<path  data-name=\"Icon ionic-ios-search\" d=\"M47.185,44.559,35.173,32.437a17.12,17.12,0,1,0-2.6,2.631L44.508,47.111a1.849,1.849,0,0,0,2.609.067A1.86,1.86,0,0,0,47.185,44.559ZM21.72,35.214a13.516,13.516,0,1,1,9.561-3.958A13.436,13.436,0,0,1,21.72,35.214Z\" transform=\"translate(-4.5 -4.493)\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"hamburger-menu d-none d-lg-block\">
\t\t\t\t\t<button class=\"hamburger-menu-btn\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"240\" height=\"150\" viewBox=\"0 0 240 150\">
\t\t\t\t\t\t\t<path  data-name=\"Union 79\" d=\"M19161.313,8514v-21.469H19314V8514Zm-43.656-64.293v-21.422H19314v21.422ZM19074,8385.418V8364h240v21.414Z\" transform=\"translate(-19074 -8364.004)\" fill=\"#181c31\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>
</header>

<div class=\"search-overlay modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"content modal-content\">
\t\t\t";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 67), "html", null, true);
        yield "
\t\t</div>
\t</div>
</div>

<div class=\"hamburger-content\">
\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasRight\">
\t\t<div class=\"content\">
\t\t\t<div class=\"overlay-btn\">
\t\t\t\t<button type=\"button\" class=\"text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"150\" height=\"150\" viewBox=\"0 0 150 150\">
\t\t\t\t\t\t<path  data-name=\"Union 80\" d=\"M21.967,128.033A75,75,0,1,1,75,150,75,75,0,0,1,21.967,128.033ZM31.61,31.612A61.363,61.363,0,0,0,75,136.365l0,0A61.364,61.364,0,1,0,31.61,31.612ZM75,84.641,55.718,103.923l-9.641-9.64L65.36,75,46.078,55.718l9.641-9.641L75,65.36,94.283,46.078l9.64,9.641L84.641,75l19.282,19.282-9.64,9.64Z\" fill=\"#181c31\"/>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"content-items\">
\t\t\t\t";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hamburger_menu", [], "any", false, false, true, 83), "html", null, true);
        yield "
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sticky", "active_1", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@corporate_plus/header/header-1.html.twig";
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
        return array (  155 => 83,  136 => 67,  107 => 41,  101 => 38,  95 => 35,  68 => 11,  63 => 9,  58 => 6,  52 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@corporate_plus/header/header-1.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\header\\header-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 2];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

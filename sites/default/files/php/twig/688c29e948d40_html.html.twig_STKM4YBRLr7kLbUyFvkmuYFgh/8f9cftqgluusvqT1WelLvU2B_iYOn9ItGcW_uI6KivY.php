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

/* themes/custom/corporate_plus/templates/layout/html.html.twig */
class __TwigTemplate_b712572256005219255886d07205908a extends Template
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
        // line 27
        $context["body_classes"] = [((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), ((        // line 29
($context["root_path"] ?? null)) ? ("not-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), (( !        // line 30
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((        // line 31
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((        // line 32
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 35
        yield "<!DOCTYPE html>
";
        // line 36
        if ((($context["default_color"] ?? null) == 1)) {
            // line 37
            yield " <html";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
            yield ">
";
        } else {
            // line 39
            yield " <html";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
            yield " style=\" --bs-primary: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["primary_color"] ?? null), "html", null, true);
            yield "; --bs-secondary: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["secondary_color"] ?? null), "html", null, true);
            yield ";\" >
";
        }
        // line 41
        yield "  <head>
    <head-placeholder token=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <title>";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <style type=\"text/css\">
      ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["styles"] ?? null), "html", null, true);
        yield "
    </style>
  </head>

  <body";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 51), "html", null, true);
        yield ">
    <!-- page preloader -->
    ";
        // line 53
        if ((($context["loader"] ?? null) == 1)) {
            // line 54
            yield "    <div class=\"loader-bg\">
      <h3>Loading...</h3>
      <div class=\"loader\">
          <span></span>
      </div>
    </div>
    ";
        }
        // line 61
        yield "     <!-- end of page preloader -->
    ";
        // line 66
        yield "    ";
        // line 67
        yield "    ";
        if (CoreExtension::inFilter("1", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
            // line 68
            yield "       <div id=\"page_content\" class=\"header-1\">
   ";
        }
        // line 70
        yield "   ";
        if (CoreExtension::inFilter("2", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
            // line 71
            yield "     <div id=\"page_content\" class=\"header-2\">
   ";
        }
        // line 73
        yield "   ";
        if (CoreExtension::inFilter("3", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
            // line 74
            yield "     <div id=\"page_content\" class=\"header-3\">
   ";
        }
        // line 76
        yield "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    </div> 
    <!-- Header change loader -->
    <div id=\"loader\">
      <div class=\"loading\"></div>
    </div>
    <!-- End of header change loader -->
    <!-- Scroll top -->
    <a href=\"#\" class=\"back-to-top\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"45\" height=\"45\" viewBox=\"0 0 45 45\">
            <g transform=\"translate(45) rotate(90)\">
                <g transform=\"translate(35.438 45) rotate(180)\">
                    <path d=\"M25.792,21.463,4.779.451a1.418,1.418,0,0,0-2.074,0L.451,2.706a1.418,1.418,0,0,0,0,2.074L18.171,22.5.451,40.221a1.418,1.418,0,0,0,0,2.074l2.254,2.254a1.419,1.419,0,0,0,2.074,0L25.791,23.538a1.42,1.42,0,0,0,0-2.075Z\"></path>
                </g>
            </g>
        </svg>
    </a>
    <!-- End of scroll top -->
    ";
        // line 100
        yield "    <js-bottom-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "default_color", "html_attributes", "primary_color", "secondary_color", "placeholder_token", "head_title", "styles", "attributes", "loader", "header_variation", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/layout/html.html.twig";
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
        return array (  178 => 100,  157 => 81,  153 => 80,  149 => 79,  144 => 77,  141 => 76,  137 => 74,  134 => 73,  130 => 71,  127 => 70,  123 => 68,  120 => 67,  118 => 66,  115 => 61,  106 => 54,  104 => 53,  99 => 51,  92 => 47,  87 => 45,  83 => 44,  79 => 43,  75 => 42,  72 => 41,  62 => 39,  56 => 37,  54 => 36,  51 => 35,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  45 => 28,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/layout/html.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 27, "if" => 36];
        static $filters = ["clean_class" => 29, "escape" => 37, "safe_join" => 43, "render" => 67, "t" => 77];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'safe_join', 'render', 't'],
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

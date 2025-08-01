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

/* themes/custom/corporate_plus/templates/views/page banner/views-view-fields--page_banner.html.twig */
class __TwigTemplate_f1461be760fc034fb81a1d6c5872cfdc extends Template
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
        yield "<section class=\"page-banner bg-image dt-section\" style=\"background-image: linear-gradient(rgba(27, 31, 41, 0.72), rgba(27, 31, 41, 0.72)) , url('";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_banner_image", [], "any", false, false, true, 1), "content", [], "any", false, false, true, 1), "html", null, true);
        yield "');\">
    <div class=\"container\">
        <div class=\"heading\">
            <h1>";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 4), "content", [], "any", false, false, true, 4), "html", null, true);
        yield "</h1>
        </div>
    </div>
    <div class=\"banner-breadcrumb\">
        ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("system_breadcrumb_block"), "html", null, true);
        yield "
    </div>
</section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/views/page banner/views-view-fields--page_banner.html.twig";
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
        return array (  58 => 8,  51 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/views/page banner/views-view-fields--page_banner.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\views\\page banner\\views-view-fields--page_banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 1];
        static $functions = ["drupal_block" => 8];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_block'],
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

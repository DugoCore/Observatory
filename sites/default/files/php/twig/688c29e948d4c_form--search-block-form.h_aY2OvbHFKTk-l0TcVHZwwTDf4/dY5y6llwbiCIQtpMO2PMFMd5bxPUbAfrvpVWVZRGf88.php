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

/* themes/custom/corporate_plus/templates/search/form--search-block-form.html.twig */
class __TwigTemplate_8d13294ee9e091d0e72368a48e3763a8 extends Template
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
        $context["base_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 2
        yield "<form action=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_url"] ?? null), "html", null, true);
        yield "search/node\" method=\"get\">
    <input type=\"text\" placeholder=\"Search Here...\" name=\"keys\">
    <button type=\"submit\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"43.191\" height=\"43.192\" viewBox=\"0 0 43.191 43.192\">
            <path  data-name=\"Icon ionic-ios-search\" d=\"M47.185,44.559,35.173,32.437a17.12,17.12,0,1,0-2.6,2.631L44.508,47.111a1.849,1.849,0,0,0,2.609.067A1.86,1.86,0,0,0,47.185,44.559ZM21.72,35.214a13.516,13.516,0,1,1,9.561-3.958A13.436,13.436,0,0,1,21.72,35.214Z\" transform=\"translate(-4.5 -4.493)\"></path>
        </svg>
    </button>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/search/form--search-block-form.html.twig";
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
        return array (  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/search/form--search-block-form.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\search\\form--search-block-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1];
        static $filters = ["escape" => 2];
        static $functions = ["url" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['url'],
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

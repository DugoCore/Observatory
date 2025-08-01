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

/* themes/custom/corporate_plus/templates/webform/webform--news_letter.html.twig */
class __TwigTemplate_02c9fe9f6e87d9cb1d0969dc7fb7691b extends Template
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
        yield "<form ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
    <div class=\"input-group\">
        <div class=\"newsletter-mail\">  
            ";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 4), "email", [], "any", false, false, true, 4), "html", null, true);
        yield "
        </div>
        <div class=\"newsletter-submit\">
            <button type=\"submit\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"94\" height=\"150\" viewBox=\"0 0 94 150\">
                    <path  data-name=\"Path 40647\" d=\"M0,13.409,14.338,0,94,75,14.257,150,0,136.591,65.486,75Z\" fill=\"#181c31\"/>
                </svg>
            </button>
        </div>
    </div>
    ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "form_build_id", [], "any", false, false, true, 14), "html", null, true);
        yield "
\t";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "form_token", [], "any", false, false, true, 15), "html", null, true);
        yield "
\t";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "form_id", [], "any", false, false, true, 16), "html", null, true);
        yield "
</form>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "element"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/webform/webform--news_letter.html.twig";
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
        return array (  72 => 16,  68 => 15,  64 => 14,  51 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/webform/webform--news_letter.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\webform\\webform--news_letter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 1];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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

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

/* themes/custom/corporate_plus/templates/webform/webform--contact.html.twig */
class __TwigTemplate_fa6bfea65d1dd312daf3bffc875eaceb extends Template
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
        yield "<form";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
\t<div class=\"row s-20\">  
\t\t<div class=\"form-group col-md-6\">
\t\t\t";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 4), "name", [], "any", false, false, true, 4), "html", null, true);
        yield "
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 7), "email", [], "any", false, false, true, 7), "html", null, true);
        yield "
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 10), "phone_number", [], "any", false, false, true, 10), "html", null, true);
        yield "
\t\t</div>\t\t
\t\t<div class=\"form-group col-md-6\">
\t\t\t";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 13), "subject", [], "any", false, false, true, 13), "html", null, true);
        yield "
\t\t</div>
\t\t<div class=\"form-group col-md-12\">
\t\t\t";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 16), "message", [], "any", false, false, true, 16), "html", null, true);
        yield "
\t\t</div>
\t</div>
\t";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 19), "actions", [], "any", false, false, true, 19), "html", null, true);
        yield "
\t";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "form_build_id", [], "any", false, false, true, 20), "html", null, true);
        yield "
\t";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "form_token", [], "any", false, false, true, 21), "html", null, true);
        yield "
\t";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "form_id", [], "any", false, false, true, 22), "html", null, true);
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
        return "themes/custom/corporate_plus/templates/webform/webform--contact.html.twig";
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
        return array (  93 => 22,  89 => 21,  85 => 20,  81 => 19,  75 => 16,  69 => 13,  63 => 10,  57 => 7,  51 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/webform/webform--contact.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\webform\\webform--contact.html.twig");
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

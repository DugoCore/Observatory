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

/* themes/custom/corporate_plus/templates/block/block--bundle--contact-hamburger.html.twig */
class __TwigTemplate_54990552def24d0708c95bd04750029a extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        $context["heading_id"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 36) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        yield "<nav role=\"navigation\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
        yield "\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["attributes"] ?? null), "role", "aria-labelledby"), "html", null, true);
        yield ">
  ";
        // line 39
        yield "  ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 39)) {
            // line 40
            yield "    ";
            $context["title_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["visually-hidden"], "method", false, false, true, 40);
            // line 41
            yield "  ";
        }
        // line 42
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  <h3 ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", ["id", ($context["heading_id"] ?? null)], "method", false, false, true, 43), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 43), "html", null, true);
        yield "</h3>
  ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 46
        yield "  <div class=\"contact-hamburger\">
<h3>";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 47), 0, [], "any", false, false, true, 47), "html", null, true);
        yield "</h3>
    ";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 48), 0, [], "any", false, false, true, 48), "html", null, true);
        yield "
  <p><a href=\"tel:";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_number", [], "any", false, false, true, 49), 0, [], "any", false, false, true, 49), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_number", [], "any", false, false, true, 49), 0, [], "any", false, false, true, 49), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_number", [], "any", false, false, true, 49), 0, [], "any", false, false, true, 49), "html", null, true);
        yield "</a></p>
  <p><a href=\"mailto:";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_mail", [], "any", false, false, true, 50), 0, [], "any", false, false, true, 50), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_mail", [], "any", false, false, true, 50), 0, [], "any", false, false, true, 50), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_mail", [], "any", false, false, true, 50), 0, [], "any", false, false, true, 50), "html", null, true);
        yield "</a></p>
  </div>
  ";
        // line 52
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 54
        yield "</nav>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "configuration", "title_prefix", "title_suffix", "content"]);        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/block/block--bundle--contact-hamburger.html.twig";
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
        return array (  121 => 53,  114 => 52,  108 => 54,  106 => 52,  97 => 50,  89 => 49,  85 => 48,  81 => 47,  78 => 46,  74 => 44,  68 => 43,  63 => 42,  60 => 41,  57 => 40,  54 => 39,  47 => 37,  45 => 36,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/block/block--bundle--contact-hamburger.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\block\\block--bundle--contact-hamburger.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 36, "if" => 39, "block" => 52];
        static $filters = ["clean_id" => 36, "escape" => 37, "without" => 37];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'without'],
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

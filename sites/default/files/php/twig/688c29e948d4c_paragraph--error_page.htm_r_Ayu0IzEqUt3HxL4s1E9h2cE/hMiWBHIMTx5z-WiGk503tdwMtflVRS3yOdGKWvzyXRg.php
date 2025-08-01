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

/* themes/custom/corporate_plus/templates/paragraph/paragraph--error_page.html.twig */
class __TwigTemplate_1add618ea090726624534e8b4232819a extends Template
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
        // line 8
        yield "<section class=\"error-page dt-section\">
    <div class=\"container\">
        <div class=\"content\">
            <div class=\"title\">";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11), "html", null, true);
        yield "</div>
            <h2>";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tagline", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), "html", null, true);
        yield "</h2>
            <p>";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "html", null, true);
        yield "</p>
            <a class=\"btn btn-outline-secondary btn-style-3\" href=\"";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14), "#url", [], "array", false, false, true, 14)), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14), "#title", [], "array", false, false, true, 14)), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14), "#title", [], "array", false, false, true, 14)), "html", null, true);
        yield "</a>
            <div class=\"overlay\">
                <img src=\"";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 16)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 16), "#items", [], "array", false, false, true, 16)), "entity", [], "any", false, false, true, 16), "uri", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16)), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 16)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 16), "#items", [], "array", false, false, true, 16)), "alt", [], "any", false, false, true, 16), "html", null, true);
        yield "\">
            </div>
        </div>
    </div>
</section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/paragraph/paragraph--error_page.html.twig";
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
        return array (  70 => 16,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/paragraph/paragraph--error_page.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\paragraph\\paragraph--error_page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 11];
        static $functions = ["file_url" => 16];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url'],
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

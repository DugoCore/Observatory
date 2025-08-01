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

/* themes/custom/corporate_plus/templates/paragraph/social media/paragraph--icon_profile_link.html.twig */
class __TwigTemplate_c1924f6d707184120e1439f5948a6d19 extends Template
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
        yield "<li><a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), "#url", [], "array", false, false, true, 1)), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), "#title", [], "array", false, false, true, 1)), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), "html", null, true);
        yield "</a></li>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/paragraph/social media/paragraph--icon_profile_link.html.twig";
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
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/paragraph/social media/paragraph--icon_profile_link.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\paragraph\\social media\\paragraph--icon_profile_link.html.twig");
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

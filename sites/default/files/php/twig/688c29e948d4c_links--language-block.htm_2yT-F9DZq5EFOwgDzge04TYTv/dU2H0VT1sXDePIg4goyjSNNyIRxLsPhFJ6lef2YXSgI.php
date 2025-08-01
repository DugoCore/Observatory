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

/* themes/custom/corporate_plus/templates/languages/links--language-block.html.twig */
class __TwigTemplate_18ab8492c77c3575da9455eaaaebb123 extends Template
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
        // line 2
        if (($context["links"] ?? null)) {
            // line 3
            yield "<ul class=\"lang-dropdown-menu\">
  <li class=\"lang-dropdown-item\">
    <a href=\"#\" title=\"";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["links"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["activeLink"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "activeLink", [], "array", false, false, true, 5)), "text", [], "any", false, false, true, 5)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["links"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["activeLink"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "activeLink", [], "array", false, false, true, 5)), "text", [], "any", false, false, true, 5), "#title", [], "array", false, false, true, 5)), "html", null, true);
            yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["links"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["activeLink"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "activeLink", [], "array", false, false, true, 5)), "text", [], "any", false, false, true, 5), "html", null, true);
            yield "
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"12.5\" viewBox=\"0 0 25 12.5\">
        <path  data-name=\"Icon ionic-md-arrow-dropdown\" d=\"M9,13.5,21.5,26,34,13.5Z\" transform=\"translate(-9 -13.5)\" fill=\"var(--bs-secondary)\"></path>
      </svg>
    </a>
    <ul class=\"dropdown-menu\">";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 12
                if ( !($context["key"] === "activeLink")) {
                    // line 13
                    yield "        <li>
          ";
                    // line 14
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 14), "html", null, true);
                    yield "
        </li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "</ul>
  </li>
</ul>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/languages/links--language-block.html.twig";
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
        return array (  78 => 18,  69 => 14,  66 => 13,  64 => 12,  60 => 11,  50 => 5,  46 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/languages/links--language-block.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\languages\\links--language-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "for" => 11];
        static $filters = ["escape" => 5];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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

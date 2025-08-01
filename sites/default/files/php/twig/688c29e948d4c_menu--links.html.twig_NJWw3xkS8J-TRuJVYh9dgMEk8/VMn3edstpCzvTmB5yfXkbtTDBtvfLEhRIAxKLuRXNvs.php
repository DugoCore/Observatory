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

/* themes/custom/corporate_plus/templates/menu/menu--links.html.twig */
class __TwigTemplate_7af797e889b4eb8068c94f6eb1c9e67d extends Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 29, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 30
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "  ";
            $macros["menus"] = $this;
            // line 32
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 33
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 34
                    yield "      <ul>
        ";
                    // line 35
                    if (($context["items"] ?? null)) {
                        // line 36
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 37
                            yield "              <li>
                <a href=\"";
                            // line 38
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 38), "html", null, true);
                            yield "\" title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 38), "html", null, true);
                            yield "\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 38), "html", null, true);
                            yield "</a>
              </li>
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        yield "        ";
                    }
                    // line 42
                    yield "      </ul>
    ";
                }
                // line 44
                yield "  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/menu/menu--links.html.twig";
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
        return array (  113 => 44,  109 => 42,  106 => 41,  93 => 38,  90 => 37,  85 => 36,  83 => 35,  80 => 34,  77 => 33,  74 => 32,  71 => 31,  57 => 30,  49 => 29,  46 => 24,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/menu/menu--links.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\menu\\menu--links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 23, "macro" => 30, "if" => 32, "for" => 36];
        static $filters = ["escape" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
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

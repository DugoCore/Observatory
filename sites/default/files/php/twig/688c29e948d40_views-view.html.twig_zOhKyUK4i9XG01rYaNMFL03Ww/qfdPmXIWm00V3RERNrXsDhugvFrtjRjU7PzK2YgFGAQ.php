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

/* themes/custom/corporate_plus/templates/views/views-view.html.twig */
class __TwigTemplate_8fc17ce7ac145c0bc54ed416a7b6c443 extends Template
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
        // line 34
        $context["classes"] = [((        // line 35
($context["id"] ?? null) . "-") . ($context["display_id"] ?? null)), ((        // line 36
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 39
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 39), "html", null, true);
        yield ">
  ";
        // line 40
        if (($context["header"] ?? null)) {
            // line 41
            yield "    <div class=\"view-header\">
      ";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 45
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 46
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 50
        yield "
  ";
        // line 51
        if (($context["rows"] ?? null)) {
            // line 52
            yield "    <div class=\"view-content\">
      ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 55
($context["empty"] ?? null)) {
            // line 56
            yield "    <div class=\"view-empty\">
      ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 60
        yield "
  ";
        // line 61
        if (($context["pager"] ?? null)) {
            // line 62
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 64
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 65
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 69
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 70
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 72
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 73
            yield "    <div class=\"view-footer\">
      ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 77
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 78
            yield "    <div class=\"feed-icons\">
      ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 82
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "header", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/views/views-view.html.twig";
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
        return array (  156 => 82,  150 => 79,  147 => 78,  144 => 77,  138 => 74,  135 => 73,  132 => 72,  126 => 70,  123 => 69,  117 => 66,  114 => 65,  111 => 64,  105 => 62,  103 => 61,  100 => 60,  94 => 57,  91 => 56,  89 => 55,  84 => 53,  81 => 52,  79 => 51,  76 => 50,  70 => 47,  67 => 46,  64 => 45,  58 => 42,  55 => 41,  53 => 40,  48 => 39,  46 => 36,  45 => 35,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/views/views-view.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\views\\views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 34, "if" => 40];
        static $filters = ["escape" => 39];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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

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

/* themes/custom/corporate_plus/templates/page/page.html.twig */
class __TwigTemplate_dd9be2cf1d6b215e028f1bc8c631957b extends Template
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
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "

";
        // line 71
        yield "
";
        // line 72
        if ((($context["header_variation"] ?? null) == "header-1")) {
            // line 73
            yield "  ";
            $context["active_1"] = "active";
        } elseif ((        // line 74
($context["header_variation"] ?? null) == "header-2")) {
            // line 75
            yield "  ";
            $context["active_2"] = "active";
        } elseif ((        // line 76
($context["header_variation"] ?? null) == "header-3")) {
            // line 77
            yield "  ";
            $context["active_3"] = "active";
        }
        // line 79
        yield "
";
        // line 80
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 93
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 149
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 151
        yield "  ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_variation", "page", "container"]);        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "<!-- header -->
    <div class=\"pt_nav_header\">
    ";
        // line 83
        if (CoreExtension::inFilter("header-1", ($context["header_variation"] ?? null))) {
            // line 84
            yield "      ";
            yield from $this->loadTemplate("@corporate_plus/header/header-1.html.twig", "themes/custom/corporate_plus/templates/page/page.html.twig", 84)->unwrap()->yield($context);
            // line 85
            yield "    ";
        } elseif (CoreExtension::inFilter("header-2", ($context["header_variation"] ?? null))) {
            // line 86
            yield "      ";
            yield from $this->loadTemplate("@corporate_plus/header/header-2.html.twig", "themes/custom/corporate_plus/templates/page/page.html.twig", 86)->unwrap()->yield($context);
            // line 87
            yield "    ";
        } elseif (CoreExtension::inFilter("header-3", ($context["header_variation"] ?? null))) {
            // line 88
            yield "      ";
            yield from $this->loadTemplate("@corporate_plus/header/header-3.html.twig", "themes/custom/corporate_plus/templates/page/page.html.twig", 88)->unwrap()->yield($context);
            // line 89
            yield "    ";
        }
        // line 90
        yield "    </div>
<!-- End of header -->
";
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 94
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 94)) {
            // line 95
            yield "        <!-- Banner -->
        ";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 96), "html", null, true);
            yield "
        <!-- End of Banner -->
        ";
        }
        // line 99
        yield "        <div id=\"main\">
          <div class=\"clearfix\">
              <main>
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 103
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 104
        yield "                  <!-- Content with Sidebar -->
                  ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 105) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 105))) {
            // line 106
            yield "                      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106)) {
                // line 107
                yield "                    <!-- Sidebar - Left -->
                    <section class=\"sidebar-page dt-section\">
                      <div class=\"";
                // line 109
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
                yield "\">
                          <div class=\"row s-25\">
                            <div class=\"col-lg-4 col-12 order-2-md\">
                              ";
                // line 112
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 112), "html", null, true);
                yield "
                            </div>
                            <div class=\"col-lg-8 col-12\">
                              <div class=\"sidebar\">
                                ";
                // line 116
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 116), "html", null, true);
                yield "
                              </div> 
                            </div> 
                          </div>
                      </div>
                    </section>
                    ";
            } else {
                // line 123
                yield "                    <!-- Sidebar - Right -->
                    <section class=\"sidebar-page dt-section\">
                      <div class=\"";
                // line 125
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
                yield "\">
                          <div class=\"row s-25\">
                            <div class=\" col-lg-8 col-12\">
                                ";
                // line 128
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 128), "html", null, true);
                yield "
                            </div> 
                            <div class=\"col-lg-4 col-12\">
                              <div class=\"sidebar\">
                                ";
                // line 132
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 132), "html", null, true);
                yield "
                              </div> 
                            </div>
                          </div>
                      </div>
                    </section>
                    ";
            }
            // line 139
            yield "                  ";
        } else {
            // line 140
            yield "                  <!-- Full Width Page-->
                  ";
            // line 141
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 141), "html", null, true);
            yield "
                  ";
        }
        // line 143
        yield "                  <!-- Featured Bottom -->
                  ";
        // line 144
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 144), "html", null, true);
        yield "
              </main>
          </div>
        </div>
";
        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 150
        yield "  ";
        yield from $this->loadTemplate("@corporate_plus/footer/footer.html.twig", "themes/custom/corporate_plus/templates/page/page.html.twig", 150)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/page/page.html.twig";
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
        return array (  243 => 150,  236 => 149,  226 => 144,  223 => 143,  218 => 141,  215 => 140,  212 => 139,  202 => 132,  195 => 128,  189 => 125,  185 => 123,  175 => 116,  168 => 112,  162 => 109,  158 => 107,  155 => 106,  153 => 105,  150 => 104,  148 => 103,  142 => 99,  136 => 96,  133 => 95,  130 => 94,  123 => 93,  116 => 90,  113 => 89,  110 => 88,  107 => 87,  104 => 86,  101 => 85,  98 => 84,  96 => 83,  92 => 81,  85 => 80,  79 => 151,  77 => 149,  75 => 93,  73 => 80,  70 => 79,  66 => 77,  64 => 76,  61 => 75,  59 => 74,  56 => 73,  54 => 72,  51 => 71,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/page/page.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 72, "set" => 73, "block" => 80, "include" => 84];
        static $filters = ["escape" => 96];
        static $functions = ["url" => 103];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block', 'include'],
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

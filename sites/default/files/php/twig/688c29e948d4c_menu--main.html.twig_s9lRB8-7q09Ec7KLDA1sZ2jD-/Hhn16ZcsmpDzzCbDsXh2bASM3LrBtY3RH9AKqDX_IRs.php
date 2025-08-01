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

/* themes/custom/corporate_plus/templates/menu/menu--main.html.twig */
class __TwigTemplate_dc116991fd19cda84afccf17c5c30b16 extends Template
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
        yield "
";
        // line 124
        yield "
";
        // line 125
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 126
        yield "
";
        // line 131
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 131, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "
";
        // line 245
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 132
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
            // line 133
            yield "  ";
            $macros["menus"] = $this;
            // line 134
            yield "    ";
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 135
                yield "      <ul class=\"navbar-nav ms-auto\">
          ";
                // line 136
                if (($context["items"] ?? null)) {
                    // line 137
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 138
                        yield "              ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 138)) {
                            // line 139
                            yield "                ";
                            // line 140
                            $context["classes"] = ["nav-link", ((CoreExtension::getAttribute($this->env, $this->source,                             // line 142
$context["item"], "in_active_trail", [], "any", false, false, true, 142)) ? ("active") : (""))];
                            // line 145
                            yield "                ";
                            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 145), "getOption", ["attributes"], "method", false, false, true, 145), "link_type", [], "any", false, false, true, 145), "mega_menu_0")) {
                                // line 146
                                yield "                <li class=\"nav-item dropdown mega-menu\"> 
                  <a ";
                                // line 147
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 147), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 147), "html", null, true);
                                yield " data-bs-toggle=\"dropdown\" aria-current=\"page\" href=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 147), "html", null, true);
                                yield "\" title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 147), "html", null, true);
                                yield "\">";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 147), "html", null, true);
                                yield "
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"150\" height=\"94\" viewBox=\"0 0 150 94\">
                      <path  data-name=\"Path 40645\" d=\"M94,136.591,79.662,150,0,75,79.743,0,94,13.409,28.514,75Z\" transform=\"translate(0 94) rotate(-90)\" fill=\"#181c31\"></path>
                    </svg>
                  </a>
                  <ul class=\"dropdown-wrapper dropdown-menu rounded-0 primary-color\">
                      ";
                                // line 153
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 153, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 153), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                                yield "
                  </ul>
                </li>
                ";
                            } else {
                                // line 157
                                yield "                <li class=\"nav-item dropdown\"> 
                  <a ";
                                // line 158
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 158), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 158), "html", null, true);
                                yield " data-bs-toggle=\"dropdown\" aria-current=\"page\" href=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 158), "html", null, true);
                                yield "\" data-bs-auto-close=\"outside\" title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 158), "html", null, true);
                                yield "\">";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 158), "html", null, true);
                                yield "
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"150\" height=\"94\" viewBox=\"0 0 150 94\">
                      <path  data-name=\"Path 40645\" d=\"M94,136.591,79.662,150,0,75,79.743,0,94,13.409,28.514,75Z\" transform=\"translate(0 94) rotate(-90)\" fill=\"#181c31\"></path>
                  </svg>
                  </a>
                  <ul class=\"dropdown-wrapper dropdown-menu rounded-0 primary-color\">
                    ";
                                // line 164
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 164, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 164), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                                yield "
                  </ul>
                </li>
                ";
                            }
                            // line 168
                            yield "              ";
                        } else {
                            // line 169
                            yield "                ";
                            // line 170
                            $context["classes"] = ["nav-link", ((CoreExtension::getAttribute($this->env, $this->source,                             // line 172
$context["item"], "in_active_trail", [], "any", false, false, true, 172)) ? ("active") : (""))];
                            // line 175
                            yield "                <li class=\"nav-item\">
                  <a ";
                            // line 176
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 176), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 176), "html", null, true);
                            yield " href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 176), "html", null, true);
                            yield "\" title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 176), "html", null, true);
                            yield "\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 176), "html", null, true);
                            yield "</a>
                </li>
              ";
                        }
                        // line 179
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 180
                    yield "          ";
                }
                // line 181
                yield "      </ul>
    ";
            } elseif ((            // line 182
($context["menu_level"] ?? null) == 1)) {
                // line 183
                yield "      ";
                if (($context["items"] ?? null)) {
                    // line 184
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 185
                        yield "            ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 185)) {
                            // line 186
                            yield "              ";
                            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 186), "getOption", ["attributes"], "method", false, false, true, 186), "link_type", [], "any", false, false, true, 186), "mega_menu_1")) {
                                // line 187
                                yield "              <li>
                <ul>
                ";
                                // line 189
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 189, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 189), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                                yield "
                </ul>
              </li>  
              ";
                            } else {
                                // line 193
                                yield "              <li class=\"dropdown-item dropdown-submenu\" data-bs-popper=\"none\">
                <a href=\"";
                                // line 194
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 194), "html", null, true);
                                yield "\" class=\"drop-toggle\" data-bs-toggle=\"dropdown\" title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 194), "html", null, true);
                                yield "\">";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 194), "html", null, true);
                                yield "
                </a>
                  <ul class=\"dropdown-menu collapse\">
                    ";
                                // line 197
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 197, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 197), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                                yield "
                  </ul>
              </li>
              ";
                            }
                            // line 201
                            yield "            ";
                        } else {
                            // line 202
                            yield "            <li class=\"dropdown-item\">
                <a href=\"";
                            // line 203
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 203), "html", null, true);
                            yield "\" title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 203), "html", null, true);
                            yield "\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 203), "html", null, true);
                            yield "</a>
            </li>
            ";
                        }
                        // line 206
                        yield "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    yield "      ";
                }
                // line 208
                yield "    ";
            } elseif ((($context["menu_level"] ?? null) == 2)) {
                // line 209
                yield "        ";
                if (($context["items"] ?? null)) {
                    // line 210
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 211
                        yield "            ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 211)) {
                            // line 212
                            yield "              <li class=\"dropdown-item\">
                <a href=\"";
                            // line 213
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 213), "html", null, true);
                            yield "\" title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 213), "html", null, true);
                            yield "\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 213), "html", null, true);
                            yield "</a>
                <ul class=\"dropdown-menu dropdown-submenu\" data-bs-popper=\"none\">
                  ";
                            // line 215
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 215, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 215), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                            yield "
                </ul>
              </li>
            ";
                        } else {
                            // line 219
                            yield "              ";
                            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 219), "getOption", ["attributes"], "method", false, false, true, 219), "link_type", [], "any", false, false, true, 219), "mega_menu_2")) {
                                // line 220
                                yield "              <li class=\"dropdown-item\">
                <a href=\"";
                                // line 221
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 221), "html", null, true);
                                yield "\" title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 221), "html", null, true);
                                yield "\">";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 221), "html", null, true);
                                yield "</a>
              </li>
              ";
                            } else {
                                // line 224
                                yield "              <li class=\"dropdown-item\">
                <a href=\"";
                                // line 225
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 225), "html", null, true);
                                yield "\" title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 225), "html", null, true);
                                yield "\">";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 225), "html", null, true);
                                yield "</a>
              </li>
              ";
                            }
                            // line 228
                            yield "            ";
                        }
                        // line 229
                        yield "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    yield "        ";
                }
                // line 231
                yield "    ";
            } elseif ((($context["menu_level"] ?? null) == 3)) {
                // line 232
                yield "        ";
                if (($context["items"] ?? null)) {
                    // line 233
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 234
                        yield "            <li>
            ";
                        // line 235
                        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 235), "toString", [], "any", false, false, true, 235)) {
                            // line 236
                            yield "              <span class=\"dropdown-item\" href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 236), "html", null, true);
                            yield "\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 236), "html", null, true);
                            yield "</span>
            ";
                        } else {
                            // line 238
                            yield "              <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 238), "html", null, true);
                            yield "\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 238), "html", null, true);
                            yield "</a>
            ";
                        }
                        // line 240
                        yield "            </li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 242
                    yield "        ";
                }
                // line 243
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/menu/menu--main.html.twig";
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
        return array (  381 => 243,  378 => 242,  371 => 240,  363 => 238,  355 => 236,  353 => 235,  350 => 234,  345 => 233,  342 => 232,  339 => 231,  336 => 230,  330 => 229,  327 => 228,  317 => 225,  314 => 224,  304 => 221,  301 => 220,  298 => 219,  291 => 215,  282 => 213,  279 => 212,  276 => 211,  271 => 210,  268 => 209,  265 => 208,  262 => 207,  256 => 206,  246 => 203,  243 => 202,  240 => 201,  233 => 197,  223 => 194,  220 => 193,  213 => 189,  209 => 187,  206 => 186,  203 => 185,  198 => 184,  195 => 183,  193 => 182,  190 => 181,  187 => 180,  181 => 179,  169 => 176,  166 => 175,  164 => 172,  163 => 170,  161 => 169,  158 => 168,  151 => 164,  136 => 158,  133 => 157,  126 => 153,  111 => 147,  108 => 146,  105 => 145,  103 => 142,  102 => 140,  100 => 139,  97 => 138,  92 => 137,  90 => 136,  87 => 135,  84 => 134,  81 => 133,  67 => 132,  59 => 245,  55 => 131,  52 => 126,  50 => 125,  47 => 124,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/menu/menu--main.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\menu\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 125, "macro" => 132, "if" => 134, "for" => 137, "set" => 140];
        static $filters = ["escape" => 147];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
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

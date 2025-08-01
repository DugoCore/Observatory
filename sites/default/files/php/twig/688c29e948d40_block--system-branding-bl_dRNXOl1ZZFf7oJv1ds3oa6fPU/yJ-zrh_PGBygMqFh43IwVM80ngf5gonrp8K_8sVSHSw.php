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

/* themes/custom/corporate_plus/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_ec79835b2db3b6bf368760950cdbb9f7 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        $context["front_page"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 17
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["site-branding"], "method", false, false, true, 17);
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/corporate_plus/templates/block/block--system-branding-block.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_name", "site_slogan", "site_logo"]);    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 20
            yield "    <div class=\"site-branding__text navbar-brand\">
      ";
            // line 21
            if (($context["site_name"] ?? null)) {
                // line 22
                yield "        <h2>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield "</h2>
      ";
            } else {
                // line 24
                yield "      ";
                if (($context["site_logo"] ?? null)) {
                    // line 25
                    yield "        <a class=\"navbar-brand\" href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                    yield "\">
          <img src=\"";
                    // line 26
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                    yield "\" alt=\"Home\" class=\"img-fluid\">
        </a>
      ";
                }
                // line 29
                yield "      ";
            }
            // line 30
            yield "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 31
                yield "        <div class=\"site-branding__slogan\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
                yield "</div>
      ";
            }
            // line 33
            yield "    </div>
  ";
        } elseif ((        // line 34
($context["site_slogan"] ?? null) && ($context["site_logo"] ?? null))) {
            // line 35
            yield "    <a class=\"navbar-brand\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\">
      <img src=\"";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"Home\" class=\"img-fluid\">
    </a>
    <div class=\"site-branding__slogan\">";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
            yield "</div>
  ";
        } else {
            // line 40
            yield "    ";
            if (($context["site_logo"] ?? null)) {
                // line 41
                yield "      <a class=\"navbar-brand\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\">
        <img src=\"";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                yield "\" alt=\"Home\" class=\"img-fluid\">
      </a>
    ";
            } else {
                // line 45
                yield "      <a class=\"navbar-brand\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\">
        <svg  data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 284.4 50\">
          <defs>
            <style>
              .cls-1 {
                fill: #fff;
              }

              .cls-2 {
                fill: #171c31;
              }

              .cls-3 {
                fill: var(--bs-primary);
              }
            </style>
          </defs>
          <g>
            <path class=\"cls-2\" d=\"M12.49,8.05c1.71-1.08,3.85-1.62,6.41-1.62,1.72,0,3.28,.2,4.68,.59,1.4,.39,2.76,.89,4.09,1.5l.73-6.38c-1.17-.61-2.55-1.12-4.15-1.53-1.6-.41-3.37-.62-5.3-.62-3.67,0-6.93,.79-9.79,2.37-2.85,1.58-5.09,3.79-6.72,6.64S0,15.2,0,19.04s.79,7.18,2.36,10.03c1.58,2.85,3.77,5.07,6.59,6.64,2.82,1.58,6.08,2.37,9.79,2.37,1.78,0,3.48-.2,5.13-.59,1.64-.39,3.15-.91,4.53-1.56l-.73-6.38c-1.41,.63-2.81,1.13-4.2,1.52s-2.97,.57-4.72,.57c-2.52,0-4.63-.54-6.33-1.62-1.7-1.08-2.97-2.57-3.82-4.47-.85-1.9-1.28-4.07-1.28-6.51s.43-4.61,1.3-6.51,2.16-3.39,3.88-4.47Z\"/>
            <path class=\"cls-2\" d=\"M51.58,12.54c-2-1.25-4.42-1.87-7.26-1.87s-5.26,.62-7.26,1.87-3.53,2.91-4.58,4.98c-1.05,2.07-1.58,4.34-1.58,6.8s.53,4.69,1.58,6.75c1.05,2.06,2.58,3.71,4.58,4.94,2,1.24,4.42,1.86,7.26,1.86s5.26-.62,7.26-1.86c2-1.24,3.53-2.88,4.58-4.94,1.05-2.06,1.58-4.31,1.58-6.75s-.53-4.72-1.58-6.8c-1.05-2.07-2.58-3.73-4.58-4.98Zm-2.23,17.7c-1.17,1.53-2.85,2.29-5.03,2.29s-3.83-.76-5.01-2.29-1.78-3.5-1.78-5.92,.59-4.46,1.78-6,2.85-2.31,5.01-2.31,3.85,.77,5.03,2.31,1.76,3.55,1.76,6-.59,4.4-1.76,5.92Z\"/>
            <path class=\"cls-2\" d=\"M71.24,11.77c-1.2,.73-2.13,1.46-2.79,2.2l-.16-2.77h-6.06v26.15h6.48V19.51c.37-.73,1-1.35,1.91-1.86,.91-.5,1.91-.76,3-.76,.37,0,.74,.02,1.11,.05,.37,.04,.75,.11,1.14,.21l.47-6.38c-.35-.07-.73-.1-1.15-.1-1.43,0-2.74,.37-3.94,1.1Z\"/>
            <path class=\"cls-2\" d=\"M99.54,12.63c-1.74-1.24-3.89-1.86-6.45-1.86-2.04,0-3.76,.37-5.17,1.11-.89,.47-1.73,1.07-2.54,1.74l-.7-2.43h-5.22V50h6.48v-14.28c.74,.53,1.47,.99,2.19,1.31,1.27,.56,2.92,.84,4.96,.84,2.56,0,4.71-.62,6.45-1.86,1.74-1.24,3.06-2.88,3.96-4.94,.89-2.06,1.34-4.31,1.34-6.75s-.45-4.69-1.34-6.75c-.9-2.06-2.22-3.7-3.96-4.94Zm-2.94,17.61c-1.07,1.53-2.57,2.29-4.5,2.29-1.5,0-2.72-.35-3.68-1.05-.96-.7-1.66-1.66-2.11-2.89-.45-1.23-.68-2.66-.68-4.28s.23-3.05,.68-4.28c.45-1.23,1.16-2.19,2.11-2.89,.96-.7,2.18-1.05,3.68-1.05,1.93,0,3.43,.76,4.5,2.28,1.07,1.52,1.61,3.5,1.61,5.94s-.54,4.4-1.61,5.92Z\"/>
            <path class=\"cls-2\" d=\"M128.44,12.54c-2-1.25-4.42-1.87-7.26-1.87s-5.26,.62-7.26,1.87-3.53,2.91-4.58,4.98c-1.05,2.07-1.58,4.34-1.58,6.8s.53,4.69,1.58,6.75c1.05,2.06,2.58,3.71,4.58,4.94,2,1.24,4.42,1.86,7.26,1.86s5.26-.62,7.26-1.86c2-1.24,3.53-2.88,4.58-4.94,1.05-2.06,1.58-4.31,1.58-6.75s-.53-4.72-1.58-6.8c-1.05-2.07-2.58-3.73-4.58-4.98Zm-2.23,17.7c-1.17,1.53-2.85,2.29-5.03,2.29s-3.83-.76-5.01-2.29-1.78-3.5-1.78-5.92,.59-4.46,1.78-6,2.85-2.31,5.01-2.31,3.85,.77,5.03,2.31,1.76,3.55,1.76,6-.59,4.4-1.76,5.92Z\"/>
            <path class=\"cls-2\" d=\"M148.1,11.77c-1.2,.73-2.13,1.46-2.79,2.2l-.16-2.77h-6.06v26.15h6.48V19.51c.37-.73,1-1.35,1.91-1.86,.91-.5,1.91-.76,3-.76,.37,0,.74,.02,1.11,.05,.37,.04,.75,.11,1.14,.21l.47-6.38c-.35-.07-.73-.1-1.15-.1-1.43,0-2.74,.37-3.94,1.1Z\"/>
            <path class=\"cls-2\" d=\"M176.14,32.3c-.33-.16-.56-.53-.68-1.11-.13-.58-.19-1.53-.19-2.84v-7.06c0-2.53-.38-4.56-1.15-6.11s-1.85-2.66-3.26-3.36-3.08-1.05-5.04-1.05c-1.61,0-3.21,.19-4.79,.58s-3.15,.96-4.71,1.73l.57,5.28c1.39-.68,2.64-1.18,3.75-1.5,1.1-.32,2.24-.48,3.4-.48,1.67,0,2.86,.34,3.55,1.02,.7,.68,1.08,1.77,1.15,3.27-.97,.04-2.1,.15-3.38,.34-1.27,.19-2.57,.49-3.88,.9-1.32,.41-2.53,.97-3.66,1.67-1.12,.71-2.03,1.59-2.72,2.64-.69,1.06-1.03,2.32-1.03,3.81,0,1.66,.34,3.07,1.02,4.24,.68,1.17,1.59,2.06,2.74,2.68,1.15,.62,2.42,.93,3.81,.93,1.56,0,3.08-.27,4.53-.8s2.6-1.28,3.46-2.24c.33,.61,.76,1.14,1.3,1.6,.54,.45,1.19,.81,1.95,1.06,.76,.25,1.62,.38,2.6,.38h2.35l.58-5.34h-.83c-.63,0-1.11-.08-1.44-.24Zm-7.34-1.28c-.67,.64-1.44,1.12-2.29,1.43s-1.56,.46-2.14,.46c-1.22,0-2.11-.26-2.66-.77-.56-.52-.84-1.3-.84-2.37s.41-1.88,1.23-2.56c.82-.68,1.84-1.19,3.05-1.54,1.22-.35,2.44-.55,3.65-.6v5.96Z\"/>
            <path class=\"cls-2\" d=\"M189.58,4.76l-6.48,.68v5.75h-3.13l-.57,5.34h3.71v14.49c0,1.13,.24,2.22,.73,3.27,.49,1.05,1.24,1.9,2.27,2.58,1.02,.67,2.36,1.01,3.99,1.01h4.64l.57-5.34h-1.77c-1.22,0-2.11-.07-2.66-.22-.56-.15-.91-.52-1.07-1.1-.16-.58-.23-1.54-.23-2.86v-11.82h5.74v-5.34h-5.74V4.76Z\"/>
            <path class=\"cls-2\" d=\"M220.75,16.44c-.84-1.72-2.09-3.09-3.76-4.12-1.67-1.03-3.76-1.54-6.27-1.54-2.73,0-5.05,.62-6.94,1.85-1.9,1.23-3.34,2.85-4.32,4.88-.98,2.02-1.47,4.23-1.47,6.62s.52,4.76,1.57,6.84c1.04,2.08,2.61,3.76,4.71,5.02,2.09,1.26,4.72,1.9,7.87,1.9,1.86,0,3.54-.2,5.01-.6s2.72-.86,3.71-1.39l-.31-5.49c-1.1,.65-2.29,1.16-3.6,1.56-1.31,.39-2.72,.59-4.23,.59-1.29,0-2.49-.24-3.62-.71-1.12-.47-2.07-1.21-2.84-2.21-.78-1-1.28-2.32-1.53-3.94h16.86c.14-.63,.25-1.23,.31-1.82,.07-.59,.11-1.16,.11-1.74,0-2.07-.42-3.97-1.25-5.69Zm-15.87,4.85c.31-1.5,.95-2.74,1.91-3.71,.96-.97,2.27-1.46,3.94-1.46,1.17,0,2.09,.27,2.78,.81,.68,.54,1.18,1.21,1.47,2,.29,.79,.44,1.58,.44,2.37h-10.55Z\"/>
          </g>
          <g>
            <polygon class=\"cls-3\" points=\"274.98 25 230.4 25 230.4 0 284.4 0 274.98 25\"/>
            <g>
              <path class=\"cls-1\" d=\"M246.9,7.67c-.58-.25-1.3-.38-2.15-.38h-3.93v11.05h2.02v-3.84h1.96c.83,0,1.54-.13,2.12-.39,.58-.26,1.02-.66,1.32-1.2,.3-.54,.45-1.22,.45-2.06s-.15-1.49-.45-2.02c-.3-.53-.75-.92-1.33-1.17Zm-.79,4.68c-.35,.31-.86,.47-1.55,.47h-1.72v-3.84h1.67c.71,0,1.24,.15,1.59,.46,.35,.3,.52,.79,.52,1.45s-.17,1.15-.52,1.46Z\"/>
              <path class=\"cls-1\" d=\"M251.88,16.52c-.05-.18-.08-.48-.08-.9V6.5h-1.96v9.93c0,.38,.07,.72,.21,1.04,.14,.31,.36,.56,.66,.75,.3,.19,.68,.28,1.15,.28h.71l.17-1.61c-.26,0-.46-.02-.59-.05-.14-.03-.23-.14-.28-.32Z\"/>
              <path class=\"cls-1\" d=\"M258.85,16.18c-.12,.14-.24,.26-.38,.36-.29,.21-.66,.32-1.1,.32-.55,0-.95-.18-1.19-.53-.25-.35-.37-.9-.37-1.63v-4.25h-1.96v4.25c0,.74,.11,1.4,.32,1.97,.22,.57,.57,1.02,1.06,1.35,.49,.33,1.14,.49,1.97,.49,.41,0,.81-.1,1.22-.31,.2-.1,.38-.21,.53-.32l.03,.47h1.83v-7.89h-1.96v5.73Z\"/>
              <path class=\"cls-1\" d=\"M267.85,15.34c-.09-.23-.22-.44-.4-.63-.18-.19-.4-.35-.67-.5-.27-.15-.59-.3-.96-.44-.57-.22-.98-.41-1.24-.56-.26-.15-.39-.38-.39-.69,0-.25,.09-.45,.28-.58,.18-.14,.44-.21,.78-.21,.43,0,.82,.08,1.18,.24,.36,.16,.71,.36,1.07,.61l.17-1.67c-.34-.19-.7-.34-1.1-.45s-.85-.17-1.35-.17c-.6,0-1.12,.1-1.56,.29-.44,.2-.77,.47-1.01,.81-.24,.35-.36,.75-.36,1.2s.09,.8,.26,1.1c.18,.3,.43,.55,.77,.76s.75,.41,1.24,.58c.32,.12,.59,.23,.81,.34,.21,.11,.38,.22,.48,.35,.11,.13,.16,.3,.16,.51,0,.27-.1,.47-.31,.6-.21,.13-.5,.19-.89,.19-.43,0-.84-.07-1.23-.22-.39-.14-.79-.34-1.2-.57l-.17,1.67c.42,.19,.84,.33,1.26,.43s.89,.15,1.41,.15c.66,0,1.22-.09,1.68-.28,.46-.18,.81-.45,1.05-.8,.24-.35,.36-.77,.36-1.27,0-.31-.04-.57-.13-.81Z\"/>
            </g>
          </g>
        </svg>
      </a>
    ";
            }
            // line 85
            yield "  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/corporate_plus/templates/block/block--system-branding-block.html.twig";
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
        return array (  192 => 85,  146 => 45,  140 => 42,  133 => 41,  130 => 40,  125 => 38,  120 => 36,  113 => 35,  111 => 34,  108 => 33,  102 => 31,  99 => 30,  96 => 29,  90 => 26,  83 => 25,  80 => 24,  74 => 22,  72 => 21,  69 => 20,  66 => 19,  59 => 18,  53 => 1,  51 => 17,  49 => 16,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/corporate_plus/templates/block/block--system-branding-block.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "set" => 16, "if" => 19];
        static $filters = ["escape" => 22, "t" => 25];
        static $functions = ["url" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'set', 'if'],
                ['escape', 't'],
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

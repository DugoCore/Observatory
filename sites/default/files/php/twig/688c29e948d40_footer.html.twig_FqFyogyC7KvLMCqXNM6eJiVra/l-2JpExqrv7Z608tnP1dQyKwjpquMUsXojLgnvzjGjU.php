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

/* @corporate_plus/footer/footer.html.twig */
class __TwigTemplate_4a107ff10d35577b555a54493b5b01aa extends Template
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
        yield "<div class=\"pt-footer bg-image dt-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"footer-top col-12\"> 
                ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 5), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5 col-12\">
                <div class=\"social-media-profiles\">
                    ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 11), "html", null, true);
        yield "
                </div>
            </div>
            <div class=\"col-lg-3 col-12 footer-links\">
                ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 15), "html", null, true);
        yield "
            </div>
            <div class=\"col-lg-4 col-12 footer-address\">
                <div class=\"address-call\">
                    ";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 19), "html", null, true);
        yield "
                    ";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 20), "html", null, true);
        yield "
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"copyrights\">
                ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["copyrights"] ?? null));
        yield "
            </div>
        </div>  
    </div>
</div>

";
        // line 35
        yield "

<a href=\"#\" class=\"back-to-top back-to-top-hide active\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"45\" height=\"45\" viewBox=\"0 0 45 45\">
        <g transform=\"translate(45) rotate(90)\">
            <g transform=\"translate(35.438 45) rotate(180)\">
                <path d=\"M25.792,21.463,4.779.451a1.418,1.418,0,0,0-2.074,0L.451,2.706a1.418,1.418,0,0,0,0,2.074L18.171,22.5.451,40.221a1.418,1.418,0,0,0,0,2.074l2.254,2.254a1.419,1.419,0,0,0,2.074,0L25.791,23.538a1.42,1.42,0,0,0,0-2.075Z\"></path>
            </g>
        </g>
    </svg>
</a>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyrights"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@corporate_plus/footer/footer.html.twig";
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
        return array (  97 => 35,  88 => 28,  77 => 20,  73 => 19,  66 => 15,  59 => 11,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@corporate_plus/footer/footer.html.twig", "D:\\laragon\\www\\observatory\\themes\\custom\\corporate_plus\\templates\\footer\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 5, "raw" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw'],
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

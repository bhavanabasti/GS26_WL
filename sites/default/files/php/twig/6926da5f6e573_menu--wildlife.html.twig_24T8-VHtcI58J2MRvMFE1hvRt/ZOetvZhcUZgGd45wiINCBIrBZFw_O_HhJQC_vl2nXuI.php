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

/* themes/custom/boot5/templates/menu/menu--wildlife.html.twig */
class __TwigTemplate_f536d3a77e386fb978a2f2235524315b extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("boot5/sidebar-menu"), "html", null, true);
        yield "
";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("boot5/bootstrap-icons"), "html", null, true);
        yield "

<ul class=\"menu\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            yield "    ";
            $context["children"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", true, true, true, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 6), [])) : ([]));
            // line 7
            yield "    <li class=\"menu-item\">
      ";
            // line 8
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["children"] ?? null)) > 0)) {
                // line 9
                yield "        ";
                $context["menu_id"] = ("sidemenu-collapse-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 9));
                // line 10
                yield "        <span class=\"menu-title toggle\" data-menu-id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_id"] ?? null), "html", null, true);
                yield "\">
          ";
                // line 11
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 11), "html", null, true);
                yield "
        </span>

        <ul class=\"submenu\" id=\"";
                // line 14
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_id"] ?? null), "html", null, true);
                yield "\">
          ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["children"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 16
                    yield "            <li class=\"submenu-item\">
              <a href=\"";
                    // line 17
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, true, 17), "html", null, true);
                    yield "\">
                <i class=\"bi bi-dot me-1 fs-5\"></i>
                ";
                    // line 19
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, true, 19), "html", null, true);
                    yield "
              </a>
            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "        </ul>
      ";
            } else {
                // line 25
                yield "        <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 25), "html", null, true);
                yield "\" class=\"menu-title\">
          ";
                // line 26
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 26), "html", null, true);
                yield "
        </a>
      ";
            }
            // line 29
            yield "    </li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "</ul>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/boot5/templates/menu/menu--wildlife.html.twig";
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
        return array (  149 => 31,  134 => 29,  128 => 26,  123 => 25,  119 => 23,  109 => 19,  104 => 17,  101 => 16,  97 => 15,  93 => 14,  87 => 11,  82 => 10,  79 => 9,  77 => 8,  74 => 7,  71 => 6,  54 => 5,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/boot5/templates/menu/menu--wildlife.html.twig", "/var/www/html/GS26_WL/themes/custom/boot5/templates/menu/menu--wildlife.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 5, "set" => 6, "if" => 8];
        static $filters = ["escape" => 1, "default" => 6, "length" => 8];
        static $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'default', 'length'],
                ['attach_library'],
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

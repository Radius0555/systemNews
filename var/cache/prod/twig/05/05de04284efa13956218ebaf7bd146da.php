<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/list.html.twig */
class __TwigTemplate_ce3901fe8648b5febe42d98442852747 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Artykuły";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>Artykuły</h1>

";
        // line 9
        if ( !twig_test_empty(($context["paginations"] ?? null))) {
            // line 10
            echo "<div class=\"row\">
    <ul class=\"list group list-group-flush\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paginations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 13
                echo "        <li class=\"list-group-item\">
            <div class=\"card-body\">
                <div class=\"row no-gutters\">
                    <div class=\"col-md-3\">Foto</div>
                    <div class=\"col-md-7 ml-md-auto\">
                        <a href=\"home/";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "\"
                            <h5>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 19), "html", null, true);
                echo "</h5>
                        </a>
                        <p>Kategoria, data, ilość komentarzy</p>
                    </div>        
                </div>
            </div>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        
    </ul>
</div>
";
        } else {
            // line 30
            echo "    <p>Brak artykułów!</p>
";
        }
        // line 32
        echo "    
";
    }

    public function getTemplateName()
    {
        return "home/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  104 => 30,  98 => 26,  84 => 19,  80 => 18,  73 => 13,  69 => 12,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/list.html.twig", "/var/www/html/systemNews/templates/home/list.html.twig");
    }
}

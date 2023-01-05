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

/* article/index.html.twig */
class __TwigTemplate_4b9ffcf0cc2c62948d82e55304143ac7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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
        echo "<style>
th, td {
  padding: 10px;
}
th {
  text-align: left;
}
</style>

<a href=\"/admin/category\">Kategorie</a>
<h1>Wszystkie artykuły</h1>
<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_create");
        echo "\" class=\"btn btn-success\">Utwórz nowy</a>
";
        // line 18
        if ( !twig_test_empty(($context["articles"] ?? null))) {
            // line 19
            echo "<table class=\"table table-bordered\">
  <thead>
    <tr>
    <th>Nazwa</th>
    <th>Kategoria</th>
    <th>Edytuj</th>
    <th>Usuń</th>
  </tr>
</thead>
<tbody>
  ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 30
                echo "  <tr>
    <td><a href=\"/admin/article/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\">
      ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 32), "html", null, true);
                echo "
    </a></td>
    <td>
      ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "
    </td>
    <td><a href=\"/admin/article/update/";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
      <i class=\"bi bi-wrench\"></i>
    </a></td>
    <td><a href=\"/article/delete/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
      <i class=\"bi bi-trash\"></i>
    </a></td> 
  </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "  </tbody>

";
        } else {
            // line 48
            echo "  <p>Brak artykułów!</p>
";
        }
        // line 50
        echo "
";
    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  133 => 48,  128 => 45,  117 => 40,  111 => 37,  106 => 35,  100 => 32,  96 => 31,  93 => 30,  89 => 29,  77 => 19,  75 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/index.html.twig", "/var/www/html/systemNews/templates/article/index.html.twig");
    }
}

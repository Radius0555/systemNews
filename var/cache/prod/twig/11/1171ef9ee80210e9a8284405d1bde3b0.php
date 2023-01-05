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

/* category/index.html.twig */
class __TwigTemplate_0def3d2484db39db1f7282f75b4053c2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Kategorie";
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

<a href=\"/admin/article\">Artykuły</a>
<h1>Wszystkie kategorie</h1>
<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_create");
        echo "\" class=\"btn btn-success\">Utwórz kategorie</a>
";
        // line 18
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 19
            echo "<table class=\"table table-bordered\">
  <thead>
    <tr>
    <th>Nazwa</th>
    <th>Edytuj</th>
    <th>Usuń</th>
  </tr>
</thead>
<tbody>
  ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "  <tr>
    <td>
      ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "
    </td>
    <td><a href=\"/category/update/";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\">
      <i class=\"bi bi-wrench\"></i>
    </a></td>
    <td><a href=\"/category/delete/";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
      <i class=\"bi bi-trash\"></i>
    </a></td> 
  </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "  </tbody>

";
        } else {
            // line 44
            echo "  <p>Brak kategorii!</p>
";
        }
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  123 => 44,  118 => 41,  107 => 36,  101 => 33,  96 => 31,  92 => 29,  88 => 28,  77 => 19,  75 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "category/index.html.twig", "/var/www/html/systemNews/templates/category/index.html.twig");
    }
}

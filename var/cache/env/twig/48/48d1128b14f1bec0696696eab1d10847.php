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
class __TwigTemplate_0f315eb8067437a2a7eddc29d765c135 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Kategorie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if ( !twig_test_empty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 18, $this->source); })()))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  142 => 46,  138 => 44,  133 => 41,  122 => 36,  116 => 33,  111 => 31,  107 => 29,  103 => 28,  92 => 19,  90 => 18,  86 => 17,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Kategorie{% endblock %}

{% block body %}
<style>
th, td {
  padding: 10px;
}
th {
  text-align: left;
}
</style>

<a href=\"/admin/article\">Artykuły</a>
<h1>Wszystkie kategorie</h1>
<a href=\"{{ path('category_create') }}\" class=\"btn btn-success\">Utwórz kategorie</a>
{% if categories is not empty %}
<table class=\"table table-bordered\">
  <thead>
    <tr>
    <th>Nazwa</th>
    <th>Edytuj</th>
    <th>Usuń</th>
  </tr>
</thead>
<tbody>
  {% for category in categories %}
  <tr>
    <td>
      {{ category.name }}
    </td>
    <td><a href=\"/category/update/{{ category.id }}\">
      <i class=\"bi bi-wrench\"></i>
    </a></td>
    <td><a href=\"/category/delete/{{ category.id }}\">
      <i class=\"bi bi-trash\"></i>
    </a></td> 
  </tr>
  {% endfor %}
  </tbody>

{% else %}
  <p>Brak kategorii!</p>
{% endif %}

{% endblock %}
", "category/index.html.twig", "/var/www/html/systemNews/templates/category/index.html.twig");
    }
}

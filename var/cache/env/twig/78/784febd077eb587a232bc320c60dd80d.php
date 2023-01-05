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
class __TwigTemplate_40dc173cde40aa8d90856f06ca90784d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Artykuły";
        
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

<a href=\"/admin/category\">Kategorie</a>
<h1>Wszystkie artykuły</h1>
<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_create");
        echo "\" class=\"btn btn-success\">Utwórz nowy</a>
";
        // line 18
        if ( !twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 18, $this->source); })()))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 29, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  152 => 50,  148 => 48,  143 => 45,  132 => 40,  126 => 37,  121 => 35,  115 => 32,  111 => 31,  108 => 30,  104 => 29,  92 => 19,  90 => 18,  86 => 17,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Artykuły{% endblock %}

{% block body %}
<style>
th, td {
  padding: 10px;
}
th {
  text-align: left;
}
</style>

<a href=\"/admin/category\">Kategorie</a>
<h1>Wszystkie artykuły</h1>
<a href=\"{{ path('article_create') }}\" class=\"btn btn-success\">Utwórz nowy</a>
{% if articles is not empty %}
<table class=\"table table-bordered\">
  <thead>
    <tr>
    <th>Nazwa</th>
    <th>Kategoria</th>
    <th>Edytuj</th>
    <th>Usuń</th>
  </tr>
</thead>
<tbody>
  {% for article in articles %}
  <tr>
    <td><a href=\"/admin/article/{{ article.id }}\">
      {{ article.title }}
    </a></td>
    <td>
      {{ article.category.name }}
    </td>
    <td><a href=\"/admin/article/update/{{ article.id }}\">
      <i class=\"bi bi-wrench\"></i>
    </a></td>
    <td><a href=\"/article/delete/{{ article.id }}\">
      <i class=\"bi bi-trash\"></i>
    </a></td> 
  </tr>
  {% endfor %}
  </tbody>

{% else %}
  <p>Brak artykułów!</p>
{% endif %}

{% endblock %}
", "article/index.html.twig", "/var/www/html/systemNews/templates/article/index.html.twig");
    }
}

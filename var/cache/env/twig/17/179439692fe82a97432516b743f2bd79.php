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

/* home/show.html.twig */
class __TwigTemplate_032208b9b8ad3107ff1b4e2e0c348885 extends Template
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
        return "home/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "home/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Wybrany artyku??";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Artyku??</h1>

<article>
    <p>Kategoria: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "category", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), "d-m-Y"), "html", null, true);
        echo "</p>
    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/imageNews/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" class=\"img-fluid\">
    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "contentBig", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
    <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "content", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
</article>
<hr>
<h5>Komentarze:</h5>

";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "
U??ytkownik: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
            echo "

";
            // line 24
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form');
            echo "

";
        }
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "comments", [], "any", false, false, false, 28))) {
            // line 29
            echo "
";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "comments", [], "any", false, false, false, 30), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30) < twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 31
                echo "<ul>
    <li>U??ytkownik: ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 32), "html", null, true);
                echo "</li>
    <li>Komentarz: ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 33), "html", null, true);
                echo "</li>
    ";
                // line 34
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "email", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 34))))) {
                    // line 35
                    echo "        <li><a href=\"comment/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\">
            <i class=\"bi bi-trash\"></i></a></li>
    ";
                }
                // line 38
                echo "</ul>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
";
        } else {
            // line 42
            echo "
<h3>Brak komentarzy!</h3>

";
        }
        // line 46
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  166 => 42,  162 => 40,  155 => 38,  148 => 35,  146 => 34,  142 => 33,  138 => 32,  135 => 31,  131 => 30,  128 => 29,  126 => 28,  123 => 27,  117 => 24,  112 => 22,  109 => 21,  107 => 20,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}

{% block title %}Wybrany artyku??{% endblock %}

{% block body %}

<h1>Artyku??</h1>

<article>
    <p>Kategoria: {{ article.category.name }}</p>
    <h2>{{ article.title }}</h2>
    <p>{{ article.date |date('d-m-Y')}}</p>
    <img src=\"{{ asset('uploads/imageNews/' ~ article.image) }}\" class=\"img-fluid\">
    <p>{{ article.contentBig }}</p>
    <p>{{ article.content }}</p>
</article>
<hr>
<h5>Komentarze:</h5>

{% if app.user %}

U??ytkownik: {{ app.user.email }}

{{ form(form) }}

{% endif %}

{% if article.comments is not empty %}

{% for comment in article.comments|sort((a,b) => a.id < b.id) %}
<ul>
    <li>U??ytkownik: {{ comment.author }}</li>
    <li>Komentarz: {{ comment.content }}</li>
    {% if (is_granted('ROLE_ADMIN') or (app.user and app.user.email == comment.author)) %}
        <li><a href=\"comment/delete/{{ comment.id }}\">
            <i class=\"bi bi-trash\"></i></a></li>
    {% endif %}
</ul>
{% endfor %}

{% else %}

<h3>Brak komentarzy!</h3>

{% endif %}



{% endblock %}
", "home/show.html.twig", "/var/www/html/systemNews/templates/home/show.html.twig");
    }
}

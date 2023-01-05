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

/* home/base.html.twig */
class __TwigTemplate_6d9aba353243a74259a885258c3c5179 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/base.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
<title>Home Page</title>
</head>
<body>
<header>
  <nav class=\"navbar navbar-expand-md navbar-light bg-light\">
    <div class=\"navbar-collapse\">
    <a class=\"navbar-brand\" href=\"/\">Logo</a>
    <a class=\"navbar-link\" href=\"#\">Kategorie<a/>
    </div>
    <div class=\"navbar-collapse justify-content-end\">
    <form class=\"form-inline\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\"
      aria-label=\"Search\">
      <button class=\"btn btn-outline my-2 my-sm-0\" type=\"submit\">
        <i class=\"bi bi-search\"></i>
      </button>
    </form>
    </div>
    <div class=\"navbar-collapse justify-content-end\">
      ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 27
            echo "        <p> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
            echo " </p>
        <a class=\"btn btn-primary\" href=\"logout\">Wyloguj</a>
       ";
        } else {
            // line 30
            echo "      <a class=\"btn btn-primary\" href=\"login\">Zaloguj</a>
      <a class=\"btn btn-primary\" href=\"registration\">Zarejestruj</a>
      ";
        }
        // line 33
        echo "    </div>
  </nav>
</header>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-8\">
      ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "    </div>
    <div class=\"col-4 bg-danger\">
      <h4>Najważniejsze</h4>
      <hr>
      <ul class=\"list-group\">
        <li class=\"list-group-item bg-warning\">Pozycja 1</li>
        <li class=\"list-group-item bg-warning\">Pozycja 2</li>
        <a class=\"btn btn-warning\" href=\"#\">Więcej</a>
        <hr>
      </ul>
      <h4>Pogoda</h4>
      <hr>
      <p>Miejsce na pogode</p>
    </div>
  </div>
</div>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  93 => 41,  91 => 40,  82 => 33,  77 => 30,  70 => 27,  68 => 26,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
<title>Home Page</title>
</head>
<body>
<header>
  <nav class=\"navbar navbar-expand-md navbar-light bg-light\">
    <div class=\"navbar-collapse\">
    <a class=\"navbar-brand\" href=\"/\">Logo</a>
    <a class=\"navbar-link\" href=\"#\">Kategorie<a/>
    </div>
    <div class=\"navbar-collapse justify-content-end\">
    <form class=\"form-inline\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\"
      aria-label=\"Search\">
      <button class=\"btn btn-outline my-2 my-sm-0\" type=\"submit\">
        <i class=\"bi bi-search\"></i>
      </button>
    </form>
    </div>
    <div class=\"navbar-collapse justify-content-end\">
      {% if is_granted('ROLE_USER') %}
        <p> {{ app.user.username }} </p>
        <a class=\"btn btn-primary\" href=\"logout\">Wyloguj</a>
       {% else %}
      <a class=\"btn btn-primary\" href=\"login\">Zaloguj</a>
      <a class=\"btn btn-primary\" href=\"registration\">Zarejestruj</a>
      {% endif %}
    </div>
  </nav>
</header>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-8\">
      {% block body %}{% endblock %}
    </div>
    <div class=\"col-4 bg-danger\">
      <h4>Najważniejsze</h4>
      <hr>
      <ul class=\"list-group\">
        <li class=\"list-group-item bg-warning\">Pozycja 1</li>
        <li class=\"list-group-item bg-warning\">Pozycja 2</li>
        <a class=\"btn btn-warning\" href=\"#\">Więcej</a>
        <hr>
      </ul>
      <h4>Pogoda</h4>
      <hr>
      <p>Miejsce na pogode</p>
    </div>
  </div>
</div>
</body>
</html>
", "home/base.html.twig", "/var/www/html/systemNews/templates/home/base.html.twig");
    }
}

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

/* article/show.html.twig */
class __TwigTemplate_87c95e6e2b5f24eed93bdff11e8a3f4a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Wybrany Artykuł";
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

<h1>Artykuł</h1>

<article>
  <p>Kategoria: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
  <h2>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
  <p> ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "date", [], "any", false, false, false, 20), "H:i d.m.Y"), "html", null, true);
        echo " </p>
  <p> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 21), "html", null, true);
        echo " </p>
  <p> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "contentBig", [], "any", false, false, false, 22), "html", null, true);
        echo " </p>
  <p> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 23), "html", null, true);
        echo " </p>
</article>
<hr>
<h5>Komentarze: </h5>


";
        // line 29
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comments", [], "any", false, false, false, 29))) {
            // line 30
            echo "
";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comments", [], "any", false, false, false, 31), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "id", [], "any", false, false, false, 31) < twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "id", [], "any", false, false, false, 31)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 32
                echo "<ul>
    <li>Użytkownik: ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 33), "html", null, true);
                echo "</li>
    <li>Komentarz: ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 34), "html", null, true);
                echo "</li>
    ";
                // line 35
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 35))))) {
                    // line 36
                    echo "        <li><a href=\"comment/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\">
            <i class=\"bi bi-trash\"></i></a></li>
    ";
                }
                // line 39
                echo "</ul>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "</table>

";
        } else {
            // line 44
            echo "<p>Brak komentarzy</p>
";
        }
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  142 => 44,  137 => 41,  130 => 39,  123 => 36,  121 => 35,  117 => 34,  113 => 33,  110 => 32,  106 => 31,  103 => 30,  101 => 29,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/show.html.twig", "/var/www/html/systemNews/templates/article/show.html.twig");
    }
}

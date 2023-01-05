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
class __TwigTemplate_2c12bfdf4d186d4e6c479776ef83f7e3 extends Template
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
        $this->parent = $this->loadTemplate("home/base.html.twig", "home/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Wybrany artykuł";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>Artykuł</h1>

<article>
    <p>Kategoria: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "date", [], "any", false, false, false, 12), "d-m-Y"), "html", null, true);
        echo "</p>
    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/imageNews/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" class=\"img-fluid\">
    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "contentBig", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
    <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
</article>
<hr>
<h5>Komentarze:</h5>

";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "
Użytkownik: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
            echo "

";
            // line 24
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
            echo "

";
        }
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comments", [], "any", false, false, false, 28))) {
            // line 29
            echo "
";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comments", [], "any", false, false, false, 30), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "id", [], "any", false, false, false, 30) < twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "id", [], "any", false, false, false, 30)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 31
                echo "<ul>
    <li>Użytkownik: ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 32), "html", null, true);
                echo "</li>
    <li>Komentarz: ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 33), "html", null, true);
                echo "</li>
    ";
                // line 34
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "email", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 34))))) {
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
        return array (  157 => 46,  151 => 42,  147 => 40,  140 => 38,  133 => 35,  131 => 34,  127 => 33,  123 => 32,  120 => 31,  116 => 30,  113 => 29,  111 => 28,  108 => 27,  102 => 24,  97 => 22,  94 => 21,  92 => 20,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/show.html.twig", "/var/www/html/systemNews/templates/home/show.html.twig");
    }
}

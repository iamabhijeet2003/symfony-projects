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

/* player/player.html.twig */
class __TwigTemplate_c746da0f1a143c1e1ffabdc7234076c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/player.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/player.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "player/player.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1 class=\"text-center\">Player Information</h1>

    ";
        // line 7
        if (((isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 7, $this->source); })()) == null)) {
            // line 8
            echo "        <h2 class=\"text-center\">Please, enter a valid player ID</h2>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9) == null)) {
            // line 10
            echo "        <h2 class=\"text-center\">No player found with ID ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
    ";
        } else {
            // line 12
            echo "        <main class=\"player-info \">
            <h2 class=\"text-center\">Player: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2>
            <ul class=\"text-center list-group\">
                <li class=\"text-center list-group-item\"><strong>Name:</strong> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
                <li class=\"text-center list-group-item\"><strong>Country:</strong> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 16, $this->source); })()), "country", [], "any", false, false, false, 16), "html", null, true);
            echo "</li>
                <li class=\"text-center list-group-item\"><strong>Age:</strong> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 17, $this->source); })()), "age", [], "any", false, false, false, 17), "html", null, true);
            echo "</li>
                ";
            // line 18
            if ((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 18, $this->source); })())) {
                // line 19
                echo "                    <li class=\"text-center list-group-item\"><strong>Team:</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
                echo "</li>
                ";
            }
            // line 21
            echo "            </ul>
        </main>
    ";
        }
        // line 24
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "player/player.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  119 => 24,  114 => 21,  108 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  89 => 13,  86 => 12,  80 => 10,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1 class=\"text-center\">Player Information</h1>

    {% if player == null %}
        <h2 class=\"text-center\">Please, enter a valid player ID</h2>
    {% elseif player.id == null %}
        <h2 class=\"text-center\">No player found with ID {{ player.id }}</h2>
    {% else %}
        <main class=\"player-info \">
            <h2 class=\"text-center\">Player: {{ player.name }}</h2>
            <ul class=\"text-center list-group\">
                <li class=\"text-center list-group-item\"><strong>Name:</strong> {{ player.name }}</li>
                <li class=\"text-center list-group-item\"><strong>Country:</strong> {{ player.country }}</li>
                <li class=\"text-center list-group-item\"><strong>Age:</strong> {{ player.age }}</li>
                {% if team %}
                    <li class=\"text-center list-group-item\"><strong>Team:</strong> {{ team.name }}</li>
                {% endif %}
            </ul>
        </main>
    {% endif %}

{% endblock %}
", "player/player.html.twig", "/home/abhijeet/Escritorio/symfony/football/templates/player/player.html.twig");
    }
}

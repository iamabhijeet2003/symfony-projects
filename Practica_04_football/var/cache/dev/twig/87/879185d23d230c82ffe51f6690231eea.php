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

/* player/players_by_team.html.twig */
class __TwigTemplate_b733d02a99000f56b125ee2477b6d8a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/players_by_team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/players_by_team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "player/players_by_team.html.twig", 1);
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
    <h1 class=\"text-center\">Players of Team</h1>

    ";
        // line 7
        if (((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 7, $this->source); })()) == null)) {
            // line 8
            echo "        <h2 class=\"text-center\">Please, enter a valid team ID</h2>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9) == null)) {
            // line 10
            echo "        <h2 class=\"text-center\" >No team found with ID ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
    ";
        } else {
            // line 12
            echo "        <main class=\"players-list text-center\">
            <h2>Team: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2>
            <h3>Players:</h3>
            <ul class=\"list-group\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 17
                echo "                    <li class=\"list-group-item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo " - Age: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "age", [], "any", false, false, false, 17), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </ul>
        </main>
    ";
        }
        // line 22
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
        return "player/players_by_team.html.twig";
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
        return array (  115 => 22,  110 => 19,  99 => 17,  95 => 16,  89 => 13,  86 => 12,  80 => 10,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1 class=\"text-center\">Players of Team</h1>

    {% if team == null %}
        <h2 class=\"text-center\">Please, enter a valid team ID</h2>
    {% elseif team.id == null %}
        <h2 class=\"text-center\" >No team found with ID {{ team.id }}</h2>
    {% else %}
        <main class=\"players-list text-center\">
            <h2>Team: {{ team.name }}</h2>
            <h3>Players:</h3>
            <ul class=\"list-group\">
                {% for player in players %}
                    <li class=\"list-group-item\">{{ player.name }} - Age: {{ player.age }}</li>
                {% endfor %}
            </ul>
        </main>
    {% endif %}

{% endblock %}
", "player/players_by_team.html.twig", "/home/abhijeet/Escritorio/symfony/football/templates/player/players_by_team.html.twig");
    }
}

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

/* player/new_edit_player.html.twig */
class __TwigTemplate_1d1df63774352e22053433588bfc85f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/new_edit_player.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/new_edit_player.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "player/new_edit_player.html.twig", 1);
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
    <h1 class=\"centered text-center\">Player App</h1>

    ";
        // line 7
        if (((isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 7, $this->source); })()) == null)) {
            // line 8
            echo "        <h2 class=\"text-center\">";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</h2>
    ";
        } else {
            // line 10
            echo "        <main class=\"player text-center\">
            <h2 class=\"text-center\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "html", null, true);
            echo ": Id: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
            echo "</h2>
            <ul class=\"list-group\">
                <li class=\"list-group-item text-center\"><strong>Name:</strong> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</li>
                <li class=\"list-group-item text-center\"><strong>Country:</strong> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 14, $this->source); })()), "country", [], "any", false, false, false, 14), "html", null, true);
            echo " </li>
                <li class=\"list-group-item text-center\"><strong>Team:</strong> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 15, $this->source); })()), "idTeam", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
            </ul>
            
        </main>
    ";
        }
        // line 20
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
        return "player/new_edit_player.html.twig";
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
        return array (  107 => 20,  99 => 15,  95 => 14,  91 => 13,  84 => 11,  81 => 10,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1 class=\"centered text-center\">Player App</h1>

    {%  if player == null %}
        <h2 class=\"text-center\">{{ action }}</h2>
    {%  else %}
        <main class=\"player text-center\">
            <h2 class=\"text-center\">{{ action }}: Id: {{ player.id }}</h2>
            <ul class=\"list-group\">
                <li class=\"list-group-item text-center\"><strong>Name:</strong> {{ player.name}}</li>
                <li class=\"list-group-item text-center\"><strong>Country:</strong> {{ player.country }} </li>
                <li class=\"list-group-item text-center\"><strong>Team:</strong> {{ player.idTeam.name }}</li>
            </ul>
            
        </main>
    {% endif %}


{% endblock %}", "player/new_edit_player.html.twig", "/home/abhijeet/Escritorio/symfony/football/templates/player/new_edit_player.html.twig");
    }
}

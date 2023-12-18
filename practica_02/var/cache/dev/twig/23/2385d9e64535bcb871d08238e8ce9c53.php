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

/* contacts/contact.html.twig */
class __TwigTemplate_7a84dccec825f598d4ad2f9495c11c6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacts/contact.html.twig", 1);
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
    <h1 class=\"centered\">Contacts App</h1>

    ";
        // line 7
        if (((isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 7, $this->source); })()) == null)) {
            // line 8
            echo "        <h2>Please, enter a contact Id</h2>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9) == null)) {
            // line 10
            echo "        <h2>No contact found with id ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
            echo " </h2>
    ";
        } else {
            // line 12
            echo "        <main class=\"contact\">
            <h2>Contact: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 13, $this->source); })()), "surname", [], "any", false, false, false, 13), "html", null, true);
            echo " </h2>
            <ul>
                <li><strong>Birthdate:</strong> ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 15, $this->source); })()), "birthdate", [], "any", false, false, false, 15), "d-m-Y", "Europe/Madrid"), "html", null, true);
            echo "</li>
                <li><strong>Email:</strong> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
            echo " </li>
                <li><strong>Phones:</strong>
                    <ul>
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 19, $this->source); })()), "phones", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 20
                echo "                            <li> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", [], "any", false, false, false, 20), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "number", [], "any", false, false, false, 20), "html", null, true);
                echo " </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </ul>
                </li>
                <li><strong>City: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 24, $this->source); })()), "city", [], "any", false, false, false, 24), "html", null, true);
            echo "</li>
            </ul>
        </main>
    ";
        }
        // line 28
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
        return "contacts/contact.html.twig";
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
        return array (  134 => 28,  127 => 24,  123 => 22,  112 => 20,  108 => 19,  102 => 16,  98 => 15,  89 => 13,  86 => 12,  80 => 10,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1 class=\"centered\">Contacts App</h1>

    {%  if contact == null %}
        <h2>Please, enter a contact Id</h2>
    {%  elseif contact.name == null %}
        <h2>No contact found with id {{ contact.id }} </h2>
    {%  else %}
        <main class=\"contact\">
            <h2>Contact: {{ contact.title}} {{ contact.name }} {{ contact.surname}} </h2>
            <ul>
                <li><strong>Birthdate:</strong> {{ contact.birthdate|date(\"d-m-Y\", \"Europe/Madrid\") }}</li>
                <li><strong>Email:</strong> {{ contact.email }} </li>
                <li><strong>Phones:</strong>
                    <ul>
                        {% for phone in contact.phones %}
                            <li> {{ phone.type }}: {{ phone.number }} </li>
                        {% endfor %}
                    </ul>
                </li>
                <li><strong>City: {{contact.city}}</li>
            </ul>
        </main>
    {% endif %}

{% endblock %}", "contacts/contact.html.twig", "/home/abhijeet/Escritorio/symfony/practica1contactes/templates/contacts/contact.html.twig");
    }
}

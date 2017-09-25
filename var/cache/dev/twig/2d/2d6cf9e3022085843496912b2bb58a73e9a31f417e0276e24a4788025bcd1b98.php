<?php

/* horario/show.html.twig */
class __TwigTemplate_163f3d6642702bb4d57d8da2a5bfc90063188c867105efb09bea5c0e4708b655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horario/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b23384929d0ed4b9c233c990f33ed2d162c956143a16dad359305e815b755752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23384929d0ed4b9c233c990f33ed2d162c956143a16dad359305e815b755752->enter($__internal_b23384929d0ed4b9c233c990f33ed2d162c956143a16dad359305e815b755752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/show.html.twig"));

        $__internal_573b0773efe05d0d45938ff20787f2a330242c3cdb918686e3d41b893f55cc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573b0773efe05d0d45938ff20787f2a330242c3cdb918686e3d41b893f55cc97->enter($__internal_573b0773efe05d0d45938ff20787f2a330242c3cdb918686e3d41b893f55cc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b23384929d0ed4b9c233c990f33ed2d162c956143a16dad359305e815b755752->leave($__internal_b23384929d0ed4b9c233c990f33ed2d162c956143a16dad359305e815b755752_prof);

        
        $__internal_573b0773efe05d0d45938ff20787f2a330242c3cdb918686e3d41b893f55cc97->leave($__internal_573b0773efe05d0d45938ff20787f2a330242c3cdb918686e3d41b893f55cc97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac10af95d3f742fc4bf19d6210698d0a8e21daf7969ebdf3ac1e58f0c280d689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac10af95d3f742fc4bf19d6210698d0a8e21daf7969ebdf3ac1e58f0c280d689->enter($__internal_ac10af95d3f742fc4bf19d6210698d0a8e21daf7969ebdf3ac1e58f0c280d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_693a3087424774f650ad2893d2dfe22a64a376a58225f5f56c044d62ba225398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693a3087424774f650ad2893d2dfe22a64a376a58225f5f56c044d62ba225398->enter($__internal_693a3087424774f650ad2893d2dfe22a64a376a58225f5f56c044d62ba225398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horario</h1>

    <table>
        <tbody>
            <tr>
                <th>Inicio</th>
                <td>";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["horario"]) || array_key_exists("horario", $context) ? $context["horario"] : (function () { throw new Twig_Error_Runtime('Variable "horario" does not exist.', 10, $this->getSourceContext()); })()), "inicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["horario"]) || array_key_exists("horario", $context) ? $context["horario"] : (function () { throw new Twig_Error_Runtime('Variable "horario" does not exist.', 10, $this->getSourceContext()); })()), "inicio", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fin</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["horario"]) || array_key_exists("horario", $context) ? $context["horario"] : (function () { throw new Twig_Error_Runtime('Variable "horario" does not exist.', 14, $this->getSourceContext()); })()), "fin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["horario"]) || array_key_exists("horario", $context) ? $context["horario"] : (function () { throw new Twig_Error_Runtime('Variable "horario" does not exist.', 14, $this->getSourceContext()); })()), "fin", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idhorario</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["horario"]) || array_key_exists("horario", $context) ? $context["horario"] : (function () { throw new Twig_Error_Runtime('Variable "horario" does not exist.', 18, $this->getSourceContext()); })()), "idhorario", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_edit", array("idhorario" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["horario"]) || array_key_exists("horario", $context) ? $context["horario"] : (function () { throw new Twig_Error_Runtime('Variable "horario" does not exist.', 28, $this->getSourceContext()); })()), "idhorario", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_693a3087424774f650ad2893d2dfe22a64a376a58225f5f56c044d62ba225398->leave($__internal_693a3087424774f650ad2893d2dfe22a64a376a58225f5f56c044d62ba225398_prof);

        
        $__internal_ac10af95d3f742fc4bf19d6210698d0a8e21daf7969ebdf3ac1e58f0c280d689->leave($__internal_ac10af95d3f742fc4bf19d6210698d0a8e21daf7969ebdf3ac1e58f0c280d689_prof);

    }

    public function getTemplateName()
    {
        return "horario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  97 => 31,  91 => 28,  85 => 25,  75 => 18,  66 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Horario</h1>

    <table>
        <tbody>
            <tr>
                <th>Inicio</th>
                <td>{% if horario.inicio %}{{ horario.inicio|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fin</th>
                <td>{% if horario.fin %}{{ horario.fin|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Idhorario</th>
                <td>{{ horario.idhorario }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('horario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('horario_edit', { 'idhorario': horario.idhorario }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "horario/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\horario\\show.html.twig");
    }
}

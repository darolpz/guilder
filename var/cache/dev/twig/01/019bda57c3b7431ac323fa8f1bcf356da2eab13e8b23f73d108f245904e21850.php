<?php

/* :horario:show.html.twig */
class __TwigTemplate_57507f89091340dd0ffd4f08e6ae970c8eda1ef9dc244b37f963b49094f82d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":horario:show.html.twig", 1);
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
        $__internal_66c11abf35bc909794dc972fc8f122086d4833bbef3a35b24c0863bcfa0ec8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c11abf35bc909794dc972fc8f122086d4833bbef3a35b24c0863bcfa0ec8dd->enter($__internal_66c11abf35bc909794dc972fc8f122086d4833bbef3a35b24c0863bcfa0ec8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:show.html.twig"));

        $__internal_06538d12b7cc7a07fd9c35f8ebf73ea779976f2e3129c12791192475922b6c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06538d12b7cc7a07fd9c35f8ebf73ea779976f2e3129c12791192475922b6c82->enter($__internal_06538d12b7cc7a07fd9c35f8ebf73ea779976f2e3129c12791192475922b6c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c11abf35bc909794dc972fc8f122086d4833bbef3a35b24c0863bcfa0ec8dd->leave($__internal_66c11abf35bc909794dc972fc8f122086d4833bbef3a35b24c0863bcfa0ec8dd_prof);

        
        $__internal_06538d12b7cc7a07fd9c35f8ebf73ea779976f2e3129c12791192475922b6c82->leave($__internal_06538d12b7cc7a07fd9c35f8ebf73ea779976f2e3129c12791192475922b6c82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e13e5ca5b6cca3433a12c7d1055c0841615e2864a5c5a3e4f955e9fdeab26d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e13e5ca5b6cca3433a12c7d1055c0841615e2864a5c5a3e4f955e9fdeab26d6->enter($__internal_2e13e5ca5b6cca3433a12c7d1055c0841615e2864a5c5a3e4f955e9fdeab26d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dc5f7083914743826cc32d763e595fc9d1f30edcc7100773d6918a415e5c127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc5f7083914743826cc32d763e595fc9d1f30edcc7100773d6918a415e5c127->enter($__internal_3dc5f7083914743826cc32d763e595fc9d1f30edcc7100773d6918a415e5c127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3dc5f7083914743826cc32d763e595fc9d1f30edcc7100773d6918a415e5c127->leave($__internal_3dc5f7083914743826cc32d763e595fc9d1f30edcc7100773d6918a415e5c127_prof);

        
        $__internal_2e13e5ca5b6cca3433a12c7d1055c0841615e2864a5c5a3e4f955e9fdeab26d6->leave($__internal_2e13e5ca5b6cca3433a12c7d1055c0841615e2864a5c5a3e4f955e9fdeab26d6_prof);

    }

    public function getTemplateName()
    {
        return ":horario:show.html.twig";
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
", ":horario:show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/horario/show.html.twig");
    }
}

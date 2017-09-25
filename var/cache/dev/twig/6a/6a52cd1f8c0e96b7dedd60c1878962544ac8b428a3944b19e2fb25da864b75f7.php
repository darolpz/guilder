<?php

/* :comision:show.html.twig */
class __TwigTemplate_e3bf4038fb4a2e8343389cf47d1c9e21e17dc9fd137a86689a8f5dfdbbc339d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comision:show.html.twig", 1);
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
        $__internal_85c7314b7c3ac9f5950ad2fe56c1a5f72664a47a15b62582bb9657b81e23ff93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c7314b7c3ac9f5950ad2fe56c1a5f72664a47a15b62582bb9657b81e23ff93->enter($__internal_85c7314b7c3ac9f5950ad2fe56c1a5f72664a47a15b62582bb9657b81e23ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:show.html.twig"));

        $__internal_572b1e8c3bb7b5d0f182d66f128b52442dcb88591bedf11f58ad1f180f72dbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572b1e8c3bb7b5d0f182d66f128b52442dcb88591bedf11f58ad1f180f72dbdc->enter($__internal_572b1e8c3bb7b5d0f182d66f128b52442dcb88591bedf11f58ad1f180f72dbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c7314b7c3ac9f5950ad2fe56c1a5f72664a47a15b62582bb9657b81e23ff93->leave($__internal_85c7314b7c3ac9f5950ad2fe56c1a5f72664a47a15b62582bb9657b81e23ff93_prof);

        
        $__internal_572b1e8c3bb7b5d0f182d66f128b52442dcb88591bedf11f58ad1f180f72dbdc->leave($__internal_572b1e8c3bb7b5d0f182d66f128b52442dcb88591bedf11f58ad1f180f72dbdc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9188666de23e1cac7c3556c2728d180ddc2d1c460533e712122fd8d2710bda3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9188666de23e1cac7c3556c2728d180ddc2d1c460533e712122fd8d2710bda3d->enter($__internal_9188666de23e1cac7c3556c2728d180ddc2d1c460533e712122fd8d2710bda3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc275dfff255833a5b44dd708787c9d4f6c731b5ce2b483894b611990a57923c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc275dfff255833a5b44dd708787c9d4f6c731b5ce2b483894b611990a57923c->enter($__internal_fc275dfff255833a5b44dd708787c9d4f6c731b5ce2b483894b611990a57923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision</h1>

    <table>
        <tbody>
            <tr>
                <th>Numero</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 10, $this->getSourceContext()); })()), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profesor</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 14, $this->getSourceContext()); })()), "profesor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuatrimestre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 18, $this->getSourceContext()); })()), "cuatrimestre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 22, $this->getSourceContext()); })()), "year", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcomision</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 26, $this->getSourceContext()); })()), "idcomision", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_edit", array("idcomision" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 36, $this->getSourceContext()); })()), "idcomision", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 39, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fc275dfff255833a5b44dd708787c9d4f6c731b5ce2b483894b611990a57923c->leave($__internal_fc275dfff255833a5b44dd708787c9d4f6c731b5ce2b483894b611990a57923c_prof);

        
        $__internal_9188666de23e1cac7c3556c2728d180ddc2d1c460533e712122fd8d2710bda3d->leave($__internal_9188666de23e1cac7c3556c2728d180ddc2d1c460533e712122fd8d2710bda3d_prof);

    }

    public function getTemplateName()
    {
        return ":comision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comision</h1>

    <table>
        <tbody>
            <tr>
                <th>Numero</th>
                <td>{{ comision.numero }}</td>
            </tr>
            <tr>
                <th>Profesor</th>
                <td>{{ comision.profesor }}</td>
            </tr>
            <tr>
                <th>Cuatrimestre</th>
                <td>{{ comision.cuatrimestre }}</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>{{ comision.year }}</td>
            </tr>
            <tr>
                <th>Idcomision</th>
                <td>{{ comision.idcomision }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comision_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('comision_edit', { 'idcomision': comision.idcomision }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":comision:show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/comision/show.html.twig");
    }
}

<?php

/* rol/show.html.twig */
class __TwigTemplate_9bf72a0ffa3799d4211cb4b1e7d026cb26e19ddbb4bf881c9d90141aa67deee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rol/show.html.twig", 1);
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
        $__internal_cedc1957ba95f769bae41eeb9ee05822d0a4df681fd7088f00f9cb8795487b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedc1957ba95f769bae41eeb9ee05822d0a4df681fd7088f00f9cb8795487b9a->enter($__internal_cedc1957ba95f769bae41eeb9ee05822d0a4df681fd7088f00f9cb8795487b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/show.html.twig"));

        $__internal_f2cb2211230292d9ed6309eee4c64e2c75cc87f82a050670dc30144fefa821a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cb2211230292d9ed6309eee4c64e2c75cc87f82a050670dc30144fefa821a2->enter($__internal_f2cb2211230292d9ed6309eee4c64e2c75cc87f82a050670dc30144fefa821a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedc1957ba95f769bae41eeb9ee05822d0a4df681fd7088f00f9cb8795487b9a->leave($__internal_cedc1957ba95f769bae41eeb9ee05822d0a4df681fd7088f00f9cb8795487b9a_prof);

        
        $__internal_f2cb2211230292d9ed6309eee4c64e2c75cc87f82a050670dc30144fefa821a2->leave($__internal_f2cb2211230292d9ed6309eee4c64e2c75cc87f82a050670dc30144fefa821a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f9629c4a2e8092c14c5cc2db51fdef416ba4d4b20c8ca75272c606ee69a753a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9629c4a2e8092c14c5cc2db51fdef416ba4d4b20c8ca75272c606ee69a753a->enter($__internal_4f9629c4a2e8092c14c5cc2db51fdef416ba4d4b20c8ca75272c606ee69a753a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13c548cf821507e65dc7694b287ca2b8b5916dca58f62233934dc5f46b259d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c548cf821507e65dc7694b287ca2b8b5916dca58f62233934dc5f46b259d46->enter($__internal_13c548cf821507e65dc7694b287ca2b8b5916dca58f62233934dc5f46b259d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rol</h1>

    <table>
        <tbody>
            <tr>
                <th>Rol</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new Twig_Error_Runtime('Variable "rol" does not exist.', 10, $this->getSourceContext()); })()), "rol", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idrol</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new Twig_Error_Runtime('Variable "rol" does not exist.', 14, $this->getSourceContext()); })()), "idrol", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_edit", array("idrol" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new Twig_Error_Runtime('Variable "rol" does not exist.', 24, $this->getSourceContext()); })()), "idrol", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 27, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_13c548cf821507e65dc7694b287ca2b8b5916dca58f62233934dc5f46b259d46->leave($__internal_13c548cf821507e65dc7694b287ca2b8b5916dca58f62233934dc5f46b259d46_prof);

        
        $__internal_4f9629c4a2e8092c14c5cc2db51fdef416ba4d4b20c8ca75272c606ee69a753a->leave($__internal_4f9629c4a2e8092c14c5cc2db51fdef416ba4d4b20c8ca75272c606ee69a753a_prof);

    }

    public function getTemplateName()
    {
        return "rol/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Rol</h1>

    <table>
        <tbody>
            <tr>
                <th>Rol</th>
                <td>{{ rol.rol }}</td>
            </tr>
            <tr>
                <th>Idrol</th>
                <td>{{ rol.idrol }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rol_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('rol_edit', { 'idrol': rol.idrol }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "rol/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\rol\\show.html.twig");
    }
}

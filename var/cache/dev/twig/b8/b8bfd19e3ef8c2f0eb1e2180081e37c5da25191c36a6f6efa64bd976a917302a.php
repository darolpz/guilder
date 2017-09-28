<?php

/* :rol:show.html.twig */
class __TwigTemplate_1f1e863173585f74a3fe2a429d4b1474fb2b734ac8401c92946deb4f08400b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rol:show.html.twig", 1);
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
        $__internal_3478441c1c002fc40a0f2babc13dcbb25e00247a696895804ca0a3d05b2f4e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3478441c1c002fc40a0f2babc13dcbb25e00247a696895804ca0a3d05b2f4e20->enter($__internal_3478441c1c002fc40a0f2babc13dcbb25e00247a696895804ca0a3d05b2f4e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:show.html.twig"));

        $__internal_7961ec0fd50fc7c4d42642734474b1f581223c281426569fa19e08f2b3a21c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7961ec0fd50fc7c4d42642734474b1f581223c281426569fa19e08f2b3a21c44->enter($__internal_7961ec0fd50fc7c4d42642734474b1f581223c281426569fa19e08f2b3a21c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3478441c1c002fc40a0f2babc13dcbb25e00247a696895804ca0a3d05b2f4e20->leave($__internal_3478441c1c002fc40a0f2babc13dcbb25e00247a696895804ca0a3d05b2f4e20_prof);

        
        $__internal_7961ec0fd50fc7c4d42642734474b1f581223c281426569fa19e08f2b3a21c44->leave($__internal_7961ec0fd50fc7c4d42642734474b1f581223c281426569fa19e08f2b3a21c44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa3d3e340b920c446e4828e7db9da0531347842df8a9d494471214afe708b558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3d3e340b920c446e4828e7db9da0531347842df8a9d494471214afe708b558->enter($__internal_fa3d3e340b920c446e4828e7db9da0531347842df8a9d494471214afe708b558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12b23e96cf453fa293ad65fa679e3428e07d3b619498e3e2b8c5258a85a6a354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b23e96cf453fa293ad65fa679e3428e07d3b619498e3e2b8c5258a85a6a354->enter($__internal_12b23e96cf453fa293ad65fa679e3428e07d3b619498e3e2b8c5258a85a6a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rol</h1>

    <table>
        <tbody>
            <tr>
                <th>Rol</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rol"] ?? $this->getContext($context, "rol")), "rol", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idrol</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rol"] ?? $this->getContext($context, "rol")), "idrol", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_edit", array("idrol" => $this->getAttribute(($context["rol"] ?? $this->getContext($context, "rol")), "idrol", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_12b23e96cf453fa293ad65fa679e3428e07d3b619498e3e2b8c5258a85a6a354->leave($__internal_12b23e96cf453fa293ad65fa679e3428e07d3b619498e3e2b8c5258a85a6a354_prof);

        
        $__internal_fa3d3e340b920c446e4828e7db9da0531347842df8a9d494471214afe708b558->leave($__internal_fa3d3e340b920c446e4828e7db9da0531347842df8a9d494471214afe708b558_prof);

    }

    public function getTemplateName()
    {
        return ":rol:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", ":rol:show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/rol/show.html.twig");
    }
}

<?php

/* rol/show.html.twig */
class __TwigTemplate_db21ee358c02e51c8386f6cdc79ca0ea17699644a58df30a849c3010fd219d87 extends Twig_Template
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
        $__internal_265b9b4045e07ace6af97695d2340fa406d63edcb013e7977066ec41f2016252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265b9b4045e07ace6af97695d2340fa406d63edcb013e7977066ec41f2016252->enter($__internal_265b9b4045e07ace6af97695d2340fa406d63edcb013e7977066ec41f2016252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/show.html.twig"));

        $__internal_f07d0e86a95163dfbcf18d5345ee5e9f51d4e764c113a5b01126caed21e31012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07d0e86a95163dfbcf18d5345ee5e9f51d4e764c113a5b01126caed21e31012->enter($__internal_f07d0e86a95163dfbcf18d5345ee5e9f51d4e764c113a5b01126caed21e31012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265b9b4045e07ace6af97695d2340fa406d63edcb013e7977066ec41f2016252->leave($__internal_265b9b4045e07ace6af97695d2340fa406d63edcb013e7977066ec41f2016252_prof);

        
        $__internal_f07d0e86a95163dfbcf18d5345ee5e9f51d4e764c113a5b01126caed21e31012->leave($__internal_f07d0e86a95163dfbcf18d5345ee5e9f51d4e764c113a5b01126caed21e31012_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c3f46cf6c9956bc6f23ed2547ade99f79783523a0e9c5874ef7894673fe40ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3f46cf6c9956bc6f23ed2547ade99f79783523a0e9c5874ef7894673fe40ba->enter($__internal_7c3f46cf6c9956bc6f23ed2547ade99f79783523a0e9c5874ef7894673fe40ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_850fd0fc6e383a0f2676e96ea9806ab98f9ff4cc20c3366fdd5ce948a46807e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850fd0fc6e383a0f2676e96ea9806ab98f9ff4cc20c3366fdd5ce948a46807e4->enter($__internal_850fd0fc6e383a0f2676e96ea9806ab98f9ff4cc20c3366fdd5ce948a46807e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_850fd0fc6e383a0f2676e96ea9806ab98f9ff4cc20c3366fdd5ce948a46807e4->leave($__internal_850fd0fc6e383a0f2676e96ea9806ab98f9ff4cc20c3366fdd5ce948a46807e4_prof);

        
        $__internal_7c3f46cf6c9956bc6f23ed2547ade99f79783523a0e9c5874ef7894673fe40ba->leave($__internal_7c3f46cf6c9956bc6f23ed2547ade99f79783523a0e9c5874ef7894673fe40ba_prof);

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
", "rol/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\rol\\show.html.twig");
    }
}

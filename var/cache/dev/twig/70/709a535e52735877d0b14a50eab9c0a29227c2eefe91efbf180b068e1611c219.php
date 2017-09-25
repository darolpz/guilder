<?php

/* comision/index.html.twig */
class __TwigTemplate_74d509ce42cc5779c854a5b2e151b8b066e7cdd253d1a55b44c96afabf3a96a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comision/index.html.twig", 1);
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
        $__internal_7c3847ef253642b93f8de103dde8f74091557c018920b2c052b82d9939a0e719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3847ef253642b93f8de103dde8f74091557c018920b2c052b82d9939a0e719->enter($__internal_7c3847ef253642b93f8de103dde8f74091557c018920b2c052b82d9939a0e719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/index.html.twig"));

        $__internal_fb3590e307c15971c922bdc127588cc3eb58117ed6698a3f9f723a8c87275b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3590e307c15971c922bdc127588cc3eb58117ed6698a3f9f723a8c87275b48->enter($__internal_fb3590e307c15971c922bdc127588cc3eb58117ed6698a3f9f723a8c87275b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c3847ef253642b93f8de103dde8f74091557c018920b2c052b82d9939a0e719->leave($__internal_7c3847ef253642b93f8de103dde8f74091557c018920b2c052b82d9939a0e719_prof);

        
        $__internal_fb3590e307c15971c922bdc127588cc3eb58117ed6698a3f9f723a8c87275b48->leave($__internal_fb3590e307c15971c922bdc127588cc3eb58117ed6698a3f9f723a8c87275b48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f27cf4540286aa18cbb648faca081f43132d273fbf4b793c769b82fb11caa38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f27cf4540286aa18cbb648faca081f43132d273fbf4b793c769b82fb11caa38->enter($__internal_6f27cf4540286aa18cbb648faca081f43132d273fbf4b793c769b82fb11caa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10f3e5cf47d73e668899d693f53c00caaad023e340f503305fbdac8b5e405395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f3e5cf47d73e668899d693f53c00caaad023e340f503305fbdac8b5e405395->enter($__internal_10f3e5cf47d73e668899d693f53c00caaad023e340f503305fbdac8b5e405395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comisions list</h1>

    <table>
        <thead>
            <tr>
                <th>Numero</th>
                <th>Profesor</th>
                <th>Cuatrimestre</th>
                <th>Year</th>
                <th>Idcomision</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comisions"]) || array_key_exists("comisions", $context) ? $context["comisions"] : (function () { throw new Twig_Error_Runtime('Variable "comisions" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_show", array("idcomision" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comision"], "idcomision", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comision"], "numero", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comision"], "profesor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comision"], "cuatrimestre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comision"], "year", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comision"], "idcomision", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_show", array("idcomision" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comision"], "idcomision", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_edit", array("idcomision" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comision"], "idcomision", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_new");
        echo "\">Create a new comision</a>
        </li>
    </ul>
";
        
        $__internal_10f3e5cf47d73e668899d693f53c00caaad023e340f503305fbdac8b5e405395->leave($__internal_10f3e5cf47d73e668899d693f53c00caaad023e340f503305fbdac8b5e405395_prof);

        
        $__internal_6f27cf4540286aa18cbb648faca081f43132d273fbf4b793c769b82fb11caa38->leave($__internal_6f27cf4540286aa18cbb648faca081f43132d273fbf4b793c769b82fb11caa38_prof);

    }

    public function getTemplateName()
    {
        return "comision/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comisions list</h1>

    <table>
        <thead>
            <tr>
                <th>Numero</th>
                <th>Profesor</th>
                <th>Cuatrimestre</th>
                <th>Year</th>
                <th>Idcomision</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for comision in comisions %}
            <tr>
                <td><a href=\"{{ path('comision_show', { 'idcomision': comision.idcomision }) }}\">{{ comision.numero }}</a></td>
                <td>{{ comision.profesor }}</td>
                <td>{{ comision.cuatrimestre }}</td>
                <td>{{ comision.year }}</td>
                <td>{{ comision.idcomision }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('comision_show', { 'idcomision': comision.idcomision }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('comision_edit', { 'idcomision': comision.idcomision }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comision_new') }}\">Create a new comision</a>
        </li>
    </ul>
{% endblock %}
", "comision/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\comision\\index.html.twig");
    }
}

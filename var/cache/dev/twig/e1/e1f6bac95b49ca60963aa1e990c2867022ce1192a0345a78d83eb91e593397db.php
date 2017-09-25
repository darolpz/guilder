<?php

/* :comision:index.html.twig */
class __TwigTemplate_ce197d80d79ebba7d5cc9c839923e1625eb9ca7976f9d3da35f37d32f87e8bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comision:index.html.twig", 1);
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
        $__internal_e98b3cc8e8d9a6dd9b564cd3228436f4ed31f261cfb0142247502cf219be89f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98b3cc8e8d9a6dd9b564cd3228436f4ed31f261cfb0142247502cf219be89f9->enter($__internal_e98b3cc8e8d9a6dd9b564cd3228436f4ed31f261cfb0142247502cf219be89f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:index.html.twig"));

        $__internal_24891d8f04f21c8a9cedcfc7353c08ea3747bf1ca355d0f6f0a7deb919a851d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24891d8f04f21c8a9cedcfc7353c08ea3747bf1ca355d0f6f0a7deb919a851d0->enter($__internal_24891d8f04f21c8a9cedcfc7353c08ea3747bf1ca355d0f6f0a7deb919a851d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e98b3cc8e8d9a6dd9b564cd3228436f4ed31f261cfb0142247502cf219be89f9->leave($__internal_e98b3cc8e8d9a6dd9b564cd3228436f4ed31f261cfb0142247502cf219be89f9_prof);

        
        $__internal_24891d8f04f21c8a9cedcfc7353c08ea3747bf1ca355d0f6f0a7deb919a851d0->leave($__internal_24891d8f04f21c8a9cedcfc7353c08ea3747bf1ca355d0f6f0a7deb919a851d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d5b23b9b85afabff304fc0a58baa8ab93b8e20b6a5b6303d6f84b24c9eae583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5b23b9b85afabff304fc0a58baa8ab93b8e20b6a5b6303d6f84b24c9eae583->enter($__internal_0d5b23b9b85afabff304fc0a58baa8ab93b8e20b6a5b6303d6f84b24c9eae583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b222c7fe08e6b62731dd52b912afe6fb8298a744e49ec02d1e0ff68b7d074101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b222c7fe08e6b62731dd52b912afe6fb8298a744e49ec02d1e0ff68b7d074101->enter($__internal_b222c7fe08e6b62731dd52b912afe6fb8298a744e49ec02d1e0ff68b7d074101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b222c7fe08e6b62731dd52b912afe6fb8298a744e49ec02d1e0ff68b7d074101->leave($__internal_b222c7fe08e6b62731dd52b912afe6fb8298a744e49ec02d1e0ff68b7d074101_prof);

        
        $__internal_0d5b23b9b85afabff304fc0a58baa8ab93b8e20b6a5b6303d6f84b24c9eae583->leave($__internal_0d5b23b9b85afabff304fc0a58baa8ab93b8e20b6a5b6303d6f84b24c9eae583_prof);

    }

    public function getTemplateName()
    {
        return ":comision:index.html.twig";
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
", ":comision:index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/comision/index.html.twig");
    }
}

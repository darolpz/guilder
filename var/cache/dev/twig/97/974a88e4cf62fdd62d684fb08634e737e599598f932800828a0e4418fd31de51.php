<?php

/* :comision:index.html.twig */
class __TwigTemplate_26778977d4cd8d5388937389488aa73db568d7a3bb20ffc1c160b067ef56cf03 extends Twig_Template
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
        $__internal_01f4183a294c207353f7d085d6419f6290cebe695914301a458a68d30b045c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f4183a294c207353f7d085d6419f6290cebe695914301a458a68d30b045c57->enter($__internal_01f4183a294c207353f7d085d6419f6290cebe695914301a458a68d30b045c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:index.html.twig"));

        $__internal_9a0d247fac5b65ddb92102a25d34716f7ba63d5fddf75b2466c801a127697675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0d247fac5b65ddb92102a25d34716f7ba63d5fddf75b2466c801a127697675->enter($__internal_9a0d247fac5b65ddb92102a25d34716f7ba63d5fddf75b2466c801a127697675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f4183a294c207353f7d085d6419f6290cebe695914301a458a68d30b045c57->leave($__internal_01f4183a294c207353f7d085d6419f6290cebe695914301a458a68d30b045c57_prof);

        
        $__internal_9a0d247fac5b65ddb92102a25d34716f7ba63d5fddf75b2466c801a127697675->leave($__internal_9a0d247fac5b65ddb92102a25d34716f7ba63d5fddf75b2466c801a127697675_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_795936ceabbdcab01d63322cab8a3e560c0abcff576da5989bcc5f801ce243c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795936ceabbdcab01d63322cab8a3e560c0abcff576da5989bcc5f801ce243c3->enter($__internal_795936ceabbdcab01d63322cab8a3e560c0abcff576da5989bcc5f801ce243c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bf9e28dacb200fb6e3eb18c4980d4f4a6db094d4a24e59bdb7d3fbd14e8c1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf9e28dacb200fb6e3eb18c4980d4f4a6db094d4a24e59bdb7d3fbd14e8c1a7->enter($__internal_6bf9e28dacb200fb6e3eb18c4980d4f4a6db094d4a24e59bdb7d3fbd14e8c1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comisions list</h1>

    <table>
        <thead>
            <tr>
\t\t\t\t<th>Materia</th>
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comisions"] ?? $this->getContext($context, "comisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 20
            echo "            <tr>
\t\t\t\t <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "materiamateria", array()), "html", null, true);
            echo " </td>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_show", array("idcomision" => $this->getAttribute($context["comision"], "idcomision", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "numero", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "profesor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "cuatrimestre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "year", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "idcomision", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_show", array("idcomision" => $this->getAttribute($context["comision"], "idcomision", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_edit", array("idcomision" => $this->getAttribute($context["comision"], "idcomision", array()))), "html", null, true);
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
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_new");
        echo "\">Create a new comision</a>
        </li>
    </ul>
";
        
        $__internal_6bf9e28dacb200fb6e3eb18c4980d4f4a6db094d4a24e59bdb7d3fbd14e8c1a7->leave($__internal_6bf9e28dacb200fb6e3eb18c4980d4f4a6db094d4a24e59bdb7d3fbd14e8c1a7_prof);

        
        $__internal_795936ceabbdcab01d63322cab8a3e560c0abcff576da5989bcc5f801ce243c3->leave($__internal_795936ceabbdcab01d63322cab8a3e560c0abcff576da5989bcc5f801ce243c3_prof);

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
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  77 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comisions list</h1>

    <table>
        <thead>
            <tr>
\t\t\t\t<th>Materia</th>
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
\t\t\t\t <td>{{comision.materiamateria}} </td>
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

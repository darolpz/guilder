<?php

/* horario/index.html.twig */
class __TwigTemplate_7ff269aacdb5d3009a3d78f31f7e91639f02266794709ab4045fe31e02a065a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horario/index.html.twig", 1);
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
        $__internal_195be35e76b2ddfaa9d7630f792af3ef79862350052fc91424e34972f0feffe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195be35e76b2ddfaa9d7630f792af3ef79862350052fc91424e34972f0feffe4->enter($__internal_195be35e76b2ddfaa9d7630f792af3ef79862350052fc91424e34972f0feffe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/index.html.twig"));

        $__internal_196cd763b5b5a883fb9573d1886d13e61c69259f88bfd05eb5fcad6a70c3d8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196cd763b5b5a883fb9573d1886d13e61c69259f88bfd05eb5fcad6a70c3d8b1->enter($__internal_196cd763b5b5a883fb9573d1886d13e61c69259f88bfd05eb5fcad6a70c3d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_195be35e76b2ddfaa9d7630f792af3ef79862350052fc91424e34972f0feffe4->leave($__internal_195be35e76b2ddfaa9d7630f792af3ef79862350052fc91424e34972f0feffe4_prof);

        
        $__internal_196cd763b5b5a883fb9573d1886d13e61c69259f88bfd05eb5fcad6a70c3d8b1->leave($__internal_196cd763b5b5a883fb9573d1886d13e61c69259f88bfd05eb5fcad6a70c3d8b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8366175da623fd3679e1d4a3d6139523eed60d7b3bc5594b1381bde42ab243ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8366175da623fd3679e1d4a3d6139523eed60d7b3bc5594b1381bde42ab243ba->enter($__internal_8366175da623fd3679e1d4a3d6139523eed60d7b3bc5594b1381bde42ab243ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13f833d1eb41e12fad907b087cdb7d5a5afcc7e61ead81318b47beedf31505b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f833d1eb41e12fad907b087cdb7d5a5afcc7e61ead81318b47beedf31505b5->enter($__internal_13f833d1eb41e12fad907b087cdb7d5a5afcc7e61ead81318b47beedf31505b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Idhorario</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) || array_key_exists("horarios", $context) ? $context["horarios"] : (function () { throw new Twig_Error_Runtime('Variable "horarios" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_show", array("idhorario" => twig_get_attribute($this->env, $this->getSourceContext(), $context["horario"], "idhorario", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["horario"], "inicio", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["horario"], "fin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["horario"], "fin", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["horario"], "idhorario", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_show", array("idhorario" => twig_get_attribute($this->env, $this->getSourceContext(), $context["horario"], "idhorario", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_edit", array("idhorario" => twig_get_attribute($this->env, $this->getSourceContext(), $context["horario"], "idhorario", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_new");
        echo "\">Create a new horario</a>
        </li>
    </ul>
";
        
        $__internal_13f833d1eb41e12fad907b087cdb7d5a5afcc7e61ead81318b47beedf31505b5->leave($__internal_13f833d1eb41e12fad907b087cdb7d5a5afcc7e61ead81318b47beedf31505b5_prof);

        
        $__internal_8366175da623fd3679e1d4a3d6139523eed60d7b3bc5594b1381bde42ab243ba->leave($__internal_8366175da623fd3679e1d4a3d6139523eed60d7b3bc5594b1381bde42ab243ba_prof);

    }

    public function getTemplateName()
    {
        return "horario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Horarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Idhorario</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for horario in horarios %}
            <tr>
                <td><a href=\"{{ path('horario_show', { 'idhorario': horario.idhorario }) }}\">{{ horario.inicio }}</a></td>
                <td>{% if horario.fin %}{{ horario.fin|date('H:i:s') }}{% endif %}</td>
                <td>{{ horario.idhorario }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('horario_show', { 'idhorario': horario.idhorario }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('horario_edit', { 'idhorario': horario.idhorario }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('horario_new') }}\">Create a new horario</a>
        </li>
    </ul>
{% endblock %}
", "horario/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\horario\\index.html.twig");
    }
}

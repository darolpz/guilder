<?php

/* :horario:index.html.twig */
class __TwigTemplate_1e4a0d331d618d4a6e9213187eb95f22d4081aefa0b5dd236f324b2e79f79f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":horario:index.html.twig", 1);
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
        $__internal_8c190e87b3fc8823edaa13a9f595d919ad0f07ab19dfeb5902f5ce32a60b1d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c190e87b3fc8823edaa13a9f595d919ad0f07ab19dfeb5902f5ce32a60b1d37->enter($__internal_8c190e87b3fc8823edaa13a9f595d919ad0f07ab19dfeb5902f5ce32a60b1d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:index.html.twig"));

        $__internal_4c6c63de6b59ec5db87e3db163fcc9599580ba44f90de00b6c4f27fb6eec6ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6c63de6b59ec5db87e3db163fcc9599580ba44f90de00b6c4f27fb6eec6ed3->enter($__internal_4c6c63de6b59ec5db87e3db163fcc9599580ba44f90de00b6c4f27fb6eec6ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c190e87b3fc8823edaa13a9f595d919ad0f07ab19dfeb5902f5ce32a60b1d37->leave($__internal_8c190e87b3fc8823edaa13a9f595d919ad0f07ab19dfeb5902f5ce32a60b1d37_prof);

        
        $__internal_4c6c63de6b59ec5db87e3db163fcc9599580ba44f90de00b6c4f27fb6eec6ed3->leave($__internal_4c6c63de6b59ec5db87e3db163fcc9599580ba44f90de00b6c4f27fb6eec6ed3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb41a56bf9b8f1edd9a436518e27e662b219aab18843112490f119af71818cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb41a56bf9b8f1edd9a436518e27e662b219aab18843112490f119af71818cb9->enter($__internal_eb41a56bf9b8f1edd9a436518e27e662b219aab18843112490f119af71818cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d34014ba0084aaca285ec4e8f84f3e985349127973ea5a019e2e4444e88791bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34014ba0084aaca285ec4e8f84f3e985349127973ea5a019e2e4444e88791bb->enter($__internal_d34014ba0084aaca285ec4e8f84f3e985349127973ea5a019e2e4444e88791bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Inicio</th>
                <th>Fin</th>
\t\t\t\t<th>Materia</th>
\t\t\t\t<th>Profesor</th>
                <th>Idhorario</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horarios"] ?? $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "inicio", array()), "H:i"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["horario"], "fin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "fin", array()), "H:i"), "html", null, true);
            }
            echo "</td>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "comisioncomision", array()), "html", null, true);
            echo "\t</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horario"], "comisioncomision", array()), "profesor", array()), "html", null, true);
            echo "\t</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "idhorario", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_show", array("idhorario" => $this->getAttribute($context["horario"], "idhorario", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_edit", array("idhorario" => $this->getAttribute($context["horario"], "idhorario", array()))), "html", null, true);
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
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_new");
        echo "\">Create a new horario</a>
        </li>
    </ul>
";
        
        $__internal_d34014ba0084aaca285ec4e8f84f3e985349127973ea5a019e2e4444e88791bb->leave($__internal_d34014ba0084aaca285ec4e8f84f3e985349127973ea5a019e2e4444e88791bb_prof);

        
        $__internal_eb41a56bf9b8f1edd9a436518e27e662b219aab18843112490f119af71818cb9->leave($__internal_eb41a56bf9b8f1edd9a436518e27e662b219aab18843112490f119af71818cb9_prof);

    }

    public function getTemplateName()
    {
        return ":horario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  76 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Horarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Inicio</th>
                <th>Fin</th>
\t\t\t\t<th>Materia</th>
\t\t\t\t<th>Profesor</th>
                <th>Idhorario</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for horario in horarios %}
            <tr>
                <td>{{ horario.inicio|date('H:i') }}</a></td>
                <td>{% if horario.fin %}{{ horario.fin|date('H:i') }}{% endif %}</td>
\t\t\t\t<td>{{horario.comisioncomision}}\t</td>
\t\t\t\t<td>{{horario.comisioncomision.profesor}}\t</td>
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
", ":horario:index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/horario/index.html.twig");
    }
}

<?php

/* :horario:index.html.twig */
class __TwigTemplate_7c6089bbc1b7dadb8ff13891b89c907ba9876163118e9c1089789d01878c6e36 extends Twig_Template
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
        $__internal_854bb6bb0df6cc338f56cbcf69ee944239274ce2449e047fb7c2b7296a15fc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854bb6bb0df6cc338f56cbcf69ee944239274ce2449e047fb7c2b7296a15fc75->enter($__internal_854bb6bb0df6cc338f56cbcf69ee944239274ce2449e047fb7c2b7296a15fc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:index.html.twig"));

        $__internal_95d4a2f8c9da2379d910ad0acf5efa9d8e8873becb5e6fd6f18738bc8664c902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d4a2f8c9da2379d910ad0acf5efa9d8e8873becb5e6fd6f18738bc8664c902->enter($__internal_95d4a2f8c9da2379d910ad0acf5efa9d8e8873becb5e6fd6f18738bc8664c902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854bb6bb0df6cc338f56cbcf69ee944239274ce2449e047fb7c2b7296a15fc75->leave($__internal_854bb6bb0df6cc338f56cbcf69ee944239274ce2449e047fb7c2b7296a15fc75_prof);

        
        $__internal_95d4a2f8c9da2379d910ad0acf5efa9d8e8873becb5e6fd6f18738bc8664c902->leave($__internal_95d4a2f8c9da2379d910ad0acf5efa9d8e8873becb5e6fd6f18738bc8664c902_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ab8fcd3e86e4c3f44f6ca64feb8a085b389e3df0e808deaa49ac4bf5d4fa3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab8fcd3e86e4c3f44f6ca64feb8a085b389e3df0e808deaa49ac4bf5d4fa3d0->enter($__internal_1ab8fcd3e86e4c3f44f6ca64feb8a085b389e3df0e808deaa49ac4bf5d4fa3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e2d7f8bfb8012c670ea9b4c7d924fe7e269ea532f2a7cb8793c787d8934ea59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2d7f8bfb8012c670ea9b4c7d924fe7e269ea532f2a7cb8793c787d8934ea59->enter($__internal_2e2d7f8bfb8012c670ea9b4c7d924fe7e269ea532f2a7cb8793c787d8934ea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e2d7f8bfb8012c670ea9b4c7d924fe7e269ea532f2a7cb8793c787d8934ea59->leave($__internal_2e2d7f8bfb8012c670ea9b4c7d924fe7e269ea532f2a7cb8793c787d8934ea59_prof);

        
        $__internal_1ab8fcd3e86e4c3f44f6ca64feb8a085b389e3df0e808deaa49ac4bf5d4fa3d0->leave($__internal_1ab8fcd3e86e4c3f44f6ca64feb8a085b389e3df0e808deaa49ac4bf5d4fa3d0_prof);

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
", ":horario:index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/horario/index.html.twig");
    }
}

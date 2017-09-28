<?php

/* comision/filtrar.html.twig */
class __TwigTemplate_7cdee13c3d91d651cb86014097d1e4aedbc12610e98e273ecef6e0cbce37f37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comision/filtrar.html.twig", 1);
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
        $__internal_dd6d4d940d4f24d75f8f0c669c70e0b80f9858674bc2a73cf827de19a94e95ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6d4d940d4f24d75f8f0c669c70e0b80f9858674bc2a73cf827de19a94e95ba->enter($__internal_dd6d4d940d4f24d75f8f0c669c70e0b80f9858674bc2a73cf827de19a94e95ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/filtrar.html.twig"));

        $__internal_ad47b2272443927f509a13207c541622e8d328936038fb4dc47c961e6b55b7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad47b2272443927f509a13207c541622e8d328936038fb4dc47c961e6b55b7ef->enter($__internal_ad47b2272443927f509a13207c541622e8d328936038fb4dc47c961e6b55b7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/filtrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd6d4d940d4f24d75f8f0c669c70e0b80f9858674bc2a73cf827de19a94e95ba->leave($__internal_dd6d4d940d4f24d75f8f0c669c70e0b80f9858674bc2a73cf827de19a94e95ba_prof);

        
        $__internal_ad47b2272443927f509a13207c541622e8d328936038fb4dc47c961e6b55b7ef->leave($__internal_ad47b2272443927f509a13207c541622e8d328936038fb4dc47c961e6b55b7ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d253261eb9a1b1c06d56864dfe85985afbdea01d020237edc42f14a58bde4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d253261eb9a1b1c06d56864dfe85985afbdea01d020237edc42f14a58bde4ea->enter($__internal_6d253261eb9a1b1c06d56864dfe85985afbdea01d020237edc42f14a58bde4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81e84602bc91b27b6492b48ad8acf99ff10208531d5543506b6b58f5243cf8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e84602bc91b27b6492b48ad8acf99ff10208531d5543506b6b58f5243cf8f3->enter($__internal_81e84602bc91b27b6492b48ad8acf99ff10208531d5543506b6b58f5243cf8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t

\t<table border=1 cellspacing=0 cellpadding=2 bordercolor=\"666633\">
        <thead>
            <tr>
                <th>Numero &nbsp</th>
                <th>Profesor &nbsp</th>
                <th>year &nbsp</th>
\t\t\t\t<th>dia &nbsp</th>
\t\t\t\t<th>hora inicio &nbsp</th>
\t\t\t\t<th>hora fin &nbsp</th>
            </tr>
        </thead>
\t\t <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comisions"] ?? $this->getContext($context, "comisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 23
            echo "\t  <tr>
        <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "numero", array()), "html", null, true);
            echo " &nbsp</td>
        <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "profesor", array()), "html", null, true);
            echo " &nbsp </td>
        <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "year", array()), "html", null, true);
            echo " &nbsp</td>
\t\t
\t\t

\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["horarios"] ?? $this->getContext($context, "horarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 31
                echo "\t\t";
                $context["var"] = twig_length_filter($this->env, $context["x"]);
                echo "\t
\t\t
\t\t
\t\t\t";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["x"]);
                foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                    echo "\t\t
\t\t\t\t";
                    // line 35
                    if (($this->getAttribute($context["comision"], "idcomision", array()) == $this->getAttribute($this->getAttribute($context["horario"], "comisioncomision", array()), "idcomision", array()))) {
                        // line 36
                        echo "
\t\t\t\t\t <td>";
                        // line 37
                        echo twig_escape_filter($this->env, ($context["var"] ?? $this->getContext($context, "var")), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "diadia", array()), "html", null, true);
                        echo "  &nbsp</td>
\t\t\t\t\t<td>";
                        // line 39
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "inicio", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td>
\t\t\t\t\t<td>";
                        // line 40
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "fin", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td> 
\t\t\t\t
\t\t\t\t
\t\t\t\t";
                    }
                    // line 44
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t
\t\t
       </tr>
\t   
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
\t
\t
\t
\t </tbody>
\t </table>
\t
    ";
        
        $__internal_81e84602bc91b27b6492b48ad8acf99ff10208531d5543506b6b58f5243cf8f3->leave($__internal_81e84602bc91b27b6492b48ad8acf99ff10208531d5543506b6b58f5243cf8f3_prof);

        
        $__internal_6d253261eb9a1b1c06d56864dfe85985afbdea01d020237edc42f14a58bde4ea->leave($__internal_6d253261eb9a1b1c06d56864dfe85985afbdea01d020237edc42f14a58bde4ea_prof);

    }

    public function getTemplateName()
    {
        return "comision/filtrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 55,  155 => 50,  145 => 45,  139 => 44,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  117 => 36,  115 => 35,  109 => 34,  102 => 31,  98 => 30,  91 => 26,  87 => 25,  83 => 24,  80 => 23,  76 => 22,  58 => 7,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}
\t

\t<table border=1 cellspacing=0 cellpadding=2 bordercolor=\"666633\">
        <thead>
            <tr>
                <th>Numero &nbsp</th>
                <th>Profesor &nbsp</th>
                <th>year &nbsp</th>
\t\t\t\t<th>dia &nbsp</th>
\t\t\t\t<th>hora inicio &nbsp</th>
\t\t\t\t<th>hora fin &nbsp</th>
            </tr>
        </thead>
\t\t <tbody>
    {% for comision in comisions %}
\t  <tr>
        <td> {{ comision.numero }} &nbsp</td>
        <td> {{ comision.profesor }} &nbsp </td>
        <td> {{ comision.year }} &nbsp</td>
\t\t
\t\t

\t\t{% for x in horarios %}
\t\t{% set var =x|length %}\t
\t\t
\t\t
\t\t\t{% for horario in x %}\t\t
\t\t\t\t{% if comision.idcomision==horario.comisioncomision.idcomision %}

\t\t\t\t\t <td>{{var}}</td>
\t\t\t\t\t<td>{{horario.diadia}}  &nbsp</td>
\t\t\t\t\t<td>{{horario.inicio|date('H:i')}} &nbsp</td>
\t\t\t\t\t<td>{{horario.fin|date('H:i')}} &nbsp</td> 
\t\t\t\t
\t\t\t\t
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t{% endfor %}
\t\t
\t\t
       </tr>
\t   
     {% endfor %}

\t
\t
\t
\t </tbody>
\t </table>
\t
    {% endblock %}", "comision/filtrar.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\comision\\filtrar.html.twig");
    }
}

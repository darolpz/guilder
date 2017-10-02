<?php

/* modulo/modulo2.html.twig */
class __TwigTemplate_7fe839a7bfe1b829a0d08638a9a30cba92140bc1a2becf6bb8b3ada48e2a7b07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modulo/modulo2.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73f264f8b1aaade65ff28856a8200300d4df706bb823db75c4e18a020b8d3ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f264f8b1aaade65ff28856a8200300d4df706bb823db75c4e18a020b8d3ad0->enter($__internal_73f264f8b1aaade65ff28856a8200300d4df706bb823db75c4e18a020b8d3ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo2.html.twig"));

        $__internal_bc12a2909e67ed9dcd5d937dfd878e8e24205b7517a088c14910d2ac3e18433c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc12a2909e67ed9dcd5d937dfd878e8e24205b7517a088c14910d2ac3e18433c->enter($__internal_bc12a2909e67ed9dcd5d937dfd878e8e24205b7517a088c14910d2ac3e18433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f264f8b1aaade65ff28856a8200300d4df706bb823db75c4e18a020b8d3ad0->leave($__internal_73f264f8b1aaade65ff28856a8200300d4df706bb823db75c4e18a020b8d3ad0_prof);

        
        $__internal_bc12a2909e67ed9dcd5d937dfd878e8e24205b7517a088c14910d2ac3e18433c->leave($__internal_bc12a2909e67ed9dcd5d937dfd878e8e24205b7517a088c14910d2ac3e18433c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb9016eae80d25c8988447434d98c9008d9a2ad1a178747f7e1c47bab7d3dab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9016eae80d25c8988447434d98c9008d9a2ad1a178747f7e1c47bab7d3dab4->enter($__internal_eb9016eae80d25c8988447434d98c9008d9a2ad1a178747f7e1c47bab7d3dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_185191664e899ae368c3ea214a2587987e5242d2377b1496108c02e43098b0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185191664e899ae368c3ea214a2587987e5242d2377b1496108c02e43098b0c0->enter($__internal_185191664e899ae368c3ea214a2587987e5242d2377b1496108c02e43098b0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder ";
        
        $__internal_185191664e899ae368c3ea214a2587987e5242d2377b1496108c02e43098b0c0->leave($__internal_185191664e899ae368c3ea214a2587987e5242d2377b1496108c02e43098b0c0_prof);

        
        $__internal_eb9016eae80d25c8988447434d98c9008d9a2ad1a178747f7e1c47bab7d3dab4->leave($__internal_eb9016eae80d25c8988447434d98c9008d9a2ad1a178747f7e1c47bab7d3dab4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d83c5ab330fcac3e686cd9544112bd9816d819da2fb70cca4afd256c5afcb40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d83c5ab330fcac3e686cd9544112bd9816d819da2fb70cca4afd256c5afcb40->enter($__internal_8d83c5ab330fcac3e686cd9544112bd9816d819da2fb70cca4afd256c5afcb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8efa6512a25fd8d3aa8267ec31b9e85df5a29e07ecd4ca18e42c85d5a65ae3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efa6512a25fd8d3aa8267ec31b9e85df5a29e07ecd4ca18e42c85d5a65ae3c0->enter($__internal_8efa6512a25fd8d3aa8267ec31b9e85df5a29e07ecd4ca18e42c85d5a65ae3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    <div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
    <h1 class=\"panel-title\">Materias historicas</h1>
    </div>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
       ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Submit\" />
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
   
    
\t<div class=\"panel-body\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Numero &nbsp</th>
                <th>Profesor &nbsp</th>
                <th>Año &nbsp</th>
                <th>Cuatrimestre &nbsp</th>
\t\t<th>dia &nbsp</th>
\t\t<th>hora inicio &nbsp</th>
\t\t<th>hora fin &nbsp</th>
            </tr>
        </thead>
\t<tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comisions"] ?? $this->getContext($context, "comisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 31
            echo "            <tr>
                <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "numero", array()), "html", null, true);
            echo " &nbsp</td>
                <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "profesor", array()), "html", null, true);
            echo " &nbsp </td>
                <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "year", array()), "html", null, true);
            echo " &nbsp</td>
                 <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "cuatrimestre", array()), "html", null, true);
            echo " &nbsp</td>
\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["horarios"] ?? $this->getContext($context, "horarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 37
                echo "                    ";
                $context["var"] = twig_length_filter($this->env, $context["x"]);
                echo "\t
                    ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["x"]);
                foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                    echo "\t\t
                        ";
                    // line 39
                    if (($this->getAttribute($context["comision"], "idcomision", array()) == $this->getAttribute($this->getAttribute($context["horario"], "comisioncomision", array()), "idcomision", array()))) {
                        // line 40
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "diadia", array()), "html", null, true);
                        echo "  &nbsp</td>
                            <td>";
                        // line 41
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "inicio", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td>
                            <td>";
                        // line 42
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "fin", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td> 
                        ";
                    }
                    // line 44
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </tr>\t   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
\t</tbody>
    </table>
        </div>
          </div>
";
        
        $__internal_8efa6512a25fd8d3aa8267ec31b9e85df5a29e07ecd4ca18e42c85d5a65ae3c0->leave($__internal_8efa6512a25fd8d3aa8267ec31b9e85df5a29e07ecd4ca18e42c85d5a65ae3c0_prof);

        
        $__internal_8d83c5ab330fcac3e686cd9544112bd9816d819da2fb70cca4afd256c5afcb40->leave($__internal_8d83c5ab330fcac3e686cd9544112bd9816d819da2fb70cca4afd256c5afcb40_prof);

    }

    public function getTemplateName()
    {
        return "modulo/modulo2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 48,  170 => 46,  158 => 44,  153 => 42,  149 => 41,  144 => 40,  142 => 39,  136 => 38,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  108 => 31,  104 => 30,  84 => 13,  79 => 11,  75 => 10,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %} Güilder {% endblock %}
{% block body %}
    
    <div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
    <h1 class=\"panel-title\">Materias historicas</h1>
    </div>
    {{ form_start(form) }}
       {{ form_widget(form) }}
        <input type=\"submit\" value=\"Submit\" />
    {{ form_end(form) }}
   
    
\t<div class=\"panel-body\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Numero &nbsp</th>
                <th>Profesor &nbsp</th>
                <th>Año &nbsp</th>
                <th>Cuatrimestre &nbsp</th>
\t\t<th>dia &nbsp</th>
\t\t<th>hora inicio &nbsp</th>
\t\t<th>hora fin &nbsp</th>
            </tr>
        </thead>
\t<tbody>
        {% for comision in comisions %}
            <tr>
                <td> {{ comision.numero }} &nbsp</td>
                <td> {{ comision.profesor }} &nbsp </td>
                <td> {{ comision.year }} &nbsp</td>
                 <td> {{ comision.cuatrimestre }} &nbsp</td>
\t\t{% for x in horarios %}
                    {% set var =x|length %}\t
                    {% for horario in x %}\t\t
                        {% if comision.idcomision==horario.comisioncomision.idcomision %}
                            <td>{{horario.diadia}}  &nbsp</td>
                            <td>{{horario.inicio|date('H:i')}} &nbsp</td>
                            <td>{{horario.fin|date('H:i')}} &nbsp</td> 
                        {% endif %}
                    {% endfor %}\t
\t\t{% endfor %}
            </tr>\t   
        {% endfor %}

\t</tbody>
    </table>
        </div>
          </div>
{% endblock %}", "modulo/modulo2.html.twig", "C:\\xampp\\htdocs\\repo\\app\\Resources\\views\\modulo\\modulo2.html.twig");
    }
}

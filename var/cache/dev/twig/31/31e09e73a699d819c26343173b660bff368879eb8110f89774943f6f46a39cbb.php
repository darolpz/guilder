<?php

/* :comision:filtrar.html.twig */
class __TwigTemplate_e682990ce94c51827297ea58cf5e71e87474d73d7c0f29050de781ada83155f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comision:filtrar.html.twig", 1);
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
        $__internal_8e8c84866eb54d0c4c60a85d679cb129ad8b1d07afc2b255d0a960fae9abea61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8c84866eb54d0c4c60a85d679cb129ad8b1d07afc2b255d0a960fae9abea61->enter($__internal_8e8c84866eb54d0c4c60a85d679cb129ad8b1d07afc2b255d0a960fae9abea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:filtrar.html.twig"));

        $__internal_dc4e50aa3383e826d5a4a8e0f943d34038663be44cf961efdd0513cad2b32378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4e50aa3383e826d5a4a8e0f943d34038663be44cf961efdd0513cad2b32378->enter($__internal_dc4e50aa3383e826d5a4a8e0f943d34038663be44cf961efdd0513cad2b32378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:filtrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8c84866eb54d0c4c60a85d679cb129ad8b1d07afc2b255d0a960fae9abea61->leave($__internal_8e8c84866eb54d0c4c60a85d679cb129ad8b1d07afc2b255d0a960fae9abea61_prof);

        
        $__internal_dc4e50aa3383e826d5a4a8e0f943d34038663be44cf961efdd0513cad2b32378->leave($__internal_dc4e50aa3383e826d5a4a8e0f943d34038663be44cf961efdd0513cad2b32378_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ced6979bb24683a3a007f5affe44736be87dec4bc076de0cbca73fe9f7a0a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ced6979bb24683a3a007f5affe44736be87dec4bc076de0cbca73fe9f7a0a4a->enter($__internal_5ced6979bb24683a3a007f5affe44736be87dec4bc076de0cbca73fe9f7a0a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c2809fb393c2232b4b09b31942a8736599108ceff0739f715ffa860372d8797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2809fb393c2232b4b09b31942a8736599108ceff0739f715ffa860372d8797->enter($__internal_9c2809fb393c2232b4b09b31942a8736599108ceff0739f715ffa860372d8797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c2809fb393c2232b4b09b31942a8736599108ceff0739f715ffa860372d8797->leave($__internal_9c2809fb393c2232b4b09b31942a8736599108ceff0739f715ffa860372d8797_prof);

        
        $__internal_5ced6979bb24683a3a007f5affe44736be87dec4bc076de0cbca73fe9f7a0a4a->leave($__internal_5ced6979bb24683a3a007f5affe44736be87dec4bc076de0cbca73fe9f7a0a4a_prof);

    }

    public function getTemplateName()
    {
        return ":comision:filtrar.html.twig";
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
    {% endblock %}", ":comision:filtrar.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/comision/filtrar.html.twig");
    }
}

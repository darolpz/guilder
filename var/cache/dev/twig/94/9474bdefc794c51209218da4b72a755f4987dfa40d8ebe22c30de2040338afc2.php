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
        $__internal_165512ec117784e04049c57f8268024c383085a1956a887994aeed0655eb9901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165512ec117784e04049c57f8268024c383085a1956a887994aeed0655eb9901->enter($__internal_165512ec117784e04049c57f8268024c383085a1956a887994aeed0655eb9901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo2.html.twig"));

        $__internal_f33ef08c58cef5eefb606afba0286a254571a3ce0e257137b8413db06f3928b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33ef08c58cef5eefb606afba0286a254571a3ce0e257137b8413db06f3928b8->enter($__internal_f33ef08c58cef5eefb606afba0286a254571a3ce0e257137b8413db06f3928b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165512ec117784e04049c57f8268024c383085a1956a887994aeed0655eb9901->leave($__internal_165512ec117784e04049c57f8268024c383085a1956a887994aeed0655eb9901_prof);

        
        $__internal_f33ef08c58cef5eefb606afba0286a254571a3ce0e257137b8413db06f3928b8->leave($__internal_f33ef08c58cef5eefb606afba0286a254571a3ce0e257137b8413db06f3928b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e225e4db7a028cc8d445f97c1f93fb92176fa632d0e60acb3495ed93680264fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e225e4db7a028cc8d445f97c1f93fb92176fa632d0e60acb3495ed93680264fe->enter($__internal_e225e4db7a028cc8d445f97c1f93fb92176fa632d0e60acb3495ed93680264fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ae0ca40c7ab44b2bbc365572bfed752f1cfabeea993ecff4c8f0dcb9be334dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae0ca40c7ab44b2bbc365572bfed752f1cfabeea993ecff4c8f0dcb9be334dc->enter($__internal_6ae0ca40c7ab44b2bbc365572bfed752f1cfabeea993ecff4c8f0dcb9be334dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder ";
        
        $__internal_6ae0ca40c7ab44b2bbc365572bfed752f1cfabeea993ecff4c8f0dcb9be334dc->leave($__internal_6ae0ca40c7ab44b2bbc365572bfed752f1cfabeea993ecff4c8f0dcb9be334dc_prof);

        
        $__internal_e225e4db7a028cc8d445f97c1f93fb92176fa632d0e60acb3495ed93680264fe->leave($__internal_e225e4db7a028cc8d445f97c1f93fb92176fa632d0e60acb3495ed93680264fe_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_43d68bb139a0d49e4b3b5796c0e066622ebcbbe5411da2dddbc988c10186f5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d68bb139a0d49e4b3b5796c0e066622ebcbbe5411da2dddbc988c10186f5f9->enter($__internal_43d68bb139a0d49e4b3b5796c0e066622ebcbbe5411da2dddbc988c10186f5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a218b378a985f66e386b31755728a84e136f085bfa4abfe7f469580feb66d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a218b378a985f66e386b31755728a84e136f085bfa4abfe7f469580feb66d0d->enter($__internal_2a218b378a985f66e386b31755728a84e136f085bfa4abfe7f469580feb66d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Materias historicas</h1>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
       ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Submit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t
    <table border=1 cellspacing=0 cellpadding=2 bordercolor=\"666633\">
        <thead>
            <tr>
                <th>Numero &nbsp</th>
                <th>Profesor &nbsp</th>
                <th>year &nbsp</th>
\t\t<th>dia &nbsp</th>
\t\t<th>hora inicio &nbsp</th>
\t\t<th>hora fin &nbsp</th>
            </tr>
        </thead>
\t<tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comisions"] ?? $this->getContext($context, "comisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 24
            echo "            <tr>
                <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "numero", array()), "html", null, true);
            echo " &nbsp</td>
                <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "profesor", array()), "html", null, true);
            echo " &nbsp </td>
                <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "year", array()), "html", null, true);
            echo " &nbsp</td>
\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["horarios"] ?? $this->getContext($context, "horarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 29
                echo "                    ";
                $context["var"] = twig_length_filter($this->env, $context["x"]);
                echo "\t
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["x"]);
                foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                    echo "\t\t
                        ";
                    // line 31
                    if (($this->getAttribute($context["comision"], "idcomision", array()) == $this->getAttribute($this->getAttribute($context["horario"], "comisioncomision", array()), "idcomision", array()))) {
                        // line 32
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "diadia", array()), "html", null, true);
                        echo "  &nbsp</td>
                            <td>";
                        // line 33
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "inicio", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td>
                            <td>";
                        // line 34
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "fin", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td> 
                        ";
                    }
                    // line 36
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
            // line 38
            echo "            </tr>\t   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t</tbody>
    </table>
\t
";
        
        $__internal_2a218b378a985f66e386b31755728a84e136f085bfa4abfe7f469580feb66d0d->leave($__internal_2a218b378a985f66e386b31755728a84e136f085bfa4abfe7f469580feb66d0d_prof);

        
        $__internal_43d68bb139a0d49e4b3b5796c0e066622ebcbbe5411da2dddbc988c10186f5f9->leave($__internal_43d68bb139a0d49e4b3b5796c0e066622ebcbbe5411da2dddbc988c10186f5f9_prof);

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
        return array (  166 => 40,  159 => 38,  147 => 36,  142 => 34,  138 => 33,  133 => 32,  131 => 31,  125 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  101 => 24,  97 => 23,  80 => 9,  75 => 7,  71 => 6,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
    <h1>Materias historicas</h1>
    {{ form_start(form) }}
       {{ form_widget(form) }}
        <input type=\"submit\" value=\"Submit\" />
    {{ form_end(form) }}
\t
    <table border=1 cellspacing=0 cellpadding=2 bordercolor=\"666633\">
        <thead>
            <tr>
                <th>Numero &nbsp</th>
                <th>Profesor &nbsp</th>
                <th>year &nbsp</th>
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
\t
{% endblock %}", "modulo/modulo2.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo2.html.twig");
    }
}

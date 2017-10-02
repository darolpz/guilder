<?php

/* :horario:edit.html.twig */
class __TwigTemplate_792b4ea78fd17a258111b5cf29cb2fe4d48273db085ca86765d8e7b871e1a27e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":horario:edit.html.twig", 1);
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
        $__internal_9643c87471c56f1f3faa331d3227fbb53325cb88bd266b04a2049ebd640abae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9643c87471c56f1f3faa331d3227fbb53325cb88bd266b04a2049ebd640abae5->enter($__internal_9643c87471c56f1f3faa331d3227fbb53325cb88bd266b04a2049ebd640abae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:edit.html.twig"));

        $__internal_d1d7e5c21a65b06646e407ec11d7d12b660d1d03dc74a50f5da2fc32e18fe391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d7e5c21a65b06646e407ec11d7d12b660d1d03dc74a50f5da2fc32e18fe391->enter($__internal_d1d7e5c21a65b06646e407ec11d7d12b660d1d03dc74a50f5da2fc32e18fe391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9643c87471c56f1f3faa331d3227fbb53325cb88bd266b04a2049ebd640abae5->leave($__internal_9643c87471c56f1f3faa331d3227fbb53325cb88bd266b04a2049ebd640abae5_prof);

        
        $__internal_d1d7e5c21a65b06646e407ec11d7d12b660d1d03dc74a50f5da2fc32e18fe391->leave($__internal_d1d7e5c21a65b06646e407ec11d7d12b660d1d03dc74a50f5da2fc32e18fe391_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6391647a15965a3f97e9968743e2e7ac6a3eab861398f34a44f0673b78d4ad69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6391647a15965a3f97e9968743e2e7ac6a3eab861398f34a44f0673b78d4ad69->enter($__internal_6391647a15965a3f97e9968743e2e7ac6a3eab861398f34a44f0673b78d4ad69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7396bda8e1d9f39c80176e1776a80af1a61982c568eaa78127c668ef29b9c077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7396bda8e1d9f39c80176e1776a80af1a61982c568eaa78127c668ef29b9c077->enter($__internal_7396bda8e1d9f39c80176e1776a80af1a61982c568eaa78127c668ef29b9c077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horario edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7396bda8e1d9f39c80176e1776a80af1a61982c568eaa78127c668ef29b9c077->leave($__internal_7396bda8e1d9f39c80176e1776a80af1a61982c568eaa78127c668ef29b9c077_prof);

        
        $__internal_6391647a15965a3f97e9968743e2e7ac6a3eab861398f34a44f0673b78d4ad69->leave($__internal_6391647a15965a3f97e9968743e2e7ac6a3eab861398f34a44f0673b78d4ad69_prof);

    }

    public function getTemplateName()
    {
        return ":horario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Horario edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('horario_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":horario:edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/horario/edit.html.twig");
    }
}

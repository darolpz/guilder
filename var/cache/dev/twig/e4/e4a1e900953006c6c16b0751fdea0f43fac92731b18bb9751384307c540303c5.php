<?php

/* :comision:edit.html.twig */
class __TwigTemplate_e486cce9226eb795c07f998a24655c9e8843f92e7bb5e75de1a3d61215f62eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comision:edit.html.twig", 1);
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
        $__internal_971951cca4c4eda0b69ca740bcd84193b625f40f1c17aedaf24fd525fff52a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971951cca4c4eda0b69ca740bcd84193b625f40f1c17aedaf24fd525fff52a9e->enter($__internal_971951cca4c4eda0b69ca740bcd84193b625f40f1c17aedaf24fd525fff52a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:edit.html.twig"));

        $__internal_00a12f83b8782ddf63b9cdbab8f582e2a0ca74ab04e733756b3ebeb77277a155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a12f83b8782ddf63b9cdbab8f582e2a0ca74ab04e733756b3ebeb77277a155->enter($__internal_00a12f83b8782ddf63b9cdbab8f582e2a0ca74ab04e733756b3ebeb77277a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971951cca4c4eda0b69ca740bcd84193b625f40f1c17aedaf24fd525fff52a9e->leave($__internal_971951cca4c4eda0b69ca740bcd84193b625f40f1c17aedaf24fd525fff52a9e_prof);

        
        $__internal_00a12f83b8782ddf63b9cdbab8f582e2a0ca74ab04e733756b3ebeb77277a155->leave($__internal_00a12f83b8782ddf63b9cdbab8f582e2a0ca74ab04e733756b3ebeb77277a155_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa5bbc241255768eb6588f426edc1226bba76f805e458b1b3ea3fd4456bb3cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5bbc241255768eb6588f426edc1226bba76f805e458b1b3ea3fd4456bb3cbf->enter($__internal_fa5bbc241255768eb6588f426edc1226bba76f805e458b1b3ea3fd4456bb3cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29ee45f050f81ca48ebf1b03bde2bf9890a1691433bee18f15ad885ebe523bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ee45f050f81ca48ebf1b03bde2bf9890a1691433bee18f15ad885ebe523bcf->enter($__internal_29ee45f050f81ca48ebf1b03bde2bf9890a1691433bee18f15ad885ebe523bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_29ee45f050f81ca48ebf1b03bde2bf9890a1691433bee18f15ad885ebe523bcf->leave($__internal_29ee45f050f81ca48ebf1b03bde2bf9890a1691433bee18f15ad885ebe523bcf_prof);

        
        $__internal_fa5bbc241255768eb6588f426edc1226bba76f805e458b1b3ea3fd4456bb3cbf->leave($__internal_fa5bbc241255768eb6588f426edc1226bba76f805e458b1b3ea3fd4456bb3cbf_prof);

    }

    public function getTemplateName()
    {
        return ":comision:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comision edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('comision_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":comision:edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/comision/edit.html.twig");
    }
}

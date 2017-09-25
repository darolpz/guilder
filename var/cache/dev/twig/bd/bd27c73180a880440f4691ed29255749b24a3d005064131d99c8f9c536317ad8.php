<?php

/* :modulo:modulo2.html.twig */
class __TwigTemplate_68d559dce9357c3389d09c552f4f6776e79745563c049fc21f2be50d17a3516a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":modulo:modulo2.html.twig", 1);
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
        $__internal_6f71cd95762e2fab9ced89aae9182cdbe046be289db886116e87ed801816c13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f71cd95762e2fab9ced89aae9182cdbe046be289db886116e87ed801816c13a->enter($__internal_6f71cd95762e2fab9ced89aae9182cdbe046be289db886116e87ed801816c13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulo:modulo2.html.twig"));

        $__internal_ce174dcbd42be23656b007d55bf3cb36c56590a38ccaac722485b1dcd03d467f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce174dcbd42be23656b007d55bf3cb36c56590a38ccaac722485b1dcd03d467f->enter($__internal_ce174dcbd42be23656b007d55bf3cb36c56590a38ccaac722485b1dcd03d467f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulo:modulo2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f71cd95762e2fab9ced89aae9182cdbe046be289db886116e87ed801816c13a->leave($__internal_6f71cd95762e2fab9ced89aae9182cdbe046be289db886116e87ed801816c13a_prof);

        
        $__internal_ce174dcbd42be23656b007d55bf3cb36c56590a38ccaac722485b1dcd03d467f->leave($__internal_ce174dcbd42be23656b007d55bf3cb36c56590a38ccaac722485b1dcd03d467f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72d1c41b5722b813d3be02808f74d3f8eef50f5f39fbaefd35cd8973108416ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d1c41b5722b813d3be02808f74d3f8eef50f5f39fbaefd35cd8973108416ea->enter($__internal_72d1c41b5722b813d3be02808f74d3f8eef50f5f39fbaefd35cd8973108416ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38cb198a3bf20cda6e4e84665cd7405963aa6e2ac347f000fe7bfa8ad8f40235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cb198a3bf20cda6e4e84665cd7405963aa6e2ac347f000fe7bfa8ad8f40235->enter($__internal_38cb198a3bf20cda6e4e84665cd7405963aa6e2ac347f000fe7bfa8ad8f40235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Módulo 1 ";
        
        $__internal_38cb198a3bf20cda6e4e84665cd7405963aa6e2ac347f000fe7bfa8ad8f40235->leave($__internal_38cb198a3bf20cda6e4e84665cd7405963aa6e2ac347f000fe7bfa8ad8f40235_prof);

        
        $__internal_72d1c41b5722b813d3be02808f74d3f8eef50f5f39fbaefd35cd8973108416ea->leave($__internal_72d1c41b5722b813d3be02808f74d3f8eef50f5f39fbaefd35cd8973108416ea_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_03ff322384a575f608819f686125bb39a13e5e5166e110a31d0de5a54cb75c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ff322384a575f608819f686125bb39a13e5e5166e110a31d0de5a54cb75c1c->enter($__internal_03ff322384a575f608819f686125bb39a13e5e5166e110a31d0de5a54cb75c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0a46825ea38b18ac116dcb2c258604129cfce18975211981df1f0c263198e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a46825ea38b18ac116dcb2c258604129cfce18975211981df1f0c263198e82->enter($__internal_b0a46825ea38b18ac116dcb2c258604129cfce18975211981df1f0c263198e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal del módulo 1 </h2>

";
        
        $__internal_b0a46825ea38b18ac116dcb2c258604129cfce18975211981df1f0c263198e82->leave($__internal_b0a46825ea38b18ac116dcb2c258604129cfce18975211981df1f0c263198e82_prof);

        
        $__internal_03ff322384a575f608819f686125bb39a13e5e5166e110a31d0de5a54cb75c1c->leave($__internal_03ff322384a575f608819f686125bb39a13e5e5166e110a31d0de5a54cb75c1c_prof);

    }

    public function getTemplateName()
    {
        return ":modulo:modulo2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Módulo 1 {% endblock %}
{% block body %}
<h2> Esta es la página principal del módulo 1 </h2>

{% endblock %}", ":modulo:modulo2.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/modulo/modulo2.html.twig");
    }
}

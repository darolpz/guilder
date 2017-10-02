<?php

/* admin/index.html.twig */
class __TwigTemplate_d4932ea13449db94d9c99cb0e3ba182b5fe25c320cbc498910735cfd0867ad8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_c8fac56f4257ebdcbf2e12f19859061fbb792fadf02a3694194faa7f73b5494f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fac56f4257ebdcbf2e12f19859061fbb792fadf02a3694194faa7f73b5494f->enter($__internal_c8fac56f4257ebdcbf2e12f19859061fbb792fadf02a3694194faa7f73b5494f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_8832972707e70276f9de9f4b433024262d88c02b888c80b882b28b3b0d9b60dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8832972707e70276f9de9f4b433024262d88c02b888c80b882b28b3b0d9b60dc->enter($__internal_8832972707e70276f9de9f4b433024262d88c02b888c80b882b28b3b0d9b60dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8fac56f4257ebdcbf2e12f19859061fbb792fadf02a3694194faa7f73b5494f->leave($__internal_c8fac56f4257ebdcbf2e12f19859061fbb792fadf02a3694194faa7f73b5494f_prof);

        
        $__internal_8832972707e70276f9de9f4b433024262d88c02b888c80b882b28b3b0d9b60dc->leave($__internal_8832972707e70276f9de9f4b433024262d88c02b888c80b882b28b3b0d9b60dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b87bb92388173d77dde2bc7a2c563eb2e4f55f10e4c7ebb601c33de14526ba2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87bb92388173d77dde2bc7a2c563eb2e4f55f10e4c7ebb601c33de14526ba2a->enter($__internal_b87bb92388173d77dde2bc7a2c563eb2e4f55f10e4c7ebb601c33de14526ba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d84578c5ef63deb93366cf18ebead2dd8023f3f7a18ab3fba14d30c4f0bad9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84578c5ef63deb93366cf18ebead2dd8023f3f7a18ab3fba14d30c4f0bad9c9->enter($__internal_d84578c5ef63deb93366cf18ebead2dd8023f3f7a18ab3fba14d30c4f0bad9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración ";
        
        $__internal_d84578c5ef63deb93366cf18ebead2dd8023f3f7a18ab3fba14d30c4f0bad9c9->leave($__internal_d84578c5ef63deb93366cf18ebead2dd8023f3f7a18ab3fba14d30c4f0bad9c9_prof);

        
        $__internal_b87bb92388173d77dde2bc7a2c563eb2e4f55f10e4c7ebb601c33de14526ba2a->leave($__internal_b87bb92388173d77dde2bc7a2c563eb2e4f55f10e4c7ebb601c33de14526ba2a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_332c923d89bc536bbaef9c6e01e6928073ba2d5054b2582b354924c5921f141f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332c923d89bc536bbaef9c6e01e6928073ba2d5054b2582b354924c5921f141f->enter($__internal_332c923d89bc536bbaef9c6e01e6928073ba2d5054b2582b354924c5921f141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8a5f62119b8f216bf3eb28b911763a3549e73dabcd41e9eac038ba5c4a3470e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a5f62119b8f216bf3eb28b911763a3549e73dabcd41e9eac038ba5c4a3470e->enter($__internal_e8a5f62119b8f216bf3eb28b911763a3549e73dabcd41e9eac038ba5c4a3470e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal de la administración </h2>

";
        
        $__internal_e8a5f62119b8f216bf3eb28b911763a3549e73dabcd41e9eac038ba5c4a3470e->leave($__internal_e8a5f62119b8f216bf3eb28b911763a3549e73dabcd41e9eac038ba5c4a3470e_prof);

        
        $__internal_332c923d89bc536bbaef9c6e01e6928073ba2d5054b2582b354924c5921f141f->leave($__internal_332c923d89bc536bbaef9c6e01e6928073ba2d5054b2582b354924c5921f141f_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %} Administración {% endblock %}
{% block body %}
<h2> Esta es la página principal de la administración </h2>

{% endblock %}", "admin/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\admin\\index.html.twig");
    }
}

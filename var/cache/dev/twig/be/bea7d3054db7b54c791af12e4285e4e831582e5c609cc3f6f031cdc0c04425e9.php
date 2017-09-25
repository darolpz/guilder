<?php

/* default/index.html.twig */
class __TwigTemplate_16294b1845da003d5358269f39e43f12805d5e9c1c06f99743ff51f534531823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_d627e5b4419896b6b41df56eab0fe7911b2aa87eea4d4893b0da6fa2905d318d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d627e5b4419896b6b41df56eab0fe7911b2aa87eea4d4893b0da6fa2905d318d->enter($__internal_d627e5b4419896b6b41df56eab0fe7911b2aa87eea4d4893b0da6fa2905d318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_0492b8a1c149f5dee975e69ce18237be90c09dcfe9dffa73a2855bf2cbeedf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0492b8a1c149f5dee975e69ce18237be90c09dcfe9dffa73a2855bf2cbeedf10->enter($__internal_0492b8a1c149f5dee975e69ce18237be90c09dcfe9dffa73a2855bf2cbeedf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d627e5b4419896b6b41df56eab0fe7911b2aa87eea4d4893b0da6fa2905d318d->leave($__internal_d627e5b4419896b6b41df56eab0fe7911b2aa87eea4d4893b0da6fa2905d318d_prof);

        
        $__internal_0492b8a1c149f5dee975e69ce18237be90c09dcfe9dffa73a2855bf2cbeedf10->leave($__internal_0492b8a1c149f5dee975e69ce18237be90c09dcfe9dffa73a2855bf2cbeedf10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bbd024adfcde7a061f30c5771255df50480ded223b95d9b92d072908fe5699a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbd024adfcde7a061f30c5771255df50480ded223b95d9b92d072908fe5699a->enter($__internal_8bbd024adfcde7a061f30c5771255df50480ded223b95d9b92d072908fe5699a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fbe3d4c521cab3e08e5d556ec3bf19dce53b48d6f52fd0373accce5323211a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbe3d4c521cab3e08e5d556ec3bf19dce53b48d6f52fd0373accce5323211a5->enter($__internal_1fbe3d4c521cab3e08e5d556ec3bf19dce53b48d6f52fd0373accce5323211a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder - Inicio ";
        
        $__internal_1fbe3d4c521cab3e08e5d556ec3bf19dce53b48d6f52fd0373accce5323211a5->leave($__internal_1fbe3d4c521cab3e08e5d556ec3bf19dce53b48d6f52fd0373accce5323211a5_prof);

        
        $__internal_8bbd024adfcde7a061f30c5771255df50480ded223b95d9b92d072908fe5699a->leave($__internal_8bbd024adfcde7a061f30c5771255df50480ded223b95d9b92d072908fe5699a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_995d597c4892ba422a90792f6b3bdb73a782fd6a41e94e74222f742bb6b88867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995d597c4892ba422a90792f6b3bdb73a782fd6a41e94e74222f742bb6b88867->enter($__internal_995d597c4892ba422a90792f6b3bdb73a782fd6a41e94e74222f742bb6b88867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffedba5ece02dd73aec3e9835d0c252941083463127abc058b46bd997e901d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffedba5ece02dd73aec3e9835d0c252941083463127abc058b46bd997e901d78->enter($__internal_ffedba5ece02dd73aec3e9835d0c252941083463127abc058b46bd997e901d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal</h2>
";
        
        $__internal_ffedba5ece02dd73aec3e9835d0c252941083463127abc058b46bd997e901d78->leave($__internal_ffedba5ece02dd73aec3e9835d0c252941083463127abc058b46bd997e901d78_prof);

        
        $__internal_995d597c4892ba422a90792f6b3bdb73a782fd6a41e94e74222f742bb6b88867->leave($__internal_995d597c4892ba422a90792f6b3bdb73a782fd6a41e94e74222f742bb6b88867_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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

{% block title %} Güilder - Inicio {% endblock %}
{% block body %}
<h2> Esta es la página principal</h2>
{% endblock %}
    

", "default/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\default\\index.html.twig");
    }
}

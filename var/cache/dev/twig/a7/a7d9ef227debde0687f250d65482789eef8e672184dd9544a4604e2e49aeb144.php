<?php

/* :admin:index.html.twig */
class __TwigTemplate_57b19f799e4611bc2acb4b667e0a7d65358d516c8123adeb84897f3c1c5c5369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:index.html.twig", 1);
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
        $__internal_11c78a4b19103d19dc51d8225515b5c83056f98f198bf816395554bb74d22e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c78a4b19103d19dc51d8225515b5c83056f98f198bf816395554bb74d22e6e->enter($__internal_11c78a4b19103d19dc51d8225515b5c83056f98f198bf816395554bb74d22e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_05e501e249a0b1dde33f3b17abc397028f94fc44a49790c9afb1c7d1213c3083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e501e249a0b1dde33f3b17abc397028f94fc44a49790c9afb1c7d1213c3083->enter($__internal_05e501e249a0b1dde33f3b17abc397028f94fc44a49790c9afb1c7d1213c3083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c78a4b19103d19dc51d8225515b5c83056f98f198bf816395554bb74d22e6e->leave($__internal_11c78a4b19103d19dc51d8225515b5c83056f98f198bf816395554bb74d22e6e_prof);

        
        $__internal_05e501e249a0b1dde33f3b17abc397028f94fc44a49790c9afb1c7d1213c3083->leave($__internal_05e501e249a0b1dde33f3b17abc397028f94fc44a49790c9afb1c7d1213c3083_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db24dfa7911a16d0c70b1c5f669bc296515096d1e27a0deda8887212d9637dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db24dfa7911a16d0c70b1c5f669bc296515096d1e27a0deda8887212d9637dfa->enter($__internal_db24dfa7911a16d0c70b1c5f669bc296515096d1e27a0deda8887212d9637dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46bdcae1f4afc165538d9675d74ce789226704992e370ad64182dbd8f0e96369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bdcae1f4afc165538d9675d74ce789226704992e370ad64182dbd8f0e96369->enter($__internal_46bdcae1f4afc165538d9675d74ce789226704992e370ad64182dbd8f0e96369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración ";
        
        $__internal_46bdcae1f4afc165538d9675d74ce789226704992e370ad64182dbd8f0e96369->leave($__internal_46bdcae1f4afc165538d9675d74ce789226704992e370ad64182dbd8f0e96369_prof);

        
        $__internal_db24dfa7911a16d0c70b1c5f669bc296515096d1e27a0deda8887212d9637dfa->leave($__internal_db24dfa7911a16d0c70b1c5f669bc296515096d1e27a0deda8887212d9637dfa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b2dd2af9d8bfafe106ca7f6b142cee7180c1b9763c9871a8a56322867ec86b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2dd2af9d8bfafe106ca7f6b142cee7180c1b9763c9871a8a56322867ec86b6->enter($__internal_0b2dd2af9d8bfafe106ca7f6b142cee7180c1b9763c9871a8a56322867ec86b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7156e545039798645a1bbe21e635781180d149a540cc04ca6908bfe16d23855f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7156e545039798645a1bbe21e635781180d149a540cc04ca6908bfe16d23855f->enter($__internal_7156e545039798645a1bbe21e635781180d149a540cc04ca6908bfe16d23855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal de la administración </h2>

";
        
        $__internal_7156e545039798645a1bbe21e635781180d149a540cc04ca6908bfe16d23855f->leave($__internal_7156e545039798645a1bbe21e635781180d149a540cc04ca6908bfe16d23855f_prof);

        
        $__internal_0b2dd2af9d8bfafe106ca7f6b142cee7180c1b9763c9871a8a56322867ec86b6->leave($__internal_0b2dd2af9d8bfafe106ca7f6b142cee7180c1b9763c9871a8a56322867ec86b6_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
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

{% block title %} Administración {% endblock %}
{% block body %}
<h2> Esta es la página principal de la administración </h2>

{% endblock %}", ":admin:index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/admin/index.html.twig");
    }
}

<?php

/* :default:index.html.twig */
class __TwigTemplate_059d54014d65a220bfdc07af1c82d33a24e486c03e0e1c06c9ba7b742c745c8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_fc43ec11b142d20c61413da9db7ed205b7356d07ba22225884d482ab4af09ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc43ec11b142d20c61413da9db7ed205b7356d07ba22225884d482ab4af09ad9->enter($__internal_fc43ec11b142d20c61413da9db7ed205b7356d07ba22225884d482ab4af09ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_ac4253c4d82b6ce7e81bbce12dfb860fe3ec46ba2c5ad02875632db89a7838fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4253c4d82b6ce7e81bbce12dfb860fe3ec46ba2c5ad02875632db89a7838fd->enter($__internal_ac4253c4d82b6ce7e81bbce12dfb860fe3ec46ba2c5ad02875632db89a7838fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc43ec11b142d20c61413da9db7ed205b7356d07ba22225884d482ab4af09ad9->leave($__internal_fc43ec11b142d20c61413da9db7ed205b7356d07ba22225884d482ab4af09ad9_prof);

        
        $__internal_ac4253c4d82b6ce7e81bbce12dfb860fe3ec46ba2c5ad02875632db89a7838fd->leave($__internal_ac4253c4d82b6ce7e81bbce12dfb860fe3ec46ba2c5ad02875632db89a7838fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25782c48548b2ea000eae5f072c20b79db76ffa61658aae1e76d62773e4557b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25782c48548b2ea000eae5f072c20b79db76ffa61658aae1e76d62773e4557b6->enter($__internal_25782c48548b2ea000eae5f072c20b79db76ffa61658aae1e76d62773e4557b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7996e0e45e9f001fa871598230dcf033c449beaec047f04d33fb6628d489006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7996e0e45e9f001fa871598230dcf033c449beaec047f04d33fb6628d489006->enter($__internal_f7996e0e45e9f001fa871598230dcf033c449beaec047f04d33fb6628d489006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder - Inicio ";
        
        $__internal_f7996e0e45e9f001fa871598230dcf033c449beaec047f04d33fb6628d489006->leave($__internal_f7996e0e45e9f001fa871598230dcf033c449beaec047f04d33fb6628d489006_prof);

        
        $__internal_25782c48548b2ea000eae5f072c20b79db76ffa61658aae1e76d62773e4557b6->leave($__internal_25782c48548b2ea000eae5f072c20b79db76ffa61658aae1e76d62773e4557b6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77cf984136a81869a66e005acc053bc6347c6e3633da008b22b554f98701739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77cf984136a81869a66e005acc053bc6347c6e3633da008b22b554f98701739->enter($__internal_f77cf984136a81869a66e005acc053bc6347c6e3633da008b22b554f98701739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eb01a22caeec0f4ab535c86dbe4b46820f6f9a685e3c1286bfe3204e9fc27c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb01a22caeec0f4ab535c86dbe4b46820f6f9a685e3c1286bfe3204e9fc27c8->enter($__internal_3eb01a22caeec0f4ab535c86dbe4b46820f6f9a685e3c1286bfe3204e9fc27c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal jkejeje</h2>
";
        
        $__internal_3eb01a22caeec0f4ab535c86dbe4b46820f6f9a685e3c1286bfe3204e9fc27c8->leave($__internal_3eb01a22caeec0f4ab535c86dbe4b46820f6f9a685e3c1286bfe3204e9fc27c8_prof);

        
        $__internal_f77cf984136a81869a66e005acc053bc6347c6e3633da008b22b554f98701739->leave($__internal_f77cf984136a81869a66e005acc053bc6347c6e3633da008b22b554f98701739_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
<h2> Esta es la página principal jkejeje</h2>
{% endblock %}
    

", ":default:index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/default/index.html.twig");
    }
}

<?php

/* modulo/modulo2.html.twig */
class __TwigTemplate_93a4c23c1bc22d623a96f2660a69cf1deef402bdf1da1ee5437f826197644745 extends Twig_Template
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
        $__internal_c9ad905144c72dd82e02cc366f21c31b1864b499729621cc2dfe2f4128be7129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ad905144c72dd82e02cc366f21c31b1864b499729621cc2dfe2f4128be7129->enter($__internal_c9ad905144c72dd82e02cc366f21c31b1864b499729621cc2dfe2f4128be7129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo2.html.twig"));

        $__internal_8cc98a8d7a903bf06dcd55eccd58c90b1d35a67256b0099cdc69c3ff14ed892a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc98a8d7a903bf06dcd55eccd58c90b1d35a67256b0099cdc69c3ff14ed892a->enter($__internal_8cc98a8d7a903bf06dcd55eccd58c90b1d35a67256b0099cdc69c3ff14ed892a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9ad905144c72dd82e02cc366f21c31b1864b499729621cc2dfe2f4128be7129->leave($__internal_c9ad905144c72dd82e02cc366f21c31b1864b499729621cc2dfe2f4128be7129_prof);

        
        $__internal_8cc98a8d7a903bf06dcd55eccd58c90b1d35a67256b0099cdc69c3ff14ed892a->leave($__internal_8cc98a8d7a903bf06dcd55eccd58c90b1d35a67256b0099cdc69c3ff14ed892a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f6d0f654f652bb8125e457f52cb3e07605c8ca754051d8289f2db91e0172349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6d0f654f652bb8125e457f52cb3e07605c8ca754051d8289f2db91e0172349->enter($__internal_4f6d0f654f652bb8125e457f52cb3e07605c8ca754051d8289f2db91e0172349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3dffa5c5df4580cb3c16f911f1c3a98ab022bf4c09429028b7d500769245bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dffa5c5df4580cb3c16f911f1c3a98ab022bf4c09429028b7d500769245bc8->enter($__internal_f3dffa5c5df4580cb3c16f911f1c3a98ab022bf4c09429028b7d500769245bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder ";
        
        $__internal_f3dffa5c5df4580cb3c16f911f1c3a98ab022bf4c09429028b7d500769245bc8->leave($__internal_f3dffa5c5df4580cb3c16f911f1c3a98ab022bf4c09429028b7d500769245bc8_prof);

        
        $__internal_4f6d0f654f652bb8125e457f52cb3e07605c8ca754051d8289f2db91e0172349->leave($__internal_4f6d0f654f652bb8125e457f52cb3e07605c8ca754051d8289f2db91e0172349_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb516597f4e7662f0ebeaedcac05a675948770808ad61a433ecaa621d9cc7b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb516597f4e7662f0ebeaedcac05a675948770808ad61a433ecaa621d9cc7b30->enter($__internal_cb516597f4e7662f0ebeaedcac05a675948770808ad61a433ecaa621d9cc7b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e524801695090048d8ae9a655c244f8cac37d15264ad487b2319148cdb1f92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e524801695090048d8ae9a655c244f8cac37d15264ad487b2319148cdb1f92f->enter($__internal_8e524801695090048d8ae9a655c244f8cac37d15264ad487b2319148cdb1f92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal del módulo 2 (histórico)</h2>

";
        
        $__internal_8e524801695090048d8ae9a655c244f8cac37d15264ad487b2319148cdb1f92f->leave($__internal_8e524801695090048d8ae9a655c244f8cac37d15264ad487b2319148cdb1f92f_prof);

        
        $__internal_cb516597f4e7662f0ebeaedcac05a675948770808ad61a433ecaa621d9cc7b30->leave($__internal_cb516597f4e7662f0ebeaedcac05a675948770808ad61a433ecaa621d9cc7b30_prof);

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
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Güilder {% endblock %}
{% block body %}
<h2> Esta es la página principal del módulo 2 (histórico)</h2>

{% endblock %}", "modulo/modulo2.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo2.html.twig");
    }
}

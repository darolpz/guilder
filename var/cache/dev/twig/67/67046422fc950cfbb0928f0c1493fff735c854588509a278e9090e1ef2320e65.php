<?php

/* default/index.html.twig */
class __TwigTemplate_6420f902b2ac7ffa99f6ea01e49d2a8e2784fd81fbd0bcd0a8da990ebd2ec4de extends Twig_Template
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
        $__internal_4f07e98efdc89dafe8f7b0a0a0450d2c3c6713dc045cb86f4a20bcae691f7197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f07e98efdc89dafe8f7b0a0a0450d2c3c6713dc045cb86f4a20bcae691f7197->enter($__internal_4f07e98efdc89dafe8f7b0a0a0450d2c3c6713dc045cb86f4a20bcae691f7197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_da4f31a9b0ad73106e5fae8d4a0d76db83bc6a5f972b34e2d153a09a06f0d4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4f31a9b0ad73106e5fae8d4a0d76db83bc6a5f972b34e2d153a09a06f0d4d6->enter($__internal_da4f31a9b0ad73106e5fae8d4a0d76db83bc6a5f972b34e2d153a09a06f0d4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f07e98efdc89dafe8f7b0a0a0450d2c3c6713dc045cb86f4a20bcae691f7197->leave($__internal_4f07e98efdc89dafe8f7b0a0a0450d2c3c6713dc045cb86f4a20bcae691f7197_prof);

        
        $__internal_da4f31a9b0ad73106e5fae8d4a0d76db83bc6a5f972b34e2d153a09a06f0d4d6->leave($__internal_da4f31a9b0ad73106e5fae8d4a0d76db83bc6a5f972b34e2d153a09a06f0d4d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2141e1e723ce4a2cd7b2986e10021f1a229762302ef2327bf32c9f00a613518b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2141e1e723ce4a2cd7b2986e10021f1a229762302ef2327bf32c9f00a613518b->enter($__internal_2141e1e723ce4a2cd7b2986e10021f1a229762302ef2327bf32c9f00a613518b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54ebead104a551eee6f5f562dd102498023d7f030bc8e81a4e5239b554162270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ebead104a551eee6f5f562dd102498023d7f030bc8e81a4e5239b554162270->enter($__internal_54ebead104a551eee6f5f562dd102498023d7f030bc8e81a4e5239b554162270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder - Inicio ";
        
        $__internal_54ebead104a551eee6f5f562dd102498023d7f030bc8e81a4e5239b554162270->leave($__internal_54ebead104a551eee6f5f562dd102498023d7f030bc8e81a4e5239b554162270_prof);

        
        $__internal_2141e1e723ce4a2cd7b2986e10021f1a229762302ef2327bf32c9f00a613518b->leave($__internal_2141e1e723ce4a2cd7b2986e10021f1a229762302ef2327bf32c9f00a613518b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_af5f46ce8a6c2021ac179a4716e44c4b4d23fc174f8f8c0ade7c1c221879207a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5f46ce8a6c2021ac179a4716e44c4b4d23fc174f8f8c0ade7c1c221879207a->enter($__internal_af5f46ce8a6c2021ac179a4716e44c4b4d23fc174f8f8c0ade7c1c221879207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_348a495486684c096fdbc501bc8dd722ae4c9f1605a159e4d930642c4a82d1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348a495486684c096fdbc501bc8dd722ae4c9f1605a159e4d930642c4a82d1fb->enter($__internal_348a495486684c096fdbc501bc8dd722ae4c9f1605a159e4d930642c4a82d1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal </h2>

";
        
        $__internal_348a495486684c096fdbc501bc8dd722ae4c9f1605a159e4d930642c4a82d1fb->leave($__internal_348a495486684c096fdbc501bc8dd722ae4c9f1605a159e4d930642c4a82d1fb_prof);

        
        $__internal_af5f46ce8a6c2021ac179a4716e44c4b4d23fc174f8f8c0ade7c1c221879207a->leave($__internal_af5f46ce8a6c2021ac179a4716e44c4b4d23fc174f8f8c0ade7c1c221879207a_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Güilder - Inicio {% endblock %}
{% block body %}
<h2> Esta es la página principal </h2>

{% endblock %}
    

", "default/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\default\\index.html.twig");
    }
}

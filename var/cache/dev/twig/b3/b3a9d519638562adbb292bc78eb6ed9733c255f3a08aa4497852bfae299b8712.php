<?php

/* :admin:index.html.twig */
class __TwigTemplate_876d2813f28eaec1827e1d9bfabed9c969a11ea43bc68d9e7b3e69fbdbb4839e extends Twig_Template
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
        $__internal_76fcd36891db23e4b3eb2fb62cafacc0597dd25c0bfb567deaaccef2cff72e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76fcd36891db23e4b3eb2fb62cafacc0597dd25c0bfb567deaaccef2cff72e58->enter($__internal_76fcd36891db23e4b3eb2fb62cafacc0597dd25c0bfb567deaaccef2cff72e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_88fbb29c24b61e24705138fb8ef4e93a407cc278b7c85299b5a1154431f81a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fbb29c24b61e24705138fb8ef4e93a407cc278b7c85299b5a1154431f81a1a->enter($__internal_88fbb29c24b61e24705138fb8ef4e93a407cc278b7c85299b5a1154431f81a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76fcd36891db23e4b3eb2fb62cafacc0597dd25c0bfb567deaaccef2cff72e58->leave($__internal_76fcd36891db23e4b3eb2fb62cafacc0597dd25c0bfb567deaaccef2cff72e58_prof);

        
        $__internal_88fbb29c24b61e24705138fb8ef4e93a407cc278b7c85299b5a1154431f81a1a->leave($__internal_88fbb29c24b61e24705138fb8ef4e93a407cc278b7c85299b5a1154431f81a1a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f72cbd8c1d31fee81dc86e7789dc0f4250c41942d89a81e83fcb12cb1f92986d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72cbd8c1d31fee81dc86e7789dc0f4250c41942d89a81e83fcb12cb1f92986d->enter($__internal_f72cbd8c1d31fee81dc86e7789dc0f4250c41942d89a81e83fcb12cb1f92986d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0605344e2604a7060ed48396c583c9a7883f8cfa6c116e1c8fae04f849f692f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0605344e2604a7060ed48396c583c9a7883f8cfa6c116e1c8fae04f849f692f4->enter($__internal_0605344e2604a7060ed48396c583c9a7883f8cfa6c116e1c8fae04f849f692f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administración ";
        
        $__internal_0605344e2604a7060ed48396c583c9a7883f8cfa6c116e1c8fae04f849f692f4->leave($__internal_0605344e2604a7060ed48396c583c9a7883f8cfa6c116e1c8fae04f849f692f4_prof);

        
        $__internal_f72cbd8c1d31fee81dc86e7789dc0f4250c41942d89a81e83fcb12cb1f92986d->leave($__internal_f72cbd8c1d31fee81dc86e7789dc0f4250c41942d89a81e83fcb12cb1f92986d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_303ed05d666d90dc530d152687b2ae0c2fbab7c3fbf845ecd1ffd4a6a0ef6894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303ed05d666d90dc530d152687b2ae0c2fbab7c3fbf845ecd1ffd4a6a0ef6894->enter($__internal_303ed05d666d90dc530d152687b2ae0c2fbab7c3fbf845ecd1ffd4a6a0ef6894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fca60d985e89f78da44c8cfd68f1f2d7fbd99d567b70ec3e532271172c7f32f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca60d985e89f78da44c8cfd68f1f2d7fbd99d567b70ec3e532271172c7f32f2->enter($__internal_fca60d985e89f78da44c8cfd68f1f2d7fbd99d567b70ec3e532271172c7f32f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal de la administración </h2>

";
        
        $__internal_fca60d985e89f78da44c8cfd68f1f2d7fbd99d567b70ec3e532271172c7f32f2->leave($__internal_fca60d985e89f78da44c8cfd68f1f2d7fbd99d567b70ec3e532271172c7f32f2_prof);

        
        $__internal_303ed05d666d90dc530d152687b2ae0c2fbab7c3fbf845ecd1ffd4a6a0ef6894->leave($__internal_303ed05d666d90dc530d152687b2ae0c2fbab7c3fbf845ecd1ffd4a6a0ef6894_prof);

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

{% endblock %}", ":admin:index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/admin/index.html.twig");
    }
}

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
        $__internal_c84233c163f91601753fe0879a40094b691b954c0ad836c912d2b616eebbd802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84233c163f91601753fe0879a40094b691b954c0ad836c912d2b616eebbd802->enter($__internal_c84233c163f91601753fe0879a40094b691b954c0ad836c912d2b616eebbd802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_d3db87117359472d2adb5f1df9f6897f947cb09c7fb9102551ceacc20012a5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3db87117359472d2adb5f1df9f6897f947cb09c7fb9102551ceacc20012a5f1->enter($__internal_d3db87117359472d2adb5f1df9f6897f947cb09c7fb9102551ceacc20012a5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84233c163f91601753fe0879a40094b691b954c0ad836c912d2b616eebbd802->leave($__internal_c84233c163f91601753fe0879a40094b691b954c0ad836c912d2b616eebbd802_prof);

        
        $__internal_d3db87117359472d2adb5f1df9f6897f947cb09c7fb9102551ceacc20012a5f1->leave($__internal_d3db87117359472d2adb5f1df9f6897f947cb09c7fb9102551ceacc20012a5f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d229a495881d0691313cda38edf111e180ede4a48065b0983042b776905c4fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d229a495881d0691313cda38edf111e180ede4a48065b0983042b776905c4fb6->enter($__internal_d229a495881d0691313cda38edf111e180ede4a48065b0983042b776905c4fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0f46ee5045cb4e42932589a1a565a6b9199a8a6fc3b7758677c8e7969eb403a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f46ee5045cb4e42932589a1a565a6b9199a8a6fc3b7758677c8e7969eb403a->enter($__internal_a0f46ee5045cb4e42932589a1a565a6b9199a8a6fc3b7758677c8e7969eb403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder - Inicio ";
        
        $__internal_a0f46ee5045cb4e42932589a1a565a6b9199a8a6fc3b7758677c8e7969eb403a->leave($__internal_a0f46ee5045cb4e42932589a1a565a6b9199a8a6fc3b7758677c8e7969eb403a_prof);

        
        $__internal_d229a495881d0691313cda38edf111e180ede4a48065b0983042b776905c4fb6->leave($__internal_d229a495881d0691313cda38edf111e180ede4a48065b0983042b776905c4fb6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_322ad66b83d970421d66cb3293db1cf5adb3fe8bbeb5bfd2874914250dc60091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322ad66b83d970421d66cb3293db1cf5adb3fe8bbeb5bfd2874914250dc60091->enter($__internal_322ad66b83d970421d66cb3293db1cf5adb3fe8bbeb5bfd2874914250dc60091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1a2185f3862d2fc6b9f320dd0ad4f6dc90d3d73d78a42df2b514eecfc824ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a2185f3862d2fc6b9f320dd0ad4f6dc90d3d73d78a42df2b514eecfc824ed2->enter($__internal_f1a2185f3862d2fc6b9f320dd0ad4f6dc90d3d73d78a42df2b514eecfc824ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal </h2>

";
        
        $__internal_f1a2185f3862d2fc6b9f320dd0ad4f6dc90d3d73d78a42df2b514eecfc824ed2->leave($__internal_f1a2185f3862d2fc6b9f320dd0ad4f6dc90d3d73d78a42df2b514eecfc824ed2_prof);

        
        $__internal_322ad66b83d970421d66cb3293db1cf5adb3fe8bbeb5bfd2874914250dc60091->leave($__internal_322ad66b83d970421d66cb3293db1cf5adb3fe8bbeb5bfd2874914250dc60091_prof);

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
    

", "default/index.html.twig", "C:\\xampp\\htdocs\\repo\\app\\Resources\\views\\default\\index.html.twig");
    }
}

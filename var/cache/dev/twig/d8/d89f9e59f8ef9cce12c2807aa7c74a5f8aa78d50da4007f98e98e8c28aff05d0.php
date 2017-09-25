<?php

/* :modulo:modulo1.html.twig */
class __TwigTemplate_dcad673a2049de33b3ff2265b44764f26784de143def50db9193299af4c7e1b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":modulo:modulo1.html.twig", 1);
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
        $__internal_4c93316edbf5a174f67e52c351f7e484498a581b4c11107bc2c8ec87f2596c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c93316edbf5a174f67e52c351f7e484498a581b4c11107bc2c8ec87f2596c1b->enter($__internal_4c93316edbf5a174f67e52c351f7e484498a581b4c11107bc2c8ec87f2596c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulo:modulo1.html.twig"));

        $__internal_1faab8c15d1671961c126c1d5c9d5f614809a99dbffc23f94b8fa85aea8431ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1faab8c15d1671961c126c1d5c9d5f614809a99dbffc23f94b8fa85aea8431ba->enter($__internal_1faab8c15d1671961c126c1d5c9d5f614809a99dbffc23f94b8fa85aea8431ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulo:modulo1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c93316edbf5a174f67e52c351f7e484498a581b4c11107bc2c8ec87f2596c1b->leave($__internal_4c93316edbf5a174f67e52c351f7e484498a581b4c11107bc2c8ec87f2596c1b_prof);

        
        $__internal_1faab8c15d1671961c126c1d5c9d5f614809a99dbffc23f94b8fa85aea8431ba->leave($__internal_1faab8c15d1671961c126c1d5c9d5f614809a99dbffc23f94b8fa85aea8431ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_069b0951ff36f361a15a814719f218b01f08dba8df9b4dc6b25e658eb95507b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069b0951ff36f361a15a814719f218b01f08dba8df9b4dc6b25e658eb95507b5->enter($__internal_069b0951ff36f361a15a814719f218b01f08dba8df9b4dc6b25e658eb95507b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aba20fe4982fed8f88471c7fd5850e6d17a7f4eee22f954a2de7a69787726dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba20fe4982fed8f88471c7fd5850e6d17a7f4eee22f954a2de7a69787726dea->enter($__internal_aba20fe4982fed8f88471c7fd5850e6d17a7f4eee22f954a2de7a69787726dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Módulo 1 ";
        
        $__internal_aba20fe4982fed8f88471c7fd5850e6d17a7f4eee22f954a2de7a69787726dea->leave($__internal_aba20fe4982fed8f88471c7fd5850e6d17a7f4eee22f954a2de7a69787726dea_prof);

        
        $__internal_069b0951ff36f361a15a814719f218b01f08dba8df9b4dc6b25e658eb95507b5->leave($__internal_069b0951ff36f361a15a814719f218b01f08dba8df9b4dc6b25e658eb95507b5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c225f1f26996c8b6491b503d58d69c4a4d9a486c7d7ba73bb6c44767bfa4c9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c225f1f26996c8b6491b503d58d69c4a4d9a486c7d7ba73bb6c44767bfa4c9a0->enter($__internal_c225f1f26996c8b6491b503d58d69c4a4d9a486c7d7ba73bb6c44767bfa4c9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d5d28561ffd0cdb9733a427f56ccaf9049aea0a3f5872929d4ea171695e1ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5d28561ffd0cdb9733a427f56ccaf9049aea0a3f5872929d4ea171695e1ce3->enter($__internal_5d5d28561ffd0cdb9733a427f56ccaf9049aea0a3f5872929d4ea171695e1ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal del módulo 1 </h2>

";
        
        $__internal_5d5d28561ffd0cdb9733a427f56ccaf9049aea0a3f5872929d4ea171695e1ce3->leave($__internal_5d5d28561ffd0cdb9733a427f56ccaf9049aea0a3f5872929d4ea171695e1ce3_prof);

        
        $__internal_c225f1f26996c8b6491b503d58d69c4a4d9a486c7d7ba73bb6c44767bfa4c9a0->leave($__internal_c225f1f26996c8b6491b503d58d69c4a4d9a486c7d7ba73bb6c44767bfa4c9a0_prof);

    }

    public function getTemplateName()
    {
        return ":modulo:modulo1.html.twig";
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

{% endblock %}", ":modulo:modulo1.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/modulo/modulo1.html.twig");
    }
}

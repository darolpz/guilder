<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d820b52e09141a15cfa4ddd0827a37effef652934e33db8a7b5ff8de159bc968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a00c61e554c04fd900dd2ab7555023ed1353442f1bf39f7ab64afaecc456e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a00c61e554c04fd900dd2ab7555023ed1353442f1bf39f7ab64afaecc456e2a->enter($__internal_5a00c61e554c04fd900dd2ab7555023ed1353442f1bf39f7ab64afaecc456e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ad761ce099c45c353f50ba052bc88c49ef6fa33a0f9e764412c8ff4af87b2bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad761ce099c45c353f50ba052bc88c49ef6fa33a0f9e764412c8ff4af87b2bdd->enter($__internal_ad761ce099c45c353f50ba052bc88c49ef6fa33a0f9e764412c8ff4af87b2bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5a00c61e554c04fd900dd2ab7555023ed1353442f1bf39f7ab64afaecc456e2a->leave($__internal_5a00c61e554c04fd900dd2ab7555023ed1353442f1bf39f7ab64afaecc456e2a_prof);

        
        $__internal_ad761ce099c45c353f50ba052bc88c49ef6fa33a0f9e764412c8ff4af87b2bdd->leave($__internal_ad761ce099c45c353f50ba052bc88c49ef6fa33a0f9e764412c8ff4af87b2bdd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd15b9ae2ea43e89977b0d7ab65f92a21896130a060a44948d3a50b25b4de004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd15b9ae2ea43e89977b0d7ab65f92a21896130a060a44948d3a50b25b4de004->enter($__internal_bd15b9ae2ea43e89977b0d7ab65f92a21896130a060a44948d3a50b25b4de004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_055a2d06003dd2b57580237cd0e24f23862182c4a074977229bdd2a9a343e947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055a2d06003dd2b57580237cd0e24f23862182c4a074977229bdd2a9a343e947->enter($__internal_055a2d06003dd2b57580237cd0e24f23862182c4a074977229bdd2a9a343e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_055a2d06003dd2b57580237cd0e24f23862182c4a074977229bdd2a9a343e947->leave($__internal_055a2d06003dd2b57580237cd0e24f23862182c4a074977229bdd2a9a343e947_prof);

        
        $__internal_bd15b9ae2ea43e89977b0d7ab65f92a21896130a060a44948d3a50b25b4de004->leave($__internal_bd15b9ae2ea43e89977b0d7ab65f92a21896130a060a44948d3a50b25b4de004_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

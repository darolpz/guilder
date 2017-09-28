<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_773856ec5765f2af18de8d4e66250af78ef7a69794f5beba82d76d1d259e9ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb4aff5541fbb995af3cda30adaf2a3153be4b44f393be8305b2cc199056ad9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4aff5541fbb995af3cda30adaf2a3153be4b44f393be8305b2cc199056ad9b->enter($__internal_fb4aff5541fbb995af3cda30adaf2a3153be4b44f393be8305b2cc199056ad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a73660bbfd1f2370c6842a2ade88ff5afdbfabba5de58a7e63e245a683cc5762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73660bbfd1f2370c6842a2ade88ff5afdbfabba5de58a7e63e245a683cc5762->enter($__internal_a73660bbfd1f2370c6842a2ade88ff5afdbfabba5de58a7e63e245a683cc5762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb4aff5541fbb995af3cda30adaf2a3153be4b44f393be8305b2cc199056ad9b->leave($__internal_fb4aff5541fbb995af3cda30adaf2a3153be4b44f393be8305b2cc199056ad9b_prof);

        
        $__internal_a73660bbfd1f2370c6842a2ade88ff5afdbfabba5de58a7e63e245a683cc5762->leave($__internal_a73660bbfd1f2370c6842a2ade88ff5afdbfabba5de58a7e63e245a683cc5762_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e96e3fdb9ac1ab06c198892cf0ad601f9751891da25de02c5a6aeea4f690c1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96e3fdb9ac1ab06c198892cf0ad601f9751891da25de02c5a6aeea4f690c1f8->enter($__internal_e96e3fdb9ac1ab06c198892cf0ad601f9751891da25de02c5a6aeea4f690c1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_545c2b06190ea95326eeefe3bee5ddec29ed7e159575d1d1370b05e6778ab4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545c2b06190ea95326eeefe3bee5ddec29ed7e159575d1d1370b05e6778ab4ea->enter($__internal_545c2b06190ea95326eeefe3bee5ddec29ed7e159575d1d1370b05e6778ab4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_545c2b06190ea95326eeefe3bee5ddec29ed7e159575d1d1370b05e6778ab4ea->leave($__internal_545c2b06190ea95326eeefe3bee5ddec29ed7e159575d1d1370b05e6778ab4ea_prof);

        
        $__internal_e96e3fdb9ac1ab06c198892cf0ad601f9751891da25de02c5a6aeea4f690c1f8->leave($__internal_e96e3fdb9ac1ab06c198892cf0ad601f9751891da25de02c5a6aeea4f690c1f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3d66b9ee340738784ac91f29a81a44cb9ce5dac3f216d753bc75dd020af0ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d66b9ee340738784ac91f29a81a44cb9ce5dac3f216d753bc75dd020af0ac5->enter($__internal_e3d66b9ee340738784ac91f29a81a44cb9ce5dac3f216d753bc75dd020af0ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_056db75abac924ff11dc7d1ebae33a861dcb1b57cce48400e60682c6e01f0877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056db75abac924ff11dc7d1ebae33a861dcb1b57cce48400e60682c6e01f0877->enter($__internal_056db75abac924ff11dc7d1ebae33a861dcb1b57cce48400e60682c6e01f0877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_056db75abac924ff11dc7d1ebae33a861dcb1b57cce48400e60682c6e01f0877->leave($__internal_056db75abac924ff11dc7d1ebae33a861dcb1b57cce48400e60682c6e01f0877_prof);

        
        $__internal_e3d66b9ee340738784ac91f29a81a44cb9ce5dac3f216d753bc75dd020af0ac5->leave($__internal_e3d66b9ee340738784ac91f29a81a44cb9ce5dac3f216d753bc75dd020af0ac5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd201508eac9155c1bff38fc340974c6258b7743ef8f33e22f921953c967975b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd201508eac9155c1bff38fc340974c6258b7743ef8f33e22f921953c967975b->enter($__internal_bd201508eac9155c1bff38fc340974c6258b7743ef8f33e22f921953c967975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd39787846f77b9b9f5a5cc57b36f1839e4a74866c7d28954fbb32370b32f6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd39787846f77b9b9f5a5cc57b36f1839e4a74866c7d28954fbb32370b32f6bc->enter($__internal_fd39787846f77b9b9f5a5cc57b36f1839e4a74866c7d28954fbb32370b32f6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd39787846f77b9b9f5a5cc57b36f1839e4a74866c7d28954fbb32370b32f6bc->leave($__internal_fd39787846f77b9b9f5a5cc57b36f1839e4a74866c7d28954fbb32370b32f6bc_prof);

        
        $__internal_bd201508eac9155c1bff38fc340974c6258b7743ef8f33e22f921953c967975b->leave($__internal_bd201508eac9155c1bff38fc340974c6258b7743ef8f33e22f921953c967975b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_d80f15b5ebe2b369199892d9d3e8d1dc4eac6138b48079ab96557b8072c7a5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80f15b5ebe2b369199892d9d3e8d1dc4eac6138b48079ab96557b8072c7a5b4->enter($__internal_d80f15b5ebe2b369199892d9d3e8d1dc4eac6138b48079ab96557b8072c7a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5e1fb88a5894d11dac9c4e597619fae1568fe209d0cc1888a93351773c17eea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1fb88a5894d11dac9c4e597619fae1568fe209d0cc1888a93351773c17eea5->enter($__internal_5e1fb88a5894d11dac9c4e597619fae1568fe209d0cc1888a93351773c17eea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d80f15b5ebe2b369199892d9d3e8d1dc4eac6138b48079ab96557b8072c7a5b4->leave($__internal_d80f15b5ebe2b369199892d9d3e8d1dc4eac6138b48079ab96557b8072c7a5b4_prof);

        
        $__internal_5e1fb88a5894d11dac9c4e597619fae1568fe209d0cc1888a93351773c17eea5->leave($__internal_5e1fb88a5894d11dac9c4e597619fae1568fe209d0cc1888a93351773c17eea5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_365e0a83fa786cbca76b6d80cb95257919dc15295ae2c41a87b49d547ec3c7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365e0a83fa786cbca76b6d80cb95257919dc15295ae2c41a87b49d547ec3c7b5->enter($__internal_365e0a83fa786cbca76b6d80cb95257919dc15295ae2c41a87b49d547ec3c7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8236296d0f86c4930db72fb5d1148c98800a148e5156828dafb2e69e80874d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8236296d0f86c4930db72fb5d1148c98800a148e5156828dafb2e69e80874d47->enter($__internal_8236296d0f86c4930db72fb5d1148c98800a148e5156828dafb2e69e80874d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8236296d0f86c4930db72fb5d1148c98800a148e5156828dafb2e69e80874d47->leave($__internal_8236296d0f86c4930db72fb5d1148c98800a148e5156828dafb2e69e80874d47_prof);

        
        $__internal_365e0a83fa786cbca76b6d80cb95257919dc15295ae2c41a87b49d547ec3c7b5->leave($__internal_365e0a83fa786cbca76b6d80cb95257919dc15295ae2c41a87b49d547ec3c7b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfa154c6ee15b8d7ad552152eabddac3e3f262c6e62e310d18040f681b6afb27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa154c6ee15b8d7ad552152eabddac3e3f262c6e62e310d18040f681b6afb27->enter($__internal_bfa154c6ee15b8d7ad552152eabddac3e3f262c6e62e310d18040f681b6afb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec1c5239ae8c1d142137bb011672e7c591945783f83d4c3a3ce30b1497604543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1c5239ae8c1d142137bb011672e7c591945783f83d4c3a3ce30b1497604543->enter($__internal_ec1c5239ae8c1d142137bb011672e7c591945783f83d4c3a3ce30b1497604543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec1c5239ae8c1d142137bb011672e7c591945783f83d4c3a3ce30b1497604543->leave($__internal_ec1c5239ae8c1d142137bb011672e7c591945783f83d4c3a3ce30b1497604543_prof);

        
        $__internal_bfa154c6ee15b8d7ad552152eabddac3e3f262c6e62e310d18040f681b6afb27->leave($__internal_bfa154c6ee15b8d7ad552152eabddac3e3f262c6e62e310d18040f681b6afb27_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_173e32047bbdc9bf22e00a75a73c6c3632fc07657034d4dc4ba534bbbd26c3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173e32047bbdc9bf22e00a75a73c6c3632fc07657034d4dc4ba534bbbd26c3fa->enter($__internal_173e32047bbdc9bf22e00a75a73c6c3632fc07657034d4dc4ba534bbbd26c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c409ae1c0fe893dd300fac331a839679170c38259728a5765739f82ec2fd41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c409ae1c0fe893dd300fac331a839679170c38259728a5765739f82ec2fd41e->enter($__internal_5c409ae1c0fe893dd300fac331a839679170c38259728a5765739f82ec2fd41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c409ae1c0fe893dd300fac331a839679170c38259728a5765739f82ec2fd41e->leave($__internal_5c409ae1c0fe893dd300fac331a839679170c38259728a5765739f82ec2fd41e_prof);

        
        $__internal_173e32047bbdc9bf22e00a75a73c6c3632fc07657034d4dc4ba534bbbd26c3fa->leave($__internal_173e32047bbdc9bf22e00a75a73c6c3632fc07657034d4dc4ba534bbbd26c3fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

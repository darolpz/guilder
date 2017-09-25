<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b8ab7ee87333e71cb9bb32ee8ae6421e3ffbda97595a2d15cf6c32451639ae14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_453113a109e902b1faf1cc5734cd4865f399db6c2c22190ba0d9f812785a9d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453113a109e902b1faf1cc5734cd4865f399db6c2c22190ba0d9f812785a9d38->enter($__internal_453113a109e902b1faf1cc5734cd4865f399db6c2c22190ba0d9f812785a9d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bb5ac0c2f419baf9e66e2db713be40f6eee759c23b0ed6566e79c0321f069387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5ac0c2f419baf9e66e2db713be40f6eee759c23b0ed6566e79c0321f069387->enter($__internal_bb5ac0c2f419baf9e66e2db713be40f6eee759c23b0ed6566e79c0321f069387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_453113a109e902b1faf1cc5734cd4865f399db6c2c22190ba0d9f812785a9d38->leave($__internal_453113a109e902b1faf1cc5734cd4865f399db6c2c22190ba0d9f812785a9d38_prof);

        
        $__internal_bb5ac0c2f419baf9e66e2db713be40f6eee759c23b0ed6566e79c0321f069387->leave($__internal_bb5ac0c2f419baf9e66e2db713be40f6eee759c23b0ed6566e79c0321f069387_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_036752f8ce47168d5048497ef26d53dfbbeedee917007d4ce10053fa381b4f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036752f8ce47168d5048497ef26d53dfbbeedee917007d4ce10053fa381b4f18->enter($__internal_036752f8ce47168d5048497ef26d53dfbbeedee917007d4ce10053fa381b4f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42dd79ecc154e042707b07c62854639f47f06bf3146c585ccb471e9302b02eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dd79ecc154e042707b07c62854639f47f06bf3146c585ccb471e9302b02eb0->enter($__internal_42dd79ecc154e042707b07c62854639f47f06bf3146c585ccb471e9302b02eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_42dd79ecc154e042707b07c62854639f47f06bf3146c585ccb471e9302b02eb0->leave($__internal_42dd79ecc154e042707b07c62854639f47f06bf3146c585ccb471e9302b02eb0_prof);

        
        $__internal_036752f8ce47168d5048497ef26d53dfbbeedee917007d4ce10053fa381b4f18->leave($__internal_036752f8ce47168d5048497ef26d53dfbbeedee917007d4ce10053fa381b4f18_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_127120abb3fd9b9b92cae35c40259d52c5e799dd348f6d458cbf46000e91a5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127120abb3fd9b9b92cae35c40259d52c5e799dd348f6d458cbf46000e91a5cb->enter($__internal_127120abb3fd9b9b92cae35c40259d52c5e799dd348f6d458cbf46000e91a5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69a575e20e5bc6a26a48c65f9805cfbe5c71d8fe9e795668e5a6946912376488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a575e20e5bc6a26a48c65f9805cfbe5c71d8fe9e795668e5a6946912376488->enter($__internal_69a575e20e5bc6a26a48c65f9805cfbe5c71d8fe9e795668e5a6946912376488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_69a575e20e5bc6a26a48c65f9805cfbe5c71d8fe9e795668e5a6946912376488->leave($__internal_69a575e20e5bc6a26a48c65f9805cfbe5c71d8fe9e795668e5a6946912376488_prof);

        
        $__internal_127120abb3fd9b9b92cae35c40259d52c5e799dd348f6d458cbf46000e91a5cb->leave($__internal_127120abb3fd9b9b92cae35c40259d52c5e799dd348f6d458cbf46000e91a5cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf53d1012a8c6a825aa11ac4256158ab34ffc316d0a429d7d992014f8ec8f2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf53d1012a8c6a825aa11ac4256158ab34ffc316d0a429d7d992014f8ec8f2c2->enter($__internal_bf53d1012a8c6a825aa11ac4256158ab34ffc316d0a429d7d992014f8ec8f2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5be563e4eff5c0e1cc6983573a36c92aeeb74e70698bf201b52eb87660599e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be563e4eff5c0e1cc6983573a36c92aeeb74e70698bf201b52eb87660599e7e->enter($__internal_5be563e4eff5c0e1cc6983573a36c92aeeb74e70698bf201b52eb87660599e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_5be563e4eff5c0e1cc6983573a36c92aeeb74e70698bf201b52eb87660599e7e->leave($__internal_5be563e4eff5c0e1cc6983573a36c92aeeb74e70698bf201b52eb87660599e7e_prof);

        
        $__internal_bf53d1012a8c6a825aa11ac4256158ab34ffc316d0a429d7d992014f8ec8f2c2->leave($__internal_bf53d1012a8c6a825aa11ac4256158ab34ffc316d0a429d7d992014f8ec8f2c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

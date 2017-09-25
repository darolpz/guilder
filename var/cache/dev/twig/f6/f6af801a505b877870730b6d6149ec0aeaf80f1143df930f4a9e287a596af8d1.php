<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_174268c356d79ea8ba50cb5308f3c484b989d37e833255a9bbc193ea6741218d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_4ccdd7dfe3a34e8bf77ae276f0636266643d52c4b16759f68203cef4f9f94ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccdd7dfe3a34e8bf77ae276f0636266643d52c4b16759f68203cef4f9f94ff8->enter($__internal_4ccdd7dfe3a34e8bf77ae276f0636266643d52c4b16759f68203cef4f9f94ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8d54e5bde6e5b099c549a87e8b17db22129e16405e397badcd970bbb04b02bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d54e5bde6e5b099c549a87e8b17db22129e16405e397badcd970bbb04b02bf8->enter($__internal_8d54e5bde6e5b099c549a87e8b17db22129e16405e397badcd970bbb04b02bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ccdd7dfe3a34e8bf77ae276f0636266643d52c4b16759f68203cef4f9f94ff8->leave($__internal_4ccdd7dfe3a34e8bf77ae276f0636266643d52c4b16759f68203cef4f9f94ff8_prof);

        
        $__internal_8d54e5bde6e5b099c549a87e8b17db22129e16405e397badcd970bbb04b02bf8->leave($__internal_8d54e5bde6e5b099c549a87e8b17db22129e16405e397badcd970bbb04b02bf8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c09e4a2bcb1d80eb0487ac6d9e704a4e9c19cc896c52acc2aa254482afc3f35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09e4a2bcb1d80eb0487ac6d9e704a4e9c19cc896c52acc2aa254482afc3f35a->enter($__internal_c09e4a2bcb1d80eb0487ac6d9e704a4e9c19cc896c52acc2aa254482afc3f35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a994857043e8f7dcc4d0a4708d744b1a7d2478fed578ae0647fcbfdd096ba300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a994857043e8f7dcc4d0a4708d744b1a7d2478fed578ae0647fcbfdd096ba300->enter($__internal_a994857043e8f7dcc4d0a4708d744b1a7d2478fed578ae0647fcbfdd096ba300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a994857043e8f7dcc4d0a4708d744b1a7d2478fed578ae0647fcbfdd096ba300->leave($__internal_a994857043e8f7dcc4d0a4708d744b1a7d2478fed578ae0647fcbfdd096ba300_prof);

        
        $__internal_c09e4a2bcb1d80eb0487ac6d9e704a4e9c19cc896c52acc2aa254482afc3f35a->leave($__internal_c09e4a2bcb1d80eb0487ac6d9e704a4e9c19cc896c52acc2aa254482afc3f35a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2fcbc71daeec9f0b908cc63e09517f0ab66ae655147cbe6a98598527bf27b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fcbc71daeec9f0b908cc63e09517f0ab66ae655147cbe6a98598527bf27b6e->enter($__internal_e2fcbc71daeec9f0b908cc63e09517f0ab66ae655147cbe6a98598527bf27b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1256262a50620ea9ed48368fc7c4d0895f18444216c58fedfd1cd77f6ae40382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1256262a50620ea9ed48368fc7c4d0895f18444216c58fedfd1cd77f6ae40382->enter($__internal_1256262a50620ea9ed48368fc7c4d0895f18444216c58fedfd1cd77f6ae40382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1256262a50620ea9ed48368fc7c4d0895f18444216c58fedfd1cd77f6ae40382->leave($__internal_1256262a50620ea9ed48368fc7c4d0895f18444216c58fedfd1cd77f6ae40382_prof);

        
        $__internal_e2fcbc71daeec9f0b908cc63e09517f0ab66ae655147cbe6a98598527bf27b6e->leave($__internal_e2fcbc71daeec9f0b908cc63e09517f0ab66ae655147cbe6a98598527bf27b6e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_245d3c9c364d703a9169974c51ca3edbd5bf6171659fbab6fec52147c3a22243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245d3c9c364d703a9169974c51ca3edbd5bf6171659fbab6fec52147c3a22243->enter($__internal_245d3c9c364d703a9169974c51ca3edbd5bf6171659fbab6fec52147c3a22243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_17e52bd0180af72e3940f1d4bc2be7ca7c54ce19927d69c5a8d1fd8eeabf9685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e52bd0180af72e3940f1d4bc2be7ca7c54ce19927d69c5a8d1fd8eeabf9685->enter($__internal_17e52bd0180af72e3940f1d4bc2be7ca7c54ce19927d69c5a8d1fd8eeabf9685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_17e52bd0180af72e3940f1d4bc2be7ca7c54ce19927d69c5a8d1fd8eeabf9685->leave($__internal_17e52bd0180af72e3940f1d4bc2be7ca7c54ce19927d69c5a8d1fd8eeabf9685_prof);

        
        $__internal_245d3c9c364d703a9169974c51ca3edbd5bf6171659fbab6fec52147c3a22243->leave($__internal_245d3c9c364d703a9169974c51ca3edbd5bf6171659fbab6fec52147c3a22243_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

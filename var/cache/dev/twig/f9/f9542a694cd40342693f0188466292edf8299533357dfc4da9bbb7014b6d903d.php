<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_f5973c849693876b7d4a3bdad109e2e3d6736b00d934a420bc1089423becfd96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf8ea9c8150dc7299777e9358e70e04730fdbf7fe5454b0077c89964a71f86f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8ea9c8150dc7299777e9358e70e04730fdbf7fe5454b0077c89964a71f86f3->enter($__internal_bf8ea9c8150dc7299777e9358e70e04730fdbf7fe5454b0077c89964a71f86f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6fc2aec1ddd806d11663c7f335919b6996f53f4644a7a2f2dcbafde48e2e44fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc2aec1ddd806d11663c7f335919b6996f53f4644a7a2f2dcbafde48e2e44fa->enter($__internal_6fc2aec1ddd806d11663c7f335919b6996f53f4644a7a2f2dcbafde48e2e44fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8ea9c8150dc7299777e9358e70e04730fdbf7fe5454b0077c89964a71f86f3->leave($__internal_bf8ea9c8150dc7299777e9358e70e04730fdbf7fe5454b0077c89964a71f86f3_prof);

        
        $__internal_6fc2aec1ddd806d11663c7f335919b6996f53f4644a7a2f2dcbafde48e2e44fa->leave($__internal_6fc2aec1ddd806d11663c7f335919b6996f53f4644a7a2f2dcbafde48e2e44fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be9dc219b97bb683f4e545e46fb0232c262a4113a836e5e89333fffc67a54a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9dc219b97bb683f4e545e46fb0232c262a4113a836e5e89333fffc67a54a81->enter($__internal_be9dc219b97bb683f4e545e46fb0232c262a4113a836e5e89333fffc67a54a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e628adc0f8644eca2bfd39b78fcc5b3c6f8f38223319c8dd5376122e256f101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e628adc0f8644eca2bfd39b78fcc5b3c6f8f38223319c8dd5376122e256f101->enter($__internal_7e628adc0f8644eca2bfd39b78fcc5b3c6f8f38223319c8dd5376122e256f101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7e628adc0f8644eca2bfd39b78fcc5b3c6f8f38223319c8dd5376122e256f101->leave($__internal_7e628adc0f8644eca2bfd39b78fcc5b3c6f8f38223319c8dd5376122e256f101_prof);

        
        $__internal_be9dc219b97bb683f4e545e46fb0232c262a4113a836e5e89333fffc67a54a81->leave($__internal_be9dc219b97bb683f4e545e46fb0232c262a4113a836e5e89333fffc67a54a81_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

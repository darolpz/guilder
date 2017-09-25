<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a704a92509b7bb8e4c7dad095a3e46677597fd761f387f6fb1bdfd4028f853ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_0a02c3603b852125c4fbc8bbef87d4827930de514a891f93ae3bfd059fd261c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a02c3603b852125c4fbc8bbef87d4827930de514a891f93ae3bfd059fd261c4->enter($__internal_0a02c3603b852125c4fbc8bbef87d4827930de514a891f93ae3bfd059fd261c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a75a5876db7a8d084bdd1c693a99fdf086e864d8aec600e01483619a23059c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75a5876db7a8d084bdd1c693a99fdf086e864d8aec600e01483619a23059c8b->enter($__internal_a75a5876db7a8d084bdd1c693a99fdf086e864d8aec600e01483619a23059c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a02c3603b852125c4fbc8bbef87d4827930de514a891f93ae3bfd059fd261c4->leave($__internal_0a02c3603b852125c4fbc8bbef87d4827930de514a891f93ae3bfd059fd261c4_prof);

        
        $__internal_a75a5876db7a8d084bdd1c693a99fdf086e864d8aec600e01483619a23059c8b->leave($__internal_a75a5876db7a8d084bdd1c693a99fdf086e864d8aec600e01483619a23059c8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ab82674054bb9e372b6da887659057e55954320901a31c6a0fec6620b521848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab82674054bb9e372b6da887659057e55954320901a31c6a0fec6620b521848->enter($__internal_7ab82674054bb9e372b6da887659057e55954320901a31c6a0fec6620b521848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ebb5a497865f7c4aceeb6c826a35f0d154ccd83641b9a8c154119d9423234196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb5a497865f7c4aceeb6c826a35f0d154ccd83641b9a8c154119d9423234196->enter($__internal_ebb5a497865f7c4aceeb6c826a35f0d154ccd83641b9a8c154119d9423234196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ebb5a497865f7c4aceeb6c826a35f0d154ccd83641b9a8c154119d9423234196->leave($__internal_ebb5a497865f7c4aceeb6c826a35f0d154ccd83641b9a8c154119d9423234196_prof);

        
        $__internal_7ab82674054bb9e372b6da887659057e55954320901a31c6a0fec6620b521848->leave($__internal_7ab82674054bb9e372b6da887659057e55954320901a31c6a0fec6620b521848_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

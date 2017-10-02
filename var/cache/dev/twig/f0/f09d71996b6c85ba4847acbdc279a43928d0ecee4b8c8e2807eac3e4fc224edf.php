<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cf902a21c4c1433c9ea27b88cfa3e9140d354bcacd2d33cd74b9d7846d455b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_532b20730bbe9f2f38f7117bc5dc0584a3a135f31477f13e26c1b26152dfad80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532b20730bbe9f2f38f7117bc5dc0584a3a135f31477f13e26c1b26152dfad80->enter($__internal_532b20730bbe9f2f38f7117bc5dc0584a3a135f31477f13e26c1b26152dfad80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_91dc7fa3fb136dcb1f01ef495de5bd4c932d6217ccbdc322f4a12841c46e2a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dc7fa3fb136dcb1f01ef495de5bd4c932d6217ccbdc322f4a12841c46e2a43->enter($__internal_91dc7fa3fb136dcb1f01ef495de5bd4c932d6217ccbdc322f4a12841c46e2a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532b20730bbe9f2f38f7117bc5dc0584a3a135f31477f13e26c1b26152dfad80->leave($__internal_532b20730bbe9f2f38f7117bc5dc0584a3a135f31477f13e26c1b26152dfad80_prof);

        
        $__internal_91dc7fa3fb136dcb1f01ef495de5bd4c932d6217ccbdc322f4a12841c46e2a43->leave($__internal_91dc7fa3fb136dcb1f01ef495de5bd4c932d6217ccbdc322f4a12841c46e2a43_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d6eb800290c7567c163d5b367349d67ec02ede124ac178716690ad8f19d12495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6eb800290c7567c163d5b367349d67ec02ede124ac178716690ad8f19d12495->enter($__internal_d6eb800290c7567c163d5b367349d67ec02ede124ac178716690ad8f19d12495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6d83b41bbc0db7b7c2eeb5cb7abed01163c1e4f67e0d2935f76d89f6f57e9737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d83b41bbc0db7b7c2eeb5cb7abed01163c1e4f67e0d2935f76d89f6f57e9737->enter($__internal_6d83b41bbc0db7b7c2eeb5cb7abed01163c1e4f67e0d2935f76d89f6f57e9737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6d83b41bbc0db7b7c2eeb5cb7abed01163c1e4f67e0d2935f76d89f6f57e9737->leave($__internal_6d83b41bbc0db7b7c2eeb5cb7abed01163c1e4f67e0d2935f76d89f6f57e9737_prof);

        
        $__internal_d6eb800290c7567c163d5b367349d67ec02ede124ac178716690ad8f19d12495->leave($__internal_d6eb800290c7567c163d5b367349d67ec02ede124ac178716690ad8f19d12495_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1df298d53e29ac8ae9183164ec4a0fcc0ebfdf42372e17e9cc1aa8aae3508805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df298d53e29ac8ae9183164ec4a0fcc0ebfdf42372e17e9cc1aa8aae3508805->enter($__internal_1df298d53e29ac8ae9183164ec4a0fcc0ebfdf42372e17e9cc1aa8aae3508805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb75f0d3f3663d1444ee7833d05817dd45b4e8e4237f28967f71c03d98380eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb75f0d3f3663d1444ee7833d05817dd45b4e8e4237f28967f71c03d98380eff->enter($__internal_eb75f0d3f3663d1444ee7833d05817dd45b4e8e4237f28967f71c03d98380eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_eb75f0d3f3663d1444ee7833d05817dd45b4e8e4237f28967f71c03d98380eff->leave($__internal_eb75f0d3f3663d1444ee7833d05817dd45b4e8e4237f28967f71c03d98380eff_prof);

        
        $__internal_1df298d53e29ac8ae9183164ec4a0fcc0ebfdf42372e17e9cc1aa8aae3508805->leave($__internal_1df298d53e29ac8ae9183164ec4a0fcc0ebfdf42372e17e9cc1aa8aae3508805_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

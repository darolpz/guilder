<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_06c2dd773b4d829954c9452702d3f746afb478eec4c59063e786cd85db86fd3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9efc1f5f819ba5eebd21473cb369b3f4f17d1370a31702f80dd056f8bb10d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9efc1f5f819ba5eebd21473cb369b3f4f17d1370a31702f80dd056f8bb10d7f->enter($__internal_c9efc1f5f819ba5eebd21473cb369b3f4f17d1370a31702f80dd056f8bb10d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_bc7a5c042d17dccf4fc522ab6e7afd8069ad3cc180f566af90c7e30ce647d39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7a5c042d17dccf4fc522ab6e7afd8069ad3cc180f566af90c7e30ce647d39e->enter($__internal_bc7a5c042d17dccf4fc522ab6e7afd8069ad3cc180f566af90c7e30ce647d39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9efc1f5f819ba5eebd21473cb369b3f4f17d1370a31702f80dd056f8bb10d7f->leave($__internal_c9efc1f5f819ba5eebd21473cb369b3f4f17d1370a31702f80dd056f8bb10d7f_prof);

        
        $__internal_bc7a5c042d17dccf4fc522ab6e7afd8069ad3cc180f566af90c7e30ce647d39e->leave($__internal_bc7a5c042d17dccf4fc522ab6e7afd8069ad3cc180f566af90c7e30ce647d39e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2af933aa1b053ac8d9aa9b4fe9bcb477122068d24c10d5223f8323d3f87b0ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af933aa1b053ac8d9aa9b4fe9bcb477122068d24c10d5223f8323d3f87b0ba7->enter($__internal_2af933aa1b053ac8d9aa9b4fe9bcb477122068d24c10d5223f8323d3f87b0ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b871ae9aadc3fb5d1d6ad8b796997ce081376255bfa8b42469166c2a0c0a578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b871ae9aadc3fb5d1d6ad8b796997ce081376255bfa8b42469166c2a0c0a578->enter($__internal_4b871ae9aadc3fb5d1d6ad8b796997ce081376255bfa8b42469166c2a0c0a578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4b871ae9aadc3fb5d1d6ad8b796997ce081376255bfa8b42469166c2a0c0a578->leave($__internal_4b871ae9aadc3fb5d1d6ad8b796997ce081376255bfa8b42469166c2a0c0a578_prof);

        
        $__internal_2af933aa1b053ac8d9aa9b4fe9bcb477122068d24c10d5223f8323d3f87b0ba7->leave($__internal_2af933aa1b053ac8d9aa9b4fe9bcb477122068d24c10d5223f8323d3f87b0ba7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba62a604f17518cad90b2ec662f7fdfb053d254898484b97fe813f71139e86e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba62a604f17518cad90b2ec662f7fdfb053d254898484b97fe813f71139e86e5->enter($__internal_ba62a604f17518cad90b2ec662f7fdfb053d254898484b97fe813f71139e86e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0e668c5f9722b289e092359ef81bed84f568750b918c0c5b7c41636de9a7892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e668c5f9722b289e092359ef81bed84f568750b918c0c5b7c41636de9a7892->enter($__internal_b0e668c5f9722b289e092359ef81bed84f568750b918c0c5b7c41636de9a7892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_b0e668c5f9722b289e092359ef81bed84f568750b918c0c5b7c41636de9a7892->leave($__internal_b0e668c5f9722b289e092359ef81bed84f568750b918c0c5b7c41636de9a7892_prof);

        
        $__internal_ba62a604f17518cad90b2ec662f7fdfb053d254898484b97fe813f71139e86e5->leave($__internal_ba62a604f17518cad90b2ec662f7fdfb053d254898484b97fe813f71139e86e5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d663022e22d1cb8dc3dafee1184fcdf5800ebd0049ccb0d5aea09ab27fad2e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_b9c5d5aa10a6e45c3fb256874f417ba9091c888e512b10dceeef2c6d6fb1b7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c5d5aa10a6e45c3fb256874f417ba9091c888e512b10dceeef2c6d6fb1b7aa->enter($__internal_b9c5d5aa10a6e45c3fb256874f417ba9091c888e512b10dceeef2c6d6fb1b7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d34df399e0387d55ca21d895aa8499639d58fc650c83a6d599a362b8019c42dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34df399e0387d55ca21d895aa8499639d58fc650c83a6d599a362b8019c42dc->enter($__internal_d34df399e0387d55ca21d895aa8499639d58fc650c83a6d599a362b8019c42dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c5d5aa10a6e45c3fb256874f417ba9091c888e512b10dceeef2c6d6fb1b7aa->leave($__internal_b9c5d5aa10a6e45c3fb256874f417ba9091c888e512b10dceeef2c6d6fb1b7aa_prof);

        
        $__internal_d34df399e0387d55ca21d895aa8499639d58fc650c83a6d599a362b8019c42dc->leave($__internal_d34df399e0387d55ca21d895aa8499639d58fc650c83a6d599a362b8019c42dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e21cc3c10f3578f8ddd9093dccb8971244d496c6647b584d0d3465c0d2c1061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e21cc3c10f3578f8ddd9093dccb8971244d496c6647b584d0d3465c0d2c1061->enter($__internal_0e21cc3c10f3578f8ddd9093dccb8971244d496c6647b584d0d3465c0d2c1061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3dfb384f5b2a27c9e767125cf427f17dd6f11427e0fcdc13aa8f328c61b2f2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfb384f5b2a27c9e767125cf427f17dd6f11427e0fcdc13aa8f328c61b2f2b4->enter($__internal_3dfb384f5b2a27c9e767125cf427f17dd6f11427e0fcdc13aa8f328c61b2f2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3dfb384f5b2a27c9e767125cf427f17dd6f11427e0fcdc13aa8f328c61b2f2b4->leave($__internal_3dfb384f5b2a27c9e767125cf427f17dd6f11427e0fcdc13aa8f328c61b2f2b4_prof);

        
        $__internal_0e21cc3c10f3578f8ddd9093dccb8971244d496c6647b584d0d3465c0d2c1061->leave($__internal_0e21cc3c10f3578f8ddd9093dccb8971244d496c6647b584d0d3465c0d2c1061_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2523edf6393c93d53bc276b055196bca57a94fcbda4cf3400591b25379275152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2523edf6393c93d53bc276b055196bca57a94fcbda4cf3400591b25379275152->enter($__internal_2523edf6393c93d53bc276b055196bca57a94fcbda4cf3400591b25379275152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77f4e1eef942b5548c2ad578e93892596f41baf1f199a6dbfcb5ff5fda167c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f4e1eef942b5548c2ad578e93892596f41baf1f199a6dbfcb5ff5fda167c01->enter($__internal_77f4e1eef942b5548c2ad578e93892596f41baf1f199a6dbfcb5ff5fda167c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77f4e1eef942b5548c2ad578e93892596f41baf1f199a6dbfcb5ff5fda167c01->leave($__internal_77f4e1eef942b5548c2ad578e93892596f41baf1f199a6dbfcb5ff5fda167c01_prof);

        
        $__internal_2523edf6393c93d53bc276b055196bca57a94fcbda4cf3400591b25379275152->leave($__internal_2523edf6393c93d53bc276b055196bca57a94fcbda4cf3400591b25379275152_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

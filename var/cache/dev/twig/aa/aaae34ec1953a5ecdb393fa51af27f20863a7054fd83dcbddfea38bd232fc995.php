<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e376c751e330419d3f9a1a4b0a70adfbd1d2211ad6355062ee234a1596327f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17c7b7e41c1cd6687b00053720633fb8b97b85b7595b15bf69c35cd058fd3642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c7b7e41c1cd6687b00053720633fb8b97b85b7595b15bf69c35cd058fd3642->enter($__internal_17c7b7e41c1cd6687b00053720633fb8b97b85b7595b15bf69c35cd058fd3642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_260d9fd68dd6cb390b31b86d3642b75a403ba1e39aaf1a330ebe015cb3f248f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260d9fd68dd6cb390b31b86d3642b75a403ba1e39aaf1a330ebe015cb3f248f4->enter($__internal_260d9fd68dd6cb390b31b86d3642b75a403ba1e39aaf1a330ebe015cb3f248f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c7b7e41c1cd6687b00053720633fb8b97b85b7595b15bf69c35cd058fd3642->leave($__internal_17c7b7e41c1cd6687b00053720633fb8b97b85b7595b15bf69c35cd058fd3642_prof);

        
        $__internal_260d9fd68dd6cb390b31b86d3642b75a403ba1e39aaf1a330ebe015cb3f248f4->leave($__internal_260d9fd68dd6cb390b31b86d3642b75a403ba1e39aaf1a330ebe015cb3f248f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fdcb567809d8ac4423a43d64e4172cf467e1f4f58594697b224a7520e813b32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcb567809d8ac4423a43d64e4172cf467e1f4f58594697b224a7520e813b32e->enter($__internal_fdcb567809d8ac4423a43d64e4172cf467e1f4f58594697b224a7520e813b32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf18e51482292e338b7ad61e830057973a07abc2adbdde4199b0e5c535defddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf18e51482292e338b7ad61e830057973a07abc2adbdde4199b0e5c535defddf->enter($__internal_cf18e51482292e338b7ad61e830057973a07abc2adbdde4199b0e5c535defddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cf18e51482292e338b7ad61e830057973a07abc2adbdde4199b0e5c535defddf->leave($__internal_cf18e51482292e338b7ad61e830057973a07abc2adbdde4199b0e5c535defddf_prof);

        
        $__internal_fdcb567809d8ac4423a43d64e4172cf467e1f4f58594697b224a7520e813b32e->leave($__internal_fdcb567809d8ac4423a43d64e4172cf467e1f4f58594697b224a7520e813b32e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dc7935267918cea580eb818655d04bf24ea4380e04f3b255a15555a392667f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc7935267918cea580eb818655d04bf24ea4380e04f3b255a15555a392667f4->enter($__internal_2dc7935267918cea580eb818655d04bf24ea4380e04f3b255a15555a392667f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06b5d0c697fe1acf039e331a99a35e02336b982e367ab0aea7d785549800e024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b5d0c697fe1acf039e331a99a35e02336b982e367ab0aea7d785549800e024->enter($__internal_06b5d0c697fe1acf039e331a99a35e02336b982e367ab0aea7d785549800e024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_06b5d0c697fe1acf039e331a99a35e02336b982e367ab0aea7d785549800e024->leave($__internal_06b5d0c697fe1acf039e331a99a35e02336b982e367ab0aea7d785549800e024_prof);

        
        $__internal_2dc7935267918cea580eb818655d04bf24ea4380e04f3b255a15555a392667f4->leave($__internal_2dc7935267918cea580eb818655d04bf24ea4380e04f3b255a15555a392667f4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b96c54f38eb11ba6e9c8b36295e86b057b8bc95e1555d23965c02dfd1c0fb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b96c54f38eb11ba6e9c8b36295e86b057b8bc95e1555d23965c02dfd1c0fb1f->enter($__internal_8b96c54f38eb11ba6e9c8b36295e86b057b8bc95e1555d23965c02dfd1c0fb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5724b96c1ad7ebbc32fff93f60c57b90e101a1ef8e878832ec51ba8148c5e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5724b96c1ad7ebbc32fff93f60c57b90e101a1ef8e878832ec51ba8148c5e35->enter($__internal_c5724b96c1ad7ebbc32fff93f60c57b90e101a1ef8e878832ec51ba8148c5e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c5724b96c1ad7ebbc32fff93f60c57b90e101a1ef8e878832ec51ba8148c5e35->leave($__internal_c5724b96c1ad7ebbc32fff93f60c57b90e101a1ef8e878832ec51ba8148c5e35_prof);

        
        $__internal_8b96c54f38eb11ba6e9c8b36295e86b057b8bc95e1555d23965c02dfd1c0fb1f->leave($__internal_8b96c54f38eb11ba6e9c8b36295e86b057b8bc95e1555d23965c02dfd1c0fb1f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

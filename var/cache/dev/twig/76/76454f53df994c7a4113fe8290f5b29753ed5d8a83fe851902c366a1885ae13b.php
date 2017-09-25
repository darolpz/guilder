<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d8d9275fda5a46c574963590b8fde71a602c2a58a21a2c7c017a46987068e421 extends Twig_Template
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
        $__internal_2c729cc34bbe916e5206a3ce639e1fb944dbbe4e8ea7b51843be9ebc84e4ba56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c729cc34bbe916e5206a3ce639e1fb944dbbe4e8ea7b51843be9ebc84e4ba56->enter($__internal_2c729cc34bbe916e5206a3ce639e1fb944dbbe4e8ea7b51843be9ebc84e4ba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d8601e928310b01544cc1750eda34e4ecc7133afd37b22f4df8b5b46d23caf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8601e928310b01544cc1750eda34e4ecc7133afd37b22f4df8b5b46d23caf8e->enter($__internal_d8601e928310b01544cc1750eda34e4ecc7133afd37b22f4df8b5b46d23caf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c729cc34bbe916e5206a3ce639e1fb944dbbe4e8ea7b51843be9ebc84e4ba56->leave($__internal_2c729cc34bbe916e5206a3ce639e1fb944dbbe4e8ea7b51843be9ebc84e4ba56_prof);

        
        $__internal_d8601e928310b01544cc1750eda34e4ecc7133afd37b22f4df8b5b46d23caf8e->leave($__internal_d8601e928310b01544cc1750eda34e4ecc7133afd37b22f4df8b5b46d23caf8e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a3fa0460ea567d073eda61ce76507c64a80d03cfae08813060e2e20169d1bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3fa0460ea567d073eda61ce76507c64a80d03cfae08813060e2e20169d1bce->enter($__internal_6a3fa0460ea567d073eda61ce76507c64a80d03cfae08813060e2e20169d1bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48886a846894251aa2c768e3b197ef22c9e92f5457cf814e33d60d05c841a81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48886a846894251aa2c768e3b197ef22c9e92f5457cf814e33d60d05c841a81e->enter($__internal_48886a846894251aa2c768e3b197ef22c9e92f5457cf814e33d60d05c841a81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_48886a846894251aa2c768e3b197ef22c9e92f5457cf814e33d60d05c841a81e->leave($__internal_48886a846894251aa2c768e3b197ef22c9e92f5457cf814e33d60d05c841a81e_prof);

        
        $__internal_6a3fa0460ea567d073eda61ce76507c64a80d03cfae08813060e2e20169d1bce->leave($__internal_6a3fa0460ea567d073eda61ce76507c64a80d03cfae08813060e2e20169d1bce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6afda70845f03983ab227e1a88747bbc6bbf095515f31f8175899cdd0a1042c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6afda70845f03983ab227e1a88747bbc6bbf095515f31f8175899cdd0a1042c->enter($__internal_b6afda70845f03983ab227e1a88747bbc6bbf095515f31f8175899cdd0a1042c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16e699162375508afc8eace836e4fe9648b1c9408a350ccf4b8f79fb204f71c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e699162375508afc8eace836e4fe9648b1c9408a350ccf4b8f79fb204f71c1->enter($__internal_16e699162375508afc8eace836e4fe9648b1c9408a350ccf4b8f79fb204f71c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_16e699162375508afc8eace836e4fe9648b1c9408a350ccf4b8f79fb204f71c1->leave($__internal_16e699162375508afc8eace836e4fe9648b1c9408a350ccf4b8f79fb204f71c1_prof);

        
        $__internal_b6afda70845f03983ab227e1a88747bbc6bbf095515f31f8175899cdd0a1042c->leave($__internal_b6afda70845f03983ab227e1a88747bbc6bbf095515f31f8175899cdd0a1042c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a94fcb1d5b0a946525f000ef10d77d0c45274a8c70b04ffe519bf27fadfcefe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94fcb1d5b0a946525f000ef10d77d0c45274a8c70b04ffe519bf27fadfcefe7->enter($__internal_a94fcb1d5b0a946525f000ef10d77d0c45274a8c70b04ffe519bf27fadfcefe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f90c561537b340e76f53d194d5c667a5b54aff92ae78ce39370e0b674a8e8957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90c561537b340e76f53d194d5c667a5b54aff92ae78ce39370e0b674a8e8957->enter($__internal_f90c561537b340e76f53d194d5c667a5b54aff92ae78ce39370e0b674a8e8957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f90c561537b340e76f53d194d5c667a5b54aff92ae78ce39370e0b674a8e8957->leave($__internal_f90c561537b340e76f53d194d5c667a5b54aff92ae78ce39370e0b674a8e8957_prof);

        
        $__internal_a94fcb1d5b0a946525f000ef10d77d0c45274a8c70b04ffe519bf27fadfcefe7->leave($__internal_a94fcb1d5b0a946525f000ef10d77d0c45274a8c70b04ffe519bf27fadfcefe7_prof);

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

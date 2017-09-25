<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b3a8264a527d0ba217ea2e9fc99ddb32f7666432110a411754e30f16bc691484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_578c1eb11358dfe4ab971b57c9fac0364680befb340a106efb3ff5edd6dc163d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578c1eb11358dfe4ab971b57c9fac0364680befb340a106efb3ff5edd6dc163d->enter($__internal_578c1eb11358dfe4ab971b57c9fac0364680befb340a106efb3ff5edd6dc163d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_cc4bb13c5747dcd6315cf46779cad4a1c7b9d8b9d292fed332a074c24be23512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4bb13c5747dcd6315cf46779cad4a1c7b9d8b9d292fed332a074c24be23512->enter($__internal_cc4bb13c5747dcd6315cf46779cad4a1c7b9d8b9d292fed332a074c24be23512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578c1eb11358dfe4ab971b57c9fac0364680befb340a106efb3ff5edd6dc163d->leave($__internal_578c1eb11358dfe4ab971b57c9fac0364680befb340a106efb3ff5edd6dc163d_prof);

        
        $__internal_cc4bb13c5747dcd6315cf46779cad4a1c7b9d8b9d292fed332a074c24be23512->leave($__internal_cc4bb13c5747dcd6315cf46779cad4a1c7b9d8b9d292fed332a074c24be23512_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f9a6c97fd324324ad8498d9d32a465ebf851bd8ad60ac804f50d05ea2f38881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9a6c97fd324324ad8498d9d32a465ebf851bd8ad60ac804f50d05ea2f38881->enter($__internal_4f9a6c97fd324324ad8498d9d32a465ebf851bd8ad60ac804f50d05ea2f38881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b87a385132c87a26f52874282b8d3e74da63e3d72da6dd108e3943748ef69ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87a385132c87a26f52874282b8d3e74da63e3d72da6dd108e3943748ef69ff8->enter($__internal_b87a385132c87a26f52874282b8d3e74da63e3d72da6dd108e3943748ef69ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b87a385132c87a26f52874282b8d3e74da63e3d72da6dd108e3943748ef69ff8->leave($__internal_b87a385132c87a26f52874282b8d3e74da63e3d72da6dd108e3943748ef69ff8_prof);

        
        $__internal_4f9a6c97fd324324ad8498d9d32a465ebf851bd8ad60ac804f50d05ea2f38881->leave($__internal_4f9a6c97fd324324ad8498d9d32a465ebf851bd8ad60ac804f50d05ea2f38881_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e0dae7682bb9388df2f7541cc5c746ae2c78a7d49b4689d4536bda1d204e80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0dae7682bb9388df2f7541cc5c746ae2c78a7d49b4689d4536bda1d204e80e->enter($__internal_9e0dae7682bb9388df2f7541cc5c746ae2c78a7d49b4689d4536bda1d204e80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_991012c540cd192cb1db9bcc3d77a6bb7a6382e7d7439d2500161960f4481dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991012c540cd192cb1db9bcc3d77a6bb7a6382e7d7439d2500161960f4481dff->enter($__internal_991012c540cd192cb1db9bcc3d77a6bb7a6382e7d7439d2500161960f4481dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_991012c540cd192cb1db9bcc3d77a6bb7a6382e7d7439d2500161960f4481dff->leave($__internal_991012c540cd192cb1db9bcc3d77a6bb7a6382e7d7439d2500161960f4481dff_prof);

        
        $__internal_9e0dae7682bb9388df2f7541cc5c746ae2c78a7d49b4689d4536bda1d204e80e->leave($__internal_9e0dae7682bb9388df2f7541cc5c746ae2c78a7d49b4689d4536bda1d204e80e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cd6f1b9eb4a659ef4bd711a444e86a2659fdf006b4136f8115a5c6bf4435a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd6f1b9eb4a659ef4bd711a444e86a2659fdf006b4136f8115a5c6bf4435a33->enter($__internal_3cd6f1b9eb4a659ef4bd711a444e86a2659fdf006b4136f8115a5c6bf4435a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_034d44f7e7a6211c34bf6cf84fbbe27e53514c40a5600f54ed6498403363f9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034d44f7e7a6211c34bf6cf84fbbe27e53514c40a5600f54ed6498403363f9bc->enter($__internal_034d44f7e7a6211c34bf6cf84fbbe27e53514c40a5600f54ed6498403363f9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_034d44f7e7a6211c34bf6cf84fbbe27e53514c40a5600f54ed6498403363f9bc->leave($__internal_034d44f7e7a6211c34bf6cf84fbbe27e53514c40a5600f54ed6498403363f9bc_prof);

        
        $__internal_3cd6f1b9eb4a659ef4bd711a444e86a2659fdf006b4136f8115a5c6bf4435a33->leave($__internal_3cd6f1b9eb4a659ef4bd711a444e86a2659fdf006b4136f8115a5c6bf4435a33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

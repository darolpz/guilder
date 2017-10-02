<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f483fb8eb43fd5139bc5a55397d4158c4140f40505b81b81151a3f167637455b extends Twig_Template
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
        $__internal_80508aa09b50e1e36e692b56868ef294ebcad5dc9f1daba02334f199c2170390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80508aa09b50e1e36e692b56868ef294ebcad5dc9f1daba02334f199c2170390->enter($__internal_80508aa09b50e1e36e692b56868ef294ebcad5dc9f1daba02334f199c2170390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f4ae10ff9adc48ae342b7128efc466823e40bfcfb8cd2c785934adfb7f4ce6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ae10ff9adc48ae342b7128efc466823e40bfcfb8cd2c785934adfb7f4ce6f4->enter($__internal_f4ae10ff9adc48ae342b7128efc466823e40bfcfb8cd2c785934adfb7f4ce6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80508aa09b50e1e36e692b56868ef294ebcad5dc9f1daba02334f199c2170390->leave($__internal_80508aa09b50e1e36e692b56868ef294ebcad5dc9f1daba02334f199c2170390_prof);

        
        $__internal_f4ae10ff9adc48ae342b7128efc466823e40bfcfb8cd2c785934adfb7f4ce6f4->leave($__internal_f4ae10ff9adc48ae342b7128efc466823e40bfcfb8cd2c785934adfb7f4ce6f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39e7b7a837501b734c7dc0747e300d03f219b59c440ae63c873583a7ed319c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e7b7a837501b734c7dc0747e300d03f219b59c440ae63c873583a7ed319c8f->enter($__internal_39e7b7a837501b734c7dc0747e300d03f219b59c440ae63c873583a7ed319c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea9b79159ed21eba73229c36ef742690f0657fc9644a595372ee409c6e585af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9b79159ed21eba73229c36ef742690f0657fc9644a595372ee409c6e585af6->enter($__internal_ea9b79159ed21eba73229c36ef742690f0657fc9644a595372ee409c6e585af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea9b79159ed21eba73229c36ef742690f0657fc9644a595372ee409c6e585af6->leave($__internal_ea9b79159ed21eba73229c36ef742690f0657fc9644a595372ee409c6e585af6_prof);

        
        $__internal_39e7b7a837501b734c7dc0747e300d03f219b59c440ae63c873583a7ed319c8f->leave($__internal_39e7b7a837501b734c7dc0747e300d03f219b59c440ae63c873583a7ed319c8f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_08c12be530bafc43ba5605e9cdb987c13a751da4994188469d0a81a0e93dbd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c12be530bafc43ba5605e9cdb987c13a751da4994188469d0a81a0e93dbd73->enter($__internal_08c12be530bafc43ba5605e9cdb987c13a751da4994188469d0a81a0e93dbd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c65b2a060fc7395cf6020fed19d399e9d402645dea26c7301118918137fd91ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65b2a060fc7395cf6020fed19d399e9d402645dea26c7301118918137fd91ad->enter($__internal_c65b2a060fc7395cf6020fed19d399e9d402645dea26c7301118918137fd91ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c65b2a060fc7395cf6020fed19d399e9d402645dea26c7301118918137fd91ad->leave($__internal_c65b2a060fc7395cf6020fed19d399e9d402645dea26c7301118918137fd91ad_prof);

        
        $__internal_08c12be530bafc43ba5605e9cdb987c13a751da4994188469d0a81a0e93dbd73->leave($__internal_08c12be530bafc43ba5605e9cdb987c13a751da4994188469d0a81a0e93dbd73_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_86de317543574cb907316744b70f586eace293218e31a75d9caa0921e5a22ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86de317543574cb907316744b70f586eace293218e31a75d9caa0921e5a22ebf->enter($__internal_86de317543574cb907316744b70f586eace293218e31a75d9caa0921e5a22ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c480eda5b5875e42ce97f9f6f6140f48b54ebe810e0cead4eb52031d2c33147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c480eda5b5875e42ce97f9f6f6140f48b54ebe810e0cead4eb52031d2c33147->enter($__internal_4c480eda5b5875e42ce97f9f6f6140f48b54ebe810e0cead4eb52031d2c33147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4c480eda5b5875e42ce97f9f6f6140f48b54ebe810e0cead4eb52031d2c33147->leave($__internal_4c480eda5b5875e42ce97f9f6f6140f48b54ebe810e0cead4eb52031d2c33147_prof);

        
        $__internal_86de317543574cb907316744b70f586eace293218e31a75d9caa0921e5a22ebf->leave($__internal_86de317543574cb907316744b70f586eace293218e31a75d9caa0921e5a22ebf_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

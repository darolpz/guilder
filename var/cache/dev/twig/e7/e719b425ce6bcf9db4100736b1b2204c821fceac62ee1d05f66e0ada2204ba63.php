<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_67d42c606f1a91315abdbc6f52c68a2de0071c7c1c41131321557e4f9fbe6d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37573b3bdc05e02f9a70e13be9fbb46588847c82672ff2b8c0ccf0c79e38f16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37573b3bdc05e02f9a70e13be9fbb46588847c82672ff2b8c0ccf0c79e38f16d->enter($__internal_37573b3bdc05e02f9a70e13be9fbb46588847c82672ff2b8c0ccf0c79e38f16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_69cdc92214d821f2452158d4d6a0d4747dde8c164baa421a3d61dffac1e17b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cdc92214d821f2452158d4d6a0d4747dde8c164baa421a3d61dffac1e17b24->enter($__internal_69cdc92214d821f2452158d4d6a0d4747dde8c164baa421a3d61dffac1e17b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37573b3bdc05e02f9a70e13be9fbb46588847c82672ff2b8c0ccf0c79e38f16d->leave($__internal_37573b3bdc05e02f9a70e13be9fbb46588847c82672ff2b8c0ccf0c79e38f16d_prof);

        
        $__internal_69cdc92214d821f2452158d4d6a0d4747dde8c164baa421a3d61dffac1e17b24->leave($__internal_69cdc92214d821f2452158d4d6a0d4747dde8c164baa421a3d61dffac1e17b24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_539eb3693e62af52489efb65d86a2a960ee4eb63a08ad4d850f326d453c0317e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539eb3693e62af52489efb65d86a2a960ee4eb63a08ad4d850f326d453c0317e->enter($__internal_539eb3693e62af52489efb65d86a2a960ee4eb63a08ad4d850f326d453c0317e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2eab07a80baff3e4acb26ca1e98886543712b9477d9ffdf0c99b5ab5407dacae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eab07a80baff3e4acb26ca1e98886543712b9477d9ffdf0c99b5ab5407dacae->enter($__internal_2eab07a80baff3e4acb26ca1e98886543712b9477d9ffdf0c99b5ab5407dacae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>Error: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Ocurrió un error</h1>
        <h2>El servidor devolvió un \"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

        <div>
            ";
        // line 16
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 16, $this->getSourceContext()); })()) == 403)) {
            // line 17
            echo "                <h2>Usted no tiene acceso a la página\"</h2>
            ";
        } elseif ((        // line 18
(isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 18, $this->getSourceContext()); })()) == 404)) {
            // line 19
            echo "                <h2>La página no existe\"</h2>
            ";
        }
        // line 21
        echo "        </div>
    </body>
</html>

";
        
        $__internal_2eab07a80baff3e4acb26ca1e98886543712b9477d9ffdf0c99b5ab5407dacae->leave($__internal_2eab07a80baff3e4acb26ca1e98886543712b9477d9ffdf0c99b5ab5407dacae_prof);

        
        $__internal_539eb3693e62af52489efb65d86a2a960ee4eb63a08ad4d850f326d453c0317e->leave($__internal_539eb3693e62af52489efb65d86a2a960ee4eb63a08ad4d850f326d453c0317e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  81 => 19,  79 => 18,  76 => 17,  74 => 16,  66 => 13,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>Error: {{ status_text }}</title>
    </head>
    <body>
        <h1>Ocurrió un error</h1>
        <h2>El servidor devolvió un \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            {% if status_code == 403 %}
                <h2>Usted no tiene acceso a la página\"</h2>
            {% elseif status_code == 404 %}
                <h2>La página no existe\"</h2>
            {% endif %}
        </div>
    </body>
</html>

{% endblock %}", "@Twig/Exception/error.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\TwigBundle\\views\\Exception\\error.html.twig");
    }
}

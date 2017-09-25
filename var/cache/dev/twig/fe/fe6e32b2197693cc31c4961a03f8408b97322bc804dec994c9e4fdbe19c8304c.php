<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_c971ee6d7e33e84fc1f37479e340e856482cfaa66d8ebc178e89c471a31bfcd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error.html.twig", 1);
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
        $__internal_87a375b25e3a6734e936cc35695fbf8d620344197010f18ea0521b85f43b86f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a375b25e3a6734e936cc35695fbf8d620344197010f18ea0521b85f43b86f8->enter($__internal_87a375b25e3a6734e936cc35695fbf8d620344197010f18ea0521b85f43b86f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_2ab5abc1db438d6ab374266728486d9c46d9b50d96a599d78851717d7d4f1f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab5abc1db438d6ab374266728486d9c46d9b50d96a599d78851717d7d4f1f6d->enter($__internal_2ab5abc1db438d6ab374266728486d9c46d9b50d96a599d78851717d7d4f1f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87a375b25e3a6734e936cc35695fbf8d620344197010f18ea0521b85f43b86f8->leave($__internal_87a375b25e3a6734e936cc35695fbf8d620344197010f18ea0521b85f43b86f8_prof);

        
        $__internal_2ab5abc1db438d6ab374266728486d9c46d9b50d96a599d78851717d7d4f1f6d->leave($__internal_2ab5abc1db438d6ab374266728486d9c46d9b50d96a599d78851717d7d4f1f6d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36bf6a7b1d0d763e575bffc223e8c6a7d8a6f17efb12b51b53c36a239e481c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36bf6a7b1d0d763e575bffc223e8c6a7d8a6f17efb12b51b53c36a239e481c67->enter($__internal_36bf6a7b1d0d763e575bffc223e8c6a7d8a6f17efb12b51b53c36a239e481c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24a8e44500afa37d89805c38e9ae3fd22e3c59cde7ec93f6f552c7091086cb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a8e44500afa37d89805c38e9ae3fd22e3c59cde7ec93f6f552c7091086cb75->enter($__internal_24a8e44500afa37d89805c38e9ae3fd22e3c59cde7ec93f6f552c7091086cb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24a8e44500afa37d89805c38e9ae3fd22e3c59cde7ec93f6f552c7091086cb75->leave($__internal_24a8e44500afa37d89805c38e9ae3fd22e3c59cde7ec93f6f552c7091086cb75_prof);

        
        $__internal_36bf6a7b1d0d763e575bffc223e8c6a7d8a6f17efb12b51b53c36a239e481c67->leave($__internal_36bf6a7b1d0d763e575bffc223e8c6a7d8a6f17efb12b51b53c36a239e481c67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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

{% endblock %}", "TwigBundle:Exception:error.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}

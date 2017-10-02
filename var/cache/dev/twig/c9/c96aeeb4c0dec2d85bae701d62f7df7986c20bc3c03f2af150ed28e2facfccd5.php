<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_adcc6815e609bcf1f1bcd66fc45f87bfee9380c503bf9ff002d9b88ff6a1f823 extends Twig_Template
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
        $__internal_af5196c04a26645d3566749a4091ecb84c0281a6cbc04687980705332c3b3eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5196c04a26645d3566749a4091ecb84c0281a6cbc04687980705332c3b3eec->enter($__internal_af5196c04a26645d3566749a4091ecb84c0281a6cbc04687980705332c3b3eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_56d476818f56c38f9b295bfdbb452215adc780e29f20d6a21e4cbc042ddf0d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d476818f56c38f9b295bfdbb452215adc780e29f20d6a21e4cbc042ddf0d2c->enter($__internal_56d476818f56c38f9b295bfdbb452215adc780e29f20d6a21e4cbc042ddf0d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af5196c04a26645d3566749a4091ecb84c0281a6cbc04687980705332c3b3eec->leave($__internal_af5196c04a26645d3566749a4091ecb84c0281a6cbc04687980705332c3b3eec_prof);

        
        $__internal_56d476818f56c38f9b295bfdbb452215adc780e29f20d6a21e4cbc042ddf0d2c->leave($__internal_56d476818f56c38f9b295bfdbb452215adc780e29f20d6a21e4cbc042ddf0d2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e578205c89852a84a9c885f299647481f6e88a7db00347a2d950d65c96e5e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e578205c89852a84a9c885f299647481f6e88a7db00347a2d950d65c96e5e50->enter($__internal_8e578205c89852a84a9c885f299647481f6e88a7db00347a2d950d65c96e5e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9971a809bd05a420d9a19679e36961f5e69b39c17b09a6918e8e18dff39a707c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9971a809bd05a420d9a19679e36961f5e69b39c17b09a6918e8e18dff39a707c->enter($__internal_9971a809bd05a420d9a19679e36961f5e69b39c17b09a6918e8e18dff39a707c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Ocurrió un error</h1>
        <h2>El servidor devolvió un \"";
        // line 13
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            ";
        // line 16
        if ((($context["status_code"] ?? $this->getContext($context, "status_code")) == 403)) {
            // line 17
            echo "                <h2>Usted no tiene acceso a la página\"</h2>
            ";
        } elseif ((        // line 18
($context["status_code"] ?? $this->getContext($context, "status_code")) == 404)) {
            // line 19
            echo "                <h2>La página no existe\"</h2>
            ";
        }
        // line 21
        echo "        </div>
    </body>
</html>

";
        
        $__internal_9971a809bd05a420d9a19679e36961f5e69b39c17b09a6918e8e18dff39a707c->leave($__internal_9971a809bd05a420d9a19679e36961f5e69b39c17b09a6918e8e18dff39a707c_prof);

        
        $__internal_8e578205c89852a84a9c885f299647481f6e88a7db00347a2d950d65c96e5e50->leave($__internal_8e578205c89852a84a9c885f299647481f6e88a7db00347a2d950d65c96e5e50_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

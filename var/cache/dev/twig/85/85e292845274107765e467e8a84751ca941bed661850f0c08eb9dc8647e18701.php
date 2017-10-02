<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_24a7c521b2525502368ce6385a244cc0cf162038fbfac22f8a8de77b0f88c1ad extends Twig_Template
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
        $__internal_0f3b2900ea503b3e177eb23809c83a635580455e198c37b49f1d8b5b0d9b8fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3b2900ea503b3e177eb23809c83a635580455e198c37b49f1d8b5b0d9b8fdc->enter($__internal_0f3b2900ea503b3e177eb23809c83a635580455e198c37b49f1d8b5b0d9b8fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_c66aa0ec69d6489b41b602bcfe40fe3a6e929b6b96532fff73cf3135212119e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66aa0ec69d6489b41b602bcfe40fe3a6e929b6b96532fff73cf3135212119e2->enter($__internal_c66aa0ec69d6489b41b602bcfe40fe3a6e929b6b96532fff73cf3135212119e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3b2900ea503b3e177eb23809c83a635580455e198c37b49f1d8b5b0d9b8fdc->leave($__internal_0f3b2900ea503b3e177eb23809c83a635580455e198c37b49f1d8b5b0d9b8fdc_prof);

        
        $__internal_c66aa0ec69d6489b41b602bcfe40fe3a6e929b6b96532fff73cf3135212119e2->leave($__internal_c66aa0ec69d6489b41b602bcfe40fe3a6e929b6b96532fff73cf3135212119e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9df518002086166c2e7b68cb7af6da7543e1b663ed31ec9ffb2a2269650e6813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df518002086166c2e7b68cb7af6da7543e1b663ed31ec9ffb2a2269650e6813->enter($__internal_9df518002086166c2e7b68cb7af6da7543e1b663ed31ec9ffb2a2269650e6813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a0342f458ac87cfc0231d2d182c1ac473e2b1e9e9386a0d84462c95af2725c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0342f458ac87cfc0231d2d182c1ac473e2b1e9e9386a0d84462c95af2725c0->enter($__internal_0a0342f458ac87cfc0231d2d182c1ac473e2b1e9e9386a0d84462c95af2725c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a0342f458ac87cfc0231d2d182c1ac473e2b1e9e9386a0d84462c95af2725c0->leave($__internal_0a0342f458ac87cfc0231d2d182c1ac473e2b1e9e9386a0d84462c95af2725c0_prof);

        
        $__internal_9df518002086166c2e7b68cb7af6da7543e1b663ed31ec9ffb2a2269650e6813->leave($__internal_9df518002086166c2e7b68cb7af6da7543e1b663ed31ec9ffb2a2269650e6813_prof);

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

{% endblock %}", "TwigBundle:Exception:error.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}

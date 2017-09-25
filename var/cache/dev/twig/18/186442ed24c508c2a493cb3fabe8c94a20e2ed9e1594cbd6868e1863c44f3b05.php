<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_27cd54e771b62bfb5488156eff459d6833faa17cda10e6d73c83992378103397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_36117b6da68ff2a64f6718818e461fc21c6650fe5d500d6e3ff34a3fa6a4bab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36117b6da68ff2a64f6718818e461fc21c6650fe5d500d6e3ff34a3fa6a4bab7->enter($__internal_36117b6da68ff2a64f6718818e461fc21c6650fe5d500d6e3ff34a3fa6a4bab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c9f5580ad1273ca02144dc76f8ddac7b3958a745ecc86bfb08160e48f4020a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f5580ad1273ca02144dc76f8ddac7b3958a745ecc86bfb08160e48f4020a9a->enter($__internal_c9f5580ad1273ca02144dc76f8ddac7b3958a745ecc86bfb08160e48f4020a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36117b6da68ff2a64f6718818e461fc21c6650fe5d500d6e3ff34a3fa6a4bab7->leave($__internal_36117b6da68ff2a64f6718818e461fc21c6650fe5d500d6e3ff34a3fa6a4bab7_prof);

        
        $__internal_c9f5580ad1273ca02144dc76f8ddac7b3958a745ecc86bfb08160e48f4020a9a->leave($__internal_c9f5580ad1273ca02144dc76f8ddac7b3958a745ecc86bfb08160e48f4020a9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da14e5a47bb7b5c8a2ed42d1e6a20a400731cb56cea6782e7ca4ae19fa5773ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da14e5a47bb7b5c8a2ed42d1e6a20a400731cb56cea6782e7ca4ae19fa5773ea->enter($__internal_da14e5a47bb7b5c8a2ed42d1e6a20a400731cb56cea6782e7ca4ae19fa5773ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15f4b09c01314809fd4760705ba4ca41a35e0a1f9a53ba60003ffe3bb9c20432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f4b09c01314809fd4760705ba4ca41a35e0a1f9a53ba60003ffe3bb9c20432->enter($__internal_15f4b09c01314809fd4760705ba4ca41a35e0a1f9a53ba60003ffe3bb9c20432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_15f4b09c01314809fd4760705ba4ca41a35e0a1f9a53ba60003ffe3bb9c20432->leave($__internal_15f4b09c01314809fd4760705ba4ca41a35e0a1f9a53ba60003ffe3bb9c20432_prof);

        
        $__internal_da14e5a47bb7b5c8a2ed42d1e6a20a400731cb56cea6782e7ca4ae19fa5773ea->leave($__internal_da14e5a47bb7b5c8a2ed42d1e6a20a400731cb56cea6782e7ca4ae19fa5773ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a9ed0928b359fd7425644dbcc8091712893d8828e6426a27163687d1eff6dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9ed0928b359fd7425644dbcc8091712893d8828e6426a27163687d1eff6dbc->enter($__internal_5a9ed0928b359fd7425644dbcc8091712893d8828e6426a27163687d1eff6dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6717a87e82cf91a1692c0a44df1a9319690614a9050cd202754e38ac2505763b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6717a87e82cf91a1692c0a44df1a9319690614a9050cd202754e38ac2505763b->enter($__internal_6717a87e82cf91a1692c0a44df1a9319690614a9050cd202754e38ac2505763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6717a87e82cf91a1692c0a44df1a9319690614a9050cd202754e38ac2505763b->leave($__internal_6717a87e82cf91a1692c0a44df1a9319690614a9050cd202754e38ac2505763b_prof);

        
        $__internal_5a9ed0928b359fd7425644dbcc8091712893d8828e6426a27163687d1eff6dbc->leave($__internal_5a9ed0928b359fd7425644dbcc8091712893d8828e6426a27163687d1eff6dbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_004ed2c035a0936893d03c557d3f66e4ffb22ea4677e43bb1b574f1910da27c6 extends Twig_Template
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
        $__internal_14821507d85a17f93da190f8d8de0217c6e6539bc529b74c73ed554e6bf91dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14821507d85a17f93da190f8d8de0217c6e6539bc529b74c73ed554e6bf91dc0->enter($__internal_14821507d85a17f93da190f8d8de0217c6e6539bc529b74c73ed554e6bf91dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3e8540f13edd6de34f016bfeea795f75a99f6dbc11663d91534310c4ef256b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8540f13edd6de34f016bfeea795f75a99f6dbc11663d91534310c4ef256b05->enter($__internal_3e8540f13edd6de34f016bfeea795f75a99f6dbc11663d91534310c4ef256b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14821507d85a17f93da190f8d8de0217c6e6539bc529b74c73ed554e6bf91dc0->leave($__internal_14821507d85a17f93da190f8d8de0217c6e6539bc529b74c73ed554e6bf91dc0_prof);

        
        $__internal_3e8540f13edd6de34f016bfeea795f75a99f6dbc11663d91534310c4ef256b05->leave($__internal_3e8540f13edd6de34f016bfeea795f75a99f6dbc11663d91534310c4ef256b05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a082835550a76942dd5b96cefd6df1e885d4acb351a1945ed47aeed66e348ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a082835550a76942dd5b96cefd6df1e885d4acb351a1945ed47aeed66e348ef->enter($__internal_9a082835550a76942dd5b96cefd6df1e885d4acb351a1945ed47aeed66e348ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc97ab712bde368b2ca421e972f11ee7271aed14175f1ee2780b9e100f5242ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc97ab712bde368b2ca421e972f11ee7271aed14175f1ee2780b9e100f5242ed->enter($__internal_dc97ab712bde368b2ca421e972f11ee7271aed14175f1ee2780b9e100f5242ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dc97ab712bde368b2ca421e972f11ee7271aed14175f1ee2780b9e100f5242ed->leave($__internal_dc97ab712bde368b2ca421e972f11ee7271aed14175f1ee2780b9e100f5242ed_prof);

        
        $__internal_9a082835550a76942dd5b96cefd6df1e885d4acb351a1945ed47aeed66e348ef->leave($__internal_9a082835550a76942dd5b96cefd6df1e885d4acb351a1945ed47aeed66e348ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcd28f3d004988f24a7d3bafd84d3b89bf32a7e5ac1f46d14a150124cca6436c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd28f3d004988f24a7d3bafd84d3b89bf32a7e5ac1f46d14a150124cca6436c->enter($__internal_bcd28f3d004988f24a7d3bafd84d3b89bf32a7e5ac1f46d14a150124cca6436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d09481aef7cde3c8eb953204678228e2976bb4f8c26bc51176f6efbcf6dc609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d09481aef7cde3c8eb953204678228e2976bb4f8c26bc51176f6efbcf6dc609->enter($__internal_9d09481aef7cde3c8eb953204678228e2976bb4f8c26bc51176f6efbcf6dc609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_9d09481aef7cde3c8eb953204678228e2976bb4f8c26bc51176f6efbcf6dc609->leave($__internal_9d09481aef7cde3c8eb953204678228e2976bb4f8c26bc51176f6efbcf6dc609_prof);

        
        $__internal_bcd28f3d004988f24a7d3bafd84d3b89bf32a7e5ac1f46d14a150124cca6436c->leave($__internal_bcd28f3d004988f24a7d3bafd84d3b89bf32a7e5ac1f46d14a150124cca6436c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

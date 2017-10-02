<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a19bda121ee4596e3f49be1d55380b502617e75c6213f5a735ef4dbf693a42c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_7dda279358a79a8631db9bc866eb1801d6932f5307fff44e0fe516b7ce2d992a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dda279358a79a8631db9bc866eb1801d6932f5307fff44e0fe516b7ce2d992a->enter($__internal_7dda279358a79a8631db9bc866eb1801d6932f5307fff44e0fe516b7ce2d992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c64a4c39a354216b56a78562e3bae70b7ce2b3fa8d1758bc7c10613e8016ecbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64a4c39a354216b56a78562e3bae70b7ce2b3fa8d1758bc7c10613e8016ecbd->enter($__internal_c64a4c39a354216b56a78562e3bae70b7ce2b3fa8d1758bc7c10613e8016ecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dda279358a79a8631db9bc866eb1801d6932f5307fff44e0fe516b7ce2d992a->leave($__internal_7dda279358a79a8631db9bc866eb1801d6932f5307fff44e0fe516b7ce2d992a_prof);

        
        $__internal_c64a4c39a354216b56a78562e3bae70b7ce2b3fa8d1758bc7c10613e8016ecbd->leave($__internal_c64a4c39a354216b56a78562e3bae70b7ce2b3fa8d1758bc7c10613e8016ecbd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d199791079e7da68a1204463852f5e07c9e068d4b70fc4c336a8f03ddfcfc949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d199791079e7da68a1204463852f5e07c9e068d4b70fc4c336a8f03ddfcfc949->enter($__internal_d199791079e7da68a1204463852f5e07c9e068d4b70fc4c336a8f03ddfcfc949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f51750dff271a280874c01bae91a8cc0c2bf353f3a41cca2e3e9496e8d9ee653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51750dff271a280874c01bae91a8cc0c2bf353f3a41cca2e3e9496e8d9ee653->enter($__internal_f51750dff271a280874c01bae91a8cc0c2bf353f3a41cca2e3e9496e8d9ee653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f51750dff271a280874c01bae91a8cc0c2bf353f3a41cca2e3e9496e8d9ee653->leave($__internal_f51750dff271a280874c01bae91a8cc0c2bf353f3a41cca2e3e9496e8d9ee653_prof);

        
        $__internal_d199791079e7da68a1204463852f5e07c9e068d4b70fc4c336a8f03ddfcfc949->leave($__internal_d199791079e7da68a1204463852f5e07c9e068d4b70fc4c336a8f03ddfcfc949_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_324be99a0505462f4229fadd2ad4d308bd5a2a57e34d32c36bf573cf93b15807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324be99a0505462f4229fadd2ad4d308bd5a2a57e34d32c36bf573cf93b15807->enter($__internal_324be99a0505462f4229fadd2ad4d308bd5a2a57e34d32c36bf573cf93b15807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dd86150960594569964d2a8621e129898fb3970c277ff49d1995e954b4374b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd86150960594569964d2a8621e129898fb3970c277ff49d1995e954b4374b5->enter($__internal_8dd86150960594569964d2a8621e129898fb3970c277ff49d1995e954b4374b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8dd86150960594569964d2a8621e129898fb3970c277ff49d1995e954b4374b5->leave($__internal_8dd86150960594569964d2a8621e129898fb3970c277ff49d1995e954b4374b5_prof);

        
        $__internal_324be99a0505462f4229fadd2ad4d308bd5a2a57e34d32c36bf573cf93b15807->leave($__internal_324be99a0505462f4229fadd2ad4d308bd5a2a57e34d32c36bf573cf93b15807_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

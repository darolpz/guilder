<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6b0c1a5c870b57a72990d5fd415553bad586dbc623011a4c4e7bce793b90ef7b extends Twig_Template
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
        $__internal_4c7584f3f506f60abccb6b31a82b1fc3badedbf7078fb7213617dd7fb7fc4726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7584f3f506f60abccb6b31a82b1fc3badedbf7078fb7213617dd7fb7fc4726->enter($__internal_4c7584f3f506f60abccb6b31a82b1fc3badedbf7078fb7213617dd7fb7fc4726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_eee877cbc8be20a1cdde4d6ff1dadbc8ae5846442d411e1e4ab651a28abb68c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee877cbc8be20a1cdde4d6ff1dadbc8ae5846442d411e1e4ab651a28abb68c6->enter($__internal_eee877cbc8be20a1cdde4d6ff1dadbc8ae5846442d411e1e4ab651a28abb68c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7584f3f506f60abccb6b31a82b1fc3badedbf7078fb7213617dd7fb7fc4726->leave($__internal_4c7584f3f506f60abccb6b31a82b1fc3badedbf7078fb7213617dd7fb7fc4726_prof);

        
        $__internal_eee877cbc8be20a1cdde4d6ff1dadbc8ae5846442d411e1e4ab651a28abb68c6->leave($__internal_eee877cbc8be20a1cdde4d6ff1dadbc8ae5846442d411e1e4ab651a28abb68c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8377483a519904d941b951d9236097cf41c2d28f2fd6a07ec802477ddd686526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8377483a519904d941b951d9236097cf41c2d28f2fd6a07ec802477ddd686526->enter($__internal_8377483a519904d941b951d9236097cf41c2d28f2fd6a07ec802477ddd686526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a3bf053a560b58b0eb6bd9b1df7b0db8c655d7d7a5030ef0aebb4304f55fa7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3bf053a560b58b0eb6bd9b1df7b0db8c655d7d7a5030ef0aebb4304f55fa7c->enter($__internal_1a3bf053a560b58b0eb6bd9b1df7b0db8c655d7d7a5030ef0aebb4304f55fa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1a3bf053a560b58b0eb6bd9b1df7b0db8c655d7d7a5030ef0aebb4304f55fa7c->leave($__internal_1a3bf053a560b58b0eb6bd9b1df7b0db8c655d7d7a5030ef0aebb4304f55fa7c_prof);

        
        $__internal_8377483a519904d941b951d9236097cf41c2d28f2fd6a07ec802477ddd686526->leave($__internal_8377483a519904d941b951d9236097cf41c2d28f2fd6a07ec802477ddd686526_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7de604fc97918dbef5b444bc337862bc438e4114a572514a03b6b825565da732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de604fc97918dbef5b444bc337862bc438e4114a572514a03b6b825565da732->enter($__internal_7de604fc97918dbef5b444bc337862bc438e4114a572514a03b6b825565da732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b45d812250a42bd7973c12b30cb0e6aca519e5a3dafca723cb915ff7974f59c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45d812250a42bd7973c12b30cb0e6aca519e5a3dafca723cb915ff7974f59c9->enter($__internal_b45d812250a42bd7973c12b30cb0e6aca519e5a3dafca723cb915ff7974f59c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b45d812250a42bd7973c12b30cb0e6aca519e5a3dafca723cb915ff7974f59c9->leave($__internal_b45d812250a42bd7973c12b30cb0e6aca519e5a3dafca723cb915ff7974f59c9_prof);

        
        $__internal_7de604fc97918dbef5b444bc337862bc438e4114a572514a03b6b825565da732->leave($__internal_7de604fc97918dbef5b444bc337862bc438e4114a572514a03b6b825565da732_prof);

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

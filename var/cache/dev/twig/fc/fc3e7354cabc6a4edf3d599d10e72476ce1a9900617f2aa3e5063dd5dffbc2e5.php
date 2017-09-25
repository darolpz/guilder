<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_062d5cd9a002a8ee452a285eccbea067cf02384548cebf48f1f11a1fe68ce6e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1801592895e5e11d1d9cae01caad4fc84eb4db3c0817b6628af1322d136fb6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1801592895e5e11d1d9cae01caad4fc84eb4db3c0817b6628af1322d136fb6a6->enter($__internal_1801592895e5e11d1d9cae01caad4fc84eb4db3c0817b6628af1322d136fb6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_107ca1f0a12bd6a0ba65e122cdd1f198d8bf88dbd0af72e9a780cff54e7607aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107ca1f0a12bd6a0ba65e122cdd1f198d8bf88dbd0af72e9a780cff54e7607aa->enter($__internal_107ca1f0a12bd6a0ba65e122cdd1f198d8bf88dbd0af72e9a780cff54e7607aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1801592895e5e11d1d9cae01caad4fc84eb4db3c0817b6628af1322d136fb6a6->leave($__internal_1801592895e5e11d1d9cae01caad4fc84eb4db3c0817b6628af1322d136fb6a6_prof);

        
        $__internal_107ca1f0a12bd6a0ba65e122cdd1f198d8bf88dbd0af72e9a780cff54e7607aa->leave($__internal_107ca1f0a12bd6a0ba65e122cdd1f198d8bf88dbd0af72e9a780cff54e7607aa_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8b73102ca2849655ef091b902909fe8fdc1cda326434eb11d203a43a3b1e5eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b73102ca2849655ef091b902909fe8fdc1cda326434eb11d203a43a3b1e5eff->enter($__internal_8b73102ca2849655ef091b902909fe8fdc1cda326434eb11d203a43a3b1e5eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2c7500f57f9613393efc320bd36c2e85187470fcadfe12e7f3943960eb53de0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7500f57f9613393efc320bd36c2e85187470fcadfe12e7f3943960eb53de0c->enter($__internal_2c7500f57f9613393efc320bd36c2e85187470fcadfe12e7f3943960eb53de0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2c7500f57f9613393efc320bd36c2e85187470fcadfe12e7f3943960eb53de0c->leave($__internal_2c7500f57f9613393efc320bd36c2e85187470fcadfe12e7f3943960eb53de0c_prof);

        
        $__internal_8b73102ca2849655ef091b902909fe8fdc1cda326434eb11d203a43a3b1e5eff->leave($__internal_8b73102ca2849655ef091b902909fe8fdc1cda326434eb11d203a43a3b1e5eff_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11f1133e9c1c02900ac46b6e50a52714b84754debc1ccca7d3d5b746fd60648e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f1133e9c1c02900ac46b6e50a52714b84754debc1ccca7d3d5b746fd60648e->enter($__internal_11f1133e9c1c02900ac46b6e50a52714b84754debc1ccca7d3d5b746fd60648e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_88a3975f7254339f0969fb0913639a3f6f1111d1fa7a2c31c79d893091a0ae40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a3975f7254339f0969fb0913639a3f6f1111d1fa7a2c31c79d893091a0ae40->enter($__internal_88a3975f7254339f0969fb0913639a3f6f1111d1fa7a2c31c79d893091a0ae40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_88a3975f7254339f0969fb0913639a3f6f1111d1fa7a2c31c79d893091a0ae40->leave($__internal_88a3975f7254339f0969fb0913639a3f6f1111d1fa7a2c31c79d893091a0ae40_prof);

        
        $__internal_11f1133e9c1c02900ac46b6e50a52714b84754debc1ccca7d3d5b746fd60648e->leave($__internal_11f1133e9c1c02900ac46b6e50a52714b84754debc1ccca7d3d5b746fd60648e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

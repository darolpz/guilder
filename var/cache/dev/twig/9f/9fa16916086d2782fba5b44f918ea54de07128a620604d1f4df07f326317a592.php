<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b74547f055d4cd4d27e70cfdd287fe972d8d2f3608ee581d15a4aed2069f3512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_7c2695d0f7465d5e5b5339c0984a9bb32c67b2618dd523466f59d5d133319017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2695d0f7465d5e5b5339c0984a9bb32c67b2618dd523466f59d5d133319017->enter($__internal_7c2695d0f7465d5e5b5339c0984a9bb32c67b2618dd523466f59d5d133319017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d3c2a4f4158dd60f90aedb319a2a31e871badd29972b9e8fdc93dd52b1237fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c2a4f4158dd60f90aedb319a2a31e871badd29972b9e8fdc93dd52b1237fca->enter($__internal_d3c2a4f4158dd60f90aedb319a2a31e871badd29972b9e8fdc93dd52b1237fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2695d0f7465d5e5b5339c0984a9bb32c67b2618dd523466f59d5d133319017->leave($__internal_7c2695d0f7465d5e5b5339c0984a9bb32c67b2618dd523466f59d5d133319017_prof);

        
        $__internal_d3c2a4f4158dd60f90aedb319a2a31e871badd29972b9e8fdc93dd52b1237fca->leave($__internal_d3c2a4f4158dd60f90aedb319a2a31e871badd29972b9e8fdc93dd52b1237fca_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e620f392bada08155b464caa1b52d429ed73ace2fa3beb57d590788e859a530c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e620f392bada08155b464caa1b52d429ed73ace2fa3beb57d590788e859a530c->enter($__internal_e620f392bada08155b464caa1b52d429ed73ace2fa3beb57d590788e859a530c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7feefc93ed4dd462d65476e19a81c00fa51981495d34f52a6ed9501a712472c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7feefc93ed4dd462d65476e19a81c00fa51981495d34f52a6ed9501a712472c5->enter($__internal_7feefc93ed4dd462d65476e19a81c00fa51981495d34f52a6ed9501a712472c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7feefc93ed4dd462d65476e19a81c00fa51981495d34f52a6ed9501a712472c5->leave($__internal_7feefc93ed4dd462d65476e19a81c00fa51981495d34f52a6ed9501a712472c5_prof);

        
        $__internal_e620f392bada08155b464caa1b52d429ed73ace2fa3beb57d590788e859a530c->leave($__internal_e620f392bada08155b464caa1b52d429ed73ace2fa3beb57d590788e859a530c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4caa9ef48fab6e5d4d95b1d9902a62d413f933fb96771a53ab45a48d85ac167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4caa9ef48fab6e5d4d95b1d9902a62d413f933fb96771a53ab45a48d85ac167->enter($__internal_c4caa9ef48fab6e5d4d95b1d9902a62d413f933fb96771a53ab45a48d85ac167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ff9fa5619eeecb153b417d64ada29dc2b5a0de3d3e303ca57fd1827c8ba5557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff9fa5619eeecb153b417d64ada29dc2b5a0de3d3e303ca57fd1827c8ba5557->enter($__internal_4ff9fa5619eeecb153b417d64ada29dc2b5a0de3d3e303ca57fd1827c8ba5557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4ff9fa5619eeecb153b417d64ada29dc2b5a0de3d3e303ca57fd1827c8ba5557->leave($__internal_4ff9fa5619eeecb153b417d64ada29dc2b5a0de3d3e303ca57fd1827c8ba5557_prof);

        
        $__internal_c4caa9ef48fab6e5d4d95b1d9902a62d413f933fb96771a53ab45a48d85ac167->leave($__internal_c4caa9ef48fab6e5d4d95b1d9902a62d413f933fb96771a53ab45a48d85ac167_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

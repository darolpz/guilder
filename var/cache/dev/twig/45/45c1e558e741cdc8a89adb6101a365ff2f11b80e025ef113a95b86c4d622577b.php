<?php

/* :security:login.html.twig */
class __TwigTemplate_eaae4d615f70c1dda893f9ccd121191ac702d600480a4443f058348c31565f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd82b64ba45bfe18454843cc097a0f7e95ae8bd01d89db155077934d2a886ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd82b64ba45bfe18454843cc097a0f7e95ae8bd01d89db155077934d2a886ec8->enter($__internal_fd82b64ba45bfe18454843cc097a0f7e95ae8bd01d89db155077934d2a886ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $__internal_debe8397e72d848c77c949afcdf3d81d908196adfd30dbe43a3077cb7e8ef772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debe8397e72d848c77c949afcdf3d81d908196adfd30dbe43a3077cb7e8ef772->enter($__internal_debe8397e72d848c77c949afcdf3d81d908196adfd30dbe43a3077cb7e8ef772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd82b64ba45bfe18454843cc097a0f7e95ae8bd01d89db155077934d2a886ec8->leave($__internal_fd82b64ba45bfe18454843cc097a0f7e95ae8bd01d89db155077934d2a886ec8_prof);

        
        $__internal_debe8397e72d848c77c949afcdf3d81d908196adfd30dbe43a3077cb7e8ef772->leave($__internal_debe8397e72d848c77c949afcdf3d81d908196adfd30dbe43a3077cb7e8ef772_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b07fe3a55ff532056403e4eb1510fe0967dca2cc2543c37b6978f6b38fa9d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b07fe3a55ff532056403e4eb1510fe0967dca2cc2543c37b6978f6b38fa9d7b->enter($__internal_5b07fe3a55ff532056403e4eb1510fe0967dca2cc2543c37b6978f6b38fa9d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51751272b307d70984b2ac04fb7a1c609640359ebf1ad0d48c39726799bcf0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51751272b307d70984b2ac04fb7a1c609640359ebf1ad0d48c39726799bcf0b5->enter($__internal_51751272b307d70984b2ac04fb7a1c609640359ebf1ad0d48c39726799bcf0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_51751272b307d70984b2ac04fb7a1c609640359ebf1ad0d48c39726799bcf0b5->leave($__internal_51751272b307d70984b2ac04fb7a1c609640359ebf1ad0d48c39726799bcf0b5_prof);

        
        $__internal_5b07fe3a55ff532056403e4eb1510fe0967dca2cc2543c37b6978f6b38fa9d7b->leave($__internal_5b07fe3a55ff532056403e4eb1510fe0967dca2cc2543c37b6978f6b38fa9d7b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa4c1c2d92c0df3a1b98bcfd527812bacf986d59b694cc5dce99c6b9619d9449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4c1c2d92c0df3a1b98bcfd527812bacf986d59b694cc5dce99c6b9619d9449->enter($__internal_aa4c1c2d92c0df3a1b98bcfd527812bacf986d59b694cc5dce99c6b9619d9449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f13705e950c651076104dda515c9ac7930a2ee42c591976880b23278b96f9b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13705e950c651076104dda515c9ac7930a2ee42c591976880b23278b96f9b0e->enter($__internal_f13705e950c651076104dda515c9ac7930a2ee42c591976880b23278b96f9b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 22
        echo "
    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_f13705e950c651076104dda515c9ac7930a2ee42c591976880b23278b96f9b0e->leave($__internal_f13705e950c651076104dda515c9ac7930a2ee42c591976880b23278b96f9b0e_prof);

        
        $__internal_aa4c1c2d92c0df3a1b98bcfd527812bacf986d59b694cc5dce99c6b9619d9449->leave($__internal_aa4c1c2d92c0df3a1b98bcfd527812bacf986d59b694cc5dce99c6b9619d9449_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  84 => 12,  79 => 10,  76 => 9,  70 => 7,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
{% extends 'base.html.twig' %}
{% block title %} Login {% endblock %}
{% block body %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>
{% endblock %}
", ":security:login.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/security/login.html.twig");
    }
}

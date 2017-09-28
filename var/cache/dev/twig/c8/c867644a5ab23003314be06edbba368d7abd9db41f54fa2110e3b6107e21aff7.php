<?php

/* security/login.html.twig */
class __TwigTemplate_5f0b295266eb754bac473e5aebb337a7f8eecd9e710f93faa56d9379adf32aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
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
        $__internal_04b3d01da1dac9328c7c7a02dc1e8681ddb13d7c056966c91073a9780705890b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b3d01da1dac9328c7c7a02dc1e8681ddb13d7c056966c91073a9780705890b->enter($__internal_04b3d01da1dac9328c7c7a02dc1e8681ddb13d7c056966c91073a9780705890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_c2b2511c700ca8966c936eddec98709dd6526bc9b6bffe9f54c96d9d297f985c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b2511c700ca8966c936eddec98709dd6526bc9b6bffe9f54c96d9d297f985c->enter($__internal_c2b2511c700ca8966c936eddec98709dd6526bc9b6bffe9f54c96d9d297f985c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b3d01da1dac9328c7c7a02dc1e8681ddb13d7c056966c91073a9780705890b->leave($__internal_04b3d01da1dac9328c7c7a02dc1e8681ddb13d7c056966c91073a9780705890b_prof);

        
        $__internal_c2b2511c700ca8966c936eddec98709dd6526bc9b6bffe9f54c96d9d297f985c->leave($__internal_c2b2511c700ca8966c936eddec98709dd6526bc9b6bffe9f54c96d9d297f985c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_43ca1f209882265ddcff0cdc095c26e221632d1c37e67be17d9429ecb405a2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ca1f209882265ddcff0cdc095c26e221632d1c37e67be17d9429ecb405a2f9->enter($__internal_43ca1f209882265ddcff0cdc095c26e221632d1c37e67be17d9429ecb405a2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c775fba748ab02b56e511e7387f63ab256ac7d8419025dba61728017751a9f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c775fba748ab02b56e511e7387f63ab256ac7d8419025dba61728017751a9f66->enter($__internal_c775fba748ab02b56e511e7387f63ab256ac7d8419025dba61728017751a9f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_c775fba748ab02b56e511e7387f63ab256ac7d8419025dba61728017751a9f66->leave($__internal_c775fba748ab02b56e511e7387f63ab256ac7d8419025dba61728017751a9f66_prof);

        
        $__internal_43ca1f209882265ddcff0cdc095c26e221632d1c37e67be17d9429ecb405a2f9->leave($__internal_43ca1f209882265ddcff0cdc095c26e221632d1c37e67be17d9429ecb405a2f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fea1fa53ba7246433b945b3551451201f785a3189266bd5af2bcad290b2422e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fea1fa53ba7246433b945b3551451201f785a3189266bd5af2bcad290b2422e->enter($__internal_1fea1fa53ba7246433b945b3551451201f785a3189266bd5af2bcad290b2422e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62e6a36037cd648a4dc6c57abb171cb6d14913e3a20db23cada8f739e96836c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e6a36037cd648a4dc6c57abb171cb6d14913e3a20db23cada8f739e96836c1->enter($__internal_62e6a36037cd648a4dc6c57abb171cb6d14913e3a20db23cada8f739e96836c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 22
        echo "
    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_62e6a36037cd648a4dc6c57abb171cb6d14913e3a20db23cada8f739e96836c1->leave($__internal_62e6a36037cd648a4dc6c57abb171cb6d14913e3a20db23cada8f739e96836c1_prof);

        
        $__internal_1fea1fa53ba7246433b945b3551451201f785a3189266bd5af2bcad290b2422e->leave($__internal_1fea1fa53ba7246433b945b3551451201f785a3189266bd5af2bcad290b2422e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  84 => 12,  79 => 10,  76 => 9,  70 => 7,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "security/login.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\security\\login.html.twig");
    }
}

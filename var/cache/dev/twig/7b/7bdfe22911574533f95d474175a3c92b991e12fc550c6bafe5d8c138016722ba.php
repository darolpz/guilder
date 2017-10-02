<?php

/* :security:login.html.twig */
class __TwigTemplate_09d7a043c228cc6af90ec05fe4e8c614e19812e84beb19eac7bf043d71f40fb4 extends Twig_Template
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
        $__internal_6cfc2a169e500f65593864b9187df1140d3608a5df6c2f8db4befcc16692d6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfc2a169e500f65593864b9187df1140d3608a5df6c2f8db4befcc16692d6ba->enter($__internal_6cfc2a169e500f65593864b9187df1140d3608a5df6c2f8db4befcc16692d6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $__internal_b0c4bef12c4b6ce7947a65070127655626ff80d62119f84a7fc2a10db0a75828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c4bef12c4b6ce7947a65070127655626ff80d62119f84a7fc2a10db0a75828->enter($__internal_b0c4bef12c4b6ce7947a65070127655626ff80d62119f84a7fc2a10db0a75828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cfc2a169e500f65593864b9187df1140d3608a5df6c2f8db4befcc16692d6ba->leave($__internal_6cfc2a169e500f65593864b9187df1140d3608a5df6c2f8db4befcc16692d6ba_prof);

        
        $__internal_b0c4bef12c4b6ce7947a65070127655626ff80d62119f84a7fc2a10db0a75828->leave($__internal_b0c4bef12c4b6ce7947a65070127655626ff80d62119f84a7fc2a10db0a75828_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ab34ea35dbaded4ef845b8fb1534fafb2cf3cf8379bcc04c1b4f6139ee09728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab34ea35dbaded4ef845b8fb1534fafb2cf3cf8379bcc04c1b4f6139ee09728->enter($__internal_4ab34ea35dbaded4ef845b8fb1534fafb2cf3cf8379bcc04c1b4f6139ee09728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af71b59af867d1ff94f6c6a40d41a084e00cbf5197b621bf174b7c205fc504ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af71b59af867d1ff94f6c6a40d41a084e00cbf5197b621bf174b7c205fc504ce->enter($__internal_af71b59af867d1ff94f6c6a40d41a084e00cbf5197b621bf174b7c205fc504ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_af71b59af867d1ff94f6c6a40d41a084e00cbf5197b621bf174b7c205fc504ce->leave($__internal_af71b59af867d1ff94f6c6a40d41a084e00cbf5197b621bf174b7c205fc504ce_prof);

        
        $__internal_4ab34ea35dbaded4ef845b8fb1534fafb2cf3cf8379bcc04c1b4f6139ee09728->leave($__internal_4ab34ea35dbaded4ef845b8fb1534fafb2cf3cf8379bcc04c1b4f6139ee09728_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c3e9e88d2983041b662e3319457a2cf7d11f19ffbe9f5f8ea4db023ee47406d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3e9e88d2983041b662e3319457a2cf7d11f19ffbe9f5f8ea4db023ee47406d->enter($__internal_6c3e9e88d2983041b662e3319457a2cf7d11f19ffbe9f5f8ea4db023ee47406d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1c95982932db027a6caf02444ef2fffb5e9165fa19ba019f0a1a7a2c1d9b34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c95982932db027a6caf02444ef2fffb5e9165fa19ba019f0a1a7a2c1d9b34f->enter($__internal_d1c95982932db027a6caf02444ef2fffb5e9165fa19ba019f0a1a7a2c1d9b34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1c95982932db027a6caf02444ef2fffb5e9165fa19ba019f0a1a7a2c1d9b34f->leave($__internal_d1c95982932db027a6caf02444ef2fffb5e9165fa19ba019f0a1a7a2c1d9b34f_prof);

        
        $__internal_6c3e9e88d2983041b662e3319457a2cf7d11f19ffbe9f5f8ea4db023ee47406d->leave($__internal_6c3e9e88d2983041b662e3319457a2cf7d11f19ffbe9f5f8ea4db023ee47406d_prof);

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
", ":security:login.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/security/login.html.twig");
    }
}

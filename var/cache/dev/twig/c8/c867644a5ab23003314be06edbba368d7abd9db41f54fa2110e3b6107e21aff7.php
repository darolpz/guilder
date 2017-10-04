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
        $__internal_1cecd54d49c31438058f782ff0c27a806a15e6a73e37366b62a09bbca0bc37c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cecd54d49c31438058f782ff0c27a806a15e6a73e37366b62a09bbca0bc37c4->enter($__internal_1cecd54d49c31438058f782ff0c27a806a15e6a73e37366b62a09bbca0bc37c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_77c9d94d71e5ab0c5ef2c0ef29b0a3804fbd60dcd4ee51d9aa8266d8683e3c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c9d94d71e5ab0c5ef2c0ef29b0a3804fbd60dcd4ee51d9aa8266d8683e3c16->enter($__internal_77c9d94d71e5ab0c5ef2c0ef29b0a3804fbd60dcd4ee51d9aa8266d8683e3c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cecd54d49c31438058f782ff0c27a806a15e6a73e37366b62a09bbca0bc37c4->leave($__internal_1cecd54d49c31438058f782ff0c27a806a15e6a73e37366b62a09bbca0bc37c4_prof);

        
        $__internal_77c9d94d71e5ab0c5ef2c0ef29b0a3804fbd60dcd4ee51d9aa8266d8683e3c16->leave($__internal_77c9d94d71e5ab0c5ef2c0ef29b0a3804fbd60dcd4ee51d9aa8266d8683e3c16_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a90ccbf99d67660fb3e4c717f2ee2d7ab1f616b5b860c820f1430ac4b3bc809d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90ccbf99d67660fb3e4c717f2ee2d7ab1f616b5b860c820f1430ac4b3bc809d->enter($__internal_a90ccbf99d67660fb3e4c717f2ee2d7ab1f616b5b860c820f1430ac4b3bc809d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9962b2a01e1d34c89102b5fadab9a5adea5573c830af4b4aa0c7d1f0d7439eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9962b2a01e1d34c89102b5fadab9a5adea5573c830af4b4aa0c7d1f0d7439eec->enter($__internal_9962b2a01e1d34c89102b5fadab9a5adea5573c830af4b4aa0c7d1f0d7439eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_9962b2a01e1d34c89102b5fadab9a5adea5573c830af4b4aa0c7d1f0d7439eec->leave($__internal_9962b2a01e1d34c89102b5fadab9a5adea5573c830af4b4aa0c7d1f0d7439eec_prof);

        
        $__internal_a90ccbf99d67660fb3e4c717f2ee2d7ab1f616b5b860c820f1430ac4b3bc809d->leave($__internal_a90ccbf99d67660fb3e4c717f2ee2d7ab1f616b5b860c820f1430ac4b3bc809d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74e444d94c383ec882bba803b67e28301aca5f93ae618fee6a3a7717d210a769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e444d94c383ec882bba803b67e28301aca5f93ae618fee6a3a7717d210a769->enter($__internal_74e444d94c383ec882bba803b67e28301aca5f93ae618fee6a3a7717d210a769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6df95f41271e7409e64cdbc2777e2bc1735f01330e206315381a73b2f9b1b280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df95f41271e7409e64cdbc2777e2bc1735f01330e206315381a73b2f9b1b280->enter($__internal_6df95f41271e7409e64cdbc2777e2bc1735f01330e206315381a73b2f9b1b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6df95f41271e7409e64cdbc2777e2bc1735f01330e206315381a73b2f9b1b280->leave($__internal_6df95f41271e7409e64cdbc2777e2bc1735f01330e206315381a73b2f9b1b280_prof);

        
        $__internal_74e444d94c383ec882bba803b67e28301aca5f93ae618fee6a3a7717d210a769->leave($__internal_74e444d94c383ec882bba803b67e28301aca5f93ae618fee6a3a7717d210a769_prof);

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
", "security/login.html.twig", "C:\\xampp\\htdocs\\repo\\app\\Resources\\views\\security\\login.html.twig");
    }
}

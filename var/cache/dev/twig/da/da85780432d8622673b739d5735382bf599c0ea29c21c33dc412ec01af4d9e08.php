<?php

/* security/login.html.twig */
class __TwigTemplate_7bee63c1b77ac14b70ebf15cdfa19d208f739c8f9e45f4c3055e825c50e28d74 extends Twig_Template
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
        $__internal_cc314d6076f79b226744644183c64c966c95c682b81bd117f53b401e238b940c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc314d6076f79b226744644183c64c966c95c682b81bd117f53b401e238b940c->enter($__internal_cc314d6076f79b226744644183c64c966c95c682b81bd117f53b401e238b940c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_2b08c0711911f92aeea33718881ce4ad79d26ebea6925786e0d37d594d68386c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b08c0711911f92aeea33718881ce4ad79d26ebea6925786e0d37d594d68386c->enter($__internal_2b08c0711911f92aeea33718881ce4ad79d26ebea6925786e0d37d594d68386c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc314d6076f79b226744644183c64c966c95c682b81bd117f53b401e238b940c->leave($__internal_cc314d6076f79b226744644183c64c966c95c682b81bd117f53b401e238b940c_prof);

        
        $__internal_2b08c0711911f92aeea33718881ce4ad79d26ebea6925786e0d37d594d68386c->leave($__internal_2b08c0711911f92aeea33718881ce4ad79d26ebea6925786e0d37d594d68386c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ad041bbd93586627c116f224bf5239f3eb34434c65e7541f22ed2e3f5b9db75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad041bbd93586627c116f224bf5239f3eb34434c65e7541f22ed2e3f5b9db75->enter($__internal_4ad041bbd93586627c116f224bf5239f3eb34434c65e7541f22ed2e3f5b9db75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b26b3faf8d9868a3a503dcfd387eb5aa9dd917887fa274c5d29de4ba8a64894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b26b3faf8d9868a3a503dcfd387eb5aa9dd917887fa274c5d29de4ba8a64894->enter($__internal_1b26b3faf8d9868a3a503dcfd387eb5aa9dd917887fa274c5d29de4ba8a64894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_1b26b3faf8d9868a3a503dcfd387eb5aa9dd917887fa274c5d29de4ba8a64894->leave($__internal_1b26b3faf8d9868a3a503dcfd387eb5aa9dd917887fa274c5d29de4ba8a64894_prof);

        
        $__internal_4ad041bbd93586627c116f224bf5239f3eb34434c65e7541f22ed2e3f5b9db75->leave($__internal_4ad041bbd93586627c116f224bf5239f3eb34434c65e7541f22ed2e3f5b9db75_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56a03e4783e5af5e4452ccddf7390e7be32ee29b4b2a0c432939abe023a7991c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a03e4783e5af5e4452ccddf7390e7be32ee29b4b2a0c432939abe023a7991c->enter($__internal_56a03e4783e5af5e4452ccddf7390e7be32ee29b4b2a0c432939abe023a7991c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f98513997c0bff1508e2840b9f5b745c7a7b97ddbdebcd03d4e5d93d1937268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f98513997c0bff1508e2840b9f5b745c7a7b97ddbdebcd03d4e5d93d1937268->enter($__internal_5f98513997c0bff1508e2840b9f5b745c7a7b97ddbdebcd03d4e5d93d1937268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f98513997c0bff1508e2840b9f5b745c7a7b97ddbdebcd03d4e5d93d1937268->leave($__internal_5f98513997c0bff1508e2840b9f5b745c7a7b97ddbdebcd03d4e5d93d1937268_prof);

        
        $__internal_56a03e4783e5af5e4452ccddf7390e7be32ee29b4b2a0c432939abe023a7991c->leave($__internal_56a03e4783e5af5e4452ccddf7390e7be32ee29b4b2a0c432939abe023a7991c_prof);

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

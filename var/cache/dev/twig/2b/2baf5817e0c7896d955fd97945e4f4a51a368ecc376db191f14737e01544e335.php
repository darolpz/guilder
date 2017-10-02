<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_26b44d7e6b28c60a6a482eb8f80b0c6073ce48d515fbed5c1af7026d8fe693e6 extends Twig_Template
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
        $__internal_e7ae952ea5977285cf00a149c92068b2d193bf69623aeb654987ed39d7434949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ae952ea5977285cf00a149c92068b2d193bf69623aeb654987ed39d7434949->enter($__internal_e7ae952ea5977285cf00a149c92068b2d193bf69623aeb654987ed39d7434949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ac363b284d775202d29239c47da86955186f53c4f27273e6a72f17065fb319b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac363b284d775202d29239c47da86955186f53c4f27273e6a72f17065fb319b3->enter($__internal_ac363b284d775202d29239c47da86955186f53c4f27273e6a72f17065fb319b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ae952ea5977285cf00a149c92068b2d193bf69623aeb654987ed39d7434949->leave($__internal_e7ae952ea5977285cf00a149c92068b2d193bf69623aeb654987ed39d7434949_prof);

        
        $__internal_ac363b284d775202d29239c47da86955186f53c4f27273e6a72f17065fb319b3->leave($__internal_ac363b284d775202d29239c47da86955186f53c4f27273e6a72f17065fb319b3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_21e6449722105ba303b45a0c56b77c566878d02c42ac80323e778c8a9dc46690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e6449722105ba303b45a0c56b77c566878d02c42ac80323e778c8a9dc46690->enter($__internal_21e6449722105ba303b45a0c56b77c566878d02c42ac80323e778c8a9dc46690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6ef986f6cca30b40034ef833c6eb4294c051d104b854e987f46aa00e8bf4b4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef986f6cca30b40034ef833c6eb4294c051d104b854e987f46aa00e8bf4b4e5->enter($__internal_6ef986f6cca30b40034ef833c6eb4294c051d104b854e987f46aa00e8bf4b4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6ef986f6cca30b40034ef833c6eb4294c051d104b854e987f46aa00e8bf4b4e5->leave($__internal_6ef986f6cca30b40034ef833c6eb4294c051d104b854e987f46aa00e8bf4b4e5_prof);

        
        $__internal_21e6449722105ba303b45a0c56b77c566878d02c42ac80323e778c8a9dc46690->leave($__internal_21e6449722105ba303b45a0c56b77c566878d02c42ac80323e778c8a9dc46690_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_657ba3f53e8e12af33997f7ca0910559cb7ce40879a185c8209d87a123c95656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657ba3f53e8e12af33997f7ca0910559cb7ce40879a185c8209d87a123c95656->enter($__internal_657ba3f53e8e12af33997f7ca0910559cb7ce40879a185c8209d87a123c95656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94be5ff3bd536b20be44e64e191bf094986b2aed6363eae11c8c2160cf563a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94be5ff3bd536b20be44e64e191bf094986b2aed6363eae11c8c2160cf563a06->enter($__internal_94be5ff3bd536b20be44e64e191bf094986b2aed6363eae11c8c2160cf563a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_94be5ff3bd536b20be44e64e191bf094986b2aed6363eae11c8c2160cf563a06->leave($__internal_94be5ff3bd536b20be44e64e191bf094986b2aed6363eae11c8c2160cf563a06_prof);

        
        $__internal_657ba3f53e8e12af33997f7ca0910559cb7ce40879a185c8209d87a123c95656->leave($__internal_657ba3f53e8e12af33997f7ca0910559cb7ce40879a185c8209d87a123c95656_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

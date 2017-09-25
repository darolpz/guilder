<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ad9034eea517969cb1b1c81dd8a33a6dea2be1679380c5fbfa1f3a7692e7e5ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_187afc2f3ed4bda10b0126fa997aa7f7812e851db6a435653d84af07e82d910c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187afc2f3ed4bda10b0126fa997aa7f7812e851db6a435653d84af07e82d910c->enter($__internal_187afc2f3ed4bda10b0126fa997aa7f7812e851db6a435653d84af07e82d910c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_596985c742f39900cd147f9c860ccc68591f5bd13d1b9673d6a4acda929aede2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596985c742f39900cd147f9c860ccc68591f5bd13d1b9673d6a4acda929aede2->enter($__internal_596985c742f39900cd147f9c860ccc68591f5bd13d1b9673d6a4acda929aede2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_187afc2f3ed4bda10b0126fa997aa7f7812e851db6a435653d84af07e82d910c->leave($__internal_187afc2f3ed4bda10b0126fa997aa7f7812e851db6a435653d84af07e82d910c_prof);

        
        $__internal_596985c742f39900cd147f9c860ccc68591f5bd13d1b9673d6a4acda929aede2->leave($__internal_596985c742f39900cd147f9c860ccc68591f5bd13d1b9673d6a4acda929aede2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_a05f8749fe010d456045bb00a37410a9eeb4e3acdfebcffd968ffe6de3e5d35e extends Twig_Template
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
        $__internal_94ab2f04339cd3e6c8fc11690dd0a1ce06d26d16a2697d98a64ecac4ffa5f382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ab2f04339cd3e6c8fc11690dd0a1ce06d26d16a2697d98a64ecac4ffa5f382->enter($__internal_94ab2f04339cd3e6c8fc11690dd0a1ce06d26d16a2697d98a64ecac4ffa5f382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2af850948c0f64db73bda8c0fd57196d28f91eb39d1dbb7dd7aaa26f16d56df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af850948c0f64db73bda8c0fd57196d28f91eb39d1dbb7dd7aaa26f16d56df6->enter($__internal_2af850948c0f64db73bda8c0fd57196d28f91eb39d1dbb7dd7aaa26f16d56df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_94ab2f04339cd3e6c8fc11690dd0a1ce06d26d16a2697d98a64ecac4ffa5f382->leave($__internal_94ab2f04339cd3e6c8fc11690dd0a1ce06d26d16a2697d98a64ecac4ffa5f382_prof);

        
        $__internal_2af850948c0f64db73bda8c0fd57196d28f91eb39d1dbb7dd7aaa26f16d56df6->leave($__internal_2af850948c0f64db73bda8c0fd57196d28f91eb39d1dbb7dd7aaa26f16d56df6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

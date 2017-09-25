<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c9a9a80f77c3aed6ce411bf2a3292ddac816bd8ea7242a45859b1b84a25e57e7 extends Twig_Template
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
        $__internal_2f172662b9d57d2f13c8f2cb2936a9d1139f408e5ab6a3669c22516c713338b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f172662b9d57d2f13c8f2cb2936a9d1139f408e5ab6a3669c22516c713338b4->enter($__internal_2f172662b9d57d2f13c8f2cb2936a9d1139f408e5ab6a3669c22516c713338b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_616615f58910bc7226497a81b3265628e3feed0f8fc0f5003a3b2b62b13856fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616615f58910bc7226497a81b3265628e3feed0f8fc0f5003a3b2b62b13856fb->enter($__internal_616615f58910bc7226497a81b3265628e3feed0f8fc0f5003a3b2b62b13856fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2f172662b9d57d2f13c8f2cb2936a9d1139f408e5ab6a3669c22516c713338b4->leave($__internal_2f172662b9d57d2f13c8f2cb2936a9d1139f408e5ab6a3669c22516c713338b4_prof);

        
        $__internal_616615f58910bc7226497a81b3265628e3feed0f8fc0f5003a3b2b62b13856fb->leave($__internal_616615f58910bc7226497a81b3265628e3feed0f8fc0f5003a3b2b62b13856fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

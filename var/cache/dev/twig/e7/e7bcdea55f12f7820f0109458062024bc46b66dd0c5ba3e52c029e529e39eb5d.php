<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_22ed6949b631e317005b93ec5928d501377d525a766afa6ea0a09054c1e37a68 extends Twig_Template
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
        $__internal_964573340427dc6bc2c9928b2789a12c0a47f50d6abbbf6d44e803ba1e3c0bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964573340427dc6bc2c9928b2789a12c0a47f50d6abbbf6d44e803ba1e3c0bd7->enter($__internal_964573340427dc6bc2c9928b2789a12c0a47f50d6abbbf6d44e803ba1e3c0bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_77f68549b1cadbc518a8b854e13f837484737049dfa0c366b41401adf9afe40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f68549b1cadbc518a8b854e13f837484737049dfa0c366b41401adf9afe40b->enter($__internal_77f68549b1cadbc518a8b854e13f837484737049dfa0c366b41401adf9afe40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_964573340427dc6bc2c9928b2789a12c0a47f50d6abbbf6d44e803ba1e3c0bd7->leave($__internal_964573340427dc6bc2c9928b2789a12c0a47f50d6abbbf6d44e803ba1e3c0bd7_prof);

        
        $__internal_77f68549b1cadbc518a8b854e13f837484737049dfa0c366b41401adf9afe40b->leave($__internal_77f68549b1cadbc518a8b854e13f837484737049dfa0c366b41401adf9afe40b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}

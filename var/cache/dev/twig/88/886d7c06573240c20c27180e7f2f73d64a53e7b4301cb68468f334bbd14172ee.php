<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3c4f8f32a5e9b63bb64533359330b6b0c76256494010d1ec3f7cdbc1de30b0a0 extends Twig_Template
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
        $__internal_7920f6feed6422aedf09a16a63b1be243e7ecfb1a7e02724bbbe3fc46dbba2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7920f6feed6422aedf09a16a63b1be243e7ecfb1a7e02724bbbe3fc46dbba2e0->enter($__internal_7920f6feed6422aedf09a16a63b1be243e7ecfb1a7e02724bbbe3fc46dbba2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3da536dfbf632ad7b02d32d0c353bdd92d8c9ff1881157d5a328c22b85cc6daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da536dfbf632ad7b02d32d0c353bdd92d8c9ff1881157d5a328c22b85cc6daf->enter($__internal_3da536dfbf632ad7b02d32d0c353bdd92d8c9ff1881157d5a328c22b85cc6daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_7920f6feed6422aedf09a16a63b1be243e7ecfb1a7e02724bbbe3fc46dbba2e0->leave($__internal_7920f6feed6422aedf09a16a63b1be243e7ecfb1a7e02724bbbe3fc46dbba2e0_prof);

        
        $__internal_3da536dfbf632ad7b02d32d0c353bdd92d8c9ff1881157d5a328c22b85cc6daf->leave($__internal_3da536dfbf632ad7b02d32d0c353bdd92d8c9ff1881157d5a328c22b85cc6daf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

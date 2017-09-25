<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0d6eb622038ad595fc985f64ccc2dc7b1361aab33b35fd67ce0859106fede2e3 extends Twig_Template
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
        $__internal_356b514020c17eaa3b24f6262449cc9cfc1f64f6e7ac2e68e3592288bd3a5fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356b514020c17eaa3b24f6262449cc9cfc1f64f6e7ac2e68e3592288bd3a5fda->enter($__internal_356b514020c17eaa3b24f6262449cc9cfc1f64f6e7ac2e68e3592288bd3a5fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_75c7c66c0154283162d6ca6d22b438d1d353bb2335fc8b7a8eb85c57446df5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c7c66c0154283162d6ca6d22b438d1d353bb2335fc8b7a8eb85c57446df5b6->enter($__internal_75c7c66c0154283162d6ca6d22b438d1d353bb2335fc8b7a8eb85c57446df5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_356b514020c17eaa3b24f6262449cc9cfc1f64f6e7ac2e68e3592288bd3a5fda->leave($__internal_356b514020c17eaa3b24f6262449cc9cfc1f64f6e7ac2e68e3592288bd3a5fda_prof);

        
        $__internal_75c7c66c0154283162d6ca6d22b438d1d353bb2335fc8b7a8eb85c57446df5b6->leave($__internal_75c7c66c0154283162d6ca6d22b438d1d353bb2335fc8b7a8eb85c57446df5b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

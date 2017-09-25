<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_15c180454f3810b83e929f676458054bb012bed93fff5b50cfe6e73888c8a7b0 extends Twig_Template
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
        $__internal_180cb857a6f9b9f542d1e00862903a0ccea387319d64807ab982eefa15fe6e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180cb857a6f9b9f542d1e00862903a0ccea387319d64807ab982eefa15fe6e87->enter($__internal_180cb857a6f9b9f542d1e00862903a0ccea387319d64807ab982eefa15fe6e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_1aaf390588f2f5f7e0ea4e9d40095a882511f77732cbd16502e67d07599c795f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aaf390588f2f5f7e0ea4e9d40095a882511f77732cbd16502e67d07599c795f->enter($__internal_1aaf390588f2f5f7e0ea4e9d40095a882511f77732cbd16502e67d07599c795f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_180cb857a6f9b9f542d1e00862903a0ccea387319d64807ab982eefa15fe6e87->leave($__internal_180cb857a6f9b9f542d1e00862903a0ccea387319d64807ab982eefa15fe6e87_prof);

        
        $__internal_1aaf390588f2f5f7e0ea4e9d40095a882511f77732cbd16502e67d07599c795f->leave($__internal_1aaf390588f2f5f7e0ea4e9d40095a882511f77732cbd16502e67d07599c795f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

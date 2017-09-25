<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6306dd7c681d834aa617248b884dc205e0439d1e2946072dbfcc4a040cf43948 extends Twig_Template
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
        $__internal_e1d7874fbdedad8435b0b74232e4b1cedc2c8d1f2154ec83ef2f951d4dfce023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d7874fbdedad8435b0b74232e4b1cedc2c8d1f2154ec83ef2f951d4dfce023->enter($__internal_e1d7874fbdedad8435b0b74232e4b1cedc2c8d1f2154ec83ef2f951d4dfce023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2951b47d914eb7b5be42352f975941449240bc0349bd6799de77a707217bd6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2951b47d914eb7b5be42352f975941449240bc0349bd6799de77a707217bd6f5->enter($__internal_2951b47d914eb7b5be42352f975941449240bc0349bd6799de77a707217bd6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e1d7874fbdedad8435b0b74232e4b1cedc2c8d1f2154ec83ef2f951d4dfce023->leave($__internal_e1d7874fbdedad8435b0b74232e4b1cedc2c8d1f2154ec83ef2f951d4dfce023_prof);

        
        $__internal_2951b47d914eb7b5be42352f975941449240bc0349bd6799de77a707217bd6f5->leave($__internal_2951b47d914eb7b5be42352f975941449240bc0349bd6799de77a707217bd6f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

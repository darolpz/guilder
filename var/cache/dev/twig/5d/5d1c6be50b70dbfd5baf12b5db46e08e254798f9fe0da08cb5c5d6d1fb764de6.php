<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_74fe8112678bb2050db03eb559f2e011f4c661d81c2c9fbb6bcde0c53d223a80 extends Twig_Template
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
        $__internal_2837c99b709a561ef06995fd8407e443fc68b19f182ded61a49e4b00313f78a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2837c99b709a561ef06995fd8407e443fc68b19f182ded61a49e4b00313f78a2->enter($__internal_2837c99b709a561ef06995fd8407e443fc68b19f182ded61a49e4b00313f78a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_81d95e4f9bc7423350e8feb17e34c4486d35084bb7fd07bae4e9747cc6bc17dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d95e4f9bc7423350e8feb17e34c4486d35084bb7fd07bae4e9747cc6bc17dc->enter($__internal_81d95e4f9bc7423350e8feb17e34c4486d35084bb7fd07bae4e9747cc6bc17dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2837c99b709a561ef06995fd8407e443fc68b19f182ded61a49e4b00313f78a2->leave($__internal_2837c99b709a561ef06995fd8407e443fc68b19f182ded61a49e4b00313f78a2_prof);

        
        $__internal_81d95e4f9bc7423350e8feb17e34c4486d35084bb7fd07bae4e9747cc6bc17dc->leave($__internal_81d95e4f9bc7423350e8feb17e34c4486d35084bb7fd07bae4e9747cc6bc17dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

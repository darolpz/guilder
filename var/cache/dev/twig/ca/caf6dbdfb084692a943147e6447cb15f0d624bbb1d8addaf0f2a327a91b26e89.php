<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_250cca045c0adb6f3d6680c94347b1925350e28e50864eb93b2f9dd4f187be87 extends Twig_Template
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
        $__internal_ae9ecf4aa09bd662fef5cf61dc553f5b6e76cfc4caec6757110ebb914a8c7412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9ecf4aa09bd662fef5cf61dc553f5b6e76cfc4caec6757110ebb914a8c7412->enter($__internal_ae9ecf4aa09bd662fef5cf61dc553f5b6e76cfc4caec6757110ebb914a8c7412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_45e4c0114cc6e935682dd24a0d0f48df23bb10acc7b46e3a6a636b1501e8dec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e4c0114cc6e935682dd24a0d0f48df23bb10acc7b46e3a6a636b1501e8dec1->enter($__internal_45e4c0114cc6e935682dd24a0d0f48df23bb10acc7b46e3a6a636b1501e8dec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ae9ecf4aa09bd662fef5cf61dc553f5b6e76cfc4caec6757110ebb914a8c7412->leave($__internal_ae9ecf4aa09bd662fef5cf61dc553f5b6e76cfc4caec6757110ebb914a8c7412_prof);

        
        $__internal_45e4c0114cc6e935682dd24a0d0f48df23bb10acc7b46e3a6a636b1501e8dec1->leave($__internal_45e4c0114cc6e935682dd24a0d0f48df23bb10acc7b46e3a6a636b1501e8dec1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

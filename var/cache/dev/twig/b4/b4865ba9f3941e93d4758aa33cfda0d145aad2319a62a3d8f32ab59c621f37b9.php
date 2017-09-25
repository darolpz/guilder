<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e57bba959f410a19c3872d228d5b74cad10c98c580ac806bf8bef7f42ffa9dd5 extends Twig_Template
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
        $__internal_4858f7d4ce7342a4f7ca4389629df718ce53f241a1d8d9fe1f5cfb86831ccf01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4858f7d4ce7342a4f7ca4389629df718ce53f241a1d8d9fe1f5cfb86831ccf01->enter($__internal_4858f7d4ce7342a4f7ca4389629df718ce53f241a1d8d9fe1f5cfb86831ccf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3ce60c3aabd938cdd748e43608cd18a35c56b832d7b5e8572a8263943119ac2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce60c3aabd938cdd748e43608cd18a35c56b832d7b5e8572a8263943119ac2b->enter($__internal_3ce60c3aabd938cdd748e43608cd18a35c56b832d7b5e8572a8263943119ac2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_4858f7d4ce7342a4f7ca4389629df718ce53f241a1d8d9fe1f5cfb86831ccf01->leave($__internal_4858f7d4ce7342a4f7ca4389629df718ce53f241a1d8d9fe1f5cfb86831ccf01_prof);

        
        $__internal_3ce60c3aabd938cdd748e43608cd18a35c56b832d7b5e8572a8263943119ac2b->leave($__internal_3ce60c3aabd938cdd748e43608cd18a35c56b832d7b5e8572a8263943119ac2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

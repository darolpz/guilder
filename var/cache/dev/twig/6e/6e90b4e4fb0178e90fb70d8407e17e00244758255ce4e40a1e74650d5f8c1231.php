<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_3f147c2e25e22184a16416973a1d814e25aa1f5d82e105c0b74cf0f6a490bd42 extends Twig_Template
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
        $__internal_f57903dc05a002c5c4d687a0dcced34738eef9fc54e88251120f7864e8c40962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57903dc05a002c5c4d687a0dcced34738eef9fc54e88251120f7864e8c40962->enter($__internal_f57903dc05a002c5c4d687a0dcced34738eef9fc54e88251120f7864e8c40962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_6af726b91cfa1637f700052ed738208083a6a75e06f53f513cad32fada2afb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af726b91cfa1637f700052ed738208083a6a75e06f53f513cad32fada2afb6e->enter($__internal_6af726b91cfa1637f700052ed738208083a6a75e06f53f513cad32fada2afb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f57903dc05a002c5c4d687a0dcced34738eef9fc54e88251120f7864e8c40962->leave($__internal_f57903dc05a002c5c4d687a0dcced34738eef9fc54e88251120f7864e8c40962_prof);

        
        $__internal_6af726b91cfa1637f700052ed738208083a6a75e06f53f513cad32fada2afb6e->leave($__internal_6af726b91cfa1637f700052ed738208083a6a75e06f53f513cad32fada2afb6e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

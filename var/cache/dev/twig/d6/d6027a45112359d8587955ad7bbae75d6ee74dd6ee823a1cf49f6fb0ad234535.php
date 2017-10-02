<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d1dfbc545999c961ea51c4573e762c043572812bf8db887f2229c0de9a3ca07a extends Twig_Template
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
        $__internal_8545ec1c39920128ab38d98b3be1994cb64acbabbbe09a0e19f3374e427f36a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8545ec1c39920128ab38d98b3be1994cb64acbabbbe09a0e19f3374e427f36a1->enter($__internal_8545ec1c39920128ab38d98b3be1994cb64acbabbbe09a0e19f3374e427f36a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5eca7674f9b75bbd4fd9dd9424e69c1b763b30585cecdde781f307affb1a8ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eca7674f9b75bbd4fd9dd9424e69c1b763b30585cecdde781f307affb1a8ff5->enter($__internal_5eca7674f9b75bbd4fd9dd9424e69c1b763b30585cecdde781f307affb1a8ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8545ec1c39920128ab38d98b3be1994cb64acbabbbe09a0e19f3374e427f36a1->leave($__internal_8545ec1c39920128ab38d98b3be1994cb64acbabbbe09a0e19f3374e427f36a1_prof);

        
        $__internal_5eca7674f9b75bbd4fd9dd9424e69c1b763b30585cecdde781f307affb1a8ff5->leave($__internal_5eca7674f9b75bbd4fd9dd9424e69c1b763b30585cecdde781f307affb1a8ff5_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

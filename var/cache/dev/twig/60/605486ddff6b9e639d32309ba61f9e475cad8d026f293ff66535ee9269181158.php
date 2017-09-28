<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6e7a8411032a9e7fc9fee18ab0fb54b26cfafc0b52b476d6a1e159fc6277a230 extends Twig_Template
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
        $__internal_5df8f829dc8c3047132e18103df7c84f29c634552d2f8b534cc645d8575e1c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df8f829dc8c3047132e18103df7c84f29c634552d2f8b534cc645d8575e1c05->enter($__internal_5df8f829dc8c3047132e18103df7c84f29c634552d2f8b534cc645d8575e1c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9d91a2d17356947ef72dfc35704190068396e784d8c70945783fc263ffa0fbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d91a2d17356947ef72dfc35704190068396e784d8c70945783fc263ffa0fbea->enter($__internal_9d91a2d17356947ef72dfc35704190068396e784d8c70945783fc263ffa0fbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5df8f829dc8c3047132e18103df7c84f29c634552d2f8b534cc645d8575e1c05->leave($__internal_5df8f829dc8c3047132e18103df7c84f29c634552d2f8b534cc645d8575e1c05_prof);

        
        $__internal_9d91a2d17356947ef72dfc35704190068396e784d8c70945783fc263ffa0fbea->leave($__internal_9d91a2d17356947ef72dfc35704190068396e784d8c70945783fc263ffa0fbea_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

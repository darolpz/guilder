<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc002d44418fb8c0d656c09dc978a8bb939752af74fb4075f3ebda5498ebbe2f extends Twig_Template
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
        $__internal_99619d2baadb498a6ff713efd36078c99dcee2592215a933485c715bc0784396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99619d2baadb498a6ff713efd36078c99dcee2592215a933485c715bc0784396->enter($__internal_99619d2baadb498a6ff713efd36078c99dcee2592215a933485c715bc0784396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_84826ef72d1048e9d322001bd91cd52936f3c824ddfc49a44a9c1498e590dc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84826ef72d1048e9d322001bd91cd52936f3c824ddfc49a44a9c1498e590dc2e->enter($__internal_84826ef72d1048e9d322001bd91cd52936f3c824ddfc49a44a9c1498e590dc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_99619d2baadb498a6ff713efd36078c99dcee2592215a933485c715bc0784396->leave($__internal_99619d2baadb498a6ff713efd36078c99dcee2592215a933485c715bc0784396_prof);

        
        $__internal_84826ef72d1048e9d322001bd91cd52936f3c824ddfc49a44a9c1498e590dc2e->leave($__internal_84826ef72d1048e9d322001bd91cd52936f3c824ddfc49a44a9c1498e590dc2e_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

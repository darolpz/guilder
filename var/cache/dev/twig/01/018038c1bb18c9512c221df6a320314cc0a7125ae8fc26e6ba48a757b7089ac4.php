<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_40e17c0fa3f2f70aeb9f6fbcc132c338c19d4ebaf39c101ba04d5dcc99b4d4b4 extends Twig_Template
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
        $__internal_22b0b005e1beb9549b275fa0668c35084e3e3ee3419eb9fb4e093c44dfc9d3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b0b005e1beb9549b275fa0668c35084e3e3ee3419eb9fb4e093c44dfc9d3c1->enter($__internal_22b0b005e1beb9549b275fa0668c35084e3e3ee3419eb9fb4e093c44dfc9d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3135e27d029d09e8f605bf49640dee6622a54f653a333b47ac5b5d259594cbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3135e27d029d09e8f605bf49640dee6622a54f653a333b47ac5b5d259594cbb7->enter($__internal_3135e27d029d09e8f605bf49640dee6622a54f653a333b47ac5b5d259594cbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_22b0b005e1beb9549b275fa0668c35084e3e3ee3419eb9fb4e093c44dfc9d3c1->leave($__internal_22b0b005e1beb9549b275fa0668c35084e3e3ee3419eb9fb4e093c44dfc9d3c1_prof);

        
        $__internal_3135e27d029d09e8f605bf49640dee6622a54f653a333b47ac5b5d259594cbb7->leave($__internal_3135e27d029d09e8f605bf49640dee6622a54f653a333b47ac5b5d259594cbb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}

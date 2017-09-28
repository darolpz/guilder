<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_753e4a9e5e0c8c34fb97e716b33d9bfd20eb0cd544457124ed4a676c24dda39c extends Twig_Template
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
        $__internal_a9f9488fc7f9cb41cfcf46e5ff81d636e714d85a23941feda773210a17625dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f9488fc7f9cb41cfcf46e5ff81d636e714d85a23941feda773210a17625dd4->enter($__internal_a9f9488fc7f9cb41cfcf46e5ff81d636e714d85a23941feda773210a17625dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_79fb9cb431e1dfa803ad89612fc983a4fac9f230b6a5cd311ce43675836b68f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fb9cb431e1dfa803ad89612fc983a4fac9f230b6a5cd311ce43675836b68f6->enter($__internal_79fb9cb431e1dfa803ad89612fc983a4fac9f230b6a5cd311ce43675836b68f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a9f9488fc7f9cb41cfcf46e5ff81d636e714d85a23941feda773210a17625dd4->leave($__internal_a9f9488fc7f9cb41cfcf46e5ff81d636e714d85a23941feda773210a17625dd4_prof);

        
        $__internal_79fb9cb431e1dfa803ad89612fc983a4fac9f230b6a5cd311ce43675836b68f6->leave($__internal_79fb9cb431e1dfa803ad89612fc983a4fac9f230b6a5cd311ce43675836b68f6_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

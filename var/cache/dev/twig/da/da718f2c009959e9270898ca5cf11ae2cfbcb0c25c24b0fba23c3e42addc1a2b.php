<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_7ecb1d11b3b8f24455f70e40351f40d80bfc8f2e0c37fc2d6d44b5d9c665d23c extends Twig_Template
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
        $__internal_cedc1058bab0a8c5e1318879b0c23bfdf216da60022d1122417da3497d61cb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedc1058bab0a8c5e1318879b0c23bfdf216da60022d1122417da3497d61cb74->enter($__internal_cedc1058bab0a8c5e1318879b0c23bfdf216da60022d1122417da3497d61cb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8b423c07e8c351978dfa796a2f91cba046995368862cb2eac7c571b2cc98d894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b423c07e8c351978dfa796a2f91cba046995368862cb2eac7c571b2cc98d894->enter($__internal_8b423c07e8c351978dfa796a2f91cba046995368862cb2eac7c571b2cc98d894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_cedc1058bab0a8c5e1318879b0c23bfdf216da60022d1122417da3497d61cb74->leave($__internal_cedc1058bab0a8c5e1318879b0c23bfdf216da60022d1122417da3497d61cb74_prof);

        
        $__internal_8b423c07e8c351978dfa796a2f91cba046995368862cb2eac7c571b2cc98d894->leave($__internal_8b423c07e8c351978dfa796a2f91cba046995368862cb2eac7c571b2cc98d894_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

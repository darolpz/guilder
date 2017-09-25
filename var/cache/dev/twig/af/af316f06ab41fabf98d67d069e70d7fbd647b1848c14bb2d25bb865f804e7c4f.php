<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_46adc22da7f509c94eadec44fe777fd69f34d03196750c9c5b35c7ad079408de extends Twig_Template
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
        $__internal_c058363f89e5d3c2710783cf5bd946d8bded74dc078f2dd03e1b8e6e7a0f85fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c058363f89e5d3c2710783cf5bd946d8bded74dc078f2dd03e1b8e6e7a0f85fc->enter($__internal_c058363f89e5d3c2710783cf5bd946d8bded74dc078f2dd03e1b8e6e7a0f85fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_957b30ba8073cb98739598e492e0def03fe18ac04814ba3e15425a125e60ff40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957b30ba8073cb98739598e492e0def03fe18ac04814ba3e15425a125e60ff40->enter($__internal_957b30ba8073cb98739598e492e0def03fe18ac04814ba3e15425a125e60ff40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c058363f89e5d3c2710783cf5bd946d8bded74dc078f2dd03e1b8e6e7a0f85fc->leave($__internal_c058363f89e5d3c2710783cf5bd946d8bded74dc078f2dd03e1b8e6e7a0f85fc_prof);

        
        $__internal_957b30ba8073cb98739598e492e0def03fe18ac04814ba3e15425a125e60ff40->leave($__internal_957b30ba8073cb98739598e492e0def03fe18ac04814ba3e15425a125e60ff40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}

<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2a84195f80aa6238e7cf8df97bc1765a89e796fd7a9b56905858e4c316871b2b extends Twig_Template
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
        $__internal_340c4eb9970eb8c05f9a4d2cbe28830c6c60e12b0e7591f22239ef2a376beb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340c4eb9970eb8c05f9a4d2cbe28830c6c60e12b0e7591f22239ef2a376beb8a->enter($__internal_340c4eb9970eb8c05f9a4d2cbe28830c6c60e12b0e7591f22239ef2a376beb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d8488f12c640dc9c935117a39cd7fee207b56439a842d797f26088b752ce95f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8488f12c640dc9c935117a39cd7fee207b56439a842d797f26088b752ce95f1->enter($__internal_d8488f12c640dc9c935117a39cd7fee207b56439a842d797f26088b752ce95f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_340c4eb9970eb8c05f9a4d2cbe28830c6c60e12b0e7591f22239ef2a376beb8a->leave($__internal_340c4eb9970eb8c05f9a4d2cbe28830c6c60e12b0e7591f22239ef2a376beb8a_prof);

        
        $__internal_d8488f12c640dc9c935117a39cd7fee207b56439a842d797f26088b752ce95f1->leave($__internal_d8488f12c640dc9c935117a39cd7fee207b56439a842d797f26088b752ce95f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

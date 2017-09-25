<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_deb6316d9e4a3c7fb857ffc599e69de0ce86afb85ea00aff08b46abb468b5a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b0104c3e9708f3dbcada9f1475765e988ce066036ca6694c28872efc149bd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0104c3e9708f3dbcada9f1475765e988ce066036ca6694c28872efc149bd73->enter($__internal_7b0104c3e9708f3dbcada9f1475765e988ce066036ca6694c28872efc149bd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0b218f1d0ec0916360ec29a232529e2537d73edb8318a4e5fc0a1c8d604f90b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b218f1d0ec0916360ec29a232529e2537d73edb8318a4e5fc0a1c8d604f90b6->enter($__internal_0b218f1d0ec0916360ec29a232529e2537d73edb8318a4e5fc0a1c8d604f90b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7b0104c3e9708f3dbcada9f1475765e988ce066036ca6694c28872efc149bd73->leave($__internal_7b0104c3e9708f3dbcada9f1475765e988ce066036ca6694c28872efc149bd73_prof);

        
        $__internal_0b218f1d0ec0916360ec29a232529e2537d73edb8318a4e5fc0a1c8d604f90b6->leave($__internal_0b218f1d0ec0916360ec29a232529e2537d73edb8318a4e5fc0a1c8d604f90b6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b9ea56b6d2e30f156ec9b8fe11670a51238b70a6a57f9f63adadf2a1867c471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9ea56b6d2e30f156ec9b8fe11670a51238b70a6a57f9f63adadf2a1867c471->enter($__internal_3b9ea56b6d2e30f156ec9b8fe11670a51238b70a6a57f9f63adadf2a1867c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f34dbeedd58a387f971d276c866b10c85eca55f16cf474c0825f9d8ab504bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f34dbeedd58a387f971d276c866b10c85eca55f16cf474c0825f9d8ab504bf9->enter($__internal_0f34dbeedd58a387f971d276c866b10c85eca55f16cf474c0825f9d8ab504bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0f34dbeedd58a387f971d276c866b10c85eca55f16cf474c0825f9d8ab504bf9->leave($__internal_0f34dbeedd58a387f971d276c866b10c85eca55f16cf474c0825f9d8ab504bf9_prof);

        
        $__internal_3b9ea56b6d2e30f156ec9b8fe11670a51238b70a6a57f9f63adadf2a1867c471->leave($__internal_3b9ea56b6d2e30f156ec9b8fe11670a51238b70a6a57f9f63adadf2a1867c471_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

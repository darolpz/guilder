<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_13d6abe4db688889006e99abf49b08cb6f14902caa17f0ae6661938f4a855ade extends Twig_Template
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
        $__internal_c226199b6e28e4fc46700591916a46ae117ffe9c3f3b74950c255b1c515e9639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c226199b6e28e4fc46700591916a46ae117ffe9c3f3b74950c255b1c515e9639->enter($__internal_c226199b6e28e4fc46700591916a46ae117ffe9c3f3b74950c255b1c515e9639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_5f20e9403e040bcec2db08ad6ad2a9ceae53722aefb1b1c6aafb08afe4d5fb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f20e9403e040bcec2db08ad6ad2a9ceae53722aefb1b1c6aafb08afe4d5fb51->enter($__internal_5f20e9403e040bcec2db08ad6ad2a9ceae53722aefb1b1c6aafb08afe4d5fb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c226199b6e28e4fc46700591916a46ae117ffe9c3f3b74950c255b1c515e9639->leave($__internal_c226199b6e28e4fc46700591916a46ae117ffe9c3f3b74950c255b1c515e9639_prof);

        
        $__internal_5f20e9403e040bcec2db08ad6ad2a9ceae53722aefb1b1c6aafb08afe4d5fb51->leave($__internal_5f20e9403e040bcec2db08ad6ad2a9ceae53722aefb1b1c6aafb08afe4d5fb51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}

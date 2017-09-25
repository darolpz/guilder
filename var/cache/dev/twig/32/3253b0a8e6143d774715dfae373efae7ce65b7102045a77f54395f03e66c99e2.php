<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_14724540afbf78dadfbe4a41b4f014ac167dd6831dd9150345694ffd6b1493ee extends Twig_Template
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
        $__internal_879aa10c625ea9aa6a4cc7eb4c5c9927987ac5c0629629e80fd8ab91cc882953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879aa10c625ea9aa6a4cc7eb4c5c9927987ac5c0629629e80fd8ab91cc882953->enter($__internal_879aa10c625ea9aa6a4cc7eb4c5c9927987ac5c0629629e80fd8ab91cc882953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5f0ff712a7a00b9ea6436c552e227b03ac6c0f40e9c9a6bfe47fad7ef6fddb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0ff712a7a00b9ea6436c552e227b03ac6c0f40e9c9a6bfe47fad7ef6fddb37->enter($__internal_5f0ff712a7a00b9ea6436c552e227b03ac6c0f40e9c9a6bfe47fad7ef6fddb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_879aa10c625ea9aa6a4cc7eb4c5c9927987ac5c0629629e80fd8ab91cc882953->leave($__internal_879aa10c625ea9aa6a4cc7eb4c5c9927987ac5c0629629e80fd8ab91cc882953_prof);

        
        $__internal_5f0ff712a7a00b9ea6436c552e227b03ac6c0f40e9c9a6bfe47fad7ef6fddb37->leave($__internal_5f0ff712a7a00b9ea6436c552e227b03ac6c0f40e9c9a6bfe47fad7ef6fddb37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

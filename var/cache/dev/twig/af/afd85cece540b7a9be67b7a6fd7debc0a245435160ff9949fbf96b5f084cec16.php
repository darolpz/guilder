<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f1375f2854ee9c43923ee702f6f1c76072318d7fe79fcd15d2f2b0e72c516968 extends Twig_Template
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
        $__internal_886aa049c11ae8371bc490a94f55102651bdccb2e2221669e8da806e8da6b9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886aa049c11ae8371bc490a94f55102651bdccb2e2221669e8da806e8da6b9bb->enter($__internal_886aa049c11ae8371bc490a94f55102651bdccb2e2221669e8da806e8da6b9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_32f5e430b5211b99b51cebed83dff0794800c60e4a5b24f21c0b27be618a7ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f5e430b5211b99b51cebed83dff0794800c60e4a5b24f21c0b27be618a7ae6->enter($__internal_32f5e430b5211b99b51cebed83dff0794800c60e4a5b24f21c0b27be618a7ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_886aa049c11ae8371bc490a94f55102651bdccb2e2221669e8da806e8da6b9bb->leave($__internal_886aa049c11ae8371bc490a94f55102651bdccb2e2221669e8da806e8da6b9bb_prof);

        
        $__internal_32f5e430b5211b99b51cebed83dff0794800c60e4a5b24f21c0b27be618a7ae6->leave($__internal_32f5e430b5211b99b51cebed83dff0794800c60e4a5b24f21c0b27be618a7ae6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

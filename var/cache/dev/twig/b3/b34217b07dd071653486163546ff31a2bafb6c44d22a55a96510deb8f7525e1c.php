<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_aaa33a75cf7a0988a5bf811895e3e5ef98796ae4f1bbec179c245af3c83f74b3 extends Twig_Template
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
        $__internal_434f7aea540aa601fcb124ce714fa8ba4d61b0a93197f22f1a7949f157cd1085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434f7aea540aa601fcb124ce714fa8ba4d61b0a93197f22f1a7949f157cd1085->enter($__internal_434f7aea540aa601fcb124ce714fa8ba4d61b0a93197f22f1a7949f157cd1085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_d8a99469aa357a859cf251e43ba8828d549621237ae757021ea1bf5ddc1eaa2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a99469aa357a859cf251e43ba8828d549621237ae757021ea1bf5ddc1eaa2b->enter($__internal_d8a99469aa357a859cf251e43ba8828d549621237ae757021ea1bf5ddc1eaa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_434f7aea540aa601fcb124ce714fa8ba4d61b0a93197f22f1a7949f157cd1085->leave($__internal_434f7aea540aa601fcb124ce714fa8ba4d61b0a93197f22f1a7949f157cd1085_prof);

        
        $__internal_d8a99469aa357a859cf251e43ba8828d549621237ae757021ea1bf5ddc1eaa2b->leave($__internal_d8a99469aa357a859cf251e43ba8828d549621237ae757021ea1bf5ddc1eaa2b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

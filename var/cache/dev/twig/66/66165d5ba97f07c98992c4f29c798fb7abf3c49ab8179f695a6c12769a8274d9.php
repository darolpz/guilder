<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_776cd615b8759ed72317ae086378acc489295d2714037f9e3fc9a0e7d4ba460c extends Twig_Template
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
        $__internal_0ae439016a7d05f5641a2f4d2ba9da8b067d0977681e8f60a1f259734a20d104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae439016a7d05f5641a2f4d2ba9da8b067d0977681e8f60a1f259734a20d104->enter($__internal_0ae439016a7d05f5641a2f4d2ba9da8b067d0977681e8f60a1f259734a20d104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_3e16b48b674ceb11101c0198d91daf0f696a9783a8f9b75fae8e4a28ca866dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e16b48b674ceb11101c0198d91daf0f696a9783a8f9b75fae8e4a28ca866dfb->enter($__internal_3e16b48b674ceb11101c0198d91daf0f696a9783a8f9b75fae8e4a28ca866dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0ae439016a7d05f5641a2f4d2ba9da8b067d0977681e8f60a1f259734a20d104->leave($__internal_0ae439016a7d05f5641a2f4d2ba9da8b067d0977681e8f60a1f259734a20d104_prof);

        
        $__internal_3e16b48b674ceb11101c0198d91daf0f696a9783a8f9b75fae8e4a28ca866dfb->leave($__internal_3e16b48b674ceb11101c0198d91daf0f696a9783a8f9b75fae8e4a28ca866dfb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

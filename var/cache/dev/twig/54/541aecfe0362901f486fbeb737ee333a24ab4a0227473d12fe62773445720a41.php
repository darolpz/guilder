<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_859eb03adb01351788fd65168eb9796a71088d5e7e1dbfff96f1c1995925481f extends Twig_Template
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
        $__internal_785a4ae0a8dbf0e22aec00ebb17ffea5d8c12474c9eaaa0f90433bc85fb28f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785a4ae0a8dbf0e22aec00ebb17ffea5d8c12474c9eaaa0f90433bc85fb28f2d->enter($__internal_785a4ae0a8dbf0e22aec00ebb17ffea5d8c12474c9eaaa0f90433bc85fb28f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_03b840bacb0ee3be1f4a8022a8d9a8fd07bcacf3d2b29691aeaf42f9ae68b1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b840bacb0ee3be1f4a8022a8d9a8fd07bcacf3d2b29691aeaf42f9ae68b1cb->enter($__internal_03b840bacb0ee3be1f4a8022a8d9a8fd07bcacf3d2b29691aeaf42f9ae68b1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_785a4ae0a8dbf0e22aec00ebb17ffea5d8c12474c9eaaa0f90433bc85fb28f2d->leave($__internal_785a4ae0a8dbf0e22aec00ebb17ffea5d8c12474c9eaaa0f90433bc85fb28f2d_prof);

        
        $__internal_03b840bacb0ee3be1f4a8022a8d9a8fd07bcacf3d2b29691aeaf42f9ae68b1cb->leave($__internal_03b840bacb0ee3be1f4a8022a8d9a8fd07bcacf3d2b29691aeaf42f9ae68b1cb_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

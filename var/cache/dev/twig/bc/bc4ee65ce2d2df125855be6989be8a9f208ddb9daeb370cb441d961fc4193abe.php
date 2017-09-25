<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_30811c0c8f0d09ffae40027e76aa9ec392928dc71e03a5952c4ad629df18742e extends Twig_Template
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
        $__internal_df49f607bb91be6678ea5d545768b3bdf5056ae4282684f33ef40846790e5f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df49f607bb91be6678ea5d545768b3bdf5056ae4282684f33ef40846790e5f11->enter($__internal_df49f607bb91be6678ea5d545768b3bdf5056ae4282684f33ef40846790e5f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_655fa0dfe53478f79aa8aa0efc2806dfc6d9ea8033fdf8e10921cbc7765eaab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655fa0dfe53478f79aa8aa0efc2806dfc6d9ea8033fdf8e10921cbc7765eaab6->enter($__internal_655fa0dfe53478f79aa8aa0efc2806dfc6d9ea8033fdf8e10921cbc7765eaab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_df49f607bb91be6678ea5d545768b3bdf5056ae4282684f33ef40846790e5f11->leave($__internal_df49f607bb91be6678ea5d545768b3bdf5056ae4282684f33ef40846790e5f11_prof);

        
        $__internal_655fa0dfe53478f79aa8aa0efc2806dfc6d9ea8033fdf8e10921cbc7765eaab6->leave($__internal_655fa0dfe53478f79aa8aa0efc2806dfc6d9ea8033fdf8e10921cbc7765eaab6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}

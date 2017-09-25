<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_f67a1daca0b2fc6fc9073b1d7e3ac9f774bfd52ea8acccd8bcb6405b1636ca9d extends Twig_Template
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
        $__internal_46947a819ca9ab7ce22a07942517078f09456072199d700fc4c5a6f29f9dae2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46947a819ca9ab7ce22a07942517078f09456072199d700fc4c5a6f29f9dae2c->enter($__internal_46947a819ca9ab7ce22a07942517078f09456072199d700fc4c5a6f29f9dae2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_1b997450f4b36a3c36338f7b07fc48b90952617c986062c75039182d4cce661d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b997450f4b36a3c36338f7b07fc48b90952617c986062c75039182d4cce661d->enter($__internal_1b997450f4b36a3c36338f7b07fc48b90952617c986062c75039182d4cce661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_46947a819ca9ab7ce22a07942517078f09456072199d700fc4c5a6f29f9dae2c->leave($__internal_46947a819ca9ab7ce22a07942517078f09456072199d700fc4c5a6f29f9dae2c_prof);

        
        $__internal_1b997450f4b36a3c36338f7b07fc48b90952617c986062c75039182d4cce661d->leave($__internal_1b997450f4b36a3c36338f7b07fc48b90952617c986062c75039182d4cce661d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}

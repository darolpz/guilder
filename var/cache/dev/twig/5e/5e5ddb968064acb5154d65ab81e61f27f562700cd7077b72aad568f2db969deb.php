<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4ff1735193a4c08af6f9d9276622814d24a7b50514d95066f01f32a07f9cc631 extends Twig_Template
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
        $__internal_0c0754dd357d8dd264de816d069cd7bd47bd876dccb10fb91550ea14a9eaa343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0754dd357d8dd264de816d069cd7bd47bd876dccb10fb91550ea14a9eaa343->enter($__internal_0c0754dd357d8dd264de816d069cd7bd47bd876dccb10fb91550ea14a9eaa343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e075a2e767c28b61ae2ad7bbb3069a8e1dbc918c1d34f485548c0d03c531b1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e075a2e767c28b61ae2ad7bbb3069a8e1dbc918c1d34f485548c0d03c531b1ed->enter($__internal_e075a2e767c28b61ae2ad7bbb3069a8e1dbc918c1d34f485548c0d03c531b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_0c0754dd357d8dd264de816d069cd7bd47bd876dccb10fb91550ea14a9eaa343->leave($__internal_0c0754dd357d8dd264de816d069cd7bd47bd876dccb10fb91550ea14a9eaa343_prof);

        
        $__internal_e075a2e767c28b61ae2ad7bbb3069a8e1dbc918c1d34f485548c0d03c531b1ed->leave($__internal_e075a2e767c28b61ae2ad7bbb3069a8e1dbc918c1d34f485548c0d03c531b1ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

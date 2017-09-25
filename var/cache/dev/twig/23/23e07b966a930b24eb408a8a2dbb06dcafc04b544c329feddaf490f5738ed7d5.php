<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5ea787110545af474ed9e84fcbad352fe065a41db52decbb9eaf3e770b16c82d extends Twig_Template
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
        $__internal_188af58743074ff69cd1832aabb280cfd23ab42b3c61ad16417a96ad8212e04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188af58743074ff69cd1832aabb280cfd23ab42b3c61ad16417a96ad8212e04b->enter($__internal_188af58743074ff69cd1832aabb280cfd23ab42b3c61ad16417a96ad8212e04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1b9e59fa06998f6f1e8bf9f74c3a47e1e7d04c5b20bf06100a7de39940a152da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9e59fa06998f6f1e8bf9f74c3a47e1e7d04c5b20bf06100a7de39940a152da->enter($__internal_1b9e59fa06998f6f1e8bf9f74c3a47e1e7d04c5b20bf06100a7de39940a152da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_188af58743074ff69cd1832aabb280cfd23ab42b3c61ad16417a96ad8212e04b->leave($__internal_188af58743074ff69cd1832aabb280cfd23ab42b3c61ad16417a96ad8212e04b_prof);

        
        $__internal_1b9e59fa06998f6f1e8bf9f74c3a47e1e7d04c5b20bf06100a7de39940a152da->leave($__internal_1b9e59fa06998f6f1e8bf9f74c3a47e1e7d04c5b20bf06100a7de39940a152da_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

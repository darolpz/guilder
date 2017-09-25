<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5981f65d3f6a540269db9fbd351a7803433ce888368ceffc8a0c464474eb866b extends Twig_Template
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
        $__internal_f87a62d5d2825ab9c1130cf454fda12d61653e26bf37c2b3abbcf215493c6ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87a62d5d2825ab9c1130cf454fda12d61653e26bf37c2b3abbcf215493c6ec8->enter($__internal_f87a62d5d2825ab9c1130cf454fda12d61653e26bf37c2b3abbcf215493c6ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8a37bcadbffc9eabce2c104102da2f92429e670d84da8dbb120f591234df840a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a37bcadbffc9eabce2c104102da2f92429e670d84da8dbb120f591234df840a->enter($__internal_8a37bcadbffc9eabce2c104102da2f92429e670d84da8dbb120f591234df840a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_f87a62d5d2825ab9c1130cf454fda12d61653e26bf37c2b3abbcf215493c6ec8->leave($__internal_f87a62d5d2825ab9c1130cf454fda12d61653e26bf37c2b3abbcf215493c6ec8_prof);

        
        $__internal_8a37bcadbffc9eabce2c104102da2f92429e670d84da8dbb120f591234df840a->leave($__internal_8a37bcadbffc9eabce2c104102da2f92429e670d84da8dbb120f591234df840a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

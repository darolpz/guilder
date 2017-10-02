<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a508d1d3a1c75649f70630d4fa437adcc7b1206c6d649d5601803631cc904672 extends Twig_Template
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
        $__internal_e3210eaffbc21acab257bb5ebff73a076fe1306199355cf39fad6550dbde20b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3210eaffbc21acab257bb5ebff73a076fe1306199355cf39fad6550dbde20b1->enter($__internal_e3210eaffbc21acab257bb5ebff73a076fe1306199355cf39fad6550dbde20b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_580304d377a76407fbd5ed670c702cd7d324d0c75ee089bca76cb669f5469b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580304d377a76407fbd5ed670c702cd7d324d0c75ee089bca76cb669f5469b10->enter($__internal_580304d377a76407fbd5ed670c702cd7d324d0c75ee089bca76cb669f5469b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e3210eaffbc21acab257bb5ebff73a076fe1306199355cf39fad6550dbde20b1->leave($__internal_e3210eaffbc21acab257bb5ebff73a076fe1306199355cf39fad6550dbde20b1_prof);

        
        $__internal_580304d377a76407fbd5ed670c702cd7d324d0c75ee089bca76cb669f5469b10->leave($__internal_580304d377a76407fbd5ed670c702cd7d324d0c75ee089bca76cb669f5469b10_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

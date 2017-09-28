<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_54550814b0f76ae8ebe05a89b8704e21a062f4995d945a0979ef7d4c652fbb77 extends Twig_Template
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
        $__internal_ac951b75b77c42aa33c6864b41e7c10101f137b6d46c6e2a1617330dc5a1e8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac951b75b77c42aa33c6864b41e7c10101f137b6d46c6e2a1617330dc5a1e8b1->enter($__internal_ac951b75b77c42aa33c6864b41e7c10101f137b6d46c6e2a1617330dc5a1e8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_1b4ebfe84cef7c2c5384ef58b139008b7d18f03c2453688595925dc08edb64b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4ebfe84cef7c2c5384ef58b139008b7d18f03c2453688595925dc08edb64b6->enter($__internal_1b4ebfe84cef7c2c5384ef58b139008b7d18f03c2453688595925dc08edb64b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ac951b75b77c42aa33c6864b41e7c10101f137b6d46c6e2a1617330dc5a1e8b1->leave($__internal_ac951b75b77c42aa33c6864b41e7c10101f137b6d46c6e2a1617330dc5a1e8b1_prof);

        
        $__internal_1b4ebfe84cef7c2c5384ef58b139008b7d18f03c2453688595925dc08edb64b6->leave($__internal_1b4ebfe84cef7c2c5384ef58b139008b7d18f03c2453688595925dc08edb64b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}

<?php

/* :registration:register.html.twig */
class __TwigTemplate_8fd964f1a9d6b61469aed6ca1724b1f91052b956e4af13118731e3a993c82d08 extends Twig_Template
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
        $__internal_3ec6722f0f0460502cf4bbf35b586397d4d69413196e5ee9c76617acadd8cb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec6722f0f0460502cf4bbf35b586397d4d69413196e5ee9c76617acadd8cb55->enter($__internal_3ec6722f0f0460502cf4bbf35b586397d4d69413196e5ee9c76617acadd8cb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":registration:register.html.twig"));

        $__internal_3f95d04d7fd1f345bdbab61b812ee6a4f24a4fe327c993e01bf12bedd56b031d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f95d04d7fd1f345bdbab61b812ee6a4f24a4fe327c993e01bf12bedd56b031d->enter($__internal_3f95d04d7fd1f345bdbab61b812ee6a4f24a4fe327c993e01bf12bedd56b031d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":registration:register.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">Register!</button>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_3ec6722f0f0460502cf4bbf35b586397d4d69413196e5ee9c76617acadd8cb55->leave($__internal_3ec6722f0f0460502cf4bbf35b586397d4d69413196e5ee9c76617acadd8cb55_prof);

        
        $__internal_3f95d04d7fd1f345bdbab61b812ee6a4f24a4fe327c993e01bf12bedd56b031d->leave($__internal_3f95d04d7fd1f345bdbab61b812ee6a4f24a4fe327c993e01bf12bedd56b031d_prof);

    }

    public function getTemplateName()
    {
        return ":registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/registration/register.html.twig #}

{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}

    <button type=\"submit\">Register!</button>
{{ form_end(form) }}
", ":registration:register.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/registration/register.html.twig");
    }
}

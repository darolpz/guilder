<?php

/* registration/register.html.twig */
class __TwigTemplate_07b6a96ecf48df69417a2726e00602835e10d4fcbeb261adf88e54f6adffc7c6 extends Twig_Template
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
        $__internal_8574e5418a8ec1e1e21f6fb9df47147bae9fea3ae1691e972bc723c2085bd3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8574e5418a8ec1e1e21f6fb9df47147bae9fea3ae1691e972bc723c2085bd3d5->enter($__internal_8574e5418a8ec1e1e21f6fb9df47147bae9fea3ae1691e972bc723c2085bd3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_b281b187d35f732f125b9d7aefaf46a91b1eb604e7f7e41cd5cebd805a3b403c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b281b187d35f732f125b9d7aefaf46a91b1eb604e7f7e41cd5cebd805a3b403c->enter($__internal_b281b187d35f732f125b9d7aefaf46a91b1eb604e7f7e41cd5cebd805a3b403c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
        
        $__internal_8574e5418a8ec1e1e21f6fb9df47147bae9fea3ae1691e972bc723c2085bd3d5->leave($__internal_8574e5418a8ec1e1e21f6fb9df47147bae9fea3ae1691e972bc723c2085bd3d5_prof);

        
        $__internal_b281b187d35f732f125b9d7aefaf46a91b1eb604e7f7e41cd5cebd805a3b403c->leave($__internal_b281b187d35f732f125b9d7aefaf46a91b1eb604e7f7e41cd5cebd805a3b403c_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
", "registration/register.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\registration\\register.html.twig");
    }
}

<?php

/* :user:edit.html.twig */
class __TwigTemplate_0753244de9ad29865acaee4b2c1e32b0d026c28dca49174f5948204d69751b8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31c09792a72dfad52bf331c037dfb5187562cfb647d8004dd1fe5ff10c9d30ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c09792a72dfad52bf331c037dfb5187562cfb647d8004dd1fe5ff10c9d30ae->enter($__internal_31c09792a72dfad52bf331c037dfb5187562cfb647d8004dd1fe5ff10c9d30ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_ce00a2ed6e495f0b1b4a840f8018aa25937a8a3c074795182a2f7354d50b9b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce00a2ed6e495f0b1b4a840f8018aa25937a8a3c074795182a2f7354d50b9b8c->enter($__internal_ce00a2ed6e495f0b1b4a840f8018aa25937a8a3c074795182a2f7354d50b9b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c09792a72dfad52bf331c037dfb5187562cfb647d8004dd1fe5ff10c9d30ae->leave($__internal_31c09792a72dfad52bf331c037dfb5187562cfb647d8004dd1fe5ff10c9d30ae_prof);

        
        $__internal_ce00a2ed6e495f0b1b4a840f8018aa25937a8a3c074795182a2f7354d50b9b8c->leave($__internal_ce00a2ed6e495f0b1b4a840f8018aa25937a8a3c074795182a2f7354d50b9b8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c06941c8e5e4d169cf331e853fa11a8d5ff1270fa37bb05e13f454cf9b630b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06941c8e5e4d169cf331e853fa11a8d5ff1270fa37bb05e13f454cf9b630b34->enter($__internal_c06941c8e5e4d169cf331e853fa11a8d5ff1270fa37bb05e13f454cf9b630b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da0cd06f816902cda57492b1d3054dfd344dc077dc4350ab18758973323df122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0cd06f816902cda57492b1d3054dfd344dc077dc4350ab18758973323df122->enter($__internal_da0cd06f816902cda57492b1d3054dfd344dc077dc4350ab18758973323df122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_da0cd06f816902cda57492b1d3054dfd344dc077dc4350ab18758973323df122->leave($__internal_da0cd06f816902cda57492b1d3054dfd344dc077dc4350ab18758973323df122_prof);

        
        $__internal_c06941c8e5e4d169cf331e853fa11a8d5ff1270fa37bb05e13f454cf9b630b34->leave($__internal_c06941c8e5e4d169cf331e853fa11a8d5ff1270fa37bb05e13f454cf9b630b34_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/user/edit.html.twig");
    }
}

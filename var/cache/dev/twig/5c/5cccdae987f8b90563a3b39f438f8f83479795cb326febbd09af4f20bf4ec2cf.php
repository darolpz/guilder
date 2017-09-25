<?php

/* horario/edit.html.twig */
class __TwigTemplate_c99332ba521bd0f0bb33c5a2be2fbb87b7b62e1ec0d8f51992be8a5748846b07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horario/edit.html.twig", 1);
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
        $__internal_22c6c9760ac67fdc2807997e7ff6ba7c1db84aa8287ebed06ba29be9503bf9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c6c9760ac67fdc2807997e7ff6ba7c1db84aa8287ebed06ba29be9503bf9b2->enter($__internal_22c6c9760ac67fdc2807997e7ff6ba7c1db84aa8287ebed06ba29be9503bf9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/edit.html.twig"));

        $__internal_fc4f25cc3b8456b80cdbe05bd52569ff0d0b804a9c6468e731791311ff40a230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4f25cc3b8456b80cdbe05bd52569ff0d0b804a9c6468e731791311ff40a230->enter($__internal_fc4f25cc3b8456b80cdbe05bd52569ff0d0b804a9c6468e731791311ff40a230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c6c9760ac67fdc2807997e7ff6ba7c1db84aa8287ebed06ba29be9503bf9b2->leave($__internal_22c6c9760ac67fdc2807997e7ff6ba7c1db84aa8287ebed06ba29be9503bf9b2_prof);

        
        $__internal_fc4f25cc3b8456b80cdbe05bd52569ff0d0b804a9c6468e731791311ff40a230->leave($__internal_fc4f25cc3b8456b80cdbe05bd52569ff0d0b804a9c6468e731791311ff40a230_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b933a449195a08aa7e1180fb67af9a5fb9c40b70b8e2663b227134836b55b6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b933a449195a08aa7e1180fb67af9a5fb9c40b70b8e2663b227134836b55b6af->enter($__internal_b933a449195a08aa7e1180fb67af9a5fb9c40b70b8e2663b227134836b55b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cb28cd2c3132513e7980c16d0e0cc067aae1af7c352056bb42e60dbcba0f514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb28cd2c3132513e7980c16d0e0cc067aae1af7c352056bb42e60dbcba0f514->enter($__internal_0cb28cd2c3132513e7980c16d0e0cc067aae1af7c352056bb42e60dbcba0f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horario edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
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
        
        $__internal_0cb28cd2c3132513e7980c16d0e0cc067aae1af7c352056bb42e60dbcba0f514->leave($__internal_0cb28cd2c3132513e7980c16d0e0cc067aae1af7c352056bb42e60dbcba0f514_prof);

        
        $__internal_b933a449195a08aa7e1180fb67af9a5fb9c40b70b8e2663b227134836b55b6af->leave($__internal_b933a449195a08aa7e1180fb67af9a5fb9c40b70b8e2663b227134836b55b6af_prof);

    }

    public function getTemplateName()
    {
        return "horario/edit.html.twig";
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
    <h1>Horario edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('horario_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "horario/edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\horario\\edit.html.twig");
    }
}

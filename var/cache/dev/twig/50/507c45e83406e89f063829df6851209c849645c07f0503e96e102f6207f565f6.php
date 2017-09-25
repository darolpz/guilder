<?php

/* :rol:edit.html.twig */
class __TwigTemplate_57e9efced3a57655387a2af6ee31426f758ad30963ae76b0ec5da83f13a1e4a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rol:edit.html.twig", 1);
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
        $__internal_ddf5df4b5edc8c7d2b6af55c71bc6c262ae27421894567b7c4591a00f9f71edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf5df4b5edc8c7d2b6af55c71bc6c262ae27421894567b7c4591a00f9f71edd->enter($__internal_ddf5df4b5edc8c7d2b6af55c71bc6c262ae27421894567b7c4591a00f9f71edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:edit.html.twig"));

        $__internal_de06988f867a887ee31f9ca263cf22dbf8c8fea863bd148616d58e9ee9b4f809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de06988f867a887ee31f9ca263cf22dbf8c8fea863bd148616d58e9ee9b4f809->enter($__internal_de06988f867a887ee31f9ca263cf22dbf8c8fea863bd148616d58e9ee9b4f809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf5df4b5edc8c7d2b6af55c71bc6c262ae27421894567b7c4591a00f9f71edd->leave($__internal_ddf5df4b5edc8c7d2b6af55c71bc6c262ae27421894567b7c4591a00f9f71edd_prof);

        
        $__internal_de06988f867a887ee31f9ca263cf22dbf8c8fea863bd148616d58e9ee9b4f809->leave($__internal_de06988f867a887ee31f9ca263cf22dbf8c8fea863bd148616d58e9ee9b4f809_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da0cfa7194b5a796565d1afa8d8a9ce0e32334e3dd642c1f31283e2689a4f81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0cfa7194b5a796565d1afa8d8a9ce0e32334e3dd642c1f31283e2689a4f81f->enter($__internal_da0cfa7194b5a796565d1afa8d8a9ce0e32334e3dd642c1f31283e2689a4f81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8eb6a9f322c1e4c11d8f9896c8833fe4ba578852662b3b25b1dfe1f1391b3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8eb6a9f322c1e4c11d8f9896c8833fe4ba578852662b3b25b1dfe1f1391b3b8->enter($__internal_f8eb6a9f322c1e4c11d8f9896c8833fe4ba578852662b3b25b1dfe1f1391b3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rol edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_index");
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
        
        $__internal_f8eb6a9f322c1e4c11d8f9896c8833fe4ba578852662b3b25b1dfe1f1391b3b8->leave($__internal_f8eb6a9f322c1e4c11d8f9896c8833fe4ba578852662b3b25b1dfe1f1391b3b8_prof);

        
        $__internal_da0cfa7194b5a796565d1afa8d8a9ce0e32334e3dd642c1f31283e2689a4f81f->leave($__internal_da0cfa7194b5a796565d1afa8d8a9ce0e32334e3dd642c1f31283e2689a4f81f_prof);

    }

    public function getTemplateName()
    {
        return ":rol:edit.html.twig";
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
    <h1>Rol edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('rol_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":rol:edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/rol/edit.html.twig");
    }
}

<?php

/* :comision:new.html.twig */
class __TwigTemplate_b7aa74466de188e1f3b2e7c9beba9bebba515d60d6b0668bf48b4fb60dbcdd13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comision:new.html.twig", 1);
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
        $__internal_c8b96cc0365b2a91dee4551abf5e4c064a7914c696ef23fa43311bcb9dfbdd54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b96cc0365b2a91dee4551abf5e4c064a7914c696ef23fa43311bcb9dfbdd54->enter($__internal_c8b96cc0365b2a91dee4551abf5e4c064a7914c696ef23fa43311bcb9dfbdd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:new.html.twig"));

        $__internal_99ef9c51c050cc2efff4de6a1058483e264f36bfa4374c9f582aefd13b0e50e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ef9c51c050cc2efff4de6a1058483e264f36bfa4374c9f582aefd13b0e50e3->enter($__internal_99ef9c51c050cc2efff4de6a1058483e264f36bfa4374c9f582aefd13b0e50e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b96cc0365b2a91dee4551abf5e4c064a7914c696ef23fa43311bcb9dfbdd54->leave($__internal_c8b96cc0365b2a91dee4551abf5e4c064a7914c696ef23fa43311bcb9dfbdd54_prof);

        
        $__internal_99ef9c51c050cc2efff4de6a1058483e264f36bfa4374c9f582aefd13b0e50e3->leave($__internal_99ef9c51c050cc2efff4de6a1058483e264f36bfa4374c9f582aefd13b0e50e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6aa1411f2cf639491e24a673459b73d8869826f754d2d73659d83a8c5c60c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aa1411f2cf639491e24a673459b73d8869826f754d2d73659d83a8c5c60c3e->enter($__internal_b6aa1411f2cf639491e24a673459b73d8869826f754d2d73659d83a8c5c60c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2543fb5819cb17eb22ab6a018ee15d2a1e9af4d3ea05cea3bad90b9ac464e7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2543fb5819cb17eb22ab6a018ee15d2a1e9af4d3ea05cea3bad90b9ac464e7a0->enter($__internal_2543fb5819cb17eb22ab6a018ee15d2a1e9af4d3ea05cea3bad90b9ac464e7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2543fb5819cb17eb22ab6a018ee15d2a1e9af4d3ea05cea3bad90b9ac464e7a0->leave($__internal_2543fb5819cb17eb22ab6a018ee15d2a1e9af4d3ea05cea3bad90b9ac464e7a0_prof);

        
        $__internal_b6aa1411f2cf639491e24a673459b73d8869826f754d2d73659d83a8c5c60c3e->leave($__internal_b6aa1411f2cf639491e24a673459b73d8869826f754d2d73659d83a8c5c60c3e_prof);

    }

    public function getTemplateName()
    {
        return ":comision:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comision creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('comision_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":comision:new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/comision/new.html.twig");
    }
}

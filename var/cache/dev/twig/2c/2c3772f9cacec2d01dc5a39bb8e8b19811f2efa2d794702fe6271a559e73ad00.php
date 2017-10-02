<?php

/* horario/edit.html.twig */
class __TwigTemplate_491aad9cb97417b56c7630544f4de3cf466497d0238f6779e644bdcfee200e5c extends Twig_Template
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
        $__internal_e75f4adc9451c87078794becd782df6c607cc11bee11b0732946b40068f13778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75f4adc9451c87078794becd782df6c607cc11bee11b0732946b40068f13778->enter($__internal_e75f4adc9451c87078794becd782df6c607cc11bee11b0732946b40068f13778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/edit.html.twig"));

        $__internal_9e787ce7d96fc41178d8d2ec951cc90d4c97184d4816fa34cef2ca2a6abf2823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e787ce7d96fc41178d8d2ec951cc90d4c97184d4816fa34cef2ca2a6abf2823->enter($__internal_9e787ce7d96fc41178d8d2ec951cc90d4c97184d4816fa34cef2ca2a6abf2823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e75f4adc9451c87078794becd782df6c607cc11bee11b0732946b40068f13778->leave($__internal_e75f4adc9451c87078794becd782df6c607cc11bee11b0732946b40068f13778_prof);

        
        $__internal_9e787ce7d96fc41178d8d2ec951cc90d4c97184d4816fa34cef2ca2a6abf2823->leave($__internal_9e787ce7d96fc41178d8d2ec951cc90d4c97184d4816fa34cef2ca2a6abf2823_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8046ce18c35e2274178cd77ca39eda30bd7f7517ff4986aa5c60d06fc3d3d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8046ce18c35e2274178cd77ca39eda30bd7f7517ff4986aa5c60d06fc3d3d3b->enter($__internal_a8046ce18c35e2274178cd77ca39eda30bd7f7517ff4986aa5c60d06fc3d3d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcf026861b48cf884a34b7907b6f481424431b1071a7593a6b648c6193bfa606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf026861b48cf884a34b7907b6f481424431b1071a7593a6b648c6193bfa606->enter($__internal_fcf026861b48cf884a34b7907b6f481424431b1071a7593a6b648c6193bfa606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horario edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fcf026861b48cf884a34b7907b6f481424431b1071a7593a6b648c6193bfa606->leave($__internal_fcf026861b48cf884a34b7907b6f481424431b1071a7593a6b648c6193bfa606_prof);

        
        $__internal_a8046ce18c35e2274178cd77ca39eda30bd7f7517ff4986aa5c60d06fc3d3d3b->leave($__internal_a8046ce18c35e2274178cd77ca39eda30bd7f7517ff4986aa5c60d06fc3d3d3b_prof);

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

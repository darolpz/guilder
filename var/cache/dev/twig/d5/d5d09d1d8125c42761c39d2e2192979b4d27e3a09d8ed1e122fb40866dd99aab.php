<?php

/* comision/edit.html.twig */
class __TwigTemplate_d4b8920c5b8396d5095eb61b73d1a02c38e578c6fe6e9f8f4970fad216248454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comision/edit.html.twig", 1);
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
        $__internal_b2ab83ac92588cd92af2e692441cf39e3d2ae7c6899479f07aedbafd8da0ddb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ab83ac92588cd92af2e692441cf39e3d2ae7c6899479f07aedbafd8da0ddb7->enter($__internal_b2ab83ac92588cd92af2e692441cf39e3d2ae7c6899479f07aedbafd8da0ddb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/edit.html.twig"));

        $__internal_d7846c95e8053a8da889832b769dae028df33758f085649229c3068ceec94ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7846c95e8053a8da889832b769dae028df33758f085649229c3068ceec94ca6->enter($__internal_d7846c95e8053a8da889832b769dae028df33758f085649229c3068ceec94ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ab83ac92588cd92af2e692441cf39e3d2ae7c6899479f07aedbafd8da0ddb7->leave($__internal_b2ab83ac92588cd92af2e692441cf39e3d2ae7c6899479f07aedbafd8da0ddb7_prof);

        
        $__internal_d7846c95e8053a8da889832b769dae028df33758f085649229c3068ceec94ca6->leave($__internal_d7846c95e8053a8da889832b769dae028df33758f085649229c3068ceec94ca6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a4ca6f8bd5e6bd3c23f6e19ab08011ef21fcdf0d71c5948c366da72320cbe62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4ca6f8bd5e6bd3c23f6e19ab08011ef21fcdf0d71c5948c366da72320cbe62->enter($__internal_9a4ca6f8bd5e6bd3c23f6e19ab08011ef21fcdf0d71c5948c366da72320cbe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e28aaea173d6a22cf6eb5af269d09596ac89e7897f03a70684c924874ab2767f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28aaea173d6a22cf6eb5af269d09596ac89e7897f03a70684c924874ab2767f->enter($__internal_e28aaea173d6a22cf6eb5af269d09596ac89e7897f03a70684c924874ab2767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
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
        
        $__internal_e28aaea173d6a22cf6eb5af269d09596ac89e7897f03a70684c924874ab2767f->leave($__internal_e28aaea173d6a22cf6eb5af269d09596ac89e7897f03a70684c924874ab2767f_prof);

        
        $__internal_9a4ca6f8bd5e6bd3c23f6e19ab08011ef21fcdf0d71c5948c366da72320cbe62->leave($__internal_9a4ca6f8bd5e6bd3c23f6e19ab08011ef21fcdf0d71c5948c366da72320cbe62_prof);

    }

    public function getTemplateName()
    {
        return "comision/edit.html.twig";
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
    <h1>Comision edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('comision_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "comision/edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\comision\\edit.html.twig");
    }
}

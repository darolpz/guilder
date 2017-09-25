<?php

/* horario/new.html.twig */
class __TwigTemplate_0855f14c0ada031f82694e2a45342368e093ad07a80872224e95998524666322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horario/new.html.twig", 1);
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
        $__internal_604d375282cfe7073d92f303f0af9ef5a2b0cf88bae2d37f51a0f67e3383b6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604d375282cfe7073d92f303f0af9ef5a2b0cf88bae2d37f51a0f67e3383b6ce->enter($__internal_604d375282cfe7073d92f303f0af9ef5a2b0cf88bae2d37f51a0f67e3383b6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/new.html.twig"));

        $__internal_a73303d5baea2ed51ae1e0274b153b70a248f214f4f1c535246b3b22325a85f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73303d5baea2ed51ae1e0274b153b70a248f214f4f1c535246b3b22325a85f6->enter($__internal_a73303d5baea2ed51ae1e0274b153b70a248f214f4f1c535246b3b22325a85f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604d375282cfe7073d92f303f0af9ef5a2b0cf88bae2d37f51a0f67e3383b6ce->leave($__internal_604d375282cfe7073d92f303f0af9ef5a2b0cf88bae2d37f51a0f67e3383b6ce_prof);

        
        $__internal_a73303d5baea2ed51ae1e0274b153b70a248f214f4f1c535246b3b22325a85f6->leave($__internal_a73303d5baea2ed51ae1e0274b153b70a248f214f4f1c535246b3b22325a85f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5cc4f2040274fce05c4f7c23e14b40b4c8f76944fd3ac13557887ada1ef585b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cc4f2040274fce05c4f7c23e14b40b4c8f76944fd3ac13557887ada1ef585b->enter($__internal_f5cc4f2040274fce05c4f7c23e14b40b4c8f76944fd3ac13557887ada1ef585b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e2eedc69809f9ba7f0151d7d417bdf1259d6cca7602e05009c1f7da061ff1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2eedc69809f9ba7f0151d7d417bdf1259d6cca7602e05009c1f7da061ff1ec->enter($__internal_1e2eedc69809f9ba7f0151d7d417bdf1259d6cca7602e05009c1f7da061ff1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horario creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1e2eedc69809f9ba7f0151d7d417bdf1259d6cca7602e05009c1f7da061ff1ec->leave($__internal_1e2eedc69809f9ba7f0151d7d417bdf1259d6cca7602e05009c1f7da061ff1ec_prof);

        
        $__internal_f5cc4f2040274fce05c4f7c23e14b40b4c8f76944fd3ac13557887ada1ef585b->leave($__internal_f5cc4f2040274fce05c4f7c23e14b40b4c8f76944fd3ac13557887ada1ef585b_prof);

    }

    public function getTemplateName()
    {
        return "horario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Horario creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('horario_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "horario/new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\horario\\new.html.twig");
    }
}

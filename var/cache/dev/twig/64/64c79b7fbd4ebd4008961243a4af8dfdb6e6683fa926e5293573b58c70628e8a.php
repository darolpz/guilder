<?php

/* user/new.html.twig */
class __TwigTemplate_5a0c663036c2b87b37bf06215b4a37bcbab68e922b3b9b777930bdd4dd256999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_3fd8436fcfaec62260a8bde05943c0154eda6160ca900ef8e0701c66e8e0dff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd8436fcfaec62260a8bde05943c0154eda6160ca900ef8e0701c66e8e0dff7->enter($__internal_3fd8436fcfaec62260a8bde05943c0154eda6160ca900ef8e0701c66e8e0dff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_b7f8121c4ca92092cc504f57079056a093c51741a0c424c0f7dfe64cdbbf8317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f8121c4ca92092cc504f57079056a093c51741a0c424c0f7dfe64cdbbf8317->enter($__internal_b7f8121c4ca92092cc504f57079056a093c51741a0c424c0f7dfe64cdbbf8317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd8436fcfaec62260a8bde05943c0154eda6160ca900ef8e0701c66e8e0dff7->leave($__internal_3fd8436fcfaec62260a8bde05943c0154eda6160ca900ef8e0701c66e8e0dff7_prof);

        
        $__internal_b7f8121c4ca92092cc504f57079056a093c51741a0c424c0f7dfe64cdbbf8317->leave($__internal_b7f8121c4ca92092cc504f57079056a093c51741a0c424c0f7dfe64cdbbf8317_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7ff769e4a0036f6e22b0f79192acf09face3910489dfe31f5af200c90992e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ff769e4a0036f6e22b0f79192acf09face3910489dfe31f5af200c90992e7c->enter($__internal_a7ff769e4a0036f6e22b0f79192acf09face3910489dfe31f5af200c90992e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_634dd9acd5ee09ee0eeb37a2ca8f96b9a4ee19f51b89d26dce68ac6071285340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634dd9acd5ee09ee0eeb37a2ca8f96b9a4ee19f51b89d26dce68ac6071285340->enter($__internal_634dd9acd5ee09ee0eeb37a2ca8f96b9a4ee19f51b89d26dce68ac6071285340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_634dd9acd5ee09ee0eeb37a2ca8f96b9a4ee19f51b89d26dce68ac6071285340->leave($__internal_634dd9acd5ee09ee0eeb37a2ca8f96b9a4ee19f51b89d26dce68ac6071285340_prof);

        
        $__internal_a7ff769e4a0036f6e22b0f79192acf09face3910489dfe31f5af200c90992e7c->leave($__internal_a7ff769e4a0036f6e22b0f79192acf09face3910489dfe31f5af200c90992e7c_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\user\\new.html.twig");
    }
}

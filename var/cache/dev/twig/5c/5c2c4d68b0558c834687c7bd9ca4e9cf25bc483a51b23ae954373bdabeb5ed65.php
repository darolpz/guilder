<?php

/* user/new.html.twig */
class __TwigTemplate_2319dd121d545cd7e788215f1188afe98c798558946af293a41759a4f2e8c44b extends Twig_Template
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
        $__internal_9eff44c217c2956bc1ae9c35fd1e9a5e8a97256551e78777568e5e5d4a4ee205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eff44c217c2956bc1ae9c35fd1e9a5e8a97256551e78777568e5e5d4a4ee205->enter($__internal_9eff44c217c2956bc1ae9c35fd1e9a5e8a97256551e78777568e5e5d4a4ee205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_cd1bbd9008d3f6406662684f796686685f2d6a7689441d9c559b0efc2362dada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1bbd9008d3f6406662684f796686685f2d6a7689441d9c559b0efc2362dada->enter($__internal_cd1bbd9008d3f6406662684f796686685f2d6a7689441d9c559b0efc2362dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eff44c217c2956bc1ae9c35fd1e9a5e8a97256551e78777568e5e5d4a4ee205->leave($__internal_9eff44c217c2956bc1ae9c35fd1e9a5e8a97256551e78777568e5e5d4a4ee205_prof);

        
        $__internal_cd1bbd9008d3f6406662684f796686685f2d6a7689441d9c559b0efc2362dada->leave($__internal_cd1bbd9008d3f6406662684f796686685f2d6a7689441d9c559b0efc2362dada_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd4db055aedabc7b0f439cc53def7439ef91c086a4bc0211bfe03beadc1e29d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4db055aedabc7b0f439cc53def7439ef91c086a4bc0211bfe03beadc1e29d8->enter($__internal_cd4db055aedabc7b0f439cc53def7439ef91c086a4bc0211bfe03beadc1e29d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14f48f00896b6efa76ecc8aa511126ebb55258d062e9023f29767b6fb6f66600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f48f00896b6efa76ecc8aa511126ebb55258d062e9023f29767b6fb6f66600->enter($__internal_14f48f00896b6efa76ecc8aa511126ebb55258d062e9023f29767b6fb6f66600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_14f48f00896b6efa76ecc8aa511126ebb55258d062e9023f29767b6fb6f66600->leave($__internal_14f48f00896b6efa76ecc8aa511126ebb55258d062e9023f29767b6fb6f66600_prof);

        
        $__internal_cd4db055aedabc7b0f439cc53def7439ef91c086a4bc0211bfe03beadc1e29d8->leave($__internal_cd4db055aedabc7b0f439cc53def7439ef91c086a4bc0211bfe03beadc1e29d8_prof);

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

<?php

/* comision/new.html.twig */
class __TwigTemplate_d9b4621aba300b76c75c442ecd04428c4c2c769053350757ed0642ecffc0a3a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comision/new.html.twig", 1);
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
        $__internal_d6ec224915386c6126731b97d8173911fbfc51618f1206ca8883d0aed8e0f990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ec224915386c6126731b97d8173911fbfc51618f1206ca8883d0aed8e0f990->enter($__internal_d6ec224915386c6126731b97d8173911fbfc51618f1206ca8883d0aed8e0f990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/new.html.twig"));

        $__internal_d55bde0a8ad6b63ddd8e8327320ad2425c9993b3ff6ea49e4f411272f5d3bbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55bde0a8ad6b63ddd8e8327320ad2425c9993b3ff6ea49e4f411272f5d3bbad->enter($__internal_d55bde0a8ad6b63ddd8e8327320ad2425c9993b3ff6ea49e4f411272f5d3bbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ec224915386c6126731b97d8173911fbfc51618f1206ca8883d0aed8e0f990->leave($__internal_d6ec224915386c6126731b97d8173911fbfc51618f1206ca8883d0aed8e0f990_prof);

        
        $__internal_d55bde0a8ad6b63ddd8e8327320ad2425c9993b3ff6ea49e4f411272f5d3bbad->leave($__internal_d55bde0a8ad6b63ddd8e8327320ad2425c9993b3ff6ea49e4f411272f5d3bbad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb149ef8d5e3657f8946e53827342a36a6ca2601dea6db39a24336c148065ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb149ef8d5e3657f8946e53827342a36a6ca2601dea6db39a24336c148065ad->enter($__internal_fbb149ef8d5e3657f8946e53827342a36a6ca2601dea6db39a24336c148065ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98337c4111821bcb1c1c1bc0b2e1570d534210db8fabd7c73f926cb6b41033dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98337c4111821bcb1c1c1bc0b2e1570d534210db8fabd7c73f926cb6b41033dd->enter($__internal_98337c4111821bcb1c1c1bc0b2e1570d534210db8fabd7c73f926cb6b41033dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_98337c4111821bcb1c1c1bc0b2e1570d534210db8fabd7c73f926cb6b41033dd->leave($__internal_98337c4111821bcb1c1c1bc0b2e1570d534210db8fabd7c73f926cb6b41033dd_prof);

        
        $__internal_fbb149ef8d5e3657f8946e53827342a36a6ca2601dea6db39a24336c148065ad->leave($__internal_fbb149ef8d5e3657f8946e53827342a36a6ca2601dea6db39a24336c148065ad_prof);

    }

    public function getTemplateName()
    {
        return "comision/new.html.twig";
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
", "comision/new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\comision\\new.html.twig");
    }
}

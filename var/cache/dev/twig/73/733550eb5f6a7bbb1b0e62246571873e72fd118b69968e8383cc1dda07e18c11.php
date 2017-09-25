<?php

/* :comision:new.html.twig */
class __TwigTemplate_bb25f7ae025bced1dfc773787d77adccde7a00d63ab98268ba7eb4cb757f10b1 extends Twig_Template
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
        $__internal_d3de65e3f924c7efc4c28a728f5f943473b627f78e1c6e7c9958b6302f534be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3de65e3f924c7efc4c28a728f5f943473b627f78e1c6e7c9958b6302f534be4->enter($__internal_d3de65e3f924c7efc4c28a728f5f943473b627f78e1c6e7c9958b6302f534be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:new.html.twig"));

        $__internal_b3d064caf3c8dddb22a46131224d1a8818eb28184be7d98fa2c86eadf7a3a9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d064caf3c8dddb22a46131224d1a8818eb28184be7d98fa2c86eadf7a3a9ed->enter($__internal_b3d064caf3c8dddb22a46131224d1a8818eb28184be7d98fa2c86eadf7a3a9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3de65e3f924c7efc4c28a728f5f943473b627f78e1c6e7c9958b6302f534be4->leave($__internal_d3de65e3f924c7efc4c28a728f5f943473b627f78e1c6e7c9958b6302f534be4_prof);

        
        $__internal_b3d064caf3c8dddb22a46131224d1a8818eb28184be7d98fa2c86eadf7a3a9ed->leave($__internal_b3d064caf3c8dddb22a46131224d1a8818eb28184be7d98fa2c86eadf7a3a9ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f9a4a758ec5f494f654df853d0d6f205efe0b1042149ada3cd70dec84fa8415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9a4a758ec5f494f654df853d0d6f205efe0b1042149ada3cd70dec84fa8415->enter($__internal_8f9a4a758ec5f494f654df853d0d6f205efe0b1042149ada3cd70dec84fa8415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c3a25450ea2ba0198d88ee982a682675bb1199f38e69a79bbe6173c46672579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3a25450ea2ba0198d88ee982a682675bb1199f38e69a79bbe6173c46672579->enter($__internal_5c3a25450ea2ba0198d88ee982a682675bb1199f38e69a79bbe6173c46672579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c3a25450ea2ba0198d88ee982a682675bb1199f38e69a79bbe6173c46672579->leave($__internal_5c3a25450ea2ba0198d88ee982a682675bb1199f38e69a79bbe6173c46672579_prof);

        
        $__internal_8f9a4a758ec5f494f654df853d0d6f205efe0b1042149ada3cd70dec84fa8415->leave($__internal_8f9a4a758ec5f494f654df853d0d6f205efe0b1042149ada3cd70dec84fa8415_prof);

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

<?php

/* comision/edit.html.twig */
class __TwigTemplate_07d6b0654f19cbb93dd1117b4fe39fe7bcc137ec7ca67b551575fb0bd01c7fa8 extends Twig_Template
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
        $__internal_467377071b0b69669f235ad063723dc4299384d1eb1a83119f9964cb8a6eec90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467377071b0b69669f235ad063723dc4299384d1eb1a83119f9964cb8a6eec90->enter($__internal_467377071b0b69669f235ad063723dc4299384d1eb1a83119f9964cb8a6eec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/edit.html.twig"));

        $__internal_275775ac49f11f83ba67bc539cc0b3d688fad597ffc7f0b36e4d2c434a8c8089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275775ac49f11f83ba67bc539cc0b3d688fad597ffc7f0b36e4d2c434a8c8089->enter($__internal_275775ac49f11f83ba67bc539cc0b3d688fad597ffc7f0b36e4d2c434a8c8089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_467377071b0b69669f235ad063723dc4299384d1eb1a83119f9964cb8a6eec90->leave($__internal_467377071b0b69669f235ad063723dc4299384d1eb1a83119f9964cb8a6eec90_prof);

        
        $__internal_275775ac49f11f83ba67bc539cc0b3d688fad597ffc7f0b36e4d2c434a8c8089->leave($__internal_275775ac49f11f83ba67bc539cc0b3d688fad597ffc7f0b36e4d2c434a8c8089_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc97e8e58138d7e435bea43c0cedff4c3e3d5db964928402b81122ddd188f790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc97e8e58138d7e435bea43c0cedff4c3e3d5db964928402b81122ddd188f790->enter($__internal_cc97e8e58138d7e435bea43c0cedff4c3e3d5db964928402b81122ddd188f790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b0f7102bacd0e622cedbf116be529496c36011e77a67290a668c859ca561567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0f7102bacd0e622cedbf116be529496c36011e77a67290a668c859ca561567->enter($__internal_9b0f7102bacd0e622cedbf116be529496c36011e77a67290a668c859ca561567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
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
        
        $__internal_9b0f7102bacd0e622cedbf116be529496c36011e77a67290a668c859ca561567->leave($__internal_9b0f7102bacd0e622cedbf116be529496c36011e77a67290a668c859ca561567_prof);

        
        $__internal_cc97e8e58138d7e435bea43c0cedff4c3e3d5db964928402b81122ddd188f790->leave($__internal_cc97e8e58138d7e435bea43c0cedff4c3e3d5db964928402b81122ddd188f790_prof);

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

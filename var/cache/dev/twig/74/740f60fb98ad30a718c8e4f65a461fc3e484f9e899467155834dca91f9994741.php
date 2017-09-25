<?php

/* :horario:edit.html.twig */
class __TwigTemplate_40647056202132a551d3fe2efb6525dcaefe15d955c133a051d870da5221a6a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":horario:edit.html.twig", 1);
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
        $__internal_8b6f5231e226fba2ee44d483398c0f80022045e1c6912a63079a5479495cc9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6f5231e226fba2ee44d483398c0f80022045e1c6912a63079a5479495cc9f0->enter($__internal_8b6f5231e226fba2ee44d483398c0f80022045e1c6912a63079a5479495cc9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:edit.html.twig"));

        $__internal_fb958db000ceee990db3f2cac45f17f6abc86d29a74ed53f867a308204b0a44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb958db000ceee990db3f2cac45f17f6abc86d29a74ed53f867a308204b0a44f->enter($__internal_fb958db000ceee990db3f2cac45f17f6abc86d29a74ed53f867a308204b0a44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b6f5231e226fba2ee44d483398c0f80022045e1c6912a63079a5479495cc9f0->leave($__internal_8b6f5231e226fba2ee44d483398c0f80022045e1c6912a63079a5479495cc9f0_prof);

        
        $__internal_fb958db000ceee990db3f2cac45f17f6abc86d29a74ed53f867a308204b0a44f->leave($__internal_fb958db000ceee990db3f2cac45f17f6abc86d29a74ed53f867a308204b0a44f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_238007066eea6b2f26a3b685dddb6e227a6939ce92bac47c3099570a68b3ec1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238007066eea6b2f26a3b685dddb6e227a6939ce92bac47c3099570a68b3ec1c->enter($__internal_238007066eea6b2f26a3b685dddb6e227a6939ce92bac47c3099570a68b3ec1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19f8423e11347770010685c21778900076243c4db39f034fd043c71a5f0aaa3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f8423e11347770010685c21778900076243c4db39f034fd043c71a5f0aaa3d->enter($__internal_19f8423e11347770010685c21778900076243c4db39f034fd043c71a5f0aaa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horario edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
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
        
        $__internal_19f8423e11347770010685c21778900076243c4db39f034fd043c71a5f0aaa3d->leave($__internal_19f8423e11347770010685c21778900076243c4db39f034fd043c71a5f0aaa3d_prof);

        
        $__internal_238007066eea6b2f26a3b685dddb6e227a6939ce92bac47c3099570a68b3ec1c->leave($__internal_238007066eea6b2f26a3b685dddb6e227a6939ce92bac47c3099570a68b3ec1c_prof);

    }

    public function getTemplateName()
    {
        return ":horario:edit.html.twig";
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
", ":horario:edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/horario/edit.html.twig");
    }
}

<?php

/* :horario:new.html.twig */
class __TwigTemplate_43126c157836bb402fe40a4caf214a664d145a8fefc573bbb9484e66981602d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":horario:new.html.twig", 1);
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
        $__internal_822cdd78aadda6ff9d5f368e5c539512f49e7ccf40233c576c507748c46702c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822cdd78aadda6ff9d5f368e5c539512f49e7ccf40233c576c507748c46702c5->enter($__internal_822cdd78aadda6ff9d5f368e5c539512f49e7ccf40233c576c507748c46702c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:new.html.twig"));

        $__internal_fd7ec204974bae45d7c10136ac9ce17c64faeec3346446389bae71310c6f7a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7ec204974bae45d7c10136ac9ce17c64faeec3346446389bae71310c6f7a49->enter($__internal_fd7ec204974bae45d7c10136ac9ce17c64faeec3346446389bae71310c6f7a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822cdd78aadda6ff9d5f368e5c539512f49e7ccf40233c576c507748c46702c5->leave($__internal_822cdd78aadda6ff9d5f368e5c539512f49e7ccf40233c576c507748c46702c5_prof);

        
        $__internal_fd7ec204974bae45d7c10136ac9ce17c64faeec3346446389bae71310c6f7a49->leave($__internal_fd7ec204974bae45d7c10136ac9ce17c64faeec3346446389bae71310c6f7a49_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c4b9f46e7873517356b59a819d931ac97c2bee101101a283850a556fe4e98bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4b9f46e7873517356b59a819d931ac97c2bee101101a283850a556fe4e98bc->enter($__internal_1c4b9f46e7873517356b59a819d931ac97c2bee101101a283850a556fe4e98bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ecdc0e9c4ce7ebcc50e3502b6ace3475b885bfbd58f2d851e706b8e9616f45fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdc0e9c4ce7ebcc50e3502b6ace3475b885bfbd58f2d851e706b8e9616f45fa->enter($__internal_ecdc0e9c4ce7ebcc50e3502b6ace3475b885bfbd58f2d851e706b8e9616f45fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ecdc0e9c4ce7ebcc50e3502b6ace3475b885bfbd58f2d851e706b8e9616f45fa->leave($__internal_ecdc0e9c4ce7ebcc50e3502b6ace3475b885bfbd58f2d851e706b8e9616f45fa_prof);

        
        $__internal_1c4b9f46e7873517356b59a819d931ac97c2bee101101a283850a556fe4e98bc->leave($__internal_1c4b9f46e7873517356b59a819d931ac97c2bee101101a283850a556fe4e98bc_prof);

    }

    public function getTemplateName()
    {
        return ":horario:new.html.twig";
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
", ":horario:new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/horario/new.html.twig");
    }
}

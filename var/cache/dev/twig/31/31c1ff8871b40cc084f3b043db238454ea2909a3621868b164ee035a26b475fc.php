<?php

/* :rol:new.html.twig */
class __TwigTemplate_d2de704c8da6dd0227bea109e8c13c1adf335f99b55220d7957c6a2440e25223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rol:new.html.twig", 1);
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
        $__internal_2f75a2e5daf874cff4e767ba8841fb222f6bc320f45d1832d416fc6119013364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f75a2e5daf874cff4e767ba8841fb222f6bc320f45d1832d416fc6119013364->enter($__internal_2f75a2e5daf874cff4e767ba8841fb222f6bc320f45d1832d416fc6119013364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:new.html.twig"));

        $__internal_a1a8b8387ee89a9deeef769d16a2d7ae0bc9d41e93a5bfe5bfc7199e3de18f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a8b8387ee89a9deeef769d16a2d7ae0bc9d41e93a5bfe5bfc7199e3de18f68->enter($__internal_a1a8b8387ee89a9deeef769d16a2d7ae0bc9d41e93a5bfe5bfc7199e3de18f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f75a2e5daf874cff4e767ba8841fb222f6bc320f45d1832d416fc6119013364->leave($__internal_2f75a2e5daf874cff4e767ba8841fb222f6bc320f45d1832d416fc6119013364_prof);

        
        $__internal_a1a8b8387ee89a9deeef769d16a2d7ae0bc9d41e93a5bfe5bfc7199e3de18f68->leave($__internal_a1a8b8387ee89a9deeef769d16a2d7ae0bc9d41e93a5bfe5bfc7199e3de18f68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9da3e0c6db07d4f1ecf79bae42fe3dc6e3dfd4f38ee3b620e4d55e96c15c795a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da3e0c6db07d4f1ecf79bae42fe3dc6e3dfd4f38ee3b620e4d55e96c15c795a->enter($__internal_9da3e0c6db07d4f1ecf79bae42fe3dc6e3dfd4f38ee3b620e4d55e96c15c795a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c604480fd64738d3fa9bb4901f8a242d216fa214b228f3030467b18495c96ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c604480fd64738d3fa9bb4901f8a242d216fa214b228f3030467b18495c96ce1->enter($__internal_c604480fd64738d3fa9bb4901f8a242d216fa214b228f3030467b18495c96ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rol creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c604480fd64738d3fa9bb4901f8a242d216fa214b228f3030467b18495c96ce1->leave($__internal_c604480fd64738d3fa9bb4901f8a242d216fa214b228f3030467b18495c96ce1_prof);

        
        $__internal_9da3e0c6db07d4f1ecf79bae42fe3dc6e3dfd4f38ee3b620e4d55e96c15c795a->leave($__internal_9da3e0c6db07d4f1ecf79bae42fe3dc6e3dfd4f38ee3b620e4d55e96c15c795a_prof);

    }

    public function getTemplateName()
    {
        return ":rol:new.html.twig";
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
    <h1>Rol creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('rol_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":rol:new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/rol/new.html.twig");
    }
}

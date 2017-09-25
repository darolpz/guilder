<?php

/* rol/new.html.twig */
class __TwigTemplate_3de5b4983a37b934a0753ce0243d8e9cce7ae108dc25a9a8c085ab429d0e2096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rol/new.html.twig", 1);
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
        $__internal_9b170fa0e84dd78cb5530e328d75ecfec227a43d321b73de4d2970cbb8e0cc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b170fa0e84dd78cb5530e328d75ecfec227a43d321b73de4d2970cbb8e0cc9c->enter($__internal_9b170fa0e84dd78cb5530e328d75ecfec227a43d321b73de4d2970cbb8e0cc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/new.html.twig"));

        $__internal_dc5669e364c4d0ded51443e1ee246077ce76cc81ed4167776eb61d0fa9c02573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5669e364c4d0ded51443e1ee246077ce76cc81ed4167776eb61d0fa9c02573->enter($__internal_dc5669e364c4d0ded51443e1ee246077ce76cc81ed4167776eb61d0fa9c02573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b170fa0e84dd78cb5530e328d75ecfec227a43d321b73de4d2970cbb8e0cc9c->leave($__internal_9b170fa0e84dd78cb5530e328d75ecfec227a43d321b73de4d2970cbb8e0cc9c_prof);

        
        $__internal_dc5669e364c4d0ded51443e1ee246077ce76cc81ed4167776eb61d0fa9c02573->leave($__internal_dc5669e364c4d0ded51443e1ee246077ce76cc81ed4167776eb61d0fa9c02573_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf96588fd95bd468e71f29bdf194a5aafa228e3419f90be23390e9aa706ae945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf96588fd95bd468e71f29bdf194a5aafa228e3419f90be23390e9aa706ae945->enter($__internal_bf96588fd95bd468e71f29bdf194a5aafa228e3419f90be23390e9aa706ae945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca93d99373b1148a862723eafada35b91b3d5c1924fd2e0da6e41c8dbb804543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca93d99373b1148a862723eafada35b91b3d5c1924fd2e0da6e41c8dbb804543->enter($__internal_ca93d99373b1148a862723eafada35b91b3d5c1924fd2e0da6e41c8dbb804543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca93d99373b1148a862723eafada35b91b3d5c1924fd2e0da6e41c8dbb804543->leave($__internal_ca93d99373b1148a862723eafada35b91b3d5c1924fd2e0da6e41c8dbb804543_prof);

        
        $__internal_bf96588fd95bd468e71f29bdf194a5aafa228e3419f90be23390e9aa706ae945->leave($__internal_bf96588fd95bd468e71f29bdf194a5aafa228e3419f90be23390e9aa706ae945_prof);

    }

    public function getTemplateName()
    {
        return "rol/new.html.twig";
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
", "rol/new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\rol\\new.html.twig");
    }
}

<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d22726945eb21a4a00f25c18f194702346f46e3ae53bf485221d98d131b0e95e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6213b914ab066b036fad0aae3dbacdfb4185bee16b53450bc0c2f026c936391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6213b914ab066b036fad0aae3dbacdfb4185bee16b53450bc0c2f026c936391->enter($__internal_f6213b914ab066b036fad0aae3dbacdfb4185bee16b53450bc0c2f026c936391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_804e42eb8b96b0cf048208089ee7b5c20f7b9d3c9347bf2f16ac8d0cecd81325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804e42eb8b96b0cf048208089ee7b5c20f7b9d3c9347bf2f16ac8d0cecd81325->enter($__internal_804e42eb8b96b0cf048208089ee7b5c20f7b9d3c9347bf2f16ac8d0cecd81325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6213b914ab066b036fad0aae3dbacdfb4185bee16b53450bc0c2f026c936391->leave($__internal_f6213b914ab066b036fad0aae3dbacdfb4185bee16b53450bc0c2f026c936391_prof);

        
        $__internal_804e42eb8b96b0cf048208089ee7b5c20f7b9d3c9347bf2f16ac8d0cecd81325->leave($__internal_804e42eb8b96b0cf048208089ee7b5c20f7b9d3c9347bf2f16ac8d0cecd81325_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a92465fad56dbf7693833974266909f19dfbc5d60593fe8bbda1b8bf858eb7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92465fad56dbf7693833974266909f19dfbc5d60593fe8bbda1b8bf858eb7cd->enter($__internal_a92465fad56dbf7693833974266909f19dfbc5d60593fe8bbda1b8bf858eb7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c90f09a5bc40d47f929b02b2f49d8cd71a329596c8cb0f880ea57c1108cdee7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90f09a5bc40d47f929b02b2f49d8cd71a329596c8cb0f880ea57c1108cdee7c->enter($__internal_c90f09a5bc40d47f929b02b2f49d8cd71a329596c8cb0f880ea57c1108cdee7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c90f09a5bc40d47f929b02b2f49d8cd71a329596c8cb0f880ea57c1108cdee7c->leave($__internal_c90f09a5bc40d47f929b02b2f49d8cd71a329596c8cb0f880ea57c1108cdee7c_prof);

        
        $__internal_a92465fad56dbf7693833974266909f19dfbc5d60593fe8bbda1b8bf858eb7cd->leave($__internal_a92465fad56dbf7693833974266909f19dfbc5d60593fe8bbda1b8bf858eb7cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49c48e49caed632a25e8340040bc65134a2b5d11037c32e4e652bdbde33c12b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c48e49caed632a25e8340040bc65134a2b5d11037c32e4e652bdbde33c12b7->enter($__internal_49c48e49caed632a25e8340040bc65134a2b5d11037c32e4e652bdbde33c12b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd204090803d518dc1f8eab88ba39ecddbbd7b96f0ef92b77fed8ebdcacf5492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd204090803d518dc1f8eab88ba39ecddbbd7b96f0ef92b77fed8ebdcacf5492->enter($__internal_dd204090803d518dc1f8eab88ba39ecddbbd7b96f0ef92b77fed8ebdcacf5492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd204090803d518dc1f8eab88ba39ecddbbd7b96f0ef92b77fed8ebdcacf5492->leave($__internal_dd204090803d518dc1f8eab88ba39ecddbbd7b96f0ef92b77fed8ebdcacf5492_prof);

        
        $__internal_49c48e49caed632a25e8340040bc65134a2b5d11037c32e4e652bdbde33c12b7->leave($__internal_49c48e49caed632a25e8340040bc65134a2b5d11037c32e4e652bdbde33c12b7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7964daf9c3d8a2e7073dee3c9ec1e6a66001af2cc7d8d894f33d7e4e24c9cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7964daf9c3d8a2e7073dee3c9ec1e6a66001af2cc7d8d894f33d7e4e24c9cbd->enter($__internal_e7964daf9c3d8a2e7073dee3c9ec1e6a66001af2cc7d8d894f33d7e4e24c9cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_69d7dec8e9bf4f7c1c22ffe36796adbe0a22a29c1af1fb4b53363a8b35164aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d7dec8e9bf4f7c1c22ffe36796adbe0a22a29c1af1fb4b53363a8b35164aa9->enter($__internal_69d7dec8e9bf4f7c1c22ffe36796adbe0a22a29c1af1fb4b53363a8b35164aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_69d7dec8e9bf4f7c1c22ffe36796adbe0a22a29c1af1fb4b53363a8b35164aa9->leave($__internal_69d7dec8e9bf4f7c1c22ffe36796adbe0a22a29c1af1fb4b53363a8b35164aa9_prof);

        
        $__internal_e7964daf9c3d8a2e7073dee3c9ec1e6a66001af2cc7d8d894f33d7e4e24c9cbd->leave($__internal_e7964daf9c3d8a2e7073dee3c9ec1e6a66001af2cc7d8d894f33d7e4e24c9cbd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

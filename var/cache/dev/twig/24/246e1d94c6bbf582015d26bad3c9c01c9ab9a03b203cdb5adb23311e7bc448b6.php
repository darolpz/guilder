<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f2061152e22b3b2391859ea642e0d745ff39c7846225ac74f8dcde9a43603dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f89dc8400289350edafff3b92ea4fa330d7882aa93629be769a92d6d73b4d868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89dc8400289350edafff3b92ea4fa330d7882aa93629be769a92d6d73b4d868->enter($__internal_f89dc8400289350edafff3b92ea4fa330d7882aa93629be769a92d6d73b4d868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9660ab2fcd5e899d2fae255c05c5744a44c7eef55fbef4c83d7ff10c60e72640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9660ab2fcd5e899d2fae255c05c5744a44c7eef55fbef4c83d7ff10c60e72640->enter($__internal_9660ab2fcd5e899d2fae255c05c5744a44c7eef55fbef4c83d7ff10c60e72640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89dc8400289350edafff3b92ea4fa330d7882aa93629be769a92d6d73b4d868->leave($__internal_f89dc8400289350edafff3b92ea4fa330d7882aa93629be769a92d6d73b4d868_prof);

        
        $__internal_9660ab2fcd5e899d2fae255c05c5744a44c7eef55fbef4c83d7ff10c60e72640->leave($__internal_9660ab2fcd5e899d2fae255c05c5744a44c7eef55fbef4c83d7ff10c60e72640_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_115e54114c971e2561490ab33c7dfbdc2900a8eecbdf9007541fe5afa360d11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115e54114c971e2561490ab33c7dfbdc2900a8eecbdf9007541fe5afa360d11f->enter($__internal_115e54114c971e2561490ab33c7dfbdc2900a8eecbdf9007541fe5afa360d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86a4ad17c93abddbee99b053034dca2f59c601b60b1b0670bab8cbeaccba9c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a4ad17c93abddbee99b053034dca2f59c601b60b1b0670bab8cbeaccba9c5d->enter($__internal_86a4ad17c93abddbee99b053034dca2f59c601b60b1b0670bab8cbeaccba9c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_86a4ad17c93abddbee99b053034dca2f59c601b60b1b0670bab8cbeaccba9c5d->leave($__internal_86a4ad17c93abddbee99b053034dca2f59c601b60b1b0670bab8cbeaccba9c5d_prof);

        
        $__internal_115e54114c971e2561490ab33c7dfbdc2900a8eecbdf9007541fe5afa360d11f->leave($__internal_115e54114c971e2561490ab33c7dfbdc2900a8eecbdf9007541fe5afa360d11f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2ae3d29ed01fcc4ef13142431be7e60b2397008499d5890efe0c318634d2dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ae3d29ed01fcc4ef13142431be7e60b2397008499d5890efe0c318634d2dce->enter($__internal_e2ae3d29ed01fcc4ef13142431be7e60b2397008499d5890efe0c318634d2dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4eafc0ab2fe0b4593bcc49088c3f72fe9707f8edd68973931b3afa836fdb5abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eafc0ab2fe0b4593bcc49088c3f72fe9707f8edd68973931b3afa836fdb5abb->enter($__internal_4eafc0ab2fe0b4593bcc49088c3f72fe9707f8edd68973931b3afa836fdb5abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4eafc0ab2fe0b4593bcc49088c3f72fe9707f8edd68973931b3afa836fdb5abb->leave($__internal_4eafc0ab2fe0b4593bcc49088c3f72fe9707f8edd68973931b3afa836fdb5abb_prof);

        
        $__internal_e2ae3d29ed01fcc4ef13142431be7e60b2397008499d5890efe0c318634d2dce->leave($__internal_e2ae3d29ed01fcc4ef13142431be7e60b2397008499d5890efe0c318634d2dce_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c16cf7de0f5e3460e671b7b7f7935a805a4066cbbec83c036a1f85cb346dfca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c16cf7de0f5e3460e671b7b7f7935a805a4066cbbec83c036a1f85cb346dfca->enter($__internal_4c16cf7de0f5e3460e671b7b7f7935a805a4066cbbec83c036a1f85cb346dfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8441caa048b5e3ffc9b95f5bc5b7287e36e398c4a3b0101594d8c8c7d527d008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8441caa048b5e3ffc9b95f5bc5b7287e36e398c4a3b0101594d8c8c7d527d008->enter($__internal_8441caa048b5e3ffc9b95f5bc5b7287e36e398c4a3b0101594d8c8c7d527d008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8441caa048b5e3ffc9b95f5bc5b7287e36e398c4a3b0101594d8c8c7d527d008->leave($__internal_8441caa048b5e3ffc9b95f5bc5b7287e36e398c4a3b0101594d8c8c7d527d008_prof);

        
        $__internal_4c16cf7de0f5e3460e671b7b7f7935a805a4066cbbec83c036a1f85cb346dfca->leave($__internal_4c16cf7de0f5e3460e671b7b7f7935a805a4066cbbec83c036a1f85cb346dfca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

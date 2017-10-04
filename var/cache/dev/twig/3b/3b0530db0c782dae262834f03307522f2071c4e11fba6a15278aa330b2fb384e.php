<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_30adbeaa9a139c063d52bdac3fd5bfaf7080556da72a1031e5e824472ddd1b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30adbeaa9a139c063d52bdac3fd5bfaf7080556da72a1031e5e824472ddd1b66->enter($__internal_30adbeaa9a139c063d52bdac3fd5bfaf7080556da72a1031e5e824472ddd1b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cbd1c98a99b6e2384879cf3ad95a348b324c7e85832793bcf31900e784a0eef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd1c98a99b6e2384879cf3ad95a348b324c7e85832793bcf31900e784a0eef0->enter($__internal_cbd1c98a99b6e2384879cf3ad95a348b324c7e85832793bcf31900e784a0eef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30adbeaa9a139c063d52bdac3fd5bfaf7080556da72a1031e5e824472ddd1b66->leave($__internal_30adbeaa9a139c063d52bdac3fd5bfaf7080556da72a1031e5e824472ddd1b66_prof);

        
        $__internal_cbd1c98a99b6e2384879cf3ad95a348b324c7e85832793bcf31900e784a0eef0->leave($__internal_cbd1c98a99b6e2384879cf3ad95a348b324c7e85832793bcf31900e784a0eef0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4499a74bc088ca7e71f0177673147f31b58d5bc0ab4538370c8b5f694708ab18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4499a74bc088ca7e71f0177673147f31b58d5bc0ab4538370c8b5f694708ab18->enter($__internal_4499a74bc088ca7e71f0177673147f31b58d5bc0ab4538370c8b5f694708ab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c9223b5c08a31ce60bed7064aec02ffd1fb3e96325e7a28bfc51e112b42506f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9223b5c08a31ce60bed7064aec02ffd1fb3e96325e7a28bfc51e112b42506f->enter($__internal_8c9223b5c08a31ce60bed7064aec02ffd1fb3e96325e7a28bfc51e112b42506f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8c9223b5c08a31ce60bed7064aec02ffd1fb3e96325e7a28bfc51e112b42506f->leave($__internal_8c9223b5c08a31ce60bed7064aec02ffd1fb3e96325e7a28bfc51e112b42506f_prof);

        
        $__internal_4499a74bc088ca7e71f0177673147f31b58d5bc0ab4538370c8b5f694708ab18->leave($__internal_4499a74bc088ca7e71f0177673147f31b58d5bc0ab4538370c8b5f694708ab18_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0049625c7c1f8411526569ba984c6b470da5613f513b0015edeb27230d24de60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0049625c7c1f8411526569ba984c6b470da5613f513b0015edeb27230d24de60->enter($__internal_0049625c7c1f8411526569ba984c6b470da5613f513b0015edeb27230d24de60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e895e1c82ab4e22f4d1387b42eb3af5043e8c95e293d714eeffbe97342062d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e895e1c82ab4e22f4d1387b42eb3af5043e8c95e293d714eeffbe97342062d89->enter($__internal_e895e1c82ab4e22f4d1387b42eb3af5043e8c95e293d714eeffbe97342062d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e895e1c82ab4e22f4d1387b42eb3af5043e8c95e293d714eeffbe97342062d89->leave($__internal_e895e1c82ab4e22f4d1387b42eb3af5043e8c95e293d714eeffbe97342062d89_prof);

        
        $__internal_0049625c7c1f8411526569ba984c6b470da5613f513b0015edeb27230d24de60->leave($__internal_0049625c7c1f8411526569ba984c6b470da5613f513b0015edeb27230d24de60_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f2f164d4a7765193aa2034aa984d594b95d494b441cdfc43031061594fdd420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2f164d4a7765193aa2034aa984d594b95d494b441cdfc43031061594fdd420->enter($__internal_2f2f164d4a7765193aa2034aa984d594b95d494b441cdfc43031061594fdd420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_811cba1c139dabfba4de52107dd9938971ddbf10d56988a7a5dbb8e67012ab78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811cba1c139dabfba4de52107dd9938971ddbf10d56988a7a5dbb8e67012ab78->enter($__internal_811cba1c139dabfba4de52107dd9938971ddbf10d56988a7a5dbb8e67012ab78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_811cba1c139dabfba4de52107dd9938971ddbf10d56988a7a5dbb8e67012ab78->leave($__internal_811cba1c139dabfba4de52107dd9938971ddbf10d56988a7a5dbb8e67012ab78_prof);

        
        $__internal_2f2f164d4a7765193aa2034aa984d594b95d494b441cdfc43031061594fdd420->leave($__internal_2f2f164d4a7765193aa2034aa984d594b95d494b441cdfc43031061594fdd420_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\repo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

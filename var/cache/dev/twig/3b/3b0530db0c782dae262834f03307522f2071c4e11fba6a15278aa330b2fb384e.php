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
        $__internal_c2ea9e019ba3e6b8b4b59fe623d49085224cc8c9e730556bf564e54043ac34d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ea9e019ba3e6b8b4b59fe623d49085224cc8c9e730556bf564e54043ac34d8->enter($__internal_c2ea9e019ba3e6b8b4b59fe623d49085224cc8c9e730556bf564e54043ac34d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9f6c22bc29e92beedfdc2fd2cefdba89d8d05e47a9042f6a540907185fbae7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6c22bc29e92beedfdc2fd2cefdba89d8d05e47a9042f6a540907185fbae7bf->enter($__internal_9f6c22bc29e92beedfdc2fd2cefdba89d8d05e47a9042f6a540907185fbae7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ea9e019ba3e6b8b4b59fe623d49085224cc8c9e730556bf564e54043ac34d8->leave($__internal_c2ea9e019ba3e6b8b4b59fe623d49085224cc8c9e730556bf564e54043ac34d8_prof);

        
        $__internal_9f6c22bc29e92beedfdc2fd2cefdba89d8d05e47a9042f6a540907185fbae7bf->leave($__internal_9f6c22bc29e92beedfdc2fd2cefdba89d8d05e47a9042f6a540907185fbae7bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33a24a7ab5827401889af171967df6880e9e5c2ad4403dc972ebbcb0aebfff75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a24a7ab5827401889af171967df6880e9e5c2ad4403dc972ebbcb0aebfff75->enter($__internal_33a24a7ab5827401889af171967df6880e9e5c2ad4403dc972ebbcb0aebfff75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_977d3aef17014c907d3fe9a87624012aa1341576b6a71fe1b2826abd74fc6171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977d3aef17014c907d3fe9a87624012aa1341576b6a71fe1b2826abd74fc6171->enter($__internal_977d3aef17014c907d3fe9a87624012aa1341576b6a71fe1b2826abd74fc6171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_977d3aef17014c907d3fe9a87624012aa1341576b6a71fe1b2826abd74fc6171->leave($__internal_977d3aef17014c907d3fe9a87624012aa1341576b6a71fe1b2826abd74fc6171_prof);

        
        $__internal_33a24a7ab5827401889af171967df6880e9e5c2ad4403dc972ebbcb0aebfff75->leave($__internal_33a24a7ab5827401889af171967df6880e9e5c2ad4403dc972ebbcb0aebfff75_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e527d636ad9b35b4251fff3449b66246f67aec9a52ac52061f5f2ebf9a4be098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e527d636ad9b35b4251fff3449b66246f67aec9a52ac52061f5f2ebf9a4be098->enter($__internal_e527d636ad9b35b4251fff3449b66246f67aec9a52ac52061f5f2ebf9a4be098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60852bb2c4d79a3d778b3995d4829d047d6a3fae1039b5a6c14dbddefdf5e328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60852bb2c4d79a3d778b3995d4829d047d6a3fae1039b5a6c14dbddefdf5e328->enter($__internal_60852bb2c4d79a3d778b3995d4829d047d6a3fae1039b5a6c14dbddefdf5e328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_60852bb2c4d79a3d778b3995d4829d047d6a3fae1039b5a6c14dbddefdf5e328->leave($__internal_60852bb2c4d79a3d778b3995d4829d047d6a3fae1039b5a6c14dbddefdf5e328_prof);

        
        $__internal_e527d636ad9b35b4251fff3449b66246f67aec9a52ac52061f5f2ebf9a4be098->leave($__internal_e527d636ad9b35b4251fff3449b66246f67aec9a52ac52061f5f2ebf9a4be098_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8c5d0c261e0f0865111bc0696a91d6b78dccdb00277a5c7461a4eedee2837fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c5d0c261e0f0865111bc0696a91d6b78dccdb00277a5c7461a4eedee2837fa->enter($__internal_e8c5d0c261e0f0865111bc0696a91d6b78dccdb00277a5c7461a4eedee2837fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39f58b33486165da5d80728901cc1e1956495d40c97e2bc05c50cafc7faeb183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f58b33486165da5d80728901cc1e1956495d40c97e2bc05c50cafc7faeb183->enter($__internal_39f58b33486165da5d80728901cc1e1956495d40c97e2bc05c50cafc7faeb183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_39f58b33486165da5d80728901cc1e1956495d40c97e2bc05c50cafc7faeb183->leave($__internal_39f58b33486165da5d80728901cc1e1956495d40c97e2bc05c50cafc7faeb183_prof);

        
        $__internal_e8c5d0c261e0f0865111bc0696a91d6b78dccdb00277a5c7461a4eedee2837fa->leave($__internal_e8c5d0c261e0f0865111bc0696a91d6b78dccdb00277a5c7461a4eedee2837fa_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

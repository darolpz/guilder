<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_5653ce895237366e7fe4f6a2a0f38e08bd9f192c079e028a9162b518e134a340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5653ce895237366e7fe4f6a2a0f38e08bd9f192c079e028a9162b518e134a340->enter($__internal_5653ce895237366e7fe4f6a2a0f38e08bd9f192c079e028a9162b518e134a340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_98605cd2ceff8d9a2da8277aaa48af78d4aabd92b5d3b0ef13e6b77e0c88bf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98605cd2ceff8d9a2da8277aaa48af78d4aabd92b5d3b0ef13e6b77e0c88bf9a->enter($__internal_98605cd2ceff8d9a2da8277aaa48af78d4aabd92b5d3b0ef13e6b77e0c88bf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5653ce895237366e7fe4f6a2a0f38e08bd9f192c079e028a9162b518e134a340->leave($__internal_5653ce895237366e7fe4f6a2a0f38e08bd9f192c079e028a9162b518e134a340_prof);

        
        $__internal_98605cd2ceff8d9a2da8277aaa48af78d4aabd92b5d3b0ef13e6b77e0c88bf9a->leave($__internal_98605cd2ceff8d9a2da8277aaa48af78d4aabd92b5d3b0ef13e6b77e0c88bf9a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4871fe8ca5d838ca5ce583e77fe9263b943d12bdb70461b19b64658c09f1c9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4871fe8ca5d838ca5ce583e77fe9263b943d12bdb70461b19b64658c09f1c9d1->enter($__internal_4871fe8ca5d838ca5ce583e77fe9263b943d12bdb70461b19b64658c09f1c9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b458f52b806b04b3b6527f994ef7cfb52f090e791d211e9bba946eb10ecad9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b458f52b806b04b3b6527f994ef7cfb52f090e791d211e9bba946eb10ecad9cc->enter($__internal_b458f52b806b04b3b6527f994ef7cfb52f090e791d211e9bba946eb10ecad9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b458f52b806b04b3b6527f994ef7cfb52f090e791d211e9bba946eb10ecad9cc->leave($__internal_b458f52b806b04b3b6527f994ef7cfb52f090e791d211e9bba946eb10ecad9cc_prof);

        
        $__internal_4871fe8ca5d838ca5ce583e77fe9263b943d12bdb70461b19b64658c09f1c9d1->leave($__internal_4871fe8ca5d838ca5ce583e77fe9263b943d12bdb70461b19b64658c09f1c9d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f7f6508c006b52119077cf16dee03d680b136d17fe131248afc024e0a7abb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7f6508c006b52119077cf16dee03d680b136d17fe131248afc024e0a7abb6a->enter($__internal_5f7f6508c006b52119077cf16dee03d680b136d17fe131248afc024e0a7abb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c84f29d1ea954b549bce760abe84255d003987d1b247801d40482f9244a0d2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84f29d1ea954b549bce760abe84255d003987d1b247801d40482f9244a0d2d2->enter($__internal_c84f29d1ea954b549bce760abe84255d003987d1b247801d40482f9244a0d2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c84f29d1ea954b549bce760abe84255d003987d1b247801d40482f9244a0d2d2->leave($__internal_c84f29d1ea954b549bce760abe84255d003987d1b247801d40482f9244a0d2d2_prof);

        
        $__internal_5f7f6508c006b52119077cf16dee03d680b136d17fe131248afc024e0a7abb6a->leave($__internal_5f7f6508c006b52119077cf16dee03d680b136d17fe131248afc024e0a7abb6a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1c286176cac5f3a09c5dff8475c184e79aa53f1a83f7a8f662611c6c3e372a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c286176cac5f3a09c5dff8475c184e79aa53f1a83f7a8f662611c6c3e372a2->enter($__internal_d1c286176cac5f3a09c5dff8475c184e79aa53f1a83f7a8f662611c6c3e372a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c652eed10eb07728e126abbe9216b2180720542adc05aae4eae0c60ee98f0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c652eed10eb07728e126abbe9216b2180720542adc05aae4eae0c60ee98f0c7->enter($__internal_2c652eed10eb07728e126abbe9216b2180720542adc05aae4eae0c60ee98f0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c652eed10eb07728e126abbe9216b2180720542adc05aae4eae0c60ee98f0c7->leave($__internal_2c652eed10eb07728e126abbe9216b2180720542adc05aae4eae0c60ee98f0c7_prof);

        
        $__internal_d1c286176cac5f3a09c5dff8475c184e79aa53f1a83f7a8f662611c6c3e372a2->leave($__internal_d1c286176cac5f3a09c5dff8475c184e79aa53f1a83f7a8f662611c6c3e372a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\repo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

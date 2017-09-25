<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5221f9e5cb840fe915901b074682565f3f8f663bc6983ee890459596643e280 extends Twig_Template
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
        $__internal_fe1c1741cd3069743855ccf250ba85ee26900f27928b4a1385a1c14336ecc9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1c1741cd3069743855ccf250ba85ee26900f27928b4a1385a1c14336ecc9c9->enter($__internal_fe1c1741cd3069743855ccf250ba85ee26900f27928b4a1385a1c14336ecc9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5c13a09aa5578ad7edcd1c08b39f29c6e72dc5cec1f1048387a20ff3fb6f57c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c13a09aa5578ad7edcd1c08b39f29c6e72dc5cec1f1048387a20ff3fb6f57c3->enter($__internal_5c13a09aa5578ad7edcd1c08b39f29c6e72dc5cec1f1048387a20ff3fb6f57c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe1c1741cd3069743855ccf250ba85ee26900f27928b4a1385a1c14336ecc9c9->leave($__internal_fe1c1741cd3069743855ccf250ba85ee26900f27928b4a1385a1c14336ecc9c9_prof);

        
        $__internal_5c13a09aa5578ad7edcd1c08b39f29c6e72dc5cec1f1048387a20ff3fb6f57c3->leave($__internal_5c13a09aa5578ad7edcd1c08b39f29c6e72dc5cec1f1048387a20ff3fb6f57c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_081723afa52020b0475001ecc16cc791718390b9d27253d5a8667f48dd19734f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081723afa52020b0475001ecc16cc791718390b9d27253d5a8667f48dd19734f->enter($__internal_081723afa52020b0475001ecc16cc791718390b9d27253d5a8667f48dd19734f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f19881d672a1e58fb29f4911f62217df0a96aa89789506342e622f98d65fa54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f19881d672a1e58fb29f4911f62217df0a96aa89789506342e622f98d65fa54->enter($__internal_8f19881d672a1e58fb29f4911f62217df0a96aa89789506342e622f98d65fa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f19881d672a1e58fb29f4911f62217df0a96aa89789506342e622f98d65fa54->leave($__internal_8f19881d672a1e58fb29f4911f62217df0a96aa89789506342e622f98d65fa54_prof);

        
        $__internal_081723afa52020b0475001ecc16cc791718390b9d27253d5a8667f48dd19734f->leave($__internal_081723afa52020b0475001ecc16cc791718390b9d27253d5a8667f48dd19734f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6185cd7120e27d3fff33020cadd82140c01d7c6379dd497c80a77eabdc78dd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6185cd7120e27d3fff33020cadd82140c01d7c6379dd497c80a77eabdc78dd20->enter($__internal_6185cd7120e27d3fff33020cadd82140c01d7c6379dd497c80a77eabdc78dd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b4ef1e05420bdd8665443fcd0aebef9de668e0af59d652f66a64c1f17f55b9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ef1e05420bdd8665443fcd0aebef9de668e0af59d652f66a64c1f17f55b9b3->enter($__internal_b4ef1e05420bdd8665443fcd0aebef9de668e0af59d652f66a64c1f17f55b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4ef1e05420bdd8665443fcd0aebef9de668e0af59d652f66a64c1f17f55b9b3->leave($__internal_b4ef1e05420bdd8665443fcd0aebef9de668e0af59d652f66a64c1f17f55b9b3_prof);

        
        $__internal_6185cd7120e27d3fff33020cadd82140c01d7c6379dd497c80a77eabdc78dd20->leave($__internal_6185cd7120e27d3fff33020cadd82140c01d7c6379dd497c80a77eabdc78dd20_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce61aa14945723e4761e6e8dadf1e8acc17ce474d4df25c25008e9f432799301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce61aa14945723e4761e6e8dadf1e8acc17ce474d4df25c25008e9f432799301->enter($__internal_ce61aa14945723e4761e6e8dadf1e8acc17ce474d4df25c25008e9f432799301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea64ef35fb6ab13c909c61f946fefb2aaa8c08276a3454cdbf7e660366d80340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea64ef35fb6ab13c909c61f946fefb2aaa8c08276a3454cdbf7e660366d80340->enter($__internal_ea64ef35fb6ab13c909c61f946fefb2aaa8c08276a3454cdbf7e660366d80340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ea64ef35fb6ab13c909c61f946fefb2aaa8c08276a3454cdbf7e660366d80340->leave($__internal_ea64ef35fb6ab13c909c61f946fefb2aaa8c08276a3454cdbf7e660366d80340_prof);

        
        $__internal_ce61aa14945723e4761e6e8dadf1e8acc17ce474d4df25c25008e9f432799301->leave($__internal_ce61aa14945723e4761e6e8dadf1e8acc17ce474d4df25c25008e9f432799301_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

<?php

/* comision/new.html.twig */
class __TwigTemplate_a2814a3b87fa8e0ee730ac45416ec165a0e20f9c0532d94b021447099699971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comision/new.html.twig", 1);
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
        $__internal_77252f1b1ce48d8cd78f6fbeb999dd86ffc48cc84b11b41345e15bbc794cb7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77252f1b1ce48d8cd78f6fbeb999dd86ffc48cc84b11b41345e15bbc794cb7c4->enter($__internal_77252f1b1ce48d8cd78f6fbeb999dd86ffc48cc84b11b41345e15bbc794cb7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/new.html.twig"));

        $__internal_9ceee8958a674d8ca6a532ac7d7f3c4aefc0065abb3ef7c34d63c5b7758fa08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceee8958a674d8ca6a532ac7d7f3c4aefc0065abb3ef7c34d63c5b7758fa08a->enter($__internal_9ceee8958a674d8ca6a532ac7d7f3c4aefc0065abb3ef7c34d63c5b7758fa08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77252f1b1ce48d8cd78f6fbeb999dd86ffc48cc84b11b41345e15bbc794cb7c4->leave($__internal_77252f1b1ce48d8cd78f6fbeb999dd86ffc48cc84b11b41345e15bbc794cb7c4_prof);

        
        $__internal_9ceee8958a674d8ca6a532ac7d7f3c4aefc0065abb3ef7c34d63c5b7758fa08a->leave($__internal_9ceee8958a674d8ca6a532ac7d7f3c4aefc0065abb3ef7c34d63c5b7758fa08a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8755f7b11dbd63c2a74f8f800263a6e59b7a3c6c3f216e1c655ed051335289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8755f7b11dbd63c2a74f8f800263a6e59b7a3c6c3f216e1c655ed051335289->enter($__internal_4b8755f7b11dbd63c2a74f8f800263a6e59b7a3c6c3f216e1c655ed051335289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_577c10f8ecfc5256cda48e211cad88818f843e1534901fe30e27863c384dd60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577c10f8ecfc5256cda48e211cad88818f843e1534901fe30e27863c384dd60e->enter($__internal_577c10f8ecfc5256cda48e211cad88818f843e1534901fe30e27863c384dd60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_577c10f8ecfc5256cda48e211cad88818f843e1534901fe30e27863c384dd60e->leave($__internal_577c10f8ecfc5256cda48e211cad88818f843e1534901fe30e27863c384dd60e_prof);

        
        $__internal_4b8755f7b11dbd63c2a74f8f800263a6e59b7a3c6c3f216e1c655ed051335289->leave($__internal_4b8755f7b11dbd63c2a74f8f800263a6e59b7a3c6c3f216e1c655ed051335289_prof);

    }

    public function getTemplateName()
    {
        return "comision/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comision creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('comision_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "comision/new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\comision\\new.html.twig");
    }
}

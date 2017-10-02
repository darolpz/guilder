<?php

/* :user:new.html.twig */
class __TwigTemplate_da8aef1f5a123cbb6b97f07a9be28753f6da65dbb38eb37cdbb411271e6b5476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_973005ba92ea1bcaa98e2ce99110aa6192bc954544a89c90dd736fa5992be2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973005ba92ea1bcaa98e2ce99110aa6192bc954544a89c90dd736fa5992be2b2->enter($__internal_973005ba92ea1bcaa98e2ce99110aa6192bc954544a89c90dd736fa5992be2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_b59f2cbed6f6832ddd801045e3a4bd79dd128a2244f144ecd78fbdfa096075eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59f2cbed6f6832ddd801045e3a4bd79dd128a2244f144ecd78fbdfa096075eb->enter($__internal_b59f2cbed6f6832ddd801045e3a4bd79dd128a2244f144ecd78fbdfa096075eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_973005ba92ea1bcaa98e2ce99110aa6192bc954544a89c90dd736fa5992be2b2->leave($__internal_973005ba92ea1bcaa98e2ce99110aa6192bc954544a89c90dd736fa5992be2b2_prof);

        
        $__internal_b59f2cbed6f6832ddd801045e3a4bd79dd128a2244f144ecd78fbdfa096075eb->leave($__internal_b59f2cbed6f6832ddd801045e3a4bd79dd128a2244f144ecd78fbdfa096075eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7ba5dc2b5ac31b502b5871e43f177d9320d4cf20c2d44291e3577b6c6850b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7ba5dc2b5ac31b502b5871e43f177d9320d4cf20c2d44291e3577b6c6850b5->enter($__internal_ec7ba5dc2b5ac31b502b5871e43f177d9320d4cf20c2d44291e3577b6c6850b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a30c9d0cbe06ab59fba159b29d2dcd06632eb93d34ae227577d89264dc0d3528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30c9d0cbe06ab59fba159b29d2dcd06632eb93d34ae227577d89264dc0d3528->enter($__internal_a30c9d0cbe06ab59fba159b29d2dcd06632eb93d34ae227577d89264dc0d3528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a30c9d0cbe06ab59fba159b29d2dcd06632eb93d34ae227577d89264dc0d3528->leave($__internal_a30c9d0cbe06ab59fba159b29d2dcd06632eb93d34ae227577d89264dc0d3528_prof);

        
        $__internal_ec7ba5dc2b5ac31b502b5871e43f177d9320d4cf20c2d44291e3577b6c6850b5->leave($__internal_ec7ba5dc2b5ac31b502b5871e43f177d9320d4cf20c2d44291e3577b6c6850b5_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/user/new.html.twig");
    }
}

<?php

/* horario/new.html.twig */
class __TwigTemplate_f04146519a2a2f9f50eeec389a00cd113c3afd92cc5aa2bc58396f8c28bd9e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horario/new.html.twig", 1);
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
        $__internal_868b1e3ba4bde767961660cdcd68d81eeb1d1e577a57619da60ba1c69e9e76f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868b1e3ba4bde767961660cdcd68d81eeb1d1e577a57619da60ba1c69e9e76f6->enter($__internal_868b1e3ba4bde767961660cdcd68d81eeb1d1e577a57619da60ba1c69e9e76f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/new.html.twig"));

        $__internal_af47991bdf788a48fb074e92d7ef242ff5644f1bb418871db7e87b56f6e0bf5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af47991bdf788a48fb074e92d7ef242ff5644f1bb418871db7e87b56f6e0bf5b->enter($__internal_af47991bdf788a48fb074e92d7ef242ff5644f1bb418871db7e87b56f6e0bf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_868b1e3ba4bde767961660cdcd68d81eeb1d1e577a57619da60ba1c69e9e76f6->leave($__internal_868b1e3ba4bde767961660cdcd68d81eeb1d1e577a57619da60ba1c69e9e76f6_prof);

        
        $__internal_af47991bdf788a48fb074e92d7ef242ff5644f1bb418871db7e87b56f6e0bf5b->leave($__internal_af47991bdf788a48fb074e92d7ef242ff5644f1bb418871db7e87b56f6e0bf5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37cfbf1fc4396184795af34fe7de475b6f6246ab1dd092c1556fbe031e92aea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37cfbf1fc4396184795af34fe7de475b6f6246ab1dd092c1556fbe031e92aea6->enter($__internal_37cfbf1fc4396184795af34fe7de475b6f6246ab1dd092c1556fbe031e92aea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29e2a736b569347cc9b45d3d643fd61dc2b0642e31bed2b01fe85ba27e87eb2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e2a736b569347cc9b45d3d643fd61dc2b0642e31bed2b01fe85ba27e87eb2d->enter($__internal_29e2a736b569347cc9b45d3d643fd61dc2b0642e31bed2b01fe85ba27e87eb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horario creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_29e2a736b569347cc9b45d3d643fd61dc2b0642e31bed2b01fe85ba27e87eb2d->leave($__internal_29e2a736b569347cc9b45d3d643fd61dc2b0642e31bed2b01fe85ba27e87eb2d_prof);

        
        $__internal_37cfbf1fc4396184795af34fe7de475b6f6246ab1dd092c1556fbe031e92aea6->leave($__internal_37cfbf1fc4396184795af34fe7de475b6f6246ab1dd092c1556fbe031e92aea6_prof);

    }

    public function getTemplateName()
    {
        return "horario/new.html.twig";
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
    <h1>Horario creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('horario_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "horario/new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\horario\\new.html.twig");
    }
}

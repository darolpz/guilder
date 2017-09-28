<?php

/* :horario:new.html.twig */
class __TwigTemplate_f269dabc3b156dcf45128c1e40c952b4a5394a0a7b987cc31fa8d8f338b77efb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":horario:new.html.twig", 1);
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
        $__internal_cd75271a2109781cb87d80dd3d3a3e6b855d93a73962fe3493e0ddbe68633441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd75271a2109781cb87d80dd3d3a3e6b855d93a73962fe3493e0ddbe68633441->enter($__internal_cd75271a2109781cb87d80dd3d3a3e6b855d93a73962fe3493e0ddbe68633441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:new.html.twig"));

        $__internal_168ab7f709420b3f8351749072c41821467068225763853847cfa9032a1a14f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168ab7f709420b3f8351749072c41821467068225763853847cfa9032a1a14f9->enter($__internal_168ab7f709420b3f8351749072c41821467068225763853847cfa9032a1a14f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd75271a2109781cb87d80dd3d3a3e6b855d93a73962fe3493e0ddbe68633441->leave($__internal_cd75271a2109781cb87d80dd3d3a3e6b855d93a73962fe3493e0ddbe68633441_prof);

        
        $__internal_168ab7f709420b3f8351749072c41821467068225763853847cfa9032a1a14f9->leave($__internal_168ab7f709420b3f8351749072c41821467068225763853847cfa9032a1a14f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9de3949a108a6144ececa7032cd6ac85fc9cdd6b31b16f43da9b7669eec10bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9de3949a108a6144ececa7032cd6ac85fc9cdd6b31b16f43da9b7669eec10bb->enter($__internal_a9de3949a108a6144ececa7032cd6ac85fc9cdd6b31b16f43da9b7669eec10bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_910eddf10e0d15be5824dc3da5d6ff1d29907c503019033b449baf9e2326c63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910eddf10e0d15be5824dc3da5d6ff1d29907c503019033b449baf9e2326c63c->enter($__internal_910eddf10e0d15be5824dc3da5d6ff1d29907c503019033b449baf9e2326c63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_910eddf10e0d15be5824dc3da5d6ff1d29907c503019033b449baf9e2326c63c->leave($__internal_910eddf10e0d15be5824dc3da5d6ff1d29907c503019033b449baf9e2326c63c_prof);

        
        $__internal_a9de3949a108a6144ececa7032cd6ac85fc9cdd6b31b16f43da9b7669eec10bb->leave($__internal_a9de3949a108a6144ececa7032cd6ac85fc9cdd6b31b16f43da9b7669eec10bb_prof);

    }

    public function getTemplateName()
    {
        return ":horario:new.html.twig";
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
", ":horario:new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/horario/new.html.twig");
    }
}

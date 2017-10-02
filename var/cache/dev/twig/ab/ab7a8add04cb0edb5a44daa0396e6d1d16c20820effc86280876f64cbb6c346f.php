<?php

/* :comision:edit.html.twig */
class __TwigTemplate_90f83a0366afce55841c8eb5ca14d94b10cad6a16709f358c0c30971da7826b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comision:edit.html.twig", 1);
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
        $__internal_5acc8b71c155a8fb91f881f3df97d50a4efcc1e6f3234675be360720b763dd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5acc8b71c155a8fb91f881f3df97d50a4efcc1e6f3234675be360720b763dd97->enter($__internal_5acc8b71c155a8fb91f881f3df97d50a4efcc1e6f3234675be360720b763dd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:edit.html.twig"));

        $__internal_f932f0368aca277c5bda2b81b9d6e8970e1a17aca4c0dd4b740c6c7e42acbf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f932f0368aca277c5bda2b81b9d6e8970e1a17aca4c0dd4b740c6c7e42acbf2f->enter($__internal_f932f0368aca277c5bda2b81b9d6e8970e1a17aca4c0dd4b740c6c7e42acbf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5acc8b71c155a8fb91f881f3df97d50a4efcc1e6f3234675be360720b763dd97->leave($__internal_5acc8b71c155a8fb91f881f3df97d50a4efcc1e6f3234675be360720b763dd97_prof);

        
        $__internal_f932f0368aca277c5bda2b81b9d6e8970e1a17aca4c0dd4b740c6c7e42acbf2f->leave($__internal_f932f0368aca277c5bda2b81b9d6e8970e1a17aca4c0dd4b740c6c7e42acbf2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8bb1bed5054d333e60932d5b55d12f282632a9c6c66b2b88fe338ed77cdae6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bb1bed5054d333e60932d5b55d12f282632a9c6c66b2b88fe338ed77cdae6f->enter($__internal_b8bb1bed5054d333e60932d5b55d12f282632a9c6c66b2b88fe338ed77cdae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3637300dcfb5183e0fec650231b27c75967a4714eab123fc1e6d03cc8ee1fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3637300dcfb5183e0fec650231b27c75967a4714eab123fc1e6d03cc8ee1fa9->enter($__internal_a3637300dcfb5183e0fec650231b27c75967a4714eab123fc1e6d03cc8ee1fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a3637300dcfb5183e0fec650231b27c75967a4714eab123fc1e6d03cc8ee1fa9->leave($__internal_a3637300dcfb5183e0fec650231b27c75967a4714eab123fc1e6d03cc8ee1fa9_prof);

        
        $__internal_b8bb1bed5054d333e60932d5b55d12f282632a9c6c66b2b88fe338ed77cdae6f->leave($__internal_b8bb1bed5054d333e60932d5b55d12f282632a9c6c66b2b88fe338ed77cdae6f_prof);

    }

    public function getTemplateName()
    {
        return ":comision:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comision edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('comision_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":comision:edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/comision/edit.html.twig");
    }
}

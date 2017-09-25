<?php

/* user/edit.html.twig */
class __TwigTemplate_d5b35c105886da0f3488d2fc6e26faf94a659753c75a9562bda6852c3f790bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_5e1e3ed3ae712dd0ad396ad3f7ff856607cf7513acc500127e5c59f5d6ac0930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1e3ed3ae712dd0ad396ad3f7ff856607cf7513acc500127e5c59f5d6ac0930->enter($__internal_5e1e3ed3ae712dd0ad396ad3f7ff856607cf7513acc500127e5c59f5d6ac0930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_e42e218273b8e14a6dde12896251a2386fa5888942b0ae250797d9f0bdcbdbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42e218273b8e14a6dde12896251a2386fa5888942b0ae250797d9f0bdcbdbe2->enter($__internal_e42e218273b8e14a6dde12896251a2386fa5888942b0ae250797d9f0bdcbdbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e1e3ed3ae712dd0ad396ad3f7ff856607cf7513acc500127e5c59f5d6ac0930->leave($__internal_5e1e3ed3ae712dd0ad396ad3f7ff856607cf7513acc500127e5c59f5d6ac0930_prof);

        
        $__internal_e42e218273b8e14a6dde12896251a2386fa5888942b0ae250797d9f0bdcbdbe2->leave($__internal_e42e218273b8e14a6dde12896251a2386fa5888942b0ae250797d9f0bdcbdbe2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02b9c2c5f46a924b8e963c3fbe6af067fbb60b1b09dec04afbfbd076d9e2889d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b9c2c5f46a924b8e963c3fbe6af067fbb60b1b09dec04afbfbd076d9e2889d->enter($__internal_02b9c2c5f46a924b8e963c3fbe6af067fbb60b1b09dec04afbfbd076d9e2889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7912b746a44ff7a02a992ceeff5e257e75645aa185eed580c80e449eced4fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7912b746a44ff7a02a992ceeff5e257e75645aa185eed580c80e449eced4fa1->enter($__internal_c7912b746a44ff7a02a992ceeff5e257e75645aa185eed580c80e449eced4fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c7912b746a44ff7a02a992ceeff5e257e75645aa185eed580c80e449eced4fa1->leave($__internal_c7912b746a44ff7a02a992ceeff5e257e75645aa185eed580c80e449eced4fa1_prof);

        
        $__internal_02b9c2c5f46a924b8e963c3fbe6af067fbb60b1b09dec04afbfbd076d9e2889d->leave($__internal_02b9c2c5f46a924b8e963c3fbe6af067fbb60b1b09dec04afbfbd076d9e2889d_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\user\\edit.html.twig");
    }
}

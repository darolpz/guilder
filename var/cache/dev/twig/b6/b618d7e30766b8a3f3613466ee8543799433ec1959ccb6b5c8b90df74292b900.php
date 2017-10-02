<?php

/* rol/edit.html.twig */
class __TwigTemplate_acef76e933b82044087798fdb0b5f1fb609b13c2e2930b8b1e1febbc81ad26da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rol/edit.html.twig", 1);
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
        $__internal_011a3305d241bd2cf4f14da963b860ed08c53a69d0c97e311d48fd3b73b07eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011a3305d241bd2cf4f14da963b860ed08c53a69d0c97e311d48fd3b73b07eec->enter($__internal_011a3305d241bd2cf4f14da963b860ed08c53a69d0c97e311d48fd3b73b07eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/edit.html.twig"));

        $__internal_0fd72e610b84a3b8c13d89cd94ccb7ff9169ba02603e82396183b464ef16737f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd72e610b84a3b8c13d89cd94ccb7ff9169ba02603e82396183b464ef16737f->enter($__internal_0fd72e610b84a3b8c13d89cd94ccb7ff9169ba02603e82396183b464ef16737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011a3305d241bd2cf4f14da963b860ed08c53a69d0c97e311d48fd3b73b07eec->leave($__internal_011a3305d241bd2cf4f14da963b860ed08c53a69d0c97e311d48fd3b73b07eec_prof);

        
        $__internal_0fd72e610b84a3b8c13d89cd94ccb7ff9169ba02603e82396183b464ef16737f->leave($__internal_0fd72e610b84a3b8c13d89cd94ccb7ff9169ba02603e82396183b464ef16737f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_428e41153cb3db85f1e180bfbadcf89a6c9ae0f2278b5c7e44c280137467d3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428e41153cb3db85f1e180bfbadcf89a6c9ae0f2278b5c7e44c280137467d3db->enter($__internal_428e41153cb3db85f1e180bfbadcf89a6c9ae0f2278b5c7e44c280137467d3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b246e9e41b005eb500d21a103c837abdda57afed045cbe3b87df6cf9f7bca491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b246e9e41b005eb500d21a103c837abdda57afed045cbe3b87df6cf9f7bca491->enter($__internal_b246e9e41b005eb500d21a103c837abdda57afed045cbe3b87df6cf9f7bca491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rol edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_index");
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
        
        $__internal_b246e9e41b005eb500d21a103c837abdda57afed045cbe3b87df6cf9f7bca491->leave($__internal_b246e9e41b005eb500d21a103c837abdda57afed045cbe3b87df6cf9f7bca491_prof);

        
        $__internal_428e41153cb3db85f1e180bfbadcf89a6c9ae0f2278b5c7e44c280137467d3db->leave($__internal_428e41153cb3db85f1e180bfbadcf89a6c9ae0f2278b5c7e44c280137467d3db_prof);

    }

    public function getTemplateName()
    {
        return "rol/edit.html.twig";
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
    <h1>Rol edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('rol_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "rol/edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\rol\\edit.html.twig");
    }
}

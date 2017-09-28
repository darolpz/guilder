<?php

/* user/edit.html.twig */
class __TwigTemplate_e875d3a3ef835dacf4572f7ac2ada9aa3be8b30f78c408aeb6668450010ea3fc extends Twig_Template
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
        $__internal_92e488a39ae1ece53102292fcccba045f6c5d55abe647745a0845bca0007667f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e488a39ae1ece53102292fcccba045f6c5d55abe647745a0845bca0007667f->enter($__internal_92e488a39ae1ece53102292fcccba045f6c5d55abe647745a0845bca0007667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_43c4cefddba48942ef61fe8a85f1945d3a594eff16f534e56687b5c8958be2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c4cefddba48942ef61fe8a85f1945d3a594eff16f534e56687b5c8958be2bb->enter($__internal_43c4cefddba48942ef61fe8a85f1945d3a594eff16f534e56687b5c8958be2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92e488a39ae1ece53102292fcccba045f6c5d55abe647745a0845bca0007667f->leave($__internal_92e488a39ae1ece53102292fcccba045f6c5d55abe647745a0845bca0007667f_prof);

        
        $__internal_43c4cefddba48942ef61fe8a85f1945d3a594eff16f534e56687b5c8958be2bb->leave($__internal_43c4cefddba48942ef61fe8a85f1945d3a594eff16f534e56687b5c8958be2bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77be67438a9f32bff88b178ef4797d02a9e5a3df23ab8e96c64da4dc3eac9bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77be67438a9f32bff88b178ef4797d02a9e5a3df23ab8e96c64da4dc3eac9bcd->enter($__internal_77be67438a9f32bff88b178ef4797d02a9e5a3df23ab8e96c64da4dc3eac9bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9ff9e46f661bac23ee3183aa7a9393c4da344b80fe019362dcfde5a6dc64068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ff9e46f661bac23ee3183aa7a9393c4da344b80fe019362dcfde5a6dc64068->enter($__internal_c9ff9e46f661bac23ee3183aa7a9393c4da344b80fe019362dcfde5a6dc64068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
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
        
        $__internal_c9ff9e46f661bac23ee3183aa7a9393c4da344b80fe019362dcfde5a6dc64068->leave($__internal_c9ff9e46f661bac23ee3183aa7a9393c4da344b80fe019362dcfde5a6dc64068_prof);

        
        $__internal_77be67438a9f32bff88b178ef4797d02a9e5a3df23ab8e96c64da4dc3eac9bcd->leave($__internal_77be67438a9f32bff88b178ef4797d02a9e5a3df23ab8e96c64da4dc3eac9bcd_prof);

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

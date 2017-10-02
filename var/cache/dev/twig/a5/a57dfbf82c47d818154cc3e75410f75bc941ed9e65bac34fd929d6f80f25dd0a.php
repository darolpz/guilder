<?php

/* :rol:edit.html.twig */
class __TwigTemplate_3adef034432afa5027b0f5d2339ab70c5b7b1baf469c5b49506ceb5b5b0814c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rol:edit.html.twig", 1);
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
        $__internal_835c7c747b99bae186fb7e3373477d3886bb36d27f0727fc21076a0d92733936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835c7c747b99bae186fb7e3373477d3886bb36d27f0727fc21076a0d92733936->enter($__internal_835c7c747b99bae186fb7e3373477d3886bb36d27f0727fc21076a0d92733936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:edit.html.twig"));

        $__internal_5911018509dc26f89905dc788456b7315a2fbe5704d6d7b410d8d3da987e8400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5911018509dc26f89905dc788456b7315a2fbe5704d6d7b410d8d3da987e8400->enter($__internal_5911018509dc26f89905dc788456b7315a2fbe5704d6d7b410d8d3da987e8400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_835c7c747b99bae186fb7e3373477d3886bb36d27f0727fc21076a0d92733936->leave($__internal_835c7c747b99bae186fb7e3373477d3886bb36d27f0727fc21076a0d92733936_prof);

        
        $__internal_5911018509dc26f89905dc788456b7315a2fbe5704d6d7b410d8d3da987e8400->leave($__internal_5911018509dc26f89905dc788456b7315a2fbe5704d6d7b410d8d3da987e8400_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f9615d33a97176c6b897ca3f48fbbd140b8cca0e0f7e818fd4543d3af00180e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9615d33a97176c6b897ca3f48fbbd140b8cca0e0f7e818fd4543d3af00180e->enter($__internal_7f9615d33a97176c6b897ca3f48fbbd140b8cca0e0f7e818fd4543d3af00180e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2a37b4f6c7d539fcf624ea2b002631e2c7c56de88937c93006ab3a69cbca303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a37b4f6c7d539fcf624ea2b002631e2c7c56de88937c93006ab3a69cbca303->enter($__internal_b2a37b4f6c7d539fcf624ea2b002631e2c7c56de88937c93006ab3a69cbca303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b2a37b4f6c7d539fcf624ea2b002631e2c7c56de88937c93006ab3a69cbca303->leave($__internal_b2a37b4f6c7d539fcf624ea2b002631e2c7c56de88937c93006ab3a69cbca303_prof);

        
        $__internal_7f9615d33a97176c6b897ca3f48fbbd140b8cca0e0f7e818fd4543d3af00180e->leave($__internal_7f9615d33a97176c6b897ca3f48fbbd140b8cca0e0f7e818fd4543d3af00180e_prof);

    }

    public function getTemplateName()
    {
        return ":rol:edit.html.twig";
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
", ":rol:edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/rol/edit.html.twig");
    }
}

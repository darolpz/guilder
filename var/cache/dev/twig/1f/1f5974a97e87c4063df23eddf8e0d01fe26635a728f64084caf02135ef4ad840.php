<?php

/* horario/show.html.twig */
class __TwigTemplate_b7cae208b6832fd4acbe03c6b69b3b7980fdb3e5900609270b9f4e6ecfbf7be1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horario/show.html.twig", 1);
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
        $__internal_22b35110417e27123a0ffecf0c26842d05c33884fd3c943188fafe12938c4ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b35110417e27123a0ffecf0c26842d05c33884fd3c943188fafe12938c4ea6->enter($__internal_22b35110417e27123a0ffecf0c26842d05c33884fd3c943188fafe12938c4ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/show.html.twig"));

        $__internal_8ed7c821cb116d107b69727caa5e5784aeade36b17c925f233fba85329d6ed79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed7c821cb116d107b69727caa5e5784aeade36b17c925f233fba85329d6ed79->enter($__internal_8ed7c821cb116d107b69727caa5e5784aeade36b17c925f233fba85329d6ed79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22b35110417e27123a0ffecf0c26842d05c33884fd3c943188fafe12938c4ea6->leave($__internal_22b35110417e27123a0ffecf0c26842d05c33884fd3c943188fafe12938c4ea6_prof);

        
        $__internal_8ed7c821cb116d107b69727caa5e5784aeade36b17c925f233fba85329d6ed79->leave($__internal_8ed7c821cb116d107b69727caa5e5784aeade36b17c925f233fba85329d6ed79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6491bc1aa527094ed8ec9f2d5c9fa4131b5f371b1d89c95a4b266e428578268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6491bc1aa527094ed8ec9f2d5c9fa4131b5f371b1d89c95a4b266e428578268->enter($__internal_a6491bc1aa527094ed8ec9f2d5c9fa4131b5f371b1d89c95a4b266e428578268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a533e9d7bdfef5dc38be3f1942619a8584e7dd032738aa4bbd9718a2bbddf17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a533e9d7bdfef5dc38be3f1942619a8584e7dd032738aa4bbd9718a2bbddf17->enter($__internal_4a533e9d7bdfef5dc38be3f1942619a8584e7dd032738aa4bbd9718a2bbddf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Horario</h1>

    <table>
        <tbody>
            <tr>
                <th>Inicio</th>
                <td>";
        // line 10
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "inicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "inicio", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fin</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "fin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "fin", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idhorario</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "idhorario", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_edit", array("idhorario" => $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "idhorario", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4a533e9d7bdfef5dc38be3f1942619a8584e7dd032738aa4bbd9718a2bbddf17->leave($__internal_4a533e9d7bdfef5dc38be3f1942619a8584e7dd032738aa4bbd9718a2bbddf17_prof);

        
        $__internal_a6491bc1aa527094ed8ec9f2d5c9fa4131b5f371b1d89c95a4b266e428578268->leave($__internal_a6491bc1aa527094ed8ec9f2d5c9fa4131b5f371b1d89c95a4b266e428578268_prof);

    }

    public function getTemplateName()
    {
        return "horario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  97 => 31,  91 => 28,  85 => 25,  75 => 18,  66 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Horario</h1>

    <table>
        <tbody>
            <tr>
                <th>Inicio</th>
                <td>{% if horario.inicio %}{{ horario.inicio|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fin</th>
                <td>{% if horario.fin %}{{ horario.fin|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Idhorario</th>
                <td>{{ horario.idhorario }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('horario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('horario_edit', { 'idhorario': horario.idhorario }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "horario/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\horario\\show.html.twig");
    }
}

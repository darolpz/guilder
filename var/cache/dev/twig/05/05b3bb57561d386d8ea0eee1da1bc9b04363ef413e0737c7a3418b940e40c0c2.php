<?php

/* :horario:show.html.twig */
class __TwigTemplate_232c9388f94398424702124f31c82345f53676c28567d2986c2288904b53cccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":horario:show.html.twig", 1);
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
        $__internal_b5f1f5e1155a3706681225b0c29f9a49186b72bad22869535d3c21983a8d3787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f1f5e1155a3706681225b0c29f9a49186b72bad22869535d3c21983a8d3787->enter($__internal_b5f1f5e1155a3706681225b0c29f9a49186b72bad22869535d3c21983a8d3787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:show.html.twig"));

        $__internal_71cb342d88afaa151bd13f9595feb117179ef398780659da41bce0b8751bd57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cb342d88afaa151bd13f9595feb117179ef398780659da41bce0b8751bd57a->enter($__internal_71cb342d88afaa151bd13f9595feb117179ef398780659da41bce0b8751bd57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":horario:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f1f5e1155a3706681225b0c29f9a49186b72bad22869535d3c21983a8d3787->leave($__internal_b5f1f5e1155a3706681225b0c29f9a49186b72bad22869535d3c21983a8d3787_prof);

        
        $__internal_71cb342d88afaa151bd13f9595feb117179ef398780659da41bce0b8751bd57a->leave($__internal_71cb342d88afaa151bd13f9595feb117179ef398780659da41bce0b8751bd57a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f648a9df0a1278899306680a1fd15916de9ebe8e9b235356186308f07c3e162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f648a9df0a1278899306680a1fd15916de9ebe8e9b235356186308f07c3e162->enter($__internal_0f648a9df0a1278899306680a1fd15916de9ebe8e9b235356186308f07c3e162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25857ec08bd50b6f430ed94f5c3d79fb7f6242fe2c95508b532e3330b37ed78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25857ec08bd50b6f430ed94f5c3d79fb7f6242fe2c95508b532e3330b37ed78d->enter($__internal_25857ec08bd50b6f430ed94f5c3d79fb7f6242fe2c95508b532e3330b37ed78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25857ec08bd50b6f430ed94f5c3d79fb7f6242fe2c95508b532e3330b37ed78d->leave($__internal_25857ec08bd50b6f430ed94f5c3d79fb7f6242fe2c95508b532e3330b37ed78d_prof);

        
        $__internal_0f648a9df0a1278899306680a1fd15916de9ebe8e9b235356186308f07c3e162->leave($__internal_0f648a9df0a1278899306680a1fd15916de9ebe8e9b235356186308f07c3e162_prof);

    }

    public function getTemplateName()
    {
        return ":horario:show.html.twig";
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
", ":horario:show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/horario/show.html.twig");
    }
}

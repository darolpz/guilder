<?php

/* comision/show.html.twig */
class __TwigTemplate_c11e71d763054a53f3fc48e22fc79a67465ba4835472e21957682b85133896ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comision/show.html.twig", 1);
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
        $__internal_35979926505654719ad8843048864d43251e4fe5e3514c8c223f84753f97b044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35979926505654719ad8843048864d43251e4fe5e3514c8c223f84753f97b044->enter($__internal_35979926505654719ad8843048864d43251e4fe5e3514c8c223f84753f97b044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/show.html.twig"));

        $__internal_d17220ecb19d521dd079e8747c2e154c7ed7c100b9c4b2066b80271f6df26f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17220ecb19d521dd079e8747c2e154c7ed7c100b9c4b2066b80271f6df26f8c->enter($__internal_d17220ecb19d521dd079e8747c2e154c7ed7c100b9c4b2066b80271f6df26f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35979926505654719ad8843048864d43251e4fe5e3514c8c223f84753f97b044->leave($__internal_35979926505654719ad8843048864d43251e4fe5e3514c8c223f84753f97b044_prof);

        
        $__internal_d17220ecb19d521dd079e8747c2e154c7ed7c100b9c4b2066b80271f6df26f8c->leave($__internal_d17220ecb19d521dd079e8747c2e154c7ed7c100b9c4b2066b80271f6df26f8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bca166c5f99ceeba338c7b738c5845c0bdb46b9ce1acc48092cdec3b5e8ecea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bca166c5f99ceeba338c7b738c5845c0bdb46b9ce1acc48092cdec3b5e8ecea->enter($__internal_8bca166c5f99ceeba338c7b738c5845c0bdb46b9ce1acc48092cdec3b5e8ecea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8673d7d2477a3f9144589fc2617b7ccb4dfa114d9ad7283361c62c44a285e50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8673d7d2477a3f9144589fc2617b7ccb4dfa114d9ad7283361c62c44a285e50a->enter($__internal_8673d7d2477a3f9144589fc2617b7ccb4dfa114d9ad7283361c62c44a285e50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision</h1>

    <table>
        <tbody>
            <tr>
                <th>Numero</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profesor</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "profesor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuatrimestre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "cuatrimestre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "year", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcomision</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "idcomision", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_edit", array("idcomision" => $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "idcomision", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8673d7d2477a3f9144589fc2617b7ccb4dfa114d9ad7283361c62c44a285e50a->leave($__internal_8673d7d2477a3f9144589fc2617b7ccb4dfa114d9ad7283361c62c44a285e50a_prof);

        
        $__internal_8bca166c5f99ceeba338c7b738c5845c0bdb46b9ce1acc48092cdec3b5e8ecea->leave($__internal_8bca166c5f99ceeba338c7b738c5845c0bdb46b9ce1acc48092cdec3b5e8ecea_prof);

    }

    public function getTemplateName()
    {
        return "comision/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comision</h1>

    <table>
        <tbody>
            <tr>
                <th>Numero</th>
                <td>{{ comision.numero }}</td>
            </tr>
            <tr>
                <th>Profesor</th>
                <td>{{ comision.profesor }}</td>
            </tr>
            <tr>
                <th>Cuatrimestre</th>
                <td>{{ comision.cuatrimestre }}</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>{{ comision.year }}</td>
            </tr>
            <tr>
                <th>Idcomision</th>
                <td>{{ comision.idcomision }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comision_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('comision_edit', { 'idcomision': comision.idcomision }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "comision/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\comision\\show.html.twig");
    }
}

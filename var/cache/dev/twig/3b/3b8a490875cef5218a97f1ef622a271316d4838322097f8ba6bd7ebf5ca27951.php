<?php

/* :rol:index.html.twig */
class __TwigTemplate_62d7d32eae9813f28c6a7076dd0ac5c14bb3bf8493189d2d957520de20511bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rol:index.html.twig", 1);
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
        $__internal_90ef62765724d3531539be115553e42b8c141462f1d93231de248c9c11c3dbb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ef62765724d3531539be115553e42b8c141462f1d93231de248c9c11c3dbb2->enter($__internal_90ef62765724d3531539be115553e42b8c141462f1d93231de248c9c11c3dbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:index.html.twig"));

        $__internal_965ebbd6144d3cf51edc04c3517191406019a76ff77d6c9c425264492d97956e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965ebbd6144d3cf51edc04c3517191406019a76ff77d6c9c425264492d97956e->enter($__internal_965ebbd6144d3cf51edc04c3517191406019a76ff77d6c9c425264492d97956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90ef62765724d3531539be115553e42b8c141462f1d93231de248c9c11c3dbb2->leave($__internal_90ef62765724d3531539be115553e42b8c141462f1d93231de248c9c11c3dbb2_prof);

        
        $__internal_965ebbd6144d3cf51edc04c3517191406019a76ff77d6c9c425264492d97956e->leave($__internal_965ebbd6144d3cf51edc04c3517191406019a76ff77d6c9c425264492d97956e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_517f00e1f5cd18af24b4b7d418066d47251bbbd68837174ef56ced0c199c6869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517f00e1f5cd18af24b4b7d418066d47251bbbd68837174ef56ced0c199c6869->enter($__internal_517f00e1f5cd18af24b4b7d418066d47251bbbd68837174ef56ced0c199c6869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3066e963d96c2a2c1d26f69edf108cd90e11db051bc096cd160eeb2d18fa42bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3066e963d96c2a2c1d26f69edf108cd90e11db051bc096cd160eeb2d18fa42bc->enter($__internal_3066e963d96c2a2c1d26f69edf108cd90e11db051bc096cd160eeb2d18fa42bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rols list</h1>

    <table>
        <thead>
            <tr>
                <th>Rol</th>
                <th>Idrol</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rols"] ?? $this->getContext($context, "rols")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_show", array("idrol" => $this->getAttribute($context["rol"], "idrol", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "rol", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "idrol", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_show", array("idrol" => $this->getAttribute($context["rol"], "idrol", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_edit", array("idrol" => $this->getAttribute($context["rol"], "idrol", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_new");
        echo "\">Create a new rol</a>
        </li>
    </ul>
";
        
        $__internal_3066e963d96c2a2c1d26f69edf108cd90e11db051bc096cd160eeb2d18fa42bc->leave($__internal_3066e963d96c2a2c1d26f69edf108cd90e11db051bc096cd160eeb2d18fa42bc_prof);

        
        $__internal_517f00e1f5cd18af24b4b7d418066d47251bbbd68837174ef56ced0c199c6869->leave($__internal_517f00e1f5cd18af24b4b7d418066d47251bbbd68837174ef56ced0c199c6869_prof);

    }

    public function getTemplateName()
    {
        return ":rol:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Rols list</h1>

    <table>
        <thead>
            <tr>
                <th>Rol</th>
                <th>Idrol</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for rol in rols %}
            <tr>
                <td><a href=\"{{ path('rol_show', { 'idrol': rol.idrol }) }}\">{{ rol.rol }}</a></td>
                <td>{{ rol.idrol }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rol_show', { 'idrol': rol.idrol }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rol_edit', { 'idrol': rol.idrol }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rol_new') }}\">Create a new rol</a>
        </li>
    </ul>
{% endblock %}
", ":rol:index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/rol/index.html.twig");
    }
}

<?php

/* :rol:index.html.twig */
class __TwigTemplate_b006e45117e40335e9dd03371ce28694719c1d48ed16eac797b51ef4296e6000 extends Twig_Template
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
        $__internal_737c71e2d4b2969be1e3c43bacad34fb92bcc153e7fc6a3d35dead051d53e265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737c71e2d4b2969be1e3c43bacad34fb92bcc153e7fc6a3d35dead051d53e265->enter($__internal_737c71e2d4b2969be1e3c43bacad34fb92bcc153e7fc6a3d35dead051d53e265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:index.html.twig"));

        $__internal_1fa9fdbd9d3ee086aebedd8302b6c826717a697c53a870bf0a5f23ab8bce5e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa9fdbd9d3ee086aebedd8302b6c826717a697c53a870bf0a5f23ab8bce5e0e->enter($__internal_1fa9fdbd9d3ee086aebedd8302b6c826717a697c53a870bf0a5f23ab8bce5e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737c71e2d4b2969be1e3c43bacad34fb92bcc153e7fc6a3d35dead051d53e265->leave($__internal_737c71e2d4b2969be1e3c43bacad34fb92bcc153e7fc6a3d35dead051d53e265_prof);

        
        $__internal_1fa9fdbd9d3ee086aebedd8302b6c826717a697c53a870bf0a5f23ab8bce5e0e->leave($__internal_1fa9fdbd9d3ee086aebedd8302b6c826717a697c53a870bf0a5f23ab8bce5e0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e6d58d558a4a74f67a67a56133c98426f61873481b2aab5f2ec5793e4ee168b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6d58d558a4a74f67a67a56133c98426f61873481b2aab5f2ec5793e4ee168b->enter($__internal_7e6d58d558a4a74f67a67a56133c98426f61873481b2aab5f2ec5793e4ee168b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_842ef503cc98c287f220240ad141811875b99de636293b03f5428c431341cc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842ef503cc98c287f220240ad141811875b99de636293b03f5428c431341cc29->enter($__internal_842ef503cc98c287f220240ad141811875b99de636293b03f5428c431341cc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["rols"]) || array_key_exists("rols", $context) ? $context["rols"] : (function () { throw new Twig_Error_Runtime('Variable "rols" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_show", array("idrol" => twig_get_attribute($this->env, $this->getSourceContext(), $context["rol"], "idrol", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["rol"], "rol", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["rol"], "idrol", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_show", array("idrol" => twig_get_attribute($this->env, $this->getSourceContext(), $context["rol"], "idrol", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_edit", array("idrol" => twig_get_attribute($this->env, $this->getSourceContext(), $context["rol"], "idrol", array()))), "html", null, true);
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
        
        $__internal_842ef503cc98c287f220240ad141811875b99de636293b03f5428c431341cc29->leave($__internal_842ef503cc98c287f220240ad141811875b99de636293b03f5428c431341cc29_prof);

        
        $__internal_7e6d58d558a4a74f67a67a56133c98426f61873481b2aab5f2ec5793e4ee168b->leave($__internal_7e6d58d558a4a74f67a67a56133c98426f61873481b2aab5f2ec5793e4ee168b_prof);

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

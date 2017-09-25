<?php

/* rol/index.html.twig */
class __TwigTemplate_3a7992eb69aa9a49603e84fb7e331a924e9d5c0c469115b53a3056df7b7f247f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rol/index.html.twig", 1);
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
        $__internal_c1b5254e54d92b48d77d1a2d40e50a0fea049f2809c10f7036887edab2d030c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b5254e54d92b48d77d1a2d40e50a0fea049f2809c10f7036887edab2d030c3->enter($__internal_c1b5254e54d92b48d77d1a2d40e50a0fea049f2809c10f7036887edab2d030c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/index.html.twig"));

        $__internal_bd8b1d7134818dc06e92087e0de3ad32c06cb9b1777b4450c24119b052d00e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8b1d7134818dc06e92087e0de3ad32c06cb9b1777b4450c24119b052d00e56->enter($__internal_bd8b1d7134818dc06e92087e0de3ad32c06cb9b1777b4450c24119b052d00e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1b5254e54d92b48d77d1a2d40e50a0fea049f2809c10f7036887edab2d030c3->leave($__internal_c1b5254e54d92b48d77d1a2d40e50a0fea049f2809c10f7036887edab2d030c3_prof);

        
        $__internal_bd8b1d7134818dc06e92087e0de3ad32c06cb9b1777b4450c24119b052d00e56->leave($__internal_bd8b1d7134818dc06e92087e0de3ad32c06cb9b1777b4450c24119b052d00e56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77fcd33a7edab12ca2474aa5f223923553c8ad9a24ca448f13df7b4ddcce3747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fcd33a7edab12ca2474aa5f223923553c8ad9a24ca448f13df7b4ddcce3747->enter($__internal_77fcd33a7edab12ca2474aa5f223923553c8ad9a24ca448f13df7b4ddcce3747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b11349f7c72d6d8efa7377485593b55430eb6a9a7a478c886e876a60195618d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11349f7c72d6d8efa7377485593b55430eb6a9a7a478c886e876a60195618d6->enter($__internal_b11349f7c72d6d8efa7377485593b55430eb6a9a7a478c886e876a60195618d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b11349f7c72d6d8efa7377485593b55430eb6a9a7a478c886e876a60195618d6->leave($__internal_b11349f7c72d6d8efa7377485593b55430eb6a9a7a478c886e876a60195618d6_prof);

        
        $__internal_77fcd33a7edab12ca2474aa5f223923553c8ad9a24ca448f13df7b4ddcce3747->leave($__internal_77fcd33a7edab12ca2474aa5f223923553c8ad9a24ca448f13df7b4ddcce3747_prof);

    }

    public function getTemplateName()
    {
        return "rol/index.html.twig";
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
", "rol/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\rol\\index.html.twig");
    }
}

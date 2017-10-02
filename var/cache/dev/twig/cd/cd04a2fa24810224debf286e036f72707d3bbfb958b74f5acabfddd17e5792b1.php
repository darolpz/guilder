<?php

/* comision/index.html.twig */
class __TwigTemplate_348e7b12e453c6589e99cd2353d87046fc4aae3cad77aee43f25c1cef0aab8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comision/index.html.twig", 1);
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
        $__internal_30355dc20617dab5c74b44e934413feba8cdce3ae728d42ba74dfb01ae180bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30355dc20617dab5c74b44e934413feba8cdce3ae728d42ba74dfb01ae180bcf->enter($__internal_30355dc20617dab5c74b44e934413feba8cdce3ae728d42ba74dfb01ae180bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/index.html.twig"));

        $__internal_4c0825ca40c97e2341700fd6bbef715d233eff80f28f66b69024d7271026af6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0825ca40c97e2341700fd6bbef715d233eff80f28f66b69024d7271026af6f->enter($__internal_4c0825ca40c97e2341700fd6bbef715d233eff80f28f66b69024d7271026af6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30355dc20617dab5c74b44e934413feba8cdce3ae728d42ba74dfb01ae180bcf->leave($__internal_30355dc20617dab5c74b44e934413feba8cdce3ae728d42ba74dfb01ae180bcf_prof);

        
        $__internal_4c0825ca40c97e2341700fd6bbef715d233eff80f28f66b69024d7271026af6f->leave($__internal_4c0825ca40c97e2341700fd6bbef715d233eff80f28f66b69024d7271026af6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc73d91644a1128ed21865ed42f9ae54f48c6952dec4e655bca5b9b85d3cfdef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc73d91644a1128ed21865ed42f9ae54f48c6952dec4e655bca5b9b85d3cfdef->enter($__internal_fc73d91644a1128ed21865ed42f9ae54f48c6952dec4e655bca5b9b85d3cfdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89318c7d5e059d6e9d5420a76d0621e841f36b187cfde16625c22bccdd315301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89318c7d5e059d6e9d5420a76d0621e841f36b187cfde16625c22bccdd315301->enter($__internal_89318c7d5e059d6e9d5420a76d0621e841f36b187cfde16625c22bccdd315301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comisions list</h1>

    <table>
        <thead>
            <tr>
\t\t\t\t<th>Materia</th>
                <th>Numero</th>
                <th>Profesor</th>
                <th>Cuatrimestre</th>
                <th>Year</th>
                <th>Idcomision</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comisions"] ?? $this->getContext($context, "comisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 20
            echo "            <tr>
\t\t\t\t <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "materiamateria", array()), "html", null, true);
            echo " </td>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_show", array("idcomision" => $this->getAttribute($context["comision"], "idcomision", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "numero", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "profesor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "cuatrimestre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "year", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "idcomision", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_show", array("idcomision" => $this->getAttribute($context["comision"], "idcomision", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_edit", array("idcomision" => $this->getAttribute($context["comision"], "idcomision", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_new");
        echo "\">Create a new comision</a>
        </li>
    </ul>
";
        
        $__internal_89318c7d5e059d6e9d5420a76d0621e841f36b187cfde16625c22bccdd315301->leave($__internal_89318c7d5e059d6e9d5420a76d0621e841f36b187cfde16625c22bccdd315301_prof);

        
        $__internal_fc73d91644a1128ed21865ed42f9ae54f48c6952dec4e655bca5b9b85d3cfdef->leave($__internal_fc73d91644a1128ed21865ed42f9ae54f48c6952dec4e655bca5b9b85d3cfdef_prof);

    }

    public function getTemplateName()
    {
        return "comision/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  77 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comisions list</h1>

    <table>
        <thead>
            <tr>
\t\t\t\t<th>Materia</th>
                <th>Numero</th>
                <th>Profesor</th>
                <th>Cuatrimestre</th>
                <th>Year</th>
                <th>Idcomision</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for comision in comisions %}
            <tr>
\t\t\t\t <td>{{comision.materiamateria}} </td>
                <td><a href=\"{{ path('comision_show', { 'idcomision': comision.idcomision }) }}\">{{ comision.numero }}</a></td>
                <td>{{ comision.profesor }}</td>
                <td>{{ comision.cuatrimestre }}</td>
                <td>{{ comision.year }}</td>
                <td>{{ comision.idcomision }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('comision_show', { 'idcomision': comision.idcomision }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('comision_edit', { 'idcomision': comision.idcomision }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comision_new') }}\">Create a new comision</a>
        </li>
    </ul>
{% endblock %}
", "comision/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\comision\\index.html.twig");
    }
}

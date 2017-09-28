<?php

/* rol/index.html.twig */
class __TwigTemplate_6494bc9ebfd4b5eff961db2bd75df1a25b7ff7f9c465d2bc79953363b3cba32d extends Twig_Template
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
        $__internal_cac645c6a3bf9287babf338ecb2752bf2c5cac0e961bb11588516f67200b045c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac645c6a3bf9287babf338ecb2752bf2c5cac0e961bb11588516f67200b045c->enter($__internal_cac645c6a3bf9287babf338ecb2752bf2c5cac0e961bb11588516f67200b045c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/index.html.twig"));

        $__internal_50678f8ba84a1c2b50129e096375d3dadf50bbe2f95c99a8dda830161d5cd5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50678f8ba84a1c2b50129e096375d3dadf50bbe2f95c99a8dda830161d5cd5d8->enter($__internal_50678f8ba84a1c2b50129e096375d3dadf50bbe2f95c99a8dda830161d5cd5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rol/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac645c6a3bf9287babf338ecb2752bf2c5cac0e961bb11588516f67200b045c->leave($__internal_cac645c6a3bf9287babf338ecb2752bf2c5cac0e961bb11588516f67200b045c_prof);

        
        $__internal_50678f8ba84a1c2b50129e096375d3dadf50bbe2f95c99a8dda830161d5cd5d8->leave($__internal_50678f8ba84a1c2b50129e096375d3dadf50bbe2f95c99a8dda830161d5cd5d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e030d4c2d5b3f4c92ecb7db66f4f5ce8c4ec1859aee55b3578a0243df543aed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e030d4c2d5b3f4c92ecb7db66f4f5ce8c4ec1859aee55b3578a0243df543aed2->enter($__internal_e030d4c2d5b3f4c92ecb7db66f4f5ce8c4ec1859aee55b3578a0243df543aed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f03bea0a9a1fb7454d8b7a147baac10caff1cee428cdbad2218fd7e3410a12e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03bea0a9a1fb7454d8b7a147baac10caff1cee428cdbad2218fd7e3410a12e4->enter($__internal_f03bea0a9a1fb7454d8b7a147baac10caff1cee428cdbad2218fd7e3410a12e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f03bea0a9a1fb7454d8b7a147baac10caff1cee428cdbad2218fd7e3410a12e4->leave($__internal_f03bea0a9a1fb7454d8b7a147baac10caff1cee428cdbad2218fd7e3410a12e4_prof);

        
        $__internal_e030d4c2d5b3f4c92ecb7db66f4f5ce8c4ec1859aee55b3578a0243df543aed2->leave($__internal_e030d4c2d5b3f4c92ecb7db66f4f5ce8c4ec1859aee55b3578a0243df543aed2_prof);

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
", "rol/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\rol\\index.html.twig");
    }
}

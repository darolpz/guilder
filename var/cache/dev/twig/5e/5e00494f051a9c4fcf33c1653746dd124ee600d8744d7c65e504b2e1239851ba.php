<?php

/* :rol:show.html.twig */
class __TwigTemplate_ebd91f7e35f7e037b4508b00796bd46e8df23999c4b10d7231fcede2b6beddd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rol:show.html.twig", 1);
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
        $__internal_3b62d46eb3a4819c1acfe0db6a2fc67b2caa20c038c879889da3d9f4f153bc79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b62d46eb3a4819c1acfe0db6a2fc67b2caa20c038c879889da3d9f4f153bc79->enter($__internal_3b62d46eb3a4819c1acfe0db6a2fc67b2caa20c038c879889da3d9f4f153bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:show.html.twig"));

        $__internal_4250e1f845986cbd708147805663031254786076eb5dcb61e377509ac79a3f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4250e1f845986cbd708147805663031254786076eb5dcb61e377509ac79a3f4e->enter($__internal_4250e1f845986cbd708147805663031254786076eb5dcb61e377509ac79a3f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b62d46eb3a4819c1acfe0db6a2fc67b2caa20c038c879889da3d9f4f153bc79->leave($__internal_3b62d46eb3a4819c1acfe0db6a2fc67b2caa20c038c879889da3d9f4f153bc79_prof);

        
        $__internal_4250e1f845986cbd708147805663031254786076eb5dcb61e377509ac79a3f4e->leave($__internal_4250e1f845986cbd708147805663031254786076eb5dcb61e377509ac79a3f4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ccee1db56f94d9120b509a878085c7e47670a75a783eca15c3c0729909543fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccee1db56f94d9120b509a878085c7e47670a75a783eca15c3c0729909543fc->enter($__internal_1ccee1db56f94d9120b509a878085c7e47670a75a783eca15c3c0729909543fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d989e7bf39e92855ce7028d47eca15564ecd48d11241d26ff1878b86eb5388b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d989e7bf39e92855ce7028d47eca15564ecd48d11241d26ff1878b86eb5388b->enter($__internal_3d989e7bf39e92855ce7028d47eca15564ecd48d11241d26ff1878b86eb5388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rol</h1>

    <table>
        <tbody>
            <tr>
                <th>Rol</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new Twig_Error_Runtime('Variable "rol" does not exist.', 10, $this->getSourceContext()); })()), "rol", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idrol</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new Twig_Error_Runtime('Variable "rol" does not exist.', 14, $this->getSourceContext()); })()), "idrol", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_edit", array("idrol" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new Twig_Error_Runtime('Variable "rol" does not exist.', 24, $this->getSourceContext()); })()), "idrol", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 27, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3d989e7bf39e92855ce7028d47eca15564ecd48d11241d26ff1878b86eb5388b->leave($__internal_3d989e7bf39e92855ce7028d47eca15564ecd48d11241d26ff1878b86eb5388b_prof);

        
        $__internal_1ccee1db56f94d9120b509a878085c7e47670a75a783eca15c3c0729909543fc->leave($__internal_1ccee1db56f94d9120b509a878085c7e47670a75a783eca15c3c0729909543fc_prof);

    }

    public function getTemplateName()
    {
        return ":rol:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Rol</h1>

    <table>
        <tbody>
            <tr>
                <th>Rol</th>
                <td>{{ rol.rol }}</td>
            </tr>
            <tr>
                <th>Idrol</th>
                <td>{{ rol.idrol }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rol_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('rol_edit', { 'idrol': rol.idrol }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":rol:show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/rol/show.html.twig");
    }
}

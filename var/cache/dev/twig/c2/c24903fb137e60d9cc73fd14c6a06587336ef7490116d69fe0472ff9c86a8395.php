<?php

/* comision/show.html.twig */
class __TwigTemplate_2e3ace527d9902e6a699ef6c9df74fa61e614238c0c14de719275685e6f8cdb4 extends Twig_Template
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
        $__internal_ae86753a1606ab097057c8debea4b4e6617a456861dd5d3e0d72ce9b450c78c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae86753a1606ab097057c8debea4b4e6617a456861dd5d3e0d72ce9b450c78c2->enter($__internal_ae86753a1606ab097057c8debea4b4e6617a456861dd5d3e0d72ce9b450c78c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/show.html.twig"));

        $__internal_fe7d7445bc2ad3a98f9cfb6c59e9983d4084dbab8f37bd995df83ef92b5e00a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7d7445bc2ad3a98f9cfb6c59e9983d4084dbab8f37bd995df83ef92b5e00a9->enter($__internal_fe7d7445bc2ad3a98f9cfb6c59e9983d4084dbab8f37bd995df83ef92b5e00a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comision/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae86753a1606ab097057c8debea4b4e6617a456861dd5d3e0d72ce9b450c78c2->leave($__internal_ae86753a1606ab097057c8debea4b4e6617a456861dd5d3e0d72ce9b450c78c2_prof);

        
        $__internal_fe7d7445bc2ad3a98f9cfb6c59e9983d4084dbab8f37bd995df83ef92b5e00a9->leave($__internal_fe7d7445bc2ad3a98f9cfb6c59e9983d4084dbab8f37bd995df83ef92b5e00a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_088ef20bcc4d99c924fafb77a9b2fdea8a88f9cadbe60cf8fd13b87be41aef35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088ef20bcc4d99c924fafb77a9b2fdea8a88f9cadbe60cf8fd13b87be41aef35->enter($__internal_088ef20bcc4d99c924fafb77a9b2fdea8a88f9cadbe60cf8fd13b87be41aef35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39a591e6663334871281a7eca09876d9214d3f1df5b6e96ee5c2d1a83adee0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a591e6663334871281a7eca09876d9214d3f1df5b6e96ee5c2d1a83adee0c0->enter($__internal_39a591e6663334871281a7eca09876d9214d3f1df5b6e96ee5c2d1a83adee0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision</h1>

    <table>
        <tbody>
            <tr>
                <th>Numero</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 10, $this->getSourceContext()); })()), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profesor</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 14, $this->getSourceContext()); })()), "profesor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuatrimestre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 18, $this->getSourceContext()); })()), "cuatrimestre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 22, $this->getSourceContext()); })()), "year", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcomision</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 26, $this->getSourceContext()); })()), "idcomision", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_edit", array("idcomision" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comision"]) || array_key_exists("comision", $context) ? $context["comision"] : (function () { throw new Twig_Error_Runtime('Variable "comision" does not exist.', 36, $this->getSourceContext()); })()), "idcomision", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 39, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_39a591e6663334871281a7eca09876d9214d3f1df5b6e96ee5c2d1a83adee0c0->leave($__internal_39a591e6663334871281a7eca09876d9214d3f1df5b6e96ee5c2d1a83adee0c0_prof);

        
        $__internal_088ef20bcc4d99c924fafb77a9b2fdea8a88f9cadbe60cf8fd13b87be41aef35->leave($__internal_088ef20bcc4d99c924fafb77a9b2fdea8a88f9cadbe60cf8fd13b87be41aef35_prof);

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

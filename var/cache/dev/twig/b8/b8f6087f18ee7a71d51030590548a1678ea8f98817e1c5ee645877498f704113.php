<?php

/* user/show.html.twig */
class __TwigTemplate_5def725fcebcdda072e94fa8692faa6e04269c68f00b259bf02cc4cc1bd6665c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_313decae735a212d6d61381602f7b06d19f3e1115badf8da62f977657a3f72ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313decae735a212d6d61381602f7b06d19f3e1115badf8da62f977657a3f72ee->enter($__internal_313decae735a212d6d61381602f7b06d19f3e1115badf8da62f977657a3f72ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_606e56a068de18bf4915e61f4a9f2eec4d8c016d1db2caa3379eb776cacefd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606e56a068de18bf4915e61f4a9f2eec4d8c016d1db2caa3379eb776cacefd26->enter($__internal_606e56a068de18bf4915e61f4a9f2eec4d8c016d1db2caa3379eb776cacefd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313decae735a212d6d61381602f7b06d19f3e1115badf8da62f977657a3f72ee->leave($__internal_313decae735a212d6d61381602f7b06d19f3e1115badf8da62f977657a3f72ee_prof);

        
        $__internal_606e56a068de18bf4915e61f4a9f2eec4d8c016d1db2caa3379eb776cacefd26->leave($__internal_606e56a068de18bf4915e61f4a9f2eec4d8c016d1db2caa3379eb776cacefd26_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c27837f626225333685bb5b3e11b9b3aa2deb9a3cdf34a963e287299d718e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c27837f626225333685bb5b3e11b9b3aa2deb9a3cdf34a963e287299d718e98->enter($__internal_9c27837f626225333685bb5b3e11b9b3aa2deb9a3cdf34a963e287299d718e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41a82a541425b34c817311b651cf1e15b0ae0e723ee0dadcc7c8b68535b0a00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a82a541425b34c817311b651cf1e15b0ae0e723ee0dadcc7c8b68535b0a00c->enter($__internal_41a82a541425b34c817311b651cf1e15b0ae0e723ee0dadcc7c8b68535b0a00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->getSourceContext()); })()), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->getSourceContext()); })()), "isActive", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Legajo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->getSourceContext()); })()), "legajo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->getSourceContext()); })()), "iduser", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("iduser" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 40, $this->getSourceContext()); })()), "iduser", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_41a82a541425b34c817311b651cf1e15b0ae0e723ee0dadcc7c8b68535b0a00c->leave($__internal_41a82a541425b34c817311b651cf1e15b0ae0e723ee0dadcc7c8b68535b0a00c_prof);

        
        $__internal_9c27837f626225333685bb5b3e11b9b3aa2deb9a3cdf34a963e287299d718e98->leave($__internal_9c27837f626225333685bb5b3e11b9b3aa2deb9a3cdf34a963e287299d718e98_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  118 => 43,  112 => 40,  106 => 37,  96 => 30,  89 => 26,  82 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Legajo</th>
                <td>{{ user.legajo }}</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>{{ user.iduser }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'iduser': user.iduser }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\user\\show.html.twig");
    }
}

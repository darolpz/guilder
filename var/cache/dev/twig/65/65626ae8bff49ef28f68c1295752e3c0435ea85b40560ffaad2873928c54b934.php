<?php

/* :user:show.html.twig */
class __TwigTemplate_00fe78f12b11f9710c530359d3b214e05106ad5238c6f444dd0cdaff501eaae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_f161cb5d68d58192cc40d89c92d646f47256785725d4fc4a5a0a5cebff354362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f161cb5d68d58192cc40d89c92d646f47256785725d4fc4a5a0a5cebff354362->enter($__internal_f161cb5d68d58192cc40d89c92d646f47256785725d4fc4a5a0a5cebff354362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_2dce78a38a2d853f95c6a741f29fbc9c09e36d3b7cddd540dbd1b1ea029c8594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dce78a38a2d853f95c6a741f29fbc9c09e36d3b7cddd540dbd1b1ea029c8594->enter($__internal_2dce78a38a2d853f95c6a741f29fbc9c09e36d3b7cddd540dbd1b1ea029c8594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f161cb5d68d58192cc40d89c92d646f47256785725d4fc4a5a0a5cebff354362->leave($__internal_f161cb5d68d58192cc40d89c92d646f47256785725d4fc4a5a0a5cebff354362_prof);

        
        $__internal_2dce78a38a2d853f95c6a741f29fbc9c09e36d3b7cddd540dbd1b1ea029c8594->leave($__internal_2dce78a38a2d853f95c6a741f29fbc9c09e36d3b7cddd540dbd1b1ea029c8594_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6246c3ba79a4f97e452ff48ff1f4d019e6dce6ae42d3cfb400857233f973a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6246c3ba79a4f97e452ff48ff1f4d019e6dce6ae42d3cfb400857233f973a3c->enter($__internal_e6246c3ba79a4f97e452ff48ff1f4d019e6dce6ae42d3cfb400857233f973a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_337a7c5e81bf426da33d7a573db9991f9a8283bbc6db9eae5859b13ef201362e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337a7c5e81bf426da33d7a573db9991f9a8283bbc6db9eae5859b13ef201362e->enter($__internal_337a7c5e81bf426da33d7a573db9991f9a8283bbc6db9eae5859b13ef201362e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_337a7c5e81bf426da33d7a573db9991f9a8283bbc6db9eae5859b13ef201362e->leave($__internal_337a7c5e81bf426da33d7a573db9991f9a8283bbc6db9eae5859b13ef201362e_prof);

        
        $__internal_e6246c3ba79a4f97e452ff48ff1f4d019e6dce6ae42d3cfb400857233f973a3c->leave($__internal_e6246c3ba79a4f97e452ff48ff1f4d019e6dce6ae42d3cfb400857233f973a3c_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
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
", ":user:show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/user/show.html.twig");
    }
}

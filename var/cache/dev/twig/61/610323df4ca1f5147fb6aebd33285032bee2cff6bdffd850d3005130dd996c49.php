<?php

/* user/index.html.twig */
class __TwigTemplate_f513fb0c4c8ccd061eb8705b828d86cbe169d59b651bdcde8167a4bb9576825e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_abfc4fefefb4c9b7a1fbccc5f19223a5c3f1dddda0eef4e454a67cd215712d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfc4fefefb4c9b7a1fbccc5f19223a5c3f1dddda0eef4e454a67cd215712d44->enter($__internal_abfc4fefefb4c9b7a1fbccc5f19223a5c3f1dddda0eef4e454a67cd215712d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_ee07b3cf0c6d08b896ba89112054dff7bbd879f33f491be944d251c090b482fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee07b3cf0c6d08b896ba89112054dff7bbd879f33f491be944d251c090b482fe->enter($__internal_ee07b3cf0c6d08b896ba89112054dff7bbd879f33f491be944d251c090b482fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abfc4fefefb4c9b7a1fbccc5f19223a5c3f1dddda0eef4e454a67cd215712d44->leave($__internal_abfc4fefefb4c9b7a1fbccc5f19223a5c3f1dddda0eef4e454a67cd215712d44_prof);

        
        $__internal_ee07b3cf0c6d08b896ba89112054dff7bbd879f33f491be944d251c090b482fe->leave($__internal_ee07b3cf0c6d08b896ba89112054dff7bbd879f33f491be944d251c090b482fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e05f43ca613266cbe49b4c1d798ca38e9e12f4a14310974d6cc74a69fc246c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05f43ca613266cbe49b4c1d798ca38e9e12f4a14310974d6cc74a69fc246c8e->enter($__internal_e05f43ca613266cbe49b4c1d798ca38e9e12f4a14310974d6cc74a69fc246c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d0bf35be4d4fcdbe48919fd2b1fc09ccde05670012d06af0b285819db7a2e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0bf35be4d4fcdbe48919fd2b1fc09ccde05670012d06af0b285819db7a2e1b->enter($__internal_6d0bf35be4d4fcdbe48919fd2b1fc09ccde05670012d06af0b285819db7a2e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Isactive</th>
                <th>Email</th>
                <th>Legajo</th>
                <th>Iduser</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => $this->getAttribute($context["user"], "iduser", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "legajo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "iduser", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => $this->getAttribute($context["user"], "iduser", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("iduser" => $this->getAttribute($context["user"], "iduser", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_6d0bf35be4d4fcdbe48919fd2b1fc09ccde05670012d06af0b285819db7a2e1b->leave($__internal_6d0bf35be4d4fcdbe48919fd2b1fc09ccde05670012d06af0b285819db7a2e1b_prof);

        
        $__internal_e05f43ca613266cbe49b4c1d798ca38e9e12f4a14310974d6cc74a69fc246c8e->leave($__internal_e05f43ca613266cbe49b4c1d798ca38e9e12f4a14310974d6cc74a69fc246c8e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  124 => 39,  112 => 33,  106 => 30,  99 => 26,  95 => 25,  91 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Isactive</th>
                <th>Email</th>
                <th>Legajo</th>
                <th>Iduser</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'iduser': user.iduser }) }}\">{{ user.username }}</a></td>
                <td>{{ user.password }}</td>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.legajo }}</td>
                <td>{{ user.iduser }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'iduser': user.iduser }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'iduser': user.iduser }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\user\\index.html.twig");
    }
}

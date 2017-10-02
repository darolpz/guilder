<?php

/* :user:show.html.twig */
class __TwigTemplate_852dc6e84d3588b57b492a1d3c31784a331ec1ace4063e60be79a09c7ba07aca extends Twig_Template
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
        $__internal_11cfc5712a43c4a583a27a4206037097b635df8c84fa7d03c9923f2643359522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cfc5712a43c4a583a27a4206037097b635df8c84fa7d03c9923f2643359522->enter($__internal_11cfc5712a43c4a583a27a4206037097b635df8c84fa7d03c9923f2643359522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_3ec8a12cd7b92e5808a953419e15d4e82e2e76132ec6985a42ac4af9abd0af1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec8a12cd7b92e5808a953419e15d4e82e2e76132ec6985a42ac4af9abd0af1c->enter($__internal_3ec8a12cd7b92e5808a953419e15d4e82e2e76132ec6985a42ac4af9abd0af1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11cfc5712a43c4a583a27a4206037097b635df8c84fa7d03c9923f2643359522->leave($__internal_11cfc5712a43c4a583a27a4206037097b635df8c84fa7d03c9923f2643359522_prof);

        
        $__internal_3ec8a12cd7b92e5808a953419e15d4e82e2e76132ec6985a42ac4af9abd0af1c->leave($__internal_3ec8a12cd7b92e5808a953419e15d4e82e2e76132ec6985a42ac4af9abd0af1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a8008c9738f67e3c95418c10cb3c88779628db223fb5d06ae85133b9078062c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8008c9738f67e3c95418c10cb3c88779628db223fb5d06ae85133b9078062c->enter($__internal_4a8008c9738f67e3c95418c10cb3c88779628db223fb5d06ae85133b9078062c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8682439e0ba3c2417ee5da9e53d08a7238160b60b3d0a29db0339594a194e2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8682439e0ba3c2417ee5da9e53d08a7238160b60b3d0a29db0339594a194e2fd->enter($__internal_8682439e0ba3c2417ee5da9e53d08a7238160b60b3d0a29db0339594a194e2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "isActive", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Legajo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "legajo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "iduser", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("iduser" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "iduser", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8682439e0ba3c2417ee5da9e53d08a7238160b60b3d0a29db0339594a194e2fd->leave($__internal_8682439e0ba3c2417ee5da9e53d08a7238160b60b3d0a29db0339594a194e2fd_prof);

        
        $__internal_4a8008c9738f67e3c95418c10cb3c88779628db223fb5d06ae85133b9078062c->leave($__internal_4a8008c9738f67e3c95418c10cb3c88779628db223fb5d06ae85133b9078062c_prof);

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

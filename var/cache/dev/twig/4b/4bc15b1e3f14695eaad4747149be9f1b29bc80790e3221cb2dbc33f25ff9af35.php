<?php

/* :user:index.html.twig */
class __TwigTemplate_44c986cc20ae187307f727f64bcf3762179fcb1d69dbc27d43a970d0702489b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_67bbb220ce7d0a3bdfcd711f5c8a1122a8b97132de61f4fd5e1f9136abe3748a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bbb220ce7d0a3bdfcd711f5c8a1122a8b97132de61f4fd5e1f9136abe3748a->enter($__internal_67bbb220ce7d0a3bdfcd711f5c8a1122a8b97132de61f4fd5e1f9136abe3748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_6e3af1addb81c597178f67924f84934e654b14c1618b9e86f3e5132f5a91c8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3af1addb81c597178f67924f84934e654b14c1618b9e86f3e5132f5a91c8ac->enter($__internal_6e3af1addb81c597178f67924f84934e654b14c1618b9e86f3e5132f5a91c8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67bbb220ce7d0a3bdfcd711f5c8a1122a8b97132de61f4fd5e1f9136abe3748a->leave($__internal_67bbb220ce7d0a3bdfcd711f5c8a1122a8b97132de61f4fd5e1f9136abe3748a_prof);

        
        $__internal_6e3af1addb81c597178f67924f84934e654b14c1618b9e86f3e5132f5a91c8ac->leave($__internal_6e3af1addb81c597178f67924f84934e654b14c1618b9e86f3e5132f5a91c8ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68253d0d6bc2a36fe266841760f37e97d3efa2876c34eeb4be36516c980dc916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68253d0d6bc2a36fe266841760f37e97d3efa2876c34eeb4be36516c980dc916->enter($__internal_68253d0d6bc2a36fe266841760f37e97d3efa2876c34eeb4be36516c980dc916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e709505a8f785116d20afa3fc76a89daa576d935963e7f574c13a2c061e1899f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e709505a8f785116d20afa3fc76a89daa576d935963e7f574c13a2c061e1899f->enter($__internal_e709505a8f785116d20afa3fc76a89daa576d935963e7f574c13a2c061e1899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e709505a8f785116d20afa3fc76a89daa576d935963e7f574c13a2c061e1899f->leave($__internal_e709505a8f785116d20afa3fc76a89daa576d935963e7f574c13a2c061e1899f_prof);

        
        $__internal_68253d0d6bc2a36fe266841760f37e97d3efa2876c34eeb4be36516c980dc916->leave($__internal_68253d0d6bc2a36fe266841760f37e97d3efa2876c34eeb4be36516c980dc916_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
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
", ":user:index.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/user/index.html.twig");
    }
}

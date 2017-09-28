<?php

/* user/portada.html.twig */
class __TwigTemplate_1a3381b69fa4dec8dba7129146c952bb0ea1b00545a362ae3c196fdc533da90c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/portada.html.twig", 1);
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
        $__internal_c2e454264dbe8daafd0c677fcf8744fdcc4efc5b3380028f73fdbd54800727b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e454264dbe8daafd0c677fcf8744fdcc4efc5b3380028f73fdbd54800727b2->enter($__internal_c2e454264dbe8daafd0c677fcf8744fdcc4efc5b3380028f73fdbd54800727b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/portada.html.twig"));

        $__internal_a661fb5e49018d093c84f992295494629e9034e70a05f3816b7137f47ca235f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a661fb5e49018d093c84f992295494629e9034e70a05f3816b7137f47ca235f5->enter($__internal_a661fb5e49018d093c84f992295494629e9034e70a05f3816b7137f47ca235f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/portada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2e454264dbe8daafd0c677fcf8744fdcc4efc5b3380028f73fdbd54800727b2->leave($__internal_c2e454264dbe8daafd0c677fcf8744fdcc4efc5b3380028f73fdbd54800727b2_prof);

        
        $__internal_a661fb5e49018d093c84f992295494629e9034e70a05f3816b7137f47ca235f5->leave($__internal_a661fb5e49018d093c84f992295494629e9034e70a05f3816b7137f47ca235f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c2d65851657f1812bce3328e3ff7f7000d9f2f0cf9360e2a5de6cf4de67db8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2d65851657f1812bce3328e3ff7f7000d9f2f0cf9360e2a5de6cf4de67db8b->enter($__internal_7c2d65851657f1812bce3328e3ff7f7000d9f2f0cf9360e2a5de6cf4de67db8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dba4d09cd40fba6e2412ee02c00a29680f843afada6c4746751065d965fe84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dba4d09cd40fba6e2412ee02c00a29680f843afada6c4746751065d965fe84f->enter($__internal_0dba4d09cd40fba6e2412ee02c00a29680f843afada6c4746751065d965fe84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <div id=\"contenido\" >
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h1 class=\"panel-title\">Lista de usuarios</h1>
            </div>

            <div class=\"panel-body\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Is activa</th>
                        <th>Mail</th>
                        <th>Legajo</th>
                        <th>idUser</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "                     <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => $this->getAttribute($context["user"], "iduser", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "legajo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "iduser", array()), "html", null, true);
            echo "</td>
                <td>
                    
                        
                            <a class=\"btn btn-primary\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => $this->getAttribute($context["user"], "iduser", array()))), "html", null, true);
            echo "\">show</a>
                        
                            <a class=\"btn btn-primary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("iduser" => $this->getAttribute($context["user"], "iduser", array()))), "html", null, true);
            echo "\">edit</a>
                        
                    
                </td>
            </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
    </table>

    <ul>
        
            
            <a class=\"btn btn-primary\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\" role=\"button\">Crear un nuevo usuario</a> 
    </ul>

";
        
        $__internal_0dba4d09cd40fba6e2412ee02c00a29680f843afada6c4746751065d965fe84f->leave($__internal_0dba4d09cd40fba6e2412ee02c00a29680f843afada6c4746751065d965fe84f_prof);

        
        $__internal_7c2d65851657f1812bce3328e3ff7f7000d9f2f0cf9360e2a5de6cf4de67db8b->leave($__internal_7c2d65851657f1812bce3328e3ff7f7000d9f2f0cf9360e2a5de6cf4de67db8b_prof);

    }

    public function getTemplateName()
    {
        return "user/portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  128 => 43,  116 => 37,  111 => 35,  104 => 31,  100 => 30,  96 => 29,  88 => 28,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
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
     <div id=\"contenido\" >
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h1 class=\"panel-title\">Lista de usuarios</h1>
            </div>

            <div class=\"panel-body\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Is activa</th>
                        <th>Mail</th>
                        <th>Legajo</th>
                        <th>idUser</th>
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
                    
                        
                            <a class=\"btn btn-primary\" href=\"{{ path('user_show', { 'iduser': user.iduser }) }}\">show</a>
                        
                            <a class=\"btn btn-primary\" href=\"{{ path('user_edit', { 'iduser': user.iduser }) }}\">edit</a>
                        
                    
                </td>
            </tr>
                {% endfor %}
            </tbody>
    </table>

    <ul>
        
            
            <a class=\"btn btn-primary\" href=\"{{ path('user_new') }}\" role=\"button\">Crear un nuevo usuario</a> 
    </ul>

{% endblock %}
", "user/portada.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\user\\portada.html.twig");
    }
}

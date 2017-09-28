<?php

/* :token:show.html.twig */
class __TwigTemplate_77042b58b9f2d254306ca827098947d07fddf2161083f235431b0d316558cbc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":token:show.html.twig", 1);
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
        $__internal_f8c8746d88a7915adb629bda83b7a98a93094a7017ab10ce9dd2cae9f9f4ca21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c8746d88a7915adb629bda83b7a98a93094a7017ab10ce9dd2cae9f9f4ca21->enter($__internal_f8c8746d88a7915adb629bda83b7a98a93094a7017ab10ce9dd2cae9f9f4ca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":token:show.html.twig"));

        $__internal_b3f08704259593f01b020b777b93a2ed3bd5130af9bd0c94545a8f827192aa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f08704259593f01b020b777b93a2ed3bd5130af9bd0c94545a8f827192aa11->enter($__internal_b3f08704259593f01b020b777b93a2ed3bd5130af9bd0c94545a8f827192aa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":token:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c8746d88a7915adb629bda83b7a98a93094a7017ab10ce9dd2cae9f9f4ca21->leave($__internal_f8c8746d88a7915adb629bda83b7a98a93094a7017ab10ce9dd2cae9f9f4ca21_prof);

        
        $__internal_b3f08704259593f01b020b777b93a2ed3bd5130af9bd0c94545a8f827192aa11->leave($__internal_b3f08704259593f01b020b777b93a2ed3bd5130af9bd0c94545a8f827192aa11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_099e26ceaa8aa38f7fec7b6660b5f24e64aaf3250a7424d3ba0b265f8faeb5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099e26ceaa8aa38f7fec7b6660b5f24e64aaf3250a7424d3ba0b265f8faeb5c4->enter($__internal_099e26ceaa8aa38f7fec7b6660b5f24e64aaf3250a7424d3ba0b265f8faeb5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52296e467ce020cc0739b7f53f04f22ca137887a0bcf9df8e2087d9580c22d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52296e467ce020cc0739b7f53f04f22ca137887a0bcf9df8e2087d9580c22d37->enter($__internal_52296e467ce020cc0739b7f53f04f22ca137887a0bcf9df8e2087d9580c22d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Token</h1>

    <table>
        <tbody>
            <tr>
                <th>Creado</th>
                <td>";
        // line 10
        if ($this->getAttribute(($context["token"] ?? $this->getContext($context, "token")), "creado", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["token"] ?? $this->getContext($context, "token")), "creado", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["token"] ?? $this->getContext($context, "token")), "token", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idtoken</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["token"] ?? $this->getContext($context, "token")), "idtoken", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_52296e467ce020cc0739b7f53f04f22ca137887a0bcf9df8e2087d9580c22d37->leave($__internal_52296e467ce020cc0739b7f53f04f22ca137887a0bcf9df8e2087d9580c22d37_prof);

        
        $__internal_099e26ceaa8aa38f7fec7b6660b5f24e64aaf3250a7424d3ba0b265f8faeb5c4->leave($__internal_099e26ceaa8aa38f7fec7b6660b5f24e64aaf3250a7424d3ba0b265f8faeb5c4_prof);

    }

    public function getTemplateName()
    {
        return ":token:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  73 => 18,  66 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Token</h1>

    <table>
        <tbody>
            <tr>
                <th>Creado</th>
                <td>{% if token.creado %}{{ token.creado|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>{{ token.token }}</td>
            </tr>
            <tr>
                <th>Idtoken</th>
                <td>{{ token.idtoken }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('token_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":token:show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/token/show.html.twig");
    }
}

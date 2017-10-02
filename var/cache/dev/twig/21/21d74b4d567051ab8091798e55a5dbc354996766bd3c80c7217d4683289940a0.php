<?php

/* token/show.html.twig */
class __TwigTemplate_0a45eec54e94b9fcf62ae51b09131ce5beb2cd64413de7a5c2f40c8472c61ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "token/show.html.twig", 1);
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
        $__internal_3099e7907e056d7a2ad0cbe03125c1658acf595e351794f0d60545252f981a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3099e7907e056d7a2ad0cbe03125c1658acf595e351794f0d60545252f981a35->enter($__internal_3099e7907e056d7a2ad0cbe03125c1658acf595e351794f0d60545252f981a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "token/show.html.twig"));

        $__internal_7e2bae445ee63527e6d70c19fa1900028c91df964a2465082b3ab619dd277a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2bae445ee63527e6d70c19fa1900028c91df964a2465082b3ab619dd277a76->enter($__internal_7e2bae445ee63527e6d70c19fa1900028c91df964a2465082b3ab619dd277a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "token/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3099e7907e056d7a2ad0cbe03125c1658acf595e351794f0d60545252f981a35->leave($__internal_3099e7907e056d7a2ad0cbe03125c1658acf595e351794f0d60545252f981a35_prof);

        
        $__internal_7e2bae445ee63527e6d70c19fa1900028c91df964a2465082b3ab619dd277a76->leave($__internal_7e2bae445ee63527e6d70c19fa1900028c91df964a2465082b3ab619dd277a76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcb57bc59d3310498ee38fdf44ae8118e7a84e2c759376244015cdbd356ffd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb57bc59d3310498ee38fdf44ae8118e7a84e2c759376244015cdbd356ffd32->enter($__internal_dcb57bc59d3310498ee38fdf44ae8118e7a84e2c759376244015cdbd356ffd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_920fdad576d78b8c223f24fad45477b43f93e84a799584cde5b2808db2a9c953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920fdad576d78b8c223f24fad45477b43f93e84a799584cde5b2808db2a9c953->enter($__internal_920fdad576d78b8c223f24fad45477b43f93e84a799584cde5b2808db2a9c953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_920fdad576d78b8c223f24fad45477b43f93e84a799584cde5b2808db2a9c953->leave($__internal_920fdad576d78b8c223f24fad45477b43f93e84a799584cde5b2808db2a9c953_prof);

        
        $__internal_dcb57bc59d3310498ee38fdf44ae8118e7a84e2c759376244015cdbd356ffd32->leave($__internal_dcb57bc59d3310498ee38fdf44ae8118e7a84e2c759376244015cdbd356ffd32_prof);

    }

    public function getTemplateName()
    {
        return "token/show.html.twig";
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
", "token/show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\token\\show.html.twig");
    }
}

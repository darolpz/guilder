<?php

/* :comision:show.html.twig */
class __TwigTemplate_2c00f0758fa08a9187865db0f9f6fa34c6477366d67e35b3de59fce64ebfbc7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comision:show.html.twig", 1);
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
        $__internal_28af7ce7904eee6560d4c3b44a30fe998a998123b4c2d5821a91740098c59b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28af7ce7904eee6560d4c3b44a30fe998a998123b4c2d5821a91740098c59b6f->enter($__internal_28af7ce7904eee6560d4c3b44a30fe998a998123b4c2d5821a91740098c59b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:show.html.twig"));

        $__internal_476ae8a31ce6969396a451549af9843926c2fc7f24e42e824d11cf7f9f4da037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476ae8a31ce6969396a451549af9843926c2fc7f24e42e824d11cf7f9f4da037->enter($__internal_476ae8a31ce6969396a451549af9843926c2fc7f24e42e824d11cf7f9f4da037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comision:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28af7ce7904eee6560d4c3b44a30fe998a998123b4c2d5821a91740098c59b6f->leave($__internal_28af7ce7904eee6560d4c3b44a30fe998a998123b4c2d5821a91740098c59b6f_prof);

        
        $__internal_476ae8a31ce6969396a451549af9843926c2fc7f24e42e824d11cf7f9f4da037->leave($__internal_476ae8a31ce6969396a451549af9843926c2fc7f24e42e824d11cf7f9f4da037_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27091cf379b46048ed7ab90c19e3654bab1b707024be9ed49f95ed03ab1dd105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27091cf379b46048ed7ab90c19e3654bab1b707024be9ed49f95ed03ab1dd105->enter($__internal_27091cf379b46048ed7ab90c19e3654bab1b707024be9ed49f95ed03ab1dd105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_124ab7cf88aab70acb9fa126c6fc337869c211ab350f372185ee50271c3741f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124ab7cf88aab70acb9fa126c6fc337869c211ab350f372185ee50271c3741f3->enter($__internal_124ab7cf88aab70acb9fa126c6fc337869c211ab350f372185ee50271c3741f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comision</h1>

    <table>
        <tbody>
            <tr>
                <th>Numero</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profesor</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "profesor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuatrimestre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "cuatrimestre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "year", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcomision</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "idcomision", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_edit", array("idcomision" => $this->getAttribute(($context["comision"] ?? $this->getContext($context, "comision")), "idcomision", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_124ab7cf88aab70acb9fa126c6fc337869c211ab350f372185ee50271c3741f3->leave($__internal_124ab7cf88aab70acb9fa126c6fc337869c211ab350f372185ee50271c3741f3_prof);

        
        $__internal_27091cf379b46048ed7ab90c19e3654bab1b707024be9ed49f95ed03ab1dd105->leave($__internal_27091cf379b46048ed7ab90c19e3654bab1b707024be9ed49f95ed03ab1dd105_prof);

    }

    public function getTemplateName()
    {
        return ":comision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
", ":comision:show.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/comision/show.html.twig");
    }
}

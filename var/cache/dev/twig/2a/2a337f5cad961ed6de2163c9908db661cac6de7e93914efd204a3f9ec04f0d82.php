<?php

/* modulo/modulo1.html.twig */
class __TwigTemplate_428dccf65c641b20e67b90555856cb0228eebd9909819151c5c75194fa109227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modulo/modulo1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bd8b09f81c3b66391eb33569d0634ec0343574d872930241bbded3ea3736a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd8b09f81c3b66391eb33569d0634ec0343574d872930241bbded3ea3736a77->enter($__internal_6bd8b09f81c3b66391eb33569d0634ec0343574d872930241bbded3ea3736a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo1.html.twig"));

        $__internal_efc946ca692ebf6c54610f37d899f8e724311f321976097c2e25ae5ea385b987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc946ca692ebf6c54610f37d899f8e724311f321976097c2e25ae5ea385b987->enter($__internal_efc946ca692ebf6c54610f37d899f8e724311f321976097c2e25ae5ea385b987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd8b09f81c3b66391eb33569d0634ec0343574d872930241bbded3ea3736a77->leave($__internal_6bd8b09f81c3b66391eb33569d0634ec0343574d872930241bbded3ea3736a77_prof);

        
        $__internal_efc946ca692ebf6c54610f37d899f8e724311f321976097c2e25ae5ea385b987->leave($__internal_efc946ca692ebf6c54610f37d899f8e724311f321976097c2e25ae5ea385b987_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c6aabcb218afd67f6e0b3642b587f74e5f3bc04c9b5cac91c88d88a4ca8825c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6aabcb218afd67f6e0b3642b587f74e5f3bc04c9b5cac91c88d88a4ca8825c->enter($__internal_1c6aabcb218afd67f6e0b3642b587f74e5f3bc04c9b5cac91c88d88a4ca8825c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16be2945a5c8c15ce280f46016902b02cf2020728428380c578b39d1864a1f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16be2945a5c8c15ce280f46016902b02cf2020728428380c578b39d1864a1f34->enter($__internal_16be2945a5c8c15ce280f46016902b02cf2020728428380c578b39d1864a1f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Módulo 1 ";
        
        $__internal_16be2945a5c8c15ce280f46016902b02cf2020728428380c578b39d1864a1f34->leave($__internal_16be2945a5c8c15ce280f46016902b02cf2020728428380c578b39d1864a1f34_prof);

        
        $__internal_1c6aabcb218afd67f6e0b3642b587f74e5f3bc04c9b5cac91c88d88a4ca8825c->leave($__internal_1c6aabcb218afd67f6e0b3642b587f74e5f3bc04c9b5cac91c88d88a4ca8825c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9925dc443c74b2f6341eb12249d1a0978b6c2f3d2137e6740f058dfbe2281efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9925dc443c74b2f6341eb12249d1a0978b6c2f3d2137e6740f058dfbe2281efb->enter($__internal_9925dc443c74b2f6341eb12249d1a0978b6c2f3d2137e6740f058dfbe2281efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a84b5deca7ec062216809ffa4c6e1a2ed2933925d06cdb196facb89490e3ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a84b5deca7ec062216809ffa4c6e1a2ed2933925d06cdb196facb89490e3ac0->enter($__internal_1a84b5deca7ec062216809ffa4c6e1a2ed2933925d06cdb196facb89490e3ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal del módulo 1 </h2>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>



<div class=\"container\">
  <h2>Tabla de horarios</h2>
  <p>Probando</p>
 
  <table width=\"300\" class=\"table table-bordered\" >
    <thead>
      <tr class=\"success\">
        <th>Horario</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
      </tr>
    </thead>
    <tbody>
";
        // line 30
        echo "        ";
        $context["hora"] = 8;
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["contador"]) {
            // line 33
            echo "            <tr>
                <td class=\"success\" scope=\"row\" width=\"5\" height=\"2\">";
            // line 34
            echo twig_escape_filter($this->env, ($context["hora"] ?? $this->getContext($context, "hora")), "html", null, true);
            echo ":00</td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td >";
            // line 40
            echo twig_escape_filter($this->env, $context["contador"], "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 42
            $context["hora"] = (($context["hora"] ?? $this->getContext($context, "hora")) + 1);
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
  </table>
</div>

</body>
</html>
    ";
        
        $__internal_1a84b5deca7ec062216809ffa4c6e1a2ed2933925d06cdb196facb89490e3ac0->leave($__internal_1a84b5deca7ec062216809ffa4c6e1a2ed2933925d06cdb196facb89490e3ac0_prof);

        
        $__internal_9925dc443c74b2f6341eb12249d1a0978b6c2f3d2137e6740f058dfbe2281efb->leave($__internal_9925dc443c74b2f6341eb12249d1a0978b6c2f3d2137e6740f058dfbe2281efb_prof);

    }

    public function getTemplateName()
    {
        return "modulo/modulo1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  121 => 49,  119 => 42,  114 => 40,  105 => 34,  102 => 33,  97 => 32,  94 => 30,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %} Módulo 1 {% endblock %}
{% block body %}
<h2> Esta es la página principal del módulo 1 </h2>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>



<div class=\"container\">
  <h2>Tabla de horarios</h2>
  <p>Probando</p>
 
  <table width=\"300\" class=\"table table-bordered\" >
    <thead>
      <tr class=\"success\">
        <th>Horario</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
      </tr>
    </thead>
    <tbody>
{#  tabla      #}
        {% set hora = 8 %}
{#        {% set minutos = '00' %}#}
        {% for contador in 0..14 %}
            <tr>
                <td class=\"success\" scope=\"row\" width=\"5\" height=\"2\">{{hora}}:00</td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td >{{contador}}</td>
            </tr>
            {% set hora=hora+1 %}
{#            {% if minutos=='00' %}
                {% set minutos = 30 %}
            {% else %}
                {% set minutos ='00' %}
                {% set hora=hora+1 %}
            {% endif %}#}
        {% endfor %}
    </tbody>
  </table>
</div>

</body>
</html>
    {% endblock %}", "modulo/modulo1.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo1.html.twig");
    }
}

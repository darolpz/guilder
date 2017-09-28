<?php

/* :modulo:modulo1.html.twig */
class __TwigTemplate_60be38e0a00d0c4f684a75a157771a907fed90bf62040730c6b6a631d30dc426 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":modulo:modulo1.html.twig", 1);
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
        $__internal_0ada40f37e4c188e3ca47cbc5e3f647c8f16e7c2be846c3dab595b9486442351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ada40f37e4c188e3ca47cbc5e3f647c8f16e7c2be846c3dab595b9486442351->enter($__internal_0ada40f37e4c188e3ca47cbc5e3f647c8f16e7c2be846c3dab595b9486442351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulo:modulo1.html.twig"));

        $__internal_5855e5ecd4e540b8aa3dea23606a519343a8e350c3ceb9f80736543175bc3070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5855e5ecd4e540b8aa3dea23606a519343a8e350c3ceb9f80736543175bc3070->enter($__internal_5855e5ecd4e540b8aa3dea23606a519343a8e350c3ceb9f80736543175bc3070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulo:modulo1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ada40f37e4c188e3ca47cbc5e3f647c8f16e7c2be846c3dab595b9486442351->leave($__internal_0ada40f37e4c188e3ca47cbc5e3f647c8f16e7c2be846c3dab595b9486442351_prof);

        
        $__internal_5855e5ecd4e540b8aa3dea23606a519343a8e350c3ceb9f80736543175bc3070->leave($__internal_5855e5ecd4e540b8aa3dea23606a519343a8e350c3ceb9f80736543175bc3070_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbfe07bfd5493b5469ffd4fb8cc2c3813408cb5ff6e67dbaa0f7bc283669d81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfe07bfd5493b5469ffd4fb8cc2c3813408cb5ff6e67dbaa0f7bc283669d81b->enter($__internal_bbfe07bfd5493b5469ffd4fb8cc2c3813408cb5ff6e67dbaa0f7bc283669d81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26bb4acabaf1a033bfd2dea47e31357f8055a63373d83ab72c5caddfaa446b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bb4acabaf1a033bfd2dea47e31357f8055a63373d83ab72c5caddfaa446b62->enter($__internal_26bb4acabaf1a033bfd2dea47e31357f8055a63373d83ab72c5caddfaa446b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Módulo 1 ";
        
        $__internal_26bb4acabaf1a033bfd2dea47e31357f8055a63373d83ab72c5caddfaa446b62->leave($__internal_26bb4acabaf1a033bfd2dea47e31357f8055a63373d83ab72c5caddfaa446b62_prof);

        
        $__internal_bbfe07bfd5493b5469ffd4fb8cc2c3813408cb5ff6e67dbaa0f7bc283669d81b->leave($__internal_bbfe07bfd5493b5469ffd4fb8cc2c3813408cb5ff6e67dbaa0f7bc283669d81b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd727177a24720b962a97cfab3644d30a112e2e4f153841e18d0fd89c0b0d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd727177a24720b962a97cfab3644d30a112e2e4f153841e18d0fd89c0b0d29->enter($__internal_9fd727177a24720b962a97cfab3644d30a112e2e4f153841e18d0fd89c0b0d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7685a16b130bf59369b693cd64d9fa37bc57ecf00ad2643fef2e4e6347c0eb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7685a16b130bf59369b693cd64d9fa37bc57ecf00ad2643fef2e4e6347c0eb5f->enter($__internal_7685a16b130bf59369b693cd64d9fa37bc57ecf00ad2643fef2e4e6347c0eb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal del módulo 1 </h2>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>



<div class=\"container\">
  <h2>Tabla de horarios</h2>
  <p>Probando</p>
 
  <table width=\"450\" class=\"table table-bordered\" >
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
        
        $__internal_7685a16b130bf59369b693cd64d9fa37bc57ecf00ad2643fef2e4e6347c0eb5f->leave($__internal_7685a16b130bf59369b693cd64d9fa37bc57ecf00ad2643fef2e4e6347c0eb5f_prof);

        
        $__internal_9fd727177a24720b962a97cfab3644d30a112e2e4f153841e18d0fd89c0b0d29->leave($__internal_9fd727177a24720b962a97cfab3644d30a112e2e4f153841e18d0fd89c0b0d29_prof);

    }

    public function getTemplateName()
    {
        return ":modulo:modulo1.html.twig";
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
 
  <table width=\"450\" class=\"table table-bordered\" >
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
    {% endblock %}", ":modulo:modulo1.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/modulo/modulo1.html.twig");
    }
}

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
        $__internal_5fa999d36b083482fbb8effe09ce5c88fadabc1ebc43be4da932f1bb1585a471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa999d36b083482fbb8effe09ce5c88fadabc1ebc43be4da932f1bb1585a471->enter($__internal_5fa999d36b083482fbb8effe09ce5c88fadabc1ebc43be4da932f1bb1585a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo1.html.twig"));

        $__internal_f4f14c1888b65ca0a5c7317036a422fd749c4972ee552d6784c432c7c57c64b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f14c1888b65ca0a5c7317036a422fd749c4972ee552d6784c432c7c57c64b4->enter($__internal_f4f14c1888b65ca0a5c7317036a422fd749c4972ee552d6784c432c7c57c64b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fa999d36b083482fbb8effe09ce5c88fadabc1ebc43be4da932f1bb1585a471->leave($__internal_5fa999d36b083482fbb8effe09ce5c88fadabc1ebc43be4da932f1bb1585a471_prof);

        
        $__internal_f4f14c1888b65ca0a5c7317036a422fd749c4972ee552d6784c432c7c57c64b4->leave($__internal_f4f14c1888b65ca0a5c7317036a422fd749c4972ee552d6784c432c7c57c64b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e61b3bbf065a10777d65c887c6aa20b1fe4c4525c5ca436de1e698fce8d6136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e61b3bbf065a10777d65c887c6aa20b1fe4c4525c5ca436de1e698fce8d6136->enter($__internal_9e61b3bbf065a10777d65c887c6aa20b1fe4c4525c5ca436de1e698fce8d6136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_880f7880c03002069e99991469530c092f86c56b73ddae1c783e7470809452d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880f7880c03002069e99991469530c092f86c56b73ddae1c783e7470809452d8->enter($__internal_880f7880c03002069e99991469530c092f86c56b73ddae1c783e7470809452d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Módulo 1 ";
        
        $__internal_880f7880c03002069e99991469530c092f86c56b73ddae1c783e7470809452d8->leave($__internal_880f7880c03002069e99991469530c092f86c56b73ddae1c783e7470809452d8_prof);

        
        $__internal_9e61b3bbf065a10777d65c887c6aa20b1fe4c4525c5ca436de1e698fce8d6136->leave($__internal_9e61b3bbf065a10777d65c887c6aa20b1fe4c4525c5ca436de1e698fce8d6136_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b397f8477b13ccf46c6e807b9c5e68cc2b8273b7d678b40d3483d46e69387e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b397f8477b13ccf46c6e807b9c5e68cc2b8273b7d678b40d3483d46e69387e0->enter($__internal_0b397f8477b13ccf46c6e807b9c5e68cc2b8273b7d678b40d3483d46e69387e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82a94207b5e915b556b6b6458954b6f74453fa4147d9b9c95b68f7cf619085e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a94207b5e915b556b6b6458954b6f74453fa4147d9b9c95b68f7cf619085e5->enter($__internal_82a94207b5e915b556b6b6458954b6f74453fa4147d9b9c95b68f7cf619085e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 31
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["contador"]) {
            // line 32
            echo "            <tr>
                <td class=\"success\" scope=\"row\" width=\"5\" height=\"2\">";
            // line 33
            echo twig_escape_filter($this->env, ($context["hora"] ?? $this->getContext($context, "hora")), "html", null, true);
            echo ":00</td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td width=\"30\"></td>
                <td >";
            // line 39
            echo twig_escape_filter($this->env, $context["contador"], "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 41
            $context["hora"] = (($context["hora"] ?? $this->getContext($context, "hora")) + 1);
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
  </table>
</div>

</body>
</html>
    ";
        
        $__internal_82a94207b5e915b556b6b6458954b6f74453fa4147d9b9c95b68f7cf619085e5->leave($__internal_82a94207b5e915b556b6b6458954b6f74453fa4147d9b9c95b68f7cf619085e5_prof);

        
        $__internal_0b397f8477b13ccf46c6e807b9c5e68cc2b8273b7d678b40d3483d46e69387e0->leave($__internal_0b397f8477b13ccf46c6e807b9c5e68cc2b8273b7d678b40d3483d46e69387e0_prof);

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
        return array (  127 => 49,  121 => 48,  119 => 41,  114 => 39,  105 => 33,  102 => 32,  97 => 31,  94 => 30,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

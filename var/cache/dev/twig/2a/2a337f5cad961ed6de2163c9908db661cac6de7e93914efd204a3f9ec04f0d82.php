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
        $__internal_776139faeafbd22130dda7a1317bf17f4629c534deee35fb2b0f6edba739142e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776139faeafbd22130dda7a1317bf17f4629c534deee35fb2b0f6edba739142e->enter($__internal_776139faeafbd22130dda7a1317bf17f4629c534deee35fb2b0f6edba739142e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo1.html.twig"));

        $__internal_a2017c631b4bdc8a4dd89d59f24140a0c0cd4b0165e6081b7a7d4d975708093c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2017c631b4bdc8a4dd89d59f24140a0c0cd4b0165e6081b7a7d4d975708093c->enter($__internal_a2017c631b4bdc8a4dd89d59f24140a0c0cd4b0165e6081b7a7d4d975708093c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776139faeafbd22130dda7a1317bf17f4629c534deee35fb2b0f6edba739142e->leave($__internal_776139faeafbd22130dda7a1317bf17f4629c534deee35fb2b0f6edba739142e_prof);

        
        $__internal_a2017c631b4bdc8a4dd89d59f24140a0c0cd4b0165e6081b7a7d4d975708093c->leave($__internal_a2017c631b4bdc8a4dd89d59f24140a0c0cd4b0165e6081b7a7d4d975708093c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd16c132d0e469c0aacada00188968b729bde7c88fd0c8f2f5d093b40422c72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd16c132d0e469c0aacada00188968b729bde7c88fd0c8f2f5d093b40422c72c->enter($__internal_dd16c132d0e469c0aacada00188968b729bde7c88fd0c8f2f5d093b40422c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c8f8117c7a4107120ecd76f6e82b3fa7fdb4ec032dd2d2b587bfaa835468202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8f8117c7a4107120ecd76f6e82b3fa7fdb4ec032dd2d2b587bfaa835468202->enter($__internal_6c8f8117c7a4107120ecd76f6e82b3fa7fdb4ec032dd2d2b587bfaa835468202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Módulo 1 ";
        
        $__internal_6c8f8117c7a4107120ecd76f6e82b3fa7fdb4ec032dd2d2b587bfaa835468202->leave($__internal_6c8f8117c7a4107120ecd76f6e82b3fa7fdb4ec032dd2d2b587bfaa835468202_prof);

        
        $__internal_dd16c132d0e469c0aacada00188968b729bde7c88fd0c8f2f5d093b40422c72c->leave($__internal_dd16c132d0e469c0aacada00188968b729bde7c88fd0c8f2f5d093b40422c72c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_60ff9964f7bec0d90958e00fc5d480e4a159a4e1c0efd3348f0d93fdec235dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ff9964f7bec0d90958e00fc5d480e4a159a4e1c0efd3348f0d93fdec235dc4->enter($__internal_60ff9964f7bec0d90958e00fc5d480e4a159a4e1c0efd3348f0d93fdec235dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bfbcafaee056fbd33713c32547c060a7966d88dc7228980132904d79cdcf270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfbcafaee056fbd33713c32547c060a7966d88dc7228980132904d79cdcf270->enter($__internal_4bfbcafaee056fbd33713c32547c060a7966d88dc7228980132904d79cdcf270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal del módulo 1 </h2>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"timetablejs.css\">
<script src=\"timetable.min.js\"></script>


";
        // line 14
        echo "
    <div class=\"hero-unit\">
      <h1>Timetable.js demo</h1>
      <p>Vanilla javascript plugin for building nice responsive timetables. More info on <a href=\"https://github.com/Grible/timetable.js\" target=\"_blank\">Github</a>.</p>
    </div>

    <div class=\"timetable\"><aside><ul><li><span class=\"row-heading\">Rotterdam</span></li><li><span class=\"row-heading\">Madrid</span></li><li><span class=\"row-heading\">Los Angeles</span></li><li><span class=\"row-heading\">London</span></li><li><span class=\"row-heading\">New York</span></li><li><span class=\"row-heading\">Jakarta</span></li><li><span class=\"row-heading\">Tokyo</span></li></ul></aside><section><time><header><ul><li><span class=\"time-label\">09:00</span></li><li><span class=\"time-label\">10:00</span></li><li><span class=\"time-label\">11:00</span></li><li><span class=\"time-label\">12:00</span></li><li><span class=\"time-label\">13:00</span></li><li><span class=\"time-label\">14:00</span></li><li><span class=\"time-label\">15:00</span></li><li><span class=\"time-label\">16:00</span></li><li><span class=\"time-label\">17:00</span></li><li><span class=\"time-label\">18:00</span></li><li><span class=\"time-label\">19:00</span></li><li><span class=\"time-label\">20:00</span></li><li><span class=\"time-label\">21:00</span></li><li><span class=\"time-label\">22:00</span></li><li><span class=\"time-label\">23:00</span></li><li><span class=\"time-label\">00:00</span></li><li><span class=\"time-label\">01:00</span></li><li><span class=\"time-label\">02:00</span></li></ul></header><ul class=\"room-timeline\"><li><a title=\"Sightseeing\" href=\"#\" class=\"time-entry\" style=\"width: 10.2941%; left: 10.2941%;\"><small>Sightseeing</small></a></li><li><a title=\"Zumba\" href=\"#\" class=\"time-entry\" style=\"width: 5.88235%; left: 17.6471%;\"><small>Zumba</small></a><a title=\"Zumbu\" href=\"#\" class=\"time-entry\" style=\"width: 8.82353%; left: 26.4706%;\"><small>Zumbu</small></a></li><li><span title=\"Tokyo Hackathon Livestream\" class=\"time-entry\" style=\"width: 22.0588%; left: 20.5882%;\"><small>Tokyo Hackathon Livestream</small></span></li><li><a title=\"Lasergaming\" href=\"#\" class=\"time-entry\" style=\"width: 10.2941%; left: 51.4706%;\"><small>Lasergaming</small></a></li><li><a title=\"All-you-can-eat grill\" href=\"#\" class=\"time-entry\" style=\"width: 26.4706%; left: 70.5882%;\"><small>All-you-can-eat grill</small></a></li><li><a title=\"Lunch\" href=\"#\" class=\"time-entry\" style=\"width: 13.2353%; left: 2.94118%;\"><small>Lunch</small></a></li><li><span title=\"Hackathon\" class=\"time-entry\" style=\"width: 50%; left: 14.7059%;\"><small>Hackathon</small></span></li></ul></time></section></div>
    
    <script src=\"//www.google-analytics.com/analytics.js\"></script><script src=\"scripts/timetable.min.js\"></script>

    <script>
      var timetable = new Timetable();

      timetable.setScope(9,2)

      timetable.addLocations(['Rotterdam', 'Madrid', 'Los Angeles', 'London', 'New York', 'Jakarta', 'Tokyo']);

      timetable.addEvent('Sightseeing', 'Rotterdam', new Date(2015,7,17,10,45), new Date(2015,7,17,12,30), '#');
      timetable.addEvent('Zumba', 'Madrid', new Date(2015,7,17,12), new Date(2015,7,17,13), '#');
      timetable.addEvent('Zumbu', 'Madrid', new Date(2015,7,17,13,30), new Date(2015,7,17,15), '#');
      timetable.addEvent('Lasergaming', 'London', new Date(2015,7,17,17,45), new Date(2015,7,17,19,30), '#');
      timetable.addEvent('All-you-can-eat grill', 'New York', new Date(2015,7,17,21), new Date(2015,7,18,1,30), '#');
      timetable.addEvent('Hackathon', 'Tokyo', new Date(2015,7,17,11,30), new Date(2015,7,17,20)); // url is optional and is not used for this event
      timetable.addEvent('Tokyo Hackathon Livestream', 'Los Angeles', new Date(2015,7,17,12,30), new Date(2015,7,17,16,15)); // url is optional and is not used for this event
      timetable.addEvent('Lunch', 'Jakarta', new Date(2015,7,17,9,30), new Date(2015,7,17,11,45), '#');

      var renderer = new Timetable.Renderer(timetable);
      renderer.draw('.timetable');
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-37417680-5');ga('send','pageview');
    </script>


</body>


";
        // line 64
        echo "
";
        // line 105
        echo "
";
        // line 107
        echo "</html>
    ";
        
        $__internal_4bfbcafaee056fbd33713c32547c060a7966d88dc7228980132904d79cdcf270->leave($__internal_4bfbcafaee056fbd33713c32547c060a7966d88dc7228980132904d79cdcf270_prof);

        
        $__internal_60ff9964f7bec0d90958e00fc5d480e4a159a4e1c0efd3348f0d93fdec235dc4->leave($__internal_60ff9964f7bec0d90958e00fc5d480e4a159a4e1c0efd3348f0d93fdec235dc4_prof);

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
        return array (  130 => 107,  127 => 105,  124 => 64,  78 => 14,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
<link rel=\"stylesheet\" href=\"timetablejs.css\">
<script src=\"timetable.min.js\"></script>


{#<body>#}

    <div class=\"hero-unit\">
      <h1>Timetable.js demo</h1>
      <p>Vanilla javascript plugin for building nice responsive timetables. More info on <a href=\"https://github.com/Grible/timetable.js\" target=\"_blank\">Github</a>.</p>
    </div>

    <div class=\"timetable\"><aside><ul><li><span class=\"row-heading\">Rotterdam</span></li><li><span class=\"row-heading\">Madrid</span></li><li><span class=\"row-heading\">Los Angeles</span></li><li><span class=\"row-heading\">London</span></li><li><span class=\"row-heading\">New York</span></li><li><span class=\"row-heading\">Jakarta</span></li><li><span class=\"row-heading\">Tokyo</span></li></ul></aside><section><time><header><ul><li><span class=\"time-label\">09:00</span></li><li><span class=\"time-label\">10:00</span></li><li><span class=\"time-label\">11:00</span></li><li><span class=\"time-label\">12:00</span></li><li><span class=\"time-label\">13:00</span></li><li><span class=\"time-label\">14:00</span></li><li><span class=\"time-label\">15:00</span></li><li><span class=\"time-label\">16:00</span></li><li><span class=\"time-label\">17:00</span></li><li><span class=\"time-label\">18:00</span></li><li><span class=\"time-label\">19:00</span></li><li><span class=\"time-label\">20:00</span></li><li><span class=\"time-label\">21:00</span></li><li><span class=\"time-label\">22:00</span></li><li><span class=\"time-label\">23:00</span></li><li><span class=\"time-label\">00:00</span></li><li><span class=\"time-label\">01:00</span></li><li><span class=\"time-label\">02:00</span></li></ul></header><ul class=\"room-timeline\"><li><a title=\"Sightseeing\" href=\"#\" class=\"time-entry\" style=\"width: 10.2941%; left: 10.2941%;\"><small>Sightseeing</small></a></li><li><a title=\"Zumba\" href=\"#\" class=\"time-entry\" style=\"width: 5.88235%; left: 17.6471%;\"><small>Zumba</small></a><a title=\"Zumbu\" href=\"#\" class=\"time-entry\" style=\"width: 8.82353%; left: 26.4706%;\"><small>Zumbu</small></a></li><li><span title=\"Tokyo Hackathon Livestream\" class=\"time-entry\" style=\"width: 22.0588%; left: 20.5882%;\"><small>Tokyo Hackathon Livestream</small></span></li><li><a title=\"Lasergaming\" href=\"#\" class=\"time-entry\" style=\"width: 10.2941%; left: 51.4706%;\"><small>Lasergaming</small></a></li><li><a title=\"All-you-can-eat grill\" href=\"#\" class=\"time-entry\" style=\"width: 26.4706%; left: 70.5882%;\"><small>All-you-can-eat grill</small></a></li><li><a title=\"Lunch\" href=\"#\" class=\"time-entry\" style=\"width: 13.2353%; left: 2.94118%;\"><small>Lunch</small></a></li><li><span title=\"Hackathon\" class=\"time-entry\" style=\"width: 50%; left: 14.7059%;\"><small>Hackathon</small></span></li></ul></time></section></div>
    
    <script src=\"//www.google-analytics.com/analytics.js\"></script><script src=\"scripts/timetable.min.js\"></script>

    <script>
      var timetable = new Timetable();

      timetable.setScope(9,2)

      timetable.addLocations(['Rotterdam', 'Madrid', 'Los Angeles', 'London', 'New York', 'Jakarta', 'Tokyo']);

      timetable.addEvent('Sightseeing', 'Rotterdam', new Date(2015,7,17,10,45), new Date(2015,7,17,12,30), '#');
      timetable.addEvent('Zumba', 'Madrid', new Date(2015,7,17,12), new Date(2015,7,17,13), '#');
      timetable.addEvent('Zumbu', 'Madrid', new Date(2015,7,17,13,30), new Date(2015,7,17,15), '#');
      timetable.addEvent('Lasergaming', 'London', new Date(2015,7,17,17,45), new Date(2015,7,17,19,30), '#');
      timetable.addEvent('All-you-can-eat grill', 'New York', new Date(2015,7,17,21), new Date(2015,7,18,1,30), '#');
      timetable.addEvent('Hackathon', 'Tokyo', new Date(2015,7,17,11,30), new Date(2015,7,17,20)); // url is optional and is not used for this event
      timetable.addEvent('Tokyo Hackathon Livestream', 'Los Angeles', new Date(2015,7,17,12,30), new Date(2015,7,17,16,15)); // url is optional and is not used for this event
      timetable.addEvent('Lunch', 'Jakarta', new Date(2015,7,17,9,30), new Date(2015,7,17,11,45), '#');

      var renderer = new Timetable.Renderer(timetable);
      renderer.draw('.timetable');
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-37417680-5');ga('send','pageview');
    </script>


</body>


{#<div class=\"timetable\">
    <aside><ul><li><span class=\"row-heading\">Rotterdam</span></li><li><span class=\"row-heading\">Madrid</span></li><li><span class=\"row-heading\">Los Angeles</span></li><li><span class=\"row-heading\">London</span></li><li><span class=\"row-heading\">New York</span></li><li><span class=\"row-heading\">Jakarta</span></li><li><span class=\"row-heading\">Tokyo</span></li></ul></aside>
    <section>
        
    </section>
</div>#}

{#<div class=\"container\">
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
{#  tabla      
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
            {% endif %}
        {% endfor %}
    </tbody>
  </table>
</div>#}

{#</body>#}
</html>
    {% endblock %}", "modulo/modulo1.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo1.html.twig");
    }
}

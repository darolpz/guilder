<?php

/* modulo/modulo1.html.twig */
class __TwigTemplate_205870add3428f41bac5b24174f5b91852a808ed621d9116baf06a07d389f583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modulo/modulo1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mod1' => array($this, 'block_mod1'),
            'extras' => array($this, 'block_extras'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Módulo 1 ";
    }

    // line 4
    public function block_mod1($context, array $blocks = array())
    {
        echo "  <li class=\"active\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo1");
        echo "\"> Módulo 1</a></li> ";
    }

    // line 5
    public function block_extras($context, array $blocks = array())
    {
        // line 6
        echo "   <link rel=\"stylesheet\" href=\"../styles/timetablejs.css\">
   <link rel=\"stylesheet\" href=\"../styles/modulos.css\">
   
   <script src=\"https://code.jquery.com/jquery-1.10.2.js\"></script>
   <script src=\"../../scripts/timetable.min.js\"></script>
 ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h2> Esta es la página principal del módulo 1 </h2>

 <div class=\"hero-unit\">
      <h1>Probando</h1>
    </div>
<div id=\"tablas\" class=\"container\">
        
        ";
        // line 21
        echo "        <div id=\"tablaMaterias\">
            <table class=\"table\" style=\"max-width:300px; border: 1px solid red;\">
                <thead>
                    <tr>
                        <th>Materias</th>
                    </tr>
                </thead>
                <tbody id=\"bodyMaterias\" style=\"display: block; border: 1px solid green; height: 400px; overflow-y: scroll\">
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materias"]) ? $context["materias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["materia"]) {
            echo "   
                    <tr class=\"active\">
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td><button id=\"btMateria\" type=\"button\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "codigo", array()), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Añadir</button></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
            </table>
        </div>
        <div id=\"tablaComisiones\">
            <table id=\"bodyComisiones\" class=\"table\" id=\"comisiones\" style=\"max-width:300px; border: 1px solid red;\">
                <thead>
                    <tr>
                        <th>Comisiones</th>
                    </tr>
                </thead>
                <tbody style=\"display: block; border: 1px solid green; height: 400px; overflow-y: scroll\">

                    ";
        // line 55
        echo "                </tbody>
            </table>
        </div>
</div>
            
    <div class=\"timetable\">
        <aside>
            <ul>
                <li>
                    <span class=\"row-heading\">Lunes</span>
                </li>
                <li><span class=\"row-heading\">Martes</span></li>
                <li><span class=\"row-heading\">Miercoles</span></li>
                <li><span class=\"row-heading\">Jueves</span></li>
                <li><span class=\"row-heading\">Viernes</span></li>
                <li><span class=\"row-heading\">Sabado</span></li>
        </aside>
        <section>
            <time>
                <header>
                    <ul>
                        <li>
                            <span class=\"time-label\">08:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">09:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">10:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">11:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">12:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">13:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">14:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">15:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">16:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">17:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">18:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">19:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">20:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">21:00</span>
                        </li>
                        <li>
                            <span class=\"time-label\">22:00</span>
                        </li>
                    </ul>
                </header>
                <ul class=\"room-timeline\">
                    ";
        // line 125
        echo "                    <li>
                        <a title=\"Sightseeing\" href=\"#\" class=\"time-entry\" style=\"width: 10.2941%; left: 10.2941%;\">
                            <small>Sightseeing</small></a>
                    </li>
                    <li>
                        
                    </li>
                    <li>
                        
                    </li>
                    <li>
                        
                    </li>
                    
                    <li>    
                    </li>
                    
                    <li>
                    </li>
";
        // line 145
        echo "                </ul>
            </time>
        </section>
    </div>
    
    <script src=\"//www.google-analytics.com/analytics.js\"></script><script src=\"../scripts/timetable.min.js\"></script>

    <script>
      var timetable = new Timetable();

      timetable.setScope(0,23)

      timetable.addLocations(['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado']);

      timetable.addEvent('Sightseeing', 'Rotterdam', new Date(2015,7,17,10,45), new Date(2015,7,17,12,30), '#'); //el url es opcional

      var renderer = new Timetable.Renderer(timetable);
      renderer.draw('.timetable');
    </script>
    <script src=\"https://code.jquery.com/jquery-1.10.2.js\"></script>
    <script>
        \$(\"#btMateria\").click(function(){
           \$(\"#bodyComisiones tr:last\").after('<tr class=\"active\"><td><button type=\"button\" class=\"btn btn-secondary\"> HOLA </button></td></tr>');
           ";
        // line 169
        echo "        });
        
    </script>

    ";
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
        return array (  230 => 169,  205 => 145,  184 => 125,  113 => 55,  99 => 35,  90 => 32,  86 => 31,  79 => 29,  69 => 21,  60 => 13,  57 => 12,  48 => 6,  45 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modulo/modulo1.html.twig", "C:\\xampp\\htdocs\\Sym\\t-f\\app\\Resources\\views\\modulo\\modulo1.html.twig");
    }
}

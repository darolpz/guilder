<?php

/* modulo/modulo2.html.twig */
class __TwigTemplate_57cdb6af37e881a30ff5d6dee163c0a5f3aebe51b1d429fb554472f81d071845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modulo/modulo2.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mod2' => array($this, 'block_mod2'),
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
        echo " Güilder ";
    }

    // line 4
    public function block_mod2($context, array $blocks = array())
    {
        echo " <li class=\"active\">
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo2");
        echo "\"> Módulo 2</a>
</li>";
    }

    // line 7
    public function block_extras($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"styles/timetablejs.css\">
\t<script src=\"/../web/scripts/d3-min.js\"></script>
\t<script src=\"/../web/scripts/moment-with-locales.min.js\"></script>
\t<script src=\"/../web/scripts/timetable.min.js\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/calendar-heatmap.css\">
\t\t<script src=\"/../web/scripts/calendar-heatmap.js\"></script>\t";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
\t\t<script src=\"/../web\\scripts/timetable.min.js\"></script>

\t\t<div class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h1 class=\"panel-title\">Materias historicas</h1>
\t\t\t</div>
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t\t\t<input type=\"submit\" value=\"Submit\" />
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Numero &nbsp</th>
\t\t\t\t\t\t\t<th>Profesor &nbsp</th>
\t\t\t\t\t\t\t<th>Año &nbsp</th>
\t\t\t\t\t\t\t<th>Cuatrimestre &nbsp</th>
\t\t\t\t\t\t\t<th>dia &nbsp</th>
\t\t\t\t\t\t\t<th>hora inicio &nbsp</th>
\t\t\t\t\t\t\t<th>hora fin &nbsp</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comisions"]) ? $context["comisions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 40
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "numero", array()), "html", null, true);
            echo " &nbsp</td>
\t\t\t\t\t\t\t<td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "profesor", array()), "html", null, true);
            echo " &nbsp </td>
\t\t\t\t\t\t\t<td> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "year", array()), "html", null, true);
            echo " &nbsp</td>
\t\t\t\t\t\t\t<td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "cuatrimestre", array()), "html", null, true);
            echo " &nbsp</td>
                                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 46
                echo "                                    ";
                $context["var"] = twig_length_filter($this->env, $context["x"]);
                echo "\t
                                    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["x"]);
                foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                    echo "\t\t
                                        ";
                    // line 48
                    if (($this->getAttribute($context["comision"], "idcomision", array()) == $this->getAttribute($this->getAttribute($context["horario"], "comisioncomision", array()), "idcomision", array()))) {
                        // line 49
                        echo "\t\t\t\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "diadia", array()), "html", null, true);
                        echo "  &nbsp</td>
\t\t\t\t\t\t\t<td>";
                        // line 50
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "inicio", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td>
\t\t\t\t\t\t\t<td>";
                        // line 51
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "fin", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td> 
                                        ";
                    }
                    // line 53
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t\t\t</tr>\t   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<p> aasdasf</p>
\t\t<div class=\"timetable\"/>

\t\t<script src=\"scripts/timetable.min.js\" ></script>
    ";
        // line 65
        $context["variable"] = "prueba";
        echo " 
\t\t<script>     
      var timetable = new Timetable();
      timetable.setScope(8,22)
      timetable.addLocations(['Lunes', 'Martes','Miercoles','Jueves','Viernes','Sabado']);
      ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comisions"]) ? $context["comisions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 71
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 72
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["x"]);
                foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                    echo "\t\t
                ";
                    // line 73
                    if (($this->getAttribute($context["comision"], "idcomision", array()) == $this->getAttribute($this->getAttribute($context["horario"], "comisioncomision", array()), "idcomision", array()))) {
                        // line 74
                        echo "                    timetable.addEvent('";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "profesor", array()), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "diadia", array()), "html", null, true);
                        echo "',
                    new Date(2015,7,17,'";
                        // line 75
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "inicio", array()), "H"), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "inicio", array()), "i"), "html", null, true);
                        echo "'), 
                    new Date(2015,7,17,'";
                        // line 76
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "fin", array()), "H"), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "fin", array()), "i"), "html", null, true);
                        echo "'));
                ";
                    }
                    // line 78
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "  
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    var renderer = new Timetable.Renderer(timetable);
    renderer.draw('.timetable');
\t\t</script>


    ";
    }

    public function getTemplateName()
    {
        return "modulo/modulo2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 81,  239 => 80,  227 => 78,  220 => 76,  214 => 75,  207 => 74,  205 => 73,  198 => 72,  193 => 71,  189 => 70,  181 => 65,  171 => 57,  164 => 55,  152 => 53,  147 => 51,  143 => 50,  138 => 49,  136 => 48,  130 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  109 => 42,  105 => 41,  102 => 40,  98 => 39,  80 => 24,  75 => 22,  71 => 21,  62 => 14,  59 => 13,  48 => 7,  42 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modulo/modulo2.html.twig", "C:\\xampp\\htdocs\\Sym\\t-f\\app\\Resources\\views\\modulo\\modulo2.html.twig");
    }
}

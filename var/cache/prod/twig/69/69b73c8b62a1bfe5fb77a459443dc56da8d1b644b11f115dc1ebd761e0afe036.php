<?php

/* modulo/modulo2.html.twig */
class __TwigTemplate_c96a0b03a067132331bb085da40a016e8c7f0ff08b7b94c281e05a6cafd2bb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modulo/modulo2.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Güilder ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Materias historicas</h1>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
       ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <input type=\"submit\" value=\"Submit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t
    <table border=1 cellspacing=0 cellpadding=2 bordercolor=\"666633\">
        <thead>
            <tr>
                <th>Numero &nbsp</th>
                <th>Profesor &nbsp</th>
                <th>year &nbsp</th>
\t\t<th>dia &nbsp</th>
\t\t<th>hora inicio &nbsp</th>
\t\t<th>hora fin &nbsp</th>
            </tr>
        </thead>
\t<tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comisions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            // line 24
            echo "            <tr>
                <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "numero", array()), "html", null, true);
            echo " &nbsp</td>
                <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "profesor", array()), "html", null, true);
            echo " &nbsp </td>
                <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["comision"], "year", array()), "html", null, true);
            echo " &nbsp</td>
\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["horarios"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 29
                echo "                    ";
                $context["var"] = twig_length_filter($this->env, $context["x"]);
                echo "\t
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["x"]);
                foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                    echo "\t\t
                        ";
                    // line 31
                    if (($this->getAttribute($context["comision"], "idcomision", array()) == $this->getAttribute($this->getAttribute($context["horario"], "comisioncomision", array()), "idcomision", array()))) {
                        // line 32
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "diadia", array()), "html", null, true);
                        echo "  &nbsp</td>
                            <td>";
                        // line 33
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "inicio", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td>
                            <td>";
                        // line 34
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "fin", array()), "H:i"), "html", null, true);
                        echo " &nbsp</td> 
                        ";
                    }
                    // line 36
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </tr>\t   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t</tbody>
    </table>
\t
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
        return array (  136 => 40,  129 => 38,  117 => 36,  112 => 34,  108 => 33,  103 => 32,  101 => 31,  95 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  71 => 24,  67 => 23,  50 => 9,  45 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modulo/modulo2.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo2.html.twig");
    }
}

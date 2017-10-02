<?php

/* modulo/modulo1.html.twig */
class __TwigTemplate_b7a526577696e30ea77f8b2cf8bc9d3d0739a6a6bbd6b45c37b8fe739c56eb48 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Módulo 1 ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, ($context["hora"] ?? null), "html", null, true);
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
            $context["hora"] = (($context["hora"] ?? null) + 1);
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
        return array (  97 => 49,  91 => 48,  89 => 41,  84 => 39,  75 => 33,  72 => 32,  67 => 31,  64 => 30,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modulo/modulo1.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo1.html.twig");
    }
}

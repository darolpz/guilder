<?php

/* modulo/modulo3.html.twig */
class __TwigTemplate_0420a4d60448fdeb4460008744b93d72746e26a6b7f9f07cfee5326ea93155fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modulo/modulo3.html.twig", 1);
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
        echo "<h2> Esta es la página principal del módulo 3 (encuestas)</h2>

<!DOCTYPE html>
<html lang=\"en\">
<head>
</head>

<body>
    
    <div class=\"panel-group\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" href=\"#collapse1\">Seleccionar año de cursada</a>
                </h4>
            </div>
            <div id=\"collapse1\" class=\"panel-collapse collapse\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <div class=\"checkbox\">
                            Primer año.
                            <label>
                                <input type=\"checkbox\" value=\"Proyecto de Software\" name='materia[]'>
                                Proyecto de Software
                            </label>
                        </div>
                    </li>
                    <li class=\"list-group-item\">Segundo año.</li>
                    <li class=\"list-group-item\">Tercer año.</li>
                    <li class=\"list-group-item\">Carto año.</li>
                    <li class=\"list-group-item\">Quinto año.</li>
                </ul>
                <div class=\"panel-footer\">Footer</div>
            </div>
        </div>
    </div>
    
    <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\">
                      Primer año.</a>
                    </h4>
                </div>
            <div id=\"collapse1\" class=\"panel-collapse collapse in\">
                <div class=\"panel-body\">
                    <label>
                        <input type=\"checkbox\" value=\"Proyecto de Software\" name='materia[]'>
                        Proyecto de Software
                    </label>
                </div>
            </div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\">
                    Segundo año.</a>
                </h4>
            </div>
            <div id=\"collapse2\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    
                </div>
            </div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\">
                    Tercer año.</a>
                </h4>
            </div>
            <div id=\"collapse3\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--
    <form action=\"resultados\" method=\"post\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">
                        <span class=\"glyphicon glyphicon-question-sign\"></span> ¿Qué materias piesa cursar?</h3>
                </div>
                <div class=\"panel-body two-col\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"Proyecto de Software\" name='materia[]'>
                                        Proyecto de Software
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"Metodologias de programación II\" name='materia[]'>
                                        Metodologías de programación II
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"Seguridad de la información\" name='materia[]'>
                                        Seguridad de la información
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"Probabilidad y estadística\" name='materia[]'>
                                        Probabilidad y estadística
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"Física I\" name='materia[]'>
                                        Fisica I
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"Seguridad de las aplicaciones\" name='materia[]'>
                                        Seguridad de las aplicaciones
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel-footer\">
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-success btn-sm\"><span class=\"glyphicon glyphicon-ok\"></span> Seleccionar</button>
                    <a href=\"#\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Ver resultados</button></a>
                </div>
            </div>
        </div>
    </div>
    </form>
    -->
    
    <!--
    <form action=\"resultados\" method=\"post\">
    <div class=\"form-group\">
        <label for=\"seleccionMateria1\">Seleccione la materia que va a cursar</label>
        <select class=\"form-control\" id=\"seleccionMateria1\" name=\"seleccion\">
            <option>Física I</option>
            <option>Metodologías de programación II</option>
            <option>Proyecto de Software</option>
            <option>Probabilidad y estadística</option>
            <option>Seguridad de la información</option>
        </select>
        <button type=\"submit\" name=\"submit\" class=\"btn btn-success btn-sm\"><span class=\"glyphicon glyphicon-ok\"></span> Seleccionar</button>

    </div>
    </form>
    -->
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "modulo/modulo3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modulo/modulo3.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo3.html.twig");
    }
}

<?php

/* :modulo:modulo3.html.twig */
class __TwigTemplate_6e11cd438b351fe9968e2f9ef76ac9cc72635b7fcc4541ee2b7feb1fb830a699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":modulo:modulo3.html.twig", 1);
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
        $__internal_73edfa2762c227640589ee85e36da43ce68d70267db99224b12e2432328bf137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73edfa2762c227640589ee85e36da43ce68d70267db99224b12e2432328bf137->enter($__internal_73edfa2762c227640589ee85e36da43ce68d70267db99224b12e2432328bf137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulo:modulo3.html.twig"));

        $__internal_2c83eed9b0a897afcfa251d73d87a4c3a9c2716ec00b8b1b6598988655a949ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c83eed9b0a897afcfa251d73d87a4c3a9c2716ec00b8b1b6598988655a949ff->enter($__internal_2c83eed9b0a897afcfa251d73d87a4c3a9c2716ec00b8b1b6598988655a949ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulo:modulo3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73edfa2762c227640589ee85e36da43ce68d70267db99224b12e2432328bf137->leave($__internal_73edfa2762c227640589ee85e36da43ce68d70267db99224b12e2432328bf137_prof);

        
        $__internal_2c83eed9b0a897afcfa251d73d87a4c3a9c2716ec00b8b1b6598988655a949ff->leave($__internal_2c83eed9b0a897afcfa251d73d87a4c3a9c2716ec00b8b1b6598988655a949ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63b5dc28125eaa0f1bdb5abebf40cbb073eca6626bc35f43dfddef57cffa3d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b5dc28125eaa0f1bdb5abebf40cbb073eca6626bc35f43dfddef57cffa3d3f->enter($__internal_63b5dc28125eaa0f1bdb5abebf40cbb073eca6626bc35f43dfddef57cffa3d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39892e524d02415a850893391b17073085d4a2b9d1ca4f2d8158ae494b20bb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39892e524d02415a850893391b17073085d4a2b9d1ca4f2d8158ae494b20bb51->enter($__internal_39892e524d02415a850893391b17073085d4a2b9d1ca4f2d8158ae494b20bb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder ";
        
        $__internal_39892e524d02415a850893391b17073085d4a2b9d1ca4f2d8158ae494b20bb51->leave($__internal_39892e524d02415a850893391b17073085d4a2b9d1ca4f2d8158ae494b20bb51_prof);

        
        $__internal_63b5dc28125eaa0f1bdb5abebf40cbb073eca6626bc35f43dfddef57cffa3d3f->leave($__internal_63b5dc28125eaa0f1bdb5abebf40cbb073eca6626bc35f43dfddef57cffa3d3f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0732a7f2f775d689a64cc3d62666fe8fa499462b9e8b282c483bf307a2cacba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0732a7f2f775d689a64cc3d62666fe8fa499462b9e8b282c483bf307a2cacba->enter($__internal_d0732a7f2f775d689a64cc3d62666fe8fa499462b9e8b282c483bf307a2cacba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_beec0f80ac5071e0cadffdc7ebfb554d838425ee20400c868ec97c2e0dafa105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beec0f80ac5071e0cadffdc7ebfb554d838425ee20400c868ec97c2e0dafa105->enter($__internal_beec0f80ac5071e0cadffdc7ebfb554d838425ee20400c868ec97c2e0dafa105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_beec0f80ac5071e0cadffdc7ebfb554d838425ee20400c868ec97c2e0dafa105->leave($__internal_beec0f80ac5071e0cadffdc7ebfb554d838425ee20400c868ec97c2e0dafa105_prof);

        
        $__internal_d0732a7f2f775d689a64cc3d62666fe8fa499462b9e8b282c483bf307a2cacba->leave($__internal_d0732a7f2f775d689a64cc3d62666fe8fa499462b9e8b282c483bf307a2cacba_prof);

    }

    public function getTemplateName()
    {
        return ":modulo:modulo3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %} Güilder {% endblock %}
{% block body %}
<h2> Esta es la página principal del módulo 3 (encuestas)</h2>

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
{% endblock %}", ":modulo:modulo3.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/modulo/modulo3.html.twig");
    }
}

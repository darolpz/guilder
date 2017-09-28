<?php

/* modulo/modulo3.html.twig */
class __TwigTemplate_11913bc427318deff4e0ecf1714d464cf7cd914738e55ad22e390b6cf2a39ba4 extends Twig_Template
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
        $__internal_c5ae8461e53c0133c217f67db6723e233aa3734fc7ac6aee99a7fc46237c3a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ae8461e53c0133c217f67db6723e233aa3734fc7ac6aee99a7fc46237c3a06->enter($__internal_c5ae8461e53c0133c217f67db6723e233aa3734fc7ac6aee99a7fc46237c3a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo3.html.twig"));

        $__internal_b812618ad2da413c542414b9478f823438e32f0646202f7e2452fb7d1e47efba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b812618ad2da413c542414b9478f823438e32f0646202f7e2452fb7d1e47efba->enter($__internal_b812618ad2da413c542414b9478f823438e32f0646202f7e2452fb7d1e47efba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ae8461e53c0133c217f67db6723e233aa3734fc7ac6aee99a7fc46237c3a06->leave($__internal_c5ae8461e53c0133c217f67db6723e233aa3734fc7ac6aee99a7fc46237c3a06_prof);

        
        $__internal_b812618ad2da413c542414b9478f823438e32f0646202f7e2452fb7d1e47efba->leave($__internal_b812618ad2da413c542414b9478f823438e32f0646202f7e2452fb7d1e47efba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a34d37ff9fc848e2dd5228fc24d137a62f42c798a12d891de4a8e322fcd7755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a34d37ff9fc848e2dd5228fc24d137a62f42c798a12d891de4a8e322fcd7755->enter($__internal_3a34d37ff9fc848e2dd5228fc24d137a62f42c798a12d891de4a8e322fcd7755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bf4feb75936227262218aab08ea018483a1c4ec811cf60a491861b11db6c3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf4feb75936227262218aab08ea018483a1c4ec811cf60a491861b11db6c3c3->enter($__internal_6bf4feb75936227262218aab08ea018483a1c4ec811cf60a491861b11db6c3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder ";
        
        $__internal_6bf4feb75936227262218aab08ea018483a1c4ec811cf60a491861b11db6c3c3->leave($__internal_6bf4feb75936227262218aab08ea018483a1c4ec811cf60a491861b11db6c3c3_prof);

        
        $__internal_3a34d37ff9fc848e2dd5228fc24d137a62f42c798a12d891de4a8e322fcd7755->leave($__internal_3a34d37ff9fc848e2dd5228fc24d137a62f42c798a12d891de4a8e322fcd7755_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d41c8d78787b750110094afad271c8fbace95f0674a22a0c58d1b989d73a25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d41c8d78787b750110094afad271c8fbace95f0674a22a0c58d1b989d73a25d->enter($__internal_6d41c8d78787b750110094afad271c8fbace95f0674a22a0c58d1b989d73a25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2e09c71a50cfb77762e42c887ea63502f4bfd56e202508af1659129b8b92ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e09c71a50cfb77762e42c887ea63502f4bfd56e202508af1659129b8b92ea2->enter($__internal_f2e09c71a50cfb77762e42c887ea63502f4bfd56e202508af1659129b8b92ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f2e09c71a50cfb77762e42c887ea63502f4bfd56e202508af1659129b8b92ea2->leave($__internal_f2e09c71a50cfb77762e42c887ea63502f4bfd56e202508af1659129b8b92ea2_prof);

        
        $__internal_6d41c8d78787b750110094afad271c8fbace95f0674a22a0c58d1b989d73a25d->leave($__internal_6d41c8d78787b750110094afad271c8fbace95f0674a22a0c58d1b989d73a25d_prof);

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
{% endblock %}", "modulo/modulo3.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo3.html.twig");
    }
}

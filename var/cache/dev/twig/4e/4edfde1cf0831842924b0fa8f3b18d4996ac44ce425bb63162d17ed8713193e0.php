<?php

/* modulo/modulo3.html.twig */
class __TwigTemplate_d3ef1485b1cdd6c21749515fa4a5953b168e05aeeedc82e427fa4a7f890eab01 extends Twig_Template
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
        $__internal_5ab98f5c2abb9336ea582abdf6af40c7528d9a18b0e5f24476e7558c74e8d221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab98f5c2abb9336ea582abdf6af40c7528d9a18b0e5f24476e7558c74e8d221->enter($__internal_5ab98f5c2abb9336ea582abdf6af40c7528d9a18b0e5f24476e7558c74e8d221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo3.html.twig"));

        $__internal_7cb2d713029d706d322a9918ee7b9439346b253c8ae79799b23dee01430017ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb2d713029d706d322a9918ee7b9439346b253c8ae79799b23dee01430017ae->enter($__internal_7cb2d713029d706d322a9918ee7b9439346b253c8ae79799b23dee01430017ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/modulo3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ab98f5c2abb9336ea582abdf6af40c7528d9a18b0e5f24476e7558c74e8d221->leave($__internal_5ab98f5c2abb9336ea582abdf6af40c7528d9a18b0e5f24476e7558c74e8d221_prof);

        
        $__internal_7cb2d713029d706d322a9918ee7b9439346b253c8ae79799b23dee01430017ae->leave($__internal_7cb2d713029d706d322a9918ee7b9439346b253c8ae79799b23dee01430017ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c42e15411e2acd5bbd3bf37143cb2c8b9243341691374aef20829ed8ac5d9a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42e15411e2acd5bbd3bf37143cb2c8b9243341691374aef20829ed8ac5d9a03->enter($__internal_c42e15411e2acd5bbd3bf37143cb2c8b9243341691374aef20829ed8ac5d9a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9f823361ad6000c72cecd08670868047af1379af7048ad1ca8d4f0013212b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f823361ad6000c72cecd08670868047af1379af7048ad1ca8d4f0013212b41->enter($__internal_f9f823361ad6000c72cecd08670868047af1379af7048ad1ca8d4f0013212b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder ";
        
        $__internal_f9f823361ad6000c72cecd08670868047af1379af7048ad1ca8d4f0013212b41->leave($__internal_f9f823361ad6000c72cecd08670868047af1379af7048ad1ca8d4f0013212b41_prof);

        
        $__internal_c42e15411e2acd5bbd3bf37143cb2c8b9243341691374aef20829ed8ac5d9a03->leave($__internal_c42e15411e2acd5bbd3bf37143cb2c8b9243341691374aef20829ed8ac5d9a03_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fec9dc9d42a4aa3ae060076f5b256833ee25ad194c29e28b1e854b6e3303a42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec9dc9d42a4aa3ae060076f5b256833ee25ad194c29e28b1e854b6e3303a42a->enter($__internal_fec9dc9d42a4aa3ae060076f5b256833ee25ad194c29e28b1e854b6e3303a42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db1f6424bb01f9c80339adeeee1f009aac6befdc40cdfbf2493f3dc2889d4d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1f6424bb01f9c80339adeeee1f009aac6befdc40cdfbf2493f3dc2889d4d57->enter($__internal_db1f6424bb01f9c80339adeeee1f009aac6befdc40cdfbf2493f3dc2889d4d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2> Esta es la página principal del módulo 3 (encuestas)</h2>

<!DOCTYPE html>
<html lang=\"en\">
<head>
</head>

<body>
    
    <!--    
    <form action=\"resultados\" method=\"post\">
    <input type=\"radio\" name=\"radio\" value=\"Opcion 1\">Opción 1
    <input type=\"radio\" name=\"radio\" value=\"Opción 2\">Opción 2
    <input type=\"radio\" name=\"radio\" value=\"Opcion 3\">Opción 3
    <input type=\"submit\" name=\"submit\" value=\"Subir\"/>
    </form>
    
    
    <div class=\"col-md-3\">
        <form action=\"resultados\" method=\"post\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">
                        <span class=\"glyphicon glyphicon-question-sign\"></span> ¿Quién es tu idolo universitario?
                    </h3>
                </div>
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" value=\"Waldo Hasperúe\" name=\"optionsRadios\">
                                    Waldo Hasperúe
                                </label>
                            </div>
                        </li>
                        <li class=\"list-group-item\">
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" value=\"Jésica Guzman\" name=\"optionsRadios\">
                                    Jésica Guzmán
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"panel-footer\">
                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-sm\" value=\"Votar\"/>
                    <a href=\"#\">Ver resultados</a></div>
            </div>
        </form>
    </div>
    -->
    
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
                                        <input type=\"checkbox\" value=\"proy\" name='materia'>
                                        Proyecto de Software
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"met2\" name='materia'>
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
                                        <input type=\"checkbox\" value=\"seginfo\" name='materia'>
                                        Seguridad de la información
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"prob\" name='materia'>
                                        Probabilidad y estadística
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"fisica\" name='materia'>
                                        Fisica I
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"segapp\" name='materia'>
                                        Seguridad de las aplicaciones
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel-footer\">
                    <input type=\"submit\" name=\"submit\" class=\"glyphicon glyphicon-ok\" value=\"Votar\"/>
                    <a href=\"#\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Ver resultados</button></a>
                </div>
            </div>
        </div>
    </div>
    </form>
    -->
    
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

</body>

</html>
";
        
        $__internal_db1f6424bb01f9c80339adeeee1f009aac6befdc40cdfbf2493f3dc2889d4d57->leave($__internal_db1f6424bb01f9c80339adeeee1f009aac6befdc40cdfbf2493f3dc2889d4d57_prof);

        
        $__internal_fec9dc9d42a4aa3ae060076f5b256833ee25ad194c29e28b1e854b6e3303a42a->leave($__internal_fec9dc9d42a4aa3ae060076f5b256833ee25ad194c29e28b1e854b6e3303a42a_prof);

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
    
    <!--    
    <form action=\"resultados\" method=\"post\">
    <input type=\"radio\" name=\"radio\" value=\"Opcion 1\">Opción 1
    <input type=\"radio\" name=\"radio\" value=\"Opción 2\">Opción 2
    <input type=\"radio\" name=\"radio\" value=\"Opcion 3\">Opción 3
    <input type=\"submit\" name=\"submit\" value=\"Subir\"/>
    </form>
    
    
    <div class=\"col-md-3\">
        <form action=\"resultados\" method=\"post\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">
                        <span class=\"glyphicon glyphicon-question-sign\"></span> ¿Quién es tu idolo universitario?
                    </h3>
                </div>
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" value=\"Waldo Hasperúe\" name=\"optionsRadios\">
                                    Waldo Hasperúe
                                </label>
                            </div>
                        </li>
                        <li class=\"list-group-item\">
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" value=\"Jésica Guzman\" name=\"optionsRadios\">
                                    Jésica Guzmán
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"panel-footer\">
                    <input type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-sm\" value=\"Votar\"/>
                    <a href=\"#\">Ver resultados</a></div>
            </div>
        </form>
    </div>
    -->
    
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
                                        <input type=\"checkbox\" value=\"proy\" name='materia'>
                                        Proyecto de Software
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"met2\" name='materia'>
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
                                        <input type=\"checkbox\" value=\"seginfo\" name='materia'>
                                        Seguridad de la información
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"prob\" name='materia'>
                                        Probabilidad y estadística
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"fisica\" name='materia'>
                                        Fisica I
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"well well-sm margin-bottom-none\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"segapp\" name='materia'>
                                        Seguridad de las aplicaciones
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel-footer\">
                    <input type=\"submit\" name=\"submit\" class=\"glyphicon glyphicon-ok\" value=\"Votar\"/>
                    <a href=\"#\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Ver resultados</button></a>
                </div>
            </div>
        </div>
    </div>
    </form>
    -->
    
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

</body>

</html>
{% endblock %}", "modulo/modulo3.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo3.html.twig");
    }
}

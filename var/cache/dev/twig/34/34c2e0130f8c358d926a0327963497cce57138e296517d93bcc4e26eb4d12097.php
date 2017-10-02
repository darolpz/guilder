<?php

/* ::base.html.twig */
class __TwigTemplate_7ba426c3fd6db79c519a62bea0910f1177809241c289686031b107a8977fbd24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bootstrap' => array($this, 'block_bootstrap'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc2288f239d01a450d1512a8bc5f4a4f178268b3a233c4ac9cdffc1856ec14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc2288f239d01a450d1512a8bc5f4a4f178268b3a233c4ac9cdffc1856ec14e->enter($__internal_0fc2288f239d01a450d1512a8bc5f4a4f178268b3a233c4ac9cdffc1856ec14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a974854d0029a1380aa04bbf59a915e563de88de517505608c1b4207c402c2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a974854d0029a1380aa04bbf59a915e563de88de517505608c1b4207c402c2fa->enter($__internal_a974854d0029a1380aa04bbf59a915e563de88de517505608c1b4207c402c2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">





<head>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  <meta charset=\"UTF-8\" />
  <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 12
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 15
        echo "
</head>

<body>
  ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo " ";
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</body>

</html>";
        
        $__internal_0fc2288f239d01a450d1512a8bc5f4a4f178268b3a233c4ac9cdffc1856ec14e->leave($__internal_0fc2288f239d01a450d1512a8bc5f4a4f178268b3a233c4ac9cdffc1856ec14e_prof);

        
        $__internal_a974854d0029a1380aa04bbf59a915e563de88de517505608c1b4207c402c2fa->leave($__internal_a974854d0029a1380aa04bbf59a915e563de88de517505608c1b4207c402c2fa_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab0e47a95076fa92f2b8307e7ec3acc483835a241b4dd37344aca3d776500dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0e47a95076fa92f2b8307e7ec3acc483835a241b4dd37344aca3d776500dd4->enter($__internal_ab0e47a95076fa92f2b8307e7ec3acc483835a241b4dd37344aca3d776500dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c45c958bddd2a07a2bcdd2c18ebd8ca7a8bf32450db94d6dbf8ebd84a3a8e811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45c958bddd2a07a2bcdd2c18ebd8ca7a8bf32450db94d6dbf8ebd84a3a8e811->enter($__internal_c45c958bddd2a07a2bcdd2c18ebd8ca7a8bf32450db94d6dbf8ebd84a3a8e811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Título base ";
        
        $__internal_c45c958bddd2a07a2bcdd2c18ebd8ca7a8bf32450db94d6dbf8ebd84a3a8e811->leave($__internal_c45c958bddd2a07a2bcdd2c18ebd8ca7a8bf32450db94d6dbf8ebd84a3a8e811_prof);

        
        $__internal_ab0e47a95076fa92f2b8307e7ec3acc483835a241b4dd37344aca3d776500dd4->leave($__internal_ab0e47a95076fa92f2b8307e7ec3acc483835a241b4dd37344aca3d776500dd4_prof);

    }

    // line 12
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_8b1c43a728cbe9fcc19b0559e7fca7e0cc6a5703cca3dadaf7b8e14094591306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1c43a728cbe9fcc19b0559e7fca7e0cc6a5703cca3dadaf7b8e14094591306->enter($__internal_8b1c43a728cbe9fcc19b0559e7fca7e0cc6a5703cca3dadaf7b8e14094591306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        $__internal_5825275e404b572d1065a905bb6f01afb3e3a123af442eba3f22cad9fb81d694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5825275e404b572d1065a905bb6f01afb3e3a123af442eba3f22cad9fb81d694->enter($__internal_5825275e404b572d1065a905bb6f01afb3e3a123af442eba3f22cad9fb81d694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        // line 13
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> ";
        
        $__internal_5825275e404b572d1065a905bb6f01afb3e3a123af442eba3f22cad9fb81d694->leave($__internal_5825275e404b572d1065a905bb6f01afb3e3a123af442eba3f22cad9fb81d694_prof);

        
        $__internal_8b1c43a728cbe9fcc19b0559e7fca7e0cc6a5703cca3dadaf7b8e14094591306->leave($__internal_8b1c43a728cbe9fcc19b0559e7fca7e0cc6a5703cca3dadaf7b8e14094591306_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_669a3f75d51544bea0886f69a3685c13b5395e9c2fcbb60d7378b8f3d275bdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669a3f75d51544bea0886f69a3685c13b5395e9c2fcbb60d7378b8f3d275bdba->enter($__internal_669a3f75d51544bea0886f69a3685c13b5395e9c2fcbb60d7378b8f3d275bdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7816a7f2e7618afc3e70c59c52e2d7b20bd1a3979d3f1c5759852c75011a2389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7816a7f2e7618afc3e70c59c52e2d7b20bd1a3979d3f1c5759852c75011a2389->enter($__internal_7816a7f2e7618afc3e70c59c52e2d7b20bd1a3979d3f1c5759852c75011a2389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand\"><img src=\"http://universidades.en-la-argentina.com.ar/images/logo_universidades/unaj.png\" width=1.2em height=1.2em style=\"float:left;\" alt=\"\">Güilder</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
      <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Inicio</a></li>
        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo1");
        echo "\"> Módulo 1</a></li>
        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\"> Administración</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 38
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 39
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "iduser", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
      ";
        } else {
            // line 42
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> Registro</a></li>
        <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      ";
        }
        // line 45
        echo "      </ul>
    </div>
  </div>
</nav>

  ";
        
        $__internal_7816a7f2e7618afc3e70c59c52e2d7b20bd1a3979d3f1c5759852c75011a2389->leave($__internal_7816a7f2e7618afc3e70c59c52e2d7b20bd1a3979d3f1c5759852c75011a2389_prof);

        
        $__internal_669a3f75d51544bea0886f69a3685c13b5395e9c2fcbb60d7378b8f3d275bdba->leave($__internal_669a3f75d51544bea0886f69a3685c13b5395e9c2fcbb60d7378b8f3d275bdba_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2b88002b584a95b1d996d1c1f43978935eaed43ea8b6bb64d41ffaaf5efb910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b88002b584a95b1d996d1c1f43978935eaed43ea8b6bb64d41ffaaf5efb910->enter($__internal_e2b88002b584a95b1d996d1c1f43978935eaed43ea8b6bb64d41ffaaf5efb910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d83598b24ae11f644a23e94e4dbdae0ed57b0e7e34f375e42e95cd38b18922b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83598b24ae11f644a23e94e4dbdae0ed57b0e7e34f375e42e95cd38b18922b7->enter($__internal_d83598b24ae11f644a23e94e4dbdae0ed57b0e7e34f375e42e95cd38b18922b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
  <!-->Esto se reemplaza con los body de cada pagina
  <-->

    ";
        
        $__internal_d83598b24ae11f644a23e94e4dbdae0ed57b0e7e34f375e42e95cd38b18922b7->leave($__internal_d83598b24ae11f644a23e94e4dbdae0ed57b0e7e34f375e42e95cd38b18922b7_prof);

        
        $__internal_e2b88002b584a95b1d996d1c1f43978935eaed43ea8b6bb64d41ffaaf5efb910->leave($__internal_e2b88002b584a95b1d996d1c1f43978935eaed43ea8b6bb64d41ffaaf5efb910_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1f510561126950a801028b9b3778d1856bd9f1c471463f1c7234fa01161bc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f510561126950a801028b9b3778d1856bd9f1c471463f1c7234fa01161bc45->enter($__internal_e1f510561126950a801028b9b3778d1856bd9f1c471463f1c7234fa01161bc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_33250d576623a10ced400adac20b6d5d4d24ea6c83dd5f550390226728e937dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33250d576623a10ced400adac20b6d5d4d24ea6c83dd5f550390226728e937dd->enter($__internal_33250d576623a10ced400adac20b6d5d4d24ea6c83dd5f550390226728e937dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
      crossorigin=\"anonymous\"></script>

    ";
        
        $__internal_33250d576623a10ced400adac20b6d5d4d24ea6c83dd5f550390226728e937dd->leave($__internal_33250d576623a10ced400adac20b6d5d4d24ea6c83dd5f550390226728e937dd_prof);

        
        $__internal_e1f510561126950a801028b9b3778d1856bd9f1c471463f1c7234fa01161bc45->leave($__internal_e1f510561126950a801028b9b3778d1856bd9f1c471463f1c7234fa01161bc45_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 56,  215 => 55,  201 => 51,  192 => 50,  177 => 45,  172 => 43,  167 => 42,  162 => 40,  155 => 39,  153 => 38,  147 => 35,  143 => 34,  139 => 33,  124 => 20,  115 => 19,  104 => 13,  95 => 12,  77 => 11,  65 => 64,  62 => 55,  59 => 50,  57 => 19,  51 => 15,  49 => 12,  45 => 11,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">





<head>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  <meta charset=\"UTF-8\" />
  <title>{% block title %} Título base {% endblock %}</title>
  {% block bootstrap %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> {% endblock %}

</head>

<body>
  {% block header %}

<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand\"><img src=\"http://universidades.en-la-argentina.com.ar/images/logo_universidades/unaj.png\" width=1.2em height=1.2em style=\"float:left;\" alt=\"\">Güilder</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
      <li><a href=\"{{ path('homepage') }}\"><span class=\"glyphicon glyphicon-home\"></span> Inicio</a></li>
        <li><a href=\"{{ path('modulo1') }}\"> Módulo 1</a></li>
        <li><a href=\"{{ path('admin') }}\"> Administración</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      {% if app.user %}
        <li><a href=\"{{ path('user_show', { 'iduser': app.user.iduser }) }}\"><span class=\"glyphicon glyphicon-user\"></span> {{ app.user }}</a></li>
        <li><a href=\"{{ path('logout') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
      {% else %}
        <li><a href=\"{{ path('user_registration') }}\"><span class=\"glyphicon glyphicon-user\"></span> Registro</a></li>
        <li><a href=\"{{ path('login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      {% endif %}
      </ul>
    </div>
  </div>
</nav>

  {% endblock %} {% block body %}

  <!-->Esto se reemplaza con los body de cada pagina
  <-->

    {% endblock %} {% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
      crossorigin=\"anonymous\"></script>

    {% endblock %}
</body>

</html>", "::base.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/base.html.twig");
    }
}

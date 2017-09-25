<?php

/* base.html.twig */
class __TwigTemplate_78d7de27cf97e3df01ef5f2594ca92658a6dbec4e3cc652e7f2b81cc32528525 extends Twig_Template
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
        // line 63
        echo "</body>

</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo " Título base ";
    }

    // line 12
    public function block_bootstrap($context, array $blocks = array())
    {
        // line 13
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> ";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
            // line 39
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "iduser", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "html", null, true);
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
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "
  <!-->Esto se reemplaza con los body de cada pagina
  <-->

    ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
      crossorigin=\"anonymous\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 56,  155 => 55,  147 => 51,  144 => 50,  135 => 45,  130 => 43,  125 => 42,  120 => 40,  113 => 39,  111 => 38,  105 => 35,  101 => 34,  97 => 33,  82 => 20,  79 => 19,  74 => 13,  71 => 12,  65 => 11,  59 => 63,  56 => 55,  53 => 50,  51 => 19,  45 => 15,  43 => 12,  39 => 11,  34 => 9,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\base.html.twig");
    }
}

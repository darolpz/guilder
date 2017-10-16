<?php

/* base.html.twig */
class __TwigTemplate_08c9a54e203c9395312667a2b79e0983cc20a6263f5e17b647a1b6d69a78aab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bootstrap' => array($this, 'block_bootstrap'),
            'extras' => array($this, 'block_extras'),
            'header' => array($this, 'block_header'),
            'inicio' => array($this, 'block_inicio'),
            'mod1' => array($this, 'block_mod1'),
            'mod2' => array($this, 'block_mod2'),
            'mod3' => array($this, 'block_mod3'),
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
        echo "  ";
        $this->displayBlock('extras', $context, $blocks);
        // line 16
        echo "
</head>

<body>
  ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo " ";
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
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

    // line 15
    public function block_extras($context, array $blocks = array())
    {
        echo " ";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
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
      ";
        // line 34
        $this->displayBlock('inicio', $context, $blocks);
        // line 35
        echo "       ";
        $this->displayBlock('mod1', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('mod2', $context, $blocks);
        // line 37
        echo "        ";
        $this->displayBlock('mod3', $context, $blocks);
        // line 38
        echo "\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "\t\t<li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Administración
        <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
        <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comision_index");
            echo "\">Comisiones</a></li>
        <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
            echo "\">Horarios</a></li>
        <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_index");
            echo "\">Tokens</a></li>
        </ul>
      </li>
        
\t\t";
        }
        // line 50
        echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 52
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 53
            echo "       <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
      ";
        } else {
            // line 56
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> Registro</a></li>
        <li><a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      ";
        }
        // line 59
        echo "      </ul>
    </div>
  </div>
</nav>

  ";
    }

    // line 34
    public function block_inicio($context, array $blocks = array())
    {
        echo "<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Inicio</a></li>";
    }

    // line 35
    public function block_mod1($context, array $blocks = array())
    {
        echo "  <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo1");
        echo "\"> Módulo 1</a></li> ";
    }

    // line 36
    public function block_mod2($context, array $blocks = array())
    {
        echo " <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo2");
        echo "\"> Módulo 2</a></li>";
    }

    // line 37
    public function block_mod3($context, array $blocks = array())
    {
        echo " <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo3");
        echo "\"> Módulo 3</a></li>";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "
  <!-->Esto se reemplaza con los body de cada pagina
  <-->

    ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
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
        return array (  230 => 70,  227 => 69,  219 => 65,  216 => 64,  208 => 37,  200 => 36,  192 => 35,  184 => 34,  175 => 59,  170 => 57,  165 => 56,  160 => 54,  153 => 53,  151 => 52,  147 => 50,  139 => 45,  135 => 44,  131 => 43,  125 => 39,  122 => 38,  119 => 37,  116 => 36,  113 => 35,  111 => 34,  96 => 21,  93 => 20,  87 => 15,  82 => 13,  79 => 12,  73 => 11,  67 => 78,  64 => 69,  61 => 64,  59 => 20,  53 => 16,  50 => 15,  48 => 12,  44 => 11,  39 => 9,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\Sym\\t-f\\app\\Resources\\views\\base.html.twig");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
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
        $__internal_a89adebc8666e86564d1acc4dc61f0a76e4f1f4e12df2807cc1947f733079c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89adebc8666e86564d1acc4dc61f0a76e4f1f4e12df2807cc1947f733079c0c->enter($__internal_a89adebc8666e86564d1acc4dc61f0a76e4f1f4e12df2807cc1947f733079c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4aed29608bc8d5297ed3f7aebf39eddc43b91e19565b2446209d44d5fd674b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aed29608bc8d5297ed3f7aebf39eddc43b91e19565b2446209d44d5fd674b20->enter($__internal_4aed29608bc8d5297ed3f7aebf39eddc43b91e19565b2446209d44d5fd674b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 52
        echo " ";
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "</body>

</html>";
        
        $__internal_a89adebc8666e86564d1acc4dc61f0a76e4f1f4e12df2807cc1947f733079c0c->leave($__internal_a89adebc8666e86564d1acc4dc61f0a76e4f1f4e12df2807cc1947f733079c0c_prof);

        
        $__internal_4aed29608bc8d5297ed3f7aebf39eddc43b91e19565b2446209d44d5fd674b20->leave($__internal_4aed29608bc8d5297ed3f7aebf39eddc43b91e19565b2446209d44d5fd674b20_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb7e7351c1a2cfa8e5ead7df3fe1671c8a8e60fb4b074029a3da9f354dfebacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7e7351c1a2cfa8e5ead7df3fe1671c8a8e60fb4b074029a3da9f354dfebacd->enter($__internal_bb7e7351c1a2cfa8e5ead7df3fe1671c8a8e60fb4b074029a3da9f354dfebacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c58fa574db7f9d388b1d71ddb2879ab0bad9cbb3d13574ab29c935c3044ab1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58fa574db7f9d388b1d71ddb2879ab0bad9cbb3d13574ab29c935c3044ab1d2->enter($__internal_c58fa574db7f9d388b1d71ddb2879ab0bad9cbb3d13574ab29c935c3044ab1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Título base ";
        
        $__internal_c58fa574db7f9d388b1d71ddb2879ab0bad9cbb3d13574ab29c935c3044ab1d2->leave($__internal_c58fa574db7f9d388b1d71ddb2879ab0bad9cbb3d13574ab29c935c3044ab1d2_prof);

        
        $__internal_bb7e7351c1a2cfa8e5ead7df3fe1671c8a8e60fb4b074029a3da9f354dfebacd->leave($__internal_bb7e7351c1a2cfa8e5ead7df3fe1671c8a8e60fb4b074029a3da9f354dfebacd_prof);

    }

    // line 12
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_a058e9540f361b0302dd0627278a3a57b7d83137e381d8f29c5405f4ae4b5c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a058e9540f361b0302dd0627278a3a57b7d83137e381d8f29c5405f4ae4b5c96->enter($__internal_a058e9540f361b0302dd0627278a3a57b7d83137e381d8f29c5405f4ae4b5c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        $__internal_578d461a52e2adef6563960ce5283b4ccf15e7c8a77ed911492059f6fc8fcc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578d461a52e2adef6563960ce5283b4ccf15e7c8a77ed911492059f6fc8fcc5b->enter($__internal_578d461a52e2adef6563960ce5283b4ccf15e7c8a77ed911492059f6fc8fcc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        // line 13
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> ";
        
        $__internal_578d461a52e2adef6563960ce5283b4ccf15e7c8a77ed911492059f6fc8fcc5b->leave($__internal_578d461a52e2adef6563960ce5283b4ccf15e7c8a77ed911492059f6fc8fcc5b_prof);

        
        $__internal_a058e9540f361b0302dd0627278a3a57b7d83137e381d8f29c5405f4ae4b5c96->leave($__internal_a058e9540f361b0302dd0627278a3a57b7d83137e381d8f29c5405f4ae4b5c96_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_3f3f71977352bd3d307efcb075a91622489c2182f1be8595b0f1371e04fb0967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3f71977352bd3d307efcb075a91622489c2182f1be8595b0f1371e04fb0967->enter($__internal_3f3f71977352bd3d307efcb075a91622489c2182f1be8595b0f1371e04fb0967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_62f9153b8036de24b88d327c1ded2608b6c3cabfc2e69546b90a4a5b061b8f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f9153b8036de24b88d327c1ded2608b6c3cabfc2e69546b90a4a5b061b8f21->enter($__internal_62f9153b8036de24b88d327c1ded2608b6c3cabfc2e69546b90a4a5b061b8f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo2");
        echo "\"> Módulo 2</a></li>
        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo3");
        echo "\"> Módulo 3</a></li>
        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\"> Administración</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 40
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 41
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "iduser", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
      ";
        } else {
            // line 44
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> Registro</a></li>
        <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      ";
        }
        // line 47
        echo "      </ul>
    </div>
  </div>
</nav>

  ";
        
        $__internal_62f9153b8036de24b88d327c1ded2608b6c3cabfc2e69546b90a4a5b061b8f21->leave($__internal_62f9153b8036de24b88d327c1ded2608b6c3cabfc2e69546b90a4a5b061b8f21_prof);

        
        $__internal_3f3f71977352bd3d307efcb075a91622489c2182f1be8595b0f1371e04fb0967->leave($__internal_3f3f71977352bd3d307efcb075a91622489c2182f1be8595b0f1371e04fb0967_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_f30ffa5d161f7fdc335c7ae037aa297e69e176b11d48f0a501a476805a6e17f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30ffa5d161f7fdc335c7ae037aa297e69e176b11d48f0a501a476805a6e17f9->enter($__internal_f30ffa5d161f7fdc335c7ae037aa297e69e176b11d48f0a501a476805a6e17f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc1156cab6edfc624f2b8856bb555fb21eaabef72bfa08b0d7a3c8b8d4d5a883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1156cab6edfc624f2b8856bb555fb21eaabef72bfa08b0d7a3c8b8d4d5a883->enter($__internal_cc1156cab6edfc624f2b8856bb555fb21eaabef72bfa08b0d7a3c8b8d4d5a883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "
  <!-->Esto se reemplaza con los body de cada pagina
  <-->

    ";
        
        $__internal_cc1156cab6edfc624f2b8856bb555fb21eaabef72bfa08b0d7a3c8b8d4d5a883->leave($__internal_cc1156cab6edfc624f2b8856bb555fb21eaabef72bfa08b0d7a3c8b8d4d5a883_prof);

        
        $__internal_f30ffa5d161f7fdc335c7ae037aa297e69e176b11d48f0a501a476805a6e17f9->leave($__internal_f30ffa5d161f7fdc335c7ae037aa297e69e176b11d48f0a501a476805a6e17f9_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ad3e77660ac99563cbf5675c3540be20aacce50a7c0ae17fba63db24cdaf4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad3e77660ac99563cbf5675c3540be20aacce50a7c0ae17fba63db24cdaf4a4->enter($__internal_2ad3e77660ac99563cbf5675c3540be20aacce50a7c0ae17fba63db24cdaf4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d56efcf28312ce5104c2e9daa4da9aa3fc47df128533c8f6a266a3bba6e83193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56efcf28312ce5104c2e9daa4da9aa3fc47df128533c8f6a266a3bba6e83193->enter($__internal_d56efcf28312ce5104c2e9daa4da9aa3fc47df128533c8f6a266a3bba6e83193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
      crossorigin=\"anonymous\"></script>

    ";
        
        $__internal_d56efcf28312ce5104c2e9daa4da9aa3fc47df128533c8f6a266a3bba6e83193->leave($__internal_d56efcf28312ce5104c2e9daa4da9aa3fc47df128533c8f6a266a3bba6e83193_prof);

        
        $__internal_2ad3e77660ac99563cbf5675c3540be20aacce50a7c0ae17fba63db24cdaf4a4->leave($__internal_2ad3e77660ac99563cbf5675c3540be20aacce50a7c0ae17fba63db24cdaf4a4_prof);

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
        return array (  232 => 58,  223 => 57,  209 => 53,  200 => 52,  185 => 47,  180 => 45,  175 => 44,  170 => 42,  163 => 41,  161 => 40,  155 => 37,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  124 => 20,  115 => 19,  104 => 13,  95 => 12,  77 => 11,  65 => 66,  62 => 57,  59 => 52,  57 => 19,  51 => 15,  49 => 12,  45 => 11,  40 => 9,  30 => 1,);
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
        <li><a href=\"{{ path('modulo2') }}\"> Módulo 2</a></li>
        <li><a href=\"{{ path('modulo3') }}\"> Módulo 3</a></li>
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

</html>", "base.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\base.html.twig");
    }
}

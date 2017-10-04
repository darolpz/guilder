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
        $__internal_466580943dcaabc98fa00c22cd694890eb255167aa22bbc5e5cdd4f95701e872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466580943dcaabc98fa00c22cd694890eb255167aa22bbc5e5cdd4f95701e872->enter($__internal_466580943dcaabc98fa00c22cd694890eb255167aa22bbc5e5cdd4f95701e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8b2def1d770e7bc4af0b51962fd5cf3ca33fe16133ecd058f140aa7338afa289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2def1d770e7bc4af0b51962fd5cf3ca33fe16133ecd058f140aa7338afa289->enter($__internal_8b2def1d770e7bc4af0b51962fd5cf3ca33fe16133ecd058f140aa7338afa289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_466580943dcaabc98fa00c22cd694890eb255167aa22bbc5e5cdd4f95701e872->leave($__internal_466580943dcaabc98fa00c22cd694890eb255167aa22bbc5e5cdd4f95701e872_prof);

        
        $__internal_8b2def1d770e7bc4af0b51962fd5cf3ca33fe16133ecd058f140aa7338afa289->leave($__internal_8b2def1d770e7bc4af0b51962fd5cf3ca33fe16133ecd058f140aa7338afa289_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebe823ce543ffbcae0d3ab094e1166c1f0cdf63ec3550952de8633a6e06c7a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe823ce543ffbcae0d3ab094e1166c1f0cdf63ec3550952de8633a6e06c7a5c->enter($__internal_ebe823ce543ffbcae0d3ab094e1166c1f0cdf63ec3550952de8633a6e06c7a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ff503e2c9cd1fdea5e51da7f8f9914c241419d716cc1b6c742a83b40c191cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff503e2c9cd1fdea5e51da7f8f9914c241419d716cc1b6c742a83b40c191cdf->enter($__internal_5ff503e2c9cd1fdea5e51da7f8f9914c241419d716cc1b6c742a83b40c191cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Título base ";
        
        $__internal_5ff503e2c9cd1fdea5e51da7f8f9914c241419d716cc1b6c742a83b40c191cdf->leave($__internal_5ff503e2c9cd1fdea5e51da7f8f9914c241419d716cc1b6c742a83b40c191cdf_prof);

        
        $__internal_ebe823ce543ffbcae0d3ab094e1166c1f0cdf63ec3550952de8633a6e06c7a5c->leave($__internal_ebe823ce543ffbcae0d3ab094e1166c1f0cdf63ec3550952de8633a6e06c7a5c_prof);

    }

    // line 12
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_47d84605420ddf08eb84036581f1475a64fae61772cef5dffa42cdbbe46e5a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d84605420ddf08eb84036581f1475a64fae61772cef5dffa42cdbbe46e5a5d->enter($__internal_47d84605420ddf08eb84036581f1475a64fae61772cef5dffa42cdbbe46e5a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        $__internal_e1465ab2dc66fe6412cf134b44d2f99806206115ec54629387c269cb463bb84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1465ab2dc66fe6412cf134b44d2f99806206115ec54629387c269cb463bb84d->enter($__internal_e1465ab2dc66fe6412cf134b44d2f99806206115ec54629387c269cb463bb84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        // line 13
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> ";
        
        $__internal_e1465ab2dc66fe6412cf134b44d2f99806206115ec54629387c269cb463bb84d->leave($__internal_e1465ab2dc66fe6412cf134b44d2f99806206115ec54629387c269cb463bb84d_prof);

        
        $__internal_47d84605420ddf08eb84036581f1475a64fae61772cef5dffa42cdbbe46e5a5d->leave($__internal_47d84605420ddf08eb84036581f1475a64fae61772cef5dffa42cdbbe46e5a5d_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_00ef4776373e5893895510b00ef6ea0b38e834f63256725ef9f038157094cbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ef4776373e5893895510b00ef6ea0b38e834f63256725ef9f038157094cbfb->enter($__internal_00ef4776373e5893895510b00ef6ea0b38e834f63256725ef9f038157094cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3a6d65f89a679988086a735ca480d627d5235586a2c895c6dcad64b150859f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6d65f89a679988086a735ca480d627d5235586a2c895c6dcad64b150859f63->enter($__internal_3a6d65f89a679988086a735ca480d627d5235586a2c895c6dcad64b150859f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_3a6d65f89a679988086a735ca480d627d5235586a2c895c6dcad64b150859f63->leave($__internal_3a6d65f89a679988086a735ca480d627d5235586a2c895c6dcad64b150859f63_prof);

        
        $__internal_00ef4776373e5893895510b00ef6ea0b38e834f63256725ef9f038157094cbfb->leave($__internal_00ef4776373e5893895510b00ef6ea0b38e834f63256725ef9f038157094cbfb_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_19cd942d6b69ded157da4dfc0a22cfa9a9a95924871a4c6a2678038c845ec497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19cd942d6b69ded157da4dfc0a22cfa9a9a95924871a4c6a2678038c845ec497->enter($__internal_19cd942d6b69ded157da4dfc0a22cfa9a9a95924871a4c6a2678038c845ec497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2d7caf6515ec6fe2dde422202cd4e7f11743a8a9a7f373aaea224d1cc90bb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d7caf6515ec6fe2dde422202cd4e7f11743a8a9a7f373aaea224d1cc90bb17->enter($__internal_f2d7caf6515ec6fe2dde422202cd4e7f11743a8a9a7f373aaea224d1cc90bb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "
  <!-->Esto se reemplaza con los body de cada pagina
  <-->

    ";
        
        $__internal_f2d7caf6515ec6fe2dde422202cd4e7f11743a8a9a7f373aaea224d1cc90bb17->leave($__internal_f2d7caf6515ec6fe2dde422202cd4e7f11743a8a9a7f373aaea224d1cc90bb17_prof);

        
        $__internal_19cd942d6b69ded157da4dfc0a22cfa9a9a95924871a4c6a2678038c845ec497->leave($__internal_19cd942d6b69ded157da4dfc0a22cfa9a9a95924871a4c6a2678038c845ec497_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51275814cd97d63e0fbae7fcb04fd62a78226d6fcf3d52d29d020a73bc544bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51275814cd97d63e0fbae7fcb04fd62a78226d6fcf3d52d29d020a73bc544bac->enter($__internal_51275814cd97d63e0fbae7fcb04fd62a78226d6fcf3d52d29d020a73bc544bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14bf8a761c5b9b1f13f12d6cbd45a13d269d955b812faba9cc5b1a93a54d8c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bf8a761c5b9b1f13f12d6cbd45a13d269d955b812faba9cc5b1a93a54d8c73->enter($__internal_14bf8a761c5b9b1f13f12d6cbd45a13d269d955b812faba9cc5b1a93a54d8c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
      crossorigin=\"anonymous\"></script>

    ";
        
        $__internal_14bf8a761c5b9b1f13f12d6cbd45a13d269d955b812faba9cc5b1a93a54d8c73->leave($__internal_14bf8a761c5b9b1f13f12d6cbd45a13d269d955b812faba9cc5b1a93a54d8c73_prof);

        
        $__internal_51275814cd97d63e0fbae7fcb04fd62a78226d6fcf3d52d29d020a73bc544bac->leave($__internal_51275814cd97d63e0fbae7fcb04fd62a78226d6fcf3d52d29d020a73bc544bac_prof);

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

</html>", "base.html.twig", "C:\\xampp\\htdocs\\repo\\app\\Resources\\views\\base.html.twig");
    }
}

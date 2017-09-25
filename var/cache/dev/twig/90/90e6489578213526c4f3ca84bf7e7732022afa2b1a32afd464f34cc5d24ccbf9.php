<?php

/* base.html.twig */
class __TwigTemplate_7b22c574d1381df4b483099d54512997bfb532f54a1007872c71598b345383f6 extends Twig_Template
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
        $__internal_5a2f816def334c3e51245b1fa2040175e470d55163afd268a1df9a6f97556c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2f816def334c3e51245b1fa2040175e470d55163afd268a1df9a6f97556c49->enter($__internal_5a2f816def334c3e51245b1fa2040175e470d55163afd268a1df9a6f97556c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_226def450f0e048d7ccad7e184e64050a171b2d1af1193998fbcbe5b2dce4ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226def450f0e048d7ccad7e184e64050a171b2d1af1193998fbcbe5b2dce4ec4->enter($__internal_226def450f0e048d7ccad7e184e64050a171b2d1af1193998fbcbe5b2dce4ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  <meta charset=\"UTF-8\" />
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 8
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 11
        echo "
</head>

<body>
  ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "  
  ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "</body>

</html>";
        
        $__internal_5a2f816def334c3e51245b1fa2040175e470d55163afd268a1df9a6f97556c49->leave($__internal_5a2f816def334c3e51245b1fa2040175e470d55163afd268a1df9a6f97556c49_prof);

        
        $__internal_226def450f0e048d7ccad7e184e64050a171b2d1af1193998fbcbe5b2dce4ec4->leave($__internal_226def450f0e048d7ccad7e184e64050a171b2d1af1193998fbcbe5b2dce4ec4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b741966cde2ce1c3504f263b1aa07db5b233c65335adb5ebd1c9f68e26cd1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b741966cde2ce1c3504f263b1aa07db5b233c65335adb5ebd1c9f68e26cd1ab->enter($__internal_4b741966cde2ce1c3504f263b1aa07db5b233c65335adb5ebd1c9f68e26cd1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1ea4af40b47866739bb0fc49acc3062983ee78973d397d58eef2a1b07eda9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ea4af40b47866739bb0fc49acc3062983ee78973d397d58eef2a1b07eda9dc->enter($__internal_d1ea4af40b47866739bb0fc49acc3062983ee78973d397d58eef2a1b07eda9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Título base ";
        
        $__internal_d1ea4af40b47866739bb0fc49acc3062983ee78973d397d58eef2a1b07eda9dc->leave($__internal_d1ea4af40b47866739bb0fc49acc3062983ee78973d397d58eef2a1b07eda9dc_prof);

        
        $__internal_4b741966cde2ce1c3504f263b1aa07db5b233c65335adb5ebd1c9f68e26cd1ab->leave($__internal_4b741966cde2ce1c3504f263b1aa07db5b233c65335adb5ebd1c9f68e26cd1ab_prof);

    }

    // line 8
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_d92a622ef86c5b837798fc86dbd5f7c48130be9ed14f25e7f6999e03d6422238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92a622ef86c5b837798fc86dbd5f7c48130be9ed14f25e7f6999e03d6422238->enter($__internal_d92a622ef86c5b837798fc86dbd5f7c48130be9ed14f25e7f6999e03d6422238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        $__internal_44a4c892a8e6cb2124576024101aa6f6f586ebd27bc832f2ee543388208d96bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a4c892a8e6cb2124576024101aa6f6f586ebd27bc832f2ee543388208d96bf->enter($__internal_44a4c892a8e6cb2124576024101aa6f6f586ebd27bc832f2ee543388208d96bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        // line 9
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> ";
        
        $__internal_44a4c892a8e6cb2124576024101aa6f6f586ebd27bc832f2ee543388208d96bf->leave($__internal_44a4c892a8e6cb2124576024101aa6f6f586ebd27bc832f2ee543388208d96bf_prof);

        
        $__internal_d92a622ef86c5b837798fc86dbd5f7c48130be9ed14f25e7f6999e03d6422238->leave($__internal_d92a622ef86c5b837798fc86dbd5f7c48130be9ed14f25e7f6999e03d6422238_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_7a12d0903712942c05cf8b6cfb05b00c0267c66b9813c5ac2b788e42bd18d503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a12d0903712942c05cf8b6cfb05b00c0267c66b9813c5ac2b788e42bd18d503->enter($__internal_7a12d0903712942c05cf8b6cfb05b00c0267c66b9813c5ac2b788e42bd18d503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_535f9cd609a019f371e9fcbe8fcfeea4775fbe8c8ed8daed9c601b1fde92dec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535f9cd609a019f371e9fcbe8fcfeea4775fbe8c8ed8daed9c601b1fde92dec5->enter($__internal_535f9cd609a019f371e9fcbe8fcfeea4775fbe8c8ed8daed9c601b1fde92dec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
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
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Inicio</a></li>
        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo1");
        echo "\"> Módulo 1</a></li>
        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo2");
        echo "\"> Módulo 2</a></li>
        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulo3");
        echo "\"> Módulo 3</a></li>
        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\"> Administración</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 36
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->getSourceContext()); })()), "user", array())) {
            // line 37
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "user", array()), "iduser", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "user", array()), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
      ";
        } else {
            // line 40
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> Registro</a></li>
        <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      ";
        }
        // line 43
        echo "      </ul>
    </div>
  </div>
</nav>

  ";
        
        $__internal_535f9cd609a019f371e9fcbe8fcfeea4775fbe8c8ed8daed9c601b1fde92dec5->leave($__internal_535f9cd609a019f371e9fcbe8fcfeea4775fbe8c8ed8daed9c601b1fde92dec5_prof);

        
        $__internal_7a12d0903712942c05cf8b6cfb05b00c0267c66b9813c5ac2b788e42bd18d503->leave($__internal_7a12d0903712942c05cf8b6cfb05b00c0267c66b9813c5ac2b788e42bd18d503_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_40c35799886ce8e24d01bccc6f3102736813e2f5bbbfd92e7a355815bdc57d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c35799886ce8e24d01bccc6f3102736813e2f5bbbfd92e7a355815bdc57d38->enter($__internal_40c35799886ce8e24d01bccc6f3102736813e2f5bbbfd92e7a355815bdc57d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8189db1ae89f31c7d46ab40bda7b0338aa1535394a652fdaade4a0b1b66c6bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8189db1ae89f31c7d46ab40bda7b0338aa1535394a652fdaade4a0b1b66c6bfb->enter($__internal_8189db1ae89f31c7d46ab40bda7b0338aa1535394a652fdaade4a0b1b66c6bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
  <!-->Esto se reemplaza con los body de cada pagina
  <-->

    ";
        
        $__internal_8189db1ae89f31c7d46ab40bda7b0338aa1535394a652fdaade4a0b1b66c6bfb->leave($__internal_8189db1ae89f31c7d46ab40bda7b0338aa1535394a652fdaade4a0b1b66c6bfb_prof);

        
        $__internal_40c35799886ce8e24d01bccc6f3102736813e2f5bbbfd92e7a355815bdc57d38->leave($__internal_40c35799886ce8e24d01bccc6f3102736813e2f5bbbfd92e7a355815bdc57d38_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1e97bc7a9f7bb172148ba1e7b3d57e25e229c5ed0f35218444bbc10311a1a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e97bc7a9f7bb172148ba1e7b3d57e25e229c5ed0f35218444bbc10311a1a85->enter($__internal_d1e97bc7a9f7bb172148ba1e7b3d57e25e229c5ed0f35218444bbc10311a1a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b68123d4a1d4070e02ac7ae73dffe33729b2001fca95519096a7a179c3a1c40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68123d4a1d4070e02ac7ae73dffe33729b2001fca95519096a7a179c3a1c40e->enter($__internal_b68123d4a1d4070e02ac7ae73dffe33729b2001fca95519096a7a179c3a1c40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
      crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_b68123d4a1d4070e02ac7ae73dffe33729b2001fca95519096a7a179c3a1c40e->leave($__internal_b68123d4a1d4070e02ac7ae73dffe33729b2001fca95519096a7a179c3a1c40e_prof);

        
        $__internal_d1e97bc7a9f7bb172148ba1e7b3d57e25e229c5ed0f35218444bbc10311a1a85->leave($__internal_d1e97bc7a9f7bb172148ba1e7b3d57e25e229c5ed0f35218444bbc10311a1a85_prof);

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
        return array (  230 => 56,  221 => 55,  207 => 51,  198 => 50,  183 => 43,  178 => 41,  173 => 40,  168 => 38,  161 => 37,  159 => 36,  153 => 33,  149 => 32,  145 => 31,  141 => 30,  137 => 29,  122 => 16,  113 => 15,  102 => 9,  93 => 8,  75 => 7,  63 => 63,  60 => 55,  58 => 50,  55 => 49,  53 => 15,  47 => 11,  45 => 8,  41 => 7,  36 => 5,  30 => 1,);
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

  {% endblock %}
  
  {% block body %}

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

<?php

/* ::base.html.twig */
class __TwigTemplate_fc87ce8f16c08752a46796b482c68b61fc0d0a8f9ea649b5f6f9a64719b76ee3 extends Twig_Template
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
        $__internal_3c4f1ee738a9c6c4cb44898b757d803e3349b7a5724d10b0b605864397ea09ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4f1ee738a9c6c4cb44898b757d803e3349b7a5724d10b0b605864397ea09ed->enter($__internal_3c4f1ee738a9c6c4cb44898b757d803e3349b7a5724d10b0b605864397ea09ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e251882b59bc3de4051eab37321b3e965c2d3478791d06f95947d98850020cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e251882b59bc3de4051eab37321b3e965c2d3478791d06f95947d98850020cef->enter($__internal_e251882b59bc3de4051eab37321b3e965c2d3478791d06f95947d98850020cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 51
        echo " ";
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</body>

</html>";
        
        $__internal_3c4f1ee738a9c6c4cb44898b757d803e3349b7a5724d10b0b605864397ea09ed->leave($__internal_3c4f1ee738a9c6c4cb44898b757d803e3349b7a5724d10b0b605864397ea09ed_prof);

        
        $__internal_e251882b59bc3de4051eab37321b3e965c2d3478791d06f95947d98850020cef->leave($__internal_e251882b59bc3de4051eab37321b3e965c2d3478791d06f95947d98850020cef_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_25db32cabb6e4232a5ac94ce61acf59617f278e46c2d984fe3319d0f504264c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25db32cabb6e4232a5ac94ce61acf59617f278e46c2d984fe3319d0f504264c2->enter($__internal_25db32cabb6e4232a5ac94ce61acf59617f278e46c2d984fe3319d0f504264c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_727fc592c2b5bea782e888db5c98539693d53f0c5ee244dd943d8d367432c8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727fc592c2b5bea782e888db5c98539693d53f0c5ee244dd943d8d367432c8c6->enter($__internal_727fc592c2b5bea782e888db5c98539693d53f0c5ee244dd943d8d367432c8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Título base ";
        
        $__internal_727fc592c2b5bea782e888db5c98539693d53f0c5ee244dd943d8d367432c8c6->leave($__internal_727fc592c2b5bea782e888db5c98539693d53f0c5ee244dd943d8d367432c8c6_prof);

        
        $__internal_25db32cabb6e4232a5ac94ce61acf59617f278e46c2d984fe3319d0f504264c2->leave($__internal_25db32cabb6e4232a5ac94ce61acf59617f278e46c2d984fe3319d0f504264c2_prof);

    }

    // line 12
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_d052bc68d099af62b2b3c3b24307e2acb28e1dc0748ac945926beae78d86f9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d052bc68d099af62b2b3c3b24307e2acb28e1dc0748ac945926beae78d86f9ca->enter($__internal_d052bc68d099af62b2b3c3b24307e2acb28e1dc0748ac945926beae78d86f9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        $__internal_568fa7e9cbab572d8a0aaf32347b54e2bf14f09547a967d2a851250731ff6741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568fa7e9cbab572d8a0aaf32347b54e2bf14f09547a967d2a851250731ff6741->enter($__internal_568fa7e9cbab572d8a0aaf32347b54e2bf14f09547a967d2a851250731ff6741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        // line 13
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> ";
        
        $__internal_568fa7e9cbab572d8a0aaf32347b54e2bf14f09547a967d2a851250731ff6741->leave($__internal_568fa7e9cbab572d8a0aaf32347b54e2bf14f09547a967d2a851250731ff6741_prof);

        
        $__internal_d052bc68d099af62b2b3c3b24307e2acb28e1dc0748ac945926beae78d86f9ca->leave($__internal_d052bc68d099af62b2b3c3b24307e2acb28e1dc0748ac945926beae78d86f9ca_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_b349d0e39a8f118e998348390f8f3e614a6cc80fd4556ebc7e155e0a2b3825df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b349d0e39a8f118e998348390f8f3e614a6cc80fd4556ebc7e155e0a2b3825df->enter($__internal_b349d0e39a8f118e998348390f8f3e614a6cc80fd4556ebc7e155e0a2b3825df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1d54582c73127e681a6743816afe6e7386b9ac4b6812405aaba8320dfe034e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d54582c73127e681a6743816afe6e7386b9ac4b6812405aaba8320dfe034e9c->enter($__internal_1d54582c73127e681a6743816afe6e7386b9ac4b6812405aaba8320dfe034e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo "\">Módulo 2</a>></li>
        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\"> Administración</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 39
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->getSourceContext()); })()), "user", array())) {
            // line 40
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("iduser" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()), "iduser", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
      ";
        } else {
            // line 43
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> Registro</a></li>
        <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      ";
        }
        // line 46
        echo "      </ul>
    </div>
  </div>
</nav>

  ";
        
        $__internal_1d54582c73127e681a6743816afe6e7386b9ac4b6812405aaba8320dfe034e9c->leave($__internal_1d54582c73127e681a6743816afe6e7386b9ac4b6812405aaba8320dfe034e9c_prof);

        
        $__internal_b349d0e39a8f118e998348390f8f3e614a6cc80fd4556ebc7e155e0a2b3825df->leave($__internal_b349d0e39a8f118e998348390f8f3e614a6cc80fd4556ebc7e155e0a2b3825df_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_654107e560cea16e0ad0bc35fa7ba9dc46bd5b12c9f69655d748d64d2dd52183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654107e560cea16e0ad0bc35fa7ba9dc46bd5b12c9f69655d748d64d2dd52183->enter($__internal_654107e560cea16e0ad0bc35fa7ba9dc46bd5b12c9f69655d748d64d2dd52183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec39e044c1163bc41477872456c60febee9ea045188cfdd20f7b99e21c52b7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec39e044c1163bc41477872456c60febee9ea045188cfdd20f7b99e21c52b7bd->enter($__internal_ec39e044c1163bc41477872456c60febee9ea045188cfdd20f7b99e21c52b7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "
  <!-->Esto se reemplaza con los body de cada pagina
  <-->

    ";
        
        $__internal_ec39e044c1163bc41477872456c60febee9ea045188cfdd20f7b99e21c52b7bd->leave($__internal_ec39e044c1163bc41477872456c60febee9ea045188cfdd20f7b99e21c52b7bd_prof);

        
        $__internal_654107e560cea16e0ad0bc35fa7ba9dc46bd5b12c9f69655d748d64d2dd52183->leave($__internal_654107e560cea16e0ad0bc35fa7ba9dc46bd5b12c9f69655d748d64d2dd52183_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b782a872db6cc291449709ee17800f6768f6c04f9fe9b54bd8312443fe040c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b782a872db6cc291449709ee17800f6768f6c04f9fe9b54bd8312443fe040c35->enter($__internal_b782a872db6cc291449709ee17800f6768f6c04f9fe9b54bd8312443fe040c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4a5c00c507b1e382548931446f3e7c0a1069336e5cb00e7a1c0d90fdb34bdf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5c00c507b1e382548931446f3e7c0a1069336e5cb00e7a1c0d90fdb34bdf2f->enter($__internal_4a5c00c507b1e382548931446f3e7c0a1069336e5cb00e7a1c0d90fdb34bdf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
      crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
      crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_4a5c00c507b1e382548931446f3e7c0a1069336e5cb00e7a1c0d90fdb34bdf2f->leave($__internal_4a5c00c507b1e382548931446f3e7c0a1069336e5cb00e7a1c0d90fdb34bdf2f_prof);

        
        $__internal_b782a872db6cc291449709ee17800f6768f6c04f9fe9b54bd8312443fe040c35->leave($__internal_b782a872db6cc291449709ee17800f6768f6c04f9fe9b54bd8312443fe040c35_prof);

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
        return array (  228 => 57,  219 => 56,  205 => 52,  196 => 51,  181 => 46,  176 => 44,  171 => 43,  166 => 41,  159 => 40,  157 => 39,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  124 => 20,  115 => 19,  104 => 13,  95 => 12,  77 => 11,  65 => 64,  62 => 56,  59 => 51,  57 => 19,  51 => 15,  49 => 12,  45 => 11,  40 => 9,  30 => 1,);
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
        <li><a href=\"{{ path('modulo2') }}\">Módulo 2</a>></li>
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

<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b530ac2a0cea5ebca63afb9a208a607252537ee7a82d660acd7881480962ca86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6225e582bc2ef2c3d2d609907360bdd390837a41a0e3e9048a8ec1dc539f425d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6225e582bc2ef2c3d2d609907360bdd390837a41a0e3e9048a8ec1dc539f425d->enter($__internal_6225e582bc2ef2c3d2d609907360bdd390837a41a0e3e9048a8ec1dc539f425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2deb30bd8baa1745dc0495877283c275dd57df675ea214fb9f74715258f89b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2deb30bd8baa1745dc0495877283c275dd57df675ea214fb9f74715258f89b11->enter($__internal_2deb30bd8baa1745dc0495877283c275dd57df675ea214fb9f74715258f89b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6225e582bc2ef2c3d2d609907360bdd390837a41a0e3e9048a8ec1dc539f425d->leave($__internal_6225e582bc2ef2c3d2d609907360bdd390837a41a0e3e9048a8ec1dc539f425d_prof);

        
        $__internal_2deb30bd8baa1745dc0495877283c275dd57df675ea214fb9f74715258f89b11->leave($__internal_2deb30bd8baa1745dc0495877283c275dd57df675ea214fb9f74715258f89b11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5d2a54114808305ffa548286bd4591d6b164f0f4336c5b8d67eecf0225423e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d2a54114808305ffa548286bd4591d6b164f0f4336c5b8d67eecf0225423e6->enter($__internal_c5d2a54114808305ffa548286bd4591d6b164f0f4336c5b8d67eecf0225423e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a8243caa2258a193938c570b07908df85a65d2e4efc9b557605d6aa77fe9fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8243caa2258a193938c570b07908df85a65d2e4efc9b557605d6aa77fe9fe1->enter($__internal_6a8243caa2258a193938c570b07908df85a65d2e4efc9b557605d6aa77fe9fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6a8243caa2258a193938c570b07908df85a65d2e4efc9b557605d6aa77fe9fe1->leave($__internal_6a8243caa2258a193938c570b07908df85a65d2e4efc9b557605d6aa77fe9fe1_prof);

        
        $__internal_c5d2a54114808305ffa548286bd4591d6b164f0f4336c5b8d67eecf0225423e6->leave($__internal_c5d2a54114808305ffa548286bd4591d6b164f0f4336c5b8d67eecf0225423e6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6eaf23db50ecf95583713d9418fc7dfefb5364800f0aae36ba2f1bf84341c739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eaf23db50ecf95583713d9418fc7dfefb5364800f0aae36ba2f1bf84341c739->enter($__internal_6eaf23db50ecf95583713d9418fc7dfefb5364800f0aae36ba2f1bf84341c739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ea125667b746ad2bcc9a759bfaec208373e8fe32253b6fa996754abdc6de444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea125667b746ad2bcc9a759bfaec208373e8fe32253b6fa996754abdc6de444->enter($__internal_9ea125667b746ad2bcc9a759bfaec208373e8fe32253b6fa996754abdc6de444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9ea125667b746ad2bcc9a759bfaec208373e8fe32253b6fa996754abdc6de444->leave($__internal_9ea125667b746ad2bcc9a759bfaec208373e8fe32253b6fa996754abdc6de444_prof);

        
        $__internal_6eaf23db50ecf95583713d9418fc7dfefb5364800f0aae36ba2f1bf84341c739->leave($__internal_6eaf23db50ecf95583713d9418fc7dfefb5364800f0aae36ba2f1bf84341c739_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_315637640ba8b65f8a66b9fb70a852a92f31510dec37ce82b122f01acb90ef38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315637640ba8b65f8a66b9fb70a852a92f31510dec37ce82b122f01acb90ef38->enter($__internal_315637640ba8b65f8a66b9fb70a852a92f31510dec37ce82b122f01acb90ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f79c8ff5180df524ff1e623d4bb85c530a28a66d76b834dd0417dd0760324f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f79c8ff5180df524ff1e623d4bb85c530a28a66d76b834dd0417dd0760324f4->enter($__internal_7f79c8ff5180df524ff1e623d4bb85c530a28a66d76b834dd0417dd0760324f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f79c8ff5180df524ff1e623d4bb85c530a28a66d76b834dd0417dd0760324f4->leave($__internal_7f79c8ff5180df524ff1e623d4bb85c530a28a66d76b834dd0417dd0760324f4_prof);

        
        $__internal_315637640ba8b65f8a66b9fb70a852a92f31510dec37ce82b122f01acb90ef38->leave($__internal_315637640ba8b65f8a66b9fb70a852a92f31510dec37ce82b122f01acb90ef38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

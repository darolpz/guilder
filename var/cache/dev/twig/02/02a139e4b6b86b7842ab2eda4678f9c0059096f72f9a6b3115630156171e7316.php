<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_26ce063fe9be192b956753213ac612bba2e41dc305aa519593807e55e9632f55 extends Twig_Template
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
        $__internal_27fcbbf69da59604b43b6628d083a1141e1f02e035b0d0f6d8ac57cffc886e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fcbbf69da59604b43b6628d083a1141e1f02e035b0d0f6d8ac57cffc886e02->enter($__internal_27fcbbf69da59604b43b6628d083a1141e1f02e035b0d0f6d8ac57cffc886e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_952a371fd28b55f9cc03cd53ae60d3bb0370141b79f4afe77b3a6ccf957f17e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952a371fd28b55f9cc03cd53ae60d3bb0370141b79f4afe77b3a6ccf957f17e2->enter($__internal_952a371fd28b55f9cc03cd53ae60d3bb0370141b79f4afe77b3a6ccf957f17e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_27fcbbf69da59604b43b6628d083a1141e1f02e035b0d0f6d8ac57cffc886e02->leave($__internal_27fcbbf69da59604b43b6628d083a1141e1f02e035b0d0f6d8ac57cffc886e02_prof);

        
        $__internal_952a371fd28b55f9cc03cd53ae60d3bb0370141b79f4afe77b3a6ccf957f17e2->leave($__internal_952a371fd28b55f9cc03cd53ae60d3bb0370141b79f4afe77b3a6ccf957f17e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aacfc3d32350b685890e87c77840d48dfaa88f7e9a1fda3810bd86682e0311cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacfc3d32350b685890e87c77840d48dfaa88f7e9a1fda3810bd86682e0311cb->enter($__internal_aacfc3d32350b685890e87c77840d48dfaa88f7e9a1fda3810bd86682e0311cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe155faba6b9e7295cb6f27283b27b235c951660482b4b1e1e4f3cf1df60ea56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe155faba6b9e7295cb6f27283b27b235c951660482b4b1e1e4f3cf1df60ea56->enter($__internal_fe155faba6b9e7295cb6f27283b27b235c951660482b4b1e1e4f3cf1df60ea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fe155faba6b9e7295cb6f27283b27b235c951660482b4b1e1e4f3cf1df60ea56->leave($__internal_fe155faba6b9e7295cb6f27283b27b235c951660482b4b1e1e4f3cf1df60ea56_prof);

        
        $__internal_aacfc3d32350b685890e87c77840d48dfaa88f7e9a1fda3810bd86682e0311cb->leave($__internal_aacfc3d32350b685890e87c77840d48dfaa88f7e9a1fda3810bd86682e0311cb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_713c760a5d3b9f5461968635964ff9e87cc1b1270baef5b122ff8357c525b5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713c760a5d3b9f5461968635964ff9e87cc1b1270baef5b122ff8357c525b5f9->enter($__internal_713c760a5d3b9f5461968635964ff9e87cc1b1270baef5b122ff8357c525b5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98a2c7fe92ca27db40d3d50445ba838a6b7ae8ad8ad490ab7c953667de946977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a2c7fe92ca27db40d3d50445ba838a6b7ae8ad8ad490ab7c953667de946977->enter($__internal_98a2c7fe92ca27db40d3d50445ba838a6b7ae8ad8ad490ab7c953667de946977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_98a2c7fe92ca27db40d3d50445ba838a6b7ae8ad8ad490ab7c953667de946977->leave($__internal_98a2c7fe92ca27db40d3d50445ba838a6b7ae8ad8ad490ab7c953667de946977_prof);

        
        $__internal_713c760a5d3b9f5461968635964ff9e87cc1b1270baef5b122ff8357c525b5f9->leave($__internal_713c760a5d3b9f5461968635964ff9e87cc1b1270baef5b122ff8357c525b5f9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a84a2b56960be6ba03256876eb916fc6ae85c85c2fb1e5c7de2fa2f6937b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a84a2b56960be6ba03256876eb916fc6ae85c85c2fb1e5c7de2fa2f6937b09->enter($__internal_52a84a2b56960be6ba03256876eb916fc6ae85c85c2fb1e5c7de2fa2f6937b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55cf25d57e35ae1c0672476d710014ebd665ca71fe770b3778664f6f40a1b5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cf25d57e35ae1c0672476d710014ebd665ca71fe770b3778664f6f40a1b5a7->enter($__internal_55cf25d57e35ae1c0672476d710014ebd665ca71fe770b3778664f6f40a1b5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55cf25d57e35ae1c0672476d710014ebd665ca71fe770b3778664f6f40a1b5a7->leave($__internal_55cf25d57e35ae1c0672476d710014ebd665ca71fe770b3778664f6f40a1b5a7_prof);

        
        $__internal_52a84a2b56960be6ba03256876eb916fc6ae85c85c2fb1e5c7de2fa2f6937b09->leave($__internal_52a84a2b56960be6ba03256876eb916fc6ae85c85c2fb1e5c7de2fa2f6937b09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}

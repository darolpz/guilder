<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_19b0ec4160d2ede3f6286a1db947f37fc4d7941389e6b417f6c32a5361e1e4ad extends Twig_Template
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
        $__internal_78b6cc9780188fc83bc4fb4bca9c4bbcffc735c68edab55052ba75de54ad27fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b6cc9780188fc83bc4fb4bca9c4bbcffc735c68edab55052ba75de54ad27fe->enter($__internal_78b6cc9780188fc83bc4fb4bca9c4bbcffc735c68edab55052ba75de54ad27fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_a774e826be7cfb7b82d37bf0088074edd6b48b99de273317f05d485a2cf796a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a774e826be7cfb7b82d37bf0088074edd6b48b99de273317f05d485a2cf796a2->enter($__internal_a774e826be7cfb7b82d37bf0088074edd6b48b99de273317f05d485a2cf796a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_78b6cc9780188fc83bc4fb4bca9c4bbcffc735c68edab55052ba75de54ad27fe->leave($__internal_78b6cc9780188fc83bc4fb4bca9c4bbcffc735c68edab55052ba75de54ad27fe_prof);

        
        $__internal_a774e826be7cfb7b82d37bf0088074edd6b48b99de273317f05d485a2cf796a2->leave($__internal_a774e826be7cfb7b82d37bf0088074edd6b48b99de273317f05d485a2cf796a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_430ee689747487cc5a750950738ff2d0570e62b1a1e20cfc245cdcc2dd225382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430ee689747487cc5a750950738ff2d0570e62b1a1e20cfc245cdcc2dd225382->enter($__internal_430ee689747487cc5a750950738ff2d0570e62b1a1e20cfc245cdcc2dd225382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5c0225a46e33b71dac48b25c86b231b77d4ce661aef07fcdae604c37d2a86df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c0225a46e33b71dac48b25c86b231b77d4ce661aef07fcdae604c37d2a86df->enter($__internal_f5c0225a46e33b71dac48b25c86b231b77d4ce661aef07fcdae604c37d2a86df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f5c0225a46e33b71dac48b25c86b231b77d4ce661aef07fcdae604c37d2a86df->leave($__internal_f5c0225a46e33b71dac48b25c86b231b77d4ce661aef07fcdae604c37d2a86df_prof);

        
        $__internal_430ee689747487cc5a750950738ff2d0570e62b1a1e20cfc245cdcc2dd225382->leave($__internal_430ee689747487cc5a750950738ff2d0570e62b1a1e20cfc245cdcc2dd225382_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_09805b38702548062b9322476a54ce5a34ec08fa9a7b564d866ed73a69a85d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09805b38702548062b9322476a54ce5a34ec08fa9a7b564d866ed73a69a85d05->enter($__internal_09805b38702548062b9322476a54ce5a34ec08fa9a7b564d866ed73a69a85d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_33bd15305182221740f746c3aab65030529ce0567350eccdb58c25989abfbece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bd15305182221740f746c3aab65030529ce0567350eccdb58c25989abfbece->enter($__internal_33bd15305182221740f746c3aab65030529ce0567350eccdb58c25989abfbece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_33bd15305182221740f746c3aab65030529ce0567350eccdb58c25989abfbece->leave($__internal_33bd15305182221740f746c3aab65030529ce0567350eccdb58c25989abfbece_prof);

        
        $__internal_09805b38702548062b9322476a54ce5a34ec08fa9a7b564d866ed73a69a85d05->leave($__internal_09805b38702548062b9322476a54ce5a34ec08fa9a7b564d866ed73a69a85d05_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea00396449020e0f0f666cadc52547ddd259afd5d7292c2c238db13c9097f791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea00396449020e0f0f666cadc52547ddd259afd5d7292c2c238db13c9097f791->enter($__internal_ea00396449020e0f0f666cadc52547ddd259afd5d7292c2c238db13c9097f791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f7bcb0963815eae1fcc38ad077e3a6888316c58540b64c67fe84eb8969a88d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7bcb0963815eae1fcc38ad077e3a6888316c58540b64c67fe84eb8969a88d7->enter($__internal_6f7bcb0963815eae1fcc38ad077e3a6888316c58540b64c67fe84eb8969a88d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f7bcb0963815eae1fcc38ad077e3a6888316c58540b64c67fe84eb8969a88d7->leave($__internal_6f7bcb0963815eae1fcc38ad077e3a6888316c58540b64c67fe84eb8969a88d7_prof);

        
        $__internal_ea00396449020e0f0f666cadc52547ddd259afd5d7292c2c238db13c9097f791->leave($__internal_ea00396449020e0f0f666cadc52547ddd259afd5d7292c2c238db13c9097f791_prof);

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

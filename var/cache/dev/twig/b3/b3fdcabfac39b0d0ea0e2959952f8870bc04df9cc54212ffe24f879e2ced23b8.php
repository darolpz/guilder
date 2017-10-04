<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
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
        $__internal_c885e9aad2efe7ce5b725342ccd14247ab61bebf11e76f5cae091b63bc23f00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c885e9aad2efe7ce5b725342ccd14247ab61bebf11e76f5cae091b63bc23f00a->enter($__internal_c885e9aad2efe7ce5b725342ccd14247ab61bebf11e76f5cae091b63bc23f00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_19949b59c5a10c0570afc323e368f9e28c4d292a3c07d3c6d5250db8f3ca128b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19949b59c5a10c0570afc323e368f9e28c4d292a3c07d3c6d5250db8f3ca128b->enter($__internal_19949b59c5a10c0570afc323e368f9e28c4d292a3c07d3c6d5250db8f3ca128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c885e9aad2efe7ce5b725342ccd14247ab61bebf11e76f5cae091b63bc23f00a->leave($__internal_c885e9aad2efe7ce5b725342ccd14247ab61bebf11e76f5cae091b63bc23f00a_prof);

        
        $__internal_19949b59c5a10c0570afc323e368f9e28c4d292a3c07d3c6d5250db8f3ca128b->leave($__internal_19949b59c5a10c0570afc323e368f9e28c4d292a3c07d3c6d5250db8f3ca128b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae234c6c3706e0644f42997413569a67f1c4027895d56cbf5aee2ca5dd861224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae234c6c3706e0644f42997413569a67f1c4027895d56cbf5aee2ca5dd861224->enter($__internal_ae234c6c3706e0644f42997413569a67f1c4027895d56cbf5aee2ca5dd861224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e85507c52047576de4c491ecbd127d2bb366c6d9409ee461f38bb555f2708749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85507c52047576de4c491ecbd127d2bb366c6d9409ee461f38bb555f2708749->enter($__internal_e85507c52047576de4c491ecbd127d2bb366c6d9409ee461f38bb555f2708749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e85507c52047576de4c491ecbd127d2bb366c6d9409ee461f38bb555f2708749->leave($__internal_e85507c52047576de4c491ecbd127d2bb366c6d9409ee461f38bb555f2708749_prof);

        
        $__internal_ae234c6c3706e0644f42997413569a67f1c4027895d56cbf5aee2ca5dd861224->leave($__internal_ae234c6c3706e0644f42997413569a67f1c4027895d56cbf5aee2ca5dd861224_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e124fc59e39b63ec5f75fa40dcf975d04c0fed64b46ba7024b906d0feca6ea15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e124fc59e39b63ec5f75fa40dcf975d04c0fed64b46ba7024b906d0feca6ea15->enter($__internal_e124fc59e39b63ec5f75fa40dcf975d04c0fed64b46ba7024b906d0feca6ea15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e2b9503850a48d671a42726b98bfca393139a9f4421ca4f24189d25f8116540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2b9503850a48d671a42726b98bfca393139a9f4421ca4f24189d25f8116540->enter($__internal_8e2b9503850a48d671a42726b98bfca393139a9f4421ca4f24189d25f8116540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8e2b9503850a48d671a42726b98bfca393139a9f4421ca4f24189d25f8116540->leave($__internal_8e2b9503850a48d671a42726b98bfca393139a9f4421ca4f24189d25f8116540_prof);

        
        $__internal_e124fc59e39b63ec5f75fa40dcf975d04c0fed64b46ba7024b906d0feca6ea15->leave($__internal_e124fc59e39b63ec5f75fa40dcf975d04c0fed64b46ba7024b906d0feca6ea15_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b486436d853a613978e83d0186c810a98c8fa00a77b741bcfad684ce144ea144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b486436d853a613978e83d0186c810a98c8fa00a77b741bcfad684ce144ea144->enter($__internal_b486436d853a613978e83d0186c810a98c8fa00a77b741bcfad684ce144ea144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb8ab37178575a03d4a27c2132156501405dce1911eec396d78f86290fa816d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8ab37178575a03d4a27c2132156501405dce1911eec396d78f86290fa816d8->enter($__internal_cb8ab37178575a03d4a27c2132156501405dce1911eec396d78f86290fa816d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb8ab37178575a03d4a27c2132156501405dce1911eec396d78f86290fa816d8->leave($__internal_cb8ab37178575a03d4a27c2132156501405dce1911eec396d78f86290fa816d8_prof);

        
        $__internal_b486436d853a613978e83d0186c810a98c8fa00a77b741bcfad684ce144ea144->leave($__internal_b486436d853a613978e83d0186c810a98c8fa00a77b741bcfad684ce144ea144_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\repo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

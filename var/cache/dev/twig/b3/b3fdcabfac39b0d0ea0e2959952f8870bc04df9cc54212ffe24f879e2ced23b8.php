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
        $__internal_cbf9f32a83b00b3a130ed9dd467ac8c27e303e9d74e63b1952a5cf1783cdbfdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf9f32a83b00b3a130ed9dd467ac8c27e303e9d74e63b1952a5cf1783cdbfdb->enter($__internal_cbf9f32a83b00b3a130ed9dd467ac8c27e303e9d74e63b1952a5cf1783cdbfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ed588a374fb8b14cc0d4c34c1203f79b4c49b71a2611caed2b1c25a2926ed409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed588a374fb8b14cc0d4c34c1203f79b4c49b71a2611caed2b1c25a2926ed409->enter($__internal_ed588a374fb8b14cc0d4c34c1203f79b4c49b71a2611caed2b1c25a2926ed409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cbf9f32a83b00b3a130ed9dd467ac8c27e303e9d74e63b1952a5cf1783cdbfdb->leave($__internal_cbf9f32a83b00b3a130ed9dd467ac8c27e303e9d74e63b1952a5cf1783cdbfdb_prof);

        
        $__internal_ed588a374fb8b14cc0d4c34c1203f79b4c49b71a2611caed2b1c25a2926ed409->leave($__internal_ed588a374fb8b14cc0d4c34c1203f79b4c49b71a2611caed2b1c25a2926ed409_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70826c8b1ae3918a240a1686f0b237c2b048c77eafc388286531386ab8c3e0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70826c8b1ae3918a240a1686f0b237c2b048c77eafc388286531386ab8c3e0e2->enter($__internal_70826c8b1ae3918a240a1686f0b237c2b048c77eafc388286531386ab8c3e0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_984e6d535752c1f5d07e43d62d67c4bf9da5607904eb340f32bade902b83447a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984e6d535752c1f5d07e43d62d67c4bf9da5607904eb340f32bade902b83447a->enter($__internal_984e6d535752c1f5d07e43d62d67c4bf9da5607904eb340f32bade902b83447a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_984e6d535752c1f5d07e43d62d67c4bf9da5607904eb340f32bade902b83447a->leave($__internal_984e6d535752c1f5d07e43d62d67c4bf9da5607904eb340f32bade902b83447a_prof);

        
        $__internal_70826c8b1ae3918a240a1686f0b237c2b048c77eafc388286531386ab8c3e0e2->leave($__internal_70826c8b1ae3918a240a1686f0b237c2b048c77eafc388286531386ab8c3e0e2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a04b87c77ef2e0076a6ed92118fe91416670c8da2106c18df9a42648bfecf9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04b87c77ef2e0076a6ed92118fe91416670c8da2106c18df9a42648bfecf9cd->enter($__internal_a04b87c77ef2e0076a6ed92118fe91416670c8da2106c18df9a42648bfecf9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e9637686053ba62732cffe13f00525b45dc7ba04b8aba622c9253b774c64b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9637686053ba62732cffe13f00525b45dc7ba04b8aba622c9253b774c64b32->enter($__internal_3e9637686053ba62732cffe13f00525b45dc7ba04b8aba622c9253b774c64b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3e9637686053ba62732cffe13f00525b45dc7ba04b8aba622c9253b774c64b32->leave($__internal_3e9637686053ba62732cffe13f00525b45dc7ba04b8aba622c9253b774c64b32_prof);

        
        $__internal_a04b87c77ef2e0076a6ed92118fe91416670c8da2106c18df9a42648bfecf9cd->leave($__internal_a04b87c77ef2e0076a6ed92118fe91416670c8da2106c18df9a42648bfecf9cd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ee289a0f7342fff0723e5e70b36497e3485deac9a0bddb8720a2e298d4a6f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee289a0f7342fff0723e5e70b36497e3485deac9a0bddb8720a2e298d4a6f2d->enter($__internal_7ee289a0f7342fff0723e5e70b36497e3485deac9a0bddb8720a2e298d4a6f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b105ef2ce6b2e685a18a68d8b26496db9272089f9b53fd7df814e00081544ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b105ef2ce6b2e685a18a68d8b26496db9272089f9b53fd7df814e00081544ed6->enter($__internal_b105ef2ce6b2e685a18a68d8b26496db9272089f9b53fd7df814e00081544ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b105ef2ce6b2e685a18a68d8b26496db9272089f9b53fd7df814e00081544ed6->leave($__internal_b105ef2ce6b2e685a18a68d8b26496db9272089f9b53fd7df814e00081544ed6_prof);

        
        $__internal_7ee289a0f7342fff0723e5e70b36497e3485deac9a0bddb8720a2e298d4a6f2d->leave($__internal_7ee289a0f7342fff0723e5e70b36497e3485deac9a0bddb8720a2e298d4a6f2d_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1406c706aafb1d29637c02dc07b8308c8d1175e94ef470af301598ed8fc617a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7f8e5bd4b4ea9eb3ce73aa2aa83ffd9ea938ace903e889d7db812c6d5aebaaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f8e5bd4b4ea9eb3ce73aa2aa83ffd9ea938ace903e889d7db812c6d5aebaaa->enter($__internal_d7f8e5bd4b4ea9eb3ce73aa2aa83ffd9ea938ace903e889d7db812c6d5aebaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_01a7ad4b4f61bb389aa123e17ce1cad03f0ad84d7b312a2c9b6397578afc647c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a7ad4b4f61bb389aa123e17ce1cad03f0ad84d7b312a2c9b6397578afc647c->enter($__internal_01a7ad4b4f61bb389aa123e17ce1cad03f0ad84d7b312a2c9b6397578afc647c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7f8e5bd4b4ea9eb3ce73aa2aa83ffd9ea938ace903e889d7db812c6d5aebaaa->leave($__internal_d7f8e5bd4b4ea9eb3ce73aa2aa83ffd9ea938ace903e889d7db812c6d5aebaaa_prof);

        
        $__internal_01a7ad4b4f61bb389aa123e17ce1cad03f0ad84d7b312a2c9b6397578afc647c->leave($__internal_01a7ad4b4f61bb389aa123e17ce1cad03f0ad84d7b312a2c9b6397578afc647c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_266055bbab25384a559d0fa5643e920dccb32434b7cd8933da722da5a4e5f8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266055bbab25384a559d0fa5643e920dccb32434b7cd8933da722da5a4e5f8c8->enter($__internal_266055bbab25384a559d0fa5643e920dccb32434b7cd8933da722da5a4e5f8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22380eabcd9bbb085b1e5d9dcaf1f2c8e7059c91c34708b70a12a513738ad61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22380eabcd9bbb085b1e5d9dcaf1f2c8e7059c91c34708b70a12a513738ad61b->enter($__internal_22380eabcd9bbb085b1e5d9dcaf1f2c8e7059c91c34708b70a12a513738ad61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_22380eabcd9bbb085b1e5d9dcaf1f2c8e7059c91c34708b70a12a513738ad61b->leave($__internal_22380eabcd9bbb085b1e5d9dcaf1f2c8e7059c91c34708b70a12a513738ad61b_prof);

        
        $__internal_266055bbab25384a559d0fa5643e920dccb32434b7cd8933da722da5a4e5f8c8->leave($__internal_266055bbab25384a559d0fa5643e920dccb32434b7cd8933da722da5a4e5f8c8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1adeac381e459ccfc3d379f112bdae0f687c81c98f535f702bbfe6bb5527d264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adeac381e459ccfc3d379f112bdae0f687c81c98f535f702bbfe6bb5527d264->enter($__internal_1adeac381e459ccfc3d379f112bdae0f687c81c98f535f702bbfe6bb5527d264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f83cc9584d7216b2c0d0e00b3e509fbffc6b8ee0ce092aa4286d4d8492dc5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f83cc9584d7216b2c0d0e00b3e509fbffc6b8ee0ce092aa4286d4d8492dc5af->enter($__internal_8f83cc9584d7216b2c0d0e00b3e509fbffc6b8ee0ce092aa4286d4d8492dc5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8f83cc9584d7216b2c0d0e00b3e509fbffc6b8ee0ce092aa4286d4d8492dc5af->leave($__internal_8f83cc9584d7216b2c0d0e00b3e509fbffc6b8ee0ce092aa4286d4d8492dc5af_prof);

        
        $__internal_1adeac381e459ccfc3d379f112bdae0f687c81c98f535f702bbfe6bb5527d264->leave($__internal_1adeac381e459ccfc3d379f112bdae0f687c81c98f535f702bbfe6bb5527d264_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

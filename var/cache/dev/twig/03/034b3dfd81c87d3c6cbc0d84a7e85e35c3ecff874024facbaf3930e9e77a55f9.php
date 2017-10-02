<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ac12c574132227140b686f2370e565f8f8810500cd69524bf391681d60e32a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_8735975f4c9a5f87c27c35a8fc5cedde15f2ddd63cab2839def8f7efc7a2725b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8735975f4c9a5f87c27c35a8fc5cedde15f2ddd63cab2839def8f7efc7a2725b->enter($__internal_8735975f4c9a5f87c27c35a8fc5cedde15f2ddd63cab2839def8f7efc7a2725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_dcd303fe9c4cdce86b90bca39c8e1a8946fa2ec09ca91062db1f38c5ec29253b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd303fe9c4cdce86b90bca39c8e1a8946fa2ec09ca91062db1f38c5ec29253b->enter($__internal_dcd303fe9c4cdce86b90bca39c8e1a8946fa2ec09ca91062db1f38c5ec29253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8735975f4c9a5f87c27c35a8fc5cedde15f2ddd63cab2839def8f7efc7a2725b->leave($__internal_8735975f4c9a5f87c27c35a8fc5cedde15f2ddd63cab2839def8f7efc7a2725b_prof);

        
        $__internal_dcd303fe9c4cdce86b90bca39c8e1a8946fa2ec09ca91062db1f38c5ec29253b->leave($__internal_dcd303fe9c4cdce86b90bca39c8e1a8946fa2ec09ca91062db1f38c5ec29253b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14e58599243eb209564d1c88ce262fcc0d9db004c5da252349cdaa1b6309becd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e58599243eb209564d1c88ce262fcc0d9db004c5da252349cdaa1b6309becd->enter($__internal_14e58599243eb209564d1c88ce262fcc0d9db004c5da252349cdaa1b6309becd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3da94eaec4d9b846ca145f0fa0a9935a380fa5499fb8eddad2397357ac687878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da94eaec4d9b846ca145f0fa0a9935a380fa5499fb8eddad2397357ac687878->enter($__internal_3da94eaec4d9b846ca145f0fa0a9935a380fa5499fb8eddad2397357ac687878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3da94eaec4d9b846ca145f0fa0a9935a380fa5499fb8eddad2397357ac687878->leave($__internal_3da94eaec4d9b846ca145f0fa0a9935a380fa5499fb8eddad2397357ac687878_prof);

        
        $__internal_14e58599243eb209564d1c88ce262fcc0d9db004c5da252349cdaa1b6309becd->leave($__internal_14e58599243eb209564d1c88ce262fcc0d9db004c5da252349cdaa1b6309becd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f5cf1479dddd2f16b543b3b4c06de661e3dfc27bbb8b106f8547779720946fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5cf1479dddd2f16b543b3b4c06de661e3dfc27bbb8b106f8547779720946fa->enter($__internal_2f5cf1479dddd2f16b543b3b4c06de661e3dfc27bbb8b106f8547779720946fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3f9aa1fa37501474a6a40a7a85661497b63da9ac83231597da7a3a15ab41e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f9aa1fa37501474a6a40a7a85661497b63da9ac83231597da7a3a15ab41e22->enter($__internal_f3f9aa1fa37501474a6a40a7a85661497b63da9ac83231597da7a3a15ab41e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3f9aa1fa37501474a6a40a7a85661497b63da9ac83231597da7a3a15ab41e22->leave($__internal_f3f9aa1fa37501474a6a40a7a85661497b63da9ac83231597da7a3a15ab41e22_prof);

        
        $__internal_2f5cf1479dddd2f16b543b3b4c06de661e3dfc27bbb8b106f8547779720946fa->leave($__internal_2f5cf1479dddd2f16b543b3b4c06de661e3dfc27bbb8b106f8547779720946fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

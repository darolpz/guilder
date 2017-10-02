<?php

/* :rol:new.html.twig */
class __TwigTemplate_c3bf091875b9f79080317a43b6323d5ea4729cbdc551a3a6dc3a668c25654dcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rol:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d992173baec4c8a938642b45e2f9b8c318c5be15fbe1941789c9b9367b7bc391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d992173baec4c8a938642b45e2f9b8c318c5be15fbe1941789c9b9367b7bc391->enter($__internal_d992173baec4c8a938642b45e2f9b8c318c5be15fbe1941789c9b9367b7bc391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:new.html.twig"));

        $__internal_914cffdadbe8aa634eaa6f1a5d05cf5ae26361555c79f00b4a0aad908eaeb7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914cffdadbe8aa634eaa6f1a5d05cf5ae26361555c79f00b4a0aad908eaeb7f5->enter($__internal_914cffdadbe8aa634eaa6f1a5d05cf5ae26361555c79f00b4a0aad908eaeb7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rol:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d992173baec4c8a938642b45e2f9b8c318c5be15fbe1941789c9b9367b7bc391->leave($__internal_d992173baec4c8a938642b45e2f9b8c318c5be15fbe1941789c9b9367b7bc391_prof);

        
        $__internal_914cffdadbe8aa634eaa6f1a5d05cf5ae26361555c79f00b4a0aad908eaeb7f5->leave($__internal_914cffdadbe8aa634eaa6f1a5d05cf5ae26361555c79f00b4a0aad908eaeb7f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c09bcd59c3c16cb5a1194e2c607e8c6b6bce91d16ef3a8ca377c9814e7eca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c09bcd59c3c16cb5a1194e2c607e8c6b6bce91d16ef3a8ca377c9814e7eca3->enter($__internal_67c09bcd59c3c16cb5a1194e2c607e8c6b6bce91d16ef3a8ca377c9814e7eca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4a0ca07d705f093caaea65190bcce3ca3d0d232f453dbb8301f48eed5511b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a0ca07d705f093caaea65190bcce3ca3d0d232f453dbb8301f48eed5511b64->enter($__internal_a4a0ca07d705f093caaea65190bcce3ca3d0d232f453dbb8301f48eed5511b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rol creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a4a0ca07d705f093caaea65190bcce3ca3d0d232f453dbb8301f48eed5511b64->leave($__internal_a4a0ca07d705f093caaea65190bcce3ca3d0d232f453dbb8301f48eed5511b64_prof);

        
        $__internal_67c09bcd59c3c16cb5a1194e2c607e8c6b6bce91d16ef3a8ca377c9814e7eca3->leave($__internal_67c09bcd59c3c16cb5a1194e2c607e8c6b6bce91d16ef3a8ca377c9814e7eca3_prof);

    }

    public function getTemplateName()
    {
        return ":rol:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Rol creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('rol_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":rol:new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/rol/new.html.twig");
    }
}

<?php

/* :user:edit.html.twig */
class __TwigTemplate_132c72d11e3a0c27c5c1bfce53151bcefc23f19a52e84f09ed6af16672e1b6fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_7066a2efb3dce8ffc131d08d056d588ec976c9ac51993bf32d2016ed32c517b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7066a2efb3dce8ffc131d08d056d588ec976c9ac51993bf32d2016ed32c517b8->enter($__internal_7066a2efb3dce8ffc131d08d056d588ec976c9ac51993bf32d2016ed32c517b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_bf16c4c3900adff33fc6a0d8baad2c04ad5717dde9da7b8ed47ab70d87068ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf16c4c3900adff33fc6a0d8baad2c04ad5717dde9da7b8ed47ab70d87068ce3->enter($__internal_bf16c4c3900adff33fc6a0d8baad2c04ad5717dde9da7b8ed47ab70d87068ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7066a2efb3dce8ffc131d08d056d588ec976c9ac51993bf32d2016ed32c517b8->leave($__internal_7066a2efb3dce8ffc131d08d056d588ec976c9ac51993bf32d2016ed32c517b8_prof);

        
        $__internal_bf16c4c3900adff33fc6a0d8baad2c04ad5717dde9da7b8ed47ab70d87068ce3->leave($__internal_bf16c4c3900adff33fc6a0d8baad2c04ad5717dde9da7b8ed47ab70d87068ce3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c51f6148b3df807bcf814c7e8aa68965b1f9f2a3d9da022ce73a03055cd2d925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51f6148b3df807bcf814c7e8aa68965b1f9f2a3d9da022ce73a03055cd2d925->enter($__internal_c51f6148b3df807bcf814c7e8aa68965b1f9f2a3d9da022ce73a03055cd2d925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a0a2befb1b8cbe6e66a9e67bab634f2fb56c20af27d4efa2aef0db5761adfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0a2befb1b8cbe6e66a9e67bab634f2fb56c20af27d4efa2aef0db5761adfb5->enter($__internal_6a0a2befb1b8cbe6e66a9e67bab634f2fb56c20af27d4efa2aef0db5761adfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6a0a2befb1b8cbe6e66a9e67bab634f2fb56c20af27d4efa2aef0db5761adfb5->leave($__internal_6a0a2befb1b8cbe6e66a9e67bab634f2fb56c20af27d4efa2aef0db5761adfb5_prof);

        
        $__internal_c51f6148b3df807bcf814c7e8aa68965b1f9f2a3d9da022ce73a03055cd2d925->leave($__internal_c51f6148b3df807bcf814c7e8aa68965b1f9f2a3d9da022ce73a03055cd2d925_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/user/edit.html.twig");
    }
}

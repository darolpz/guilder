<?php

/* :user:new.html.twig */
class __TwigTemplate_1d9be73344c93c21e6a5d68652bb02f8dfa4b308aabe03a5e7d732be83ff6bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_97ae8ebb3e0bef1c2b56638e6fb2c5f1acc50d6ec3f015c1bcd2100ebc44a045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ae8ebb3e0bef1c2b56638e6fb2c5f1acc50d6ec3f015c1bcd2100ebc44a045->enter($__internal_97ae8ebb3e0bef1c2b56638e6fb2c5f1acc50d6ec3f015c1bcd2100ebc44a045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_40fe2b19a6ef823775795264b07f3973225e84f0b3516f014638d24b65b6869c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fe2b19a6ef823775795264b07f3973225e84f0b3516f014638d24b65b6869c->enter($__internal_40fe2b19a6ef823775795264b07f3973225e84f0b3516f014638d24b65b6869c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97ae8ebb3e0bef1c2b56638e6fb2c5f1acc50d6ec3f015c1bcd2100ebc44a045->leave($__internal_97ae8ebb3e0bef1c2b56638e6fb2c5f1acc50d6ec3f015c1bcd2100ebc44a045_prof);

        
        $__internal_40fe2b19a6ef823775795264b07f3973225e84f0b3516f014638d24b65b6869c->leave($__internal_40fe2b19a6ef823775795264b07f3973225e84f0b3516f014638d24b65b6869c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8af0b99cb6f4361b423eab67638d390fb4a7a1de169abf951359a30fe632d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8af0b99cb6f4361b423eab67638d390fb4a7a1de169abf951359a30fe632d4a->enter($__internal_e8af0b99cb6f4361b423eab67638d390fb4a7a1de169abf951359a30fe632d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dfd30447845b883cd4db685aaac9309df77dff8cb781f2ceb856916d5ff093d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfd30447845b883cd4db685aaac9309df77dff8cb781f2ceb856916d5ff093d->enter($__internal_8dfd30447845b883cd4db685aaac9309df77dff8cb781f2ceb856916d5ff093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8dfd30447845b883cd4db685aaac9309df77dff8cb781f2ceb856916d5ff093d->leave($__internal_8dfd30447845b883cd4db685aaac9309df77dff8cb781f2ceb856916d5ff093d_prof);

        
        $__internal_e8af0b99cb6f4361b423eab67638d390fb4a7a1de169abf951359a30fe632d4a->leave($__internal_e8af0b99cb6f4361b423eab67638d390fb4a7a1de169abf951359a30fe632d4a_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/user/new.html.twig");
    }
}

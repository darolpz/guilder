<?php

/* :registration:register.html.twig */
class __TwigTemplate_b4e634f1ce8a624c512859652a89d6218f019fe36ae5e975a254f4aeb9d7f1f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_718adcdcae5e03f58a61cd71b0784bd100c4cd929361975ea16a1eba11bbc72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718adcdcae5e03f58a61cd71b0784bd100c4cd929361975ea16a1eba11bbc72a->enter($__internal_718adcdcae5e03f58a61cd71b0784bd100c4cd929361975ea16a1eba11bbc72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":registration:register.html.twig"));

        $__internal_275a97358d526b2d60c41fbf684894a9e01e1d966e3a0c046b64895b071b57d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275a97358d526b2d60c41fbf684894a9e01e1d966e3a0c046b64895b071b57d9->enter($__internal_275a97358d526b2d60c41fbf684894a9e01e1d966e3a0c046b64895b071b57d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":registration:register.html.twig"));

        // line 2
        echo "


";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "token", array()), 'row');
        echo "

    <button type=\"submit\">Registrar</button>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_718adcdcae5e03f58a61cd71b0784bd100c4cd929361975ea16a1eba11bbc72a->leave($__internal_718adcdcae5e03f58a61cd71b0784bd100c4cd929361975ea16a1eba11bbc72a_prof);

        
        $__internal_275a97358d526b2d60c41fbf684894a9e01e1d966e3a0c046b64895b071b57d9->leave($__internal_275a97358d526b2d60c41fbf684894a9e01e1d966e3a0c046b64895b071b57d9_prof);

    }

    public function getTemplateName()
    {
        return ":registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/registration/register.html.twig #}



{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}
\t{{ form_row(form.token) }}

    <button type=\"submit\">Registrar</button>
{{ form_end(form) }}

", ":registration:register.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app/Resources\\views/registration/register.html.twig");
    }
}

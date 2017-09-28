<?php

/* registration/register.html.twig */
class __TwigTemplate_4152355f702b6a2c6b9819f2b9162f7ed841e3392068cbd0fc433c79e13ebd66 extends Twig_Template
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
        $__internal_9c7d9596d8d876074bb8288135a696cb4ac08660542ac073d7b9ac0c3b358323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7d9596d8d876074bb8288135a696cb4ac08660542ac073d7b9ac0c3b358323->enter($__internal_9c7d9596d8d876074bb8288135a696cb4ac08660542ac073d7b9ac0c3b358323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_303ddc09a8f073f69bdeb5495eb3c736c1e4e6a283b2944941f258bd53826a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303ddc09a8f073f69bdeb5495eb3c736c1e4e6a283b2944941f258bd53826a9a->enter($__internal_303ddc09a8f073f69bdeb5495eb3c736c1e4e6a283b2944941f258bd53826a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
        
        $__internal_9c7d9596d8d876074bb8288135a696cb4ac08660542ac073d7b9ac0c3b358323->leave($__internal_9c7d9596d8d876074bb8288135a696cb4ac08660542ac073d7b9ac0c3b358323_prof);

        
        $__internal_303ddc09a8f073f69bdeb5495eb3c736c1e4e6a283b2944941f258bd53826a9a->leave($__internal_303ddc09a8f073f69bdeb5495eb3c736c1e4e6a283b2944941f258bd53826a9a_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
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

", "registration/register.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\registration\\register.html.twig");
    }
}

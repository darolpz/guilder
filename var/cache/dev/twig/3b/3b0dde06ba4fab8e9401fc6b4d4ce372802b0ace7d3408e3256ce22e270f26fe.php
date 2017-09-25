<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_899e765b6a85b71a429e8a48f244a80028130e9e48d65aa18876bc8c61320955 extends Twig_Template
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
        $__internal_e671abfe8aa6554c09f52513a9c623a9ad65564f0f58d911ee5c5f2501021c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e671abfe8aa6554c09f52513a9c623a9ad65564f0f58d911ee5c5f2501021c22->enter($__internal_e671abfe8aa6554c09f52513a9c623a9ad65564f0f58d911ee5c5f2501021c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bc5165a08aadb4e26644806aa21ebcacb66f58d0650759444eb8cee466a9fb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5165a08aadb4e26644806aa21ebcacb66f58d0650759444eb8cee466a9fb6a->enter($__internal_bc5165a08aadb4e26644806aa21ebcacb66f58d0650759444eb8cee466a9fb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e671abfe8aa6554c09f52513a9c623a9ad65564f0f58d911ee5c5f2501021c22->leave($__internal_e671abfe8aa6554c09f52513a9c623a9ad65564f0f58d911ee5c5f2501021c22_prof);

        
        $__internal_bc5165a08aadb4e26644806aa21ebcacb66f58d0650759444eb8cee466a9fb6a->leave($__internal_bc5165a08aadb4e26644806aa21ebcacb66f58d0650759444eb8cee466a9fb6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

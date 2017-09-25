<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_48b0c72f29f0ba0116a49f97fd3b628ef224b247cf966fcbc453cfed962f0c8c extends Twig_Template
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
        $__internal_2993d5965b5791a46a2276d6a197b78e7de1d75b6d90e0da0832843e02beca9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2993d5965b5791a46a2276d6a197b78e7de1d75b6d90e0da0832843e02beca9a->enter($__internal_2993d5965b5791a46a2276d6a197b78e7de1d75b6d90e0da0832843e02beca9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_be7116ee7c3ba7a572b6b333b268bc5a1f10e5010dfb7050681923e1108ce837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7116ee7c3ba7a572b6b333b268bc5a1f10e5010dfb7050681923e1108ce837->enter($__internal_be7116ee7c3ba7a572b6b333b268bc5a1f10e5010dfb7050681923e1108ce837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2993d5965b5791a46a2276d6a197b78e7de1d75b6d90e0da0832843e02beca9a->leave($__internal_2993d5965b5791a46a2276d6a197b78e7de1d75b6d90e0da0832843e02beca9a_prof);

        
        $__internal_be7116ee7c3ba7a572b6b333b268bc5a1f10e5010dfb7050681923e1108ce837->leave($__internal_be7116ee7c3ba7a572b6b333b268bc5a1f10e5010dfb7050681923e1108ce837_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}

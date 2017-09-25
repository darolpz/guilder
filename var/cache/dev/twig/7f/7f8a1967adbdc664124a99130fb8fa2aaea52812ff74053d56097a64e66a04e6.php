<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e10a194fd8b1760685db8a0db51e2f15be672a6fa07575d74f0452459829b8bc extends Twig_Template
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
        $__internal_2233eda3cf2b6dbc996a76c15fc606758c4bf3ef84ae9de0c14cb1869186de91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2233eda3cf2b6dbc996a76c15fc606758c4bf3ef84ae9de0c14cb1869186de91->enter($__internal_2233eda3cf2b6dbc996a76c15fc606758c4bf3ef84ae9de0c14cb1869186de91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_112a4ecfaef7cc4e72269a281437016d9d742a601d1d60460cb3250f9a4a1fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112a4ecfaef7cc4e72269a281437016d9d742a601d1d60460cb3250f9a4a1fc5->enter($__internal_112a4ecfaef7cc4e72269a281437016d9d742a601d1d60460cb3250f9a4a1fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2233eda3cf2b6dbc996a76c15fc606758c4bf3ef84ae9de0c14cb1869186de91->leave($__internal_2233eda3cf2b6dbc996a76c15fc606758c4bf3ef84ae9de0c14cb1869186de91_prof);

        
        $__internal_112a4ecfaef7cc4e72269a281437016d9d742a601d1d60460cb3250f9a4a1fc5->leave($__internal_112a4ecfaef7cc4e72269a281437016d9d742a601d1d60460cb3250f9a4a1fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_56b8dd019cd3a7fe885a6f425f447bd46e96f51a827b167b31ea58c338b4cfa3 extends Twig_Template
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
        $__internal_0d09e66c17f5d2f5d1c136cc92657beab3222ecafc112d5c6c8ac436a026f4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d09e66c17f5d2f5d1c136cc92657beab3222ecafc112d5c6c8ac436a026f4e0->enter($__internal_0d09e66c17f5d2f5d1c136cc92657beab3222ecafc112d5c6c8ac436a026f4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1bd5f0f3e2f4682be3cb12017c7870bd62aa1155cea24421445680f1e4963e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd5f0f3e2f4682be3cb12017c7870bd62aa1155cea24421445680f1e4963e12->enter($__internal_1bd5f0f3e2f4682be3cb12017c7870bd62aa1155cea24421445680f1e4963e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0d09e66c17f5d2f5d1c136cc92657beab3222ecafc112d5c6c8ac436a026f4e0->leave($__internal_0d09e66c17f5d2f5d1c136cc92657beab3222ecafc112d5c6c8ac436a026f4e0_prof);

        
        $__internal_1bd5f0f3e2f4682be3cb12017c7870bd62aa1155cea24421445680f1e4963e12->leave($__internal_1bd5f0f3e2f4682be3cb12017c7870bd62aa1155cea24421445680f1e4963e12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

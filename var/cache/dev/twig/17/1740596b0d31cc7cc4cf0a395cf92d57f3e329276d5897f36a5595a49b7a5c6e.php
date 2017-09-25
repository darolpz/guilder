<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_293a8693e454807a2971be0ffbe805e10415e463807daea22d50c72c6e76c64d extends Twig_Template
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
        $__internal_c812c1ea3381d383c387a06eadbe5163b412b3b7282821e24db73d666026b434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c812c1ea3381d383c387a06eadbe5163b412b3b7282821e24db73d666026b434->enter($__internal_c812c1ea3381d383c387a06eadbe5163b412b3b7282821e24db73d666026b434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_49557a1514217f8be0dd561483080ce5efef92a2d3080f8e9da4f460f3f42cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49557a1514217f8be0dd561483080ce5efef92a2d3080f8e9da4f460f3f42cd3->enter($__internal_49557a1514217f8be0dd561483080ce5efef92a2d3080f8e9da4f460f3f42cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c812c1ea3381d383c387a06eadbe5163b412b3b7282821e24db73d666026b434->leave($__internal_c812c1ea3381d383c387a06eadbe5163b412b3b7282821e24db73d666026b434_prof);

        
        $__internal_49557a1514217f8be0dd561483080ce5efef92a2d3080f8e9da4f460f3f42cd3->leave($__internal_49557a1514217f8be0dd561483080ce5efef92a2d3080f8e9da4f460f3f42cd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

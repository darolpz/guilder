<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_16d9d8801e0daa58e834c5f3fcafd980406489e5bb7d2921c20a981589a31f42 extends Twig_Template
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
        $__internal_5703d87fe4f1c4a9ecd9a7336c57c3857facc71da9bc100a036f1089435011c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5703d87fe4f1c4a9ecd9a7336c57c3857facc71da9bc100a036f1089435011c9->enter($__internal_5703d87fe4f1c4a9ecd9a7336c57c3857facc71da9bc100a036f1089435011c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_ffc4fb6156f740ab4e76c5160cf8dff415997a5505a9d93ecc6d7190944cd1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc4fb6156f740ab4e76c5160cf8dff415997a5505a9d93ecc6d7190944cd1f4->enter($__internal_ffc4fb6156f740ab4e76c5160cf8dff415997a5505a9d93ecc6d7190944cd1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_5703d87fe4f1c4a9ecd9a7336c57c3857facc71da9bc100a036f1089435011c9->leave($__internal_5703d87fe4f1c4a9ecd9a7336c57c3857facc71da9bc100a036f1089435011c9_prof);

        
        $__internal_ffc4fb6156f740ab4e76c5160cf8dff415997a5505a9d93ecc6d7190944cd1f4->leave($__internal_ffc4fb6156f740ab4e76c5160cf8dff415997a5505a9d93ecc6d7190944cd1f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5353849ea8adc54088d2df3cfedcac311b7c1ccd8560dc5e9833d2840557516b extends Twig_Template
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
        $__internal_0e839f24470c3199fbe483a9d866a95747e2a6993f6b302986029cbc5a0d9160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e839f24470c3199fbe483a9d866a95747e2a6993f6b302986029cbc5a0d9160->enter($__internal_0e839f24470c3199fbe483a9d866a95747e2a6993f6b302986029cbc5a0d9160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e3c059c69b0ea8e847614683f0474b2cfcafa369c780e5b56c995c710ad3291d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c059c69b0ea8e847614683f0474b2cfcafa369c780e5b56c995c710ad3291d->enter($__internal_e3c059c69b0ea8e847614683f0474b2cfcafa369c780e5b56c995c710ad3291d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0e839f24470c3199fbe483a9d866a95747e2a6993f6b302986029cbc5a0d9160->leave($__internal_0e839f24470c3199fbe483a9d866a95747e2a6993f6b302986029cbc5a0d9160_prof);

        
        $__internal_e3c059c69b0ea8e847614683f0474b2cfcafa369c780e5b56c995c710ad3291d->leave($__internal_e3c059c69b0ea8e847614683f0474b2cfcafa369c780e5b56c995c710ad3291d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

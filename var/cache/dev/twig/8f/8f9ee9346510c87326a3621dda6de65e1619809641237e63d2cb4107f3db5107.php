<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d98b0c2773a3c7bfe63b0a47c916c6696e556b995fae5644ca221356273ec173 extends Twig_Template
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
        $__internal_1d305b6995115ddf5aa7c1171c8384530832126fb3c48bb175dd2473fe30e569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d305b6995115ddf5aa7c1171c8384530832126fb3c48bb175dd2473fe30e569->enter($__internal_1d305b6995115ddf5aa7c1171c8384530832126fb3c48bb175dd2473fe30e569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9b51fa2559866b2f300e2e28c8a731bcab3dfa3c4be70e001609f3ebaffb7c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b51fa2559866b2f300e2e28c8a731bcab3dfa3c4be70e001609f3ebaffb7c10->enter($__internal_9b51fa2559866b2f300e2e28c8a731bcab3dfa3c4be70e001609f3ebaffb7c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1d305b6995115ddf5aa7c1171c8384530832126fb3c48bb175dd2473fe30e569->leave($__internal_1d305b6995115ddf5aa7c1171c8384530832126fb3c48bb175dd2473fe30e569_prof);

        
        $__internal_9b51fa2559866b2f300e2e28c8a731bcab3dfa3c4be70e001609f3ebaffb7c10->leave($__internal_9b51fa2559866b2f300e2e28c8a731bcab3dfa3c4be70e001609f3ebaffb7c10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

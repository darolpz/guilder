<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ffc540076ad108b276181233f3963c17097e3086f8b116dad433a6818a56c8f1 extends Twig_Template
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
        $__internal_5b07bbeb37efba32304a06b88a10e88c4efa2635db7c6d5d5616a11de0549da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b07bbeb37efba32304a06b88a10e88c4efa2635db7c6d5d5616a11de0549da4->enter($__internal_5b07bbeb37efba32304a06b88a10e88c4efa2635db7c6d5d5616a11de0549da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9599804ba5d2ad409104118de3d23977cb4548c061d4b208c5413d3086c7937d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9599804ba5d2ad409104118de3d23977cb4548c061d4b208c5413d3086c7937d->enter($__internal_9599804ba5d2ad409104118de3d23977cb4548c061d4b208c5413d3086c7937d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5b07bbeb37efba32304a06b88a10e88c4efa2635db7c6d5d5616a11de0549da4->leave($__internal_5b07bbeb37efba32304a06b88a10e88c4efa2635db7c6d5d5616a11de0549da4_prof);

        
        $__internal_9599804ba5d2ad409104118de3d23977cb4548c061d4b208c5413d3086c7937d->leave($__internal_9599804ba5d2ad409104118de3d23977cb4548c061d4b208c5413d3086c7937d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

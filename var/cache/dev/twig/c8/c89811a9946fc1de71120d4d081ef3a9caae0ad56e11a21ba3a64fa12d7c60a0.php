<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d7beed0878d0955c0f1bb77e96b47d388421dcc526a03975d4c78fd1f785c71d extends Twig_Template
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
        $__internal_d7588efbe57be811ae927110fa32690ef73ed08210dcdf3246aac21b8f412e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7588efbe57be811ae927110fa32690ef73ed08210dcdf3246aac21b8f412e3d->enter($__internal_d7588efbe57be811ae927110fa32690ef73ed08210dcdf3246aac21b8f412e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c0cd514d5d418052b2522f6d71adc55992cb0504a71ba5abded4751558a5130d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cd514d5d418052b2522f6d71adc55992cb0504a71ba5abded4751558a5130d->enter($__internal_c0cd514d5d418052b2522f6d71adc55992cb0504a71ba5abded4751558a5130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d7588efbe57be811ae927110fa32690ef73ed08210dcdf3246aac21b8f412e3d->leave($__internal_d7588efbe57be811ae927110fa32690ef73ed08210dcdf3246aac21b8f412e3d_prof);

        
        $__internal_c0cd514d5d418052b2522f6d71adc55992cb0504a71ba5abded4751558a5130d->leave($__internal_c0cd514d5d418052b2522f6d71adc55992cb0504a71ba5abded4751558a5130d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

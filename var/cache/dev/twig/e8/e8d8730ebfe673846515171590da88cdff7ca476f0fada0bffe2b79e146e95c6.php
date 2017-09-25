<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dcd7ce4876981372082dd469531fc8d33d077536d766b56ee072551ca41aa786 extends Twig_Template
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
        $__internal_818a11c9a879ac7fa5f6794986a68591cd5d561f539163d3fe4d7c1f55d84aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818a11c9a879ac7fa5f6794986a68591cd5d561f539163d3fe4d7c1f55d84aeb->enter($__internal_818a11c9a879ac7fa5f6794986a68591cd5d561f539163d3fe4d7c1f55d84aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_436c1d4b06a8c62bf727b8ccc606dfc8202920dfcffac5b8d22a41c988a220fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436c1d4b06a8c62bf727b8ccc606dfc8202920dfcffac5b8d22a41c988a220fa->enter($__internal_436c1d4b06a8c62bf727b8ccc606dfc8202920dfcffac5b8d22a41c988a220fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_818a11c9a879ac7fa5f6794986a68591cd5d561f539163d3fe4d7c1f55d84aeb->leave($__internal_818a11c9a879ac7fa5f6794986a68591cd5d561f539163d3fe4d7c1f55d84aeb_prof);

        
        $__internal_436c1d4b06a8c62bf727b8ccc606dfc8202920dfcffac5b8d22a41c988a220fa->leave($__internal_436c1d4b06a8c62bf727b8ccc606dfc8202920dfcffac5b8d22a41c988a220fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

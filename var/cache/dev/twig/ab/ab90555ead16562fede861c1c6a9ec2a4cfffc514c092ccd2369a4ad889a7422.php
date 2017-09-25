<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_96deb38b09f5d9012aeac81b7aec1fac1da53db901165bfa70fcd99d6e3ceaad extends Twig_Template
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
        $__internal_7b6284ebea9229b1b48f38cb2d949d2c5f0439904959b58a25f3a2d8dca77414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6284ebea9229b1b48f38cb2d949d2c5f0439904959b58a25f3a2d8dca77414->enter($__internal_7b6284ebea9229b1b48f38cb2d949d2c5f0439904959b58a25f3a2d8dca77414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_896642e959414262d4b610ca6d356a4167682d71899d433231cf376b3d5f00cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896642e959414262d4b610ca6d356a4167682d71899d433231cf376b3d5f00cf->enter($__internal_896642e959414262d4b610ca6d356a4167682d71899d433231cf376b3d5f00cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7b6284ebea9229b1b48f38cb2d949d2c5f0439904959b58a25f3a2d8dca77414->leave($__internal_7b6284ebea9229b1b48f38cb2d949d2c5f0439904959b58a25f3a2d8dca77414_prof);

        
        $__internal_896642e959414262d4b610ca6d356a4167682d71899d433231cf376b3d5f00cf->leave($__internal_896642e959414262d4b610ca6d356a4167682d71899d433231cf376b3d5f00cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}

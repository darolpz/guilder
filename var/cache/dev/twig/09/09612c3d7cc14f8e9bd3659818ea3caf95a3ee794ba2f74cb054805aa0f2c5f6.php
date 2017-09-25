<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7a7366382f05a67b2f74580fd0f7755e0ccfd66383ecbea305908eda2499e686 extends Twig_Template
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
        $__internal_e1a949f49f4d4408a768d2b415efebf600aa11acb386456d8119c89fd11f6c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a949f49f4d4408a768d2b415efebf600aa11acb386456d8119c89fd11f6c6f->enter($__internal_e1a949f49f4d4408a768d2b415efebf600aa11acb386456d8119c89fd11f6c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6438cae0ad713d098b0a75eeb1e290110f9c2f313bfe3e0f17ec336671f0d6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6438cae0ad713d098b0a75eeb1e290110f9c2f313bfe3e0f17ec336671f0d6de->enter($__internal_6438cae0ad713d098b0a75eeb1e290110f9c2f313bfe3e0f17ec336671f0d6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e1a949f49f4d4408a768d2b415efebf600aa11acb386456d8119c89fd11f6c6f->leave($__internal_e1a949f49f4d4408a768d2b415efebf600aa11acb386456d8119c89fd11f6c6f_prof);

        
        $__internal_6438cae0ad713d098b0a75eeb1e290110f9c2f313bfe3e0f17ec336671f0d6de->leave($__internal_6438cae0ad713d098b0a75eeb1e290110f9c2f313bfe3e0f17ec336671f0d6de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

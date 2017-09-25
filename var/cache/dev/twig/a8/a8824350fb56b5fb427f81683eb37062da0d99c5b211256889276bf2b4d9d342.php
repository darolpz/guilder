<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6a77c5cf54440aecec1a0cc6d49bd133df3e611aa8cbab4fe7c7e1ec591695bf extends Twig_Template
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
        $__internal_e21129a90273cb7cc5011a07da99a957193c419d2bf00b68f50acff0af107c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21129a90273cb7cc5011a07da99a957193c419d2bf00b68f50acff0af107c69->enter($__internal_e21129a90273cb7cc5011a07da99a957193c419d2bf00b68f50acff0af107c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_198b3ffffeedcd175ee6b0f872fe5d6160d079dd2c69e4bce4431b92946a86f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198b3ffffeedcd175ee6b0f872fe5d6160d079dd2c69e4bce4431b92946a86f1->enter($__internal_198b3ffffeedcd175ee6b0f872fe5d6160d079dd2c69e4bce4431b92946a86f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e21129a90273cb7cc5011a07da99a957193c419d2bf00b68f50acff0af107c69->leave($__internal_e21129a90273cb7cc5011a07da99a957193c419d2bf00b68f50acff0af107c69_prof);

        
        $__internal_198b3ffffeedcd175ee6b0f872fe5d6160d079dd2c69e4bce4431b92946a86f1->leave($__internal_198b3ffffeedcd175ee6b0f872fe5d6160d079dd2c69e4bce4431b92946a86f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

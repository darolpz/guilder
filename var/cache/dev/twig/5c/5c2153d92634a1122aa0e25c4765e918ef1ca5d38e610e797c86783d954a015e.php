<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_034230e4659060d65380de8ade9497cd2ad71028854ee20ed70e86f7d0777191 extends Twig_Template
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
        $__internal_a7a3f499df35377eedf8d20a1284218d9f701423edd130ed3982fc873c1b37db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a3f499df35377eedf8d20a1284218d9f701423edd130ed3982fc873c1b37db->enter($__internal_a7a3f499df35377eedf8d20a1284218d9f701423edd130ed3982fc873c1b37db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5e20ce93e2541ac964d36fbac727f584c82a3a08fe569b5b85528556f4cd6c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e20ce93e2541ac964d36fbac727f584c82a3a08fe569b5b85528556f4cd6c43->enter($__internal_5e20ce93e2541ac964d36fbac727f584c82a3a08fe569b5b85528556f4cd6c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a7a3f499df35377eedf8d20a1284218d9f701423edd130ed3982fc873c1b37db->leave($__internal_a7a3f499df35377eedf8d20a1284218d9f701423edd130ed3982fc873c1b37db_prof);

        
        $__internal_5e20ce93e2541ac964d36fbac727f584c82a3a08fe569b5b85528556f4cd6c43->leave($__internal_5e20ce93e2541ac964d36fbac727f584c82a3a08fe569b5b85528556f4cd6c43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

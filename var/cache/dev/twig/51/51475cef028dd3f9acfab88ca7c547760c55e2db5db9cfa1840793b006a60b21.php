<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cea3be3ce4849ea7c87aabf124136b09c53c9748f631ce03f13a88a94672d36d extends Twig_Template
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
        $__internal_09511a0f239122b80cbbd8ee9f6dacb001cf2de38473427440422490f74da7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09511a0f239122b80cbbd8ee9f6dacb001cf2de38473427440422490f74da7e4->enter($__internal_09511a0f239122b80cbbd8ee9f6dacb001cf2de38473427440422490f74da7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_01b9b7488bcd95263736dd21b76a1d446e31eb7748e5b35df69cfce9e58fccd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b9b7488bcd95263736dd21b76a1d446e31eb7748e5b35df69cfce9e58fccd3->enter($__internal_01b9b7488bcd95263736dd21b76a1d446e31eb7748e5b35df69cfce9e58fccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_09511a0f239122b80cbbd8ee9f6dacb001cf2de38473427440422490f74da7e4->leave($__internal_09511a0f239122b80cbbd8ee9f6dacb001cf2de38473427440422490f74da7e4_prof);

        
        $__internal_01b9b7488bcd95263736dd21b76a1d446e31eb7748e5b35df69cfce9e58fccd3->leave($__internal_01b9b7488bcd95263736dd21b76a1d446e31eb7748e5b35df69cfce9e58fccd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}

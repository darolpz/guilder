<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2e228051c03e77a1b82ee3800c4acabc8fe02ca2c249317a943d16608030b111 extends Twig_Template
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
        $__internal_ca1ef36e0dd996b156075432c74aa9d909cfc5d6c594811743e6759bc7014dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1ef36e0dd996b156075432c74aa9d909cfc5d6c594811743e6759bc7014dda->enter($__internal_ca1ef36e0dd996b156075432c74aa9d909cfc5d6c594811743e6759bc7014dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_23e5f7bb35f99e74d6036904ffeb4eb699898cf86a0618f4110967216c50af82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e5f7bb35f99e74d6036904ffeb4eb699898cf86a0618f4110967216c50af82->enter($__internal_23e5f7bb35f99e74d6036904ffeb4eb699898cf86a0618f4110967216c50af82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca1ef36e0dd996b156075432c74aa9d909cfc5d6c594811743e6759bc7014dda->leave($__internal_ca1ef36e0dd996b156075432c74aa9d909cfc5d6c594811743e6759bc7014dda_prof);

        
        $__internal_23e5f7bb35f99e74d6036904ffeb4eb699898cf86a0618f4110967216c50af82->leave($__internal_23e5f7bb35f99e74d6036904ffeb4eb699898cf86a0618f4110967216c50af82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

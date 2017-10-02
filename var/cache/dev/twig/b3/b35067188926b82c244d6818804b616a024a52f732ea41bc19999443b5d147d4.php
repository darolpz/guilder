<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_12ceef6175538e89135020ff8cfbd7ecffadfea54fc0de7930b6cc798711c3a9 extends Twig_Template
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
        $__internal_9fef5eafea108ff4d0aa9411c581e981863954fcc3b3b44aa72d63552e038dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fef5eafea108ff4d0aa9411c581e981863954fcc3b3b44aa72d63552e038dd1->enter($__internal_9fef5eafea108ff4d0aa9411c581e981863954fcc3b3b44aa72d63552e038dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3cda6b1561cbc13c67ba0183c203be71f28c03b5137e4c8215dfb147fdc27228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cda6b1561cbc13c67ba0183c203be71f28c03b5137e4c8215dfb147fdc27228->enter($__internal_3cda6b1561cbc13c67ba0183c203be71f28c03b5137e4c8215dfb147fdc27228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9fef5eafea108ff4d0aa9411c581e981863954fcc3b3b44aa72d63552e038dd1->leave($__internal_9fef5eafea108ff4d0aa9411c581e981863954fcc3b3b44aa72d63552e038dd1_prof);

        
        $__internal_3cda6b1561cbc13c67ba0183c203be71f28c03b5137e4c8215dfb147fdc27228->leave($__internal_3cda6b1561cbc13c67ba0183c203be71f28c03b5137e4c8215dfb147fdc27228_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

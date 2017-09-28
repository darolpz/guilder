<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d2db4aa88294e90511aa975433307a98c1fc840227b51864347e2d33ee6f72e extends Twig_Template
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
        $__internal_df19199ded1725123de79a92d648cef6a98b6cc15e8024a6e7f0cd2bf048688b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df19199ded1725123de79a92d648cef6a98b6cc15e8024a6e7f0cd2bf048688b->enter($__internal_df19199ded1725123de79a92d648cef6a98b6cc15e8024a6e7f0cd2bf048688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5f9c6b9f90bc5a55f77d6c3b83db5a2d646c11c6d56143c47a65d4fed258548e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9c6b9f90bc5a55f77d6c3b83db5a2d646c11c6d56143c47a65d4fed258548e->enter($__internal_5f9c6b9f90bc5a55f77d6c3b83db5a2d646c11c6d56143c47a65d4fed258548e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_df19199ded1725123de79a92d648cef6a98b6cc15e8024a6e7f0cd2bf048688b->leave($__internal_df19199ded1725123de79a92d648cef6a98b6cc15e8024a6e7f0cd2bf048688b_prof);

        
        $__internal_5f9c6b9f90bc5a55f77d6c3b83db5a2d646c11c6d56143c47a65d4fed258548e->leave($__internal_5f9c6b9f90bc5a55f77d6c3b83db5a2d646c11c6d56143c47a65d4fed258548e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

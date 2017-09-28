<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f794bac01edc92477b475ede6c7c781008181ff6bbc724cf8c87ab652aee584c extends Twig_Template
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
        $__internal_8c5f46682504be18d8367d3ecd9f116b928ae3254915f99ca055c7272044109b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5f46682504be18d8367d3ecd9f116b928ae3254915f99ca055c7272044109b->enter($__internal_8c5f46682504be18d8367d3ecd9f116b928ae3254915f99ca055c7272044109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_46ea2369a80dd2ddd44dd8cbedcb8ef12f9c8244f589690c0d671fedffcf0531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ea2369a80dd2ddd44dd8cbedcb8ef12f9c8244f589690c0d671fedffcf0531->enter($__internal_46ea2369a80dd2ddd44dd8cbedcb8ef12f9c8244f589690c0d671fedffcf0531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8c5f46682504be18d8367d3ecd9f116b928ae3254915f99ca055c7272044109b->leave($__internal_8c5f46682504be18d8367d3ecd9f116b928ae3254915f99ca055c7272044109b_prof);

        
        $__internal_46ea2369a80dd2ddd44dd8cbedcb8ef12f9c8244f589690c0d671fedffcf0531->leave($__internal_46ea2369a80dd2ddd44dd8cbedcb8ef12f9c8244f589690c0d671fedffcf0531_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_34511abbf5bb8676f8ba8b0b98e2fa3507e90d4c46868d8967d90403c8bdfc0e extends Twig_Template
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
        $__internal_1caa48789d8d40f44513a7f1020e79bb011a45833a4d4f1922d096369b3cd036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1caa48789d8d40f44513a7f1020e79bb011a45833a4d4f1922d096369b3cd036->enter($__internal_1caa48789d8d40f44513a7f1020e79bb011a45833a4d4f1922d096369b3cd036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ba0683e3a7d78c5086b077db48e0edcc2885df5d2e6e7511decc95fb5e5dc83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0683e3a7d78c5086b077db48e0edcc2885df5d2e6e7511decc95fb5e5dc83b->enter($__internal_ba0683e3a7d78c5086b077db48e0edcc2885df5d2e6e7511decc95fb5e5dc83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1caa48789d8d40f44513a7f1020e79bb011a45833a4d4f1922d096369b3cd036->leave($__internal_1caa48789d8d40f44513a7f1020e79bb011a45833a4d4f1922d096369b3cd036_prof);

        
        $__internal_ba0683e3a7d78c5086b077db48e0edcc2885df5d2e6e7511decc95fb5e5dc83b->leave($__internal_ba0683e3a7d78c5086b077db48e0edcc2885df5d2e6e7511decc95fb5e5dc83b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_37d7b5f1d36ff5ea377199294e58ae7ab5404c716386dd5877c6a9c12b30e3e0 extends Twig_Template
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
        $__internal_1ccf3c5d84cc9a33038fd469071faa23d622e36c67afb7811f1faee6aa35ce8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccf3c5d84cc9a33038fd469071faa23d622e36c67afb7811f1faee6aa35ce8d->enter($__internal_1ccf3c5d84cc9a33038fd469071faa23d622e36c67afb7811f1faee6aa35ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b5421275566f673d82234e4b8bb94645c997f16fe951c31e820081b0f86c28c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5421275566f673d82234e4b8bb94645c997f16fe951c31e820081b0f86c28c7->enter($__internal_b5421275566f673d82234e4b8bb94645c997f16fe951c31e820081b0f86c28c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1ccf3c5d84cc9a33038fd469071faa23d622e36c67afb7811f1faee6aa35ce8d->leave($__internal_1ccf3c5d84cc9a33038fd469071faa23d622e36c67afb7811f1faee6aa35ce8d_prof);

        
        $__internal_b5421275566f673d82234e4b8bb94645c997f16fe951c31e820081b0f86c28c7->leave($__internal_b5421275566f673d82234e4b8bb94645c997f16fe951c31e820081b0f86c28c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
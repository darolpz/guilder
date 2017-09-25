<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3c18b9ba404286838910f48ae44abaa8383b5f0bb9f30aa1b3fca72315ec21df extends Twig_Template
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
        $__internal_4dc5d4b3497f4651e9daa6283378911541b04d35ed803f31231db66d02082488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc5d4b3497f4651e9daa6283378911541b04d35ed803f31231db66d02082488->enter($__internal_4dc5d4b3497f4651e9daa6283378911541b04d35ed803f31231db66d02082488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_daa66a68d62c4e13fe75336bbb700419b3c8b9177d932529a80d2f94782c8a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa66a68d62c4e13fe75336bbb700419b3c8b9177d932529a80d2f94782c8a4c->enter($__internal_daa66a68d62c4e13fe75336bbb700419b3c8b9177d932529a80d2f94782c8a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4dc5d4b3497f4651e9daa6283378911541b04d35ed803f31231db66d02082488->leave($__internal_4dc5d4b3497f4651e9daa6283378911541b04d35ed803f31231db66d02082488_prof);

        
        $__internal_daa66a68d62c4e13fe75336bbb700419b3c8b9177d932529a80d2f94782c8a4c->leave($__internal_daa66a68d62c4e13fe75336bbb700419b3c8b9177d932529a80d2f94782c8a4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

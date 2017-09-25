<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3f06f56f2a95a1f97d19e1dbd74cf80ae67cdb51c9ef5bda7091bbb374c3ab6a extends Twig_Template
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
        $__internal_1b230686dac8391d25ee7b288fc35f4f313dd4da6a53cd816448586c76c9e428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b230686dac8391d25ee7b288fc35f4f313dd4da6a53cd816448586c76c9e428->enter($__internal_1b230686dac8391d25ee7b288fc35f4f313dd4da6a53cd816448586c76c9e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_146705ae41ca1655cc20ac2eddc41b59e6adac60361712b2c21b386f27e90419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146705ae41ca1655cc20ac2eddc41b59e6adac60361712b2c21b386f27e90419->enter($__internal_146705ae41ca1655cc20ac2eddc41b59e6adac60361712b2c21b386f27e90419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1b230686dac8391d25ee7b288fc35f4f313dd4da6a53cd816448586c76c9e428->leave($__internal_1b230686dac8391d25ee7b288fc35f4f313dd4da6a53cd816448586c76c9e428_prof);

        
        $__internal_146705ae41ca1655cc20ac2eddc41b59e6adac60361712b2c21b386f27e90419->leave($__internal_146705ae41ca1655cc20ac2eddc41b59e6adac60361712b2c21b386f27e90419_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

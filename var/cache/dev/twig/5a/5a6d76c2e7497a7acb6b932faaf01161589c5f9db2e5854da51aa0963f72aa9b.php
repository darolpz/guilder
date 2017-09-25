<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_ba25069f2ed6cee57918fa1fe25e30f1ae7d03cf408ac7c4f8e6f02af855b8ee extends Twig_Template
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
        $__internal_5fdf32190d87a46050e3d77cbb20496b7e60728bb69dc11a9127202017359cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fdf32190d87a46050e3d77cbb20496b7e60728bb69dc11a9127202017359cf7->enter($__internal_5fdf32190d87a46050e3d77cbb20496b7e60728bb69dc11a9127202017359cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_837a2ed7f0e20c75bb746cafc55f7adad7704b97dbc0d25b5b10db17a604ea72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837a2ed7f0e20c75bb746cafc55f7adad7704b97dbc0d25b5b10db17a604ea72->enter($__internal_837a2ed7f0e20c75bb746cafc55f7adad7704b97dbc0d25b5b10db17a604ea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5fdf32190d87a46050e3d77cbb20496b7e60728bb69dc11a9127202017359cf7->leave($__internal_5fdf32190d87a46050e3d77cbb20496b7e60728bb69dc11a9127202017359cf7_prof);

        
        $__internal_837a2ed7f0e20c75bb746cafc55f7adad7704b97dbc0d25b5b10db17a604ea72->leave($__internal_837a2ed7f0e20c75bb746cafc55f7adad7704b97dbc0d25b5b10db17a604ea72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}

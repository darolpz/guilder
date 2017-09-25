<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c0dae22a677082dfbe2ae6c514ae14dbb21d2e9992f36abd41588f341229cd35 extends Twig_Template
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
        $__internal_b4c0774343c6650a64c0023f463867c4ea8a72bb26614d3f600781cc4e0b90d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c0774343c6650a64c0023f463867c4ea8a72bb26614d3f600781cc4e0b90d0->enter($__internal_b4c0774343c6650a64c0023f463867c4ea8a72bb26614d3f600781cc4e0b90d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2c1be7288e48f05ee9fd97d3987b7036785ace0e8b26b4d692da0f72ef7b67d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1be7288e48f05ee9fd97d3987b7036785ace0e8b26b4d692da0f72ef7b67d2->enter($__internal_2c1be7288e48f05ee9fd97d3987b7036785ace0e8b26b4d692da0f72ef7b67d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b4c0774343c6650a64c0023f463867c4ea8a72bb26614d3f600781cc4e0b90d0->leave($__internal_b4c0774343c6650a64c0023f463867c4ea8a72bb26614d3f600781cc4e0b90d0_prof);

        
        $__internal_2c1be7288e48f05ee9fd97d3987b7036785ace0e8b26b4d692da0f72ef7b67d2->leave($__internal_2c1be7288e48f05ee9fd97d3987b7036785ace0e8b26b4d692da0f72ef7b67d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

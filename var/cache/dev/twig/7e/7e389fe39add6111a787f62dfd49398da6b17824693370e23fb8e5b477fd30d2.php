<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_53551e041d0f93020d0d30450a8d80d0aa456d4e21f23c537ca6d8bae30d9de6 extends Twig_Template
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
        $__internal_9d8b92e239a8d519edb1116d6d2cc7dc65f5f879fae5a111d32e22e8f8b19433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8b92e239a8d519edb1116d6d2cc7dc65f5f879fae5a111d32e22e8f8b19433->enter($__internal_9d8b92e239a8d519edb1116d6d2cc7dc65f5f879fae5a111d32e22e8f8b19433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9d22afe0b81ed73aab8ce9b32434080f0e4dbb80845821f3968f65fa61b1bf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d22afe0b81ed73aab8ce9b32434080f0e4dbb80845821f3968f65fa61b1bf1a->enter($__internal_9d22afe0b81ed73aab8ce9b32434080f0e4dbb80845821f3968f65fa61b1bf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_9d8b92e239a8d519edb1116d6d2cc7dc65f5f879fae5a111d32e22e8f8b19433->leave($__internal_9d8b92e239a8d519edb1116d6d2cc7dc65f5f879fae5a111d32e22e8f8b19433_prof);

        
        $__internal_9d22afe0b81ed73aab8ce9b32434080f0e4dbb80845821f3968f65fa61b1bf1a->leave($__internal_9d22afe0b81ed73aab8ce9b32434080f0e4dbb80845821f3968f65fa61b1bf1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

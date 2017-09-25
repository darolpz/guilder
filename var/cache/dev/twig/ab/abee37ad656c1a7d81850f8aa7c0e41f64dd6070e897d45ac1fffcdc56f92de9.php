<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5e61d5f794ad10ef56ce6b2b984fc6fac1a52d3490bd4448943877c248606ac5 extends Twig_Template
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
        $__internal_ad7b59af8e0677084dc73173f8b9e3c025a242c9b993f0aee11eba63c9b59f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7b59af8e0677084dc73173f8b9e3c025a242c9b993f0aee11eba63c9b59f1e->enter($__internal_ad7b59af8e0677084dc73173f8b9e3c025a242c9b993f0aee11eba63c9b59f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_25e9fd646a20fad3da4e0b606dda955f0e7c1d1eef86234f441e243f9be53a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e9fd646a20fad3da4e0b606dda955f0e7c1d1eef86234f441e243f9be53a65->enter($__internal_25e9fd646a20fad3da4e0b606dda955f0e7c1d1eef86234f441e243f9be53a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ad7b59af8e0677084dc73173f8b9e3c025a242c9b993f0aee11eba63c9b59f1e->leave($__internal_ad7b59af8e0677084dc73173f8b9e3c025a242c9b993f0aee11eba63c9b59f1e_prof);

        
        $__internal_25e9fd646a20fad3da4e0b606dda955f0e7c1d1eef86234f441e243f9be53a65->leave($__internal_25e9fd646a20fad3da4e0b606dda955f0e7c1d1eef86234f441e243f9be53a65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

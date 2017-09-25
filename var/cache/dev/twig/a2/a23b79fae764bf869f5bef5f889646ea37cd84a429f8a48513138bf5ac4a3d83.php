<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_32a6f14d6cebafe6b414de881a1aa3dfebc3b8b41b6fdb94c3b659239a84d2d7 extends Twig_Template
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
        $__internal_a79c9c8fad2acbd0d79946cb47c3f6b628744df7656a6e1cbc149f58f8ace522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79c9c8fad2acbd0d79946cb47c3f6b628744df7656a6e1cbc149f58f8ace522->enter($__internal_a79c9c8fad2acbd0d79946cb47c3f6b628744df7656a6e1cbc149f58f8ace522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f0e3a6affa163e62754dec93a82a61ed2fc7b309be834b2f60e0c14416d07c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e3a6affa163e62754dec93a82a61ed2fc7b309be834b2f60e0c14416d07c16->enter($__internal_f0e3a6affa163e62754dec93a82a61ed2fc7b309be834b2f60e0c14416d07c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a79c9c8fad2acbd0d79946cb47c3f6b628744df7656a6e1cbc149f58f8ace522->leave($__internal_a79c9c8fad2acbd0d79946cb47c3f6b628744df7656a6e1cbc149f58f8ace522_prof);

        
        $__internal_f0e3a6affa163e62754dec93a82a61ed2fc7b309be834b2f60e0c14416d07c16->leave($__internal_f0e3a6affa163e62754dec93a82a61ed2fc7b309be834b2f60e0c14416d07c16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}

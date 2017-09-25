<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_0ed508389552c309abb21d247564492959742cc7fbb07ff545febfbd83d64907 extends Twig_Template
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
        $__internal_7b7119500a5ecbdb20033cd388536d43a14bca2348bfb2b3e800a80048bcb670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7119500a5ecbdb20033cd388536d43a14bca2348bfb2b3e800a80048bcb670->enter($__internal_7b7119500a5ecbdb20033cd388536d43a14bca2348bfb2b3e800a80048bcb670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ea3a217aa0cbb0c09930e75cf3aa1dcbcff14db2b81496a1aad2fbcb8e9918d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3a217aa0cbb0c09930e75cf3aa1dcbcff14db2b81496a1aad2fbcb8e9918d5->enter($__internal_ea3a217aa0cbb0c09930e75cf3aa1dcbcff14db2b81496a1aad2fbcb8e9918d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7b7119500a5ecbdb20033cd388536d43a14bca2348bfb2b3e800a80048bcb670->leave($__internal_7b7119500a5ecbdb20033cd388536d43a14bca2348bfb2b3e800a80048bcb670_prof);

        
        $__internal_ea3a217aa0cbb0c09930e75cf3aa1dcbcff14db2b81496a1aad2fbcb8e9918d5->leave($__internal_ea3a217aa0cbb0c09930e75cf3aa1dcbcff14db2b81496a1aad2fbcb8e9918d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}

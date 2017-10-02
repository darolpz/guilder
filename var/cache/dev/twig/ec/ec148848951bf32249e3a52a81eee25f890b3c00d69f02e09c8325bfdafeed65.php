<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4ed3b32a2c8f1e1cb568fdee9d3edf3099294f4695be017a3bbb6b97b328ba4e extends Twig_Template
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
        $__internal_88fcc945eddbe29bf10e75a6f2251f2ba8d3f237c60b226b1222d32c26db057b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fcc945eddbe29bf10e75a6f2251f2ba8d3f237c60b226b1222d32c26db057b->enter($__internal_88fcc945eddbe29bf10e75a6f2251f2ba8d3f237c60b226b1222d32c26db057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a53c17b8581b61f9bf5adf08574f6b39365ae23005665d6f149f8f41f5447f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53c17b8581b61f9bf5adf08574f6b39365ae23005665d6f149f8f41f5447f39->enter($__internal_a53c17b8581b61f9bf5adf08574f6b39365ae23005665d6f149f8f41f5447f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_88fcc945eddbe29bf10e75a6f2251f2ba8d3f237c60b226b1222d32c26db057b->leave($__internal_88fcc945eddbe29bf10e75a6f2251f2ba8d3f237c60b226b1222d32c26db057b_prof);

        
        $__internal_a53c17b8581b61f9bf5adf08574f6b39365ae23005665d6f149f8f41f5447f39->leave($__internal_a53c17b8581b61f9bf5adf08574f6b39365ae23005665d6f149f8f41f5447f39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82d788d4b72f663169ca0bb8b3c9237314f4ff2eafb4efbe6ea7b1cf19213fb3 extends Twig_Template
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
        $__internal_99eb515cd901bb9bcfd240b48d77ed9da1dd68c7de6461cad07783dd5ec48601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99eb515cd901bb9bcfd240b48d77ed9da1dd68c7de6461cad07783dd5ec48601->enter($__internal_99eb515cd901bb9bcfd240b48d77ed9da1dd68c7de6461cad07783dd5ec48601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_63122ba1b0f7ebe41d3248590d3ae07acbb71d17a1fd7be46abd9a39b068f9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63122ba1b0f7ebe41d3248590d3ae07acbb71d17a1fd7be46abd9a39b068f9c2->enter($__internal_63122ba1b0f7ebe41d3248590d3ae07acbb71d17a1fd7be46abd9a39b068f9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_99eb515cd901bb9bcfd240b48d77ed9da1dd68c7de6461cad07783dd5ec48601->leave($__internal_99eb515cd901bb9bcfd240b48d77ed9da1dd68c7de6461cad07783dd5ec48601_prof);

        
        $__internal_63122ba1b0f7ebe41d3248590d3ae07acbb71d17a1fd7be46abd9a39b068f9c2->leave($__internal_63122ba1b0f7ebe41d3248590d3ae07acbb71d17a1fd7be46abd9a39b068f9c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

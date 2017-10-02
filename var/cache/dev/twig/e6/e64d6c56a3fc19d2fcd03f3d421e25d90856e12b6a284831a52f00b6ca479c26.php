<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7b1d2c5b49c16962cad41052fea34be7b55498728da807bb8af97ae522d4da5d extends Twig_Template
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
        $__internal_69d1bea4f961b50e45d73333ee44eca70a62cc24be3c74a73bd7ba15c26f87af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d1bea4f961b50e45d73333ee44eca70a62cc24be3c74a73bd7ba15c26f87af->enter($__internal_69d1bea4f961b50e45d73333ee44eca70a62cc24be3c74a73bd7ba15c26f87af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0ad0ee8257ebd4788528ab600dc41f8b7a0a65e31cd7e71f0daa0cb195310442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad0ee8257ebd4788528ab600dc41f8b7a0a65e31cd7e71f0daa0cb195310442->enter($__internal_0ad0ee8257ebd4788528ab600dc41f8b7a0a65e31cd7e71f0daa0cb195310442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_69d1bea4f961b50e45d73333ee44eca70a62cc24be3c74a73bd7ba15c26f87af->leave($__internal_69d1bea4f961b50e45d73333ee44eca70a62cc24be3c74a73bd7ba15c26f87af_prof);

        
        $__internal_0ad0ee8257ebd4788528ab600dc41f8b7a0a65e31cd7e71f0daa0cb195310442->leave($__internal_0ad0ee8257ebd4788528ab600dc41f8b7a0a65e31cd7e71f0daa0cb195310442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

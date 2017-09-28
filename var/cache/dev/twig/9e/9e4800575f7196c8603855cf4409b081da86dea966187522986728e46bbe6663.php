<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6d6c06b96e364367f395c82483451daac5fae51592a7cdd84884e1d19a39a9a5 extends Twig_Template
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
        $__internal_41ead607c1ebb07a3a0961d050aa97a18220eb95878fd822cd4c0b6c227d2dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ead607c1ebb07a3a0961d050aa97a18220eb95878fd822cd4c0b6c227d2dbe->enter($__internal_41ead607c1ebb07a3a0961d050aa97a18220eb95878fd822cd4c0b6c227d2dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5f008decda03daaa25014f364ba1502c1cd648ba6d9e5767995bccaf22b37a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f008decda03daaa25014f364ba1502c1cd648ba6d9e5767995bccaf22b37a95->enter($__internal_5f008decda03daaa25014f364ba1502c1cd648ba6d9e5767995bccaf22b37a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_41ead607c1ebb07a3a0961d050aa97a18220eb95878fd822cd4c0b6c227d2dbe->leave($__internal_41ead607c1ebb07a3a0961d050aa97a18220eb95878fd822cd4c0b6c227d2dbe_prof);

        
        $__internal_5f008decda03daaa25014f364ba1502c1cd648ba6d9e5767995bccaf22b37a95->leave($__internal_5f008decda03daaa25014f364ba1502c1cd648ba6d9e5767995bccaf22b37a95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_318816ca07eee82e6969e1299dd2c3bc57c76f2be658898ca129199b24b1f7a6 extends Twig_Template
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
        $__internal_8003ee66a7e2ed6fffb1b701c1ebc56259fa774c86d607b0e4936f81fd74206b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8003ee66a7e2ed6fffb1b701c1ebc56259fa774c86d607b0e4936f81fd74206b->enter($__internal_8003ee66a7e2ed6fffb1b701c1ebc56259fa774c86d607b0e4936f81fd74206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_554b0beb2d6ee47a9f0a5a63338b0edc7183b1ec7bf1836133841b3648fa6d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554b0beb2d6ee47a9f0a5a63338b0edc7183b1ec7bf1836133841b3648fa6d27->enter($__internal_554b0beb2d6ee47a9f0a5a63338b0edc7183b1ec7bf1836133841b3648fa6d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8003ee66a7e2ed6fffb1b701c1ebc56259fa774c86d607b0e4936f81fd74206b->leave($__internal_8003ee66a7e2ed6fffb1b701c1ebc56259fa774c86d607b0e4936f81fd74206b_prof);

        
        $__internal_554b0beb2d6ee47a9f0a5a63338b0edc7183b1ec7bf1836133841b3648fa6d27->leave($__internal_554b0beb2d6ee47a9f0a5a63338b0edc7183b1ec7bf1836133841b3648fa6d27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}

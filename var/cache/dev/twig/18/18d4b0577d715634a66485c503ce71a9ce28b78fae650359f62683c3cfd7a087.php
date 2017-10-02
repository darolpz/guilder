<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f8d63f96e59730aa31ded04d89d5ea9d3c00c754f5589fe6da826ecc8d295fd3 extends Twig_Template
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
        $__internal_ef2930e3e4ca45956bb1acb31728cb80d324ef5e77bca697b6d99a878b1393be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2930e3e4ca45956bb1acb31728cb80d324ef5e77bca697b6d99a878b1393be->enter($__internal_ef2930e3e4ca45956bb1acb31728cb80d324ef5e77bca697b6d99a878b1393be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_33da7709521622afce72d93f33f1b37073ec77e172a16413a6d1f8ce739687ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33da7709521622afce72d93f33f1b37073ec77e172a16413a6d1f8ce739687ec->enter($__internal_33da7709521622afce72d93f33f1b37073ec77e172a16413a6d1f8ce739687ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ef2930e3e4ca45956bb1acb31728cb80d324ef5e77bca697b6d99a878b1393be->leave($__internal_ef2930e3e4ca45956bb1acb31728cb80d324ef5e77bca697b6d99a878b1393be_prof);

        
        $__internal_33da7709521622afce72d93f33f1b37073ec77e172a16413a6d1f8ce739687ec->leave($__internal_33da7709521622afce72d93f33f1b37073ec77e172a16413a6d1f8ce739687ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

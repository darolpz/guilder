<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_5a5db155a3b680450f865058cc284fe13e226603e1c5558b4bd6f31a44c2f0a1 extends Twig_Template
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
        $__internal_c93ff39dc7027af93d5e9f5a0cc4b009c43fd67fffc2175be4f2e6a1f73a28dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93ff39dc7027af93d5e9f5a0cc4b009c43fd67fffc2175be4f2e6a1f73a28dd->enter($__internal_c93ff39dc7027af93d5e9f5a0cc4b009c43fd67fffc2175be4f2e6a1f73a28dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b636a9b08099804d023215eba2a0fb660abe689fa0edb5b15def0926a122935e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b636a9b08099804d023215eba2a0fb660abe689fa0edb5b15def0926a122935e->enter($__internal_b636a9b08099804d023215eba2a0fb660abe689fa0edb5b15def0926a122935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c93ff39dc7027af93d5e9f5a0cc4b009c43fd67fffc2175be4f2e6a1f73a28dd->leave($__internal_c93ff39dc7027af93d5e9f5a0cc4b009c43fd67fffc2175be4f2e6a1f73a28dd_prof);

        
        $__internal_b636a9b08099804d023215eba2a0fb660abe689fa0edb5b15def0926a122935e->leave($__internal_b636a9b08099804d023215eba2a0fb660abe689fa0edb5b15def0926a122935e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

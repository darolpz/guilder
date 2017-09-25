<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a0bcbaafa77b2b2e36c31a134846a4e07bac4237fc76bfefe544fda8dacedead extends Twig_Template
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
        $__internal_98d43144acfa1c3c0f77473dc7adffecce0e423accc532d562b190b5a9f4d11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d43144acfa1c3c0f77473dc7adffecce0e423accc532d562b190b5a9f4d11f->enter($__internal_98d43144acfa1c3c0f77473dc7adffecce0e423accc532d562b190b5a9f4d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0dec01d2b6ee06c28672060f70e3ceb7947e4e015be6dbdb20f7d072bc268988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dec01d2b6ee06c28672060f70e3ceb7947e4e015be6dbdb20f7d072bc268988->enter($__internal_0dec01d2b6ee06c28672060f70e3ceb7947e4e015be6dbdb20f7d072bc268988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_98d43144acfa1c3c0f77473dc7adffecce0e423accc532d562b190b5a9f4d11f->leave($__internal_98d43144acfa1c3c0f77473dc7adffecce0e423accc532d562b190b5a9f4d11f_prof);

        
        $__internal_0dec01d2b6ee06c28672060f70e3ceb7947e4e015be6dbdb20f7d072bc268988->leave($__internal_0dec01d2b6ee06c28672060f70e3ceb7947e4e015be6dbdb20f7d072bc268988_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

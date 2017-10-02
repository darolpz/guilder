<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_88f11b1e857296202947b18f268b2cc539470e8047fba297f0948838878d304b extends Twig_Template
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
        $__internal_9e92eac477073bc6bc2afd17f8bc758cf3f268b2b48e79fd8b6566a670af510f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e92eac477073bc6bc2afd17f8bc758cf3f268b2b48e79fd8b6566a670af510f->enter($__internal_9e92eac477073bc6bc2afd17f8bc758cf3f268b2b48e79fd8b6566a670af510f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ffae904bfd6613dc7643dafe66d5d926099f657ce701e9b23dc806557fe4a73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffae904bfd6613dc7643dafe66d5d926099f657ce701e9b23dc806557fe4a73f->enter($__internal_ffae904bfd6613dc7643dafe66d5d926099f657ce701e9b23dc806557fe4a73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9e92eac477073bc6bc2afd17f8bc758cf3f268b2b48e79fd8b6566a670af510f->leave($__internal_9e92eac477073bc6bc2afd17f8bc758cf3f268b2b48e79fd8b6566a670af510f_prof);

        
        $__internal_ffae904bfd6613dc7643dafe66d5d926099f657ce701e9b23dc806557fe4a73f->leave($__internal_ffae904bfd6613dc7643dafe66d5d926099f657ce701e9b23dc806557fe4a73f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c714a15756c7b32bbe3b37a6e3daca738ce7b8d99eb0cf231ad9411c959b30e2 extends Twig_Template
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
        $__internal_fdaf0e495c8080f95ee958d6f6b96f1bf4138bf53075b2d7d05cb672dbb97f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdaf0e495c8080f95ee958d6f6b96f1bf4138bf53075b2d7d05cb672dbb97f73->enter($__internal_fdaf0e495c8080f95ee958d6f6b96f1bf4138bf53075b2d7d05cb672dbb97f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_806f78e4224fa3766e24c0fc0d23c1aca3155ed4f272f11d03c3c44ca5ad3f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806f78e4224fa3766e24c0fc0d23c1aca3155ed4f272f11d03c3c44ca5ad3f58->enter($__internal_806f78e4224fa3766e24c0fc0d23c1aca3155ed4f272f11d03c3c44ca5ad3f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fdaf0e495c8080f95ee958d6f6b96f1bf4138bf53075b2d7d05cb672dbb97f73->leave($__internal_fdaf0e495c8080f95ee958d6f6b96f1bf4138bf53075b2d7d05cb672dbb97f73_prof);

        
        $__internal_806f78e4224fa3766e24c0fc0d23c1aca3155ed4f272f11d03c3c44ca5ad3f58->leave($__internal_806f78e4224fa3766e24c0fc0d23c1aca3155ed4f272f11d03c3c44ca5ad3f58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}

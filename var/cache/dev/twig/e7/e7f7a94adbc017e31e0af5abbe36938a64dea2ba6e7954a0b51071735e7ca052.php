<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8fbbee4e45162336ba454d8d08706fdb0b8724baff788e1d2285b571b0c1350c extends Twig_Template
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
        $__internal_47e20ff37a401820c5bb1d21be943b4a1e75c8ea206c5f143b1de28c473785dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e20ff37a401820c5bb1d21be943b4a1e75c8ea206c5f143b1de28c473785dc->enter($__internal_47e20ff37a401820c5bb1d21be943b4a1e75c8ea206c5f143b1de28c473785dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c14caf737bed4831c4875ad01b034189a7e6b6f743572dca6fba695dcf2fae2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14caf737bed4831c4875ad01b034189a7e6b6f743572dca6fba695dcf2fae2d->enter($__internal_c14caf737bed4831c4875ad01b034189a7e6b6f743572dca6fba695dcf2fae2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_47e20ff37a401820c5bb1d21be943b4a1e75c8ea206c5f143b1de28c473785dc->leave($__internal_47e20ff37a401820c5bb1d21be943b4a1e75c8ea206c5f143b1de28c473785dc_prof);

        
        $__internal_c14caf737bed4831c4875ad01b034189a7e6b6f743572dca6fba695dcf2fae2d->leave($__internal_c14caf737bed4831c4875ad01b034189a7e6b6f743572dca6fba695dcf2fae2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}

<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9f6224f034cc85d529136e173070785fa907214a81106382bce53c67852f8111 extends Twig_Template
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
        $__internal_fddd4af21535639d9c4c375f22d0c492849ff88ca136f274141a6ca535972ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddd4af21535639d9c4c375f22d0c492849ff88ca136f274141a6ca535972ed0->enter($__internal_fddd4af21535639d9c4c375f22d0c492849ff88ca136f274141a6ca535972ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_faed568d37a5c114fe1ad753124cd481621214777291dc74bf6335ec44ab3de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faed568d37a5c114fe1ad753124cd481621214777291dc74bf6335ec44ab3de5->enter($__internal_faed568d37a5c114fe1ad753124cd481621214777291dc74bf6335ec44ab3de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fddd4af21535639d9c4c375f22d0c492849ff88ca136f274141a6ca535972ed0->leave($__internal_fddd4af21535639d9c4c375f22d0c492849ff88ca136f274141a6ca535972ed0_prof);

        
        $__internal_faed568d37a5c114fe1ad753124cd481621214777291dc74bf6335ec44ab3de5->leave($__internal_faed568d37a5c114fe1ad753124cd481621214777291dc74bf6335ec44ab3de5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}

<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_018a74265dafed84df1e4c8cbdb2309779e71d80b055a85859bf080568e3c50c extends Twig_Template
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
        $__internal_5af91df6dc1c81ceeba7f37cfc74c50efba59316542f4bcd68be9d47db15157d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af91df6dc1c81ceeba7f37cfc74c50efba59316542f4bcd68be9d47db15157d->enter($__internal_5af91df6dc1c81ceeba7f37cfc74c50efba59316542f4bcd68be9d47db15157d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8c92a4089d002a6448c5f974bd726f691f81f7e13774f7e37bed638d8bf71135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c92a4089d002a6448c5f974bd726f691f81f7e13774f7e37bed638d8bf71135->enter($__internal_8c92a4089d002a6448c5f974bd726f691f81f7e13774f7e37bed638d8bf71135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5af91df6dc1c81ceeba7f37cfc74c50efba59316542f4bcd68be9d47db15157d->leave($__internal_5af91df6dc1c81ceeba7f37cfc74c50efba59316542f4bcd68be9d47db15157d_prof);

        
        $__internal_8c92a4089d002a6448c5f974bd726f691f81f7e13774f7e37bed638d8bf71135->leave($__internal_8c92a4089d002a6448c5f974bd726f691f81f7e13774f7e37bed638d8bf71135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

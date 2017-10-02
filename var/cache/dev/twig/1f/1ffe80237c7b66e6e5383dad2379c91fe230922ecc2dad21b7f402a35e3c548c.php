<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1e8fb82b3f2bcde7dd2b6e9f6e2fb7a746007be899b0b9ab536a0fd3d25354d0 extends Twig_Template
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
        $__internal_bc7e2364965f452e641edba07284cab2cf1bba8f81a421acafb4861076f144a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7e2364965f452e641edba07284cab2cf1bba8f81a421acafb4861076f144a5->enter($__internal_bc7e2364965f452e641edba07284cab2cf1bba8f81a421acafb4861076f144a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a4361d47c5902da1d4d6926395c02c5b8dd8d9f8c36c5d36214ea9f7d24d55a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4361d47c5902da1d4d6926395c02c5b8dd8d9f8c36c5d36214ea9f7d24d55a2->enter($__internal_a4361d47c5902da1d4d6926395c02c5b8dd8d9f8c36c5d36214ea9f7d24d55a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_bc7e2364965f452e641edba07284cab2cf1bba8f81a421acafb4861076f144a5->leave($__internal_bc7e2364965f452e641edba07284cab2cf1bba8f81a421acafb4861076f144a5_prof);

        
        $__internal_a4361d47c5902da1d4d6926395c02c5b8dd8d9f8c36c5d36214ea9f7d24d55a2->leave($__internal_a4361d47c5902da1d4d6926395c02c5b8dd8d9f8c36c5d36214ea9f7d24d55a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}

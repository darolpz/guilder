<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_98cc9add6a81fe5647a7b72f484169234177a571e4365477dfac2117a1eb3208 extends Twig_Template
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
        $__internal_fcd8a424be4b388c94eee4bc46c6323707ed95677415824ffbc2584d18e4c46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd8a424be4b388c94eee4bc46c6323707ed95677415824ffbc2584d18e4c46d->enter($__internal_fcd8a424be4b388c94eee4bc46c6323707ed95677415824ffbc2584d18e4c46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_57ceb49c37abc0df4abd373971f19543b8a474da34fed4e1de4f8104900247e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ceb49c37abc0df4abd373971f19543b8a474da34fed4e1de4f8104900247e4->enter($__internal_57ceb49c37abc0df4abd373971f19543b8a474da34fed4e1de4f8104900247e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fcd8a424be4b388c94eee4bc46c6323707ed95677415824ffbc2584d18e4c46d->leave($__internal_fcd8a424be4b388c94eee4bc46c6323707ed95677415824ffbc2584d18e4c46d_prof);

        
        $__internal_57ceb49c37abc0df4abd373971f19543b8a474da34fed4e1de4f8104900247e4->leave($__internal_57ceb49c37abc0df4abd373971f19543b8a474da34fed4e1de4f8104900247e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}

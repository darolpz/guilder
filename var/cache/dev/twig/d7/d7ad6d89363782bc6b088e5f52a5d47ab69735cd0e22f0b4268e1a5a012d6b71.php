<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cab5a67889bd3a426ce6a939f99ae35d294977358932f5d4e077defbbb342f18 extends Twig_Template
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
        $__internal_f240a16cb39b9aae1648ca6b1afdfc9af5e0460289bcc43ba7ac46a674be3961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f240a16cb39b9aae1648ca6b1afdfc9af5e0460289bcc43ba7ac46a674be3961->enter($__internal_f240a16cb39b9aae1648ca6b1afdfc9af5e0460289bcc43ba7ac46a674be3961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_310704f45f9c510d7e89cd9e252e359a990c4b6e21eae7de9ea91ac0c6088bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310704f45f9c510d7e89cd9e252e359a990c4b6e21eae7de9ea91ac0c6088bab->enter($__internal_310704f45f9c510d7e89cd9e252e359a990c4b6e21eae7de9ea91ac0c6088bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f240a16cb39b9aae1648ca6b1afdfc9af5e0460289bcc43ba7ac46a674be3961->leave($__internal_f240a16cb39b9aae1648ca6b1afdfc9af5e0460289bcc43ba7ac46a674be3961_prof);

        
        $__internal_310704f45f9c510d7e89cd9e252e359a990c4b6e21eae7de9ea91ac0c6088bab->leave($__internal_310704f45f9c510d7e89cd9e252e359a990c4b6e21eae7de9ea91ac0c6088bab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}

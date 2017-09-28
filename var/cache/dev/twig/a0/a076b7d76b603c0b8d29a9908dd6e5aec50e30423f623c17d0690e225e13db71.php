<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1c6d9174d573178796b3159335813abc7dff9cbd033779c19d1ee5b9c5fa108 extends Twig_Template
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
        $__internal_b5754aba0c1dc3a6b4ee855b2f49313f675b893134c38a613091448d07a6332d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5754aba0c1dc3a6b4ee855b2f49313f675b893134c38a613091448d07a6332d->enter($__internal_b5754aba0c1dc3a6b4ee855b2f49313f675b893134c38a613091448d07a6332d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e4a09b3aeb9fd86a4b6c78c68eb341ec00bd44b59d4a0bd974b51294254e9efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a09b3aeb9fd86a4b6c78c68eb341ec00bd44b59d4a0bd974b51294254e9efa->enter($__internal_e4a09b3aeb9fd86a4b6c78c68eb341ec00bd44b59d4a0bd974b51294254e9efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b5754aba0c1dc3a6b4ee855b2f49313f675b893134c38a613091448d07a6332d->leave($__internal_b5754aba0c1dc3a6b4ee855b2f49313f675b893134c38a613091448d07a6332d_prof);

        
        $__internal_e4a09b3aeb9fd86a4b6c78c68eb341ec00bd44b59d4a0bd974b51294254e9efa->leave($__internal_e4a09b3aeb9fd86a4b6c78c68eb341ec00bd44b59d4a0bd974b51294254e9efa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

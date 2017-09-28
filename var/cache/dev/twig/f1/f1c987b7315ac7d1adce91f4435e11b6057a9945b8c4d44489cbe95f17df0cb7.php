<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0fe85de2ce7e12397ff4f3653200f0f4e1be013b2e0ae3153b456626ccda2b0 extends Twig_Template
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
        $__internal_9ba03d477a3180b64ccaef19e6dbe514798db1bc43fcb66db8d229550452910c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba03d477a3180b64ccaef19e6dbe514798db1bc43fcb66db8d229550452910c->enter($__internal_9ba03d477a3180b64ccaef19e6dbe514798db1bc43fcb66db8d229550452910c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_76833af3fba8489d0618785bbf6c18abf2ebda671cd54d4856ee8e869772307a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76833af3fba8489d0618785bbf6c18abf2ebda671cd54d4856ee8e869772307a->enter($__internal_76833af3fba8489d0618785bbf6c18abf2ebda671cd54d4856ee8e869772307a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9ba03d477a3180b64ccaef19e6dbe514798db1bc43fcb66db8d229550452910c->leave($__internal_9ba03d477a3180b64ccaef19e6dbe514798db1bc43fcb66db8d229550452910c_prof);

        
        $__internal_76833af3fba8489d0618785bbf6c18abf2ebda671cd54d4856ee8e869772307a->leave($__internal_76833af3fba8489d0618785bbf6c18abf2ebda671cd54d4856ee8e869772307a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}

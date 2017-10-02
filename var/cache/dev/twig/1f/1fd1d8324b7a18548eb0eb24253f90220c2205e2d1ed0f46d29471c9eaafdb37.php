<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8c02e2e7c4c1be191f60bfcf969a441b80a59321483a91ca09e2dd35689d1c2 extends Twig_Template
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
        $__internal_bdd74376de5d235aa1e23e92ec25c07ca0c571c0361c07e3a043ce4b2574b308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd74376de5d235aa1e23e92ec25c07ca0c571c0361c07e3a043ce4b2574b308->enter($__internal_bdd74376de5d235aa1e23e92ec25c07ca0c571c0361c07e3a043ce4b2574b308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_169d1b3af283628172065925d326a65c9555a4680c50407237a49f880fbce4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169d1b3af283628172065925d326a65c9555a4680c50407237a49f880fbce4c8->enter($__internal_169d1b3af283628172065925d326a65c9555a4680c50407237a49f880fbce4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bdd74376de5d235aa1e23e92ec25c07ca0c571c0361c07e3a043ce4b2574b308->leave($__internal_bdd74376de5d235aa1e23e92ec25c07ca0c571c0361c07e3a043ce4b2574b308_prof);

        
        $__internal_169d1b3af283628172065925d326a65c9555a4680c50407237a49f880fbce4c8->leave($__internal_169d1b3af283628172065925d326a65c9555a4680c50407237a49f880fbce4c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

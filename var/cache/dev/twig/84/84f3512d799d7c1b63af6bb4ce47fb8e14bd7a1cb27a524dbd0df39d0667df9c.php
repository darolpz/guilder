<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0fe20de790e04fd2b620675530ee2f85f512ba7de5aef281748e72aaaa8a7575 extends Twig_Template
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
        $__internal_5751e0c82c600c8890ad27ab786f12c5a8039fb09190f8f163ed356fb778c20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5751e0c82c600c8890ad27ab786f12c5a8039fb09190f8f163ed356fb778c20e->enter($__internal_5751e0c82c600c8890ad27ab786f12c5a8039fb09190f8f163ed356fb778c20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_831e1803f546354ad1b6c8cc4e3285e1fa2b49c57ad9fb7f5d14cd1504dd62fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831e1803f546354ad1b6c8cc4e3285e1fa2b49c57ad9fb7f5d14cd1504dd62fa->enter($__internal_831e1803f546354ad1b6c8cc4e3285e1fa2b49c57ad9fb7f5d14cd1504dd62fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5751e0c82c600c8890ad27ab786f12c5a8039fb09190f8f163ed356fb778c20e->leave($__internal_5751e0c82c600c8890ad27ab786f12c5a8039fb09190f8f163ed356fb778c20e_prof);

        
        $__internal_831e1803f546354ad1b6c8cc4e3285e1fa2b49c57ad9fb7f5d14cd1504dd62fa->leave($__internal_831e1803f546354ad1b6c8cc4e3285e1fa2b49c57ad9fb7f5d14cd1504dd62fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

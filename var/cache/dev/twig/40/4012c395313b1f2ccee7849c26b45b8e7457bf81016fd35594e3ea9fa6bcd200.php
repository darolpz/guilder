<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cc018fb08ddec6f6ae325cc1c8e3961053ab22cdc9fed81fb68f9b06eb7830ea extends Twig_Template
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
        $__internal_b736004f9cb0f2e1ff74a20ccc97414aa4a9919c8faab5a7d9631ca5ce8f38d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b736004f9cb0f2e1ff74a20ccc97414aa4a9919c8faab5a7d9631ca5ce8f38d6->enter($__internal_b736004f9cb0f2e1ff74a20ccc97414aa4a9919c8faab5a7d9631ca5ce8f38d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_95120f34ab6c7748f110367836920cdad4c9b657ad64fe1d426959a6f073bec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95120f34ab6c7748f110367836920cdad4c9b657ad64fe1d426959a6f073bec9->enter($__internal_95120f34ab6c7748f110367836920cdad4c9b657ad64fe1d426959a6f073bec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b736004f9cb0f2e1ff74a20ccc97414aa4a9919c8faab5a7d9631ca5ce8f38d6->leave($__internal_b736004f9cb0f2e1ff74a20ccc97414aa4a9919c8faab5a7d9631ca5ce8f38d6_prof);

        
        $__internal_95120f34ab6c7748f110367836920cdad4c9b657ad64fe1d426959a6f073bec9->leave($__internal_95120f34ab6c7748f110367836920cdad4c9b657ad64fe1d426959a6f073bec9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bfb4ffdef502dcf1316dc0c9faf545e5683823da860a9a5939d9b46f13d6b39a extends Twig_Template
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
        $__internal_43efac10aa2feb030edb67a4f6d4f2f24d42b96ddcb911fb005f17d23a2cb2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43efac10aa2feb030edb67a4f6d4f2f24d42b96ddcb911fb005f17d23a2cb2ae->enter($__internal_43efac10aa2feb030edb67a4f6d4f2f24d42b96ddcb911fb005f17d23a2cb2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ab59b2d9ec8a9ddd2d4c801ec2596889eb31fadd099ae7533788a9f42bb187ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab59b2d9ec8a9ddd2d4c801ec2596889eb31fadd099ae7533788a9f42bb187ba->enter($__internal_ab59b2d9ec8a9ddd2d4c801ec2596889eb31fadd099ae7533788a9f42bb187ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_43efac10aa2feb030edb67a4f6d4f2f24d42b96ddcb911fb005f17d23a2cb2ae->leave($__internal_43efac10aa2feb030edb67a4f6d4f2f24d42b96ddcb911fb005f17d23a2cb2ae_prof);

        
        $__internal_ab59b2d9ec8a9ddd2d4c801ec2596889eb31fadd099ae7533788a9f42bb187ba->leave($__internal_ab59b2d9ec8a9ddd2d4c801ec2596889eb31fadd099ae7533788a9f42bb187ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

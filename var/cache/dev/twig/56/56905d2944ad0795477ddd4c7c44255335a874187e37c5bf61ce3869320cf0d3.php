<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e80bd426376c58c1d5dca3b1cc12ff386d456005d8dcca2ea8a2fe02d8fa5d55 extends Twig_Template
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
        $__internal_66b756b181e67e719409088be13f3a30f22d27f59f2826aa8d5a6d98355deb84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b756b181e67e719409088be13f3a30f22d27f59f2826aa8d5a6d98355deb84->enter($__internal_66b756b181e67e719409088be13f3a30f22d27f59f2826aa8d5a6d98355deb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ba4a27577f6ed0b4c2a14de070d070073f08600792132f2a679ac4d76c242933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4a27577f6ed0b4c2a14de070d070073f08600792132f2a679ac4d76c242933->enter($__internal_ba4a27577f6ed0b4c2a14de070d070073f08600792132f2a679ac4d76c242933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_66b756b181e67e719409088be13f3a30f22d27f59f2826aa8d5a6d98355deb84->leave($__internal_66b756b181e67e719409088be13f3a30f22d27f59f2826aa8d5a6d98355deb84_prof);

        
        $__internal_ba4a27577f6ed0b4c2a14de070d070073f08600792132f2a679ac4d76c242933->leave($__internal_ba4a27577f6ed0b4c2a14de070d070073f08600792132f2a679ac4d76c242933_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

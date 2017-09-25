<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_64df75b4c66edc5bb15a8a64c22cc62aabaa19d15056c7c7e0febcc22cb90bab extends Twig_Template
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
        $__internal_7d5b5b4cfb9d62d5211c4f3111f16d5d8d9fa60ce90b32d0a33c5a0aa80bdf47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5b5b4cfb9d62d5211c4f3111f16d5d8d9fa60ce90b32d0a33c5a0aa80bdf47->enter($__internal_7d5b5b4cfb9d62d5211c4f3111f16d5d8d9fa60ce90b32d0a33c5a0aa80bdf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_67e153660cb34b9031bf7e4307e51dd3886eebebb2bd8d21593b543ec38364ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e153660cb34b9031bf7e4307e51dd3886eebebb2bd8d21593b543ec38364ad->enter($__internal_67e153660cb34b9031bf7e4307e51dd3886eebebb2bd8d21593b543ec38364ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7d5b5b4cfb9d62d5211c4f3111f16d5d8d9fa60ce90b32d0a33c5a0aa80bdf47->leave($__internal_7d5b5b4cfb9d62d5211c4f3111f16d5d8d9fa60ce90b32d0a33c5a0aa80bdf47_prof);

        
        $__internal_67e153660cb34b9031bf7e4307e51dd3886eebebb2bd8d21593b543ec38364ad->leave($__internal_67e153660cb34b9031bf7e4307e51dd3886eebebb2bd8d21593b543ec38364ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

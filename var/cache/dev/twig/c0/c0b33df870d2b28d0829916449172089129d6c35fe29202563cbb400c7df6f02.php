<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_046989859a93666f0c6afd9c5ee0222ed650fcc060c78241f1cff57f05cde739 extends Twig_Template
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
        $__internal_574e08e7326d2c190d1a23f64b642eed0d51c9fbecd096e93eca10297ab960d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574e08e7326d2c190d1a23f64b642eed0d51c9fbecd096e93eca10297ab960d8->enter($__internal_574e08e7326d2c190d1a23f64b642eed0d51c9fbecd096e93eca10297ab960d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5c73e734badf3e4ba2477f481e2720d649904b9f806bf914af058693326edb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c73e734badf3e4ba2477f481e2720d649904b9f806bf914af058693326edb8a->enter($__internal_5c73e734badf3e4ba2477f481e2720d649904b9f806bf914af058693326edb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_574e08e7326d2c190d1a23f64b642eed0d51c9fbecd096e93eca10297ab960d8->leave($__internal_574e08e7326d2c190d1a23f64b642eed0d51c9fbecd096e93eca10297ab960d8_prof);

        
        $__internal_5c73e734badf3e4ba2477f481e2720d649904b9f806bf914af058693326edb8a->leave($__internal_5c73e734badf3e4ba2477f481e2720d649904b9f806bf914af058693326edb8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

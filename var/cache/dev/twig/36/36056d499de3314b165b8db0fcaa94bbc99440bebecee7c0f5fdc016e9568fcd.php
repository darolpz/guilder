<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_bf3dd7dae01e47f3d4b988fe67651570f34d1a47c120cd6dae512cff33d112ff extends Twig_Template
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
        $__internal_9cdc927a4723914d6d4e34d5bd4ad0d266dbafdcebb94b8de86f603c3eeb9b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdc927a4723914d6d4e34d5bd4ad0d266dbafdcebb94b8de86f603c3eeb9b26->enter($__internal_9cdc927a4723914d6d4e34d5bd4ad0d266dbafdcebb94b8de86f603c3eeb9b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ad174ec58b576753a7b1140784fb0bec957ddf2db7609db73e704685744eb68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad174ec58b576753a7b1140784fb0bec957ddf2db7609db73e704685744eb68f->enter($__internal_ad174ec58b576753a7b1140784fb0bec957ddf2db7609db73e704685744eb68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9cdc927a4723914d6d4e34d5bd4ad0d266dbafdcebb94b8de86f603c3eeb9b26->leave($__internal_9cdc927a4723914d6d4e34d5bd4ad0d266dbafdcebb94b8de86f603c3eeb9b26_prof);

        
        $__internal_ad174ec58b576753a7b1140784fb0bec957ddf2db7609db73e704685744eb68f->leave($__internal_ad174ec58b576753a7b1140784fb0bec957ddf2db7609db73e704685744eb68f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

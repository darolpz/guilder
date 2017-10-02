<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_40e6854ef7dcd4193fa676e5c642ea304680c9250d91e61f11cc10d57283ccf0 extends Twig_Template
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
        $__internal_f494e4cb1e3726be5520e288391e6b31f8795b33b136935afa5f01ad93a7c8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f494e4cb1e3726be5520e288391e6b31f8795b33b136935afa5f01ad93a7c8b8->enter($__internal_f494e4cb1e3726be5520e288391e6b31f8795b33b136935afa5f01ad93a7c8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a2ba179dd99c623f9d89e7a24b3a145e60ea8c2570a9c93e34bb7c90ad454ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ba179dd99c623f9d89e7a24b3a145e60ea8c2570a9c93e34bb7c90ad454ccf->enter($__internal_a2ba179dd99c623f9d89e7a24b3a145e60ea8c2570a9c93e34bb7c90ad454ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f494e4cb1e3726be5520e288391e6b31f8795b33b136935afa5f01ad93a7c8b8->leave($__internal_f494e4cb1e3726be5520e288391e6b31f8795b33b136935afa5f01ad93a7c8b8_prof);

        
        $__internal_a2ba179dd99c623f9d89e7a24b3a145e60ea8c2570a9c93e34bb7c90ad454ccf->leave($__internal_a2ba179dd99c623f9d89e7a24b3a145e60ea8c2570a9c93e34bb7c90ad454ccf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

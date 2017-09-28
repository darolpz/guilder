<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4b7edc73be1df84354e2b6fcc211065fce6f5b9fedf694944c129d535991b375 extends Twig_Template
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
        $__internal_e45f59331700caa04de0a994af50825edb870fb1a4c1bf176fd3a03ed6ce560a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45f59331700caa04de0a994af50825edb870fb1a4c1bf176fd3a03ed6ce560a->enter($__internal_e45f59331700caa04de0a994af50825edb870fb1a4c1bf176fd3a03ed6ce560a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5f40a033926e3b639133020a51cfabbc3b4e82820c824706e6f155315dfbe06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f40a033926e3b639133020a51cfabbc3b4e82820c824706e6f155315dfbe06c->enter($__internal_5f40a033926e3b639133020a51cfabbc3b4e82820c824706e6f155315dfbe06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e45f59331700caa04de0a994af50825edb870fb1a4c1bf176fd3a03ed6ce560a->leave($__internal_e45f59331700caa04de0a994af50825edb870fb1a4c1bf176fd3a03ed6ce560a_prof);

        
        $__internal_5f40a033926e3b639133020a51cfabbc3b4e82820c824706e6f155315dfbe06c->leave($__internal_5f40a033926e3b639133020a51cfabbc3b4e82820c824706e6f155315dfbe06c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

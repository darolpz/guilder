<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e8f3dab1087a83edc51e955e2b72a2b69591a4fbe345729de576c139192178c7 extends Twig_Template
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
        $__internal_e9440fd33b392bbfb482ad7288a40e75fceac09c1e89c3baac8b327d7d752b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9440fd33b392bbfb482ad7288a40e75fceac09c1e89c3baac8b327d7d752b8d->enter($__internal_e9440fd33b392bbfb482ad7288a40e75fceac09c1e89c3baac8b327d7d752b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_04f1294dae000dce17b36c9bc05ccf04f006e7c513d26aab2a55336c8f967c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f1294dae000dce17b36c9bc05ccf04f006e7c513d26aab2a55336c8f967c73->enter($__internal_04f1294dae000dce17b36c9bc05ccf04f006e7c513d26aab2a55336c8f967c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e9440fd33b392bbfb482ad7288a40e75fceac09c1e89c3baac8b327d7d752b8d->leave($__internal_e9440fd33b392bbfb482ad7288a40e75fceac09c1e89c3baac8b327d7d752b8d_prof);

        
        $__internal_04f1294dae000dce17b36c9bc05ccf04f006e7c513d26aab2a55336c8f967c73->leave($__internal_04f1294dae000dce17b36c9bc05ccf04f006e7c513d26aab2a55336c8f967c73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

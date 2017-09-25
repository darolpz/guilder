<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e64b6b248ae80cb377d97fa1abbb45aa036c9eeaa59ec8f94261f18b1a949bac extends Twig_Template
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
        $__internal_e13f70d665fb47dc78ea82700aa84d32d5bdf50699dd342c61ad560dd5b646cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13f70d665fb47dc78ea82700aa84d32d5bdf50699dd342c61ad560dd5b646cd->enter($__internal_e13f70d665fb47dc78ea82700aa84d32d5bdf50699dd342c61ad560dd5b646cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_841e84d5f8a212da8e5bcc8c3865ff1186ae4581af4c0e8a51424ea80d81301c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841e84d5f8a212da8e5bcc8c3865ff1186ae4581af4c0e8a51424ea80d81301c->enter($__internal_841e84d5f8a212da8e5bcc8c3865ff1186ae4581af4c0e8a51424ea80d81301c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e13f70d665fb47dc78ea82700aa84d32d5bdf50699dd342c61ad560dd5b646cd->leave($__internal_e13f70d665fb47dc78ea82700aa84d32d5bdf50699dd342c61ad560dd5b646cd_prof);

        
        $__internal_841e84d5f8a212da8e5bcc8c3865ff1186ae4581af4c0e8a51424ea80d81301c->leave($__internal_841e84d5f8a212da8e5bcc8c3865ff1186ae4581af4c0e8a51424ea80d81301c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}

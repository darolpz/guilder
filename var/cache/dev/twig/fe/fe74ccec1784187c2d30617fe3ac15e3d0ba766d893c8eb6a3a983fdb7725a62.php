<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5301efa2b05b631e5885250d57e000613a4161053ff782b8558069ee865cb6d7 extends Twig_Template
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
        $__internal_6072d443f6d909449ea746e0de2e583590f5800e12158023a80ea247d3b1fd09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6072d443f6d909449ea746e0de2e583590f5800e12158023a80ea247d3b1fd09->enter($__internal_6072d443f6d909449ea746e0de2e583590f5800e12158023a80ea247d3b1fd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e3e4ac1ea8b469d487053f4b4078e0b6ef3023bc13d109f2a4ab875319352dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e4ac1ea8b469d487053f4b4078e0b6ef3023bc13d109f2a4ab875319352dec->enter($__internal_e3e4ac1ea8b469d487053f4b4078e0b6ef3023bc13d109f2a4ab875319352dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6072d443f6d909449ea746e0de2e583590f5800e12158023a80ea247d3b1fd09->leave($__internal_6072d443f6d909449ea746e0de2e583590f5800e12158023a80ea247d3b1fd09_prof);

        
        $__internal_e3e4ac1ea8b469d487053f4b4078e0b6ef3023bc13d109f2a4ab875319352dec->leave($__internal_e3e4ac1ea8b469d487053f4b4078e0b6ef3023bc13d109f2a4ab875319352dec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

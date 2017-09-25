<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fb28365caaf64fdea61eb4d3e7c931bf88203daf82fc867670620b8647859bf9 extends Twig_Template
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
        $__internal_6bcf4dc594a21e350cc5d5ec7b6ad28701dda3aaaba251a443657cce923452af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcf4dc594a21e350cc5d5ec7b6ad28701dda3aaaba251a443657cce923452af->enter($__internal_6bcf4dc594a21e350cc5d5ec7b6ad28701dda3aaaba251a443657cce923452af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5e2e5c206731b1661402720a70d64e401fffdf8321eb6feadb30847a5c6e2624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2e5c206731b1661402720a70d64e401fffdf8321eb6feadb30847a5c6e2624->enter($__internal_5e2e5c206731b1661402720a70d64e401fffdf8321eb6feadb30847a5c6e2624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6bcf4dc594a21e350cc5d5ec7b6ad28701dda3aaaba251a443657cce923452af->leave($__internal_6bcf4dc594a21e350cc5d5ec7b6ad28701dda3aaaba251a443657cce923452af_prof);

        
        $__internal_5e2e5c206731b1661402720a70d64e401fffdf8321eb6feadb30847a5c6e2624->leave($__internal_5e2e5c206731b1661402720a70d64e401fffdf8321eb6feadb30847a5c6e2624_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}

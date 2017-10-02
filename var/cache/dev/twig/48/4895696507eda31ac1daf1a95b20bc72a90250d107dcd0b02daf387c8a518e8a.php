<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a92cbbfa89cf4291d5cd0d4b349a43cb1b7e0e7cd48659c3f8735b3fe74d4a28 extends Twig_Template
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
        $__internal_4c57e982c52bb5843db0942310a98695b46349e8ea8fccf0085aa9f945995b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c57e982c52bb5843db0942310a98695b46349e8ea8fccf0085aa9f945995b21->enter($__internal_4c57e982c52bb5843db0942310a98695b46349e8ea8fccf0085aa9f945995b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_32d7dfa024d2a66e2eb84c54d73fcbadb141cc9181fa15b7170480d519fd29cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d7dfa024d2a66e2eb84c54d73fcbadb141cc9181fa15b7170480d519fd29cb->enter($__internal_32d7dfa024d2a66e2eb84c54d73fcbadb141cc9181fa15b7170480d519fd29cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4c57e982c52bb5843db0942310a98695b46349e8ea8fccf0085aa9f945995b21->leave($__internal_4c57e982c52bb5843db0942310a98695b46349e8ea8fccf0085aa9f945995b21_prof);

        
        $__internal_32d7dfa024d2a66e2eb84c54d73fcbadb141cc9181fa15b7170480d519fd29cb->leave($__internal_32d7dfa024d2a66e2eb84c54d73fcbadb141cc9181fa15b7170480d519fd29cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

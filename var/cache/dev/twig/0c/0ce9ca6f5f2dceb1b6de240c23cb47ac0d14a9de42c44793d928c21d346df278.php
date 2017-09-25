<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0bf94e2280a658b772e5624c5908353e714df07916370475ece6e59cd0202385 extends Twig_Template
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
        $__internal_00e261dde76675066214bc96fc104cfd7a0b3437e867e1d111e9a152f17fe153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e261dde76675066214bc96fc104cfd7a0b3437e867e1d111e9a152f17fe153->enter($__internal_00e261dde76675066214bc96fc104cfd7a0b3437e867e1d111e9a152f17fe153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_84221e51629ca73e1669493665b2479b6d17e0d12cfb5b3b8164b060bf7fd95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84221e51629ca73e1669493665b2479b6d17e0d12cfb5b3b8164b060bf7fd95e->enter($__internal_84221e51629ca73e1669493665b2479b6d17e0d12cfb5b3b8164b060bf7fd95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00e261dde76675066214bc96fc104cfd7a0b3437e867e1d111e9a152f17fe153->leave($__internal_00e261dde76675066214bc96fc104cfd7a0b3437e867e1d111e9a152f17fe153_prof);

        
        $__internal_84221e51629ca73e1669493665b2479b6d17e0d12cfb5b3b8164b060bf7fd95e->leave($__internal_84221e51629ca73e1669493665b2479b6d17e0d12cfb5b3b8164b060bf7fd95e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}

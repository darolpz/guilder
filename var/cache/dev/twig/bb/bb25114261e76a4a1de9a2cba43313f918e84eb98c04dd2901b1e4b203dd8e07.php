<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_77f9aaf341dc2ecb9b20ad850a9e1c5e3ba1623c740073927d212f9d61259f18 extends Twig_Template
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
        $__internal_4ad64c37e2120580b3319df35141fc23c7308f908fdc89d4fa26401aa33acda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad64c37e2120580b3319df35141fc23c7308f908fdc89d4fa26401aa33acda0->enter($__internal_4ad64c37e2120580b3319df35141fc23c7308f908fdc89d4fa26401aa33acda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3f25ea70c1baca31cdacb516044445072070eb6d114fdd4ba18a7dd2af69401d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f25ea70c1baca31cdacb516044445072070eb6d114fdd4ba18a7dd2af69401d->enter($__internal_3f25ea70c1baca31cdacb516044445072070eb6d114fdd4ba18a7dd2af69401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4ad64c37e2120580b3319df35141fc23c7308f908fdc89d4fa26401aa33acda0->leave($__internal_4ad64c37e2120580b3319df35141fc23c7308f908fdc89d4fa26401aa33acda0_prof);

        
        $__internal_3f25ea70c1baca31cdacb516044445072070eb6d114fdd4ba18a7dd2af69401d->leave($__internal_3f25ea70c1baca31cdacb516044445072070eb6d114fdd4ba18a7dd2af69401d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

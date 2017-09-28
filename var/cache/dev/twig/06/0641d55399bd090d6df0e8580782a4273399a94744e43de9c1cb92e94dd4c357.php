<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3d5e943cc8f8fed9d099f1bc78b4627410a2d022699f6b6f147ae1065ccb6f2f extends Twig_Template
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
        $__internal_7598b27ceb557f1ccc2cbda278f620b86f0c3939a2dd92592acf054093a02996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7598b27ceb557f1ccc2cbda278f620b86f0c3939a2dd92592acf054093a02996->enter($__internal_7598b27ceb557f1ccc2cbda278f620b86f0c3939a2dd92592acf054093a02996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_aee4e19538212d0b56b63922637a8a459c084e936f8d9860e17aef7aff41ce4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee4e19538212d0b56b63922637a8a459c084e936f8d9860e17aef7aff41ce4b->enter($__internal_aee4e19538212d0b56b63922637a8a459c084e936f8d9860e17aef7aff41ce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7598b27ceb557f1ccc2cbda278f620b86f0c3939a2dd92592acf054093a02996->leave($__internal_7598b27ceb557f1ccc2cbda278f620b86f0c3939a2dd92592acf054093a02996_prof);

        
        $__internal_aee4e19538212d0b56b63922637a8a459c084e936f8d9860e17aef7aff41ce4b->leave($__internal_aee4e19538212d0b56b63922637a8a459c084e936f8d9860e17aef7aff41ce4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

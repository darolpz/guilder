<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0447a5b26578c982271d3959bc31fe1d29de4baea38b3240c66ed77af9056adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29d4fc4f1d66a462fbd098861a5faeeeeeb868e92c1266ba6e766160e21f7403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d4fc4f1d66a462fbd098861a5faeeeeeb868e92c1266ba6e766160e21f7403->enter($__internal_29d4fc4f1d66a462fbd098861a5faeeeeeb868e92c1266ba6e766160e21f7403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_13394ca52b44d6281ff3fa3d509d8a36f2db4bf008ff64e8fcb520bf76de149f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13394ca52b44d6281ff3fa3d509d8a36f2db4bf008ff64e8fcb520bf76de149f->enter($__internal_13394ca52b44d6281ff3fa3d509d8a36f2db4bf008ff64e8fcb520bf76de149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_29d4fc4f1d66a462fbd098861a5faeeeeeb868e92c1266ba6e766160e21f7403->leave($__internal_29d4fc4f1d66a462fbd098861a5faeeeeeb868e92c1266ba6e766160e21f7403_prof);

        
        $__internal_13394ca52b44d6281ff3fa3d509d8a36f2db4bf008ff64e8fcb520bf76de149f->leave($__internal_13394ca52b44d6281ff3fa3d509d8a36f2db4bf008ff64e8fcb520bf76de149f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdc8c817b8974c4191be3f76be0049753a5fd394201844aa8c64b43431daf016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc8c817b8974c4191be3f76be0049753a5fd394201844aa8c64b43431daf016->enter($__internal_fdc8c817b8974c4191be3f76be0049753a5fd394201844aa8c64b43431daf016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_621d572ee9ff72c9b510a8236c12b3989fd2110f907ade2fe70cf75791cf279b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621d572ee9ff72c9b510a8236c12b3989fd2110f907ade2fe70cf75791cf279b->enter($__internal_621d572ee9ff72c9b510a8236c12b3989fd2110f907ade2fe70cf75791cf279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_621d572ee9ff72c9b510a8236c12b3989fd2110f907ade2fe70cf75791cf279b->leave($__internal_621d572ee9ff72c9b510a8236c12b3989fd2110f907ade2fe70cf75791cf279b_prof);

        
        $__internal_fdc8c817b8974c4191be3f76be0049753a5fd394201844aa8c64b43431daf016->leave($__internal_fdc8c817b8974c4191be3f76be0049753a5fd394201844aa8c64b43431daf016_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_90cfb02c9e2f9c390f562c4ce466c85200f4c6f8e5d2371479ade8e14ea17347 extends Twig_Template
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
        $__internal_a8e5634ac38775414531499472fa856b07e945e77d5c2725023efe543b23cc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e5634ac38775414531499472fa856b07e945e77d5c2725023efe543b23cc77->enter($__internal_a8e5634ac38775414531499472fa856b07e945e77d5c2725023efe543b23cc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_27a9fbdcdad09abcbde74aab27c588e01edfd9a378978b1f40d98daceebd594a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a9fbdcdad09abcbde74aab27c588e01edfd9a378978b1f40d98daceebd594a->enter($__internal_27a9fbdcdad09abcbde74aab27c588e01edfd9a378978b1f40d98daceebd594a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_a8e5634ac38775414531499472fa856b07e945e77d5c2725023efe543b23cc77->leave($__internal_a8e5634ac38775414531499472fa856b07e945e77d5c2725023efe543b23cc77_prof);

        
        $__internal_27a9fbdcdad09abcbde74aab27c588e01edfd9a378978b1f40d98daceebd594a->leave($__internal_27a9fbdcdad09abcbde74aab27c588e01edfd9a378978b1f40d98daceebd594a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}

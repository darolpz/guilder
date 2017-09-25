<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f9faa8af0f0cf9319057cc528cb09199997f261de022563fdf57da0555558fee extends Twig_Template
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
        $__internal_fb5d1db1f0b6c54521d19d5708c3e45e8762a537e0524c85a4bc04b68f90dff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5d1db1f0b6c54521d19d5708c3e45e8762a537e0524c85a4bc04b68f90dff3->enter($__internal_fb5d1db1f0b6c54521d19d5708c3e45e8762a537e0524c85a4bc04b68f90dff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_838c3b5392d8270e512cf9c63e6b6f536dcc4b12499a602be041b8115ccbd789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838c3b5392d8270e512cf9c63e6b6f536dcc4b12499a602be041b8115ccbd789->enter($__internal_838c3b5392d8270e512cf9c63e6b6f536dcc4b12499a602be041b8115ccbd789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_fb5d1db1f0b6c54521d19d5708c3e45e8762a537e0524c85a4bc04b68f90dff3->leave($__internal_fb5d1db1f0b6c54521d19d5708c3e45e8762a537e0524c85a4bc04b68f90dff3_prof);

        
        $__internal_838c3b5392d8270e512cf9c63e6b6f536dcc4b12499a602be041b8115ccbd789->leave($__internal_838c3b5392d8270e512cf9c63e6b6f536dcc4b12499a602be041b8115ccbd789_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

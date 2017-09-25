<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_4d72131321fc18cb7601c7071859143e93e091cc34de0b82056bd302c1d3c2b0 extends Twig_Template
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
        $__internal_50b1a798d19c9e82f4707080edf5fa45d290268b58fbb1f18dabf95c7d876dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b1a798d19c9e82f4707080edf5fa45d290268b58fbb1f18dabf95c7d876dee->enter($__internal_50b1a798d19c9e82f4707080edf5fa45d290268b58fbb1f18dabf95c7d876dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_db1c9df6049a10fcc736cb2b0eda726b7f8c6d32acdca02176737ef7ca8f971b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1c9df6049a10fcc736cb2b0eda726b7f8c6d32acdca02176737ef7ca8f971b->enter($__internal_db1c9df6049a10fcc736cb2b0eda726b7f8c6d32acdca02176737ef7ca8f971b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_50b1a798d19c9e82f4707080edf5fa45d290268b58fbb1f18dabf95c7d876dee->leave($__internal_50b1a798d19c9e82f4707080edf5fa45d290268b58fbb1f18dabf95c7d876dee_prof);

        
        $__internal_db1c9df6049a10fcc736cb2b0eda726b7f8c6d32acdca02176737ef7ca8f971b->leave($__internal_db1c9df6049a10fcc736cb2b0eda726b7f8c6d32acdca02176737ef7ca8f971b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}

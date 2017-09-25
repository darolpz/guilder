<?php

/* modulo/modulo1.html.twig */
class __TwigTemplate_7c139355716fcd133c715f8269d98623192f278aca2ee1481d6c0532c25b185d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modulo/modulo1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Módulo 1 ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h2> Esta es la página principal del módulo 1 </h2>

";
    }

    public function getTemplateName()
    {
        return "modulo/modulo1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modulo/modulo1.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\modulo1.html.twig");
    }
}

<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_ca5b44ffe11d4368cd8d27e164a816716669bf87556e9377ce8949d286bfbbe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>Error: ";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Ocurrió un error</h1>
        <h2>El servidor devolvió un \"";
        // line 13
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "\".</h2>

        <div>
            ";
        // line 16
        if ((($context["status_code"] ?? null) == 403)) {
            // line 17
            echo "                <h2>Usted no tiene acceso a la página\"</h2>
            ";
        } elseif ((        // line 18
($context["status_code"] ?? null) == 404)) {
            // line 19
            echo "                <h2>La página no existe\"</h2>
            ";
        }
        // line 21
        echo "        </div>
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  63 => 19,  61 => 18,  58 => 17,  56 => 16,  48 => 13,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.html.twig", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\TwigBundle\\views\\Exception\\error.html.twig");
    }
}

<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6cbe02fd2bd0479613d2c71f087e9af406c406e720e153d8ad704888e34f6ba5 extends Twig_Template
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
        $__internal_8f702ffa90e9d696f3d58e5ffdc5adb3c4a3d06df0f7d068c4839f57ff47758c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f702ffa90e9d696f3d58e5ffdc5adb3c4a3d06df0f7d068c4839f57ff47758c->enter($__internal_8f702ffa90e9d696f3d58e5ffdc5adb3c4a3d06df0f7d068c4839f57ff47758c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b84696d32546f9458135ab6f17fe1657bcb65b661cb3a96f1a88baa7cab82a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84696d32546f9458135ab6f17fe1657bcb65b661cb3a96f1a88baa7cab82a22->enter($__internal_b84696d32546f9458135ab6f17fe1657bcb65b661cb3a96f1a88baa7cab82a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8f702ffa90e9d696f3d58e5ffdc5adb3c4a3d06df0f7d068c4839f57ff47758c->leave($__internal_8f702ffa90e9d696f3d58e5ffdc5adb3c4a3d06df0f7d068c4839f57ff47758c_prof);

        
        $__internal_b84696d32546f9458135ab6f17fe1657bcb65b661cb3a96f1a88baa7cab82a22->leave($__internal_b84696d32546f9458135ab6f17fe1657bcb65b661cb3a96f1a88baa7cab82a22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

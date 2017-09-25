<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_75f8eedfbb1d5c463646b2f326c336a959b090f619aef95243588deedb794c19 extends Twig_Template
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
        $__internal_f577226ef671e10c9d8f5faaba2feb8d962fb2acddc9fa573aad522c6cbd20d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f577226ef671e10c9d8f5faaba2feb8d962fb2acddc9fa573aad522c6cbd20d6->enter($__internal_f577226ef671e10c9d8f5faaba2feb8d962fb2acddc9fa573aad522c6cbd20d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d1fa7111b2fc899d8b0f3a194b87f622413afdd3e8efbd9900cb171097401e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fa7111b2fc899d8b0f3a194b87f622413afdd3e8efbd9900cb171097401e58->enter($__internal_d1fa7111b2fc899d8b0f3a194b87f622413afdd3e8efbd9900cb171097401e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_f577226ef671e10c9d8f5faaba2feb8d962fb2acddc9fa573aad522c6cbd20d6->leave($__internal_f577226ef671e10c9d8f5faaba2feb8d962fb2acddc9fa573aad522c6cbd20d6_prof);

        
        $__internal_d1fa7111b2fc899d8b0f3a194b87f622413afdd3e8efbd9900cb171097401e58->leave($__internal_d1fa7111b2fc899d8b0f3a194b87f622413afdd3e8efbd9900cb171097401e58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

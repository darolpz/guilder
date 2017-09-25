<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1a4cb8f83d932bc75b00376c097302eb4333404e2033ffd469d244a4d585a597 extends Twig_Template
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
        $__internal_1bbf781c74dde6eed01b221ce9c1d2dc275ee89db0af6abe1e2352108296d1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbf781c74dde6eed01b221ce9c1d2dc275ee89db0af6abe1e2352108296d1c4->enter($__internal_1bbf781c74dde6eed01b221ce9c1d2dc275ee89db0af6abe1e2352108296d1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c905bef2aae4ae507b1a9e013610a8115e625983fabd1b2832be6e7f540ef146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c905bef2aae4ae507b1a9e013610a8115e625983fabd1b2832be6e7f540ef146->enter($__internal_c905bef2aae4ae507b1a9e013610a8115e625983fabd1b2832be6e7f540ef146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_1bbf781c74dde6eed01b221ce9c1d2dc275ee89db0af6abe1e2352108296d1c4->leave($__internal_1bbf781c74dde6eed01b221ce9c1d2dc275ee89db0af6abe1e2352108296d1c4_prof);

        
        $__internal_c905bef2aae4ae507b1a9e013610a8115e625983fabd1b2832be6e7f540ef146->leave($__internal_c905bef2aae4ae507b1a9e013610a8115e625983fabd1b2832be6e7f540ef146_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}

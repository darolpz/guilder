<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_3f079d1e176144e045a7806f58f98b23ed77ac77ee34ad46e2aeb30190ff0477 extends Twig_Template
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
        $__internal_d04d99fbf50b2b7cf49ea5e88ed96c4df8983b961aaf22d8a972d3f50b462945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04d99fbf50b2b7cf49ea5e88ed96c4df8983b961aaf22d8a972d3f50b462945->enter($__internal_d04d99fbf50b2b7cf49ea5e88ed96c4df8983b961aaf22d8a972d3f50b462945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_2185277c533c4d46fbbaa299fb3f85c24fe29320ef06675f10e3fe5ba38e1baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2185277c533c4d46fbbaa299fb3f85c24fe29320ef06675f10e3fe5ba38e1baa->enter($__internal_2185277c533c4d46fbbaa299fb3f85c24fe29320ef06675f10e3fe5ba38e1baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_d04d99fbf50b2b7cf49ea5e88ed96c4df8983b961aaf22d8a972d3f50b462945->leave($__internal_d04d99fbf50b2b7cf49ea5e88ed96c4df8983b961aaf22d8a972d3f50b462945_prof);

        
        $__internal_2185277c533c4d46fbbaa299fb3f85c24fe29320ef06675f10e3fe5ba38e1baa->leave($__internal_2185277c533c4d46fbbaa299fb3f85c24fe29320ef06675f10e3fe5ba38e1baa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}

<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7e6e55d7133d86fe9aee068909d59a5e02d3d16bb5c3915e79af65680de33b71 extends Twig_Template
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
        $__internal_e1f48ce72e6c0e69d9be3506c6671b4772050641e56965eb7e2fadf84b5b48aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f48ce72e6c0e69d9be3506c6671b4772050641e56965eb7e2fadf84b5b48aa->enter($__internal_e1f48ce72e6c0e69d9be3506c6671b4772050641e56965eb7e2fadf84b5b48aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_77cae7ec3c1fd007b8144350cbe61073023c5c4475efdff82ebf8a3b475630fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cae7ec3c1fd007b8144350cbe61073023c5c4475efdff82ebf8a3b475630fb->enter($__internal_77cae7ec3c1fd007b8144350cbe61073023c5c4475efdff82ebf8a3b475630fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_e1f48ce72e6c0e69d9be3506c6671b4772050641e56965eb7e2fadf84b5b48aa->leave($__internal_e1f48ce72e6c0e69d9be3506c6671b4772050641e56965eb7e2fadf84b5b48aa_prof);

        
        $__internal_77cae7ec3c1fd007b8144350cbe61073023c5c4475efdff82ebf8a3b475630fb->leave($__internal_77cae7ec3c1fd007b8144350cbe61073023c5c4475efdff82ebf8a3b475630fb_prof);

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

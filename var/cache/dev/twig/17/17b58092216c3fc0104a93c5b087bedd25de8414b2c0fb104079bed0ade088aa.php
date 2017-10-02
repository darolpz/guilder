<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_af2117130abf5bcacf87e2b63e32640f77062e16e1e828690d94fbc760c093ca extends Twig_Template
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
        $__internal_bb501060a156d47cc0878778daf39c2517b5e8d7e46d5bbec47ce8800fa75c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb501060a156d47cc0878778daf39c2517b5e8d7e46d5bbec47ce8800fa75c3c->enter($__internal_bb501060a156d47cc0878778daf39c2517b5e8d7e46d5bbec47ce8800fa75c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_48f13865568eb3ef8fb8aa74151739d885d338b51224a4bc4a9190f178721927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f13865568eb3ef8fb8aa74151739d885d338b51224a4bc4a9190f178721927->enter($__internal_48f13865568eb3ef8fb8aa74151739d885d338b51224a4bc4a9190f178721927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bb501060a156d47cc0878778daf39c2517b5e8d7e46d5bbec47ce8800fa75c3c->leave($__internal_bb501060a156d47cc0878778daf39c2517b5e8d7e46d5bbec47ce8800fa75c3c_prof);

        
        $__internal_48f13865568eb3ef8fb8aa74151739d885d338b51224a4bc4a9190f178721927->leave($__internal_48f13865568eb3ef8fb8aa74151739d885d338b51224a4bc4a9190f178721927_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}

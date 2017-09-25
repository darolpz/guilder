<?php

/* modulo/resultadosEnc.php */
class __TwigTemplate_caa596131338f1423b2e876ae8fad9521d2876584b7c9d223c94a0d899431338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modulo/resultadosEnc.php", 1);
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
        $__internal_8f36aff11f2a6029fe2a6ec53327d428f42131905c1ade7191000f2ad5688bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f36aff11f2a6029fe2a6ec53327d428f42131905c1ade7191000f2ad5688bd3->enter($__internal_8f36aff11f2a6029fe2a6ec53327d428f42131905c1ade7191000f2ad5688bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/resultadosEnc.php"));

        $__internal_2197caf6a598b5f22d06633e27b640725676edc435b06074c720fe685f589ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2197caf6a598b5f22d06633e27b640725676edc435b06074c720fe685f589ffa->enter($__internal_2197caf6a598b5f22d06633e27b640725676edc435b06074c720fe685f589ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulo/resultadosEnc.php"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f36aff11f2a6029fe2a6ec53327d428f42131905c1ade7191000f2ad5688bd3->leave($__internal_8f36aff11f2a6029fe2a6ec53327d428f42131905c1ade7191000f2ad5688bd3_prof);

        
        $__internal_2197caf6a598b5f22d06633e27b640725676edc435b06074c720fe685f589ffa->leave($__internal_2197caf6a598b5f22d06633e27b640725676edc435b06074c720fe685f589ffa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3491fc96ba6941eb74a58cd93f6a5c98e96d8feb8135088b8737743e8ba95359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3491fc96ba6941eb74a58cd93f6a5c98e96d8feb8135088b8737743e8ba95359->enter($__internal_3491fc96ba6941eb74a58cd93f6a5c98e96d8feb8135088b8737743e8ba95359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4627c8b04aea73494d21b5a20789b7298a57562d879f0774908c3b9bc90d3b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4627c8b04aea73494d21b5a20789b7298a57562d879f0774908c3b9bc90d3b13->enter($__internal_4627c8b04aea73494d21b5a20789b7298a57562d879f0774908c3b9bc90d3b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Güilder ";
        
        $__internal_4627c8b04aea73494d21b5a20789b7298a57562d879f0774908c3b9bc90d3b13->leave($__internal_4627c8b04aea73494d21b5a20789b7298a57562d879f0774908c3b9bc90d3b13_prof);

        
        $__internal_3491fc96ba6941eb74a58cd93f6a5c98e96d8feb8135088b8737743e8ba95359->leave($__internal_3491fc96ba6941eb74a58cd93f6a5c98e96d8feb8135088b8737743e8ba95359_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_37612c7554b2e711fb47a046507f744ea532932f6f9c300d112d52b7f2bcfb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37612c7554b2e711fb47a046507f744ea532932f6f9c300d112d52b7f2bcfb1c->enter($__internal_37612c7554b2e711fb47a046507f744ea532932f6f9c300d112d52b7f2bcfb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d22515c31cebc35f922215cf54e09be68558134152540e706becc28bd490570a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22515c31cebc35f922215cf54e09be68558134152540e706becc28bd490570a->enter($__internal_d22515c31cebc35f922215cf54e09be68558134152540e706becc28bd490570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
<!DOCTYPE html>
<html lang=\"en\">

    
<head>
</head>


<body>

    <?php       
    if (isset(\$_POST['submit']))
    {
        if(isset(\$_POST['radio']))
        {
            echo \"You have selected :\".\$_POST['radio'];  //  Displaying Selected Value
        }
        else
            {
            echo \"Jejejeeeeeeeeeeeee\";
        }      
    }
    ?>
    
    
</body>
</html> 
";
        
        $__internal_d22515c31cebc35f922215cf54e09be68558134152540e706becc28bd490570a->leave($__internal_d22515c31cebc35f922215cf54e09be68558134152540e706becc28bd490570a_prof);

        
        $__internal_37612c7554b2e711fb47a046507f744ea532932f6f9c300d112d52b7f2bcfb1c->leave($__internal_37612c7554b2e711fb47a046507f744ea532932f6f9c300d112d52b7f2bcfb1c_prof);

    }

    public function getTemplateName()
    {
        return "modulo/resultadosEnc.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Güilder {% endblock %}
{% block body %}
    
<!DOCTYPE html>
<html lang=\"en\">

    
<head>
</head>


<body>

    <?php       
    if (isset(\$_POST['submit']))
    {
        if(isset(\$_POST['radio']))
        {
            echo \"You have selected :\".\$_POST['radio'];  //  Displaying Selected Value
        }
        else
            {
            echo \"Jejejeeeeeeeeeeeee\";
        }      
    }
    ?>
    
    
</body>
</html> 
{% endblock %}

", "modulo/resultadosEnc.php", "C:\\xampp\\htdocs\\Proyecto\\app\\Resources\\views\\modulo\\resultadosEnc.php");
    }
}

<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_64fb77da1c75dbd66e83aeb884f308c912945e8cd9fd395d676e6bb64a9148e4 extends Twig_Template
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
        $__internal_03f8b715d4ba44e737f4afd5b16bdbe6f37af09ab6a6d71731c2da81076c6756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f8b715d4ba44e737f4afd5b16bdbe6f37af09ab6a6d71731c2da81076c6756->enter($__internal_03f8b715d4ba44e737f4afd5b16bdbe6f37af09ab6a6d71731c2da81076c6756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_48951fdcbfbf3644d4353f1696e44ce4103f4a46631bf20c6bd45b1847d6a6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48951fdcbfbf3644d4353f1696e44ce4103f4a46631bf20c6bd45b1847d6a6ff->enter($__internal_48951fdcbfbf3644d4353f1696e44ce4103f4a46631bf20c6bd45b1847d6a6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_03f8b715d4ba44e737f4afd5b16bdbe6f37af09ab6a6d71731c2da81076c6756->leave($__internal_03f8b715d4ba44e737f4afd5b16bdbe6f37af09ab6a6d71731c2da81076c6756_prof);

        
        $__internal_48951fdcbfbf3644d4353f1696e44ce4103f4a46631bf20c6bd45b1847d6a6ff->leave($__internal_48951fdcbfbf3644d4353f1696e44ce4103f4a46631bf20c6bd45b1847d6a6ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}

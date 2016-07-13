<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_963074acfd0bf61a2a551e360fe74cceb2e7aa59b9ddef7a483f3f1c7828668f extends Twig_Template
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
        $__internal_8999f1df627c72a8470dd853c80b3b8cb975a59f615f8919c10eddaa1f251fe5 = $this->env->getExtension("native_profiler");
        $__internal_8999f1df627c72a8470dd853c80b3b8cb975a59f615f8919c10eddaa1f251fe5->enter($__internal_8999f1df627c72a8470dd853c80b3b8cb975a59f615f8919c10eddaa1f251fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8999f1df627c72a8470dd853c80b3b8cb975a59f615f8919c10eddaa1f251fe5->leave($__internal_8999f1df627c72a8470dd853c80b3b8cb975a59f615f8919c10eddaa1f251fe5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

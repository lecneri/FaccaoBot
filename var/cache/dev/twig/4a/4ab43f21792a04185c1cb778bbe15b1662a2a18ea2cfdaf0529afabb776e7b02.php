<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_504d86babfa110a49367c63800dfffc782857414beaae7829d6cc7e48be8aa83 extends Twig_Template
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
        $__internal_a6dae5ffcf1062433511ef6130a8a87c0077355fc847d37e34d0d78b33167530 = $this->env->getExtension("native_profiler");
        $__internal_a6dae5ffcf1062433511ef6130a8a87c0077355fc847d37e34d0d78b33167530->enter($__internal_a6dae5ffcf1062433511ef6130a8a87c0077355fc847d37e34d0d78b33167530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a6dae5ffcf1062433511ef6130a8a87c0077355fc847d37e34d0d78b33167530->leave($__internal_a6dae5ffcf1062433511ef6130a8a87c0077355fc847d37e34d0d78b33167530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

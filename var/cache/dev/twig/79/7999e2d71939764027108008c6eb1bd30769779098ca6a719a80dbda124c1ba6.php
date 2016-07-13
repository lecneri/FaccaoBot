<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8bab859011b26888af324452ec903fb6650fbf3027e43d2594debc5102cfec23 extends Twig_Template
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
        $__internal_8ada1bf2302c36af727cd9314cff78c0a8fe80aa7c2eb6cc9f17a3ed0d332725 = $this->env->getExtension("native_profiler");
        $__internal_8ada1bf2302c36af727cd9314cff78c0a8fe80aa7c2eb6cc9f17a3ed0d332725->enter($__internal_8ada1bf2302c36af727cd9314cff78c0a8fe80aa7c2eb6cc9f17a3ed0d332725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8ada1bf2302c36af727cd9314cff78c0a8fe80aa7c2eb6cc9f17a3ed0d332725->leave($__internal_8ada1bf2302c36af727cd9314cff78c0a8fe80aa7c2eb6cc9f17a3ed0d332725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

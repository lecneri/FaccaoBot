<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7389a73e49c9584a2d8430baaa3700cdfcc0dc9610cb518cd16c19ff6a0bfc78 extends Twig_Template
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
        $__internal_3ad6824c35c2ba70680aff865a8ce31597a8d9d4654f77aa5765d903b5f2b502 = $this->env->getExtension("native_profiler");
        $__internal_3ad6824c35c2ba70680aff865a8ce31597a8d9d4654f77aa5765d903b5f2b502->enter($__internal_3ad6824c35c2ba70680aff865a8ce31597a8d9d4654f77aa5765d903b5f2b502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3ad6824c35c2ba70680aff865a8ce31597a8d9d4654f77aa5765d903b5f2b502->leave($__internal_3ad6824c35c2ba70680aff865a8ce31597a8d9d4654f77aa5765d903b5f2b502_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

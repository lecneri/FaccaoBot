<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81b62dacd16a53106d0196456467062aa28a6e504e87726c289e1b487dca9378 extends Twig_Template
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
        $__internal_8a138cf4a90a25c042a689ddfc6cb211005982d9b18bdc77667b0fe34e72bdef = $this->env->getExtension("native_profiler");
        $__internal_8a138cf4a90a25c042a689ddfc6cb211005982d9b18bdc77667b0fe34e72bdef->enter($__internal_8a138cf4a90a25c042a689ddfc6cb211005982d9b18bdc77667b0fe34e72bdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8a138cf4a90a25c042a689ddfc6cb211005982d9b18bdc77667b0fe34e72bdef->leave($__internal_8a138cf4a90a25c042a689ddfc6cb211005982d9b18bdc77667b0fe34e72bdef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_05b81ad96b094d442891154308eadea7bfe1ac1568dc0ff2c47c8236cc02d2ec extends Twig_Template
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
        $__internal_1606e0c3d0a4c7e6057b9d586b9a8e4b99d5382c6d997d5650c00af22c6d2b61 = $this->env->getExtension("native_profiler");
        $__internal_1606e0c3d0a4c7e6057b9d586b9a8e4b99d5382c6d997d5650c00af22c6d2b61->enter($__internal_1606e0c3d0a4c7e6057b9d586b9a8e4b99d5382c6d997d5650c00af22c6d2b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1606e0c3d0a4c7e6057b9d586b9a8e4b99d5382c6d997d5650c00af22c6d2b61->leave($__internal_1606e0c3d0a4c7e6057b9d586b9a8e4b99d5382c6d997d5650c00af22c6d2b61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

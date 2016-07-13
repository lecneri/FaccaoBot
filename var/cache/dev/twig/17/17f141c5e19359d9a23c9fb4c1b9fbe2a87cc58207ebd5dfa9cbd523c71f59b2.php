<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2b0f6d4998a4e53de44ced95a0e4f63aaa46a4781fe034fefd9926e42d0dda40 extends Twig_Template
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
        $__internal_c327394d95ced51a7894b50856ea83ca18c1fd1d7c0ca8247a83a2f03e40b7c9 = $this->env->getExtension("native_profiler");
        $__internal_c327394d95ced51a7894b50856ea83ca18c1fd1d7c0ca8247a83a2f03e40b7c9->enter($__internal_c327394d95ced51a7894b50856ea83ca18c1fd1d7c0ca8247a83a2f03e40b7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c327394d95ced51a7894b50856ea83ca18c1fd1d7c0ca8247a83a2f03e40b7c9->leave($__internal_c327394d95ced51a7894b50856ea83ca18c1fd1d7c0ca8247a83a2f03e40b7c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

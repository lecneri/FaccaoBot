<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7331e45b165fd5cf5c125dabccf94ed80a2b3fbb179274210e40d95361fe3750 extends Twig_Template
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
        $__internal_38044d183d4ffa3066099d123ab6cf36782468b01c74f3835fd9893e28393781 = $this->env->getExtension("native_profiler");
        $__internal_38044d183d4ffa3066099d123ab6cf36782468b01c74f3835fd9893e28393781->enter($__internal_38044d183d4ffa3066099d123ab6cf36782468b01c74f3835fd9893e28393781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_38044d183d4ffa3066099d123ab6cf36782468b01c74f3835fd9893e28393781->leave($__internal_38044d183d4ffa3066099d123ab6cf36782468b01c74f3835fd9893e28393781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

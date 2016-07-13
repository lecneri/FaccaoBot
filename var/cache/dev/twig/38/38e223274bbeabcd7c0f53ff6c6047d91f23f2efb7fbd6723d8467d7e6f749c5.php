<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a405fec5cec9a63f6484717ab89fbef3f0b4e2a994e0a03e55e3ed3b43522991 extends Twig_Template
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
        $__internal_8ab54d765255f8f28a91ffd2ffabab7a093dc58017ca0eca1b207c28ae698060 = $this->env->getExtension("native_profiler");
        $__internal_8ab54d765255f8f28a91ffd2ffabab7a093dc58017ca0eca1b207c28ae698060->enter($__internal_8ab54d765255f8f28a91ffd2ffabab7a093dc58017ca0eca1b207c28ae698060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8ab54d765255f8f28a91ffd2ffabab7a093dc58017ca0eca1b207c28ae698060->leave($__internal_8ab54d765255f8f28a91ffd2ffabab7a093dc58017ca0eca1b207c28ae698060_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

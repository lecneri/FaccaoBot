<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c9279f0c20df29c942fb65e5f23c76d5a2935fdd8c6d6d76f90fc267c30ca09e extends Twig_Template
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
        $__internal_a1f86fb49cb3fdb33cffc3d1cd162750f0cc27c6c099c4d192c9b2f8aa29e091 = $this->env->getExtension("native_profiler");
        $__internal_a1f86fb49cb3fdb33cffc3d1cd162750f0cc27c6c099c4d192c9b2f8aa29e091->enter($__internal_a1f86fb49cb3fdb33cffc3d1cd162750f0cc27c6c099c4d192c9b2f8aa29e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a1f86fb49cb3fdb33cffc3d1cd162750f0cc27c6c099c4d192c9b2f8aa29e091->leave($__internal_a1f86fb49cb3fdb33cffc3d1cd162750f0cc27c6c099c4d192c9b2f8aa29e091_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

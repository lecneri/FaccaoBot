<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b7b9dfb876d2225dc23faa8cd0b9118b2348cf56464af5f2f1c7c8665be6e3d7 extends Twig_Template
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
        $__internal_a92aa1df7b1057b4ab2083a8d6c6a817e4e1eaed6d9e210af0bfc6bc32df8594 = $this->env->getExtension("native_profiler");
        $__internal_a92aa1df7b1057b4ab2083a8d6c6a817e4e1eaed6d9e210af0bfc6bc32df8594->enter($__internal_a92aa1df7b1057b4ab2083a8d6c6a817e4e1eaed6d9e210af0bfc6bc32df8594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a92aa1df7b1057b4ab2083a8d6c6a817e4e1eaed6d9e210af0bfc6bc32df8594->leave($__internal_a92aa1df7b1057b4ab2083a8d6c6a817e4e1eaed6d9e210af0bfc6bc32df8594_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

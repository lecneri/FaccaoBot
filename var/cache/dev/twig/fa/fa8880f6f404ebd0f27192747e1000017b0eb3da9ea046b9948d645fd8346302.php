<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_846f12af167bcb64a8db8df327c6f8c5b14f79d73924ac2cc5afa33f1763d124 extends Twig_Template
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
        $__internal_13c8142efed2d3984f8e67dbb87f1ce8c746465b2bfe0b4795ef1fc239692915 = $this->env->getExtension("native_profiler");
        $__internal_13c8142efed2d3984f8e67dbb87f1ce8c746465b2bfe0b4795ef1fc239692915->enter($__internal_13c8142efed2d3984f8e67dbb87f1ce8c746465b2bfe0b4795ef1fc239692915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_13c8142efed2d3984f8e67dbb87f1ce8c746465b2bfe0b4795ef1fc239692915->leave($__internal_13c8142efed2d3984f8e67dbb87f1ce8c746465b2bfe0b4795ef1fc239692915_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

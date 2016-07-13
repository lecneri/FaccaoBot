<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f20ac5e4ff81f96f42276ef3f380b0266a932a56c8cf432450a8ccbbf2babe3a extends Twig_Template
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
        $__internal_3cb3e1b72d4d3016f997409c9bf25f438c97ea2760995819ff55a6d122ba7ea3 = $this->env->getExtension("native_profiler");
        $__internal_3cb3e1b72d4d3016f997409c9bf25f438c97ea2760995819ff55a6d122ba7ea3->enter($__internal_3cb3e1b72d4d3016f997409c9bf25f438c97ea2760995819ff55a6d122ba7ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3cb3e1b72d4d3016f997409c9bf25f438c97ea2760995819ff55a6d122ba7ea3->leave($__internal_3cb3e1b72d4d3016f997409c9bf25f438c97ea2760995819ff55a6d122ba7ea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */

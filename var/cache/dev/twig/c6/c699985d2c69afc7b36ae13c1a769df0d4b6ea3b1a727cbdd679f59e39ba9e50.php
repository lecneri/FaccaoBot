<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b9c69251e2e42cf0c70734202aac073c4759c77f6ecd4e1f8853d63afe4d91f8 extends Twig_Template
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
        $__internal_cae3c400a6f21cfe1bfc1ccdc53f4967396ac537ecb9dd0c7b55eb5c0b1983bf = $this->env->getExtension("native_profiler");
        $__internal_cae3c400a6f21cfe1bfc1ccdc53f4967396ac537ecb9dd0c7b55eb5c0b1983bf->enter($__internal_cae3c400a6f21cfe1bfc1ccdc53f4967396ac537ecb9dd0c7b55eb5c0b1983bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cae3c400a6f21cfe1bfc1ccdc53f4967396ac537ecb9dd0c7b55eb5c0b1983bf->leave($__internal_cae3c400a6f21cfe1bfc1ccdc53f4967396ac537ecb9dd0c7b55eb5c0b1983bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

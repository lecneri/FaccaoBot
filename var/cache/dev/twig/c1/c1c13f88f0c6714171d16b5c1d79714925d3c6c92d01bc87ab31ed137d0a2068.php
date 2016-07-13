<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_664425b5fc2874f5e9e0555131af87325acab9d9d4a7d21c811600743535d4f4 extends Twig_Template
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
        $__internal_ea10114f8518d0a51c7fac9d3e0ab5a149cad2079417e510e78ff5d3799533e8 = $this->env->getExtension("native_profiler");
        $__internal_ea10114f8518d0a51c7fac9d3e0ab5a149cad2079417e510e78ff5d3799533e8->enter($__internal_ea10114f8518d0a51c7fac9d3e0ab5a149cad2079417e510e78ff5d3799533e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ea10114f8518d0a51c7fac9d3e0ab5a149cad2079417e510e78ff5d3799533e8->leave($__internal_ea10114f8518d0a51c7fac9d3e0ab5a149cad2079417e510e78ff5d3799533e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

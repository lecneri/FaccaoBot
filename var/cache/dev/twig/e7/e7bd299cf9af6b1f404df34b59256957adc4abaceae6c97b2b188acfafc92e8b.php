<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cd56e1af5433708f88e78a0e80a1a58fae5e42c824ecb4b5c095b01dc960636b extends Twig_Template
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
        $__internal_cf75260a46c55a4d457fd8f2fa2cd7484aa6832d99fe166c79ebfe7b8be19f48 = $this->env->getExtension("native_profiler");
        $__internal_cf75260a46c55a4d457fd8f2fa2cd7484aa6832d99fe166c79ebfe7b8be19f48->enter($__internal_cf75260a46c55a4d457fd8f2fa2cd7484aa6832d99fe166c79ebfe7b8be19f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cf75260a46c55a4d457fd8f2fa2cd7484aa6832d99fe166c79ebfe7b8be19f48->leave($__internal_cf75260a46c55a4d457fd8f2fa2cd7484aa6832d99fe166c79ebfe7b8be19f48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

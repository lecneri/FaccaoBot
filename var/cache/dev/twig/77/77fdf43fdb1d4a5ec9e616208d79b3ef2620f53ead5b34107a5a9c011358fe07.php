<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_12d351096ee55768fe15ebb1c941b5d301736bbe5ec95a57d194e2044cf3ced3 extends Twig_Template
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
        $__internal_82ccf1a53185c823b92a01811fa7beb8cd5d448296dc52e3429655900ef9d2f7 = $this->env->getExtension("native_profiler");
        $__internal_82ccf1a53185c823b92a01811fa7beb8cd5d448296dc52e3429655900ef9d2f7->enter($__internal_82ccf1a53185c823b92a01811fa7beb8cd5d448296dc52e3429655900ef9d2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_82ccf1a53185c823b92a01811fa7beb8cd5d448296dc52e3429655900ef9d2f7->leave($__internal_82ccf1a53185c823b92a01811fa7beb8cd5d448296dc52e3429655900ef9d2f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

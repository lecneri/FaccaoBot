<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a30c2f84c35a3c2f768a63e312618266c3aa8244fcc7327a257aa234a0c5be3b extends Twig_Template
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
        $__internal_6f276ee58ca2185fe6cc5d26de564e1e4834292153f8d5ea70d131feeb3365e3 = $this->env->getExtension("native_profiler");
        $__internal_6f276ee58ca2185fe6cc5d26de564e1e4834292153f8d5ea70d131feeb3365e3->enter($__internal_6f276ee58ca2185fe6cc5d26de564e1e4834292153f8d5ea70d131feeb3365e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6f276ee58ca2185fe6cc5d26de564e1e4834292153f8d5ea70d131feeb3365e3->leave($__internal_6f276ee58ca2185fe6cc5d26de564e1e4834292153f8d5ea70d131feeb3365e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f90508ac496a61264be51b20bd0779db22d493a774f230e7ae6f0cab288988dd extends Twig_Template
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
        $__internal_3f69f2278c1155c83e764d8a3450d9cbd32e1397dde2e818a4e04031bc8f1704 = $this->env->getExtension("native_profiler");
        $__internal_3f69f2278c1155c83e764d8a3450d9cbd32e1397dde2e818a4e04031bc8f1704->enter($__internal_3f69f2278c1155c83e764d8a3450d9cbd32e1397dde2e818a4e04031bc8f1704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3f69f2278c1155c83e764d8a3450d9cbd32e1397dde2e818a4e04031bc8f1704->leave($__internal_3f69f2278c1155c83e764d8a3450d9cbd32e1397dde2e818a4e04031bc8f1704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

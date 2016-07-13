<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_33e1d0de8d94b42e8cb3b8793b2b3a2a29f277e1b92ac4583663aee765e3960e extends Twig_Template
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
        $__internal_16f1fc6e60cc509fbdb2c27d9d4cd9370a4fc1d6994020671dc0fe44bc86bc93 = $this->env->getExtension("native_profiler");
        $__internal_16f1fc6e60cc509fbdb2c27d9d4cd9370a4fc1d6994020671dc0fe44bc86bc93->enter($__internal_16f1fc6e60cc509fbdb2c27d9d4cd9370a4fc1d6994020671dc0fe44bc86bc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_16f1fc6e60cc509fbdb2c27d9d4cd9370a4fc1d6994020671dc0fe44bc86bc93->leave($__internal_16f1fc6e60cc509fbdb2c27d9d4cd9370a4fc1d6994020671dc0fe44bc86bc93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

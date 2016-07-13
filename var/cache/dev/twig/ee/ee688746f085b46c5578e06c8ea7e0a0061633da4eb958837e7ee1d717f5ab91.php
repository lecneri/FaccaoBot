<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a40d65c342ec7bd062470e0560cc076b176bf06e938146c25caaa18ecc05febd extends Twig_Template
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
        $__internal_147e4d9bcb310a027a83dfc44886cb64406be3470af9efb52ce27349bbe6c4af = $this->env->getExtension("native_profiler");
        $__internal_147e4d9bcb310a027a83dfc44886cb64406be3470af9efb52ce27349bbe6c4af->enter($__internal_147e4d9bcb310a027a83dfc44886cb64406be3470af9efb52ce27349bbe6c4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_147e4d9bcb310a027a83dfc44886cb64406be3470af9efb52ce27349bbe6c4af->leave($__internal_147e4d9bcb310a027a83dfc44886cb64406be3470af9efb52ce27349bbe6c4af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

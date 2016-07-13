<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_fb5191baa2755701928ef379931b8222a64b7b34c4204d8644ad5b1906387088 extends Twig_Template
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
        $__internal_14cc0aa22dd827d873de30c5b8025ff168efde448670baa233658ee11991b460 = $this->env->getExtension("native_profiler");
        $__internal_14cc0aa22dd827d873de30c5b8025ff168efde448670baa233658ee11991b460->enter($__internal_14cc0aa22dd827d873de30c5b8025ff168efde448670baa233658ee11991b460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_14cc0aa22dd827d873de30c5b8025ff168efde448670baa233658ee11991b460->leave($__internal_14cc0aa22dd827d873de30c5b8025ff168efde448670baa233658ee11991b460_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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

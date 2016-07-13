<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_646b25c78e7888af42067998c2198801f1da3dc23ec9720b0903759847dd7253 extends Twig_Template
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
        $__internal_b3de3fb6633943462c3ccd8dc5a6e1d1f3fe994ac2a8aef0be7b61bbd5815931 = $this->env->getExtension("native_profiler");
        $__internal_b3de3fb6633943462c3ccd8dc5a6e1d1f3fe994ac2a8aef0be7b61bbd5815931->enter($__internal_b3de3fb6633943462c3ccd8dc5a6e1d1f3fe994ac2a8aef0be7b61bbd5815931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b3de3fb6633943462c3ccd8dc5a6e1d1f3fe994ac2a8aef0be7b61bbd5815931->leave($__internal_b3de3fb6633943462c3ccd8dc5a6e1d1f3fe994ac2a8aef0be7b61bbd5815931_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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

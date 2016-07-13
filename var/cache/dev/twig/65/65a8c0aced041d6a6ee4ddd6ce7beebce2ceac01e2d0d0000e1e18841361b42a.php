<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_27837a86fafc8cc2057c09689a9ce661227727711ae4f3a5486019b8979412dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ba317e43b8dcee93dd27ee7a41c71428d2f0782dea8876becbfe92705bf40cf = $this->env->getExtension("native_profiler");
        $__internal_7ba317e43b8dcee93dd27ee7a41c71428d2f0782dea8876becbfe92705bf40cf->enter($__internal_7ba317e43b8dcee93dd27ee7a41c71428d2f0782dea8876becbfe92705bf40cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7ba317e43b8dcee93dd27ee7a41c71428d2f0782dea8876becbfe92705bf40cf->leave($__internal_7ba317e43b8dcee93dd27ee7a41c71428d2f0782dea8876becbfe92705bf40cf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4a15d8ac329014163090a7de655fb42d29cbbcdfa2453fe610644b7d6f965cb = $this->env->getExtension("native_profiler");
        $__internal_d4a15d8ac329014163090a7de655fb42d29cbbcdfa2453fe610644b7d6f965cb->enter($__internal_d4a15d8ac329014163090a7de655fb42d29cbbcdfa2453fe610644b7d6f965cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d4a15d8ac329014163090a7de655fb42d29cbbcdfa2453fe610644b7d6f965cb->leave($__internal_d4a15d8ac329014163090a7de655fb42d29cbbcdfa2453fe610644b7d6f965cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

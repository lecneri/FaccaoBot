<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c47ee55e40b2ad3cac41f1cc0dbb3101563365b37f094156eb222d5eb1c27720 extends Twig_Template
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
        $__internal_1ad32f4e92e7b5f793a4af78bdf53092514704a987593806e98fd69ca6c70dad = $this->env->getExtension("native_profiler");
        $__internal_1ad32f4e92e7b5f793a4af78bdf53092514704a987593806e98fd69ca6c70dad->enter($__internal_1ad32f4e92e7b5f793a4af78bdf53092514704a987593806e98fd69ca6c70dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1ad32f4e92e7b5f793a4af78bdf53092514704a987593806e98fd69ca6c70dad->leave($__internal_1ad32f4e92e7b5f793a4af78bdf53092514704a987593806e98fd69ca6c70dad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

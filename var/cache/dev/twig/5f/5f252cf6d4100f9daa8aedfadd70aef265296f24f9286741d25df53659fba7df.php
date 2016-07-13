<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4e30dd55e66a8aa5fd2a07a0a8a16a6c5895848944ba691f8cb1438badd96271 extends Twig_Template
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
        $__internal_4929a637cb103fe160019baedcb6f8f29f50cfad13082a87c0a4bda1ff811dad = $this->env->getExtension("native_profiler");
        $__internal_4929a637cb103fe160019baedcb6f8f29f50cfad13082a87c0a4bda1ff811dad->enter($__internal_4929a637cb103fe160019baedcb6f8f29f50cfad13082a87c0a4bda1ff811dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4929a637cb103fe160019baedcb6f8f29f50cfad13082a87c0a4bda1ff811dad->leave($__internal_4929a637cb103fe160019baedcb6f8f29f50cfad13082a87c0a4bda1ff811dad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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

<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_7e9bcfb6ab41dcfa480da761a39cbc0fe2d682b887424328a31c7758af195fdf extends Twig_Template
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
        $__internal_ffe79781bee89dcdc25770ec975cfc206f200c2bc98ff2fb22c036227bf22700 = $this->env->getExtension("native_profiler");
        $__internal_ffe79781bee89dcdc25770ec975cfc206f200c2bc98ff2fb22c036227bf22700->enter($__internal_ffe79781bee89dcdc25770ec975cfc206f200c2bc98ff2fb22c036227bf22700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ffe79781bee89dcdc25770ec975cfc206f200c2bc98ff2fb22c036227bf22700->leave($__internal_ffe79781bee89dcdc25770ec975cfc206f200c2bc98ff2fb22c036227bf22700_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

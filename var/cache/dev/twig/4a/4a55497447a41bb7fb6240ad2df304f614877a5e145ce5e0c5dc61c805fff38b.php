<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_dacba9bf9fe166e8be7101bd88083b3360195b18749582f2f191b99ce3cac439 extends Twig_Template
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
        $__internal_dee538e74f3d6d83440bb75a927ffb257cce215fc24f58e6828cff08a2859642 = $this->env->getExtension("native_profiler");
        $__internal_dee538e74f3d6d83440bb75a927ffb257cce215fc24f58e6828cff08a2859642->enter($__internal_dee538e74f3d6d83440bb75a927ffb257cce215fc24f58e6828cff08a2859642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_dee538e74f3d6d83440bb75a927ffb257cce215fc24f58e6828cff08a2859642->leave($__internal_dee538e74f3d6d83440bb75a927ffb257cce215fc24f58e6828cff08a2859642_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

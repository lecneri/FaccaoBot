<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_646af04ac06290f9aea596d40627f16f103d6b29811b51cd077b02b374d3fc50 extends Twig_Template
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
        $__internal_ffdec6b657a2c51aff02caf5ca6b97ff75dbcd33d3b11c6f51613e68afce86e5 = $this->env->getExtension("native_profiler");
        $__internal_ffdec6b657a2c51aff02caf5ca6b97ff75dbcd33d3b11c6f51613e68afce86e5->enter($__internal_ffdec6b657a2c51aff02caf5ca6b97ff75dbcd33d3b11c6f51613e68afce86e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ffdec6b657a2c51aff02caf5ca6b97ff75dbcd33d3b11c6f51613e68afce86e5->leave($__internal_ffdec6b657a2c51aff02caf5ca6b97ff75dbcd33d3b11c6f51613e68afce86e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

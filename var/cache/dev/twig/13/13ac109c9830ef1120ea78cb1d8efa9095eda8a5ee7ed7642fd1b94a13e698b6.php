<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8198b95da14b52107fea2e0119e0a436aabbe6d22f0340f939b0cb06417297e0 extends Twig_Template
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
        $__internal_662de367511e7f8ade75676a7f3a729feaca8803d287bfd5e45ce4f422d4787b = $this->env->getExtension("native_profiler");
        $__internal_662de367511e7f8ade75676a7f3a729feaca8803d287bfd5e45ce4f422d4787b->enter($__internal_662de367511e7f8ade75676a7f3a729feaca8803d287bfd5e45ce4f422d4787b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_662de367511e7f8ade75676a7f3a729feaca8803d287bfd5e45ce4f422d4787b->leave($__internal_662de367511e7f8ade75676a7f3a729feaca8803d287bfd5e45ce4f422d4787b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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

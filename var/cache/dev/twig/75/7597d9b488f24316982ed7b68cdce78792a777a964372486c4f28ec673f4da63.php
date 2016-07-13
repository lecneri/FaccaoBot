<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a28c31e0531f4affd74adb88defb453422f4170b0eba6844b152f805491aebce extends Twig_Template
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
        $__internal_e572a2fee9131f3d2729f2548eb7c0f75eb464db9174a117bae1acfc527f5770 = $this->env->getExtension("native_profiler");
        $__internal_e572a2fee9131f3d2729f2548eb7c0f75eb464db9174a117bae1acfc527f5770->enter($__internal_e572a2fee9131f3d2729f2548eb7c0f75eb464db9174a117bae1acfc527f5770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e572a2fee9131f3d2729f2548eb7c0f75eb464db9174a117bae1acfc527f5770->leave($__internal_e572a2fee9131f3d2729f2548eb7c0f75eb464db9174a117bae1acfc527f5770_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

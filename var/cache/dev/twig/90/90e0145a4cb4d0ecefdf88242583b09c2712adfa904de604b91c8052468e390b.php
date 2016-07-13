<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a4ed44482bf87b4cba90ceedc96bf24845d476f1c9464d0e2b9ded5d8e3a2ec7 extends Twig_Template
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
        $__internal_1d5faafb79e00d9ed3468be41b91aa9b4407a4b5cff234b75d6aae31070b2e00 = $this->env->getExtension("native_profiler");
        $__internal_1d5faafb79e00d9ed3468be41b91aa9b4407a4b5cff234b75d6aae31070b2e00->enter($__internal_1d5faafb79e00d9ed3468be41b91aa9b4407a4b5cff234b75d6aae31070b2e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d5faafb79e00d9ed3468be41b91aa9b4407a4b5cff234b75d6aae31070b2e00->leave($__internal_1d5faafb79e00d9ed3468be41b91aa9b4407a4b5cff234b75d6aae31070b2e00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

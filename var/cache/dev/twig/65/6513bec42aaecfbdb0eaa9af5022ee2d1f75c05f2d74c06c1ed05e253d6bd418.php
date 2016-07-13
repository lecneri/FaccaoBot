<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8d831154b7b11b2066b0a934bd683119edbc2d81330734703f8fa837fce7f730 extends Twig_Template
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
        $__internal_e9e650456264e4cb5916867bfa2fb9135aaac9f20912856c718534434bd64743 = $this->env->getExtension("native_profiler");
        $__internal_e9e650456264e4cb5916867bfa2fb9135aaac9f20912856c718534434bd64743->enter($__internal_e9e650456264e4cb5916867bfa2fb9135aaac9f20912856c718534434bd64743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e9e650456264e4cb5916867bfa2fb9135aaac9f20912856c718534434bd64743->leave($__internal_e9e650456264e4cb5916867bfa2fb9135aaac9f20912856c718534434bd64743_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

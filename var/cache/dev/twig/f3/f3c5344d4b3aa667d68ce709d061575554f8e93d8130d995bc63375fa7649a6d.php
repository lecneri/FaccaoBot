<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f3d6fc8593443667215c4dbe4dbfdeab4058f903fede8aaac124002058ace0e5 extends Twig_Template
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
        $__internal_9dfd2d983b05fbaa42d28e448b17b7e80b0c5c20ecea030dcc53ec1935d74466 = $this->env->getExtension("native_profiler");
        $__internal_9dfd2d983b05fbaa42d28e448b17b7e80b0c5c20ecea030dcc53ec1935d74466->enter($__internal_9dfd2d983b05fbaa42d28e448b17b7e80b0c5c20ecea030dcc53ec1935d74466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9dfd2d983b05fbaa42d28e448b17b7e80b0c5c20ecea030dcc53ec1935d74466->leave($__internal_9dfd2d983b05fbaa42d28e448b17b7e80b0c5c20ecea030dcc53ec1935d74466_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

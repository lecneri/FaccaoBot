<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8fad6a4fcc50b4f52bc5859439054a7b7b34530bfb511db5a409ebec73984b86 extends Twig_Template
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
        $__internal_0b44013c12a0333ba98e88c39c3c3d57e4c319606099f971aff2517574f0ff0c = $this->env->getExtension("native_profiler");
        $__internal_0b44013c12a0333ba98e88c39c3c3d57e4c319606099f971aff2517574f0ff0c->enter($__internal_0b44013c12a0333ba98e88c39c3c3d57e4c319606099f971aff2517574f0ff0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0b44013c12a0333ba98e88c39c3c3d57e4c319606099f971aff2517574f0ff0c->leave($__internal_0b44013c12a0333ba98e88c39c3c3d57e4c319606099f971aff2517574f0ff0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

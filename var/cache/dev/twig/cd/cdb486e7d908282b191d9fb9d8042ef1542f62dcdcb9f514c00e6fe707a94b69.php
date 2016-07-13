<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9f69376a76d0e3e7360abef154a59e39843b58a3eec9e2fbb16a1bc72e2367ef extends Twig_Template
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
        $__internal_9a17a393cf345f5969404925422797a5495c0b945312762b4074f68b44429f17 = $this->env->getExtension("native_profiler");
        $__internal_9a17a393cf345f5969404925422797a5495c0b945312762b4074f68b44429f17->enter($__internal_9a17a393cf345f5969404925422797a5495c0b945312762b4074f68b44429f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9a17a393cf345f5969404925422797a5495c0b945312762b4074f68b44429f17->leave($__internal_9a17a393cf345f5969404925422797a5495c0b945312762b4074f68b44429f17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

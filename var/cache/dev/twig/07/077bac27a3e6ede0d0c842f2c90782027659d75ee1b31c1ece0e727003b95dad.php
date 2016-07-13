<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_348585f6b4dd8063a9b320aa70b91a1cfd741d733e1c8d110c7cea55dc97c5be extends Twig_Template
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
        $__internal_244920238fc6f10b99005acbc15cac39f92077f1b4d21e3d58a66eca5f42770d = $this->env->getExtension("native_profiler");
        $__internal_244920238fc6f10b99005acbc15cac39f92077f1b4d21e3d58a66eca5f42770d->enter($__internal_244920238fc6f10b99005acbc15cac39f92077f1b4d21e3d58a66eca5f42770d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_244920238fc6f10b99005acbc15cac39f92077f1b4d21e3d58a66eca5f42770d->leave($__internal_244920238fc6f10b99005acbc15cac39f92077f1b4d21e3d58a66eca5f42770d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

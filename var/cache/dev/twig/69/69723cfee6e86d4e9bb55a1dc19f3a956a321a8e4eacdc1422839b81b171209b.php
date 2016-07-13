<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_25ecc9f75c078956547c9ee5b8bcdce6bb9b425227a9a4c42c2132c461324363 extends Twig_Template
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
        $__internal_3279328ba36afc45dbac3b824c0e23e8aab89b6713124bb66be3959f4a77e416 = $this->env->getExtension("native_profiler");
        $__internal_3279328ba36afc45dbac3b824c0e23e8aab89b6713124bb66be3959f4a77e416->enter($__internal_3279328ba36afc45dbac3b824c0e23e8aab89b6713124bb66be3959f4a77e416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3279328ba36afc45dbac3b824c0e23e8aab89b6713124bb66be3959f4a77e416->leave($__internal_3279328ba36afc45dbac3b824c0e23e8aab89b6713124bb66be3959f4a77e416_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

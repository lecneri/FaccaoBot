<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7c2552e85ad76c868659c8754e3d47b37f91c3210e11369c83d9f519a1ee3c5b extends Twig_Template
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
        $__internal_c8ed6981c8b8945f9e82b9da3d7214f55b1c6bee30501e12d2a18e1c5c6b5c54 = $this->env->getExtension("native_profiler");
        $__internal_c8ed6981c8b8945f9e82b9da3d7214f55b1c6bee30501e12d2a18e1c5c6b5c54->enter($__internal_c8ed6981c8b8945f9e82b9da3d7214f55b1c6bee30501e12d2a18e1c5c6b5c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_c8ed6981c8b8945f9e82b9da3d7214f55b1c6bee30501e12d2a18e1c5c6b5c54->leave($__internal_c8ed6981c8b8945f9e82b9da3d7214f55b1c6bee30501e12d2a18e1c5c6b5c54_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */

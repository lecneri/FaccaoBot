<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_12dcd7e1c3152d934b1e7dab41b5dbacab76405e97a91dbacced37b2f89872f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5dff7a1dc58d1a55536fbc19f91a092ac87c424eda77c9dfea75104a2e6da22 = $this->env->getExtension("native_profiler");
        $__internal_a5dff7a1dc58d1a55536fbc19f91a092ac87c424eda77c9dfea75104a2e6da22->enter($__internal_a5dff7a1dc58d1a55536fbc19f91a092ac87c424eda77c9dfea75104a2e6da22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a5dff7a1dc58d1a55536fbc19f91a092ac87c424eda77c9dfea75104a2e6da22->leave($__internal_a5dff7a1dc58d1a55536fbc19f91a092ac87c424eda77c9dfea75104a2e6da22_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b13ca91184b80a2ad9b0c448c29f0b493020ba75462f8c8f011ee85188678b0 = $this->env->getExtension("native_profiler");
        $__internal_9b13ca91184b80a2ad9b0c448c29f0b493020ba75462f8c8f011ee85188678b0->enter($__internal_9b13ca91184b80a2ad9b0c448c29f0b493020ba75462f8c8f011ee85188678b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b13ca91184b80a2ad9b0c448c29f0b493020ba75462f8c8f011ee85188678b0->leave($__internal_9b13ca91184b80a2ad9b0c448c29f0b493020ba75462f8c8f011ee85188678b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

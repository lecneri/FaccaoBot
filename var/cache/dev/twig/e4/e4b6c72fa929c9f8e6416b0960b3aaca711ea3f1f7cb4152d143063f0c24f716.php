<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c72fcac0ff030708e09a4abb25df78214fb679dbe844c694aa7fa16e6ada3233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_259a2d4bdc8ef32310b8456ecaf9f06cdb1e8aef4591a7ccfbab296428ebd72a = $this->env->getExtension("native_profiler");
        $__internal_259a2d4bdc8ef32310b8456ecaf9f06cdb1e8aef4591a7ccfbab296428ebd72a->enter($__internal_259a2d4bdc8ef32310b8456ecaf9f06cdb1e8aef4591a7ccfbab296428ebd72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259a2d4bdc8ef32310b8456ecaf9f06cdb1e8aef4591a7ccfbab296428ebd72a->leave($__internal_259a2d4bdc8ef32310b8456ecaf9f06cdb1e8aef4591a7ccfbab296428ebd72a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72a50c7347aa96fd1b7ccdf64ca27b458e6116f6841d807ec3a9a6cab887b731 = $this->env->getExtension("native_profiler");
        $__internal_72a50c7347aa96fd1b7ccdf64ca27b458e6116f6841d807ec3a9a6cab887b731->enter($__internal_72a50c7347aa96fd1b7ccdf64ca27b458e6116f6841d807ec3a9a6cab887b731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_72a50c7347aa96fd1b7ccdf64ca27b458e6116f6841d807ec3a9a6cab887b731->leave($__internal_72a50c7347aa96fd1b7ccdf64ca27b458e6116f6841d807ec3a9a6cab887b731_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_590c5777926478155f048b4a02d182cd2e86d80e2c4a5e51d9f80f451b791145 = $this->env->getExtension("native_profiler");
        $__internal_590c5777926478155f048b4a02d182cd2e86d80e2c4a5e51d9f80f451b791145->enter($__internal_590c5777926478155f048b4a02d182cd2e86d80e2c4a5e51d9f80f451b791145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_590c5777926478155f048b4a02d182cd2e86d80e2c4a5e51d9f80f451b791145->leave($__internal_590c5777926478155f048b4a02d182cd2e86d80e2c4a5e51d9f80f451b791145_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

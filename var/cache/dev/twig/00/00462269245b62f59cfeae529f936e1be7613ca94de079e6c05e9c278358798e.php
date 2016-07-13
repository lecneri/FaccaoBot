<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d77a09ebe69691b0cc0013a1ad3202e8e80c9a01d1f71b9ca77140cac1c40dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05712f941becce796312ddbe05bc2aaf017f9239a0e51fe3b85c663cd0313ac4 = $this->env->getExtension("native_profiler");
        $__internal_05712f941becce796312ddbe05bc2aaf017f9239a0e51fe3b85c663cd0313ac4->enter($__internal_05712f941becce796312ddbe05bc2aaf017f9239a0e51fe3b85c663cd0313ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05712f941becce796312ddbe05bc2aaf017f9239a0e51fe3b85c663cd0313ac4->leave($__internal_05712f941becce796312ddbe05bc2aaf017f9239a0e51fe3b85c663cd0313ac4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0bf3602c38d86a05108d7c23bba3b35e886cab7e31b126d2333de562903136f = $this->env->getExtension("native_profiler");
        $__internal_f0bf3602c38d86a05108d7c23bba3b35e886cab7e31b126d2333de562903136f->enter($__internal_f0bf3602c38d86a05108d7c23bba3b35e886cab7e31b126d2333de562903136f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0bf3602c38d86a05108d7c23bba3b35e886cab7e31b126d2333de562903136f->leave($__internal_f0bf3602c38d86a05108d7c23bba3b35e886cab7e31b126d2333de562903136f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f47da02b41bb0aba135689465b57a6471b07cb9a487206db01b52dda5e8eec8a = $this->env->getExtension("native_profiler");
        $__internal_f47da02b41bb0aba135689465b57a6471b07cb9a487206db01b52dda5e8eec8a->enter($__internal_f47da02b41bb0aba135689465b57a6471b07cb9a487206db01b52dda5e8eec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f47da02b41bb0aba135689465b57a6471b07cb9a487206db01b52dda5e8eec8a->leave($__internal_f47da02b41bb0aba135689465b57a6471b07cb9a487206db01b52dda5e8eec8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d35beb5895c7aa2bb2b61668b8452d4688e9408884797298455443707d0511b6 = $this->env->getExtension("native_profiler");
        $__internal_d35beb5895c7aa2bb2b61668b8452d4688e9408884797298455443707d0511b6->enter($__internal_d35beb5895c7aa2bb2b61668b8452d4688e9408884797298455443707d0511b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d35beb5895c7aa2bb2b61668b8452d4688e9408884797298455443707d0511b6->leave($__internal_d35beb5895c7aa2bb2b61668b8452d4688e9408884797298455443707d0511b6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

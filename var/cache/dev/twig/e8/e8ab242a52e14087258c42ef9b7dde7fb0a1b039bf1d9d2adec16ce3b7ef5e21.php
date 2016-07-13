<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_07cd8e40a4ca144dec84accba422d8866b241a01ee86925bb38cc31697b26432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_b2b9dc6b1f785322a587d6de3709d08745bb3e026829ec7eaf6a6caa9f7f5b4d = $this->env->getExtension("native_profiler");
        $__internal_b2b9dc6b1f785322a587d6de3709d08745bb3e026829ec7eaf6a6caa9f7f5b4d->enter($__internal_b2b9dc6b1f785322a587d6de3709d08745bb3e026829ec7eaf6a6caa9f7f5b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b9dc6b1f785322a587d6de3709d08745bb3e026829ec7eaf6a6caa9f7f5b4d->leave($__internal_b2b9dc6b1f785322a587d6de3709d08745bb3e026829ec7eaf6a6caa9f7f5b4d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ea2e2531c88b469501dc53ad3905d6e9e37486f80e52cba348936c7e5642b00 = $this->env->getExtension("native_profiler");
        $__internal_1ea2e2531c88b469501dc53ad3905d6e9e37486f80e52cba348936c7e5642b00->enter($__internal_1ea2e2531c88b469501dc53ad3905d6e9e37486f80e52cba348936c7e5642b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1ea2e2531c88b469501dc53ad3905d6e9e37486f80e52cba348936c7e5642b00->leave($__internal_1ea2e2531c88b469501dc53ad3905d6e9e37486f80e52cba348936c7e5642b00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_47ef3f100d646a10d413beebdbc83c389e3bfb740f30fdb4f5bb71ccc9a14adb = $this->env->getExtension("native_profiler");
        $__internal_47ef3f100d646a10d413beebdbc83c389e3bfb740f30fdb4f5bb71ccc9a14adb->enter($__internal_47ef3f100d646a10d413beebdbc83c389e3bfb740f30fdb4f5bb71ccc9a14adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47ef3f100d646a10d413beebdbc83c389e3bfb740f30fdb4f5bb71ccc9a14adb->leave($__internal_47ef3f100d646a10d413beebdbc83c389e3bfb740f30fdb4f5bb71ccc9a14adb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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

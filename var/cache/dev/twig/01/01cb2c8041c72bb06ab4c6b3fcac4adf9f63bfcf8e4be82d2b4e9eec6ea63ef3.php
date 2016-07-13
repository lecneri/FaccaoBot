<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4463477685f36914e1286ddc4d70d42dbaa50f9c7d96dbe0ec7483cb23e6bc84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_73bf33f5fd57a90938561bf84256b57bcdd7cc58a1e40ed2fc0f8d931906ebaa = $this->env->getExtension("native_profiler");
        $__internal_73bf33f5fd57a90938561bf84256b57bcdd7cc58a1e40ed2fc0f8d931906ebaa->enter($__internal_73bf33f5fd57a90938561bf84256b57bcdd7cc58a1e40ed2fc0f8d931906ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73bf33f5fd57a90938561bf84256b57bcdd7cc58a1e40ed2fc0f8d931906ebaa->leave($__internal_73bf33f5fd57a90938561bf84256b57bcdd7cc58a1e40ed2fc0f8d931906ebaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0c1d82404db4121959e33b94ad99bd8b4969aa89d2a207d4788aa177959efc9 = $this->env->getExtension("native_profiler");
        $__internal_f0c1d82404db4121959e33b94ad99bd8b4969aa89d2a207d4788aa177959efc9->enter($__internal_f0c1d82404db4121959e33b94ad99bd8b4969aa89d2a207d4788aa177959efc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f0c1d82404db4121959e33b94ad99bd8b4969aa89d2a207d4788aa177959efc9->leave($__internal_f0c1d82404db4121959e33b94ad99bd8b4969aa89d2a207d4788aa177959efc9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8d05e7a37af0b7e6ee6ed4896a3f91dd49fb13b23f289868d6842f5081724a1 = $this->env->getExtension("native_profiler");
        $__internal_e8d05e7a37af0b7e6ee6ed4896a3f91dd49fb13b23f289868d6842f5081724a1->enter($__internal_e8d05e7a37af0b7e6ee6ed4896a3f91dd49fb13b23f289868d6842f5081724a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8d05e7a37af0b7e6ee6ed4896a3f91dd49fb13b23f289868d6842f5081724a1->leave($__internal_e8d05e7a37af0b7e6ee6ed4896a3f91dd49fb13b23f289868d6842f5081724a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b173c51b15c75c1ace17a566975bed064ba37769ad8ab832914f5814fcfffd2 = $this->env->getExtension("native_profiler");
        $__internal_8b173c51b15c75c1ace17a566975bed064ba37769ad8ab832914f5814fcfffd2->enter($__internal_8b173c51b15c75c1ace17a566975bed064ba37769ad8ab832914f5814fcfffd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8b173c51b15c75c1ace17a566975bed064ba37769ad8ab832914f5814fcfffd2->leave($__internal_8b173c51b15c75c1ace17a566975bed064ba37769ad8ab832914f5814fcfffd2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

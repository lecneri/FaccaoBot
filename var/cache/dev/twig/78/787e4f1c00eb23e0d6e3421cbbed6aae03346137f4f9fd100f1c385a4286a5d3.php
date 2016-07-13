<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7d4c636a3603c951384fdc1b94184611da2a532d26b5ca3503aa1c52bfefef0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_444d5949a2f6b2401644fa52432bb884c8c89a12bdc75f9ec2ba73a2a40499f0 = $this->env->getExtension("native_profiler");
        $__internal_444d5949a2f6b2401644fa52432bb884c8c89a12bdc75f9ec2ba73a2a40499f0->enter($__internal_444d5949a2f6b2401644fa52432bb884c8c89a12bdc75f9ec2ba73a2a40499f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444d5949a2f6b2401644fa52432bb884c8c89a12bdc75f9ec2ba73a2a40499f0->leave($__internal_444d5949a2f6b2401644fa52432bb884c8c89a12bdc75f9ec2ba73a2a40499f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de71570db7f1fc0f91d7c2d6179de647930fbf2e21ec7f0fe74b33efe8ff01d2 = $this->env->getExtension("native_profiler");
        $__internal_de71570db7f1fc0f91d7c2d6179de647930fbf2e21ec7f0fe74b33efe8ff01d2->enter($__internal_de71570db7f1fc0f91d7c2d6179de647930fbf2e21ec7f0fe74b33efe8ff01d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de71570db7f1fc0f91d7c2d6179de647930fbf2e21ec7f0fe74b33efe8ff01d2->leave($__internal_de71570db7f1fc0f91d7c2d6179de647930fbf2e21ec7f0fe74b33efe8ff01d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7adf35568ff5e24315c23582c8126c22084c459700dcefd0cb462af5efe0521f = $this->env->getExtension("native_profiler");
        $__internal_7adf35568ff5e24315c23582c8126c22084c459700dcefd0cb462af5efe0521f->enter($__internal_7adf35568ff5e24315c23582c8126c22084c459700dcefd0cb462af5efe0521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7adf35568ff5e24315c23582c8126c22084c459700dcefd0cb462af5efe0521f->leave($__internal_7adf35568ff5e24315c23582c8126c22084c459700dcefd0cb462af5efe0521f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_52e2b252425f546f92628f85a75c284fb7a1788f3fcfeaf986213d3b8fcbdd02 = $this->env->getExtension("native_profiler");
        $__internal_52e2b252425f546f92628f85a75c284fb7a1788f3fcfeaf986213d3b8fcbdd02->enter($__internal_52e2b252425f546f92628f85a75c284fb7a1788f3fcfeaf986213d3b8fcbdd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_52e2b252425f546f92628f85a75c284fb7a1788f3fcfeaf986213d3b8fcbdd02->leave($__internal_52e2b252425f546f92628f85a75c284fb7a1788f3fcfeaf986213d3b8fcbdd02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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

<?php

/* ::base.html.twig */
class __TwigTemplate_e67d19ca77ecde090c93f5eb6d39e8102c8e11be23b660412f45f02a4271a2c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_290ed45fb03a067cf5a0f7cf93ac0b65de9d294796b54bcc6df6122b684f04e5 = $this->env->getExtension("native_profiler");
        $__internal_290ed45fb03a067cf5a0f7cf93ac0b65de9d294796b54bcc6df6122b684f04e5->enter($__internal_290ed45fb03a067cf5a0f7cf93ac0b65de9d294796b54bcc6df6122b684f04e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_290ed45fb03a067cf5a0f7cf93ac0b65de9d294796b54bcc6df6122b684f04e5->leave($__internal_290ed45fb03a067cf5a0f7cf93ac0b65de9d294796b54bcc6df6122b684f04e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_577c92820024786e0e39623ab1c92cde7fa1a6f57bdb03e17ccec621ce15a51b = $this->env->getExtension("native_profiler");
        $__internal_577c92820024786e0e39623ab1c92cde7fa1a6f57bdb03e17ccec621ce15a51b->enter($__internal_577c92820024786e0e39623ab1c92cde7fa1a6f57bdb03e17ccec621ce15a51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_577c92820024786e0e39623ab1c92cde7fa1a6f57bdb03e17ccec621ce15a51b->leave($__internal_577c92820024786e0e39623ab1c92cde7fa1a6f57bdb03e17ccec621ce15a51b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d2243c2e93f05e9fb77a7cc7cb40f57e78fb36227229691b82078aba554997e = $this->env->getExtension("native_profiler");
        $__internal_8d2243c2e93f05e9fb77a7cc7cb40f57e78fb36227229691b82078aba554997e->enter($__internal_8d2243c2e93f05e9fb77a7cc7cb40f57e78fb36227229691b82078aba554997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8d2243c2e93f05e9fb77a7cc7cb40f57e78fb36227229691b82078aba554997e->leave($__internal_8d2243c2e93f05e9fb77a7cc7cb40f57e78fb36227229691b82078aba554997e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_319078d3c55c5ebc7885a9c535e25e8726323e82b4c303881f7b07e93326c972 = $this->env->getExtension("native_profiler");
        $__internal_319078d3c55c5ebc7885a9c535e25e8726323e82b4c303881f7b07e93326c972->enter($__internal_319078d3c55c5ebc7885a9c535e25e8726323e82b4c303881f7b07e93326c972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319078d3c55c5ebc7885a9c535e25e8726323e82b4c303881f7b07e93326c972->leave($__internal_319078d3c55c5ebc7885a9c535e25e8726323e82b4c303881f7b07e93326c972_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb4cf5f97d415d6b0ea9ff696d0706a1fa7cb64f1e22a4c8279fc7d0607643ff = $this->env->getExtension("native_profiler");
        $__internal_cb4cf5f97d415d6b0ea9ff696d0706a1fa7cb64f1e22a4c8279fc7d0607643ff->enter($__internal_cb4cf5f97d415d6b0ea9ff696d0706a1fa7cb64f1e22a4c8279fc7d0607643ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cb4cf5f97d415d6b0ea9ff696d0706a1fa7cb64f1e22a4c8279fc7d0607643ff->leave($__internal_cb4cf5f97d415d6b0ea9ff696d0706a1fa7cb64f1e22a4c8279fc7d0607643ff_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

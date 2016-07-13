<?php

/* base.html.twig */
class __TwigTemplate_12219c850dbdff757d26802403d2aa662144e1dc3dfd6df58d4901806345a304 extends Twig_Template
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
        $__internal_815ecb5c11473d95c6900a461f1dcec4baf11b70f23960a21c91b68ea2f87762 = $this->env->getExtension("native_profiler");
        $__internal_815ecb5c11473d95c6900a461f1dcec4baf11b70f23960a21c91b68ea2f87762->enter($__internal_815ecb5c11473d95c6900a461f1dcec4baf11b70f23960a21c91b68ea2f87762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_815ecb5c11473d95c6900a461f1dcec4baf11b70f23960a21c91b68ea2f87762->leave($__internal_815ecb5c11473d95c6900a461f1dcec4baf11b70f23960a21c91b68ea2f87762_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc6dbd5ea11d4a6ec5d6cd0a43e7a79fd94c4f97656cb1105fa3b96619192ced = $this->env->getExtension("native_profiler");
        $__internal_bc6dbd5ea11d4a6ec5d6cd0a43e7a79fd94c4f97656cb1105fa3b96619192ced->enter($__internal_bc6dbd5ea11d4a6ec5d6cd0a43e7a79fd94c4f97656cb1105fa3b96619192ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc6dbd5ea11d4a6ec5d6cd0a43e7a79fd94c4f97656cb1105fa3b96619192ced->leave($__internal_bc6dbd5ea11d4a6ec5d6cd0a43e7a79fd94c4f97656cb1105fa3b96619192ced_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16fbfea74fec1843e1e9a22efbb039553c14cfa64b8c691c70338a3a4443d3e9 = $this->env->getExtension("native_profiler");
        $__internal_16fbfea74fec1843e1e9a22efbb039553c14cfa64b8c691c70338a3a4443d3e9->enter($__internal_16fbfea74fec1843e1e9a22efbb039553c14cfa64b8c691c70338a3a4443d3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16fbfea74fec1843e1e9a22efbb039553c14cfa64b8c691c70338a3a4443d3e9->leave($__internal_16fbfea74fec1843e1e9a22efbb039553c14cfa64b8c691c70338a3a4443d3e9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf47762ba08dd003a8ba5599816437c1a6908825d6966d2aa8ce30eb97fa567f = $this->env->getExtension("native_profiler");
        $__internal_cf47762ba08dd003a8ba5599816437c1a6908825d6966d2aa8ce30eb97fa567f->enter($__internal_cf47762ba08dd003a8ba5599816437c1a6908825d6966d2aa8ce30eb97fa567f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf47762ba08dd003a8ba5599816437c1a6908825d6966d2aa8ce30eb97fa567f->leave($__internal_cf47762ba08dd003a8ba5599816437c1a6908825d6966d2aa8ce30eb97fa567f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e204e3af91b587a7e2056e5a0b5d59cdb2070d348070521c6da6013245c0c04 = $this->env->getExtension("native_profiler");
        $__internal_4e204e3af91b587a7e2056e5a0b5d59cdb2070d348070521c6da6013245c0c04->enter($__internal_4e204e3af91b587a7e2056e5a0b5d59cdb2070d348070521c6da6013245c0c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4e204e3af91b587a7e2056e5a0b5d59cdb2070d348070521c6da6013245c0c04->leave($__internal_4e204e3af91b587a7e2056e5a0b5d59cdb2070d348070521c6da6013245c0c04_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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

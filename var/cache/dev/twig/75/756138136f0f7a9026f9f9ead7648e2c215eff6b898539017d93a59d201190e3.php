<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d1ba4782bc0596dfdeef95e0a2bd3c658a59f6ab210e68c30882c027d13efea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ec6d3c457673f911eb32a42527e6f394aa65fe1f81b6621b39d76c322172cf92 = $this->env->getExtension("native_profiler");
        $__internal_ec6d3c457673f911eb32a42527e6f394aa65fe1f81b6621b39d76c322172cf92->enter($__internal_ec6d3c457673f911eb32a42527e6f394aa65fe1f81b6621b39d76c322172cf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6d3c457673f911eb32a42527e6f394aa65fe1f81b6621b39d76c322172cf92->leave($__internal_ec6d3c457673f911eb32a42527e6f394aa65fe1f81b6621b39d76c322172cf92_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_911c98fa657dea7852f27a32c3478cee15c75907d126133e1b9a76e1a424339a = $this->env->getExtension("native_profiler");
        $__internal_911c98fa657dea7852f27a32c3478cee15c75907d126133e1b9a76e1a424339a->enter($__internal_911c98fa657dea7852f27a32c3478cee15c75907d126133e1b9a76e1a424339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_911c98fa657dea7852f27a32c3478cee15c75907d126133e1b9a76e1a424339a->leave($__internal_911c98fa657dea7852f27a32c3478cee15c75907d126133e1b9a76e1a424339a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1aa91470095028443c3c83fbfe4c70e5e7568b96f9f54b03afe4f98603353b7a = $this->env->getExtension("native_profiler");
        $__internal_1aa91470095028443c3c83fbfe4c70e5e7568b96f9f54b03afe4f98603353b7a->enter($__internal_1aa91470095028443c3c83fbfe4c70e5e7568b96f9f54b03afe4f98603353b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1aa91470095028443c3c83fbfe4c70e5e7568b96f9f54b03afe4f98603353b7a->leave($__internal_1aa91470095028443c3c83fbfe4c70e5e7568b96f9f54b03afe4f98603353b7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b530e77d644e8663ac10485d6b18266ff0be36883cbddacdfcb30c0e7a8581b8 = $this->env->getExtension("native_profiler");
        $__internal_b530e77d644e8663ac10485d6b18266ff0be36883cbddacdfcb30c0e7a8581b8->enter($__internal_b530e77d644e8663ac10485d6b18266ff0be36883cbddacdfcb30c0e7a8581b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b530e77d644e8663ac10485d6b18266ff0be36883cbddacdfcb30c0e7a8581b8->leave($__internal_b530e77d644e8663ac10485d6b18266ff0be36883cbddacdfcb30c0e7a8581b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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

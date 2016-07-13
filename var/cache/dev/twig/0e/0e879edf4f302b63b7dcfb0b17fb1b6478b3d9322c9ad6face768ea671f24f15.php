<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4ca62cb4a6e23cb19198eb06e47ffd0100822e8e71d774d6fbb9b425c0e41106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_37dd685992de3acf45ab8f20f1e124783c33ea4bb77be3b5ba227c160bd3106c = $this->env->getExtension("native_profiler");
        $__internal_37dd685992de3acf45ab8f20f1e124783c33ea4bb77be3b5ba227c160bd3106c->enter($__internal_37dd685992de3acf45ab8f20f1e124783c33ea4bb77be3b5ba227c160bd3106c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37dd685992de3acf45ab8f20f1e124783c33ea4bb77be3b5ba227c160bd3106c->leave($__internal_37dd685992de3acf45ab8f20f1e124783c33ea4bb77be3b5ba227c160bd3106c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_176f0d49888a6686039e6285ea2be9ab601ad99b81b24778920d7be6ed38cace = $this->env->getExtension("native_profiler");
        $__internal_176f0d49888a6686039e6285ea2be9ab601ad99b81b24778920d7be6ed38cace->enter($__internal_176f0d49888a6686039e6285ea2be9ab601ad99b81b24778920d7be6ed38cace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_176f0d49888a6686039e6285ea2be9ab601ad99b81b24778920d7be6ed38cace->leave($__internal_176f0d49888a6686039e6285ea2be9ab601ad99b81b24778920d7be6ed38cace_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ab2e849b42fb08d206858c056d51e98d704e4d3c3c2c4d483ca0222c4350d7b = $this->env->getExtension("native_profiler");
        $__internal_7ab2e849b42fb08d206858c056d51e98d704e4d3c3c2c4d483ca0222c4350d7b->enter($__internal_7ab2e849b42fb08d206858c056d51e98d704e4d3c3c2c4d483ca0222c4350d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7ab2e849b42fb08d206858c056d51e98d704e4d3c3c2c4d483ca0222c4350d7b->leave($__internal_7ab2e849b42fb08d206858c056d51e98d704e4d3c3c2c4d483ca0222c4350d7b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92d3b296e36e9716a9be8d67116d7db097e8f61df6b877fac45020cf4935775c = $this->env->getExtension("native_profiler");
        $__internal_92d3b296e36e9716a9be8d67116d7db097e8f61df6b877fac45020cf4935775c->enter($__internal_92d3b296e36e9716a9be8d67116d7db097e8f61df6b877fac45020cf4935775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_92d3b296e36e9716a9be8d67116d7db097e8f61df6b877fac45020cf4935775c->leave($__internal_92d3b296e36e9716a9be8d67116d7db097e8f61df6b877fac45020cf4935775c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

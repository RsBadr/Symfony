<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dc512e88d14e201f934ba547ad05455b988474a0a56457e535da04f59f29946f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_b2d0780ba0fc15d26e66889e774cacec6d1f3307484530f98589f4dd11a6bcc7 = $this->env->getExtension("native_profiler");
        $__internal_b2d0780ba0fc15d26e66889e774cacec6d1f3307484530f98589f4dd11a6bcc7->enter($__internal_b2d0780ba0fc15d26e66889e774cacec6d1f3307484530f98589f4dd11a6bcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d0780ba0fc15d26e66889e774cacec6d1f3307484530f98589f4dd11a6bcc7->leave($__internal_b2d0780ba0fc15d26e66889e774cacec6d1f3307484530f98589f4dd11a6bcc7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ff5283828ce6e5ff17f7094da1687be277e24c3bfde9c5c38e341837130eae6 = $this->env->getExtension("native_profiler");
        $__internal_8ff5283828ce6e5ff17f7094da1687be277e24c3bfde9c5c38e341837130eae6->enter($__internal_8ff5283828ce6e5ff17f7094da1687be277e24c3bfde9c5c38e341837130eae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8ff5283828ce6e5ff17f7094da1687be277e24c3bfde9c5c38e341837130eae6->leave($__internal_8ff5283828ce6e5ff17f7094da1687be277e24c3bfde9c5c38e341837130eae6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16fcec68e154be6ac5e75a6fb332ecd476aec119465bdc1095298eac6b8ca7bd = $this->env->getExtension("native_profiler");
        $__internal_16fcec68e154be6ac5e75a6fb332ecd476aec119465bdc1095298eac6b8ca7bd->enter($__internal_16fcec68e154be6ac5e75a6fb332ecd476aec119465bdc1095298eac6b8ca7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_16fcec68e154be6ac5e75a6fb332ecd476aec119465bdc1095298eac6b8ca7bd->leave($__internal_16fcec68e154be6ac5e75a6fb332ecd476aec119465bdc1095298eac6b8ca7bd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ef65b0cba434d18a5abd99dd5307f1d90a934c5d9faf4a176097a83736899c9 = $this->env->getExtension("native_profiler");
        $__internal_1ef65b0cba434d18a5abd99dd5307f1d90a934c5d9faf4a176097a83736899c9->enter($__internal_1ef65b0cba434d18a5abd99dd5307f1d90a934c5d9faf4a176097a83736899c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1ef65b0cba434d18a5abd99dd5307f1d90a934c5d9faf4a176097a83736899c9->leave($__internal_1ef65b0cba434d18a5abd99dd5307f1d90a934c5d9faf4a176097a83736899c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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

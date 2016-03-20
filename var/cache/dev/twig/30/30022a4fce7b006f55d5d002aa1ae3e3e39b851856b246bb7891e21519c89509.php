<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d8e7c148f6511181be5fef18687d33cf929b503cfffea4a856f4e6cedbf41542 extends Twig_Template
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
        $__internal_525f2cf671a053224eea141124a48ff800d2a6477b654f2d77c7d5ca4b419a0e = $this->env->getExtension("native_profiler");
        $__internal_525f2cf671a053224eea141124a48ff800d2a6477b654f2d77c7d5ca4b419a0e->enter($__internal_525f2cf671a053224eea141124a48ff800d2a6477b654f2d77c7d5ca4b419a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525f2cf671a053224eea141124a48ff800d2a6477b654f2d77c7d5ca4b419a0e->leave($__internal_525f2cf671a053224eea141124a48ff800d2a6477b654f2d77c7d5ca4b419a0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1880e488a9488deca1aa53bfb644db7d9cda837c5f10f93fc882a0fdf9f32307 = $this->env->getExtension("native_profiler");
        $__internal_1880e488a9488deca1aa53bfb644db7d9cda837c5f10f93fc882a0fdf9f32307->enter($__internal_1880e488a9488deca1aa53bfb644db7d9cda837c5f10f93fc882a0fdf9f32307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1880e488a9488deca1aa53bfb644db7d9cda837c5f10f93fc882a0fdf9f32307->leave($__internal_1880e488a9488deca1aa53bfb644db7d9cda837c5f10f93fc882a0fdf9f32307_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11cec04263f301f3a9943e8d0726434a367579f2857a0a68aaca1d3ab1fd5787 = $this->env->getExtension("native_profiler");
        $__internal_11cec04263f301f3a9943e8d0726434a367579f2857a0a68aaca1d3ab1fd5787->enter($__internal_11cec04263f301f3a9943e8d0726434a367579f2857a0a68aaca1d3ab1fd5787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11cec04263f301f3a9943e8d0726434a367579f2857a0a68aaca1d3ab1fd5787->leave($__internal_11cec04263f301f3a9943e8d0726434a367579f2857a0a68aaca1d3ab1fd5787_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e4699ccfdd5f9b35da99b2cb6526c0dca416a416d78f2ca34fdc8710fd6c09d = $this->env->getExtension("native_profiler");
        $__internal_5e4699ccfdd5f9b35da99b2cb6526c0dca416a416d78f2ca34fdc8710fd6c09d->enter($__internal_5e4699ccfdd5f9b35da99b2cb6526c0dca416a416d78f2ca34fdc8710fd6c09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e4699ccfdd5f9b35da99b2cb6526c0dca416a416d78f2ca34fdc8710fd6c09d->leave($__internal_5e4699ccfdd5f9b35da99b2cb6526c0dca416a416d78f2ca34fdc8710fd6c09d_prof);

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

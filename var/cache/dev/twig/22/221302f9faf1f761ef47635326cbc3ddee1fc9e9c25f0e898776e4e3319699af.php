<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_289176a6a9cce6f5e1307a953c7654873fe64ea306e0203edfc65db5b8a14157 extends Twig_Template
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
        $__internal_3533e9eef8a1580639855ba48ae099a7f777a83f3209a38cfd4581f25b74642f = $this->env->getExtension("native_profiler");
        $__internal_3533e9eef8a1580639855ba48ae099a7f777a83f3209a38cfd4581f25b74642f->enter($__internal_3533e9eef8a1580639855ba48ae099a7f777a83f3209a38cfd4581f25b74642f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3533e9eef8a1580639855ba48ae099a7f777a83f3209a38cfd4581f25b74642f->leave($__internal_3533e9eef8a1580639855ba48ae099a7f777a83f3209a38cfd4581f25b74642f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b96145edf539514eb98675d1c23293595ae13fa26c013cfea3b1773ec42f94b = $this->env->getExtension("native_profiler");
        $__internal_5b96145edf539514eb98675d1c23293595ae13fa26c013cfea3b1773ec42f94b->enter($__internal_5b96145edf539514eb98675d1c23293595ae13fa26c013cfea3b1773ec42f94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b96145edf539514eb98675d1c23293595ae13fa26c013cfea3b1773ec42f94b->leave($__internal_5b96145edf539514eb98675d1c23293595ae13fa26c013cfea3b1773ec42f94b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b950d08dcd99532d3619e757c31df42f79249175cb0043fb2e7107e780bb033 = $this->env->getExtension("native_profiler");
        $__internal_3b950d08dcd99532d3619e757c31df42f79249175cb0043fb2e7107e780bb033->enter($__internal_3b950d08dcd99532d3619e757c31df42f79249175cb0043fb2e7107e780bb033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b950d08dcd99532d3619e757c31df42f79249175cb0043fb2e7107e780bb033->leave($__internal_3b950d08dcd99532d3619e757c31df42f79249175cb0043fb2e7107e780bb033_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6053745bb981ab978c19ff1640f5564b3e0918fb87b386f7fb616af4b4b414b3 = $this->env->getExtension("native_profiler");
        $__internal_6053745bb981ab978c19ff1640f5564b3e0918fb87b386f7fb616af4b4b414b3->enter($__internal_6053745bb981ab978c19ff1640f5564b3e0918fb87b386f7fb616af4b4b414b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6053745bb981ab978c19ff1640f5564b3e0918fb87b386f7fb616af4b4b414b3->leave($__internal_6053745bb981ab978c19ff1640f5564b3e0918fb87b386f7fb616af4b4b414b3_prof);

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

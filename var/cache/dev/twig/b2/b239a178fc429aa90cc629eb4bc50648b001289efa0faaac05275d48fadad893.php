<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_342772e8a2bdddccc32a78742fce9eea571af82ed4691cf919ac210ce9cf74dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be76b2d2e545fe46d013c043799b319d67644653ad14dbb1e5c2bba4bf67c284 = $this->env->getExtension("native_profiler");
        $__internal_be76b2d2e545fe46d013c043799b319d67644653ad14dbb1e5c2bba4bf67c284->enter($__internal_be76b2d2e545fe46d013c043799b319d67644653ad14dbb1e5c2bba4bf67c284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be76b2d2e545fe46d013c043799b319d67644653ad14dbb1e5c2bba4bf67c284->leave($__internal_be76b2d2e545fe46d013c043799b319d67644653ad14dbb1e5c2bba4bf67c284_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8aaf14960801aeb7cf754534e94523518d06c36cc2a7ef33c2b586550ca9e16a = $this->env->getExtension("native_profiler");
        $__internal_8aaf14960801aeb7cf754534e94523518d06c36cc2a7ef33c2b586550ca9e16a->enter($__internal_8aaf14960801aeb7cf754534e94523518d06c36cc2a7ef33c2b586550ca9e16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8aaf14960801aeb7cf754534e94523518d06c36cc2a7ef33c2b586550ca9e16a->leave($__internal_8aaf14960801aeb7cf754534e94523518d06c36cc2a7ef33c2b586550ca9e16a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

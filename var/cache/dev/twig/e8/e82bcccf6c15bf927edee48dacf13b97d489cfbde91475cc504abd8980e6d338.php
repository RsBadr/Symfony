<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ed329d28e9418d019ffad6475032e7d3cce92f4ada1d51b2d8573a87e651470f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b3c54a2598605dfb0bf7b281dc043609bed0910004f1be24b764811fdce7a05 = $this->env->getExtension("native_profiler");
        $__internal_8b3c54a2598605dfb0bf7b281dc043609bed0910004f1be24b764811fdce7a05->enter($__internal_8b3c54a2598605dfb0bf7b281dc043609bed0910004f1be24b764811fdce7a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3c54a2598605dfb0bf7b281dc043609bed0910004f1be24b764811fdce7a05->leave($__internal_8b3c54a2598605dfb0bf7b281dc043609bed0910004f1be24b764811fdce7a05_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7005b95d4efb85f7f290878f3a532ca8952d583c2dc9685af33aa07f194a97bd = $this->env->getExtension("native_profiler");
        $__internal_7005b95d4efb85f7f290878f3a532ca8952d583c2dc9685af33aa07f194a97bd->enter($__internal_7005b95d4efb85f7f290878f3a532ca8952d583c2dc9685af33aa07f194a97bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Connexion ";
        
        $__internal_7005b95d4efb85f7f290878f3a532ca8952d583c2dc9685af33aa07f194a97bd->leave($__internal_7005b95d4efb85f7f290878f3a532ca8952d583c2dc9685af33aa07f194a97bd_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc52567fa49a84be7136ea45138c87bf463bf1f058cbdebb6fdf809f6de88a9a = $this->env->getExtension("native_profiler");
        $__internal_fc52567fa49a84be7136ea45138c87bf463bf1f058cbdebb6fdf809f6de88a9a->enter($__internal_fc52567fa49a84be7136ea45138c87bf463bf1f058cbdebb6fdf809f6de88a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "



";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_fc52567fa49a84be7136ea45138c87bf463bf1f058cbdebb6fdf809f6de88a9a->leave($__internal_fc52567fa49a84be7136ea45138c87bf463bf1f058cbdebb6fdf809f6de88a9a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_94ac11205c0543b77d82d9c0ebed6022ab54cfb29454f2665a9176d96ecc5a0b = $this->env->getExtension("native_profiler");
        $__internal_94ac11205c0543b77d82d9c0ebed6022ab54cfb29454f2665a9176d96ecc5a0b->enter($__internal_94ac11205c0543b77d82d9c0ebed6022ab54cfb29454f2665a9176d96ecc5a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
<div class=\"body\">
\t<div class=\"wrapper\">  
     \t\t<h1>Connexion</h1>   \t
\t<form class=\"form\" action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input class=\"input\"type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"input\"type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t
    <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

\t<label for=\"remember_me\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label> 
    <input class=\"input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    
    <input class=\"submit\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t</form>
\t</div>
</div>
";
        
        $__internal_94ac11205c0543b77d82d9c0ebed6022ab54cfb29454f2665a9176d96ecc5a0b->leave($__internal_94ac11205c0543b77d82d9c0ebed6022ab54cfb29454f2665a9176d96ecc5a0b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  112 => 30,  106 => 27,  101 => 25,  97 => 24,  92 => 22,  88 => 21,  71 => 17,  68 => 16,  62 => 14,  60 => 13,  54 => 9,  48 => 8,  36 => 6,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block title %} Connexion {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* */
/* */
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* {% block body %} */
/* <div class="body">*/
/* 	<div class="wrapper">  */
/*      		<h1>Connexion</h1>   	*/
/* 	<form class="form" action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input class="input"type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input class="input"type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 	*/
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input class="input" type="password" id="password" name="_password" required="required" />*/
/* */
/* 	<label for="remember_me">{{ 'security.login.remember_me'|trans }}</label> */
/*     <input class="input" type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     */
/*     <input class="submit" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 	</form>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* {% endblock fos_user_content %}*/
/* */

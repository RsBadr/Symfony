<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_27f0937a52182ce91fff1c31186829e4c9efef9878e6758da6638bdc27ebf0d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " Connexion ";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "



";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 14
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"input\"type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  91 => 30,  85 => 27,  80 => 25,  76 => 24,  71 => 22,  67 => 21,  56 => 17,  53 => 16,  47 => 14,  45 => 13,  39 => 9,  36 => 8,  30 => 6,  11 => 3,);
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

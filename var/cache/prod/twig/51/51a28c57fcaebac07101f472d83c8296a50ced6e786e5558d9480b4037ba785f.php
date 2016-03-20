<?php

/* ::nav.html.twig */
class __TwigTemplate_faa85ecc2773fd7683d6dbfaca629a76ee92d1ac8a3f64b8e036b8d87bbf2139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div id=\"cssmenu\">
      <div class=\"navbar-inner\">
        ";
        // line 3
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepageCo");
            echo "\">
        ";
        } else {
            // line 6
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">
        ";
        }
        // line 7
        echo "  
        <div >
      \t    <img src=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/champidore.png"), "html", null, true);
        echo " width=\"40\" height=\"40\" class=\"pull-left\"/>
            <p id=\"champi\" class=\"pull-left\"> Champi </p>
        </div>
        </a>
        <ul class=\" pull-right\">
       \t\t
       \t\t<li ><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("addProjet");
        echo "\"> New Projet </a></li>
       \t\t";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "       \t\t<li ><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " </a>
            <li><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li> 
            ";
        } else {
            // line 21
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
\t\t\t<li  ><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Registration</a></li>
\t\t\t";
        }
        // line 24
        echo "        </ul>
      </div>
    </div>
    
";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/navBar.css"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  91 => 28,  85 => 24,  80 => 22,  73 => 21,  68 => 19,  64 => 18,  57 => 17,  55 => 16,  51 => 15,  42 => 9,  38 => 7,  32 => 6,  26 => 4,  24 => 3,  20 => 1,);
    }
}
/*     <div id="cssmenu">*/
/*       <div class="navbar-inner">*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             <a href="{{ path('homepageCo')}}">*/
/*         {% else %}*/
/*             <a href="{{ path('homepage')}}">*/
/*         {% endif %}  */
/*         <div >*/
/*       	    <img src={{asset('img/champidore.png')}} width="40" height="40" class="pull-left"/>*/
/*             <p id="champi" class="pull-left"> Champi </p>*/
/*         </div>*/
/*         </a>*/
/*         <ul class=" pull-right">*/
/*        		*/
/*        		<li ><a href="{{ path('addProjet')}}"> New Projet </a></li>*/
/*        		{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*        		<li ><a href="{{ path('fos_user_profile_show') }}">{{ app.user.username }} </a>*/
/*             <li><a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a></li> */
/*             {% else %}*/
/*             <li><a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>*/
/* 			<li  ><a href="{{ path('fos_user_registration_register') }}">Registration</a></li>*/
/* 			{% endif %}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{asset('css/navBar.css')}}"/>*/
/* {% endblock %}*/

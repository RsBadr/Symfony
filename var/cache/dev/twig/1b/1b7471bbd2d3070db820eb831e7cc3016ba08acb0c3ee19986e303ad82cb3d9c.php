<?php

/* ::nav.html.twig */
class __TwigTemplate_93184db73a75ebf021d1a916d9d9ba2aa0e37f76f6ad14fc7e7ed4fe4640e4a1 extends Twig_Template
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
        $__internal_357d65ce542fb015b1588b5649b695e6b402b77c227667bac513579a37174117 = $this->env->getExtension("native_profiler");
        $__internal_357d65ce542fb015b1588b5649b695e6b402b77c227667bac513579a37174117->enter($__internal_357d65ce542fb015b1588b5649b695e6b402b77c227667bac513579a37174117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

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
       \t\t<li ><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("addProjet");
        echo "\"> New Projet </a></li>
       \t\t";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "          <li ><A href=\"";
            echo $this->env->getExtension('routing')->getPath("user_view");
            echo "\"> Taches </a></li>
          <li ><A href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("user_add");
            echo "\"> Ajouter </a></li>
       \t\t<li ><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </a>
            <li><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li> 
            ";
        } else {
            // line 22
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
\t\t\t<li  ><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Registration</a></li>
\t\t\t";
        }
        // line 25
        echo "        </ul>
      </div>
    </div>
    
";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_357d65ce542fb015b1588b5649b695e6b402b77c227667bac513579a37174117->leave($__internal_357d65ce542fb015b1588b5649b695e6b402b77c227667bac513579a37174117_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41a0cb5cd68f9ca1b8494f395c0ac8c1813692be08e28258f79e18b34c4f38f2 = $this->env->getExtension("native_profiler");
        $__internal_41a0cb5cd68f9ca1b8494f395c0ac8c1813692be08e28258f79e18b34c4f38f2->enter($__internal_41a0cb5cd68f9ca1b8494f395c0ac8c1813692be08e28258f79e18b34c4f38f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/navBar.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_41a0cb5cd68f9ca1b8494f395c0ac8c1813692be08e28258f79e18b34c4f38f2->leave($__internal_41a0cb5cd68f9ca1b8494f395c0ac8c1813692be08e28258f79e18b34c4f38f2_prof);

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
        return array (  113 => 30,  101 => 29,  95 => 25,  90 => 23,  83 => 22,  78 => 20,  74 => 19,  68 => 18,  64 => 17,  59 => 16,  57 => 15,  53 => 14,  45 => 9,  41 => 7,  35 => 6,  29 => 4,  27 => 3,  23 => 1,);
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
/*        		<li ><a href="{{ path('addProjet')}}"> New Projet </a></li>*/
/*        		{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*           <li ><A href="{{ path('user_view')}}"> Taches </a></li>*/
/*           <li ><A href="{{ path('user_add')}}"> Ajouter </a></li>*/
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

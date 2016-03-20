<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0d36f80619e15d40afb1425843bd1eb50b1837d0e73e99ad5db8f91285452ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"body\">
    <div class=\"wrapper\">  

<div class=\"fos_user_user_show\">
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</p>
    <li  ><a class=\"bouton\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit</a></li>
    </div>
</div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  32 => 8,  26 => 7,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="body">*/
/*     <div class="wrapper">  */
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/*     <li  ><a class="bouton" href="{{ path('fos_user_profile_edit') }}">Edit</a></li>*/
/*     </div>*/
/* </div>*/
/*     */
/* </div>*/
/* */

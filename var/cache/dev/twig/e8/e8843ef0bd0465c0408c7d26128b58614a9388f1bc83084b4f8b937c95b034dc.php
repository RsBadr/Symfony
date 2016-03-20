<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_bcf4a9f8d8add9b9a506062f5d4092fa80df7ab6157ab4ea6d34f166fd9f695a extends Twig_Template
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
        $__internal_678bce7b9ce2de69fe9e307bf62999f95924f583e523a36ecd25063dfa71e67b = $this->env->getExtension("native_profiler");
        $__internal_678bce7b9ce2de69fe9e307bf62999f95924f583e523a36ecd25063dfa71e67b->enter($__internal_678bce7b9ce2de69fe9e307bf62999f95924f583e523a36ecd25063dfa71e67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"body\">
    <div class=\"wrapper\">  

<div class=\"fos_user_user_show\">
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <li  ><a class=\"bouton\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit</a></li>
    </div>
</div>
    
</div>
";
        
        $__internal_678bce7b9ce2de69fe9e307bf62999f95924f583e523a36ecd25063dfa71e67b->leave($__internal_678bce7b9ce2de69fe9e307bf62999f95924f583e523a36ecd25063dfa71e67b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 8,  29 => 7,  22 => 2,);
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

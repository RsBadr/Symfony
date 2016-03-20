<?php

/* UserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_14982175e975e64ddac9b196cd32da47f1479175100ca4302aa68b27dbd68a4f extends Twig_Template
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
        // line 2
        echo "
<div class=\"body\">
    <div class=\"wrapper\">  
<h1>Edit</h1>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
<!--
 <form name=\"fos_user_profile_form\" method=\"post\" action=\"/profile/edit\" class=\"fos_user_profile_edit\">
        <div id=\"fos_user_profile_form\">
            <div>
                <label for=\"fos_user_profile_form_username\" class=\"required\">Nom d&#039;utilisateur</label>
                <input type=\"text\" id=\"fos_user_profile_form_username\" name=\"fos_user_profile_form[username]\" required=\"required\" maxlength=\"255\" pattern=\".{2,}\" value=\"mm\" />
            </div>
            <div><label for=\"fos_user_profile_form_email\" class=\"required\">Adresse e-mail</label>
                <input type=\"email\" id=\"fos_user_profile_form_email\" name=\"fos_user_profile_form[email]\" required=\"required\" value=\"marie@hotmail.fr\" />
            </div>
            <div><label for=\"fos_user_profile_form_current_password\" class=\"required\">Mot de passe actuel</label>
                 <input type=\"password\" id=\"fos_user_profile_form_current_password\" name=\"fos_user_profile_form[current_password]\" required=\"required\" />
            </div>
        <input type=\"hidden\" id=\"fos_user_profile_form__token\" name=\"fos_user_profile_form[_token]\" value=\"tLpS_0KTVb5gk93npwAz9xMphQunZGbGvdSNPSoVkso\" />
         <div>
        <input class=\"submit\" type=\"submit\" id=\"fos_user_profile_form__submit\" name=\"fos_user_profile_form__submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        <input type=\"submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /> 
        </div>
      </div> 
</form> 
  -->
</div>
</div>
<!--
";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
-->


<div id=\"changepass\" > 
    <div class=\"wrapper\" id=\"divpass\">  
        
        <h3>Change Password</h3>
    <form name=\"fos_user_profile_form\" method=\"post\" action=\"/profile/change-password\" class=\"fos_user_change_password\">
    <div>
        <input id=\"modif\" type=\"submit\" value=\"\" name=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
</div>
</div> 
 
   



";
        // line 61
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 62
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/css/edit.css"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 62,  114 => 61,  101 => 51,  88 => 41,  83 => 39,  78 => 37,  74 => 36,  63 => 28,  59 => 27,  40 => 11,  35 => 9,  30 => 7,  26 => 6,  20 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="body">*/
/*     <div class="wrapper">  */
/* <h1>Edit</h1>*/
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* <!--*/
/*  <form name="fos_user_profile_form" method="post" action="/profile/edit" class="fos_user_profile_edit">*/
/*         <div id="fos_user_profile_form">*/
/*             <div>*/
/*                 <label for="fos_user_profile_form_username" class="required">Nom d&#039;utilisateur</label>*/
/*                 <input type="text" id="fos_user_profile_form_username" name="fos_user_profile_form[username]" required="required" maxlength="255" pattern=".{2,}" value="mm" />*/
/*             </div>*/
/*             <div><label for="fos_user_profile_form_email" class="required">Adresse e-mail</label>*/
/*                 <input type="email" id="fos_user_profile_form_email" name="fos_user_profile_form[email]" required="required" value="marie@hotmail.fr" />*/
/*             </div>*/
/*             <div><label for="fos_user_profile_form_current_password" class="required">Mot de passe actuel</label>*/
/*                  <input type="password" id="fos_user_profile_form_current_password" name="fos_user_profile_form[current_password]" required="required" />*/
/*             </div>*/
/*         <input type="hidden" id="fos_user_profile_form__token" name="fos_user_profile_form[_token]" value="tLpS_0KTVb5gk93npwAz9xMphQunZGbGvdSNPSoVkso" />*/
/*          <div>*/
/*         <input class="submit" type="submit" id="fos_user_profile_form__submit" name="fos_user_profile_form__submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" /> */
/*         </div>*/
/*       </div> */
/* </form> */
/*   -->*/
/* </div>*/
/* </div>*/
/* <!--*/
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* -->*/
/* */
/* */
/* <div id="changepass" > */
/*     <div class="wrapper" id="divpass">  */
/*         */
/*         <h3>Change Password</h3>*/
/*     <form name="fos_user_profile_form" method="post" action="/profile/change-password" class="fos_user_change_password">*/
/*     <div>*/
/*         <input id="modif" type="submit" value="" name="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* </div>*/
/* </div> */
/*  */
/*    */
/* */
/* */
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/user/css/edit.css')}}"/>*/
/* {% endblock %}*/

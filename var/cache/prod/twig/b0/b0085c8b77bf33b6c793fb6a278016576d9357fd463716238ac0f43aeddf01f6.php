<?php

/* UserBundle:Registration:register_content.html.twig */
class __TwigTemplate_8cad7cae5e307c91bbdc190208dd20e90b7fa81d54c99a67a5042daaaaa5acf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"body\">
\t<div class=\"wrapper\">  
\t\t<h1>Inscription</h1>   
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  43 => 10,  38 => 8,  34 => 7,  29 => 4,  23 => 3,  20 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body%}*/
/* <div class="body">*/
/* 	<div class="wrapper">  */
/* 		<h1>Inscription</h1>   */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */

<?php

/* helloBundle:Connecte:index.html.twig */
class __TwigTemplate_43f09ee349fd7984467b9a8622505b39a8e97ea9c80fc548d61e78042c80ee08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "helloBundle:Connecte:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d79ac22352878c78d0a2ea509e082f3cc68c98c82b74b157710a0d88e69ce4ad = $this->env->getExtension("native_profiler");
        $__internal_d79ac22352878c78d0a2ea509e082f3cc68c98c82b74b157710a0d88e69ce4ad->enter($__internal_d79ac22352878c78d0a2ea509e082f3cc68c98c82b74b157710a0d88e69ce4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloBundle:Connecte:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d79ac22352878c78d0a2ea509e082f3cc68c98c82b74b157710a0d88e69ce4ad->leave($__internal_d79ac22352878c78d0a2ea509e082f3cc68c98c82b74b157710a0d88e69ce4ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76cbfe1dbf811c7d05e81181b4a955baa79ed84f674d1a332e6df4548c411869 = $this->env->getExtension("native_profiler");
        $__internal_76cbfe1dbf811c7d05e81181b4a955baa79ed84f674d1a332e6df4548c411869->enter($__internal_76cbfe1dbf811c7d05e81181b4a955baa79ed84f674d1a332e6df4548c411869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_76cbfe1dbf811c7d05e81181b4a955baa79ed84f674d1a332e6df4548c411869->leave($__internal_76cbfe1dbf811c7d05e81181b4a955baa79ed84f674d1a332e6df4548c411869_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_952f725abd6d17224e2fc3be89d5a8725c89ce4a7795ea1ac3ddcd4f8084b96f = $this->env->getExtension("native_profiler");
        $__internal_952f725abd6d17224e2fc3be89d5a8725c89ce4a7795ea1ac3ddcd4f8084b96f->enter($__internal_952f725abd6d17224e2fc3be89d5a8725c89ce4a7795ea1ac3ddcd4f8084b96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "<center>
    <h1>Bonjour  ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </h1>
  
    <img id = \"grosChampi\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/groschampi.jpg"), "html", null, true);
        echo "\"  >
    </center>
";
        
        $__internal_952f725abd6d17224e2fc3be89d5a8725c89ce4a7795ea1ac3ddcd4f8084b96f->leave($__internal_952f725abd6d17224e2fc3be89d5a8725c89ce4a7795ea1ac3ddcd4f8084b96f_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16cc7e822ea8b7bae839a6899136323296bb57a6147130295d4ccd92cf37449c = $this->env->getExtension("native_profiler");
        $__internal_16cc7e822ea8b7bae839a6899136323296bb57a6147130295d4ccd92cf37449c->enter($__internal_16cc7e822ea8b7bae839a6899136323296bb57a6147130295d4ccd92cf37449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/hello/css/accueilCo.css"), "html", null, true);
        echo "\"/>
    
";
        
        $__internal_16cc7e822ea8b7bae839a6899136323296bb57a6147130295d4ccd92cf37449c->leave($__internal_16cc7e822ea8b7bae839a6899136323296bb57a6147130295d4ccd92cf37449c_prof);

    }

    public function getTemplateName()
    {
        return "helloBundle:Connecte:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  71 => 12,  61 => 8,  56 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}*/
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block body %}<center>*/
/*     <h1>Bonjour  {{ app.user.username }} </h1>*/
/*   */
/*     <img id = "grosChampi" src="{{asset('img/groschampi.jpg')}}"  >*/
/*     </center>*/
/* {%endblock%}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/hello/css/accueilCo.css')}}"/>*/
/*     */
/* {% endblock %}*/

<?php

/* helloBundle:Connecte:index.html.twig */
class __TwigTemplate_ac82948450a185edbec30ee39ca47bb492ade7372ddd2cdcd16bff8de3c5fa10 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Accueil ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "<center>
    <h1>Bonjour  ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo " </h1>
  
    <img id = \"grosChampi\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/groschampi.jpg"), "html", null, true);
        echo "\"  >
    </center>
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/hello/css/accueilCo.css"), "html", null, true);
        echo "\"/>
    
";
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
        return array (  56 => 13,  53 => 12,  46 => 8,  41 => 6,  36 => 5,  30 => 3,  11 => 2,);
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

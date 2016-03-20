<?php

/* helloBundle:Default:index.html.twig */
class __TwigTemplate_d78c1dc79f1f46701d181185d48fdad3eeb5eb096699f5ba3f18195b74e3a550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "helloBundle:Default:index.html.twig", 2);
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
        // line 6
        echo "\t<center>
\t<img id = \"grosChampi\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/groschampi.jpg"), "html", null, true);
        echo "\"  >
\t</center>
";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/hello/css/accueil.css"), "html", null, true);
        echo "\"/>
    
    
";
    }

    public function getTemplateName()
    {
        return "helloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  49 => 11,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}*/
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<center>*/
/* 	<img id = "grosChampi" src="{{asset('img/groschampi.jpg')}}"  >*/
/* 	</center>*/
/* {%endblock%}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/hello/css/accueil.css')}}"/>*/
/*     */
/*     */
/* {% endblock %}*/

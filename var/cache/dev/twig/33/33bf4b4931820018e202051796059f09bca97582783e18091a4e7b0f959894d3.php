<?php

/* helloBundle:Default:index.html.twig */
class __TwigTemplate_e3558db224e7c050fd7e3f6468e6cc2d20b4b55c29d5643351850d0443c10a79 extends Twig_Template
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
        $__internal_176f4df182240468807ebfee8ae95d581682bea72c724e7a9f69825566a4ddb3 = $this->env->getExtension("native_profiler");
        $__internal_176f4df182240468807ebfee8ae95d581682bea72c724e7a9f69825566a4ddb3->enter($__internal_176f4df182240468807ebfee8ae95d581682bea72c724e7a9f69825566a4ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_176f4df182240468807ebfee8ae95d581682bea72c724e7a9f69825566a4ddb3->leave($__internal_176f4df182240468807ebfee8ae95d581682bea72c724e7a9f69825566a4ddb3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1efd195f76cdf52ede6f4a1c8369a60a2e9e38610d3335a345b78438529e00cb = $this->env->getExtension("native_profiler");
        $__internal_1efd195f76cdf52ede6f4a1c8369a60a2e9e38610d3335a345b78438529e00cb->enter($__internal_1efd195f76cdf52ede6f4a1c8369a60a2e9e38610d3335a345b78438529e00cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_1efd195f76cdf52ede6f4a1c8369a60a2e9e38610d3335a345b78438529e00cb->leave($__internal_1efd195f76cdf52ede6f4a1c8369a60a2e9e38610d3335a345b78438529e00cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1bed492c2bb79c28d6fd9321d809af0fbdd7f480d6e32273d7143e5f0db6610 = $this->env->getExtension("native_profiler");
        $__internal_a1bed492c2bb79c28d6fd9321d809af0fbdd7f480d6e32273d7143e5f0db6610->enter($__internal_a1bed492c2bb79c28d6fd9321d809af0fbdd7f480d6e32273d7143e5f0db6610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<center>
\t<img id = \"grosChampi\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/groschampi.jpg"), "html", null, true);
        echo "\"  >
\t</center>
";
        
        $__internal_a1bed492c2bb79c28d6fd9321d809af0fbdd7f480d6e32273d7143e5f0db6610->leave($__internal_a1bed492c2bb79c28d6fd9321d809af0fbdd7f480d6e32273d7143e5f0db6610_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a1e3a0d3a20a34c25a28b2bdde30c1a2c840703c5d3fc4df9363b9591b5cf5c = $this->env->getExtension("native_profiler");
        $__internal_7a1e3a0d3a20a34c25a28b2bdde30c1a2c840703c5d3fc4df9363b9591b5cf5c->enter($__internal_7a1e3a0d3a20a34c25a28b2bdde30c1a2c840703c5d3fc4df9363b9591b5cf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/hello/css/accueil.css"), "html", null, true);
        echo "\"/>
    
    
";
        
        $__internal_7a1e3a0d3a20a34c25a28b2bdde30c1a2c840703c5d3fc4df9363b9591b5cf5c->leave($__internal_7a1e3a0d3a20a34c25a28b2bdde30c1a2c840703c5d3fc4df9363b9591b5cf5c_prof);

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
        return array (  73 => 12,  67 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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

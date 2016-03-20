<?php

/* ::base.html.twig */
class __TwigTemplate_87a9018f5f6e3361b3f4e438bf6d9afebc942efacc6444addf3c4617b83d012a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "-Mon blog</title> <!-- permet au texte de s'adapter a la fenetre -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<!--<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>-->
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "<body>
\t";
        // line 11
        $this->displayBlock('nav', $context, $blocks);
        // line 12
        echo "\t";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "\t<script src=\"//code.jquery.com/jquery.min.js\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 11)->display($context);
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  80 => 12,  74 => 11,  69 => 9,  64 => 6,  56 => 15,  53 => 14,  50 => 13,  47 => 12,  45 => 11,  42 => 10,  40 => 9,  36 => 8,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8" />*/
/* 		<title>{% block title %}{% endblock %}-Mon blog</title> <!-- permet au texte de s'adapter a la fenetre -->*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* 		<!--<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>-->*/
/* 		{% block stylesheets %}{% endblock %}*/
/* <body>*/
/* 	{% block nav %}{% include '::nav.html.twig' %}{% endblock %}*/
/* 	{% block body %}{% endblock %}*/
/* 	{% block javascripts %}{% endblock %}*/
/* 	<script src="//code.jquery.com/jquery.min.js"></script>*/
/* 	<script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/* </body>*/
/* </html>*/
/* */

<?php

/* ::base.html.twig */
class __TwigTemplate_bea5e44765bff339036edf3cad57761b57415fe47f4f274266aca3787f694219 extends Twig_Template
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
        $__internal_2ae5ee5181d6136c7befae98f1094f70f87c756aea8fb9bd80fe704dd2162a2d = $this->env->getExtension("native_profiler");
        $__internal_2ae5ee5181d6136c7befae98f1094f70f87c756aea8fb9bd80fe704dd2162a2d->enter($__internal_2ae5ee5181d6136c7befae98f1094f70f87c756aea8fb9bd80fe704dd2162a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/css/table.css"), "html", null, true);
        echo "\"/>
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
        
        $__internal_2ae5ee5181d6136c7befae98f1094f70f87c756aea8fb9bd80fe704dd2162a2d->leave($__internal_2ae5ee5181d6136c7befae98f1094f70f87c756aea8fb9bd80fe704dd2162a2d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e5d87705e5a8f1a9ffcb32c20080607c51a1eced2408b682581b9cf9b81e231 = $this->env->getExtension("native_profiler");
        $__internal_3e5d87705e5a8f1a9ffcb32c20080607c51a1eced2408b682581b9cf9b81e231->enter($__internal_3e5d87705e5a8f1a9ffcb32c20080607c51a1eced2408b682581b9cf9b81e231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3e5d87705e5a8f1a9ffcb32c20080607c51a1eced2408b682581b9cf9b81e231->leave($__internal_3e5d87705e5a8f1a9ffcb32c20080607c51a1eced2408b682581b9cf9b81e231_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c28021c8279c00085b6bf115c0840d36dd0d4ec2b9145e4c75db2cda0bb394f = $this->env->getExtension("native_profiler");
        $__internal_0c28021c8279c00085b6bf115c0840d36dd0d4ec2b9145e4c75db2cda0bb394f->enter($__internal_0c28021c8279c00085b6bf115c0840d36dd0d4ec2b9145e4c75db2cda0bb394f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0c28021c8279c00085b6bf115c0840d36dd0d4ec2b9145e4c75db2cda0bb394f->leave($__internal_0c28021c8279c00085b6bf115c0840d36dd0d4ec2b9145e4c75db2cda0bb394f_prof);

    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a51944f7a197aed8b31dde8b05e873e36148b1282e25c6414893c42b9ce49f2a = $this->env->getExtension("native_profiler");
        $__internal_a51944f7a197aed8b31dde8b05e873e36148b1282e25c6414893c42b9ce49f2a->enter($__internal_a51944f7a197aed8b31dde8b05e873e36148b1282e25c6414893c42b9ce49f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 11)->display($context);
        
        $__internal_a51944f7a197aed8b31dde8b05e873e36148b1282e25c6414893c42b9ce49f2a->leave($__internal_a51944f7a197aed8b31dde8b05e873e36148b1282e25c6414893c42b9ce49f2a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_77301e6df677e2d58d4f33026b1316d3b85fb16b3e54301e3183d6416fb6eabc = $this->env->getExtension("native_profiler");
        $__internal_77301e6df677e2d58d4f33026b1316d3b85fb16b3e54301e3183d6416fb6eabc->enter($__internal_77301e6df677e2d58d4f33026b1316d3b85fb16b3e54301e3183d6416fb6eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77301e6df677e2d58d4f33026b1316d3b85fb16b3e54301e3183d6416fb6eabc->leave($__internal_77301e6df677e2d58d4f33026b1316d3b85fb16b3e54301e3183d6416fb6eabc_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_989ca3c3be68fad078abdbe2acccac744aed98e4f94ab02c5fdfab35a4a4c23e = $this->env->getExtension("native_profiler");
        $__internal_989ca3c3be68fad078abdbe2acccac744aed98e4f94ab02c5fdfab35a4a4c23e->enter($__internal_989ca3c3be68fad078abdbe2acccac744aed98e4f94ab02c5fdfab35a4a4c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_989ca3c3be68fad078abdbe2acccac744aed98e4f94ab02c5fdfab35a4a4c23e->leave($__internal_989ca3c3be68fad078abdbe2acccac744aed98e4f94ab02c5fdfab35a4a4c23e_prof);

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
        return array (  115 => 13,  104 => 12,  92 => 11,  81 => 9,  70 => 6,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  39 => 8,  34 => 6,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8" />*/
/* 		<title>{% block title %}{% endblock %}-Mon blog</title> <!-- permet au texte de s'adapter a la fenetre -->*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* 		<link rel="stylesheet" href="{{asset('bundles/user/css/table.css')}}"/>*/
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

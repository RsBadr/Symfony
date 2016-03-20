<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c490f48ebe2a9be12b90552a8454bd02878cdc09a7c7f6edcd4a5e68d514f541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"UTF-8\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  

        ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 15
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 16
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 17
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        <div>
            ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "        </div>
";
    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 25
        echo "            ";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 30
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/css/form.css"), "html", null, true);
        echo "\"/>
\t<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
\t
";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/js/form.js"), "html", null, true);
        echo "\"></script>
 
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  114 => 35,  104 => 30,  101 => 29,  97 => 25,  94 => 24,  89 => 26,  87 => 24,  83 => 22,  80 => 21,  74 => 20,  65 => 17,  60 => 16,  55 => 15,  50 => 14,  48 => 13,  43 => 10,  40 => 9,  35 => 6,  32 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* */
/* {%block head%}*/
/*         <meta charset="UTF-8" />*/
/* {%endblock%}*/
/* */
/* {%block body%}*/
/* */
/*   */
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{asset('bundles/user/css/form.css')}}"/>*/
/* 	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>*/
/* 	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>*/
/* 	*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{asset('bundles/user/js/form.js')}}"></script>*/
/*  */
/* {% endblock %}*/

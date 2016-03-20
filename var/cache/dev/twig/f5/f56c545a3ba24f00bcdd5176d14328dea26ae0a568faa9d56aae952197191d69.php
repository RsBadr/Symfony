<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_de3e49bdd5fe781a3d1b354bb7cf0e2d4debdbbc0f65cada0b1f2b08f9e55f60 extends Twig_Template
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
        $__internal_ecb89cb4fb8091819fc7727f554948331f41f8a6234935333b56feba17b3f63c = $this->env->getExtension("native_profiler");
        $__internal_ecb89cb4fb8091819fc7727f554948331f41f8a6234935333b56feba17b3f63c->enter($__internal_ecb89cb4fb8091819fc7727f554948331f41f8a6234935333b56feba17b3f63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb89cb4fb8091819fc7727f554948331f41f8a6234935333b56feba17b3f63c->leave($__internal_ecb89cb4fb8091819fc7727f554948331f41f8a6234935333b56feba17b3f63c_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_96017374c8f29784f825ddf89bcfba271281d2fe0fcb8185bfee825162ca0790 = $this->env->getExtension("native_profiler");
        $__internal_96017374c8f29784f825ddf89bcfba271281d2fe0fcb8185bfee825162ca0790->enter($__internal_96017374c8f29784f825ddf89bcfba271281d2fe0fcb8185bfee825162ca0790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "        <meta charset=\"UTF-8\" />
";
        
        $__internal_96017374c8f29784f825ddf89bcfba271281d2fe0fcb8185bfee825162ca0790->leave($__internal_96017374c8f29784f825ddf89bcfba271281d2fe0fcb8185bfee825162ca0790_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde84fcbc408abf65da8240b8625a98245b569df98a021949bbdc28666d158e9 = $this->env->getExtension("native_profiler");
        $__internal_cde84fcbc408abf65da8240b8625a98245b569df98a021949bbdc28666d158e9->enter($__internal_cde84fcbc408abf65da8240b8625a98245b569df98a021949bbdc28666d158e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  

        ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_cde84fcbc408abf65da8240b8625a98245b569df98a021949bbdc28666d158e9->leave($__internal_cde84fcbc408abf65da8240b8625a98245b569df98a021949bbdc28666d158e9_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95c138a07c061745320dd3acdab34703789be34ad06015119a5491bf7dcd9250 = $this->env->getExtension("native_profiler");
        $__internal_95c138a07c061745320dd3acdab34703789be34ad06015119a5491bf7dcd9250->enter($__internal_95c138a07c061745320dd3acdab34703789be34ad06015119a5491bf7dcd9250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "            ";
        
        $__internal_95c138a07c061745320dd3acdab34703789be34ad06015119a5491bf7dcd9250->leave($__internal_95c138a07c061745320dd3acdab34703789be34ad06015119a5491bf7dcd9250_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29acf5539ae3585c6795a09717a32342545e9b0cc5864c11934c261a69c22538 = $this->env->getExtension("native_profiler");
        $__internal_29acf5539ae3585c6795a09717a32342545e9b0cc5864c11934c261a69c22538->enter($__internal_29acf5539ae3585c6795a09717a32342545e9b0cc5864c11934c261a69c22538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/css/form.css"), "html", null, true);
        echo "\"/>
\t<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
\t
";
        
        $__internal_29acf5539ae3585c6795a09717a32342545e9b0cc5864c11934c261a69c22538->leave($__internal_29acf5539ae3585c6795a09717a32342545e9b0cc5864c11934c261a69c22538_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fea17644fc77527bab904d72c007a39720b59a4b9d63e1de11d48b39faf7581f = $this->env->getExtension("native_profiler");
        $__internal_fea17644fc77527bab904d72c007a39720b59a4b9d63e1de11d48b39faf7581f->enter($__internal_fea17644fc77527bab904d72c007a39720b59a4b9d63e1de11d48b39faf7581f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/js/form.js"), "html", null, true);
        echo "\"></script>
 
";
        
        $__internal_fea17644fc77527bab904d72c007a39720b59a4b9d63e1de11d48b39faf7581f->leave($__internal_fea17644fc77527bab904d72c007a39720b59a4b9d63e1de11d48b39faf7581f_prof);

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
        return array (  150 => 36,  144 => 35,  131 => 30,  125 => 29,  118 => 25,  112 => 24,  104 => 26,  102 => 24,  98 => 22,  95 => 21,  89 => 20,  80 => 17,  75 => 16,  70 => 15,  65 => 14,  63 => 13,  58 => 10,  52 => 9,  44 => 6,  38 => 5,  11 => 1,);
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

<?php

/* ProjetBundle:Default:index.html.twig */
class __TwigTemplate_be2565687796aac6197b371d74302f99511297ca59f207cf42b87a2ff8f0fd9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjetBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17d9d1b16c1fad820ec7a9437108078fce92031959d80f99fc4abac2bb529f39 = $this->env->getExtension("native_profiler");
        $__internal_17d9d1b16c1fad820ec7a9437108078fce92031959d80f99fc4abac2bb529f39->enter($__internal_17d9d1b16c1fad820ec7a9437108078fce92031959d80f99fc4abac2bb529f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17d9d1b16c1fad820ec7a9437108078fce92031959d80f99fc4abac2bb529f39->leave($__internal_17d9d1b16c1fad820ec7a9437108078fce92031959d80f99fc4abac2bb529f39_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3a4b9785d523cc46f7c2b4696e00480f4dcea7f4c558ba4b1a6195220225608 = $this->env->getExtension("native_profiler");
        $__internal_f3a4b9785d523cc46f7c2b4696e00480f4dcea7f4c558ba4b1a6195220225608->enter($__internal_f3a4b9785d523cc46f7c2b4696e00480f4dcea7f4c558ba4b1a6195220225608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Projet ";
        
        $__internal_f3a4b9785d523cc46f7c2b4696e00480f4dcea7f4c558ba4b1a6195220225608->leave($__internal_f3a4b9785d523cc46f7c2b4696e00480f4dcea7f4c558ba4b1a6195220225608_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_57a7606202dd5ad1ff820afe72312a3dbe0401703851f68d9cac951c4a9b341d = $this->env->getExtension("native_profiler");
        $__internal_57a7606202dd5ad1ff820afe72312a3dbe0401703851f68d9cac951c4a9b341d->enter($__internal_57a7606202dd5ad1ff820afe72312a3dbe0401703851f68d9cac951c4a9b341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui\">
    <title>Création d'un projet</title>
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_57a7606202dd5ad1ff820afe72312a3dbe0401703851f68d9cac951c4a9b341d->leave($__internal_57a7606202dd5ad1ff820afe72312a3dbe0401703851f68d9cac951c4a9b341d_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ceee94bedc4f96f28b137025ff093a0d51a9cadb106a5ea645ae62cf55ed7346 = $this->env->getExtension("native_profiler");
        $__internal_ceee94bedc4f96f28b137025ff093a0d51a9cadb106a5ea645ae62cf55ed7346->enter($__internal_ceee94bedc4f96f28b137025ff093a0d51a9cadb106a5ea645ae62cf55ed7346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/css/style.css"), "html", null, true);
        echo "\"/>
\t
";
        
        $__internal_ceee94bedc4f96f28b137025ff093a0d51a9cadb106a5ea645ae62cf55ed7346->leave($__internal_ceee94bedc4f96f28b137025ff093a0d51a9cadb106a5ea645ae62cf55ed7346_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3a07a4c991896e6bb0cbfd82266fe4945e3b0da5ba1e3a95c9fb0e6ebe4fce8 = $this->env->getExtension("native_profiler");
        $__internal_b3a07a4c991896e6bb0cbfd82266fe4945e3b0da5ba1e3a95c9fb0e6ebe4fce8->enter($__internal_b3a07a4c991896e6bb0cbfd82266fe4945e3b0da5ba1e3a95c9fb0e6ebe4fce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "<main id=\"main\">
\t <label id=\"projet\" for=\"projetName\">Que voulez-vous faire ?</label>
     <input type=\"text\" id=\"projetName\" placeholder=\"Nom du projet\"/>
     <label id=\"projet\" class=\"hidden\" for=\"projetDesc\">En quoi cela consiste t-il ?</label>
     <textarea id=\"text\" class=\"hidden\" type=\"text\" id=\"projetDesc\" placeholder=\"Expliquez nous un peu en quoi cela consiste :)\"/></textarea>
     <a id=\"button\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("editProjet");
        echo "\" class=\"hidden\"><img id=\"img\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/valider.svg"), "html", null, true);
        echo "\"/></a>
    </main>



";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_b3a07a4c991896e6bb0cbfd82266fe4945e3b0da5ba1e3a95c9fb0e6ebe4fce8->leave($__internal_b3a07a4c991896e6bb0cbfd82266fe4945e3b0da5ba1e3a95c9fb0e6ebe4fce8_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f1f7e5e64f18ecdb21c1edbd4ad29725cee86ae8920613bbe53fcca96b5dbdf = $this->env->getExtension("native_profiler");
        $__internal_3f1f7e5e64f18ecdb21c1edbd4ad29725cee86ae8920613bbe53fcca96b5dbdf->enter($__internal_3f1f7e5e64f18ecdb21c1edbd4ad29725cee86ae8920613bbe53fcca96b5dbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/js/code.js"), "html", null, true);
        echo "\"></script>
\t\t
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
  
 
";
        
        $__internal_3f1f7e5e64f18ecdb21c1edbd4ad29725cee86ae8920613bbe53fcca96b5dbdf->leave($__internal_3f1f7e5e64f18ecdb21c1edbd4ad29725cee86ae8920613bbe53fcca96b5dbdf_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  108 => 26,  98 => 21,  91 => 16,  85 => 15,  74 => 11,  62 => 10,  56 => 6,  50 => 5,  38 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %} Projet {% endblock %}*/
/* */
/* */
/*  {%block head %}*/
/*     <meta charset="utf-8" />*/
/*     <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">*/
/*     <title>Création d'un projet</title>*/
/*     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*     {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{asset('bundles/projet/css/style.css')}}"/>*/
/* 	*/
/* {% endblock %}*/
/* {%endblock%}*/
/* {%block body%}*/
/* <main id="main">*/
/* 	 <label id="projet" for="projetName">Que voulez-vous faire ?</label>*/
/*      <input type="text" id="projetName" placeholder="Nom du projet"/>*/
/*      <label id="projet" class="hidden" for="projetDesc">En quoi cela consiste t-il ?</label>*/
/*      <textarea id="text" class="hidden" type="text" id="projetDesc" placeholder="Expliquez nous un peu en quoi cela consiste :)"/></textarea>*/
/*      <a id="button" href="{{ path('editProjet')}}" class="hidden"><img id="img" src="{{asset('bundles/projet/img/valider.svg')}}"/></a>*/
/*     </main>*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="{{asset('bundles/projet/js/code.js')}}"></script>*/
/* 		*/
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>*/
/*   */
/*  */
/* {% endblock %}*/
/* {%endblock%}*/
/* */
/* */

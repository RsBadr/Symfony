<?php

/* ProjetBundle:Default:index.html.twig */
class __TwigTemplate_a7c8b3404ecdde3b2e814f40282e7ce0612a011caa7475f8b58c7dae5f2adcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjetBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Projet ";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui\">
    <title>qTip extension</title>
    <link href=\"http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.css\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"panel\">
      <div id=\"projet\" class=\"field\">
\t<label for=\"setProjetName\">Nommez le projet :</label>
\t<input type=\"text\" id=\"setProjetName\" name=\"setProjetName\" placeholder=\"Nom projet\"/>
      </div>
      <div id=\"workbench\" style=\"display:none\">
\t<div id=\"tools\">
\t  <h2 id=\"indicateur\">Definir un nouvel objectif :</h2>
\t  <div id=\"parentLayout\" class=\"field\">
\t    <!-- 
\t       <label for=\"parent\">Parent</label>
\t       <input id=\"parent\" type=\"text\" name=\"parent\"></input>
\t       -->
\t    <span>Ajouter un sous objectif Ã  </span>
\t    <span id=\"parentName\"></span>
\t  </div>
\t  <div class=\"field\">
\t    <label for=\"nom\">Nom de l'objectif</label>
\t    <input id=\"nom\" type=\"text\" name=\"nom\" required></input>
\t  </div>
\t  <div class=\"field\">
\t    <label for=\"nom\">Descriptif</label>
\t    <input id=\"descriptif\" type=\"text\" name=\"descriptif\"></input>
\t  </div>
\t</div>
\t<ul id=\"goalSet\"></ul>
      </div>
    </div>
    <div id=\"cy\"></div>


";
        // line 43
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 44
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/css/style.css"), "html", null, true);
        echo "\"/>
\t
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/js/code.js"), "html", null, true);
        echo "\"></script>
\t\t
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
    <script src=\"http://cytoscape.github.io/cytoscape.js/api/cytoscape.js-latest/cytoscape.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.js\"></script>
    <script src=\"https://cdn.rawgit.com/cytoscape/cytoscape.js-qtip/2.2.5/cytoscape-qtip.js\"></script>
 
";
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
        return array (  105 => 48,  102 => 47,  94 => 44,  91 => 43,  87 => 47,  85 => 43,  52 => 12,  49 => 11,  41 => 6,  38 => 5,  32 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %} Projet {% endblock %}*/
/* */
/* */
/*  {%block head %}*/
/*     <meta charset="utf-8" />*/
/*     <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">*/
/*     <title>qTip extension</title>*/
/*     <link href="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.css" rel="stylesheet" type="text/css" />*/
/* {%endblock%}*/
/* {%block body%}*/
/*     <div id="panel">*/
/*       <div id="projet" class="field">*/
/* 	<label for="setProjetName">Nommez le projet :</label>*/
/* 	<input type="text" id="setProjetName" name="setProjetName" placeholder="Nom projet"/>*/
/*       </div>*/
/*       <div id="workbench" style="display:none">*/
/* 	<div id="tools">*/
/* 	  <h2 id="indicateur">Definir un nouvel objectif :</h2>*/
/* 	  <div id="parentLayout" class="field">*/
/* 	    <!-- */
/* 	       <label for="parent">Parent</label>*/
/* 	       <input id="parent" type="text" name="parent"></input>*/
/* 	       -->*/
/* 	    <span>Ajouter un sous objectif Ã  </span>*/
/* 	    <span id="parentName"></span>*/
/* 	  </div>*/
/* 	  <div class="field">*/
/* 	    <label for="nom">Nom de l'objectif</label>*/
/* 	    <input id="nom" type="text" name="nom" required></input>*/
/* 	  </div>*/
/* 	  <div class="field">*/
/* 	    <label for="nom">Descriptif</label>*/
/* 	    <input id="descriptif" type="text" name="descriptif"></input>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<ul id="goalSet"></ul>*/
/*       </div>*/
/*     </div>*/
/*     <div id="cy"></div>*/
/* */
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{asset('bundles/projet/css/style.css')}}"/>*/
/* 	*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{asset('bundles/projet/js/code.js')}}"></script>*/
/* 		*/
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>*/
/*     <script src="http://cytoscape.github.io/cytoscape.js/api/cytoscape.js-latest/cytoscape.min.js"></script>*/
/*     <script src="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.js"></script>*/
/*     <script src="https://cdn.rawgit.com/cytoscape/cytoscape.js-qtip/2.2.5/cytoscape-qtip.js"></script>*/
/*  */
/* {% endblock %}*/
/* {%endblock%}*/
/* */
/* */

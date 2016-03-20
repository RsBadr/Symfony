<?php

/* ProjetBundle:Default:edit.html.twig */
class __TwigTemplate_5848a665607c2a43ba8749811c8b67f51b178933debcfe7a09301563f28f4764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjetBundle:Default:edit.html.twig", 1);
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
        $__internal_0be6fba09140d5e225612b291d6fb80af5d110d2cd45fdaf8279a46936457ed2 = $this->env->getExtension("native_profiler");
        $__internal_0be6fba09140d5e225612b291d6fb80af5d110d2cd45fdaf8279a46936457ed2->enter($__internal_0be6fba09140d5e225612b291d6fb80af5d110d2cd45fdaf8279a46936457ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be6fba09140d5e225612b291d6fb80af5d110d2cd45fdaf8279a46936457ed2->leave($__internal_0be6fba09140d5e225612b291d6fb80af5d110d2cd45fdaf8279a46936457ed2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b154389c2d5bf354a8415455d5b834763f0805748cc1c0b0cdb84e8e9e6f6c1a = $this->env->getExtension("native_profiler");
        $__internal_b154389c2d5bf354a8415455d5b834763f0805748cc1c0b0cdb84e8e9e6f6c1a->enter($__internal_b154389c2d5bf354a8415455d5b834763f0805748cc1c0b0cdb84e8e9e6f6c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Projet ";
        
        $__internal_b154389c2d5bf354a8415455d5b834763f0805748cc1c0b0cdb84e8e9e6f6c1a->leave($__internal_b154389c2d5bf354a8415455d5b834763f0805748cc1c0b0cdb84e8e9e6f6c1a_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_c75a4ca9abec9d7c6f8a8844f13fe81dd5f70488da093dd23cc936813b51cb6a = $this->env->getExtension("native_profiler");
        $__internal_c75a4ca9abec9d7c6f8a8844f13fe81dd5f70488da093dd23cc936813b51cb6a->enter($__internal_c75a4ca9abec9d7c6f8a8844f13fe81dd5f70488da093dd23cc936813b51cb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui\">
    <title>Edition de project</title>
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_c75a4ca9abec9d7c6f8a8844f13fe81dd5f70488da093dd23cc936813b51cb6a->leave($__internal_c75a4ca9abec9d7c6f8a8844f13fe81dd5f70488da093dd23cc936813b51cb6a_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47df6383946bb0cab3fa0aa3b972e9c48bf5e662ed68ebffc793ef4d5d7aed5e = $this->env->getExtension("native_profiler");
        $__internal_47df6383946bb0cab3fa0aa3b972e9c48bf5e662ed68ebffc793ef4d5d7aed5e->enter($__internal_47df6383946bb0cab3fa0aa3b972e9c48bf5e662ed68ebffc793ef4d5d7aed5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/css/editCSS/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/css/editCSS/action.css"), "html", null, true);
        echo "\"/>\t
    ";
        
        $__internal_47df6383946bb0cab3fa0aa3b972e9c48bf5e662ed68ebffc793ef4d5d7aed5e->leave($__internal_47df6383946bb0cab3fa0aa3b972e9c48bf5e662ed68ebffc793ef4d5d7aed5e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_872061bc0292c7523fd07f0e31fe4a5a7402a89dfa25476b5a0bcc538ec7350c = $this->env->getExtension("native_profiler");
        $__internal_872061bc0292c7523fd07f0e31fe4a5a7402a89dfa25476b5a0bcc538ec7350c->enter($__internal_872061bc0292c7523fd07f0e31fe4a5a7402a89dfa25476b5a0bcc538ec7350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "     <div id=\"ongletProjet\">
        <h1>Faire le tour du monde</h1>
        <div id=\"toolboxProjet\">
          <button id=\"saveProjet\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/valider.svg"), "html", null, true);
        echo "\"/></button>
          <button id=\"back\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/back.svg"), "html", null, true);
        echo "\"/></button>
          <button id=\"deleteProjet\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/delete.svg"), "html", null, true);
        echo "\"/></button>
        </div>
      </div>
      
    <main>
      <div id=\"vueProjet\">
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/projet.svg"), "html", null, true);
        echo "\"/>
        <h2></h2>
        <h3>Objectif du projet</h3>
        <div class=\"content\">
          <ul class=\"children\"></ul>
        </div>
      </div>
      <section>
         <h2>Considérons l'objectif <span id=\"nameGoal\">Faire le tour du monde</span> :</h2>
         <aside id=\"description\">
          J'ai 2 mois pour voir le plus de choses possibles ; 2 mois, c'est rien ! Il va falloir que je me dépeche !
         </aside>
          <div id=\"action\">
            <!--
            <option id=\"trash\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/trash.svg"), "html", null, true);
        echo "\"><span>Supprimer</span></option>
            <option id=\"add\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/addGoal.svg"), "html", null, true);
        echo "\"><span>Ajouter sous objectif</span></option>
            <option id=\"editName\" class='selected'><img src=\"\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/edit.svg"), "html", null, true);
        echo "\"><span>Changer le nom</span></option>
            <option id=\"editDesc\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/edit.svg"), "html", null, true);
        echo "\"><span>Changer la description</span></option>
          -->
        </div>
        <div id=\"workbench\"></div>
      </section>
    </main>
";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "   

";
        
        $__internal_872061bc0292c7523fd07f0e31fe4a5a7402a89dfa25476b5a0bcc538ec7350c->leave($__internal_872061bc0292c7523fd07f0e31fe4a5a7402a89dfa25476b5a0bcc538ec7350c_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c52d833e94428748e792e2eba690e91ff6b6f012ccf99ef784d538651c3b611e = $this->env->getExtension("native_profiler");
        $__internal_c52d833e94428748e792e2eba690e91ff6b6f012ccf99ef784d538651c3b611e->enter($__internal_c52d833e94428748e792e2eba690e91ff6b6f012ccf99ef784d538651c3b611e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    <script>
        var editImg = \"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/edit.svg"), "html", null, true);
        echo "\";
        var addGoal = \"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/addGoal.svg"), "html", null, true);
        echo "\";
        var addTask = \"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/addTask.svg"), "html", null, true);
        echo "\";
        var valider = \"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/valider.svg"), "html", null, true);
        echo "\";
        var trash = \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/trash.svg"), "html", null, true);
        echo "\";
        var goal = \"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/goal.svg"), "html", null, true);
        echo "\";
        var task = \"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/img/imgEdit/task.svg"), "html", null, true);
        echo "\";
    </script>

    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/js/editJS/metier.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/js/editJS/controller.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/js/editJS/vue.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/js/editJS/code.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projet/js/editJS/action.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_c52d833e94428748e792e2eba690e91ff6b6f012ccf99ef784d538651c3b611e->leave($__internal_c52d833e94428748e792e2eba690e91ff6b6f012ccf99ef784d538651c3b611e_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 66,  217 => 65,  213 => 64,  209 => 63,  205 => 62,  198 => 58,  194 => 57,  190 => 56,  186 => 55,  182 => 54,  178 => 53,  174 => 52,  171 => 51,  165 => 50,  156 => 67,  154 => 50,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  116 => 27,  107 => 21,  103 => 20,  99 => 19,  94 => 16,  88 => 15,  79 => 12,  74 => 11,  62 => 10,  56 => 6,  50 => 5,  38 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %} Projet {% endblock %}*/
/* */
/* */
/*  {%block head %}*/
/*     <meta charset="utf-8" />*/
/*     <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">*/
/*     <title>Edition de project</title>*/
/*     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*     {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{asset('bundles/projet/css/editCSS/style.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/projet/css/editCSS/action.css')}}"/>	*/
/*     {% endblock %}*/
/* {%endblock%}*/
/* {%block body%}*/
/*      <div id="ongletProjet">*/
/*         <h1>Faire le tour du monde</h1>*/
/*         <div id="toolboxProjet">*/
/*           <button id="saveProjet"><img src="{{asset('bundles/projet/img/imgEdit/valider.svg')}}"/></button>*/
/*           <button id="back"><img src="{{asset('bundles/projet/img/imgEdit/back.svg')}}"/></button>*/
/*           <button id="deleteProjet"><img src="{{asset('bundles/projet/img/imgEdit/delete.svg')}}"/></button>*/
/*         </div>*/
/*       </div>*/
/*       */
/*     <main>*/
/*       <div id="vueProjet">*/
/*         <img src="{{asset('bundles/projet/img/imgEdit/projet.svg')}}"/>*/
/*         <h2></h2>*/
/*         <h3>Objectif du projet</h3>*/
/*         <div class="content">*/
/*           <ul class="children"></ul>*/
/*         </div>*/
/*       </div>*/
/*       <section>*/
/*          <h2>Considérons l'objectif <span id="nameGoal">Faire le tour du monde</span> :</h2>*/
/*          <aside id="description">*/
/*           J'ai 2 mois pour voir le plus de choses possibles ; 2 mois, c'est rien ! Il va falloir que je me dépeche !*/
/*          </aside>*/
/*           <div id="action">*/
/*             <!--*/
/*             <option id="trash"><img src="{{asset('bundles/projet/img/imgEdit/trash.svg')}}"><span>Supprimer</span></option>*/
/*             <option id="add"><img src="{{asset('bundles/projet/img/imgEdit/addGoal.svg')}}"><span>Ajouter sous objectif</span></option>*/
/*             <option id="editName" class='selected'><img src=""{{asset('bundles/projet/img/imgEdit/edit.svg')}}"><span>Changer le nom</span></option>*/
/*             <option id="editDesc"><img src="{{asset('bundles/projet/img/imgEdit/edit.svg')}}"><span>Changer la description</span></option>*/
/*           -->*/
/*         </div>*/
/*         <div id="workbench"></div>*/
/*       </section>*/
/*     </main>*/
/* {% block javascripts %}*/
/*     <script>*/
/*         var editImg = "{{asset('bundles/projet/img/imgEdit/edit.svg')}}";*/
/*         var addGoal = "{{asset('bundles/projet/img/imgEdit/addGoal.svg')}}";*/
/*         var addTask = "{{asset('bundles/projet/img/imgEdit/addTask.svg')}}";*/
/*         var valider = "{{asset('bundles/projet/img/imgEdit/valider.svg')}}";*/
/*         var trash = "{{asset('bundles/projet/img/imgEdit/trash.svg')}}";*/
/*         var goal = "{{asset('bundles/projet/img/imgEdit/goal.svg')}}";*/
/*         var task = "{{asset('bundles/projet/img/imgEdit/task.svg')}}";*/
/*     </script>*/
/* */
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>*/
/*     <script src="{{asset('bundles/projet/js/editJS/metier.js')}}"></script>*/
/*     <script src="{{asset('bundles/projet/js/editJS/controller.js')}}"></script>*/
/*     <script src="{{asset('bundles/projet/js/editJS/vue.js')}}"></script>*/
/*     <script src="{{asset('bundles/projet/js/editJS/code.js')}}"></script>*/
/*     <script src="{{asset('bundles/projet/js/editJS/action.js')}}"></script>*/
/*  {% endblock %}   */
/* */
/* {%endblock%}*/
/* */
/* */

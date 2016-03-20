<?php

/* UserBundle:view.html.twig */
class __TwigTemplate_ccb3b5ba45c95e52e70408cc1dfe2b7248b349ff3eb1f62415eeb8d4c211498b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:view.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f99f1aa7442d1a650fc0d3b97bf0c02625c39e4d12fb65d37453240590cc350 = $this->env->getExtension("native_profiler");
        $__internal_7f99f1aa7442d1a650fc0d3b97bf0c02625c39e4d12fb65d37453240590cc350->enter($__internal_7f99f1aa7442d1a650fc0d3b97bf0c02625c39e4d12fb65d37453240590cc350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f99f1aa7442d1a650fc0d3b97bf0c02625c39e4d12fb65d37453240590cc350->leave($__internal_7f99f1aa7442d1a650fc0d3b97bf0c02625c39e4d12fb65d37453240590cc350_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0350062789979837206485a0b94e4613822c6036d7e62d5f61ef78cb889a92b6 = $this->env->getExtension("native_profiler");
        $__internal_0350062789979837206485a0b94e4613822c6036d7e62d5f61ef78cb889a92b6->enter($__internal_0350062789979837206485a0b94e4613822c6036d7e62d5f61ef78cb889a92b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Projet ";
        
        $__internal_0350062789979837206485a0b94e4613822c6036d7e62d5f61ef78cb889a92b6->leave($__internal_0350062789979837206485a0b94e4613822c6036d7e62d5f61ef78cb889a92b6_prof);

    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        $__internal_6aed7ff4c40de8d6fc38512b8f2649886d1c0a6cfb2c43dd9b28ac6a2f8172dc = $this->env->getExtension("native_profiler");
        $__internal_6aed7ff4c40de8d6fc38512b8f2649886d1c0a6cfb2c43dd9b28ac6a2f8172dc->enter($__internal_6aed7ff4c40de8d6fc38512b8f2649886d1c0a6cfb2c43dd9b28ac6a2f8172dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui\">
    <title>qTip extension</title>
    <link href=\"http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_6aed7ff4c40de8d6fc38512b8f2649886d1c0a6cfb2c43dd9b28ac6a2f8172dc->leave($__internal_6aed7ff4c40de8d6fc38512b8f2649886d1c0a6cfb2c43dd9b28ac6a2f8172dc_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_90910f799acdeb1e48d0c1573a3ba68b986c012a0b3defa23a481af547c3488a = $this->env->getExtension("native_profiler");
        $__internal_90910f799acdeb1e48d0c1573a3ba68b986c012a0b3defa23a481af547c3488a->enter($__internal_90910f799acdeb1e48d0c1573a3ba68b986c012a0b3defa23a481af547c3488a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
\t<ul class=\"record_actions\">
\t\t<li><a href=\"\">Ajouter une tâche</a></li>
\t</ul>
\t<table class=\"records_list\">
\t<tr>
\t<th>Nom</th>
\t<th>Descriptif</th>
\t<th>Fichiers</th>
\t<th>Dernière modification</th>
\t<th>Validée</th>
\t<th>Editer</th>
\t</tr>
\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) ? $context["taches"] : $this->getContext($context, "taches")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 27
            echo "\t<tr ";
            if ($this->getAttribute($context["task"], "checked", array())) {
                echo "class=\"completed\"";
            }
            echo ">
\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nom", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "desctxt", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 30
            if (($this->getAttribute($context["task"], "descfile", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descfile", array()), "html", null, true);
            } else {
                echo "Vide";
            }
            echo "</td>
\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDerModif", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 32
            if ($this->getAttribute($context["task"], "Checked", array())) {
                echo "yes";
            } else {
                echo "no";
            }
            echo "</td>
\t<td><a href=\" \">edit</a></td>
\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "\t<tr><td colspan=\"5\">Pas de taches en cours.</td></tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t</table>

";
        
        $__internal_90910f799acdeb1e48d0c1573a3ba68b986c012a0b3defa23a481af547c3488a->leave($__internal_90910f799acdeb1e48d0c1573a3ba68b986c012a0b3defa23a481af547c3488a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  131 => 36,  118 => 32,  114 => 31,  106 => 30,  102 => 29,  98 => 28,  91 => 27,  86 => 26,  71 => 13,  65 => 12,  54 => 7,  48 => 6,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
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
/* */
/* 	<ul class="record_actions">*/
/* 		<li><a href="">Ajouter une tâche</a></li>*/
/* 	</ul>*/
/* 	<table class="records_list">*/
/* 	<tr>*/
/* 	<th>Nom</th>*/
/* 	<th>Descriptif</th>*/
/* 	<th>Fichiers</th>*/
/* 	<th>Dernière modification</th>*/
/* 	<th>Validée</th>*/
/* 	<th>Editer</th>*/
/* 	</tr>*/
/* 	{% for task in taches %}*/
/* 	<tr {% if task.checked %}class="completed"{% endif %}>*/
/* 	<td>{{ task.nom }}</td>*/
/* 	<td>{{ task.desctxt }}</td>*/
/* 	<td>{% if task.descfile != null %}{{ task.descfile}}{% else %}Vide{% endif %}</td>*/
/* 	<td>{{ task.dateDerModif|date('d/m/Y') }}</td>*/
/* 	<td>{% if task.Checked %}yes{% else %}no{% endif %}</td>*/
/* 	<td><a href=" ">edit</a></td>*/
/* 	</tr>*/
/* 	{% else %}*/
/* 	<tr><td colspan="5">Pas de taches en cours.</td></tr>*/
/* 	{% endfor %}*/
/* 	</table>*/
/* */
/* {% endblock %}*/
/* */

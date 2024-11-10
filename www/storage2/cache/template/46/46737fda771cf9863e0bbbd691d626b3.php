<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/pavmegamenu/pavmegamenu.twig */
class __TwigTemplate_9abdb8c86f6da2855daf4f06b20eacf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--
/******************************************************
 * @package Pav Megamenu module for Opencart 3.0.x
 * @version 3.0
 * @author http://www.pavothemes.com
 * @copyright\tCopyright (C) Oct 2017 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
 * @license\t\tGNU General Public License version 2
*******************************************************/
-->

";
        // line 11
        echo ($context["header"] ?? null);
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " ";
        $context["module_row"] = 0;
        // line 12
        echo "
<div id=\"content\">
\t
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button class=\"btn btn-primary\" title=\"";
        // line 18
        echo ($context["button_save"] ?? null);
        echo "\" onclick=\"\$('#form').submit();\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t\t<a class=\"btn btn-info\" title=\"";
        // line 19
        echo ($context["button_save_edit"] ?? null);
        echo "\" onclick=\"\$('#save_mode').val('save-edit');\$('#form').submit();\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save_edit"] ?? null);
        echo "</a>
\t\t\t\t<a class=\"btn btn-success\" title=\"";
        // line 20
        echo ($context["button_save_new"] ?? null);
        echo "\" onclick=\"\$('#save_mode').val('save-new');\$('#form').submit();\"><i class=\"fa fa-book\"></i> ";
        echo ($context["button_save_new"] ?? null);
        echo "</a> | 
\t\t\t\t<a class=\"btn btn-danger\" title=\"";
        // line 21
        echo ($context["button_cancel"] ?? null);
        echo "\" href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" ><i class=\"fa fa-book\"></i> ";
        echo ($context["button_cancel"] ?? null);
        echo "</a>
\t\t\t\t
\t\t\t</div>
\t\t\t<h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 27
            echo "\t\t        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
            echo "</a></li>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t    </ul>
\t\t</div>
\t</div>

\t<div id=\"page-content\" class=\"container-fluid\">

\t\t";
        // line 35
        if (($context["error_warning"] ?? null)) {
            // line 36
            echo "\t    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t    </div>
\t    ";
        }
        // line 40
        echo "\t
\t\t<div id=\"ajaxloading\" class=\"hide\">
\t\t\t<div class=\"alert alert-warning\" role=\"alert\">";
        // line 42
        echo ($context["text_process_request"] ?? null);
        echo "</div>
\t\t</div>

\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 47
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul id=\"grouptabs\" class=\"nav nav-tabs hidden\" role=\"tablist\">
\t\t\t\t\t<li class=\"active\"><a href=\"#manage-menus\" role=\"tab\" data-toggle=\"tab\">";
        // line 51
        echo ($context["tab_manage_megamenus"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#manage-widgets\" role=\"tab\" data-toggle=\"tab\">";
        // line 52
        echo ($context["tab_manage_widgets"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-pane hidden\" id=\"manage-widgets\">
\t\t\t\t\t\t<p><i>";
        // line 57
        echo ($context["text_explain_widgets"] ?? null);
        echo "</i></p>
\t\t\t\t\t\t<a class=\"btn btn-info btn-modal\" href=\"index.php?route=extension/module/pavmegamenu/addwidget&user_token=";
        // line 58
        echo ($context["user_token"] ?? null);
        echo "\" >";
        echo ($context["text_create_widget"] ?? null);
        echo "</a>
\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tr>\t
\t\t\t\t\t\t\t\t<td>";
        // line 62
        echo ($context["text_widget_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 63
        echo ($context["text_widget_type"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 64
        echo ($context["text_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 67
        if (twig_test_iterable(($context["widgets"] ?? null))) {
            // line 68
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["widgets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "name", [], "any", false, false, false, 70);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 71
                $context["type"] = twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 71);
                echo " ";
                echo (($context["text_widget_"] ?? null) . ($context["type"] ?? null));
                echo "</td>
\t\t\t\t\t\t\t\t\t<td><a class=\"btn-action-widget btn-modal\" rel=\"edit\" href=\"index.php?route=extension/module/pavmegamenu/addwidget&user_token=";
                // line 72
                echo ($context["user_token"] ?? null);
                echo "&id=";
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 72);
                echo "&wtype=";
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 72);
                echo "\">";
                echo ($context["text_edit"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t| 
\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('";
                // line 74
                echo ($context["text_confirm_delete"] ?? null);
                echo "');\"\trel=\"edit\" href=\"index.php?route=extension/module/pavmegamenu/delwidget&user_token=";
                echo ($context["user_token"] ?? null);
                echo "&id=";
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 74);
                echo "&wtype=";
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 74);
                echo "\">";
                echo ($context["text_delete"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div><!-- div.panel > manage-widgets -->

\t\t\t\t\t<div class=\"tab-pane active\" id=\"manage-menus\">
\t\t\t\t\t\t<form action=\"";
        // line 83
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" title=\"";
        // line 87
        echo ($context["button_import_categories"] ?? null);
        echo "\" onclick=\"\$('#save_mode').val('import-categories');\$('#form').submit();\">";
        echo ($context["button_import_categories"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" title=\"";
        // line 88
        echo ($context["button_delete_categories"] ?? null);
        echo "\" data-toggle=\"modal\" data-target=\".deleteTree-modal-sm\">";
        echo ($context["button_delete_categories"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<select class=\"form-control pull-right\" name=\"stores\" id=\"pavstores\" style=\"width: 20%;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 95) == ($context["store_id"] ?? null))) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 96);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 96);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 98);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 98);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t \t\t<span class=\"pull-right\" style=\"font-weight:bold;\"> ";
        // line 102
        echo ($context["entry_filter_store"] ?? null);
        echo " </span>
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 103
        echo ($context["store_id"] ?? null);
        echo "\" name=\"megamenu[store]\"/></br></br>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><br/><br/>

\t\t\t\t\t\t\t<div class=\"megamenu\">
\t\t\t\t\t\t\t\t<div class=\"tree-megamenu\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 110
        echo ($context["text_treemenu"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-updatetree\" name=\"serialize\" id=\"serialize\">";
        // line 111
        echo ($context["button_update_order"] ?? null);
        echo "</a>\t
\t\t\t\t\t\t\t\t\t";
        // line 112
        echo ($context["tree"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-updatetree\" name=\"serialize\" id=\"serialize\">";
        // line 113
        echo ($context["button_update_order"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t<p class=\"note\"><i>";
        // line 114
        echo ($context["text_explain_drapanddrop"] ?? null);
        echo "</i></p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><!-- end div.megamenu -->

\t\t\t\t\t\t\t<div class=\"megamenu-form\">
\t\t\t\t\t\t\t\t<div id=\"megamenu-form\">
\t\t\t\t\t\t\t\t\t";
        // line 121
        if (array_key_exists("menu", $context)) {
            echo " ";
            $context["module_row"] = "ss";
            // line 122
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 123
            if ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_id", [], "any", false, false, false, 123) > 0)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t<h3>";
                echo twig_sprintf(($context["text_edit_menu"] ?? null), twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "title", [], "any", false, false, false, 124), twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_id", [], "any", false, false, false, 124));
                echo "</h3>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t<h3>";
                echo ($context["text_create_new"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t\t\t";
            }
            // line 128
            echo "
\t\t\t\t\t\t\t\t\t<h4>";
            // line 129
            echo ($context["entry_menu_information"] ?? null);
            echo "</h4>

\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language-";
            // line 131
            echo ($context["module_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-language-";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 134);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 134);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 134);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 134);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-language-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 141);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table no-border\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 144
                echo ($context["entry_menu_title"] ?? null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"megamenu_description[";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
                echo "][title]\" value=\"";
                echo (((($__internal_compile_0 = ($context["menu_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["menu_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null), "title", [], "any", false, false, false, 146)) : (""));
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 150
                echo ($context["entry_description"] ?? null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"megamenu_description[";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
                echo "][description]\" value=\"\">";
                echo (((($__internal_compile_2 = ($context["menu_description"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["menu_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null), "description", [], "any", false, false, false, 152)) : (""));
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h4>";
            // line 160
            echo ($context["entry_menu_type"] ?? null);
            echo "</h4>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"megamenu[item]\" value=\"";
            // line 161
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item", [], "any", false, false, false, 161);
            echo "\" />
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 164
            echo ($context["entry_publish"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[published]\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["yesno"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "published", [], "any", false, false, false, 168))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 174
            echo ($context["entry_type"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"megamenu[type]\" id=\"megamenutype\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["megamenutypes"] ?? null));
            foreach ($context['_seq'] as $context["mt"] => $context["val"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 178
                echo $context["mt"];
                echo "\" ";
                if (($context["mt"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "type", [], "any", false, false, false, 178))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mt'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr id=\"megamenutype-url\" class=\"megamenutype\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 184
            echo ($context["entry_url"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[url]\" value=\"";
            // line 186
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "url", [], "any", false, false, false, 186);
            echo "\" size=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr id=\"megamenutype-category\" class=\"megamenutype\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 190
            echo ($context["entry_category"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"path\" value=\"";
            // line 192
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_category", [], "any", false, false, false, 192);
            echo "\" size=\"100\" />
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 193
            echo ($context["text_explain_input_auto"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr id=\"megamenutype-product\" class=\"megamenutype\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 197
            echo ($context["entry_product"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu_product\" value=\"";
            // line 199
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_product", [], "any", false, false, false, 199);
            echo "\" size=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 200
            echo ($context["text_explain_input_auto"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr id=\"megamenutype-manufacturer\" class=\"megamenutype\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 204
            echo ($context["entry_manufacturer"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu_manufacturer\" value=\"";
            // line 206
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_manufacturer", [], "any", false, false, false, 206);
            echo "\" size=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 207
            echo ($context["text_explain_input_auto"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr id=\"megamenutype-information\" class=\"megamenutype\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 211
            echo ($context["entry_information"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" type=\"text\" name=\"megamenu_information\" id=\"megamenu_information\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["info"], "information_id", [], "any", false, false, false, 216);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_information", [], "any", false, false, false, 216) == twig_get_attribute($this->env, $this->source, $context["info"], "information_id", [], "any", false, false, false, 216))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["info"], "title", [], "any", false, false, false, 216);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr id=\"megamenutype-html\" class=\"megamenutype\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 225
            echo ($context["entry_html"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"megamenu[content_text]\" class=\"form-control \" id=\"content_text\" size=\"50\">";
            // line 227
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "content_text", [], "any", false, false, false, 227);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 228
            echo ($context["text_explain_input_html"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t\t<h4>";
            // line 233
            echo ($context["entry_menu_param"] ?? null);
            echo "</h4>\t  
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 236
            echo ($context["entry_parent_id"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 239
            echo ($context["menus"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-2 control-label\">";
            // line 243
            echo ($context["entry_image"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-img\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 246
            if (twig_test_empty(($context["thumb"] ?? null))) {
                echo " ";
                echo ($context["placeholder"] ?? null);
                echo " ";
            } else {
                echo " ";
                echo ($context["thumb"] ?? null);
                echo " ";
            }
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"megamenu[image]\" value=\"";
            // line 248
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "image", [], "any", false, false, false, 248);
            echo "\" id=\"input-icon-menu\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-2 control-label\">";
            // line 252
            echo ($context["entry_icon"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"verticalmenu[icon]\" value=\"";
            // line 254
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "icon", [], "any", false, false, false, 254);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 255
            echo ($context["text_explain_input_icon"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 259
            echo ($context["entry_menuclass"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[menu_class]\" value=\"";
            // line 261
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "menu_class", [], "any", false, false, false, 261);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 266
            echo ($context["entry_badges"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[badges]\" value=\"";
            // line 268
            echo ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "badges", [], "any", false, false, false, 268)) ? (twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "badges", [], "any", false, false, false, 268)) : (""));
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 273
            echo ($context["entry_showtitle"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[show_title]\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["yesno"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 278
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "show_title", [], "any", false, false, false, 278))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"hide\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 284
            echo ($context["entry_isgroup"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[is_group]\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["yesno"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 289
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "is_group", [], "any", false, false, false, 289))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 292
            echo ($context["text_explain_group"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 296
            echo ($context["entry_iscontent"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[is_content]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 299
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["yesno"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 300
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "is_content", [], "any", false, false, false, 300))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 309
            echo ($context["entry_sub_menutype"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"megamenu[type_submenu]\" id=\"megamenu-type_submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["submenutypes"] ?? null));
            foreach ($context['_seq'] as $context["stype"] => $context["text"]) {
                // line 313
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["stype"];
                echo "\" ";
                if (($context["stype"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "type_submenu", [], "any", false, false, false, 313))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["text"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['stype'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 316
            echo ($context["text_explain_submenu_type"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"type_submenu\" id=\"type_submenu-html\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
            // line 320
            echo ($context["entry_submenu_content"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"megamenu[submenu_content]\" id=\"submenu_content\">";
            // line 322
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "submenu_content", [], "any", false, false, false, 322);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
            // line 326
            if (($context["blockbuilders"] ?? null)) {
                // line 327
                echo "\t\t\t\t\t\t\t\t\t\t<tr id=\"type_submenu-blkbuilder\" class=\"type_submenu\" style=\"display: none\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">";
                // line 328
                echo ($context["entry_blockbuilder"] ?? null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"megamenu[widget_id]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 332
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blockbuilders"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["blockbuilder"]) {
                    // line 333
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blockbuilder"], "module_id", [], "any", false, false, false, 333);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "widget_id", [], "any", false, false, false, 333) == twig_get_attribute($this->env, $this->source, $context["blockbuilder"], "module_id", [], "any", false, false, false, 333))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["blockbuilder"], "name", [], "any", false, false, false, 333);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockbuilder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 335
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"edit-blockbuilder\" data-href=\"";
                // line 336
                echo ($context["blockbuilder_edit_url"] ?? null);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 340
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 342
            echo ($context["entry_submenu_width"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[submenu_width]\" value=\"";
            // line 345
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "submenu_width", [], "any", false, false, false, 345);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 346
            echo ($context["entry_submenu_width_explain"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 353
            echo ($context["entry_submenu_alignment"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"megamenu[width]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 357
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["width_aligns"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["align"]) {
                // line 358
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "width", [], "any", false, false, false, 358) == $context["key"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["align"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['align'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<i>";
            // line 361
            echo ($context["entry_submenu_alignment_explain"] ?? null);
            echo "</i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"megamenu[megamenu_id]\" value=\"";
            // line 366
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_id", [], "any", false, false, false, 366);
            echo "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 369
        echo "
\t\t\t\t\t\t\t\t<script type=\"text/javascript\"> 

\t\t\t\t\t\t\t\t\$('.edit-blockbuilder').click( function(){ 
\t\t\t\t\t\t\t\t\tvar id = \$(this).parent().find('select' ).val(); 
\t\t\t\t\t\t\t\t\tvar url = \$(this).data('href').replace('MODULE_ID', id );
\t\t\t\t\t\t\t\t\twindow.open(url , '_blank');
\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t});\t
\t\t\t\t\t\t\t\t\$(\"#type_submenu-\"+\$(\"#megamenu-type_submenu\").val()).show();
\t\t\t\t\t\t\t\t\$(\"#megamenu-type_submenu\").change( function(){
\t\t\t\t\t\t\t\t\t\$(\".type_submenu\").hide();
\t\t\t\t\t\t\t\t\t\$(\"#type_submenu-\"+\$(this).val()).show();
\t\t\t\t\t\t\t\t} );


\t\t\t\t\t\t\t\t\$('#submenu_content').summernote({
\t\t\t\t\t\t\t\t\theight: 300
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\$('#content_text').summernote({
\t\t\t\t\t\t\t\t\theight: 300
\t\t\t\t\t\t\t\t});


\t\t\t\t\t\t\t\t\$('#language-";
        // line 394
        echo ($context["module_row"] ?? null);
        echo " li:first-child a').tab('show');


\t\t\t\t\t\t\t\t\$(\".megamenutype\").hide();
\t\t\t\t\t\t\t\t\$(\"#megamenutype-\"+ \$(\"#megamenutype\").val()).show();
\t\t\t\t\t\t\t\t\$(\"#megamenutype\").change( function(){
\t\t\t\t\t\t\t\t\t\$(\".megamenutype\").hide();
\t\t\t\t\t\t\t\t\t\$(\"#megamenutype-\"+\$(this).val()).show();
\t\t\t\t\t\t\t\t} );

\t\t\t\t\t\t\t\t   

\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu_manufacturer\\']').autocomplete({
\t\t\t\t\t\t\t\t\tdelay: 500,
\t\t\t\t\t\t\t\t\tsource: function(request, response) {\t\t
\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 410
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\t\t\tjson.unshift({
\t\t\t\t\t\t\t\t\t\t\t\t\t'manufacturer_id':  0,
\t\t\t\t\t\t\t\t\t\t\t\t\t'name':  '";
        // line 415
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue: item.manufacturer_id
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}));
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tselect: function(event, ui) {
\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu_manufacturer\\']').val(ui.item.label);
\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tfocus: function(event, ui) {
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\$(\"#megamenu-blockbuilder\").change( function(){ 
\t\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu[item]\\']').val(\$(this).val());
\t\t\t\t\t\t\t\t} );

\t\t\t\t\t\t\t\t\$(\"#megamenu_information\").change( function(){ 
\t\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu[item]\\']').val(\$(this).val());
\t\t\t\t\t\t\t\t} );

\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu_product\\']').autocomplete({
\t\t\t\t\t\t\t\t\tdelay: 500,
\t\t\t\t\t\t\t\t\tsource: function(request, response) {\t\t
\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 450
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\t\t\tjson.unshift({
\t\t\t\t\t\t\t\t\t\t\t\t\t'product_id':  0,
\t\t\t\t\t\t\t\t\t\t\t\t\t'name':  '";
        // line 455
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue: item.product_id
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}));
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tselect: function(event, ui) {
\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu_product\\']').val(ui.item.label);
\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tfocus: function(event, ui) {
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\$('input[name=\\'path\\']').autocomplete({
\t\t\t\t\t\t\t\t\tdelay: 500,
\t\t\t\t\t\t\t\t\tsource: function(request, response) {\t\t
\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 482
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\t\t\tjson.unshift({
\t\t\t\t\t\t\t\t\t\t\t\t\t'category_id':  0,
\t\t\t\t\t\t\t\t\t\t\t\t\t'name':  '";
        // line 487
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue: item.category_id
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}));
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tselect: function(event, ui) {
\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'path\\']').val(ui.item.label);
\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tfocus: function(event, ui) {
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end div.megamenu-form -->

\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"save_mode\" id=\"save_mode\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div><!-- div.panel > manage-menus -->


\t\t\t\t</div>
\t\t\t</div>

\t\t</div><!-- end div.panel panel-default -->
\t\t<div id=\"info\" style=\"font-size:10px;color:#666\"><p>Pav Mega Menu is free to use. it's released under GPL/V2. Powered By <a href=\"http://www.pavothemes.com\">PavoThemes.Com</a></div>

\t</div><!-- container-fluid -->
</div>

 \t<!-- Modal Form-->
\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t    <div class=\"modal-dialog\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t          \t<h4 class=\"modal-title\">";
        // line 534
        echo ($context["text_preview_on_live_site"] ?? null);
        echo "</h4>
\t\t        </div>
\t        \t<div class=\"modal-body\"></div>
\t\t        <div class=\"modal-footer\">
\t\t          \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 538
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t        </div>
\t      \t</div> 
\t    </div> 
\t</div>

\t<!-- Modal confirm dialog -->
\t<div id=\"cmodal\" class=\"modal fade deleteTree-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
\t  \t<div class=\"modal-dialog modal-sm\">
\t\t    <div class=\"modal-content\">
\t\t    \t<div class=\"modal-body\">
\t\t         \t";
        // line 549
        echo ($context["message_delete_category"] ?? null);
        echo "
\t\t        </div>
\t\t     \t<div class=\"modal-footer\">
\t\t          \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 552
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t          \t<button type=\"button\" class=\"btn btn-primary\" id=\"btnDeleteTree\">";
        // line 553
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t        </div>
\t\t        <input id=\"menuid\" type=\"hidden\" name=\"menuid\" value=\"0\"/>
\t\t    </div>
\t  \t</div>
\t</div>
  
<script type=\"text/javascript\"><!--
\t
\t// Drag and Drop menu Item
\t\$('ol.sortable').nestedSortable({
\t\tforcePlaceholderSize: true,
\t\thandle: 'div',
\t\thelper:\t'clone',
\t\titems: 'li',
\t\topacity: .6,
\t\tplaceholder: 'placeholder',
\t\trevert: 250,
\t\ttabSize: 25,
\t\ttolerance: 'pointer',
\t\ttoleranceElement: '> div',
\t\tmaxLevels: 4,

\t\tisTree: true,
\t\texpandOnHover: 700,
\t\tstartCollapsed: true
\t});
\t
\t\$('#serialize, .btn-updatetree').click(function(){
\t\t\tvar serialized = \$('ol.sortable').nestedSortable('serialize');
\t\t\t\$.ajax({
\t\t\tasync : false,
\t\t\ttype: 'POST',
\t\t\tdataType:'json',
\t\t\turl: \"";
        // line 587
        echo ($context["updateTree"] ?? null);
        echo "\",
\t\t\tdata : serialized, 
\t\t\tsuccess : function (r) { 
\t\t
\t\t\t\tif (\$('#msg-tree').length > 0 ) { 
\t\t\t\t\t\$(\"#page-content\").remove('#msg-tree');
\t\t\t\t} else {
\t\t\t\t\tvar html = \"<div id='msg-tree' class='alert alert-success'><i class='fa fa-check-circle'></i>";
        // line 594
        echo ($context["text_success_update_tree"] ?? null);
        echo "<button type='button' class='close' data-dismiss='alert'>×</button></div>\";
\t\t\t\t\t\$(\"#ajaxloading\").before(html);
\t\t\t\t\t//Scroll up
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t// Mutiple Store
\t\$('#pavstores').bind('change', function () {
\t\turl = 'index.php?route=extension/module/pavmegamenu&user_token=";
        // line 605
        echo ($context["user_token"] ?? null);
        echo "';
\t\tvar id = \$(this).val();
\t\tif (id) {
\t\t\turl += '&store=' + encodeURIComponent(id);
\t\t}
\t\twindow.location = url;
\t});

\t// Modal delete tree categories
\t\$('#btnDeleteTree').click(function() {
\t\tvar id = \$(\"#menuid\").val();
\t\tif(id == 0) {
\t\t\t\$(\"#save_mode\").val('delete-categories');
\t\t\t\$('#form').submit();\t
\t\t} else {
\t\t\twindow.location.href=\"";
        // line 620
        echo ($context["actionDel"] ?? null);
        echo "&id=\"+id;
\t\t}
\t\t
\t});

\t\$(\".quickdel\").click(function(){
\t\t\$('#cmodal .modal-body').html( \"";
        // line 626
        echo ($context["message_delete"] ?? null);
        echo "\" );
\t\t\$('#cmodal').modal();
\t\tvar id = \$(this).attr(\"rel\").replace(\"id_\",\"\");
\t\t\$(\"#menuid\").val(id);
\t\treturn false;
\t});

\t// Ajax load
\t\$(document).ajaxSend(function() {
\t\t\$(\"#ajaxloading\").show();
\t});
\t\$(document).ajaxComplete(function() {
\t\t\$(\"#ajaxloading\").hide();
\t});

\t// Cookies tab
\t\$('#grouptabs a').click( function(){
\t\t\$.cookie(\"megaactived_tab\", \$(this).attr(\"href\") );
\t});

\tif(\$.cookie(\"megaactived_tab\") !=\"undefined\"){
\t\t\$('#grouptabs a').each( function(){
\t\t\tif( \$(this).attr(\"href\") ==  \$.cookie(\"megaactived_tab\")){
\t\t\t\t\$(this).click();
\t\t\t\treturn ;
\t\t\t}
\t\t});
\t}

\t// Modal Link guide
\t\$(\"#btn-guide\").click( function(){
\t\t\$('#myModal .modal-dialog').css('width',980);
\t\tvar a = \$( '<span class=\"glyphicon glyphicon-refresh\"></span><iframe frameborder=\"0\" scrolling=\"no\" src=\"'+\$(this).attr('href')+'\" style=\"width:100%;height:900px; display:none\"/>'  );
\t\t\$('#myModal .modal-body').html( a );
\t\t\t
\t\t\$('#myModal').modal();
\t\t\$('#myModal').attr('rel', \$(this).attr('rel') );
\t\t\$(a).load( function(){  
\t\t\t\$('#myModal .modal-body .glyphicon-refresh').hide();
\t \t\t\$('#myModal .modal-body iframe').show();
\t\t} );
\t\treturn false;
\t});

\t// Modal Create widget
\t\$(\".btn-modal\").click( function(){ 
\t\t\$('#myModal .modal-dialog').css('width',980);
\t\tvar a = \$( '<span class=\"glyphicon glyphicon-refresh\"></span><iframe frameborder=\"0\" scrolling=\"no\" src=\"'+\$(this).attr('href')+'\" style=\"width:100%;height:900px; display:none\"/>'  );
\t\t\$('#myModal .modal-body').html( a );
\t\t\t
\t\t\$('#myModal').modal( );
\t\t\$('#myModal').attr('rel', \$(this).attr('rel') );
\t\t\$(a).load( function(){  
\t\t\t\$('#myModal .modal-body .glyphicon-refresh').hide();
\t \t\t\$('#myModal .modal-body iframe').show();
\t\t});

\t\treturn false;
\t});
\t\$('#myModal').on('hidden.bs.modal', function () { 
\t \t if( \$(this).attr('rel') == 'refresh-page' ){
\t \t \twindow.parent.location.reload();
\t \t }
\t});
//-->
</script>

";
        // line 693
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/pavmegamenu/pavmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1359 => 693,  1289 => 626,  1280 => 620,  1262 => 605,  1248 => 594,  1238 => 587,  1201 => 553,  1197 => 552,  1191 => 549,  1177 => 538,  1170 => 534,  1120 => 487,  1112 => 482,  1082 => 455,  1074 => 450,  1036 => 415,  1028 => 410,  1009 => 394,  982 => 369,  976 => 366,  968 => 361,  965 => 360,  950 => 358,  946 => 357,  939 => 353,  929 => 346,  925 => 345,  919 => 342,  915 => 340,  908 => 336,  905 => 335,  890 => 333,  886 => 332,  879 => 328,  876 => 327,  874 => 326,  867 => 322,  862 => 320,  855 => 316,  852 => 315,  837 => 313,  833 => 312,  827 => 309,  818 => 302,  803 => 300,  799 => 299,  793 => 296,  786 => 292,  783 => 291,  768 => 289,  764 => 288,  757 => 284,  751 => 280,  736 => 278,  732 => 277,  725 => 273,  717 => 268,  712 => 266,  704 => 261,  699 => 259,  692 => 255,  688 => 254,  683 => 252,  676 => 248,  661 => 246,  655 => 243,  648 => 239,  642 => 236,  636 => 233,  628 => 228,  624 => 227,  619 => 225,  610 => 218,  595 => 216,  591 => 215,  584 => 211,  577 => 207,  573 => 206,  568 => 204,  561 => 200,  557 => 199,  552 => 197,  545 => 193,  541 => 192,  536 => 190,  529 => 186,  524 => 184,  518 => 180,  504 => 178,  498 => 177,  492 => 174,  486 => 170,  471 => 168,  467 => 167,  461 => 164,  455 => 161,  451 => 160,  447 => 158,  433 => 152,  428 => 150,  419 => 146,  414 => 144,  407 => 141,  403 => 140,  398 => 137,  381 => 134,  378 => 133,  374 => 132,  370 => 131,  365 => 129,  362 => 128,  356 => 126,  350 => 124,  348 => 123,  345 => 122,  341 => 121,  331 => 114,  327 => 113,  323 => 112,  319 => 111,  315 => 110,  305 => 103,  301 => 102,  298 => 101,  292 => 100,  284 => 98,  276 => 96,  273 => 95,  269 => 94,  258 => 88,  252 => 87,  245 => 83,  239 => 79,  236 => 78,  218 => 74,  207 => 72,  201 => 71,  197 => 70,  194 => 69,  189 => 68,  187 => 67,  181 => 64,  177 => 63,  173 => 62,  164 => 58,  160 => 57,  152 => 52,  148 => 51,  141 => 47,  133 => 42,  129 => 40,  121 => 36,  119 => 35,  111 => 29,  100 => 27,  96 => 26,  91 => 24,  81 => 21,  75 => 20,  69 => 19,  63 => 18,  55 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/pavmegamenu/pavmegamenu.twig", "");
    }
}

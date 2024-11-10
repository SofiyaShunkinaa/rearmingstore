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

/* extension/module/pavmegamenu/pavmegamenu_form.twig */
class __TwigTemplate_ed4e57318ca9fc4bad13df09281a2017 extends Template
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
 * @package Pav Megamenu module for Opencart 3.x
 * @version 1.0
 * @author http://www.pavothemes.com
 * @copyright\tCopyright (C) Feb 2013 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
 * @license\t\tGNU General Public License version 2
*******************************************************/
-->
";
        // line 10
        if (array_key_exists("menu", $context)) {
            echo " ";
            $context["module_row"] = "ss";
            // line 11
            echo "
\t";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_id", [], "any", false, false, false, 12) > 0)) {
                // line 13
                echo "\t\t<h3>";
                echo twig_sprintf(($context["text_edit_menu"] ?? null), twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "title", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_id", [], "any", false, false, false, 13));
                echo "</h3>
\t";
            } else {
                // line 15
                echo "\t\t<h3>";
                echo ($context["text_create_new"] ?? null);
                echo "</h3>
\t";
            }
            // line 17
            echo "
\t<h4>";
            // line 18
            echo ($context["entry_menu_information"] ?? null);
            echo "</h4>

\t<ul class=\"nav nav-tabs\" id=\"language-";
            // line 20
            echo ($context["module_row"] ?? null);
            echo "\">
\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 22
                echo "\t\t<li>
\t\t\t<a href=\"#tab-language-";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 23);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 23);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 23);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 23);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 23);
                echo "</a></li>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t</ul>
\t
\t<div class=\"tab-content\">
\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 30
                echo "\t\t<div class=\"tab-pane\" id=\"tab-language-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 30);
                echo "\">
\t\t\t<table class=\"table no-border\">
\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 33
                echo ($context["entry_menu_title"] ?? null);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input class=\"form-control\" name=\"megamenu_description[";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35);
                echo "][title]\" value=\"";
                echo (((($__internal_compile_0 = ($context["menu_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["menu_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35)] ?? null) : null), "title", [], "any", false, false, false, 35)) : (""));
                echo "\"/>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 39
                echo ($context["entry_description"] ?? null);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"megamenu_description[";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41);
                echo "][description]\" value=\"\">";
                echo (((($__internal_compile_2 = ($context["menu_description"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["menu_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41)] ?? null) : null), "description", [], "any", false, false, false, 41)) : (""));
                echo "</textarea>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t</div>

\t<h4>";
            // line 49
            echo ($context["entry_menu_type"] ?? null);
            echo "</h4>
\t<input type=\"hidden\" name=\"megamenu[item]\" value=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "item", [], "any", false, false, false, 50);
            echo "\" />
\t<table class=\"table\">
\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 53
            echo ($context["entry_publish"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[published]\" >
\t\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["yesno"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 57
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "published", [], "any", false, false, false, 57))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t</select>
 \t\t\t</td>
\t\t</tr>
\t\t<tr class=\"bg-warning\">
\t\t\t<td class=\"col-sm-3\">";
            // line 63
            echo ($context["entry_type"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\"> 
\t\t\t\t<select class=\"form-control\" name=\"megamenu[type]\" id=\"megamenutype\">
\t\t\t\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["megamenutypes"] ?? null));
            foreach ($context['_seq'] as $context["mt"] => $context["val"]) {
                echo " 
\t\t\t\t\t<option value=\"";
                // line 67
                echo $context["mt"];
                echo "\" ";
                if (($context["mt"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "type", [], "any", false, false, false, 67))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mt'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t</select>
 \t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-url\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 73
            echo ($context["entry_url"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[url]\" value=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "url", [], "any", false, false, false, 75);
            echo "\" size=\"50\"/>
\t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-category\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 79
            echo ($context["entry_category"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"path\" value=\"";
            // line 81
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_category", [], "any", false, false, false, 81);
            echo "\" size=\"100\" />
                <i>";
            // line 82
            echo ($context["text_explain_input_auto"] ?? null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-product\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 86
            echo ($context["entry_product"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu_product\" value=\"";
            // line 88
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_product", [], "any", false, false, false, 88);
            echo "\" size=\"50\"/>
\t\t\t\t<i>";
            // line 89
            echo ($context["text_explain_input_auto"] ?? null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-manufacturer\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 93
            echo ($context["entry_manufacturer"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu_manufacturer\" value=\"";
            // line 95
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_manufacturer", [], "any", false, false, false, 95);
            echo "\" size=\"50\"/>
\t\t\t\t<i>";
            // line 96
            echo ($context["text_explain_input_auto"] ?? null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-information\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 100
            echo ($context["entry_information"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t
\t\t\t\t<select class=\"form-control\" type=\"text\" name=\"megamenu_information\" id=\"megamenu_information\">
\t\t\t\t\t";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 105
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["info"], "information_id", [], "any", false, false, false, 105);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_information", [], "any", false, false, false, 105) == twig_get_attribute($this->env, $this->source, $context["info"], "information_id", [], "any", false, false, false, 105))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["info"], "title", [], "any", false, false, false, 105);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t</select>
\t\t\t\t
\t\t\t</td>
\t\t</tr>

\t
\t\t<tr id=\"megamenutype-html\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 114
            echo ($context["entry_html"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<textarea type=\"text\" name=\"megamenu[content_text]\" class=\"form-control \" id=\"content_text\" size=\"50\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "content_text", [], "any", false, false, false, 116);
            echo "</textarea>
\t\t\t\t<i>";
            // line 117
            echo ($context["text_explain_input_html"] ?? null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t</table>

\t<h4>";
            // line 122
            echo ($context["entry_menu_param"] ?? null);
            echo "</h4>\t  
\t<table class=\"table\">
\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 125
            echo ($context["entry_parent_id"] ?? null);
            echo "</td>
\t\t\t\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t";
            // line 128
            echo ($context["menus"] ?? null);
            echo "
 \t\t\t</td>
\t\t</tr>
\t \t<tr>
\t\t\t<td class=\"col-sm-2 control-label\">";
            // line 132
            echo ($context["entry_image"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-10\">
\t\t\t\t<a href=\"\" id=\"thumb-img\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t<img src=\"";
            // line 135
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
\t\t\t\t</a>
\t\t\t\t<input type=\"hidden\" name=\"megamenu[image]\" value=\"";
            // line 137
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "image", [], "any", false, false, false, 137);
            echo "\" id=\"input-icon-menu\" />
\t\t\t</td>
        </tr>
\t \t<tr>
\t\t\t<td class=\"col-sm-2 control-label\">";
            // line 141
            echo ($context["entry_icon"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"verticalmenu[icon]\" value=\"";
            // line 143
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "icon", [], "any", false, false, false, 143);
            echo "\"/>
\t\t\t\t<i>";
            // line 144
            echo ($context["text_explain_input_icon"] ?? null);
            echo "</i>
\t\t\t</td>
        </tr>
\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 148
            echo ($context["entry_menuclass"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[menu_class]\" value=\"";
            // line 150
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "menu_class", [], "any", false, false, false, 150);
            echo "\"/>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 155
            echo ($context["entry_badges"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[badges]\" value=\"";
            // line 157
            echo ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "badges", [], "any", false, false, false, 157)) ? (twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "badges", [], "any", false, false, false, 157)) : (""));
            echo "\"/>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 162
            echo ($context["entry_showtitle"] ?? null);
            echo "</td>
\t\t\t\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[show_title]\" >
\t\t\t\t\t";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["yesno"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 167
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "show_title", [], "any", false, false, false, 167))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "\t\t\t\t</select>
 \t\t\t</td>
\t\t</tr>
\t\t<tr class=\"hide\">
\t\t\t<td class=\"col-sm-3\">";
            // line 173
            echo ($context["entry_isgroup"] ?? null);
            echo "</td>
\t\t\t\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[is_group]\" value=\"\">
\t\t\t\t\t";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["yesno"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 178
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "is_group", [], "any", false, false, false, 178))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t\t\t</select>
\t\t\t\t<i>";
            // line 181
            echo ($context["text_explain_group"] ?? null);
            echo "</i>
 \t\t\t</td>
\t\t</tr>
\t\t<tr style=\"display:none\">
\t\t\t<td class=\"col-sm-3\">";
            // line 185
            echo ($context["entry_iscontent"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[is_content]\">
\t\t\t\t\t";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["yesno"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 189
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "is_content", [], "any", false, false, false, 189))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "\t\t\t\t</select>
 \t\t\t</td>
\t\t</tr>
\t\t
\t\t
\t\t
\t\t<tr class=\"alert alert-danger\">
\t\t\t<td class=\"col-sm-3\">";
            // line 198
            echo ($context["entry_sub_menutype"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" name=\"megamenu[type_submenu]\" id=\"megamenu-type_submenu\">
\t\t\t\t\t";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["submenutypes"] ?? null));
            foreach ($context['_seq'] as $context["stype"] => $context["text"]) {
                // line 202
                echo "\t\t\t\t\t<option value=\"";
                echo $context["stype"];
                echo "\" ";
                if (($context["stype"] == twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "type_submenu", [], "any", false, false, false, 202))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["text"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['stype'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "\t\t\t\t</select>
\t\t\t\t<i>";
            // line 205
            echo ($context["text_explain_submenu_type"] ?? null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t\t<tr class=\"type_submenu\" id=\"type_submenu-html\" style=\"display:none;\">
\t\t\t<td class=\"col-sm-3\">";
            // line 209
            echo ($context["entry_submenu_content"] ?? null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<textarea name=\"megamenu[submenu_content]\" id=\"submenu_content\">";
            // line 211
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "submenu_content", [], "any", false, false, false, 211);
            echo "</textarea>
\t\t\t
\t\t\t</td>
\t\t<tr>
 \t\t";
            // line 215
            if (($context["blockbuilders"] ?? null)) {
                // line 216
                echo "\t\t<tr id=\"type_submenu-blkbuilder\" class=\"type_submenu\" style=\"display: none\">
\t\t\t<td class=\"col-sm-3\">";
                // line 217
                echo ($context["entry_blockbuilder"] ?? null);
                echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t
\t\t\t\t<select class=\"form-control\" name=\"megamenu[widget_id]\">
\t\t\t\t\t";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blockbuilders"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["blockbuilder"]) {
                    // line 222
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blockbuilder"], "module_id", [], "any", false, false, false, 222);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "widget_id", [], "any", false, false, false, 222) == twig_get_attribute($this->env, $this->source, $context["blockbuilder"], "module_id", [], "any", false, false, false, 222))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["blockbuilder"], "name", [], "any", false, false, false, 222);
                    echo "</option>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockbuilder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "\t\t\t\t</select>
\t\t\t\t<a href=\"#\" class=\"edit-blockbuilder\" data-href=\"";
                // line 225
                echo ($context["blockbuilder_edit_url"] ?? null);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t</td>
\t\t</tr>
\t \t";
            }
            // line 229
            echo "\t \t<tr>
\t\t\t<td class=\"col-sm-3\">
\t\t\t\t";
            // line 231
            echo ($context["entry_submenu_width"] ?? null);
            echo "
\t\t\t</td>\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[submenu_width]\" value=\"";
            // line 234
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "submenu_width", [], "any", false, false, false, 234);
            echo "\"/>
\t\t\t\t<i>";
            // line 235
            echo ($context["entry_submenu_width_explain"] ?? null);
            echo "</i>
 \t\t\t</td>
\t\t</tr>

\t\t<tr>

\t\t\t<td class=\"col-sm-3\">
\t\t\t\t";
            // line 242
            echo ($context["entry_submenu_alignment"] ?? null);
            echo "
\t\t\t</td>\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" name=\"megamenu[width]\">
\t\t\t\t\t";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["width_aligns"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["align"]) {
                // line 247
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "width", [], "any", false, false, false, 247) == $context["key"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["align"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['align'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "\t\t\t\t</select>
\t\t\t\t<i>";
            // line 250
            echo ($context["entry_submenu_alignment_explain"] ?? null);
            echo "</i>
 \t\t\t</td>
\t\t</tr>

\t</table>
\t<input type=\"hidden\" name=\"megamenu[megamenu_id]\" value=\"";
            // line 255
            echo twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "megamenu_id", [], "any", false, false, false, 255);
            echo "\"/>
</div>
";
        }
        // line 258
        echo "
<script type=\"text/javascript\"> 

\$('.edit-blockbuilder').click( function(){ 
\tvar id = \$(this).parent().find('select' ).val(); 
\tvar url = \$(this).data('href').replace('MODULE_ID', id );
   \twindow.open(url , '_blank');
\treturn false;
});\t
\$(\"#type_submenu-\"+\$(\"#megamenu-type_submenu\").val()).show();
\$(\"#megamenu-type_submenu\").change( function(){
\t\$(\".type_submenu\").hide();
\t\$(\"#type_submenu-\"+\$(this).val()).show();
} );


\$('#submenu_content').summernote({
\theight: 300
});

\$('#content_text').summernote({
\theight: 300
});


\$('#language-";
        // line 283
        echo ($context["module_row"] ?? null);
        echo " li:first-child a').tab('show');


\$(\".megamenutype\").hide();
\$(\"#megamenutype-\"+ \$(\"#megamenutype\").val()).show();
\$(\"#megamenutype\").change( function(){
\t\$(\".megamenutype\").hide();
\t\$(\"#megamenutype-\"+\$(this).val()).show();
} );

   

\$('input[name=\\'megamenu_manufacturer\\']').autocomplete({
\tdelay: 500,
\tsource: function(request, response) {\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 299
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\t'manufacturer_id':  0,
\t\t\t\t\t'name':  '";
        // line 304
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});
\t\t\t\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.manufacturer_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(event, ui) {
\t\t\$('input[name=\\'megamenu_manufacturer\\']').val(ui.item.label);
\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});

\$(\"#megamenu-blockbuilder\").change( function(){ 
\t\$('input[name=\\'megamenu[item]\\']').val(\$(this).val());
} );

\$(\"#megamenu_information\").change( function(){ 
\t\$('input[name=\\'megamenu[item]\\']').val(\$(this).val());
} );

\$('input[name=\\'megamenu_product\\']').autocomplete({
\tdelay: 500,
\tsource: function(request, response) {\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 339
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\t'product_id':  0,
\t\t\t\t\t'name':  '";
        // line 344
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});
\t\t\t\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.product_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(event, ui) {
\t\t\$('input[name=\\'megamenu_product\\']').val(ui.item.label);
\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});

\$('input[name=\\'path\\']').autocomplete({
\tdelay: 500,
\tsource: function(request, response) {\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 371
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\t'category_id':  0,
\t\t\t\t\t'name':  '";
        // line 376
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});
\t\t\t\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.category_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(event, ui) {
\t\t\$('input[name=\\'path\\']').val(ui.item.label);
\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/pavmegamenu/pavmegamenu_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 376,  819 => 371,  789 => 344,  781 => 339,  743 => 304,  735 => 299,  716 => 283,  689 => 258,  683 => 255,  675 => 250,  672 => 249,  657 => 247,  653 => 246,  646 => 242,  636 => 235,  632 => 234,  626 => 231,  622 => 229,  615 => 225,  612 => 224,  597 => 222,  593 => 221,  586 => 217,  583 => 216,  581 => 215,  574 => 211,  569 => 209,  562 => 205,  559 => 204,  544 => 202,  540 => 201,  534 => 198,  525 => 191,  510 => 189,  506 => 188,  500 => 185,  493 => 181,  490 => 180,  475 => 178,  471 => 177,  464 => 173,  458 => 169,  443 => 167,  439 => 166,  432 => 162,  424 => 157,  419 => 155,  411 => 150,  406 => 148,  399 => 144,  395 => 143,  390 => 141,  383 => 137,  368 => 135,  362 => 132,  355 => 128,  349 => 125,  343 => 122,  335 => 117,  331 => 116,  326 => 114,  317 => 107,  302 => 105,  298 => 104,  291 => 100,  284 => 96,  280 => 95,  275 => 93,  268 => 89,  264 => 88,  259 => 86,  252 => 82,  248 => 81,  243 => 79,  236 => 75,  231 => 73,  225 => 69,  211 => 67,  205 => 66,  199 => 63,  193 => 59,  178 => 57,  174 => 56,  168 => 53,  162 => 50,  158 => 49,  154 => 47,  140 => 41,  135 => 39,  126 => 35,  121 => 33,  114 => 30,  110 => 29,  105 => 26,  88 => 23,  85 => 22,  81 => 21,  77 => 20,  72 => 18,  69 => 17,  63 => 15,  57 => 13,  55 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/pavmegamenu/pavmegamenu_form.twig", "");
    }
}

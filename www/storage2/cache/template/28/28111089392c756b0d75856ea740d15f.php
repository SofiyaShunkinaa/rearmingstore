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

/* setting/setting.twig */
class __TwigTemplate_5a7c4dabe7a18f5a24897767f93e0c74 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_server"] ?? null);
        echo "</a></li>

      <li><a href=\"#W3creators_custom_codes\" data-toggle=\"tab\">Custom Codes</a></li>
      
          </ul>
          <div class=\"tab-content\">

        <div class=\"tab-pane\" id=\"W3creators_custom_codes\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"w3creators_custom_css\">
              <span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Write only css codes except style tag.\">Custom Css</span>
            </label>
            <div class=\"col-sm-10\">
              <textarea name=\"config_w3creators_custom_css\" id=\"w3creators_custom_css\"  class=\"form-control\" style=\"height: 300px;\">";
        // line 53
        echo ($context["config_w3creators_custom_css"] ?? null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"w3creators_custom_js\">
              <span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Write only Javascript codes except script tag.\">Custom JS</span>
            </label>
            <div class=\"col-sm-10\">
              <textarea name=\"config_w3creators_custom_js\" id=\"w3creators_custom_js\" class=\"form-control\" style=\"height: 300px;\">";
        // line 61
        echo ($context["config_w3creators_custom_js"] ?? null);
        echo "</textarea>
            </div>
          </div>
           <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"w3creators_custom_head\">
              <span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Write your custom codes inside HEAD tag.\">Custom HEAD</span>
            </label>
            <div class=\"col-sm-10\">
              <textarea name=\"config_w3creators_custom_head\" id=\"w3creators_custom_head\" class=\"form-control\" style=\"height: 300px;\">";
        // line 69
        echo ($context["config_w3creators_custom_head"] ?? null);
        echo "</textarea>
            </div>
          </div>
        </div>
      
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 76
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 78
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  ";
        // line 79
        if (($context["error_meta_title"] ?? null)) {
            // line 80
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 82
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 85
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 87
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 91
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 93
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 97
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 101
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 101) == ($context["config_theme"] ?? null))) {
                // line 102
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 102);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 102);
                echo "</option>
                      ";
            } else {
                // line 104
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 104);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 104);
                echo "</option>
                      ";
            }
            // line 106
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 112
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 116
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 116) == ($context["config_layout_id"] ?? null))) {
                // line 117
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 117);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 117);
                echo "</option>
                      ";
            } else {
                // line 119
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 119);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 119);
                echo "</option>
                      ";
            }
            // line 121
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 128
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 130
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  ";
        // line 131
        if (($context["error_name"] ?? null)) {
            // line 132
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 134
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 137
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 139
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  ";
        // line 140
        if (($context["error_owner"] ?? null)) {
            // line 141
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 143
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 146
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 148
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 149
        if (($context["error_address"] ?? null)) {
            // line 150
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 152
        echo "                </div>
              </div>
\t\t\t  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-f_mail\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"Front email\">Front email</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_f_mail\" value=\"";
        // line 158
        echo ($context["config_f_mail"] ?? null);
        echo "\" placeholder=\"\" id=\"input-f_mail\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-f_phone\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"Front phone\">Front phone</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_f_phone\" value=\"";
        // line 165
        echo ($context["config_f_phone"] ?? null);
        echo "\" placeholder=\"\" id=\"input-f_phone\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-f_tg\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"Front phone\">Front TG</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_f_tg\" value=\"";
        // line 172
        echo ($context["config_f_tg"] ?? null);
        echo "\" placeholder=\"\" id=\"input-f_tg\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-f_inst\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"Front phone\">Front Instagramm</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_f_inst\" value=\"";
        // line 179
        echo ($context["config_f_inst"] ?? null);
        echo "\" placeholder=\"\" id=\"input-f_inst\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
\t\t\t  
\t\t\t  
\t\t\t  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 187
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 189
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 193
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 195
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  ";
        // line 196
        if (($context["error_email"] ?? null)) {
            // line 197
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 199
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 202
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 204
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  ";
        // line 205
        if (($context["error_telephone"] ?? null)) {
            // line 206
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 208
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 211
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 213
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 217
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 219
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 220
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 224
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 226
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 230
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 232
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 235
        if (($context["locations"] ?? null)) {
            // line 236
            echo "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 237
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 240
                echo "                      <div class=\"checkbox\">
                        <label>
                          ";
                // line 242
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 242), ($context["config_location"] ?? null))) {
                    // line 243
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 243);
                    echo "\" checked=\"checked\"/>
                            ";
                    // line 244
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 244);
                    echo "
                          ";
                } else {
                    // line 246
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 246);
                    echo "\"/>
                            ";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 247);
                    echo "
                          ";
                }
                // line 249
                echo "                        </label>
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                  </div>
                </div>
              ";
        }
        // line 255
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 258
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 262
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 262) == ($context["config_country_id"] ?? null))) {
                // line 263
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 263);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 263);
                echo "</option>
                      ";
            } else {
                // line 265
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 265);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 265);
                echo "</option>
                      ";
            }
            // line 267
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 272
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 279
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 283
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 283) == ($context["config_timezone"] ?? null))) {
                // line 284
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 284);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 284);
                echo "</option>
                      ";
            } else {
                // line 286
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 286);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 286);
                echo "</option>
                      ";
            }
            // line 288
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 293
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 297
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 297) == ($context["config_language"] ?? null))) {
                // line 298
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 298);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 298);
                echo "</option>
                      ";
            } else {
                // line 300
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 300);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 300);
                echo "</option>
                      ";
            }
            // line 302
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 307
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    ";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 311
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 311) == ($context["config_admin_language"] ?? null))) {
                // line 312
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 312);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 312);
                echo "</option>
                      ";
            } else {
                // line 314
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 314);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 314);
                echo "</option>
                      ";
            }
            // line 316
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 321
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 325
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 325) == ($context["config_currency"] ?? null))) {
                // line 326
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 326);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 326);
                echo "</option>
                      ";
            } else {
                // line 328
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 328);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 328);
                echo "</option>
                      ";
            }
            // line 330
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 335
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    <option value=\"0\">";
        // line 338
        echo ($context["text_none"] ?? null);
        echo "</option>
                    ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 340
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 340) == ($context["config_currency_engine"] ?? null))) {
                // line 341
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 341);
                echo "\" selected>";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 341);
                echo "</option>
                      ";
            } else {
                // line 343
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 343);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 343);
                echo "</option>
                      ";
            }
            // line 345
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 350
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 353
        if (($context["config_currency_auto"] ?? null)) {
            // line 354
            echo "                      <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 355
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 357
            echo "                      <input type=\"radio\" name=\"config_currency_auto\" value=\"1\"/>
                      ";
            // line 358
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 360
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 362
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 363
            echo "                      <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 364
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 366
            echo "                      <input type=\"radio\" name=\"config_currency_auto\" value=\"0\"/>
                      ";
            // line 367
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 369
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 373
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    ";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 377
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 377) == ($context["config_length_class_id"] ?? null))) {
                // line 378
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 378);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 378);
                echo "</option>
                      ";
            } else {
                // line 380
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 380);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 380);
                echo "</option>
                      ";
            }
            // line 382
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 387
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 391
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 391) == ($context["config_weight_class_id"] ?? null))) {
                // line 392
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 392);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 392);
                echo "</option>
                      ";
            } else {
                // line 394
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 394);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 394);
                echo "</option>
                      ";
            }
            // line 396
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 403
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 405
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 408
        if (($context["config_product_count"] ?? null)) {
            // line 409
            echo "                        <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 410
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 412
            echo "                        <input type=\"radio\" name=\"config_product_count\" value=\"1\"/>
                        ";
            // line 413
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 415
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 417
        if ( !($context["config_product_count"] ?? null)) {
            // line 418
            echo "                        <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 419
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 421
            echo "                        <input type=\"radio\" name=\"config_product_count\" value=\"0\"/>
                        ";
            // line 422
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 424
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 428
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 430
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\"/>
                    ";
        // line 431
        if (($context["error_limit_admin"] ?? null)) {
            // line 432
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 434
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 438
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 440
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 443
        if (($context["config_review_status"] ?? null)) {
            // line 444
            echo "                        <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 445
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 447
            echo "                        <input type=\"radio\" name=\"config_review_status\" value=\"1\"/>
                        ";
            // line 448
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 450
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 452
        if ( !($context["config_review_status"] ?? null)) {
            // line 453
            echo "                        <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 454
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 456
            echo "                        <input type=\"radio\" name=\"config_review_status\" value=\"0\"/>
                        ";
            // line 457
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 459
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 463
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 466
        if (($context["config_review_guest"] ?? null)) {
            // line 467
            echo "                        <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 468
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 470
            echo "                        <input type=\"radio\" name=\"config_review_guest\" value=\"1\"/>
                        ";
            // line 471
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 473
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 475
        if ( !($context["config_review_guest"] ?? null)) {
            // line 476
            echo "                        <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 477
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 479
            echo "                        <input type=\"radio\" name=\"config_review_guest\" value=\"0\"/>
                        ";
            // line 480
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 482
        echo "                    </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 487
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 489
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 491
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                    ";
        // line 492
        if (($context["error_voucher_min"] ?? null)) {
            // line 493
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 495
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 498
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 500
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                    ";
        // line 501
        if (($context["error_voucher_max"] ?? null)) {
            // line 502
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 504
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 508
        echo ($context["text_legal"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-cookie\"><span data-toggle=\"tooltip\" title=\"";
        // line 510
        echo ($context["help_cookie"] ?? null);
        echo "\">";
        echo ($context["entry_cookie"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-control\"/>
                    <option value=\"0\">";
        // line 513
        echo ($context["text_none"] ?? null);
        echo "</option>
                    ";
        // line 514
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 515
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 515);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 515) == ($context["config_cookie_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 515);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-gdpr\"><span data-toggle=\"tooltip\" title=\"";
        // line 521
        echo ($context["help_gdpr"] ?? null);
        echo "\">";
        echo ($context["entry_gdpr"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-control\"/>
                    <option value=\"0\">";
        // line 524
        echo ($context["text_none"] ?? null);
        echo "</option>
                    ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 526
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 526);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 526) == ($context["config_gdpr_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 526);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 528
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-gdpr-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 532
        echo ($context["help_gdpr_limit"] ?? null);
        echo "\">";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 534
        echo ($context["config_gdpr_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 539
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 541
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 544
        if (($context["config_tax"] ?? null)) {
            // line 545
            echo "                        <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 546
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 548
            echo "                        <input type=\"radio\" name=\"config_tax\" value=\"1\"/>
                        ";
            // line 549
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 551
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 553
        if ( !($context["config_tax"] ?? null)) {
            // line 554
            echo "                        <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 555
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 557
            echo "                        <input type=\"radio\" name=\"config_tax\" value=\"0\"/>
                        ";
            // line 558
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 560
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 564
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 567
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 568
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 569
            echo "                        <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 571
            echo "                        <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      ";
        }
        // line 573
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 574
            echo "                        <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 576
            echo "                        <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      ";
        }
        // line 578
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 582
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 585
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 586
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 587
            echo "                        <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 589
            echo "                        <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      ";
        }
        // line 591
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 592
            echo "                        <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 594
            echo "                        <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      ";
        }
        // line 596
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 601
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 603
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 606
        if (($context["config_customer_online"] ?? null)) {
            // line 607
            echo "                        <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 608
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 610
            echo "                        <input type=\"radio\" name=\"config_customer_online\" value=\"1\"/>
                        ";
            // line 611
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 613
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 615
        if ( !($context["config_customer_online"] ?? null)) {
            // line 616
            echo "                        <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 617
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 619
            echo "                        <input type=\"radio\" name=\"config_customer_online\" value=\"0\"/>
                        ";
            // line 620
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 622
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 626
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 629
        if (($context["config_customer_activity"] ?? null)) {
            // line 630
            echo "                        <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 631
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 633
            echo "                        <input type=\"radio\" name=\"config_customer_activity\" value=\"1\"/>
                        ";
            // line 634
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 636
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 638
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 639
            echo "                        <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 640
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 642
            echo "                        <input type=\"radio\" name=\"config_customer_activity\" value=\"0\"/>
                        ";
            // line 643
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 645
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 649
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 652
        if (($context["config_customer_search"] ?? null)) {
            // line 653
            echo "                        <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 654
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 656
            echo "                        <input type=\"radio\" name=\"config_customer_search\" value=\"1\"/>
                        ";
            // line 657
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 659
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 661
        if ( !($context["config_customer_search"] ?? null)) {
            // line 662
            echo "                        <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 663
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 665
            echo "                        <input type=\"radio\" name=\"config_customer_search\" value=\"0\"/>
                        ";
            // line 666
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 668
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 672
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 676
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 676) == ($context["config_customer_group_id"] ?? null))) {
                // line 677
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 677);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 677);
                echo "</option>
                        ";
            } else {
                // line 679
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 679);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 679);
                echo "</option>
                        ";
            }
            // line 681
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 682
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 686
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    ";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 689
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 691
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 691), ($context["config_customer_group_display"] ?? null))) {
                // line 692
                echo "                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 692);
                echo "\" checked=\"checked\"/>
                            ";
                // line 693
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 693);
                echo "
                          ";
            } else {
                // line 695
                echo "                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 695);
                echo "\"/>
                            ";
                // line 696
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 696);
                echo "
                          ";
            }
            // line 698
            echo "                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 701
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 702
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 704
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 707
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 710
        if (($context["config_customer_price"] ?? null)) {
            // line 711
            echo "                        <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 712
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 714
            echo "                        <input type=\"radio\" name=\"config_customer_price\" value=\"1\"/>
                        ";
            // line 715
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 717
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 719
        if ( !($context["config_customer_price"] ?? null)) {
            // line 720
            echo "                        <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 721
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 723
            echo "                        <input type=\"radio\" name=\"config_customer_price\" value=\"0\"/>
                        ";
            // line 724
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 726
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-telephone-display\"><span data-toggle=\"tooltip\" title=\"";
        // line 730
        echo ($context["help_telephone_display"] ?? null);
        echo "\">";
        echo ($context["entry_telephone_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 734
        if (($context["config_telephone_display"] ?? null)) {
            // line 735
            echo "                          <input type=\"checkbox\" name=\"config_telephone_display\" value=\"1\" checked=\"checked\" id=\"input-telephone-display\"/>
                        ";
        } else {
            // line 737
            echo "                          <input type=\"checkbox\" name=\"config_telephone_display\" value=\"1\" id=\"input-telephone-display\"/>
                        ";
        }
        // line 739
        echo "                        &nbsp;
                      </label>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-telephone-required\"><span data-toggle=\"tooltip\" title=\"";
        // line 745
        echo ($context["help_telephone_required"] ?? null);
        echo "\">";
        echo ($context["entry_telephone_required"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 749
        if (($context["config_telephone_required"] ?? null)) {
            // line 750
            echo "                          <input type=\"checkbox\" name=\"config_telephone_required\" value=\"1\" checked=\"checked\" id=\"input-telephone-required\"/>
                        ";
        } else {
            // line 752
            echo "                          <input type=\"checkbox\" name=\"config_telephone_required\" value=\"1\" id=\"input-telephone-required\"/>
                        ";
        }
        // line 754
        echo "                        &nbsp;
                      </label>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 760
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 762
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                    ";
        // line 763
        if (($context["error_login_attempts"] ?? null)) {
            // line 764
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 766
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 769
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 772
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 773
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 774
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 774) == ($context["config_account_id"] ?? null))) {
                // line 775
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 775);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 775);
                echo "</option>
                        ";
            } else {
                // line 777
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 777);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 777);
                echo "</option>
                        ";
            }
            // line 779
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 780
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 785
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 787
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 789
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 793
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 796
        if (($context["config_cart_weight"] ?? null)) {
            // line 797
            echo "                        <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 798
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 800
            echo "                        <input type=\"radio\" name=\"config_cart_weight\" value=\"1\"/>
                        ";
            // line 801
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 803
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 805
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 806
            echo "                        <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 807
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 809
            echo "                        <input type=\"radio\" name=\"config_cart_weight\" value=\"0\"/>
                        ";
            // line 810
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 812
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 816
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 819
        if (($context["config_checkout_guest"] ?? null)) {
            // line 820
            echo "                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 821
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 823
            echo "                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\"/>
                        ";
            // line 824
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 826
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 828
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 829
            echo "                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 830
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 832
            echo "                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\"/>
                        ";
            // line 833
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 835
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 839
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 842
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 843
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 844
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 844) == ($context["config_checkout_id"] ?? null))) {
                // line 845
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 845);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 845);
                echo "</option>
                        ";
            } else {
                // line 847
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 847);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 847);
                echo "</option>
                        ";
            }
            // line 849
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 850
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 854
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 857
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 858
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 858) == ($context["config_order_status_id"] ?? null))) {
                // line 859
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 859);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 859);
                echo "</option>
                        ";
            } else {
                // line 861
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 861);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 861);
                echo "</option>
                        ";
            }
            // line 863
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 864
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 868
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 872
            echo "                        <div class=\"checkbox\">
                          <label>
                            ";
            // line 874
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 874), ($context["config_processing_status"] ?? null))) {
                // line 875
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 875);
                echo "\" checked=\"checked\"/>
                              ";
                // line 876
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 876);
                echo "
                            ";
            } else {
                // line 878
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 878);
                echo "\"/>
                              ";
                // line 879
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 879);
                echo "
                            ";
            }
            // line 881
            echo "                          </label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        echo "                    </div>
                    ";
        // line 885
        if (($context["error_processing_status"] ?? null)) {
            // line 886
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 888
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 891
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 894
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 895
            echo "                        <div class=\"checkbox\">
                          <label>
                            ";
            // line 897
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 897), ($context["config_complete_status"] ?? null))) {
                // line 898
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 898);
                echo "\" checked=\"checked\"/>
                              ";
                // line 899
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 899);
                echo "
                            ";
            } else {
                // line 901
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 901);
                echo "\"/>
                              ";
                // line 902
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 902);
                echo "
                            ";
            }
            // line 904
            echo "                          </label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 907
        echo "                    </div>
                    ";
        // line 908
        if (($context["error_complete_status"] ?? null)) {
            // line 909
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 911
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 914
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 918
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 918) == ($context["config_fraud_status_id"] ?? null))) {
                // line 919
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 919);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 919);
                echo "</option>
                        ";
            } else {
                // line 921
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 921);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 921);
                echo "</option>
                        ";
            }
            // line 923
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 924
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 928
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 931
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 932
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 933
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 933) == ($context["config_api_id"] ?? null))) {
                // line 934
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 934);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 934);
                echo "</option>
                        ";
            } else {
                // line 936
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 936);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 936);
                echo "</option>
                        ";
            }
            // line 938
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 939
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 944
        echo ($context["text_subscription"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-information-subscription\"><span data-toggle=\"tooltip\" title=\"";
        // line 946
        echo ($context["help_information_subscription"] ?? null);
        echo "\">";
        echo ($context["entry_information_subscription"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_information_subscription_id\" id=\"input-information-subscription\" class=\"form-control\">
                      <option value=\"0\">";
        // line 949
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 950
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 951
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 951) == ($context["config_information_subscription_id"] ?? null))) {
                // line 952
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 952);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 952);
                echo "</option>
                        ";
            } else {
                // line 954
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 954);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 954);
                echo "</option>
                        ";
            }
            // line 956
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 957
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-subscription-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 961
        echo ($context["help_subscription"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-control\">
                      ";
        // line 964
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 965
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 965) == ($context["config_subscription_status_id"] ?? null))) {
                // line 966
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 966);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 966);
                echo "</option>
                        ";
            } else {
                // line 968
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 968);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 968);
                echo "</option>
                        ";
            }
            // line 970
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 971
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-subscription-active-status\">";
        // line 975
        echo ($context["entry_subscription_active_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-control\">
                      ";
        // line 978
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 979
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 979) == ($context["config_subscription_active_status_id"] ?? null))) {
                // line 980
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 980);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 980);
                echo "</option>
                        ";
            } else {
                // line 982
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 982);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 982);
                echo "</option>
                        ";
            }
            // line 984
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 985
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-subscription-expired-status\">";
        // line 989
        echo ($context["entry_subscription_expired_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-control\">
                      ";
        // line 992
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 993
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 993) == ($context["config_subscription_expired_status_id"] ?? null))) {
                // line 994
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 994);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 994);
                echo "</option>
                        ";
            } else {
                // line 996
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 996);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 996);
                echo "</option>
                        ";
            }
            // line 998
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 999
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-subscription-canceled-status\">";
        // line 1003
        echo ($context["entry_subscription_canceled_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-control\">
                      ";
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 1007
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1007) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                // line 1008
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1008);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 1008);
                echo "</option>
                        ";
            } else {
                // line 1010
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1010);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 1010);
                echo "</option>
                        ";
            }
            // line 1012
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1013
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-subscription-failed-status\">";
        // line 1017
        echo ($context["entry_subscription_failed_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-control\">
                      ";
        // line 1020
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 1021
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1021) == ($context["config_subscription_failed_status_id"] ?? null))) {
                // line 1022
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1022);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 1022);
                echo "</option>
                        ";
            } else {
                // line 1024
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1024);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 1024);
                echo "</option>
                        ";
            }
            // line 1026
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1027
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-subscription-denied-status\">";
        // line 1031
        echo ($context["entry_subscription_denied_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-control\">
                      ";
        // line 1034
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 1035
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1035) == ($context["config_subscription_denied_status_id"] ?? null))) {
                // line 1036
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1036);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 1036);
                echo "</option>
                        ";
            } else {
                // line 1038
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 1038);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 1038);
                echo "</option>
                        ";
            }
            // line 1040
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1041
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1046
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1048
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1051
        if (($context["config_stock_display"] ?? null)) {
            // line 1052
            echo "                        <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1053
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1055
            echo "                        <input type=\"radio\" name=\"config_stock_display\" value=\"1\"/>
                        ";
            // line 1056
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1058
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1060
        if ( !($context["config_stock_display"] ?? null)) {
            // line 1061
            echo "                        <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1062
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1064
            echo "                        <input type=\"radio\" name=\"config_stock_display\" value=\"0\"/>
                        ";
            // line 1065
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1067
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1071
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1074
        if (($context["config_stock_warning"] ?? null)) {
            // line 1075
            echo "                        <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1076
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1078
            echo "                        <input type=\"radio\" name=\"config_stock_warning\" value=\"1\"/>
                        ";
            // line 1079
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1081
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1083
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 1084
            echo "                        <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1085
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1087
            echo "                        <input type=\"radio\" name=\"config_stock_warning\" value=\"0\"/>
                        ";
            // line 1088
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1090
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1094
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1097
        if (($context["config_stock_checkout"] ?? null)) {
            // line 1098
            echo "                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1099
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1101
            echo "                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\"/>
                        ";
            // line 1102
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1104
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1106
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 1107
            echo "                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1108
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1110
            echo "                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\"/>
                        ";
            // line 1111
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1113
        echo "                    </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1118
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1120
        echo ($context["entry_affiliate_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1123
        if (($context["config_affiliate_status"] ?? null)) {
            // line 1124
            echo "                        <input type=\"radio\" name=\"config_affiliate_status\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1125
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1127
            echo "                        <input type=\"radio\" name=\"config_affiliate_status\" value=\"1\"/>
                        ";
            // line 1128
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1130
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1132
        if ( !($context["config_affiliate_status"] ?? null)) {
            // line 1133
            echo "                        <input type=\"radio\" name=\"config_affiliate_status\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1134
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1136
            echo "                        <input type=\"radio\" name=\"config_affiliate_status\" value=\"0\"/>
                        ";
            // line 1137
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1139
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-expire\"><span data-toggle=\"tooltip\" title=\"";
        // line 1143
        echo ($context["help_affiliate_expire"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_expire"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_expire\" value=\"";
        // line 1145
        echo ($context["config_affiliate_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_expire"] ?? null);
        echo "\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 1149
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      ";
        // line 1152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1153
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1153) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 1154
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1154);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1154);
                echo "</option>
                        ";
            } else {
                // line 1156
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1156);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1156);
                echo "</option>
                        ";
            }
            // line 1158
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1159
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1163
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1166
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 1167
            echo "                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1168
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1170
            echo "                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\"/>
                        ";
            // line 1171
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1173
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1175
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 1176
            echo "                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1177
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1179
            echo "                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\"/>
                        ";
            // line 1180
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1182
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1186
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1189
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 1190
            echo "                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1191
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1193
            echo "                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\"/>
                        ";
            // line 1194
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1196
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1198
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 1199
            echo "                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1200
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1202
            echo "                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\"/>
                        ";
            // line 1203
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1205
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 1209
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 1211
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 1215
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1218
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 1219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1220
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1220) == ($context["config_affiliate_id"] ?? null))) {
                // line 1221
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1221);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1221);
                echo "</option>
                        ";
            } else {
                // line 1223
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1223);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1223);
                echo "</option>
                        ";
            }
            // line 1225
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1226
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1231
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1233
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1236
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 1237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1238
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1238) == ($context["config_return_id"] ?? null))) {
                // line 1239
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1239);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1239);
                echo "</option>
                        ";
            } else {
                // line 1241
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1241);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1241);
                echo "</option>
                        ";
            }
            // line 1243
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1244
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1248
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      ";
        // line 1251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1252
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1252) == ($context["config_return_status_id"] ?? null))) {
                // line 1253
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1253);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1253);
                echo "</option>
                        ";
            } else {
                // line 1255
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1255);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1255);
                echo "</option>
                        ";
            }
            // line 1257
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1258
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1263
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1265
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1268
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 1269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1270
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1270) == ($context["config_captcha"] ?? null))) {
                // line 1271
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1271);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1271);
                echo "</option>
                        ";
            } else {
                // line 1273
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1273);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1273);
                echo "</option>
                        ";
            }
            // line 1275
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1276
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1280
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1284
            echo "                        <div class=\"checkbox\">
                          <label>
                            ";
            // line 1286
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1286), ($context["config_captcha_page"] ?? null))) {
                // line 1287
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1287);
                echo "\" checked=\"checked\"/>
                              ";
                // line 1288
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1288);
                echo "
                            ";
            } else {
                // line 1290
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1290);
                echo "\"/>
                              ";
                // line 1291
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1291);
                echo "
                            ";
            }
            // line 1293
            echo "                          </label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1296
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1303
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1305
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1306
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1310
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1312
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1313
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\"/>
                </div>
              </div>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1319
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1321
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      <option value=\"\">";
        // line 1324
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 1325
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1326
            echo "                        <option value=\"mail\" selected=\"selected\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 1328
            echo "                        <option value=\"mail\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      ";
        }
        // line 1330
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1331
            echo "                        <option value=\"smtp\" selected=\"selected\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 1333
            echo "                        <option value=\"smtp\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      ";
        }
        // line 1335
        echo "                    </select>
                    ";
        // line 1336
        if (($context["error_mail_engine"] ?? null)) {
            // line 1337
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_mail_engine"] ?? null);
            echo "</div>
                    ";
        }
        // line 1339
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1342
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1344
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1348
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1350
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1354
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1356
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1360
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1362
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1366
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1368
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1372
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1374
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1379
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1381
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1385
            echo "                        <div class=\"checkbox\">
                          <label>
                            ";
            // line 1387
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1387), ($context["config_mail_alert"] ?? null))) {
                // line 1388
                echo "                              <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1388);
                echo "\" checked=\"checked\"/>
                              ";
                // line 1389
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1389);
                echo "
                            ";
            } else {
                // line 1391
                echo "                              <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1391);
                echo "\"/>
                              ";
                // line 1392
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1392);
                echo "
                            ";
            }
            // line 1394
            echo "                          </label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1397
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1401
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1403
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1410
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1412
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1415
        if (($context["config_maintenance"] ?? null)) {
            // line 1416
            echo "                        <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1417
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1419
            echo "                        <input type=\"radio\" name=\"config_maintenance\" value=\"1\"/>
                        ";
            // line 1420
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1422
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1424
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1425
            echo "                        <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1426
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1428
            echo "                        <input type=\"radio\" name=\"config_maintenance\" value=\"0\"/>
                        ";
            // line 1429
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1431
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1435
        echo ($context["help_session_expire"] ?? null);
        echo "\">";
        echo ($context["entry_session_expire"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"";
        // line 1437
        echo ($context["config_session_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_session_expire"] ?? null);
        echo "\" id=\"input-session-expire\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-samesite\"><span data-toggle=\"tooltip\" title=\"";
        // line 1441
        echo ($context["help_session_samesite"] ?? null);
        echo "\">";
        echo ($context["entry_session_samesite"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_session_samesite\" id=\"input-session-samesite\" class=\"form-control\">
                      <option value=\"None\"";
        // line 1444
        if ((($context["config_session_samesite"] ?? null) == "None")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_none"] ?? null);
        echo "</option>
                      <option value=\"Lax\"";
        // line 1445
        if ((($context["config_session_samesite"] ?? null) == "Lax")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_lax"] ?? null);
        echo "</option>
                      <option value=\"Strict\"";
        // line 1446
        if ((($context["config_session_samesite"] ?? null) == "Strict")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_strict"] ?? null);
        echo "</option>
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1451
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1454
        if (($context["config_seo_url"] ?? null)) {
            // line 1455
            echo "                        <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1456
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1458
            echo "                        <input type=\"radio\" name=\"config_seo_url\" value=\"1\"/>
                        ";
            // line 1459
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1461
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1463
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1464
            echo "                        <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1465
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1467
            echo "                        <input type=\"radio\" name=\"config_seo_url\" value=\"0\"/>
                        ";
            // line 1468
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1470
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1474
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1476
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1480
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1482
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1487
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1489
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1492
        if (($context["config_secure"] ?? null)) {
            // line 1493
            echo "                        <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1494
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1496
            echo "                        <input type=\"radio\" name=\"config_secure\" value=\"1\"/>
                        ";
            // line 1497
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1499
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1501
        if ( !($context["config_secure"] ?? null)) {
            // line 1502
            echo "                        <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1503
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1505
            echo "                        <input type=\"radio\" name=\"config_secure\" value=\"0\"/>
                        ";
            // line 1506
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1508
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1512
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1515
        if (($context["config_password"] ?? null)) {
            // line 1516
            echo "                        <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1517
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1519
            echo "                        <input type=\"radio\" name=\"config_password\" value=\"1\"/>
                        ";
            // line 1520
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1522
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1524
        if ( !($context["config_password"] ?? null)) {
            // line 1525
            echo "                        <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1526
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1528
            echo "                        <input type=\"radio\" name=\"config_password\" value=\"0\"/>
                        ";
            // line 1529
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1531
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1535
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1538
        if (($context["config_shared"] ?? null)) {
            // line 1539
            echo "                        <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1540
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1542
            echo "                        <input type=\"radio\" name=\"config_shared\" value=\"1\"/>
                        ";
            // line 1543
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1545
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1547
        if ( !($context["config_shared"] ?? null)) {
            // line 1548
            echo "                        <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1549
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1551
            echo "                        <input type=\"radio\" name=\"config_shared\" value=\"0\"/>
                        ";
            // line 1552
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1554
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1558
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1560
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1561
        if (($context["error_encryption"] ?? null)) {
            // line 1562
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1564
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1568
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1570
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1572
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1576
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1578
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1582
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1584
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1589
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1591
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1594
        if (($context["config_error_display"] ?? null)) {
            // line 1595
            echo "                        <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1596
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1598
            echo "                        <input type=\"radio\" name=\"config_error_display\" value=\"1\"/>
                        ";
            // line 1599
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1601
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1603
        if ( !($context["config_error_display"] ?? null)) {
            // line 1604
            echo "                        <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1605
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1607
            echo "                        <input type=\"radio\" name=\"config_error_display\" value=\"0\"/>
                        ";
            // line 1608
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1610
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1614
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 1617
        if (($context["config_error_log"] ?? null)) {
            // line 1618
            echo "                        <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1619
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1621
            echo "                        <input type=\"radio\" name=\"config_error_log\" value=\"1\"/>
                        ";
            // line 1622
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1624
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 1626
        if ( !($context["config_error_log"] ?? null)) {
            // line 1627
            echo "                        <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1628
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1630
            echo "                        <input type=\"radio\" name=\"config_error_log\" value=\"0\"/>
                        ";
            // line 1631
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1633
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1637
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1639
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    ";
        // line 1640
        if (($context["error_log"] ?? null)) {
            // line 1641
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1643
        echo "                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'config_theme\\']').on('change', function () {
      \$.ajax({
          url: 'index.php?route=setting/setting/theme&user_token=";
        // line 1655
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
          dataType: 'html',
          beforeSend: function () {
              \$('select[name=\\'config_theme\\']').prop('disabled', true);
          },
          complete: function () {
              \$('select[name=\\'config_theme\\']').prop('disabled', false);
          },
          success: function (html) {
              \$('#theme').attr('src', html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('select[name=\\'config_theme\\']').trigger('change');
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'config_country_id\\']').on('change', function () {
      \$.ajax({
          url: 'index.php?route=localisation/country/country&user_token=";
        // line 1677
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
          dataType: 'json',
          beforeSend: function () {
              \$('select[name=\\'config_country_id\\']').prop('disabled', true);
          },
          complete: function () {
              \$('select[name=\\'config_country_id\\']').prop('disabled', false);
          },
          success: function (json) {
              html = '<option value=\"\">";
        // line 1686
        echo ($context["text_select"] ?? null);
        echo "</option>';

              if (json['zone'] && json['zone'] != '') {
                  for (i = 0; i < json['zone'].length; i++) {
                      html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                      if (json['zone'][i]['zone_id'] == '";
        // line 1692
        echo ($context["config_zone_id"] ?? null);
        echo "') {
                          html += ' selected=\"selected\"';
                      }

                      html += '>' + json['zone'][i]['name'] + '</option>';
                  }
              } else {
                  html += '<option value=\"0\" selected=\"selected\">";
        // line 1699
        echo ($context["text_none"] ?? null);
        echo "</option>';
              }

              \$('select[name=\\'config_zone_id\\']').html(html);

              \$('#button-save').prop('disabled', false);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('select[name=\\'config_country_id\\']').trigger('change');
  //--></script>
</div>
";
        // line 1715
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4307 => 1715,  4288 => 1699,  4278 => 1692,  4269 => 1686,  4257 => 1677,  4232 => 1655,  4218 => 1643,  4212 => 1641,  4210 => 1640,  4204 => 1639,  4199 => 1637,  4193 => 1633,  4188 => 1631,  4185 => 1630,  4180 => 1628,  4177 => 1627,  4175 => 1626,  4171 => 1624,  4166 => 1622,  4163 => 1621,  4158 => 1619,  4155 => 1618,  4153 => 1617,  4147 => 1614,  4141 => 1610,  4136 => 1608,  4133 => 1607,  4128 => 1605,  4125 => 1604,  4123 => 1603,  4119 => 1601,  4114 => 1599,  4111 => 1598,  4106 => 1596,  4103 => 1595,  4101 => 1594,  4095 => 1591,  4090 => 1589,  4080 => 1584,  4073 => 1582,  4064 => 1578,  4057 => 1576,  4048 => 1572,  4041 => 1570,  4036 => 1568,  4030 => 1564,  4024 => 1562,  4022 => 1561,  4016 => 1560,  4009 => 1558,  4003 => 1554,  3998 => 1552,  3995 => 1551,  3990 => 1549,  3987 => 1548,  3985 => 1547,  3981 => 1545,  3976 => 1543,  3973 => 1542,  3968 => 1540,  3965 => 1539,  3963 => 1538,  3955 => 1535,  3949 => 1531,  3944 => 1529,  3941 => 1528,  3936 => 1526,  3933 => 1525,  3931 => 1524,  3927 => 1522,  3922 => 1520,  3919 => 1519,  3914 => 1517,  3911 => 1516,  3909 => 1515,  3901 => 1512,  3895 => 1508,  3890 => 1506,  3887 => 1505,  3882 => 1503,  3879 => 1502,  3877 => 1501,  3873 => 1499,  3868 => 1497,  3865 => 1496,  3860 => 1494,  3857 => 1493,  3855 => 1492,  3847 => 1489,  3842 => 1487,  3832 => 1482,  3825 => 1480,  3816 => 1476,  3809 => 1474,  3803 => 1470,  3798 => 1468,  3795 => 1467,  3790 => 1465,  3787 => 1464,  3785 => 1463,  3781 => 1461,  3776 => 1459,  3773 => 1458,  3768 => 1456,  3765 => 1455,  3763 => 1454,  3755 => 1451,  3743 => 1446,  3735 => 1445,  3727 => 1444,  3719 => 1441,  3710 => 1437,  3703 => 1435,  3697 => 1431,  3692 => 1429,  3689 => 1428,  3684 => 1426,  3681 => 1425,  3679 => 1424,  3675 => 1422,  3670 => 1420,  3667 => 1419,  3662 => 1417,  3659 => 1416,  3657 => 1415,  3649 => 1412,  3644 => 1410,  3632 => 1403,  3625 => 1401,  3619 => 1397,  3611 => 1394,  3606 => 1392,  3601 => 1391,  3596 => 1389,  3591 => 1388,  3589 => 1387,  3585 => 1385,  3581 => 1384,  3573 => 1381,  3568 => 1379,  3558 => 1374,  3553 => 1372,  3544 => 1368,  3539 => 1366,  3530 => 1362,  3523 => 1360,  3514 => 1356,  3509 => 1354,  3500 => 1350,  3493 => 1348,  3484 => 1344,  3477 => 1342,  3472 => 1339,  3466 => 1337,  3464 => 1336,  3461 => 1335,  3455 => 1333,  3449 => 1331,  3446 => 1330,  3440 => 1328,  3434 => 1326,  3432 => 1325,  3428 => 1324,  3420 => 1321,  3415 => 1319,  3406 => 1313,  3400 => 1312,  3393 => 1310,  3386 => 1306,  3380 => 1305,  3375 => 1303,  3366 => 1296,  3358 => 1293,  3353 => 1291,  3348 => 1290,  3343 => 1288,  3338 => 1287,  3336 => 1286,  3332 => 1284,  3328 => 1283,  3322 => 1280,  3316 => 1276,  3310 => 1275,  3302 => 1273,  3294 => 1271,  3291 => 1270,  3287 => 1269,  3283 => 1268,  3275 => 1265,  3270 => 1263,  3263 => 1258,  3257 => 1257,  3249 => 1255,  3241 => 1253,  3238 => 1252,  3234 => 1251,  3226 => 1248,  3220 => 1244,  3214 => 1243,  3206 => 1241,  3198 => 1239,  3195 => 1238,  3191 => 1237,  3187 => 1236,  3179 => 1233,  3174 => 1231,  3167 => 1226,  3161 => 1225,  3153 => 1223,  3145 => 1221,  3142 => 1220,  3138 => 1219,  3134 => 1218,  3126 => 1215,  3117 => 1211,  3110 => 1209,  3104 => 1205,  3099 => 1203,  3096 => 1202,  3091 => 1200,  3088 => 1199,  3086 => 1198,  3082 => 1196,  3077 => 1194,  3074 => 1193,  3069 => 1191,  3066 => 1190,  3064 => 1189,  3056 => 1186,  3050 => 1182,  3045 => 1180,  3042 => 1179,  3037 => 1177,  3034 => 1176,  3032 => 1175,  3028 => 1173,  3023 => 1171,  3020 => 1170,  3015 => 1168,  3012 => 1167,  3010 => 1166,  3002 => 1163,  2996 => 1159,  2990 => 1158,  2982 => 1156,  2974 => 1154,  2971 => 1153,  2967 => 1152,  2961 => 1149,  2952 => 1145,  2945 => 1143,  2939 => 1139,  2934 => 1137,  2931 => 1136,  2926 => 1134,  2923 => 1133,  2921 => 1132,  2917 => 1130,  2912 => 1128,  2909 => 1127,  2904 => 1125,  2901 => 1124,  2899 => 1123,  2893 => 1120,  2888 => 1118,  2881 => 1113,  2876 => 1111,  2873 => 1110,  2868 => 1108,  2865 => 1107,  2863 => 1106,  2859 => 1104,  2854 => 1102,  2851 => 1101,  2846 => 1099,  2843 => 1098,  2841 => 1097,  2833 => 1094,  2827 => 1090,  2822 => 1088,  2819 => 1087,  2814 => 1085,  2811 => 1084,  2809 => 1083,  2805 => 1081,  2800 => 1079,  2797 => 1078,  2792 => 1076,  2789 => 1075,  2787 => 1074,  2779 => 1071,  2773 => 1067,  2768 => 1065,  2765 => 1064,  2760 => 1062,  2757 => 1061,  2755 => 1060,  2751 => 1058,  2746 => 1056,  2743 => 1055,  2738 => 1053,  2735 => 1052,  2733 => 1051,  2725 => 1048,  2720 => 1046,  2713 => 1041,  2707 => 1040,  2699 => 1038,  2691 => 1036,  2688 => 1035,  2684 => 1034,  2678 => 1031,  2672 => 1027,  2666 => 1026,  2658 => 1024,  2650 => 1022,  2647 => 1021,  2643 => 1020,  2637 => 1017,  2631 => 1013,  2625 => 1012,  2617 => 1010,  2609 => 1008,  2606 => 1007,  2602 => 1006,  2596 => 1003,  2590 => 999,  2584 => 998,  2576 => 996,  2568 => 994,  2565 => 993,  2561 => 992,  2555 => 989,  2549 => 985,  2543 => 984,  2535 => 982,  2527 => 980,  2524 => 979,  2520 => 978,  2514 => 975,  2508 => 971,  2502 => 970,  2494 => 968,  2486 => 966,  2483 => 965,  2479 => 964,  2471 => 961,  2465 => 957,  2459 => 956,  2451 => 954,  2443 => 952,  2440 => 951,  2436 => 950,  2432 => 949,  2424 => 946,  2419 => 944,  2412 => 939,  2406 => 938,  2398 => 936,  2390 => 934,  2387 => 933,  2383 => 932,  2379 => 931,  2371 => 928,  2365 => 924,  2359 => 923,  2351 => 921,  2343 => 919,  2340 => 918,  2336 => 917,  2328 => 914,  2323 => 911,  2317 => 909,  2315 => 908,  2312 => 907,  2304 => 904,  2299 => 902,  2294 => 901,  2289 => 899,  2284 => 898,  2282 => 897,  2278 => 895,  2274 => 894,  2266 => 891,  2261 => 888,  2255 => 886,  2253 => 885,  2250 => 884,  2242 => 881,  2237 => 879,  2232 => 878,  2227 => 876,  2222 => 875,  2220 => 874,  2216 => 872,  2212 => 871,  2204 => 868,  2198 => 864,  2192 => 863,  2184 => 861,  2176 => 859,  2173 => 858,  2169 => 857,  2161 => 854,  2155 => 850,  2149 => 849,  2141 => 847,  2133 => 845,  2130 => 844,  2126 => 843,  2122 => 842,  2114 => 839,  2108 => 835,  2103 => 833,  2100 => 832,  2095 => 830,  2092 => 829,  2090 => 828,  2086 => 826,  2081 => 824,  2078 => 823,  2073 => 821,  2070 => 820,  2068 => 819,  2060 => 816,  2054 => 812,  2049 => 810,  2046 => 809,  2041 => 807,  2038 => 806,  2036 => 805,  2032 => 803,  2027 => 801,  2024 => 800,  2019 => 798,  2016 => 797,  2014 => 796,  2006 => 793,  1997 => 789,  1990 => 787,  1985 => 785,  1978 => 780,  1972 => 779,  1964 => 777,  1956 => 775,  1953 => 774,  1949 => 773,  1945 => 772,  1937 => 769,  1932 => 766,  1926 => 764,  1924 => 763,  1918 => 762,  1911 => 760,  1903 => 754,  1899 => 752,  1895 => 750,  1893 => 749,  1884 => 745,  1876 => 739,  1872 => 737,  1868 => 735,  1866 => 734,  1857 => 730,  1851 => 726,  1846 => 724,  1843 => 723,  1838 => 721,  1835 => 720,  1833 => 719,  1829 => 717,  1824 => 715,  1821 => 714,  1816 => 712,  1813 => 711,  1811 => 710,  1803 => 707,  1798 => 704,  1792 => 702,  1789 => 701,  1781 => 698,  1776 => 696,  1771 => 695,  1766 => 693,  1761 => 692,  1759 => 691,  1755 => 689,  1751 => 688,  1744 => 686,  1738 => 682,  1732 => 681,  1724 => 679,  1716 => 677,  1713 => 676,  1709 => 675,  1701 => 672,  1695 => 668,  1690 => 666,  1687 => 665,  1682 => 663,  1679 => 662,  1677 => 661,  1673 => 659,  1668 => 657,  1665 => 656,  1660 => 654,  1657 => 653,  1655 => 652,  1649 => 649,  1643 => 645,  1638 => 643,  1635 => 642,  1630 => 640,  1627 => 639,  1625 => 638,  1621 => 636,  1616 => 634,  1613 => 633,  1608 => 631,  1605 => 630,  1603 => 629,  1595 => 626,  1589 => 622,  1584 => 620,  1581 => 619,  1576 => 617,  1573 => 616,  1571 => 615,  1567 => 613,  1562 => 611,  1559 => 610,  1554 => 608,  1551 => 607,  1549 => 606,  1541 => 603,  1536 => 601,  1529 => 596,  1523 => 594,  1517 => 592,  1514 => 591,  1508 => 589,  1502 => 587,  1500 => 586,  1496 => 585,  1488 => 582,  1482 => 578,  1476 => 576,  1470 => 574,  1467 => 573,  1461 => 571,  1455 => 569,  1453 => 568,  1449 => 567,  1441 => 564,  1435 => 560,  1430 => 558,  1427 => 557,  1422 => 555,  1419 => 554,  1417 => 553,  1413 => 551,  1408 => 549,  1405 => 548,  1400 => 546,  1397 => 545,  1395 => 544,  1389 => 541,  1384 => 539,  1374 => 534,  1367 => 532,  1361 => 528,  1346 => 526,  1342 => 525,  1338 => 524,  1330 => 521,  1324 => 517,  1309 => 515,  1305 => 514,  1301 => 513,  1293 => 510,  1288 => 508,  1282 => 504,  1276 => 502,  1274 => 501,  1268 => 500,  1261 => 498,  1256 => 495,  1250 => 493,  1248 => 492,  1242 => 491,  1235 => 489,  1230 => 487,  1223 => 482,  1218 => 480,  1215 => 479,  1210 => 477,  1207 => 476,  1205 => 475,  1201 => 473,  1196 => 471,  1193 => 470,  1188 => 468,  1185 => 467,  1183 => 466,  1175 => 463,  1169 => 459,  1164 => 457,  1161 => 456,  1156 => 454,  1153 => 453,  1151 => 452,  1147 => 450,  1142 => 448,  1139 => 447,  1134 => 445,  1131 => 444,  1129 => 443,  1121 => 440,  1116 => 438,  1110 => 434,  1104 => 432,  1102 => 431,  1096 => 430,  1089 => 428,  1083 => 424,  1078 => 422,  1075 => 421,  1070 => 419,  1067 => 418,  1065 => 417,  1061 => 415,  1056 => 413,  1053 => 412,  1048 => 410,  1045 => 409,  1043 => 408,  1035 => 405,  1030 => 403,  1022 => 397,  1016 => 396,  1008 => 394,  1000 => 392,  997 => 391,  993 => 390,  987 => 387,  981 => 383,  975 => 382,  967 => 380,  959 => 378,  956 => 377,  952 => 376,  946 => 373,  940 => 369,  935 => 367,  932 => 366,  927 => 364,  924 => 363,  922 => 362,  918 => 360,  913 => 358,  910 => 357,  905 => 355,  902 => 354,  900 => 353,  892 => 350,  886 => 346,  880 => 345,  872 => 343,  864 => 341,  861 => 340,  857 => 339,  853 => 338,  847 => 335,  841 => 331,  835 => 330,  827 => 328,  819 => 326,  816 => 325,  812 => 324,  804 => 321,  798 => 317,  792 => 316,  784 => 314,  776 => 312,  773 => 311,  769 => 310,  763 => 307,  757 => 303,  751 => 302,  743 => 300,  735 => 298,  732 => 297,  728 => 296,  722 => 293,  716 => 289,  710 => 288,  702 => 286,  694 => 284,  691 => 283,  687 => 282,  681 => 279,  671 => 272,  665 => 268,  659 => 267,  651 => 265,  643 => 263,  640 => 262,  636 => 261,  630 => 258,  625 => 255,  620 => 252,  612 => 249,  607 => 247,  602 => 246,  597 => 244,  592 => 243,  590 => 242,  586 => 240,  582 => 239,  575 => 237,  572 => 236,  570 => 235,  562 => 232,  555 => 230,  546 => 226,  539 => 224,  532 => 220,  526 => 219,  521 => 217,  512 => 213,  507 => 211,  502 => 208,  496 => 206,  494 => 205,  488 => 204,  483 => 202,  478 => 199,  472 => 197,  470 => 196,  464 => 195,  459 => 193,  450 => 189,  443 => 187,  432 => 179,  422 => 172,  412 => 165,  402 => 158,  394 => 152,  388 => 150,  386 => 149,  380 => 148,  375 => 146,  370 => 143,  364 => 141,  362 => 140,  356 => 139,  351 => 137,  346 => 134,  340 => 132,  338 => 131,  332 => 130,  327 => 128,  319 => 122,  313 => 121,  305 => 119,  297 => 117,  294 => 116,  290 => 115,  284 => 112,  277 => 107,  271 => 106,  263 => 104,  255 => 102,  252 => 101,  248 => 100,  242 => 97,  233 => 93,  228 => 91,  219 => 87,  214 => 85,  209 => 82,  203 => 80,  201 => 79,  195 => 78,  190 => 76,  180 => 69,  169 => 61,  158 => 53,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  113 => 32,  107 => 29,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}

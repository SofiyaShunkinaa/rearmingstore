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

/* sale/order_form.twig */
class __TwigTemplate_2a5a5da60422edc6aeb1eea442f8875a extends Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo ($context["button_cancel"] ?? null);
        echo "</a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 17
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <ul id=\"order\" class=\"nav nav-tabs nav-justified\">
            <li class=\"disabled active\"><a href=\"#tab-customer\" data-toggle=\"tab\">1. ";
        // line 22
        echo ($context["tab_customer"] ?? null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-cart\" data-toggle=\"tab\">2. ";
        // line 23
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-payment\" data-toggle=\"tab\">3. ";
        // line 24
        echo ($context["tab_payment"] ?? null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-shipping\" data-toggle=\"tab\">4. ";
        // line 25
        echo ($context["tab_shipping"] ?? null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-total\" data-toggle=\"tab\">5. ";
        // line 26
        echo ($context["tab_total"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-customer\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-store\">";
        // line 31
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 35
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 35) == ($context["store_id"] ?? null))) {
                // line 36
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 36);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 36);
                echo "</option>
                      ";
            } else {
                // line 38
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 38);
                echo "</option>
                      ";
            }
            // line 40
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\">";
        // line 45
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 49
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 49) == ($context["currency_code"] ?? null))) {
                // line 50
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 50);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 50);
                echo "</option>
                      ";
            } else {
                // line 52
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 52);
                echo "</option>
                      ";
            }
            // line 54
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-customer\">";
        // line 59
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"customer\" value=\"";
        // line 61
        echo ($context["customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
                  <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 62
        echo ($context["customer_id"] ?? null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 66
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 70
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 70) == ($context["customer_group_id"] ?? null))) {
                // line 71
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 71);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 71);
                echo "</option>
                      ";
            } else {
                // line 73
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 73);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 73);
                echo "</option>
                      ";
            }
            // line 75
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 80
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 82
        echo ($context["firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 86
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 88
        echo ($context["lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 92
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"email\" value=\"";
        // line 94
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
              <div class=\"form-group \">
                <label class=\"col-sm-2 control-label\" for=\"input-skype\">Skype</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"skype\" value=\"";
        // line 101
        echo ($context["skype"] ?? null);
        echo "\" id=\"input-skype\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group \">
                <label class=\"col-sm-2 control-label\" for=\"input-discord\">Discord</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discord\" value=\"";
        // line 107
        echo ($context["discord"] ?? null);
        echo "\" id=\"input-discord\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group \">
                <label class=\"col-sm-2 control-label\" for=\"input-nickname\">Nickname</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"nickname\" value=\"";
        // line 113
        echo ($context["nickname"] ?? null);
        echo "\" id=\"input-nickname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group \">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">Server</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"server\" value=\"";
        // line 119
        echo ($context["server"] ?? null);
        echo "\" id=\"input-server\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group \">
                <label class=\"col-sm-2 control-label\" for=\"input-battletag\">Battletag</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"battletag\" value=\"";
        // line 125
        echo ($context["battletag"] ?? null);
        echo "\" id=\"input-battletag\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
              <div class=\"form-group";
        // line 129
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 130
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"telephone\" value=\"";
        // line 132
        echo ($context["telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                </div>
              </div>
              ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 136
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 136) == "account")) {
                // line 137
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "select")) {
                    // line 138
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 138) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "\" class=\"form-control\">
                          <option value=\"\">";
                    // line 142
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                          ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 143));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 144
                        echo "                            ";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 144) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null)))) {
                            // line 145
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 145);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 145);
                            echo "</option>
                            ";
                        } else {
                            // line 147
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 147);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 147);
                            echo "</option>
                            ";
                        }
                        // line 149
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "                        </select>
                      </div>
                    </div>
                  ";
                }
                // line 154
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 154) == "radio")) {
                    // line 155
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 155) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-custom-field";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                    echo "\">
                          ";
                    // line 159
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 159));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 160
                        echo "                            <div class=\"radio\">
                              ";
                        // line 161
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 161) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null)))) {
                            // line 162
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 163
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 163);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 163);
                            echo "\" checked=\"checked\"/>
                                  ";
                            // line 164
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 164);
                            echo "
                                </label>
                              ";
                        } else {
                            // line 167
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 168
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 168);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 168);
                            echo "\"/>
                                  ";
                            // line 169
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 169);
                            echo "
                                </label>
                              ";
                        }
                        // line 172
                        echo "                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 178
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 178) == "checkbox")) {
                    // line 179
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 179) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-custom-field";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                    echo "\">
                          ";
                    // line 183
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 183));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 184
                        echo "                            <div class=\"checkbox\">
                              ";
                        // line 185
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 185), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null)))) {
                            // line 186
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 187
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 187);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 187);
                            echo "\" checked=\"checked\"/>
                                  ";
                            // line 188
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 188);
                            echo "
                                </label>
                              ";
                        } else {
                            // line 191
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 192
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 192);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 192);
                            echo "\"/>
                                  ";
                            // line 193
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 193);
                            echo "
                                </label>
                              ";
                        }
                        // line 196
                        echo "                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 202
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "text")) {
                    // line 203
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 203) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 204);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 206);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 206)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                    echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  ";
                }
                // line 210
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 210) == "textarea")) {
                    // line 211
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 211) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 212);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 214);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 214);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 214);
                    echo "</textarea>
                      </div>
                    </div>
                  ";
                }
                // line 218
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 218) == "file")) {
                    // line 219
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 219) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 220);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" id=\"button-custom-field";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                    echo "\" class=\"btn btn-default\">
                          <i class=\"fa fa-upload\"></i> ";
                    // line 223
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 224);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_8 = (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["code"] ?? null) : null)) ? ((($__internal_compile_10 = (($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["code"] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                    echo "\"/>
                        <span>";
                    // line 225
                    echo (($__internal_compile_12 = (($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["name"] ?? null) : null);
                    echo "</span>
                      </div>
                    </div>
                  ";
                }
                // line 229
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 229) == "date")) {
                    // line 230
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 230) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 231);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 234);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 234)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 240
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 240) == "time")) {
                    // line 241
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 241) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 242);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group time\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 245);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 245)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 245);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 251
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 251) == "datetime")) {
                    // line 252
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 252) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group datetime\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 256);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_18 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null)) ? ((($__internal_compile_19 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 256)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 256);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 262
                echo "                ";
            }
            // line 263
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "              <div class=\"text-right\">
                <button type=\"button\" id=\"button-customer\" data-loading-text=\"";
        // line 265
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">
                  <i class=\"fa fa-arrow-right\"></i> ";
        // line 266
        echo ($context["button_continue"] ?? null);
        echo "</button>
              </div>
            </div>
            <div id=\"tab-cart\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 274
        echo ($context["column_product"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 275
        echo ($context["column_model"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 276
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 277
        echo ($context["column_price"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 278
        echo ($context["column_total"] ?? null);
        echo "</td>
                      <td>";
        // line 279
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody id=\"cart\">
                    ";
        // line 283
        if ((($context["order_products"] ?? null) || ($context["order_vouchers"] ?? null))) {
            // line 284
            echo "                      ";
            $context["product_row"] = 0;
            // line 285
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 286
                echo "                        <tr>
                          <td class=\"text-left\">";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 287);
                echo "
                            <br/>
                            <input type=\"hidden\" name=\"product[";
                // line 289
                echo ($context["product_row"] ?? null);
                echo "][product_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 289);
                echo "\"/>
                            ";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 290));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 291
                    echo "                              - <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 291);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 291);
                    echo "</small>
                              <br/>
                              ";
                    // line 293
                    if ((((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 293) == "select") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 293) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 293) == "image"))) {
                        // line 294
                        echo "                                <input type=\"hidden\" name=\"product[";
                        echo ($context["product_row"] ?? null);
                        echo "][option][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 294);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 294);
                        echo "\"/>
                              ";
                    }
                    // line 296
                    echo "                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 296) == "checkbox")) {
                        // line 297
                        echo "                                <input type=\"hidden\" name=\"product[";
                        echo ($context["product_row"] ?? null);
                        echo "][option][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 297);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 297);
                        echo "\"/>
                              ";
                    }
                    // line 299
                    echo "                              ";
                    if (((((((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 299) == "text") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 299) == "textarea")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 299) == "file")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 299) == "date")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 299) == "datetime")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 299) == "time"))) {
                        // line 300
                        echo "                                <input type=\"hidden\" name=\"product[";
                        echo ($context["product_row"] ?? null);
                        echo "][option][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 300);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 300);
                        echo "\"/>
                              ";
                    }
                    // line 302
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 303
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription", [], "any", false, false, false, 303)) {
                    // line 304
                    echo "                              <br/>
                              <small> - ";
                    // line 305
                    echo ($context["text_subscription"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription", [], "any", false, false, false, 305);
                    echo "</small>
                            ";
                }
                // line 307
                echo "                          </td>
                          <td class=\"text-left\">";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 308);
                echo "</td>
                          <td class=\"text-right\">";
                // line 309
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 309);
                echo "<input type=\"hidden\" name=\"product[";
                echo ($context["product_row"] ?? null);
                echo "][quantity]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 309);
                echo "\"/></td>
                          <td class=\"text-right\"></td>
                          <td class=\"text-right\"></td>
                          <td class=\"text-center\"></td>
                        </tr>
                        ";
                // line 314
                $context["product_row"] = (($context["product_row"] ?? null) + 1);
                // line 315
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "                      ";
            $context["voucher_row"] = 0;
            // line 317
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_voucher"]) {
                // line 318
                echo "                        <tr>
                          <td class=\"text-left\">";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "description", [], "any", false, false, false, 319);
                echo "
                            <input type=\"hidden\" name=\"voucher[";
                // line 320
                echo ($context["voucher_row"] ?? null);
                echo "][voucher_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "voucher_id", [], "any", false, false, false, 320);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 321
                echo ($context["voucher_row"] ?? null);
                echo "][description]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "description", [], "any", false, false, false, 321);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 322
                echo ($context["voucher_row"] ?? null);
                echo "][code]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "code", [], "any", false, false, false, 322);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 323
                echo ($context["voucher_row"] ?? null);
                echo "][from_name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "from_name", [], "any", false, false, false, 323);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 324
                echo ($context["voucher_row"] ?? null);
                echo "][from_email]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "from_email", [], "any", false, false, false, 324);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 325
                echo ($context["voucher_row"] ?? null);
                echo "][to_name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "to_name", [], "any", false, false, false, 325);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 326
                echo ($context["voucher_row"] ?? null);
                echo "][to_email]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "to_email", [], "any", false, false, false, 326);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 327
                echo ($context["voucher_row"] ?? null);
                echo "][voucher_theme_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "voucher_theme_id", [], "any", false, false, false, 327);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 328
                echo ($context["voucher_row"] ?? null);
                echo "][message]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "message", [], "any", false, false, false, 328);
                echo "\"/>
                            <input type=\"hidden\" name=\"voucher[";
                // line 329
                echo ($context["voucher_row"] ?? null);
                echo "][amount]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 329);
                echo "\"/>
                          </td>
                          <td class=\"text-left\"></td>
                          <td class=\"text-right\">1</td>
                          <td class=\"text-right\"></td>
                          <td class=\"text-right\"></td>
                          <td class=\"text-center\"></td>
                        </tr>
                        ";
                // line 337
                $context["voucher_row"] = (($context["voucher_row"] ?? null) + 1);
                // line 338
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 339
            echo "                    ";
        } else {
            // line 340
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"6\">";
            // line 341
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 344
        echo "                  </tbody>
                </table>
              </div>
              <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 348
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
                <li><a href=\"#tab-voucher\" data-toggle=\"tab\">";
        // line 349
        echo ($context["tab_voucher"] ?? null);
        echo "</a></li>
              </ul>
              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-product\">
                  <fieldset>
                    <legend>";
        // line 354
        echo ($context["text_product"] ?? null);
        echo "</legend>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 356
        echo ($context["entry_product"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product\" value=\"\" id=\"input-product\" class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"\"/>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 363
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"quantity\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"option\"></div>
                    <div id=\"subscription\"></div>
                  </fieldset>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-product-add\" data-loading-text=\"";
        // line 372
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_product_add"] ?? null);
        echo "</button>
                  </div>
                </div>
                <div id=\"tab-voucher\" class=\"tab-pane\">
                  <fieldset>
                    <legend>";
        // line 377
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 379
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"to_name\" value=\"\" id=\"input-to-name\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 385
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"to_email\" value=\"\" id=\"input-to-email\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 391
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"from_name\" value=\"\" id=\"input-from-name\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 397
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"from_email\" value=\"\" id=\"input-from-email\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 403
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-control\">
                          ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 407
            echo "                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 407);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 407);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        echo "                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 413
        echo ($context["entry_message"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"message\" rows=\"5\" id=\"input-message\" class=\"form-control\"></textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
        // line 419
        echo ($context["entry_amount"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"amount\" value=\"";
        // line 421
        echo ($context["voucher_min"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                      </div>
                    </div>
                  </fieldset>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-voucher-add\" data-loading-text=\"";
        // line 426
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_voucher_add"] ?? null);
        echo "</button>
                  </div>
                </div>
              </div>
              <br/>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-customer\\']').tab('show');\" class=\"btn btn-default\">
                    <i class=\"fa fa-arrow-left\"></i> ";
        // line 434
        echo ($context["button_back"] ?? null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary\">
                    <i class=\"fa fa-arrow-right\"></i> ";
        // line 438
        echo ($context["button_continue"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
            <div id=\"tab-payment\" class=\"tab-pane\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address\">";
        // line 444
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_address\" id=\"input-payment-address\" class=\"form-control\">
                    <option value=\"0\" selected=\"selected\">";
        // line 447
        echo ($context["text_none"] ?? null);
        echo "</option>
                    ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 449
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 449);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 449);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 449);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 449);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 449);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 449);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-firstname\">";
        // line 455
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 457
        echo ($context["payment_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-lastname\">";
        // line 461
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 463
        echo ($context["payment_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-company\">";
        // line 467
        echo ($context["entry_company"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"company\" value=\"";
        // line 469
        echo ($context["payment_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address-1\">";
        // line 473
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 475
        echo ($context["payment_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address-2\">";
        // line 479
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 481
        echo ($context["payment_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-city\">";
        // line 485
        echo ($context["entry_city"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"city\" value=\"";
        // line 487
        echo ($context["payment_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-postcode\">";
        // line 491
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 493
        echo ($context["payment_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-country\">";
        // line 497
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 500
        echo ($context["text_select"] ?? null);
        echo "</option>
                    ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 502
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 502) == ($context["payment_country_id"] ?? null))) {
                // line 503
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 503);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 503);
                echo "</option>
                      ";
            } else {
                // line 505
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 505);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 505);
                echo "</option>
                      ";
            }
            // line 507
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-zone\">";
        // line 512
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 519
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 519) == "address")) {
                // line 520
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 520) == "select")) {
                    // line 521
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 521);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 521) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 522
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 522);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 522);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                    // line 524
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 524);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524);
                    echo "\" class=\"form-control\">
                          <option value=\"\">";
                    // line 525
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                          ";
                    // line 526
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 526));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 527
                        echo "                            ";
                        if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 527)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 527) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 527)] ?? null) : null)))) {
                            // line 528
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 528);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 528);
                            echo "</option>
                            ";
                        } else {
                            // line 530
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 530);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 530);
                            echo "</option>
                            ";
                        }
                        // line 532
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 533
                    echo "                        </select>
                      </div>
                    </div>
                  ";
                }
                // line 537
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 537) == "radio")) {
                    // line 538
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 538);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 538) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 539
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 539);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-payment-custom-field";
                    // line 541
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 541);
                    echo "\">
                          ";
                    // line 542
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 542));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 543
                        echo "                            <div class=\"radio\">
                              ";
                        // line 544
                        if (((($__internal_compile_22 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 544)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 544) == (($__internal_compile_23 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 544)] ?? null) : null)))) {
                            // line 545
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 546
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 546);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 546);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 546);
                            echo "\" checked=\"checked\"/>
                                  ";
                            // line 547
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 547);
                            echo "
                                </label>
                              ";
                        } else {
                            // line 550
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 551
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 551);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 551);
                            echo "\"/>
                                  ";
                            // line 552
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 552);
                            echo "
                                </label>
                              ";
                        }
                        // line 555
                        echo "                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 557
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 561
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 561) == "checkbox")) {
                    // line 562
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 562) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 563
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 563);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-payment-custom-field";
                    // line 565
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565);
                    echo "\">
                          ";
                    // line 566
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 566));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 567
                        echo "                            <div class=\"checkbox\">
                              ";
                        // line 568
                        if (((($__internal_compile_24 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 568), (($__internal_compile_25 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568)] ?? null) : null)))) {
                            // line 569
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 570
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 570);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 570);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 570);
                            echo "\" checked=\"checked\"/>
                                  ";
                            // line 571
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 571);
                            echo "
                                </label>
                              ";
                        } else {
                            // line 574
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 575
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 575);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 575);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 575);
                            echo "\"/>
                                  ";
                            // line 576
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 576);
                            echo "
                                </label>
                              ";
                        }
                        // line 579
                        echo "                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 581
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 585
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 585) == "text")) {
                    // line 586
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 586) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 587
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 587);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 589
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 589);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_26 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null)) ? ((($__internal_compile_27 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 589)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 589);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589);
                    echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  ";
                }
                // line 593
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 593) == "textarea")) {
                    // line 594
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 594);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 594) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 595
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 595);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 595);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[";
                    // line 597
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 597);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 597);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null)) ? ((($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 597)));
                    echo "</textarea>
                      </div>
                    </div>
                  ";
                }
                // line 601
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 601) == "file")) {
                    // line 602
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 602) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 603
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 603);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 605
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 605);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                    // line 606
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 606);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 606);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_30 = (($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 606)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["code"] ?? null) : null)) ? ((($__internal_compile_32 = (($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 606)] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["code"] ?? null) : null)) : (""));
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 606);
                    echo "\"/>
                        <span>";
                    // line 607
                    echo (($__internal_compile_34 = (($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 607)] ?? null) : null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["name"] ?? null) : null);
                    echo "</span>
                      </div>
                    </div>
                  ";
                }
                // line 611
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 611) == "date")) {
                    // line 612
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 612) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 613
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 613);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 613);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 616
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 616);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 616);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_36 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 616)] ?? null) : null)) ? ((($__internal_compile_37 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 616)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 616)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 616);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 616);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 622
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 622) == "time")) {
                    // line 623
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 623);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 623) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 624
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 624);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 624);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group time\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 627
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 627);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_38 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627)] ?? null) : null)) ? ((($__internal_compile_39 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 627)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 627);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 633
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 633) == "datetime")) {
                    // line 634
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 634);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 634) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 635
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 635);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 635);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group datetime\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 638
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 638);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 638);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_40 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 638)] ?? null) : null)) ? ((($__internal_compile_41 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 638)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 638)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 638);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 638);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 644
                echo "                ";
            }
            // line 645
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        echo "              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-cart\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 648
        echo ($context["button_back"] ?? null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\"><button type=\"button\" id=\"button-payment-address\" data-loading-text=\"";
        // line 650
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        echo ($context["button_continue"] ?? null);
        echo "</button></div>
              </div>
            </div>
            <div id=\"tab-shipping\" class=\"tab-pane\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address\">";
        // line 655
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"shipping_address\" id=\"input-shipping-address\" class=\"form-control\">
                    <option value=\"0\" selected=\"selected\">";
        // line 658
        echo ($context["text_none"] ?? null);
        echo "</option>
                    ";
        // line 659
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 660
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 660);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 660);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 660);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 660);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 660);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 660);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 662
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 666
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 668
        echo ($context["shipping_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 672
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 674
        echo ($context["shipping_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 678
        echo ($context["entry_company"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"company\" value=\"";
        // line 680
        echo ($context["shipping_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 684
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 686
        echo ($context["shipping_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 690
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 692
        echo ($context["shipping_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 696
        echo ($context["entry_city"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"city\" value=\"";
        // line 698
        echo ($context["shipping_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 702
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 704
        echo ($context["shipping_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 708
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 711
        echo ($context["text_select"] ?? null);
        echo "</option>
                    ";
        // line 712
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 713
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 713) == ($context["shipping_country_id"] ?? null))) {
                // line 714
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 714);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 714);
                echo "</option>
                      ";
            } else {
                // line 716
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 716);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 716);
                echo "</option>
                      ";
            }
            // line 718
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 719
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 723
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              ";
        // line 729
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 730
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 730) == "address")) {
                // line 731
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 731) == "select")) {
                    // line 732
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 732);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 732) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 733
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 733);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 733);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                    // line 735
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 735);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735);
                    echo "]\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735);
                    echo "\" class=\"form-control\">
                          <option value=\"\">";
                    // line 736
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                          ";
                    // line 737
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 737));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 738
                        echo "                            ";
                        if (((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 738)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 738) == (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 738)] ?? null) : null)))) {
                            // line 739
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 739);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 739);
                            echo "</option>
                            ";
                        } else {
                            // line 741
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 741);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 741);
                            echo "</option>
                            ";
                        }
                        // line 743
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 744
                    echo "                        </select>
                      </div>
                    </div>
                  ";
                }
                // line 748
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 748) == "radio")) {
                    // line 749
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 749);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 749) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 750
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 750);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-shipping-custom-field";
                    // line 752
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 752);
                    echo "\">
                          ";
                    // line 753
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 753));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 754
                        echo "                            <div class=\"radio\">
                              ";
                        // line 755
                        if (((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 755)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 755) == (($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 755)] ?? null) : null)))) {
                            // line 756
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 757
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 757);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 757);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 757);
                            echo "\" checked=\"checked\"/>
                                  ";
                            // line 758
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 758);
                            echo "
                                </label>
                              ";
                        } else {
                            // line 761
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 762
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 762);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 762);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 762);
                            echo "\"/>
                                  ";
                            // line 763
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 763);
                            echo "
                                </label>
                              ";
                        }
                        // line 766
                        echo "                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 768
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 772
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 772) == "checkbox")) {
                    // line 773
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 773);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 773) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 774
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 774);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-shipping-custom-field";
                    // line 776
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 776);
                    echo "\">
                          ";
                    // line 777
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 777));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 778
                        echo "                            <div class=\"checkbox\">
                              ";
                        // line 779
                        if (((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 779), (($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779)] ?? null) : null)))) {
                            // line 780
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 781
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 781);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 781);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 781);
                            echo "\" checked=\"checked\"/>
                                  ";
                            // line 782
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 782);
                            echo "
                                </label>
                              ";
                        } else {
                            // line 785
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 786
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 786);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 786);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 786);
                            echo "\"/>
                                  ";
                            // line 787
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 787);
                            echo "
                                </label>
                              ";
                        }
                        // line 790
                        echo "                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 792
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 796
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 796) == "text")) {
                    // line 797
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 797);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 797) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 798
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 798);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 798);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 800
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 800);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 800)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 800);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800);
                    echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  ";
                }
                // line 804
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 804) == "textarea")) {
                    // line 805
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 805);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 805) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 806
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 806);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 806);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[";
                    // line 808
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 808);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 808);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 808);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 808);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 808)] ?? null) : null)) ? ((($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 808)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 808)));
                    echo "</textarea>
                      </div>
                    </div>
                  ";
                }
                // line 812
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 812) == "file")) {
                    // line 813
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 813);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 813) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\">";
                    // line 814
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 814);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" id=\"button-shipping-custom-field";
                    // line 816
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 816);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\">
                          <i class=\"fa fa-upload\"></i> ";
                    // line 817
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                    // line 818
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 818);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 818);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_52 = (($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 818)] ?? null) : null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["code"] ?? null) : null)) ? ((($__internal_compile_54 = (($__internal_compile_55 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 818)] ?? null) : null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["code"] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 818);
                    echo "\"/>
                        <span>";
                    // line 819
                    echo (($__internal_compile_56 = (($__internal_compile_57 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 819)] ?? null) : null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["name"] ?? null) : null);
                    echo "</span>
                      </div>
                    </div>
                  ";
                }
                // line 823
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 823) == "date")) {
                    // line 824
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 824);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 824) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 825
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 825);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 825);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 828
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 828);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 828);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_58 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 828)] ?? null) : null)) ? ((($__internal_compile_59 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 828)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 828)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 828);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 828);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 834
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 834) == "time")) {
                    // line 835
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 835);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 835) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 836
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 836);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 836);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group time\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 839
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 839);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 839);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_60 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 839)] ?? null) : null)) ? ((($__internal_compile_61 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 839)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 839)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 839);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 839);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 845
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 845) == "datetime")) {
                    // line 846
                    echo "                    <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 846);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 846) + 3);
                    echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 847
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 847);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 847);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group datetime\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 850
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 850);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_62 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850)] ?? null) : null)) ? ((($__internal_compile_63 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 850)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 850);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850);
                    echo "\" class=\"form-control\"/>
                          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 856
                echo "                ";
            }
            // line 857
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 858
        echo "              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-payment\\']').tab('show');\" class=\"btn btn-default\">
                    <i class=\"fa fa-arrow-left\"></i> ";
        // line 861
        echo ($context["button_back"] ?? null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-shipping-address\" data-loading-text=\"";
        // line 864
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-arrow-right\"></i> ";
        // line 865
        echo ($context["button_continue"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
            <div id=\"tab-total\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 874
        echo ($context["column_product"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 875
        echo ($context["column_model"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 876
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 877
        echo ($context["column_price"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 878
        echo ($context["column_total"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody id=\"total\">
                    <tr>
                      <td class=\"text-center\" colspan=\"5\">";
        // line 883
        echo ($context["text_no_results"] ?? null);
        echo "</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <fieldset>
                <legend>";
        // line 889
        echo ($context["text_order_detail"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-method\">";
        // line 891
        echo ($context["entry_shipping_method"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"shipping_method\" id=\"input-shipping-method\" class=\"form-control\">
                        <option value=\"\">";
        // line 895
        echo ($context["text_select"] ?? null);
        echo "</option>
                        ";
        // line 896
        if (($context["shipping_code"] ?? null)) {
            // line 897
            echo "                          <option value=\"";
            echo ($context["shipping_code"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["shipping_method"] ?? null);
            echo "</option>
                        ";
        }
        // line 899
        echo "                      </select>
                      <span class=\"input-group-btn\"><button type=\"button\" id=\"button-shipping-method\" data-loading-text=\"";
        // line 900
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button></span>
                    </div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-payment-method\">";
        // line 905
        echo ($context["entry_payment_method"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-control\">
                        <option value=\"\">";
        // line 909
        echo ($context["text_select"] ?? null);
        echo "</option>
                        ";
        // line 910
        if (($context["payment_code"] ?? null)) {
            // line 911
            echo "                          <option value=\"";
            echo ($context["payment_code"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["payment_method"] ?? null);
            echo "</option>
                        ";
        }
        // line 913
        echo "                      </select>
                      <span class=\"input-group-btn\"><button type=\"button\" id=\"button-payment-method\" data-loading-text=\"";
        // line 914
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button></span>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-coupon\">";
        // line 919
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\"><input type=\"text\" name=\"coupon\" value=\"";
        // line 921
        echo ($context["coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/>
                      <span class=\"input-group-btn\"><button type=\"button\" id=\"button-coupon\" data-loading-text=\"";
        // line 922
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button></span>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
        // line 927
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\"><input type=\"text\" name=\"voucher\" value=\"";
        // line 929
        echo ($context["voucher"] ?? null);
        echo "\" id=\"input-voucher\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\"><button type=\"button\" id=\"button-voucher\" data-loading-text=\"";
        // line 930
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button></span>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward\">";
        // line 935
        echo ($context["entry_reward"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\"><input type=\"text\" name=\"reward\" value=\"";
        // line 937
        echo ($context["reward"] ?? null);
        echo "\" id=\"input-reward\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\"><button type=\"button\" id=\"button-reward\" data-loading-text=\"";
        // line 938
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button></span>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 943
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 946
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 947
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 947) == ($context["order_status_id"] ?? null))) {
                // line 948
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 948);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 948);
                echo "</option>
                        ";
            } else {
                // line 950
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 950);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 950);
                echo "</option>
                        ";
            }
            // line 952
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 953
        echo "                    </select>
                    <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 954
        echo ($context["order_id"] ?? null);
        echo "\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 958
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"5\" id=\"input-comment\" class=\"form-control\">";
        // line 960
        echo ($context["comment"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 964
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"affiliate\" value=\"";
        // line 966
        echo ($context["affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" class=\"form-control\"/>
                    <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        // line 967
        echo ($context["affiliate_id"] ?? null);
        echo "\"/>
                  </div>
                </div>
              </fieldset>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('select[name=\\'shipping_method\\']').prop('disabled') ? \$('a[href=\\'#tab-payment\\']').tab('show') : \$('a[href=\\'#tab-shipping\\']').tab('show');\" class=\"btn btn-default\">
                    <i class=\"fa fa-arrow-left\"></i> ";
        // line 974
        echo ($context["button_back"] ?? null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-refresh\" data-toggle=\"tooltip\" title=\"";
        // line 977
        echo ($context["button_refresh"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" id=\"button-save\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i> ";
        // line 978
        echo ($context["button_save"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  // Disable the tabs
  \$('#order a[data-toggle=\\'tab\\']').on('click', function (e) {
      e.preventDefault();

      return false;
  });

  // Currency
  \$('select[name=\\'currency\\']').on('change', function () {
      \$.ajax({
          url: '";
        // line 998
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/currency&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: 'currency=' + \$('select[name=\\'currency\\'] option:selected').val(),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('select[name=\\'currency\\']').prop('disabled', true);
          },
          complete: function () {
              \$('select[name=\\'currency\\']').prop('disabled', false);
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Highlight any found errors
                  \$('select[name=\\'currency\\']').closest('.form-group').addClass('has-error');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('select[name=\\'currency\\']').trigger('change');

  // Customer
  \$('input[name=\\'customer\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 1032
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
              dataType: 'json',
              success: function (json) {
                  json.unshift({
                      customer_id: '0',
                      customer_group_id: '";
        // line 1037
        echo ($context["customer_group_id"] ?? null);
        echo "',
                      name: '";
        // line 1038
        echo ($context["text_none"] ?? null);
        echo "',
                      customer_group: '',
                      firstname: '',
                      lastname: '',
                      email: '',
                      telephone: '',
                      custom_field: [],
                      address: []
                  });

                  response(\$.map(json, function (item) {
                      return {
                          category: item['customer_group'],
                          label: item['name'],
                          value: item['customer_id'],
                          customer_group_id: item['customer_group_id'],
                          firstname: item['firstname'],
                          lastname: item['lastname'],
                          email: item['email'],
                          telephone: item['telephone'],
                          custom_field: item['custom_field'],
                          address: item['address']
                      }
                  }));
              }
          });
      },
      'select': function (item) {
          // Reset all custom fields
          \$('#tab-customer input[type=\\'text\\'], #tab-customer textarea').not('#tab-customer input[name=\\'customer\\'], #tab-customer input[name=\\'customer_id\\']').val('');
          \$('#tab-customer select option').not(\$('#tab-customer select[name=\\'store_id\\'] option, #tab-customer select[name=\\'currency\\'] option')).removeAttr('selected');
          \$('#tab-customer input[type=\\'checkbox\\'], #tab-customer input[type=\\'radio\\']').removeAttr('checked');

          \$('#tab-customer input[name=\\'customer\\']').val(item['label']);
          \$('#tab-customer input[name=\\'customer_id\\']').val(item['value']);
          \$('#tab-customer select[name=\\'customer_group_id\\']').val(item['customer_group_id']);
          \$('#tab-customer input[name=\\'firstname\\']').val(item['firstname']);
          \$('#tab-customer input[name=\\'lastname\\']').val(item['lastname']);
          \$('#tab-customer input[name=\\'email\\']').val(item['email']);
          \$('#tab-customer input[name=\\'telephone\\']').val(item['telephone']);

          for (i in item.custom_field) {
              \$('#tab-customer select[name=\\'custom_field[' + i + ']\\']').val(item.custom_field[i]);
              \$('#tab-customer textarea[name=\\'custom_field[' + i + ']\\']').val(item.custom_field[i]);
              \$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(item.custom_field[i]);
              \$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(item.custom_field[i]);
              \$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + item.custom_field[i] + '\\']').prop('checked', true);

              if (item.custom_field[i]) {
                  for (j = 0; j < item.custom_field[i].length; j++) {
                      \$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + item.custom_field[i][j] + '\\']').prop('checked', true);
                  }
              }
          }

          \$('select[name=\\'customer_group_id\\']').trigger('change');

          html = '<option value=\"0\">";
        // line 1095
        echo ($context["text_none"] ?? null);
        echo "</option>';

          for (i in item['address']) {
              html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
          }

          \$('select[name=\\'payment_address\\']').html(html);
          \$('select[name=\\'shipping_address\\']').html(html);
      }
  });

  // Custom Fields
  \$('select[name=\\'customer_group_id\\']').on('change', function () {
      \$.ajax({
          url: 'index.php?route=customer/customer/customfield&user_token=";
        // line 1109
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
          dataType: 'json',
          success: function (json) {
              \$('.custom-field').hide();
              \$('.custom-field').removeClass('required');

              for (i = 0; i < json.length; i++) {
                  custom_field = json[i];

                  \$('.custom-field' + custom_field['custom_field_id']).show();

                  if (custom_field['required']) {
                      \$('.custom-field' + custom_field['custom_field_id']).addClass('required');
                  }
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('select[name=\\'customer_group_id\\']').trigger('change');

  \$('#button-customer').on('click', function () {
      \$.ajax({
          url: '";
        // line 1135
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/customer&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: \$('#tab-customer input[type=\\'text\\'], #tab-customer input[type=\\'hidden\\'], #tab-customer input[type=\\'radio\\']:checked, #tab-customer input[type=\\'checkbox\\']:checked, #tab-customer select, #tab-customer textarea'),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-customer').button('loading');
          },
          complete: function () {
              \$('#button-customer').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  for (i in json['error']) {
                      var element = \$('#input-' + i.replace('_', '-'));

                      if (element.parent().hasClass('input-group')) {
                          \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      } else {
                          \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      }
                  }

                  // Highlight any found errors
                  \$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
              } else {
                  // Refresh products, vouchers and totals
                  var request_1 = \$.ajax({
                      url: '";
        // line 1170
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
                      type: 'post',
                      data: \$('#cart input[name^=\\'product\\'][type=\\'text\\'], #cart input[name^=\\'product\\'][type=\\'hidden\\'], #cart input[name^=\\'product\\'][type=\\'radio\\']:checked, #cart input[name^=\\'product\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'product\\'], #cart textarea[name^=\\'product\\']'),
                      dataType: 'json',
                      crossDomain: true,
                      beforeSend: function () {
                          \$('#button-product-add').button('loading');
                      },
                      complete: function () {
                          \$('#button-product-add').button('reset');
                      },
                      success: function (json) {
                          \$('.alert-dismissible, .text-danger').remove();
                          \$('.form-group').removeClass('has-error');

                          if (json['error'] && json['error']['warning']) {
                              \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                          }
                      },
                      error: function (xhr, ajaxOptions, thrownError) {
                          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                      }
                  });

                  var request_2 = request_1.then(function () {
                      \$.ajax({
                          url: '";
        // line 1196
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/voucher/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
                          type: 'post',
                          data: \$('#cart input[name^=\\'voucher\\'][type=\\'text\\'], #cart input[name^=\\'voucher\\'][type=\\'hidden\\'], #cart input[name^=\\'voucher\\'][type=\\'radio\\']:checked, #cart input[name^=\\'voucher\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'voucher\\'], #cart textarea[name^=\\'voucher\\']'),
                          dataType: 'json',
                          crossDomain: true,
                          beforeSend: function () {
                              \$('#button-voucher-add').button('loading');
                          },
                          complete: function () {
                              \$('#button-voucher-add').button('reset');
                          },
                          success: function (json) {
                              \$('.alert-dismissible, .text-danger').remove();
                              \$('.form-group').removeClass('has-error');

                              if (json['error'] && json['error']['warning']) {
                                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                              }
                          },
                          error: function (xhr, ajaxOptions, thrownError) {
                              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                          }
                      });
                  });

                  request_2.done(function () {
                      \$('#button-refresh').trigger('click');

                      \$('a[href=\\'#tab-cart\\']').tab('show');
                  });
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#tab-product input[name=\\'product\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1237
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
              dataType: 'json',
              success: function (json) {
                  response(\$.map(json, function (item) {
                      return {
                          label: item['name'],
                          value: item['product_id'],
                          model: item['model'],
                          option: item['option'],
                          subscription: item['subscription'],
                          price: item['price']
                      }
                  }));
              }
          });
      },
      'select': function (item) {
          \$('#tab-product input[name=\\'product\\']').val(item['label']);
          \$('#tab-product input[name=\\'product_id\\']').val(item['value']);

          // Option
          if (item['option'] != '') {
              html = '<fieldset>';
              html += '  <legend>";
        // line 1260
        echo ($context["entry_option"] ?? null);
        echo "</legend>';

              for (i = 0; i < item['option'].length; i++) {
                  option = item['option'][i];

                  if (option['type'] == 'select') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-10\">';
                      html += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
                      html += '      <option value=\"\">";
        // line 1270
        echo ($context["text_select"] ?? null);
        echo "</option>';

                      for (j = 0; j < option['product_option_value'].length; j++) {
                          option_value = option['product_option_value'][j];

                          html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                          if (option_value['price']) {
                              html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                          }

                          html += '</option>';
                      }

                      html += '    </select>';
                      html += '  </div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'radio') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-10\">';
                      html += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
                      html += '      <option value=\"\">";
        // line 1294
        echo ($context["text_select"] ?? null);
        echo "</option>';

                      for (j = 0; j < option['product_option_value'].length; j++) {
                          option_value = option['product_option_value'][j];

                          html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                          if (option_value['price']) {
                              html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                          }

                          html += '</option>';
                      }

                      html += '    </select>';
                      html += '  </div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'checkbox') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-10\">';
                      html += '    <div id=\"input-option' + option['product_option_id'] + '\">';

                      for (j = 0; j < option['product_option_value'].length; j++) {
                          option_value = option['product_option_value'][j];

                          html += '<div class=\"checkbox\">';

                          html += '  <label><input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\"/> ' + option_value['name'];

                          if (option_value['price']) {
                              html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                          }

                          html += '  </label>';
                          html += '</div>';
                      }

                      html += '    </div>';
                      html += '  </div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'image') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-10\">';
                      html += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
                      html += '      <option value=\"\">";
        // line 1344
        echo ($context["text_select"] ?? null);
        echo "</option>';

                      for (j = 0; j < option['product_option_value'].length; j++) {
                          option_value = option['product_option_value'][j];

                          html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                          if (option_value['price']) {
                              html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                          }

                          html += '</option>';
                      }

                      html += '    </select>';
                      html += '  </div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'text') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-10\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\"/></div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'textarea') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-10\"><textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea></div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'file') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-10\">';
                      html += '    <button type=\"button\" id=\"button-upload' + option['product_option_id'] + '\" data-loading-text=\"";
        // line 1381
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>';
                      html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option' + option['product_option_id'] + '\"/>';
                      html += '  </div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'date') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"YYYY-MM-DD\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'datetime') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-3\"><div class=\"input-group datetime\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                      html += '</div>';
                  }

                  if (option['type'] == 'time') {
                      html += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
                      html += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
                      html += '  <div class=\"col-sm-3\"><div class=\"input-group time\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"HH:mm\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                      html += '</div>';
                  }
              }

              html += '</fieldset>';

              \$('#option').html(html);

              // Subscription
              if (item['subscription'] != '') {
                  html = '<fieldset>';
                  html += '  <legend>";
        // line 1416
        echo ($context["entry_subscription"] ?? null);
        echo "</legend>';
                  html += '  <div class=\"form-group\">';
                  html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-control\">';
                  html += '      <option value=\"\">";
        // line 1419
        echo ($context["text_select"] ?? null);
        echo "</option>';

                  for (i = 0; i < item['subscription'].length; i++) {
                      html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                  }

                  html += '  </select>';

                  for (i = 0; i < item['subscription'].length; i++) {
                      html += '  <div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['description'] + '</div>';
                  }

                  html += '</div>';
                  html += '</fieldset>';

                  \$('#subscription').html(html);
              } else {
                  \$('#subscription').html('');
              }

              \$('.date').datetimepicker({
                  language: '";
        // line 1440
        echo ($context["datepicker"] ?? null);
        echo "',
                  pickTime: false
              });

              \$('.datetime').datetimepicker({
                  language: '";
        // line 1445
        echo ($context["datepicker"] ?? null);
        echo "',
                  pickDate: true,
                  pickTime: true
              });

              \$('.time').datetimepicker({
                  language: '";
        // line 1451
        echo ($context["datepicker"] ?? null);
        echo "',
                  pickDate: false
              });
          } else {
              \$('#option').html('');
          }
      }
  });

  \$('#button-product-add').on('click', function () {
      \$.ajax({
          url: '";
        // line 1462
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: \$('#tab-product input[name=\\'product_id\\'], #tab-product input[name=\\'quantity\\'], #tab-product input[name^=\\'option\\'][type=\\'text\\'], #tab-product input[name^=\\'option\\'][type=\\'hidden\\'], #tab-product input[name^=\\'option\\'][type=\\'radio\\']:checked, #tab-product input[name^=\\'option\\'][type=\\'checkbox\\']:checked, #tab-product select[name^=\\'option\\'], #tab-product textarea[name^=\\'option\\']'),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-product-add').button('loading');
          },
          complete: function () {
              \$('#button-product-add').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  if (json['error']['option']) {
                      for (i in json['error']['option']) {
                          var element = \$('#input-option' + i.replace('_', '-'));

                          if (element.parent().hasClass('input-group')) {
                              \$(element).parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                          } else {
                              \$(element).after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                          }
                      }
                  }

                  if (json['error']['store']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['store'] + '</div>');
                  }

                  // Highlight any found errors
                  \$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
              } else {
                  // Refresh products, vouchers and totals
                  \$('#button-refresh').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  // Voucher
  \$('#button-voucher-add').on('click', function () {
      \$.ajax({
          url: '";
        // line 1514
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/voucher/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: \$('#tab-voucher input[type=\\'text\\'], #tab-voucher input[type=\\'hidden\\'], #tab-voucher input[type=\\'radio\\']:checked, #tab-voucher input[type=\\'checkbox\\']:checked, #tab-voucher select, #tab-voucher textarea'),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-voucher-add').button('loading');
          },
          complete: function () {
              \$('#button-voucher-add').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  for (i in json['error']) {
                      var element = \$('#input-' + i.replace('_', '-'));

                      if (element.parent().hasClass('input-group')) {
                          \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      } else {
                          \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      }
                  }

                  // Highlight any found errors
                  \$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
              } else {
                  \$('input[name=\\'from_name\\']').val('');
                  \$('input[name=\\'from_email\\']').val('');
                  \$('input[name=\\'to_name\\']').val('');
                  \$('input[name=\\'to_email\\']').val('');
                  \$('textarea[name=\\'message\\']').val('');
                  \$('input[name=\\'amount\\']').val('";
        // line 1552
        echo twig_escape_filter($this->env, ($context["voucher_min"] ?? null), "js");
        echo "');

                  // Refresh products, vouchers and totals
                  \$('#button-refresh').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#cart').delegate('.btn-danger', 'click', function () {
      var element = this;

      \$.ajax({
          url: '";
        // line 1568
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/remove&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: 'key=' + encodeURIComponent(this.value),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$(element).button('loading');
          },
          complete: function () {
              \$(element).button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();

              // Check for errors
              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              } else {
                  // Refresh products, vouchers and totals
                  \$('#button-refresh').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#cart').delegate('.btn-primary', 'click', function () {
      var element = this;

      // Refresh products, vouchers and totals
      \$.ajax({
          url: '";
        // line 1601
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: \$('#cart input[name^=\\'product\\'][type=\\'text\\'], #cart input[name^=\\'product\\'][type=\\'hidden\\'], #cart input[name^=\\'product\\'][type=\\'radio\\']:checked, #cart input[name^=\\'product\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'product\\'], #cart textarea[name^=\\'product\\']'),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$(element).button('loading');
          },
          complete: function () {
              \$(element).button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error'] && json['error']['warning']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      }).done(function () {
          \$('#button-refresh').trigger('click');
      });
  });

  \$('#button-cart').on('click', function () {
      \$('a[href=\\'#tab-payment\\']').tab('show');
  });

  // Payment Address
  \$('select[name=\\'payment_address\\']').on('change', function () {
      \$.ajax({
          url: 'index.php?route=customer/customer/address&user_token=";
        // line 1639
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
          dataType: 'json',
          beforeSend: function () {
              \$('select[name=\\'payment_address\\']').prop('disabled', true);
          },
          complete: function () {
              \$('select[name=\\'payment_address\\']').prop('disabled', false);
          },
          success: function (json) {
              // Reset all fields
              \$('#tab-payment input[type=\\'text\\'], #tab-payment input[type=\\'text\\'], #tab-payment textarea').val('');
              \$('#tab-payment select option').not('#tab-payment select[name=\\'payment_address\\']').removeAttr('selected');
              \$('#tab-payment input[type=\\'checkbox\\'], #tab-payment input[type=\\'radio\\']').removeAttr('checked');

              \$('#tab-payment input[name=\\'firstname\\']').val(json['firstname']);
              \$('#tab-payment input[name=\\'lastname\\']').val(json['lastname']);
              \$('#tab-payment input[name=\\'company\\']').val(json['company']);
              \$('#tab-payment input[name=\\'address_1\\']').val(json['address_1']);
              \$('#tab-payment input[name=\\'address_2\\']').val(json['address_2']);
              \$('#tab-payment input[name=\\'city\\']').val(json['city']);
              \$('#tab-payment input[name=\\'postcode\\']').val(json['postcode']);
              \$('#tab-payment select[name=\\'country_id\\']').val(json['country_id']);

              payment_zone_id = json['zone_id'];

              for (i in json['custom_field']) {
                  \$('#tab-payment select[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
                  \$('#tab-payment textarea[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
                  \$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(json['custom_field'][i]);
                  \$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(json['custom_field'][i]);
                  \$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);
                  \$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);

                  if (json['custom_field'][i] instanceof Array) {
                      for (j = 0; j < json['custom_field'][i].length; j++) {
                          \$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i][j] + '\\']').prop('checked', true);
                      }
                  }
              }

              \$('#tab-payment select[name=\\'country_id\\']').trigger('change');
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  var payment_zone_id = '";
        // line 1687
        echo ($context["payment_zone_id"] ?? null);
        echo "';

  \$('#tab-payment select[name=\\'country_id\\']').on('change', function () {
      \$.ajax({
          url: 'index.php?route=localisation/country/country&user_token=";
        // line 1691
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
          dataType: 'json',
          beforeSend: function () {
              \$('#tab-payment select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
          },
          complete: function () {
              \$('#tab-payment .fa-spin').remove();
          },
          success: function (json) {
              if (json['postcode_required'] == '1') {
                  \$('#tab-payment input[name=\\'postcode\\']').closest('.form-group').addClass('required');
              } else {
                  \$('#tab-payment input[name=\\'postcode\\']').closest('.form-group').removeClass('required');
              }

              html = '<option value=\"\">";
        // line 1706
        echo ($context["text_select"] ?? null);
        echo "</option>';

              if (json['zone'] && json['zone'] != '') {
                  for (i = 0; i < json['zone'].length; i++) {
                      html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                      if (json['zone'][i]['zone_id'] == payment_zone_id) {
                          html += ' selected=\"selected\"';
                      }

                      html += '>' + json['zone'][i]['name'] + '</option>';
                  }
              } else {
                  html += '<option value=\"0\" selected=\"selected\">";
        // line 1719
        echo ($context["text_none"] ?? null);
        echo "</option>';
              }

              \$('#tab-payment select[name=\\'zone_id\\']').html(html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#tab-payment select[name=\\'country_id\\']').trigger('change');

  \$('#button-payment-address').on('click', function () {
      \$.ajax({
          url: '";
        // line 1734
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/payment/address&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: \$('#tab-payment input[type=\\'text\\'], #tab-payment input[type=\\'hidden\\'], #tab-payment input[type=\\'radio\\']:checked, #tab-payment input[type=\\'checkbox\\']:checked, #tab-payment select, #tab-payment textarea'),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-payment-address').button('loading');
          },
          complete: function () {
              \$('#button-payment-address').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              // Check for errors
              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  for (i in json['error']) {
                      var element = \$('#input-payment-' + i.replace('_', '-'));

                      if (\$(element).parent().hasClass('input-group')) {
                          \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      } else {
                          \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      }
                  }

                  // Highlight any found errors
                  \$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
              } else {
                  // Payment Methods
                  \$.ajax({
                      url: '";
        // line 1770
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/payment/methods&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
                      dataType: 'json',
                      crossDomain: true,
                      beforeSend: function () {
                          \$('#button-payment-address').button('loading');
                      },
                      complete: function () {
                          \$('#button-payment-address').button('reset');
                      },
                      success: function (json) {
                          if (json['error']) {
                              \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                          } else {
                              html = '<option value=\"\">";
        // line 1783
        echo ($context["text_select"] ?? null);
        echo "</option>';

                              if (json['payment_methods']) {
                                  for (i in json['payment_methods']) {
                                      if (json['payment_methods'][i]['code'] == \$('select[name=\\'payment_method\\'] option:selected').val()) {
                                          html += '<option value=\"' + json['payment_methods'][i]['code'] + '\" selected=\"selected\">' + json['payment_methods'][i]['title'] + '</option>';
                                      } else {
                                          html += '<option value=\"' + json['payment_methods'][i]['code'] + '\">' + json['payment_methods'][i]['title'] + '</option>';
                                      }
                                  }
                              }

                              \$('select[name=\\'payment_method\\']').html(html);
                          }
                      },
                      error: function (xhr, ajaxOptions, thrownError) {
                          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                      }
                  }).done(function () {
                      // Refresh products, vouchers and totals
                      \$('#button-refresh').trigger('click');

                      // If shipping required got to shipping tab else total tabs
                      if (\$('select[name=\\'shipping_method\\']').prop('disabled')) {
                          \$('a[href=\\'#tab-total\\']').tab('show');
                      } else {
                          \$('a[href=\\'#tab-shipping\\']').tab('show');
                      }
                  });
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  // Shipping Address
  \$('select[name=\\'shipping_address\\']').on('change', function () {
      \$.ajax({
          url: 'index.php?route=customer/customer/address&user_token=";
        // line 1823
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
          dataType: 'json',
          beforeSend: function () {
              \$('select[name=\\'shipping_address\\']').prop('disabled', true);
          },
          complete: function () {
              \$('select[name=\\'shipping_address\\']').prop('disabled', false);
          },
          success: function (json) {
              // Reset all fields
              \$('#tab-shipping input[type=\\'text\\'], #tab-shipping input[type=\\'text\\'], #tab-shipping textarea').val('');
              \$('#tab-shipping select option').not('#tab-shipping select[name=\\'shipping_address\\']').removeAttr('selected');
              \$('#tab-shipping input[type=\\'checkbox\\'], #tab-shipping input[type=\\'radio\\']').removeAttr('checked');

              \$('#tab-shipping input[name=\\'firstname\\']').val(json['firstname']);
              \$('#tab-shipping input[name=\\'lastname\\']').val(json['lastname']);
              \$('#tab-shipping input[name=\\'company\\']').val(json['company']);
              \$('#tab-shipping input[name=\\'address_1\\']').val(json['address_1']);
              \$('#tab-shipping input[name=\\'address_2\\']').val(json['address_2']);
              \$('#tab-shipping input[name=\\'city\\']').val(json['city']);
              \$('#tab-shipping input[name=\\'postcode\\']').val(json['postcode']);
              \$('#tab-shipping select[name=\\'country_id\\']').val(json['country_id']);

              shipping_zone_id = json['zone_id'];

              for (i in json['custom_field']) {
                  \$('#tab-shipping select[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
                  \$('#tab-shipping textarea[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
                  \$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(json['custom_field'][i]);
                  \$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(json['custom_field'][i]);
                  \$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);
                  \$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);

                  if (json['custom_field'][i] instanceof Array) {
                      for (j = 0; j < json['custom_field'][i].length; j++) {
                          \$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i][j] + '\\']').prop('checked', true);
                      }
                  }
              }

              \$('#tab-shipping select[name=\\'country_id\\']').trigger('change');
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  var shipping_zone_id = '";
        // line 1871
        echo ($context["shipping_zone_id"] ?? null);
        echo "';

  \$('#tab-shipping select[name=\\'country_id\\']').on('change', function () {
      \$.ajax({
          url: 'index.php?route=localisation/country/country&user_token=";
        // line 1875
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
          dataType: 'json',
          beforeSend: function () {
              \$('#tab-shipping select[name=\\'country_id\\']').prop('disabled', true);
          },
          complete: function () {
              \$('#tab-shipping select[name=\\'country_id\\']').prop('disabled', false);
          },
          success: function (json) {
              if (json['postcode_required'] == '1') {
                  \$('#tab-shipping input[name=\\'postcode\\']').closest('.form-group').addClass('required');
              } else {
                  \$('#tab-shipping input[name=\\'postcode\\']').closest('.form-group').removeClass('required');
              }

              html = '<option value=\"\">";
        // line 1890
        echo ($context["text_select"] ?? null);
        echo "</option>';

              if (json['zone'] && json['zone'] != '') {
                  for (i = 0; i < json['zone'].length; i++) {
                      html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                      if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                          html += ' selected=\"selected\"';
                      }

                      html += '>' + json['zone'][i]['name'] + '</option>';
                  }
              } else {
                  html += '<option value=\"0\" selected=\"selected\">";
        // line 1903
        echo ($context["text_none"] ?? null);
        echo "</option>';
              }

              \$('#tab-shipping select[name=\\'zone_id\\']').html(html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#tab-shipping select[name=\\'country_id\\']').trigger('change');

  \$('#button-shipping-address').on('click', function () {
      \$.ajax({
          url: '";
        // line 1918
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/shipping/address&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: \$('#tab-shipping input[type=\\'text\\'], #tab-shipping input[type=\\'hidden\\'], #tab-shipping input[type=\\'radio\\']:checked, #tab-shipping input[type=\\'checkbox\\']:checked, #tab-shipping select, #tab-shipping textarea'),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-shipping-address').button('loading');
          },
          complete: function () {
              \$('#button-shipping-address').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              // Check for errors
              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  for (i in json['error']) {
                      var element = \$('#input-shipping-' + i.replace('_', '-'));

                      if (\$(element).parent().hasClass('input-group')) {
                          \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      } else {
                          \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      }
                  }

                  // Highlight any found errors
                  \$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
              } else {
                  // Shipping Methods
                  var request = \$.ajax({
                      url: '";
        // line 1954
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/shipping/methods&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
                      dataType: 'json',
                      beforeSend: function () {
                          \$('#button-shipping-address').button('loading');
                      },
                      complete: function () {
                          \$('#button-shipping-address').button('reset');
                      },
                      success: function (json) {
                          if (json['error']) {
                              \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                          } else {
                              // Shipping Methods
                              html = '<option value=\"\">";
        // line 1967
        echo ($context["text_select"] ?? null);
        echo "</option>';

                              if (json['shipping_methods']) {
                                  for (i in json['shipping_methods']) {
                                      html += '<optgroup label=\"' + json['shipping_methods'][i]['title'] + '\">';

                                      if (!json['shipping_methods'][i]['error']) {
                                          for (j in json['shipping_methods'][i]['quote']) {
                                              if (json['shipping_methods'][i]['quote'][j]['code'] == \$('select[name=\\'shipping_method\\'] option:selected').val()) {
                                                  html += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" selected=\"selected\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
                                              } else {
                                                  html += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
                                              }
                                          }
                                      } else {
                                          html += '<option value=\"\" style=\"color: #F00;\" disabled=\"disabled\">' + json['shipping_methods'][i]['error'] + '</option>';
                                      }

                                      html += '</optgroup>';
                                  }
                              }

                              \$('select[name=\\'shipping_method\\']').html(html);
                          }
                      },
                      error: function (xhr, ajaxOptions, thrownError) {
                          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                      }
                  }).done(function () {
                      // Refresh products, vouchers and totals
                      \$('#button-refresh').trigger('click');

                      \$('a[href=\\'#tab-total\\']').tab('show');
                  });
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  // Shipping Method
  \$('#button-shipping-method').on('click', function () {
      \$.ajax({
          url: '";
        // line 2012
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/shipping/method&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: 'shipping_method=' + \$('select[name=\\'shipping_method\\'] option:selected').val(),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-shipping-method').button('loading');
          },
          complete: function () {
              \$('#button-shipping-method').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Highlight any found errors
                  \$('select[name=\\'shipping_method\\']').closest('.form-group').addClass('has-error');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Refresh products, vouchers and totals
                  \$('#button-refresh').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  // Payment Method
  \$('#button-payment-method').on('click', function () {
      \$.ajax({
          url: '";
        // line 2050
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/payment/method&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: 'payment_method=' + \$('select[name=\\'payment_method\\'] option:selected').val(),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-payment-method').button('loading');
          },
          complete: function () {
              \$('#button-payment-method').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Highlight any found errors
                  \$('select[name=\\'payment_method\\']').closest('.form-group').addClass('has-error');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Refresh products, vouchers and totals
                  \$('#button-refresh').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  // Coupon
  \$('#button-coupon').on('click', function () {
      \$.ajax({
          url: '";
        // line 2088
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/coupon&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: 'coupon=' + \$('input[name=\\'coupon\\']').val(),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-coupon').button('loading');
          },
          complete: function () {
              \$('#button-coupon').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Highlight any found errors
                  \$('input[name=\\'coupon\\']').closest('.form-group').addClass('has-error');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Refresh products, vouchers and totals
                  \$('#button-refresh').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  // Voucher
  \$('#button-voucher').on('click', function () {
      \$.ajax({
          url: '";
        // line 2126
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/voucher&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: 'voucher=' + \$('input[name=\\'voucher\\']').val(),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-voucher').button('loading');
          },
          complete: function () {
              \$('#button-voucher').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Highlight any found errors
                  \$('input[name=\\'voucher\\']').closest('.form-group').addClass('has-error');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Refresh products, vouchers and totals
                  \$('#button-refresh').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  // Reward
  \$('#button-reward').on('click', function () {
      \$.ajax({
          url: '";
        // line 2164
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/reward&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          type: 'post',
          data: 'reward=' + \$('input[name=\\'reward\\']').val(),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-reward').button('loading');
          },
          complete: function () {
              \$('#button-reward').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();
              \$('.form-group').removeClass('has-error');

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Highlight any found errors
                  \$('input[name=\\'reward\\']').closest('.form-group').addClass('has-error');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  // Refresh products, vouchers and totals
                  \$('#button-refresh').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  // Affiliate
  \$('input[name=\\'affiliate\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 2203
        echo ($context["user_token"] ?? null);
        echo "&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
              dataType: 'json',
              success: function (json) {
                  json.unshift({
                      customer_id: 0,
                      name: '";
        // line 2208
        echo ($context["text_none"] ?? null);
        echo "'
                  });

                  response(\$.map(json, function (item) {
                      return {
                          label: item['name'],
                          value: item['customer_id']
                      }
                  }));
              }
          });
      },
      'select': function (item) {
          \$('input[name=\\'affiliate\\']').val(item['label']);
          \$('input[name=\\'affiliate_id\\']').val(item['value']);
      }
  });

  // Checkout
  \$('#button-save').on('click', function () {
      if (\$('input[name=\\'order_id\\']').val() == 0) {
          var url = '";
        // line 2229
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val();
      } else {
          var url = '";
        // line 2231
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/edit&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val() + '&order_id=' + \$('input[name=\\'order_id\\']').val();
      }

      \$.ajax({
          url: url,
          type: 'post',
          data: \$('select[name=\\'payment_method\\'] option:selected, select[name=\\'shipping_method\\'] option:selected,  #tab-total select[name=\\'order_status_id\\'], #tab-total select, textarea[name=\\'comment\\'], input[name=\\'affiliate_id\\']'),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-save').button('loading');
          },
          complete: function () {
              \$('#button-save').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible, .text-danger').remove();

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['order_id']) {
                  \$('input[name=\\'order_id\\']').val(json['order_id']);
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#content').delegate('button[id^=\\'button-upload\\'], button[id^=\\'button-custom-field\\'], button[id^=\\'button-payment-custom-field\\'], button[id^=\\'button-shipping-custom-field\\']', 'click', function () {
      var element = this;

      \$('#form-upload').remove();

      \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\"/></form>');

      \$('#form-upload input[name=\\'file\\']').trigger('click');

      if (typeof timer != 'undefined') {
          clearInterval(timer);
      }

      timer = setInterval(function () {
          if (\$('#form-upload input[name=\\'file\\']').val() != '') {
              clearInterval(timer);

              \$.ajax({
                  url: 'index.php?route=tool/upload/upload&user_token=";
        // line 2285
        echo ($context["user_token"] ?? null);
        echo "',
                  type: 'post',
                  dataType: 'json',
                  data: new FormData(\$('#form-upload')[0]),
                  cache: false,
                  contentType: false,
                  processData: false,
                  beforeSend: function () {
                      \$(element).button('loading');
                  },
                  complete: function () {
                      \$(element).button('reset');
                  },
                  success: function (json) {
                      \$(element).parent().find('.text-danger').remove();

                      if (json['error']) {
                          \$(element).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                      }

                      if (json['success']) {
                          alert(json['success']);
                      }

                      if (json['code']) {
                          \$(element).parent().find('input[type=\\'hidden\\']').val(json['code']);
                      }
                  },
                  error: function (xhr, ajaxOptions, thrownError) {
                      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                  }
              });
          }
      }, 500);
  });

  \$('.date').datetimepicker({
      language: '";
        // line 2322
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
  });

  \$('.datetime').datetimepicker({
      language: '";
        // line 2327
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: true,
      pickTime: true
  });

  \$('.time').datetimepicker({
      language: '";
        // line 2333
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: false
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  // Sort the custom fields
  \$('#tab-customer .form-group[data-sort]').detach().each(function () {
      if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
          \$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
      }

      if (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
          \$('#tab-customer .form-group:last').after(this);
      }

      if (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
          \$('#tab-customer .form-group:first').before(this);
      }
  });

  // Sort the custom fields
  \$('#tab-payment .form-group[data-sort]').detach().each(function () {
      if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-payment .form-group').length) {
          \$('#tab-payment .form-group').eq(\$(this).attr('data-sort')).before(this);
      }

      if (\$(this).attr('data-sort') > \$('#tab-payment .form-group').length) {
          \$('#tab-payment .form-group:last').after(this);
      }

      if (\$(this).attr('data-sort') < -\$('#tab-payment .form-group').length) {
          \$('#tab-payment .form-group:first').before(this);
      }
  });

  \$('#tab-shipping .form-group[data-sort]').detach().each(function () {
      if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-shipping .form-group').length) {
          \$('#tab-shipping .form-group').eq(\$(this).attr('data-sort')).before(this);
      }

      if (\$(this).attr('data-sort') > \$('#tab-shipping .form-group').length) {
          \$('#tab-shipping .form-group:last').after(this);
      }

      if (\$(this).attr('data-sort') < -\$('#tab-shipping .form-group').length) {
          \$('#tab-shipping .form-group:first').before(this);
      }
  });

  // Add all products to the cart using the api
  \$('#button-refresh').on('click', function () {
      \$.ajax({
          url: '";
        // line 2385
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/products&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
          dataType: 'json',
          crossDomain: true,
          beforeSend: function () {
              \$('#button-refresh').button('loading');
          },
          complete: function () {
              \$('#button-refresh').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              // Check for errors
              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  if (json['error']['stock']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['stock'] + '</div>');
                  }

                  if (json['error']['minimum']) {
                      for (i in json['error']['minimum']) {
                          \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['minimum'][i] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                      }
                  }
              }

              var shipping = false;

              html = '';

              if (json['products'].length) {
                  for (i = 0; i < json['products'].length; i++) {
                      product = json['products'][i];

                      html += '<tr>';
                      html += '  <td class=\"text-left\">' + product['name'] + ' ' + (!product['stock'] ? '<span class=\"text-danger\">***</span>' : '') + '<br/>';
                      html += '  <input type=\"hidden\" name=\"product[' + i + '][product_id]\" value=\"' + product['product_id'] + '\"/>';

                      if (product['option']) {
                          for (j = 0; j < product['option'].length; j++) {
                              option = product['option'][j];

                              html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br/>';

                              if (option['type'] == 'select' || option['type'] == 'radio' || option['type'] == 'image') {
                                  html += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\"/>';
                              }

                              if (option['type'] == 'checkbox') {
                                  html += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\"/>';
                              }

                              if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
                                  html += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\"/>';
                              }
                          }
                      }

                      // Subscription
                      if (product['subscription']) {
                          html += '<br/>';
                          html += '  - <small>";
        // line 2449
        echo ($context["text_subscription"] ?? null);
        echo " ' + product['subscription'] + '</small>';
                      }

                      html += '  </td>';
                      html += '  <td class=\"text-left\">' + product['model'] + '</td>';
                      html += '  <td class=\"text-right\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\"><input type=\"text\" name=\"product[' + i + '][quantity]\" value=\"' + product['quantity'] + '\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 2454
        echo ($context["button_refresh"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button></span></div></td>';
                      html += '  <td class=\"text-right\">' + product['price'] + '</td>';
                      html += '  <td class=\"text-right\">' + product['total'] + '</td>';
                      html += '  <td class=\"text-center\" style=\"width: 3px;\"><button type=\"button\" value=\"' + product['cart_id'] + '\" data-toggle=\"tooltip\" title=\"";
        // line 2457
        echo ($context["button_remove"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
                      html += '</tr>';

                      if (product['shipping'] != 0) {
                          shipping = true;
                      }
                  }
              }

              if (!shipping) {
                  \$('select[name=\\'shipping_method\\'] option').removeAttr('selected');
                  \$('select[name=\\'shipping_method\\']').prop('disabled', true);
                  \$('#button-shipping-method').prop('disabled', true);
              } else {
                  \$('select[name=\\'shipping_method\\']').prop('disabled', false);
                  \$('#button-shipping-method').prop('disabled', false);
              }

              if (json['vouchers'].length) {
                  for (i in json['vouchers']) {
                      voucher = json['vouchers'][i];

                      html += '<tr>';
                      html += '  <td class=\"text-left\">' + voucher['description'];
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][code]\" value=\"' + voucher['code'] + '\"/>';
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][description]\" value=\"' + voucher['description'] + '\"/>';
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][from_name]\" value=\"' + voucher['from_name'] + '\"/>';
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][from_email]\" value=\"' + voucher['from_email'] + '\"/>';
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][to_name]\" value=\"' + voucher['to_name'] + '\"/>';
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][to_email]\" value=\"' + voucher['to_email'] + '\"/>';
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][voucher_theme_id]\" value=\"' + voucher['voucher_theme_id'] + '\"/>';
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][message]\" value=\"' + voucher['message'] + '\"/>';
                      html += '    <input type=\"hidden\" name=\"voucher[' + i + '][amount]\" value=\"' + voucher['amount'] + '\"/>';
                      html += '  </td>';
                      html += '  <td class=\"text-left\"></td>';
                      html += '  <td class=\"text-right\">1</td>';
                      html += '  <td class=\"text-right\">' + voucher['price'] + '</td>';
                      html += '  <td class=\"text-right\">' + voucher['price'] + '</td>';
                      html += '  <td class=\"text-center\" style=\"width: 3px;\"><button type=\"button\" value=\"' + voucher['code'] + '\" data-toggle=\"tooltip\" title=\"";
        // line 2495
        echo ($context["button_remove"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
                      html += '</tr>';
                  }
              }

              if (!json['products'].length && !json['vouchers'].length) {
                  html += '<tr>';
                  html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2502
        echo ($context["text_no_results"] ?? null);
        echo "</td>';
                  html += '</tr>';
              }

              \$('#cart').html(html);

              // Totals
              html = '';

              if (json['products'].length) {
                  for (i = 0; i < json['products'].length; i++) {
                      product = json['products'][i];

                      html += '<tr>';
                      html += '  <td class=\"text-left\">' + product['name'] + ' ' + (!product['stock'] ? '<span class=\"text-danger\">***</span>' : '') + '<br/>';

                      if (product['option']) {
                          for (j = 0; j < product['option'].length; j++) {
                              option = product['option'][j];

                              html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br/>';
                          }
                      }

                      html += '  </td>';
                      html += '  <td class=\"text-left\">' + product['model'] + '</td>';
                      html += '  <td class=\"text-right\">' + product['quantity'] + '</td>';
                      html += '  <td class=\"text-right\">' + product['price'] + '</td>';
                      html += '  <td class=\"text-right\">' + product['total'] + '</td>';
                      html += '</tr>';
                  }
              }

              if (json['vouchers'].length) {
                  for (i in json['vouchers']) {
                      voucher = json['vouchers'][i];

                      html += '<tr>';
                      html += '  <td class=\"text-left\">' + voucher['description'] + '</td>';
                      html += '  <td class=\"text-left\"></td>';
                      html += '  <td class=\"text-right\">1</td>';
                      html += '  <td class=\"text-right\">' + voucher['amount'] + '</td>';
                      html += '  <td class=\"text-right\">' + voucher['amount'] + '</td>';
                      html += '</tr>';
                  }
              }

              if (json['totals'].length) {
                  for (i in json['totals']) {
                      total = json['totals'][i];

                      html += '<tr>';
                      html += '  <td class=\"text-right\" colspan=\"4\">' + total['title'] + ':</td>';
                      html += '  <td class=\"text-right\">' + total['text'] + '</td>';
                      html += '</tr>';
                  }
              }

              if (!json['totals'].length && !json['products'].length && !json['vouchers'].length) {
                  html += '<tr>';
                  html += '  <td colspan=\"5\" class=\"text-center\">";
        // line 2562
        echo ($context["text_no_results"] ?? null);
        echo "</td>';
                  html += '</tr>';
              }

              \$('#total').html(html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });
  //--></script>
</div>
";
        // line 2575
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sale/order_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4597 => 2575,  4581 => 2562,  4518 => 2502,  4506 => 2495,  4463 => 2457,  4455 => 2454,  4447 => 2449,  4378 => 2385,  4323 => 2333,  4314 => 2327,  4306 => 2322,  4266 => 2285,  4207 => 2231,  4200 => 2229,  4176 => 2208,  4168 => 2203,  4124 => 2164,  4081 => 2126,  4038 => 2088,  3995 => 2050,  3952 => 2012,  3904 => 1967,  3886 => 1954,  3845 => 1918,  3827 => 1903,  3811 => 1890,  3793 => 1875,  3786 => 1871,  3735 => 1823,  3692 => 1783,  3674 => 1770,  3633 => 1734,  3615 => 1719,  3599 => 1706,  3581 => 1691,  3574 => 1687,  3523 => 1639,  3480 => 1601,  3442 => 1568,  3423 => 1552,  3380 => 1514,  3323 => 1462,  3309 => 1451,  3300 => 1445,  3292 => 1440,  3268 => 1419,  3262 => 1416,  3222 => 1381,  3182 => 1344,  3129 => 1294,  3102 => 1270,  3089 => 1260,  3063 => 1237,  3017 => 1196,  2986 => 1170,  2946 => 1135,  2917 => 1109,  2900 => 1095,  2840 => 1038,  2836 => 1037,  2828 => 1032,  2789 => 998,  2766 => 978,  2760 => 977,  2754 => 974,  2744 => 967,  2740 => 966,  2735 => 964,  2728 => 960,  2723 => 958,  2716 => 954,  2713 => 953,  2707 => 952,  2699 => 950,  2691 => 948,  2688 => 947,  2684 => 946,  2678 => 943,  2668 => 938,  2662 => 937,  2657 => 935,  2647 => 930,  2641 => 929,  2636 => 927,  2626 => 922,  2622 => 921,  2617 => 919,  2607 => 914,  2604 => 913,  2596 => 911,  2594 => 910,  2590 => 909,  2583 => 905,  2573 => 900,  2570 => 899,  2562 => 897,  2560 => 896,  2556 => 895,  2549 => 891,  2544 => 889,  2535 => 883,  2527 => 878,  2523 => 877,  2519 => 876,  2515 => 875,  2511 => 874,  2499 => 865,  2495 => 864,  2489 => 861,  2484 => 858,  2478 => 857,  2475 => 856,  2458 => 850,  2450 => 847,  2443 => 846,  2440 => 845,  2423 => 839,  2415 => 836,  2408 => 835,  2405 => 834,  2388 => 828,  2380 => 825,  2373 => 824,  2370 => 823,  2363 => 819,  2353 => 818,  2349 => 817,  2343 => 816,  2338 => 814,  2331 => 813,  2328 => 812,  2313 => 808,  2306 => 806,  2299 => 805,  2296 => 804,  2281 => 800,  2274 => 798,  2267 => 797,  2264 => 796,  2258 => 792,  2251 => 790,  2245 => 787,  2237 => 786,  2234 => 785,  2228 => 782,  2220 => 781,  2217 => 780,  2215 => 779,  2212 => 778,  2208 => 777,  2204 => 776,  2199 => 774,  2192 => 773,  2189 => 772,  2183 => 768,  2176 => 766,  2170 => 763,  2162 => 762,  2159 => 761,  2153 => 758,  2145 => 757,  2142 => 756,  2140 => 755,  2137 => 754,  2133 => 753,  2129 => 752,  2124 => 750,  2117 => 749,  2114 => 748,  2108 => 744,  2102 => 743,  2094 => 741,  2086 => 739,  2083 => 738,  2079 => 737,  2075 => 736,  2067 => 735,  2060 => 733,  2053 => 732,  2050 => 731,  2047 => 730,  2043 => 729,  2034 => 723,  2028 => 719,  2022 => 718,  2014 => 716,  2006 => 714,  2003 => 713,  1999 => 712,  1995 => 711,  1989 => 708,  1982 => 704,  1977 => 702,  1970 => 698,  1965 => 696,  1958 => 692,  1953 => 690,  1946 => 686,  1941 => 684,  1934 => 680,  1929 => 678,  1922 => 674,  1917 => 672,  1910 => 668,  1905 => 666,  1899 => 662,  1880 => 660,  1876 => 659,  1872 => 658,  1866 => 655,  1856 => 650,  1851 => 648,  1847 => 646,  1841 => 645,  1838 => 644,  1821 => 638,  1813 => 635,  1806 => 634,  1803 => 633,  1786 => 627,  1778 => 624,  1771 => 623,  1768 => 622,  1751 => 616,  1743 => 613,  1736 => 612,  1733 => 611,  1726 => 607,  1716 => 606,  1708 => 605,  1703 => 603,  1696 => 602,  1693 => 601,  1678 => 597,  1671 => 595,  1664 => 594,  1661 => 593,  1646 => 589,  1639 => 587,  1632 => 586,  1629 => 585,  1623 => 581,  1616 => 579,  1610 => 576,  1602 => 575,  1599 => 574,  1593 => 571,  1585 => 570,  1582 => 569,  1580 => 568,  1577 => 567,  1573 => 566,  1569 => 565,  1564 => 563,  1557 => 562,  1554 => 561,  1548 => 557,  1541 => 555,  1535 => 552,  1527 => 551,  1524 => 550,  1518 => 547,  1510 => 546,  1507 => 545,  1505 => 544,  1502 => 543,  1498 => 542,  1494 => 541,  1489 => 539,  1482 => 538,  1479 => 537,  1473 => 533,  1467 => 532,  1459 => 530,  1451 => 528,  1448 => 527,  1444 => 526,  1440 => 525,  1432 => 524,  1425 => 522,  1418 => 521,  1415 => 520,  1412 => 519,  1408 => 518,  1399 => 512,  1393 => 508,  1387 => 507,  1379 => 505,  1371 => 503,  1368 => 502,  1364 => 501,  1360 => 500,  1354 => 497,  1347 => 493,  1342 => 491,  1335 => 487,  1330 => 485,  1323 => 481,  1318 => 479,  1311 => 475,  1306 => 473,  1299 => 469,  1294 => 467,  1287 => 463,  1282 => 461,  1275 => 457,  1270 => 455,  1264 => 451,  1245 => 449,  1241 => 448,  1237 => 447,  1231 => 444,  1222 => 438,  1215 => 434,  1202 => 426,  1194 => 421,  1189 => 419,  1180 => 413,  1174 => 409,  1163 => 407,  1159 => 406,  1153 => 403,  1144 => 397,  1135 => 391,  1126 => 385,  1117 => 379,  1112 => 377,  1102 => 372,  1090 => 363,  1080 => 356,  1075 => 354,  1067 => 349,  1063 => 348,  1057 => 344,  1051 => 341,  1048 => 340,  1045 => 339,  1039 => 338,  1037 => 337,  1024 => 329,  1018 => 328,  1012 => 327,  1006 => 326,  1000 => 325,  994 => 324,  988 => 323,  982 => 322,  976 => 321,  970 => 320,  966 => 319,  963 => 318,  958 => 317,  955 => 316,  949 => 315,  947 => 314,  935 => 309,  931 => 308,  928 => 307,  921 => 305,  918 => 304,  915 => 303,  909 => 302,  899 => 300,  896 => 299,  886 => 297,  883 => 296,  873 => 294,  871 => 293,  863 => 291,  859 => 290,  853 => 289,  848 => 287,  845 => 286,  840 => 285,  837 => 284,  835 => 283,  828 => 279,  824 => 278,  820 => 277,  816 => 276,  812 => 275,  808 => 274,  797 => 266,  793 => 265,  790 => 264,  784 => 263,  781 => 262,  764 => 256,  756 => 253,  749 => 252,  746 => 251,  729 => 245,  721 => 242,  714 => 241,  711 => 240,  694 => 234,  686 => 231,  679 => 230,  676 => 229,  669 => 225,  659 => 224,  655 => 223,  651 => 222,  646 => 220,  639 => 219,  636 => 218,  621 => 214,  614 => 212,  607 => 211,  604 => 210,  589 => 206,  582 => 204,  575 => 203,  572 => 202,  566 => 198,  559 => 196,  553 => 193,  545 => 192,  542 => 191,  536 => 188,  528 => 187,  525 => 186,  523 => 185,  520 => 184,  516 => 183,  512 => 182,  507 => 180,  500 => 179,  497 => 178,  491 => 174,  484 => 172,  478 => 169,  470 => 168,  467 => 167,  461 => 164,  453 => 163,  450 => 162,  448 => 161,  445 => 160,  441 => 159,  437 => 158,  432 => 156,  425 => 155,  422 => 154,  416 => 150,  410 => 149,  402 => 147,  394 => 145,  391 => 144,  387 => 143,  383 => 142,  375 => 141,  368 => 139,  361 => 138,  358 => 137,  355 => 136,  351 => 135,  345 => 132,  340 => 130,  334 => 129,  327 => 125,  318 => 119,  309 => 113,  300 => 107,  291 => 101,  281 => 94,  276 => 92,  269 => 88,  264 => 86,  257 => 82,  252 => 80,  246 => 76,  240 => 75,  232 => 73,  224 => 71,  221 => 70,  217 => 69,  211 => 66,  204 => 62,  198 => 61,  193 => 59,  187 => 55,  181 => 54,  173 => 52,  165 => 50,  162 => 49,  158 => 48,  152 => 45,  146 => 41,  140 => 40,  132 => 38,  124 => 36,  121 => 35,  117 => 34,  111 => 31,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  79 => 17,  71 => 11,  60 => 9,  56 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_form.twig", "");
    }
}

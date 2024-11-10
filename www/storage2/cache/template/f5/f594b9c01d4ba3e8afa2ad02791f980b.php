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

/* customer/customer_form.twig */
class __TwigTemplate_c6cf3211eb9ea93c02c5edb36c739561 extends Template
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
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            ";
        // line 30
        if (($context["customer_id"] ?? null)) {
            // line 31
            echo "              <li><a href=\"#tab-payment\" data-toggle=\"tab\">";
            echo ($context["tab_payment_method"] ?? null);
            echo "</a></li>
              <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            // line 32
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
              <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
            // line 33
            echo ($context["tab_transaction"] ?? null);
            echo "</a></li>
              <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            // line 34
            echo ($context["tab_reward"] ?? null);
            echo "</a></li>
              <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
            // line 35
            echo ($context["tab_ip"] ?? null);
            echo "</a></li>
            ";
        }
        // line 37
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                    <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                    ";
        // line 44
        $context["address_row"] = 1;
        // line 45
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 46
            echo "                      <li>
                        <a href=\"#tab-address";
            // line 47
            echo ($context["address_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address a:first').tab('show'); \$('#address a[href=\\'#tab-address";
            echo ($context["address_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-address";
            echo ($context["address_row"] ?? null);
            echo "').remove();\"></i> ";
            echo ($context["tab_address"] ?? null);
            echo " ";
            echo ($context["address_row"] ?? null);
            echo "</a>
                      </li>
                      ";
            // line 49
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 50
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    <li id=\"address-add\">
                      <a onclick=\"addAddress();\"><i class=\"fa fa-plus-circle\"></i> ";
        // line 52
        echo ($context["button_address_add"] ?? null);
        echo "</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>";
        // line 59
        echo ($context["text_account"] ?? null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 61
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 65
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 65) == ($context["customer_group_id"] ?? null))) {
                // line 66
                echo "                                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 66);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 66);
                echo "</option>
                                ";
            } else {
                // line 68
                echo "                                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 68);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 68);
                echo "</option>
                                ";
            }
            // line 70
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 75
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 77
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                            ";
        // line 78
        if (($context["error_firstname"] ?? null)) {
            // line 79
            echo "                              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 81
        echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 84
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 86
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                            ";
        // line 87
        if (($context["error_lastname"] ?? null)) {
            // line 88
            echo "                              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 90
        echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 93
        echo ($context["entry_email"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 95
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                            ";
        // line 96
        if (($context["error_email"] ?? null)) {
            // line 97
            echo "                              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 99
        echo "                          </div>
                        </div>
                        <div class=\"form-group";
        // line 101
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 102
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 104
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                            ";
        // line 105
        if (($context["error_telephone"] ?? null)) {
            // line 106
            echo "                              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 108
        echo "                          </div>
                        </div>
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 111
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 111) == "account")) {
                // line 112
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "select")) {
                    // line 113
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 113);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 114);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <select name=\"custom_field[";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    echo "\" class=\"form-control\">
                                    <option value=\"\">";
                    // line 117
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                    ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 118));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 119
                        echo "                                      ";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 119) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null)))) {
                            // line 120
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 120);
                            echo "</option>
                                      ";
                        } else {
                            // line 122
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 122);
                            echo "</option>
                                      ";
                        }
                        // line 124
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "                                  </select>
                                  ";
                    // line 126
                    if ((($__internal_compile_2 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null)) {
                        // line 127
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 129
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 132
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "radio")) {
                    // line 133
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 133);
                    echo "\">
                                <label class=\"col-sm-2 control-label\">";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div>
                                    ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 138
                        echo "                                      <div class=\"radio\">
                                        ";
                        // line 139
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 139) == (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null)))) {
                            // line 140
                            echo "                                          <label>
                                            <input type=\"radio\" name=\"custom_field[";
                            // line 141
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 141);
                            echo "\" checked=\"checked\"/>
                                            ";
                            // line 142
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 142);
                            echo "
                                          </label>
                                        ";
                        } else {
                            // line 145
                            echo "                                          <label>
                                            <input type=\"radio\" name=\"custom_field[";
                            // line 146
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 146);
                            echo "\"/>
                                            ";
                            // line 147
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 147);
                            echo "
                                          </label>
                                        ";
                        }
                        // line 150
                        echo "                                      </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "                                  </div>
                                  ";
                    // line 153
                    if ((($__internal_compile_6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) {
                        // line 154
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 156
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 159
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 159) == "checkbox")) {
                    // line 160
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 160);
                    echo "\">
                                <label class=\"col-sm-2 control-label\">";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div>
                                    ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 164));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 165
                        echo "                                      <div class=\"checkbox\">
                                        ";
                        // line 166
                        if (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 166), (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null)))) {
                            // line 167
                            echo "                                          <label>
                                            <input type=\"checkbox\" name=\"custom_field[";
                            // line 168
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 168);
                            echo "\" checked=\"checked\"/>
                                            ";
                            // line 169
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 169);
                            echo "
                                          </label>
                                        ";
                        } else {
                            // line 172
                            echo "                                          <label>
                                            <input type=\"checkbox\" name=\"custom_field[";
                            // line 173
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 173);
                            echo "\"/>
                                            ";
                            // line 174
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 174);
                            echo "
                                          </label>
                                        ";
                        }
                        // line 177
                        echo "                                      </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "                                  </div>
                                  ";
                    // line 180
                    if ((($__internal_compile_10 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) {
                        // line 181
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_11 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 183
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 186
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 186) == "text")) {
                    // line 187
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 187);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 188);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"custom_field[";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null)) ? ((($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 190)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 190);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190);
                    echo "\" class=\"form-control\"/>
                                  ";
                    // line 191
                    if ((($__internal_compile_14 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null)) {
                        // line 192
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_15 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 194
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 197
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 197) == "textarea")) {
                    // line 198
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 198);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 199);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <textarea name=\"custom_field[";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 201);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 201)));
                    echo "</textarea>
                                  ";
                    // line 202
                    if ((($__internal_compile_18 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null)) {
                        // line 203
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_19 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 205
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 208
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 208) == "file")) {
                    // line 209
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 209);
                    echo "\">
                                <label class=\"col-sm-2 control-label\">";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 210);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <button type=\"button\" id=\"button-custom-field";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                                  <input type=\"hidden\" name=\"custom_field[";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_20 = (($__internal_compile_21 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["code"] ?? null) : null)) ? ((($__internal_compile_22 = (($__internal_compile_23 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["code"] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                    echo "\"/>
                                  <span>";
                    // line 214
                    echo (($__internal_compile_24 = (($__internal_compile_25 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["name"] ?? null) : null);
                    echo "</span>
                                  ";
                    // line 215
                    if ((($__internal_compile_26 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null)) {
                        // line 216
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_27 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 218
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 221
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 221) == "date")) {
                    // line 222
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 222);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 223);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group date\">
                                    <input type=\"text\" name=\"custom_field[";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_28 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) ? ((($__internal_compile_29 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 226)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 226);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                    echo "\" class=\"form-control\"/>
                                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                                  </div>
                                  ";
                    // line 229
                    if ((($__internal_compile_30 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229)] ?? null) : null)) {
                        // line 230
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_31 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 232
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 235
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 235) == "time")) {
                    // line 236
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 236);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 237);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group time\">
                                    <input type=\"text\" name=\"custom_field[";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_32 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240)] ?? null) : null)) ? ((($__internal_compile_33 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 240)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 240);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                    echo "\" class=\"form-control\"/>
                                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                                  </div>
                                  ";
                    // line 243
                    if ((($__internal_compile_34 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null)) {
                        // line 244
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_35 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 246
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 249
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 249) == "datetime")) {
                    // line 250
                    echo "                              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 250);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 251);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group datetime\">
                                    <input type=\"text\" name=\"custom_field[";
                    // line 254
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_36 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254)] ?? null) : null)) ? ((($__internal_compile_37 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 254)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 254);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                    echo "\" class=\"form-control\"/>
                                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                                  </div>
                                  ";
                    // line 257
                    if ((($__internal_compile_38 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257)] ?? null) : null)) {
                        // line 258
                        echo "                                    <div class=\"text-danger\">";
                        echo (($__internal_compile_39 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258)] ?? null) : null);
                        echo "</div>
                                  ";
                    }
                    // line 260
                    echo "                                </div>
                              </div>
                            ";
                }
                // line 263
                echo "                          ";
            }
            // line 264
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 267
        echo ($context["text_password"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 269
        echo ($context["entry_password"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 271
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\"/>
                            ";
        // line 272
        if (($context["error_password"] ?? null)) {
            // line 273
            echo "                              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 275
        echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 278
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 280
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\"/>
                            ";
        // line 281
        if (($context["error_confirm"] ?? null)) {
            // line 282
            echo "                              <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 284
        echo "                          </div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 288
        echo ($context["text_other"] ?? null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 290
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              ";
        // line 293
        if (($context["newsletter"] ?? null)) {
            // line 294
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\">";
            // line 295
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 297
            echo "                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 298
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        }
        // line 300
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 304
        echo ($context["entry_status"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              ";
        // line 307
        if (($context["status"] ?? null)) {
            // line 308
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\">";
            // line 309
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 311
            echo "                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 312
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        }
        // line 314
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-safe\"><span data-toggle=\"tooltip\" title=\"";
        // line 318
        echo ($context["help_safe"] ?? null);
        echo "\">";
        echo ($context["entry_safe"] ?? null);
        echo "</span></label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              ";
        // line 321
        if (($context["safe"] ?? null)) {
            // line 322
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                <option value=\"0\">";
            // line 323
            echo ($context["text_no"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 325
            echo "                                <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 326
            echo ($context["text_no"] ?? null);
            echo "</option>
                              ";
        }
        // line 328
        echo "                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    ";
        // line 333
        $context["address_row"] = 1;
        // line 334
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 335
            echo "                      <div id=\"tab-address";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"tab-pane\">
                        <input type=\"hidden\" name=\"address[";
            // line 336
            echo ($context["address_row"] ?? null);
            echo "][address_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 336);
            echo "\"/>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname";
            // line 338
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 340
            echo ($context["address_row"] ?? null);
            echo "][firstname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 340);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-firstname";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 341
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = ($context["error_address"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[($context["address_row"] ?? null)] ?? null) : null), "firstname", [], "any", false, false, false, 341)) {
                // line 342
                echo "                              <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = ($context["error_address"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[($context["address_row"] ?? null)] ?? null) : null), "firstname", [], "any", false, false, false, 342);
                echo "</div>
                            ";
            }
            // line 344
            echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-lastname";
            // line 347
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 349
            echo ($context["address_row"] ?? null);
            echo "][lastname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 349);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-lastname";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 350
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_42 = ($context["error_address"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[($context["address_row"] ?? null)] ?? null) : null), "lastname", [], "any", false, false, false, 350)) {
                // line 351
                echo "                              <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_43 = ($context["error_address"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[($context["address_row"] ?? null)] ?? null) : null), "lastname", [], "any", false, false, false, 351);
                echo "</div>
                            ";
            }
            // line 353
            echo "                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-company";
            // line 356
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_company"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 358
            echo ($context["address_row"] ?? null);
            echo "][company]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 358);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-company";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-address-1";
            // line 362
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 364
            echo ($context["address_row"] ?? null);
            echo "][address_1]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 364);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-address-1";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 365
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_44 = ($context["error_address"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[($context["address_row"] ?? null)] ?? null) : null), "address_1", [], "any", false, false, false, 365)) {
                // line 366
                echo "                              <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_45 = ($context["error_address"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[($context["address_row"] ?? null)] ?? null) : null), "address_1", [], "any", false, false, false, 366);
                echo "</div>
                            ";
            }
            // line 368
            echo "                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-address-2";
            // line 371
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 373
            echo ($context["address_row"] ?? null);
            echo "][address_2]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 373);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-address-2";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-city";
            // line 377
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_city"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 379
            echo ($context["address_row"] ?? null);
            echo "][city]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 379);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-city";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 380
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_46 = ($context["error_address"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[($context["address_row"] ?? null)] ?? null) : null), "city", [], "any", false, false, false, 380)) {
                // line 381
                echo "                              <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_47 = ($context["error_address"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[($context["address_row"] ?? null)] ?? null) : null), "city", [], "any", false, false, false, 381);
                echo "</div>
                            ";
            }
            // line 383
            echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-postcode";
            // line 386
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 388
            echo ($context["address_row"] ?? null);
            echo "][postcode]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 388);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-postcode";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 389
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_48 = ($context["error_address"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[($context["address_row"] ?? null)] ?? null) : null), "postcode", [], "any", false, false, false, 389)) {
                // line 390
                echo "                              <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_49 = ($context["error_address"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[($context["address_row"] ?? null)] ?? null) : null), "postcode", [], "any", false, false, false, 390);
                echo "</div>
                            ";
            }
            // line 392
            echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-country";
            // line 395
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_country"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"address[";
            // line 397
            echo ($context["address_row"] ?? null);
            echo "][country_id]\" id=\"input-country";
            echo ($context["address_row"] ?? null);
            echo "\" onchange=\"country(this, '";
            echo ($context["address_row"] ?? null);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone_id", [], "any", false, false, false, 397);
            echo "');\" class=\"form-control\">
                              <option value=\"\">";
            // line 398
            echo ($context["text_select"] ?? null);
            echo "</option>
                              ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 400
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 400) == twig_get_attribute($this->env, $this->source, $context["address"], "country_id", [], "any", false, false, false, 400))) {
                    // line 401
                    echo "                                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 401);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 401);
                    echo "</option>
                                ";
                } else {
                    // line 403
                    echo "                                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 403);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 403);
                    echo "</option>
                                ";
                }
                // line 405
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            echo "                            </select>
                            ";
            // line 407
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_50 = ($context["error_address"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[($context["address_row"] ?? null)] ?? null) : null), "country", [], "any", false, false, false, 407)) {
                // line 408
                echo "                              <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_51 = ($context["error_address"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[($context["address_row"] ?? null)] ?? null) : null), "country", [], "any", false, false, false, 408);
                echo "</div>
                            ";
            }
            // line 410
            echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-zone";
            // line 413
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_zone"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"address[";
            // line 415
            echo ($context["address_row"] ?? null);
            echo "][zone_id]\" id=\"input-zone";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\">
                            </select>
                            ";
            // line 417
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_52 = ($context["error_address"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[($context["address_row"] ?? null)] ?? null) : null), "zone", [], "any", false, false, false, 417)) {
                // line 418
                echo "                              <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_53 = ($context["error_address"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[($context["address_row"] ?? null)] ?? null) : null), "zone", [], "any", false, false, false, 418);
                echo "</div>
                            ";
            }
            // line 420
            echo "                          </div>
                        </div>
                        ";
            // line 422
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 423
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 423) == "address")) {
                    // line 424
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 424) == "select")) {
                        // line 425
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 425);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 425) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 426
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 426);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 426);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <select name=\"address[";
                        // line 428
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                        echo "]\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                        echo "\" class=\"form-control\">
                                    <option value=\"\">";
                        // line 429
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                                    ";
                        // line 430
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 430));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 431
                            echo "                                      ";
                            if (((($__internal_compile_54 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 431)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 431)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 431) == (($__internal_compile_55 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 431)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 431)] ?? null) : null)))) {
                                // line 432
                                echo "                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 432);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 432);
                                echo "</option>
                                      ";
                            } else {
                                // line 434
                                echo "                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 434);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 434);
                                echo "</option>
                                      ";
                            }
                            // line 436
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 437
                        echo "                                  </select>
                                  ";
                        // line 438
                        if ((($__internal_compile_56 = (($__internal_compile_57 = (($__internal_compile_58 = ($context["error_address"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["custom_field"] ?? null) : null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438)] ?? null) : null)) {
                            // line 439
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_59 = twig_get_attribute($this->env, $this->source, (($__internal_compile_60 = ($context["error_address"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 439)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 439)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 441
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 444
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 444) == "radio")) {
                        // line 445
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 445);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 445) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\">";
                        // line 446
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 446);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div>
                                    ";
                        // line 449
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 449));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 450
                            echo "                                      <div class=\"radio\">
                                        ";
                            // line 451
                            if (((($__internal_compile_61 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 451)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 451)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 451) == (($__internal_compile_62 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 451)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 451)] ?? null) : null)))) {
                                // line 452
                                echo "                                          <label>
                                            <input type=\"radio\" name=\"address[";
                                // line 453
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 453);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 453);
                                echo "\" checked=\"checked\"/>
                                            ";
                                // line 454
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 454);
                                echo "
                                          </label>
                                        ";
                            } else {
                                // line 457
                                echo "                                          <label>
                                            <input type=\"radio\" name=\"address[";
                                // line 458
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 458);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 458);
                                echo "\"/>
                                            ";
                                // line 459
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 459);
                                echo "
                                          </label>
                                        ";
                            }
                            // line 462
                            echo "                                      </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 464
                        echo "                                  </div>
                                  ";
                        // line 465
                        if ((($__internal_compile_63 = twig_get_attribute($this->env, $this->source, (($__internal_compile_64 = ($context["error_address"] ?? null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 465)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 465)] ?? null) : null)) {
                            // line 466
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_65 = twig_get_attribute($this->env, $this->source, (($__internal_compile_66 = ($context["error_address"] ?? null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 466)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 466)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 468
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 471
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 471) == "checkbox")) {
                        // line 472
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 472);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 472) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\">";
                        // line 473
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 473);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div>
                                    ";
                        // line 476
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 476));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 477
                            echo "                                      <div class=\"checkbox\">
                                        ";
                            // line 478
                            if (((($__internal_compile_67 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 478)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 478)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 478), (($__internal_compile_68 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 478)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 478)] ?? null) : null)))) {
                                // line 479
                                echo "                                          <label>
                                            <input type=\"checkbox\" name=\"address[";
                                // line 480
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 480);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 480);
                                echo "\" checked=\"checked\"/>
                                            ";
                                // line 481
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 481);
                                echo "
                                          </label>
                                        ";
                            } else {
                                // line 484
                                echo "                                          <label>
                                            <input type=\"checkbox\" name=\"address[";
                                // line 485
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 485);
                                echo "\"/>
                                            ";
                                // line 486
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 486);
                                echo "
                                          </label>
                                        ";
                            }
                            // line 489
                            echo "                                      </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 491
                        echo "                                  </div>
                                  ";
                        // line 492
                        if ((($__internal_compile_69 = (($__internal_compile_70 = (($__internal_compile_71 = ($context["error_address"] ?? null)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["custom_field"] ?? null) : null)) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 492)] ?? null) : null)) {
                            // line 493
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_72 = twig_get_attribute($this->env, $this->source, (($__internal_compile_73 = ($context["error_address"] ?? null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 493)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 493)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 495
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 498
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 498) == "text")) {
                        // line 499
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 499) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 500
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 500);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 500);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"address[";
                        // line 502
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 502);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_74 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 502)) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 502)] ?? null) : null)) ? ((($__internal_compile_75 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 502)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 502)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 502)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 502);
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 502);
                        echo "\" class=\"form-control\"/>
                                  ";
                        // line 503
                        if ((($__internal_compile_76 = (($__internal_compile_77 = (($__internal_compile_78 = ($context["error_address"] ?? null)) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["custom_field"] ?? null) : null)) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 503)] ?? null) : null)) {
                            // line 504
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_79 = twig_get_attribute($this->env, $this->source, (($__internal_compile_80 = ($context["error_address"] ?? null)) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 504)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 504)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 506
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 509
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 509) == "textarea")) {
                        // line 510
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 510);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 510) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 511
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 511);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 511);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <textarea name=\"address[";
                        // line 513
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 513);
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513);
                        echo "\" class=\"form-control\">";
                        echo (((($__internal_compile_81 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 513)) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513)] ?? null) : null)) ? ((($__internal_compile_82 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 513)) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 513)));
                        echo "</textarea>
                                  ";
                        // line 514
                        if ((($__internal_compile_83 = (($__internal_compile_84 = (($__internal_compile_85 = ($context["error_address"] ?? null)) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["custom_field"] ?? null) : null)) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 514)] ?? null) : null)) {
                            // line 515
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_86 = twig_get_attribute($this->env, $this->source, (($__internal_compile_87 = ($context["error_address"] ?? null)) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 515)) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 515)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 517
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 520
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 520) == "file")) {
                        // line 521
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 521);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 521) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\">";
                        // line 522
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 522);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <button type=\"button\" id=\"button-address";
                        // line 524
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-default\">
                                    <i class=\"fa fa-upload\"></i> ";
                        // line 525
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                                  <input type=\"hidden\" name=\"address[";
                        // line 526
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 526);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_88 = (($__internal_compile_89 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 526)) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 526)] ?? null) : null)) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["code"] ?? null) : null)) ? ((($__internal_compile_90 = (($__internal_compile_91 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 526)) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 526)] ?? null) : null)) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["code"] ?? null) : null)) : (""));
                        echo "\"/>
                                  <span>";
                        // line 527
                        echo (($__internal_compile_92 = (($__internal_compile_93 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 527)) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 527)] ?? null) : null)) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["name"] ?? null) : null);
                        echo "</span>
                                  ";
                        // line 528
                        if ((($__internal_compile_94 = (($__internal_compile_95 = (($__internal_compile_96 = ($context["error_address"] ?? null)) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["custom_field"] ?? null) : null)) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 528)] ?? null) : null)) {
                            // line 529
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_97 = twig_get_attribute($this->env, $this->source, (($__internal_compile_98 = ($context["error_address"] ?? null)) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 529)) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 529)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 531
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 534
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 534) == "date")) {
                        // line 535
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 535);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 535) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 536
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 536);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group date\">
                                    <input type=\"text\" name=\"address[";
                        // line 539
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_99 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 539)) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539)] ?? null) : null)) ? ((($__internal_compile_100 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 539)) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 539)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 539);
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                        echo "\" class=\"form-control\"/>
                                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                                  </div>
                                  ";
                        // line 542
                        if ((($__internal_compile_101 = (($__internal_compile_102 = (($__internal_compile_103 = ($context["error_address"] ?? null)) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["custom_field"] ?? null) : null)) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 542)] ?? null) : null)) {
                            // line 543
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_104 = twig_get_attribute($this->env, $this->source, (($__internal_compile_105 = ($context["error_address"] ?? null)) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 543)) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 543)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 545
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 548
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 548) == "time")) {
                        // line 549
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 549) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 550
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 550);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group time\">
                                    <input type=\"text\" name=\"address[";
                        // line 553
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 553);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_106 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 553)) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 553)] ?? null) : null)) ? ((($__internal_compile_107 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 553)) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 553)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 553)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 553);
                        echo "\" data-date-format=\"HH:mm\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 553);
                        echo "\" class=\"form-control\"/>
                                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                                  </div>
                                  ";
                        // line 556
                        if ((($__internal_compile_108 = (($__internal_compile_109 = (($__internal_compile_110 = ($context["error_address"] ?? null)) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["custom_field"] ?? null) : null)) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556)] ?? null) : null)) {
                            // line 557
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_111 = twig_get_attribute($this->env, $this->source, (($__internal_compile_112 = ($context["error_address"] ?? null)) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 557)) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 557)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 559
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 562
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 562) == "datetime")) {
                        // line 563
                        echo "                              <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 563);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 563) + 1);
                        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 564
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 564);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 564);
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group datetime\">
                                    <input type=\"text\" name=\"address[";
                        // line 567
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_113 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 567)) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567)] ?? null) : null)) ? ((($__internal_compile_114 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 567)) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 567)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 567);
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567);
                        echo "\" class=\"form-control\"/>
                                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                                  </div>
                                  ";
                        // line 570
                        if ((($__internal_compile_115 = (($__internal_compile_116 = (($__internal_compile_117 = ($context["error_address"] ?? null)) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["custom_field"] ?? null) : null)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 570)] ?? null) : null)) {
                            // line 571
                            echo "                                    <div class=\"text-danger\">";
                            echo (($__internal_compile_118 = twig_get_attribute($this->env, $this->source, (($__internal_compile_119 = ($context["error_address"] ?? null)) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 571)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 571)] ?? null) : null);
                            echo "</div>
                                  ";
                        }
                        // line 573
                        echo "                                </div>
                              </div>
                            ";
                    }
                    // line 576
                    echo "                          ";
                }
                // line 577
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 578
            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
            // line 579
            echo ($context["entry_default"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <label class=\"radio\">
                              ";
            // line 582
            if (((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 582) == ($context["address_id"] ?? null)) ||  !($context["addresses"] ?? null))) {
                // line 583
                echo "                                <input type=\"radio\" name=\"address[";
                echo ($context["address_row"] ?? null);
                echo "][default]\" value=\"";
                echo ($context["address_row"] ?? null);
                echo "\" checked=\"checked\"/>
                              ";
            } else {
                // line 585
                echo "                                <input type=\"radio\" name=\"address[";
                echo ($context["address_row"] ?? null);
                echo "][default]\" value=\"";
                echo ($context["address_row"] ?? null);
                echo "\"/>
                              ";
            }
            // line 587
            echo "                            </label>
                          </div>
                        </div>
                      </div>
                      ";
            // line 591
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 592
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 593
        echo "                  </div>
                </div>
              </div>
            </div>
            ";
        // line 597
        if (($context["customer_id"] ?? null)) {
            // line 598
            echo "              <div id=\"tab-payment\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
            // line 600
            echo ($context["text_payment_method"] ?? null);
            echo "</legend>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-password\">";
            // line 602
            echo ($context["entry_payment_method"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      ";
            // line 604
            echo ($context["text_customer_payment"] ?? null);
            echo "
                    </div>
                  </div>
                </fieldset>
              </div>
              <div id=\"tab-history\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
            // line 611
            echo ($context["text_history"] ?? null);
            echo "</legend>
                  <div id=\"history\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 616
            echo ($context["text_history_add"] ?? null);
            echo "</legend>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 618
            echo ($context["entry_comment"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 620
            echo ($context["entry_comment"] ?? null);
            echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button id=\"button-history\" data-loading-text=\"";
            // line 625
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_history_add"] ?? null);
            echo "</button>
                </div>
              </div>
              <div id=\"tab-transaction\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
            // line 630
            echo ($context["text_transaction"] ?? null);
            echo "</legend>
                  <div id=\"transaction\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 635
            echo ($context["text_transaction_add"] ?? null);
            echo "</legend>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-transaction-description\">";
            // line 637
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 639
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-transaction-description\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
            // line 643
            echo ($context["entry_amount"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 645
            echo ($context["entry_amount"] ?? null);
            echo "\" id=\"input-amount\" class=\"form-control\"/>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 650
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_transaction_add"] ?? null);
            echo "</button>
                </div>
              </div>
              <div id=\"tab-reward\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
            // line 655
            echo ($context["text_reward"] ?? null);
            echo "</legend>
                  <div id=\"reward\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 660
            echo ($context["text_reward_add"] ?? null);
            echo "</legend>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-reward-description\">";
            // line 662
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 664
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-reward-description\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
            // line 668
            echo ($context["help_points"] ?? null);
            echo "\">";
            echo ($context["entry_points"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 670
            echo ($context["entry_points"] ?? null);
            echo "\" id=\"input-points\" class=\"form-control\"/>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 675
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_reward_add"] ?? null);
            echo "</button>
                </div>
              </div>
            ";
        }
        // line 679
        echo "            <div id=\"tab-ip\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 681
        echo ($context["text_ip"] ?? null);
        echo "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'customer_group_id\\']').on('change', function () {
      \$.ajax({
          url: 'index.php?route=customer/customer/customfield&user_token=";
        // line 693
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
  //--></script>
  <script type=\"text/javascript\"><!--
  var address_row = ";
        // line 718
        echo ($context["address_row"] ?? null);
        echo ";

  function addAddress() {
      html = '<div id=\"tab-address' + address_row + '\" class=\"tab-pane\">';
      html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\"/>';

      html += '  <div class=\"form-group required\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">";
        // line 725
        echo ($context["entry_firstname"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 726
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\"/></div>';
      html += '  </div>';

      html += '  <div class=\"form-group required\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-lastname' + address_row + '\">";
        // line 730
        echo ($context["entry_lastname"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 731
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\"/></div>';
      html += '  </div>';

      html += '  <div class=\"form-group\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">";
        // line 735
        echo ($context["entry_company"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 736
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\"/></div>';
      html += '  </div>';

      html += '  <div class=\"form-group required\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">";
        // line 740
        echo ($context["entry_address_1"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 741
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\"/></div>';
      html += '  </div>';

      html += '  <div class=\"form-group\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-2' + address_row + '\">";
        // line 745
        echo ($context["entry_address_2"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 746
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\"/></div>';
      html += '  </div>';

      html += '  <div class=\"form-group required\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 750
        echo ($context["entry_city"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 751
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\"/></div>';
      html += '  </div>';

      html += '  <div class=\"form-group required\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">";
        // line 755
        echo ($context["entry_postcode"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 756
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\"/></div>';
      html += '  </div>';

      html += '  <div class=\"form-group required\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">";
        // line 760
        echo ($context["entry_country"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
      html += '         <option value=\"\">";
        // line 762
        echo ($context["text_select"] ?? null);
        echo "</option>';
      ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 764
            echo "          html += '         <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 764);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 764), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 766
        echo "      html += '      </select></div>';
      html += '  </div>';

      html += '  <div class=\"form-group required\">';
      html += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">";
        // line 770
        echo ($context["entry_zone"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 771
        echo ($context["text_none"] ?? null);
        echo "</option></select></div>';
      html += '  </div>';

      // Custom Fields
      ";
        // line 775
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 776
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 776) == "address")) {
                // line 777
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 777) == "select")) {
                    // line 778
                    echo "              html += '  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 778);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 778) + 1);
                    echo "\">';
              html += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 779
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 779), "js");
                    echo "</label>';
              html += '  \t\t<div class=\"col-sm-10\">';
              html += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 781
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 781);
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 781);
                    echo "\" class=\"form-control\">';
              html += '  \t\t\t<option value=\"\">";
                    // line 782
                    echo ($context["text_select"] ?? null);
                    echo "</option>';

              ";
                    // line 784
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 784));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 785
                        echo "                  html += '  \t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 785);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 785), "js");
                        echo "</option>';
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 787
                    echo "
              html += '  \t\t  </select>';
              html += '  \t\t</div>';
              html += '  \t  </div>';
          ";
                }
                // line 792
                echo "
          ";
                // line 793
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 793) == "radio")) {
                    // line 794
                    echo "              html += '  \t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 794);
                    echo "\">';
              html += '  \t\t<label class=\"col-sm-2 control-label\">";
                    // line 795
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 795), "js");
                    echo "</label>';
              html += '  \t\t<div class=\"col-sm-10\">';
              html += '  \t\t  <div>';

              ";
                    // line 799
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 799));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 800
                        echo "                  html += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 800);
                        echo "\"/> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 800), "js");
                        echo "</label></div>';
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 802
                    echo "
              html += '\t\t  </div>';
              html += '\t\t</div>';
              html += '\t  </div>';
          ";
                }
                // line 807
                echo "
          ";
                // line 808
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 808) == "checkbox")) {
                    // line 809
                    echo "              html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 809);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 809) + 1);
                    echo "\">';
              html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 810
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 810), "js");
                    echo "</label>';
              html += '\t\t<div class=\"col-sm-10\">';
              html += '\t\t  <div>';

              ";
                    // line 814
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 814));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 815
                        echo "                  html += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 815);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 815);
                        echo "\"/> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 815), "js");
                        echo "</label></div>';
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 817
                    echo "
              html += '\t\t  </div>';
              html += '\t\t</div>';
              html += '\t  </div>';
          ";
                }
                // line 822
                echo "
          ";
                // line 823
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 823) == "text")) {
                    // line 824
                    echo "              html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 824);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 824) + 1);
                    echo "\">';
              html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 825
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 825);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 825), "js");
                    echo "</label>';
              html += '\t\t<div class=\"col-sm-10\">';
              html += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 827
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 827);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 827), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 827), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 827);
                    echo "\" class=\"form-control\"/>';
              html += '\t\t</div>';
              html += '\t  </div>';
          ";
                }
                // line 831
                echo "
          ";
                // line 832
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 832) == "textarea")) {
                    // line 833
                    echo "              html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 833);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 833) + 1);
                    echo "\">';
              html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 834
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 834);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 834), "js");
                    echo "</label>';
              html += '\t\t<div class=\"col-sm-10\">';
              html += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 836
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 836);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 836), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 836);
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 836), "js");
                    echo "</textarea>';
              html += '\t\t</div>';
              html += '\t  </div>';
          ";
                }
                // line 840
                echo "
          ";
                // line 841
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 841) == "file")) {
                    // line 842
                    echo "              html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 842);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 842) + 1);
                    echo "\">';
              html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 843
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 843), "js");
                    echo "</label>';
              html += '\t\t<div class=\"col-sm-10\">';
              html += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 845
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 845);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>';
              html += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 846
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 846);
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 846);
                    echo "\"/>';
              html += '\t\t</div>';
              html += '\t  </div>';
          ";
                }
                // line 850
                echo "
          ";
                // line 851
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 851) == "date")) {
                    // line 852
                    echo "              html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 852);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 852) + 1);
                    echo "\">';
              html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 853
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 853);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 853), "js");
                    echo "</label>';
              html += '\t\t<div class=\"col-sm-10\">';
              html += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 855
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 855);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 855), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 855), "js");
                    echo " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 855);
                    echo "\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
              html += '\t\t</div>';
              html += '\t  </div>';
          ";
                }
                // line 859
                echo "
          ";
                // line 860
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 860) == "time")) {
                    // line 861
                    echo "              html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 861);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 861) + 1);
                    echo "\">';
              html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 862
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 862);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 862), "js");
                    echo "</label>';
              html += '\t\t<div class=\"col-sm-10\">';
              html += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 864
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 864);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 864), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 864), "js");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 864);
                    echo "\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
              html += '\t\t</div>';
              html += '\t  </div>';
          ";
                }
                // line 868
                echo "
          ";
                // line 869
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 869) == "datetime")) {
                    // line 870
                    echo "              html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 870);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 870) + 1);
                    echo "\">';
              html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 871
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 871);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 871), "js");
                    echo "</label>';
              html += '\t\t<div class=\"col-sm-10\">';
              html += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 873
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 873);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 873), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 873), "js");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 873);
                    echo "\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
              html += '\t\t</div>';
              html += '\t  </div>';
          ";
                }
                // line 877
                echo "        ";
            }
            // line 878
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 879
        echo "
      html += '  <div class=\"form-group\">';
      html += '    <label class=\"col-sm-2 control-label\">";
        // line 881
        echo ($context["entry_default"] ?? null);
        echo "</label>';
      html += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\"/></label></div>';
      html += '  </div>';

      html += '</div>';

      \$('#tab-general .tab-content').append(html);

      \$('select[name=\\'customer_group_id\\']').trigger('change');

      \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

      \$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> ";
        // line 893
        echo ($context["tab_address"] ?? null);
        echo " ' + address_row + '</a></li>');

      \$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

      \$('.date').datetimepicker({
          language: '";
        // line 898
        echo ($context["datepicker"] ?? null);
        echo "',
          pickTime: false
      });

      \$('.datetime').datetimepicker({
          language: '";
        // line 903
        echo ($context["datepicker"] ?? null);
        echo "',
          pickDate: true,
          pickTime: true
      });

      \$('.time').datetimepicker({
          language: '";
        // line 909
        echo ($context["datepicker"] ?? null);
        echo "',
          pickDate: false
      });

      \$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function () {
          if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
              \$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
          }

          if (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
              \$('#tab-address' + address_row + ' .form-group:last').after(this);
          }

          if (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
              \$('#tab-address' + address_row + ' .form-group:first').before(this);
          }
      });

      address_row++;
  }
  //--></script>
  <script type=\"text/javascript\"><!--
  function country(element, index, zone_id) {
      \$.ajax({
          url: 'index.php?route=localisation/country/country&user_token=";
        // line 933
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + element.value,
          dataType: 'json',
          beforeSend: function () {
              \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
          },
          complete: function () {
              \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
          },
          success: function (json) {
              if (json['postcode_required'] == '1') {
                  \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
              } else {
                  \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
              }

              html = '<option value=\"\">";
        // line 948
        echo ($context["text_select"] ?? null);
        echo "</option>';

              if (json['zone'] && json['zone'] != '') {
                  for (i = 0; i < json['zone'].length; i++) {
                      html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                      if (json['zone'][i]['zone_id'] == zone_id) {
                          html += ' selected=\"selected\"';
                      }

                      html += '>' + json['zone'][i]['name'] + '</option>';
                  }
              } else {
                  html += '<option value=\"0\">";
        // line 961
        echo ($context["text_none"] ?? null);
        echo "</option>';
              }

              \$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  }

  \$('select[name\$=\\'[country_id]\\']').trigger('change');
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function (e) {
      e.preventDefault();

      \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 981
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-history').on('click', function (e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=customer/customer/addHistory&user_token=";
        // line 987
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
          beforeSend: function () {
              \$('#button-history').button('loading');
          },
          complete: function () {
              \$('#button-history').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['success']) {
                  \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1007
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

                  \$('#tab-history textarea[name=\\'comment\\']').val('');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#transaction').delegate('.pagination a', 'click', function (e) {
      e.preventDefault();

      \$('#transaction').load(this.href);
  });

  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1025
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-transaction').on('click', function (e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=customer/customer/addTransaction&user_token=";
        // line 1031
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
          beforeSend: function () {
              \$('#button-transaction').button('loading');
          },
          complete: function () {
              \$('#button-transaction').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['success']) {
                  \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1051
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

                  \$('#tab-transaction input[name=\\'amount\\']').val('');
                  \$('#tab-transaction input[name=\\'description\\']').val('');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#reward').delegate('.pagination a', 'click', function (e) {
      e.preventDefault();

      \$('#reward').load(this.href);
  });

  \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1070
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-reward').on('click', function (e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=customer/customer/addReward&user_token=";
        // line 1076
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
          beforeSend: function () {
              \$('#button-reward').button('loading');
          },
          complete: function () {
              \$('#button-reward').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['success']) {
                  \$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1096
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

                  \$('#tab-reward input[name=\\'points\\']').val('');
                  \$('#tab-reward input[name=\\'description\\']').val('');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#ip').delegate('.pagination a', 'click', function (e) {
      e.preventDefault();

      \$('#ip').load(this.href);
  });

  \$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1114
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function () {
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
        // line 1134
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
        // line 1171
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
  });

  \$('.datetime').datetimepicker({
      language: '";
        // line 1176
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: true,
      pickTime: true
  });

  \$('.time').datetimepicker({
      language: '";
        // line 1182
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: false
  });

  // Sort the custom fields
  ";
        // line 1187
        $context["address_row"] = 1;
        // line 1188
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1189
            echo "      \$('#tab-address";
            echo ($context["address_row"] ?? null);
            echo " .form-group[data-sort]').detach().each(function () {
          if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1190
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
              \$('#tab-address";
            // line 1191
            echo ($context["address_row"] ?? null);
            echo " .form-group').eq(\$(this).attr('data-sort')).before(this);
          }

          if (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1194
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
              \$('#tab-address";
            // line 1195
            echo ($context["address_row"] ?? null);
            echo " .form-group:last').after(this);
          }

          if (\$(this).attr('data-sort') < -\$('#tab-address";
            // line 1198
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
              \$('#tab-address";
            // line 1199
            echo ($context["address_row"] ?? null);
            echo " .form-group:first').before(this);
          }
      });

      ";
            // line 1203
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 1204
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1205
        echo "
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
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'payment\\']').on('change', function () {
      \$('.payment').hide();

      \$('#payment-' + this.value).show();
  });

  \$('input[name=\\'payment\\']:checked').trigger('change');
  //--></script>
</div>
";
        // line 1230
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3057 => 1230,  3030 => 1205,  3024 => 1204,  3022 => 1203,  3015 => 1199,  3011 => 1198,  3005 => 1195,  3001 => 1194,  2995 => 1191,  2991 => 1190,  2986 => 1189,  2981 => 1188,  2979 => 1187,  2971 => 1182,  2962 => 1176,  2954 => 1171,  2914 => 1134,  2889 => 1114,  2866 => 1096,  2841 => 1076,  2830 => 1070,  2806 => 1051,  2781 => 1031,  2770 => 1025,  2747 => 1007,  2722 => 987,  2711 => 981,  2688 => 961,  2672 => 948,  2654 => 933,  2627 => 909,  2618 => 903,  2610 => 898,  2602 => 893,  2587 => 881,  2583 => 879,  2577 => 878,  2574 => 877,  2561 => 873,  2554 => 871,  2547 => 870,  2545 => 869,  2542 => 868,  2529 => 864,  2522 => 862,  2515 => 861,  2513 => 860,  2510 => 859,  2497 => 855,  2490 => 853,  2483 => 852,  2481 => 851,  2478 => 850,  2469 => 846,  2461 => 845,  2456 => 843,  2449 => 842,  2447 => 841,  2444 => 840,  2431 => 836,  2424 => 834,  2417 => 833,  2415 => 832,  2412 => 831,  2399 => 827,  2392 => 825,  2385 => 824,  2383 => 823,  2380 => 822,  2373 => 817,  2358 => 815,  2354 => 814,  2347 => 810,  2340 => 809,  2338 => 808,  2335 => 807,  2328 => 802,  2315 => 800,  2311 => 799,  2304 => 795,  2299 => 794,  2297 => 793,  2294 => 792,  2287 => 787,  2276 => 785,  2272 => 784,  2267 => 782,  2261 => 781,  2254 => 779,  2247 => 778,  2244 => 777,  2241 => 776,  2237 => 775,  2230 => 771,  2226 => 770,  2220 => 766,  2209 => 764,  2205 => 763,  2201 => 762,  2196 => 760,  2189 => 756,  2185 => 755,  2178 => 751,  2174 => 750,  2167 => 746,  2163 => 745,  2156 => 741,  2152 => 740,  2145 => 736,  2141 => 735,  2134 => 731,  2130 => 730,  2123 => 726,  2119 => 725,  2109 => 718,  2081 => 693,  2066 => 681,  2062 => 679,  2053 => 675,  2045 => 670,  2038 => 668,  2031 => 664,  2026 => 662,  2021 => 660,  2013 => 655,  2003 => 650,  1995 => 645,  1990 => 643,  1983 => 639,  1978 => 637,  1973 => 635,  1965 => 630,  1955 => 625,  1947 => 620,  1942 => 618,  1937 => 616,  1929 => 611,  1919 => 604,  1914 => 602,  1909 => 600,  1905 => 598,  1903 => 597,  1897 => 593,  1891 => 592,  1889 => 591,  1883 => 587,  1875 => 585,  1867 => 583,  1865 => 582,  1859 => 579,  1856 => 578,  1850 => 577,  1847 => 576,  1842 => 573,  1836 => 571,  1834 => 570,  1818 => 567,  1808 => 564,  1801 => 563,  1798 => 562,  1793 => 559,  1787 => 557,  1785 => 556,  1769 => 553,  1759 => 550,  1752 => 549,  1749 => 548,  1744 => 545,  1738 => 543,  1736 => 542,  1720 => 539,  1710 => 536,  1703 => 535,  1700 => 534,  1695 => 531,  1689 => 529,  1687 => 528,  1683 => 527,  1675 => 526,  1671 => 525,  1663 => 524,  1658 => 522,  1651 => 521,  1648 => 520,  1643 => 517,  1637 => 515,  1635 => 514,  1621 => 513,  1612 => 511,  1605 => 510,  1602 => 509,  1597 => 506,  1591 => 504,  1589 => 503,  1575 => 502,  1566 => 500,  1559 => 499,  1556 => 498,  1551 => 495,  1545 => 493,  1543 => 492,  1540 => 491,  1533 => 489,  1527 => 486,  1519 => 485,  1516 => 484,  1510 => 481,  1502 => 480,  1499 => 479,  1497 => 478,  1494 => 477,  1490 => 476,  1484 => 473,  1477 => 472,  1474 => 471,  1469 => 468,  1463 => 466,  1461 => 465,  1458 => 464,  1451 => 462,  1445 => 459,  1437 => 458,  1434 => 457,  1428 => 454,  1420 => 453,  1417 => 452,  1415 => 451,  1412 => 450,  1408 => 449,  1402 => 446,  1395 => 445,  1392 => 444,  1387 => 441,  1381 => 439,  1379 => 438,  1376 => 437,  1370 => 436,  1362 => 434,  1354 => 432,  1351 => 431,  1347 => 430,  1343 => 429,  1333 => 428,  1324 => 426,  1317 => 425,  1314 => 424,  1311 => 423,  1307 => 422,  1303 => 420,  1297 => 418,  1295 => 417,  1288 => 415,  1281 => 413,  1276 => 410,  1270 => 408,  1268 => 407,  1265 => 406,  1259 => 405,  1251 => 403,  1243 => 401,  1240 => 400,  1236 => 399,  1232 => 398,  1222 => 397,  1215 => 395,  1210 => 392,  1204 => 390,  1202 => 389,  1192 => 388,  1185 => 386,  1180 => 383,  1174 => 381,  1172 => 380,  1162 => 379,  1155 => 377,  1142 => 373,  1135 => 371,  1130 => 368,  1124 => 366,  1122 => 365,  1112 => 364,  1105 => 362,  1092 => 358,  1085 => 356,  1080 => 353,  1074 => 351,  1072 => 350,  1062 => 349,  1055 => 347,  1050 => 344,  1044 => 342,  1042 => 341,  1032 => 340,  1025 => 338,  1018 => 336,  1013 => 335,  1008 => 334,  1006 => 333,  999 => 328,  994 => 326,  989 => 325,  984 => 323,  979 => 322,  977 => 321,  969 => 318,  963 => 314,  958 => 312,  953 => 311,  948 => 309,  943 => 308,  941 => 307,  935 => 304,  929 => 300,  924 => 298,  919 => 297,  914 => 295,  909 => 294,  907 => 293,  901 => 290,  896 => 288,  890 => 284,  884 => 282,  882 => 281,  876 => 280,  871 => 278,  866 => 275,  860 => 273,  858 => 272,  852 => 271,  847 => 269,  842 => 267,  838 => 265,  832 => 264,  829 => 263,  824 => 260,  818 => 258,  816 => 257,  804 => 254,  796 => 251,  789 => 250,  786 => 249,  781 => 246,  775 => 244,  773 => 243,  761 => 240,  753 => 237,  746 => 236,  743 => 235,  738 => 232,  732 => 230,  730 => 229,  718 => 226,  710 => 223,  703 => 222,  700 => 221,  695 => 218,  689 => 216,  687 => 215,  683 => 214,  675 => 213,  667 => 212,  662 => 210,  655 => 209,  652 => 208,  647 => 205,  641 => 203,  639 => 202,  629 => 201,  622 => 199,  615 => 198,  612 => 197,  607 => 194,  601 => 192,  599 => 191,  589 => 190,  582 => 188,  575 => 187,  572 => 186,  567 => 183,  561 => 181,  559 => 180,  556 => 179,  549 => 177,  543 => 174,  537 => 173,  534 => 172,  528 => 169,  522 => 168,  519 => 167,  517 => 166,  514 => 165,  510 => 164,  504 => 161,  497 => 160,  494 => 159,  489 => 156,  483 => 154,  481 => 153,  478 => 152,  471 => 150,  465 => 147,  459 => 146,  456 => 145,  450 => 142,  444 => 141,  441 => 140,  439 => 139,  436 => 138,  432 => 137,  426 => 134,  419 => 133,  416 => 132,  411 => 129,  405 => 127,  403 => 126,  400 => 125,  394 => 124,  386 => 122,  378 => 120,  375 => 119,  371 => 118,  367 => 117,  361 => 116,  354 => 114,  347 => 113,  344 => 112,  341 => 111,  337 => 110,  333 => 108,  327 => 106,  325 => 105,  319 => 104,  314 => 102,  308 => 101,  304 => 99,  298 => 97,  296 => 96,  290 => 95,  285 => 93,  280 => 90,  274 => 88,  272 => 87,  266 => 86,  261 => 84,  256 => 81,  250 => 79,  248 => 78,  242 => 77,  237 => 75,  231 => 71,  225 => 70,  217 => 68,  209 => 66,  206 => 65,  202 => 64,  196 => 61,  191 => 59,  181 => 52,  178 => 51,  172 => 50,  170 => 49,  157 => 47,  154 => 46,  149 => 45,  147 => 44,  143 => 43,  135 => 37,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  113 => 31,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_form.twig", "");
    }
}

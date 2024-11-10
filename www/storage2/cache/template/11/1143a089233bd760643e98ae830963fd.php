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

/* sale/order_info.twig */
class __TwigTemplate_d31bdc5966368d0a315a2316ebc5284e extends Template
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
        <a href=\"";
        // line 6
        echo ($context["invoice"] ?? null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
        <a href=\"";
        // line 7
        echo ($context["shipping"] ?? null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></a>
        <a href=\"";
        // line 8
        echo ($context["edit"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
        <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 23
        echo ($context["text_order_detail"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 28
        echo ($context["text_store"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-shopping-cart fa-fw\"></i></button></td>
                <td><a href=\"";
        // line 29
        echo ($context["store_url"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["store_name"] ?? null);
        echo "</a></td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 32
        echo ($context["text_date_added"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-calendar fa-fw\"></i></button></td>
                <td>";
        // line 33
        echo ($context["date_added"] ?? null);
        echo "</td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 36
        echo ($context["text_payment_method"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-credit-card fa-fw\"></i></button></td>
                <td>";
        // line 37
        echo ($context["payment_method"] ?? null);
        echo "</td>
              </tr>
              ";
        // line 39
        if (($context["shipping_method"] ?? null)) {
            // line 40
            echo "                <tr>
                  <td><button data-toggle=\"tooltip\" title=\"";
            // line 41
            echo ($context["text_shipping_method"] ?? null);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-truck fa-fw\"></i></button></td>
                  <td>";
            // line 42
            echo ($context["shipping_method"] ?? null);
            echo "</td>
                </tr>
              ";
        }
        // line 45
        echo "            </tbody>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> ";
        // line 52
        echo ($context["text_customer_detail"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            ";
        // line 65
        echo "            <tr>
              <td><button data-toggle=\"tooltip\" title=\"Nickname\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-user fa-fw\"></i></button></td>
              <td>";
        // line 67
        echo ($context["server"] ?? null);
        echo "</td>
            </tr>
            <tr>
              <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 70
        echo ($context["text_customer_group"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-group fa-fw\"></i></button></td>
              <td>";
        // line 71
        echo ($context["customer_group"] ?? null);
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 74
        echo ($context["text_email"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-envelope-o fa-fw\"></i></button></td>
              <td><a href=\"mailto:";
        // line 75
        echo ($context["email"] ?? null);
        echo "\">";
        echo ($context["email"] ?? null);
        echo "</a></td>
            </tr>
            ";
        // line 81
        echo "            <tr>
              <td><button data-toggle=\"tooltip\" title=\"Discord\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-dashcube fa-fw\"></i></button></td>
              <td>";
        // line 83
        echo ($context["server"] ?? null);
        echo "</td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-cog\"></i> ";
        // line 91
        echo ($context["text_option"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
            <tr>
              <td>";
        // line 96
        echo ($context["text_invoice"] ?? null);
        echo "</td>
              <td id=\"invoice\" class=\"text-right\">";
        // line 97
        echo ($context["invoice_no"] ?? null);
        echo "</td>
              <td style=\"width: 1%;\" class=\"text-center\">
                ";
        // line 99
        if ( !($context["invoice_no"] ?? null)) {
            // line 100
            echo "                  <button id=\"button-invoice\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>
                ";
        } else {
            // line 102
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-refresh\"></i></button>
                ";
        }
        // line 104
        echo "              </td>
            </tr>
            <tr>
              <td>";
        // line 107
        echo ($context["text_reward"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 108
        echo ($context["reward"] ?? null);
        echo "</td>
              <td class=\"text-center\">
                ";
        // line 110
        if ((($context["customer"] ?? null) && ($context["reward"] ?? null))) {
            // line 111
            echo "                  ";
            if ( !($context["reward_total"] ?? null)) {
                // line 112
                echo "                    <button id=\"button-reward-add\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reward_add"] ?? null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
            } else {
                // line 114
                echo "                    <button id=\"button-reward-remove\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reward_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                  ";
            }
            // line 116
            echo "                ";
        } else {
            // line 117
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                ";
        }
        // line 119
        echo "              </td>
            </tr>
            <tr>
              <td>";
        // line 122
        echo ($context["text_affiliate"] ?? null);
        echo "
                ";
        // line 123
        if (($context["affiliate"] ?? null)) {
            // line 124
            echo "                  (<a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["affiliate_firstname"] ?? null);
            echo " ";
            echo ($context["affiliate_lastname"] ?? null);
            echo "</a>)
                ";
        }
        // line 126
        echo "              </td>
              <td class=\"text-right\">";
        // line 127
        echo ($context["commission"] ?? null);
        echo "</td>
              <td class=\"text-center\">
                ";
        // line 129
        if (($context["affiliate"] ?? null)) {
            // line 130
            echo "                  ";
            if ( !($context["commission_total"] ?? null)) {
                // line 131
                echo "                    <button id=\"button-commission-add\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_commission_add"] ?? null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
            } else {
                // line 133
                echo "                    <button id=\"button-commission-remove\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_commission_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                  ";
            }
            // line 135
            echo "                ";
        } else {
            // line 136
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                ";
        }
        // line 138
        echo "              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-info-circle\"></i> ";
        // line 147
        echo ($context["text_order"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
        // line 153
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
              ";
        // line 154
        if (($context["shipping_method"] ?? null)) {
            // line 155
            echo "                <td style=\"width: 50%;\" class=\"text-left\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 157
        echo "            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 161
        echo ($context["payment_address"] ?? null);
        echo "</td>
              ";
        // line 162
        if (($context["shipping_method"] ?? null)) {
            // line 163
            echo "                <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 165
        echo "            </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 171
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 172
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 173
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 174
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 175
        echo ($context["column_total"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 180
            echo "              <tr>
                <td class=\"text-left\">
                  <a href=\"";
            // line 182
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 182);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 182);
            echo "</a>
                  ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 183));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 184
                echo "                    <br/>
                    ";
                // line 185
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 185) != "file")) {
                    // line 186
                    echo "                      &nbsp;
                      <small> - ";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 187);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 187);
                    echo "</small>
                    ";
                } else {
                    // line 189
                    echo "                      &nbsp;
                      <small> - ";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 190);
                    echo ": <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 190);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 190);
                    echo "</a></small>
                    ";
                }
                // line 192
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 193)) {
                // line 194
                echo "                    <br/>
                    <small> - ";
                // line 195
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 195);
                echo "</small>
                  ";
            }
            // line 197
            echo "                </td>
                <td class=\"text-left\">";
            // line 198
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 198);
            echo "</td>
                <td class=\"text-right\">";
            // line 199
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 199);
            echo "</td>
                <td class=\"text-right\">";
            // line 200
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 200);
            echo "</td>
                <td class=\"text-right\">";
            // line 201
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 201);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 205
            echo "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 206
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "href", [], "any", false, false, false, 206);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 206);
            echo "</a></td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
            // line 209
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 209);
            echo "</td>
                <td class=\"text-right\">";
            // line 210
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 210);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 214
            echo "              <tr>
                <td colspan=\"4\" class=\"text-right\">";
            // line 215
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 215);
            echo "</td>
                <td class=\"text-right\">";
            // line 216
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 216);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "          </tbody>
        </table>
        ";
        // line 221
        if (($context["comment"] ?? null)) {
            // line 222
            echo "          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td>";
            // line 225
            echo ($context["text_comment"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
            // line 230
            echo ($context["comment"] ?? null);
            echo "</td>
              </tr>
            </tbody>
          </table>
        ";
        }
        // line 235
        echo "      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment-o\"></i> ";
        // line 239
        echo ($context["text_history"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-history\" data-toggle=\"tab\">";
        // line 243
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 244
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 246
            echo "            <li><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 246);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 246);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br/>
            <fieldset>
              <legend>";
        // line 254
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 257
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 261
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 261) == ($context["order_status_id"] ?? null))) {
                // line 262
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 262);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 262);
                echo "</option>
                        ";
            } else {
                // line 264
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 264);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 264);
                echo "</option>
                        ";
            }
            // line 266
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-override\"><span data-toggle=\"tooltip\" title=\"";
        // line 271
        echo ($context["help_override"] ?? null);
        echo "\">";
        echo ($context["entry_override"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
        // line 279
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 287
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class=\"text-right\">
              <button id=\"button-history\" data-loading-text=\"";
        // line 295
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_history_add"] ?? null);
        echo "</button>
            </div>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            ";
        // line 299
        if (($context["account_custom_fields"] ?? null)) {
            // line 300
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 304
            echo ($context["text_account_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 309
                echo "                      <tr>
                        <td>";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 310);
                echo "</td>
                        <td>";
                // line 311
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 311);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "                  </tbody>
                </table>
              </div>
            ";
        }
        // line 318
        echo "            ";
        if (($context["payment_custom_fields"] ?? null)) {
            // line 319
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 323
            echo ($context["text_payment_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 328
                echo "                      <tr>
                        <td>";
                // line 329
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 329);
                echo "</td>
                        <td>";
                // line 330
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 330);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "                  </tbody>
                </table>
              </div>
            ";
        }
        // line 337
        echo "            ";
        if ((($context["shipping_method"] ?? null) && ($context["shipping_custom_fields"] ?? null))) {
            // line 338
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 342
            echo ($context["text_shipping_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 347
                echo "                      <tr>
                        <td>";
                // line 348
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 348);
                echo "</td>
                        <td>";
                // line 349
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 349);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            echo "                  </tbody>
                </table>
              </div>
            ";
        }
        // line 356
        echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 360
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 365
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 366
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 368
        if (($context["forwarded_ip"] ?? null)) {
            // line 369
            echo "                    <tr>
                      <td>";
            // line 370
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 371
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 374
        echo "                  <tr>
                    <td>";
        // line 375
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 376
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 379
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 380
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 387
            echo "            <div id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 387);
            echo "\" class=\"tab-pane\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 387);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$(document).delegate('#button-invoice', 'click', function () {
      \$.ajax({
          url: 'index.php?route=sale/order/createInvoiceNo&user_token=";
        // line 396
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
          dataType: 'json',
          beforeSend: function () {
              \$('#button-invoice').button('loading');
          },
          complete: function () {
              \$('#button-invoice').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
              }

              if (json['invoice_no']) {
                  \$('#invoice').html(json['invoice_no']);

                  \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$(document).delegate('#button-reward-add', 'click', function () {
      \$.ajax({
          url: 'index.php?route=sale/order/addReward&user_token=";
        // line 425
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          beforeSend: function () {
              \$('#button-reward-add').button('loading');
          },
          complete: function () {
              \$('#button-reward-add').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                  \$('#button-reward-add').replaceWith('<button id=\"button-reward-remove\" data-toggle=\"tooltip\" title=\"";
        // line 444
        echo ($context["button_reward_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$(document).delegate('#button-reward-remove', 'click', function () {
      \$.ajax({
          url: 'index.php?route=sale/order/removeReward&user_token=";
        // line 455
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          beforeSend: function () {
              \$('#button-reward-remove').button('loading');
          },
          complete: function () {
              \$('#button-reward-remove').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                  \$('#button-reward-remove').replaceWith('<button id=\"button-reward-add\" data-toggle=\"tooltip\" title=\"";
        // line 474
        echo ($context["button_reward_add"] ?? null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$(document).delegate('#button-commission-add', 'click', function () {
      \$.ajax({
          url: 'index.php?route=sale/order/addCommission&user_token=";
        // line 485
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          beforeSend: function () {
              \$('#button-commission-add').button('loading');
          },
          complete: function () {
              \$('#button-commission-add').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                  \$('#button-commission-add').replaceWith('<button id=\"button-commission-remove\" data-toggle=\"tooltip\" title=\"";
        // line 504
        echo ($context["button_commission_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$(document).delegate('#button-commission-remove', 'click', function () {
      \$.ajax({
          url: 'index.php?route=sale/order/removeCommission&user_token=";
        // line 515
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          beforeSend: function () {
              \$('#button-commission-remove').button('loading');
          },
          complete: function () {
              \$('#button-commission-remove').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                  \$('#button-commission-remove').replaceWith('<button id=\"button-commission-add\" data-toggle=\"tooltip\" title=\"";
        // line 534
        echo ($context["button_commission_add"] ?? null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  var api_token = '';

  \$.ajax({
      url: '";
        // line 546
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/login',
      type: 'post',
      dataType: 'json',
      data: 'key=";
        // line 549
        echo ($context["api_key"] ?? null);
        echo "',
      crossDomain: true,
      success: function (json) {
          \$('.alert').remove();

          if (json['error']) {
              if (json['error']['key']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['key'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['error']['ip']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['ip'] + ' <button type=\"button\" id=\"button-ip-add\" data-loading-text=\"";
        // line 560
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs pull-right\"><i class=\"fa fa-plus\"></i>";
        echo ($context["button_ip_add"] ?? null);
        echo "</button></div>');
              }
          }

          if (json['token']) {
              api_token = json['token'];
          }
      },
      error: function (xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
  });

  \$('#history').delegate('.pagination a', 'click', function (e) {
      e.preventDefault();

      \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 579
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

  \$('#button-history').on('click', function () {
      \$.ajax({
          url: '";
        // line 583
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/history&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: 'order_status_id=' + encodeURIComponent(\$('select[name=\\'order_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&override=' + (\$('input[name=\\'override\\']').prop('checked') ? 1 : 0) + '&append=' + (\$('input[name=\\'append\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
          beforeSend: function () {
              \$('#button-history').button('loading');
          },
          complete: function () {
              \$('#button-history').button('reset');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['success']) {
                  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 601
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

                  \$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  \$('textarea[name=\\'comment\\']').val('');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });
 //--></script>
</div>
";
        // line 615
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1225 => 615,  1206 => 601,  1179 => 583,  1170 => 579,  1146 => 560,  1132 => 549,  1126 => 546,  1111 => 534,  1087 => 515,  1073 => 504,  1049 => 485,  1035 => 474,  1011 => 455,  997 => 444,  973 => 425,  939 => 396,  930 => 389,  919 => 387,  915 => 386,  906 => 380,  902 => 379,  896 => 376,  892 => 375,  889 => 374,  883 => 371,  879 => 370,  876 => 369,  874 => 368,  869 => 366,  865 => 365,  857 => 360,  851 => 356,  845 => 352,  836 => 349,  832 => 348,  829 => 347,  825 => 346,  818 => 342,  812 => 338,  809 => 337,  803 => 333,  794 => 330,  790 => 329,  787 => 328,  783 => 327,  776 => 323,  770 => 319,  767 => 318,  761 => 314,  752 => 311,  748 => 310,  745 => 309,  741 => 308,  734 => 304,  728 => 300,  726 => 299,  717 => 295,  706 => 287,  695 => 279,  682 => 271,  676 => 267,  670 => 266,  662 => 264,  654 => 262,  651 => 261,  647 => 260,  641 => 257,  635 => 254,  627 => 248,  616 => 246,  612 => 245,  608 => 244,  604 => 243,  597 => 239,  591 => 235,  583 => 230,  575 => 225,  570 => 222,  568 => 221,  564 => 219,  555 => 216,  551 => 215,  548 => 214,  543 => 213,  534 => 210,  530 => 209,  522 => 206,  519 => 205,  514 => 204,  505 => 201,  501 => 200,  497 => 199,  493 => 198,  490 => 197,  483 => 195,  480 => 194,  477 => 193,  471 => 192,  462 => 190,  459 => 189,  452 => 187,  449 => 186,  447 => 185,  444 => 184,  440 => 183,  434 => 182,  430 => 180,  426 => 179,  419 => 175,  415 => 174,  411 => 173,  407 => 172,  403 => 171,  395 => 165,  389 => 163,  387 => 162,  383 => 161,  377 => 157,  371 => 155,  369 => 154,  365 => 153,  356 => 147,  345 => 138,  341 => 136,  338 => 135,  330 => 133,  322 => 131,  319 => 130,  317 => 129,  312 => 127,  309 => 126,  299 => 124,  297 => 123,  293 => 122,  288 => 119,  284 => 117,  281 => 116,  273 => 114,  265 => 112,  262 => 111,  260 => 110,  255 => 108,  251 => 107,  246 => 104,  242 => 102,  234 => 100,  232 => 99,  227 => 97,  223 => 96,  215 => 91,  204 => 83,  200 => 81,  193 => 75,  189 => 74,  183 => 71,  179 => 70,  173 => 67,  169 => 65,  163 => 52,  154 => 45,  148 => 42,  144 => 41,  141 => 40,  139 => 39,  134 => 37,  130 => 36,  124 => 33,  120 => 32,  112 => 29,  108 => 28,  100 => 23,  90 => 15,  79 => 13,  75 => 12,  70 => 10,  64 => 9,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_info.twig", "");
    }
}

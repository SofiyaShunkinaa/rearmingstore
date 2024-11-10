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

/* marketing/coupon_form.twig */
class __TwigTemplate_8ee55560431f58862a052f2895defd6f extends Template
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
        <button type=\"submit\" form=\"form-coupon\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            ";
        // line 30
        if (($context["coupon_id"] ?? null)) {
            // line 31
            echo "              <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
            ";
        }
        // line 33
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 39
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  ";
        // line 40
        if (($context["error_name"] ?? null)) {
            // line 41
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 43
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 46
        echo ($context["help_code"] ?? null);
        echo "\">";
        echo ($context["entry_code"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 48
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
                  ";
        // line 49
        if (($context["error_code"] ?? null)) {
            // line 50
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
                  ";
        }
        // line 52
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-type\"><span data-toggle=\"tooltip\" title=\"";
        // line 55
        echo ($context["help_type"] ?? null);
        echo "\">";
        echo ($context["entry_type"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">
                    ";
        // line 58
        if ((($context["type"] ?? null) == "P")) {
            // line 59
            echo "                      <option value=\"P\" selected=\"selected\">";
            echo ($context["text_percent"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 61
            echo "                      <option value=\"P\">";
            echo ($context["text_percent"] ?? null);
            echo "</option>
                    ";
        }
        // line 63
        echo "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 64
            echo "                      <option value=\"F\" selected=\"selected\">";
            echo ($context["text_amount"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 66
            echo "                      <option value=\"F\">";
            echo ($context["text_amount"] ?? null);
            echo "</option>
                    ";
        }
        // line 68
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-discount\">";
        // line 72
        echo ($context["entry_discount"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 74
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 78
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 80
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 84
        echo ($context["help_logged"] ?? null);
        echo "\">";
        echo ($context["entry_logged"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 87
        if (($context["logged"] ?? null)) {
            // line 88
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 89
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 91
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\"/>
                      ";
            // line 92
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 94
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 96
        if ( !($context["logged"] ?? null)) {
            // line 97
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 98
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 100
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\"/>
                      ";
            // line 101
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 103
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 107
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 110
        if (($context["shipping"] ?? null)) {
            // line 111
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 112
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 114
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 115
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 117
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 119
        if ( !($context["shipping"] ?? null)) {
            // line 120
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 121
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 123
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 124
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 126
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 130
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 132
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\"/>
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 135
            echo "                      <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 135);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i> ";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 136);
            echo "
                        <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 137);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 144
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 146
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 149
            echo "                      <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 149);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i> ";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 150);
            echo "
                        <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 151
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 151);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-start\">";
        // line 158
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 161
        echo ($context["date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\"/>
                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-end\">";
        // line 167
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 170
        echo ($context["date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\"/>
                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 176
        echo ($context["help_uses_total"] ?? null);
        echo "\">";
        echo ($context["entry_uses_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 178
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 182
        echo ($context["help_uses_customer"] ?? null);
        echo "\">";
        echo ($context["entry_uses_customer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 184
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 188
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 191
        if (($context["status"] ?? null)) {
            // line 192
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 193
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 195
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 196
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 198
        echo "                  </select>
                </div>
              </div>
            </div>
            ";
        // line 202
        if (($context["coupon_id"] ?? null)) {
            // line 203
            echo "              <div id=\"tab-history\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
            // line 205
            echo ($context["text_coupon"] ?? null);
            echo "</legend>
                  <div id=\"history\"></div>
                </fieldset>
              </div>
            ";
        }
        // line 210
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'product\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 219
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
              dataType: 'json',
              success: function (json) {
                  response(\$.map(json, function (item) {
                      return {
                          label: item['name'],
                          value: item['product_id']
                      }
                  }));
              }
          });
      },
      'select': function (item) {
          \$('input[name=\\'product\\']').val('');

          \$('#coupon-product' + item['value']).remove();

          \$('#coupon-product').append('<div id=\"coupon-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\"/></div>');
      }
  });

  \$('#coupon-product').delegate('.fa-minus-circle', 'click', function () {
      \$(this).parent().remove();
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 248
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
              dataType: 'json',
              success: function (json) {
                  response(\$.map(json, function (item) {
                      return {
                          label: item['name'],
                          value: item['category_id']
                      }
                  }));
              }
          });
      },
      'select': function (item) {
          \$('input[name=\\'category\\']').val('');

          \$('#coupon-category' + item['value']).remove();

          \$('#coupon-category').append('<div id=\"coupon-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\"/></div>');
      }
  });

  \$('#coupon-category').delegate('.fa-minus-circle', 'click', function () {
      \$(this).parent().remove();
  });
  //--></script>
  ";
        // line 273
        if (($context["coupon_id"] ?? null)) {
            // line 274
            echo "    <script type=\"text/javascript\"><!--
        \$('#history').delegate('.pagination a', 'click', function (e) {
            e.preventDefault();

            \$('#history').load(this.href);
        });

        \$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 281
            echo ($context["user_token"] ?? null);
            echo "&coupon_id=";
            echo ($context["coupon_id"] ?? null);
            echo "');
    //--></script>
  ";
        }
        // line 284
        echo "  <script type=\"text/javascript\"><!--
      \$('.date').datetimepicker({
          language: '";
        // line 286
        echo ($context["datepicker"] ?? null);
        echo "',
          pickTime: false
      });
  //--></script>
</div>
";
        // line 291
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketing/coupon_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 291,  642 => 286,  638 => 284,  630 => 281,  621 => 274,  619 => 273,  591 => 248,  559 => 219,  548 => 210,  540 => 205,  536 => 203,  534 => 202,  528 => 198,  523 => 196,  518 => 195,  513 => 193,  508 => 192,  506 => 191,  500 => 188,  491 => 184,  484 => 182,  475 => 178,  468 => 176,  457 => 170,  451 => 167,  440 => 161,  434 => 158,  428 => 154,  419 => 151,  415 => 150,  410 => 149,  406 => 148,  401 => 146,  394 => 144,  388 => 140,  379 => 137,  375 => 136,  370 => 135,  366 => 134,  361 => 132,  354 => 130,  348 => 126,  343 => 124,  340 => 123,  335 => 121,  332 => 120,  330 => 119,  326 => 117,  321 => 115,  318 => 114,  313 => 112,  310 => 111,  308 => 110,  302 => 107,  296 => 103,  291 => 101,  288 => 100,  283 => 98,  280 => 97,  278 => 96,  274 => 94,  269 => 92,  266 => 91,  261 => 89,  258 => 88,  256 => 87,  248 => 84,  239 => 80,  232 => 78,  223 => 74,  218 => 72,  212 => 68,  206 => 66,  200 => 64,  197 => 63,  191 => 61,  185 => 59,  183 => 58,  175 => 55,  170 => 52,  164 => 50,  162 => 49,  156 => 48,  149 => 46,  144 => 43,  138 => 41,  136 => 40,  130 => 39,  125 => 37,  119 => 33,  113 => 31,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_form.twig", "");
    }
}

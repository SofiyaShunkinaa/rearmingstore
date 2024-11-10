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

/* catalog/product_list.twig */
class __TwigTemplate_6bbee225357cb5cda654c61329a4e87e extends Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button></div>
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
    ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 29
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 38
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 41
        echo ($context["entry_model"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 42
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
        // line 45
        echo ($context["entry_price"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 46
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 49
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 50
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 53
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 56
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 57
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 59
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 61
        echo "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 62
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 64
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 66
        echo "              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 69
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 77
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 80
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                      <td class=\"text-center\">";
        // line 86
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">
                        ";
        // line 88
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 89
            echo "                          <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 91
            echo "                          <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        }
        // line 93
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 95
        if ((($context["sort"] ?? null) == "p.model")) {
            // line 96
            echo "                          <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 98
            echo "                          <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>
                        ";
        }
        // line 100
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 102
        if ((($context["sort"] ?? null) == "p.price")) {
            // line 103
            echo "                          <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 105
            echo "                          <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>
                        ";
        }
        // line 107
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 109
        if ((($context["sort"] ?? null) == "p.quantity")) {
            // line 110
            echo "                          <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 112
            echo "                          <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>
                        ";
        }
        // line 114
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 116
        if ((($context["sort"] ?? null) == "p.status")) {
            // line 117
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 119
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        }
        // line 121
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 122
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 126
        if (($context["products"] ?? null)) {
            // line 127
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 128
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 130
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 130), ($context["selected"] ?? null))) {
                    // line 131
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 131);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 133
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 133);
                    echo "\"/>
                            ";
                }
                // line 135
                echo "                          </td>
                          <td class=\"text-center\">
                            ";
                // line 137
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                              <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 138);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 138);
                    echo "\" class=\"img-thumbnail\"/>
                            ";
                } else {
                    // line 140
                    echo "                              <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                            ";
                }
                // line 142
                echo "                          </td>
                          <td class=\"text-left\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143);
                echo "</td>
                          <td class=\"text-left\">";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 144);
                echo "</td>
                          <td class=\"text-right\">
                            ";
                // line 146
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 146)) {
                    // line 147
                    echo "                              <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 147);
                    echo "</span>
                              <br/>
                              <div class=\"text-danger\">";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 149);
                    echo "</div>
                            ";
                } else {
                    // line 151
                    echo "                              ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 151);
                    echo "
                            ";
                }
                // line 153
                echo "                          </td>
                          <td class=\"text-right\">
                            ";
                // line 155
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 155) <= 0)) {
                    // line 156
                    echo "                              <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 156);
                    echo "</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 157
$context["product"], "quantity", [], "any", false, false, false, 157) <= 5)) {
                    // line 158
                    echo "                              <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 158);
                    echo "</span>
                            ";
                } else {
                    // line 160
                    echo "                              <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 160);
                    echo "</span>
                            ";
                }
                // line 162
                echo "                          </td>
                          <td class=\"text-left\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 163);
                echo "</td>
                          <td class=\"text-right\">
\t\t\t\t\t\t\t<a href=\"";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["product"], "us", [], "any", false, false, false, 165);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">US</a>
\t\t\t\t\t\t\t<a href=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 166);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">EU</a>
\t\t\t\t\t\t  </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                    ";
        } else {
            // line 171
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 172
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 175
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 180
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 181
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function () {
      var url = '';

      var filter_name = \$('input[name=\\'filter_name\\']').val();

      if (filter_name) {
          url += '&filter_name=' + encodeURIComponent(filter_name);
      }

      var filter_model = \$('input[name=\\'filter_model\\']').val();

      if (filter_model) {
          url += '&filter_model=' + encodeURIComponent(filter_model);
      }

      var filter_price = \$('input[name=\\'filter_price\\']').val();

      if (filter_price) {
          url += '&filter_price=' + encodeURIComponent(filter_price);
      }

      var filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

      if (filter_quantity) {
          url += '&filter_quantity=' + encodeURIComponent(filter_quantity);
      }

      var filter_status = \$('select[name=\\'filter_status\\']').val();

      if (filter_status !== '') {
          url += '&filter_status=' + encodeURIComponent(filter_status);
      }

      location = 'index.php?route=catalog/product&user_token=";
        // line 222
        echo ($context["user_token"] ?? null);
        echo "' + url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  // IE and Edge fix!
  \$('button[form=\\'form-product\\']').on('click', function (e) {
      \$('#form-product').attr('action', \$(this).attr('formaction'));
  });

  \$('input[name=\\'filter_name\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 234
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
          \$('input[name=\\'filter_name\\']').val(item['label']);
      }
  });

  \$('input[name=\\'filter_model\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 254
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' + encodeURIComponent(request),
              dataType: 'json',
              success: function (json) {
                  response(\$.map(json, function (item) {
                      return {
                          label: item['model'],
                          value: item['product_id']
                      }
                  }));
              }
          });
      },
      'select': function (item) {
          \$('input[name=\\'filter_model\\']').val(item['label']);
      }
  });
  //--></script>
</div>
";
        // line 272
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 272,  605 => 254,  582 => 234,  567 => 222,  523 => 181,  519 => 180,  512 => 175,  506 => 172,  503 => 171,  500 => 170,  488 => 166,  482 => 165,  477 => 163,  474 => 162,  468 => 160,  462 => 158,  460 => 157,  455 => 156,  453 => 155,  449 => 153,  443 => 151,  438 => 149,  432 => 147,  430 => 146,  425 => 144,  421 => 143,  418 => 142,  414 => 140,  406 => 138,  404 => 137,  400 => 135,  394 => 133,  388 => 131,  386 => 130,  382 => 128,  377 => 127,  375 => 126,  368 => 122,  365 => 121,  357 => 119,  347 => 117,  345 => 116,  341 => 114,  333 => 112,  323 => 110,  321 => 109,  317 => 107,  309 => 105,  299 => 103,  297 => 102,  293 => 100,  285 => 98,  275 => 96,  273 => 95,  269 => 93,  261 => 91,  251 => 89,  249 => 88,  244 => 86,  235 => 80,  229 => 77,  218 => 69,  213 => 66,  207 => 64,  201 => 62,  198 => 61,  192 => 59,  186 => 57,  184 => 56,  178 => 53,  170 => 50,  166 => 49,  158 => 46,  154 => 45,  146 => 42,  142 => 41,  134 => 38,  130 => 37,  123 => 33,  117 => 29,  109 => 25,  106 => 24,  98 => 20,  96 => 19,  90 => 15,  79 => 13,  75 => 12,  70 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}

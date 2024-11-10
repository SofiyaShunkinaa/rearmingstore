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

/* customer/customer_list.twig */
class __TwigTemplate_0499d01c13eda0c80fc15f281103061b extends Template
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
        echo "\" onclick=\"\$('#filter-customer').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\">
          <i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-customer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button></div>
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
      <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
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
              <label class=\"control-label\" for=\"input-email\">";
        // line 41
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 42
        echo ($context["filter_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer-group\">";
        // line 45
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
              <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 49
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 49) == ($context["filter_customer_group_id"] ?? null))) {
                // line 50
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 50);
                echo "</option>
                  ";
            } else {
                // line 52
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 52);
                echo "</option>
                  ";
            }
            // line 54
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 58
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 61
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 62
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 64
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 66
        echo "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 67
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 69
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 71
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-ip\">";
        // line 74
        echo ($context["entry_ip"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 75
        echo ($context["filter_ip"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ip"] ?? null);
        echo "\" id=\"input-ip\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 78
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 80
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\"/>
                <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 85
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
        // line 93
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 96
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                      <td class=\"text-left\">
                        ";
        // line 103
        if ((($context["sort"] ?? null) == "name")) {
            // line 104
            echo "                          <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 106
            echo "                          <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        }
        // line 108
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 110
        if ((($context["sort"] ?? null) == "c.email")) {
            // line 111
            echo "                          <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 113
            echo "                          <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                        ";
        }
        // line 115
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 117
        if ((($context["sort"] ?? null) == "customer_group")) {
            // line 118
            echo "                          <a href=\"";
            echo ($context["sort_customer_group"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 120
            echo "                          <a href=\"";
            echo ($context["sort_customer_group"] ?? null);
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>
                        ";
        }
        // line 122
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 124
        if ((($context["sort"] ?? null) == "c.status")) {
            // line 125
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 127
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        }
        // line 129
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 131
        if ((($context["sort"] ?? null) == "c.ip")) {
            // line 132
            echo "                          <a href=\"";
            echo ($context["sort_ip"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_ip"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 134
            echo "                          <a href=\"";
            echo ($context["sort_ip"] ?? null);
            echo "\">";
            echo ($context["column_ip"] ?? null);
            echo "</a>
                        ";
        }
        // line 136
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 138
        if ((($context["sort"] ?? null) == "c.date_added")) {
            // line 139
            echo "                          <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 141
            echo "                          <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        }
        // line 143
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 144
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 148
        if (($context["customers"] ?? null)) {
            // line 149
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 150
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 152
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 152), ($context["selected"] ?? null))) {
                    // line 153
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 153);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 155
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 155);
                    echo "\"/>
                            ";
                }
                // line 157
                echo "                          </td>
                          <td class=\"text-left\">";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 158);
                echo "</td>
                          <td class=\"text-left\">";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 159);
                echo "</td>
                          <td class=\"text-left\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 160);
                echo "</td>
                          <td class=\"text-left\">";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 161);
                echo "</td>
                          <td class=\"text-left\">";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 162);
                echo "</td>
                          <td class=\"text-left\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 163);
                echo "</td>
                          <td class=\"text-right\">
                            <div class=\"btn-group\" style=\"min-width: 65px;\">
                              <a href=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 166);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                              <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li class=\"dropdown-header\">";
                // line 169
                echo ($context["text_option"] ?? null);
                echo "</li>
                                ";
                // line 170
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 170)) {
                    // line 171
                    echo "                                  <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 171);
                    echo "\"><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                                ";
                } else {
                    // line 173
                    echo "                                  <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                                ";
                }
                // line 175
                echo "                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"dropdown-header\">";
                // line 176
                echo ($context["text_login"] ?? null);
                echo "</li>
                                ";
                // line 177
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customer"], "store", [], "any", false, false, false, 177));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 178
                    echo "                                  <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 178);
                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 178);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "                              </ul>
                            </div>
                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                    ";
        } else {
            // line 186
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 187
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 190
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 195
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 196
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('.table-responsive').on('shown.bs.dropdown', function (e) {
      var t = \$(this),
          m = \$(e.target).find('.dropdown-menu'),
          tb = t.offset().top + t.height(),
          mb = m.offset().top + m.outerHeight(true),
          d = 20;
      if (t[0].scrollWidth > t.innerWidth()) {
          if (mb + d > tb) {
              t.css('padding-bottom', ((mb + d) - tb));
          }
      } else {
          t.css('overflow', 'visible');
      }
  }).on('hidden.bs.dropdown', function () {
      \$(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function () {
      url = 'index.php?route=customer/customer&user_token=";
        // line 223
        echo ($context["user_token"] ?? null);
        echo "';

      var filter_name = \$('input[name=\\'filter_name\\']').val();

      if (filter_name) {
          url += '&filter_name=' + encodeURIComponent(filter_name);
      }

      var filter_email = \$('input[name=\\'filter_email\\']').val();

      if (filter_email) {
          url += '&filter_email=' + encodeURIComponent(filter_email);
      }

      var filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();

      if (filter_customer_group_id !== '') {
          url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
      }

      var filter_status = \$('select[name=\\'filter_status\\']').val();

      if (filter_status !== '') {
          url += '&filter_status=' + encodeURIComponent(filter_status);
      }

      var filter_ip = \$('input[name=\\'filter_ip\\']').val();

      if (filter_ip) {
          url += '&filter_ip=' + encodeURIComponent(filter_ip);
      }

      var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

      if (filter_date_added) {
          url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
      }

      location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 268
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
              dataType: 'json',
              success: function (json) {
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
          \$('input[name=\\'filter_name\\']').val(item['label']);
      }
  });

  \$('input[name=\\'filter_email\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 288
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' + encodeURIComponent(request),
              dataType: 'json',
              success: function (json) {
                  response(\$.map(json, function (item) {
                      return {
                          label: item['email'],
                          value: item['customer_id']
                      }
                  }));
              }
          });
      },
      'select': function (item) {
          \$('input[name=\\'filter_email\\']').val(item['label']);
      }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
      language: '";
        // line 307
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
  });
  //--></script>
</div>
";
        // line 312
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/customer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 312,  691 => 307,  669 => 288,  646 => 268,  598 => 223,  568 => 196,  564 => 195,  557 => 190,  551 => 187,  548 => 186,  545 => 185,  535 => 180,  524 => 178,  520 => 177,  516 => 176,  513 => 175,  507 => 173,  499 => 171,  497 => 170,  493 => 169,  485 => 166,  479 => 163,  475 => 162,  471 => 161,  467 => 160,  463 => 159,  459 => 158,  456 => 157,  450 => 155,  444 => 153,  442 => 152,  438 => 150,  433 => 149,  431 => 148,  424 => 144,  421 => 143,  413 => 141,  403 => 139,  401 => 138,  397 => 136,  389 => 134,  379 => 132,  377 => 131,  373 => 129,  365 => 127,  355 => 125,  353 => 124,  349 => 122,  341 => 120,  331 => 118,  329 => 117,  325 => 115,  317 => 113,  307 => 111,  305 => 110,  301 => 108,  293 => 106,  283 => 104,  281 => 103,  271 => 96,  265 => 93,  254 => 85,  244 => 80,  239 => 78,  231 => 75,  227 => 74,  222 => 71,  216 => 69,  210 => 67,  207 => 66,  201 => 64,  195 => 62,  193 => 61,  187 => 58,  182 => 55,  176 => 54,  168 => 52,  160 => 50,  157 => 49,  153 => 48,  147 => 45,  139 => 42,  135 => 41,  127 => 38,  123 => 37,  116 => 33,  110 => 29,  102 => 25,  99 => 24,  91 => 20,  89 => 19,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  57 => 9,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_list.twig", "");
    }
}

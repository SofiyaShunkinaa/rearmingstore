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

/* sale/order_list.twig */
class __TwigTemplate_c4ed8b815767324a28bb6185c9f7f1a9 extends Template
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
      <div class=\"pull-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 6
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
        <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-id\">";
        // line 36
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 37
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">";
        // line 40
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 41
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-status\">";
        // line 44
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
              <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 47
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 48
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
                ";
        } else {
            // line 50
            echo "                  <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
                ";
        }
        // line 52
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 53
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 53) == ($context["filter_order_status_id"] ?? null))) {
                // line 54
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 54);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 54);
                echo "</option>
                  ";
            } else {
                // line 56
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 56);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 56);
                echo "</option>
                  ";
            }
            // line 58
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-total\">";
        // line 62
        echo ($context["entry_total"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_total\" value=\"";
        // line 63
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 66
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 68
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\"/>
                <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-modified\">";
        // line 73
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 75
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\"/>
                <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 80
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
        // line 88
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                      <td class=\"text-right\">
                        ";
        // line 98
        if ((($context["sort"] ?? null) == "o.order_id")) {
            // line 99
            echo "                          <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 101
            echo "                          <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
                        ";
        }
        // line 103
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 105
        if ((($context["sort"] ?? null) == "customer")) {
            // line 106
            echo "                          <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 108
            echo "                          <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                        ";
        }
        // line 110
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 112
        if ((($context["sort"] ?? null) == "order_status")) {
            // line 113
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 115
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        }
        // line 117
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 119
        if ((($context["sort"] ?? null) == "o.total")) {
            // line 120
            echo "                          <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 122
            echo "                          <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>
                        ";
        }
        // line 124
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 126
        if ((($context["sort"] ?? null) == "o.date_added")) {
            // line 127
            echo "                          <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 129
            echo "                          <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        }
        // line 131
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 133
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            // line 134
            echo "                          <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 136
            echo "                          <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                        ";
        }
        // line 138
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 139
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 143
        if (($context["orders"] ?? null)) {
            // line 144
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 145
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 147
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 147), ($context["selected"] ?? null))) {
                    // line 148
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 148);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 150
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 150);
                    echo "\"/>
                            ";
                }
                // line 152
                echo "                            <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 152);
                echo "\"/></td>
                          <td class=\"text-right\">";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 153);
                echo "</td>
                          <td class=\"text-left\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 154);
                echo "</td>
                          <td class=\"text-left\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 155);
                echo "</td>
                          <td class=\"text-right\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 156);
                echo "</td>
                          <td class=\"text-left\">";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 157);
                echo "</td>
                          <td class=\"text-left\">";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 158);
                echo "</td>
                          <td class=\"text-right\">
                            <div style=\"min-width: 120px;\">
                              <div class=\"btn-group\">
                                <a href=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 162);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                                <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                  <li><a href=\"";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 165);
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo ($context["button_edit"] ?? null);
                echo "</a></li>
                                  <li><a href=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 166);
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                    ";
        } else {
            // line 175
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 176
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 179
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 184
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 185
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function () {
        url = '';

        var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

        if (filter_order_id) {
            url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
        }

        var filter_customer = \$('input[name=\\'filter_customer\\']').val();

        if (filter_customer) {
            url += '&filter_customer=' + encodeURIComponent(filter_customer);
        }

        var filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

        if (filter_order_status_id !== '') {
            url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
        }

        var filter_total = \$('input[name=\\'filter_total\\']').val();

        if (filter_total) {
            url += '&filter_total=' + encodeURIComponent(filter_total);
        }

        var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

        if (filter_date_added) {
            url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
        }

        var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

        if (filter_date_modified) {
            url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
        }

        location = 'index.php?route=sale/order&user_token=";
        // line 231
        echo ($context["user_token"] ?? null);
        echo "' + url;
    });
    //--></script>
    <script type=\"text/javascript\"><!--
    \$('input[name=\\'filter_customer\\']').autocomplete({
        'source': function (request, response) {
            \$.ajax({
                url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 238
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
            \$('input[name=\\'filter_customer\\']').val(item['label']);
        }
    });
    //--></script>
    <script type=\"text/javascript\"><!--
    \$('input[name^=\\'selected\\']').on('change', function () {
        \$('#button-shipping, #button-invoice').prop('disabled', true);

        var selected = \$('input[name^=\\'selected\\']:checked');

        if (selected.length) {
            \$('#button-invoice').prop('disabled', false);
        }

        for (i = 0; i < selected.length; i++) {
            if (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
                \$('#button-shipping').prop('disabled', false);

                break;
            }
        }
    });

    \$('#button-shipping, #button-invoice').prop('disabled', true);

    \$('input[name^=\\'selected\\']:first').trigger('change');

    // IE and Edge fix!
    \$('#button-shipping, #button-invoice').on('click', function (e) {
        \$('#form-order').attr('action', this.getAttribute('formAction'));
    });

    \$('#form-order li:last-child a').on('click', function (e) {
        e.preventDefault();

        var element = this;

        if (confirm('";
        // line 288
        echo ($context["text_confirm"] ?? null);
        echo "')) {
            \$.ajax({
                url: '";
        // line 290
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
                dataType: 'json',
                beforeSend: function () {
                    \$(element).parent().parent().parent().find('button').button('loading');
                },
                complete: function () {
                    \$(element).parent().parent().parent().find('button').button('reset');
                },
                success: function (json) {
                    \$('.alert-dismissible').remove();

                    if (json['error']) {
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    if (json['success']) {
                        location = '";
        // line 306
        echo ($context["delete"] ?? null);
        echo "';
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    });
    //--></script>
    <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
    <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>

    <script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 321
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });
    //--></script>
</div>
";
        // line 326
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  698 => 326,  690 => 321,  672 => 306,  649 => 290,  644 => 288,  591 => 238,  581 => 231,  532 => 185,  528 => 184,  521 => 179,  515 => 176,  512 => 175,  509 => 174,  493 => 166,  487 => 165,  479 => 162,  472 => 158,  468 => 157,  464 => 156,  460 => 155,  456 => 154,  452 => 153,  447 => 152,  441 => 150,  435 => 148,  433 => 147,  429 => 145,  424 => 144,  422 => 143,  415 => 139,  412 => 138,  404 => 136,  394 => 134,  392 => 133,  388 => 131,  380 => 129,  370 => 127,  368 => 126,  364 => 124,  356 => 122,  346 => 120,  344 => 119,  340 => 117,  332 => 115,  322 => 113,  320 => 112,  316 => 110,  308 => 108,  298 => 106,  296 => 105,  292 => 103,  284 => 101,  274 => 99,  272 => 98,  259 => 88,  248 => 80,  238 => 75,  233 => 73,  223 => 68,  218 => 66,  210 => 63,  206 => 62,  201 => 59,  195 => 58,  187 => 56,  179 => 54,  176 => 53,  171 => 52,  165 => 50,  159 => 48,  157 => 47,  151 => 44,  143 => 41,  139 => 40,  131 => 37,  127 => 36,  120 => 32,  114 => 28,  106 => 24,  103 => 23,  95 => 19,  93 => 18,  87 => 14,  76 => 12,  72 => 11,  67 => 9,  61 => 8,  55 => 7,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}

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

/* catalog/review_list.twig */
class __TwigTemplate_7eb10c80e82255f99bbf10506c0493f0 extends Template
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
        echo "\" onclick=\"\$('#filter-review').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button></div>
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
      <div id=\"filter-review\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 36
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_product\" value=\"";
        // line 37
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-author\">";
        // line 40
        echo ($context["entry_author"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_author\" value=\"";
        // line 41
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 44
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 47
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 48
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 50
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 52
        echo "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 53
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 55
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 57
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 60
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 62
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\"/>
                <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 67
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
        // line 75
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 78
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                      <td class=\"text-left\">
                        ";
        // line 85
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 86
            echo "                          <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 88
            echo "                          <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a>
                        ";
        }
        // line 90
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 92
        if ((($context["sort"] ?? null) == "r.author")) {
            // line 93
            echo "                          <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 95
            echo "                          <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        }
        // line 97
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 99
        if ((($context["sort"] ?? null) == "r.rating")) {
            // line 100
            echo "                          <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 102
            echo "                          <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a>
                        ";
        }
        // line 104
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 106
        if ((($context["sort"] ?? null) == "r.status")) {
            // line 107
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 109
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        }
        // line 111
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 113
        if ((($context["sort"] ?? null) == "r.date_added")) {
            // line 114
            echo "                          <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 116
            echo "                          <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        }
        // line 118
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 119
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 123
        if (($context["reviews"] ?? null)) {
            // line 124
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 125
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 127
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 127), ($context["selected"] ?? null))) {
                    // line 128
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 128);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 130
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 130);
                    echo "\"/>
                            ";
                }
                // line 132
                echo "                          </td>
                          <td class=\"text-left\">";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 133);
                echo "</td>
                          <td class=\"text-left\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 134);
                echo "</td>
                          <td class=\"text-right\">";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 135);
                echo "</td>
                          <td class=\"text-left\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 136);
                echo "</td>
                          <td class=\"text-left\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 137);
                echo "</td>
                          <td class=\"text-right\"><a href=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 138);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                    ";
        } else {
            // line 142
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"7\">";
            // line 143
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 146
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 151
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 152
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
      url = 'index.php?route=catalog/review&user_token=";
        // line 161
        echo ($context["user_token"] ?? null);
        echo "';

      var filter_product = \$('input[name=\\'filter_product\\']').val();

      if (filter_product) {
          url += '&filter_product=' + encodeURIComponent(filter_product);
      }

      var filter_author = \$('input[name=\\'filter_author\\']').val();

      if (filter_author) {
          url += '&filter_author=' + encodeURIComponent(filter_author);
      }

      var filter_status = \$('select[name=\\'filter_status\\']').val();

      if (filter_status !== '') {
          url += '&filter_status=' + encodeURIComponent(filter_status);
      }

      var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

      if (filter_date_added) {
          url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
      }

      location = url;
  });

  \$('input[name=\\'filter_product\\']').autocomplete({
      'source': function (request, response) {
          \$.ajax({
              url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 193
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
          \$('input[name=\\'filter_product\\']').val(item['label']);
      }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
      language: '";
        // line 212
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
  });
  //--></script>
</div>
";
        // line 217
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 217,  505 => 212,  483 => 193,  448 => 161,  436 => 152,  432 => 151,  425 => 146,  419 => 143,  416 => 142,  413 => 141,  402 => 138,  398 => 137,  394 => 136,  390 => 135,  386 => 134,  382 => 133,  379 => 132,  373 => 130,  367 => 128,  365 => 127,  361 => 125,  356 => 124,  354 => 123,  347 => 119,  344 => 118,  336 => 116,  326 => 114,  324 => 113,  320 => 111,  312 => 109,  302 => 107,  300 => 106,  296 => 104,  288 => 102,  278 => 100,  276 => 99,  272 => 97,  264 => 95,  254 => 93,  252 => 92,  248 => 90,  240 => 88,  230 => 86,  228 => 85,  218 => 78,  212 => 75,  201 => 67,  191 => 62,  186 => 60,  181 => 57,  175 => 55,  169 => 53,  166 => 52,  160 => 50,  154 => 48,  152 => 47,  146 => 44,  138 => 41,  134 => 40,  126 => 37,  122 => 36,  115 => 32,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/review_list.twig", "");
    }
}

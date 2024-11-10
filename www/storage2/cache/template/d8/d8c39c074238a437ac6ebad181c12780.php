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

/* design/seo_url_list.twig */
class __TwigTemplate_2f3ffc48343d5b3342abce2264c3dd28 extends Template
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
        echo "\" onclick=\"\$('#filter-seo').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
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
        echo "') ? \$('#form-url-alias').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button></div>
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
      <div id=\"filter-seo\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-query\">";
        // line 36
        echo ($context["entry_query"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_query\" value=\"";
        // line 37
        echo ($context["filter_query"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_query"] ?? null);
        echo "\" id=\"input-query\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-keyword\">";
        // line 40
        echo ($context["entry_keyword"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_keyword\" value=\"";
        // line 41
        echo ($context["filter_keyword"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_keyword"] ?? null);
        echo "\" id=\"input-keyword\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-store\">";
        // line 44
        echo ($context["entry_store"] ?? null);
        echo "</label>
              <select name=\"filter_store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 47
        if ((($context["filter_store_id"] ?? null) == "0")) {
            // line 48
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                ";
        } else {
            // line 50
            echo "                  <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                ";
        }
        // line 52
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 53
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 53) == ($context["filter_store_id"] ?? null))) {
                // line 54
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 54);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 54);
                echo "</option>
                  ";
            } else {
                // line 56
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 56);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 56);
                echo "</option>
                  ";
            }
            // line 58
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-language\">";
        // line 62
        echo ($context["entry_language"] ?? null);
        echo "</label>
              <select name=\"filter_language_id\" id=\"input-language\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 66
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66) == ($context["filter_language_id"] ?? null))) {
                // line 67
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 67);
                echo "</option>
                  ";
            } else {
                // line 69
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 69);
                echo "</option>
                  ";
            }
            // line 71
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "              </select>
            </div>
            <div class=\"text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\">
                <i class=\"fa fa-filter\"></i> ";
        // line 76
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
        // line 84
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 87
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-url-alias\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                      <td class=\"text-left\">
                        ";
        // line 94
        if ((($context["sort"] ?? null) == "query")) {
            // line 95
            echo "                          <a href=\"";
            echo ($context["sort_query"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_query"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 97
            echo "                          <a href=\"";
            echo ($context["sort_query"] ?? null);
            echo "\">";
            echo ($context["column_query"] ?? null);
            echo "</a>
                        ";
        }
        // line 99
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 101
        if ((($context["sort"] ?? null) == "keyword")) {
            // line 102
            echo "                          <a href=\"";
            echo ($context["sort_keyword"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_keyword"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 104
            echo "                          <a href=\"";
            echo ($context["sort_keyword"] ?? null);
            echo "\">";
            echo ($context["column_keyword"] ?? null);
            echo "</a>
                        ";
        }
        // line 106
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 108
        if ((($context["sort"] ?? null) == "store")) {
            // line 109
            echo "                          <a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 111
            echo "                          <a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>
                        ";
        }
        // line 113
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 115
        if ((($context["sort"] ?? null) == "language")) {
            // line 116
            echo "                          <a href=\"";
            echo ($context["sort_language"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_language"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 118
            echo "                          <a href=\"";
            echo ($context["sort_language"] ?? null);
            echo "\">";
            echo ($context["column_language"] ?? null);
            echo "</a>
                        ";
        }
        // line 120
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 121
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 125
        if (($context["seo_urls"] ?? null)) {
            // line 126
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seo_urls"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seo_url"]) {
                // line 127
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 129
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", [], "any", false, false, false, 129), ($context["selected"] ?? null))) {
                    // line 130
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", [], "any", false, false, false, 130);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 132
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", [], "any", false, false, false, 132);
                    echo "\"/>
                            ";
                }
                // line 134
                echo "                          </td>
                          <td class=\"text-left\">";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "query", [], "any", false, false, false, 135);
                echo "</td>
                          <td class=\"text-left\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "keyword", [], "any", false, false, false, 136);
                echo "</td>
                          <td class=\"text-left\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "store", [], "any", false, false, false, 137);
                echo "</td>
                          <td class=\"text-left\">";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "language", [], "any", false, false, false, 138);
                echo "</td>
                          <td class=\"text-right\"><a href=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "edit", [], "any", false, false, false, 139);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seo_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                    ";
        } else {
            // line 143
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"6\">";
            // line 144
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 147
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 152
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 153
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
      var url = 'index.php?route=design/seo_url&user_token=";
        // line 162
        echo ($context["user_token"] ?? null);
        echo "';

      var filter_query = \$('input[name=\\'filter_query\\']').val();

      if (filter_query) {
          url += '&filter_query=' + encodeURIComponent(filter_query);
      }

      var filter_keyword = \$('input[name=\\'filter_keyword\\']').val();

      if (filter_keyword) {
          url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
      }

      var filter_store_id = \$('select[name=\\'filter_store_id\\']').val();

      if (filter_store_id) {
          url += '&filter_store_id=' + encodeURIComponent(filter_store_id);
      }

      var filter_language_id = \$('select[name=\\'filter_language_id\\']').val();

      if (filter_language_id) {
          url += '&filter_language_id=' + encodeURIComponent(filter_language_id);
      }

      location = url;
  });
  //--></script>
</div>
";
        // line 192
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "design/seo_url_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 192,  461 => 162,  449 => 153,  445 => 152,  438 => 147,  432 => 144,  429 => 143,  426 => 142,  415 => 139,  411 => 138,  407 => 137,  403 => 136,  399 => 135,  396 => 134,  390 => 132,  384 => 130,  382 => 129,  378 => 127,  373 => 126,  371 => 125,  364 => 121,  361 => 120,  353 => 118,  343 => 116,  341 => 115,  337 => 113,  329 => 111,  319 => 109,  317 => 108,  313 => 106,  305 => 104,  295 => 102,  293 => 101,  289 => 99,  281 => 97,  271 => 95,  269 => 94,  259 => 87,  253 => 84,  242 => 76,  236 => 72,  230 => 71,  222 => 69,  214 => 67,  211 => 66,  207 => 65,  201 => 62,  196 => 59,  190 => 58,  182 => 56,  174 => 54,  171 => 53,  166 => 52,  160 => 50,  154 => 48,  152 => 47,  146 => 44,  138 => 41,  134 => 40,  126 => 37,  122 => 36,  115 => 32,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/seo_url_list.twig", "");
    }
}

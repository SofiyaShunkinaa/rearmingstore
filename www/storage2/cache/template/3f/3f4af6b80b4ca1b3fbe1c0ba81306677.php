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

/* marketplace/marketplace_list.twig */
class __TwigTemplate_7d1c717066b416f20740736b3364b6b7 extends Template
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
        ";
        // line 6
        if ( !($context["error_signature"] ?? null)) {
            // line 7
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
        ";
        } else {
            // line 9
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 11
        echo "      </div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 23
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"input-group\" id=\"extension-filter\">
            <input type=\"text\" name=\"filter_search\" value=\"";
        // line 28
        echo ($context["filter_search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control\"/>
            <div class=\"input-group-btn\">
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "value", [], "any", false, false, false, 31) == ($context["filter_category"] ?? null))) {
                // line 32
                echo "                  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
                echo ($context["text_category"] ?? null);
                echo " (";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 32);
                echo ")<span class=\"caret\"></span></button>
                ";
            }
            // line 34
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              <ul class=\"dropdown-menu\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            echo "                  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 37);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 37);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </ul>
              <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 40
        echo ($context["filter_category_id"] ?? null);
        echo "\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        // line 41
        echo ($context["filter_download_id"] ?? null);
        echo "\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"filter_rating\" value=\"";
        // line 42
        echo ($context["filter_rating"] ?? null);
        echo "\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"filter_license\" value=\"";
        // line 43
        echo ($context["filter_license"] ?? null);
        echo "\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"filter_partner\" value=\"";
        // line 44
        echo ($context["filter_partner"] ?? null);
        echo "\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"sort\" value=\"";
        // line 45
        echo ($context["sort"] ?? null);
        echo "\" class=\"form-control\"/>
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-9 col-xs-7\">
            <div class=\"btn-group\">
              ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["licenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 54
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["license"], "value", [], "any", false, false, false, 54) == ($context["filter_license"] ?? null))) {
                // line 55
                echo "                  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 55);
                echo "\" class=\"btn btn-default active\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 55);
                echo "</a>
                ";
            } else {
                // line 57
                echo "                  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 57);
                echo "\" class=\"btn btn-default\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 57);
                echo "</a>
                ";
            }
            // line 59
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>
          </div>
          <div class=\"col-sm-3 col-xs-5\">
            <div class=\"input-group pull-right\">
              <div class=\"input-group-addon\"><i class=\"fa fa-sort-amount-asc\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-control\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 67
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 67) == ($context["sort"] ?? null))) {
                // line 68
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 68);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 68);
                echo "</option>
                  ";
            } else {
                // line 70
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 70);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 70);
                echo "</option>
                  ";
            }
            // line 72
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "              </select>
            </div>
          </div>
        </div>
        <br/>
        <div id=\"extension-list\">
          ";
        // line 79
        if (($context["promotions"] ?? null)) {
            // line 80
            echo "            <h3>";
            echo ($context["text_featured"] ?? null);
            echo "</h3>
            <div class=\"row\">
              ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 83
                echo "                ";
                if ($context["extension"]) {
                    // line 84
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                    <section>
                      <div class=\"extension-preview\"><a href=\"";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 86);
                    echo "\">
                        <div class=\"extension-description\"></div>
                        <img src=\"";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 88);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 88);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 88);
                    echo "\" class=\"img-responsive\"/></a>
                      </div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 91);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 91);
                    echo "</a></h4>
                        ";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 92);
                    echo "
                      </div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-xs-6\">
                            ";
                    // line 97
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 98
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 98) >= $context["i"])) {
                            // line 99
                            echo "                                <i class=\"fa fa-star\"></i>
                              ";
                        } else {
                            // line 101
                            echo "                                <i class=\"fa fa-star-o\"></i>
                              ";
                        }
                        // line 103
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 104
                    echo "                          </div>
                          <div class=\"col-xs-6\">
                            <div class=\"text-right\">";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 106);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 113
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "            </div>
            <hr>
          ";
        }
        // line 117
        echo "          ";
        if (($context["extensions"] ?? null)) {
            // line 118
            echo "            <div class=\"row\">
              ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 120
                echo "                ";
                if ($context["extension"]) {
                    // line 121
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                    <section>
                      <div class=\"extension-preview\"><a href=\"";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 123);
                    echo "\">
                        <div class=\"extension-description\"></div>
                        <img src=\"";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 125);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 125);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 125);
                    echo "\" class=\"img-responsive\"/></a>
                      </div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 128);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 128);
                    echo "</a></h4>
                        ";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 129);
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-xs-6\">
                            ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 134
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 134) >= $context["i"])) {
                            // line 135
                            echo "                                <i class=\"fa fa-star\"></i>
                              ";
                        } else {
                            // line 137
                            echo "                                <i class=\"fa fa-star-o\"></i>
                              ";
                        }
                        // line 139
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                          </div>
                          <div class=\"col-xs-6\">
                            <div class=\"text-right\">";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 142);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 149
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "            </div>
          ";
        } else {
            // line 152
            echo "            <p class=\"text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
          ";
        }
        // line 154
        echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 156
        echo ($context["pagination"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#button-opencart').on('click', function (e) {
      \$('#modal-opencart').remove();

      \$.ajax({
          url: 'index.php?route=marketplace/api&user_token=";
        // line 166
        echo ($context["user_token"] ?? null);
        echo "',
          dataType: 'html',
          beforeSend: function () {
              \$('#button-opencart').button('loading');
          },
          complete: function () {
              \$('#button-opencart').button('reset');
          },
          success: function (html) {
              \$('body').append('<div id=\"modal-opencart\" class=\"modal\">' + html + '</div>');

              \$('#modal-opencart').modal('show');
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function (e) {
      var url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 187
        echo ($context["user_token"] ?? null);
        echo "';

      var input = \$('#extension-filter :input');

      for (i = 0; i < input.length; i++) {
          if (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
              url += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
          }
      }

      location = url;
  });

  \$('input[name=\"filter_search\"]').keydown(function (e) {
      if (e.keyCode == 13) {
          e.preventDefault();

          \$('#button-filter').trigger('click');
      }
  });
 //--></script>
</div>
";
        // line 209
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 209,  488 => 187,  464 => 166,  451 => 156,  447 => 154,  441 => 152,  437 => 150,  431 => 149,  419 => 142,  415 => 140,  409 => 139,  405 => 137,  401 => 135,  398 => 134,  394 => 133,  387 => 129,  381 => 128,  371 => 125,  366 => 123,  362 => 121,  359 => 120,  355 => 119,  352 => 118,  349 => 117,  344 => 114,  338 => 113,  326 => 106,  322 => 104,  316 => 103,  312 => 101,  308 => 99,  305 => 98,  301 => 97,  293 => 92,  287 => 91,  277 => 88,  272 => 86,  268 => 84,  265 => 83,  261 => 82,  255 => 80,  253 => 79,  245 => 73,  239 => 72,  231 => 70,  223 => 68,  220 => 67,  216 => 66,  208 => 60,  202 => 59,  194 => 57,  186 => 55,  183 => 54,  179 => 53,  168 => 45,  164 => 44,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  145 => 39,  134 => 37,  130 => 36,  127 => 35,  121 => 34,  113 => 32,  110 => 31,  106 => 30,  99 => 28,  91 => 23,  83 => 17,  72 => 15,  68 => 14,  63 => 12,  60 => 11,  54 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/marketplace_list.twig", "");
    }
}

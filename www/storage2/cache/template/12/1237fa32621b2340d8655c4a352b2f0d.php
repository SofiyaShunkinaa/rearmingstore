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

/* marketplace/event.twig */
class __TwigTemplate_8e7420721e12feecc4cf62180c454ca1 extends Template
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
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-event').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button></div>
      <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 26
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_event"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-event\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                  <td class=\"text-left\">
                    ";
        // line 39
        if ((($context["sort"] ?? null) == "code")) {
            // line 40
            echo "                      <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 42
            echo "                      <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        }
        // line 44
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 46
        if ((($context["sort"] ?? null) == "status")) {
            // line 47
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 51
        echo "                  </td>
                  <td class=\"text-right\">
                    ";
        // line 53
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 54
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 56
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 58
        echo "                  </td>
                  <td class=\"text-right\">";
        // line 59
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 63
        if (($context["events"] ?? null)) {
            // line 64
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 65
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 67
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 67), ($context["selected"] ?? null))) {
                    // line 68
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 68);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 70
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 70);
                    echo "\"/>
                        ";
                }
                // line 72
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["event"], "code", [], "any", false, false, false, 73);
                echo "</td>
                      <td class=\"text-left\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 74);
                echo "</td>
                      <td class=\"text-right\">";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["event"], "sort_order", [], "any", false, false, false, 75);
                echo "</td>
                      <td class=\"text-right\">
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modal-event";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 77);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-info-circle\"></i></button>
                        ";
                // line 78
                if ( !twig_get_attribute($this->env, $this->source, $context["event"], "enabled", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["event"], "enable", [], "any", false, false, false, 79);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                        ";
                } else {
                    // line 81
                    echo "                          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["event"], "disable", [], "any", false, false, false, 81);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                        ";
                }
                // line 83
                echo "                        <div id=\"modal-event";
                echo twig_get_attribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 83);
                echo "\" class=\"modal text-left\">
                          <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                <h4 class=\"modal-title\">";
                // line 88
                echo ($context["text_info"] ?? null);
                echo "</h4>
                              </div>
                              <div class=\"modal-body\">
                                <p><strong>";
                // line 91
                echo ($context["text_trigger"] ?? null);
                echo "</strong></p>
                                <p>";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["event"], "trigger", [], "any", false, false, false, 92);
                echo "</p>
                                <p><strong>";
                // line 93
                echo ($context["text_action"] ?? null);
                echo "</strong></p>
                                <p>";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["event"], "action", [], "any", false, false, false, 94);
                echo "</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                ";
        } else {
            // line 103
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 104
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 107
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 112
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 113
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 119
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketplace/event.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 119,  327 => 113,  323 => 112,  316 => 107,  310 => 104,  307 => 103,  304 => 102,  290 => 94,  286 => 93,  282 => 92,  278 => 91,  272 => 88,  263 => 83,  255 => 81,  247 => 79,  245 => 78,  241 => 77,  236 => 75,  232 => 74,  228 => 73,  225 => 72,  219 => 70,  213 => 68,  211 => 67,  207 => 65,  202 => 64,  200 => 63,  193 => 59,  190 => 58,  182 => 56,  172 => 54,  170 => 53,  166 => 51,  158 => 49,  148 => 47,  146 => 46,  142 => 44,  134 => 42,  124 => 40,  122 => 39,  112 => 32,  106 => 29,  99 => 26,  91 => 22,  88 => 21,  80 => 17,  78 => 16,  72 => 12,  61 => 10,  57 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/event.twig", "");
    }
}

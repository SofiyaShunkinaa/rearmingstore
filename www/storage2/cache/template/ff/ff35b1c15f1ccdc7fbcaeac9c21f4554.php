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

/* catalog/filter_list.twig */
class __TwigTemplate_c01483a087a52a16039942bf12550551 extends Template
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
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-filter').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button></div>
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-filter\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\">
                    <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                  <td class=\"text-left\">
                    ";
        // line 40
        if ((($context["sort"] ?? null) == "fgd.name")) {
            // line 41
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_group"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 43
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_group"] ?? null);
            echo "</a>
                    ";
        }
        // line 45
        echo "                  </td>
                  <td class=\"text-right\">
                    ";
        // line 47
        if ((($context["sort"] ?? null) == "fg.sort_order")) {
            // line 48
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 50
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 52
        echo "                  </td>
                  <td class=\"text-right\">";
        // line 53
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 57
        if (($context["filters"] ?? null)) {
            // line 58
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 59
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 61
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_group_id", [], "any", false, false, false, 61), ($context["selected"] ?? null))) {
                    // line 62
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_group_id", [], "any", false, false, false, 62);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 64
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_group_id", [], "any", false, false, false, 64);
                    echo "\"/>
                        ";
                }
                // line 66
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 67);
                echo "</td>
                      <td class=\"text-right\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "sort_order", [], "any", false, false, false, 68);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "edit", [], "any", false, false, false, 69);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                ";
        } else {
            // line 73
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"4\">";
            // line 74
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 77
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 82
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 83
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 89
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/filter_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 89,  250 => 83,  246 => 82,  239 => 77,  233 => 74,  230 => 73,  227 => 72,  216 => 69,  212 => 68,  208 => 67,  205 => 66,  199 => 64,  193 => 62,  191 => 61,  187 => 59,  182 => 58,  180 => 57,  173 => 53,  170 => 52,  162 => 50,  152 => 48,  150 => 47,  146 => 45,  138 => 43,  128 => 41,  126 => 40,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/filter_list.twig", "");
    }
}

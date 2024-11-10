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

/* design/translation_list.twig */
class __TwigTemplate_52600c46188aadf4f1a97182566ac231 extends Template
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
        echo "') ? \$('#form-translation').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button></div>
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-translation\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                  <td class=\"text-left\">
                    ";
        // line 39
        if ((($context["sort"] ?? null) == "store")) {
            // line 40
            echo "                      <a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 42
            echo "                      <a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>
                    ";
        }
        // line 44
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 46
        if ((($context["sort"] ?? null) == "language")) {
            // line 47
            echo "                      <a href=\"";
            echo ($context["sort_language"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_language"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo "                      <a href=\"";
            echo ($context["sort_language"] ?? null);
            echo "\">";
            echo ($context["column_language"] ?? null);
            echo "</a>
                    ";
        }
        // line 51
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 53
        if ((($context["sort"] ?? null) == "route")) {
            // line 54
            echo "                      <a href=\"";
            echo ($context["sort_route"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_route"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 56
            echo "                      <a href=\"";
            echo ($context["sort_route"] ?? null);
            echo "\">";
            echo ($context["column_route"] ?? null);
            echo "</a>
                    ";
        }
        // line 58
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 60
        if ((($context["sort"] ?? null) == "key")) {
            // line 61
            echo "                      <a href=\"";
            echo ($context["sort_key"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_key"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 63
            echo "                      <a href=\"";
            echo ($context["sort_key"] ?? null);
            echo "\">";
            echo ($context["column_key"] ?? null);
            echo "</a>
                    ";
        }
        // line 65
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 67
        if ((($context["sort"] ?? null) == "value")) {
            // line 68
            echo "                      <a href=\"";
            echo ($context["sort_value"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_value"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 70
            echo "                      <a href=\"";
            echo ($context["sort_value"] ?? null);
            echo "\">";
            echo ($context["column_value"] ?? null);
            echo "</a>
                    ";
        }
        // line 72
        echo "                  </td>
                  <td class=\"text-right\">";
        // line 73
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 77
        if (($context["translations"] ?? null)) {
            // line 78
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["translations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                // line 79
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 81
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 81), ($context["selected"] ?? null))) {
                    // line 82
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 82);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 84
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 84);
                    echo "\"/>
                        ";
                }
                // line 86
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "store", [], "any", false, false, false, 87);
                echo "</td>
                      <td class=\"text-left\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "language", [], "any", false, false, false, 88);
                echo "</td>
                      <td class=\"text-left\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "route", [], "any", false, false, false, 89);
                echo "</td>
                      <td class=\"text-left\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "key", [], "any", false, false, false, 90);
                echo "</td>
                      <td class=\"text-left\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "value", [], "any", false, false, false, 91);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "edit", [], "any", false, false, false, 92);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                ";
        } else {
            // line 96
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 97
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 100
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 105
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 106
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 112
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/translation_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 112,  333 => 106,  329 => 105,  322 => 100,  316 => 97,  313 => 96,  310 => 95,  299 => 92,  295 => 91,  291 => 90,  287 => 89,  283 => 88,  279 => 87,  276 => 86,  270 => 84,  264 => 82,  262 => 81,  258 => 79,  253 => 78,  251 => 77,  244 => 73,  241 => 72,  233 => 70,  223 => 68,  221 => 67,  217 => 65,  209 => 63,  199 => 61,  197 => 60,  193 => 58,  185 => 56,  175 => 54,  173 => 53,  169 => 51,  161 => 49,  151 => 47,  149 => 46,  145 => 44,  137 => 42,  127 => 40,  125 => 39,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/translation_list.twig", "");
    }
}

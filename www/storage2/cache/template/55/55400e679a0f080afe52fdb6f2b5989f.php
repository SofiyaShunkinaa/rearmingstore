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

/* default/template/account/order_info.twig */
class __TwigTemplate_8768d836287f7b3158722326aeef2add extends Template
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
        echo "
<div class=\"head_bg\"></div>
<section class=\"catalog\">
  <div class=\"container\">
\t<div class=\"row\">
\t  <div class=\"col-md-4\">
\t\t";
        // line 7
        echo ($context["column_left"] ?? null);
        echo "
\t  </div>
\t  <div class=\"col-md-8\">
\t\t<nav class=\"breadcrumb\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12)) {
                // line 13
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
                echo "\"  class=\"breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</a>
\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
                echo "</span>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</nav>
\t\t<div class=\"pagetitle\">
\t\t  <h1 class=\"titlepage\">";
        // line 20
        echo ($context["text_my_account"] ?? null);
        echo "</h1>
\t\t</div>
\t\t";
        // line 22
        if (($context["success"] ?? null)) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t\t";
        }
        // line 25
        echo "\t\t";
        echo ($context["content_top"] ?? null);
        echo "

\t\t<div class=\"row\">
\t\t  <div class=\"col-md-12\">
\t\t    ";
        // line 29
        if (($context["success"] ?? null)) {
            // line 30
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 34
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 35
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 39
        echo "\t\t\t<table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 42
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">
              ";
        // line 48
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "
                <br/>
              ";
        }
        // line 51
        echo "              <b>";
        echo ($context["text_orders_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "
              <br/>
              <b>";
        // line 53
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "
            </td>
            <td class=\"text-left\" style=\"width: 50%;\">
              ";
        // line 56
        if (($context["payment_method"] ?? null)) {
            // line 57
            echo "                <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "
                <br/>
              ";
        }
        // line 60
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            // line 61
            echo "                <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo "
              ";
        }
        // line 63
        echo "            </td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 70
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 71
        if (($context["shipping_address"] ?? null)) {
            // line 72
            echo "              <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 74
        echo "          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 78
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 79
        if (($context["shipping_address"] ?? null)) {
            // line 80
            echo "              <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 82
        echo "          </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 89
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 90
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 91
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 92
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 93
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 94
        if (($context["products"] ?? null)) {
            // line 95
            echo "                <td style=\"width: 20px;\"></td>
              ";
        }
        // line 97
        echo "            </tr>
          </thead>
          <tbody>
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 101
            echo "              <tr>
                <td class=\"text-left\">";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
            echo "
                  ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 104
                echo "                    <br/>
                    &nbsp;<small> - ";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 105);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 105);
                echo "</small>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                </td>
                <td class=\"text-left\">";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 108);
            echo "</td>
                <td class=\"text-right\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 109);
            echo "</td>
                <td class=\"text-right\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 110);
            echo "</td>
                <td class=\"text-right\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 111);
            echo "</td>
                <td class=\"text-right\" style=\"white-space: nowrap;\">
                  ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 113)) {
                // line 114
                echo "                    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 114);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a>
                  ";
            }
            // line 116
            echo "                  <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 116);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 121
            echo "              <tr>
                <td class=\"text-left\">";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 122);
            echo "</td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 125);
            echo "</td>
                <td class=\"text-right\">";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 126);
            echo "</td>
                ";
            // line 127
            if (($context["products"] ?? null)) {
                // line 128
                echo "                  <td></td>
                ";
            }
            // line 130
            echo "              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "          </tbody>
          <tfoot>
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 135
            echo "              <tr>
                <td colspan=\"3\"></td>
                <td class=\"text-right\"><b>";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 137);
            echo "</b></td>
                <td class=\"text-right\">";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 138);
            echo "</td>
                ";
            // line 139
            if (($context["products"] ?? null)) {
                // line 140
                echo "                  <td></td>
                ";
            }
            // line 142
            echo "              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "          </tfoot>
        </table>
      </div>
      ";
        // line 147
        if (($context["comment"] ?? null)) {
            // line 148
            echo "        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
            // line 151
            echo ($context["text_comment"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
            // line 156
            echo ($context["comment"] ?? null);
            echo "</td>
            </tr>
          </tbody>
        </table>
      ";
        }
        // line 161
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 162
            echo "        <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
            // line 166
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 167
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 168
            echo ($context["column_comment"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
            // line 172
            if (($context["histories"] ?? null)) {
                // line 173
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 174
                    echo "                <tr>
                  <td class=\"text-left\">";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 175);
                    echo "</td>
                  <td class=\"text-left\">";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 176);
                    echo "</td>
                  <td class=\"text-left\">";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 177);
                    echo "</td>
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "            ";
            } else {
                // line 181
                echo "              <tr>
                <td colspan=\"3\" class=\"text-center\">";
                // line 182
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              </tr>
            ";
            }
            // line 185
            echo "          </tbody>
        </table>
      ";
        }
        // line 188
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 189
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
\t\t  </div>
\t\t</div>
\t\t";
        // line 193
        echo ($context["content_bottom"] ?? null);
        echo "
\t  </div>
\t</div>

  </div>
</section>
";
        // line 199
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 199,  516 => 193,  507 => 189,  504 => 188,  499 => 185,  493 => 182,  490 => 181,  487 => 180,  478 => 177,  474 => 176,  470 => 175,  467 => 174,  462 => 173,  460 => 172,  453 => 168,  449 => 167,  445 => 166,  437 => 162,  434 => 161,  426 => 156,  418 => 151,  413 => 148,  411 => 147,  406 => 144,  399 => 142,  395 => 140,  393 => 139,  389 => 138,  385 => 137,  381 => 135,  377 => 134,  373 => 132,  366 => 130,  362 => 128,  360 => 127,  356 => 126,  352 => 125,  346 => 122,  343 => 121,  338 => 120,  325 => 116,  317 => 114,  315 => 113,  310 => 111,  306 => 110,  302 => 109,  298 => 108,  295 => 107,  285 => 105,  282 => 104,  278 => 103,  274 => 102,  271 => 101,  267 => 100,  262 => 97,  258 => 95,  256 => 94,  252 => 93,  248 => 92,  244 => 91,  240 => 90,  236 => 89,  227 => 82,  221 => 80,  219 => 79,  215 => 78,  209 => 74,  203 => 72,  201 => 71,  197 => 70,  188 => 63,  180 => 61,  177 => 60,  168 => 57,  166 => 56,  158 => 53,  150 => 51,  140 => 48,  131 => 42,  126 => 39,  118 => 35,  115 => 34,  107 => 30,  105 => 29,  97 => 25,  91 => 23,  89 => 22,  84 => 20,  80 => 18,  74 => 17,  68 => 15,  60 => 13,  57 => 12,  53 => 11,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/order_info.twig", "");
    }
}

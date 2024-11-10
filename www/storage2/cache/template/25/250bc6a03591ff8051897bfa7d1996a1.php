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

/* sale/order_invoice.twig */
class __TwigTemplate_030c58c1ba4c920570687d83e1f5dc39 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\"/>
  <link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"all\"/>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
  <link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"all\"/>
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "    <div style=\"page-break-after: always;\">
      <h1>
        ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 18)) {
                // line 19
                echo "          ";
                echo ($context["text_invoice"] ?? null);
                echo " #";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 19);
                echo "
        ";
            } else {
                // line 21
                echo "          ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "text_order", [], "any", false, false, false, 21);
                echo "
        ";
            }
            // line 23
            echo "      </h1>
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"2\">";
            // line 27
            echo ($context["text_order_detail"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style=\"width: 50%;\">
              <address>
                <strong>";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 34);
            echo "</strong>
                <br/>
                ";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 36);
            echo "
              </address>
              <b>";
            // line 38
            echo ($context["text_telephone"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 38);
            echo "
              <br/>
              ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 40)) {
                // line 41
                echo "                <b>";
                echo ($context["text_fax"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 41);
                echo "
                <br/>
              ";
            }
            // line 44
            echo "              <b>";
            echo ($context["text_email"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 44);
            echo "
              <br/>
              <b>";
            // line 46
            echo ($context["text_website"] ?? null);
            echo "</b> <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 46);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 46);
            echo "</a>
            </td>
            <td style=\"width: 50%;\"><b>";
            // line 48
            echo ($context["text_date_added"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 48);
            echo "
              <br/>
              ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 50)) {
                // line 51
                echo "                <b>";
                echo ($context["text_invoice_no"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 51);
                echo "
                <br/>
              ";
            }
            // line 54
            echo "              <b>";
            echo ($context["text_orders_id"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 54);
            echo "
              <br/>
              <b>";
            // line 56
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 56);
            echo "
              <br/>
              ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 58)) {
                // line 59
                echo "                <b>";
                echo ($context["text_shipping_method"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 59);
                echo "
                <br/>
              ";
            }
            // line 62
            echo "            </td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td style=\"width: 50%;\"><b>";
            // line 69
            echo ($context["text_payment_address"] ?? null);
            echo "</b></td>
            <td style=\"width: 50%;\"><b>";
            // line 70
            echo ($context["text_shipping_address"] ?? null);
            echo "</b></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <address>";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 76);
            echo "</address>
            </td>
            <td>
              <address>";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 79);
            echo "</address>
            </td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td><b>";
            // line 87
            echo ($context["column_product"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 88
            echo ($context["column_model"] ?? null);
            echo "</b></td>
            <td class=\"text-right\"><b>";
            // line 89
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
            <td class=\"text-right\"><b>";
            // line 90
            echo ($context["column_price"] ?? null);
            echo "</b></td>
            <td class=\"text-right\"><b>";
            // line 91
            echo ($context["column_total"] ?? null);
            echo "</b></td>
          </tr>
        </thead>
        <tbody>
          ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                echo "            <tr>
              <td>";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 97);
                echo "
                ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 99
                    echo "                  <br/>
                  &nbsp;<small> - ";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 100);
                    echo "</small>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "                  <br/>
                  <small> - ";
                    // line 104
                    echo ($context["text_subscription"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 104);
                    echo "</small>
                ";
                }
                // line 106
                echo "              </td>
              <td>";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 107);
                echo "</td>
              <td class=\"text-right\">";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 108);
                echo "</td>
              <td class=\"text-right\">";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109);
                echo "</td>
              <td class=\"text-right\">";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 110);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "voucher", [], "any", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 114
                echo "            <tr>
              <td>";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 115);
                echo "</td>
              <td></td>
              <td class=\"text-right\">1</td>
              <td class=\"text-right\">";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 118);
                echo "</td>
              <td class=\"text-right\">";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 119);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 122));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 123
                echo "            <tr>
              <td class=\"text-right\" colspan=\"4\"><b>";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 124);
                echo "</b></td>
              <td class=\"text-right\">";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 125);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "        </tbody>
      </table>
      ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 130)) {
                // line 131
                echo "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td><b>";
                // line 134
                echo ($context["text_comment"] ?? null);
                echo "</b></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 139);
                echo "</td>
            </tr>
          </tbody>
        </table>
      ";
            }
            // line 144
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "sale/order_invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 146,  395 => 144,  387 => 139,  379 => 134,  374 => 131,  372 => 130,  368 => 128,  359 => 125,  355 => 124,  352 => 123,  347 => 122,  338 => 119,  334 => 118,  328 => 115,  325 => 114,  320 => 113,  311 => 110,  307 => 109,  303 => 108,  299 => 107,  296 => 106,  289 => 104,  286 => 103,  283 => 102,  273 => 100,  270 => 99,  266 => 98,  262 => 97,  259 => 96,  255 => 95,  248 => 91,  244 => 90,  240 => 89,  236 => 88,  232 => 87,  221 => 79,  215 => 76,  206 => 70,  202 => 69,  193 => 62,  184 => 59,  182 => 58,  175 => 56,  167 => 54,  158 => 51,  156 => 50,  149 => 48,  140 => 46,  132 => 44,  123 => 41,  121 => 40,  114 => 38,  109 => 36,  104 => 34,  94 => 27,  88 => 23,  82 => 21,  74 => 19,  72 => 18,  68 => 16,  64 => 15,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_invoice.twig", "");
    }
}

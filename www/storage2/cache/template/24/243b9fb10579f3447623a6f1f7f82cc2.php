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

/* default/template/mail/order_add.twig */
class __TwigTemplate_6676e89ab37536b03ba6488bbd863708 extends Template
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
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\"><a href=\"";
        // line 8
        echo ($context["store_url"] ?? null);
        echo "\" title=\"";
        echo ($context["store_name"] ?? null);
        echo "\"><img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"";
        echo ($context["store_name"] ?? null);
        echo "\" style=\"margin-bottom: 20px; border: none;\"/></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 9
        echo ($context["text_greeting"] ?? null);
        echo "</p>
  ";
        // line 10
        if (($context["customer_id"] ?? null)) {
            // line 11
            echo "    <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_link"] ?? null);
            echo "</p>
    <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 12
            echo ($context["link"] ?? null);
            echo "\">";
            echo ($context["link"] ?? null);
            echo "</a></p>
  ";
        }
        // line 14
        echo "  ";
        if (($context["download"] ?? null)) {
            // line 15
            echo "    <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_download"] ?? null);
            echo "</p>
    <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 16
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["download"] ?? null);
            echo "</a></p>
  ";
        }
        // line 18
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">";
        // line 21
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 26
        echo ($context["text_orders_id"] ?? null);
        echo "</b> ";
        echo ($context["order_id"] ?? null);
        echo "
          <br/>
          <b>";
        // line 28
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "
          <br/>
          <b>";
        // line 30
        echo ($context["text_payment_method"] ?? null);
        echo "</b> ";
        echo ($context["payment_method"] ?? null);
        echo "
          <br/>
          ";
        // line 32
        if (($context["shipping_method"] ?? null)) {
            // line 33
            echo "            <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo "
          ";
        }
        // line 35
        echo "        </td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 36
        echo ($context["text_email"] ?? null);
        echo "</b> ";
        echo ($context["email"] ?? null);
        echo "
          <br/>
          <b>";
        // line 38
        echo ($context["text_telephone"] ?? null);
        echo "</b> ";
        echo ($context["telephone"] ?? null);
        echo "
          <br/>
          <b>";
        // line 40
        echo ($context["text_ip"] ?? null);
        echo "</b> ";
        echo ($context["ip"] ?? null);
        echo "
          <br/>
          <b>";
        // line 42
        echo ($context["text_order_status"] ?? null);
        echo "</b> ";
        echo ($context["order_status"] ?? null);
        echo "
          <br/>
        </td>
      </tr>
    </tbody>
  </table>
  ";
        // line 48
        if (($context["comment"] ?? null)) {
            // line 49
            echo "    <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
      <thead>
        <tr>
          <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            // line 52
            echo ($context["text_instruction"] ?? null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 57
            echo ($context["comment"] ?? null);
            echo "</td>
        </tr>
      </tbody>
    </table>
  ";
        }
        // line 62
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 65
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
        ";
        // line 66
        if (($context["shipping_address"] ?? null)) {
            // line 67
            echo "          <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
        ";
        }
        // line 69
        echo "      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 73
        echo ($context["payment_address"] ?? null);
        echo "</td>
        ";
        // line 74
        if (($context["shipping_address"] ?? null)) {
            // line 75
            echo "          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
        ";
        }
        // line 77
        echo "      </tr>
    </tbody>
  </table>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 83
        echo ($context["text_product"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 84
        echo ($context["text_model"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 85
        echo ($context["text_quantity"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 86
        echo ($context["text_price"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 87
        echo ($context["text_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 92
            echo "        <tr>
          <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
            echo "
            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 95
                echo "              <br/>
            &nbsp;<small> - ";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 96);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 96);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "          </td>
          <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 99);
            echo "</td>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 100);
            echo "</td>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 101);
            echo "</td>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 102);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 106
            echo "        <tr>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 107);
            echo "</td>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"></td>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">1</td>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 110);
            echo "</td>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 111);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    </tbody>
    <tfoot>\t
      ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 117
            echo "        <tr>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\" colspan=\"4\"><b>";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 118);
            echo ":</b></td>
          <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 119);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "    </tfoot>
  </table>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 124
        echo ($context["text_footer"] ?? null);
        echo "</p>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 124,  363 => 122,  354 => 119,  350 => 118,  347 => 117,  343 => 116,  339 => 114,  330 => 111,  326 => 110,  320 => 107,  317 => 106,  312 => 105,  303 => 102,  299 => 101,  295 => 100,  291 => 99,  288 => 98,  278 => 96,  275 => 95,  271 => 94,  267 => 93,  264 => 92,  260 => 91,  253 => 87,  249 => 86,  245 => 85,  241 => 84,  237 => 83,  229 => 77,  223 => 75,  221 => 74,  217 => 73,  211 => 69,  205 => 67,  203 => 66,  199 => 65,  194 => 62,  186 => 57,  178 => 52,  173 => 49,  171 => 48,  160 => 42,  153 => 40,  146 => 38,  139 => 36,  136 => 35,  128 => 33,  126 => 32,  119 => 30,  112 => 28,  105 => 26,  97 => 21,  92 => 18,  85 => 16,  80 => 15,  77 => 14,  70 => 12,  65 => 11,  63 => 10,  59 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/order_add.twig", "");
    }
}

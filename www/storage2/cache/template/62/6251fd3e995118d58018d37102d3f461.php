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

/* default/template/checkout/checkout.twig */
class __TwigTemplate_ccf04fb6597e1ff65af123c8c87293ff extends Template
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
        $context["custom_link"] = "catalog/view/javascript/bootstrap/css/bootstrap.min.css";
        // line 2
        echo ($context["header"] ?? null);
        echo "
<div class=\"head_bg\"></div>
<section class=\"cartPage\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"pagetitle\">
              <h1 class=\"titlepage\">Cart</h1>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"sp\">Your order</div>
            <div class=\"chekedItems\">
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "              <div class=\"cItem\">
                ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17)) {
                // line 18
                echo "\t\t\t\t  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "\" class=\"img-thumbnail\"/></a>
\t\t\t\t";
            }
            // line 20
            echo "                <div class=\"ccssw\">
                  <div class=\"cItemT\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
            echo "</div>
                  <div class=\"p_c_t_count\" data-cur=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 22);
            echo "\" data-min=\"1\" data-max=\"999\">
                    <span class=\"minus\"><img src=\"/img/Frame9.svg\"></span>
                    <span class=\"current\" data-id=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 24);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 24);
            echo "</span>
                    <span class=\"plus\"><img src=\"/img/Frame63.svg\"></span>
                  </div>
                  <div class=\"cItemP\" id=\"cItemP";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 27);
            echo "</div>
                </div>
                <div class=\"cItemRm\" onclick=\"cart.remove('";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 29);
            echo "');\"><img src=\"/img/Frame64.svg\" alt=\"\"></div>
              </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
            
            ";
        // line 34
        if (array_key_exists("modules", $context)) {
            // line 35
            echo "                <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
                <p>";
            // line 36
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                <div class=\"panel-group\" id=\"accordion\">
                  ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 39
                echo "                    ";
                echo $context["module"];
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </div>
              ";
        }
        // line 43
        echo "    
\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 45
            echo "\t\t\t<div class=\"totalsCart\">";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 45);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 45);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            
          </div>
          <div class=\"col-md-6\">
            <div class=\"spForm\">
              
            </div>

          </div>
        </div>
      </div>
    </section>

<script type=\"text/javascript\">
\$(document).on('change', 'input[name=\\'account\\']', function () {
    if (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
        if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 63
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
        } else {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 65
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
        }
    } else {
        if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 69
        echo ($context["text_checkout_account"] ?? null);
        echo "');
        } else {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 71
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
        }
    }
});
\$('.p_c_t_count .minus,.p_c_t_count .plus').click(function() {
        var key = \$(this).parent().find('.current').attr('data-id');
        var quantity = Number(\$(this).parent().attr('data-cur'));
\t\tvar quantity_or = quantity;
\t\tif(\$(this).hasClass('minus')){
\t\t\tquantity = quantity - 1;
\t\t}else{
\t\t\tquantity = quantity + 1;
\t\t}
\t\tif(quantity < 1){quantity = 1;}
        if(quantity_or != quantity)
\t\t\$.ajax({
            url: 'index.php?route=checkout/cart/ajaxUpdate',
            type: 'post',
            data: { key: key, quantity: quantity },
            dataType: 'json',
            success: function(json) {
                if (json['success']) {
                    \$('#cItemP' + key).text(json['product_total']);
                    \$('.totalsCart').text(json['total']);
                }
                if (json['error']) {
\t\t\t\t\tconsole.log(json['error']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).ready(function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest',
            dataType: 'html',
            success: function (html) {
                \$('.spForm').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
\t\$(document).on('submit', '.orderForm', function(e) { 
\t\te.preventDefault(); // Предотвращаем стандартное действие отправки формы

\t\t// Получаем данные из формы
\t\tvar formData = \$(this).serialize();

\t\t// Отправляем AJAX-запрос
\t\t\$.ajax({
\t\t\ttype: 'POST',
\t\t\turl: 'index.php?route=checkout/guest/save',
\t\t\tdata: formData,
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) { 
\t\t\ttry {
                response = JSON.parse(response);
                if (response.error) { 
                    \$.each(response.error, function(key, value) {
                        var inputElement = \$('body').find('.orderForm [name=\"' + key + '\"]').addClass('is-invalid');
                        \$('.error_' + key).text(value);
                    });
                } else {
                    if (response.payment) { 
                        \$('body').find('.orderForm').css('display','none');
                        \$('body').find('.spForm').prepend(response.payment);
                    }
                }
            } catch (e) {
                console.log(\"Server response is not valid JSON:\", response);
                console.error(e);
            }
\t\t\t},
\t\t\terror: function (jqXHR, exception) {
\t\t\t\tif (jqXHR.status === 0) {
\t\t\t\t\talert('Not connect. Verify Network.');
\t\t\t\t} else if (jqXHR.status == 404) {
\t\t\t\t\talert('Requested page not found (404).');
\t\t\t\t} else if (jqXHR.status == 500) {
\t\t\t\t\talert('Internal Server Error (500).');
\t\t\t\t} else if (exception === 'parsererror') {
\t\t\t\t\talert('Requested JSON parse failed.');
\t\t\t\t} else if (exception === 'timeout') {
\t\t\t\t\talert('Time out error.');
\t\t\t\t} else if (exception === 'abort') {
\t\t\t\t\talert('Ajax request aborted.');
\t\t\t\t} else {
\t\t\t\t\talert('Uncaught Error. ' + jqXHR.responseText);
\t\t\t\t}
\t\t\t}
\t\t});
\t\treturn false;
\t});
\t

</script>
";
        // line 172
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 172,  198 => 71,  193 => 69,  186 => 65,  181 => 63,  163 => 47,  152 => 45,  148 => 44,  145 => 43,  141 => 41,  132 => 39,  128 => 38,  123 => 36,  118 => 35,  116 => 34,  112 => 32,  103 => 29,  96 => 27,  88 => 24,  83 => 22,  79 => 21,  76 => 20,  64 => 18,  62 => 17,  59 => 16,  55 => 15,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/checkout.twig", "");
    }
}

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

/* default/template/checkout/guest.twig */
class __TwigTemplate_17c62fea9952c3ed262e55fd2c5fd970 extends Template
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
        echo "<div class=\"sp\"><strong>Your details</strong></div>
  <form action=\"\" class=\"orderForm\">
\t<div class=\"formCh\">
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"emailBy\" class=\"form-check-label\">Your email*</label>
\t\t  <input type=\"text\" id=\"emailBy\" name=\"email\" value=\"";
        // line 7
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"example@mail.com\" 
\t\t\tclass=\"form-control\" />
\t\t  <span class=\"error_email invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  ";
        // line 21
        echo "\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"discord\" class=\"form-check-label\">Discord*</label>
\t\t  <input type=\"text\" id=\"discord\" name=\"discord\" value=\"";
        // line 24
        echo ($context["discord"] ?? null);
        echo "\" placeholder=\"discordname#1234\"
\t\t\tclass=\"form-control\" />
\t\t  <span class=\"error_discord invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"nickname\" class=\"form-check-label\">Nickname</label>
\t\t  <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 32
        echo ($context["nickname"] ?? null);
        echo "\" placeholder=\"Name\" class=\"form-control\" />
\t\t  <span class=\"error_nickname invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"server\" class=\"form-check-label\">Server</label>
\t\t  <input type=\"text\" id=\"server\" name=\"server\" value=\"";
        // line 39
        echo ($context["server"] ?? null);
        echo "\" placeholder=\"2763876374534\"
\t\t\tclass=\"form-control\" />
\t\t  <span class=\"error_server invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"battletag\" class=\"form-check-label\">Battletag</label>
\t\t  <input type=\"text\" id=\"battletag\" name=\"battletag\" value=\"";
        // line 47
        echo ($context["battletag"] ?? null);
        echo "\" placeholder=\"#15153\" class=\"form-control\" />
\t\t  <span class=\"error_battletag invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <div class=\"subtitlePayment\">Payment method</div>
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 57
        echo ($context["payment_method"] ?? null);
        echo "
\t<div class=\"form-group\">
        <label for=\"input-coupon\">Coupon:</label>
        <input type=\"text\" name=\"coupon\" value=\"\" placeholder=\"Enter coupon\" id=\"input-coupon\" class=\"form-control\" />
        <button type=\"button\" id=\"button-coupon\" class=\"btn btn-primary\">Apply coupon</button>
    </div>

\t<div class=\"formCh\">
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <button type=\"submit\" class=\"btn btn-primary\">Place order</button>
\t\t</div>
\t  </div>
\t</div>

  </form>
  
  <script type=\"tetx/javascript\">
      \$('#button-coupon').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/coupon',
            type: 'post',
            data: 'coupon=' + \$('#input-coupon').val(),
            dataType: 'json',
            success: function(json) {
                // Обработка успешного или неудачного применения купона
                if (json.success) {
                    alert(json.success);
                    // Обновление информации в корзине
                } else {
                    alert(json.error);
                }
            }
        });
    });

  </script>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 57,  90 => 47,  79 => 39,  69 => 32,  58 => 24,  53 => 21,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/guest.twig", "");
    }
}
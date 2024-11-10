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

/* default/template/extension/payment/skrill.twig */
class __TwigTemplate_3836c3ef850c354f764f6bc225bc4428 extends Template
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
        echo "<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"pay_to_email\" value=\"";
        // line 2
        echo ($context["pay_to_email"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"recipient_description\" value=\"";
        // line 3
        echo ($context["description"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"transaction_id\" value=\"";
        // line 4
        echo ($context["transaction_id"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"return_url\" value=\"";
        // line 5
        echo ($context["return_url"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"cancel_url\" value=\"";
        // line 6
        echo ($context["cancel_url"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"status_url\" value=\"";
        // line 7
        echo ($context["status_url"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"language\" value=\"";
        // line 8
        echo ($context["language"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"logo_url\" value=\"";
        // line 9
        echo ($context["logo"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"pay_from_email\" value=\"";
        // line 10
        echo ($context["pay_from_email"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"firstname\" value=\"";
        // line 11
        echo ($context["firstname"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"lastname\" value=\"";
        // line 12
        echo ($context["lastname"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"address\" value=\"";
        // line 13
        echo ($context["address"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"address2\" value=\"";
        // line 14
        echo ($context["address2"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"phone_number\" value=\"";
        // line 15
        echo ($context["phone_number"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"postal_code\" value=\"";
        // line 16
        echo ($context["postal_code"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"city\" value=\"";
        // line 17
        echo ($context["city"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"state\" value=\"";
        // line 18
        echo ($context["state"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"country\" value=\"";
        // line 19
        echo ($context["country"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"amount\" value=\"";
        // line 20
        echo ($context["amount"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"currency\" value=\"";
        // line 21
        echo ($context["currency"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"detail1_text\" value=\"";
        // line 22
        echo ($context["detail1_text"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"merchant_fields\" value=\"order_id\"/>
  <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 24
        echo ($context["order_id"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"platform\" value=\"";
        // line 25
        echo ($context["platform"] ?? null);
        echo "\"/>
  <div class=\"buttons\">
    <div class=\"pull-right\">
      <input type=\"submit\" value=\"";
        // line 28
        echo ($context["button_confirm"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
    </div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/skrill.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 28,  131 => 25,  127 => 24,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/skrill.twig", "");
    }
}

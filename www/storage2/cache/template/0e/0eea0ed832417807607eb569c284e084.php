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

/* default/template/checkout/login.twig */
class __TwigTemplate_8b1360ceb8a213289b8f71a5597e80ef extends Template
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
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>";
        // line 3
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 4
        echo ($context["text_checkout"] ?? null);
        echo "</p>
    <div class=\"radio\">
      <label>
        ";
        // line 7
        if ((($context["account"] ?? null) == "register")) {
            // line 8
            echo "          <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\"/>
        ";
        } else {
            // line 10
            echo "          <input type=\"radio\" name=\"account\" value=\"register\"/>
        ";
        }
        // line 12
        echo "        ";
        echo ($context["text_register"] ?? null);
        echo "
      </label>
    </div>
    ";
        // line 15
        if (($context["checkout_guest"] ?? null)) {
            // line 16
            echo "    <div class=\"radio\">
      <label>
        ";
            // line 18
            if ((($context["account"] ?? null) == "guest")) {
                // line 19
                echo "          <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\"/>
        ";
            } else {
                // line 21
                echo "          <input type=\"radio\" name=\"account\" value=\"guest\"/>
        ";
            }
            // line 23
            echo "        ";
            echo ($context["text_guest"] ?? null);
            echo "
      </label>
    </div>
    ";
        }
        // line 27
        echo "    <p>";
        echo ($context["text_register_account"] ?? null);
        echo "</p>
    <input type=\"button\" value=\"";
        // line 28
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-account\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
  </div>
  <div class=\"col-sm-6\">
    <h2>";
        // line 31
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 32
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 34
        echo ($context["entry_email"] ?? null);
        echo "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 35
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 38
        echo ($context["entry_password"] ?? null);
        echo "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 39
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
      <a href=\"";
        // line 40
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
    <input type=\"button\" value=\"";
        // line 41
        echo ($context["button_login"] ?? null);
        echo "\" id=\"button-login\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 41,  132 => 40,  128 => 39,  124 => 38,  118 => 35,  114 => 34,  109 => 32,  105 => 31,  97 => 28,  92 => 27,  84 => 23,  80 => 21,  76 => 19,  74 => 18,  70 => 16,  68 => 15,  61 => 12,  57 => 10,  53 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/login.twig", "");
    }
}

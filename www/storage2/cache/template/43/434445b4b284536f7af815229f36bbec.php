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

/* default/template/extension/module/account.twig */
class __TwigTemplate_4e6635fd1aaa141acd065dfed0937481 extends Template
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
        echo "<div class=\"usernav\">
";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "<ul>
    <li><a href=\"";
            // line 4
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
    <li><a href=\"";
            // line 5
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
    <li><a href=\"";
            // line 6
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a></li>
</ul>
";
        }
        // line 9
        if (($context["logged"] ?? null)) {
            // line 10
            echo "  <ul>
\t<li class=\"";
            // line 11
            echo ($context["account_cls"] ?? null);
            echo "\"><a href=\"";
            echo ($context["account"] ?? null);
            echo "\"><i class=\"iconUser useri\"></i>User profile</a></li>
\t<li class=\"";
            // line 12
            echo ($context["order_cls"] ?? null);
            echo "\"><a href=\"";
            echo ($context["order"] ?? null);
            echo "\"><i class=\"iconUser carti\"></i>My orders</a></li>
  </ul>
  <ul>
\t<li><a href=\"";
            // line 15
            echo ($context["logout"] ?? null);
            echo "\" style=\"font-weight: 700; color:#000\"><i class=\"iconUser logini\" style=\"background-color: #000;\"></i>Sing out</a></li>
\t<li class=\"";
            // line 16
            echo ($context["password_cls"] ?? null);
            echo "\"><a href=\"";
            echo ($context["password"] ?? null);
            echo "\"><i class=\"iconUser unloci\"></i>Change password</a></li>
  </ul>
";
        }
        // line 19
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  88 => 16,  84 => 15,  76 => 12,  70 => 11,  67 => 10,  65 => 9,  57 => 6,  51 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/account.twig", "");
    }
}

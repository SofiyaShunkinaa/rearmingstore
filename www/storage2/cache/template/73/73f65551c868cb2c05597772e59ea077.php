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

/* extension/dashboard/customer_info.twig */
class __TwigTemplate_a98bc83e3b52101d8baa9237c08e288b extends Template
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
        echo "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "
    <span class=\"pull-right\">
      ";
        // line 4
        if ((($context["percentage"] ?? null) > 0)) {
            // line 5
            echo "        <i class=\"fa fa-caret-up\"></i>
      ";
        } elseif ((        // line 6
($context["percentage"] ?? null) < 0)) {
            // line 7
            echo "        <i class=\"fa fa-caret-down\"></i>
      ";
        }
        // line 9
        echo "      ";
        echo ($context["percentage"] ?? null);
        echo "%
    </span>
  </div>
  <div class=\"tile-body\"><i class=\"fa fa-user\"></i>
    <h2 class=\"pull-right\">";
        // line 13
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 15
        echo ($context["customer"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/customer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  64 => 13,  56 => 9,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/customer_info.twig", "");
    }
}

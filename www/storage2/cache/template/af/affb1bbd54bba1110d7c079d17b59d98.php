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

/* default/template/mail/order_edit.twig */
class __TwigTemplate_ae527ab1e5b187cb23c69ec80b563771 extends Template
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
        echo ($context["text_orders_id"] ?? null);
        echo " ";
        echo ($context["order_id"] ?? null);
        echo "
";
        // line 2
        echo ($context["text_date_added"] ?? null);
        echo " ";
        echo ($context["date_added"] ?? null);
        echo "

";
        // line 4
        echo ($context["text_order_status"] ?? null);
        echo "

";
        // line 6
        echo ($context["order_status"] ?? null);
        echo "

";
        // line 8
        if (($context["link"] ?? null)) {
            // line 9
            echo "  ";
            echo ($context["text_link"] ?? null);
            echo "

  ";
            // line 11
            echo ($context["link"] ?? null);
            echo "
";
        }
        // line 13
        if (($context["comment"] ?? null)) {
            // line 14
            echo "
  ";
            // line 15
            echo ($context["text_comment"] ?? null);
            echo "

  ";
            // line 17
            echo ($context["comment"] ?? null);
            echo "
  ";
            // line 18
            echo ($context["text_footer"] ?? null);
            echo "
";
        } else {
            // line 19
            echo " 
  ";
            // line 20
            echo ($context["text_footer"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  92 => 19,  87 => 18,  83 => 17,  78 => 15,  75 => 14,  73 => 13,  68 => 11,  62 => 9,  60 => 8,  55 => 6,  50 => 4,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/order_edit.twig", "");
    }
}

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

/* default/template/mail/register.twig */
class __TwigTemplate_63ce81f3b4e529f62b7ca6ba27c76419 extends Template
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
        echo ($context["text_welcome"] ?? null);
        echo "
<br/>
<br/>
";
        // line 4
        if ( !($context["approval"] ?? null)) {
            // line 5
            echo "  ";
            echo ($context["text_login"] ?? null);
            echo "
  <br/>
  <br/>
  ";
            // line 8
            echo ($context["login"] ?? null);
            echo "
  <br/>
  <br/>
  ";
            // line 11
            echo ($context["text_service"] ?? null);
            echo "
  <br/>
  <br/>
  ";
            // line 14
            echo ($context["text_thanks"] ?? null);
            echo "
  <br/>
  ";
            // line 16
            echo ($context["store"] ?? null);
            echo "
  <br/>
  ";
            // line 18
            echo ($context["store_url"] ?? null);
            echo "
";
        } else {
            // line 20
            echo "  ";
            echo ($context["text_approval"] ?? null);
            echo "
  <br/>
  <br/>
  ";
            // line 23
            echo ($context["login"] ?? null);
            echo "
  <br/>
  <br/>
  ";
            // line 26
            echo ($context["text_thanks"] ?? null);
            echo "
  <br/>
  ";
            // line 28
            echo ($context["store"] ?? null);
            echo "
  <br/>
  ";
            // line 30
            echo ($context["store_url"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  97 => 28,  92 => 26,  86 => 23,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  58 => 11,  52 => 8,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/register.twig", "");
    }
}

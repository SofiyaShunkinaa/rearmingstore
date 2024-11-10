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

/* default/template/mail/forgotten.twig */
class __TwigTemplate_b7ab3dc70650eec97e184c507442dd25 extends Template
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
        echo ($context["text_greeting"] ?? null);
        echo "
<br/>
<br/>
";
        // line 4
        echo ($context["text_change"] ?? null);
        echo "
<br/>
<br/>
";
        // line 7
        echo ($context["reset"] ?? null);
        echo "
<br/>
<br/>
";
        // line 10
        echo ($context["text_ip"] ?? null);
        echo "
<br/>
<br/>
";
        // line 13
        echo ($context["ip"] ?? null);
        echo "
<br/>
<br/>
";
        // line 16
        echo ($context["store"] ?? null);
        echo "
<br/>
";
        // line 18
        echo ($context["store_url"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/mail/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  67 => 16,  61 => 13,  55 => 10,  49 => 7,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/forgotten.twig", "");
    }
}

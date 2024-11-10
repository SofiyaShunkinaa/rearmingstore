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

/* default/template/extension/module/html4.twig */
class __TwigTemplate_1baffe77e842a740624071c075b72b49 extends Template
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
        echo "<section class=\"mbl-2\">
  <div class=\"container\">
\t<div class=\"row\">
\t  <div class=\"col-md-12\">
\t\t<div class=\"mbs title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t<div class=\"mbs cols-5\">
\t\t  ";
        // line 7
        echo ($context["html"] ?? null);
        echo "
\t\t</div>
\t  </div>
\t</div>
  </div>
</section>
    ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/html4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/html4.twig", "");
    }
}

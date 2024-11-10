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

/* default/template/extension/module/pavmegamenu.twig */
class __TwigTemplate_ee732c7a128ebfef6b137ebc38e84c0b extends Template
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
        echo "<div class=\"sidebarnavHmt\">
  Choose category
  <i></i>
</div>
<div class=\"sidebarnav\">
  <div class=\"stitle\" data-bs-toggle=\"modal\" data-bs-target=\"#request\" style=\"cursor:pointer\">Request a service</div>
  ";
        // line 7
        echo ($context["treemenu"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/pavmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/pavmegamenu.twig", "");
    }
}

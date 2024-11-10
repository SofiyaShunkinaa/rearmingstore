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

/* default/template/extension/module/html2.twig */
class __TwigTemplate_3880a82a8f0c299b1576ffff8854adc7 extends Template
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
        echo "<section class=\"mbs-5\" id=\"howTo\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            <div class=\"mbs-4t\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</div>
          </div>
          <div class=\"col-md-4\">

          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12\">
\t\t\t";
        // line 13
        echo ($context["html"] ?? null);
        echo "
\t\t  </div>
        </div>

      </div>
    </section>
    ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/html2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/html2.twig", "");
    }
}

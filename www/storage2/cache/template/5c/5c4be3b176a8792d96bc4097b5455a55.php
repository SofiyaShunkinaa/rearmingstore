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

/* extension/extension/menu.twig */
class __TwigTemplate_6810d92f60a9bb24260fe228ec529a8b extends Template
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
        echo ($context["promotion"] ?? null);
        echo "
<fieldset>
  <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  ";
        // line 4
        if (($context["error_warning"] ?? null)) {
            // line 5
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 9
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 10
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 14
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 18
        echo ($context["column_name"] ?? null);
        echo "</td>
          <td class=\"text-left\">";
        // line 19
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-right\">";
        // line 20
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 24
        if (($context["extensions"] ?? null)) {
            // line 25
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 26
                echo "            <tr>
              <td class=\"text-left\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 27);
                echo "</b></td>
              <td class=\"text-left\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-right\">
                ";
                // line 30
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 31);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                ";
                } else {
                    // line 33
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 33);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                ";
                }
                // line 35
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        ";
        } else {
            // line 39
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 40
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 43
        echo "      </tbody>
    </table>
  </div>
</fieldset>";
    }

    public function getTemplateName()
    {
        return "extension/extension/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  139 => 40,  136 => 39,  133 => 38,  125 => 35,  117 => 33,  109 => 31,  107 => 30,  102 => 28,  98 => 27,  95 => 26,  90 => 25,  88 => 24,  81 => 20,  77 => 19,  73 => 18,  67 => 14,  59 => 10,  56 => 9,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/extension/menu.twig", "");
    }
}

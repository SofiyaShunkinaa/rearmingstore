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

/* design/theme_history.twig */
class __TwigTemplate_f2619e39a63724df5b789c1a08171560 extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo ($context["column_store"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_route"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo ($context["column_theme"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 9
        echo ($context["column_action"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["histories"] ?? null)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 15
                echo "        <tr>
          <td class=\"text-left\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["history"], "store", [], "any", false, false, false, 16);
                echo "
            <input type=\"hidden\" name=\"store_id\" value=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["history"], "store_id", [], "any", false, false, false, 17);
                echo "\"/></td>
          <td class=\"text-left\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["history"], "route", [], "any", false, false, false, 18);
                echo "
            <input type=\"hidden\" name=\"path\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["history"], "route", [], "any", false, false, false, 19);
                echo "\"/></td>
          <td class=\"text-left\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["history"], "theme", [], "any", false, false, false, 20);
                echo "</td>
          <td class=\"text-left\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 21);
                echo "</td>
          <td class=\"text-right\">
            <a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["history"], "edit", [], "any", false, false, false, 23);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
            <a href=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["history"], "delete", [], "any", false, false, false, 24);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa fa-trash-o\"></i></a>
          </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "      ";
        } else {
            // line 29
            echo "      <tr>
        <td class=\"text-center\" colspan=\"5\">";
            // line 30
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 33
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 37
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 38
        echo ($context["results"] ?? null);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "design/theme_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 38,  139 => 37,  133 => 33,  127 => 30,  124 => 29,  121 => 28,  107 => 24,  101 => 23,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  73 => 15,  68 => 14,  66 => 13,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/theme_history.twig", "");
    }
}

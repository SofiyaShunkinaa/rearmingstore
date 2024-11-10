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

/* default/template/common/currency.twig */
class __TwigTemplate_a212c022c1ab6f9abd57b49840ab086d extends Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "  <div class=\"pull-left\">
    <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
      <div class=\"btn-group\">
        <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
          ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null)))) {
                    // line 8
                    echo "              <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    echo "</strong>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 9
$context["currency"], "symbol_right", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null)))) {
                    // line 10
                    echo "              <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 10);
                    echo "</strong>
            ";
                }
                // line 12
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "          <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_currency"] ?? null);
            echo "</span>&nbsp;<i class=\"fa fa-caret-down\"></i>
        </button>
        <ul class=\"dropdown-menu\">
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 17
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "              <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 18);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 18);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 18);
                    echo "</button></li>
            ";
                } else {
                    // line 20
                    echo "              <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 20);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 20);
                    echo "</button></li>
            ";
                }
                // line 22
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </ul>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 26
            echo ($context["redirect"] ?? null);
            echo "\"/>
    </form>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 26,  114 => 23,  108 => 22,  98 => 20,  88 => 18,  85 => 17,  81 => 16,  74 => 13,  68 => 12,  62 => 10,  60 => 9,  55 => 8,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/currency.twig", "");
    }
}

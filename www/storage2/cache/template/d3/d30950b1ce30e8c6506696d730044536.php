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

/* default/template/checkout/payment_method.twig */
class __TwigTemplate_944bbb741427cc975c844b17eb2cbc8c extends Template
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
        if (($context["error_warning"] ?? null)) {
            // line 2
            echo "  <div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 4
        if (($context["payment_methods"] ?? null)) {
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 6
                echo "    <div class=\"radio\">
      <label>
        ";
                // line 8
                if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                    // line 9
                    echo "          ";
                    $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 9);
                    // line 10
                    echo "\t\t\t<div class=\"form-group \">
\t\t\t  <div class=\"form-check form-check-inline\">
\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" id=\"inlineRadio1";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 12);
                    echo "\"
\t\t\t\t  value=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 13);
                    echo "\" checked=\"checked\">
\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 14);
                    echo "</label>
\t\t\t  </div>
\t\t\t</div>
        ";
                } else {
                    // line 18
                    echo "          <div class=\"form-group \">
\t\t\t  <div class=\"form-check form-check-inline\">
\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" id=\"inlineRadio1";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 20);
                    echo "\"
\t\t\t\t  value=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 21);
                    echo "\">
\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 22);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 22);
                    echo "</label>
\t\t\t  </div>
\t\t\t</div>
        ";
                }
                // line 26
                echo "        
        ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "          (";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 28);
                    echo ")
        ";
                }
                // line 30
                echo "      </label>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 34
        echo "<input type=\"hidden\" name=\"agree\" value=\"1\"/>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  114 => 30,  108 => 28,  106 => 27,  103 => 26,  94 => 22,  90 => 21,  86 => 20,  82 => 18,  73 => 14,  69 => 13,  65 => 12,  61 => 10,  58 => 9,  56 => 8,  52 => 6,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/payment_method.twig", "");
    }
}

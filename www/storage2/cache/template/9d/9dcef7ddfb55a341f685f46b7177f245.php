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

/* default/template/common/cart.twig */
class __TwigTemplate_b24edddc6c75d9a6972e5f47ceb0c42c extends Template
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
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 2
            echo "<div id=\"cart\" class=\"\">
\t<div class=\"fpanItems\">
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 5
                echo "\t  <div class=\"fpItem\">
\t\t";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 6)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 6);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                    echo "\" class=\"img-thumbnail\"/></a> ";
                }
                // line 7
                echo "\t\t<div class=\"fpip\">
\t\t\t<div class=\"fpItemt\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "</div>
\t\t\t<div class=\"price\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 9);
                echo "</div>
\t\t</div>
\t\t<div class=\"remit\"  onclick=\"cart.remove('";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 11);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" >
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"20\" viewBox=\"0 0 21 20\"
\t\t\t\tfill=\"none\">
\t\t\t\t<rect width=\"21\" height=\"20\" rx=\"10\" fill=\"#EDEBEB\" />
\t\t\t\t<path
\t\t\t\t  d=\"M13.4475 12.1482L12.6064 12.9892L7.54111 7.92397L8.38218 7.0829L13.4475 12.1482ZM13.4412 8.03322L8.31741 13.157L7.37846 12.218L12.5022 7.09426L13.4412 8.03322Z\"
\t\t\t\t  fill=\"black\" />
\t\t\t</svg>
\t\t</div>
\t  </div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t</div>
\t
\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 25
                echo "\t  <div class=\"total\">";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 25);
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 25);
                echo "</span>€</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\" class=\"to_cart_btn btn\">Order</a>

";
        } else {
            // line 30
            echo "\t<div class=\"text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</div>
";
        }
        // line 32
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  119 => 30,  112 => 27,  101 => 25,  97 => 24,  93 => 22,  74 => 11,  69 => 9,  65 => 8,  62 => 7,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart.twig", "");
    }
}

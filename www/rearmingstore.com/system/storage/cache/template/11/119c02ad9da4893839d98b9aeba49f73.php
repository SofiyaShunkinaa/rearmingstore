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

/* default/template/common/wishlist.twig */
class __TwigTemplate_0107b7fed60d17e554617ea2241a0220 extends Template
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
        if (($context["products_wishlist"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products_wishlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 3
                echo "\t<div class=\"fpItem fpItem_";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 3);
                echo "\">
\t\t";
                // line 4
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 4)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 4);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 4);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 4);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 4);
                    echo "\" class=\"img-thumbnail\"/></a> ";
                }
                // line 5
                echo "\t\t<div class=\"fpip\">
\t\t  <div class=\"fpItemt\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                echo "</div>
\t\t  <a href=\"#\" class=\"btn\" onclick=\"cart.add('";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 7);
                echo "');\">To Cart</a>
\t\t  <div class=\"price\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 8);
                echo "</div>
\t\t</div>
\t\t<div class=\"remit\" onclick=\"wishlist.remove('";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 10);
                echo "');\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"20\" viewBox=\"0 0 21 20\"
\t\t\t\tfill=\"none\">
\t\t\t\t<rect width=\"21\" height=\"20\" rx=\"10\" fill=\"#EDEBEB\" />
\t\t\t\t<path
\t\t\t\t  d=\"M13.4475 12.1482L12.6064 12.9892L7.54111 7.92397L8.38218 7.0829L13.4475 12.1482ZM13.4412 8.03322L8.31741 13.157L7.37846 12.218L12.5022 7.09426L13.4412 8.03322Z\"
\t\t\t\t  fill=\"black\" />
\t\t\t</svg>
\t\t</div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 22
            echo "\t<div class=\"text-center\">You have not selected any items.</div>
";
        }
        // line 24
        echo "<script>
";
        // line 25
        echo ($context["products_wishlist_js"] ?? null);
        echo "
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  99 => 24,  95 => 22,  77 => 10,  72 => 8,  68 => 7,  64 => 6,  61 => 5,  49 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/wishlist.twig", "");
    }
}

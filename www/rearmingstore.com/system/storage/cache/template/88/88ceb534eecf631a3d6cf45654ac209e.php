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

/* default/template/extension/module/featured.twig */
class __TwigTemplate_10d25ec5deed3da747fa70e57b80ad78 extends Template
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
        echo "<section class=\"mbl-3\" id=\"featured\">
  <div class=\"container\">
\t<div class=\"row\">
\t  <div class=\"col-md-12\">
\t\t<div class=\"mbs title\"><div><span>Top</span> ways to top</div> <a href=\"/index.php?route=product/category&path=79\">Catalog</a></div>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-md-12\">
\t\t<div class=\"cards\">
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "\t\t  <div class=\"card-col\">
\t\t\t
\t\t\t\t<div class=\"cardImage\" onclick=\"wishlist.add('";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 14);
            echo "');\">
\t\t\t\t  <a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "\" class=\"img-responsive\"/></a>
\t\t\t\t  <span class=\"heart heart_";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 16);
            echo "\"></span>
\t\t\t\t</div>
\t\t\t
\t\t\t<div class=\"div-6\">
\t\t\t  <div class=\"div-wrapper-3\">
\t\t\t\t<div class=\"text-wrapper-10\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
            echo "</div>
\t\t\t  </div>
\t\t\t  ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t\t\t\t<div class=\"div-7\">
\t\t\t\t  ";
                // line 25
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "\t\t\t\t\t<div class=\"text-wrapper-12\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26);
                    echo "</div>
\t\t\t\t  ";
                } else {
                    // line 28
                    echo "\t\t\t\t\t<div class=\"text-wrapper-11\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                    echo "</div>
\t\t\t\t\t<div class=\"text-wrapper-12\">";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29);
                    echo "</div>
\t\t\t\t  ";
                }
                // line 31
                echo "\t\t\t\t</div>
\t\t\t  ";
            }
            // line 33
            echo "\t\t\t</div>
\t\t\t<div class=\"div-8\">
\t\t\t  <div class=\"frame-wrapper-2\">
\t\t\t\t<div class=\"div-wrapper-4\">
\t\t\t\t  <button class=\"text-wrapper-13\" onclick=\"cart.add('";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 37);
            echo "');\">To Cart</button>
\t\t\t\t  <a href=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 38);
            echo "\" class=\"text-wrapper-14\">More info</a>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</div>
\t  </div>
\t</div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  121 => 38,  117 => 37,  111 => 33,  107 => 31,  102 => 29,  97 => 28,  91 => 26,  89 => 25,  86 => 24,  84 => 23,  79 => 21,  71 => 16,  61 => 15,  57 => 14,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured.twig", "");
    }
}

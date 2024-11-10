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

/* default/template/product/category.twig */
class __TwigTemplate_287ecb87bfd1cdcd3a4140ca3b12fba8 extends Template
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
        echo ($context["header"] ?? null);
        echo "
<style type=\"text/css\">
#category-product .sidebarnav li.ative a{
color: #e2704b;
}
</style>


<div class=\"head_bg\"></div>
<div id=\"category-product\" style=\"overflow:hidden;\">
\t<section class=\"catalog\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
        // line 15
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<nav class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20)) {
                // line 21
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 21);
                echo "\"  class=\"breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 21);
                echo "</a>
\t\t\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t\t\t\t\t</nav>

\t\t\t\t\t<div class=\"pagetitle\">
\t\t\t\t\t  <h1 class=\"titlepage\">";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t  ";
        // line 31
        if (($context["description"] ?? null)) {
            // line 32
            echo "\t\t\t\t\t\t<div class=\"\">";
            echo ($context["description"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 34
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radioButton\">
\t\t\t\t\t\t";
        // line 36
        if (($context["category_products"] ?? null)) {
            // line 37
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_product"]) {
                // line 38
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "href", [], "any", false, false, false, 38);
                echo "\" class=\"btn btn-outline-primary form-check-label ";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "class", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "name", [], "any", false, false, false, 38);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radioButton swiper radioButtonslide\">
\t\t\t\t\t  <div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 44
        if (($context["category_products"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_product"]) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "href", [], "any", false, false, false, 46);
                echo "\" class=\"btn btn-outline-primary form-check-label ";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "class", [], "any", false, false, false, 46);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "name", [], "any", false, false, false, 46);
                echo "</a></div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t";
        // line 53
        if (($context["products"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t\t\t\t<div class=\"cards\">
\t\t\t\t\t\t\t\t";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 56
                echo "\t\t\t\t\t\t\t\t<div class=\"card-col\">

\t\t\t\t\t\t\t\t\t<div class=\"cardImage\">
\t\t\t\t\t\t\t\t\t  <a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 59);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 59);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                echo "\"/></a>
\t\t\t\t\t\t\t\t\t  <span class=\"heart heart_";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                echo "');\"></span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"div-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"div-wrapper-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-wrapper-10\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"div-7\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 69
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 69)) {
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-wrapper-12\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 70);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-wrapper-11\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-wrapper-12\">";
                        // line 73
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 73);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"div-8\">
\t\t\t\t\t\t\t\t\t  <div class=\"frame-wrapper-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"div-wrapper-4\">
\t\t\t\t\t\t\t\t\t\t  <button type=\"button\" onclick=\"cart.add('";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 81);
                echo "');\" class=\"text-wrapper-13\">To Cart</button>
\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 82);
                echo "\" class=\"text-wrapper-14\">More info</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 91
            echo "\t\t\t\t\t\t\t<p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 93
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 100
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t<div class=\"row pagebanner\">
\t\t\t  <div class=\"col-md-4\"><img src=\"/img/pagebanner1m.png\" alt=\"\"></div>
\t\t\t  <div class=\"col-md-8\">
\t\t\t\t<div class=\"h1\">could not find what you were <br>looking for? create a custom <br>order!</div>
\t\t\t\t<p>We can accomplish anything even if it's not listed on the website</p>
\t\t\t\t<p><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#request\">Request a service</a></p>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</section>
</div>
";
        // line 112
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 112,  286 => 100,  280 => 96,  272 => 93,  266 => 91,  263 => 90,  259 => 88,  247 => 82,  241 => 81,  235 => 77,  231 => 75,  226 => 73,  221 => 72,  215 => 70,  213 => 69,  210 => 68,  208 => 67,  203 => 65,  191 => 60,  181 => 59,  176 => 56,  172 => 55,  169 => 54,  167 => 53,  161 => 49,  158 => 48,  145 => 46,  140 => 45,  138 => 44,  133 => 41,  130 => 40,  117 => 38,  112 => 37,  110 => 36,  106 => 34,  100 => 32,  98 => 31,  94 => 30,  88 => 26,  82 => 25,  76 => 23,  68 => 21,  65 => 20,  61 => 19,  54 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}

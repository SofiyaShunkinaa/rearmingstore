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
class __TwigTemplate_3c24279c291c7a18cb6c60f50670db4c extends Template
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
<div class=\"head_bg\"></div>
<div id=\"category-product\" style=\"overflow:hidden;\">
\t<section class=\"catalog\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<nav class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
                echo "\"  class=\"breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
                echo "</a>
\t\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t\t  
\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t\t\t\t<div class=\"pagetitle\">
\t\t\t\t\t  <h1 class=\"titlepage\">";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t  ";
        // line 24
        if (($context["description"] ?? null)) {
            // line 25
            echo "\t\t\t\t\t\t<div class=\"\">";
            echo ($context["description"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 27
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radioButton\">
\t\t\t\t\t\t";
        // line 29
        if (($context["category_products"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_product"]) {
                // line 31
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "href", [], "any", false, false, false, 31);
                echo "\" class=\"btn btn-outline-primary form-check-label ";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "class", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "name", [], "any", false, false, false, 31);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radioButton swiper radioButtonslide\">
\t\t\t\t\t  <div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 37
        if (($context["category_products"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_product"]) {
                // line 39
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "href", [], "any", false, false, false, 39);
                echo "\" class=\"btn btn-outline-primary form-check-label ";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "class", [], "any", false, false, false, 39);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_product"], "name", [], "any", false, false, false, 39);
                echo "</a></div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t";
        // line 46
        if (($context["products"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t\t\t\t<div class=\"cards\">
\t\t\t\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<div class=\"card-col\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"cardImage\">
\t\t\t\t\t\t\t\t\t  <a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                echo "\"/></a>
\t\t\t\t\t\t\t\t\t  <span class=\"heart heart_";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 53);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 53);
                echo "');\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"div-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"div-wrapper-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-wrapper-10\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"div-7\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 62
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 62)) {
                        // line 63
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-wrapper-12\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-wrapper-11\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-wrapper-12\">";
                        // line 66
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 66);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 70
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"div-8\">
\t\t\t\t\t\t\t\t\t  <div class=\"frame-wrapper-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"div-wrapper-4\">
\t\t\t\t\t\t\t\t\t\t  <button type=\"button\" onclick=\"cart.add('";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 74);
                echo "');\" class=\"text-wrapper-13\">To Cart</button>
\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
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
            // line 81
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 84
            echo "\t\t\t\t\t\t\t<p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 86
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 93
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
        // line 105
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
        return array (  294 => 105,  279 => 93,  273 => 89,  265 => 86,  259 => 84,  256 => 83,  252 => 81,  240 => 75,  234 => 74,  228 => 70,  224 => 68,  219 => 66,  214 => 65,  208 => 63,  206 => 62,  203 => 61,  201 => 60,  196 => 58,  184 => 53,  174 => 52,  169 => 49,  165 => 48,  162 => 47,  160 => 46,  154 => 42,  151 => 41,  138 => 39,  133 => 38,  131 => 37,  126 => 34,  123 => 33,  110 => 31,  105 => 30,  103 => 29,  99 => 27,  93 => 25,  91 => 24,  87 => 23,  81 => 19,  75 => 18,  69 => 16,  61 => 14,  58 => 13,  54 => 12,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}

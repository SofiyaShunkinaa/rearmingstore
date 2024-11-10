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

/* default/template/product/product.twig */
class __TwigTemplate_ea29bd1595de0056dd2cadfb566ce29f extends Template
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
<div id=\"product-product\" style=\"overflow:hidden;\">
\t<section class=\"catalog\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
\t\t\t";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
          </div>
          <div class=\"col-md-8\">
            <nav class=\"breadcrumb\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
                echo "\"  class=\"breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
                echo "</span>
\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "              
            </nav>
\t\t\t
            <div class=\"pagetitle\">
              <h1 class=\"titlepage\">";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"trustpilot\"><img src=\"/img/Frame435.svg\" alt=\"\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t</div>
                
                <div class=\"boostCard\">
                  <div class=\"imageBoost\">
\t\t\t\t\t\t";
        // line 34
        if (($context["image"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t\t<img src=\"";
            echo ($context["image"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"/>
\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t";
        if (($context["thumb"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t\t<img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"/>
\t\t\t\t\t\t";
        }
        // line 40
        echo "                  </div>
                  <div class=\"row tOrow\">
                    <div class=\"col-md-6 tToRow\">
                      <div class=\"tTo\">
                        <span>";
        // line 44
        echo ($context["timestart"] ?? null);
        echo "</span>
                        <span>Time to start</span>
                      </div>
                      <div class=\"tToRange\">
                        <span>";
        // line 48
        echo ($context["timecomplete"] ?? null);
        echo "</span>
                        <span>Time to complete</span>
                      </div>
                    </div>
                    <div class=\"col-md-6 tToBtn\">
\t\t\t\t\t\t";
        // line 53
        if (($context["tags_prod"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags_prod"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag_prod"]) {
                // line 55
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "href", [], "any", false, false, false, 55);
                echo "\" class=\"btn btn-outline-primary form-check-label ";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "active", [], "any", false, false, false, 55);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "tag", [], "any", false, false, false, 55);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag_prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t\t";
        }
        // line 58
        echo "                    </div>
                  </div>
\t\t\t\t
\t\t\t\t<div id=\"product\">
\t\t\t\t";
        // line 62
        if (($context["options"] ?? null)) {
            // line 63
            echo "\t\t\t\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 64
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 64) == "select")) {
                    // line 65
                    echo "\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <div class=\"borderedRow\">
\t\t\t\t\t\t\t<div>";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 68);
                    echo "</div>
\t\t\t\t\t\t\t<input name=\"option[";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 69);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 69);
                    echo "\" type=\"hidden\" data-price=\"0\">
\t\t\t\t\t\t\t<div class=\"dropdownSelect\">
\t\t\t\t\t\t\t  <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\"
\t\t\t\t\t\t\t\taria-expanded=\"false\">0 - 1000</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<div class=\"scrollbar-inner\" data-id=\"";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 74);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 75));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-id=\"";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 77);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 77);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 77);
                        echo "\" data-pricePref=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 77);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 78
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 78);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 79
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 79)) {
                            // line 80
                            echo "\t\t\t\t\t\t\t\t\t\t  <span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 80);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 80);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 92) == "radio")) {
                    // line 93
                    echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <div class=\"borderedRow\">
\t\t\t\t\t\t\t<div>";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 96);
                    echo "</div>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 97);
                    echo "\">
\t\t\t\t\t\t\t  ";
                    // line 98
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 98));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\"  type=\"radio\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 99);
                        echo "\" id=\"product_option_id";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 99);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 99);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"product_option_id";
                        // line 100
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 100);
                        echo "\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 102);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 103
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 103)) {
                            // line 104
                            echo "\t\t\t\t\t\t\t\t\t  <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 104);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 104);
                            echo "</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 113) == "checkbox")) {
                    // line 114
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 114));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 115
                        echo "\t\t\t\t\t<div class=\"checkbigrow\">
\t\t\t\t\t  <div class=\"form-check\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 117
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 117);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 117);
                        echo "\" id=\"exampleRadios";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 117);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 117);
                        echo "\"/>
                        <label class=\"form-check-label\" for=\"exampleRadios";
                        // line 118
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                        echo "\">
\t\t\t\t\t\t\t";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 119);
                        echo "
\t\t\t\t\t\t\t";
                        // line 120
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 120)) {
                            // line 121
                            echo "\t\t\t\t\t\t\t  <span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 121);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121);
                            echo ")</span>
\t\t\t\t\t\t\t";
                        }
                        // line 123
                        echo "                        </label>
                      </div>
                    </div>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 128) == "text")) {
                    // line 129
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 129)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 130);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 130);
                    echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 131);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 131);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 131);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 131);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 134) == "textarea")) {
                    // line 135
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 135)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 136);
                    echo "</label>
\t\t\t\t\t\t<textarea name=\"option[";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 137);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 137);
                    echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 140) == "file")) {
                    // line 141
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 141)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 142);
                    echo "</label>
\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                    echo "\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 147
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 147) == "date")) {
                    // line 148
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 148)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 149);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 151);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 158) == "datetime")) {
                    // line 159
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 159)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 162);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 169
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "time")) {
                    // line 170
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 170)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 171);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 173);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 180
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 180) == "choice")) {
                    // line 181
                    echo "\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <div class=\"row3colForm\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t  <div><span class=\"asdasd\">1</span>Runs</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t  <div id=\"customRange1\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>Choose 5 Runs to get a 10% OFF</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
                    // line 195
                    echo ($context["minimum"] ?? null);
                    echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
\t\t\t\t\t";
                }
                // line 197
                echo "\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "\t\t\t\t";
        }
        // line 199
        echo "\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t<div class=\"total\">Total: <span data-price=\"";
        // line 200
        echo ($context["price"] ?? null);
        echo "\"></span></div>
\t\t\t  </div>
                  <div class=\"row\">
                    <div class=\"col-md-12\" style=\"text-align: center;\">
                      <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 204
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-by-boost\">Buy now</button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-12\">
                <nav>
                  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                    <button class=\"nav-link active\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-home\"
                      type=\"button\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">DESCRIPTION</button>
                    <button class=\"nav-link\" id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-profile\"
                      type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">WHY BUY FROM
                      US?</button>
                    <button class=\"nav-link\" id=\"nav-contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-contact\"
                      type=\"button\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">PAYMENTS AND
                      CONTACTS</button>
                  </div>
                </nav>
                <div class=\"tab-content\" id=\"nav-tabContent\">
                  <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"
                    tabindex=\"0\">
                    ";
        // line 228
        echo ($context["description"] ?? null);
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 232
        echo ($context["why"] ?? null);
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 236
        echo ($context["payments"] ?? null);
        echo "
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function (e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

function getNum(value){
\tvar numericValue = parseFloat(value.replace('\$', ''));
\tif (!isNaN(numericValue)) {
\t\treturn numericValue * 100;
\t}
\treturn 0;
}
function calcPrice(){
\tvar all_price = 0;
\t\$('#product input[type=\"radio\"]').each(function(){
\t\tvar result = 0;
\t\tif(\$(this).prop('checked')){
\t\t\tvar price = \$(this).attr('data-price');
\t\t\tresult = getNum(price);
\t\t}
\t\tall_price = all_price + result;
\t});
\t\$('#product input[type=\"checkbox\"]').each(function(){
\t\tvar result = 0;
\t\tif(\$(this).prop('checked')){
\t\t\tvar price = \$(this).attr('data-price');
\t\t\tresult = getNum(price);
\t\t}
\t\tall_price = all_price + result;
\t});
\t\$('#product input[type=\"hidden\"]').each(function(){
\t\tvar result = 0;
\t\tif(\$(this).attr('data-price') !== undefined){
\t\t\tvar price = \$(this).attr('data-price');
\t\t\tresult = getNum(price);
\t\t}
\t\tall_price = all_price + result;
\t});
\tvar count = parseInt(\$('#input-quantity').val());
\tall_price = (all_price + getNum(\$('#product .total span').attr('data-price'))) * count;
\tvar minus = 0;
\tif(count == 5){
\t\tminus = ((all_price / 100) * 10);
\t\t//all_price = all_price - ((all_price / 100) * 10);
\t}
\tif(all_price > 0){
\t\tall_price = all_price/100;
\t\tminus = minus/100;
\t}
\tif(minus > 0){
\t\tall_price = all_price+'<i>(-'+minus+')</i>'
\t}
\t\$('#product .total span').html('\$'+all_price);
}
//--></script>
<script type=\"text/javascript\"><!--
\$('.borderedRow input[type=\"radio\"]:first').prop('checked', true);
\$('.dropdownSelect').each(function(){
\tvar name = \$(this).find('li:first-child a').html();
\tvar id = \$(this).find('.scrollbar-inner').attr('data-id');
\tvar thisid = \$(this).find('li:first-child a').attr('data-id');
\tvar price = \$(this).find('li:first-child a').attr('data-price');
\t
\t\$('#input-option-'+id).val(thisid);
\t\$('#input-option-'+id).attr('data-price',price);
\t\$(this).find('.dropdown-toggle').html(name);
});
\$('#product input[type=\"checkbox\"],#product  input[type=\"radio\"]').on('change',function () {
\tcalcPrice();
});
calcPrice();
\$('.dropdownSelect .dropdown-item').on('click',function(){
\tvar name = \$(this).html();
\tvar id = \$(this).parents('.scrollbar-inner').attr('data-id');
\tvar thisid = \$(this).attr('data-id');
\tvar price = \$(this).attr('data-price');
\t
\t\$(this).parents('.dropdownSelect').find('.dropdown-toggle').html(name);
\t\$('#input-option-'+id).val(thisid);
\t\$('#input-option-'+id).attr('data-price',price);
\t\$(this).parents('.dropdownSelect').find('.dropdown-toggle').trigger('click');
\tcalcPrice();
\treturn false;
});
\$('#button-cart').on('click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['error']) {
                if (json['error']['option']) {
\t\t\t\tvar txt = '';
                    for (i in json['error']['option']) {
                        var element = \$('#input-option' + i.replace('_', '-'));
\t\t\t\t\t\ttxt = txt +' '+ json['error']['option'][i];
                        if (element.parent().hasClass('input-group')) {
                            element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                        } else {
                            element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                        }
                    }
\t\t\t\t\t
\t\t\t\t\talert(txt);
                }

                if (json['error']['subscription']) {
                    \$('select[name=\\'subscription_plan_id\\']').after('<div class=\"text-danger\">' + json['error']['subscription'] + '</div>');
                }

                // Highlight any found errors
                \$('.text-danger').parent().addClass('has-error');
            }

            if (json['success']) {
                \$.jGrowl(json['success'], { life: 10000 });
                \$('.cartbtn > span').html(json['total']);
\t\t\t\tif(!\$('.cartbtn').hasClass('has_cart_item')){
\t\t\t\t\t\$('.cartbtn').addClass('has_cart_item')
\t\t\t\t}

                \$('#cartRows').load('index.php?route=common/cart/info');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    language: '";
        // line 394
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
});

\$('.datetime').datetimepicker({
    language: '";
        // line 399
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
});

\$('.time').datetimepicker({
    language: '";
        // line 405
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
    var element = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\"/></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
        if (\$('#form-upload input[name=\\'file\\']').val() != '') {
            clearInterval(timer);

            \$.ajax({
                url: 'index.php?route=tool/upload',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    \$(element).button('loading');
                },
                complete: function() {
                    \$(element).button('reset');
                },
                success: function (json) {
                    \$('.text-danger').remove();

                    if (json['error']) {
                        \$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                    }

                    if (json['success']) {
                        alert(json['success']);

                        \$(element).parent().find('input').val(json['code']);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});
    \$(function () {
      \$(\"#customRange1\").slider({
        max: 5,
        min: 1,
        step: 1,
        value: 1,
        slide: function (event, ui) {
\t\t\t\$('.asdasd').html(ui.value);
\t\t\t\$('#input-quantity').val(ui.value);
\t\t\tcalcPrice();
        }
      });
    });
//--></script>
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');
    \$('#review').load(this.href);
    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 483
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
    \$.ajax({
        url: 'index.php?route=product/product/write&product_id=";
        // line 487
        echo ($context["product_id"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: \$('#form-review').serialize(),
        beforeSend: function() {
            \$('#button-review').button('loading');
        },
        complete: function() {
            \$('#button-review').button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
            }

            if (json['success']) {
                \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                \$('input[name=\\'name\\']').val('');

                \$('textarea[name=\\'text\\']').val('');

                \$('input[name=\\'rating\\']:checked').prop('checked', false);
            }
        }
    });
});

\$(document).ready(function() {
    \$('.thumbnails').magnificPopup({
        type:'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 527
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  948 => 527,  905 => 487,  898 => 483,  817 => 405,  808 => 399,  800 => 394,  639 => 236,  632 => 232,  625 => 228,  598 => 204,  591 => 200,  586 => 199,  583 => 198,  577 => 197,  572 => 195,  556 => 181,  553 => 180,  539 => 173,  532 => 171,  525 => 170,  522 => 169,  508 => 162,  501 => 160,  494 => 159,  491 => 158,  477 => 151,  470 => 149,  463 => 148,  460 => 147,  452 => 144,  444 => 143,  440 => 142,  433 => 141,  430 => 140,  418 => 137,  412 => 136,  405 => 135,  402 => 134,  390 => 131,  384 => 130,  377 => 129,  374 => 128,  371 => 127,  362 => 123,  355 => 121,  353 => 120,  349 => 119,  345 => 118,  335 => 117,  331 => 115,  326 => 114,  323 => 113,  316 => 108,  309 => 106,  302 => 104,  300 => 103,  296 => 102,  289 => 100,  276 => 99,  272 => 98,  268 => 97,  264 => 96,  259 => 93,  256 => 92,  247 => 85,  239 => 82,  232 => 80,  230 => 79,  226 => 78,  216 => 77,  213 => 76,  209 => 75,  205 => 74,  195 => 69,  191 => 68,  186 => 65,  183 => 64,  178 => 63,  176 => 62,  170 => 58,  167 => 57,  154 => 55,  149 => 54,  147 => 53,  139 => 48,  132 => 44,  126 => 40,  116 => 38,  113 => 37,  103 => 35,  101 => 34,  87 => 23,  81 => 19,  75 => 18,  69 => 16,  61 => 14,  58 => 13,  54 => 12,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}

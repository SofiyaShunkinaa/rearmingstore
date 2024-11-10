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
class __TwigTemplate_31cc326a84de53c491e06e957dc1a57a extends Template
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
#product .borderedRow .dropdown-menu-end {
overflow-y: auto;
}
#nav-tabContent p {
font-weight: normal;
font-family: Graphik LCG !important;
}

#product-product .sidebarnav li.ative a{
color: #e2704b;
}

.borderedRow .dropdown-menu.show {
max-width: 250px;
}

.opt-checkbox {
border-radius: 10px;
    border: 1px solid var(--5, rgba(0, 0, 0, 0.05));
    width: 100%;
    padding: 22px 20px;
    margin-bottom: 10px;
}
.opt-checkbox_name {
\tcolor: #000;
    font-family: Graphik LCG;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: 145%;
    padding-bottom: 22px;
}
.opt-checkbox.hidden,
.checkbigrow.hidden {
\tdisplay: none;
}
.checkbigrow:last-child .form-check {
margin-bottom: 0;
}
.checkbigrow label {
\tbackground-size: 18px;
\tcolor: rgba(0, 0, 0, 0.50);
\tfont-size: 16px;
\tfont-weight: 400;
\tline-height: 130%;
\tpadding-left: 25px;
}
</style>

<div class=\"head_bg\"></div>
<div id=\"product-product\" style=\"overflow:hidden;\">
\t<section class=\"catalog\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
\t\t\t";
        // line 59
        echo ($context["column_left"] ?? null);
        echo "
          </div>
          <div class=\"col-md-8\">
            <nav class=\"breadcrumb\">
\t\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 64
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 64)) {
                // line 65
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 65);
                echo "\"  class=\"breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 65);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 67);
                echo "</span>
\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
            </nav>

            <div class=\"pagetitle\">
              <h1 class=\"titlepage\">";
        // line 74
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
            <div class=\"row\">

              <div class=\"col-md-12\">

                <!--//<div class=\"trustpilot\">
                <img src=\"/img/Frame435.svg\" alt=\"\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t</div>//-->


\t\t\t\t";
        // line 87
        if (($context["prod_category"] ?? null)) {
            // line 88
            echo "                    <div class=\"radioButton\">
\t\t\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prod_category"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prod_cat"]) {
                // line 90
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["prod_cat"], "href", [], "any", false, false, false, 90);
                echo "\" class=\"btn btn-outline-primary form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["prod_cat"], "text", [], "any", false, false, false, 90);
                echo "</a>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod_cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </div>
\t\t\t\t";
        }
        // line 94
        echo "


                <div class=\"boostCard\">
                  <div class=\"imageBoost\">
\t\t\t\t\t\t";
        // line 99
        if (($context["image"] ?? null)) {
            // line 100
            echo "\t\t\t\t\t\t<img src=\"";
            echo ($context["image"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"/>
\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t";
        if (($context["thumb"] ?? null)) {
            // line 103
            echo "\t\t\t\t\t\t<img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"/>
\t\t\t\t\t\t";
        }
        // line 105
        echo "                  </div>
                  <div class=\"row tOrow\">
                    <div class=\"col-md-6 tToRow\">
                      <div class=\"tTo\">
                        <span>";
        // line 109
        echo ($context["timestart"] ?? null);
        echo "</span>
                        <span>Time to start</span>
                      </div>
                      <div class=\"tToRange\">
                        <span id=\"comlete-time-text\" data-days=\"\" data-hours=\"\" data-additionals=\"\">";
        // line 113
        echo ($context["timecomplete"] ?? null);
        echo "</span>
                        <span>Time to complete</span>
                      </div>
                    </div>
                    <div class=\"col-md-6 tToBtn\">
\t\t\t\t\t\t";
        // line 118
        if (($context["tags_prod"] ?? null)) {
            // line 119
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags_prod"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag_prod"]) {
                // line 120
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "href", [], "any", false, false, false, 120);
                echo "\" class=\"btn btn-outline-primary form-check-label ";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "active", [], "any", false, false, false, 120);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "tag", [], "any", false, false, false, 120);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag_prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t\t\t\t";
        }
        // line 123
        echo "
                    </div>
                  </div>

\t\t\t\t<div id=\"product\">
\t\t\t\t";
        // line 128
        if (($context["options"] ?? null)) {
            // line 129
            echo "\t\t\t\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 130
                echo "\t\t\t\t  <h3>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 130), "name", [], "any", false, false, false, 130);
                echo "</h3>
\t\t\t\t\t";
                // line 131
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 131) == "select")) {
                    // line 132
                    echo "\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <div class=\"borderedRow borderedRow-";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 134);
                    echo "\">
\t\t\t\t\t\t\t<div>";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 135);
                    echo "</div>
\t\t\t\t\t\t\t<input name=\"option[";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    echo "\" type=\"hidden\" data-prise=\"0\" data-name=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "name", [], "any", false, false, false, 136);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"dropdownSelect\">
\t\t\t\t\t\t\t  <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" 
\t\t\t\t\t\t\t\taria-expanded=\"false\">0 - 1000</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<div class=\"scrollbar-inner\" data-id=\"";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 142
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 142));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 143
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-id=\"";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 144);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 144);
                        echo "\" data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 144);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144);
                        echo "\" data-prisePref=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 144);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 145
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 145);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 146
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 146)) {
                            // line 147
                            echo "\t\t\t\t\t\t\t\t\t\t  <span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 147);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 147);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "radio")) {
                    // line 160
                    echo "\t\t\t\t\t\t<div class=\"opt-checkbox\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 162));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 163
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbigrow\"> 
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 165);
                        echo "\" id=\"product_option_id";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 165);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 165);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"product_option_id";
                        // line 166
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 166);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 167);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 168
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168)) {
                            // line 169
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 169);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 169);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 177) == "checkbox")) {
                    // line 178
                    echo "\t\t\t\t\t\t<div class=\"opt-checkbox\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 180));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbigrow\"> 
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 183);
                        echo "\" id=\"exampleRadios";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 183);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 183);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleRadios";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 184);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 185
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 185);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 186
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 187);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 189
                        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 195
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 195) == "text")) {
                    // line 196
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 196)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 197);
                    echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 198);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 201) == "textarea")) {
                    // line 202
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 202)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "</label>
\t\t\t\t\t\t<textarea name=\"option[";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 204);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 204);
                    echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 207
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 207) == "file")) {
                    // line 208
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 208)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], 
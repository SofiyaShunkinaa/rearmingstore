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
class __TwigTemplate_78607c0ba7e969fc9e1816c142c2f9a0 extends Template
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
font-size:16px;
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
#hidden-options-checkbox, #specific-gear-slot, #specific-item-slot, #original-price{
\tdisplay: none;
}

/* Настройка цвета трека слайдера */
.irs--round .irs-bar {
    background-color: #FF7147; /* Оранжевый цвет трека */
}
.irs--round .irs-line {
    background-color: #dedede; /* Оранжевый цвет трека */
}
.irs--round .irs-from:before, .irs--round .irs-to:before, .irs--round .irs-single:before{
\tborder-top-color:#FF7147;
}

.irs--round .irs-from,
.irs--round .irs-to,
.irs--round .irs-single {
    background-color: #FF7147; /* Оранжевый цвет для значений */
}

/* Настройка цвета ползунка */
.irs--round .irs-handle {
    background-color: #FF7147; /* Темно-оранжевый цвет для ползунка */
    border-color: #FF7147;
}
.irs--round {
    width: 150px; 
}
.borderedRow>div:first-child, .opt-checkbox_name{
\ttext-transform: lowercase;
}

.tab-content p span{
    font-family: Graphik LCG !important;
}

</style>

<div class=\"head_bg\"></div>
<div id=\"product-product\" style=\"overflow:hidden;\">
\t<section class=\"catalog\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
\t\t\t";
        // line 97
        echo ($context["column_left"] ?? null);
        echo "
          </div>
          <div class=\"col-md-8\">
            <nav class=\"breadcrumb\">
\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 102
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 102)) {
                // line 103
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 103);
                echo "\"  class=\"breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 103);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 105
                echo "\t\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 105);
                echo "</span>
\t\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
            </nav>

            <div class=\"pagetitle\">
              <h1 class=\"titlepage\">";
        // line 112
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
        // line 125
        if (($context["prod_category"] ?? null)) {
            // line 126
            echo "                    <div class=\"radioButton\">
\t\t\t\t\t\t";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prod_category"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prod_cat"]) {
                // line 128
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["prod_cat"], "href", [], "any", false, false, false, 128);
                echo "\" class=\"btn btn-outline-primary form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["prod_cat"], "text", [], "any", false, false, false, 128);
                echo "</a>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod_cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                    </div>
\t\t\t\t";
        }
        // line 132
        echo "


                <div class=\"boostCard\">
                  <div class=\"imageBoost\">
\t\t\t\t\t\t";
        // line 137
        if (($context["image"] ?? null)) {
            // line 138
            echo "\t\t\t\t\t\t<img src=\"";
            echo ($context["image"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"/>
\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t";
        if (($context["thumb"] ?? null)) {
            // line 141
            echo "\t\t\t\t\t\t<img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"/>
\t\t\t\t\t\t";
        }
        // line 143
        echo "                  </div>
                  <div class=\"row tOrow\">
                    <div class=\"col-md-6 tToRow\">
                      <div class=\"tTo\">
                        <span>";
        // line 147
        echo ($context["timestart"] ?? null);
        echo "</span>
                        <span>Time to start</span>
                      </div>
                      <div class=\"tToRange\">
                        <span id=\"comlete-time-text\" data-days=\"\" data-hours=\"\" data-additionals=\"\">";
        // line 151
        echo ($context["timecomplete"] ?? null);
        echo "</span>
                        <span>Time to complete</span>
                      </div>
                    </div>
                    <div class=\"col-md-6 tToBtn\">
\t\t\t\t\t\t";
        // line 156
        if (($context["tags_prod"] ?? null)) {
            // line 157
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags_prod"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag_prod"]) {
                // line 158
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "href", [], "any", false, false, false, 158);
                echo "\" class=\"btn btn-outline-primary form-check-label ";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "active", [], "any", false, false, false, 158);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "tag", [], "any", false, false, false, 158);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag_prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "\t\t\t\t\t\t";
        }
        // line 161
        echo "
                    </div>
                  </div>

\t\t\t\t<div id=\"product\">
\t\t\t\t";
        // line 166
        if (($context["options"] ?? null)) {
            // line 167
            echo "\t\t\t\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 168
                echo "\t\t\t\t  <h3>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168);
                echo "</h3>
\t\t\t\t\t";
                // line 169
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "select")) {
                    // line 170
                    echo "\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <div class=\"borderedRow borderedRow-";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 172);
                    echo "\">
\t\t\t\t\t\t\t<div>";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 173);
                    echo "</div>
\t\t\t\t\t\t\t<input name=\"option[";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "\" type=\"hidden\" data-prise=\"0\" data-name=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "name", [], "any", false, false, false, 174);
                    echo "\" data-value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 174), "name", [], "any", false, false, false, 174);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"dropdownSelect\">
\t\t\t\t\t\t\t  <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" 
\t\t\t\t\t\t\t\taria-expanded=\"false\">0 - 1000</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<div class=\"scrollbar-inner\" data-id=\"";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 180));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-id=\"";
                        // line 182
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 182);
                        echo "\" data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 182);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182);
                        echo "\" data-prisePref=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 182);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 184
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184)) {
                            // line 185
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-price\" data-base-prise=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185);
                            echo "\" data-prefix=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 185);
                            echo "\">(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 185);
                            echo "<span class=\"price-value\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185);
                            echo "</span>)</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 187
                        echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 191
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 198
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 198) == "radio")) {
                    // line 199
                    echo "\t\t\t\t\t\t<div class=\"opt-checkbox\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 200);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 201
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 201));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbigrow\"> 
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\tname=\"option[";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                        echo "]\" 
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 206
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 206);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\tid=\"product_option_id";
                        // line 207
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 207);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\tdata-prise=\"";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\tdata-name=\"";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 209);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 210
                        if (((((((((((twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210) == "Boost Method") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 210) == "Piloted")) || ((twig_get_attribute($this->env, $this->source,                         // line 211
$context["option"], "name", [], "any", false, false, false, 211) == "Boost method") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 211) == "Piloted (Solo Shuffle)"))) || ((twig_get_attribute($this->env, $this->source,                         // line 212
$context["option"], "name", [], "any", false, false, false, 212) == "Execution options") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 212) == "Full Gear"))) || ((twig_get_attribute($this->env, $this->source,                         // line 213
$context["option"], "name", [], "any", false, false, false, 213) == "EXECUTION OPTIONS") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 213) == "Keystone Hero"))) || ((twig_get_attribute($this->env, $this->source,                         // line 214
$context["option"], "name", [], "any", false, false, false, 214) == "ARENA BRACKET") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 214) == "2v2 Arena"))) || ((twig_get_attribute($this->env, $this->source,                         // line 215
$context["option"], "name", [], "any", false, false, false, 215) == "COACH EXPERIENCE") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 215) == "Multi-Gladiator"))) || ((twig_get_attribute($this->env, $this->source,                         // line 216
$context["option"], "name", [], "any", false, false, false, 216) == "Execution Speed") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 216) == "Regular"))) || ((twig_get_attribute($this->env, $this->source,                         // line 217
$context["option"], "name", [], "any", false, false, false, 217) == "Boost Method") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 217) == "Selfplay"))) || ((twig_get_attribute($this->env, $this->source,                         // line 218
$context["option"], "name", [], "any", false, false, false, 218) == "Basic option") && (twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 218) == "70-80 Leveling + 8/8 M+0 Dungeons + 593 ilvl Gear")))) {
                            echo "checked";
                        }
                        echo "/>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"product_option_id";
                        // line 220
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 220);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 221);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 222
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 222)) {
                            // line 223
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 223);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 223);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 225
                        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 229
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 231
                echo "


\t\t\t\t\t";
                // line 234
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "checkbox")) {
                    // line 235
                    echo "\t\t\t\t\t\t<div class=\"opt-checkbox\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235) == "Select Dungeons")) {
                        echo "id=\"hidden-options-checkbox\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235) == "Specific Slot")) {
                        echo "id=\"specific-gear-slot\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235) == "Specific Item Slot")) {
                        echo "id=\"specific-item-slot\"";
                    }
                    echo ">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 237
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 237));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 238
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbigrow\"> 
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" ";
                        // line 240
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 240), [0 => "Select Dungeons", 1 => "Speecific Item Slot", 2 => "Specific Slot"])) {
                            echo "class=\"special-opt\"";
                        }
                        echo " name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 240);
                        echo "\" id=\"exampleRadios";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 240);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 240);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 240);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleRadios";
                        // line 241
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 241);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 241);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 242
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 242);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 243
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 243)) {
                            // line 244
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 244);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 244);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 246
                        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 250
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 252
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 252) == "text")) {
                    // line 253
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 253)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 254
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 254);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 254);
                    echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 255
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 255);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 255);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 258
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 258) == "textarea")) {
                    // line 259
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 259)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 260);
                    echo "</label>
\t\t\t\t\t\t<textarea name=\"option[";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 261);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 261);
                    echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 264
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 264) == "file")) {
                    // line 265
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 265)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 266
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 266);
                    echo "</label>
\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 267
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 267);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                    echo "\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 271
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 271) == "date")) {
                    // line 272
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 272)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 273
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 273);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 273);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 275
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 275);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 275);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 275);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 282
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 282) == "datetime")) {
                    // line 283
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 283)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 284);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 284);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 286
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 286);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 286);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 286);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 293
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 293) == "time")) {
                    // line 294
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 294)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 295
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 295);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 295);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 297);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 297);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 297);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 304
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 304) == "choice")) {
                    // line 305
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

\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
                    // line 319
                    echo ($context["minimum"] ?? null);
                    echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
\t\t\t\t\t";
                }
                // line 321
                echo "\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "\t\t\t\t";
        }
        // line 323
        echo "\t\t\t\t";
        if (($context["name_option_slider"] ?? null)) {
            // line 324
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"borderedRow\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
            // line 327
            echo ($context["name_option_slider"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t<input type=\"number\" id=\"sliderValue\" style=\"text-align:center; border:none; display:none\"
\t\t\t\t\t\t\t\tmin=\"";
            // line 330
            echo ($context["min_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\tmax=\"";
            // line 331
            echo ($context["max_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\tvalue=\"5\" 
\t\t\t\t\t\t\t\tstep=\"1\" 
\t\t\t\t\t\t\t\toninput=\"document.getElementById('slider').value = this.value\">
\t\t\t\t\t\t\t<input type=\"range\" id=\"slider\"
\t\t\t\t\t\t\t\tmin=\"";
            // line 336
            echo ($context["min_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\tmax=\"";
            // line 337
            echo ($context["max_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\tstep=\"1\" 
\t\t\t\t\t\t\t\tvalue=\"";
            // line 339
            echo ($context["min_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\toninput=\"document.getElementById('sliderValue').value = this.value\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t";
        }
        // line 345
        echo "\t\t  
\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 346
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t<div class=\"total\">Total: <span data-prise=\"";
        // line 347
        echo ($context["price2"] ?? null);
        echo "\"></span></div>
\t\t\t  </div>
                  <div class=\"row\">
                    <div class=\"col-md-12\" style=\"text-align: center;\">
                      <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 351
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
                      type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">REQUIREMENTS</button>
                    ";
        // line 369
        echo "                  </div>
                </nav>
                <div class=\"tab-content\" id=\"nav-tabContent\">
                  <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"
                    tabindex=\"0\"><p>
                    ";
        // line 374
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t</p>
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 379
        echo ($context["why"] ?? null);
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 383
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
<script type=\"text/javascript\">

\$(document).ready(function () {
    if (\$('#slider').length > 0) {
        \$(\"#slider\").ionRangeSlider({
            skin: \"round\",
            min: ";
        // line 401
        echo ($context["min_value_option_slider"] ?? null);
        echo ",
            max: ";
        // line 402
        echo ($context["max_value_option_slider"] ?? null);
        echo ",
            from: ";
        // line 403
        echo ($context["min_value_option_slider"] ?? null);
        echo ",
            step: 1,
            onStart: function (data) {
                \$(\"#sliderValue\").text(data.from);
\t\t\t\t\$(this).attr('data-value',  data.from);
                updateCompletionText(data.from);
\t\t\t\tcalcPrice();
            },
            onChange: function (data) {
                \$(\"#sliderValue\").text(data.from);
\t\t\t\t\$('#slider').attr('data-value',  data.from);
                updateCompletionText(data.from);
\t\t\t\tcalcPrice();
            },
            hide_min_max: true,
        });

        function updateCompletionText(value) {
            let total, days, hours, updatedPrice;

            if (document.querySelector('.titlepage').textContent === \"WoW Solo Shuffle Wins Boost\") {
                total = value * 2;
                days = Math.floor(total / 24);
                hours = total % 24;

                if (hours > 11 && days > 1) { days++; hours = 0; }
                if (days > 1) { hours = 0; }

                let basePrice = parseFloat(\$('.option-price').data('base-prise').replace(/[^\\d.-]/g, '')) || 0;
                updatedPrice = basePrice * value;
                \$('.option-price').attr('data-prise', updatedPrice.toFixed(2));
                \$('.option-price .price-value').text(updatedPrice.toFixed(2) + '€'); // обновляем текстовое значение цены

                if (value === 1) {
                    \$('#comlete-time-text').text(\"10 hours order completion\");
                } else {
                    \$('#comlete-time-text').text((days === 0 ? \"\" : days === 1 ? \"1 day \" : days + \" days \") + (hours > 0 ? hours + \" hours\" : \"\") + \" order completion\");
                }
            } else {
                total = value * 45;
                hours = Math.floor(total / 60);
                const minutes = total % 60;

                if (hours > 15) { hours++; }

                let basePrice = parseFloat(\$('.option-price').data('base-prise').replace(/[^\\d.-]/g, '')) || 0;
                updatedPrice = basePrice * value;
                \$('.option-price').attr('data-prise', updatedPrice.toFixed(2));
               
\t\t\t\t\$('.option-price').each(function () {
\t\t\t\t\t
\t\t\t\t\tif (!\$(this).attr('data-original-prise')) {
\t\t\t\t\t\t\$(this).attr('data-original-prise', \$(this).attr('data-base-prise'));
\t\t\t\t\t}

\t\t\t\t\tconst basePrice = parseFloat(\$(this).attr('data-original-prise').replace(/[^\\d.-]/g, '')) || 0;
\t\t\t\t\tconst updatedPrice = basePrice * value;

\t\t\t\t\t\$(this).attr('data-base-prise', updatedPrice.toFixed(2));
\t\t\t\t\t\$(this).find('.price-value').text(updatedPrice.toFixed(2) + '€');
\t\t\t\t\t\$('span').attr('data-prise', updatedPrice.toFixed(2)+ '€');
\t\t\t\t\t
\t\t\t\t});

                if (value === 1) {
                    \$('#comlete-time-text').text(\"45 minutes order completion\");
                } else {
                    \$('#comlete-time-text').text(hours + \" hours o";
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
        return array (  908 => 403,  904 => 402,  900 => 401,  879 => 383,  872 => 379,  864 => 374,  857 => 369,  839 => 351,  832 => 347,  828 => 346,  825 => 345,  815 => 339,  810 => 337,  806 => 336,  798 => 331,  794 => 330,  788 => 327,  783 => 324,  780 => 323,  777 => 322,  771 => 321,  766 => 319,  750 => 305,  747 => 304,  733 => 297,  726 => 295,  719 => 294,  716 => 293,  702 => 286,  695 => 284,  688 => 283,  685 => 282,  671 => 275,  664 => 273,  657 => 272,  654 => 271,  646 => 268,  638 => 267,  634 => 266,  627 => 265,  624 => 264,  612 => 261,  606 => 260,  599 => 259,  596 => 258,  584 => 255,  578 => 254,  571 => 253,  568 => 252,  564 => 250,  555 => 246,  548 => 244,  546 => 243,  542 => 242,  536 => 241,  518 => 240,  514 => 238,  510 => 237,  506 => 236,  493 => 235,  491 => 234,  486 => 231,  482 => 229,  473 => 225,  466 => 223,  464 => 222,  460 => 221,  454 => 220,  447 => 218,  446 => 217,  445 => 216,  444 => 215,  443 => 214,  442 => 213,  441 => 212,  440 => 211,  439 => 210,  435 => 209,  431 => 208,  425 => 207,  421 => 206,  417 => 205,  412 => 202,  408 => 201,  404 => 200,  401 => 199,  398 => 198,  389 => 191,  380 => 187,  368 => 185,  366 => 184,  362 => 183,  350 => 182,  347 => 181,  343 => 180,  339 => 179,  325 => 174,  321 => 173,  317 => 172,  313 => 170,  311 => 169,  306 => 168,  301 => 167,  299 => 166,  292 => 161,  289 => 160,  276 => 158,  271 => 157,  269 => 156,  261 => 151,  254 => 147,  248 => 143,  238 => 141,  235 => 140,  225 => 138,  223 => 137,  216 => 132,  212 => 130,  201 => 128,  197 => 127,  194 => 126,  192 => 125,  176 => 112,  170 => 108,  164 => 107,  158 => 105,  150 => 103,  147 => 102,  143 => 101,  136 => 97,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}

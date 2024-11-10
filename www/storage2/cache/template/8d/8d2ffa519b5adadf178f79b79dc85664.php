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
class __TwigTemplate_7b29f86b39a0dfff5fb610ed1f8ffab4 extends Template
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
#hidden-options-checkbox, #specific-gear-slot, #specific-item-slot{
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
\ttext-transform: capitalize;
}
</style>

<div class=\"head_bg\"></div>
<div id=\"product-product\" style=\"overflow:hidden;\">
\t<section class=\"catalog\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
\t\t\t";
        // line 91
        echo ($context["column_left"] ?? null);
        echo "
          </div>
          <div class=\"col-md-8\">
            <nav class=\"breadcrumb\">
\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 96
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 96)) {
                // line 97
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 97);
                echo "\"  class=\"breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 97);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 99
                echo "\t\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 99);
                echo "</span>
\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
            </nav>

            <div class=\"pagetitle\">
              <h1 class=\"titlepage\">";
        // line 106
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
        // line 119
        if (($context["prod_category"] ?? null)) {
            // line 120
            echo "                    <div class=\"radioButton\">
\t\t\t\t\t\t";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prod_category"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prod_cat"]) {
                // line 122
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["prod_cat"], "href", [], "any", false, false, false, 122);
                echo "\" class=\"btn btn-outline-primary form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["prod_cat"], "text", [], "any", false, false, false, 122);
                echo "</a>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod_cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                    </div>
\t\t\t\t";
        }
        // line 126
        echo "


                <div class=\"boostCard\">
                  <div class=\"imageBoost\">
\t\t\t\t\t\t";
        // line 131
        if (($context["image"] ?? null)) {
            // line 132
            echo "\t\t\t\t\t\t<img src=\"";
            echo ($context["image"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"/>
\t\t\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t\t\t";
        if (($context["thumb"] ?? null)) {
            // line 135
            echo "\t\t\t\t\t\t<img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"/>
\t\t\t\t\t\t";
        }
        // line 137
        echo "                  </div>
                  <div class=\"row tOrow\">
                    <div class=\"col-md-6 tToRow\">
                      <div class=\"tTo\">
                        <span>";
        // line 141
        echo ($context["timestart"] ?? null);
        echo "</span>
                        <span>Time to start</span>
                      </div>
                      <div class=\"tToRange\">
                        <span id=\"comlete-time-text\" data-days=\"\" data-hours=\"\" data-additionals=\"\">";
        // line 145
        echo ($context["timecomplete"] ?? null);
        echo "</span>
                        <span>Time to complete</span>
                      </div>
                    </div>
                    <div class=\"col-md-6 tToBtn\">
\t\t\t\t\t\t";
        // line 150
        if (($context["tags_prod"] ?? null)) {
            // line 151
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags_prod"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag_prod"]) {
                // line 152
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "href", [], "any", false, false, false, 152);
                echo "\" class=\"btn btn-outline-primary form-check-label ";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "active", [], "any", false, false, false, 152);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag_prod"], "tag", [], "any", false, false, false, 152);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag_prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "\t\t\t\t\t\t";
        }
        // line 155
        echo "
                    </div>
                  </div>

\t\t\t\t<div id=\"product\">
\t\t\t\t";
        // line 160
        if (($context["options"] ?? null)) {
            // line 161
            echo "\t\t\t\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 162
                echo "\t\t\t\t  <h3>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162);
                echo "</h3>
\t\t\t\t\t";
                // line 163
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 163) == "select")) {
                    // line 164
                    echo "\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <div class=\"borderedRow borderedRow-";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 166);
                    echo "\">
\t\t\t\t\t\t\t<div>";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 167);
                    echo "</div>
\t\t\t\t\t\t\t<input name=\"option[";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "\" type=\"hidden\" data-prise=\"0\" data-name=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "name", [], "any", false, false, false, 168);
                    echo "\" data-value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"dropdownSelect\">
\t\t\t\t\t\t\t  <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" 
\t\t\t\t\t\t\t\taria-expanded=\"false\">0 - 1000</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<div class=\"scrollbar-inner\" data-id=\"";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 174
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 174));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 175
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-id=\"";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 176);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 176);
                        echo "\" data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 176);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176);
                        echo "\" data-prisePref=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 176);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 177
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 177);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 178
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 178)) {
                            // line 179
                            echo "\t\t\t\t\t\t\t\t\t\t  <span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 179);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 179);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 181
                        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 191) == "radio")) {
                    // line 192
                    echo "\t\t\t\t\t\t<div class=\"opt-checkbox\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 193);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 194
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 194));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 195
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbigrow\"> 
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 197);
                        echo "\" id=\"product_option_id";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 197);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 197);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"product_option_id";
                        // line 198
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 198);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 199
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 199);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 200
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 200)) {
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 201);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 201);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 203
                        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 209
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 209) == "checkbox")) {
                    // line 210
                    echo "\t\t\t\t\t\t<div class=\"opt-checkbox\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210) == "Select Dungeons")) {
                        echo "id=\"hidden-options-checkbox\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210) == "Specific Slot")) {
                        echo "id=\"specific-gear-slot\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210) == "Specific Item Slot")) {
                        echo "id=\"specific-item-slot\"";
                    }
                    echo ">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 211);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 212
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 212));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 213
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbigrow\"> 
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" ";
                        // line 215
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 215), [0 => "Select Dungeons", 1 => "Speecific Item Slot", 2 => "Specific Slot"])) {
                            echo "class=\"special-opt\"";
                        }
                        echo " name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 215);
                        echo "\" id=\"exampleRadios";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 215);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 215);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleRadios";
                        // line 216
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 216);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 217
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 217);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 218
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 218)) {
                            // line 219
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 219);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 225
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 227) == "text")) {
                    // line 228
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 228)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 229);
                    echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 230);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 230);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 233
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 233) == "textarea")) {
                    // line 234
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 234)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235);
                    echo "</label>
\t\t\t\t\t\t<textarea name=\"option[";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 236);
                    echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 239
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 239) == "file")) {
                    // line 240
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 240)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 241);
                    echo "</label>
\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 242);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                    echo "\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 246
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 246) == "date")) {
                    // line 247
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 247)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 248);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 250);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 257
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 257) == "datetime")) {
                    // line 258
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 258)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 259
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 259);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 261);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 268
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 268) == "time")) {
                    // line 269
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 269)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 270);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 270);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 272);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 279
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 279) == "choice")) {
                    // line 280
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
                    // line 294
                    echo ($context["minimum"] ?? null);
                    echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
\t\t\t\t\t";
                }
                // line 296
                echo "\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "\t\t\t\t";
        }
        // line 298
        echo "\t\t\t\t";
        if (($context["name_option_slider"] ?? null)) {
            // line 299
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"borderedRow\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
            // line 302
            echo ($context["name_option_slider"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t<input type=\"number\" id=\"sliderValue\" style=\"text-align:center; border:none; display:none\"
\t\t\t\t\t\t\t\tmin=\"";
            // line 305
            echo ($context["min_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\tmax=\"";
            // line 306
            echo ($context["max_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\tvalue=\"5\" 
\t\t\t\t\t\t\t\tstep=\"1\" 
\t\t\t\t\t\t\t\toninput=\"document.getElementById('slider').value = this.value\">
\t\t\t\t\t\t\t<input type=\"range\" id=\"slider\"
\t\t\t\t\t\t\t\tmin=\"";
            // line 311
            echo ($context["min_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\tmax=\"";
            // line 312
            echo ($context["max_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\tstep=\"1\" 
\t\t\t\t\t\t\t\tvalue=\"";
            // line 314
            echo ($context["min_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\toninput=\"document.getElementById('sliderValue').value = this.value\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t";
        }
        // line 320
        echo "\t\t  
\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 321
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t<div class=\"total\">Total: <span data-prise=\"";
        // line 322
        echo ($context["price2"] ?? null);
        echo "\"></span></div>
\t\t\t  </div>
                  <div class=\"row\">
                    <div class=\"col-md-12\" style=\"text-align: center;\">
                      <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 326
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
                    <button class=\"nav-link\" id=\"nav-contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-contact\"
                      type=\"button\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">PAYMENTS AND
                      CONTACTS</button>
                  </div>
                </nav>
                <div class=\"tab-content\" id=\"nav-tabContent\">
                  <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"
                    tabindex=\"0\"><p>
                    ";
        // line 349
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t</p>
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 354
        echo ($context["why"] ?? null);
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 358
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
\t\t\tvar price = \$(this).attr('data-prise');
\t\t\tresult = getNum(price);
\t\t}
\t\tall_price = all_price + result;
\t});
\t\$('#product input[type=\"checkbox\"]').each(function(){
\t\tvar result = 0;
\t\tif(\$(this).prop('checked')){
\t\t\tvar price = \$(this).attr('data-prise');
\t\t\tresult = getNum(price);
\t\t}
\t\tall_price = all_price + result;
\t});
\t\$('#product input[type=\"hidden\"]').each(function(){
\t\tvar result = 0;
\t\tif(\$(this).attr('data-prise') !== undefined){
\t\t\tvar price = \$(this).attr('data-prise');
\t\t\tresult = getNum(price);
\t\t\tif(\$(this).attr('data-prisePref') === '-') result = -result;
\t\t}
\t\tall_price = all_price + result;
\t});
\tif (document.getElementById('input-quantity')) {
\tvar count = parseInt(\$('#input-quantity').val());
\t} else {
\tvar count = 1;
\t}
\t//console.log(count);
\tall_price = (all_price + getNum(\$('#product .total span').attr('data-prise'))) * count;
\t//console.log(all_price);
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
\tall_price = all_price.toFixed(2);
\tif(all_price < 0) all_price = 0;
\t\$('#product .total span').html('\$'+all_price);
}
//--></script>
<script type=\"text/javascript\"><!--
\$('.borderedRow input[type=\"radio\"]:first').prop('checked', true);
\$('.dropdownSelect').each(function(){
\tvar name = \$(this).find('li:first-child a').html();
\tvar id = \$(this).find('.scrollbar-inner').attr('data-id');
\tvar thisid = \$(this).find('li:first-child a').attr('data-id');
\tvar price = \$(this).find('li:first-child a').attr('data-prise');
\tvar pricePref = \$(this).find('li:first-child a').attr('data-prisePref');

\t\$('#input-option-'+id).val(thisid);
\t\$('#input-option-'+id).attr('data-prise',price);
\t\$('#input-option-'+id).attr('data-prisePref',pricePref);
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
\tvar price = \$(this).attr('data-prise');

\t\$(this).parents('.dropdownSelect').find('.dropdown-toggle').html(name);
\t\$('#input-option-'+id).val(thisid);
\t\$('#input-option-'+id).attr('data-prise',price);
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
        // line 527
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
});

\$('.datetime').datetimepicker({
    language: '";
        // line 532
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
});

\$('.time').datetimepicker({
    language: '";
        // line 538
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

if (document.getElementById('customRange1')) {
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
}
//--></script>
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');
    \$('#review').load(this.href);
    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 619
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
    \$.ajax({
        url: 'index.php?route=product/product/write&product_id=";
        // line 623
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

<script>
setTimeout(() => {
\tdocument.querySelector('.checkbigrow').removeAttribute('style');
}, 500);
//--></script>

<script>
const startTimeRange = document.querySelector('.tTo');
const timeRange = document.querySelector('.tToRange');
const timeRangeValue = timeRange.querySelectorAll('span')[0];
const checkboxOptions = document.querySelectorAll('.opt-checkbox');
const selectOptions = document.querySelectorAll('.row input[id^=input-option]');
const price = document.querySelector('span[data-prise]');

let currency;

if(location.pathname.match('-eu')) currency = '€';
else if(location.pathname.match('-us')) currency = '\$';

if(startTimeRange) {
\tif(!startTimeRange.querySelectorAll('span')[0].innerText) startTimeRange.style.display = 'none';
}
\t
if(timeRange) {
\tif(timeRange.querySelectorAll('span')[0].innerText) {
\t\ttimeRangeValue.dataset.time = convertTimeString(timeRangeValue.innerText);
\t} else {
\t\ttimeRangeValue.dataset.time = 0;
\t\ttimeRange.style.display = 'none';
\t}
}

const paths0 = [
\t'/wow-powerleveling-boost-eu',
\t'/wow-powerleveling-boost-us',
\t'/wow-powerleveling-boost-eu/',
\t'/wow-powerleveling-boost-us/',
];

const paths1 = [
\t'/mythic-gear-boost-eu',
\t'/mythic-gear-boost-us',
\t'/mythic-gear-boost-eu/',
\t'/mythic-gear-boost-us/',
];

const paths2 = [
\t'/keystone-hero-boost-eu',
\t'/keystone-hero-boost-us',
\t'/keystone-hero-boost-eu/',
\t'/keystone-hero-boost-us/',
];

const paths3 = [
\t'/amirdrassil-heroic-boost-eu',
\t'/amirdrassil-heroic-boost-us',
\t'/amirdrassil-heroic-boost-eu/',
\t'/amirdrassil-heroic-boost-us/',
];

const paths4 = [
\t'/amirdrassil-normal-boost-eu',
\t'/amirdrassil-normal-boost-us',
\t'/amirdrassil-normal-boost-eu/',
\t'/amirdrassil-normal-boost-us/',
];

const paths5 = [
\t'/amirdrassil-mythic-boost-eu', 
\t'/amirdrassil-mythic-boost-us',
\t'/amirdrassil-mythic-boost-eu/', 
\t'/amirdrassil-mythic-boost-us/',
];

const paths6 = [
\t'/awakening-the-dragonflight-raids-boost-eu',
\t'/awakening-the-dragonflight-raids-boost-us',
\t'/awakening-the-dragonflight-raids-boost-eu/',
\t'/awakening-the-dragonflight-raids-boost-us/',
];

showHideOptions(paths2, 'Select Dungeons', 'Execution Options', [0, 0, 1]);
showHideOptions(paths3, 'Unsaved Players', 'Loot Mode', [0, 0, 1, 1]);
showHideOptions(paths4, 'Unsaved Players', 'Loot Mode', [0, 0, 1, 1]);

if(paths0.includes(location.pathname)) {

\tlet desiredId;
\tlet currentId;
\tlet defaultCurrentValue;
\tlet desiredValue = 1;
\tlet currentValue = 1;
\t
\tif(location.pathname === paths0[0]) {
\t\tdesiredId = 313;
\t\tcurrentId = 312;
\t\tdefaultCurrentValue = 1069;
\t} else if(location.pathname === paths0[1]) {
\t\tdesiredId = 347;
\t\tcurrentId = 324;
\t\tdefaultCurrentValue = 1158;
\t}
\t
\tconst desiredLevels = document.querySelectorAll('.scrollbar-inner[data-id=\"' + desiredId + '\"] a');
\tconst currentLevels = document.querySelectorAll('.scrollbar-inner[data-id=\"' + currentId + '\"] li');

\tdesiredLevels.forEach((a) => {
\t\ta.addEventListener('click', function() { 
\t\t\tdesiredValue = parseInt(this.innerText);

\t\t\tcurrentLevels.forEach((li) => {
\t\t\t\tif(li.style.display === 'none') li.style.display = '';
\t\t\t});
\t\t\tfor(let i = 0; i < currentLevels.length; i++) {
\t\t\t\tif(i >= desiredValue) {
\t\t\t\t\tcurrentLevels[i].style.display = 'none';
\t\t\t\t}
\t\t\t}

\t\t\tif(currentValue > desiredValue) { 
\t\t\t\tdocument.querySelector('#input-option-' + currentId).value = defaultCurrentValue;
\t\t\t\tdocument.querySelector('.scrollbar-inner[data-id=\"' + currentId + '\"').closest('.dropdownSelect').querySelector('button').innerText = '1';
\t\t\t}
\t\t});
\t});
\t
\tdocument.querySelectorAll('.scrollbar-inner[data-id=\"' + currentId + '\"] a').forEach((a) => {
\t\ta.addEventListener('click', function() {
\t\t\tcurrentValue = parseInt(this.innerText);
\t\t});
\t});
\t
\trunCheckboxOptions('Execution Speed', [0, 120, 180], 'radio');
\trunCheckboxOptions('Questing Options', [60, 720, 1440, 9720, 1440, 1440, 120], 'check');
\trunCheckboxOptions('The War Within Pre-Orders', [2520, 40320, 0, 1440], 'check');
\trunCheckboxOptions('Gearing Options', [60, 120, 1440], 'check'); paths0
}

if(paths1.includes(location.pathname)) {
\tif(checkboxOptions.length > 0) {
\t\tcheckboxOptions.forEach((option) => {
\t\t\tconst optionName = option.querySelector('.opt-checkbox_name');
\t\t\tconst optionCheckRowes = option.querySelectorAll('.checkbigrow');
\t\t\t
\t\t\tif(optionName.innerText === 'Specific Slot') {
\t\t\t\toption.setAttribute('id', optionName.innerText.replaceAll(' ', ''));
\t\t\t\toption.style.display = 'none';
\t\t\t} 
\t\t\t
\t\t\tif(optionName.innerText === 'Specific Item Slot') {
\t\t\t\toption.setAttribute('id', optionName.innerText.replaceAll(' ', ''));
\t\t\t\toption.style.display = 'none';
\t\t\t}
\t\t\t
\t\t\tif(optionName.innerText === 'Execution Options') {
\t\t\t\tconst labels = option.querySelectorAll('label');
\t\t\t\t
\t\t\t\tfor(let i = 0; i < labels.length; i++) {
\t\t\t\t\tlabels[i].addEventListener('click', function() {
\t\t\t\t\t\tif(i === 0) {
\t\t\t\t\t\t\tif(!document.querySelector('#SpecificSlot').style.display) document.querySelector('#SpecificSlot').style.display = 'none';
\t\t\t\t\t\t\tif(!document.querySelector('#SpecificItemSlot').style.display) document.querySelector('#SpecificItemSlot').style.display = 'none';
\t\t\t\t\t\t} else if(i === 1) {
\t\t\t\t\t\t\tif(document.querySelector('#SpecificSlot').style.display) document.querySelector('#SpecificSlot').style.display = '';
\t\t\t\t\t\t\tif(!document.querySelector('#SpecificItemSlot').style.display) document.querySelector('#SpecificItemSlot').style.display = 'none';
\t\t\t\t\t\t} else if(i === 2) {
\t\t\t\t\t\t\tif(document.querySelector('#SpecificItemSlot').style.display) document.querySelector('#SpecificItemSlot').style.display = '';
\t\t\t\t\t\t\tif(!document.querySelector('#SpecificSlot').style.display) document.querySelector('#SpecificSlot').style.display = 'none';
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t\t
\t\tselectOptions.forEach((option) => {
\t\t\tif(option.previousElementSibling.innerText === 'Mythic+ Gear Ilvl') {
\t\t\t\tconst dropdownItems = option.nextElementSibling.querySelectorAll('.dropdown-item');
\t\t\t\tlet daysCount;
\t\t\t\t
\t\t\t\tfor(let i = 0; i < 4; i++) {
\t\t\t\t\tdropdownItems[i].addEventListener('click', function() {
\t\t\t\t\t\tif(i < 2) daysCount = 10080;
\t\t\t\t\t\telse daysCount = 20160;
\t\t\t\t\t\t//timeRangeValue.innerText = daysCount + ' days';
\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(daysCount);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t}
}

if(paths5.includes(location.pathname)) {
\tif(checkboxOptions.length > 0) {
\t\tcheckboxOptions.forEach((option) => {
\t\t\tconst optionName = option.querySelector('.opt-checkbox_name');
\t\t\tconst optionCheckRowes = option.querySelectorAll('.checkbigrow');
\t\t\t
\t\t\tif(option.querySelector('.opt-checkbox_name').innerText === 'Raid Mode') { 
\t\t\t\tconst labels = option.querySelectorAll('label');
\t\t\t\tlabels[0].click();

\t\t\t\tlabels[0].addEventListener('click', function() {
\t\t\t\t\tcheckboxOptions.forEach((option) => {
\t\t\t\t\t\tif(option.querySelector('.opt-checkbox_name').innerText === 'Number of Bosses') { 
\t\t\t\t\t\t\toption.querySelectorAll('.checkbigrow').forEach((row) => {
\t\t\t\t\t\t\t\trow.style.display = '';
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t
\t\t\t\t\t\t\toption.querySelector('.checkbigrow:nth-of-type(2)').querySelector('label').click();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\tlabels[1].addEventListener('click', function() { 
\t\t\t\t\tcheckboxOptions.forEach((option) => {
\t\t\t\t\t\tif(option.querySelector('.opt-checkbox_name').innerText === 'Number of Bosses') {
\t\t\t\t\t\t\tfor(let i = 0; i < option.querySelectorAll('.checkbigrow').length; i++) {
\t\t\t\t\t\t\t\tif(i < option.querySelectorAll('.checkbigrow').length - 1) {
\t\t\t\t\t\t\t\t\toption.querySelectorAll('.checkbigrow')[i].style.display = 'none';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\toption.querySelector('.checkbigrow:last-child').querySelector('label').click();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t\t
\t\t\tif(optionName.innerText === 'Number of Bosses') {
\t\t\t\toption.querySelector('.checkbigrow:nth-of-type(2)').querySelector('label').click();
\t\t\t\toption.querySelector('.checkbigrow:last-child').querySelector('label').addEventListener('click', function() {
\t\t\t\t\tcheckboxOptions.forEach((option) => {
\t\t\t\t\t\tif(option.querySelector('.opt-checkbox_name').innerText === 'Full Loot Priority') {
\t\t\t\t\t\t\toption.style.display = '';
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\toption.querySelectorAll('.checkbigrow:not(:last-child)').forEach((row) => {
\t\t\t\t\trow.querySelector('label').addEventListener('click', function() {
\t\t\t\t\t\tcheckboxOptions.forEach((option) => {
\t\t\t\t\t\t\tif(option.querySelector('.opt-checkbox_name').innerText === 'Full Loot Priority') {
\t\t\t\t\t\t\t\toption.style.display = 'none';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t\t
\t\t\tif(optionName.innerText === 'Full Loot Priority') {
\t\t\t\toption.style.display = 'none';
\t\t\t\toptionName.style.display = 'none';
\t\t\t}
\t\t});
\t}
\t
\trunCheckboxOptions('Number of Bosses', [0, 60, 180, 180, 180, 180, 180, 180], 'radio');
}

if(paths6.includes(location.pathname)) {
\tif(checkboxOptions.length > 0) {
\t\tcheckboxOptions.forEach((option) => {
\t\t\tconst optionName = option.querySelector('.opt-checkbox_name');
\t\t\tconst optionCheckRowes = option.querySelectorAll('.checkbigrow');
\t\t\t
\t\t\tif(optionName.innerText === 'Select Awakened Raids') {
\t\t\t\toption.setAttribute('id', optionName.innerText.replaceAll(' ', ''));
\t\t\t\toptionCheckRowes[2].querySelector('.form-check').style.marginBottom = 0;
\t\t\t\toptionCheckRowes[5].querySelector('.form-check').style.marginBottom = 0;
\t\t\t\t
\t\t\t\tfor(let i = 3; i < optionCheckRowes.length; i++) {
\t\t\t\t\toptionCheckRowes[i].style.display = 'none';
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\tif(optionName.innerText === 'Awakened Raid Mode') {
\t\t\t\tfor(let i = 0; i < optionCheckRowes.length; i++) {
\t\t\t\t\toptionCheckRowes[i].querySelector('label').addEventListener('click', function() {
\t\t\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\t\tconst selectedOption = document.querySelector('#SelectAwakenedRaids');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tselectedOption.querySelectorAll('.checkbigrow').forEach((row) => {
\t\t\t\t\t\t\t\tif(!row.style.display) row.style.display = 'none';
\t\t\t\t\t\t\t\tif(row.querySelector('input').checked) row.querySelector('input').click();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif(i === 0) {
\t\t\t\t\t\t\t\tfor(let j = i; j < 3; j++) {
\t\t\t\t\t\t\t\t\tselectedOption.querySelectorAll('.checkbigrow')[j].style.display = '';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if(i === 1) {
\t\t\t\t\t\t\t\tfor(let j = 3; j < 6; j++) {
\t\t\t\t\t\t\t\t\tselectedOption.querySelectorAll('.checkbigrow')[j].style.display = '';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t} else if(i === 2) {
\t\t\t\t\t\t\t\tfor(let j = 6; j < 9; j++) {
\t\t\t\t\t\t\t\t\tselectedOption.querySelectorAll('.checkbigrow')[j].style.display = '';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, 10);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t}
}

const paths7 = [
\t'/mythic-bis-Items-boost-eu',
\t'/mythic-bis-Items-boost-us',
\t'/mythic-bis-Items-boost-eu/',
\t'/mythic-bis-Items-boost-us/',
];

if(paths7.includes(location.pathname)) {
\tif(checkboxOptions.length > 0) {
\t\tcheckboxOptions.forEach((option) => {
\t\t\tconst optionName = option.querySelector('.opt-checkbox_name');
\t\t\tconst optionCheckRowes = option.querySelectorAll('.checkbigrow');
\t\t\t
\t\t\tif(optionName.innerText === 'Specific Item Slot') {
\t\t\t\toption.querySelectorAll('label').forEach((label) => {
\t\t\t\t\tlabel.addEventListener('click', function() {
\t\t\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\t\tlet checkedCount = option.querySelectorAll('input:checked').length;
\t\t\t\t\t\t\tif(checkedCount > 0) {
\t\t\t\t\t\t\t\ttimeRange.querySelectorAll('span')[0].innerText = checkedCount * 3 + ' days';
\t\t\t\t\t\t\t\ttimeRange.style.display = '';
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\ttimeRange.querySelectorAll('span')[0].innerText = '';
\t\t\t\t\t\t\t\ttimeRange.style.display = 'none';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t});
\t}
}

const paths8 = [
\t'/mythic-keys-boost-eu',
\t'/mythic-keys-boost-us',
\t'/mythic-keys-boost-eu/',
\t'/mythic-keys-boost-us/',
];

if(paths8.includes(location.pathname)) {
\tconst numberOfRuns = document.querySelector('input[placeholder=\"Number of Runs\"]');
\t
\tif(numberOfRuns) {
\t\tnumberOfRuns.addEventListener('input', function() {
\t\t\tif(this.value) { 
\t\t\t\tif(this.value < 1) this.value = 1;
\t\t\t\telse if(this.value > 15) this.value = 15;
\t\t\t\t
\t\t\t\tlet time = 45 * this.value;
\t\t\t\t
\t\t\t\ttimeRangeValue.innerText = convertMinutes(time);
\t\t\t\tlet total = parseFloat(price.dataset.price * this.value).toFixed(2);
\t\t\t}
\t\t});
\t}
}

const paths9 = [
\t'/keystone-master-boost-eu',
\t'/keystone-master-boost-us',
\t'/keystone-master-boost-eu/',
\t'/keystone-master-boost-us/',
];

if(paths9.includes(location.pathname)) {
\tselectOptions.forEach((option) => {
\t\tif(option.previousElementSibling.innerText === 'Get Discount for M+5 Progress') {
\t\t\tconst dropdownItems = option.nextElementSibling.querySelectorAll('.dropdown-item');
\t\t\tconst daysCount = convertTimeString(timeRangeValue.innerText);
\t\t\tconst times = [0, 1440, 1440, 2880, 4320, 4320, 5760, 7200, 8640, 10800, 11520, 12960, 14400, 15840, 17280, 18711];
\t\t\t
\t\t\tif(dropdownItems.length === times.length) {
\t\t\t\tfor(let i = 0; i < dropdownItems.length; i++) {
\t\t\t\t\tdropdownItems[i].addEventListener('click', function() {
\t\t\t\t\t\tdropdownItems[i].dataset.time = times[i];
\t\t\t\t\t\tconst time = +times[i];
\t\t\t\t\t\tlet currentValue;
\t\t\t\t\t\tcurrentValue = daysCount - time;
\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(currentValue);
\t\t\t\t\t});
\t\t\t\t};
\t\t\t}
\t\t}
\t});
};

const paths10 = [
\t'/dragonflight-starter-package-eu',
\t'/dragonflight-starter-package-us',
\t'/dragonflight-starter-package-eu/',
\t'/dragonflight-starter-package-us/',
];

if(paths10.includes(location.pathname)) {
\tif(checkboxOptions.length > 0) {
\t\tcheckboxOptions.forEach((option) => {
\t\t\tconst optionName = option.querySelector('.opt-checkbox_name');
\t\t\tconst optionCheckRowes = option.querySelectorAll('.checkbigrow');
\t\t\t
\t\t\tif(optionName.innerText === 'Gearing Options') {
\t\t\t\tconst inputs = option.querySelectorAll('input[name^=option]');
\t\t\t\tlet time;
\t\t\t\t
\t\t\t\tfor(let i = 0; i < inputs.length; i++) {
\t\t\t\t\tinputs[i].addEventListener('click', function() {
\t\t\t\t\t\tlet currentTime = convertTimeString(timeRangeValue.innerText);
\t\t\t\t\t\tlet thisTime;
\t\t\t\t\t\tlet thisNumber = parseInt(this.nextElementSibling.innerText);
\t\t\t\t\t\t
\t\t\t\t\t\tif(thisNumber === 499) thisTime = 10080;
\t\t\t\t\t\telse if(thisNumber === 509) thisTime = 20160;
\t\t\t\t\t\telse if(thisNumber === 515) thisTime = 2880;
\t\t\t\t\t\telse if(thisNumber === 528) thisTime = 7200;
\t\t\t\t\t\t
\t\t\t\t\t\tif(this.checked) currentTime += thisTime;
\t\t\t\t\t\telse currentTime -= thisTime;
\t\t\t\t\t\t
\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(currentTime);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\tif(optionName.innerText === 'Questing Options') {
\t\t\t\tconst inputs = option.querySelectorAll('input[name^=option]');
\t\t\t\t
\t\t\t\tinputs[0].addEventListener('click', function() {
\t\t\t\t\tlet currentTime = parseInt(timeRangeValue.innerText);
\t\t\t\t\tlet thisTime = 35;
\t\t\t\t\t
\t\t\t\t\tif(this.checked) currentTime += thisTime;
\t\t\t\t\telse currentTime -= thisTime;
\t\t\t\t\t\t
\t\t\t\t\ttimeRangeValue.innerText = currentTime + ' days';
\t\t\t\t});
\t\t\t}
\t\t});
\t}
}

const paths11 = [
\t'/mythic-bundle-eu',
\t'/mythic-bundle-us',
\t'/mythic-bundle-eu/',
\t'/mythic-bundle-us/',
];

if(paths11.includes(location.pathname)) {
\tif(selectOptions.length > 0) {
\t\tselectOptions.forEach((option) => {
\t\t\tif(option.previousElementSibling.innerText === 'Keystone Level') { 
\t\t\t\tconst dropdownItems = option.nextElementSibling.querySelectorAll('.dropdown-item');
\t\t\t\t
\t\t\t\tfor(let i = 0; i < dropdownItems.length; i++) {
\t\t\t\t\tdropdownItems[i].addEventListener('click', function() { 
\t\t\t\t\t\tlet currentTime;
\t\t\t\t\t\tif((i % 2) !== 0) {
\t\t\t\t\t\t\tcurrentTime = 300;
\t\t\t\t\t\t} else currentTime = 120;
\t\t\t\t\t\t
\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(currentTime);
\t\t\t\t\t});
\t\t\t\t};
\t\t\t}
\t\t});
\t}
}


const paths12 = [
\t'/dragonflight-elite-pvp-gear-boost-eu',
\t'/dragonflight-elite-pvp-gear-boost-us',
\t'/dragonflight-elite-pvp-gear-boost-eu',
\t'/dragonflight-elite-pvp-gear-boost-us',
];

if(paths12.includes(location.pathname)) {
\tsessionStorage.setItem('additional', 'false');
\tcheckboxOptions[0].querySelector('input[name*=\"option\"]').checked = true;
\t
\tcheckboxOptions.forEach((option) => {
\t\tconst optionName = option.querySelector('.opt-checkbox_name');
\t\tconst optionCheckRowes = option.querySelectorAll('.checkbigrow');
\t\t
\t\tif(optionName.innerText === 'Play Method') {
\t\t\tconst times = [0, 480];
\t\t\t
\t\t\tif(times.length === optionCheckRowes.length) {
\t\t\t\tfor(let i = 0; i < optionCheckRowes.length; i++) {
\t\t\t\t\tconst input = optionCheckRowes[i].querySelector('input[name*=option]');
\t\t\t\t\t
\t\t\t\t\tinput.addEventListener('click', function() {
\t\t\t\t\t\tlet currentValue = +timeRangeValue.dataset.time; 
\t\t\t\t\t\t
\t\t\t\t\t\tif(sessionStorage.getItem('additional') === 'false') {
\t\t\t\t\t\t\tif(i === 0) currentValue = 2880;
\t\t\t\t\t\t\telse if(i === 1) currentValue = 2400;
\t\t\t\t\t\t} else if(sessionStorage.getItem('additional') === 'true') {
\t\t\t\t\t\t\tif(currentValue > 24480) {
\t\t\t\t\t\t\t\tif(i === 0) currentValue = 28800;
\t\t\t\t\t\t\t\telse if(i === 1) currentValue = 27360;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif(currentValue <= 2880) {
\t\t\t\t\t\t\t\t\tif(i === 0) currentValue = 2880;
\t\t\t\t\t\t\t\t\telse if(i === 1) currentValue = 2400;
\t\t\t\t\t\t\t\t} else currentValue = currentValue;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\ttimeRangeValue.dataset.time = currentValue;
\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(currentValue);
\t
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t\tif(optionName.innerText === 'Additional Options') {
\t\t\tconst times = [2880, 0, 7200, 14400];
\t\t\t
\t\t\tif(times.length === optionCheckRowes.length) {
\t\t\t\tfor(let i = 0; i < optionCheckRowes.length; i++) {
\t\t\t\t\tconst input = optionCheckRowes[i].querySelector('input[name*=option]');
\t\t\t\t\t
\t\t\t\t\tinput.addEventListener('click', function() {
\t\t\t\t\t\tlet currentValue = +timeRangeValue.dataset.time; 
\t\t\t\t\t\tif(currentValue < 2880) currentValue = 2880;
\t\t\t\t\t\t
\t\t\t\t\t\tif(this.checked) {
\t\t\t\t\t\t\tsessionStorage.setItem('additional', 'true');
\t\t\t\t\t\t\tcurrentValue += times[i];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tsessionStorage.setItem('additional', 'false');
\t\t\t\t\t\t\tcurrentValue -= times[i];
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif(checkboxOptions[0].querySelectorAll('input[name*=option]')[1].checked && currentValue === 2880) {
\t\t\t\t\t\t\t\tcurrentValue = 2400;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\ttimeRangeValue.dataset.time = currentValue;
\t\t\t\t\t\tif(currentValue > 24480) timeRangeValue.innerText = convertMinutes(currentValue + 1440);
\t\t\t\t\t\telse timeRangeValue.innerText = convertMinutes(currentValue);
\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t}
\t});
}

const paths13 = [
\t'/dragonflight-honor-gear-boost-eu',
\t'/dragonflight-honor-gear-boost-us',
\t'/dragonflight-honor-gear-boost-eu/',
\t'/dragonflight-honor-gear-boost-us/',
];

if(paths13.includes(location.pathname)) { 
\tcheckboxOptions[0].querySelector('input[name*=\"option\"]').checked = true;
\t
\trunCheckboxOptions('PvP Gear Options', [7200,14400], 'check');
}

const paths14 = [
\t'/full-pvp-gear-boost-eu',
\t'/full-pvp-gear-boost-us',
\t'/full-pvp-gear-boost-eu/',
\t'/full-pvp-gear-boost-us/',
];

if(paths14.includes(location.pathname)) {
\tcheckboxOptions[0].querySelector('input[name*=\"option\"]').checked = true;
\t
\trunCheckboxOptions('PvP Gear Options', [2880, 7200, 14400, 2400], 'check');
}

const paths15 = [
\t'/rbg-rating-boost-eu',
\t'/rbg-rating-boost-us',
\t'/rbg-rating-boost-eu/',
\t'/rbg-rating-boost-us/',
];

if(paths15.includes(location.pathname)) { 
\tcheckboxOptions[0].querySelector('input[name*=\"option\"]').checked = true;
\t\t
\tconst times = [
\t\t[2880, 4320, 4320, 4320, 5760, 8640, 10080, 11520, 14400, 15840, 18720],
\t\t[7200, 14400, 900, 1140, 2520, 5760, 7200, 10080, 11520, 12960, 15840],
\t\t[2, 300, 600, 840, 2280, 5760, 7200, 10080, 11520, 12960, 15840],
\t\t[0, 26, 300, 540, 1980, 4320, 5760, 8640, 10080, 11520, 14400],
\t\t[0, 0, 105, 360, 1740, 4320, 5760, 8640, 10080, 11520, 14400],
\t\t[0, 0, 0, 0, 480, 2880, 4320, 7200, 8640, 10080, 12960],
\t\t[0, 0, 0, 0, 0, 720, 2100, 4320, 5760, 7200, 10080],
\t\t[0, 0, 0, 0, 0, 0, 780, 4320, 5760, 7200, 10080],
\t\t[0, 0, 0, 0, 0, 0, 0, 1020, 11640, 4320, 7200],
\t\t[0, 0, 0, 0, 0, 0, 0, 0, 0, 1440, 4320],
\t\t[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2880],
\t];
\t
\trunDoubledSelectOptions('Current RBG Rating', 'Desired RBG Rating', times);
}

const paths16 = [
\t'/wow-solo-shuffle-boost-eu',
\t'/wow-solo-shuffle-boost-us',
\t'/wow-solo-shuffle-boost-eu/',
\t'/wow-solo-shuffle-boost-us/',
];

if(paths16.includes(location.pathname)) {
\tconst times = [
\t\t[600,720,1080,1380,2880,2880,4320,4320,4320,7200,8640,10080],
\t\t[300,420,780,1080,2580,2580,4320,4320,4320,7200,8640,10080],
\t\t[300,420,780,1080,2580,2580,4320,4320,4320,7200,8640,10080],
\t\t[240,360,720,1020,2520,2520,4320,4320,4320,7200,8640,10080],
\t\t[0,120,480,780,2280,2280,4320,4320,4320,7200,8640,10080],
\t\t[0,0,360,660,2160,2160,4320,4320,4320,7200,8640,10080],
\t\t[0,0,0,300,1800,1800,2880,2880,2880,5760,7200,8640],
\t\t[0,0,0,0,1500,1500,2880,2880,2880,5760,7200,8640],
\t\t[0,0,0,0,0,0,1440,1440,1440,4320,5760,7200],
\t\t[0,0,0,0,0,0,1440,1440,1440,4320,5760,7200],
\t\t[0,0,0,0,0,0,0,0,0,2880,4320,5760],
\t\t[0,0,0,0,0,0,0,0,0,0,1440,2880], 
\t\t[0,0,0,0,0,0,0,0,0,0,1440,2880],
\t\t[0,0,0,0,0,0,0,0,0,0,0,1440],
\t];
\t
\trunCheckboxOptions('Additional Options', [2280, 13800, 8040, 15240], 'check');
\trunDoubledSelectOptions('Current Rating', 'Desired Rating', times);
}

const paths17 = [
\t'/wow-solo-shuffle-wins-boost-eu',
\t'/wow-solo-shuffle-wins-boost-us',
\t'/wow-solo-shuffle-wins-boost-eu/',
\t'/wow-solo-shuffle-wins-boost-us/',
];

if(paths17.includes(location.pathname)) {
\tif(checkboxOptions.length > 0) checkboxOptions[0].querySelector('input[name*=\"option\"]').checked = true;
\t
\tconst formGroup = document.querySelector('.form-group');
\t
\tif(formGroup) {
\t\tconst input = formGroup.querySelector('input[name*=option]');
\t\t
\t\tlet prevValue = 0;
\t\t
\t\tinput.addEventListener('input', function() {
\t\t\tif(this.value !== '') {
\t\t\t\tif(this.value < 1) this.value = 1;
\t\t\t\tif(this.value > 15) this.value = 15;
\t\t\t\t
\t\t\t\tif(isFinite(this.value) && this.value > 5) {
\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(this.value * 120);
\t\t\t\t} else {
\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(600);
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\t
}

const paths18 = [
\t'/2v2-arena-rating-boost-eu',
\t'/2v2-arena-rating-boost-us',
\t'/2v2-arena-rating-boost-eu/',
\t'/2v2-arena-rating-boost-us/',
];

if(paths18.includes(location.pathname)) {
\tconst times = [
\t\t[960,1320,1680,2040,2400,4320,5760,5760,8640],
\t\t[180,540,900,1260,1620,2880,4320,5760,7200],
\t\t[120,480,840,1200,1560,2880,4320,5760,7200],
\t\t[60,420,780,1140,1500,2880,4320,5760,7200],
\t\t[0,360,720,1080,1440,2880,4320,5760,7200],
\t\t[0,0,360,720,1080,2880,4320,4320,7200],
\t\t[0,0,0,360,720,2640,4320,4320,7200],
\t\t[0,0,0,0,360,2280,2880,4320,5760], 
\t\t[0,0,0,0,0,1920,2880,4320,5760],
\t\t[0,0,0,0,0,0,960,1920,4320],
\t\t[0,0,0,0,0,0,0,0,1920],
\t\t[0,0,0,0,0,0,0,0,0],
\t\t[0,0,0,0,0,0,0,0,1920],
\t\t[0,0,0,0,0,0,0,0,0],
\t\t
\t];
\t
\trunCheckboxOptions('Additional Options', [3360, 0, 7680, 7680], 'check');
\trunDoubledSelectOptions('Current Rating', 'Desired Rating', times);
}

const paths19 = [
\t'/3v3-arena-rating-boost-eu',
\t'/3v3-arena-rating-boost-us',
\t'/3v3-arena-rating-boost-eu/',
\t'/3v3-arena-rating-boost-us/',
];

if(paths19.includes(location.pathname)) {
\tconst times = [
\t\t[960,1320,1680,2040,2400,4320,5760,5760,8640,11520,14400,18720],
\t\t[180,540,900,1260,1620,2880,4320,5760,7200,10080,14400,17280],
\t\t[120,480,840,1200,1560,2880,4320,5760,7200,10080,14400,17280],
\t\t[60,420,780,1140,1500,2880,4320,5760,7200,10080,14400,17280],
\t\t[0,360,720,1080,1440,2880,4320,5760,7200,10080,14400,17280],
\t\t[0,0,360,720,1080,2880,4320,4320,7200,10080,12960,17280],
\t\t[0,0,0,360,720,2640,4320,4320,7200,10080,12960,17280],
\t\t[0,0,0,0,360,2280,2880,4320,5760,10080,12960,15840], 
\t\t[0,0,0,0,0,1920,2880,4320,5760,8640,12960,15840],
\t\t[0,0,0,0,0,0,960,1920,4320,7200,10080,14400],
\t\t[0,0,0,0,0,0,0,0,1920,5760,8640,11520],
\t\t[0,0,0,0,0,0,0,0,0,2880,7200,10080],
\t\t[0,0,0,0,0,0,0,0,0,0,2880,7200],
\t\t[0,0,0,0,0,0,0,0,0,0,0,2880],
\t];
\t
\trunCheckboxOptions('Additional Options', [3360, 0, 60, 7680, 14880], 'check');
\trunDoubledSelectOptions('Current Rating', 'Desired Rating', times);
\t
}

const paths20 = [
\t'/azerothian-archives-reputation-boost-eu',
\t'/azerothian-archives-reputation-boost-us',
\t'/azerothian-archives-reputation-boost-eu/',
\t'/azerothian-archives-reputation-boost-us/',
];

if(paths20.includes(location.pathname)) {
\trunCheckboxOptions('Reputation Level', [2880, 5760, 11520, 17280], 'check');
}

const paths21 = [
\t'/dream-wardens-renown-boost-eu',
\t'/dream-wardens-renown-boost-us',
\t'/dream-wardens-renown-boost-eu/',
\t'/dream-wardens-renown-boost-us/',
];

if(paths21.includes(location.pathname)) {
\trunSelectOptions('Your Current Renown Level', [0, 1120, 2240, 3360, 4480, 5600, 6720, 7840, 8960, 10080, 11200, 12320, 13440, 14560, 15680, 16800, 17920, 19040, 20160], 0);
\trunSelectOptions('Desired Renown Level', [0, 1332, 2664, 3996, 5328, 6660, 7992, 9324, 10656, 11988, 13320, 14652, 15984, 17316, 18648, 19980], 0);
\trunCheckboxOptions('Questing Options',  [1440, 50400, 1440, 1440, 0], 'check');
}

const paths22 = [
\t'/dragonscale-expedition-reputation-boost-eu',
\t'/dragonscale-expedition-reputation-boost-us',
\t'/dragonscale-expedition-reputation-boost-eu/',
\t'/dragonscale-expedition-reputation-boost-us/',
];

if(paths22.includes(location.pathname)) {
\trunSelectOptions('Your Current Renown Level', [0, 1816,3632,5448,7264,9080,10896,12712,14528,16344,18160,19976,21792,23608,25424,27240,29056,30872,32688,34504,36320,38136,39952,41760], 0);
\trunSelectOptions('Your Current Renown Level', [0, 1816,3632,5448,7264,9080,10896,12712,14528,16344,18160,19976,21792,23608,25424,27240,29056,30872,32688,34504,36320,38136,39952,41760,0,0,0,0,0], 0);
}

const paths23 = [
\t'/iskaara-tuskarr-reputation-boost-eu',
\t'/iskaara-tuskarr-reputation-boost-us',
\t'/iskaara-tuskarr-reputation-boost-eu/',
\t'/iskaara-tuskarr-reputation-boost-us/',
];

if(paths23.includes(location.pathname)) {
\trunSelectOptions('Your Current Renown Level',  [0,1440,2880,4320,5760,7200,8640,10080,11520,12960,14400,15840,17280,18720,20160,21600,23040,25920,27360,28800,30240,31680,33120,34560,36000,37440,38880,40320, 41760], 0);
}

const paths24 = [
\t'/loamm-niffen-reputation-boost-eu',
\t'/loamm-niffen-reputation-boost-us',
\t'/loamm-niffen-reputation-boost-eu/',
\t'/loamm-niffen-reputation-boost-us/',
];

if(paths24.includes(location.pathname)) {
\trunSelectOptions('Your Current Renown Level', [0,1680,3360,5040,6720,8400,10080,11760,13440,15120,16800,18480,20160,21840,23520,25200,26880,28560,30240], 0);
}

const paths25 = [
\t'/soridormi-reputation-boost-eu',
\t'/soridormi-reputation-boost-us',
\t'/soridormi-reputation-boost-eu/',
\t'/soridormi-reputation-boost-us/',
];

if(paths25.includes(location.pathname)) {
\trunCheckboxOptions('Soridormi Options', [2520, 2520, 2520, 2520], 'check');
}

const paths26 = [
\t'/the-cobalt-assembly-reputation-boost-eu',
\t'/the-cobalt-assembly-reputation-boost-us',
\t'/the-cobalt-assembly-reputation-boost-eu/',
\t'/the-cobalt-assembly-reputation-boost-us/',
];

if(paths26.includes(location.pathname)) {
\trunCheckboxOptions('Cobalt Options', [180, 180, 180, 180], 'check');
}

const paths27 = [
\t'/the-maruuk-centaur-reputation-boost-eu',
\t'/the-maruuk-centaur-reputation-boost-us',
\t'/the-maruuk-centaur-reputation-boost-eu/',
\t'/the-maruuk-centaur-reputation-boost-us/',
];

if(paths27.includes(location.pathname)) {
\trunSelectOptions('Your Current Renown Level',  [0,1440,2880,4320,5760,7200,8640,10080,11520,12960,14400,15840,17280,18720,20160,21600,23040,25920,27360,28800,30240,31680,33120,34560,36000,37440,38880,40320, 41760], 0);
\trunSelectOptions('Your Current Renown Level', [0,1816,3632,5448,7264,9080,10896,12712,14528,16344,18160,19976,21792,23608,25424,27240,29056,30872,32688,34504,36320,38136,39952, 41760], 0);
}

const paths28 = [
\t'/valdrakken-accord-reputation-boost-eu',
\t'/valdrakken-accord-reputation-boost-us',
\t'/valdrakken-accord-reputation-boost-eu/',
\t'/valdrakken-accord-reputation-boost-us/',
];

if(paths28.includes(location.pathname)) {
\trunSelectOptions('Your Current Renown Level',  [0,1440,2880,4320,5760,7200,8640,10080,11520,12960,14400,15840,17280,18720,20160,21600,23040,25920,27360,28800,30240,31680,33120,34560,36000,37440,38880,40320, 41760], 0);
}

const paths29 = [
\t'/winterpelt-furbolg-reputation-boost-eu',
\t'/winterpelt-furbolg-reputation-boost-us',
\t'/winterpelt-furbolg-reputation-boost-eu/',
\t'/winterpelt-furbolg-reputation-boost-us/',
];

if(paths29.includes(location.pathname)) {
\trunCheckboxOptions('Winterpelt Options', [24, 24, 24, 24, 24], 'check');
}

const paths30 = [
\t'/wrathion-reputation-boost-eu',
\t'/wrathion-reputation-boost-us',
\t'/wrathion-reputation-boost-eu/',
\t'/wrathion-reputation-boost-us/',
];

if(paths30.includes(location.pathname)) {
\trunCheckboxOptions('Wrathion Options', [1440, 1440, 1440, 1440, 1440], 'check');
}

function showHideOptions(paths, hiddenOptionName, tiedOptionName, labelIndexes) {
\tif(paths.includes(location.pathname)) {
\t\tif(checkboxOptions.length > 0) {
\t\t\tcheckboxOptions.forEach((option) => {
\t\t\t\tconst optionName = option.querySelector('.opt-checkbox_name');
\t\t\t\t
\t\t\t\tif(optionName.innerText === hiddenOptionName) {
\t\t\t\t\toption.setAttribute('id', hiddenOptionName.replace(' ', ''));
\t\t\t\t\toption.classList.add('hidden');
\t\t\t\t\t
\t\t\t\t\tif(hiddenOptionName === 'Unsaved Players') {
\t\t\t\t\t\toption.querySelectorAll('.checkbigrow')[8].setAttribute('hidden', 1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif(optionName.innerText === tiedOptionName) {
\t\t\t\t\tconst labels = option.querySelectorAll('label');
\t\t\t\t\t\t
\t\t\t\t\tif(labels.length === labelIndexes.length) {  
\t\t\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\t\tconst hiddenOption = document.getElementById(hiddenOptionName.replace(' ', ''));
\t\t\t\t\t\t\tif(hiddenOption) {
\t\t\t\t\t\t\t\tfor(let i = 0; i < labels.length; i++) {
\t\t\t\t\t\t\t\t\tif(labelIndexes[i]) {
\t\t\t\t\t\t\t\t\t\tlabels[i].addEventListener('click', function() { 
\t\t\t\t\t\t\t\t\t\t\tif(hiddenOption.classList.contains('hidden')) hiddenOption.classList.remove('hidden');
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tconst pathnames = [
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-normal-boost-eu',
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-normal-boost-us',
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-heroic-boost-eu'";
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
        return array (  1120 => 623,  1113 => 619,  1029 => 538,  1020 => 532,  1012 => 527,  840 => 358,  833 => 354,  825 => 349,  799 => 326,  792 => 322,  788 => 321,  785 => 320,  775 => 314,  770 => 312,  766 => 311,  758 => 306,  754 => 305,  748 => 302,  743 => 299,  740 => 298,  737 => 297,  731 => 296,  726 => 294,  710 => 280,  707 => 279,  693 => 272,  686 => 270,  679 => 269,  676 => 268,  662 => 261,  655 => 259,  648 => 258,  645 => 257,  631 => 250,  624 => 248,  617 => 247,  614 => 246,  606 => 243,  598 => 242,  594 => 241,  587 => 240,  584 => 239,  572 => 236,  566 => 235,  559 => 234,  556 => 233,  544 => 230,  538 => 229,  531 => 228,  528 => 227,  524 => 225,  515 => 221,  508 => 219,  506 => 218,  502 => 217,  496 => 216,  478 => 215,  474 => 213,  470 => 212,  466 => 211,  453 => 210,  450 => 209,  446 => 207,  437 => 203,  430 => 201,  428 => 200,  424 => 199,  418 => 198,  404 => 197,  400 => 195,  396 => 194,  392 => 193,  389 => 192,  386 => 191,  377 => 184,  369 => 181,  362 => 179,  360 => 178,  356 => 177,  344 => 176,  341 => 175,  337 => 174,  333 => 173,  319 => 168,  315 => 167,  311 => 166,  307 => 164,  305 => 163,  300 => 162,  295 => 161,  293 => 160,  286 => 155,  283 => 154,  270 => 152,  265 => 151,  263 => 150,  255 => 145,  248 => 141,  242 => 137,  232 => 135,  229 => 134,  219 => 132,  217 => 131,  210 => 126,  206 => 124,  195 => 122,  191 => 121,  188 => 120,  186 => 119,  170 => 106,  164 => 102,  158 => 101,  152 => 99,  144 => 97,  141 => 96,  137 => 95,  130 => 91,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}

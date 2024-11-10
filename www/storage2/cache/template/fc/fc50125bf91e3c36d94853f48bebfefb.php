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
class __TwigTemplate_27617671745aeedcee1b9d6182ecba49 extends Template
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
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 209);
                    echo "</label>
\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 214
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 214) == "date")) {
                    // line 215
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 215)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 216);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 218);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 225
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 225) == "datetime")) {
                    // line 226
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 226)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 227);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 229);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 236
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 236) == "time")) {
                    // line 237
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 237)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 238);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 240);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 247
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 247) == "choice")) {
                    // line 248
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
                    // line 262
                    echo ($context["minimum"] ?? null);
                    echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
\t\t\t\t\t";
                }
                // line 264
                echo "\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "\t\t\t\t";
        }
        // line 266
        echo "\t\t\t\t";
        if (($context["name_option_slider"] ?? null)) {
            // line 267
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"borderedRow\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
            // line 270
            echo ($context["name_option_slider"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t<span id=\"sliderValue\">";
            // line 272
            echo ($context["min_value_option_slider"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"range\" id=\"slider\"
\t\t\t\t\t\t\t\t\tmin=\"";
            // line 274
            echo ($context["min_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\t\tmax=\"";
            // line 275
            echo ($context["max_value_option_slider"] ?? null);
            echo "\" 
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 276
            echo ($context["min_value_option_slider"] ?? null);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t";
        }
        // line 281
        echo "\t\t  
\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 282
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t<div class=\"total\">Total: <span data-prise=\"";
        // line 283
        echo ($context["price2"] ?? null);
        echo "\"></span></div>
\t\t\t  </div>
                  <div class=\"row\">
                    <div class=\"col-md-12\" style=\"text-align: center;\">
                      <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 287
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
                    tabindex=\"0\">
                    ";
        // line 310
        echo ($context["description"] ?? null);
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 314
        echo ($context["why"] ?? null);
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 318
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
        // line 487
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
});

\$('.datetime').datetimepicker({
    language: '";
        // line 492
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
});

\$('.time').datetimepicker({
    language: '";
        // line 498
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
        // line 579
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
    \$.ajax({
        url: 'index.php?route=product/product/write&product_id=";
        // line 583
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
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-heroic-boost-eu',
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-heroic-boost-us',
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-normal-boost-eu/',
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-normal-boost-us/',
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-heroic-boost-eu/',
\t\t\t\t\t\t\t\t\t\t\t\t'/amirdrassil-heroic-boost-us/',
\t\t\t\t\t\t\t\t\t\t\t];
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tif(pathnames.includes(location.pathname)) {
\t\t\t\t\t\t\t\t\t\t\t\tlet startIndex;
\t\t\t\t\t\t\t\t\t\t\t\tlet endIndex;
\t\t\t\t\t\t\t\t\t\t\t\tlet checked;
\t\t\t\t\t\t\t\t\t\t\t\tlet display;
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tif(this.innerText === 'Armor + Tier Priority') {
\t\t\t\t\t\t\t\t\t\t\t\t\tstartIndex = 4;
\t\t\t\t\t\t\t\t\t\t\t\t\tendIndex = 8;
\t\t\t\t\t\t\t\t\t\t\t\t\tchecked = 0;
\t\t\t\t\t\t\t\t\t\t\t\t\tdisplay = '';
\t\t\t\t\t\t\t\t\t\t\t\t} else if(this.innerText === 'Full Priority') {
\t\t\t\t\t\t\t\t\t\t\t\t\tstartIndex = 0;
\t\t\t\t\t\t\t\t\t\t\t\t\tendIndex = 4;
\t\t\t\t\t\t\t\t\t\t\t\t\tchecked = 4;
\t\t\t\t\t\t\t\t\t\t\t\t\tdisplay = 'none';
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\thiddenOption.querySelectorAll('.checkbigrow').forEach((row) => {
\t\t\t\t\t\t\t\t\t\t\t\t\tif(row.style.display === 'none') row.style.display = '';
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\thiddenOption.querySelectorAll('.form-check')[3].style.marginBottom = 0;
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tfor(let i = startIndex; i < endIndex; i++) {
\t\t\t\t\t\t\t\t\t\t\t\t\thiddenOption.querySelectorAll('.checkbigrow')[i].style.display = 'none';
\t\t\t\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tfor(let i = 0; i < 4; i++) {
\t\t\t\t\t\t\t\t\t\t\t\t\thiddenOption.querySelectorAll('label')[i].addEventListener('click', function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.querySelector('#GuaranteedItems').querySelectorAll('.checkbigrow').forEach((row) => {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trow.querySelector('.form-check').style.marginBottom = 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(!row.style.display) row.style.display = 'none';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.querySelector('#GuaranteedItems').querySelectorAll('.checkbigrow')[i].style.display = '';
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\thiddenOption.querySelectorAll('.checkbigrow')[checked].querySelector('label').click();
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tdocument.querySelector('#GuaranteedItems').style.display = display;
\t\t\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tlabels[i].addEventListener('click', function() {
\t\t\t\t\t\t\t\t\t\t\tif(!hiddenOption.classList.contains('hidden'))hiddenOption.classList.add('hidden');
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tif(!document.querySelector('#GuaranteedItems').style.display) {
\t\t\t\t\t\t\t\t\t\t\t\tdocument.querySelector('#GuaranteedItems').style.display = 'none';
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tif(document.querySelector('#UnsavedPlayers')) {
\t\t\t\t\t\t\t\t\t\t\t\tdocument.querySelector('#UnsavedPlayers').querySelectorAll('label')[8].click();
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, 100);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif(optionName.innerText === 'Guaranteed Items') {
\t\t\t\t\toption.setAttribute('id', 'GuaranteedItems');
\t\t\t\t\toption.style.display = 'none';
\t\t\t\t\toptionName.style.display = 'none';
\t\t\t\t\toption.querySelectorAll('.checkbigrow').forEach((row) => {
\t\t\t\t\t\trow.style.display = 'none';
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t}
\t}
}

function runCheckboxOptions(name, times, type) { 
\tcheckboxOptions.forEach((option) => {
\t\tconst optionName = option.querySelector('.opt-checkbox_name');
\t\tconst optionCheckRowes = option.querySelectorAll('.checkbigrow');
\t\t
\t\tchangeTimeBy(name, times, type);

\t\tfunction changeTimeBy(name, times, type) { 
\t\t\tif(optionName.innerText === name) {
\t\t\t\tif(times.length === optionCheckRowes.length) {
\t\t\t\t\tif(name === 'The War Within Pre-Orders') {
\t\t\t\t\t\toptionCheckRowes[0].querySelector('input').addEventListener('click', function() { 
\t\t\t\t\t\t\tfor(let i = 1; i < optionCheckRowes.length; i++) {
\t\t\t\t\t\t\t\toptionCheckRowes[i].classList.toggle('hidden');
\t\t\t\t\t\t\t\tif(optionCheckRowes[i].querySelector('input').checked) { 
\t\t\t\t\t\t\t\t\toptionCheckRowes[i].querySelector('input').checked = false;
\t\t\t\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(timeRangeValue.dataset.time - optionCheckRowes[i].querySelector('input').dataset.time);
\t\t\t\t\t\t\t\ttimeRangeValue.dataset.time = convertTimeString(timeRangeValue.innerText)
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}); 
\t\t\t\t\t\t
\t\t\t\t\t\tfor(let i = 1; i < optionCheckRowes.length; i++) {
\t\t\t\t\t\t\toptionCheckRowes[i].classList.add('hidden');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(type === 'check') {
\t\t\t\t\t\tfor(let i = 0; i < optionCheckRowes.length; i++) {
\t\t\t\t\t\t\tconst input = optionCheckRowes[i].querySelector('input');
\t\t\t\t\t\t\tinput.dataset.time = +times[i];
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tinput.addEventListener('click', function() {
\t\t\t\t\t\t\t\tconst time = +this.dataset.time;
\t\t\t\t\t\t\t\tlet currentValue;
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(this.checked) currentValue = +timeRangeValue.dataset.time + time; 
\t\t\t\t\t\t\t\telse currentValue = timeRangeValue.dataset.time - time;
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\ttimeRangeValue.dataset.time = currentValue;
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(currentValue);
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(optionName.innerText === 'PvP Gear Options' && paths13.includes(location.pathname)) {
\t\t\t\t\t\t\t\t\tconst inputs = option.querySelectorAll('input[name*=option]');
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tif(inputs[0].checked && inputs[1].checked) {
\t\t\t\t\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(25920);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(optionName.innerText === 'PvP Gear Options' && paths14.includes(location.pathname)) {
\t\t\t\t\t\t\t\t\tconst inputs = option.querySelectorAll('input[name*=option]');
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tif(inputs[0].checked || inputs[1].checked || inputs[2].checked) {
\t\t\t\t\t\t\t\t\t\tinputs[3].dataset.time = 2880;
\t\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t\t\tif(!inputs[0].checked && !inputs[1].checked && !inputs[2].checked && inputs[3].checked) {
\t\t\t\t\t\t\t\t\t\tinputs[3].dataset.time = 2400;
\t\t\t\t\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(2400);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif(inputs[0].checked && inputs[1].checked && inputs[2].checked && !inputs[3].checked) {
\t\t\t\t\t\t\t\t\t\tinputs[3].dataset.time = 2880;
\t\t\t\t\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(25920);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(currentValue > 0) timeRange.style.display = '';
\t\t\t\t\t\t\t\telse timeRange.style.display = 'none';
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t} else if(type === 'radio') {
\t\t\t\t\t\tlet num = 0;
               \t\t\t\t
\t\t\t\t\t\tfor(let i = 0; i < optionCheckRowes.length; i++) {
\t\t\t\t\t\t\tconst input = optionCheckRowes[i].querySelector('input');
\t\t\t\t\t\t\tinput.dataset.time = +times[i];
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tinput.addEventListener('click', function() { 
\t\t\t\t\t\t\t\tconst time = +this.dataset.time;
\t\t\t\t\t\t\t\tlet currentValue;
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(paths5.includes(location.pathname)) currentValue = convertTimeString(timeRangeValue.innerText) + time - num;
\t\t\t\t\t\t\t\telse currentValue = convertTimeString(timeRangeValue.innerText) - time + num;
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(currentValue);
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tnum = time;
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} 
\t\t\t}
\t\t}
\t});
}

function runSelectOptions(name, times, type) {
\tselectOptions.forEach((option) => {
\t\tconst dropdownItems = option.nextElementSibling.querySelectorAll('.dropdown-item'); 
\t\t
\t\tif(option.previousElementSibling.innerText === name && times.length === dropdownItems.length) {
\t\t\tlet prevValue = 0;
\t\t\t
\t\t\tfor(let i = 0; i < dropdownItems.length; i++) {
\t\t\t\tdropdownItems[i].addEventListener('click', function() { 
\t\t\t\t\tlet currentValue = +timeRangeValue.dataset.time;
\t\t\t\t\t
\t\t\t\t\tif(type) currentValue = currentValue + times[i] - prevValue;
\t\t\t\t\telse currentValue = currentValue - times[i] + prevValue;
\t\t\t\t\t
\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(currentValue);
\t\t\t\t\ttimeRangeValue.dataset.time = currentValue;
\t\t\t\t\t\t
\t\t\t\t\tprevValue = times[i];
\t\t\t\t\t\t
\t\t\t\t\tif(currentValue > 0) timeRange.style.display = '';
\t\t\t\t\telse timeRange.style.display = 'none';
\t\t\t\t\t
\t\t\t\t});
\t\t\t}
\t\t}
\t});
}

function runDoubledSelectOptions(currentName, desiredName, times) {
\tsessionStorage.setItem('currentIndex', 0);
\tsessionStorage.setItem('desiredIndex', 0);
\t
\tselectOptions.forEach((option) => {
\t\tconst dropdownItems = option.nextElementSibling.querySelectorAll('.dropdown-item'); 
\t\t\t\t
\t\tif(option.previousElementSibling.innerText === currentName) {
\t\t\tfor(let i = 0; i < dropdownItems.length; i++) {
\t\t\t\tdropdownItems[i].addEventListener('click', function() { 
\t\t\t\t\tlet desiredIndex = sessionStorage.getItem('desiredIndex') ? sessionStorage.getItem('desiredIndex') : 0; 
\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(times[i][desiredIndex]);
\t\t\t\t\tsessionStorage.setItem('currentIndex', i); console.log('current: ' + i);
\t\t\t\t\t
\t\t\t\t\tif(times[desiredIndex][i] > 0) timeRange.style.display = '';
\t\t\t\t\telse timeRange.style.display = 'none';
\t\t\t\t});
\t\t\t}
\t\t}
\t\t
\t\tif(option.previousElementSibling.innerText === desiredName) {
\t\t\tfor(let i = 0; i < dropdownItems.length; i++) {
\t\t\t\t
\t\t\t\tdropdownItems[i].addEventListener('click', function() { 
\t\t\t\tlet currentIndex = sessionStorage.getItem('currentIndex') ? sessionStorage.getItem('currentIndex') : 0;
\t\t\t\t\ttimeRangeValue.innerText = convertMinutes(times[currentIndex][i]);
\t\t\t\t\tsessionStorage.setItem('desiredIndex', i); console.log('desired: ' + i);
\t\t\t\t\t
\t\t\t\t\tif(times[currentIndex][i] > 0) timeRange.style.display = '';
\t\t\t\t\telse timeRange.style.display = 'none';
\t\t\t\t});
\t\t\t}
\t\t}
\t});
}

function convertTimeString(timeString) {
\tconst tsArr = timeString.split(' ');
\tconst numbs = [];
\tconst words = [];
\t
\tfor(let i = 0; i < tsArr.length; i++) {
\t\tif((i % 2) === 0) {
\t\t\tnumbs.push(tsArr[i]);
\t\t} else words.push(tsArr[i]);
\t}

\tlet minutes = 0;

\tif(numbs.length === words.length) {
\t\tfor(let i = 0; i < numbs.length; i++) {
\t\t\tif(words[i].match('month')) {
\t\t\t\tminutes = numbs[i] * 30 * 24 * 60;
\t\t\t} else if(words[i].match('day')) {
\t\t\t\tminutes += numbs[i] * 24 * 60;
\t\t\t} else if(words[i].match('hour')) {
\t\t\t\tminutes += numbs[i] * 60;
\t\t\t} else if(words[i].match('minute')) {
\t\t\t\tminutes += +numbs[i];
\t\t\t}
\t\t}
\t\treturn minutes;
\t} else return false;
}

function convertMinutes(numberOfMinutes) {
\tlet months = 0;
\tlet days = 0;
\tlet hours = 0;
\tlet minutes = 0;

\tif(numberOfMinutes >= 60) {
\t\thours = Math.floor(numberOfMinutes / 60);
\t\tminutes = numberOfMinutes % 60;

\t\tif(hours >= 24) {
\t\t\tdays = Math.floor(hours / 24);
\t\t\thours = hours % 24;
\t\t}

\t\tif(days >= 30) {
\t\t\tmonths = Math.floor(days / 30);
\t\t\tdays = days % 30;
\t\t}
\t} else {
\t\tminutes = numberOfMinutes;
\t}
        
\tlet monthsTmp = (months.toString().slice(-1) === '1') ? ' month ' : ' months ';
\t//let daysTmp = (days.toString().slice(-1) === '1') ? ' day ' : ' days ';
\tlet daysTmp = days.toString() === '1' ? ' day ' : ' days ';
\t//let hoursTmp = (hours.toString().slice(-1) === '1') ? ' hour ' : ' hours ';
\tlet hoursTmp = hours.toString() === '1' ? ' hour ' : ' hours ';
\t//let minutesTmp = (minutes.toString().slice(-1) === '1') ? ' minute' : ' minutes';
\tlet minutesTmp = minutes.toString() === '1' ? ' minute' : ' minutes';
        
\tlet monthsString = months ? months + monthsTmp : '';
\tlet daysString = days ? days + daysTmp : '';
\tlet hoursString = hours ? hours + hoursTmp : '';
\tlet minutesString = minutes ? minutes + minutesTmp : '';
\t
\tlet timeString;

\tif(paths29.includes(location.pathname)) timeString = monthsString + daysString + hoursString + minutesString;
\telse timeString = monthsString + daysString + hoursString;
\treturn timeString;
}
//--></script>

<script type=\"text/javascript\">

\tdocument.addEventListener('DOMContentLoaded', function () {
\t\tconst slider = document.getElementById('slider');
\t\tconst sliderValue = document.getElementById('sliderValue');

\t\tsliderValue.textContent = slider.value;

\t\tslider.addEventListener('input', function () {
\t\t\tsliderValue.textContent = this.value;
\t\t\tif(document.querySelector('.titlepage').textContent==\"WoW Solo Shuffle Wins Boost\"){
\t\t\t\tvar total = this.value*2;
\t\t\t\tvar days = Math.floor(total/24)
\t\t\t\tvar hours = total%24;
\t\t\t\tconsole.log(days,  hours);
\t\t\t\tif(hours>40&&days>1){days++;hours=0}
\t\t\t\tif(days>1){hours=0}
\t\t\t\tif(sliderValue==1){
\t\t\t\t\t\$('#comlete-time-text').text(\"10 hours order completion\");
\t\t\t\t} else{
\t\t\t\t\t\$('#comlete-time-text').text((days==0?\"\":days==1?\"1 day \":days+\" days \")+(hours>0?hours+\" hours\":\"\")+\"order completion\");
\t\t\t\t}
\t\t\t} else{
\t\t\t\tvar total = this.value*45;
\t\t\t\tvar hours = Math.floor(total/60);
\t\t\t\tvar minutes = total%60;
\t\t\t\tif(hours>15){hours++;}
\t\t\t\tif(sliderValue==1){
\t\t\t\t\t\$('#comlete-time-text').text(\"45 minutes order completion\");
\t\t\t\t} else{
\t\t\t\t\t\$('#comlete-time-text').text(hours+\" hours order completion\");
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t
\tfunction countTimeBy2Opts(optionName) {
\t\tif (optionName.includes(\"(x3 + 1 free)\")) {
\t\t\$('#comlete-time-text').text(\"3 hours order completion\");
\t\t} else if (optionName.includes(\"(x6 + 2 free)\")) {
\t\t\$('#comlete-time-text').text(\"6 hours order completion\");
\t\t} else {
\t\t\$('#comlete-time-text').text(\"3 hours order completion\"); 
\t\t}
\t}

\tfunction countTimeByProgress(value){
\t\tconst initialTime = 30; 
\t\tconst optionValue = value === \"No progress\" ? 0 : value[0]; 
\t\tconst completionTime = initialTime - optionValue + (optionValue >=4 ? 1 : 0); 

\t\tconst days = Math.floor(completionTime / 24);
\t\tconst hours = completionTime % 24;
\t\t\$('#comlete-time-text').text(days + \" day \" + (hours === 0 ? \"\" : (hours + \" hour\" + (hours !== 1 ? \"s\" : \"\"))));
\t}

\tfunction countTimeByGroupedRating(value){
\t\tconst maxDays = 30;
\t\tvar text = \"none\";
\t\tif (value == 1) {
\t\t\ttext = \"1 month\"; 
\t\t} else if (value == 2 || value == 3) {
\t\t\ttext = (maxDays - value + 1) +\" days\";
\t\t} else if (value > 3 && value <= 8) {
\t\t\ttext = (maxDays - value) + \" days\"; 
\t\t} else if (value > 8 && value <= 13) {
\t\t\ttext = (maxDays - value -1) + \" days\";
\t\t} else if (value > 13 && value <= 17) {
\t\t\ttext = (maxDays - value - 2) + \" days\";
\t\t} else if (value > 17  && value <= 22) {
\t\t\ttext = (maxDays - value - 3) + \" days\";
\t\t} else if(value == 23){
\t\t\ttext = \"3 days\";
\t\t} else if( value == 24){
\t\t\ttext = \"1 day\";
\t\t}
\t\t\$('#comlete-time-text').text(text+\" order completion\");
\t}

\tfunction countTimeByGroupedRating2(value){
\t\tconst maxDays = 23;
\t\tvar text = \"none\";
\t\tif (value == 19) {
\t\t\ttext = \"1 day\"
\t\t}
\t\telse if(value >= 1 && value < 6){
\t\t\ttext = (maxDays - value) +\" days\";
\t\t}
\t\telse if(value >= 6 && value < 16){
\t\t\ttext = (maxDays - value - 1) +\" days\";
\t\t}
\t\telse if(value >= 16 && value < 19){
\t\t\ttext =  (maxDays - value - 2) +\" days\";
\t\t}
\t\t\$('#comlete-time-text').text(text+\" order completion\");
\t}

\tfunction countTimeByIteratedRating(value){
\t\tconst maxDays = 31;
\t\tvar text = \"none\";
\t\tif (value == 1) {
\t\t\ttext = \"1 month\"
\t\t} else if(value == 29){
\t\t\ttext = \"1 day\"
\t\t}
\t\telse{
\t\t\ttext =  (maxDays - value) + \" days\";
\t\t}
\t\t\$('#comlete-time-text').text(text+\" order completion\");
\t}

\tfunction countTimeByRepLvl(values){
\t\tvar text = 0
\t\tif (values.some(function(value) { return value.includes('(Rank 2)'); })) {
        \ttext += 2; 
\t\t}
\t\tif (values.some(function(value) { return value.includes('(Rank 3)'); })) {
\t\t\ttext += 4; 
\t\t}
\t\tif (values.some(function(value) { return value.includes('(Rank 4)'); })) {
\t\t\ttext += 8; 
\t\t}
\t\tif (values.some(function(value) { return value.includes('(Rank 5)'); })) {
\t\t\ttext += 12; 
\t\t}
\t\tif(text != 0){
\t\t\t\$('.tToRange').css('display', 'flex');
\t\t\t\$('#comlete-time-text').text(text+\" days order completion\");
\t\t} else{
\t\t\t\$('.tToRange').css('display', 'none');
\t\t}
\t}

\tfunction getDaysAndHours(){
\t\tconst text = document.getElementById('comlete-time-text').textContent;
\t\tconst daysMatch = text.match(/(\\d+)\\s+day/); 
\t\tconst hoursMatch = text.match(/(\\d+)\\s+hour/); 
\t\tlet days = daysMatch ? parseInt(daysMatch[1]) : '';
\t\tlet hours = hoursMatch ? parseInt(hoursMatch[1]) : '';
\t\treturn [days, hours];
\t}

\tfunction calcTimeByAdditionals(values){
\t\tvar days =\"\";
\t\tvar hours = \"\";
\t\tvar additionalMonths = \"\";
\t\tif(\$('#comlete-time-text').attr('data-days') == \"\" && \$('#comlete-time-text').attr('data-hours') == \"\"){
\t\t\t[days, hours] = getDaysAndHours();
\t\t\t\$('#comlete-time-text').attr('data-days', days);
\t\t\t\$('#comlete-time-text').attr('data-hours', hours);
\t\t} else{
\t\t\tdays = Number(\$('#comlete-time-text').attr('data-days')) == 0 ? '' : Number(\$('#comlete-time-text').attr('data-days'));
\t\t\thours = Number(\$('#comlete-time-text').attr('data-hours'));
\t\t}
\t
\t\tvar additionals = 0
\t\tif(document.querySelector('.titlepage').textContent==\"2v2 Arena Rating Boost\"){
\t\t\tif (values.some(function(value) { return value.includes('PvP ilvl'); })) {
\t\t\t\tadditionals += Number(2); 
\t\t\t}
\t\t\tif (values.some(function(value) { return value.includes('Full Conquest'); })) {
\t\t\t\tadditionals += Number(5); 
\t\t\t}
\t\t\tif (values.some(function(value) { return value.includes('PvP Gear'); })) {
\t\t\t\tadditionals += Number(5); 
\t\t\t}
\t\t}else{
\t\t\tif (values.some(function(value) { return value.includes('PvP ilvl'); })) {
\t\t\t\tadditionals += Number(2); 
\t\t\t}
\t\t\tif (values.some(function(value) { return value.includes('Full Conquest'); })) {
\t\t\t\tadditionals += Number(5); 
\t\t\t}
\t\t\tif (values.some(function(value) { return value.includes('PvP Gear'); })) {
\t\t\t\tadditionalMonths = 2; 
\t\t\t}
\t\t}
\t
\t\t\$('#comlete-time-text').attr('data-additionals', additionals);
\t\t\$('#comlete-time-text').attr('data-additional-months', additionalMonths);
\t
\t\tdays += additionals;
\t\tconsole.log(additionalMonths,  days, hours);

\t\tif (additionalMonths > 0) {
\t\t\t\$('#comlete-time-text').text(
\t\t\t\tadditionalMonths + \" month\" + (additionalMonths > 1 ? \"s \" : \" \") +
\t\t\t\t(days > 0 ? \" \" + (days === 1 ? days + \" day \" : days + \" days \") : \"\") +
\t\t\t\t\"order completion\"
\t\t\t);
\t\t} else {
\t\t\t\$('#comlete-time-text').text(
\t\t\t\t(days > 0 ? \" \" + (days === 1 ? days + \" day \" : days + \" days \") : \"\") +
\t\t\t\t(hours === 0 ? \"\" : (hours + \" hour\" + (hours !== 1 ? \"s\" : \"\"))) +
\t\t\t\t\" order completion\"
\t\t\t);
\t\t}
\t\t
\t\t}\t

\ttry {
   \t\tvar currentRBG = \$('.dropdown-item[data-name=\"Current RBG rating\"]').data('value').split('-')[1]; 
    \tvar desiredRBG = \$('.dropdown-item[data-name=\"Desired RBG rating\"]').data('value');
\t} catch (error) {}
\t\t
\tfunction calcTimeByRatingSubstraction(current, desired){
\t\tvar ratingData;
\t\tif(document.querySelector('.titlepage').textContent==\"WoW Solo Shuffle Boost\"){
\t\t\tratingData = [
\t\t\t\t{ current: 1000, desired: 1400, time: 10 },
\t\t\t\t{ current: 1000, desired: 1500, time: 12 },
\t\t\t\t{ current: 1000, desired: 1600, time: 18 },
\t\t\t\t{ current: 1000, desired: 1700, time: 23 },
\t\t\t\t{ current: 1000, desired: 1800, time: 48 },
\t\t\t\t{ current: 1000, desired: 1900, time: 48 },
\t\t\t\t{ current: 1000, desired: 1950, time: 72 },
\t\t\t\t{ current: 1000, desired: 2000, time: 72 },
\t\t\t\t{ current: 1000, desired: 2100, time: 72 },
\t\t\t\t{ current: 1000, desired: 2200, time: 120 },
\t\t\t\t{ current: 1000, desired: 2300, time: 144 },
\t\t\t\t{ current: 1000, desired: 2400, time: 168 },

\t\t\t\t{ current: 1100, desired: 1400, time: 5 },
\t\t\t\t{ current: 1100, desired: 1500, time: 7 },
\t\t\t\t{ current: 1100, desired: 1600, time: 13 },
\t\t\t\t{ current: 1100, desired: 1700, time: 18 },
\t\t\t\t{ current: 1100, desired: 1800, time: 43 },
\t\t\t\t{ current: 1100, desired: 1900, time: 43 },
\t\t\t\t{ current: 1100, desired: 1950, time: 72 },
\t\t\t\t{ current: 1100, desired: 2000, time: 72 },
\t\t\t\t{ current: 1100, desired: 2100, time: 72 },
\t\t\t\t{ current: 1100, desired: 2200, time: 120 },
\t\t\t\t{ current: 1100, desired: 2300, time: 144 },
\t\t\t\t{ current: 1100, desired: 2400, time: 168 },
\t\t\t\t
\t\t\t\t{ current: 1200, desired: 1400, time: 5 },
\t\t\t\t{ current: 1200, desired: 1500, time: 7 },
\t\t\t\t{ current: 1200, desired: 1600, time: 13 },
\t\t\t\t{ current: 1200, desired: 1700, time: 18 },
\t\t\t\t{ current: 1200, desired: 1800, time: 43 },
\t\t\t\t{ current: 1200, desired: 1900, time: 43 },
\t\t\t\t{ current: 1200, desired: 1950, time: 72 },
\t\t\t\t{ current: 1200, desired: 2000, time: 72 },
\t\t\t\t{ current: 1200, desired: 2100, time: 72 },
\t\t\t\t{ current: 1200, desired: 2200, time: 120 },
\t\t\t\t{ current: 1200, desired: 2300, time: 144 },
\t\t\t\t{ current: 1200, desired: 2400, time: 168 },
\t\t\t\t\t
\t\t\t\t{ current: 1300, desired: 1400, time: 4 },
\t\t\t\t{ current: 1300, desired: 1500, time: 6 },
\t\t\t\t{ current: 1300, desired: 1600, time: 12 },
\t\t\t\t{ current: 1300, desired: 1700, time: 17 },
\t\t\t\t{ current: 1300, desired: 1800, time: 42 },
\t\t\t\t{ current: 1300, desired: 1900, time: 42 },
\t\t\t\t{ current: 1300, desired: 1950, time: 72 },
\t\t\t\t{ current: 1300, desired: 2000, time: 72 },
\t\t\t\t{ current: 1300, desired: 2100, time: 72 },
\t\t\t\t{ current: 1300, desired: 2200, time: 120 },
\t\t\t\t{ current: 1300, desired: 2300, time: 144 },
\t\t\t\t{ current: 1300, desired: 2400, time: 168 },
\t\t\t
\t\t\t\t{ current: 1400, desired: 1500, time: 2 },
\t\t\t\t{ current: 1400, desired: 1600, time: 8 },
\t\t\t\t{ current: 1400, desired: 1700, time: 13 },
\t\t\t\t{ current: 1400, desired: 1800, time: 38 },
\t\t\t\t{ current: 1400, desired: 1900, time: 38 },
\t\t\t\t{ current: 1400, desired: 1950, time: 72 },
\t\t\t\t{ current: 1400, desired: 2000, time: 72 },
\t\t\t\t{ current: 1400, desired: 2100, time: 72 },
\t\t\t\t{ current: 1400, desired: 2200, time: 120 },
\t\t\t\t{ current: 1400, desired: 2300, time: 144 },
\t\t\t\t{ current: 1400, desired: 2400, time: 168 },
\t\t\t\t
\t\t\t\t{ current: 1500, desired: 1600, time: 6 },
\t\t\t\t{ current: 1500, desired: 1700, time: 11 },
\t\t\t\t{ current: 1500, desired: 1800, time: 36 },
\t\t\t\t{ current: 1500, desired: 1900, time: 36 },
\t\t\t\t{ current: 1500, desired: 1950, time: 72 },
\t\t\t\t{ current: 1500, desired: 2000, time: 72 },
\t\t\t\t{ current: 1500, desired: 2100, time: 72 },
\t\t\t\t{ current: 1500, desired: 2200, time: 120 },
\t\t\t\t{ current: 1500, desired: 2300, time: 144 },
\t\t\t\t{ current: 1500, desired: 2400, time: 168 },
\t\t\t
\t\t\t\t{ current: 1600, desired: 1700, time: 5 },
\t\t\t\t{ current: 1600, desired: 1800, time: 30 },
\t\t\t\t{ current: 1600, desired: 1900, time: 30 },
\t\t\t\t{ current: 1600, desired: 1950, time: 48 },
\t\t\t\t{ current: 1600, desired: 2000, time: 48 },
\t\t\t\t{ current: 1600, desired: 2100, time: 48 },
\t\t\t\t{ current: 1600, desired: 2200, time: 96 },
\t\t\t\t{ current: 1600, desired: 2300, time: 120 },
\t\t\t\t{ current: 1600, desired: 2400, time: 144 },

\t\t\t\t{ current: 1700, desired: 1800, time: 25 },
\t\t\t\t{ current: 1700, desired: 1900, time: 25 },
\t\t\t\t{ current: 1700, desired: 1950, time: 48 },
\t\t\t\t{ current: 1700, desired: 2000, time: 48 },
\t\t\t\t{ current: 1700, desired: 2100, time: 48 },
\t\t\t\t{ current: 1700, desired: 2200, time: 96 },
\t\t\t\t{ current: 1700, desired: 2300, time: 120 },
\t\t\t\t{ current: 1700, desired: 2400, time: 144 },

\t\t\t\t{ current: 1800, desired: 1950, time: 24 },
\t\t\t\t{ current: 1800, desired: 2000, time: 24 },
\t\t\t\t{ current: 1800, desired: 2100, time: 24 },
\t\t\t\t{ current: 1800, desired: 2200, time: 72 },
\t\t\t\t{ current: 1800, desired: 2300, time: 96 },
\t\t\t\t{ current: 1800, desired: 2400, time: 120 },
\t\t\t\t
\t\t\t\t{ current: 1900, desired: 1950, time: 24 },
\t\t\t\t{ current: 1900, desired: 2000, time: 24 },
\t\t\t\t{ current: 1900, desired: 2100, time: 24 },
\t\t\t\t{ current: 1900, desired: 2200, time: 72 },
\t\t\t\t{ current: 1900, desired: 2300, time: 96 },
\t\t\t\t{ current: 1900, desired: 2400, time: 120 },
\t\t\t\t
\t\t\t\t{ current: 2000, desired: 2200, time: 48 },
\t\t\t\t{ current: 2000, desired: 2300, time: 72 },
\t\t\t\t{ current: 2000, desired: 2400, time: 96 },

\t\t\t\t{ current: 2100, desired: 2200, time: 48 },
\t\t\t\t{ current: 2100, desired: 2300, time: 72 },
\t\t\t\t{ current: 2100, desired: 2400, time: 96 },

\t\t\t\t{ current: 2200, desired: 2300, time: 24 },
\t\t\t\t{ current: 2200, desired: 2400, time: 48 },

\t\t\t\t{ current: 2300, desired: 2400, time: 24 },
\t\t\t\t
\t\t\t];
\t\t}else{
\t\t\t\tratingData = [
\t\t\t\t{ current: 1000, desired: 1100, time: 48 },
\t\t\t\t{ current: 1000, desired: 1200, time: 72 },
\t\t\t\t{ current: 1000, desired: 1300, time: 72 },
\t\t\t\t{ current: 1000, desired: 1400, time: 72 },
\t\t\t\t{ current: 1000, desired: 1500, time: 96 },
\t\t\t\t{ current: 1000, desired: 1600, time: 144 },
\t\t\t\t{ current: 1000, desired: 1700, time: 168 },
\t\t\t\t{ current: 1000, desired: 1800, time: 216 },
\t\t\t\t{ current: 1000, desired: 1900, time: 240 },
\t\t\t\t{ current: 1000, desired: 2000, time: 264 },
\t\t\t\t{ current: 1000, desired: 2100, time: 312 },

\t\t\t\t{ current: 1100, desired: 1100, time: 5 },
\t\t\t\t{ current: 1100, desired: 1200, time: 10 },
\t\t\t\t{ current: 1100, desired: 1300, time: 15 },\t
\t\t\t\t{ current: 1100, desired: 1400, time: 19 },
\t\t\t\t{ current: 1100, desired: 1500, time: 42 },
\t\t\t\t{ current: 1100, desired: 1600, time: 96 },
\t\t\t\t{ current: 1100, desired: 1700, time: 120 },
\t\t\t\t{ current: 1100, desired: 1800, time: 168 },
\t\t\t\t{ current: 1100, desired: 1900, time: 192 },
\t\t\t\t{ current: 1100, desired: 2000, time: 216 },
\t\t\t\t{ current: 1100, desired: 2100, time: 264 },
\t\t\t\t
\t\t\t\t{ current: 1200, desired: 1200, time: 5 },\t
\t\t\t\t{ current: 1200, desired: 1300, time: 10 },\t
\t\t\t\t{ current: 1200, desired: 1400, time: 14 },
\t\t\t\t{ current: 1200, desired: 1500, time: 38 },
\t\t\t\t{ current: 1200, desired: 1600, time: 96 },
\t\t\t\t{ current: 1200, desired: 1700, time: 120 },
\t\t\t\t{ current: 1200, desired: 1800, time: 168 },
\t\t\t\t{ current: 1200, desired: 1900, time: 192 },
\t\t\t\t{ current: 1200, desired: 2000, time: 216},
\t\t\t\t{ current: 1200, desired: 2100, time: 264},
\t\t\t\t\t
\t\t\t\t{ current: 1300, desired: 1300, time: 5 },\t
\t\t\t\t{ current: 1300, desired: 1400, time: 9 },
\t\t\t\t{ current: 1300, desired: 1500, time: 33 },
\t\t\t\t{ current: 1300, desired: 1600, time: 72 },
\t\t\t\t{ current: 1300, desired: 1700, time: 96 },
\t\t\t\t{ current: 1300, desired: 1800, time: 144 },
\t\t\t\t{ current: 1300, desired: 1900, time: 168 },
\t\t\t\t{ current: 1300, desired: 2000, time: 192},
\t\t\t\t{ current: 1300, desired: 2100, time: 216},
\t\t\t
\t\t\t\t{ current: 1400, desired: 1400, time: 6 },
\t\t\t\t{ current: 1400, desired: 1500, time: 29 },
\t\t\t\t{ current: 1400, desired: 1600, time: 72 },
\t\t\t\t{ current: 1400, desired: 1700, time: 96 },
\t\t\t\t{ current: 1400, desired: 1800, time: 144},
\t\t\t\t{ current: 1400, desired: 1900, time: 168 },
\t\t\t\t{ current: 1400, desired: 2000, time: 192 },
\t\t\t\t{ current: 1400, desired: 2100, time: 216 },
\t\t\t\t
\t\t\t\t{ current: 1500, desired: 1500, time: 8 },
\t\t\t\t{ current: 1500, desired: 1600, time: 48 },
\t\t\t\t{ current: 1500, desired: 1700, time: 72 },
\t\t\t\t{ current: 1500, desired: 1800, time: 120 },
\t\t\t\t{ current: 1500, desired: 1900, time: 144 },
\t\t\t\t{ current: 1500, desired: 2000, time: 168 },
\t\t\t\t{ current: 1500, desired: 2100, time: 216 },
\t\t\t
\t\t\t\t{ current: 1600, desired: 1600, time: 12 },
\t\t\t\t{ current: 1600, desired: 1700, time: 35 },
\t\t\t\t{ current: 1600, desired: 1800, time: 72 },
\t\t\t\t{ current: 1600, desired: 1900, time: 96 },
\t\t\t\t{ current: 1600, desired: 2000, time: 120 },
\t\t\t\t{ current: 1600, desired: 2100, time: 168 },

\t\t\t\t{ current: 1700, desired: 1700, time: 13 },
\t\t\t\t{ current: 1700, desired: 1800, time: 72 },
\t\t\t\t{ current: 1700, desired: 1900, time: 96 },
\t\t\t\t{ current: 1700, desired: 2000, time: 120 },
\t\t\t\t{ current: 1700, desired: 2100, time: 168 },

\t\t\t\t{ current: 1800, desired: 1800, time: 17 },
\t\t\t\t{ current: 1800, desired: 1900, time: 41 },
\t\t\t\t{ current: 1800, desired: 2000, time: 72 },
\t\t\t\t{ current: 1800, desired: 2100, time: 120 },
\t\t\t\t
\t\t\t\t{ current: 1900, desired: 2000, time: 24 },
\t\t\t\t{ current: 1900, desired: 2100, time: 72 },

\t\t\t\t{ current: 2000, desired: 2100, time: 48 },
\t\t\t\t
\t\t\t];
\t\t}
\t\t
\t\tconst result = ratingData.find(item => item.current == current && item.desired == desired);
\t\treturn result ? result.time : null;  
\t}

\tfunction calcTimeBy3Opts(values) {
\t\tconst weights = {
\t\t\t'1-70 Leveling': 0,
\t\t\t'Khaz Algar Storyline': 0,
\t\t\t'TWW Campaign': 0,
\t\t\t'Skyriding Full Progress': 1,
\t\t\t'Loremaster of Khaz Algar': 4,
\t\t\t'Conquest Gear': 5,
\t\t\t'Honor Gear': 2,
\t\t\t'Nerub-ar Heroic + Free Normal': 1
\t\t};

\t\tconst specialCombo = ['1-70 Leveling', 'Khaz Algar Storyline', 'TWW Campaign'];
\t
\t\tconst isSpecialComboSelected = specialCombo.every(option => values.includes(option));

\t\tconst totalWeight = values.reduce((total, element) => {
\t\t\tconst weight = weights[element] || 0; 
\t\t\treturn total + weight;
\t\t}, 0);

\t\tlet result = totalWeight;
\t\tif (isSpecialComboSelected) {
\t\t\tresult += 1;
\t\t}

\t\tresult += 4;

\t\treturn result;
\t}

\tfunction calcTimeBy3or4Options(values) {
\t\tconst hourWeights = {
\t\t\t'Unlock Open World Locations': 1,
\t\t\t'Khaz Algar Storyline': 12,
\t\t\t'TWW Campaign': 24,
\t\t\t'Skyriding Full Progress': 2,
\t\t\t'Loremaster of Khaz Algar': 4 * 24,
\t\t\t'Khaz Algar Flight Master': 2,
\t\t\t'Earthen Unlock': 8,

\t\t\t'593 ilvl PvE Gear': 1,
\t\t\t'603 ilvl PvE Gear': 7 * 24,
\t\t\t'626 ilvl Honor Gear': 48,
\t\t\t'639 ilvl Conquest Gear': 5 * 24,

\t\t\t'All Heroic Dungeons': 8,
\t\t\t'8/8 Mythic+0': 8,
\t\t\t'Unlock Delves Tier 8': 5,
\t\t\t'3+1 Delves Tier 8 Runs': 3,
\t\t\t'Mythic+5 Run': 0.75,
\t\t\t'Mythic+10 Run': 0.75,
\t\t\t'Nerub-ar Heroic + Free Normal': 7 * 24,
\t\t};

\t\tconst allHours = values.reduce((total, element) => {
\t\t\tconst weight = hourWeights[element] || 0; 
\t\t\treturn total + weight;
\t\t}, 0);

\t\tconst extra_days = Math.floor(allHours / 24);
\t\tconst extra_hours = Math.floor(allHours % 24);
\t\tconst extra_minutes = Math.round((allHours % 1) * 60);

\t\t\$('#comlete-time-text').attr('data-extra-days', extra_days);
\t\t\$('#comlete-time-text').attr('data-extra-hours', extra_hours);
\t\t\$('#comlete-time-text').attr('data-extra-minutes', extra_minutes);

\t\tconst hours = parseInt(\$('#comlete-time-text').attr('data-hours')) || 12; 
\t\tconst minutes = parseInt(\$('#comlete-time-text').attr('data-minutes')) || 0; 
\t
\t\tlet totalDays = extra_days;
\t\tlet totalHours = extra_hours + hours;
\t\tlet totalMinutes = extra_minutes + minutes;

\t\tif (totalMinutes >= 60) {
\t\t\ttotalHours += Math.floor(totalMinutes / 60);
\t\t\ttotalMinutes = totalMinutes % 60;
\t\t}

\t\tif(totalHours>=12&&totalDays>0){
\t\t\ttotalDays++;
\t\t\ttotalHours=0;
\t\t}
\t\tconsole.log(totalDays, totalHours, totalMinutes)
\t\t
\t\tlet output = (totalDays > 0 ? \" \" + (totalDays === 1 ? totalDays + \" day \" : totalDays + \" days \") : \"\")+
\t\t\t\t\t(totalHours > 0 ? \" \" + (totalHours === 1 ? totalHours + \" hour \" : totalHours + \" hours \") : \"\");
\t\tif(totalDays==0){
\t\t\toutput +=(totalMinutes === 0 ? \"\" : (totalMinutes + \" minute\" + (totalMinutes !== 1 ? \"s\" : \"\")));
\t\t}\t
\t\t\t\t 
\t\t
\t\tconsole.log(output)
\t\t\$('#comlete-time-text').text(output+ \" order completion\");
\t}


\tfunction calcTimeByRenownLvl(current, desired){ 
\t\tconsole.log(current, desired)
\t\tconst levelData = [
\t\t\t{ desired: 5,  current: 1, time: '3 hours' },
\t\t\t{ desired: 5,  current: 2, time: '2 hours' },
\t\t\t{ desired: 5,  current: 3, time: '1 hour 1 minute' }, 
\t\t\t{ desired: 5,  current: 4, time: '1 hour 1 minute' },
\t\t\t{ desired: 6,  current: 1, time: '4 hours' },
\t\t\t{ desired: 6,  current: 2, time: '3 hours' },
\t\t\t{ desired: 6,  current: 3, time: '2 hours' },
\t\t\t{ desired: 6,  current: 4, time: '2 hours' },
\t\t\t{ desired: 6,  current: 5, time: '1 hour 1 minute' },
\t\t\t{ desired: 7,  current: 1, time: '5 hours' },
\t\t\t{ desired: 7,  current: 2, time: '4 hours' },
\t\t\t{ desired: 7,  current: 3, time: '3 hours' },
\t\t\t{ desired: 7,  current: 4, time: '3 hours' },
\t\t\t{ desired: 7,  current: 5, time: '2 hours' },
\t\t\t{ desired: 7,  current: 6, time: '1  hour 1 minute' },
\t\t\t{ desired: 8,  current: 1, time: '6 hours' },
\t\t\t{ desired: 8,  current: 2, time: '5 hours' },
\t\t\t{ desired: 8,  current: 3, time: '4 hours' },
\t\t\t{ desired: 8,  current: 4, time: '4 hours' },
\t\t\t{ desired: 8,  current: 5, time: '3 hours' },
\t\t\t{ desired: 8,  current: 6, time: '2 hours' },
\t\t\t{ desired: 8,  current: 7, time: '1 hours  1 minute' },
\t\t\t{ desired: 9,  current: 1, time: '1 day' },
\t\t\t{ desired: 9,  current: 2, time: '23 hours' },
\t\t\t{ desired: 9,  current: 3, time: '22 hours' },
\t\t\t{ desired: 9,  current: 4, time: '22 hours' },
\t\t\t{ desired: 9,  current: 5, time: '21 hours' },
\t\t\t{ desired: 9,  current: 6, time: '20 hours' },
\t\t\t{ desired: 9,  current: 7, time: '19 hours' },
\t\t\t{ desired: 9,  current: 8, time: '18 hours' },
\t\t\t{ desired: 10,  current: 1, time: '1 day 18 hours' },
\t\t\t{ desired: 10,  current: 2, time: '1 day 17 hours' },
\t\t\t{ desired: 10,  current: 3, time: '1 day 16 hours' },
\t\t\t{ desired: 10,  current: 4, time: '1 day 16 hours' },
\t\t\t{ desired: 10,  current: 5, time: '1 dday 14 hours' },
\t\t\t{ desired: 10,  current: 6, time: '1 day 13 hours' },
\t\t\t{ desired: 10,  current: 7, time: '1 day 13 hours' },
\t\t\t{ desired: 10,  current: 8, time: '1 day 11 hours' },
\t\t\t{ desired: 10,  current: 9, time: '18 hours' },
\t\t\t{ desired: 11,  current: 1, time: '3 days' },
\t\t\t{ desired: 11,  current: 2, time: '3 days' },
\t\t\t{ desired: 11,  current: 3, time: '3 days' },
\t\t\t{ desired: 11,  current: 4, time: '3 days' },
\t\t\t{ desired: 11,  current: 5, time: '3 days' },
\t\t\t{ desired: 11,  current: 6, time: '3 days' },
\t\t\t{ desired: 11,  current: 7, time: '3 days' },
\t\t\t{ desired: 11,  current: 8, time: '3 days' },
\t\t\t{ desired: 11,  current: 9, time: '1 day 23 hours' },
\t\t\t{ desired: 11,  current: 10, time: '1 day 6 hours' },
\t\t\t{ desired: 12,  current: 1, time: '4 days' },
\t\t\t{ desired: 12,  current: 2, time: '4  days' },
\t\t\t{ desired: 12,  current: 3, time: '4 days' },
\t\t\t{ desired: 12,  current: 4, time: '4 days' },
\t\t\t{ desired: 12,  current: 5, time: '4 days' },
\t\t\t{ desired: 12,  current: 6, time: '4 days' },
\t\t\t{ desired: 12,  current: 7, time: '4 days' },
\t\t\t{ desired: 12,  current: 8, time: '4 days' },
\t\t\t{ desired: 12,  current: 9, time: '3 days' },
\t\t\t{ desired: 12,  current: 10, time: '2 days' },
\t\t\t{ desired: 12,  current: 11, time: '24 hours' },
\t\t\t{ desired: 13,  current: 1, time: '5 days' },
\t\t\t{ desired: 13,  current: 2, time: '5 days' },
\t\t\t{ desired: 13,  current: 3, time: '5 days' },
\t\t\t{ desired: 13,  current: 4, time: '5 days' },
\t\t\t{ desired: 13,  current: 5, time: '5 days' },
\t\t\t{ desired: 13,  current: 6, time: '5 days' },
\t\t\t{ desired: 13,  current: 7, time: '5 days' },
\t\t\t{ desired: 13,  current: 8, time: '5 days' },
\t\t\t{ desired: 13,  current: 9, time: '4 days' },
\t\t\t{ desired: 13,  current: 10, time: '3 days' },
\t\t\t{ desired: 13,  current: 11, time: '1 day 23 hours' },
\t\t\t{ desired: 13,  current: 12, time: '24 hours' },
\t\t\t{ desired: 14,  current: 1, time: '7 days' },
\t\t\t{ desired: 14,  current: 2, time: '7 days' },
\t\t\t{ desired: 14,  current: 3, time: '7 days' },
\t\t\t{ desired: 14,  current: 4, time: '7 days' },
\t\t\t{ desired: 14,  current: 5, time: '7 days' },
\t\t\t{ desired: 14,  current: 6, time: '7 days' },
\t\t\t{ desired: 14,  current: 7, time: '7 days' },
\t\t\t{ desired: 14,  current: 8, time: '7 days' },
\t\t\t{ desired: 14,  current: 9, time: '5 days' },
\t\t\t{ desired: 14,  current: 10, time: '5 days' },
\t\t\t{ desired: 14,  current: 11, time: '4 days' },
\t\t\t{ desired: 14,  current: 12, time: '3 days' },
\t\t\t{ desired: 14,  current: 13, time: '2 days' },
\t\t\t{ desired: 15,  current: 1, time: '8 days' },
\t\t\t{ desired: 15,  current: 2, time: '8 days' },
\t\t\t{ desired: 15,  current: 3, time: '8 days' },
\t\t\t{ desired: 15,  current: 4, time: '8 days' },
\t\t\t{ desired: 15,  current: 5, time: '8 days' },
\t\t\t{ desired: 15,  current: 6, time: '8 days' },
\t\t\t{ desired: 15,  current: 7, time: '8 days' },
\t\t\t{ desired: 15,  current: 8, time: '8 days' },
\t\t\t{ desired: 15,  current: 9, time: '7 days' },
\t\t\t{ desired: 15,  current: 10, time: '6 days' },
\t\t\t{ desired: 15,  current: 11, time: '5 days' },
\t\t\t{ desired: 15,  current: 12, time: '4 days' },
\t\t\t{ desired: 15,  current: 13, time: '3 days' },
\t\t\t{ desired: 15,  current: 14, time: '24 hours' },
\t\t\t{ desired: 16,  current: 1, time: '9 days' },
\t\t\t{ desired: 16,  current: 2, time: '9 days' },
\t\t\t{ desired: 16,  current: 3, time: '9 days' },
\t\t\t{ desired: 16,  current: 4, time: '9 days' },
\t\t\t{ desired: 16,  current: 5, time: '9 days' },
\t\t\t{ desired: 16,  current: 6, time: '9 days' },
\t\t\t{ desired: 16,  current: 7, time: '9 days' },
\t\t\t{ desired: 16,  current: 8, time: '9 days' },
\t\t\t{ desired: 16,  current: 9, time: '8 days' },
\t\t\t{ desired: 16,  current: 10, time: '7 days' },
\t\t\t{ desired: 16,  current: 11, time: '6 days' },
\t\t\t{ desired: 16,  current: 12, time: '5 days' },
\t\t\t{ desired: 16,  current: 13, time: '4 days' },
\t\t\t{ desired: 16,  current: 14, time: '1 day 23 hours' },
\t\t\t{ desired: 16,  current: 15, time: '24 hours' },
\t\t\t{ desired: 17,  current: 1, time: '10 days' },
\t\t\t{ desired: 17,  current: 2, time: '10 days' },
\t\t\t{ desired: 17,  current: 3, time: '10 days' },
\t\t\t{ desired: 17,  current: 4, time: '10 days' },
\t\t\t{ desired: 17,  current: 5, time: '10 days' },
\t\t\t{ desired: 17,  current: 6, time: '10 days' },
\t\t\t{ desired: 17,  current: 7, time: '10 days' },
\t\t\t{ desired: 17,  current: 8, time: '10 days' },
\t\t\t{ desired: 17,  current: 9, time: '9 days' },
\t\t\t{ desired: 17,  current: 10, time: '8 days' },
\t\t\t{ desired: 17,  current: 11, time: '7 days' },
\t\t\t{ desired: 17,  current: 12, time: '6 days' },
\t\t\t{ desired: 17,  current: 13, time: '5 days' },
\t\t\t{ desired: 17,  current: 14, time: '4 days' },
\t\t\t{ desired: 17,  current: 15, time: '1 day 23 hours' },
\t\t\t{ desired: 17,  current: 16, time: '24 hours' },
\t\t\t{ desired: 18,  current: 1, time: '11 days' },
\t\t\t{ desired: 18,  current: 2, time: '11 days' },
\t\t\t{ desired: 18,  current: 3, time: '11 days' },
\t\t\t{ desired: 18,  current: 4, time: '11 days' },
\t\t\t{ desired: 18,  current: 5, time: '11 days' },
\t\t\t{ desired: 18,  current: 6, time: '11 days' },
\t\t\t{ desired: 18,  current: 7, time: '11 days' },
\t\t\t{ desired: 18,  current: 8, time: '11 days' },
\t\t\t{ desired: 18,  current: 9, time: '10 days' },
\t\t\t{ desired: 18,  current: 10, time: '9 days' },
\t\t\t{ desired: 18,  current: 11, time: '8 days' },
\t\t\t{ desired: 18,  current: 12, time: '7 days' },
\t\t\t{ desired: 18,  current: 13, time: '6 days' },
\t\t\t{ desired: 18,  current: 14, time: '4 days' },
\t\t\t{ desired: 18,  current: 15, time: '3 days' },
\t\t\t{ desired: 18,  current: 16, time: '1 day 23 hours' },
\t\t\t{ desired: 18,  current: 17, time: '24 hours' },
\t\t\t{ desired: 19,  current: 1, time: '13 days' },
\t\t\t{ desired: 19,  current: 2, time: '13 days' },
\t\t\t{ desired: 19,  current: 3, time: '13 days' },
\t\t\t{ desired: 19,  current: 4, time: '13 days' },
\t\t\t{ desired: 19,  current: 5, time: '13 days' },
\t\t\t{ desired: 19,  current: 6, time: '13 days' },
\t\t\t{ desired: 19,  current: 7, time: '13 days' },
\t\t\t{ desired: 19,  current: 8, time: '13 days' },
\t\t\t{ desired: 19,  current: 9, time: '11 days' },
\t\t\t{ desired: 19,  current: 10, time: '11 days' },
\t\t\t{ desired: 19,  current: 11, time: '10 days' },
\t\t\t{ desired: 19,  current: 12, time: '9 days' },
\t\t\t{ desired: 19,  current: 13, time: '7 days' },
\t\t\t{ desired: 19,  current: 14, time: '6 days' },
\t\t\t{ desired: 19,  current: 15, time: '5 days' },
\t\t\t{ desired: 19,  current: 16, time: '4 days' },
\t\t\t{ desired: 19,  current: 17, time: '3 days' },
\t\t\t{ desired: 19,  current: 18, time: '2 days' },
\t\t\t{ desired: 20,  current: 1, time: '14 days' },
\t\t\t{ desired: 20,  current: 2, time: '14 days' },
\t\t\t{ desired: 20,  current: 3, time: '14 days' },
\t\t\t{ desired: 20,  current: 4, time: '14 days' },
\t\t\t{ desired: 20,  current: 5, time: '14 days' },
\t\t\t{ desired: 20,  current: 6, time: '14 days' },
\t\t\t{ desired: 20,  current: 7, time: '14 days' },
\t\t\t{ desired: 20,  current: 8, time: '14 days' },
\t\t\t{ desired: 20,  current: 9, time: '13 days' },
\t\t\t{ desired: 20,  current: 10, time: '12 days' },
\t\t\t{ desired: 20,  current: 11, time: '11 days' },
\t\t\t{ desired: 20,  current: 12, time: '10 days' },
\t\t\t{ desired: 20,  current: 13, time: '9 days' },
\t\t\t{ desired: 20,  current: 14, time: '7 days' },
\t\t\t{ desired: 20,  current: 15, time: '6 days' },
\t\t\t{ desired: 20,  current: 16, time: '5 days' },
\t\t\t{ desired: 20,  current: 17, time: '4 days' },
\t\t\t{ desired: 20,  current: 18, time: '3 days' },
\t\t\t{ desired: 20,  current: 19, time: '1 day 5 hours' }
\t\t];
\t\t
\t\tconst result = levelData.find(item => item.current == current && item.desired == desired);
\t\treturn result ? result.time : null; 

\t}

\tfunction calcTimeByLevelSubstraction(current, desired){
\t\tconst ratingData = [
\t\t\t{ current: [1,9], desired: 10, time: 30 },
\t\t\t{ current: [1,19], desired: 20, time: 60},
\t\t\t{ current: [1,19], desired: 30, time: 60},
\t\t\t{ current: [1,19], desired: 40, time: 60},
\t\t\t{ current: [1,19], desired: 50, time: 120},
\t\t\t{ current: [1,19], desired: 60, time: 120},
\t\t\t{ current: [1,19], desired: 70, time: 180 },
\t\t\t{ current: [1,19], desired: 80, time: 15*60 },
\t\t\t
\t\t\t{ current: [10,19], desired: 20, time: 60},

\t\t\t{ current: [20,29], desired: 30, time: 5 },
\t\t\t{ current: [20,29], desired: 40, time: 5 },
\t\t\t{ current: [20,29], desired: 50, time: 66},
\t\t\t{ current: [20,29], desired: 60, time: 66},
\t\t\t{ current: [20,69], desired: 70, time: 120 },
\t\t\t{ current: [20,69], desired: 80, time: 14*60 },

\t\t\t{ current: [30,49], desired: 50, time: 60},
\t\t\t{ current: [30,59], desired: 60, time: 60},
\t\t\t{ current: [30,69], desired: 70, time: 120 },
\t\t\t{ current: [30,69], desired: 80, time: 14*60 },
\t\t\t
\t\t\t{ current: [70], desired: 80, time: 12*60},
\t\t\t{ current: [71,79], desired: 80, time: 9*60},
\t\t\t
\t\t];
\t\t
\t\tconst result = ratingData.find(entry => 
\t\t\tentry.desired === desired && 
\t\t\t(Array.isArray(entry.current) ? current >= entry.current[0] && current <= entry.current[1] : current === entry.current)
\t\t);

\t\tif (result) {
\t\t\tvar hours = Math.floor(result.time / 60);
\t\t\tvar minutes = result.time % 60;
\t\t\t
\t\t\t\$('#comlete-time-text').attr('data-hours', hours);
\t\t\t\$('#comlete-time-text').attr('data-minutes', minutes);

\t\t\tconst extraHours = parseInt(\$('#comlete-time-text').attr('data-extra-hours')) || 0; 
\t\t\tconst extraMinutes = parseInt(\$('#comlete-time-text').attr('data-extra-minutes')) || 0; 
\t\t\tconst extraDays = parseInt(\$('#comlete-time-text').attr('data-extra-minutes')) || 0; 
\t\t\thours +=  extraHours;
\t\t\tminutes += extraMinutes;
\t\t\tif(hours>=12 && days>0){
\t\t\t\tdays++;
\t\t\t\thours=0;
\t\t\t}
\t\t\t
\t\t\tvar text = \t(hours > 0 ? \" \" + (hours === 1 ? hours + \" hour \" : hours + \" hours \") : \"\") +
\t\t\t\t\t(minutes === 0 ? \"\" : (minutes + \" minute\" + (minutes !== 1 ? \"s\" : \"\")));
\t\t\t\t
\t\t\tif (minutes>0){
\t\t\t\ttext += (\" \"+minutes+\" minutes\");
\t\t\t}\t\t
\t\t\ttext +=\" order completion\";
\t\t\t\$('#comlete-time-text').text(text);

\t\t} else {
\t\t\tconsole.log('Time not found');
\t\t}

\t\t
\t}

\tfunction calcTimeByQuesting(values) {
\t\ttimeString = calcTimeByRenownLvl(currentL, desiredL);
\t\tconst timeUnits = {month:0, day: 0, hour: 0, minute: 0 };
\t\tconst regex = /(\\d+)\\s*(month|day|hour|minute)s?/g;
\t\tlet match;
\t\t
\t\twhile ((match = regex.exec(timeString)) !== null) {
\t\t\tconst value = parseInt(match[1]);
\t\t\tconst unit = match[2];
\t\t\ttimeUnits[unit] = value;
\t\t}

\t\tlet additionalMonth = 0;
\t\tlet additionalHours = 0;
\t\tlet additionalDays = 0;

\t\tif (values.some(value => value.includes('Khaz Algar Storyline'))) {
\t\t\tadditionalHours += 8;
\t\t}
\t\tif (values.some(value => value.includes('TWW Campaign'))) {
\t\t\tadditionalMonth += 1;
\t\t\tadditionalDays += 5;
\t\t}
\t\tif (values.some(value => value.includes('Skyriding Full Progress'))) {
\t\t\tadditionalHours += 2;
\t\t}

\t\ttimeUnits.day += additionalDays;
\t\ttimeUnits.hour += additionalHours;
\t\ttimeUnits.month = (timeUnits.month || 0) + additionalMonth;

\t\tif (timeUnits.hour >= 24) {
\t\t\ttimeUnits.day += Math.floor(timeUnits.hour / 24);
\t\t\ttimeUnits.hour = timeUnits.hour % 24;
\t\t}

\t\tif (timeUnits.month > 0) {
\t\t\tif (timeUnits.hour <= 16) {
\t\t\t\ttimeUnits.hour = 0; 
\t\t\t} else {
\t\t\t\ttimeUnits.day += 1; 
\t\t\t\ttimeUnits.hour = 0;
\t\t\t}
\t\t}

\t\tif (additionalDays > 0 || additionalHours > 0 || additionalMonth > 0) {
\t\t\ttimeUnits.minute = 0;
\t\t}

\t\tconst resultString = Object.entries(timeUnits)
\t\t\t.filter(([_, value]) => value > 0) 
\t\t\t.map(([unit, value]) => `\${value} \${unit}\${value > 1 ? 's' : ''}`) 
\t\t\t.join(' ');

\t\treturn resultString;
\t}
\t
\tfunction calcTimeByEqualExtraOptions(values, product){
\t\tlet count = values.length;
\t\tconsole.log(\"values: \",values)

\t\tif(product == \"The Cobalt Assembly Reputation Boost\"){
\t\t\t\$('#comlete-time-text').text(count*3 + \" hours\");
\t\t}else if(product == \"Winterpelt Furbolg Reputation Boost\"){
\t\t\tlet minutes = count*24;
\t\t\tlet hours = Math.floor(minutes/60);
\t\t\tlet mins = hours == 0 ? minutes : minutes%60;

\t\t\tconsole.log(\"mins: \"+mins+\" minutes: \"+minutes)
\t\t\t\$('#comlete-time-text').text((hours>0 ? hours+(hours==1?\" day \" : \" days \"):\"\")+(mins >0 ? mins+\" minutes \" : \"\")+\"order completion\");
\t\t}else if(product == \"Conquest Gear Boost\"){
\t\t\t
\t\t\tif(count==2){
\t\t\t\t\$('#comlete-time-text').text(\"2 months 1 day order completion\");
\t\t\t}else if(values.includes(\"add 1800 rating in arena (free selfplay)\")){
\t\t\t\t\$('#comlete-time-text').text(\"7 days order completion\");
\t\t\t}else{
\t\t\t\t\$('#comlete-time-text').text(\"2 months order completion\");
\t\t\t}
\t\t}else if(product == \"WoW Gladiator Title Boost\"){
\t\t\t
\t\t\tlet days = \$('#comlete-time-text').attr('data-current-val') == undefined ? 35 : Number(\$('#comlete-time-text').attr('data-current-val'));
\t\t\tlet extraDays = 0;
\t\t\tif(count==2){
\t\t\t\tif(days==25){
\t\t\t\textraDays=64
\t\t\t\t} else{
\t\t\t\t\textraDays=65\t
\t\t\t\t}
\t\t\t} else if(values.includes(\"get BiS PvP Gear for Current Meta\")){
\t\t\t\tif(days==25){
\t\t\t\t\textraDays=59
\t\t\t\t}else{
\t\t\t\t\textraDays=60
\t\t\t\t}
\t\t\t} else if(values.includes(\"add Conquest Gear\")){
\t\t\t\tif(days==22){
\t\t\t\t\textraDays=6
\t\t\t\t} else{
\t\t\t\t\textraDays=5
\t\t\t\t}
\t\t\t} 
\t\t\t\$('#comlete-time-text').attr('data-extra-days', extraDays)
\t\t\tdays+=extraDays;
\t\t\tlet months = Math.floor(days/30);
\t\t\tdays = days%30;
\t\t\tconsole.log((months>0?months+\" months  \":\"\")+(days>0?days+\" days\":\"\")+\" order completion\")

\t\t\tlet text = (months>0?months+\" months  \":\"\")+(days>0?days+\" days\":\"\")+\" order completion\";
\t\t\t\$('#comlete-time-text').text(text);
\t\t}else if(product == \"Soridormi Reputation Boost\"){
\t\t\tlet hours = count*42;
\t\t\tlet days = Math.floor(hours/24);
\t\t\tlet hours2 = hours%24;
\t\t\tconsole.log(\"days:  \"+days+\" hours: \"+hours2)
\t\t\tif(hours2>=12&&hours2!=18){
\t\t\t\tdays++;
\t\t\t\thours2 = 0;
\t\t\t}else if(hours2!=18){
\t\t\t\thours2=0;
\t\t\t}
\t\t\t\$('#comlete-time-text').text((days>0 ? days+(days==1?\" day \" : \" days \"):\"\")+(hours2 >0 ? hours2+\" hours \" : \"\")+\"order completion\");
\t\t}
\t\telse{
\t\t\t\$('#comlete-time-text').text(count+(count==1?\" day\" : \" days\")+\" order completion\");
\t\t}

\t\tif(count != 0){
\t\t\t\$('.tToRange').css('display', 'flex');
\t\t\t//\$('#comlete-time-text').text(text+\" order completion\");
\t\t} else if(product==\"Conquest Gear Boost\"){
\t\t\t\$('#comlete-time-text').text(\"5 days order completion\");
\t\t\t\$('.tToRange').css('display', 'flex');
\t\t}else if(product==\"WoW Gladiator Title Boost\"){
\t\t\tlet days = \$('#comlete-time-text').attr('data-current-val') == undefined ? 35 : Number(\$('#comlete-time-text').attr('data-current-val'));
\t\t\tlet months = Math.floor(days/30);
\t\t\tdays = days%30;
\t\t\tlet text = (months>0?months+\" months  \":\"\")+(days>0?days+\" days\":\"\")+\" order completion\";
\t\t\t\$('#comlete-time-text').text(text);
\t\t\t\$('.tToRange').css('display', 'flex');
\t\t}else{
\t\t\t\$('.tToRange').css('display', 'none');
\t\t}
\t}

\tfunction calcTimeByNotEqualExtraOptions(values){
\t\tconst weights = {
\t\t\t'add 1800 rating in arena (free selfplay)': 2,
\t\t\t'BiS PvP Gear for Current Meta': 60,
\t\t\t'Conquest Gear (ilvl 639)': 5,
\t\t\t'Honor Gear (ilvl 626)': 2,
\t\t\t'add BiS PvP Gear for Current Meta': 60,
\t\t\t'add Conquest Gear': 5,
\t\t\t'get BiS PvP Gear for Current Meta': 60,
\t\t\t'get full Conquest Gear (ilvl 639)': 5,
\t\t\t'Soloist title': 10,
\t\t\t\"I don't have PvP ilvl 626+\": 2,
\t\t};\t
\t\tlet count = values.length;
\t\tlet total=0;
\t\t
\t\tlet totalWeight = values.reduce((total, element) => {
\t\t\tconst weight = weights[element] || 0; 
\t\t\treturn total + weight;
\t\t}, 0);
\t\tconsole.log(\"total: \"+totalWeight)
\t\t
\t\tif(count==4 || values.includes(\"add 1800 rating in arena (free selfplay)\")&&values.includes(\"BiS PvP Gear for Current Meta\")){
\t\t\ttotalWeight--;
\t\t} else if(document.querySelector('.titlepage').textContent==\"Honor Gear Boost\"){
\t\t\ttotalWeight+=2;
\t\t}
\t\tlet months =  Math.floor(totalWeight/30);
\t\tlet days = Math.floor(totalWeight%30);
\t\tlet text = \"\";
\t\tlet hours = \"\";
\t\tif(document.querySelector('.titlepage').textContent==\"WoW Solo Shuffle Boost\"){
\t\t\t\$('#comlete-time-text').attr('data-extra-days', totalWeight)
\t\t\tlet extra = parseInt(\$('#comlete-time-text').attr('data-hours')) || 0;
\t\t\ttotalWeight = totalWeight*24+extra;
\t\t\tmonths = Math.floor(totalWeight/720)
\t\t\tdays = Math.floor((totalWeight%720)/24)
\t\t\thours =  Math.floor((totalWeight%720)%24)
\t\t\tif(hours>=10){
\t\t\t\tdays++;
\t\t\t\thours = 0;
\t\t\t}
\t\t\tconsole.log(months,  days, hours)
\t\t}
\t\t
\t\tif(values.includes(\"add 1800 rating in arena (free selfplay)\")&&count==1){
\t\t\ttext = \"1 day 16 hours order completion\";
\t\t} else{
\t\t\tconsole.log(months,  days, hours)

\t\t\tif(months==0 && hours>0){
\t\t\t\ttext = (days>0?days+\" days  \":\"\")+(hours>0?hours+\" hours\":\"\")+\" order completion\";
\t\t\t}else{
\t\t\t\ttext = (months>0?months+\" months  \":\"\")+(days>0?days+\" days\":\"\")+\" order completion\";
\t\t\t}
\t\t}
\t\tconsole.log(months > 0 ? months + \" months  \" : \"\")
\t\t\$('#comlete-time-text').text(text);
\t\tif(count != 0){
\t\t\t\$('.tToRange').css('display', 'flex');
\t\t}else if(document.querySelector('.titlepage').textContent==\"Honor Gear Boost\"&&count==0){
\t\t\t\$('#comlete-time-text').text(\"2 days order completion\");
\t\t}else if(document.querySelector('.titlepage').textContent==\"WoW Solo Shuffle Boost\"){
\t\t\tlet extra = parseInt(\$('#comlete-time-text').attr('data-hours')) || 10;
\t\t\tlet months =  Math.floor(extra/30);
\t\t\tlet days = Math.floor(extra%30);
\t\t\tlet text = (months>0?months+\" months  \":\"\")+(days>0?days+\" days\":\"\")+\" order completion\";
\t\t\tconsole.log(999)
\t\t}else{
\t\t\t\$('.tToRange').css('display', 'none');
\t\t}
\t}

\tfunction getSelectedRadioOptionName(optionGroupId) {
\t\tconst selectedRadio = \$(`input[name=\"option[\${optionGroupId}]\"]:checked`);
\t\t
\t\tif (selectedRadio.length > 0) {
\t\t\tconst optionName = selectedRadio.closest('.checkbigrow').find('label').text().trim();
\t\t\treturn optionName;
\t\t}
\t\treturn null; 
\t}

\tfunction getSelectedCheckboxes(checkboxGroupName) {
\t\tconst checkedValues = [];
\t\t
\t\t\$(`input[name=\"\${checkboxGroupName}\"]:checked`).each(function() {
\t\t\tconst labelText = \$(this).closest('.checkbigrow').find('label').clone().children().remove().end().text().trim();
\t\t\tcheckedValues.push(labelText);
\t\t});

\t\treturn checkedValues;
\t}

\tfunction calcTimeByBMAndAdditionals(values){
\t\tconsole.log(777)
\t\tconst weights = {
\t\t\t\"I don't have 626+ PvP ilvl\": 2,
\t\t\t'Full Conquest Gear': 5,
\t\t\t'BiS PvP Gear for Current Meta': 60,
\t\t};\t
\t\t
\t\tlet method = getSelectedRadioOptionName(22010) == null ? \"Piloted (Solo Shuffle)\" : getSelectedRadioOptionName(22010);
\t\tlet defaultVal=2;
\t\t
\t\tlet totalWeight = values.reduce((total, element) => {
\t\t\tconst weight = weights[element] || 0; 
\t\t\treturn total + weight;
\t\t}, 0);
\t\t
\t\tif(method != \"Piloted (Solo Shuffle)\"){
\t\t\ttotalWeight--;
\t\t}
\t\ttotalWeight+=defaultVal;
\t\tlet months =  Math.floor(totalWeight/30);
\t\tlet days = Math.floor(totalWeight%30);
\t\tlet text = (months>0?months+\" months  \":\"\")+(days>0?days+\" days\":\"\")+\" order completion\";
\t\t\$('#comlete-time-text').text(text);
\t}

\tfunction calcTimeBySingleRating(rating){
\t\tvar days = 0
\t\tvar months = 0
\t\tconst ratingData = {
\t\t\t\"0-1500\": 35,
\t\t\t\"1600\": 33,
\t\t\t\"1700\": 33,
\t\t\t\"1800\": 33,
\t\t\t\"1900\": 32,
\t\t\t\"2000\": 30,
\t\t\t\"2100\": 29,
\t\t\t\"2200\": 27,
\t\t\t\"2300\": 25,
\t\t\t\"2400+\": 22,
\t\t};
\t\tif (ratingData.hasOwnProperty(rating)) {
\t\t\tdays = ratingData[rating];
\t\t\t\$('#comlete-time-text').attr('data-current-val', days);
\t\t}
\t\t
\t\tlet extra = \$('#comlete-time-text').attr('data-extra-days') == undefined ?  0 : parseInt(\$('#comlete-time-text').attr('data-extra-days'));
\t\tconsole.log(\$('#comlete-time-text').attr('data-extra-days'))
\t\tif(rating == \"2300\"){
\t\t\tdays--;
\t\t}
\t\tdays +=extra;
\t\tconsole.log(\"days at all: \", days)
\t\tmonths = Math.floor(days/30);
\t\tdays = days%30;
\t\tlet text = (months>0?months+\" months  \":\"\")+(days>0?days+\" days\":\"\")+\" order completion\";
\t\t\$('#comlete-time-text').text(text);

\t}

\t// updateTimeToCompleteText function for single inputs
\tdocument.querySelectorAll('.dropdown-item').forEach(function(item) {
\t\titem.addEventListener('click', function(event) {
\t\t\tevent.preventDefault(); 
\t\t\tvar optionName = this.dataset.name; 
\t\t\tconst productName  = document.querySelector('.titlepage').textContent;
\t\t\t
\t\t\tswitch (true) {
\t\t\t\tcase [\"Mythic+ Bundle\"].includes(productName):
\t\t\t\t\tcountTimeBy2Opts(optionName);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"Keystone Master Boost\"].includes(productName):
\t\t\t\t\tcountTimeByProgress(optionName);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"Dragonscale Expedition Reputation Boost\", 
\t\t\t\t\t\t\"The Maruuk Centaur Reputation Boost\"].includes(productName):
\t\t\t\t\tcountTimeByGroupedRating(optionName);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"Iskaara Tuskarr Reputation Boost\", 
\t\t\t\t\t\t\"Valdrakken Accord Reputation Boost\"].includes(productName): 
\t\t\t\t\tcountTimeByIteratedRating(optionName);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"Loamm Niffen Reputation Boost\"].includes(productName):
\t\t\t\t\tcountTimeByGroupedRating2(optionName);
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t});
\t});

\t//for radio buttons
\t\$(document).on('change', '.opt-checkbox input[type=\"radio\"]', function() {
\t\tif(document.querySelector('.titlepage').textContent==\"Elite PvP Gear Boost\"){
\t\t\tlet values = getSelectedCheckboxes(\"option[22009][]\");
\t\t\tcalcTimeByBMAndAdditionals(values)
\t\t}
\t});

\t// updateTimeToCompleteText function for checkboxes
\t\$(document).on('change', 'input[type=\"checkbox\"]', function() {
\t\tvar checkedValues = [];
\t\t\$('input[type=\"checkbox\"]:checked').each(function() {
\t\t\tvar optionName = \$(this).data('name'); 
\t\t\tcheckedValues.push(optionName);
\t\t});

\t\tconst productName  = document.querySelector('.titlepage').textContent;
\t\tconsole.log(checkedValues)
\t\t\tswitch (true) {
\t\t\t\tcase [\"Azerothian Archives Reputation Boost\"].includes(productName):
\t\t\t\t\tcountTimeByRepLvl(checkedValues);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"2v2 Arena Rating Boost\", \"3v3 Arena Rating Boost\"].includes(productName):\t
\t\t\t\t\tcalcTimeByAdditionals(checkedValues);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"The War Within Starter Package\"].includes(productName):
\t\t\t\t\tlet time = calcTimeBy3Opts(checkedValues);
\t\t\t\t\t\$('#comlete-time-text').text(time+\" days order completion\");
\t\t\t\t\tbreak;
\t\t\t\tcase [\"Dream Wardens Renown Boost\"].includes(productName):
\t\t\t\t\t\$('#comlete-time-text').text(calcTimeByQuesting(checkedValues)+\" order completion\");
\t\t\t\t\tbreak;
\t\t\t\tcase [\"The War Within Level Boost\", \"WoW Selfplay Leveling Boost\"].includes(productName):
\t\t\t\t\tcalcTimeBy3or4Options(checkedValues);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"Wrathion Reputation Boost\", \"Sabellian Reputation Boost\", 
\t\t\t\t\"The Cobalt Assembly Reputation Boost\", \"Winterpelt Furbolg Reputation Boost\", 
\t\t\t\t\"Conquest Gear Boost\", \"Wrathion Reputation Boost\", \"Conquest Gear Boost\", 
\t\t\t\t\"Soridormi Reputation Boost\", \"WoW Gladiator Title Boost\"].includes(productName):
\t\t\t\t\tconsole.log(555)
\t\t\t\t\tcalcTimeByEqualExtraOptions(checkedValues, productName);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"Full PvP Gear Boost\", \"Honor Gear Boost\", \"WoW Solo Shuffle Boost\"].includes(productName):
\t\t\t\t\t
\t\t\t\t\tcalcTimeByNotEqualExtraOptions(checkedValues);
\t\t\t\t\tbreak;
\t\t\t\tcase [\"Elite PvP Gear Boost\"].includes(productName):
\t\t\t\t    calcTimeByBMAndAdditionals(checkedValues)\t
\t\t\t}
\t\t
\t});

\tvar currentL, desiredL, currentR, desiredR, currentRBG, desiredRBG;

\ttry {
\t\tcurrentL = \$('.dropdown-item[data-name=\"Your current Renown level\"]').data('value');
\t\tdesiredL = \$('.dropdown-item[data-name=\"Desired renown level\"]').data('value');

\t\tif (document.querySelector('.titlepage').textContent == \"3v3 Arena Rating Boost\" || 
\t\t\tdocument.querySelector('.titlepage').textContent == \"2v2 Arena Rating Boost\") {
\t\t\t
\t\t\tcurrentR = \$('.dropdown-item[data-name=\"Current rating\"]').first().data('value') == \"0-1000\" ? \"1000\" : \$('.dropdown-item[data-name=\"Current rating\"]').first().data('value');
\t\t\tdesiredR = \$('.dropdown-item[data-name=\"Desired rating\"]').first().data('value');
\t\t\t
\t\t} else if(document.querySelector('.titlepage').textContent == \"WoW Solo Shuffle Boost\"){
\t\t\tcurrentR = \$('.dropdown-item[data-name=\"Current rating\"]').first().data('value') == \"0-1000\" ? \"1000\" : \$('.dropdown-item[data-name=\"Current rating\"]').first().data('value');
\t\t\tdesiredR = \$('.dropdown-item[data-name=\"Desired Rating\"]').first().data('value');
\t\t} else if (document.querySelector('.titlepage').textContent == \"The War Within Level Boost\" || document.querySelector('.titlepage').textContent == \"WoW Selfplay Leveling Boost\") {
\t\t\t
\t\t\tcurrentR = \$('.dropdown-item[data-name=\"current Level\"]').data('value');
\t\t\tdesiredR = \$('.dropdown-item[data-name=\"Desired level\"]').data('value');
\t\t\t
\t\t} else if(document.querySelector('.titlepage').textContent == \"WoW Gladiator Title Boost\"){
\t\t\tcurrent = \$('.dropdown-item[data-name=\"Your current 3v3 rating').data('value');
\t\t\tconsole.log(\"3v3 rating:  \", current)
\t\t}else {
\t\t\t
\t\t\tcurrentR = \$('.dropdown-item[data-name=\"Current RBG rating\"]').first().data('value') == \"0-1000\" ? \"1000\" : \$('.dropdown-item[data-name=\"Current rating\"]').first().data('value');
\t\t\tdesiredR = \$('.dropdown-item[data-name=\"Desired RBG rating\"]').first().data('value');
\t\t}

\t} catch (e) {}

\tconsole.log(\"Initial values:\", currentR, desiredR);\t
\t
\t//for ratimngs
\t\$('.dropdown-item').each(function() {
\t\t
\t\t\$(this).on('click', function(event) {
\t\t\tevent.preventDefault(); 
\t\t\t\tconsole.log(currentR, desiredR)\t

\t\t\tvar threeHoured2200 = ['1700','2000'];
\t\t\tvar threeHoured2300 = ['1100', '1200','1300','1400','1800','2100',];
\t\t\tvar threeHoured2400 = ['1000', '1500', '1600', '1900', '2200'];
\t\t\tvar optionName = \$(this).data('name');
        \tvar value = \$(this).data('value');

\t\t\tif (optionName == 'Current rating' || optionName == 'Current rating') {
\t\t\t\tcurrentR = value == \"0-1000\" ? \"1000\" : value;
\t\t\t} else if (optionName == 'Desired rating'||optionName == 'Desired Rating') {
\t\t\t\tdesiredR = value;
\t\t\t} else if (optionName == 'Current RBG rating') {
\t\t\t\tcurrentRBG = value ? value.split('-')[1] : undefined;
\t\t\t} else if (optionName == 'Desired RBG rating') {
\t\t\t\tdesiredRBG = value;
\t\t\t} else if (optionName == 'Your current Renown level') {
\t\t\t\tcurrentL = value;
\t\t\t} else if (optionName == 'Desired renown level') {
\t\t\t\tdesiredL = value;
\t\t\t} else if (optionName == 'current Level') {
\t\t\t\tcurrentR = value;
\t\t\t} else if (optionName == 'Desired level') {
\t\t\t\tdesiredR = value;
\t\t\t} else if(optionName==\"Your current 3v3 rating\"){
\t\t\t\tcurrent = value;
\t\t\t}

\t\t\tconsole.log(\"Updated values:\", currentR, desiredR);
\t\t\t
\t\t\tif(document.querySelector('.titlepage').textContent == \"RBG Rating Boost\"){
\t\t\t\tlet delta = desiredRBG - currentRBG;
\t\t\t\tlet time = \"\"
\t\t\t\tif(delta<0){
\t\t\t\t\tconsole.log(\"yes\")
\t\t\t\t\tif (delta == -100 && currentRBG == 1200){
\t\t\t\t\t\ttime = \"2 minutes\";
\t\t\t\t\t} else if (delta == -100 && currentRBG == 1300){
\t\t\t\t\t\ttime = \"26 minutes\";
\t\t\t\t\t} else if (delta == -100 && currentRBG == 1400){
\t\t\t\t\t\ttime = \"1 hour 45 minutes\"
\t\t\t\t\t}
\t\t\t\t\t\$('#comlete-time-text').text(time);
\t\t\t\t} else{
\t\t\t\t\ttime = calcTimeByRatingSubstraction(currentRBG, desiredRBG);
\t\t\t\t\tdays = Math.floor(time / 24);
\t\t\t\t\thours = time % 24;

\t\t\t\t\t\$('#comlete-time-text').text((days == 0 ? \"\" : (days == 1 ? days + \" day \" : (days + \" days \"))) + (hours == 0 ? \"\" : (hours + \" hour\" + (hours != 1 ? \"s\" : \"\"))) + \" order completion\");
\t\t\t\t}
\t\t\t
\t\t\t}
\t\t\telse if(document.querySelector('.titlepage').textContent == \"WoW Solo Shuffle Boost\"){
\t\t\t\ttime = calcTimeByRatingSubstraction(currentR, desiredR);
\t\t\t\t\$('#comlete-time-text').attr('data-hours', time)
\t\t\t\tlet extra = \$('#comlete-time-text').attr('data-extra-days') || 0;
\t\t\t\tconsole.log(\"time before: \"+time+\" extra: \"+extra)
\t\t\t\ttime+=extra*24;
\t\t\t\ttime++;
\t\t\t\tconsole.log(\"current:\"+currentR+\" desired:\"+desiredR+\" time:\"+time)
\t\t\t\tmonths = Math.floor(time/720)
\t\t\t\tdays = Math.floor((time%720)/24)
\t\t\t\thours =  Math.floor((time%720)%24)
\t\t\t\tconsole.log(hours)
\t\t\t\tif(hours>=10){
\t\t\t\t\tdays++;
\t\t\t\t\thours = 0;
\t\t\t\t}
\t\t\t\tconsole.log(hours)

\t\t\t\tlet text = \"\";
\t\t\t\tif(months==0 && hours>0){
\t\t\t\t\ttext = (days>0?days+\" days  \":\"\")+(hours>0?hours+\" hours\":\"\")+\" order completion\";
\t\t\t\t}else{
\t\t\t\t\ttext = (months>0?months+\" months  \":\"\")+(days>0?days+\" days\":\"\")+\" order completion\";
\t\t\t\t}
\t\t\t\t\$('#comlete-time-text').text(text);
\t\t\t}
\t\t\telse if(document.querySelector('.titlepage').textContent == \"Dream Wardens Renown Boost\"){
\t\t\t\ttime = calcTimeByRenownLvl(currentL, desiredL);
\t\t\t\tvar checkedValues = [];
\t\t\t\t\$('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\tvar optionName = \$('input[type=\"checkbox\"]').data('name'); 
\t\t\t\t\tcheckedValues.push(optionName);
\t\t\t\t});
\t\t\t\t\$('#comlete-time-text').text(calcTimeByQuesting(checkedValues)+\" order completion\");
\t\t\t}else if(document.querySelector('.titlepage').textContent == \"The War Within Level Boost\" || document.querySelector('.titlepage').textContent == \"WoW Selfplay Leveling Boost\"){
\t\t\t\tcalcTimeByLevelSubstraction(currentR, desiredR)
\t\t\t}else if(document.querySelector('.titlepage').textContent == \"WoW Gladiator Title Boost\"){
\t\t\t\tcalcTimeBySingleRating(current)
\t\t\t}
\t\t\telse{ // for 2v2 and 3v3 arena rating boost

\t\t\tvar days =\"\";
\t\t\tvar hours =\"\";
\t\t\tvar deltaTimes;
\t\t\tvar deltaTimes1;
\t\t\tvar deltaTimes2;
\t\t\tvar hoursTotal=\"\";
\t\t\tconsole.log(currentR, desiredR)
\t\t\tif(desiredR<1900 && desiredR != \"1400\"){
\t\t\t\tif (currentR <= \"1400\"){
\t\t\t\t\tdeltaTimes = (desiredR - 1400)/100;
\t\t\t\t} else{
\t\t\t\t\tdeltaTimes = (desiredR - currentR)/100;
\t\t\t\t}
\t\t\t\thoursTotal = deltaTimes*6;
\t\t\t\tconsole.log(\"hours: hours Total\", hoursTotal)
\t\t\t} else if(desiredR>=1900 && desiredR != \"1400\"){
\t\t\t\tif (currentR < 1500){
\t\t\t\t\t
\t\t\t\t\tdeltaTimes1 = (1800 - 1400)/100;
\t\t\t\t\tdeltaTimes2 = (2100 - 1800)/100;
\t\t\t\t\tif(desiredR>2100){
\t\t\t\t\t\tdeltaTimes3 = (desiredR - 2100)/100;
\t\t\t\t\t\thoursTotal = deltaTimes1*6 + deltaTimes2*32+deltaTimes3*48;
\t\t\t\t\t\tconsole.log(\"current \"+currentR+\" result \"+threeHoured2200.includes(String(currentR)))
\t\t\t\t\t\tif(desiredR==2200 && threeHoured2200.includes(currentR)){
\t\t\t\t\t\t\thoursTotal += 24;
\t\t\t\t\t\t} else if(desiredR==2300 && (threeHoured2300.includes(String(currentR))||threeHoured2200.includes(String(currentR)))){
\t\t\t\t\t\t\thoursTotal += 24;
\t\t\t\t\t\t}  else if(desiredR==2400 && (threeHoured2400.includes(String(currentR))||threeHoured2300.includes(String(currentR))||threeHoured2200.includes(String(currentR)))){
\t\t\t\t\t\t\thoursTotal+=24;
\t\t\t\t\t\t} 

\t\t\t\t\t}else{
\t\t\t\t\t\thoursTotal = deltaTimes1*6 + deltaTimes2*32;
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t} else if(currentR < 1800){
\t\t\t\t\tdeltaTimes1 = (1800 - currentR)/100;
\t\t\t\t\tif(desiredR>2100){
\t\t\t\t\t\tdeltaTimes2 = (2100-1800)/100;
\t\t\t\t\t\tdeltaTimes3 = (desiredR - 2100)/100;
\t\t\t\t\t\thoursTotal = deltaTimes1*6 + deltaTimes2*32+deltaTimes3*48;
\t\t\t\t\t\tconsole.log(\"before \"+ hoursTotal)
\t\t\t\t\t\tconsole.log(\"current2 \"+currentR+\" result \"+threeHoured2200.includes(String(currentR)))
\t\t\t\t\t\tif(desiredR==2200 && threeHoured2200.includes(String(currentR))){
\t\t\t\t\t\t\thoursTotal += 24;
\t\t\t\t\t\t} else if(desiredR==2300 && (threeHoured2300.includes(String(currentR))||threeHoured2200.includes(String(currentR)))){
\t\t\t\t\t\t\thoursTotal += 24;
\t\t\t\t\t\t}  else if(desiredR==2400 && (threeHoured2400.includes(String(currentR))||threeHoured2300.includes(String(currentR))||threeHoured2200.includes(String(currentR)))){
\t\t\t\t\t\t\thoursTotal+=24;
\t\t\t\t\t\t} 
\t\t\t\t\t\tconsole.log(\"after \"+ hoursTotal)

\t\t\t\t\t}else{
\t\t\t\t\t\tdeltaTimes2 = (desiredR - 1800)/100;
\t\t\t\t\t\thoursTotal = deltaTimes1*6 + deltaTimes2*32;
\t\t\t\t\t}
\t\t\t\t} else{
\t\t\t\t\tif(desiredR>2100){
\t\t\t\t\t\tif(desiredR>currentR && currentR<2100){
\t\t\t\t\t\t\tdeltaTimes = (2100 - currentR)/100;
\t\t\t\t\t\t\thoursTotal = deltaTimes*32+(desiredR-2100)/100*48;
\t\t\t\t\t\t\tconsole.log(\"current3 \"+currentR+\" result \"+threeHoured2200.includes(String(currentR)))
\t\t\t\t\t\t\tif(desiredR==2200 && threeHoured2200.includes(String(currentR))){
\t\t\t\t\t\t\t\thoursTotal += 24;
\t\t\t\t\t\t\t} else if(desiredR==2300 && (threeHoured2300.includes(String(currentR))||threeHoured2200.includes(String(currentR)))){
\t\t\t\t\t\t\t\thoursTotal += 24;
\t\t\t\t\t\t\t}  else if(desiredR==2400 && (threeHoured2400.includes(String(currentR))||threeHoured2300.includes(String(currentR))||threeHoured2200.includes(String(currentR)))){
\t\t\t\t\t\t\t\thoursTotal+=24;
\t\t\t\t\t\t\t} 
\t\t\t\t\t\t} else if(desiredR>currentR && currentR>=2100){
\t\t\t\t\t\t\thoursTotal = (desiredR-currentR)/100*48;
\t\t\t\t\t\t\tif(desiredR==2200 && threeHoured2200.includes(String(currentR))){
\t\t\t\t\t\t\t\thoursTotal += 24;
\t\t\t\t\t\t\t} else if(desiredR==2300 && (threeHoured2300.includes(String(currentR))||threeHoured2200.includes(String(currentR)))){
\t\t\t\t\t\t\t\thoursTotal += 24;
\t\t\t\t\t\t\t}  else if(desiredR==2400 && (threeHoured2400.includes(String(currentR))||threeHoured2300.includes(String(currentR))||threeHoured2200.includes(String(currentR)))){
\t\t\t\t\t\t\t\thoursTotal+=24;
\t\t\t\t\t\t\t} 
\t\t\t\t\t\t}
\t\t\t\t\t}else{
\t\t\t\t\t\tdeltaTimes = (desiredR - currentR)/100;
\t\t\t\t\t\thoursTotal = deltaTimes*32;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif (currentR == 1000){
\t\t\t\thoursTotal+=16;
\t\t\t} else if(currentR == 1100){
\t\t\t\thoursTotal+=3;
\t\t\t} else if(currentR == 1200){
\t\t\t\thoursTotal+=2;
\t\t\t} else if(currentR == 1300){
\t\t\t\thoursTotal+=1;
\t\t\t} else if (currentR == 1600&&desiredR>1900){
\t\t\t\thoursTotal+=24;
\t\t\t}
\t\t
\t\t\tdays = Math.floor(hoursTotal / 24);
\t\t\thours = hoursTotal % 24;
\t\t\t
\t\t\tif(desiredR>=1900 && hours >= 16){
\t\t\t\tif(days != 1 && hours != 14){
\t\t\t\t\tdays++;
\t\t\t\t\thours = 0;
\t\t\t\t}
\t\t\t} else if(desiredR>=1900 && hours < 16){
\t\t\t\tif((hours !=14 && hours != 8)||(currentR == 2000 && desiredR > 2100)){
\t\t\t\t\thours = 0;
\t\t\t\t}
\t\t\t\t
\t\t\t}
\t\t\t\$('#comlete-time-text').attr('data-days', days);
\t\t\t\$('#comlete-time-text').attr('data-hours', hours);

\t\t\tlet additional_days = \$('#comlete-time-text').attr('data-additionals') == 0 ? \"\" : \$('#comlete-time-text').attr('data-additionals');
\t\t\tlet additional_months = \$('#comlete-time-text').attr('data-additional-months') == 0 ? \"\" : \$('#comlete-time-text').attr('data-additional-months');
\t\t\tconsole.log(additional_months)
\t\t\tdays = Number(days) + Number(additional_days);
\t\t\tif (additional_months > 0) {
\t\t\t\t\$('#comlete-time-text').text(
\t\t\t\t\tadditional_months + \" month\" + (additional_months > 1 ? \"s \" : \" \") +
\t\t\t\t\t(days > 0 ? \" \" + (days === 1 ? days + \" day \" : days + \" days \") : \"\") +
\t\t\t\t\t\"order completion\"
\t\t\t\t);
\t\t\t} else {
\t\t\t\t\$('#comlete-time-text').text(
\t\t\t\t\t(days > 0 ? \" \" + (days === 1 ? days + \" day \" : days + \" days \") : \"\") +
\t\t\t\t\t(hours === 0 ? \"\" : (hours + \" hour\" + (hours !== 1 ? \"s\" : \"\"))) +
\t\t\t\t\t\" order completion\"
\t\t\t\t);
\t\t\t}
\t\t\t}
\t\t})
    });




</script>

";
        // line 3268
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
        return array (  3747 => 3268,  1059 => 583,  1052 => 579,  968 => 498,  959 => 492,  951 => 487,  779 => 318,  772 => 314,  765 => 310,  739 => 287,  732 => 283,  728 => 282,  725 => 281,  716 => 276,  712 => 275,  708 => 274,  703 => 272,  698 => 270,  693 => 267,  690 => 266,  687 => 265,  681 => 264,  676 => 262,  660 => 248,  657 => 247,  643 => 240,  636 => 238,  629 => 237,  626 => 236,  612 => 229,  605 => 227,  598 => 226,  595 => 225,  581 => 218,  574 => 216,  567 => 215,  564 => 214,  556 => 211,  548 => 210,  544 => 209,  537 => 208,  534 => 207,  522 => 204,  516 => 203,  509 => 202,  506 => 201,  494 => 198,  488 => 197,  481 => 196,  478 => 195,  474 => 193,  465 => 189,  458 => 187,  456 => 186,  452 => 185,  446 => 184,  432 => 183,  428 => 181,  424 => 180,  420 => 179,  417 => 178,  414 => 177,  410 => 175,  401 => 171,  394 => 169,  392 => 168,  388 => 167,  382 => 166,  370 => 165,  366 => 163,  362 => 162,  358 => 161,  355 => 160,  352 => 159,  343 => 152,  335 => 149,  328 => 147,  326 => 146,  322 => 145,  310 => 144,  307 => 143,  303 => 142,  299 => 141,  287 => 136,  283 => 135,  279 => 134,  275 => 132,  273 => 131,  268 => 130,  263 => 129,  261 => 128,  254 => 123,  251 => 122,  238 => 120,  233 => 119,  231 => 118,  223 => 113,  216 => 109,  210 => 105,  200 => 103,  197 => 102,  187 => 100,  185 => 99,  178 => 94,  174 => 92,  163 => 90,  159 => 89,  156 => 88,  154 => 87,  138 => 74,  132 => 70,  126 => 69,  120 => 67,  112 => 65,  109 => 64,  105 => 63,  98 => 59,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}

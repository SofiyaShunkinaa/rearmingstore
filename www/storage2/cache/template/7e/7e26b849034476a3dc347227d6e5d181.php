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
class __TwigTemplate_d3e30a44ccd305ea9981c6624e267b4b extends Template
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
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 130) == "select")) {
                    // line 131
                    echo "\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <div class=\"borderedRow borderedRow-";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 133);
                    echo "\">
\t\t\t\t\t\t\t<div>";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 134);
                    echo "</div>
\t\t\t\t\t\t\t<input name=\"option[";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                    echo "\" type=\"hidden\" data-prise=\"0\" data-name=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "name", [], "any", false, false, false, 135);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"dropdownSelect\">
\t\t\t\t\t\t\t  <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" 
\t\t\t\t\t\t\t\taria-expanded=\"false\">0 - 1000</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<div class=\"scrollbar-inner\" data-id=\"";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 141
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 141));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 142
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-id=\"";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 143);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 143);
                        echo "\" data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 143);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 143);
                        echo "\" data-prisePref=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 143);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 144);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 145
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145)) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t\t\t  <span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 146);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 146);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 148
                        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 158) == "radio")) {
                    // line 159
                    echo "\t\t\t\t\t\t<div class=\"opt-checkbox\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 161
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 161));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbigrow\"> 
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 164
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 164);
                        echo "\" id=\"product_option_id";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 164);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 164);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"product_option_id";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 165);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 166
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 166);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 167
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167)) {
                            // line 168
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 168);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 176) == "checkbox")) {
                    // line 177
                    echo "\t\t\t\t\t\t<div class=\"opt-checkbox\">
\t\t\t\t\t\t\t<div class=\"opt-checkbox_name\">";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 178);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 179
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 179));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 180
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbigrow\"> 
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 182
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                        echo "\" id=\"exampleRadios";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                        echo "\" data-prise=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182);
                        echo "\" data-name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 182);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleRadios";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 183);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 184);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 185
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185)) {
                            // line 186
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 186);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 186);
                            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 192
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 194
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 194) == "text")) {
                    // line 195
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 195)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 196);
                    echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 197);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 197);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 200) == "textarea")) {
                    // line 201
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 201)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "</label>
\t\t\t\t\t\t<textarea name=\"option[";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 203);
                    echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 206) == "file")) {
                    // line 207
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 207)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "</label>
\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\"/>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 213
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 213) == "date")) {
                    // line 214
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 214)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 215);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 217);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 224
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 224) == "datetime")) {
                    // line 225
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 225)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 226);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 228
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 228);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 235
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 235) == "time")) {
                    // line 236
                    echo "\t\t\t\t\t  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 236)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 237);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 239
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 239);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 246
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 246) == "choice")) {
                    // line 247
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
                    // line 261
                    echo ($context["minimum"] ?? null);
                    echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
\t\t\t\t\t";
                }
                // line 263
                echo "\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "\t\t\t\t";
        }
        // line 265
        echo "\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t<div class=\"total\">Total: <span data-prise=\"";
        // line 266
        echo ($context["price2"] ?? null);
        echo "\"></span></div>
\t\t\t  </div>
                  <div class=\"row\">
                    <div class=\"col-md-12\" style=\"text-align: center;\">
                      <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 270
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
        // line 293
        echo ($context["description"] ?? null);
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 297
        echo ($context["why"] ?? null);
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\"
                    tabindex=\"0\">
\t\t\t\t\t";
        // line 301
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
        // line 470
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
});

\$('.datetime').datetimepicker({
    language: '";
        // line 475
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
});

\$('.time').datetimepicker({
    language: '";
        // line 481
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
        // line 562
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
    \$.ajax({
        url: 'index.php?route=product/product/write&product_id=";
        // line 566
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

if(paths12.includes(location.pathnam";
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
        return array (  1018 => 566,  1011 => 562,  927 => 481,  918 => 475,  910 => 470,  738 => 301,  731 => 297,  724 => 293,  698 => 270,  691 => 266,  686 => 265,  683 => 264,  677 => 263,  672 => 261,  656 => 247,  653 => 246,  639 => 239,  632 => 237,  625 => 236,  622 => 235,  608 => 228,  601 => 226,  594 => 225,  591 => 224,  577 => 217,  570 => 215,  563 => 214,  560 => 213,  552 => 210,  544 => 209,  540 => 208,  533 => 207,  530 => 206,  518 => 203,  512 => 202,  505 => 201,  502 => 200,  490 => 197,  484 => 196,  477 => 195,  474 => 194,  470 => 192,  461 => 188,  454 => 186,  452 => 185,  448 => 184,  442 => 183,  428 => 182,  424 => 180,  420 => 179,  416 => 178,  413 => 177,  410 => 176,  406 => 174,  397 => 170,  390 => 168,  388 => 167,  384 => 166,  378 => 165,  366 => 164,  362 => 162,  358 => 161,  354 => 160,  351 => 159,  348 => 158,  339 => 151,  331 => 148,  324 => 146,  322 => 145,  318 => 144,  306 => 143,  303 => 142,  299 => 141,  295 => 140,  283 => 135,  279 => 134,  275 => 133,  271 => 131,  268 => 130,  263 => 129,  261 => 128,  254 => 123,  251 => 122,  238 => 120,  233 => 119,  231 => 118,  223 => 113,  216 => 109,  210 => 105,  200 => 103,  197 => 102,  187 => 100,  185 => 99,  178 => 94,  174 => 92,  163 => 90,  159 => 89,  156 => 88,  154 => 87,  138 => 74,  132 => 70,  126 => 69,  120 => 67,  112 => 65,  109 => 64,  105 => 63,  98 => 59,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
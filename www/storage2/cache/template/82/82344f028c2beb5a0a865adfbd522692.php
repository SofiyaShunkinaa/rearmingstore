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

/* default/template/common/header.twig */
class __TwigTemplate_cbe06898531a6f91b0dbdae8180f3d5f extends Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->

<head>
  <meta charset=\"UTF-8\" />
  <title>";
        // line 11
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 12
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 13
        if (($context["description"] ?? null)) {
            // line 14
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 16
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 17
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 19
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link href=\"";
        // line 20
        echo ($context["icons"] ?? null);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.min.css\">
   <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>

  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
     request.getRequestUri()
     ";
        // line 30
        if (twig_in_filter("checkout", twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "getRequestUri", [], "method", false, false, false, 30))) {
            // line 31
            echo "    <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 33
        echo "
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\" />
 <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>

  ";
        // line 39
        echo "  ";
        // line 40
        echo "  <link rel=\"stylesheet\" href=\"/css/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\"
    integrity=\"sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==\"
    crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
  <link rel=\"stylesheet\" href=\"/css/style.css?v=5\">
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\"
    integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\"
    crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js\"
    integrity=\"sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==\"
    crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
  <script src=\"/js/jquery.scrollbar.min.js\"></script>
  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 54
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 54);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 54);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 54);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 57
            echo "    <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 57);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 61
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 61);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 61);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 64
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "  <script src=\"/js/script.js\"></script>
  <style>
    body {
      background: #F9F9F9;
      /*background-image: url(/page2.jpg);*/
      background-position: top center;
    }

    .frame {
      overflow: hidden;
    }
  </style>
  <script src=\"https://code.jquery.com/ui/1.13.1/jquery-ui.min.js\"
    integrity=\"sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
    integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
    crossorigin=\"anonymous\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.css\" />
\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
\t\tintegrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
\t\tcrossorigin=\"anonymous\"></script>


                <script>
                    var trustpilot_script_url = '";
        // line 92
        echo ($context["Trustpilot_script_url"] ?? null);
        echo "';
                    var trustpilot_key = '";
        // line 93
        echo ($context["Trustpilot_app_key"] ?? null);
        echo "';
                    var trustpilot_widget_script_url = '";
        // line 94
        echo ($context["Trustpilot_widget_script_url"] ?? null);
        echo "';
                    var trustpilot_trustbox_settings = ";
        // line 95
        echo ($context["Trustpilot_trustbox_settings"] ?? null);
        echo ";
                    var trustpilot_integration_app_url = '";
        // line 96
        echo ($context["Trustpilot_integration_app_url"] ?? null);
        echo "';
                    var trustpilot_preview_css_url = '";
        // line 97
        echo ($context["Trustpilot_preview_css_url"] ?? null);
        echo "';
                    var trustpilot_preview_script_url = '";
        // line 98
        echo ($context["Trustpilot_preview_script_url"] ?? null);
        echo "';
                </script>
                <script type=\"text/javascript\" src=\"/catalog/view/javascript/trustpilot/register.min.js\"></script>
                <script type=\"text/javascript\" src=\"/catalog/view/javascript/trustpilot/trustbox.min.js\"></script>
                <script type=\"text/javascript\" src=\"/catalog/view/javascript/trustpilot/preview.min.js\"></script>
            

        ";
        // line 105
        if (($context["w3creators_css"] ?? null)) {
            // line 106
            echo "        <style type=\"text/css\">
        ";
            // line 107
            echo ($context["w3creators_css"] ?? null);
            echo "
        </style>
        ";
        }
        // line 110
        echo "
        ";
        // line 111
        if (($context["w3creators_custom_head"] ?? null)) {
            // line 112
            echo "          ";
            echo ($context["w3creators_custom_head"] ?? null);
            echo "
        ";
        }
        // line 114
        echo "      
</head>

<body>
  <div style=\"overflow: hidden;\" data-test=\"12345\">
    <section class=\"topNav ";
        // line 119
        echo ($context["class"] ?? null);
        echo "\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <a href=\"#\" class=\"navbtn\"><img src=\"img/Category_2.svg\" /></a>
          </div>
          <div class=\"col-md-6\">
            <a href=\"";
        // line 126
        echo ($context["home"] ?? null);
        echo "\" class=\"REARMBOX\"><span class=\"text-wrapper\">Rearm</span><span class=\"span\">ing</span></a>
          </div>
          <div class=\"col-md-3\">
            <div>
              <a href=\"";
        // line 130
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"topNavI fawbtn ";
        if (($context["text_wishlist"] ?? null)) {
            echo "has_faw";
        }
        echo "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\">
                  <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                    d=\"M21.0419 6.75799C23.7519 5.04465 27.3519 4.57132 30.4619 5.56799C37.2269 7.74965 39.3269 15.1247 37.4486 20.993C34.5502 30.2097 22.1719 37.0847 21.6469 37.373C21.4602 37.4763 21.2536 37.528 21.0469 37.528C20.8402 37.528 20.6352 37.478 20.4486 37.3763C19.9269 37.0913 7.63857 30.318 4.64357 20.9947L4.6419 20.993C2.7619 15.123 4.85524 7.74632 11.6136 5.56799C14.7869 4.54132 18.2452 4.99299 21.0419 6.75799ZM12.3802 7.94799C6.9119 9.71132 5.53857 15.593 7.02357 20.2313C9.36024 27.5013 18.5919 33.3797 21.0452 34.8347C23.5069 33.3647 32.8052 27.4213 35.0669 20.238C36.5519 15.5947 35.1736 9.71299 29.6969 7.94799C27.0436 7.09632 23.9486 7.61465 21.8119 9.26799C21.3652 9.61132 20.7452 9.61799 20.2952 9.27799C18.0319 7.57632 15.0752 7.07799 12.3802 7.94799Z\"
                    fill=\"#0F0F0F\" />
                </svg>
\t\t\t\t<span>";
        // line 136
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
              </a>
              <a href=\"";
        // line 138
        echo ($context["checkout"] ?? null);
        echo "\" class=\"topNavI cartbtn ";
        if (($context["cart_nums"] ?? null)) {
            echo "has_cart_item";
        }
        echo "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\">
                  <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                    d=\"M19.7909 3.36011C24.1473 3.36011 27.7462 6.67954 28.1899 10.925L28.3137 10.9264C30.7304 10.9264 33.6687 12.5314 34.6604 17.0331L35.9754 27.2114C36.4471 30.4964 35.8571 33.1314 34.2187 35.0214C32.5887 36.9014 30.0087 37.8964 26.7571 37.8964H12.8437C9.27206 37.8964 6.78372 37.0214 5.23539 35.2231C3.68039 33.4198 3.16039 30.7148 3.69039 27.1848L4.98372 17.1414C5.83372 12.5364 8.94205 10.9264 11.3487 10.9264C11.5565 9.01057 12.4204 7.18794 13.7909 5.82177C15.3659 4.25677 17.5376 3.36011 19.7559 3.36011H19.7909ZM28.3137 13.4264H11.3487C10.6137 13.4264 8.15705 13.7231 7.45205 17.5298L6.16539 27.5298C5.74705 30.3348 6.07039 32.3648 7.12872 33.5931C8.17372 34.8064 10.0437 35.3964 12.8437 35.3964H26.7571C28.5037 35.3964 30.8887 35.0481 32.3287 33.3848C33.4721 32.0664 33.8654 30.1031 33.4987 27.5481L32.2004 17.4614C31.6471 14.9764 30.1871 13.4264 28.3137 13.4264ZM19.7859 5.86011H19.7609C18.1926 5.86011 16.6642 6.49177 15.5559 7.59344C14.6531 8.49222 14.0626 9.67377 13.8716 10.9257L25.6704 10.9261C25.2421 8.0624 22.7657 5.86011 19.7859 5.86011Z\"
                    fill=\"#0F0F0F\" />
                </svg>
\t\t\t\t<span>";
        // line 144
        echo ($context["cart_nums"] ?? null);
        echo "</span>
              </a>
            </div>
            <div>
\t\t\t";
        // line 148
        if (($context["logged"] ?? null)) {
            // line 149
            echo "              <a href=\"";
            echo ($context["account"] ?? null);
            echo "\" class=\"topNavI\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\">
                  <path
                    d=\"M20.8949 25.5525C28.1259 25.5525 34.2282 26.7275 34.2282 31.2609C34.2282 35.7959 28.0859 36.9293 20.8949 36.9293C13.6655 36.9293 7.56152 35.7543 7.56152 31.2209C7.56152 26.6858 13.7038 25.5525 20.8949 25.5525ZM20.8949 3.59595C25.7934 3.59595 29.7182 7.51932 29.7182 12.4144C29.7182 17.3094 25.7934 21.2345 20.8949 21.2345C15.998 21.2345 12.0715 17.3094 12.0715 12.4144C12.0715 7.51932 15.998 3.59595 20.8949 3.59595Z\"
                    fill=\"#32B46F\" />
                </svg>
\t\t\t\t
              </a>
\t\t\t";
        } else {
            // line 158
            echo "              <a href=\"";
            echo ($context["account"] ?? null);
            echo "\" class=\"topNavI\" data-bs-toggle=\"modal\" data-bs-target=\"#login\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\">
                  <path
                    d=\"M20.8949 25.5525C28.1259 25.5525 34.2282 26.7275 34.2282 31.2609C34.2282 35.7959 28.0859 36.9293 20.8949 36.9293C13.6655 36.9293 7.56152 35.7543 7.56152 31.2209C7.56152 26.6858 13.7038 25.5525 20.8949 25.5525ZM20.8949 3.59595C25.7934 3.59595 29.7182 7.51932 29.7182 12.4144C29.7182 17.3094 25.7934 21.2345 20.8949 21.2345C15.998 21.2345 12.0715 17.3094 12.0715 12.4144C12.0715 7.51932 15.998 3.59595 20.8949 3.59595Z\"
                    fill=\"#32B46F\" />
                </svg>
              </a>
            ";
        }
        // line 166
        echo "            </div>
          </div>
        </div>
      </div>
    </section>
\t<div class=\"favoritePanel\">
      <div class=\"closefpanel\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
          fill=\"none\">
          <path
            d=\"M23.9351 19.9501L20.6332 23.252L0.748044 3.36676L4.04991 0.0648991L23.9351 19.9501ZM23.9104 3.79563L3.79563 23.9104L0.109493 20.2243L20.2243 0.109493L23.9104 3.79563Z\"
            fill=\"black\" fill-opacity=\"0.4\" />
        </svg></div>
      <div class=\"fpanelTitle\">Favorites</div>
      <div class=\"scrolls\">
        <div class=\"fpanItems\">
\t\t\t";
        // line 181
        echo ($context["products_wishlist"] ?? null);
        echo "
        </div>
      </div>
    </div>
\t<div class=\"orderPanel\">
\t\t<div class=\"closefpanel\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
\t\t\t  fill=\"none\">
\t\t\t  <path
\t\t\t\td=\"M23.9351 19.9501L20.6332 23.252L0.748044 3.36676L4.04991 0.0648991L23.9351 19.9501ZM23.9104 3.79563L3.79563 23.9104L0.109493 20.2243L20.2243 0.109493L23.9104 3.79563Z\"
\t\t\t\tfill=\"black\" fill-opacity=\"0.4\" />
\t\t\t</svg>
\t\t</div>
      <div class=\"scrolls\">
\t\t<div class=\"fpanelTitle\">Your order</div>
\t\t
\t\t<div id=\"cartRows\">";
        // line 197
        echo ($context["cart"] ?? null);
        echo "</div>
      
\t  </div>
\t</div>
\t<div class=\"nav_panel\">
\t\t<div class=\"closefpanel\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
          fill=\"none\">
          <path
            d=\"M23.9351 19.9501L20.6332 23.252L0.748044 3.36676L4.04991 0.0648991L23.9351 19.9501ZM23.9104 3.79563L3.79563 23.9104L0.109493 20.2243L20.2243 0.109493L23.9104 3.79563Z\"
            fill=\"black\" fill-opacity=\"0.4\" />
        </svg></div>
\t\t<div class=\"scrolls\">
\t\t\t";
        // line 209
        echo ($context["menu"] ?? null);
        echo "
\t\t</div>
\t</div>
\t
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 209,  407 => 197,  388 => 181,  371 => 166,  359 => 158,  346 => 149,  344 => 148,  337 => 144,  324 => 138,  319 => 136,  306 => 130,  299 => 126,  289 => 119,  282 => 114,  276 => 112,  274 => 111,  271 => 110,  265 => 107,  262 => 106,  260 => 105,  250 => 98,  246 => 97,  242 => 96,  238 => 95,  234 => 94,  230 => 93,  226 => 92,  198 => 66,  189 => 64,  184 => 63,  173 => 61,  169 => 60,  166 => 59,  157 => 57,  152 => 56,  139 => 54,  135 => 53,  120 => 40,  118 => 39,  111 => 33,  107 => 31,  105 => 30,  92 => 20,  89 => 19,  83 => 17,  80 => 16,  74 => 14,  72 => 13,  68 => 12,  64 => 11,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}

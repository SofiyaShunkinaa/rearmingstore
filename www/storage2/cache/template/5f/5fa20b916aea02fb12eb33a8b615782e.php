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

/* default/template/account/order_list.twig */
class __TwigTemplate_6a8bb2b9841fd3166c4b471cc3569bd7 extends Template
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
<section class=\"catalog\">
  <div class=\"container\">
\t<div class=\"row\">
\t  <div class=\"col-md-4\">
\t\t";
        // line 7
        echo ($context["column_left"] ?? null);
        echo "
\t  </div>
\t  <div class=\"col-md-8\">
\t\t<nav class=\"breadcrumb\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12)) {
                // line 13
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
                echo "\"  class=\"breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</a>
\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
                echo "</span>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</nav>
\t\t<div class=\"pagetitle\">
\t\t  <h1 class=\"titlepage\">";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t</div>
\t\t";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
\t\t<div class=\"row\">
\t\t  <div class=\"col-md-12\">
\t\t  ";
        // line 25
        if (($context["orders"] ?? null)) {
            // line 26
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 27
                echo "\t\t\t<div class=\"orderCard\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t  <h2>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["order"], "catname", [], "any", false, false, false, 30);
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 30);
                echo "</span></h2>
\t\t\t\t  <p>";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 31);
                echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t  <a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 34);
                echo "\" data-toggle=\"tooltip\" class=\"btn btn-outline-primary ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "statuscls", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 34);
                echo "</a>
\t\t\t\t  <div></div>
\t\t\t\t  <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#request\" class=\"chartSupport\">Chat with support</a>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t  <div class=\"ocinfo\">
\t\t\t\t\t<div>Order</div>
\t\t\t\t\t<div>LHC";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 43);
                echo "</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"ocinfo\">
\t\t\t\t\t<div>Region</div>
\t\t\t\t\t<div>";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["order"], "server", [], "any", false, false, false, 47);
                echo "</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"ocinfo\">
\t\t\t\t\t<div>Start Date</div>
\t\t\t\t\t<div>";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 51);
                echo "</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"ocinfo\">
\t\t\t\t\t<div>Deadline</div>
\t\t\t\t\t<div>ASAP</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"ocinfo\">
\t\t\t\t\t<div>Acc free house</div>
\t\t\t\t\t<div>Any</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t<p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
\t\t\t";
        }
        // line 68
        echo "\t\t  </div>
\t\t</div>
          
\t\t";
        // line 71
        echo ($context["content_bottom"] ?? null);
        echo "
\t  </div>
\t</div>

  </div>
</section>
";
        // line 77
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 77,  183 => 71,  178 => 68,  172 => 66,  169 => 65,  149 => 51,  142 => 47,  135 => 43,  119 => 34,  113 => 31,  107 => 30,  102 => 27,  97 => 26,  95 => 25,  89 => 22,  84 => 20,  80 => 18,  74 => 17,  68 => 15,  60 => 13,  57 => 12,  53 => 11,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/order_list.twig", "");
    }
}

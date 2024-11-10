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

/* default/template/common/success.twig */
class __TwigTemplate_e75a52e1c8352796c189d7381f607211 extends Template
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
\t  <div class=\"col-md-3\">
\t\t";
        // line 7
        echo ($context["column_left"] ?? null);
        echo "
\t  </div>
\t  <div class=\"col-md-9\">
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
\t\t\t";
        // line 25
        echo ($context["text_message"] ?? null);
        echo "
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
        // line 27
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t\t";
        // line 31
        echo ($context["content_bottom"] ?? null);
        echo "
\t  </div>
\t</div>

  </div>
</section>

                <script type=\"text/javascript\">
                    var trustpilot_invitation = ";
        // line 39
        echo ((array_key_exists("Trustpilot_orderData", $context)) ? (_twig_default_filter(($context["Trustpilot_orderData"] ?? null), "''")) : ("''"));
        echo ";
                </script>
                <script type=\"text/javascript\" src=\"/catalog/view/javascript/trustpilot/invite.min.js\"></script>
            
";
        // line 43
        echo ($context["footer"] ?? null);
        echo "


";
        // line 46
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-success\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 50
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 50);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 50);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  </ul>
  <div class=\"row\">";
        // line 53
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 54
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 55
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 56
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 57
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 60
            echo "    ";
        }
        // line 61
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 62
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 63
        echo ($context["text_message"] ?? null);
        echo "
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 65
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 67
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 69
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>

                <script type=\"text/javascript\">
                    var trustpilot_invitation = ";
        // line 74
        echo ((array_key_exists("Trustpilot_orderData", $context)) ? (_twig_default_filter(($context["Trustpilot_orderData"] ?? null), "''")) : ("''"));
        echo ";
                </script>
                <script type=\"text/javascript\" src=\"/catalog/view/javascript/trustpilot/invite.min.js\"></script>
            
";
        // line 78
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 78,  217 => 74,  209 => 69,  204 => 67,  197 => 65,  192 => 63,  188 => 62,  181 => 61,  178 => 60,  175 => 59,  172 => 58,  169 => 57,  166 => 56,  163 => 55,  161 => 54,  157 => 53,  154 => 52,  143 => 50,  139 => 49,  133 => 46,  127 => 43,  120 => 39,  109 => 31,  100 => 27,  95 => 25,  89 => 22,  84 => 20,  80 => 18,  74 => 17,  68 => 15,  60 => 13,  57 => 12,  53 => 11,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/success.twig", "");
    }
}

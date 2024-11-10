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

/* default/template/account/password.twig */
class __TwigTemplate_1a648dfe2e4345d88f34c9a9c0495c37 extends Template
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
\t\t\t<form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\"  class=\"loginform formCh\">
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t  <input type=\"password\" name=\"old_password\" value=\"";
        // line 28
        echo ($context["old_password"] ?? null);
        echo "\" placeholder=\"Old password\" class=\"form-control\">
\t\t\t\t  ";
        // line 29
        if (($context["error_old_password"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_old_password"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 32
        echo "\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t  <input type=\"password\" name=\"password\" value=\"";
        // line 36
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"Password\" class=\"form-control\">
\t\t\t\t  ";
        // line 37
        if (($context["error_password"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 40
        echo "\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t  <input type=\"password\" name=\"confirm\" value=\"";
        // line 44
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"Password Confirm\" class=\"form-control\">
\t\t\t\t  ";
        // line 45
        if (($context["error_confirm"] ?? null)) {
            // line 46
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 48
        echo "\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t  <button type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 52
        echo ($context["button_continue"] ?? null);
        echo "\">Save password</button>
\t\t\t\t</div>
\t\t\t  </div>

\t\t\t</form>
\t\t  </div>
\t\t</div>
\t\t";
        // line 59
        echo ($context["content_bottom"] ?? null);
        echo "
\t  </div>
\t</div>

  </div>
</section>
";
        // line 65
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 65,  165 => 59,  155 => 52,  149 => 48,  143 => 46,  141 => 45,  137 => 44,  131 => 40,  125 => 38,  123 => 37,  119 => 36,  113 => 32,  107 => 30,  105 => 29,  101 => 28,  95 => 25,  89 => 22,  84 => 20,  80 => 18,  74 => 17,  68 => 15,  60 => 13,  57 => 12,  53 => 11,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/password.twig", "");
    }
}

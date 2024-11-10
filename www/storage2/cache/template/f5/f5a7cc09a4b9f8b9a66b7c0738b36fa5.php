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

/* default/template/account/login.twig */
class __TwigTemplate_b12ee982dfd13c6741b20d9708695b26 extends Template
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
        echo ($context["text_my_account"] ?? null);
        echo "</h1>
\t\t</div>
\t\t";
        // line 22
        if (($context["success"] ?? null)) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t\t";
        }
        // line 25
        echo "\t\t";
        echo ($context["content_top"] ?? null);
        echo "
\t\t<div class=\"row\">
\t\t  <div class=\"col-md-12\">
\t\t\t<form  action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"loginform formCh\">
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-email\">";
        // line 31
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 32
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t  <label class=\"control-label\" for=\"input-password\">";
        // line 37
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 38
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t  <button type=\"submit\" class=\"btn btn-primary\">Submit request</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"controls\">
\t\t\t\t  <a href=\"";
        // line 46
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
\t\t\t\t  <br>
\t\t\t\t  <a href=\"";
        // line 48
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["text_new_customer"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t  </div>

\t\t\t</form>
\t\t  </div>
\t\t</div>
\t\t";
        // line 55
        echo ($context["content_bottom"] ?? null);
        echo "
\t  </div>
\t</div>

  </div>
</section>
";
        // line 61
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  160 => 55,  148 => 48,  141 => 46,  128 => 38,  124 => 37,  114 => 32,  110 => 31,  104 => 28,  97 => 25,  91 => 23,  89 => 22,  84 => 20,  80 => 18,  74 => 17,  68 => 15,  60 => 13,  57 => 12,  53 => 11,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}

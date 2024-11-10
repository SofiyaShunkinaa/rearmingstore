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

/* common/column_left.twig */
class __TwigTemplate_39f14f378563f0648a9178e4f2b3d8e9 extends Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> ";
        // line 2
        echo ($context["text_navigation"] ?? null);
        echo "</div>
  <ul id=\"menu\">
    ";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "      <li id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 6);
            echo "\">
        ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7)) {
                // line 8
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 8);
                echo "\"><i class=\"fa ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 8);
                echo " fw\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 8);
                echo "</a>
        ";
            } else {
                // line 10
                echo "          <a href=\"#collapse";
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 10);
                echo " fw\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 10);
                echo "</a>
        ";
            }
            // line 12
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 12)) {
                // line 13
                echo "          <ul id=\"collapse";
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse\">
            ";
                // line 14
                $context["j"] = 0;
                // line 15
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 15));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 16
                    echo "              <li>
                ";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 17)) {
                        // line 18
                        echo "                  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 18);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 18);
                        echo "</a>
                ";
                    } else {
                        // line 20
                        echo "                  <a href=\"#collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 20);
                        echo "</a>
                ";
                    }
                    // line 22
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "                  <ul id=\"collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" class=\"collapse\">
                    ";
                        // line 24
                        $context["k"] = 0;
                        // line 25
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 25));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 26
                            echo "                      <li>
                        ";
                            // line 27
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 27)) {
                                // line 28
                                echo "                          <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 28);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 28);
                                echo "</a>
                        ";
                            } else {
                                // line 30
                                echo "                          <a href=\"#collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 30);
                                echo "</a>
                        ";
                            }
                            // line 32
                            echo "                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 32)) {
                                // line 33
                                echo "                          <ul id=\"collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" class=\"collapse\">
                            ";
                                // line 34
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 34));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 35
                                    echo "                              <li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 35);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 35);
                                    echo "</a></li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 37
                                echo "                          </ul>
                        ";
                            }
                            // line 38
                            echo "</li>
                      ";
                            // line 39
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 40
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "                  </ul>
                ";
                    }
                    // line 42
                    echo " </li>
              ";
                    // line 43
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </ul>
        ";
            }
            // line 47
            echo "      </li>
      ";
            // line 48
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 49
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 54
        echo ($context["text_complete_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 56
        echo ($context["complete_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["complete_status"] ?? null);
        echo "%\">
            <span class=\"sr-only\">";
        // line 57
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 61
        echo ($context["text_processing_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 63
        echo ($context["processing_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["processing_status"] ?? null);
        echo "%\">
            <span class=\"sr-only\">";
        // line 64
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 68
        echo ($context["text_other_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 70
        echo ($context["other_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["other_status"] ?? null);
        echo "%\">
            <span class=\"sr-only\">";
        // line 71
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 71,  284 => 70,  277 => 68,  270 => 64,  264 => 63,  257 => 61,  250 => 57,  244 => 56,  237 => 54,  231 => 50,  225 => 49,  223 => 48,  220 => 47,  216 => 45,  210 => 44,  208 => 43,  205 => 42,  201 => 41,  195 => 40,  193 => 39,  190 => 38,  186 => 37,  175 => 35,  171 => 34,  162 => 33,  159 => 32,  147 => 30,  139 => 28,  137 => 27,  134 => 26,  129 => 25,  127 => 24,  120 => 23,  117 => 22,  107 => 20,  99 => 18,  97 => 17,  94 => 16,  89 => 15,  87 => 14,  82 => 13,  79 => 12,  69 => 10,  59 => 8,  57 => 7,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/column_left.twig", "");
    }
}

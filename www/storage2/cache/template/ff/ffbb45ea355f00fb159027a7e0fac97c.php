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

/* default/template/extension/module/banner2.twig */
class __TwigTemplate_95e0627a13500a5ebae52a0f14c47162 extends Template
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
        echo "<section class=\"slider\" id=\"banner";
        echo ($context["module"] ?? null);
        echo "\">
  <div class=\"container\">
\t<div class=\"row\">
\t  <div class=\"col-md-12\">
\t\t<div class=\"sliderbg\">
\t\t  <div class=\"slider_txt\">
\t\t\t<p>Choose your destiny in our catalogue</p>
\t\t\t<a href=\"/index.php?route=product/category&path=79\" class=\"btn btn-lg\">Catalog</a>
\t\t  </div>
\t\t  <div class=\"swiper\">
\t\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 13
            echo "\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t  ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 14)) {
                // line 15
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 15);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 15);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 15);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t  ";
            } else {
                // line 17
                echo "\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 17);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 17);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t  ";
            }
            // line 19
            echo "\t\t\t\t</div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</div>
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  79 => 19,  71 => 17,  61 => 15,  59 => 14,  56 => 13,  52 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/banner2.twig", "");
    }
}

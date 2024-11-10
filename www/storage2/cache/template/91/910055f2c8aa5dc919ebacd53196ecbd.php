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

/* default/template/common/home.twig */
class __TwigTemplate_6058458f2741e93db4a008b9a0e22109 extends Template
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
<div style=\"overflow: hidden;\">
    <section class=\"mainBanner\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"overlap-group-wrapper\">
              <div class=\"overlap-group\">
                <img class=\"element\" src=\"img/re_3_1.png\" />
                <div class=\"div\">
                  <p class=\"no-more-grinding\">No More Grinding — <span style=\"color: #ff7147;\">Play</span> The Way It’s Meant!</p>
                  <p class=\"boost-your-level\">
                    <span class=\"text-wrapper-2\">Boost</span>
                    <span class=\"text-wrapper-3\"> your level, skill and equipment with pro-gamers onboard</span>
                  </p>
                  <div class=\"div-wrapper\">
                    <a href=\"/index.php?route=product/category&path=79\" class=\"text-wrapper-4\">Boost</a>
                    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#createAkk\" class=\"text-wrapper-5\">Registration</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"deals3row\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <a href=\"/index.php?route=product/category&path=66\">
              <span class=\"deals3title\">Newbie boost</span>
              <span class=\"deals3txt\">It will take <b>only 3 day</b> to get you get 20-level character</span>
              <span class=\"btn btn-lg\">Get</span>
            </a>
          </div>
          <div class=\"col-md-4\">
            <a href=\"/index.php?route=product/category&path=68\">
              <span class=\"deals3title\">True PvP <b>-20%</b></span>
              <span class=\"deals3txt\">Improve your PvP-rating for <b>at least 20%</b></span>
              <span class=\"btn btn-lg\">Get</span>
            </a>
          </div>
          <div class=\"col-md-4\">
            <a href=\"/index.php?route=product/category&path=61\">
              <span class=\"deals3title\">It’s <b>Raid</b> time!</span>
              <span class=\"deals3txt\">Raid boost with <b>15%</b> discount</span>
              <span class=\"btn btn-lg\">Get</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    
    
    ";
        // line 56
        echo ($context["content_top"] ?? null);
        echo "
    ";
        // line 57
        echo ($context["content_bottom"] ?? null);
        echo "
</div>

";
        // line 60
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  99 => 57,  95 => 56,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}

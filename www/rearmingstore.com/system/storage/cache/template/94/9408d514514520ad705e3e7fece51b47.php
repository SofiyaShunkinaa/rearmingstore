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

/* default/template/extension/module/testimonial.twig */
class __TwigTemplate_a7e42618cfc56ff4e6ef862266a36544 extends Template
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
        if (($context["testimonials"] ?? null)) {
            // line 2
            echo "<section class=\"reviews\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"mbs-4t\">Reviews</div>
          </div>
        </div>
      </div>
      <div class=\"swiper\">
        <div class=\"swiper-wrapper\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 13
                echo "          <div class=\"swiper-slide\">
            <div class=\"review\">
              <div class=\"avatar\">
                <img src=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "photo", [], "any", false, false, false, 16);
                echo "\">
              </div>
              <div class=\"name\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 18);
                echo "</div>
              <div class=\"rev_cont\">
                ";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "text", [], "any", false, false, false, 20);
                echo "
              </div>
              <!--<div class=\"rev_btn\"><a href=\"#\">Читать весь отзыв</a></div>-->
            </div>
          </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
      </div>
      <div class=\"swippernaw\">
        <div class=\"swiper-prev\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" fill=\"none\">
            <g filter=\"url(#filter0_b_132_2968)\">
              <circle cx=\"30\" cy=\"30\" r=\"29.5\" transform=\"rotate(180 30 30)\" stroke=\"black\" />
            </g>
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
              d=\"M33.2747 42.3647L22.405 31.6651C21.738 31.0085 21.738 29.944 22.405 29.2874L33.2747 18.5877C33.9418 17.9311 35.0232 17.9311 35.6902 18.5877C36.3572 19.2443 36.3572 20.3088 35.6902 20.9654L26.0283 30.4762L35.6902 39.987C36.3572 40.6436 36.3572 41.7082 35.6902 42.3647C35.0232 43.0213 33.9418 43.0213 33.2747 42.3647Z\"
              fill=\"black\" />
            <defs>
              <filter id=\"filter0_b_132_2968\" x=\"-9\" y=\"-9\" width=\"78\" height=\"78\" filterUnits=\"userSpaceOnUse\"
                color-interpolation-filters=\"sRGB\">
                <feFlood flood-opacity=\"0\" result=\"BackgroundImageFix\" />
                <feGaussianBlur in=\"BackgroundImageFix\" stdDeviation=\"4.5\" />
                <feComposite in2=\"SourceAlpha\" operator=\"in\" result=\"effect1_backgroundBlur_132_2968\" />
                <feBlend mode=\"normal\" in=\"SourceGraphic\" in2=\"effect1_backgroundBlur_132_2968\" result=\"shape\" />
              </filter>
            </defs>
          </svg>
        </div>
        <div class=\"swiper-next\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" fill=\"none\">
            <g filter=\"url(#filter0_b_132_2972)\">
              <circle cx=\"30\" cy=\"30\" r=\"29.5\" transform=\"matrix(1 8.74228e-08 8.74228e-08 -1 0 60)\" stroke=\"black\" />
            </g>
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
              d=\"M26.7253 42.3647L37.595 31.6651C38.262 31.0085 38.262 29.944 37.595 29.2874L26.7253 18.5877C26.0583 17.9311 24.9769 17.9311 24.3098 18.5877C23.6428 19.2443 23.6428 20.3088 24.3098 20.9654L33.9718 30.4762L24.3098 39.987C23.6428 40.6436 23.6428 41.7082 24.3098 42.3647C24.9769 43.0213 26.0583 43.0213 26.7253 42.3647Z\"
              fill=\"black\" />
            <defs>
              <filter id=\"filter0_b_132_2972\" x=\"-9\" y=\"-9\" width=\"78\" height=\"78\" filterUnits=\"userSpaceOnUse\"
                color-interpolation-filters=\"sRGB\">
                <feFlood flood-opacity=\"0\" result=\"BackgroundImageFix\" />
                <feGaussianBlur in=\"BackgroundImageFix\" stdDeviation=\"4.5\" />
                <feComposite in2=\"SourceAlpha\" operator=\"in\" result=\"effect1_backgroundBlur_132_2972\" />
                <feBlend mode=\"normal\" in=\"SourceGraphic\" in2=\"effect1_backgroundBlur_132_2972\" result=\"shape\" />
              </filter>
            </defs>
          </svg>
        </div>
      </div>
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/testimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  70 => 20,  65 => 18,  60 => 16,  55 => 13,  51 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/testimonial.twig", "");
    }
}

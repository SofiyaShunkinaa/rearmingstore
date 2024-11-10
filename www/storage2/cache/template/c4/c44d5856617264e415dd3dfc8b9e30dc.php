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

/* default/template/checkout/guest.twig */
class __TwigTemplate_bdde778156e406bc4912fe6e294b28fd extends Template
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
        echo "<div class=\"sp\"><strong>Your details</strong></div>
  <form action=\"\" class=\"orderForm\">
\t<div class=\"formCh\">
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"emailBy\" class=\"form-check-label\">Your email*</label>
\t\t  <input type=\"text\" id=\"emailBy\" name=\"email\" value=\"";
        // line 7
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"example@mail.com\" 
\t\t\tclass=\"form-control\" />
\t\t  <span class=\"error_email invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  ";
        // line 21
        echo "\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"discord\" class=\"form-check-label\">Discord*</label>
\t\t  <input type=\"text\" id=\"discord\" name=\"discord\" value=\"";
        // line 24
        echo ($context["discord"] ?? null);
        echo "\" placeholder=\"discordname#1234\"
\t\t\tclass=\"form-control\" />
\t\t  <span class=\"error_discord invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"nickname\" class=\"form-check-label\">Nickname</label>
\t\t  <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 32
        echo ($context["nickname"] ?? null);
        echo "\" placeholder=\"Name\" class=\"form-control\" />
\t\t  <span class=\"error_nickname invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"server\" class=\"form-check-label\">Server</label>
\t\t  <input type=\"text\" id=\"server\" name=\"server\" value=\"";
        // line 39
        echo ($context["server"] ?? null);
        echo "\" placeholder=\"2763876374534\"
\t\t\tclass=\"form-control\" />
\t\t  <span class=\"error_server invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <label for=\"battletag\" class=\"form-check-label\">Battletag</label>
\t\t  <input type=\"text\" id=\"battletag\" name=\"battletag\" value=\"";
        // line 47
        echo ($context["battletag"] ?? null);
        echo "\" placeholder=\"#15153\" class=\"form-control\" />
\t\t  <span class=\"error_battletag invalid-feedback\"></span>
\t\t</div>
\t  </div>
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <div class=\"subtitlePayment\">Payment method</div>
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 57
        echo ($context["payment_method"] ?? null);
        echo "
<h2>test</h2>
      ";
        // line 59
        if (array_key_exists("modules", $context)) {
            // line 60
            echo "      <h2>MODULES</h2>
        <h2>";
            // line 61
            echo ($context["text_next"] ?? null);
            echo "</h2>
        <p>";
            // line 62
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
        <div class=\"panel-group\" id=\"accordion\">
          ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 65
                echo "            ";
                echo $context["module"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        </div>
      ";
        } else {
            // line 69
            echo "      <h2>NO MODULES</h2>
      ";
        }
        // line 71
        echo "\t<div class=\"form-group form-check\">
        <label class=\"form-check-label\"></label>
            <input class=\"form-check-input form-control\" type=\"checkbox\" name=\"agree_terms\" id=\"agree_terms\">
            I agree with <a href=\"index.php?route=information/information&information_id=3\" target=\"_blank\">Privacy Policy</a>, <a href=\"index.php?route=information/information&information_id=6\" target=\"_blank\">Refund Policy</a> and <a href=\"index.php?route=information/information&information_id=5\" target=\"_blank\">Terms of Service</a>
        
        
            <span class=\"error_agree_terms invalid-feedback\">";
        // line 77
        echo ($context["error_agree_terms"] ?? null);
        echo "</span>
       
    </div>

\t<div class=\"formCh\">
\t  <div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t  <button type=\"submit\" class=\"btn btn-primary\">Place order</button>
\t\t</div>
\t  </div>
\t</div>

  </form>
  
  ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 77,  143 => 71,  139 => 69,  135 => 67,  126 => 65,  122 => 64,  117 => 62,  113 => 61,  110 => 60,  108 => 59,  103 => 57,  90 => 47,  79 => 39,  69 => 32,  58 => 24,  53 => 21,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/guest.twig", "");
    }
}

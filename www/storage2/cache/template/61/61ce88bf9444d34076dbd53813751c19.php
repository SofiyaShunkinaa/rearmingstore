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

/* default/template/extension/total/voucher.twig */
class __TwigTemplate_2e4420c61ac02f3fb0ed474c1a71cac4 extends Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\"><a href=\"#collapse-voucher\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-voucher\" class=\"panel-collapse collapse\">
    <div class=\"panel-body\">
      <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
        // line 7
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" name=\"voucher\" value=\"";
        // line 9
        echo ($context["voucher"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
          <input type=\"submit\" value=\"";
        // line 11
        echo ($context["button_voucher"] ?? null);
        echo "\" id=\"button-voucher\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\"  class=\"btn btn-primary\"/>
        </span>
      </div>
      <script type=\"text/javascript\"><!--
      \$('#button-voucher').on('click', function () {
          \$.ajax({
              url: 'index.php?route=extension/total/voucher/voucher',
              type: 'post',
              data: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
              dataType: 'json',
              beforeSend: function () {
                  \$('#button-voucher').button('loading');
              },
              complete: function () {
                  \$('#button-voucher').button('reset');
              },
              success: function (json) {
                  \$('.alert-dismissible').remove();

                  if (json['error']) {
                      \$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                      \$('html, body').animate({scrollTop: 0}, 'slow');
                  }

                  if (json['redirect']) {
                      location = json['redirect'];
                  }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      });
      //--></script>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  53 => 9,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/total/voucher.twig", "");
    }
}

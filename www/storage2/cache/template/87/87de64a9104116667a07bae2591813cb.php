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

/* default/template/extension/total/shipping.twig */
class __TwigTemplate_6192f65b0f4ef6eadce34f9212123c49 extends Template
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
    <h4 class=\"panel-title\"><a href=\"#collapse-shipping\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-shipping\" class=\"panel-collapse collapse\">
    <div class=\"panel-body\">
      <p>";
        // line 7
        echo ($context["text_shipping"] ?? null);
        echo "</p>
      <div class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 10
        echo ($context["entry_country"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
              <option value=\"\">";
        // line 13
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 15
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 15) == ($context["country_id"] ?? null))) {
                // line 16
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 16);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 16);
                echo "</option>
                ";
            } else {
                // line 18
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 18);
                echo "</option>
                ";
            }
            // line 20
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 25
        echo ($context["entry_zone"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
            </select>
          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 32
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"postcode\" value=\"";
        // line 34
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\"/>
          </div>
        </div>
        <button type=\"button\" id=\"button-quote\" data-loading-text=\"";
        // line 37
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_quote"] ?? null);
        echo "</button>
      </div>
      <script type=\"text/javascript\"><!--
      \$('#button-quote').on('click', function () {
          \$.ajax({
              url: 'index.php?route=extension/total/shipping/quote',
              type: 'post',
              data: 'country_id=' + \$('select[name=\\'country_id\\']').val() + '&zone_id=' + \$('select[name=\\'zone_id\\']').val() + '&postcode=' + encodeURIComponent(\$('input[name=\\'postcode\\']').val()),
              dataType: 'json',
              beforeSend: function () {
                  \$('#button-quote').button('loading');
              },
              complete: function () {
                  \$('#button-quote').button('reset');
              },
              success: function (json) {
                  \$('.alert-dismissible, .text-danger').remove();

                  if (json['error']) {
                      if (json['error']['warning']) {
                          \$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                          \$('html, body').animate({scrollTop: 0}, 'slow');
                      }

                      if (json['error']['country']) {
                          \$('select[name=\\'country_id\\']').after('<div class=\"text-danger\">' + json['error']['country'] + '</div>');
                      }

                      if (json['error']['zone']) {
                          \$('select[name=\\'zone_id\\']').after('<div class=\"text-danger\">' + json['error']['zone'] + '</div>');
                      }

                      if (json['error']['postcode']) {
                          \$('input[name=\\'postcode\\']').after('<div class=\"text-danger\">' + json['error']['postcode'] + '</div>');
                      }
                  }

                  if (json['shipping_method']) {
                      \$('#modal-shipping').remove();

                      html = '<div id=\"modal-shipping\" class=\"modal\">';
                      html += '  <div class=\"modal-dialog\">';
                      html += '    <div class=\"modal-content\">';
                      html += '      <div class=\"modal-header\">';
                      html += '        <h4 class=\"modal-title\">";
        // line 82
        echo ($context["text_shipping_method"] ?? null);
        echo "</h4>';
                      html += '      </div>';
                      html += '      <div class=\"modal-body\">';

                      for (i in json['shipping_method']) {
                          html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

                          if (!json['shipping_method'][i]['error']) {
                              for (j in json['shipping_method'][i]['quote']) {
                                  html += '<div class=\"radio\">';
                                  html += '  <label>';

                                  if (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 94
        echo ($context["shipping_method"] ?? null);
        echo "') {
                                      html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" checked=\"checked\"/>';
                                  } else {
                                      html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\"/>';
                                  }

                                  html += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
                              }
                          } else {
                              html += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
                          }
                      }

                      html += '      </div>';
                      html += '      <div class=\"modal-footer\">';
                      html += '        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 109
        echo ($context["button_cancel"] ?? null);
        echo "</button>';

                      ";
        // line 111
        if (($context["shipping_method"] ?? null)) {
            // line 112
            echo "                          html += '        <input type=\"button\" value=\"";
            echo ($context["button_shipping"] ?? null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"/>';
                      ";
        } else {
            // line 114
            echo "                          html += '        <input type=\"button\" value=\"";
            echo ($context["button_shipping"] ?? null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" disabled=\"disabled\"/>';
                      ";
        }
        // line 116
        echo "
                      html += '      </div>';
                      html += '    </div>';
                      html += '  </div>';
                      html += '</div> ';

                      \$('body').append(html);

                      \$('#modal-shipping').modal('show');

                      \$('input[name=\\'shipping_method\\']').on('change', function () {
                          \$('#button-shipping').prop('disabled', false);
                      });
                  }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      });

      \$(document).delegate('#button-shipping', 'click', function () {
          \$.ajax({
              url: 'index.php?route=extension/total/shipping/shipping',
              type: 'post',
              data: 'shipping_method=' + encodeURIComponent(\$('input[name=\\'shipping_method\\']:checked').val()),
              dataType: 'json',
              beforeSend: function () {
                  \$('#button-shipping').button('loading');
              },
              complete: function () {
                  \$('#button-shipping').button('reset');
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
      <script type=\"text/javascript\"><!--
      \$('select[name=\\'country_id\\']').on('change', function () {
          \$.ajax({
              url: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,
              dataType: 'json',
              beforeSend: function () {
                  \$('select[name=\\'country_id\\']').prop('disabled', true);
              },
              complete: function () {
                  \$('select[name=\\'country_id\\']').prop('disabled', false);
              },
              success: function (json) {
                  if (json['postcode_required'] == '1') {
                      \$('input[name=\\'postcode\\']').parent().parent().addClass('required');
                  } else {
                      \$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
                  }

                  html = '<option value=\"\">";
        // line 186
        echo ($context["text_select"] ?? null);
        echo "</option>';

                  if (json['zone'] && json['zone'] != '') {
                      for (i = 0; i < json['zone'].length; i++) {
                          html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                          if (json['zone'][i]['zone_id'] == '";
        // line 192
        echo ($context["zone_id"] ?? null);
        echo "') {
                              html += ' selected=\"selected\"';
                          }

                          html += '>' + json['zone'][i]['name'] + '</option>';
                      }
                  } else {
                      html += '<option value=\"0\" selected=\"selected\">";
        // line 199
        echo ($context["text_none"] ?? null);
        echo "</option>';
                  }

                  \$('select[name=\\'zone_id\\']').html(html);
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      });

      \$('select[name=\\'country_id\\']').trigger('change');
      //--></script>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 199,  309 => 192,  300 => 186,  228 => 116,  220 => 114,  212 => 112,  210 => 111,  205 => 109,  187 => 94,  172 => 82,  122 => 37,  114 => 34,  109 => 32,  99 => 25,  93 => 21,  87 => 20,  79 => 18,  71 => 16,  68 => 15,  64 => 14,  60 => 13,  54 => 10,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/total/shipping.twig", "");
    }
}

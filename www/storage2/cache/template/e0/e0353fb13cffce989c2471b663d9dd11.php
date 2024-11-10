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

/* common/developer.twig */
class __TwigTemplate_3c14c2ffbd9af5a34b37a7830ae756cc extends Template
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
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\"><i class=\"fa fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td>";
        // line 12
        echo ($context["column_component"] ?? null);
        echo "</td>
              <td style=\"width: 150px;\">";
        // line 13
        echo ($context["entry_cache"] ?? null);
        echo "</td>
              <td class=\"text-right\" style=\"width: 1px;\">";
        // line 14
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
        // line 19
        echo ($context["entry_theme"] ?? null);
        echo "</td>
              <td>
                <div class=\"btn-group\" data-toggle=\"buttons\">
                  ";
        // line 22
        if (($context["developer_theme"] ?? null)) {
            // line 23
            echo "                    <label class=\"btn btn-success active\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                      <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            // line 24
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
                      ";
            // line 25
            echo ($context["button_on"] ?? null);
            echo "
                    </label>
                  ";
        } else {
            // line 28
            echo "                    <label class=\"btn btn-success\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                      <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            // line 29
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                      ";
            // line 30
            echo ($context["button_on"] ?? null);
            echo "
                    </label>
                  ";
        }
        // line 33
        echo "                  ";
        if ( !($context["developer_theme"] ?? null)) {
            // line 34
            echo "                    <label class=\"btn btn-danger active\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                      <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            // line 35
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
                      ";
            // line 36
            echo ($context["button_off"] ?? null);
            echo "
                    </label>
                  ";
        } else {
            // line 39
            echo "                    <label class=\"btn btn-danger\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                      <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            // line 40
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                      ";
            // line 41
            echo ($context["button_off"] ?? null);
            echo "
                    </label>
                  ";
        }
        // line 44
        echo "                </div>
              </td>
              <td class=\"text-right\"><button type=\"button\" value=\"theme\" data-toggle=\"tooltip\" title=\"";
        // line 46
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
            </tr>
            <tr>
              <td>";
        // line 49
        echo ($context["entry_sass"] ?? null);
        echo "</td>
              <td>
                <div class=\"btn-group\" data-toggle=\"buttons\">
                  ";
        // line 52
        if (($context["developer_sass"] ?? null)) {
            // line 53
            echo "                    <label class=\"btn btn-success active\">
                      <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\" checked>
                      ";
            // line 55
            echo ($context["button_on"] ?? null);
            echo "
                    </label>
                  ";
        } else {
            // line 58
            echo "                    <label class=\"btn btn-success\">
                      <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\">
                      ";
            // line 60
            echo ($context["button_on"] ?? null);
            echo "
                    </label>
                  ";
        }
        // line 63
        echo "                  ";
        if ( !($context["developer_sass"] ?? null)) {
            // line 64
            echo "                    <label class=\"btn btn-danger active\">
                      <input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\" checked>
                      ";
            // line 66
            echo ($context["button_off"] ?? null);
            echo "
                    </label>
                  ";
        } else {
            // line 69
            echo "                    <label class=\"btn btn-danger\">
                      <input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\">
                      ";
            // line 71
            echo ($context["button_off"] ?? null);
            echo "
                    </label>
                  ";
        }
        // line 74
        echo "                </div>
              </td>
              <td class=\"text-right\"><button type=\"button\" value=\"sass\" data-toggle=\"tooltip\" title=\"";
        // line 76
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
    \$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').on('change', function () {
        \$.ajax({
            url: 'index.php?route=common/developer/edit&user_token=";
        // line 87
        echo ($context["user_token"] ?? null);
        echo "',
            type: 'post',
            data: \$('input[name=\\'developer_theme\\']:checked, input[name=\\'developer_sass\\']:checked'),
            dataType: 'json',
            beforeSend: function () {
                \$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', true);
            },
            complete: function () {
                \$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', false);
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                if (json['success']) {
                    \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('#modal-developer table button').on('click', function () {
        var element = this;

        \$.ajax({
            url: 'index.php?route=common/developer/' + \$(element).attr('value') + '&user_token=";
        // line 118
        echo ($context["user_token"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                if (json['success']) {
                    \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
//--></script>
";
    }

    public function getTemplateName()
    {
        return "common/developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 118,  235 => 87,  221 => 76,  217 => 74,  211 => 71,  207 => 69,  201 => 66,  197 => 64,  194 => 63,  188 => 60,  184 => 58,  178 => 55,  174 => 53,  172 => 52,  166 => 49,  160 => 46,  156 => 44,  150 => 41,  144 => 40,  137 => 39,  131 => 36,  125 => 35,  118 => 34,  115 => 33,  109 => 30,  103 => 29,  96 => 28,  90 => 25,  84 => 24,  77 => 23,  75 => 22,  69 => 19,  61 => 14,  57 => 13,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/developer.twig", "");
    }
}

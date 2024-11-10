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

/* marketplace/installer.twig */
class __TwigTemplate_b33fd91a9f106c00fbd9d4f6243abe02 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 16
        echo ($context["text_upload"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 21
        echo ($context["text_upload"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"button-upload\"><span data-toggle=\"tooltip\" title=\"";
        // line 23
        echo ($context["help_upload"] ?? null);
        echo "\">";
        echo ($context["entry_upload"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <button type=\"button\" id=\"button-upload\" data-loading-text=\"";
        // line 25
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">
                  <i class=\"fa fa-upload\"></i> ";
        // line 26
        echo ($context["button_upload"] ?? null);
        echo "</button>
              </div>
            </div>
          </fieldset>
          <br/>
          <fieldset>
            <legend>";
        // line 32
        echo ($context["text_progress"] ?? null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 34
        echo ($context["entry_progress"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"progress\">
                  <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
                </div>
                <div id=\"progress-text\"></div>
              </div>
            </div>
          </fieldset>
          <br/>
          <fieldset>
            <legend>";
        // line 45
        echo ($context["text_history"] ?? null);
        echo "</legend>
            <div id=\"history\"></div>
          </fieldset>
        </form>
      </div>
    </div>
    <script type=\"text/javascript\"><!--
    \$('#history').delegate('.pagination a', 'click', function (e) {
        e.preventDefault();

        \$('#history').load(this.href);
    });

    \$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 58
        echo ($context["user_token"] ?? null);
        echo "');

    \$('#button-upload').on('click', function () {
        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\"/></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                // Reset everything
                \$('.alert-dismissible').remove();
                \$('#progress-bar').css('width', '0%');
                \$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
                \$('#progress-text').html('');

                \$.ajax({
                    url: 'index.php?route=marketplace/installer/upload&user_token=";
        // line 82
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-upload').button('loading');
                    },
                    complete: function () {
                        \$('#button-upload').button('reset');
                    },
                    success: function (json) {
                        if (json['error']) {
                            \$('#progress-bar').addClass('progress-bar-danger');
                            \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['text']) {
                            \$('#progress-bar').css('width', '20%');
                            \$('#progress-text').html(json['text']);
                        }

                        if (json['next']) {
                            next(json['next'], 1);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });

    function next(url, i) {
        i = i + 1;

        \$.ajax({
            url: url,
            dataType: 'json',
            success: function (json) {
                \$('#progress-bar').css('width', (i * 20) + '%');

                if (json['error']) {
                    \$('#progress-bar').addClass('progress-bar-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#progress-bar').addClass('progress-bar-success');
                    \$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');

                    \$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 136
        echo ($context["user_token"] ?? null);
        echo "');
                }

                if (json['text']) {
                    \$('#progress-text').html(json['text']);
                }

                if (json['next']) {
                    next(json['next'], i);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    // Uninstall
    \$('#history').on('click', '.btn-danger', function (e) {
        e.preventDefault();

        var element = this;

        \$.ajax({
            url: 'index.php?route=marketplace/install/uninstall&user_token=";
        // line 160
        echo ($context["user_token"] ?? null);
        echo "&extension_install_id=' + \$(this).attr('value'),
            dataType: 'json',
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['success']) {
                    \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 174
        echo ($context["user_token"] ?? null);
        echo "');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
</div>
";
        // line 184
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/installer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 184,  269 => 174,  252 => 160,  225 => 136,  168 => 82,  141 => 58,  125 => 45,  111 => 34,  106 => 32,  97 => 26,  93 => 25,  86 => 23,  81 => 21,  73 => 16,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/installer.twig", "");
    }
}

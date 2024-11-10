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

/* design/theme.twig */
class __TwigTemplate_ea5cbb3c92a39586e4530057016191bf extends Template
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
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 16
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12\">
            <div class=\"list-group\">
              <div class=\"list-group-item\">
                <h4 class=\"list-group-item-heading\">";
        // line 23
        echo ($context["text_store"] ?? null);
        echo "</h4>
              </div>
              <div class=\"list-group-item\">
                <select name=\"store_id\" class=\"form-control\">
                  <option value=\"0\">";
        // line 27
        echo ($context["text_default"] ?? null);
        echo "</option>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 29
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 29);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </select>
              </div>
            </div>
            <div class=\"list-group\">
              <div class=\"list-group-item\">
                <h4 class=\"list-group-item-heading\">";
        // line 36
        echo ($context["text_template"] ?? null);
        echo "</h4>
              </div>
              <div id=\"path\"></div>
            </div>
          </div>
          <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 42
        echo ($context["text_twig"] ?? null);
        echo "</div>
            <div id=\"recent\">
              <fieldset>
                <legend>";
        // line 45
        echo ($context["text_history"] ?? null);
        echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
            </div>
            <div id=\"code\" style=\"display: none;\">
              <ul class=\"nav nav-tabs\">
              </ul>
              <div class=\"tab-content\"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\"><!--
  \$('select[name=\"store_id\"]').on('change', function (e) {
      \$.ajax({
          url: 'index.php?route=design/theme/path&user_token=";
        // line 67
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val(),
          dataType: 'json',
          beforeSend: function () {
              \$('select[name=\"store_id\"]').prop('disabled', true);
          },
          complete: function () {
              \$('select[name=\"store_id\"]').prop('disabled', false);
          },
          success: function (json) {
              html = '';

              if (json['directory']) {
                  for (i = 0; i < json['directory'].length; i++) {
                      html += '<a href=\"' + json['directory'][i]['path'] + '\" class=\"list-group-item directory\">' + json['directory'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
                  }
              }

              if (json['file']) {
                  for (i = 0; i < json['file'].length; i++) {
                      html += '<a href=\"' + json['file'][i]['path'] + '\" class=\"list-group-item file\">' + json['file'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
                  }
              }

              \$('#path').html(html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('select[name=\"store_id\"]').trigger('change');

  \$('#path').on('click', 'a.directory', function (e) {
      e.preventDefault();

      var element = this;

      \$.ajax({
          url: 'index.php?route=design/theme/path&user_token=";
        // line 106
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val() + '&path=' + \$(element).attr('href'),
          dataType: 'json',
          beforeSend: function () {
              \$(element).find('i').removeClass('fa-arrow-right');
              \$(element).find('i').addClass('fa-circle-o-notch fa-spin');
          },
          complete: function () {
              \$(element).find('i').removeClass('fa-circle-o-notch fa-spin');
              \$(element).find('i').addClass('fa-arrow-right');
          },
          success: function (json) {
             html = '';

              if (json['directory']) {
                  for (i = 0; i < json['directory'].length; i++) {
                      html += '<a href=\"' + json['directory'][i]['path'] + '\" class=\"list-group-item directory\">' + json['directory'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
                  }
              }

              if (json['file']) {
                  for (i = 0; i < json['file'].length; i++) {
                      html += '<a href=\"' + json['file'][i]['path'] + '\" class=\"list-group-item file\">' + json['file'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
                  }
              }

              if (json['back']) {
                  html += '<a href=\"' + json['back']['path'] + '\" class=\"list-group-item directory\">' + json['back']['name'] + ' <i class=\"fa fa-arrow-left fa-fw pull-right\"></i></a>';
              }

              \$('#path').html(html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#path').on('click', 'a.file', function (e) {
      e.preventDefault();

      var element = this;

      // Check if the file has an extension
      var pos = \$(element).attr('href').lastIndexOf('.');

      if (pos != -1) {
          var tab_id = \$('select[name=\"store_id\"]').val() + '-' + \$(element).attr('href').slice(0, pos).replace(/\\//g, '-').replace(/_/g, '-');
      } else {
          var tab_id = \$('select[name=\"store_id\"]').val() + '-' + \$(element).attr('href').replace(/\\//g, '-').replace(/_/g, '-');
      }

      if (!\$('#tab-' + tab_id).length) {
          \$.ajax({
              url: 'index.php?route=design/theme/template&user_token=";
        // line 159
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val() + '&path=' + \$(element).attr('href'),
              dataType: 'json',
              beforeSend: function () {
                  \$(element).find('i').removeClass('fa-arrow-right');
                  \$(element).find('i').addClass('fa-circle-o-notch fa-spin');
              },
              complete: function () {
                  \$(element).find('i').removeClass('fa-circle-o-notch fa-spin');
                  \$(element).find('i').addClass('fa-arrow-right');
              },
              success: function (json) {
                  if (json['code']) {
                      \$('#code').show();
                      \$('#recent').hide();

                      \$('.nav-tabs').append('<li><a href=\"#tab-' + tab_id + '\" data-toggle=\"tab\">' + \$(element).attr('href').split('/').join(' / ') + '&nbsp;&nbsp;<i class=\"fa fa-minus-circle\"></i></a></li>');

                      html = '<div id=\"tab-' + tab_id + '\" class=\"tab-pane\">';
                      html += '  <textarea name=\"code\" rows=\"10\"></textarea>';
                      html += '  <input type=\"hidden\" name=\"store_id\" value=\"' + \$('select[name=\"store_id\"]').val() + '\"/>';
                      html += '  <input type=\"hidden\" name=\"path\" value=\"' + \$(element).attr('href') + '\"/>';
                      html += '  <br/>';
                      html += '  <div class=\"pull-right\">';
                      html += '    <button type=\"button\" data-loading-text=\"";
        // line 182
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>';
                      html += '    <button data-loading-text=\"";
        // line 183
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-recycle\"></i> ";
        echo ($context["button_reset"] ?? null);
        echo "</button>';
                      html += '  </div>';
                      html += '</div>';

                      \$('.tab-content').append(html);

                      \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');

                      // Initialize codemirrror
                      var codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {
                          mode: 'text/html',
                          height: '500px',
                          lineNumbers: true,
                          autofocus: true,
                          theme: 'monokai'
                      });

                      codemirror.setValue(json['code']);
                  }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      } else {
          \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
      }
  });

  \$('.nav-tabs').on('click', 'i.fa-minus-circle', function (e) {
      e.preventDefault();

      if (\$(this).parent().parent().is('li.active')) {
          index = \$(this).parent().parent().index();

          if (index == 0) {
              \$(this).parent().parent().parent().find('li').eq(index + 1).find('a').tab('show');
          } else {
              \$(this).parent().parent().parent().find('li').eq(index - 1).find('a').tab('show');
          }
      }

      \$(this).parent().parent().remove();
      \$(\$(this).parent().attr('href')).remove();

      if (!\$('#code > ul > li').length) {
          \$('#code').hide();
          \$('#recent').show();
      }
  });

  \$('.tab-content').on('click', '.btn-primary', function (e) {
      var element = this;
      var editor = \$('.tab-content .active .CodeMirror')[0].CodeMirror;

      \$.ajax({
          url: 'index.php?route=design/theme/save&user_token=";
        // line 239
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('.tab-content .active input[name=\"store_id\"]').val() + '&path=' + \$('.tab-content .active input[name=\"path\"]').val(),
          type: 'post',
          data: 'code=' + encodeURIComponent(editor.getValue()),
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
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              }

              if (json['success']) {
                  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  \$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 259
        echo ($context["user_token"] ?? null);
        echo "');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('.tab-content').on('click', '.btn-danger', function (e) {
      if (confirm('";
        // line 269
        echo ($context["text_confirm"] ?? null);
        echo "')) {
          var element = this;

          \$.ajax({
              url: 'index.php?route=design/theme/reset&user_token=";
        // line 273
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('.tab-content .active input[name=\"store_id\"]').val() + '&path=' + \$('.tab-content .active input[name=\"path\"]').val(),
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
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  if (json['success']) {
                      \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  var codemirror = \$('.tab-content .active .CodeMirror')[0].CodeMirror;

                  codemirror.setValue(json['code']);
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      }
  });

  \$('#history').delegate('.pagination a', 'click', function (e) {
      e.preventDefault();

      \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 309
        echo ($context["user_token"] ?? null);
        echo "');

  \$('#history').on('click', '.btn-primary', function (e) {
      e.preventDefault();

      var element = this;

      // Check if the file has an extension
      var tab_id = \$(element).parent().parent().find('input[name=\"store_id\"]').val() + '-' + \$(element).parent().parent().find('input[name=\"path\"]').val().replace(/\\//g, '-').replace(/_/g, '-');

      if (!\$('#tab-' + tab_id).length) {
          \$.ajax({
              url: 'index.php?route=design/theme/template&user_token=";
        // line 321
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$(element).parent().parent().find('input[name=\"store_id\"]').val() + '&path=' + \$(element).parent().parent().find('input[name=\"path\"]').val(),
              dataType: 'json',
              beforeSend: function () {
                  \$(element).button('loading');
              },
              complete: function () {
                  \$(element).button('reset');
              },
              success: function (json) {
                  if (json['code']) {
                      \$('#code').show();
                      \$('#recent').hide();

                      \$('.nav-tabs').append('<li><a href=\"#tab-' + tab_id + '\" data-toggle=\"tab\">' + \$(element).parent().parent().find('input[name=\"path\"]').val().split('/').join(' / ') + '&nbsp;&nbsp;<i class=\"fa fa-minus-circle\"></i></a></li>');

                      html = '<div id=\"tab-' + tab_id + '\" class=\"tab-pane\">';
                      html += '  <textarea name=\"code\" rows=\"10\"></textarea>';
                      html += '  <input type=\"hidden\" name=\"store_id\" value=\"' + \$(element).parent().parent().find('input[name=\"store_id\"]').val() + '\"/>';
                      html += '  <input type=\"hidden\" name=\"path\" value=\"' + \$(element).parent().parent().find('input[name=\"path\"]').val() + '.twig\"/>';
                      html += '  <br/>';
                      html += '  <div class=\"pull-right\">';
                      html += '    <button type=\"button\" data-loading-text=\"";
        // line 342
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>';
                      html += '    <button data-loading-text=\"";
        // line 343
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-recycle\"></i> ";
        echo ($context["button_reset"] ?? null);
        echo "</button>';
                      html += '  </div>';
                      html += '</div>';

                      \$('.tab-content').append(html);

                      \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');

                      // Initialize codemirrror
                      var codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {
                          mode: 'text/html',
                          height: '500px',
                          lineNumbers: true,
                          autofocus: true,
                          theme: 'monokai'
                      });

                      codemirror.setValue(json['code']);
                  }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      } else {
          \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
      }
  });

  \$('#history').on('click', '.btn-danger', function (e) {
      e.preventDefault();

      if (confirm('";
        // line 375
        echo ($context["text_confirm"] ?? null);
        echo "')) {
          var element = this;

          \$.ajax({
              url: \$(element).attr('href'),
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
                      \$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  if (json['success']) {
                      \$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                      \$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 397
        echo ($context["user_token"] ?? null);
        echo "');
                  }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      }
  });
  //--></script>
</div>
";
        // line 408
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "design/theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 408,  536 => 397,  511 => 375,  474 => 343,  468 => 342,  444 => 321,  429 => 309,  390 => 273,  383 => 269,  370 => 259,  347 => 239,  286 => 183,  280 => 182,  254 => 159,  198 => 106,  156 => 67,  131 => 45,  125 => 42,  116 => 36,  109 => 31,  98 => 29,  94 => 28,  90 => 27,  83 => 23,  73 => 16,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/theme.twig", "");
    }
}

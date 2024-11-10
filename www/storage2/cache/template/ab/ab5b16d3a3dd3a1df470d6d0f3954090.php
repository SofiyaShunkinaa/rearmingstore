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

/* common/filemanager.twig */
class __TwigTemplate_b08d479d9d396a2e7b194fab6b4cbf93 extends Template
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
        echo "<div id=\"filemanager\" class=\"modal-dialog modal-lg\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"row\">
        <div class=\"col-sm-5\">
          <a href=\"";
        // line 10
        echo ($context["parent"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_parent"] ?? null);
        echo "\" id=\"button-parent\" class=\"btn btn-default\"><i class=\"fa fa-level-up\"></i></a>
          <a href=\"";
        // line 11
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" id=\"button-refresh\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo ($context["button_upload"] ?? null);
        echo "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_folder"] ?? null);
        echo "\" id=\"button-folder\" class=\"btn btn-default\"><i class=\"fa fa-folder\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 14
        echo ($context["button_delete"] ?? null);
        echo "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"input-group\"><input type=\"text\" name=\"search\" value=\"";
        // line 17
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_search"] ?? null);
        echo "\" class=\"form-control\">
            <span class=\"input-group-btn\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 18
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button></span>
          </div>
        </div>
      </div>
      <hr>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["images"] ?? null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 24
            echo "        <div class=\"row\">
          ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["image"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                echo "            <div class=\"col-sm-3 col-xs-6 text-center\">
              ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, $context["image"], "type", [], "any", false, false, false, 27) == "directory")) {
                    // line 28
                    echo "                <div class=\"text-center\">
                  <a href=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 29);
                    echo "\" class=\"directory\" style=\"vertical-align: middle;\"><i class=\"fa fa-folder fa-5x\"></i></a>
                </div>
                <label><input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 31);
                    echo "\"/>";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 31);
                    echo "</label>
              ";
                }
                // line 33
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["image"], "type", [], "any", false, false, false, 33) == "image")) {
                    // line 34
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 34);
                    echo "\" class=\"thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 34);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 34);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 34);
                    echo "\"/></a>
                <label><input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 35);
                    echo "\"/>";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 35);
                    echo "</label>
              ";
                }
                // line 37
                echo "            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
        <br/>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
    <div class=\"modal-footer\">";
        // line 43
        echo ($context["pagination"] ?? null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
";
        // line 47
        if (($context["target"] ?? null)) {
            // line 48
            echo "    \$('a.thumbnail').on('click', function (e) {
        e.preventDefault();

        ";
            // line 51
            if (($context["thumb"] ?? null)) {
                // line 52
                echo "            \$('#";
                echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "js");
                echo "').find('img').attr('src', \$(this).find('img').attr('src'));
        ";
            }
            // line 54
            echo "
        \$('#";
            // line 55
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "js");
            echo "').val(\$(this).parent().find('input').val());

        \$('#modal-image').modal('hide');
    });
";
        }
        // line 60
        echo "
\$('a.directory').on('click', function (e) {
    e.preventDefault();

    \$('#modal-image').load(\$(this).attr('href'));
});

\$('.pagination a').on('click', function (e) {
    e.preventDefault();

    \$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-parent').on('click', function (e) {
    e.preventDefault();

    \$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-refresh').on('click', function (e) {
    e.preventDefault();

    \$('#modal-image').load(\$(this).attr('href'));
});

\$('input[name=\\'search\\']').on('keydown', function (e) {
    if (e.which == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#button-search').on('click', function (e) {
    var url = 'index.php?route=common/filemanager&user_token=";
        // line 92
        echo ($context["user_token"] ?? null);
        echo "&directory=";
        echo ($context["directory"] ?? null);
        echo "';

    var filter_name = \$('input[name=\\'search\\']').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    ";
        // line 100
        if (($context["thumb"] ?? null)) {
            // line 101
            echo "        url += '&thumb=' + '";
            echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "js");
            echo "';
    ";
        }
        // line 103
        echo "
    ";
        // line 104
        if (($context["target"] ?? null)) {
            // line 105
            echo "        url += '&target=' + '";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "js");
            echo "';
    ";
        }
        // line 107
        echo "
    \$('#modal-image').load(url);
});
//--></script>
<script type=\"text/javascript\"><!--
    \$('#button-upload').on('click', function () {
        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\"/></form>');

        \$('#form-upload input[name=\\'file[]\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=common/filemanager/upload&user_token=";
        // line 128
        echo ($context["user_token"] ?? null);
        echo "&directory=";
        echo ($context["directory"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-upload').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
                        \$('#button-upload').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$('#button-refresh').trigger('click');
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });

    \$('#button-folder').popover({
        html: true,
        placement: 'bottom',
        trigger: 'click',
        title: '";
        // line 166
        echo ($context["entry_folder"] ?? null);
        echo "',
        content: function () {
            html = '<div class=\"input-group\">';
            html += '  <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 169
        echo ($context["entry_folder"] ?? null);
        echo "\" class=\"form-control\">';
            html += '  <span class=\"input-group-btn\"><button type=\"button\" title=\"";
        // line 170
        echo ($context["button_folder"] ?? null);
        echo "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></span>';
            html += '</div>';

            return html;
        }
    });

    \$('#button-folder').on('shown.bs.popover', function () {
        \$('#button-create').on('click', function () {
            \$.ajax({
                url: 'index.php?route=common/filemanager/folder&user_token=";
        // line 180
        echo ($context["user_token"] ?? null);
        echo "&directory=";
        echo ($context["directory"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: 'folder=' + encodeURIComponent(\$('input[name=\\'folder\\']').val()),
                beforeSend: function () {
                    \$('#button-create').prop('disabled', true);
                },
                complete: function () {
                    \$('#button-create').prop('disabled', false);
                },
                success: function (json) {
                    if (json['error']) {
                        alert(json['error']);
                    }

                    if (json['success']) {
                        alert(json['success']);

                        \$('#button-refresh').trigger('click');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
    });

    \$('#modal-image #button-delete').on('click', function (e) {
        if (confirm('";
        // line 209
        echo ($context["text_confirm"] ?? null);
        echo "')) {
            \$.ajax({
                url: 'index.php?route=common/filemanager/delete&user_token=";
        // line 211
        echo ($context["user_token"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: \$('input[name^=\\'path\\']:checked'),
                beforeSend: function () {
                    \$('#button-delete').prop('disabled', true);
                },
                complete: function () {
                    \$('#button-delete').prop('disabled', false);
                },
                success: function (json) {
                  if (json['error']) {
                      alert(json['error']);
                  }

                  if (json['success']) {
                      alert(json['success']);

                      \$('#button-refresh').trigger('click');
                  }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    });
//--></script>
";
    }

    public function getTemplateName()
    {
        return "common/filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 211,  383 => 209,  349 => 180,  336 => 170,  332 => 169,  326 => 166,  283 => 128,  260 => 107,  254 => 105,  252 => 104,  249 => 103,  243 => 101,  241 => 100,  228 => 92,  194 => 60,  186 => 55,  183 => 54,  177 => 52,  175 => 51,  170 => 48,  168 => 47,  161 => 43,  158 => 42,  150 => 39,  143 => 37,  136 => 35,  125 => 34,  122 => 33,  115 => 31,  110 => 29,  107 => 28,  105 => 27,  102 => 26,  98 => 25,  95 => 24,  91 => 23,  83 => 18,  77 => 17,  71 => 14,  67 => 13,  63 => 12,  57 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/filemanager.twig", "");
    }
}

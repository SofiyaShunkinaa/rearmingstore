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

/* common/security.twig */
class __TwigTemplate_2ef4851b5c57ea1cd88dac3b9af748b9 extends Template
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
        echo "<div id=\"modal-security\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title text-danger\"><i class=\"fa fa-exclamation-triangle\"></i> ";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 9
        echo ($context["text_security"] ?? null);
        echo "</div>
        <form class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 12
        echo ($context["text_choose"] ?? null);
        echo "</legend>
            <div class=\"form-group\">
              <select name=\"type\" id=\"input-type\" class=\"form-control\">
                <option value=\"automatic\">";
        // line 15
        echo ($context["text_automatic"] ?? null);
        echo "</option>
                <option value=\"manual\">";
        // line 16
        echo ($context["text_manual"] ?? null);
        echo "</option>
              </select>
            </div>
          </fieldset>
          <fieldset id=\"collapse-automatic\" class=\"collapse\">
            <legend>";
        // line 21
        echo ($context["text_automatic"] ?? null);
        echo "</legend>
            <div class=\"form-group\">
              <div class=\"input-group\">
                <div class=\"input-group-btn dropdown\">
                  <button type=\"button\" id=\"button-path\" data-toggle=\"dropdown\" class=\"btn btn-default\">";
        // line 25
        echo ($context["document_root"] ?? null);
        echo "<span class=\"caret\"></span></button>
                  <ul class=\"dropdown-menu\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paths"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 28
            echo "                      ";
            if ((twig_length_filter($this->env, $context["path"]) > twig_length_filter($this->env, ($context["document_root"] ?? null)))) {
                // line 29
                echo "                        <li><a href=\"";
                echo $context["path"];
                echo "\"><i class=\"fa fa-exclamation-triangle fa-fw text-danger\"></i> ";
                echo $context["path"];
                echo "</a></li>
                      ";
            } else {
                // line 31
                echo "                        <li><a href=\"";
                echo $context["path"];
                echo "\"><i class=\"fa fa-check-circle fa-fw text-success\"></i> ";
                echo $context["path"];
                echo "</a></li>
                      ";
            }
            // line 33
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                  </ul>
                </div>
                <input type=\"text\" name=\"directory\" value=\"storage\" placeholder=\"";
        // line 36
        echo ($context["entry_directory"] ?? null);
        echo "\" class=\"form-control\"/>
                <div class=\"input-group-btn\">
                  <button type=\"button\" id=\"button-move\" data-loading-text=\"";
        // line 38
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-exclamation-triangle\"></i> ";
        echo ($context["button_move"] ?? null);
        echo "</button>
                </div>
              </div>
              <input type=\"hidden\" name=\"path\" value=\"";
        // line 41
        echo ($context["document_root"] ?? null);
        echo "\"/>
            </div>
          </fieldset>
          <fieldset id=\"collapse-manual\" class=\"collapse\">
            <legend>";
        // line 45
        echo ($context["text_manual"] ?? null);
        echo "</legend>
            <div class=\"form-group\">
              <div style=\"height: 300px; overflow-y: scroll;\" class=\"form-control\" disabled=\"disabled\"></div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
    \$(document).ready(function () {
        \$('#modal-security').modal('show');
    });
    
    \$('#modal-security select[name=\\'type\\']').on('change', function () {
        \$('#modal-security fieldset.collapse').removeClass('in');
        
        \$('#modal-security #collapse-' + \$(this).val()).addClass('in');
    });
    
    \$('#modal-security select[name=\\'type\\']').trigger('change');
    
    \$('#modal-security .dropdown-menu a').on('click', function (e) {
        e.preventDefault();
        
        \$('#modal-security #button-path').html(\$(this).html() + ' <span class=\"caret\"></span>');
        
        \$('#modal-security input[name=\\'path\\']').val(\$(this).attr('href'));
    });
    
    \$('#modal-security .dropdown-menu a').on('click', function (e) {
        e.preventDefault();
        
        \$('#button-path').html(\$(this).text() + ' <span class=\"caret\"></span>');
        
        \$('input[name=\\'path\\']').val(\$(this).attr('href'));
        
        \$('input[name=\\'path\\']').trigger('change');
    });
    
    \$('#button-move').on('click', function () {
        var element = this;
        
        \$.ajax({
            url: 'index.php?route=common/security/move&user_token=";
        // line 90
        echo ($context["user_token"] ?? null);
        echo "',
            type: 'post',
            data: \$('input[name=\\'path\\'], input[name=\\'directory\\']'),
            dataType: 'json',
            crossDomain: true,
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();
                
                if (json['error']) {
                  \$('#modal-security .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
                
                if (json['success']) {
                  \$('#modal-security .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    
    \$('#modal-security select[name=\\'type\\']').on('change', function () {
        html = '<ol>';
        html += '<li><p>";
        // line 120
        echo ($context["text_move"] ?? null);
        echo "</p>';
        html += '<p><strong>";
        // line 121
        echo ($context["storage"] ?? null);
        echo "</strong></p>';
        html += '<p>";
        // line 122
        echo ($context["text_to"] ?? null);
        echo "</p>';
        html += '<p><strong>' + \$('#modal-security input[name=\\'path\\']').val() + \$('#modal-security input[name=\\'directory\\']').val() + '/</strong></p></li>';
        html += '<li><p>";
        // line 124
        echo ($context["text_config"] ?? null);
        echo "</p>';
        html += '<p><strong>define(\\'DIR_STORAGE\\', DIR_SYSTEM . \\'storage/\\');</strong></p>';
        html += '<p>to</p>';
        html += '<p><strong>define(\\'DIR_STORAGE\\', \\'' + \$('#modal-security input[name=\\'path\\']').val() + \$('#modal-security input[name=\\'directory\\']').val() + '/\\');</strong></p></li>';
        html += '<li><p>";
        // line 128
        echo ($context["text_admin"] ?? null);
        echo "</p>';
        html += '<p><strong>define(\\'DIR_STORAGE\\', DIR_SYSTEM . \\'storage/\\');</strong></p>';
        html += '<p>to</p>';
        html += '<p><strong>define(\\'DIR_STORAGE\\', \\'' + \$('#modal-security input[name=\\'path\\']').val() + \$('#modal-security input[name=\\'directory\\']').val() + '/\\');</strong></p></li>';
        html += '</ol>';
        
        \$('#collapse-manual .form-control').html(html);
    });
    
    \$('input[name=\\'path\\']').trigger('change');
//--></script>";
    }

    public function getTemplateName()
    {
        return "common/security.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 128,  233 => 124,  228 => 122,  224 => 121,  220 => 120,  187 => 90,  139 => 45,  132 => 41,  124 => 38,  119 => 36,  115 => 34,  109 => 33,  101 => 31,  93 => 29,  90 => 28,  86 => 27,  81 => 25,  74 => 21,  66 => 16,  62 => 15,  56 => 12,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/security.twig", "");
    }
}

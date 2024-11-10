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

/* extension/dashboard/chart_info.twig */
class __TwigTemplate_1ddfa7abafeaa0894350013a1c530f9f extends Template
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
    <div class=\"pull-right\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-calendar\"></i><i class=\"caret\"></i></a>
      <ul id=\"range\" class=\"dropdown-menu dropdown-menu-right\">
        <li><a href=\"day\">";
        // line 5
        echo ($context["text_day"] ?? null);
        echo "</a></li>
        <li><a href=\"week\">";
        // line 6
        echo ($context["text_week"] ?? null);
        echo "</a></li>
        <li class=\"active\"><a href=\"month\">";
        // line 7
        echo ($context["text_month"] ?? null);
        echo "</a></li>
        <li><a href=\"year\">";
        // line 8
        echo ($context["text_year"] ?? null);
        echo "</a></li>
      </ul>
    </div>
    <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o\"></i> ";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div id=\"chart-sale\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/jquery/flot/jquery.flot.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/jquery/flot/jquery.flot.resize.min.js\"></script>

<script type=\"text/javascript\"><!--
\$('#range a').on('click', function (e) {
    e.preventDefault();

    \$(this).parent().parent().find('li').removeClass('active');
    \$(this).parent().addClass('active');

    \$.ajax({
        type: 'get',
        url: 'index.php?route=extension/dashboard/chart/chart&user_token=";
        // line 29
        echo ($context["user_token"] ?? null);
        echo "&range=' + \$(this).attr('href'),
        dataType: 'json',
        success: function (json) {
            if (typeof json['order'] == 'undefined') {
                return false;
            }

            var option = {
                shadowSize: 0,
                colors: ['#9FD5F1', '#1065D2'],
                bars: {
                    show: true,
                    fill: true,
                    lineWidth: 1
                },
                grid: {
                    backgroundColor: '#FFFFFF',
                    hoverable: true
                },
                points: {
                    show: false
                },
                xaxis: {
                    show: true,
                    ticks: json['xaxis']
                }
            }

            \$.plot('#chart-sale', [json['order'], json['customer']], option);

            \$('#chart-sale').bind('plothover', function (event, pos, item) {
                \$('.tooltip').remove();

                if (item) {
                    \$('<div id=\"tooltip\" class=\"tooltip top in\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">' + item.datapoint[1].toFixed(2) + '</div></div>').prependTo('body');

                    \$('#tooltip').css({
                        position: 'absolute',
                        left: item.pageX - (\$('#tooltip').outerWidth() / 2),
                        top: item.pageY - \$('#tooltip').outerHeight(),
                        pointer: 'cusror'
                    }).fadeIn('slow');

                    \$('#chart-sale').css('cursor', 'pointer');
                } else {
                    \$('#chart-sale').css('cursor', 'auto');
                }
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#range .active a').trigger('click');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/chart_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  61 => 11,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/chart_info.twig", "");
    }
}

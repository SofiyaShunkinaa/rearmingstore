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

/* default/template/common/footer.twig */
class __TwigTemplate_d2aadd855b1cb273223dc30f04681471 extends Template
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
        echo "<div style=\"overflow:hidden\">
<footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <p class=\"REARMBOX-2\"><span class=\"text-wrapper\">Rearm</span><span class=\"span\">ing</span></p>
            <p>
\t\t\t\t";
        // line 8
        if (($context["f_tg"] ?? null)) {
            // line 9
            echo "              <a href=\"";
            echo ($context["f_tg"] ?? null);
            echo "\" target=\"_blanc\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                  fill=\"none\">
                  <path
                    d=\"M21.4354 2.58198C20.9352 2.0686 20.1949 1.87734 19.5046 2.07866L3.408 6.75952C2.6797 6.96186 2.16349 7.54269 2.02443 8.28055C1.88237 9.0315 2.37858 9.98479 3.02684 10.3834L8.0599 13.4768C8.57611 13.7939 9.24238 13.7144 9.66956 13.2835L15.4329 7.4843C15.723 7.18231 16.2032 7.18231 16.4934 7.4843C16.7835 7.77623 16.7835 8.24935 16.4934 8.55134L10.72 14.3516C10.2918 14.7814 10.2118 15.4508 10.5269 15.9702L13.6022 21.0538C13.9623 21.6577 14.5826 22 15.2628 22C15.3429 22 15.4329 22 15.513 21.9899C16.2933 21.8893 16.9135 21.3558 17.1436 20.6008L21.9156 4.52479C22.1257 3.84028 21.9356 3.09537 21.4354 2.58198Z\"
                    fill=\"#5199EE\" />
                </svg></a>
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t";
        if (($context["f_inst"] ?? null)) {
            // line 17
            echo "              <a href=\"";
            echo ($context["f_inst"] ?? null);
            echo "\" target=\"_blanc\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                  fill=\"none\">
                  <path
                    d=\"M12.0126 9C10.3556 9 9 10.3481 9 11.9987C9 13.6494 10.3556 15 12.0126 15C13.6695 15 15 13.6494 15 11.9987C15 10.3481 13.6695 9 12.0126 9Z\"
                    fill=\"url(#paint0_radial_132_3020)\" />
                  <path
                    d=\"M12.0126 9C10.3556 9 9 10.3481 9 11.9987C9 13.6494 10.3556 15 12.0126 15C13.6695 15 15 13.6494 15 11.9987C15 10.3481 13.6695 9 12.0126 9Z\"
                    fill=\"url(#paint1_radial_132_3020)\" />
                  <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                    d=\"M16.3402 2C19.7302 2 22.0002 4.38 22.0002 7.92V16.09C22.0002 19.62 19.7302 22 16.3402 22H7.67024C4.28024 22 2.00024 19.62 2.00024 16.09V7.92C2.00024 4.38 4.28024 2 7.67024 2H16.3402ZM18.3838 4.39258C17.7238 4.39258 17.1838 4.93158 17.1838 5.59158C17.1838 6.25158 17.7238 6.79158 18.3838 6.79158C19.0438 6.79158 19.5738 6.25158 19.5738 5.59158C19.5738 4.93158 19.0438 4.39258 18.3838 4.39258ZM6.38379 11.8903C6.38379 8.86403 8.86914 6.39258 11.9068 6.39258C14.9445 6.39258 17.3838 8.86403 17.3838 11.8903C17.3838 14.9165 14.9445 17.3926 11.9068 17.3926C8.86914 17.3926 6.38379 14.9165 6.38379 11.8903Z\"
                    fill=\"url(#paint2_radial_132_3020)\" />
                  <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                    d=\"M16.3402 2C19.7302 2 22.0002 4.38 22.0002 7.92V16.09C22.0002 19.62 19.7302 22 16.3402 22H7.67024C4.28024 22 2.00024 19.62 2.00024 16.09V7.92C2.00024 4.38 4.28024 2 7.67024 2H16.3402ZM18.3838 4.39258C17.7238 4.39258 17.1838 4.93158 17.1838 5.59158C17.1838 6.25158 17.7238 6.79158 18.3838 6.79158C19.0438 6.79158 19.5738 6.25158 19.5738 5.59158C19.5738 4.93158 19.0438 4.39258 18.3838 4.39258ZM6.38379 11.8903C6.38379 8.86403 8.86914 6.39258 11.9068 6.39258C14.9445 6.39258 17.3838 8.86403 17.3838 11.8903C17.3838 14.9165 14.9445 17.3926 11.9068 17.3926C8.86914 17.3926 6.38379 14.9165 6.38379 11.8903Z\"
                    fill=\"url(#paint3_radial_132_3020)\" />
                  <defs>
                    <radialGradient id=\"paint0_radial_132_3020\" cx=\"0\" cy=\"0\" r=\"1\" gradientUnits=\"userSpaceOnUse\"
                      gradientTransform=\"translate(18.9002 24.7) rotate(-115.776) scale(27.2737 40.5665)\">
                      <stop offset=\"0.24392\" stop-color=\"#FF1B90\" />
                      <stop offset=\"0.436673\" stop-color=\"#F80261\" />
                      <stop offset=\"0.688476\" stop-color=\"#ED00C0\" />
                      <stop offset=\"0.776787\" stop-color=\"#C500E9\" />
                      <stop offset=\"0.893155\" stop-color=\"#7017FF\" />
                    </radialGradient>
                    <radialGradient id=\"paint1_radial_132_3020\" cx=\"0\" cy=\"0\" r=\"1\" gradientUnits=\"userSpaceOnUse\"
                      gradientTransform=\"translate(9.25025 21.31) rotate(-57.4396) scale(11.8174 12.2918)\">
                      <stop stop-color=\"#FFD600\" />
                      <stop offset=\"0.484375\" stop-color=\"#FF6930\" />
                      <stop offset=\"0.734375\" stop-color=\"#FE3B36\" />
                      <stop offset=\"1\" stop-color=\"#FE3B36\" stop-opacity=\"0\" />
                    </radialGradient>
                    <radialGradient id=\"paint2_radial_132_3020\" cx=\"0\" cy=\"0\" r=\"1\" gradientUnits=\"userSpaceOnUse\"
                      gradientTransform=\"translate(18.9002 24.7) rotate(-115.776) scale(27.2737 40.5665)\">
                      <stop offset=\"0.24392\" stop-color=\"#FF1B90\" />
                      <stop offset=\"0.436673\" stop-color=\"#F80261\" />
                      <stop offset=\"0.688476\" stop-color=\"#ED00C0\" />
                      <stop offset=\"0.776787\" stop-color=\"#C500E9\" />
                      <stop offset=\"0.893155\" stop-color=\"#7017FF\" />
                    </radialGradient>
                    <radialGradient id=\"paint3_radial_132_3020\" cx=\"0\" cy=\"0\" r=\"1\" gradientUnits=\"userSpaceOnUse\"
                      gradientTransform=\"translate(9.25025 21.31) rotate(-57.4396) scale(11.8174 12.2918)\">
                      <stop stop-color=\"#FFD600\" />
                      <stop offset=\"0.484375\" stop-color=\"#FF6930\" />
                      <stop offset=\"0.734375\" stop-color=\"#FE3B36\" />
                      <stop offset=\"1\" stop-color=\"#FE3B36\" stop-opacity=\"0\" />
                    </radialGradient>
                  </defs>
                </svg></a>
\t\t\t\t";
        }
        // line 65
        echo "            </p>
            <div class=\"text-wrapper-34\">2024. All rights reserved</div>
          </div>
          <div class=\"col-md-6\">
\t\t\t";
        // line 69
        echo ($context["foot_m_1"] ?? null);
        echo "
\t\t\t";
        // line 70
        echo ($context["foot_m_2"] ?? null);
        echo "
          </div>
          <div class=\"col-md-3\">
            <div class=\"div-28\">
              <img class=\"img-2\" src=\"img/calling.svg\" />
              <a href=\"tel:";
        // line 75
        echo ($context["f_phonea"] ?? null);
        echo "\" class=\"text-wrapper-36\">";
        echo ($context["f_phone"] ?? null);
        echo "</a>
            </div>
            <div class=\"div-28\">
              <img class=\"img-2\" src=\"img/message.svg\" />
              <a href=\"mailto:";
        // line 79
        echo ($context["f_mail"] ?? null);
        echo "\" class=\"text-wrapper-36\">";
        echo ($context["f_mail"] ?? null);
        echo "</a>
            </div>
            <div class=\"div-wrapper-7\">
              <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#request\" class=\"text-wrapper-35\">Service support</a>
            </div>
          </div>
        </div>
        <div class=\"row not_desctop\">
          <div class=\"col-6\">
            <div class=\"div-wrapper-7\">
              <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#request\" class=\"text-wrapper-35\">Service support</a>
            </div>
          </div>
          <div class=\"col-6\">
            <div class=\"text-wrapper-34\">2024. All rights reserved</div>
          </div>
        </div>
      </div>
    </footer>
</div>
<div class=\"modal fade\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"loginForm\">
            <form action=\"\" id=\"form-login\">
              <div class=\"formTitle\">Login</div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <input type=\"email\" id=\"input-email\" name=\"email\" value=\"\" placeholder=\"Email\" class=\"form-control\" required />
                  <span class=\"error_name\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <input type=\"password\" id=\"input-password\" name=\"password\" value=\"\" placeholder=\"Password\" class=\"form-control\" required />
                  <span class=\"error_name\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <button type=\"submit\" class=\"btn btn-primary\">Sing in</button>
                </div>
              </div>
            </form>
            <div class=\"forgotpass\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#forgot\">Forgot password?</a></div>
            <div class=\"creaateAkk\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#createAkk\">Create new accont</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"modal fade\" id=\"forgot\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"loginForm\">
            <form action=\"\" id=\"form-forgotten\">
              <div class=\"formTitle\">Recover password</div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <input type=\"email\" id=\"forgot-email\" name=\"email\" value=\"\" placeholder=\"Email\" class=\"form-control\" />
                  <span class=\"error_name\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <button type=\"submit\" class=\"btn btn-primary\">Reset my password</button>
                </div>
              </div>
            </form>
            <div class=\"backToLogin\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#login\">Go back to login form</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"modal fade\" id=\"createAkk\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"loginForm\">
            <form action=\"\" id=\"form-register\">
              <div class=\"formTitle\">Sign up</div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <input type=\"email\" id=\"reg-email\" name=\"email\" value=\"\" placeholder=\"Email\" class=\"form-control\" required />
                  <span class=\"error_name\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <input type=\"password\" id=\"reg-password\" name=\"password\" value=\"\" placeholder=\"Password\" class=\"form-control\" required />
                  <span class=\"error_name\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <input type=\"password\" id=\"reg-confirm\" name=\"confirm\" value=\"\" placeholder=\"Repeat password\" class=\"form-control\" required />
                  <span class=\"error_name\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <button type=\"submit\" class=\"btn btn-primary\">Sign up</button>
                </div>
              </div>
            </form>
            <div class=\"backToLogin\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#login\">Already have an account? Sign
                in</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"modal fade\" id=\"request\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"loginForm\">
            <form action=\"\" id=\"requestService\">
              <div class=\"formTitle\">Request A Service</div>
              <div class=\"formSubTitle\">Couldn't find a service you need? Submit a request and we will make you a custom
                offer tailored to your needs!</div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <label for=\"selectGame\">Select game <span>*</span></label>
                  <select name=\"selectGame\" id=\"selectGame\" class=\"js-example-basic-single\">
                    <option value=\"\" disabled>Select game</option>
                  </select>
                  <span class=\"error error_selectGame\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <label for=\"rqemail\">Email<span>*</span></label>
                  <input type=\"email\" id=\"rqemail\" name=\"rqemail\" value=\"\" placeholder=\"Email\" class=\"form-control\" />
                  <span class=\"error error_rqemail\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <label for=\"contactMethod\">Contact method (optional)</label>
                  <select name=\"contactMethod\" id=\"contactMethod\" class=\"js-example-basic-single\">
                    <option value=\"Contact me via email\" selected>Contact me via email</option>
                    <option value=\"Contact me via Skype\">Contact me via Skype</option>
                    <option value=\"Contact me via Discord\">Contact me via Discord</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <label for=\"request\">Your request <span>*</span></label>
                  <textarea name=\"request\" id=\"request\" cols=\"30\" rows=\"5\"
                    placeholder=\"Describe what you are looking for and add all relevant information such as your region, character class, preferred playing schedule, etc.\"></textarea>
                  <span class=\"error error_request\"></span>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <button type=\"submit\" class=\"btn btn-primary\">Submit request</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
\tproducts_wishlist_js.forEach(function(number) {
        // Создаем селектор для каждого числа в массиве
        var selector = '.heart_' + number;

        // Добавляем класс 'active' к соответствующему элементу
        document.querySelectorAll(selector).forEach(function(element) {
            element.classList.add('active');
        });
    });
\tfunction displayErrors(errors) {
        \$.each(errors, function(key, value) {
            // Отображаем ошибку рядом с соответствующим полем
            \$('.error_' + key).text(value);
        });
    }
\tfunction loadManufacturers() {
        \$.ajax({
            type: 'GET',
            url: 'index.php?route=product/manufacturer/getManufacturers',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Очищаем текущий список
                    \$('#selectGame').empty();
                    
                    // Добавляем новые опции в список
                    \$.each(response.manufacturers, function(index, manufacturer) {
                        \$('#selectGame').append('<option value=\"' + manufacturer.name + '\">' + manufacturer.name + '</option>');
                    });

                    // Инициализируем снова select2 (если используете)
                    \$('.js-example-basic-single').select2();
                } else {
                    console.error('Failed to load manufacturers.');
                }
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }
    new Swiper('.slider .swiper', {
      // Optional parameters
      direction: 'vertical',
      loop: true,
      spaceBetween: 15,
      slidesPerView: 1.4,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          spaceBetween: 15,
          slidesPerView: 1.4,
          direction: 'horizontal',
        },
        800: {
          spaceBetween: 15,
          slidesPerView: 1.4,
          direction: 'vertical',
        }
      }
    });
    new Swiper(\".reviews .swiper\", {
      slidesPerView: 3,
      spaceBetween: 30,
      grabCursor: true,
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
    });
\t
    \$(window).on('scroll', function (event) {
      var scroll = \$(window).scrollTop();
      if (scroll < 300) {
        \$(\".topNav\").removeClass(\"sticky-top\");
      } else {
        \$(\".topNav\").addClass(\"sticky-top\");
      }
    });
    \$(document).ready(function () {
      \$('.js-example-basic-single').select2();
\t  loadManufacturers();
      \$('.scrolls').scrollbar();
      \$('.fawbtn,.favoritePanel .closefpanel').on('click',function(){
        \$('.favoritePanel').toggleClass('active');
\t\treturn false;
      });
      \$('.cartbtn,.orderPanel .closefpanel').on('click',function(){
        \$('.orderPanel').toggleClass('active');
\t\treturn false;
      });
      \$('.navbtn,.nav_panel .closefpanel').on('click',function(){
        \$('.nav_panel').toggleClass('active');
\t\treturn false;
      });
\t  \$('#requestService').submit(function(e) {
        e.preventDefault(); // Предотвращаем стандартное действие отправки формы

        // Получаем данные из формы
        var formData = \$(this).serialize();

        // Отправляем AJAX-запрос
        \$.ajax({
            type: 'POST',
            url: 'index.php?route=information/contact/request', // Замените на путь к вашему контроллеру и действию
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    \$.jGrowl(response.success, { life: 10000 });
\t\t\t\t\t\$('#request').find('.close').click();
                } else {
                    displayErrors(response.errors);
                }
            },
            error: function(error) {
                // Обработка ошибок при выполнении запроса
                console.log('Error:', error);
            }
        });
    });

    // Функция для отображения ошибок
    
    });
</script>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('#input-email,#input-password').on('focus',function(){
\t\t\$(this).removeClass('error');
\t});
    \$('#form-login').submit(function(e) {
        e.preventDefault();
\t\tvar email = \$('#input-email').val().trim();
        var password = \$('#input-password').val().trim();

        // Проверка на пустые поля
        if (!email || !password) {
            \$('body').find('.loginerror').remove();
            \$('#form-login .formTitle').after('<div class=\"loginerror\">Please fill both fields.</div>');
            return;
        }

        \$.ajax({
            url: 'index.php?route=account/login/ajaxLogin',
            type: 'post',
            data: \$(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                \$('body').find('.loginerror').remove();
            },
            success: function(json) {
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    // Добавляем сообщение об ошибке
                    \$('#form-login .formTitle').after('<div class=\"loginerror\">' + json['error'] + '</div>');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
\t\$('#form-register').submit(function(e) {
        e.preventDefault();

        // Удаление предыдущих сообщений об ошибках
        \$('.register-error').remove();

        \$.ajax({
            url: 'index.php?route=account/register/ajaxRegister',
            type: 'post',
            data: \$(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                // Опционально: действия перед отправкой
            },
            success: function(json) {
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    // Добавление сообщения об ошибке
                    var errorMsg = '';
                    \$.each(json['error'], function(i, val) {
                        errorMsg += '<div class=\"register-error\">' + val + '</div>';
                    });
                    \$('#form-register .formTitle').after(errorMsg);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
\t\$('#form-forgotten').submit(function(e) {
        e.preventDefault();
        \$.ajax({
            url: 'index.php?route=account/forgotten/ajaxForgotten',
            type: 'post',
            data: \$(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                // Действия перед отправкой, например, анимация загрузки
            },
            success: function(json) {
                \$('.alert-danger').remove();
                \$('.alert-success').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['success']) {
\t\t\t\t\t\$('#form-forgotten .formTitle').after('<div class=\"alert-success\">' + json['success'] + '</div>');
                } else if (json['error']) {
\t\t\t\t\t\$('#form-forgotten .formTitle').after('<div class=\"alert-danger\">' + json['error']['warning'] + '</div>');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
\tif(window.location.hash) {
        var hash = window.location.hash.substring(1);

        // Проверяем, существует ли элемент с таким ID
        if(\$('#' + hash).length) {
\t\t\tvar offset = 80;
            var targetOffset = \$('#' + hash).offset().top - offset;
            \$('html, body').animate({
                scrollTop: targetOffset
            }, 100);
        }
    }
      \$('.nav a').on('click', function(event) {
        var href = \$(this).attr('href');

        if (href && href.includes('#') && !href.includes('http')) {
          

          var targetId = href.split('#')[1];
          var targetElement = \$('#'+targetId);

          if (targetElement.length) {
\t\t\tevent.preventDefault();
            var offset = 80;
            var targetOffset = targetElement.offset().top - offset;
\t\t\t\$('.nav_panel  .closefpanel').click();
            \$('html, body').animate({
              scrollTop: targetOffset
            }, 100);
          }
        }
      });
});
const swiper = new Swiper('.radioButtonslide', {
      slidesPerView: 'auto',
      spaceBetween: 10,
})
</script>
\t";
        // line 548
        echo ($context["cookie"] ?? null);
        echo "
\t";
        // line 549
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 550
            echo "\t  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 550);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 550);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 550);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 552
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 553
            echo "\t  <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 553);
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 555
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 555,  641 => 553,  636 => 552,  623 => 550,  619 => 549,  615 => 548,  141 => 79,  132 => 75,  124 => 70,  120 => 69,  114 => 65,  62 => 17,  59 => 16,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}

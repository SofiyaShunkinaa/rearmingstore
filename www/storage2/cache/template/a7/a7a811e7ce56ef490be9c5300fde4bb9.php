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

/* default/template/extension/payment/stripe.twig */
class __TwigTemplate_64f4f49e75675178ffce42eb60214407 extends Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo ($context["store_url"] ?? null);
        echo "catalog/view/theme/default/stylesheet/stripe.css\">
<div class=\"payment-form-wrapper\">
";
        // line 3
        if (($context["test_mode"] ?? null)) {
            // line 4
            echo "<small class=\"text-info\">";
            echo ($context["text_debug"] ?? null);
            echo "</small>
";
        }
        // line 6
        echo "<form id=\"payment-form\">
\t<div id=\"payment-request-button\"></div>
\t<fieldset>
\t\t<legend class=\"card-only\">";
        // line 9
        echo ($context["text_pay_with_card"] ?? null);
        echo "</legend>
\t\t<legend class=\"payment-request-available\">";
        // line 10
        echo ($context["text_or_pay_with_card"] ?? null);
        echo "</legend>
\t\t<div class=\"container-stripe\">
\t\t\t<!-- placeholder for Elements -->
\t\t\t<div id=\"card-element\"></div>
\t\t\t<button type=\"button\" id=\"button-confirm\" class=\"buttons\">";
        // line 14
        echo ($context["button_submit_payment"] ?? null);
        echo "</button>
\t\t</div>
\t</fieldset>
\t<div class=\"error-stripe\" role=\"alert\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"17\" viewBox=\"0 0 17 17\">
\t\t\t<path class=\"base\" fill=\"#000\" d=\"M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z\"></path>
\t\t\t<path class=\"glyph\" fill=\"#FFF\" d=\"M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z\"></path>
\t\t</svg>
\t\t<span id=\"card-errors\" class=\"message\"></span>
\t</div>
</form>
<div class=\"success-stripe\">
\t<div class=\"icon\">
\t\t<svg width=\"84px\" height=\"84px\" viewBox=\"0 0 84 84\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t<circle class=\"border\" cx=\"42\" cy=\"42\" r=\"40\" stroke-linecap=\"round\" stroke-width=\"4\" stroke=\"#000\" fill=\"none\"></circle>
\t\t</svg>
\t</div>
</div>
</div>
<script type=\"text/javascript\" src=\"https://js.stripe.com/v3/\"></script>
<script type=\"text/javascript\">
function initStripe() {
\t
\tif (window.Stripe) {

\t\tvar stripe = Stripe('";
        // line 39
        echo ($context["payment_stripe_public_key"] ?? null);
        echo "');
\t\tvar elements = stripe.elements(";
        // line 40
        if (($context["locale"] ?? null)) {
            echo "{\"locale\": \"";
            echo ($context["locale"] ?? null);
            echo "\"}";
        }
        echo ");

\t\tvar style = {
\t\t\t\t\tbase: {
\t\t\t\t\t\tcolor: \"#32325D\",
\t\t\t\t\t\tfontWeight: 500,
\t\t\t\t\t\tfontFamily: \"Inter UI, Open Sans, Segoe UI, sans-serif\",
\t\t\t\t\t\tfontSize: \"15px\",
\t\t\t\t\t\tfontSmoothing: \"antialiased\",
\t\t\t\t\t\t\"::placeholder\": {
\t\t\t\t\t\t\tcolor: \"#CFD7DF\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tinvalid: {
\t\t\t\t\t\t color: \"#E25950\"
\t\t\t\t\t}
\t\t\t\t};

\t\tvar cardElement = elements.create('card', {style: style, hidePostalCode: true});
\t\tcardElement.mount('#card-element');
\t\tvar cardButton = document.getElementById('button-confirm');

\t\tvar billing_details = ";
        // line 62
        echo json_encode(($context["billing_details"] ?? null));
        echo "; console.log('Details: ' + JSON.stringify(billing_details));

\t\tcardButton.addEventListener('click', function(ev) {
\t\t\t\$('.payment-form-wrapper').addClass('submitting');

\t\t\tstripe.createPaymentMethod({
\t\t\t\ttype: 'card',
\t\t\t\tcard: cardElement,
\t\t\t\tbilling_details: billing_details
\t\t\t}).then(function(result){
\t\t\t\tif (result.error) { console.log('ERROR !!!');
\t\t\t\t\t// Show error in payment form
\t\t\t\t\tshowErrorMessage(result.error.message);
\t\t\t\t} else { console.log('SUCCESS !!!');
\t\t\t\t\t// Send paymentMethod.id to your server (see Step 2)
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: '";
        // line 78
        echo ($context["action"] ?? null);
        echo "',
\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\tdata: JSON.stringify({ payment_method_id: result.paymentMethod.id }),
\t\t\t\t\t\tsuccess: function(response){
\t\t\t\t\t\t\thandleServerResponse(response); console.log('2-nd SUCCESS !!!');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(jqXHR, textStatus, errorThrown) {
\t\t\t\t\t\t\tconsole.warn(\"Stripe App have encountered with some error.\");
\t\t\t\t\t\t\tconsole.warn(\"Please see below the response your server sent.\");
\t\t\t\t\t\t\tconsole.error(jqXHR.responseText);
\t\t\t\t\t\t\tconsole.error(textStatus, errorThrown);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}).catch(function(e){
\t\t\t\tlogServerError(e);
\t\t\t});
\t\t});


\t\tvar handleServerResponse = function(response) {

\t\t\tif(typeof response === \"undefined\") {
\t\t\t\tconsole.warn(\"Stripe App have encountered with some error. This error might not be caused by Stripe App. Such errors come when Stripe App receive unexpected JSON response from your server.\");
\t\t\t\tconsole.warn(\"Please see below the response your server sent, whereas JSON was expected by Stripe App.\");
\t\t\t\tconsole.error(response);
\t\t\t\treturn;
\t\t\t}

\t\t\tif (response.error) {
\t\t\t\t// Show error from server on payment form
\t\t\t\tshowErrorMessage(response.error);
\t\t\t} else if (response.requires_action) {
\t\t\t\t// Use Stripe.js to handle the required card action
\t\t\t\tstripe.handleCardAction(response.payment_intent_client_secret).then(function(result){
\t\t\t\t\tif (result.error) {
\t\t\t\t\t\t// Show error from Stripe.js in payment form
\t\t\t\t\t\tshowErrorMessage(result.error.message);
\t\t\t\t\t} else {
\t\t\t\t\t\t// The card action has been handled
\t\t\t\t\t\t// The PaymentIntent can be confirmed again on the server
\t\t\t\t\t\t// Send paymentMethod.id to your server (see Step 2)
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: '";
        // line 121
        echo ($context["action"] ?? null);
        echo "',
\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\tdata: JSON.stringify({ payment_intent_id: result.paymentIntent.id }),
\t\t\t\t\t\t\tsuccess: function(response){
\t\t\t\t\t\t\t\thandleServerResponse(response);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(jqXHR, textStatus, errorThrown) {
\t\t\t\t\t\t\t\tconsole.warn(\"Stripe App have encountered with some error.\");
\t\t\t\t\t\t\t\tconsole.warn(\"Please see below the response your server sent.\");
\t\t\t\t\t\t\t\tconsole.error(jqXHR.responseText);
\t\t\t\t\t\t\t\tconsole.error(textStatus, errorThrown);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}).catch(function(e){
\t\t\t\t\tlogServerError(e);
\t\t\t\t});
\t\t\t} else {
\t\t\t\t// Show success message
\t\t\t\twindow.location = response.success;
\t\t\t\tconsole.log('RS: ' + response.success);
\t\t\t\tconsole.log('Response: ' + response);
\t\t\t}
\t\t}

\t\tvar showErrorMessage = function(error) {
\t\t\t\$(\".payment-form-wrapper #card-errors\").text(error);
\t\t\t\$(\".payment-form-wrapper .error-stripe\").addClass(\"visible\");
\t\t\t\$('.payment-form-wrapper').removeClass('submitting');
\t\t}

\t\tvar logServerError = function(error){
\t\t\tconsole.warn(\"Stripe App have encountered with some error.\");
\t\t\tconsole.error(error);
\t\t}
\t} else {
\t\t setTimeout(function() { initStripe(); }, 50);
\t}
}

initStripe();
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/stripe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 121,  147 => 78,  128 => 62,  99 => 40,  95 => 39,  67 => 14,  60 => 10,  56 => 9,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/stripe.twig", "");
    }
}

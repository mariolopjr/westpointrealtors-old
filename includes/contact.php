<?php

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

// Submission date/time (server-side)
$submissionDateTime = techmunchies\functions\dateTimeNow ();

// Setups up return array
$ret = array (
    "status"  => "",
    "content" => ""
);

// Set the Google reCAPTCHA Private Key to the result of the returned query
$reCaptchaPrivateKey = techmunchies\functions\loadData ( TBL_SETTINGS, "reCaptcha" );
$reCaptchaResponse = $_POST [ "g-recaptcha-response" ];
$reCaptchaResponse = filter_var ( $reCaptchaResponse, FILTER_SANITIZE_STRING, !FILTER_FLAG_STRIP_LOW );

// Set up PHP POST Request using CURL
$reCaptchaURL = "https://www.google.com/recaptcha/api/siteverify";
$reCaptchaData = array (
	"secret"   => urlencode ( $reCaptchaPrivateKey ),
	"response" => urlencode ( $reCaptchaResponse )
);

// Holds the Google reCAPTCHA POST string
$reCaptchaPOSTData = "";

// Convert array into URL string
foreach ( $reCaptchaData as $key => $value ) {

    $reCaptchaPOSTData .= $key . "=" . $value . "&";

}

// Remove extra "&"
$reCaptchaPOSTData = rtrim ( $reCaptchaPOSTData, "&" );

// Open a new curl connection
$reCaptchaCURL = curl_init ();

// Initialize the CURL connection with the POST data created ealier
curl_setopt ( $reCaptchaCURL, CURLOPT_URL, $reCaptchaURL );
curl_setopt ( $reCaptchaCURL, CURLOPT_POST, count ( $reCaptchaData ) );
curl_setopt ( $reCaptchaCURL, CURLOPT_POSTFIELDS, $reCaptchaPOSTData );
curl_setopt ( $reCaptchaCURL, CURLOPT_RETURNTRANSFER, true );

// POST data to Google ReCAPTCHA API and save the result
$reCaptchaResult = curl_exec ( $reCaptchaCURL );

// Close CURL connection
curl_close ( $reCaptchaCURL );

// Google ReCAPTCHA result as a PHP array
$reCaptchaJSON = json_decode ( $reCaptchaResult, true );

if ( $reCaptchaJSON [ "success" ] != "true" ) {

    error_log ( "Google ReCAPTCHA failed with the following error: " . $reCaptchaJSON [ "error-codes" ] );

    $ret [ "status" ]  = "Fail ReCAPTCHA";
    $ret [ "content" ] = "Google ReCAPTCHA failed with the following error: " . $reCaptchaJSON [ "error-codes" ];

    echo json_encode ( $ret );
    die ();

}

// Grabs inputs from POST
$address = isset ( $_POST[ 'address' ] ) ? $_POST[ 'address' ] : FALSE;
$name    = isset ( $_POST[ 'name' ] )    ? $_POST[ 'name' ] : FALSE;
$email   = isset ( $_POST[ 'email' ] )   ? $_POST[ 'email' ] : FALSE;
$phone   = isset ( $_POST[ 'phone' ] )   ? $_POST[ 'phone' ] : FALSE;
$message = isset ( $_POST[ 'message' ] ) ?
    ( $_POST[ 'message' ] != "init" ? $_POST[ 'message' ] : FALSE ) : FALSE;
$agent   = isset ( $_POST[ 'agent' ] )   ? $_POST[ 'agent' ] : FALSE;

/*
// Checks if Name was filled
if ( !$name ) {

    error_log ( "Name failed validation." );

    $ret [ "status" ]  = "Fail Name Validation";
    $ret [ "content" ] = "Name failed validation.";

    echo json_encode ( $ret );
    die ();

}

// Checks if Email was filled
if ( !$email ) {

    error_log ( "Email failed validation." );

    $ret [ "status" ]  = "Fail Email Validation";
    $ret [ "content" ] = "Email failed validation.";

    echo json_encode ( $ret );
    die ();

}

// Checks if Phone was filled
if( !$phone ) {

    error_log ( "Phone failed validation." );

    $ret["status"] = "Fail Phone Validation";
    $ret["content"]  = "Phone failed validation.";

    echo json_encode($ret);
    die();

}

// Checks if message was filled
if( !$message ) {

    error_log("Phone failed validation.");

    $ret["status"] = "Fail Phone Validation";
    $ret["content"]     = "Phone failed validation.";

    echo json_encode($ret);
    die();

}

// Checks if agent was checked
if( !$agent ) {

    error_log("Phone failed validation.");

    $ret["status"] = "Fail Phone Validation";
    $ret["content"]     = "Phone failed validation.";

    echo json_encode($ret);
    die();

}

// Validates Email
if(!preg_match("/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i", $email)) {

    error_log("Email failed validation.");

    $ret["returnStatus"] = "Fail Email Validation";
    $ret["errorLog"]     = "Email failed validation.";

    echo json_encode($ret);
    die();

}

// Validates Phone
if(!preg_match("/^\(\d{3}\)\s\d{3}-\d{4}$/", $phone)) {

    error_log("Phone failed validation.");

    $ret [ "status" ]  = "Fail Phone Validation";
    $ret [ "content" ] = "Phone failed validation.";

    echo json_encode ( $ret );
    die ();

}

// Sanitize inputs from email-based injections
$sanitizeInputFromInjection = array("content-type", "bcc:", "to:", "cc:", "href");
$requestFirstName = str_replace($sanitizeInputFromInjection, "", $requestFirstName);
$requestLastName  = str_replace($sanitizeInputFromInjection, "", $requestLastName);
$requestPhone     = str_replace($sanitizeInputFromInjection, "", $requestPhone);
$requestEmail     = str_replace($sanitizeInputFromInjection, "", $requestEmail);
$requestAddress1  = str_replace($sanitizeInputFromInjection, "", $requestAddress1);
$requestAddress2  = str_replace($sanitizeInputFromInjection, "", $requestAddress2);
$requestZip       = str_replace($sanitizeInputFromInjection, "", $requestZip);

// Sanitize inputs from SQL-based injections
$requestFirstName = $db->getDBO()->real_escape_string($requestFirstName);
$requestLastName  = $db->getDBO()->real_escape_string($requestLastName);
$requestPhone     = $db->getDBO()->real_escape_string($requestPhone);
$requestEmail     = $db->getDBO()->real_escape_string($requestEmail);
$requestAddress1  = $db->getDBO()->real_escape_string($requestAddress1);
$requestAddress2  = $db->getDBO()->real_escape_string($requestAddress2);
$requestZip       = $db->getDBO()->real_escape_string($requestZip);
*/
// Set the To Recipient email
$to = techmunchies\functions\loadData ( TBL_SETTINGS, "agentEmail" );

$body = "House Request\n\nDate/Time Submitted: $submissionDateTime\n\n";

// Add form inputs into email body
$body .= "The following customer is interested in: \n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Has an Agent: $agent\n";

// Create email header
$subject = "House Request from $name - Submitted on: $submissionDateTime";

$header = "From: $name <$email>\r\nReply-To: $name <$email>\r\n";

// Send the request email to site owner TODO Check whether email was sent successfully (return code 1), otherwise, kill script
$status = mail ( $to, $subject, $body, $header );

// TODO Once the site owner is emailed, email a submission confirmation email to requestee

$ret [ "status" ] = "Success";

echo json_encode ( $ret );

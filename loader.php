<?php
namespace techmunchies;

// Starts a new session
ob_start ();
session_start ();

// Load app configuration, functions, and variables
require_once dirname ( __FILE__ ) . "/configuration.php";
require_once WEB_ROOT . "includes/en.php";
require_once WEB_ROOT . "includes/functions.php";

// Sets php error reporting app wide
if ( DEBUG_SET == "TRUE" ) {
    error_reporting ( E_ALL );
}

// Load database
functions\loadDBH ();

// Load site-wide PHP variables
$applicationName = functions\loadData ( TBL_SETTINGS, "applicationName" );

<?php

// Site-wide Error Reporting
define ( "DEBUG_SET", "TRUE" );

/*
 * SQL Database Settings
 */

/*
 * SQL Database Type
 * Available Types: MYSQL, SQLSRV
 */
define ( "DB_TYPE", "MYSQL" );

// SQL database name
define ( "DB_NAME", "iibitsco_wpr" );

// SQL database username
define ( "DB_USERNAME", "iibitsco_wpr" );

// SQL database password
define ( "DB_PASSWORD", 'b)}V[]fKhk0r' );

// SQL hostname
define ( "DB_HOSTNAME", "localhost" );

// SQL port
define ( "DB_PORT", "3306" );

// SQL charset
define ( "DB_CHARSET", "UTF8" );

// SQL collate
define ( "DB_COLLATE", "" );

/*
 * Table Names
 */

// Users table name
define ( "TBL_USER", "users" );

// Properties table name
define ( "TBL_PROPERTIES", "properties" );

// Settings table name
define ( "TBL_SETTINGS", "settings" );


// Sets up the WEB_ROOT
if ( !defined ( "WEB_ROOT" ) ) {
    define ( "WEB_ROOT", dirname ( __FILE__ ) . "/" );
}
?>

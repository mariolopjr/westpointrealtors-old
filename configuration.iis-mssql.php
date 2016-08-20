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
define ( "DB_TYPE", "SQLSRV" );

// SQL database name
define ( "DB_NAME", "wpr_1" );

// SQL database username
define ( "DB_USERNAME", "root" );

// SQL database password
define ( "DB_PASSWORD", 'root' );

// SQL hostname
define ( "DB_HOSTNAME", "(local)\SQLEXPRESS" );

// SQL port
define ( "DB_PORT", "1433" );

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

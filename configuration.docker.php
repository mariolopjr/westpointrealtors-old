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
define ( "DB_TYPE", $_SERVER [ 'MYSQL_TYPE' ] );

// SQL database name
define ( "DB_NAME", $_SERVER [ 'MYSQL_DB_NAME' ] );

// SQL database username
define ( "DB_USERNAME", $_SERVER [ 'MYSQL_DB_USERNAME' ] );

// SQL database password
define ( "DB_PASSWORD", $_SERVER [ 'MYSQL_DB_PASSWORD' ] );

// SQL hostname
define ( "DB_HOSTNAME", $_SERVER [ 'MYSQL_DB_HOSTNAME' ] );

// SQL port
define ( "DB_PORT", $_SERVER [ 'MYSQL_DB_PORT' ] );

// SQL charset
define ( "DB_CHARSET", $_SERVER [ 'MYSQL_DB_CHARSET' ] );

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

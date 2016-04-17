<?php
namespace techmunchies\functions;

/*
 * Queries the database for a particular value
 *
 * @since 0.0.1
 *
 * @param string $tableName The name of the table to query
 * @param string $dataName  The name of the data value to query
 *
 * @return mixed Returns the value of the queried data name
 */
function loadData ( $tableName, $dataName ) {

    global $dbh;

    if ( $dbh->getDBH () === null ) {
        // Returns that the $dbh instance was not instantiated
        return lang ( "DATABASE_NOT_INITIALIZED" );
    }

    // Fetch the data
    $stmt = $dbh->getDBH ()->prepare ( "SELECT dataValue FROM $tableName WHERE dataName = :dataName;" );
    $stmt->bindValue ( ":dataName", $dataName, \PDO::PARAM_STR );
    $stmt->execute ();

    // The returned result(s) of the SQL query
    $result = $stmt->fetchAll ( \PDO::FETCH_ASSOC );

    // Checks to see if the SQL query failed
    if ( $result === false ) {
        error_log ( lang ( "SQL_FETCH_ERROR" ) . $dbh->getDBH ()->error );

        // Returns that there was an error fetching the data
        return lang ( "SQL_FETCH_ERROR" ) . $dbh->getDBH ()->error;
    }
    else if ( $stmt->rowCount() != 1 ) {
        error_log ( lang ( "NO_RETURNED_VALUE" ) . "$tableName, $dataName" );
        return;
    }

    // Set the site name to the result of the returned query
    $ret = $result ["0"] [ "dataValue" ];

    return $ret;
}

/*
 * Loads the Database class and sets up the global $dbh variable
 *
 * @since 0.0.1
 */
function loadDBH () {

    global $dbh;

    // Loads the database class file
    require_once WEB_ROOT . "includes/classes/database.php";

    // Checks to see if global $dbh is already set
    if ( isset ( $dbh ) ) {
        return;
    }

    $dbh = new Database ( DB_TYPE, DB_HOSTNAME, DB_NAME, DB_USERNAME, DB_PASSWORD, DB_PORT, DB_CHARSET );

    if ( $dbh === false ) {
        unset ( $dbh );
        error_log ( lang ( "DATABASE_UNABLE_TO_CONNECT" ) );
    }
}

/**
* Checks to see if the web page is HTTPS
*
* Credit to syvex from Stack Overflow: http://stackoverflow.com/a/27556415
*
* @since 0.0.1
*/
function isHTTPS () {
    return (
        ( !empty ( $_SERVER [ 'HTTPS' ] ) && $_SERVER [ 'HTTPS' ] !== 'off' )
        || $_SERVER [ 'SERVER_PORT' ] == 443
        || (
            ( !empty( $_SERVER [ 'HTTP_X_FORWARDED_PROTO' ] )  && $_SERVER [ 'HTTP_X_FORWARDED_PROTO' ] == 'https' )
            || ( !empty( $_SERVER [ 'HTTP_X_FORWARDED_SSL' ] ) && $_SERVER [ 'HTTP_X_FORWARDED_SSL' ]   == 'on' )
            )
    );
}

/**
* Redirect HTTP page to HTTPS
*
* Credit to syvex from Stack Overflow: http://stackoverflow.com/a/27556415
*
* @since 0.0.1
*/
function requireHTTPS () {
    if ( !isHTTPS () ) {
        header ( 'Location: https://' . str_replace ( ":80", "", $_SERVER [ 'HTTP_HOST' ] ) . $_SERVER [ 'REQUEST_URI' ], TRUE, 301 );
        exit;
    }
}

/**
* Checks to see if a date is valid
*
* @since 0.0.1
*
* @param string $inputDate The date that needs to be validated
*
* @return boolean Returns whether the input date is a valid date
*/
function validateDate ( $inputDate ) {
    $dateFormat = "m/d/Y h:i:s a";
    $date = \DateTime::createFromFormat ( $dateFormat, $inputDate );
    return $date && $date->format( $dateFormat ) == $inputDate;
}

/**
* What is the Date/Time NOW?
*
* @since 0.0.1
*
* @return string Returns a string that represents the date and time at the instant of calling this function
*/
function dateTimeNow () {
    // Sets the time zone to EST
    // TODO Enable ability to configure/pull time zone from db
    $dateTimeZoneObj = new \DateTimeZone( "America/New_York" );
    // Create a new Date Time object set to the time right now
    $dateTimeObj = new \DateTime ();
    $dateTimeObj->setTimezone ( $dateTimeZoneObj );
    // Returns the DateTime object
    return $dateTimeObj->format( "m/d/Y h:i:s a" );
}

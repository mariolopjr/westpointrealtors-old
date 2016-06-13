<?php

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

// Properties Table
$tblProperties = TBL_PROPERTIES;

// Checks to see if database connection exists
if ( $dbh->getDBH () === null ) {
    // Returns that the $dbh instance was not instantiated
    return lang ( "DATABASE_NOT_INITIALIZED" );
}

// Fetch the homes
$stmt = $dbh->getDBH ()->prepare ( "SELECT * FROM $tblProperties WHERE disabled = 0;" );
$stmt->execute ();

// The returned result(s) of the SQL query
$result = $stmt->fetchAll ( \PDO::FETCH_ASSOC );

// Checks to see if the SQL query failed
if ( $result === false ) {
    error_log ( hernando\functions\lang ( "SQL_FETCH_ERROR" ) . $dbh->getDBH ()->error );
}

for ($i = 0; $i < $stmt->rowCount(); $i++) { }


?>

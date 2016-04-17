<?php
namespace techmunchies\functions;

//http://stackoverflow.com/a/1414148
function lang ( $phrase ) {

    static $lang = array (
        "UNRECOGNIZED_DB_TYPE"         => "Unrecognized Database Type, make sure to use on of the follow (case-sensitive): MYSQL, MSSQL",
        "DATABASE_NOT_INITIALIZED"     => "Database not initialized! Check database configuration settings!",
        "DATABASE_UNABLE_TO_CONNECT"   => "Database was not able to connect! Check database configuration settings!",
        "NO_RETURNED_VALUE"            => "No value exists for the supplied table, name: ",
        "USER_DOES_NOT_HAVE_ACCESS"    => "User does not have access to the app",
        "INVALID_LOGIN"                => "Username or password is incorrect",
        "SQL_FETCH_ERROR"              => "Error fetching SQL data: ",
        "SQL_FETCH_USER_DNE"           => "User Does Not Exist in Database",
        "SQL_INSERT_FAIL"              => "Failed to insert row"
    );

    return $lang [ $phrase ];
}

?>

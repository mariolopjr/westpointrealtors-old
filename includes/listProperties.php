<?php

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

// Sets up house listings
$houseListings = "";

// Properties Table
$tblProperties = TBL_PROPERTIES;

// Checks to see if database connection exists
if ( $dbh->getDBH () === null ) {
    // Returns that the $dbh instance was not instantiated
    return lang ( "DATABASE_NOT_INITIALIZED" );
}

// Fetch the homes
$stmt = $dbh->getDBH ()->prepare ( "SELECT * FROM $tblProperties WHERE disabled = 0 ORDER BY list_date DESC;" );
$stmt->execute ();

// The returned result(s) of the SQL query
$result = $stmt->fetchAll ( \PDO::FETCH_ASSOC );

// Checks to see if the SQL query failed
if ( $result === false ) {
    error_log ( hernando\functions\lang ( "SQL_FETCH_ERROR" ) . $dbh->getDBH ()->error );
}

for ($i = 0; $i < $stmt->rowCount(); $i++) {

    // Grab Price and transform it
    $priceAmt = $result [$i] [ "price" ];
    if ( $priceAmt == 0 ) {
        $priceAmt = "$---,---";
    } else {
        $priceAmt = "$$priceAmt";
    }

    $address      = $result [$i] [ "address" ]; // Address
    $bedrooms     = $result [$i] [ "bedrooms" ]; // Bedrooms
    $bathrooms    = $result [$i] [ "bathrooms" ]; // Bathrooms
    $garages      = $result [$i] [ "garages" ]; // Garages
    $totalRooms   = $result [$i] [ "total_rooms" ]; // Total Rooms
    $homeSize     = $result [$i] [ "home_size" ]; // Home Size sq ft
    $lotSize      = $result [$i] [ "lot_size" ]; // Lot Size sq ft
    $year         = $result [$i] [ "year" ]; // Year
    $housingType  = $result [$i] [ "housing_type" ]; // Housing Type
    $HOAFees      = "$" . $result [$i] [ "hoa_fees" ]; // HOA Fees
    $listDate     = $result [$i] [ "list_date" ]; // List Date

    // Start output buffering to capture auto-generated listings
    ob_start ();
?>

<tr>
    <td><?=$address?></td>
    <td><?=$priceAmt?></td>
    <td><?=$bedrooms?> / <?=$bathrooms?> / <?=$garages?></td>
    <td><?=$homeSize?></td>
    <td><?=$lotSize?></td>
    <td><?=$year?></td>
    <td><?=$listDate?></td>
</tr>

<?php
    // Grab the auto-generated listings and save it
    $houseListings .= ob_get_clean ();
}
?>

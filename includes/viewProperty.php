<?php

// Grabs values from GET data
$inputAddress = $_GET [ "house" ];

$inputAddress = str_replace ( "_", ",", $inputAddress );
$inputAddress = str_replace ( "-", " ", $inputAddress );

// Properties Table
$tblProperties = TBL_PROPERTIES;

// Checks to see if database connection exists
if ( $dbh->getDBH () === null ) {
    // Returns that the $dbh instance was not instantiated
    return lang ( "DATABASE_NOT_INITIALIZED" );
}

// Fetch the homes
$stmt = $dbh->getDBH ()->prepare ( "SELECT * FROM $tblProperties WHERE address = :address;" );
$stmt->bindValue ( ":address", $inputAddress, \PDO::PARAM_STR );
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
    $numOfPics    = $result [$i] [ "num_of_pictures" ] > 5
        ? 5 : $result [$i] [ "num_of_pictures" ] ; // Number of Pictures

    $link = $address;

    $link = str_replace ( ",", "_", $link );
    $link = str_replace ( " ", "-", $link );

    $link = "/listings?house=$link";

    // Start output buffering to capture auto-generated homes
    //ob_start ();
}
?>

<section class="jumbotron text-xs-center">
    <a href="<?=$link?>">
        <img id="house<?=$i?>IMG" src="uploads/<?=$address?>/Picture1.jpg" alt="Beautiful Home" data-holder-rendered="true">
    </a>
</section>

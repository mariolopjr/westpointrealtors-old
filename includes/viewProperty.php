<?php

// Grabs values from GET data
$inputAddress = $_GET [ "house" ];

$inputAddress = str_replace ( "_", ",", $inputAddress );
$inputAddress = str_replace ( "-", " ", $inputAddress );

// Properties Table
$tblProperties = TBL_PROPERTIES;

// Sets up house listing
$house = "";

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

// Grab Price and transform it
$priceAmt = $result [$i] [ "price" ];
if ( $priceAmt == 0 ) {
    $priceAmt = "$---,---";
} else {
    $priceAmt = "$$priceAmt";
}

$bedrooms     = $result [0] [ "bedrooms" ]; // Bedrooms
$bathrooms    = $result [0] [ "bathrooms" ]; // Bathrooms
$garages      = $result [0] [ "garages" ]; // Garages
$totalRooms   = $result [0] [ "total_rooms" ]; // Total Rooms
$homeSize     = $result [0] [ "home_size" ]; // Home Size sq ft
$lotSize      = $result [0] [ "lot_size" ]; // Lot Size sq ft
$year         = $result [0] [ "year" ]; // Year
$housingType  = $result [0] [ "housing_type" ]; // Housing Type
$HOAFees      = "$" . $result [0] [ "hoa_fees" ]; // HOA Fees
$numOfPics    = $result [0] [ "num_of_pictures" ]; // Number of Pictures
$encAddress   = str_replace ( " ", "+", $inputAddress );

// Start output buffering to capture auto-generated homes
ob_start ();
?>

<div class="row">
    <div class="col-md-6">
        <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?=$encAddress?>&zoom=13&size=540x540&maptype=roadmap&key=AIzaSyAW1M1pnn9VA5LsJOo0KT_XWKMbMU2gyKg" />
    </div>
    <div class="col-md-6">
        <img id="houseIMG" src="../uploads/<?=$inputAddress?>/Picture1.jpg" alt="Beautiful Home" data-holder-rendered="true" />
<?php for ($i = 0; $i < $numOfPics; $i++ ) {
$active = $i == 0 ? " active" : "";
$div = $i % 5 == 0 ? '<div class="small-img-row text-xs-center">' . "\n" : "";
$closeDiv = ($i + 1) % 5 == 0 || $i == $numOfPics - 1 ? "\n</div>" : "";
?>
            <?=$div?><img class="popover-image-small<?=$active?>" src="/uploads/<?=$inputAddress?>/Picture<?=$i + 1?>.jpg" alt="Beautiful Home" onclick="loadIMG('houseIMG', this)" /><?=$closeDiv?>
<?php } ?>
    </div>
    <div class="col-md-6">
        <h1>Home Information</h1>
        <p>
            Address: <?=$inputAddress?><br />
            Bedrooms:  <?=$bedrooms?><br />
            Bathrooms: <?=$bathrooms?><br />
            Total Rooms: <?=$totalRooms?><br />
            Garages: <?=$garages?><br />
        </p>
    </div>
    <div class="col-md-6">
        <form>
            CONTACT US
        </form>
    </div>
</div>

<?php
// Grab the auto-generated listings and save it
$house .= ob_get_clean ();
?>

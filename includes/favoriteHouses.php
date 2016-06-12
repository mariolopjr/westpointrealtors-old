<?php

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

// Sets up houses array
$favoriteHouses = array (
    "houses" => array (
        "house1" => array (
            "html" => "",
            "js"   => ""
        ),
        "house2" => array (
            "html" => "",
            "js"   => ""
        ),
        "house3" => array (
            "html" => "",
            "js"   => ""
        ),
        "house4" => array (
            "html" => "",
            "js"   => ""
        ),
        "house5" => array (
            "html" => "",
            "js"   => ""
        ),
        "house6" => array (
            "html" => "",
            "js"   => ""
        )
    )
);

// Properties Table
$tblProperties = TBL_PROPERTIES;

// Checks to see if database connection exists
if ( $dbh->getDBH () === null ) {
    // Returns that the $dbh instance was not instantiated
    return lang ( "DATABASE_NOT_INITIALIZED" );
}

// Fetch the homes
$stmt = $dbh->getDBH ()->prepare ( "SELECT * FROM $tblProperties WHERE favorite_home = 1;" );
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
    if ( $priceAmt == -1 ) {
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

    // Start output buffering to capture auto-generated homes
    ob_start ();
?>
<div id="house<?=$i?>" class="card" data-toggle="popover">
    <a href="#">
        <img id="house<?=$i?>IMG" src="uploads/<?=$address?>/Picture1.jpg" alt="Beautiful Home" data-holder-rendered="true">
        <div class="house-info-container">
            <div class="house-price">
                <?=$priceAmt?>
            </div>
            <div class="house-address">
                <?=$address?>
            </div>
            <div class="house-info">
                <?=$bedrooms?> bd <span aria-hidden="true">•</span> <?=$bathrooms?> ba <span aria-hidden="true">•</span> <?=$homeSize?> sqft
            </div>
        </div>
    </a>
    <hr>
    <div class="small-img-row text-xs-center">
<?php for ($j = 1; $j <= $numOfPics; $j++ ) {
$active = $j == 1 ? " active" : "";
?>
        <img class="popover-image-small<?=$active?>" src="uploads/<?=$address?>/Picture<?=$j?>.jpg" alt="Beautiful Home" onclick="loadIMG('house<?=$i?>IMG', this)" />
<?php } ?>
    </div>
</div>
<?php
error_log ("iteration: $i");
// Grab the first favorite home, and save it to return variable
$favoriteHouses [ "houses" ] [ "house$i" ] ["html"] = ob_get_clean ();

// Start output buffering to capture auto-generated homes
ob_start ();

// Convert to string for javascript
$JSi         = "'" . $i . "'";
$address     = "'" . $address . "'";
$priceAmt    = "'" . $priceAmt . "'";
$bedrooms    = "'" . $bedrooms . "'";
$bathrooms   = "'" . $bathrooms . "'";
$garages     = "'" . $garages . "'";
$totalRooms  = "'" . $totalRooms . "'";
$homeSize    = "'" . $homeSize . "'";
$lotSize     = "'" . $lotSize . "'";
$year        = "'" . $year . "'";
$housingType = "'" . $housingType . "'";
$HOAFees     = "'" . $HOAFees . "'";
?>
$('#house' + <?=$JSi?>).popover({
    title: <?=$address?>,
    content:
        '<div class="row">' +
        '<div class="col-md-6">' +
        'Price: ' + <?=$priceAmt?> + "<br />" +
        'Bed/Bath: ' + <?=$bedrooms?> + '/' + <?=$bathrooms?> + "<br />" +
        'Garage: ' + <?=$garages?> + "<br />" +
        '</div>' +
        '<div class="col-md-6 less-padding">' +
        'Year: ' + <?=$year?> + "<br />" +
        'Total Rooms: ' + <?=$totalRooms?> + "<br />" +
        'HOA Fees: ' + <?=$HOAFees?> + "<br />" +
        '</div>' +
        '</div>' +
        'Home Size: ' + <?=$homeSize?> + ' sq ft' + "<br />" +
        'Lot Size: ' + <?=$lotSize?> + ' sq ft' + "<br />" +
        'Housing Type: ' + <?=$housingType?> + "<br />",
    trigger: 'hover',
    placement: 'top',
    template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
    //offset: 15,
    delay: { show: 350, hide: 100 },
    html: true
});
<?php
// Grab the first favorite home, and save it to return variable
$favoriteHouses [ "houses" ] [ "house$i" ] ["js"] = ob_get_clean ();
}
?>

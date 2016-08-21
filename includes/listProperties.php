<?php

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

// Sets up house listings
$houseListings = "";
$listingCSS    = "";
$listingJS     = "";

// Properties Table
$tblProperties = TBL_PROPERTIES;

// Checks to see if database connection exists
if ( $dbh->getDBH () === null ) {
    // Returns that the $dbh instance was not instantiated
    return techmunchies\functions\lang ( "DATABASE_NOT_INITIALIZED" );
}

// Fetch the homes
$stmt = $dbh->getDBH ()->prepare ( "SELECT * FROM $tblProperties WHERE disabled = 0;" );
$stmt->execute ();

// The returned result(s) of the SQL query
$result = $stmt->fetchAll ( \PDO::FETCH_ASSOC );

// Checks to see if the SQL query failed
if ( $result === false ) {
    error_log ( techmunchies\functions\lang ( "SQL_FETCH_ERROR" ) . $dbh->getDBH ()->error );
}

// Get ready for additional JS by already opening jQuery dom ready function
$listingJS .= "<script>\n$(document).ready(function() {";

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
    $numOfPics    = $result [ $i ] [ "num_of_pictures" ]; // Number of Pictures

    $link = $address;

    $link = str_replace ( " ", "+", $link );

    $link = "/listings?house=$link";

    // Start output buffering to capture auto-generated listings
    ob_start ();
?>

<tr id="row<?=$i + 1?>">
    <td>
        <a href="<?=$link?>" class="btn btn-success btn-sm" role="button" data-value="View">View</a>
    </td>
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

    // Convert to string for javascript
    $JSi         = "'" . ($i + 1) . "'";
    $JSaddress     = "'" . $address . "'";

    ob_start ();
?>
$('#row' + <?=$JSi?>).popover({
    title: <?=$JSaddress?>,
    content:
        <?php if ( $numOfPics == 0 ) { ?>
        '<img class="popover-img" data-src="holder.js/354x280?text=No Images Available" alt="There are no pictures of <?=$address?>" data-holder-rendered="true">',
        <?php } else { ?>
        '<img class="popover-img" src="../uploads/' + <?=$JSaddress?> + '/Picture1.jpg" alt="Main Home Picture of <?=$address?>" data-holder-rendered="true">',
        <?php } ?>
    trigger: 'hover',
    placement: 'top',
    template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
    //offset: 15,
    delay: { show: 350, hide: 100 },
    html: true
});
<?php
// Grab the auto-generated listing JS and save it
$listingJS .= ob_get_clean ();

}
ob_start ();
?>
$('.footable').footable();
<?php if ( $query != "" ) { ?>
$("#searchField").val("<?=$query?>");
$("body > div.container > div > table > thead > tr.footable-filtering > th > form > div > div > input").val("<?=$query?>");
$("body > div.container > div > table > thead > tr.footable-filtering > th > form > div > div > div > button.btn.btn-primary").click();
<?php } ?>
$("body > div.container > div > table > thead > tr.footable-filtering > th > form > div > div > div > button.btn.btn-default.dropdown-toggle").remove();
<?php
// Grab the auto-generated listing JS and save it
$listingJS .= ob_get_clean ();

// End generated output
$listingJS .= "});\n</script>";

ob_start ();
?>
<style>
.fooicon {
    font-family: FontAwesome !important;
}
.fooicon-search::before {
    content: "\f002";
}
.fooicon-sort::before {
    content: "\f07d";
}
.fooicon-remove::before {
    content: "\f00d";
}
.popover-img {
    width: 100%;
}
</style>
<?php
// Grab the auto-generated listing CSS and save it
$listingCSS .= ob_get_clean ();
?>

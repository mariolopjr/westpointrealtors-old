<?php

// Grabs values from GET data
$inputAddress = $_GET [ "house" ];

$inputAddress = str_replace ( "+", " ", $inputAddress );

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
<a id="backBtn" href="/listings/" class="btn btn-success btn-sm" role="button" data-toggle="tooltip" data-placement="right" title="Listings"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
<div class="row">
    <div class="col-md-6">
        <div id="map"></div>
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
    <div class="col-md-6 second-row">
        <h1 class="text-xs-center">Home Information</h1>
        <p>
            Address: <?=$inputAddress?><br />
            Bedrooms:  <?=$bedrooms?><br />
            Bathrooms: <?=$bathrooms?><br />
            Total Rooms: <?=$totalRooms?><br />
            Garages: <?=$garages?><br />
        </p>
    </div>
    <div class="col-md-6 second-row">
        <h1 class="text-xs-center">CONTACT US</h1>
        <form>
            form
        </form>
    </div>
</div>

<?php
// Grab the auto-generated listing and save it
$house .= ob_get_clean ();

ob_start ();
?>
<style>
#houseIMG {
    width: 100%;
    height: 540px;
    padding: 1rem;
    margin: 1rem;
    margin-right: 0;
}
#map {
    width: 100%;
    height: 508px;
    padding: 0;
    margin: 2rem;
    margin-left: 0;
}
#backBtn {
    position: absolute;
    top: 5.4rem;
    left: -0.2rem;
}
.small-img-row {
    margin-left: 2rem;
    margin-bottom: 0.5rem;
}
.small-img-row > img {
    margin-right: 0.5rem;
    opacity: 0.3;
    height: 48px;
    width: 18%;
}
</style>
<?php
// Grab the auto-generated listing CSS and save it
$houseCSS .= ob_get_clean ();

ob_start ();
?>
<script>
var geocoder;
var map;
var address = "<?=$encAddress?>";

function initMap () {
  geocoder = new google.maps.Geocoder();
  var coordinates = new google.maps.LatLng(-34.397, 150.644);
  var mapOptions = {
    zoom: 18,
    fullscreenControl: true,
    center: coordinates,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DEFAULT
    },
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    //streetView: new google.maps.StreetViewPanorama(document.getElementById("DIV-BOX"))
  };
  map = new google.maps.Map(document.getElementById("map"), mapOptions);
  if (geocoder) {
    geocoder.geocode({
      'address': address
    }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

          var infoWindow = new google.maps.InfoWindow({
            content: '<b>' + address + '</b>',
            size: new google.maps.Size(150, 50)
          });

          var houseMarker = new google.maps.Marker({
            position: results[0].geometry.location,
            map: map,
            title: address
          });
          google.maps.event.addListener(houseMarker, 'click', function() {
            infoWindow.open(map, houseMarker);
          });

        } else {
          alert("No results found");
        }
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
}

$(document).ready(function() {
    $("#backBtn").tooltip();
    initMap ();
});
</script>
<?php
// Grab the auto-generated listing JS and save it
$houseJS .= ob_get_clean ();
?>

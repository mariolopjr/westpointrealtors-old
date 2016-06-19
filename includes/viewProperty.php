<?php

// Grabs values from GET data
$inputAddress = $_GET [ "house" ];

$inputAddress = str_replace ( "+", " ", $inputAddress );

// Properties Table
$tblProperties = TBL_PROPERTIES;

// Sets up house listing
$house = "";

// Sets up HUD Link URI
$HUDLinkURI = "http://www.hudhomestore.com/Listing/PropertyDetails.aspx?caseNumber=";

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
    error_log ( techmunchies\functions\lang ( "SQL_FETCH_ERROR" ) . $dbh->getDBH ()->error );
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
$HUDHome      = $result [0] [ "hud_home" ]; // Is this a HUD Home?

if ( $HUDHome == 1 ) {
    $HUDCaseNum = $result [0] [ "hud_case_num" ]; // HUD Case Number
    $HUDLink    = $HUDLinkURI . $HUDCaseNum; // Creates the link to load HUD listing
}

// Create Encoded address for Google Maps Geolocation
$encAddress = str_replace ( " ", "+", $inputAddress );

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
        <div class="card">
            <div class="card-header text-xs-center">
                <h3 class="card-title">Home Information</h3>
                <h6 class="card-subtitle text-muted">&nbsp;</h6>
            </div>
            <div class="card-block">
                <p>
                    Address: <?=$inputAddress?><br />
                    Bedrooms:  <?=$bedrooms?><br />
                    Bathrooms: <?=$bathrooms?><br />
                    Total Rooms: <?=$totalRooms?><br />
                    Garages: <?=$garages?><br />
                </p>
                <div class="text-xs-center">
                    <a href="<?=$HUDLink?>" class="btn btn-success btn-sm" role="button" target="_blank">View HUD Listing</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 second-row">
        <div class="card card-form">
            <div class="card-header text-xs-center">
                <h3 class="card-title">Contact Us</h3>
                <h6 class="card-subtitle text-muted">Send us an email regarding this home</h6>
            </div>
            <div class="card-block">
                <form id="contact">
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your full name" />
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Phone" id="phone" required data-validation-regex-regex="\(\d{3}\)\s\d{3}-\d{4}" data-validation-required-message="Please enter your phone" data-validation-regex-message="Please match the following format: (123) 456-7890" />
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" class="form-control" placeholder="Please enter your message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Please enter at least 5 characters" maxlength="999"></textarea>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" id="agent" name="agent" value="init" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="No" data-indeterminate="true" data-validation-callback-callback="checkboxValidator">
                        <label>
                            Do you currently have an agent?
                        </label>
                        <p class="help-block"></p>
                    </div>
                    <div class="row">
                        <div class="g-recaptcha col-sm-3 col-sm-offset-2" data-sitekey="6Leg8CITAAAAAMl9KLLuKNT9TqyJuXq0nz2M21gw"></div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-xs-center">
                <button id="submitBtn" class="btn btn-success btn-sm" role="button">Submit</button>
            </div>
        </div>
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
.second-row {
    margin-top: 3rem;
}
.card {
    width: 100%;
    border: 1px solid #e5e5e5;
    border-radius: .25rem;
    padding: 0;
    margin-bottom: 0;
}
.card-form {
    margin-left: 2rem;
    width: 508px;
}
form textarea {
    resize: none;
}
.checkbox-container > label {
    margin-left: 0.5rem;
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
var request;

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

function checkboxValidator ($el, value, callback) {
    callback ({
        value: value,
        valid: /(Yes)|(No)/.test(value),
        message: "Please select whether you have an agent or not"
    });
}

$(document).ready(function() {
    $("#backBtn").tooltip();
    initMap ();
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Submit error, do something if needed
        }
    });
    $("#agent").bootstrapSwitch();
    $("#agent").on('switchChange.bootstrapSwitch', function(event, state) {
        if (state === true) {
            $("#agent").val("Yes");
        } else {
            $("#agent").val("No");
        }
    });

    // Bind to the submit event of the addCustomerForm form
    $("#contact").submit(function (event) {

        // Abort any pending request
        if (request) {
            request.abort();
        }

        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();

        // Add address to POST
        var address = "&address=<?=$inputAddress?>";
        serializedData += address;

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the POST request to writeConfig.php
        request = $.ajax({

            url: "includes/contact.php",
            type: "POST",
            data: serializedData

        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXhr) {

            var returnStatus = $.evalJSON(response).returnStatus; // Grabs the return status from the returned JSON
            var errorLog = $.evalJSON(response).errorLog; // Grabs the error log from the returned JSON

            if (returnStatus === "Success") {

                // Refresh the page
                setTimeout(function() { window.location.reload(true); }, 1);

            } else {

                if (returnStatus === "Fail User") {

                    alert("Wrong email or password!");

                } else {

                    // Refresh the page
                    setTimeout(function () { window.location.reload(true); }, 1);

                }

            }

        });

        // Callback handler that will be called on failure
        request.fail(function (jqXhr, textStatus, errorThrown) {

            // Log the error to the console
            console.error(
               "The following error occurred: " +
                  textStatus, errorThrown
            );

        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {

            // Reenable the inputs
            $inputs.prop("disabled", false);

        });

        // Prevent default posting of form
        event.preventDefault();
    });
});
</script>
<?php
// Grab the auto-generated listing JS and save it
$houseJS .= ob_get_clean ();
?>

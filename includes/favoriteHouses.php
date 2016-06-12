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



// Start output buffering to capture auto-generated homes
ob_start ();
?>
<div id="house1" class="card" data-toggle="popover">
    <a href="#">
        <img id="house1IMG" src="uploads/509 Park Way Brooksville, FL, 34601/Picture1.jpg" alt="Beautiful Home" data-holder-rendered="true">
        <div class="house-info-container">
            <div class="house-price">
                $38,000
            </div>
            <div class="house-address">
                509 Park Way, Brooksville, FL, 34601
            </div>
            <div class="house-info">
                3 bd <span aria-hidden="true">•</span> 2 ba <span aria-hidden="true">•</span> 1512 sqft
            </div>
        </div>
    </a>
    <hr>
    <div class="small-img-row text-xs-center">
        <img class="popover-image-small active" src="uploads/509 Park Way Brooksville, FL, 34601/Picture1.jpg" alt="Beautiful Home" onclick="loadIMG('house1IMG', this)" />
        <img class="popover-image-small" src="uploads/509 Park Way Brooksville, FL, 34601/Picture2.jpg" alt="Beautiful Home"  onclick="loadIMG('house1IMG', this)" />
        <img class="popover-image-small" src="uploads/509 Park Way Brooksville, FL, 34601/Picture3.jpg" alt="Beautiful Home"  onclick="loadIMG('house1IMG', this)" />
        <img class="popover-image-small" src="uploads/509 Park Way Brooksville, FL, 34601/Picture4.jpg" alt="Beautiful Home"  onclick="loadIMG('house1IMG', this)" />
        <img class="popover-image-small" src="uploads/509 Park Way Brooksville, FL, 34601/Picture5.jpg" alt="Beautiful Home"  onclick="loadIMG('house1IMG', this)" />
    </div>
</div>
<?php
// Grab the first favorite home, and save it to return variable
$favoriteHouses [ "houses" ] [ "house1" ] ["html"] = ob_get_clean ();

// Start output buffering to capture auto-generated homes
ob_start ();
?>
$('#house1').popover({
    title: '509 Park Way, Brooksville, FL, 34601',
    content:
        '<div class="row">' +
        '<div class="col-md-6">' +
        'Price: $38,000' + "<br />" +
        'Bed/Bath: 3/2' + "<br />" +
        'Garage: 0' + "<br />" +
        '</div>' +
        '<div class="col-md-6 less-padding">' +
        'Year: 1950' + "<br />" +
        'Total Rooms: 7' + "<br />" +
        'HOA Fees: $0.00' + "<br />" +
        '</div>' +
        '</div>' +
        'Home Size: 1,512 sq ft' + "<br />" +
        'Lot Size: 8,060 sq ft' + "<br />" +
        'Housing Type: Single Family Home' + "<br />",
    trigger: 'hover',
    placement: 'top',
    template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
    //offset: 15,
    delay: { show: 350, hide: 100 },
    html: true
});
<?php
// Grab the first favorite home, and save it to return variable
$favoriteHouses [ "houses" ] [ "house1" ] ["js"] = ob_get_clean ();
?>

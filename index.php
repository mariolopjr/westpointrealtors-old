<?php
// Author: Mario Lopez

// Software loader, sets up the database connection, and important functions
require_once dirname ( __FILE__ ) . "/loader.php";

$pageTitle = "$applicationName - Main";
?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$pageTitle?></title>

<!-- Site CSS  -->
<?php require_once WEB_ROOT . "includes/css.php"; ?>
<!-- /Site CSS -->

</head>
<body>

<!-- Site Header  -->
<?php include "header.php"; ?>
<!-- /Site Header -->

<div class="container">
<section class="jumbotron text-xs-center">
    <h1 class="jumbotron-heading">West Point Real Estate</h1>
    <p class="lead text-muted">
        The BEST for our customers, period.
    </p>
    <br />
    <br />
    <br />
</section>

<!-- Favorite Listings  -->
<div class="album text-muted">
    <div class="row">
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
        <div id="house2" class="card" data-toggle="popover">
            <a href="#">
                <img data-src="holder.js/100px280?text=House 2" alt="Beautiful Home" data-holder-rendered="true">
                <p>
                    <div class="house-price">
                        $150,000
                    </div>
                    <div class="house-address">
                        12345 NW 3rd St, Orlando, FL 32816
                    </div>
                    <div class="house-info">
                        4 bd <span aria-hidden="true">•</span> 4 ba
                    </div>
                </p>
            </a>
            <hr>
            <div class="small-img-row text-xs-center">
                <img class="popover-image-small active" data-src="holder.js/56x48?text=Pic 1" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 2" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 3" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 4" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 5" alt="Beautiful Home" />
            </div>
        </div>
        <div id="house3" class="card" data-toggle="popover">
            <a href="#">
                <img data-src="holder.js/100px280?text=House 3" alt="Beautiful Home" data-holder-rendered="true">
                <p>
                    <div class="house-price">
                        $150,000
                    </div>
                    <div class="house-address">
                        12345 NW 3rd St, Orlando, FL 32816
                    </div>
                    <div class="house-info">
                        4 bd <span aria-hidden="true">•</span> 4 ba
                    </div>
                </p>
            </a>
            <hr>
            <div class="small-img-row text-xs-center">
                <img class="popover-image-small active" data-src="holder.js/56x48?text=Pic 1" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 2" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 3" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 4" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 5" alt="Beautiful Home" />
            </div>
        </div>
        <div id="house4" class="card" data-toggle="popover">
            <a href="#">
                <img data-src="holder.js/100px280?text=House 4" alt="Beautiful Home" data-holder-rendered="true">
                <p>
                    <div class="house-price">
                        $150,000
                    </div>
                    <div class="house-address">
                        12345 NW 3rd St, Orlando, FL 32816
                    </div>
                    <div class="house-info">
                        4 bd <span aria-hidden="true">•</span> 4 ba
                    </div>
                </p>
            </a>
            <hr>
            <div class="small-img-row text-xs-center">
                <img class="popover-image-small active" data-src="holder.js/56x48?text=Pic 1" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 2" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 3" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 4" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 5" alt="Beautiful Home" />
            </div>
        </div>
        <div id="house5" class="card" data-toggle="popover">
            <a href="#">
                <img data-src="holder.js/100px280?text=House 5" alt="Beautiful Home" data-holder-rendered="true">
                <p>
                    <div class="house-price">
                        $150,000
                    </div>
                    <div class="house-address">
                        12345 NW 3rd St, Orlando, FL 32816
                    </div>
                    <div class="house-info">
                        4 bd <span aria-hidden="true">•</span> 4 ba
                    </div>
                </p>
            </a>
            <hr>
            <div class="small-img-row text-xs-center">
                <img class="popover-image-small active" data-src="holder.js/56x48?text=Pic 1" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 2" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 3" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 4" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 5" alt="Beautiful Home" />
            </div>
        </div>
        <div id="house6" class="card" data-toggle="popover">
            <a href="#">
                <img data-src="holder.js/100px280?text=House 6" alt="Beautiful Home" data-holder-rendered="true">
                <p>
                    <div class="house-price">
                        $150,000
                    </div>
                    <div class="house-address">
                        12345 NW 3rd St, Orlando, FL 32816
                    </div>
                    <div class="house-info">
                        4 bd <span aria-hidden="true">•</span> 4 ba
                    </div>
                </p>
            </a>
            <hr>
            <div class="small-img-row text-xs-center">
                <img class="popover-image-small active" data-src="holder.js/56x48?text=Pic 1" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 2" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 3" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 4" alt="Beautiful Home" />
                <img class="popover-image-small" data-src="holder.js/56x48?text=Pic 5" alt="Beautiful Home" />
            </div>
        </div>
    </div>
</div>
<!-- /Favorite Listings -->

<a href="#" class="center-block to-top">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
</a>

</div>

<!-- Footer  -->
<div class="footerContactBlock">
    <!-- Load footer -->
    <?php include "footer.php"; ?>
</div>
<!-- /Footer -->

<!-- Site JavaScript  -->
<?php require_once WEB_ROOT . "includes/js.php"; ?>
<!-- /Site JavaScript -->
<script>
$(document).ready(function() {

    var toTopPageOffset = 220;
    var toTopTimeDuration = 500;

    /* Display to-top after certain offset
    $(window).scroll(function() {

        if ($(this).scrollTop() > offset) {
            $('.to-top').fadeIn(toTopTimeDuration);
        } else {
            $('.to-top').fadeOut(toTopTimeDuration);
        }

    });*/

    $('.to-top').click(function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, toTopTimeDuration);
        return false;
    });

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

    $('#house2').popover({
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '' +
            '</div>' +
            '<hr>' +
            '</h3>',
        trigger: 'hover',
        placement: 'top',
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        //offset: 15,
        delay: { show: 350, hide: 100 },
        html: true
    });

    $('#house3').popover({
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '' +
            '</div>' +
            '<hr>' +
            '</h3>',
        trigger: 'hover',
        placement: 'top',
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        //offset: 15,
        delay: { show: 350, hide: 100 },
        html: true
    });

    $('#house4').popover({
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '' +
            '</div>' +
            '<hr>' +
            '</h3>',
        trigger: 'hover',
        placement: 'top',
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        //offset: 15,
        delay: { show: 350, hide: 100 },
        html: true
    });

    $('#house5').popover({
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '' +
            '</div>' +
            '<hr>' +
            '</h3>',
        trigger: 'hover',
        placement: 'top',
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        //offset: 15,
        delay: { show: 350, hide: 100 },
        html: true
    });

    $('#house6').popover({
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '' +
            '</div>' +
            '<hr>' +
            '</h3>',
        trigger: 'hover',
        placement: 'top',
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        //offset: 15,
        delay: { show: 350, hide: 100 },
        html: true
    });
});
</script>
</body>
</html>

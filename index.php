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
        <a href="#">
            <div id="house1" class="card" data-toggle="popover">
                <img data-src="holder.js/100px280?text=House 1" alt="Beautiful Home" data-holder-rendered="true">
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
            </div>
        </a>
        <a href="#">
            <div id="house2" class="card" data-toggle="popover">
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
            </div>
        </a>
        <a href="#">
            <div id="house3" class="card" data-toggle="popover">
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
            </div>
        </a>
        <a href="#">
            <div id="house4" class="card" data-toggle="popover">
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
            </div>
        </a>
        <a href="#">
            <div id="house5" class="card" data-toggle="popover">
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
            </div>
        </a>
        <a href="#">
            <div id="house6" class="card" data-toggle="popover">
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
            </div>
        </a>
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

    function hidePopover(e) {
        $(e).popover('hide');
    }

    // Sets up the popover defaults
    $('.card').popover({
        trigger: 'manual',
        placement: 'top',
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        //offset: 15,
        delay: { show: 350, hide: 100 },
        html: true
    });

    var timer, parentPopover;

    $('.card').hover(function() {
        var self = this;
        clearTimeout(timer);
        $('.popover').hide(); //Hide any open popovers on other elements.
        parentPopover = self
        $(self).popover('show');
    },
    function() {
        var self = this;
        timer = setTimeout(function(){ hidePopover(self) }, 300);
    });

    $('.popover').live({
        mouseover: function() {
            clearTimeout(timer);
        },
        mouseleave: function() {
            var self = this;
            timer = setTimeout(function(){ hidePopover(parentPopover) }, 300);
        }
    });

    $('#house1').popover({
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '<img class="popover-image-small" data-src="holder.js/100px280" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280?text=+5" alt="Beautiful Home">' +
            '</div>' +
            '<hr>' +
            '</h3>'
    });

    $('#house2').popover({
        trigger: "hover",
        placement: "top",
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" alt="Beautiful Home">' +
            '</div>' +
            '<hr>' +
            '</h3>',
        html: true
    });

    $('#house3').popover({
        trigger: "hover",
        placement: "top",
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" alt="Beautiful Home">' +
            '</div>' +
            '<hr>' +
            '</h3>',
        html: true
    });

    $('#house4').popover({
        trigger: "hover",
        placement: "top",
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" alt="Beautiful Home">' +
            '</div>' +
            '<hr>' +
            '</h3>',
        html: true
    });

    $('#house5').popover({
        trigger: "hover",
        placement: "top",
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" alt="Beautiful Home">' +
            '</div>' +
            '<hr>' +
            '</h3>',
        html: true
    });

    $('#house6').popover({
        trigger: "hover",
        placement: "top",
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100x280/thumb" alt="Beautiful Home" data-holder-rendered="true">' +
            '<img class="popover-image-small" alt="Beautiful Home">' +
            '</div>' +
            '<hr>' +
            '</h3>',
        html: true
    });
});
</script>
</body>
</html>

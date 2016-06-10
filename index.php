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
                <img data-src="holder.js/100px280/thumb" alt="Beautiful Home" data-holder-rendered="true">
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
            <div id="house1" class="card" data-toggle="popover">
                <img data-src="holder.js/100px280/thumb" alt="Beautiful Home" data-holder-rendered="true">
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
            <div id="house1" class="card" data-toggle="popover">
                <img data-src="holder.js/100px280/thumb" alt="Beautiful Home" data-holder-rendered="true">
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
            <div id="house1" class="card" data-toggle="popover">
                <img data-src="holder.js/100px280/thumb" alt="Beautiful Home" data-holder-rendered="true">
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
            <div id="house1" class="card" data-toggle="popover">
                <img data-src="holder.js/100px280/thumb" alt="Beautiful Home" data-holder-rendered="true">
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
            <div id="house1" class="card" data-toggle="popover">
                <img data-src="holder.js/100px280/thumb" alt="Beautiful Home" data-holder-rendered="true">
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
    $('#house1').popover({
        trigger: "hover",
        placement: "top",
        template: '<div class="popover popover-card" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title text-xs-center"></h3><div class="popover-content"></div></div>',
        title: '12345 NW 3rd St, Orlando, FL 32816',
        content:
            '<h3>' +
            '<div>' +
            '<img class="popover-image-small" data-src="holder.js/100px280/thumb" alt="Beautiful Home" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22356%22%20height%3D%22280%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F100px280%2Fthumb%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_15532de443c%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15532de443c%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%2F%3E%3Cg%3E%3Ctext%20x%3D%22131.28125%22%20y%3D%22148.0484375%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100px280/thumb" alt="Beautiful Home" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22356%22%20height%3D%22280%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F100px280%2Fthumb%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_15532de443c%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15532de443c%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%2F%3E%3Cg%3E%3Ctext%20x%3D%22131.28125%22%20y%3D%22148.0484375%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100px280/thumb" alt="Beautiful Home" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22356%22%20height%3D%22280%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F100px280%2Fthumb%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_15532de443c%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15532de443c%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%2F%3E%3Cg%3E%3Ctext%20x%3D%22131.28125%22%20y%3D%22148.0484375%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100px280/thumb" alt="Beautiful Home" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22356%22%20height%3D%22280%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F100px280%2Fthumb%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_15532de443c%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15532de443c%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%2F%3E%3Cg%3E%3Ctext%20x%3D%22131.28125%22%20y%3D%22148.0484375%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">' +
            '<img class="popover-image-small" data-src="holder.js/100px280/thumb" alt="Beautiful Home" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22356%22%20height%3D%22280%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F100px280%2Fthumb%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_15532de443c%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15532de443c%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%2F%3E%3Cg%3E%3Ctext%20x%3D%22131.28125%22%20y%3D%22148.0484375%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">' +
            '</div>' +
            '<hr>' +
            '</h3>',
        html: true
    });
});
</script>
</body>
</html>

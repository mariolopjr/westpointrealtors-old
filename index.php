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

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/theme.css">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Main Container  -->
<div class="container">

    <!-- Site Header  -->
    <?php include "header.php"; ?>
    <!-- /Site Header -->

    <!-- House Search Block  -->
    <div class="houseSearchBlock">
        animatron + search goes here
    <!-- /House Search Block -->

    <!-- Favorite Listings  -->
    <div class="favoriteListings album text-muted">
        <div class="row">
            <div class="favoriteHomeContainer card">
                <img src="http://placehold.it/350x300" style="height: 300px; width: 100%; display: block;" alt="Beautiful Home 1" />
                <p class="home-card-text">
                    Beautiful home 1.......<br />
                    12345 NW 3rd St, Orlando, FL 32816<br />
                    $150,000<br />
                </p>
            </div>
            <div class="favoriteHomeContainer card">
                <img src="http://placehold.it/350x300" style="height: 300px; width: 100%; display: block;" alt="Beautiful Home 2" />
                <p class="home-card-text">
                    Beautiful home 2.......<br />
                    12345 NW 3rd St, Orlando, FL 32816<br />
                    $150,000<br />
                </p>
            </div>
            <div class="favoriteHomeContainer card">
                <img src="http://placehold.it/350x300" style="height: 300px; width: 100%; display: block;" alt="Beautiful Home 3" />
                <p class="home-card-text">
                    Beautiful home 3.......<br />
                    12345 NW 3rd St, Orlando, FL 32816<br />
                    $150,000<br />
                </p>
            </div>
            <div class="favoriteHomeContainer card">
                <img src="http://placehold.it/350x300" style="height: 300px; width: 100%; display: block;" alt="Beautiful Home 4" />
                <p class="home-card-text">
                    Beautiful home 4.......<br />
                    12345 NW 3rd St, Orlando, FL 32816<br />
                    $150,000<br />
                </p>
            </div>
            <div class="favoriteHomeContainer card">
                <img src="http://placehold.it/350x300" style="height: 300px; width: 100%; display: block;" alt="Beautiful Home 5" />
                <p class="home-card-text">
                    Beautiful home 5.......<br />
                    12345 NW 3rd St, Orlando, FL 32816<br />
                    $150,000<br />
                </p>
            </div>
            <div class="favoriteHomeContainer card">
                <img src="http://placehold.it/350x300" style="height: 300px; width: 100%; display: block;" alt="Beautiful Home 6" />
                <p class="home-card-text">
                    Beautiful home 6.......<br />
                    12345 NW 3rd St, Orlando, FL 32816<br />
                    $150,000<br />
                </p>
            </div>
        </div>
    </div>
    <!-- /Favorite Listings -->

    <!-- Footer and Contact Block  -->
    <div class="footerContactBlock">
        <!-- Load footer -->
        <?php include "footer.php"; ?>
    </div>
    <!-- /Footer and Contact Block -->

    <!-- To Site Top  -->
    <a href="#" class="toSiteTop hidden">
        <i class="fa fa-angle-up toSiteTopHover" aria-hidden="true"></i>
    </a>
    <!-- /To Site Top -->
</div>
<!-- /Main Container -->

<!-- Site JavaScripts  -->
<?php include "includes/scripts.html"; ?>
<!-- /Site JavaScripts -->

</body>
</html>

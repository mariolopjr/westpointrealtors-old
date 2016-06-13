<?php
// Author: Mario Lopez

// Software loader, sets up the database connection, and important functions
require_once dirname ( __FILE__ ) . "/loader.php";

$pageTitle = "$applicationName - Main";

require_once WEB_ROOT . "includes/favoriteHouses.php";
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
        <?=$favoriteHouses ["houses"] [ "house0" ] ["html"]?>
        <?=$favoriteHouses ["houses"] [ "house1" ] ["html"]?>
        <?=$favoriteHouses ["houses"] [ "house2" ] ["html"]?>
        <?=$favoriteHouses ["houses"] [ "house3" ] ["html"]?>
        <?=$favoriteHouses ["houses"] [ "house4" ] ["html"]?>
        <?=$favoriteHouses ["houses"] [ "house5" ] ["html"]?>
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
    <?=$favoriteHouses ["houses"] [ "house0" ] ["js"]?>
    <?=$favoriteHouses ["houses"] [ "house1" ] ["js"]?>
    <?=$favoriteHouses ["houses"] [ "house2" ] ["js"]?>
    <?=$favoriteHouses ["houses"] [ "house3" ] ["js"]?>
    <?=$favoriteHouses ["houses"] [ "house4" ] ["js"]?>
    <?=$favoriteHouses ["houses"] [ "house5" ] ["js"]?>
});
</script>
</body>
</html>

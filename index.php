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
        <?php for ( $i = 1; $i <= count ( $favoriteHouses ["houses"] ); $i++ ) {
            echo $favoriteHouses ["houses"] [ "house$i" ] ["html"];
        } ?>
    </div>
</div>
<!-- /Favorite Listings -->

<!-- Load footer -->
<?php include WEB_ROOT . "footer.php"; ?>

<!-- Site JavaScript  -->
<?php require_once WEB_ROOT . "includes/js.php"; ?>
<!-- /Site JavaScript -->

<script>
$(document).ready(function() {
    <?php for ( $i = 1; $i <= count ( $favoriteHouses ["houses"] ); $i++ ) {
            echo $favoriteHouses ["houses"] [ "house$i" ] ["js"];
    } ?>
});
</script>
</body>
</html>

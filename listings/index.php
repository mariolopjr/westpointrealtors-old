<?php

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

$pageTitle = "$applicationName - Listings";

$listProperties = $_SERVER['QUERY_STRING'] == "" ? true : false;

if ( $listProperties ) {
    require_once WEB_ROOT . "includes/listProperties.php";
}

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
<?php include WEB_ROOT . "header.php"; ?>
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

<?php if ( $listProperties ) { ?>
<div class="table-responsive">
    <table class="table table-striped footable footable-loaded" data-filter="#filter" data-page-size="10" data-page-previous-text="prev" data-page-next-text="next">
        <thead>
            <tr>
                <th class="houseAddress">Address</th>
                <th class="housePrice">Price</th>
                <th class="bedBathGarage">Bd/Ba/Ga</th>
                <th class="homeSize">Home Size</th>
                <th class="lotSize">Lot Size</th>
                <th class="year" data-breakpoints="xs">Year</th>
                <th>List Date</th>
            </tr>
        </thead>
        <tbody>
            <?=$houseListings?>
        </tbody>
    </table>
</div>
<?php } ?>

<a href="#" class="center-block to-top">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
</a>

</div>

<!-- Footer  -->
<div class="footerContactBlock">
    <!-- Load footer -->
    <?php include WEB_ROOT . "footer.php"; ?>
</div>
<!-- /Footer -->

<!-- Site JavaScript  -->
<?php require_once WEB_ROOT . "includes/js.php"; ?>
<!-- /Site JavaScript -->

<script type="text/javascript">
	$(function () {
		$('.footable').footable();
	});
</script>

</body>
</html>

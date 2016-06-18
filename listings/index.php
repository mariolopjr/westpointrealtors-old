<?php

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

$pageTitle = "$applicationName - Listings";

$query = "";
$listPropertiesSearch = false;
$listProperties = $_SERVER [ "QUERY_STRING" ] == "" ? true : false;
if ( stripos ( $_SERVER [ "QUERY_STRING" ], "search=" ) !== false ) {
    $listProperties = true;
    $listPropertiesSearch = true;
    $query = $_GET [ "search" ];
}

if ( $listProperties ) {
    require_once WEB_ROOT . "includes/listProperties.php";
} else {
    require_once WEB_ROOT . "includes/viewProperty.php";
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

<?=$houseCSS?>

</head>
<body>

<!-- Site Header  -->
<?php include WEB_ROOT . "header.php"; ?>
<!-- /Site Header -->

<div class="container">

<?php if ( $listProperties ) { ?>
<section class="jumbotron text-xs-center">
    <h1 class="jumbotron-heading">West Point Real Estate</h1>
    <p class="lead text-muted">
        The BEST for our customers, period.
    </p>
    <br />
    <br />
    <br />
</section>

<div class="table-responsive">
    <table class="table table-striped footable footable-loaded" data-filtering="true" data-sorting="true" data-paging="true" data-paging-size="10">
        <thead>
            <tr>
                <th class="footable-first-column" data-type="html" data-sortable="false" data-filterable="false">View</th>
                <th class="houseAddress">Address</th>
                <th class="housePrice">Price</th>
                <th class="bedBathGarage">Bd/Ba/Ga</th>
                <th class="homeSize">Home Size</th>
                <th class="lotSize">Lot Size</th>
                <th class="footable-sorted year" data-breakpoints="xs">Year</th>
                <th class="footable-last-column footable-sortable" data-sort-initial="true" data-type="date" data-format-string="YYYY-MM-DD">List Date</th>
            </tr>
        </thead>
        <tbody>
            <?=$houseListings?>
        </tbody>
    </table>
</div>
<?php } else { ?>
<?=$house?>
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

<?php
if ( $listPropertiesSearch ) { ?>
        $("#searchField").val("<?=$query?>");
        $("body > div.container > div > table > thead > tr.footable-filtering > th > form > div > div > input").val("<?=$query?>");
        $("body > div.container > div > table > thead > tr.footable-filtering > th > form > div > div > div > button.btn.btn-primary").click();
<?php } ?>
	});
</script>

<?=$houseJS?>

</body>
</html>

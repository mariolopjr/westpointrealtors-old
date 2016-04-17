<?php

// Grabs the URL stub
$currentPage = $_SERVER [ "REQUEST_URI" ];

// Sets the active li class for the sidebar menu depending on what page you are in
$class = " class=\"active\"";
$sr    = " <span class=\"sr-only\">(current)</span>";

// Sets all class and sr values as empty
$overviewClass       = "";
$overviewSR          = "";
$exportClass         = "";
$exportSR            = "";
$reportsClass        = "";
$reportsSR           = "";
$userManagementClass = "";
$userManagementSR    = "";

switch ( $currentPage ) {
    case "/administrator/":
        $overviewClass = $class;
        $overviewSR    = $sr;
        break;

    case "/administrator/export.php":
        $exportClass = $class;
        $exportSR    = $sr;
        break;

    case "/administrator/reports.php":
        $reportsClass = $class;
        $reportsSR    = $sr;
        break;

    case "/administrator/userManagement.php":
        $userManagementClass = $class;
        $userManagementSR    = $sr;
        break;

    default:
        $overviewClass = $class;
        $overviewSR    = $sr;
        break;
}

?>

<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li<?=$overviewClass?>><a href="/administrator">Overview<?=$overviewSR?></a></li>
        <li<?=$reportsClass?>><a href="/administrator/reports.php">Reports<?=$reportsSR?></a></li>
        <li<?=$exportClass?>><a href="/administrator/export.php">Export<?=$exportSR?></a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li<?=$userManagementClass?>><a href="/administrator/userManagement.php">User Management<?=$userManagementSR?></a></li>
    </ul>
</div>

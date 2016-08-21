<?php
$adminMenuItem = "";

$adminLoggedIn = array_key_exists("accessLevel", $_SESSION) ? $_SESSION["accessLevel"] : "0";

if ( $adminLoggedIn == 1 ) {
    $adminMenuItem =
        "<li class=\"nav-item\">" .
        "<a class=\"nav-link\" href=\"/administrator\">Administrator</a>" .
        "</li>\r\n";
}
$applicationVersion = techmunchies\functions\loadData ( TBL_SETTINGS, "applicationVersion" );


// Grabs the URL stub
$currentPage = $_SERVER [ "REQUEST_URI" ];

// Active and SR classes text
$active = " bg-success active";
$sr     = ' <span class="sr-only">(current)</span>';

// Sets active and sr classes
$homeActive     = $currentPage == "/" ? $active : "";
$homeSR         = $currentPage == "/" ? $sr : "";
$listingsActive = stripos ( $currentPage, "/listings/" ) !== false ? $active : "";
$listingsSR     = stripos ( $currentPage, "/listings/" ) !== false ? $sr : "";
$formsActive    = stripos ( $currentPage, "/forms/" )    !== false ? $active : "";
$formsSR        = stripos ( $currentPage, "/forms/" )    !== false ? $sr : "";

?>

<div class="navbar-collapse collapse inverse" id="contact-header">
    <div class="container-fluid">
        <div class="contact-info">
            <h4>Contact Information</h4>
            <p class="text-muted">
                Yani Pilar - Office Manager<br />
                Broker &amp; Real Estate Agent<br />
                Phone: (352) 462-0414<br />
                Toll Free: 1 (800) 418-4261<br />
            </p>
        </div>
        <div class="affiliates">
            <h4>Affiliates</h4>
            <ul class="list-unstyled">
                <li><img src="../img/sageLogo.png" alt="Sage Acquisitions Logo" /></li>
            </ul>
        </div>
    </div>
</div>
<nav class="navbar navbar-light bg-faded navbar-static-top">
    <div style="transform: matrix(1, 0, 0, 1, 0, -62);"></div>
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
      &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="navbar-header">
        <a class="navbar-brand" href="" data-toggle="collapse" data-target="#contact-header">| | |</a>
        <ul class="nav navbar-nav nav-pills">
            <li class="nav-item">
                <a class="nav-link<?=$homeActive?>" href="/">Home<?=$homeSR?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?=$listingsActive?>" href="/listings/">Listings<?=$listingsSR?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?=$formsActive?>" href="/forms/">Forms<?=$formsSR?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-toggle="collapse" data-target="#contact-header">Contact</a>
            </li>
            <form class="form-inline pull-xs-right" action="/listings/" method="get">
              <input id="searchField" name="search" class="form-control" type="text" placeholder="Search Address">
              <button class="btn btn-success-outline" type="submit">Search</button>
            </form>
        </ul>
    </div>
</nav>

<?php
$adminMenuItem = "";
if ( isset ( $_SESSION [ "accessLevel" ] ) && $_SESSION [ "accessLevel" ] >= 2 ) {
    $adminMenuItem =
        "                <li><a href=\"/administrator\">Administrator</a></li>\r\n";
}
$applicationVersion = techmunchies\functions\loadData ( TBL_SETTINGS, "applicationVersion" );
?>

<nav class="siteHeader">
    <div class="siteNavBG" style="transform: matrix(1, 0, 0, 1, 0, -62);"></div>
    <div class="siteNav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?=$applicationName?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <?=$adminMenuItem?>
                <li><a href="" data-toggle="modal" data-target="#aboutModal">About</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                <ul class="dropdown-menu">
                    <ul class="list-inline">
                        <li><a href="/settings.php">Settings</a></li>
                        <li><a href="/logout.php">Logout</a></li>
                    </ul>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/settings.php">Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/logout.php">Logout</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="aboutModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="aboutModalTitle" class="modal-title">About</h4>
            </div>
            <div id="aboutModalContent" class="modal-body">
                <p style="text-align: center;">Version: <?=$applicationVersion?></p>
                <br />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

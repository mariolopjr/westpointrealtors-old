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
?>

<nav class="navbar navbar-light bg-faded navbar-static-top">
    <div style="transform: matrix(1, 0, 0, 1, 0, -62);"></div>
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
      &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="navbar-header">
        <a class="navbar-brand" href="/">| | |</a>
        <ul class="nav navbar-nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <form class="form-inline pull-xs-right">
              <input class="form-control" type="text" placeholder="Search Address">
              <button class="btn btn-success-outline" type="submit">Search</button>
            </form>
        </ul>
    </div>
</nav>

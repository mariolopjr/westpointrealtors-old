<?php
// Author: Mario Lopez

// Software loader, sets up the database connection, and important functions
require_once dirname ( dirname ( __FILE__ ) ) . "/loader.php";

// Checks to see if user is logged in
if ( !isset ( $_SESSION [ "accessLevel" ] ) || !$_SESSION [ "accessLevel" ] >= 2 ) {
    header ( "Location: /403.html" );
    exit;
}

$pageTitle = "$applicationName - Administrator Main";
?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$pageTitle?></title>

<!-- Bootstrap CSS 3.3.6 -->
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/css/theme.css">
<link rel="stylesheet" href="/css/dashboard.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Load header -->
<?php include WEB_ROOT . "header.php"; ?>
    
<div class="container-fluid">
    <?php include WEB_ROOT . "administrator/sidebar.php"; ?>
    
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Reports</h1>

          <h2 style="text-align: center;">NOT IMPLEMENTED YET</h2>

        </div>
</div>

<!-- Load footer -->
<?php include WEB_ROOT . "footer.php"; ?>

<!-- jQuery JavaScript 1.12.0 -->
<script src="/js/jquery.min.js"></script>

<!-- jQuery JSON JavaScript 2.5.1 -->
<script src="/js/jquery.json.min.js"></script>

<!-- Bootstrap JavaScript 3.3.6 -->
<script src="/js/bootstrap.min.js"></script>

<!-- Bootstrap Select JavaScript 1.10.0 -->
<script src="/js/bootstrap-select.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

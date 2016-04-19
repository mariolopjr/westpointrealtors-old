<?php
// Author: Mario Lopez

// Software loader, sets up the database connection, and important functions
require_once dirname ( __FILE__ ) . "/loader.php";

$pageTitle = "$applicationName - Main";
?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$pageTitle?></title>

<!-- Bootstrap CSS 3.3.6 -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/theme.css">

<!-- Bootstrap Select CSS 1.10.0 -->
<link rel="stylesheet" href="css/bootstrap-select.min.css">

<!-- Bootstrap Date Time Picker CSS 4.17.37 -->
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

<!-- Index CSS -->
<link rel="stylesheet" href="css/index.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Load header -->
<?php include "header.php"; ?>

<div class="container-fluid">
    <div class=""><img src"" class"" alt="Home is where the heart is">
</div>

<!-- Load footer -->
<?php include "footer.php"; ?>

<!-- jQuery JavaScript 1.12.0 -->
<script src="js/jquery.min.js"></script>

<!-- jQuery JSON JavaScript 2.5.1 -->
<script src="js/jquery.json.min.js"></script>

<!-- Bootstrap JavaScript 3.3.6 -->
<script src="js/bootstrap.min.js"></script>

<!-- Bootstrap Select JavaScript 1.10.0 -->
<script src="js/bootstrap-select.min.js"></script>

<!-- Bootstrap Date Time Picker JavaScript 2.12.0 -->
<script src="js/moment.min.js"></script>

<!-- Bootstrap Date Time Picker JavaScript 4.17.37 -->
<script src="js/bootstrap-datetimepicker.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

<!-- Index JS -->
<script src="js/index.js"></script>

</body>
</html>

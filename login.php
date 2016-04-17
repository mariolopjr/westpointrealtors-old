<?php
// Author: Mario Lopez

// Software loader, sets up the database connection, and important functions
require_once dirname ( __FILE__ ) . "/loader.php";

$errorContainer = "";

$inputUsername = array_key_exists ( "inputUsername", $_POST ) ? $_POST [ "inputUsername" ] : false;

// Checks to see if login form was submitted
if ( $inputUsername ) {

    // Authenitcate the user into the app
	if(  ) {
		header("Location: /");
		exit;
	} else {
		// Authentication failed
        $errorContainer =
        '    <div class="alert alert-danger">' .
        '        <strong><span id="error-bold">' . 'ERROR: ' . '</span></strong><span id="error-text">' . $error . '</span>' .
        '    </div>';
        error_log( $error );
	}
}

$pageTitle = "$applicationName - Login";
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
<link rel="stylesheet" href="css/signin.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div class="container">
    <div class="hidden" id="info"></div>
    <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="username" id="inputUsername" name="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>

<!-- Load footer -->
<?php include "footer.php"; ?>

<!-- jQuery JavaScript 1.12.0 -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap JavaScript 3.3.6 -->
<script src="js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

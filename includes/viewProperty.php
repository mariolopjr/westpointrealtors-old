<?php

// Grabs values from GET data
$address = $_GET [ "address" ];
$test = "<p>This is a test: $address</p>";

error_log ($test);

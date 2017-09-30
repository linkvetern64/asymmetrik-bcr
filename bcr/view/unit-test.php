<?php
/**
 * Created by:
 * User: Josh
 */
session_start();
require_once(dirname(__FILE__) . '/../load.php');

$BCR = new BusinessCardReader();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Business Card Parser">
    <meta name="author" content="Joshua Standiford">

    <title>Business Card Parser</title>

    <!-- Distinct CSS -->
    <link rel="stylesheet" href="css/unit-test.css" type="text/css" media="screen">
</head>
<body>

<hr>
<footer style="text-align:center;font-size:.8em;">
    <p>Created By: Joshua Standiford</p>
</footer>


<!-- Load scripts at the end -->
<script src="js/example-library.js"></script>
<script src="js/ajax-library.js"></script>
</body>
</html>

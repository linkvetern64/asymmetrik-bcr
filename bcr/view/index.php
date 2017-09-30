<?php
/**
 * Created by:
 * User: Josh
 */
require_once(dirname(__FILE__) . '/../load.php');

$BCR = new BusinessCardParser();

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

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Distinct CSS -->
    <!--<link href="css/styles.css" type="text/css" rel="stylesheet">-->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- AJAX Prototype Import -->
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
</head>
<body>

<!-- Title of page -->
<div id="pageTitle">Business Card Parser</div>

<br />
<div id="info-box"></div>

<!-- Display Content -->
<div id="container">
    <!-- Input area for business card text to be parsed -->
    <textarea id="input-box" class="box" placeholder="Business Card Text Here..."></textarea>

    <div id="symbol"><span id="center-symbol" class="glyphicon glyphicon-chevron-right"></span></div>

    <!-- Output box for parsed text -->
    <div id="output-box" class="box"></div>
    <div id="parse-box"><button class="btn btn-danger" onclick="parseCard();">Parse</button></div>

    <div id="button-footer">
        <button class="btn btn-success" onclick="loadExample(0);" onmouseover="showExample(0);" onmouseout="hideExample();">Example 1</button>
        <button class="btn btn-success" onclick="loadExample(1);" onmouseover="showExample(1);" onmouseout="hideExample();">Example 2</button>
        <button class="btn btn-success" onclick="loadExample(2);" onmouseover="showExample(2);" onmouseout="hideExample();">Example 3</button>
        <br />
        <span style="font-size:.8em;">Hover over button for details.  Click to load example</span>
        <br />
    </div>
</div>

<hr>
<footer style="text-align:center;font-size:.8em;">
   <div id="test-message">Tested with unit-tests found here.  <a href="unit-test.php">Unit Tests</a>
   </div>
</footer>


<!-- Load scripts at the end -->
<script src="js/example-library.js"></script>
<script src="js/ajax-library.js"></script>
</body>
</html>
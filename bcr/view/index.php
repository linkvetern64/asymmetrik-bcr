<?php
/**
 * Created by:
 * User: Josh
 */
session_start();
require_once(dirname(__FILE__) . '/../load.php');
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
    <link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">jQuery.noConflict();</script>
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>

    <!-- Boostrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        //var JQ = $.noConflict(); //Need JQUERY.NOCONFLICT();  Otherwise prototypes methods will be overwritten
        jQuery(function ($) {
            // The dollar sign will equal jQuery in this scope
            //Loads JSON data on browser load
            $(window).on("load", function () {

            });
        });
    </script>
</head>
<body>

<!-- Title of page -->
<div id="pageTitle">Business Card Parser Program</div>
<br />

<!-- Display Content -->
<div id="container">
    <textarea id="input-box" class="box" placeholder="Business Card Text Here..."></textarea>

    <div id="symbol"><span class="glyphicon glyphicon-chevron-right" style="font-size:3em;"></span></div>

    <div id="output-box" class="box"></div>

    <div id="button-footer">
        <button class="btn btn-success">Example 1</button>
        <button class="btn btn-success">Example 2</button>
        <button class="btn btn-success">Example 3</button>
        <br />
        <span style="font-size:.8em;">Hover over button for details</span>
    </div>
</div>

<hr>
<footer style="text-align:center;font-size:.8em;">
    <p>Created By: Joshua Standiford</p>
</footer>


<!-- Load scripts at the end -->

</body>
</html>
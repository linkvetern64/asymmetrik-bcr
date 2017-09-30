<?php
/**
 * @author: Josh
 * @date: 9/29/2017
 * @desc
 * This file is the page used for AJAX output.  The input from $_GET
 * is sanitized in case the data will ever enter a database.  Then an instance
 * of the BusinessCardParser class is instanciated.  the sanitized document
 * is then sent into the instance of BusinessCardParser for parsing and
 * creation of an instance of ContactInfo.  Once finished, that instance
 * of Contact info is returned here.  That instance of ContactInfo then
 * converts itself to JSON and gets sent back to ajax-library.js as JSON.
 */
require_once(dirname(__FILE__) . '/../load.php');

//filter the inputs before they're sent to the classes for parsing.
$document = Sanitizer::sanitize($_GET["input"], NULL);

$BCR = new BusinessCardParser();
//The method getContactInfo returns a new ContactInfo class.
$contact = $BCR->getContactInfo($document);

//Sends the responseText to ajax-library.js for page-loading.
echo $contact->toJSON();
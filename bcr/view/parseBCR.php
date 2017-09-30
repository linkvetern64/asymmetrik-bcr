<?php
/**
 * Created by IntelliJ IDEA.
 * User: Josh
 * Date: 9/29/2017
 * Time: 9:05 PM
 */
require_once(dirname(__FILE__) . '/../load.php');

//filter the inputs before they're sent to the classes for parsing.
$document = Sanitizer::sanitize($_GET["input"], NULL);

$BCR = new BusinessCardReader();

//The method getContactInfo returns a new ContactInfo class.
$contact = $BCR->getContactInfo($document);

echo $contact->toJSON();
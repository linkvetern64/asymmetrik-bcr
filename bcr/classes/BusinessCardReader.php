<?php
/**
 * @author Josh Standiford
 * @date 9/29/2017
 * @invariants
 * @desc This class will parse business cards for specific user data
 */
require_once("ContactInfo.php");

class BusinessCardReader
{
    /**
     * BusinessCardReader constructor.
     */
    function __construct(){
    }

    function makeContact(){
        $contact = new ContactInfo();
        return $contact;
    }
}
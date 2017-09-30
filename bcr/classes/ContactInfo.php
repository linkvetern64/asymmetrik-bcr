<?php
/**
 * @author Josh
 * @date 9/29/2017
 * @desc
 * ContactInfo is a class which holds the contact info of parsed business cards
 */
class ContactInfo
{

    var $name;
    var $phone;
    var $email;
    /**
     * ContactInfo constructor.
     */
    function __construct($name, $phone, $email){
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @return String - The name of the card owner
     */
    function getName(){
        return $this->name;
    }

    /**
     * @return mixed - The number of the card owner
     */
    function getPhoneNumber(){
        return $this->phone;
    }

    /**
     * @return mixed - the email address from the card owner
     */
    function getEmailAddress(){
        return $this->email;
    }

    /**
     * @return string - Returns a formatted string
     * containing the data from this instance of ContactInfo.
     */
    function toString(){

        $string = "Name: " . $this->name . "\n" .
                  "Phone: " . $this->phone . "\n" .
                  "Email: " . $this->email;

        return $string;
    }

    /**
     * @return string - a JSON encoded string using the member
     * variables of this object.
     */
    function toJSON(){
        return json_encode(get_object_vars($this));
    }
}
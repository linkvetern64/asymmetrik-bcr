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
        if ($name === NULL || $phone === NULL || $email === NULL) {
            throw new Exception('NULL Parameter');
        }
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
     * @return mixed - The number of the 
     */
    function getPhoneNumber(){
        return $this->phone;
    }

    function getEmailAddress(){
        return $this->email;
    }


    function toString(){

        $string = "Name: " . $this->name . "\n" .
                  "Phone: " . $this->phone . "\n" .
                  "Email: " . $this->email;

        return $string;
    }

    function toJSON(){
        return json_encode(get_object_vars($this));
    }
}
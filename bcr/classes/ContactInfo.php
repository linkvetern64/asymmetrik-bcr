<?php
/**
 * @author Josh
 * @date 9/29/2017
 */
class ContactInfo
{

    var $name;
    var $number;
    var $email;
    /**
     * ContactInfo constructor.
     */
    function __construct($name, $number, $email){
        $this->name = $name;
        $this->number = $number;
        $this->email = $email;
    }

    function getName(){
        return $this->name;
    }

    function getNumber(){
        return $this->number;
    }

    function getEmail(){
        return $this->email;
    }
}
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

    /**
     * @name getContactInfo
     * @preconditions: The param $document will come in pre-sanitized with htmlspecialcharacters() and
     *                  any additional filter flags you may specify.
     * @param $document - The
     * @return mixed
     */
    public function getContactInfo($document){
        //split the document by return or new line escape sequence into array.
        $data = preg_split("/((\r?\n)|(\r\n?))/", $document);

        $email = $this->parseEmail($data);
        $name = "";
        $phone = "";
        return $email;
    }

    /**
     * @param $data - array containing the lines of the processed document
     * @return mixed - String is returned containing email if a valid email is found.
     *                 Otherwise NULL is returned.
     * @desc
     * This function searches for a valid email address within the lines of data passed into parseEmail
     */
    public function parseEmail($data){
        $email = NULL;

        foreach($data as $line){
            //Searches the lines for a valid email address
            if (filter_var($line, FILTER_VALIDATE_EMAIL)) {
                $email = $line;
                break;
            }
        }
        return $email;
    }

    public function parsePhone($data){
        //filter lines that contain these phrases
        $phone = "";

        foreach($data as $line){
            if (strpos($line, 'fax') !== false) {
                continue;
            }
        }
    }
}
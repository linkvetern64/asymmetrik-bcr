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
        $data = explode("\n", $document);

        $email = $this->parseEmail($data);
        $name = $this->parseName($data, $email);
        $phone = $this->parsePhone($data);
        return new ContactInfo($name, $phone, $email);
    }

    /**
     * @param $data - array containing the lines of the processed document
     * @return mixed - String is returned containing email if a valid email is found.
     *                 Otherwise NULL is returned.
     * @desc
     * This function searches for a valid email address within the lines of data passed into parseEmail
     */
    public function parseEmail($data){

        foreach($data as $line){
            //Searches the lines for a valid email address
            if (filter_var($line, FILTER_VALIDATE_EMAIL)) {
                return $line;
            }
        }
        return NULL;
    }

    /**
     * @name parsePhone
     * @param $data - array containing the lines of the processed document
     * @return mixed|string
     */
    public function parsePhone($data){
        //filter lines that contain these phrases
        foreach($data as $line){
            // Check line for fax number instead and skip that line.
            if (strpos(strtolower($line), 'fax') !== false) {
                continue;
            }

            $line = preg_replace('/[^0-9]/', '', $line);
            if(strlen($line) >= 10){
                return $line;
            }
        }
        return NULL;
    }

    /**
     * @param $data
     * @param $email
     * @return String | Null - A string is returned if a name is found, otherwise NULL is returned.
     * @desc
     * A known issue of this function is that if the email does not contain name identifying characteristics
     * it has to make an informed guess. The way in which it guesses relies on the assumption that only a first name
     * and last name are listed on the card.  This will eliminate all exploded string arrays greater than size 2.
     * if any line contains numbers or symbols that line is also thrown away.
     */
    public function parseName($data, $email){
        $name = NULL;

        //Want to return string before the '@' in the email.
        $context = explode("@", $email)[0];

        foreach($data as $line){
            //This pulls what could be the last name from the exploded string.
            $guess = array_map('trim', explode(' ', $line))[1];
            if (stripos($context, $guess) !== false) {
                return $line;
            }
        }

        //If a name is not found above, then informed guessing begins.


    }
}
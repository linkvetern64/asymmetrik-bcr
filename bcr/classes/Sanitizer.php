<?php
/**
 * Created by IntelliJ IDEA.
 * User: Josh
 * @desc
 * Static public class used to sanitize data coming from user input.
 */

/**
 * Class Sanitizer
 */
 class Sanitizer
{
     /**
      * Sanitizer constructor.
      */
    public function __construct(){

    }

     /**
      * @name sanitize
      * @param $data - The "dirty" string being passed in which needs sanitizing
      * @param $flag - Php flag for function filter_var to be passed in by user. See
      *                  http://php.net/manual/en/filter.filters.sanitize.php for valid flags.
      *                 Use NULL if you want the basic sanitation.
      *
      * @return $data - String. the sanitized parameter
      * @desc
      * This static function will strip the input of special characters.  Attempting to thwart XSS attacks and potential
      * SQL injections if the data were to ever make its way into a database.
      */
    public static function sanitize($data, $flag){
        $data = htmlspecialchars($data);

        if($flag != NULL){
            $data = filter_var($data, $flag);
        }

        return $data;
    }
}
<?php

/**
 * Class Validate
 * Contains the validation methods for my app
 * @author Michael Gulchuk
 * @version 1.0
 */
class Validate
{
    /** Return a value indicating if name parameter is valid
     * Valid names are not empty and do not contain anything except letters
     * @param $name
     * @return string
     */
    function validName($name){
        $name = str_replace(' ', '', $name);
        return !empty($name) && ctype_alpha($name) ;
    }

    /** Return a value indicating if age is valid
     * Valid age is above 18 and less than 118
     * @param $age
     * @return boolean
     */
    function validAge($age){
        return !empty($age) && is_numeric($age) && ($age >= 18 && $age <= 118);
    }

    /** Return a value indicating if phone number matches pattern
     * @param $num
     * @return boolean
     */
    function validPhone($num){
        return !empty($num) && preg_match('/^\d{10}$/', $num);
    }

    /** Return a value indicating if email number matches pattern
     * @param $email
     * @return boolean
     */
    function validEmail($email){
        return !empty($email) && !preg_match("/^[a-zA-Z ]*$/",$email);
    }

}